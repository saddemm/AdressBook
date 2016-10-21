<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_6ef6b8275a6619607a11e45ab93eac2cf8590ee86b4b3ba291459b736a62d997 extends Twig_Template
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
        $__internal_d7f2107e2ed54e37b15303e9f0fe99450d32da0b47bdd8be0af8813ef79133a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7f2107e2ed54e37b15303e9f0fe99450d32da0b47bdd8be0af8813ef79133a1->enter($__internal_d7f2107e2ed54e37b15303e9f0fe99450d32da0b47bdd8be0af8813ef79133a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_d7f2107e2ed54e37b15303e9f0fe99450d32da0b47bdd8be0af8813ef79133a1->leave($__internal_d7f2107e2ed54e37b15303e9f0fe99450d32da0b47bdd8be0af8813ef79133a1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'url')) ?>
";
    }
}
