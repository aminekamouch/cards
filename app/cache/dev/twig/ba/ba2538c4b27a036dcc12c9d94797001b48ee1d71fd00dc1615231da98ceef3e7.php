<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_ae1be02a50f30df4ed4f78eccdea87625b335bef07933229ff8131a662e52abf extends Twig_Template
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
        $__internal_7cde01bd0919ce653988bf6316e73ccd4962bbd1736ebb2873b5fa03069d60cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7cde01bd0919ce653988bf6316e73ccd4962bbd1736ebb2873b5fa03069d60cc->enter($__internal_7cde01bd0919ce653988bf6316e73ccd4962bbd1736ebb2873b5fa03069d60cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_7cde01bd0919ce653988bf6316e73ccd4962bbd1736ebb2873b5fa03069d60cc->leave($__internal_7cde01bd0919ce653988bf6316e73ccd4962bbd1736ebb2873b5fa03069d60cc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "C:\\Program Files\\EasyPHP-DevServer-14.1VC11\\data\\localweb\\projects\\symfony\\ositel\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\integer_widget.html.php");
    }
}
