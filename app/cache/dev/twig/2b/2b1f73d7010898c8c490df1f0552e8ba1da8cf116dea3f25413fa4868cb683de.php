<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_b27fcf03811b0374e13f33b39bb8852f5038eec3890cee8c62823725a678b490 extends Twig_Template
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
        $__internal_b90c651d269994fbc85a74204e2210c2b32e2560be66598f612e04552385ae29 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b90c651d269994fbc85a74204e2210c2b32e2560be66598f612e04552385ae29->enter($__internal_b90c651d269994fbc85a74204e2210c2b32e2560be66598f612e04552385ae29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_b90c651d269994fbc85a74204e2210c2b32e2560be66598f612e04552385ae29->leave($__internal_b90c651d269994fbc85a74204e2210c2b32e2560be66598f612e04552385ae29_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'search')) ?>
";
    }
}
