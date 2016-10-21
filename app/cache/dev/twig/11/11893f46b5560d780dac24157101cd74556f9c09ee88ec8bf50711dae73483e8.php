<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_bb698c0a213c49cccc7a75508ed327cb67b7a98a0117b1ef475974d0e9ccb9e8 extends Twig_Template
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
        $__internal_e27b61746883423ccec1e909b1b3a72beda5eb64ae6e4f84da44115056b45164 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e27b61746883423ccec1e909b1b3a72beda5eb64ae6e4f84da44115056b45164->enter($__internal_e27b61746883423ccec1e909b1b3a72beda5eb64ae6e4f84da44115056b45164_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_e27b61746883423ccec1e909b1b3a72beda5eb64ae6e4f84da44115056b45164->leave($__internal_e27b61746883423ccec1e909b1b3a72beda5eb64ae6e4f84da44115056b45164_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
