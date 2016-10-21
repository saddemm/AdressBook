<?php

/* @Twig/Exception/error.xml.twig */
class __TwigTemplate_496a87f4269ee7ad295b8242d5704e69dfefc041f797f569cf1940166c28a07a extends Twig_Template
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
        $__internal_259457469f88157b47a4e0dc63f535a95ca0bd9f3d50eb7e5b50060aa6e98571 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_259457469f88157b47a4e0dc63f535a95ca0bd9f3d50eb7e5b50060aa6e98571->enter($__internal_259457469f88157b47a4e0dc63f535a95ca0bd9f3d50eb7e5b50060aa6e98571_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_259457469f88157b47a4e0dc63f535a95ca0bd9f3d50eb7e5b50060aa6e98571->leave($__internal_259457469f88157b47a4e0dc63f535a95ca0bd9f3d50eb7e5b50060aa6e98571_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 1,);
    }

    public function getSource()
    {
        return "<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\" />
";
    }
}
