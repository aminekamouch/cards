<?php

/* @Twig/Exception/error.css.twig */
class __TwigTemplate_ad4a58d8b6b661508fbf4cf68c2b52d55fb9f0602a2b455d4211438ac54f10ae extends Twig_Template
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
        $__internal_9108a7fec5f63117b5a7a1b27a5298a7a2b75387907b1b2e79d897d0ac225744 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9108a7fec5f63117b5a7a1b27a5298a7a2b75387907b1b2e79d897d0ac225744->enter($__internal_9108a7fec5f63117b5a7a1b27a5298a7a2b75387907b1b2e79d897d0ac225744_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_9108a7fec5f63117b5a7a1b27a5298a7a2b75387907b1b2e79d897d0ac225744->leave($__internal_9108a7fec5f63117b5a7a1b27a5298a7a2b75387907b1b2e79d897d0ac225744_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ status_code }} {{ status_text }}

*/
", "@Twig/Exception/error.css.twig", "C:\\Program Files\\EasyPHP-DevServer-14.1VC11\\data\\localweb\\projects\\symfony\\ositel\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.css.twig");
    }
}
