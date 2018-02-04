<?php

/* :default:index.html.twig */
class __TwigTemplate_48f40d1565e6ba3eec1002477476117e0b686bcffc8cd7059ca4b8f49533d85b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":default:index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "        <div class=\"container\">
          <h1 class=\"display-3\">Test Ositel</h1>
         <div class=\"row\">
         <div class=\"col-md-6\">
\t\t <h3>Liste des cartes tir&eacute;es :</h3>
\t\t\t <table class=\"table table-sm\">
\t\t\t\t  <thead>
\t\t\t\t\t<tr>
\t\t\t\t\t  <th scope=\"col\">Category</th>
\t\t\t\t\t  <th scope=\"col\">Value</th>
\t\t\t\t\t</tr>
\t\t\t\t  </thead>
\t\t\t\t  <tbody>
\t\t\t\t\t";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["cards"]) ? $context["cards"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["card"]) {
            // line 19
            echo "\t\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["card"], "category", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["card"], "value", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['card'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "\t\t\t\t </tbody>
\t\t   </table>
\t   </div>
\t   <div class=\"col-md-3\">
\t\t\t <table class=\"table table-sm\">
\t\t\t\t  <thead>
\t\t\t\t\t<tr>
\t\t\t\t\t  <th scope=\"col\">Order Category</th>
\t\t\t\t\t</tr>
\t\t\t\t  </thead>
\t\t\t\t  <tbody>
\t\t\t\t\t";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["categorie"]) {
            // line 36
            echo "\t\t\t\t\t\t<tr>
\t\t\t\t\t\t  <td>";
            // line 37
            echo twig_escape_filter($this->env, $context["categorie"], "html", null, true);
            echo "</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categorie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "\t\t\t\t </tbody>
\t\t   </table>
\t   </div>
\t   <div class=\"col-md-3\">
\t\t\t <table class=\"table table-sm\">
\t\t\t\t  <thead>
\t\t\t\t\t<tr>
\t\t\t\t\t  <th scope=\"col\">Order Values</th>
\t\t\t\t\t</tr>
\t\t\t\t  </thead>
\t\t\t\t  <tbody>
\t\t\t\t\t";
        // line 51
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["values"]) ? $context["values"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
            // line 52
            echo "\t\t\t\t\t\t<tr>
\t\t\t\t\t\t  <td>";
            // line 53
            echo twig_escape_filter($this->env, $context["value"], "html", null, true);
            echo "</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "\t\t\t\t </tbody>
\t\t   </table>
\t   </div>
\t\t </div>
\t\t <div class=\"row\">
         <div class=\"col-md-12\">
\t\t   <h3>Liste des cartes tri&eacute;es :</h3>
\t\t\t <table class=\"table table-sm\">
\t\t\t\t  <thead>
\t\t\t\t\t<tr>
\t\t\t\t\t  <th scope=\"col\">Category</th>
\t\t\t\t\t  <th scope=\"col\">Value</th>
\t\t\t\t\t</tr>
\t\t\t\t  </thead>
\t\t\t\t  <tbody>
\t\t\t\t\t";
        // line 71
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["sortedcards"]) ? $context["sortedcards"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["card"]) {
            // line 72
            echo "\t\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>";
            // line 73
            echo twig_escape_filter($this->env, $this->getAttribute($context["card"], "category", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td>";
            // line 74
            echo twig_escape_filter($this->env, $this->getAttribute($context["card"], "value", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['card'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 77
        echo "\t\t\t\t </tbody>
\t\t   </table>
\t\t </div>
\t\t 
\t\t </div>
\t\t <div class='col-md-12'>
\t\t\t\t   ";
        // line 83
        if (((isset($context["result"]) ? $context["result"] : null) == 200)) {
            // line 84
            echo "\t\t\t\t\t<div class=\"alert alert-success\" role=\"alert\">
\t\t\t\t\t  <strong>Correcte !! </strong>Les cartes ont &eacute;t&eacute; bien tri&eacute;es !
\t\t\t\t\t</div>\t
\t\t\t\t\t\t
\t\t\t\t\t";
        } elseif ((        // line 88
(isset($context["result"]) ? $context["result"] : null) == 406)) {
            // line 89
            echo "\t\t\t\t\t\t<div class=\"alert alert-warning\" role=\"alert\">
\t\t\t\t\t\t  <strong>Oops !! </strong>trie non corercte !
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<h3>Solution :</h3>
\t\t\t <table class=\"table table-sm\">
\t\t\t\t  <thead>
\t\t\t\t\t<tr>
\t\t\t\t\t  <th scope=\"col\">Category</th>
\t\t\t\t\t  <th scope=\"col\">Value</th>
\t\t\t\t\t</tr>
\t\t\t\t  </thead>
\t\t\t\t  <tbody>
\t\t\t\t\t";
            // line 101
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["resultbody"]) ? $context["resultbody"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["card"]) {
                // line 102
                echo "\t\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>";
                // line 103
                echo twig_escape_filter($this->env, $this->getAttribute($context["card"], "category", array()), "html", null, true);
                echo "</td>
\t\t\t\t\t\t<td>";
                // line 104
                echo twig_escape_filter($this->env, $this->getAttribute($context["card"], "value", array()), "html", null, true);
                echo "</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['card'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 107
            echo "\t\t\t\t </tbody>
\t\t   </table>
\t\t\t";
        } else {
            // line 109
            echo "\t\t\t
\t\t\t\tProbleme survenue lors de la correction !!
\t\t    ";
        }
        // line 111
        echo "\t\t 
\t\t </div>
\t\t</div>
      
";
    }

    public function getTemplateName()
    {
        return ":default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  223 => 111,  218 => 109,  213 => 107,  204 => 104,  200 => 103,  197 => 102,  193 => 101,  179 => 89,  177 => 88,  171 => 84,  169 => 83,  161 => 77,  152 => 74,  148 => 73,  145 => 72,  141 => 71,  124 => 56,  115 => 53,  112 => 52,  108 => 51,  95 => 40,  86 => 37,  83 => 36,  79 => 35,  66 => 24,  57 => 21,  53 => 20,  50 => 19,  46 => 18,  31 => 5,  28 => 4,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", ":default:index.html.twig", "C:\\Program Files\\EasyPHP-DevServer-14.1VC11\\data\\localweb\\projects\\symfony\\ositel\\app/Resources\\views/default/index.html.twig");
    }
}
