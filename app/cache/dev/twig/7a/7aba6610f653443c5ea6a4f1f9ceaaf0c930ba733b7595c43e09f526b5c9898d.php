<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_247c7e18c9b13da4e05344ba268899a5837eae2994d9ea98e307e5091e151383 extends Twig_Template
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
        $__internal_8969e58e2a0ced597043895ae436022bcb5f30ab70d34d0858da4bca0da7599b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8969e58e2a0ced597043895ae436022bcb5f30ab70d34d0858da4bca0da7599b->enter($__internal_8969e58e2a0ced597043895ae436022bcb5f30ab70d34d0858da4bca0da7599b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_8969e58e2a0ced597043895ae436022bcb5f30ab70d34d0858da4bca0da7599b->leave($__internal_8969e58e2a0ced597043895ae436022bcb5f30ab70d34d0858da4bca0da7599b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
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
