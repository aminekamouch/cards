<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_4520ef78834c99d1927032f5e79f792c06a251a8801ebfc40800b88682e241c7 extends Twig_Template
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
        $__internal_9431bd84e5b3f92ae9fcc4f2713a9a8de17a699f2d4f67df86ef2f76743e3e8c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9431bd84e5b3f92ae9fcc4f2713a9a8de17a699f2d4f67df86ef2f76743e3e8c->enter($__internal_9431bd84e5b3f92ae9fcc4f2713a9a8de17a699f2d4f67df86ef2f76743e3e8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_9431bd84e5b3f92ae9fcc4f2713a9a8de17a699f2d4f67df86ef2f76743e3e8c->leave($__internal_9431bd84e5b3f92ae9fcc4f2713a9a8de17a699f2d4f67df86ef2f76743e3e8c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "C:\\Program Files\\EasyPHP-DevServer-14.1VC11\\data\\localweb\\projects\\symfony\\ositel\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_options.html.php");
    }
}
