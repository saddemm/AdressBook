<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_bee8dae9f20cb2fd88f81826fd23e4d32f6d19f0b8f81bf161790cf0f7683bd2 extends Twig_Template
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
        $__internal_9d95178f0f1eec82b429e8d99a8787734cb10398ec5340417e4dbf04d6df8894 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d95178f0f1eec82b429e8d99a8787734cb10398ec5340417e4dbf04d6df8894->enter($__internal_9d95178f0f1eec82b429e8d99a8787734cb10398ec5340417e4dbf04d6df8894_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_9d95178f0f1eec82b429e8d99a8787734cb10398ec5340417e4dbf04d6df8894->leave($__internal_9d95178f0f1eec82b429e8d99a8787734cb10398ec5340417e4dbf04d6df8894_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
    }
}
