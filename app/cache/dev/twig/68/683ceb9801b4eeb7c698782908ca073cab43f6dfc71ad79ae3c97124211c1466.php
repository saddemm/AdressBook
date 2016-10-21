<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_03845448269a94e0a03ee45ecd6b7337df8502a7b5cf25859a584f19da465650 extends Twig_Template
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
        $__internal_94f203bd33f927c1efe9a639c17c21481c0d3f6dd93c14ad94a9c085af118da4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94f203bd33f927c1efe9a639c17c21481c0d3f6dd93c14ad94a9c085af118da4->enter($__internal_94f203bd33f927c1efe9a639c17c21481c0d3f6dd93c14ad94a9c085af118da4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_94f203bd33f927c1efe9a639c17c21481c0d3f6dd93c14ad94a9c085af118da4->leave($__internal_94f203bd33f927c1efe9a639c17c21481c0d3f6dd93c14ad94a9c085af118da4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
    }
}
