<?php

/* @Twig/Exception/error.txt.twig */
class __TwigTemplate_3c3fc12576ab4abed13c9e6a6b6858d7c90809bcfd3d035a525c4d5fc529ecdd extends Twig_Template
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
        $__internal_2ed6f259b73664c2e507958279af4333081e6ae2b2260e2398f56e05283f6be0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ed6f259b73664c2e507958279af4333081e6ae2b2260e2398f56e05283f6be0->enter($__internal_2ed6f259b73664c2e507958279af4333081e6ae2b2260e2398f56e05283f6be0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_2ed6f259b73664c2e507958279af4333081e6ae2b2260e2398f56e05283f6be0->leave($__internal_2ed6f259b73664c2e507958279af4333081e6ae2b2260e2398f56e05283f6be0_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  22 => 1,);
    }

    public function getSource()
    {
        return "Oops! An Error Occurred
=======================

The server returned a \"{{ status_code }} {{ status_text }}\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
    }
}
