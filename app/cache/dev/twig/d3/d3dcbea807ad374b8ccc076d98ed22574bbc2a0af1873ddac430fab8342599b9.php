<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_8e70a0748a24cbd81c5d252ea01a05644faaea44ad63ea2787a50fc3ab1a4f7b extends Twig_Template
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
        $__internal_ca41c1b419b6e1f2eae6bc83f0cbf33c6a7a6445ef75d99078a3b52d312c27c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca41c1b419b6e1f2eae6bc83f0cbf33c6a7a6445ef75d99078a3b52d312c27c2->enter($__internal_ca41c1b419b6e1f2eae6bc83f0cbf33c6a7a6445ef75d99078a3b52d312c27c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_ca41c1b419b6e1f2eae6bc83f0cbf33c6a7a6445ef75d99078a3b52d312c27c2->leave($__internal_ca41c1b419b6e1f2eae6bc83f0cbf33c6a7a6445ef75d99078a3b52d312c27c2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "C:\\Program Files\\EasyPHP-DevServer-14.1VC11\\data\\localweb\\projects\\symfony\\ositel\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\button_row.html.php");
    }
}
