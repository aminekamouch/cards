<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        $url = "https://recrutement.local-trust.com/test/cards/57187b7c975adeb8520a283c" ;
		
		$client = new \GuzzleHttp\Client();
		$response = $client->request('GET', $url);
        $data = json_decode($response->getBody());
		$ordercategories = $data->data->categoryOrder;
        $ordervalues = $data->data->valueOrder;
        $cards = $data->data->cards;
        $exerciceId = $data->exerciceId;
		$urlTest = "https://recrutement.local-trust.com/test/".$exerciceId;
		$tempdata = array();
		$categories = array();
		$values = array();
		$sortedcards = array();
		$solution = false;
			
			foreach ($cards as  $card) 
			{
				$tempdata[] = array('category' => array_search($card->category,$ordercategories), 'value' => array_search($card->value,$ordervalues));
				$categories[]  = array_search($card->category,$ordercategories);
				$values[] = array_search($card->value,$ordervalues);
			}
			
			
			array_multisort($categories, SORT_ASC, $values, SORT_ASC, $tempdata);
			
			
			foreach($tempdata as $tmp)
			{
			  $sortedcards[] = array('category' => $ordercategories[$tmp['category']], 'value' => $ordervalues[$tmp['value']]);
			  
			}
			
			
			$dataBody = ["cards"=>$sortedcards,"categoryOrder"=>$ordercategories,"valueOrder"=>$ordervalues];
            
			$result = $client->request('POST', $urlTest, [
					'body' => json_encode($dataBody),
					'http_errors' => false
				]);
		
		
		if($result->getStatusCode() == 406)
		  {
		    $solution = json_decode($result->getBody())->cards ;
		  }
		  
		return $this->render('default/index.html.twig', array(
            'cards' => $cards,
            'categories' => $ordercategories,
            'values' => $ordervalues,
            'sortedcards' => $sortedcards,
            'result' => $result->getStatusCode(),
            'resultbody' => $solution,
        ));
    }
}
