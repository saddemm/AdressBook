<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_3ceb5b70c6be914fae74437b0e98c4adb08d48f39531ae27b46d292dfe771e7a extends Twig_Template
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
        $__internal_b52532aad0b8caccf38bcf987ee5aa192f3c05d02dfb2a9022c293304b7bbd73 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b52532aad0b8caccf38bcf987ee5aa192f3c05d02dfb2a9022c293304b7bbd73->enter($__internal_b52532aad0b8caccf38bcf987ee5aa192f3c05d02dfb2a9022c293304b7bbd73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_b52532aad0b8caccf38bcf987ee5aa192f3c05d02dfb2a9022c293304b7bbd73->leave($__internal_b52532aad0b8caccf38bcf987ee5aa192f3c05d02dfb2a9022c293304b7bbd73_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
    }
}
