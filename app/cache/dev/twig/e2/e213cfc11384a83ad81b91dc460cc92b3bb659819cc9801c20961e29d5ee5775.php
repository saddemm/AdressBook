<?php

/* @Twig/Exception/exception.rdf.twig */
class __TwigTemplate_62e057c4ac456092748dc4f78b665c4e7b4d2bb8c4b61c795f412f1577c6e019 extends Twig_Template
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
        $__internal_92ce6d2fbc37894d6d5a1b2517a5c45c0a883757dff5f3cceac2384b98b8ed2c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92ce6d2fbc37894d6d5a1b2517a5c45c0a883757dff5f3cceac2384b98b8ed2c->enter($__internal_92ce6d2fbc37894d6d5a1b2517a5c45c0a883757dff5f3cceac2384b98b8ed2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_92ce6d2fbc37894d6d5a1b2517a5c45c0a883757dff5f3cceac2384b98b8ed2c->leave($__internal_92ce6d2fbc37894d6d5a1b2517a5c45c0a883757dff5f3cceac2384b98b8ed2c_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.rdf.twig";
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
