<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_d3e9486b5a2e7afb4194b43a9972e73879d5cf0d158925ea042ba6783e8e3b92 extends Twig_Template
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
        $__internal_37f3886a44a80a7bc22258ddd69069951d6ad8ce80f6a1e9852846a364dddbcb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37f3886a44a80a7bc22258ddd69069951d6ad8ce80f6a1e9852846a364dddbcb->enter($__internal_37f3886a44a80a7bc22258ddd69069951d6ad8ce80f6a1e9852846a364dddbcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_37f3886a44a80a7bc22258ddd69069951d6ad8ce80f6a1e9852846a364dddbcb->leave($__internal_37f3886a44a80a7bc22258ddd69069951d6ad8ce80f6a1e9852846a364dddbcb_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "TwigBundle:Exception:error.json.twig", "C:\\Program Files\\EasyPHP-DevServer-14.1VC11\\data\\localweb\\projects\\symfony\\ositel\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.json.twig");
    }
}
