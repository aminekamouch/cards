<?php

/* ::base.html.twig */
class __TwigTemplate_1ae2311477baa7afbea7ce13bb9a0634f883549ad5b9f35fb0fa464fc14b1d23 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cc903db89337a49b4edb61da176527779016469a3cea306f5ae7f57a323c66cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc903db89337a49b4edb61da176527779016469a3cea306f5ae7f57a323c66cd->enter($__internal_cc903db89337a49b4edb61da176527779016469a3cea306f5ae7f57a323c66cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
             
\t\t";
        // line 7
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 12
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
\tamine
        ";
        // line 16
        $this->displayBlock('body', $context, $blocks);
        // line 17
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 20
        echo "    </body>
</html>
";
        
        $__internal_cc903db89337a49b4edb61da176527779016469a3cea306f5ae7f57a323c66cd->leave($__internal_cc903db89337a49b4edb61da176527779016469a3cea306f5ae7f57a323c66cd_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_0d80b41af5b6d5e7bfa54aa1bff9fb663b0d3a95499afc3096af212dd4f7c89a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d80b41af5b6d5e7bfa54aa1bff9fb663b0d3a95499afc3096af212dd4f7c89a->enter($__internal_0d80b41af5b6d5e7bfa54aa1bff9fb663b0d3a95499afc3096af212dd4f7c89a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_0d80b41af5b6d5e7bfa54aa1bff9fb663b0d3a95499afc3096af212dd4f7c89a->leave($__internal_0d80b41af5b6d5e7bfa54aa1bff9fb663b0d3a95499afc3096af212dd4f7c89a_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_2296a8cc65750cd864c442f579904a279ff398a3647a31edea393dd67878ea3c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2296a8cc65750cd864c442f579904a279ff398a3647a31edea393dd67878ea3c->enter($__internal_2296a8cc65750cd864c442f579904a279ff398a3647a31edea393dd67878ea3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        echo "\t\t<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\">
                           <script src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.min.js"), "html", null, true);
        echo "\"></script>
                           <script src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\"></script>
\t\t";
        
        $__internal_2296a8cc65750cd864c442f579904a279ff398a3647a31edea393dd67878ea3c->leave($__internal_2296a8cc65750cd864c442f579904a279ff398a3647a31edea393dd67878ea3c_prof);

    }

    // line 16
    public function block_body($context, array $blocks = array())
    {
        $__internal_d992b44c6194b6c3381e12fc4e471d62c5aef4b9feae4028dc6586632dd132ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d992b44c6194b6c3381e12fc4e471d62c5aef4b9feae4028dc6586632dd132ea->enter($__internal_d992b44c6194b6c3381e12fc4e471d62c5aef4b9feae4028dc6586632dd132ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_d992b44c6194b6c3381e12fc4e471d62c5aef4b9feae4028dc6586632dd132ea->leave($__internal_d992b44c6194b6c3381e12fc4e471d62c5aef4b9feae4028dc6586632dd132ea_prof);

    }

    // line 17
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_d09f00ffbbe391824a109096e1d3a865c759526c4d6d0e65424b203f906ad143 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d09f00ffbbe391824a109096e1d3a865c759526c4d6d0e65424b203f906ad143->enter($__internal_d09f00ffbbe391824a109096e1d3a865c759526c4d6d0e65424b203f906ad143_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 18
        echo "\t\t<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\"></script>
\t\t";
        
        $__internal_d09f00ffbbe391824a109096e1d3a865c759526c4d6d0e65424b203f906ad143->leave($__internal_d09f00ffbbe391824a109096e1d3a865c759526c4d6d0e65424b203f906ad143_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 18,  108 => 17,  97 => 16,  88 => 10,  84 => 9,  79 => 8,  73 => 7,  61 => 5,  52 => 20,  49 => 17,  47 => 16,  39 => 12,  37 => 7,  32 => 5,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
             
\t\t{% block stylesheets %}
\t\t<link rel=\"stylesheet\" href=\"{{ asset('css/bootstrap.css') }}\">
                           <script src=\"{{ asset('js/jquery.min.js') }}\"></script>
                           <script src=\"{{ asset('js/bootstrap.js') }}\"></script>
\t\t{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
\tamine
        {% block body %}{% endblock %}
        {% block javascripts %}
\t\t<script src=\"{{ asset('js/bootstrap.js') }}\"></script>
\t\t{% endblock %}
    </body>
</html>
", "::base.html.twig", "C:\\Program Files\\EasyPHP-DevServer-14.1VC11\\data\\localweb\\projects\\symfony\\ositel\\app/Resources\\views/base.html.twig");
    }
}
