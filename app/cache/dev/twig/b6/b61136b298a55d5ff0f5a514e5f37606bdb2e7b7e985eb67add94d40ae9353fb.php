<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_d7acde37a71f391aa71e9c38b2f9a725ae561a24f99a4cd53fe7ebecc46e6432 extends Twig_Template
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
        $__internal_53e6986635fab8729e76fad26c3268469ee2d4bbc7a405911fc1a71e72dfbea6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53e6986635fab8729e76fad26c3268469ee2d4bbc7a405911fc1a71e72dfbea6->enter($__internal_53e6986635fab8729e76fad26c3268469ee2d4bbc7a405911fc1a71e72dfbea6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_53e6986635fab8729e76fad26c3268469ee2d4bbc7a405911fc1a71e72dfbea6->leave($__internal_53e6986635fab8729e76fad26c3268469ee2d4bbc7a405911fc1a71e72dfbea6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
    }
}
