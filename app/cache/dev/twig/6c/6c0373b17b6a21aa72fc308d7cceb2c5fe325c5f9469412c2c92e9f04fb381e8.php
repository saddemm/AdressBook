<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_a45c5a25e53d95a5250315bbb9475acf477274b40703a51637e3d672c18aa9c2 extends Twig_Template
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
        $__internal_31da3a49af7470b3c36d9996476e3e9f1dcddde765e8f06b278cd27811f0bb5c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31da3a49af7470b3c36d9996476e3e9f1dcddde765e8f06b278cd27811f0bb5c->enter($__internal_31da3a49af7470b3c36d9996476e3e9f1dcddde765e8f06b278cd27811f0bb5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.atom.twig", 1)->display($context);
        
        $__internal_31da3a49af7470b3c36d9996476e3e9f1dcddde765e8f06b278cd27811f0bb5c->leave($__internal_31da3a49af7470b3c36d9996476e3e9f1dcddde765e8f06b278cd27811f0bb5c_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
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
