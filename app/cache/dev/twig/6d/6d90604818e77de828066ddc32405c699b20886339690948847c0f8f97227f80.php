<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_4064f7412a443a56829a7d3978d3572f6eeedba8be3f4fc7f2b4816957dc91ec extends Twig_Template
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
        $__internal_4f1a9a91579a5505170b6f1eb460f7296b7ca6ecdb03b09ba28c1126aab01736 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f1a9a91579a5505170b6f1eb460f7296b7ca6ecdb03b09ba28c1126aab01736->enter($__internal_4f1a9a91579a5505170b6f1eb460f7296b7ca6ecdb03b09ba28c1126aab01736_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

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
        
        $__internal_4f1a9a91579a5505170b6f1eb460f7296b7ca6ecdb03b09ba28c1126aab01736->leave($__internal_4f1a9a91579a5505170b6f1eb460f7296b7ca6ecdb03b09ba28c1126aab01736_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
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
