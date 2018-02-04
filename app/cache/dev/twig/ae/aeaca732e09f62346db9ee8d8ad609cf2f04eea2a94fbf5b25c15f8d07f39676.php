<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_5a08693a31d3249f4aa5e8aa1947805018ee05f809ec1f8af86ab1c4693ee83e extends Twig_Template
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
        $__internal_72e01426cfae844a70dc52ee49aa0d2cd1cf5d2a85e3673abd8a24f2b28c18aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72e01426cfae844a70dc52ee49aa0d2cd1cf5d2a85e3673abd8a24f2b28c18aa->enter($__internal_72e01426cfae844a70dc52ee49aa0d2cd1cf5d2a85e3673abd8a24f2b28c18aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_72e01426cfae844a70dc52ee49aa0d2cd1cf5d2a85e3673abd8a24f2b28c18aa->leave($__internal_72e01426cfae844a70dc52ee49aa0d2cd1cf5d2a85e3673abd8a24f2b28c18aa_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "C:\\Program Files\\EasyPHP-DevServer-14.1VC11\\data\\localweb\\projects\\symfony\\ositel\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\textarea_widget.html.php");
    }
}
