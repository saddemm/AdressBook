<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_9c92edc8bd59bc21341d53f186e8a4db46bb8e53e459b9abe740d1a3d163e196 extends Twig_Template
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
        $__internal_bfcb247345cdada3549621f3fff5b101fcf7f326d92d1cb267513b0a78dc8531 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bfcb247345cdada3549621f3fff5b101fcf7f326d92d1cb267513b0a78dc8531->enter($__internal_bfcb247345cdada3549621f3fff5b101fcf7f326d92d1cb267513b0a78dc8531_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_bfcb247345cdada3549621f3fff5b101fcf7f326d92d1cb267513b0a78dc8531->leave($__internal_bfcb247345cdada3549621f3fff5b101fcf7f326d92d1cb267513b0a78dc8531_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
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
