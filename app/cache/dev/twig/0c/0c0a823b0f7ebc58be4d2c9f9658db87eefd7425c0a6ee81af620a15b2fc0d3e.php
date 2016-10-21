<?php

/* @Twig/Exception/exception.css.twig */
class __TwigTemplate_a263e476a222ec754a4bebf4a8fdbaf92cb871bae7211d86b30082cc65cb9a5b extends Twig_Template
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
        $__internal_4b8215379326fecf55955c63cd17e63dd008aef44244d5b0ff8e706c712d39db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b8215379326fecf55955c63cd17e63dd008aef44244d5b0ff8e706c712d39db->enter($__internal_4b8215379326fecf55955c63cd17e63dd008aef44244d5b0ff8e706c712d39db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_4b8215379326fecf55955c63cd17e63dd008aef44244d5b0ff8e706c712d39db->leave($__internal_4b8215379326fecf55955c63cd17e63dd008aef44244d5b0ff8e706c712d39db_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }

    public function getSource()
    {
        return "/*
{% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}
*/
";
    }
}
