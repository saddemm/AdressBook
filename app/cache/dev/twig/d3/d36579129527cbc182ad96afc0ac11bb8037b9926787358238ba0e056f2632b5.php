<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_1be802cdf7dedc396451bacf780396a60ae3d82b1e8f4c194951750f7279b530 extends Twig_Template
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
        $__internal_7faa79c668b382d3877f2fce7130257007e4c154bf198b0ba04f601ac85d1cea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7faa79c668b382d3877f2fce7130257007e4c154bf198b0ba04f601ac85d1cea->enter($__internal_7faa79c668b382d3877f2fce7130257007e4c154bf198b0ba04f601ac85d1cea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_7faa79c668b382d3877f2fce7130257007e4c154bf198b0ba04f601ac85d1cea->leave($__internal_7faa79c668b382d3877f2fce7130257007e4c154bf198b0ba04f601ac85d1cea_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'password')) ?>
";
    }
}
