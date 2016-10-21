<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_04246b33a4b0a3ce7fdcfae674f3bc191bbb89341bffbb9d8b94f2658644a995 extends Twig_Template
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
        $__internal_ec0a896fbd770b3f92773dc34ea5fe9ee0bd78c8bb55846901bae7496125b9b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec0a896fbd770b3f92773dc34ea5fe9ee0bd78c8bb55846901bae7496125b9b0->enter($__internal_ec0a896fbd770b3f92773dc34ea5fe9ee0bd78c8bb55846901bae7496125b9b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_ec0a896fbd770b3f92773dc34ea5fe9ee0bd78c8bb55846901bae7496125b9b0->leave($__internal_ec0a896fbd770b3f92773dc34ea5fe9ee0bd78c8bb55846901bae7496125b9b0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
    }
}
