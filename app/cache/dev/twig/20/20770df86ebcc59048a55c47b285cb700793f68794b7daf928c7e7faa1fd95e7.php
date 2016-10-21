<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_ee8dade6fa0429ecbb3df54ad33e65bdfc610cac10687a5963dd41183ed03425 extends Twig_Template
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
        $__internal_bb5848b14f69edfab00f70d77507e6daa69084d042bb36ce8c0f2a83852d5c7b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb5848b14f69edfab00f70d77507e6daa69084d042bb36ce8c0f2a83852d5c7b->enter($__internal_bb5848b14f69edfab00f70d77507e6daa69084d042bb36ce8c0f2a83852d5c7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_bb5848b14f69edfab00f70d77507e6daa69084d042bb36ce8c0f2a83852d5c7b->leave($__internal_bb5848b14f69edfab00f70d77507e6daa69084d042bb36ce8c0f2a83852d5c7b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
    }
}
