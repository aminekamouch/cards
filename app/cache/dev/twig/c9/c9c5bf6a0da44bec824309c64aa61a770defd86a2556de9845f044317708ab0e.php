<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_cede5966914592e3762a55d747705e73ac128f466228f72d842ab4941ee3cdbc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
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
        $__internal_f04af7d02994ad4aefb344b71cb92c716a87fa46304b07cc60160585b72daea5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f04af7d02994ad4aefb344b71cb92c716a87fa46304b07cc60160585b72daea5->enter($__internal_f04af7d02994ad4aefb344b71cb92c716a87fa46304b07cc60160585b72daea5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f04af7d02994ad4aefb344b71cb92c716a87fa46304b07cc60160585b72daea5->leave($__internal_f04af7d02994ad4aefb344b71cb92c716a87fa46304b07cc60160585b72daea5_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_ac8aa5744f1144ec25513af012329308dc46b87e9c5f0c9b25f2610958815270 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac8aa5744f1144ec25513af012329308dc46b87e9c5f0c9b25f2610958815270->enter($__internal_ac8aa5744f1144ec25513af012329308dc46b87e9c5f0c9b25f2610958815270_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_ac8aa5744f1144ec25513af012329308dc46b87e9c5f0c9b25f2610958815270->leave($__internal_ac8aa5744f1144ec25513af012329308dc46b87e9c5f0c9b25f2610958815270_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_626ffce101c2fbad1c6d70b5c84d17769634106049dcabc5b6e9b5fb431680cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_626ffce101c2fbad1c6d70b5c84d17769634106049dcabc5b6e9b5fb431680cf->enter($__internal_626ffce101c2fbad1c6d70b5c84d17769634106049dcabc5b6e9b5fb431680cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_626ffce101c2fbad1c6d70b5c84d17769634106049dcabc5b6e9b5fb431680cf->leave($__internal_626ffce101c2fbad1c6d70b5c84d17769634106049dcabc5b6e9b5fb431680cf_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_68e85d223fd77736f5d2ad8d488de0bc117c17c4fed72078be038ee56830d5a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68e85d223fd77736f5d2ad8d488de0bc117c17c4fed72078be038ee56830d5a6->enter($__internal_68e85d223fd77736f5d2ad8d488de0bc117c17c4fed72078be038ee56830d5a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_68e85d223fd77736f5d2ad8d488de0bc117c17c4fed72078be038ee56830d5a6->leave($__internal_68e85d223fd77736f5d2ad8d488de0bc117c17c4fed72078be038ee56830d5a6_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
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
", "@WebProfiler/Collector/router.html.twig", "C:\\Program Files\\EasyPHP-DevServer-14.1VC11\\data\\localweb\\projects\\symfony\\ositel\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
