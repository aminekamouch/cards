<?php

/* SensioDistributionBundle::Configurator/layout.html.twig */
class __TwigTemplate_39cfe831883c82b61cf3b6cbf579702aebffe660dcd318725ba29afa107fab17 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "SensioDistributionBundle::Configurator/layout.html.twig", 1);
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
        $__internal_64c7217eb74dc6c899565719a40516b8960d37c5994c143de3582fd93962b062 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64c7217eb74dc6c899565719a40516b8960d37c5994c143de3582fd93962b062->enter($__internal_64c7217eb74dc6c899565719a40516b8960d37c5994c143de3582fd93962b062_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SensioDistributionBundle::Configurator/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_64c7217eb74dc6c899565719a40516b8960d37c5994c143de3582fd93962b062->leave($__internal_64c7217eb74dc6c899565719a40516b8960d37c5994c143de3582fd93962b062_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_9cb7dc9a9f0c205f468d170472a149a474a1997078b616e022d5d542e9f2e328 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9cb7dc9a9f0c205f468d170472a149a474a1997078b616e022d5d542e9f2e328->enter($__internal_9cb7dc9a9f0c205f468d170472a149a474a1997078b616e022d5d542e9f2e328_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/sensiodistribution/webconfigurator/css/configurator.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_9cb7dc9a9f0c205f468d170472a149a474a1997078b616e022d5d542e9f2e328->leave($__internal_9cb7dc9a9f0c205f468d170472a149a474a1997078b616e022d5d542e9f2e328_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_bb82ef2a6775706b8e0adbfece30554b82c12d193e7ce6b57d2691ef2f495cf2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb82ef2a6775706b8e0adbfece30554b82c12d193e7ce6b57d2691ef2f495cf2->enter($__internal_bb82ef2a6775706b8e0adbfece30554b82c12d193e7ce6b57d2691ef2f495cf2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Web Configurator Bundle";
        
        $__internal_bb82ef2a6775706b8e0adbfece30554b82c12d193e7ce6b57d2691ef2f495cf2->leave($__internal_bb82ef2a6775706b8e0adbfece30554b82c12d193e7ce6b57d2691ef2f495cf2_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_34a86e2b38c6b7aecf31b644c415c5e501789a2ef2d54c1b7ac7aaeefc534c3b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34a86e2b38c6b7aecf31b644c415c5e501789a2ef2d54c1b7ac7aaeefc534c3b->enter($__internal_34a86e2b38c6b7aecf31b644c415c5e501789a2ef2d54c1b7ac7aaeefc534c3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_34a86e2b38c6b7aecf31b644c415c5e501789a2ef2d54c1b7ac7aaeefc534c3b->leave($__internal_34a86e2b38c6b7aecf31b644c415c5e501789a2ef2d54c1b7ac7aaeefc534c3b_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_94de064a23730add17185a06c32eaa42bbc1904972d89cc665e8506219b1fe0b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94de064a23730add17185a06c32eaa42bbc1904972d89cc665e8506219b1fe0b->enter($__internal_94de064a23730add17185a06c32eaa42bbc1904972d89cc665e8506219b1fe0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_94de064a23730add17185a06c32eaa42bbc1904972d89cc665e8506219b1fe0b->leave($__internal_94de064a23730add17185a06c32eaa42bbc1904972d89cc665e8506219b1fe0b_prof);

    }

    public function getTemplateName()
    {
        return "SensioDistributionBundle::Configurator/layout.html.twig";
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
", "SensioDistributionBundle::Configurator/layout.html.twig", "C:\\Program Files\\EasyPHP-DevServer-14.1VC11\\data\\localweb\\projects\\symfony\\ositel\\vendor\\sensio\\distribution-bundle\\Sensio\\Bundle\\DistributionBundle/Resources/views/Configurator/layout.html.twig");
    }
}
