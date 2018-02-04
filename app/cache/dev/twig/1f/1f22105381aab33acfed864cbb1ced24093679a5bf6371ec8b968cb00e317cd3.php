<?php

/* @SensioDistribution/Configurator/layout.html.twig */
class __TwigTemplate_3ba47b857e0433ddf53627c8db74e018d2e0851588bbbada321e67754176fc1e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "@SensioDistribution/Configurator/layout.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a2730d640d1e7780ab5e620befea701645afefebe09952531b7acc46fefb673b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2730d640d1e7780ab5e620befea701645afefebe09952531b7acc46fefb673b->enter($__internal_a2730d640d1e7780ab5e620befea701645afefebe09952531b7acc46fefb673b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SensioDistribution/Configurator/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a2730d640d1e7780ab5e620befea701645afefebe09952531b7acc46fefb673b->leave($__internal_a2730d640d1e7780ab5e620befea701645afefebe09952531b7acc46fefb673b_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_9c74a956390093542f6e234a7b393f57d2503201cbe9348978cbf1449cbb40d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c74a956390093542f6e234a7b393f57d2503201cbe9348978cbf1449cbb40d9->enter($__internal_9c74a956390093542f6e234a7b393f57d2503201cbe9348978cbf1449cbb40d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/sensiodistribution/webconfigurator/css/configurator.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_9c74a956390093542f6e234a7b393f57d2503201cbe9348978cbf1449cbb40d9->leave($__internal_9c74a956390093542f6e234a7b393f57d2503201cbe9348978cbf1449cbb40d9_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_dacc640e43e90346cde6b34efdd7fd3b12d3648f088e1b6d45fd794f4a2e120e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dacc640e43e90346cde6b34efdd7fd3b12d3648f088e1b6d45fd794f4a2e120e->enter($__internal_dacc640e43e90346cde6b34efdd7fd3b12d3648f088e1b6d45fd794f4a2e120e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Web Configurator Bundle";
        
        $__internal_dacc640e43e90346cde6b34efdd7fd3b12d3648f088e1b6d45fd794f4a2e120e->leave($__internal_dacc640e43e90346cde6b34efdd7fd3b12d3648f088e1b6d45fd794f4a2e120e_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_4beab02ffdae5c961b1a9decde73582cc1e7fa666e7ab06deb948b9fdd118f18 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4beab02ffdae5c961b1a9decde73582cc1e7fa666e7ab06deb948b9fdd118f18->enter($__internal_4beab02ffdae5c961b1a9decde73582cc1e7fa666e7ab06deb948b9fdd118f18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "    <div class=\"block\">
        ";
        // line 11
        $this->displayBlock('content', $context, $blocks);
        // line 12
        echo "    </div>
    <div class=\"version\">Symfony Standard Edition v.";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["version"]) ? $context["version"] : $this->getContext($context, "version")), "html", null, true);
        echo "</div>
";
        
        $__internal_4beab02ffdae5c961b1a9decde73582cc1e7fa666e7ab06deb948b9fdd118f18->leave($__internal_4beab02ffdae5c961b1a9decde73582cc1e7fa666e7ab06deb948b9fdd118f18_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_1c9abef31aa274bb416dd31f9e2a65965632275a0950344ea8692c43c45d74fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c9abef31aa274bb416dd31f9e2a65965632275a0950344ea8692c43c45d74fb->enter($__internal_1c9abef31aa274bb416dd31f9e2a65965632275a0950344ea8692c43c45d74fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_1c9abef31aa274bb416dd31f9e2a65965632275a0950344ea8692c43c45d74fb->leave($__internal_1c9abef31aa274bb416dd31f9e2a65965632275a0950344ea8692c43c45d74fb_prof);

    }

    public function getTemplateName()
    {
        return "@SensioDistribution/Configurator/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 11,  79 => 13,  76 => 12,  74 => 11,  71 => 10,  65 => 9,  53 => 7,  43 => 4,  37 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"TwigBundle::layout.html.twig\" %}

{% block head %}
    <link rel=\"stylesheet\" href=\"{{ asset('bundles/sensiodistribution/webconfigurator/css/configurator.css') }}\" />
{% endblock %}

{% block title 'Web Configurator Bundle' %}

{% block body %}
    <div class=\"block\">
        {% block content %}{% endblock %}
    </div>
    <div class=\"version\">Symfony Standard Edition v.{{ version }}</div>
{% endblock %}
", "@SensioDistribution/Configurator/layout.html.twig", "C:\\Program Files\\EasyPHP-DevServer-14.1VC11\\data\\localweb\\projects\\symfony\\ositel\\vendor\\sensio\\distribution-bundle\\Sensio\\Bundle\\DistributionBundle\\Resources\\views\\Configurator\\layout.html.twig");
    }
}
