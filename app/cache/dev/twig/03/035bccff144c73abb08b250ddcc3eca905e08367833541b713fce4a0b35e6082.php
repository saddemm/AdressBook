<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_b0a9f836935c8fda37cd53285e07c50f5d40748737801e1f2e948fa590fdac09 extends Twig_Template
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
        $__internal_2385be278d81b9e66a66605a35ef12e563097e0b70cf18d93e4cb6c2bdaedb7f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2385be278d81b9e66a66605a35ef12e563097e0b70cf18d93e4cb6c2bdaedb7f->enter($__internal_2385be278d81b9e66a66605a35ef12e563097e0b70cf18d93e4cb6c2bdaedb7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget',  array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_2385be278d81b9e66a66605a35ef12e563097e0b70cf18d93e4cb6c2bdaedb7f->leave($__internal_2385be278d81b9e66a66605a35ef12e563097e0b70cf18d93e4cb6c2bdaedb7f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'button_widget',  array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
    }
}
