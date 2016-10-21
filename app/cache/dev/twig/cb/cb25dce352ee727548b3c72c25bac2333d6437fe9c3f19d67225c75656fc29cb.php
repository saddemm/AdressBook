<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_4706bcb5c0084baf5a85ba07f47f22e1d8364b11687464dde627eefab0425487 extends Twig_Template
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
        $__internal_e1099538a8e075f7debb78920d7f4799506db8eb49703d7c8fa54740d4b1276e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1099538a8e075f7debb78920d7f4799506db8eb49703d7c8fa54740d4b1276e->enter($__internal_e1099538a8e075f7debb78920d7f4799506db8eb49703d7c8fa54740d4b1276e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_e1099538a8e075f7debb78920d7f4799506db8eb49703d7c8fa54740d4b1276e->leave($__internal_e1099538a8e075f7debb78920d7f4799506db8eb49703d7c8fa54740d4b1276e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
    }
}
