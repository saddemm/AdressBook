<?php

/* @Twig/Exception/exception.js.twig */
class __TwigTemplate_65c8b3655f54a0d52dbfca46852f28e0b4a971f740990dba9a142eda7961ab74 extends Twig_Template
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
        $__internal_061cf067616be482edc8e521198ed552b930fa35d3fd847d8cbe1dc027332e54 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_061cf067616be482edc8e521198ed552b930fa35d3fd847d8cbe1dc027332e54->enter($__internal_061cf067616be482edc8e521198ed552b930fa35d3fd847d8cbe1dc027332e54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_061cf067616be482edc8e521198ed552b930fa35d3fd847d8cbe1dc027332e54->leave($__internal_061cf067616be482edc8e521198ed552b930fa35d3fd847d8cbe1dc027332e54_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.js.twig";
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
