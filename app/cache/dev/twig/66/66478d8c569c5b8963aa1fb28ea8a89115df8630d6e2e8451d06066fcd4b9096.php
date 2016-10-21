<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_04f3510395e195ef311cc19627c4402cd8ea86d80c2d78992daee4c953b7f3c7 extends Twig_Template
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
        $__internal_8c38fcd5e903f953b30bcdcbdb7ca5d5b45165fb08985798504d94b42f2f5f2e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c38fcd5e903f953b30bcdcbdb7ca5d5b45165fb08985798504d94b42f2f5f2e->enter($__internal_8c38fcd5e903f953b30bcdcbdb7ca5d5b45165fb08985798504d94b42f2f5f2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_8c38fcd5e903f953b30bcdcbdb7ca5d5b45165fb08985798504d94b42f2f5f2e->leave($__internal_8c38fcd5e903f953b30bcdcbdb7ca5d5b45165fb08985798504d94b42f2f5f2e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
    }
}
