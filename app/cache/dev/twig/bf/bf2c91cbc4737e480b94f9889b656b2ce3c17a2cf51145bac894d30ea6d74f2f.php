<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_08f1f013ee6a1a0739281bc4b4d9f12f030ae801d0ea2097ef5cec00fd6caa79 extends Twig_Template
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
        $__internal_bffabee97d66b998f3ff8b4a9a77a985fc57af82a41c097c438516876912e193 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bffabee97d66b998f3ff8b4a9a77a985fc57af82a41c097c438516876912e193->enter($__internal_bffabee97d66b998f3ff8b4a9a77a985fc57af82a41c097c438516876912e193_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_bffabee97d66b998f3ff8b4a9a77a985fc57af82a41c097c438516876912e193->leave($__internal_bffabee97d66b998f3ff8b4a9a77a985fc57af82a41c097c438516876912e193_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
    }
}
