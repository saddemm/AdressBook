<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_710faef858f332136e95438d86921efb5497805db496c57e71e96329a3742d33 extends Twig_Template
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
        $__internal_64faf8bd58b717c832c4b5d68dbc1d1b1ef8a73880213e195e7ffc89659f4557 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64faf8bd58b717c832c4b5d68dbc1d1b1ef8a73880213e195e7ffc89659f4557->enter($__internal_64faf8bd58b717c832c4b5d68dbc1d1b1ef8a73880213e195e7ffc89659f4557_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_64faf8bd58b717c832c4b5d68dbc1d1b1ef8a73880213e195e7ffc89659f4557->leave($__internal_64faf8bd58b717c832c4b5d68dbc1d1b1ef8a73880213e195e7ffc89659f4557_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
    }
}
