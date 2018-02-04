<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_8f18ed65204337c9bbb1cf8fe020b279998f4a8ca2c06ec8a25534a4d53ff216 extends Twig_Template
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
        $__internal_326c897e806635cb43488f892a392d2a6565beb4783b33fc3e8203d0139d85e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_326c897e806635cb43488f892a392d2a6565beb4783b33fc3e8203d0139d85e4->enter($__internal_326c897e806635cb43488f892a392d2a6565beb4783b33fc3e8203d0139d85e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_326c897e806635cb43488f892a392d2a6565beb4783b33fc3e8203d0139d85e4->leave($__internal_326c897e806635cb43488f892a392d2a6565beb4783b33fc3e8203d0139d85e4_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f5e11ce86fa1207349fc340f3327b009f44a099c97abd3b613db9ca7510f7898 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5e11ce86fa1207349fc340f3327b009f44a099c97abd3b613db9ca7510f7898->enter($__internal_f5e11ce86fa1207349fc340f3327b009f44a099c97abd3b613db9ca7510f7898_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_f5e11ce86fa1207349fc340f3327b009f44a099c97abd3b613db9ca7510f7898->leave($__internal_f5e11ce86fa1207349fc340f3327b009f44a099c97abd3b613db9ca7510f7898_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_9bc086f740c4efb32de2d904071cd25bfcb4954a3f851a8a697ddd30e16d6df1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9bc086f740c4efb32de2d904071cd25bfcb4954a3f851a8a697ddd30e16d6df1->enter($__internal_9bc086f740c4efb32de2d904071cd25bfcb4954a3f851a8a697ddd30e16d6df1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_9bc086f740c4efb32de2d904071cd25bfcb4954a3f851a8a697ddd30e16d6df1->leave($__internal_9bc086f740c4efb32de2d904071cd25bfcb4954a3f851a8a697ddd30e16d6df1_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_140f6c77f4ea68b0e204d3082e5b99adc3a4d1b513ec67a9284c30c4f8dcf166 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_140f6c77f4ea68b0e204d3082e5b99adc3a4d1b513ec67a9284c30c4f8dcf166->enter($__internal_140f6c77f4ea68b0e204d3082e5b99adc3a4d1b513ec67a9284c30c4f8dcf166_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_140f6c77f4ea68b0e204d3082e5b99adc3a4d1b513ec67a9284c30c4f8dcf166->leave($__internal_140f6c77f4ea68b0e204d3082e5b99adc3a4d1b513ec67a9284c30c4f8dcf166_prof);

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
