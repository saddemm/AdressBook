<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_d0702b1929e7a5ea78e497740cd08bd845328c49ad641b9f3165ea0cbcb71976 extends Twig_Template
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
        $__internal_7862adaa0b274828334426c8997acea79131517b83f14d8dec2249bf42618065 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7862adaa0b274828334426c8997acea79131517b83f14d8dec2249bf42618065->enter($__internal_7862adaa0b274828334426c8997acea79131517b83f14d8dec2249bf42618065_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_7862adaa0b274828334426c8997acea79131517b83f14d8dec2249bf42618065->leave($__internal_7862adaa0b274828334426c8997acea79131517b83f14d8dec2249bf42618065_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
    }
}
