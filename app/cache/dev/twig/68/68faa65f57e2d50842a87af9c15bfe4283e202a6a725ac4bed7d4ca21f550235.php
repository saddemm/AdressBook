<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_00c692b0699750083d8b622d9ae868ace827e7168b48a19b578a4e7ce11c8e23 extends Twig_Template
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
        $__internal_ca7a8ccf1eb6b0a55910ee757272484e2e92f535bd0c86d778517df7e3b368f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca7a8ccf1eb6b0a55910ee757272484e2e92f535bd0c86d778517df7e3b368f9->enter($__internal_ca7a8ccf1eb6b0a55910ee757272484e2e92f535bd0c86d778517df7e3b368f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget',  array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_ca7a8ccf1eb6b0a55910ee757272484e2e92f535bd0c86d778517df7e3b368f9->leave($__internal_ca7a8ccf1eb6b0a55910ee757272484e2e92f535bd0c86d778517df7e3b368f9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'button_widget',  array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
    }
}
