<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_4224260e74dce465bc2a59751c33314005486ee1bc5ff7b8497cee33cefff1a1 extends Twig_Template
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
        $__internal_9434c8f83abe254970842c101c2140fda2ef2362909611414bdd2e726e31476c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9434c8f83abe254970842c101c2140fda2ef2362909611414bdd2e726e31476c->enter($__internal_9434c8f83abe254970842c101c2140fda2ef2362909611414bdd2e726e31476c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_9434c8f83abe254970842c101c2140fda2ef2362909611414bdd2e726e31476c->leave($__internal_9434c8f83abe254970842c101c2140fda2ef2362909611414bdd2e726e31476c_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_f6209f6f344e72432a43dbf32f55d475b1161c168b73c8ddebfbad2d718ca8ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6209f6f344e72432a43dbf32f55d475b1161c168b73c8ddebfbad2d718ca8ac->enter($__internal_f6209f6f344e72432a43dbf32f55d475b1161c168b73c8ddebfbad2d718ca8ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_f6209f6f344e72432a43dbf32f55d475b1161c168b73c8ddebfbad2d718ca8ac->leave($__internal_f6209f6f344e72432a43dbf32f55d475b1161c168b73c8ddebfbad2d718ca8ac_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
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
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "C:\\Program Files\\EasyPHP-DevServer-14.1VC11\\data\\localweb\\projects\\symfony\\ositel\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
