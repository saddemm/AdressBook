<?php

/* @Twig/Exception/error.css.twig */
class __TwigTemplate_f6dd6076d49b3d1d851a4581e4c8945f544d8dbbec7e36481ba185b61f1da6b3 extends Twig_Template
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
        $__internal_14aa6474f170ed019ae01a7169d250b707471768b4b8434884664e508695bd9e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14aa6474f170ed019ae01a7169d250b707471768b4b8434884664e508695bd9e->enter($__internal_14aa6474f170ed019ae01a7169d250b707471768b4b8434884664e508695bd9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_14aa6474f170ed019ae01a7169d250b707471768b4b8434884664e508695bd9e->leave($__internal_14aa6474f170ed019ae01a7169d250b707471768b4b8434884664e508695bd9e_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.css.twig";
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
