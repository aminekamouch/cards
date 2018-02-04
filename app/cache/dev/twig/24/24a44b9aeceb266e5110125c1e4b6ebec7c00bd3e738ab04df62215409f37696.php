<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_d123cc8588f6081aae46e54b7d0008b96b809f7fb759ae7bf440d30cf1f9b8e7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ce848d622acba89f68de03e7ec6ac6f656dae847d4cbe6a9b7f28cddb2dd961a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce848d622acba89f68de03e7ec6ac6f656dae847d4cbe6a9b7f28cddb2dd961a->enter($__internal_ce848d622acba89f68de03e7ec6ac6f656dae847d4cbe6a9b7f28cddb2dd961a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_ce848d622acba89f68de03e7ec6ac6f656dae847d4cbe6a9b7f28cddb2dd961a->leave($__internal_ce848d622acba89f68de03e7ec6ac6f656dae847d4cbe6a9b7f28cddb2dd961a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "C:\\Program Files\\EasyPHP-DevServer-14.1VC11\\data\\localweb\\projects\\symfony\\ositel\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\hidden_row.html.php");
    }
}
