<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_389babbc8fbb6f575982ceea48b7a8c1647d9019099f2aaaa829d0da8f3dc9ee extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4f124a8564d105aa13c6f1eae6461fc82ba452faf0a25c77155e4aecc9858d42 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f124a8564d105aa13c6f1eae6461fc82ba452faf0a25c77155e4aecc9858d42->enter($__internal_4f124a8564d105aa13c6f1eae6461fc82ba452faf0a25c77155e4aecc9858d42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4f124a8564d105aa13c6f1eae6461fc82ba452faf0a25c77155e4aecc9858d42->leave($__internal_4f124a8564d105aa13c6f1eae6461fc82ba452faf0a25c77155e4aecc9858d42_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_ceb499927337410f95b3baa38d2b4f6e7abea153d3e1d313d5f98dfa6a82f32b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ceb499927337410f95b3baa38d2b4f6e7abea153d3e1d313d5f98dfa6a82f32b->enter($__internal_ceb499927337410f95b3baa38d2b4f6e7abea153d3e1d313d5f98dfa6a82f32b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_ceb499927337410f95b3baa38d2b4f6e7abea153d3e1d313d5f98dfa6a82f32b->leave($__internal_ceb499927337410f95b3baa38d2b4f6e7abea153d3e1d313d5f98dfa6a82f32b_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_21fc0c3e0e24334ebc830830bcd85619a2e03b0205161812daa5f798638fb5f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21fc0c3e0e24334ebc830830bcd85619a2e03b0205161812daa5f798638fb5f3->enter($__internal_21fc0c3e0e24334ebc830830bcd85619a2e03b0205161812daa5f798638fb5f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_21fc0c3e0e24334ebc830830bcd85619a2e03b0205161812daa5f798638fb5f3->leave($__internal_21fc0c3e0e24334ebc830830bcd85619a2e03b0205161812daa5f798638fb5f3_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_87140f5039aeeb04626573ed86d88c45d728bfc9b7b282d5554da0ab4fd7e7fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87140f5039aeeb04626573ed86d88c45d728bfc9b7b282d5554da0ab4fd7e7fe->enter($__internal_87140f5039aeeb04626573ed86d88c45d728bfc9b7b282d5554da0ab4fd7e7fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_87140f5039aeeb04626573ed86d88c45d728bfc9b7b282d5554da0ab4fd7e7fe->leave($__internal_87140f5039aeeb04626573ed86d88c45d728bfc9b7b282d5554da0ab4fd7e7fe_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
";
    }
}
