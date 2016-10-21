<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_30c685c895828eadac755c49de2a563a7c93f03f2c6cc80a4b227741f672d465 extends Twig_Template
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
        $__internal_291506c0ae80d1a45e3b1e346d54124e2f088582469ba3687b8ada35cf1d29b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_291506c0ae80d1a45e3b1e346d54124e2f088582469ba3687b8ada35cf1d29b1->enter($__internal_291506c0ae80d1a45e3b1e346d54124e2f088582469ba3687b8ada35cf1d29b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_291506c0ae80d1a45e3b1e346d54124e2f088582469ba3687b8ada35cf1d29b1->leave($__internal_291506c0ae80d1a45e3b1e346d54124e2f088582469ba3687b8ada35cf1d29b1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
    }
}
