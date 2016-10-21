<?php

/* @Twig/Exception/error.json.twig */
class __TwigTemplate_e715d8fc2fb5c48b18dedf970a76286dca3e0d9043dde49d362b69c0dfc3bf36 extends Twig_Template
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
        $__internal_80c48453837f48272432e11704737339fa8bc7dba7bdf5509930b3c5023fb8bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80c48453837f48272432e11704737339fa8bc7dba7bdf5509930b3c5023fb8bf->enter($__internal_80c48453837f48272432e11704737339fa8bc7dba7bdf5509930b3c5023fb8bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_80c48453837f48272432e11704737339fa8bc7dba7bdf5509930b3c5023fb8bf->leave($__internal_80c48453837f48272432e11704737339fa8bc7dba7bdf5509930b3c5023fb8bf_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.json.twig";
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
        return "{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
";
    }
}
