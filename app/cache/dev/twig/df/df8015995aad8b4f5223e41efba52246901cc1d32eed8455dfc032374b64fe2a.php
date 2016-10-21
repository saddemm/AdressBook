<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_ecfc5809eac5a7e60459e7425cfcb054ed6b79691ce19999ead0c700cd8362e8 extends Twig_Template
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
        $__internal_e549331acb4fecdac2e256cf5c3859052cbc8dadb01af2530ed8fd12aa75f7f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e549331acb4fecdac2e256cf5c3859052cbc8dadb01af2530ed8fd12aa75f7f0->enter($__internal_e549331acb4fecdac2e256cf5c3859052cbc8dadb01af2530ed8fd12aa75f7f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_e549331acb4fecdac2e256cf5c3859052cbc8dadb01af2530ed8fd12aa75f7f0->leave($__internal_e549331acb4fecdac2e256cf5c3859052cbc8dadb01af2530ed8fd12aa75f7f0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
    }
}
