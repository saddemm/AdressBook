<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_6999191b96b10aae415597437b5794e21fb129d9dcbe0bee645e0b57eea21628 extends Twig_Template
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
        $__internal_5daa68d3f8925bbdc6c887ffe946ce38d116b2ae5394b63f0b8ffaa9d3e37208 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5daa68d3f8925bbdc6c887ffe946ce38d116b2ae5394b63f0b8ffaa9d3e37208->enter($__internal_5daa68d3f8925bbdc6c887ffe946ce38d116b2ae5394b63f0b8ffaa9d3e37208_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_5daa68d3f8925bbdc6c887ffe946ce38d116b2ae5394b63f0b8ffaa9d3e37208->leave($__internal_5daa68d3f8925bbdc6c887ffe946ce38d116b2ae5394b63f0b8ffaa9d3e37208_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
