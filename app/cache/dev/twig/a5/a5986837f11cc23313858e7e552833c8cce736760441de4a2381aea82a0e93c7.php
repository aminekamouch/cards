<?php

/* base.html.twig */
class __TwigTemplate_9708a99451bd2de038661ff4d9b557131af627a9232810c4e3ac2876f87e099b extends Twig_Template
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
        $__internal_c02c23e0a80b8c553ff39d86d9b17602be7dc7781fb2b93d8db601351b390c67 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c02c23e0a80b8c553ff39d86d9b17602be7dc7781fb2b93d8db601351b390c67->enter($__internal_c02c23e0a80b8c553ff39d86d9b17602be7dc7781fb2b93d8db601351b390c67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_c02c23e0a80b8c553ff39d86d9b17602be7dc7781fb2b93d8db601351b390c67->leave($__internal_c02c23e0a80b8c553ff39d86d9b17602be7dc7781fb2b93d8db601351b390c67_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_5ebebc011ef7e3ec2fe418267c2dcdcd84c1651ff2904d9737358502e5d6fd22 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ebebc011ef7e3ec2fe418267c2dcdcd84c1651ff2904d9737358502e5d6fd22->enter($__internal_5ebebc011ef7e3ec2fe418267c2dcdcd84c1651ff2904d9737358502e5d6fd22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_5ebebc011ef7e3ec2fe418267c2dcdcd84c1651ff2904d9737358502e5d6fd22->leave($__internal_5ebebc011ef7e3ec2fe418267c2dcdcd84c1651ff2904d9737358502e5d6fd22_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_15e1aa82a8c72122744da6240c966943de6efd4b2f38cea2dc5d59da21149bb2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15e1aa82a8c72122744da6240c966943de6efd4b2f38cea2dc5d59da21149bb2->enter($__internal_15e1aa82a8c72122744da6240c966943de6efd4b2f38cea2dc5d59da21149bb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_15e1aa82a8c72122744da6240c966943de6efd4b2f38cea2dc5d59da21149bb2->leave($__internal_15e1aa82a8c72122744da6240c966943de6efd4b2f38cea2dc5d59da21149bb2_prof);

    }

    // line 16
    public function block_body($context, array $blocks = array())
    {
        $__internal_df84d0d6b86063c603d1f1b250d3ea3be298ef3f497668a10c98f5467765ebfc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df84d0d6b86063c603d1f1b250d3ea3be298ef3f497668a10c98f5467765ebfc->enter($__internal_df84d0d6b86063c603d1f1b250d3ea3be298ef3f497668a10c98f5467765ebfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_df84d0d6b86063c603d1f1b250d3ea3be298ef3f497668a10c98f5467765ebfc->leave($__internal_df84d0d6b86063c603d1f1b250d3ea3be298ef3f497668a10c98f5467765ebfc_prof);

    }

    // line 17
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_4d78d788097f6285747d910dc10c1d049ff0b8c1e1c28c3bccb6e5aedd2c062f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d78d788097f6285747d910dc10c1d049ff0b8c1e1c28c3bccb6e5aedd2c062f->enter($__internal_4d78d788097f6285747d910dc10c1d049ff0b8c1e1c28c3bccb6e5aedd2c062f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 18
        echo "\t\t<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\"></script>
\t\t";
        
        $__internal_4d78d788097f6285747d910dc10c1d049ff0b8c1e1c28c3bccb6e5aedd2c062f->leave($__internal_4d78d788097f6285747d910dc10c1d049ff0b8c1e1c28c3bccb6e5aedd2c062f_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
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
", "base.html.twig", "C:\\Program Files\\EasyPHP-DevServer-14.1VC11\\data\\localweb\\projects\\symfony\\ositel\\app\\Resources\\views\\base.html.twig");
    }
}
