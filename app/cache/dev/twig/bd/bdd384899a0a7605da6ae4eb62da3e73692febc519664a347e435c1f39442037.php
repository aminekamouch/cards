<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_ac6519c7cf4c5feb507cc577b90ba2dbd82f72d6c7cab9a84fb132f0b83e2698 extends Twig_Template
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
        $__internal_2153bd179f4c8e832a8ded44f2a4a4e8e0434f1d6fb697776f568c0b82e547d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2153bd179f4c8e832a8ded44f2a4a4e8e0434f1d6fb697776f568c0b82e547d3->enter($__internal_2153bd179f4c8e832a8ded44f2a4a4e8e0434f1d6fb697776f568c0b82e547d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_2153bd179f4c8e832a8ded44f2a4a4e8e0434f1d6fb697776f568c0b82e547d3->leave($__internal_2153bd179f4c8e832a8ded44f2a4a4e8e0434f1d6fb697776f568c0b82e547d3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "C:\\Program Files\\EasyPHP-DevServer-14.1VC11\\data\\localweb\\projects\\symfony\\ositel\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\submit_widget.html.php");
    }
}
