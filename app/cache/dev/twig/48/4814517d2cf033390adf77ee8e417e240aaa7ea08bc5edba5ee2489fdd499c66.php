<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_1e87934d0b992aabe99802fb62abaea70b5579ad83dcea907c5c640c5d4f0c18 extends Twig_Template
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
        $__internal_7607876738cf37b08335a2a6a576c4d06ae6a6ca1c52f7ad0c462205b1bd0d24 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7607876738cf37b08335a2a6a576c4d06ae6a6ca1c52f7ad0c462205b1bd0d24->enter($__internal_7607876738cf37b08335a2a6a576c4d06ae6a6ca1c52f7ad0c462205b1bd0d24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_7607876738cf37b08335a2a6a576c4d06ae6a6ca1c52f7ad0c462205b1bd0d24->leave($__internal_7607876738cf37b08335a2a6a576c4d06ae6a6ca1c52f7ad0c462205b1bd0d24_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
    }
}
