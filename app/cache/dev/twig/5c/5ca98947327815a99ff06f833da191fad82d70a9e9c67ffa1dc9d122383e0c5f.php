<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_6a613aca3fcb3e2eab7ca21a3484a4f8b7f3420b05b81350be46f309b7e9e4da extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_d26cb832d7589aec9697067e6e6b8b034d78773e4b489311baedcd3ff9c8dd35 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d26cb832d7589aec9697067e6e6b8b034d78773e4b489311baedcd3ff9c8dd35->enter($__internal_d26cb832d7589aec9697067e6e6b8b034d78773e4b489311baedcd3ff9c8dd35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d26cb832d7589aec9697067e6e6b8b034d78773e4b489311baedcd3ff9c8dd35->leave($__internal_d26cb832d7589aec9697067e6e6b8b034d78773e4b489311baedcd3ff9c8dd35_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_49a9ac2f4748495cf8dbd41329fa35e6a126e100e826b868ee45bae9145f06aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49a9ac2f4748495cf8dbd41329fa35e6a126e100e826b868ee45bae9145f06aa->enter($__internal_49a9ac2f4748495cf8dbd41329fa35e6a126e100e826b868ee45bae9145f06aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_49a9ac2f4748495cf8dbd41329fa35e6a126e100e826b868ee45bae9145f06aa->leave($__internal_49a9ac2f4748495cf8dbd41329fa35e6a126e100e826b868ee45bae9145f06aa_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_6a7dab4f624225690dc687213944b9eac356d80b64d988b20a310e8de4716d96 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a7dab4f624225690dc687213944b9eac356d80b64d988b20a310e8de4716d96->enter($__internal_6a7dab4f624225690dc687213944b9eac356d80b64d988b20a310e8de4716d96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_6a7dab4f624225690dc687213944b9eac356d80b64d988b20a310e8de4716d96->leave($__internal_6a7dab4f624225690dc687213944b9eac356d80b64d988b20a310e8de4716d96_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_17595b823841e40d42429f66896b2c0202f846370cd5a6539514ff88c4400ac0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17595b823841e40d42429f66896b2c0202f846370cd5a6539514ff88c4400ac0->enter($__internal_17595b823841e40d42429f66896b2c0202f846370cd5a6539514ff88c4400ac0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_17595b823841e40d42429f66896b2c0202f846370cd5a6539514ff88c4400ac0->leave($__internal_17595b823841e40d42429f66896b2c0202f846370cd5a6539514ff88c4400ac0_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
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

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "C:\\Program Files\\EasyPHP-DevServer-14.1VC11\\data\\localweb\\projects\\symfony\\ositel\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
