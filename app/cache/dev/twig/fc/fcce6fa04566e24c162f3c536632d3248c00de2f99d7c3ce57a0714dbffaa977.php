<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_c36557013fc019930e6efc81693a5a011f49993d713c3947ea9abd66ef5ba99d extends Twig_Template
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
        $__internal_7eface7140bf07b706bf753e7ee278cc05a7e93a258cd39c0a868a3fb7c31a4c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7eface7140bf07b706bf753e7ee278cc05a7e93a258cd39c0a868a3fb7c31a4c->enter($__internal_7eface7140bf07b706bf753e7ee278cc05a7e93a258cd39c0a868a3fb7c31a4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_7eface7140bf07b706bf753e7ee278cc05a7e93a258cd39c0a868a3fb7c31a4c->leave($__internal_7eface7140bf07b706bf753e7ee278cc05a7e93a258cd39c0a868a3fb7c31a4c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
    }
}
