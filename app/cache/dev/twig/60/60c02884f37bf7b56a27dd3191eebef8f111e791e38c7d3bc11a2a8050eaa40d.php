<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_15162db49e2081f6fb4c7e3f6a98ca2777f2c9266a6a81d8134109e32be0dc82 extends Twig_Template
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
        $__internal_1f61e0b08dc0ff399082c0c48c576b14804b6437ad688e1105fd90ccfc4e88b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f61e0b08dc0ff399082c0c48c576b14804b6437ad688e1105fd90ccfc4e88b7->enter($__internal_1f61e0b08dc0ff399082c0c48c576b14804b6437ad688e1105fd90ccfc4e88b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_1f61e0b08dc0ff399082c0c48c576b14804b6437ad688e1105fd90ccfc4e88b7->leave($__internal_1f61e0b08dc0ff399082c0c48c576b14804b6437ad688e1105fd90ccfc4e88b7_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
