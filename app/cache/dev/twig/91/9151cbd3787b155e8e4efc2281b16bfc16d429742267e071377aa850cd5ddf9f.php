<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_6f8d3581068b7cf1a4d3546a8cb7dc43627f6c9b7191eccabe9f8d86afd0b1bd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_40e00aa59e15f26038877603c880bcc98e3f7bc776fea568145e93cb0c34780a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40e00aa59e15f26038877603c880bcc98e3f7bc776fea568145e93cb0c34780a->enter($__internal_40e00aa59e15f26038877603c880bcc98e3f7bc776fea568145e93cb0c34780a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_40e00aa59e15f26038877603c880bcc98e3f7bc776fea568145e93cb0c34780a->leave($__internal_40e00aa59e15f26038877603c880bcc98e3f7bc776fea568145e93cb0c34780a_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_54a56ea9ff053ed251fed056a556d4b433ca0cf8d30d95718f319ec05aa883bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54a56ea9ff053ed251fed056a556d4b433ca0cf8d30d95718f319ec05aa883bd->enter($__internal_54a56ea9ff053ed251fed056a556d4b433ca0cf8d30d95718f319ec05aa883bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_54a56ea9ff053ed251fed056a556d4b433ca0cf8d30d95718f319ec05aa883bd->leave($__internal_54a56ea9ff053ed251fed056a556d4b433ca0cf8d30d95718f319ec05aa883bd_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_77d7e03dfbb13d9901422886ad34fc8c60dc033f43e820d8427e636b08635946 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77d7e03dfbb13d9901422886ad34fc8c60dc033f43e820d8427e636b08635946->enter($__internal_77d7e03dfbb13d9901422886ad34fc8c60dc033f43e820d8427e636b08635946_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_77d7e03dfbb13d9901422886ad34fc8c60dc033f43e820d8427e636b08635946->leave($__internal_77d7e03dfbb13d9901422886ad34fc8c60dc033f43e820d8427e636b08635946_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_3072f7a48053e012af326ecc3b6515fbd899590ee76b3720bf5a7e01381599af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3072f7a48053e012af326ecc3b6515fbd899590ee76b3720bf5a7e01381599af->enter($__internal_3072f7a48053e012af326ecc3b6515fbd899590ee76b3720bf5a7e01381599af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_3072f7a48053e012af326ecc3b6515fbd899590ee76b3720bf5a7e01381599af->leave($__internal_3072f7a48053e012af326ecc3b6515fbd899590ee76b3720bf5a7e01381599af_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "WebProfilerBundle:Collector:router.html.twig", "C:\\Program Files\\EasyPHP-DevServer-14.1VC11\\data\\localweb\\projects\\symfony\\ositel\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
