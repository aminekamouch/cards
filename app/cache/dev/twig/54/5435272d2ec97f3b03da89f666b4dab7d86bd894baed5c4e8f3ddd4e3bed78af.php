<?php

/* @Twig/Exception/error.rdf.twig */
class __TwigTemplate_9d3f8f1a7e008d031409981be3a3a9393b63d6c03483a95b6b2a36354c93011f extends Twig_Template
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
        $__internal_6f77b7f0a428b16887c673769aee4bf046ae29eafdab12d100a9a296f2a2ec30 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f77b7f0a428b16887c673769aee4bf046ae29eafdab12d100a9a296f2a2ec30->enter($__internal_6f77b7f0a428b16887c673769aee4bf046ae29eafdab12d100a9a296f2a2ec30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.rdf.twig", 1)->display($context);
        
        $__internal_6f77b7f0a428b16887c673769aee4bf046ae29eafdab12d100a9a296f2a2ec30->leave($__internal_6f77b7f0a428b16887c673769aee4bf046ae29eafdab12d100a9a296f2a2ec30_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.rdf.twig";
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
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "@Twig/Exception/error.rdf.twig", "C:\\Program Files\\EasyPHP-DevServer-14.1VC11\\data\\localweb\\projects\\symfony\\ositel\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.rdf.twig");
    }
}
