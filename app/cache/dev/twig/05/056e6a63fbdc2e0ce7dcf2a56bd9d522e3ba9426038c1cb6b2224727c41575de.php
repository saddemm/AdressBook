<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_760b85fec2baf4c10f7c81f42b4cf0b0ef2819749e1e1018c068073ac33e48b5 extends Twig_Template
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
        $__internal_9dac9e6a4c97ee808dcc47bc02ca982ffb93410e13cc1259461b927b30943ab3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9dac9e6a4c97ee808dcc47bc02ca982ffb93410e13cc1259461b927b30943ab3->enter($__internal_9dac9e6a4c97ee808dcc47bc02ca982ffb93410e13cc1259461b927b30943ab3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_9dac9e6a4c97ee808dcc47bc02ca982ffb93410e13cc1259461b927b30943ab3->leave($__internal_9dac9e6a4c97ee808dcc47bc02ca982ffb93410e13cc1259461b927b30943ab3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
    }
}
