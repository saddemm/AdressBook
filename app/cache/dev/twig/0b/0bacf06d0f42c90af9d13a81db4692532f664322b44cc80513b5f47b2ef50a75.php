<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_3e31eaaf0614dd47d2d48ebbf735fec34f8c174e8c0be9b35e61d54bc531a726 extends Twig_Template
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
        $__internal_86e96b60987ea5611d54f95a22b0fc0f3b49f00f18dc5f032d29849ebe9d7f5b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86e96b60987ea5611d54f95a22b0fc0f3b49f00f18dc5f032d29849ebe9d7f5b->enter($__internal_86e96b60987ea5611d54f95a22b0fc0f3b49f00f18dc5f032d29849ebe9d7f5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_86e96b60987ea5611d54f95a22b0fc0f3b49f00f18dc5f032d29849ebe9d7f5b->leave($__internal_86e96b60987ea5611d54f95a22b0fc0f3b49f00f18dc5f032d29849ebe9d7f5b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
