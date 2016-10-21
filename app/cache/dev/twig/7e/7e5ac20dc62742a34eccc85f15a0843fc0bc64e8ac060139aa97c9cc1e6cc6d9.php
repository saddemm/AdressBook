<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_5779a65275ea14f549b9383c81219c26c40d842906428061ca7e11c4838abe3a extends Twig_Template
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
        $__internal_ce56dc84b919bafe7609c5a7e6b44d9f6e64748c3d4173833ec815f40f457633 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce56dc84b919bafe7609c5a7e6b44d9f6e64748c3d4173833ec815f40f457633->enter($__internal_ce56dc84b919bafe7609c5a7e6b44d9f6e64748c3d4173833ec815f40f457633_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_ce56dc84b919bafe7609c5a7e6b44d9f6e64748c3d4173833ec815f40f457633->leave($__internal_ce56dc84b919bafe7609c5a7e6b44d9f6e64748c3d4173833ec815f40f457633_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'text')) ?>
";
    }
}
