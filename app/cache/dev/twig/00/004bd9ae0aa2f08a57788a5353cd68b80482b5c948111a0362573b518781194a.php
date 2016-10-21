<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_c4cc4d04c0848b55a7ff431d2071ef22160c21c9c48265cc4a88b2238ede26e6 extends Twig_Template
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
        $__internal_531a30c5534325178ca3b822af71ea7e470cca206343f51d929b4ed4bb526a1a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_531a30c5534325178ca3b822af71ea7e470cca206343f51d929b4ed4bb526a1a->enter($__internal_531a30c5534325178ca3b822af71ea7e470cca206343f51d929b4ed4bb526a1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_531a30c5534325178ca3b822af71ea7e470cca206343f51d929b4ed4bb526a1a->leave($__internal_531a30c5534325178ca3b822af71ea7e470cca206343f51d929b4ed4bb526a1a_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.atom.twig";
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
        return "{% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}
";
    }
}
