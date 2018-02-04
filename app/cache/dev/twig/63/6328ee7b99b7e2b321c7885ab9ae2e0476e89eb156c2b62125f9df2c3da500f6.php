<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_04df6f085f2e47e650a367ca9375441cec261bd940f4755b3cde28a35c169325 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
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
        $__internal_abef093f0020029fff33d794c309624d9524734e49b26eda094792c4db7e777b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_abef093f0020029fff33d794c309624d9524734e49b26eda094792c4db7e777b->enter($__internal_abef093f0020029fff33d794c309624d9524734e49b26eda094792c4db7e777b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_abef093f0020029fff33d794c309624d9524734e49b26eda094792c4db7e777b->leave($__internal_abef093f0020029fff33d794c309624d9524734e49b26eda094792c4db7e777b_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_28399f67fb0a7e62005c5d9a8c0911f659e3727ccf3386d0183efa76975985e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28399f67fb0a7e62005c5d9a8c0911f659e3727ccf3386d0183efa76975985e4->enter($__internal_28399f67fb0a7e62005c5d9a8c0911f659e3727ccf3386d0183efa76975985e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_28399f67fb0a7e62005c5d9a8c0911f659e3727ccf3386d0183efa76975985e4->leave($__internal_28399f67fb0a7e62005c5d9a8c0911f659e3727ccf3386d0183efa76975985e4_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_3407f05b6f4f36a14ff91f657e8821e9d706a6d92d30c57f7361abaa515e5469 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3407f05b6f4f36a14ff91f657e8821e9d706a6d92d30c57f7361abaa515e5469->enter($__internal_3407f05b6f4f36a14ff91f657e8821e9d706a6d92d30c57f7361abaa515e5469_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_3407f05b6f4f36a14ff91f657e8821e9d706a6d92d30c57f7361abaa515e5469->leave($__internal_3407f05b6f4f36a14ff91f657e8821e9d706a6d92d30c57f7361abaa515e5469_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
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
", "@WebProfiler/Profiler/toolbar_redirect.html.twig", "C:\\Program Files\\EasyPHP-DevServer-14.1VC11\\data\\localweb\\projects\\symfony\\ositel\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\toolbar_redirect.html.twig");
    }
}
