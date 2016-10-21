<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_1c6cc4f2717d25b8f3f490ee4eeb56a7a5b03223815fc7cd8765c5937ba3f09d extends Twig_Template
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
        $__internal_ebf4ed2832ff434b21bec59a885347847857f86f59ac65d84f7bf4dff5978bf1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ebf4ed2832ff434b21bec59a885347847857f86f59ac65d84f7bf4dff5978bf1->enter($__internal_ebf4ed2832ff434b21bec59a885347847857f86f59ac65d84f7bf4dff5978bf1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_ebf4ed2832ff434b21bec59a885347847857f86f59ac65d84f7bf4dff5978bf1->leave($__internal_ebf4ed2832ff434b21bec59a885347847857f86f59ac65d84f7bf4dff5978bf1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
    }
}
