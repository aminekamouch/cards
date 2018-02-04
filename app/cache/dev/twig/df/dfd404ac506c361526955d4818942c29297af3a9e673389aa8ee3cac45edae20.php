<?php

/* @WebProfiler/Profiler/ajax_layout.html.twig */
class __TwigTemplate_0add9bc9d8433fbbe88f2021a1ed7ae4ecda940fababf380a109486cf2a72ecc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_62f9fbd0a6e64972bf862cd680ffa3186f38b51eb870b3258714f86547d769de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62f9fbd0a6e64972bf862cd680ffa3186f38b51eb870b3258714f86547d769de->enter($__internal_62f9fbd0a6e64972bf862cd680ffa3186f38b51eb870b3258714f86547d769de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_62f9fbd0a6e64972bf862cd680ffa3186f38b51eb870b3258714f86547d769de->leave($__internal_62f9fbd0a6e64972bf862cd680ffa3186f38b51eb870b3258714f86547d769de_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_a35c7eb06293874785b7946e0628fc7521f103068b96566b60a65d33a709ae39 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a35c7eb06293874785b7946e0628fc7521f103068b96566b60a65d33a709ae39->enter($__internal_a35c7eb06293874785b7946e0628fc7521f103068b96566b60a65d33a709ae39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_a35c7eb06293874785b7946e0628fc7521f103068b96566b60a65d33a709ae39->leave($__internal_a35c7eb06293874785b7946e0628fc7521f103068b96566b60a65d33a709ae39_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "@WebProfiler/Profiler/ajax_layout.html.twig", "C:\\Program Files\\EasyPHP-DevServer-14.1VC11\\data\\localweb\\projects\\symfony\\ositel\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\ajax_layout.html.twig");
    }
}
