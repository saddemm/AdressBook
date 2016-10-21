<?php

/* @Twig/Exception/error.rdf.twig */
class __TwigTemplate_13ee74ca62b682cdbc40b8e75c6f65fc3d3685461eec713e56d2608cdd7471f5 extends Twig_Template
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
        $__internal_35bcc3614d4a3069a94e896daa209e860112476ca6ce89ab044fc74941c29d7c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35bcc3614d4a3069a94e896daa209e860112476ca6ce89ab044fc74941c29d7c->enter($__internal_35bcc3614d4a3069a94e896daa209e860112476ca6ce89ab044fc74941c29d7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.rdf.twig", 1)->display($context);
        
        $__internal_35bcc3614d4a3069a94e896daa209e860112476ca6ce89ab044fc74941c29d7c->leave($__internal_35bcc3614d4a3069a94e896daa209e860112476ca6ce89ab044fc74941c29d7c_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "{% include '@Twig/Exception/error.xml.twig' %}
";
    }
}
