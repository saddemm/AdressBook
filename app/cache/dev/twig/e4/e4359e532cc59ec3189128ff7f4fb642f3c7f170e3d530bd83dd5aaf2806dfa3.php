<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_343433736207a11b4d34aa2d1e42941a27d0ca285fc4b9f450a5b8c529c898e4 extends Twig_Template
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
        $__internal_b035a4dfae09c92b31746ddec47d04b1e37c4d1738e1efc265c00472f9d53be3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b035a4dfae09c92b31746ddec47d04b1e37c4d1738e1efc265c00472f9d53be3->enter($__internal_b035a4dfae09c92b31746ddec47d04b1e37c4d1738e1efc265c00472f9d53be3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_b035a4dfae09c92b31746ddec47d04b1e37c4d1738e1efc265c00472f9d53be3->leave($__internal_b035a4dfae09c92b31746ddec47d04b1e37c4d1738e1efc265c00472f9d53be3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
    }
}
