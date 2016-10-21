<?php

/* @Framework/Form/range_widget.html.php */
class __TwigTemplate_c0ad57bf891e454e344b39bd917de4eb6764ed3a0670a507a0481139b4beeb7b extends Twig_Template
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
        $__internal_3c432d23ba3ab412cbae8ac65c2518303910d1174dbd6e33668adde9d650cc54 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c432d23ba3ab412cbae8ac65c2518303910d1174dbd6e33668adde9d650cc54->enter($__internal_3c432d23ba3ab412cbae8ac65c2518303910d1174dbd6e33668adde9d650cc54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/range_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'range'));
";
        
        $__internal_3c432d23ba3ab412cbae8ac65c2518303910d1174dbd6e33668adde9d650cc54->leave($__internal_3c432d23ba3ab412cbae8ac65c2518303910d1174dbd6e33668adde9d650cc54_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/range_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'range'));
";
    }
}
