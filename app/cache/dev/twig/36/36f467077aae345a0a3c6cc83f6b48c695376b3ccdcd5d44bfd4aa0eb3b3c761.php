<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_f6eaa89047c26b4d78e1dcc7c1a75a5f7cc0c70150d3c27635f6070dc39d5f7c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_444c3c41aeec354c01086beaf208f21f58ca886c6eb5a7968c7fafdfbc15db85 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_444c3c41aeec354c01086beaf208f21f58ca886c6eb5a7968c7fafdfbc15db85->enter($__internal_444c3c41aeec354c01086beaf208f21f58ca886c6eb5a7968c7fafdfbc15db85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_444c3c41aeec354c01086beaf208f21f58ca886c6eb5a7968c7fafdfbc15db85->leave($__internal_444c3c41aeec354c01086beaf208f21f58ca886c6eb5a7968c7fafdfbc15db85_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_5fd99e55fa83e14ca98f900855cc6e2a2d0cfd233f761dece88401cdc70c781b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5fd99e55fa83e14ca98f900855cc6e2a2d0cfd233f761dece88401cdc70c781b->enter($__internal_5fd99e55fa83e14ca98f900855cc6e2a2d0cfd233f761dece88401cdc70c781b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_5fd99e55fa83e14ca98f900855cc6e2a2d0cfd233f761dece88401cdc70c781b->leave($__internal_5fd99e55fa83e14ca98f900855cc6e2a2d0cfd233f761dece88401cdc70c781b_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_132c0b691c93a8347dddc774bf412d37eefb9a30ed404f72b17d03f52385c923 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_132c0b691c93a8347dddc774bf412d37eefb9a30ed404f72b17d03f52385c923->enter($__internal_132c0b691c93a8347dddc774bf412d37eefb9a30ed404f72b17d03f52385c923_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_132c0b691c93a8347dddc774bf412d37eefb9a30ed404f72b17d03f52385c923->leave($__internal_132c0b691c93a8347dddc774bf412d37eefb9a30ed404f72b17d03f52385c923_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "C:\\Program Files\\EasyPHP-DevServer-14.1VC11\\data\\localweb\\projects\\symfony\\ositel\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
