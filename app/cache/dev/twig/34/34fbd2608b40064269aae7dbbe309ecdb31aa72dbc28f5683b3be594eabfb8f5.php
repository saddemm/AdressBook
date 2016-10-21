<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_42ccf1626a9985b02527689711945e2e7c4e7ccea0dc758e6b2a63e849ac62e2 extends Twig_Template
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
        $__internal_b528f61546cfbdbfd5bb9f41f7d76f1805e87b0f8a9d51aedd52c634ec99dad6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b528f61546cfbdbfd5bb9f41f7d76f1805e87b0f8a9d51aedd52c634ec99dad6->enter($__internal_b528f61546cfbdbfd5bb9f41f7d76f1805e87b0f8a9d51aedd52c634ec99dad6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_b528f61546cfbdbfd5bb9f41f7d76f1805e87b0f8a9d51aedd52c634ec99dad6->leave($__internal_b528f61546cfbdbfd5bb9f41f7d76f1805e87b0f8a9d51aedd52c634ec99dad6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
    }
}
