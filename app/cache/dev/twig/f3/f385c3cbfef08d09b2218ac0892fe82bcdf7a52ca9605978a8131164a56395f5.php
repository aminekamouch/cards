<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_df49e7e690252e9367a94ca194c96bc998bf4584b54b0c0aaec47c03f5bf5746 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c578e6549c029c5105f4a6a81f8645ed8e53d4130b1d1bf56137fa4d214c3eb3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c578e6549c029c5105f4a6a81f8645ed8e53d4130b1d1bf56137fa4d214c3eb3->enter($__internal_c578e6549c029c5105f4a6a81f8645ed8e53d4130b1d1bf56137fa4d214c3eb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_c578e6549c029c5105f4a6a81f8645ed8e53d4130b1d1bf56137fa4d214c3eb3->leave($__internal_c578e6549c029c5105f4a6a81f8645ed8e53d4130b1d1bf56137fa4d214c3eb3_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "TwigBundle:Exception:error.atom.twig", "C:\\Program Files\\EasyPHP-DevServer-14.1VC11\\data\\localweb\\projects\\symfony\\ositel\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
