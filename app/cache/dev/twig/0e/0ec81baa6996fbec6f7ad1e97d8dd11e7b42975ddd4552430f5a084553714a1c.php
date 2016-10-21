<?php

/* @Twig/Exception/exception.json.twig */
class __TwigTemplate_58fd7d9572cfe8a2d8219c983b51bd092ba1a782b48dc55f633b3dffcd293fc8 extends Twig_Template
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
        $__internal_9e8fad9c0b134dbe80ee9bdd5a268e13b9a394de25e61a5668891fa3cf07c025 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e8fad9c0b134dbe80ee9bdd5a268e13b9a394de25e61a5668891fa3cf07c025->enter($__internal_9e8fad9c0b134dbe80ee9bdd5a268e13b9a394de25e61a5668891fa3cf07c025_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_9e8fad9c0b134dbe80ee9bdd5a268e13b9a394de25e61a5668891fa3cf07c025->leave($__internal_9e8fad9c0b134dbe80ee9bdd5a268e13b9a394de25e61a5668891fa3cf07c025_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.json.twig";
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
        return "{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
";
    }
}
