<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_3aecf531fb6af9802c5e5cce8e8db1f705f6831a4dba915904994f8b3a7cc774 extends Twig_Template
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
        $__internal_193cbc1033f444e25a4137609a23d2d2baffb7bd5fe8d46379e8d9c927d46e2b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_193cbc1033f444e25a4137609a23d2d2baffb7bd5fe8d46379e8d9c927d46e2b->enter($__internal_193cbc1033f444e25a4137609a23d2d2baffb7bd5fe8d46379e8d9c927d46e2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_193cbc1033f444e25a4137609a23d2d2baffb7bd5fe8d46379e8d9c927d46e2b->leave($__internal_193cbc1033f444e25a4137609a23d2d2baffb7bd5fe8d46379e8d9c927d46e2b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
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
