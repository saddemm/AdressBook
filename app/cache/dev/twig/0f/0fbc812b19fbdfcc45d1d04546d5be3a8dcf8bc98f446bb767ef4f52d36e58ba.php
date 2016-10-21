<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_d188f84a5851760a9a3a30d73b2b7e95474b979f99a7c3ffbdd53c250498b503 extends Twig_Template
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
        $__internal_1bffe5c50d7acf2219b53153106e734912e6cd47ac52836c12014ecf66fa5c4c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1bffe5c50d7acf2219b53153106e734912e6cd47ac52836c12014ecf66fa5c4c->enter($__internal_1bffe5c50d7acf2219b53153106e734912e6cd47ac52836c12014ecf66fa5c4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_1bffe5c50d7acf2219b53153106e734912e6cd47ac52836c12014ecf66fa5c4c->leave($__internal_1bffe5c50d7acf2219b53153106e734912e6cd47ac52836c12014ecf66fa5c4c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
    }
}
