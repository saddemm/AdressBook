<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_f441fe36a91f8529d6351300accfdd9afd2879f90117090ee3ad0a8190d740d2 extends Twig_Template
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
        $__internal_be6155e4ce38799935f4edbc9ad38fd1fbf80bfd6bf61ec14bbdce8d5cae15ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be6155e4ce38799935f4edbc9ad38fd1fbf80bfd6bf61ec14bbdce8d5cae15ce->enter($__internal_be6155e4ce38799935f4edbc9ad38fd1fbf80bfd6bf61ec14bbdce8d5cae15ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_be6155e4ce38799935f4edbc9ad38fd1fbf80bfd6bf61ec14bbdce8d5cae15ce->leave($__internal_be6155e4ce38799935f4edbc9ad38fd1fbf80bfd6bf61ec14bbdce8d5cae15ce_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
    }
}
