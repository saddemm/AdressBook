<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_1d917e3077f5342c8ca9da6ce0ccab13ae3e261c1e2bed168d2c212403acce6f extends Twig_Template
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
        $__internal_c26209c8a6c76ec5b0d9b769dd4e08155211cd2102a827becfb8e742dfdbe7ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c26209c8a6c76ec5b0d9b769dd4e08155211cd2102a827becfb8e742dfdbe7ba->enter($__internal_c26209c8a6c76ec5b0d9b769dd4e08155211cd2102a827becfb8e742dfdbe7ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_c26209c8a6c76ec5b0d9b769dd4e08155211cd2102a827becfb8e742dfdbe7ba->leave($__internal_c26209c8a6c76ec5b0d9b769dd4e08155211cd2102a827becfb8e742dfdbe7ba_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo str_replace('{{ widget }}', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
    }
}
