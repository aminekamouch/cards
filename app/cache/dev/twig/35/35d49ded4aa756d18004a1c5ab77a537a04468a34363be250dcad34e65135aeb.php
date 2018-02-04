<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_29a8cf1e4211a0defda29cf452be18a8fa1df254a8909f0cf9cec04dd225d56f extends Twig_Template
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
        $__internal_8f59c1ca12b5a8f1dc135ad73854e945cc2c0d930fc48b43cdce70d4c659c25c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f59c1ca12b5a8f1dc135ad73854e945cc2c0d930fc48b43cdce70d4c659c25c->enter($__internal_8f59c1ca12b5a8f1dc135ad73854e945cc2c0d930fc48b43cdce70d4c659c25c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.atom.twig", 1)->display($context);
        
        $__internal_8f59c1ca12b5a8f1dc135ad73854e945cc2c0d930fc48b43cdce70d4c659c25c->leave($__internal_8f59c1ca12b5a8f1dc135ad73854e945cc2c0d930fc48b43cdce70d4c659c25c_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
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
", "@Twig/Exception/error.atom.twig", "C:\\Program Files\\EasyPHP-DevServer-14.1VC11\\data\\localweb\\projects\\symfony\\ositel\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.atom.twig");
    }
}
