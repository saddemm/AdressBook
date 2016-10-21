<?php

/* @Twig/Exception/error.js.twig */
class __TwigTemplate_07279891966f2c606b460b54503b43347855571b39647547c88be37720bde3f0 extends Twig_Template
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
        $__internal_da7466d90dcaeb084dfeb40e39dfaeb7f9cf49a9637dce577dd8397006eb7816 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da7466d90dcaeb084dfeb40e39dfaeb7f9cf49a9637dce577dd8397006eb7816->enter($__internal_da7466d90dcaeb084dfeb40e39dfaeb7f9cf49a9637dce577dd8397006eb7816_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_da7466d90dcaeb084dfeb40e39dfaeb7f9cf49a9637dce577dd8397006eb7816->leave($__internal_da7466d90dcaeb084dfeb40e39dfaeb7f9cf49a9637dce577dd8397006eb7816_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }

    public function getSource()
    {
        return "/*
{{ status_code }} {{ status_text }}

*/
";
    }
}
