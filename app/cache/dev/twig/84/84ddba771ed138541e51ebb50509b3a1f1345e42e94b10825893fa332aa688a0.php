<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_fad57bf9e1085b0f5aa4c0b42196fdb24a991be2de150a3f9100af23fd73314f extends Twig_Template
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
        $__internal_4bf2c2494261639c96f0fc99dac27fb43e81eab13a335dd659b73c65fbe8a355 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4bf2c2494261639c96f0fc99dac27fb43e81eab13a335dd659b73c65fbe8a355->enter($__internal_4bf2c2494261639c96f0fc99dac27fb43e81eab13a335dd659b73c65fbe8a355_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_4bf2c2494261639c96f0fc99dac27fb43e81eab13a335dd659b73c65fbe8a355->leave($__internal_4bf2c2494261639c96f0fc99dac27fb43e81eab13a335dd659b73c65fbe8a355_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
    }
}
