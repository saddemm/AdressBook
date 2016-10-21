<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_40e55389de691eed9dd400383d2f428b2456afacc9efb7c03c3f10f6ac69791e extends Twig_Template
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
        $__internal_69bc135e131a61a1801b10f408680b50bf3d575026c353388a20db9528cfd0d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69bc135e131a61a1801b10f408680b50bf3d575026c353388a20db9528cfd0d0->enter($__internal_69bc135e131a61a1801b10f408680b50bf3d575026c353388a20db9528cfd0d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_69bc135e131a61a1801b10f408680b50bf3d575026c353388a20db9528cfd0d0->leave($__internal_69bc135e131a61a1801b10f408680b50bf3d575026c353388a20db9528cfd0d0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
    }
}
