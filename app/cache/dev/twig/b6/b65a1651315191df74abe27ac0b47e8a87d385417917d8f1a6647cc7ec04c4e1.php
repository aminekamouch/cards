<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_eb46a9a4b4df06ecb14b2cd6122be04f6555728c0650bf84328d96e7f51b00a7 extends Twig_Template
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
        $__internal_82da27e8175a7bfa8e41a2798b88e96ecd6b906fffea77779fd11e96ae414d19 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82da27e8175a7bfa8e41a2798b88e96ecd6b906fffea77779fd11e96ae414d19->enter($__internal_82da27e8175a7bfa8e41a2798b88e96ecd6b906fffea77779fd11e96ae414d19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_82da27e8175a7bfa8e41a2798b88e96ecd6b906fffea77779fd11e96ae414d19->leave($__internal_82da27e8175a7bfa8e41a2798b88e96ecd6b906fffea77779fd11e96ae414d19_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_1c0771221917e3dcf6a0ac00000ff050be13c2222bd4cdd03e64f7642ff31d9d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c0771221917e3dcf6a0ac00000ff050be13c2222bd4cdd03e64f7642ff31d9d->enter($__internal_1c0771221917e3dcf6a0ac00000ff050be13c2222bd4cdd03e64f7642ff31d9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_1c0771221917e3dcf6a0ac00000ff050be13c2222bd4cdd03e64f7642ff31d9d->leave($__internal_1c0771221917e3dcf6a0ac00000ff050be13c2222bd4cdd03e64f7642ff31d9d_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_8a20d73aa1ba93925469d9cb60e0c610897fb42fa23cb50f825c1344ae9552e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a20d73aa1ba93925469d9cb60e0c610897fb42fa23cb50f825c1344ae9552e6->enter($__internal_8a20d73aa1ba93925469d9cb60e0c610897fb42fa23cb50f825c1344ae9552e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_8a20d73aa1ba93925469d9cb60e0c610897fb42fa23cb50f825c1344ae9552e6->leave($__internal_8a20d73aa1ba93925469d9cb60e0c610897fb42fa23cb50f825c1344ae9552e6_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ee7a4feb43414cb2af678bb3acc1576ffac18122646ee29085e4ce8b6759efcc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee7a4feb43414cb2af678bb3acc1576ffac18122646ee29085e4ce8b6759efcc->enter($__internal_ee7a4feb43414cb2af678bb3acc1576ffac18122646ee29085e4ce8b6759efcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_ee7a4feb43414cb2af678bb3acc1576ffac18122646ee29085e4ce8b6759efcc->leave($__internal_ee7a4feb43414cb2af678bb3acc1576ffac18122646ee29085e4ce8b6759efcc_prof);

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
