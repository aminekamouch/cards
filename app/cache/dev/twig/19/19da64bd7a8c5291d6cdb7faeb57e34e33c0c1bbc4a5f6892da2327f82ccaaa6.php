<?php

/* base.html.twig */
class __TwigTemplate_6c5bea2429c873d072a8c401b80497e68bf229e4f1c111af8786366b7450e135 extends Twig_Template
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
        $__internal_065775b8d3e67b863d12b9996cd550bd4c3d03c7f627451a394cb5b5cd430e74 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_065775b8d3e67b863d12b9996cd550bd4c3d03c7f627451a394cb5b5cd430e74->enter($__internal_065775b8d3e67b863d12b9996cd550bd4c3d03c7f627451a394cb5b5cd430e74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_065775b8d3e67b863d12b9996cd550bd4c3d03c7f627451a394cb5b5cd430e74->leave($__internal_065775b8d3e67b863d12b9996cd550bd4c3d03c7f627451a394cb5b5cd430e74_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_09d0297b8a3b9144a7b59649b710de2b84a699653fda643d24ce08ad9e97a7c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09d0297b8a3b9144a7b59649b710de2b84a699653fda643d24ce08ad9e97a7c3->enter($__internal_09d0297b8a3b9144a7b59649b710de2b84a699653fda643d24ce08ad9e97a7c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_09d0297b8a3b9144a7b59649b710de2b84a699653fda643d24ce08ad9e97a7c3->leave($__internal_09d0297b8a3b9144a7b59649b710de2b84a699653fda643d24ce08ad9e97a7c3_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_0b8efb3e79efbc24c40de656ada88cf57b14f3c7c24449ac533b68637f08ae31 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b8efb3e79efbc24c40de656ada88cf57b14f3c7c24449ac533b68637f08ae31->enter($__internal_0b8efb3e79efbc24c40de656ada88cf57b14f3c7c24449ac533b68637f08ae31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_0b8efb3e79efbc24c40de656ada88cf57b14f3c7c24449ac533b68637f08ae31->leave($__internal_0b8efb3e79efbc24c40de656ada88cf57b14f3c7c24449ac533b68637f08ae31_prof);

    }

    // line 16
    public function block_body($context, array $blocks = array())
    {
        $__internal_e9e76cf64d1adf5ac5bef6387ba80faaa727c285c562ecc44986fb6541c49c4e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9e76cf64d1adf5ac5bef6387ba80faaa727c285c562ecc44986fb6541c49c4e->enter($__internal_e9e76cf64d1adf5ac5bef6387ba80faaa727c285c562ecc44986fb6541c49c4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_e9e76cf64d1adf5ac5bef6387ba80faaa727c285c562ecc44986fb6541c49c4e->leave($__internal_e9e76cf64d1adf5ac5bef6387ba80faaa727c285c562ecc44986fb6541c49c4e_prof);

    }

    // line 17
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_b8625259c3135dc791b7ec87ab4eeac5ffa4f3c02837ea13b6fbf6f31229912d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8625259c3135dc791b7ec87ab4eeac5ffa4f3c02837ea13b6fbf6f31229912d->enter($__internal_b8625259c3135dc791b7ec87ab4eeac5ffa4f3c02837ea13b6fbf6f31229912d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 18
        echo "\t\t<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\"></script>
\t\t";
        
        $__internal_b8625259c3135dc791b7ec87ab4eeac5ffa4f3c02837ea13b6fbf6f31229912d->leave($__internal_b8625259c3135dc791b7ec87ab4eeac5ffa4f3c02837ea13b6fbf6f31229912d_prof);

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
