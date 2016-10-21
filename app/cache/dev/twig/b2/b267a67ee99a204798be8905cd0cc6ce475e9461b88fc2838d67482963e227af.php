<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_fa1e51760aa2ef30f8de79b37614aa697ee423ad82c21a54646fb46da13cea88 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_884eec30d3607771ef0dd93e5e83ac942e4db302b39252c784577202de65fbbf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_884eec30d3607771ef0dd93e5e83ac942e4db302b39252c784577202de65fbbf->enter($__internal_884eec30d3607771ef0dd93e5e83ac942e4db302b39252c784577202de65fbbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_884eec30d3607771ef0dd93e5e83ac942e4db302b39252c784577202de65fbbf->leave($__internal_884eec30d3607771ef0dd93e5e83ac942e4db302b39252c784577202de65fbbf_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_17489de168092aa36b45d79aeb89cdd8f3bf78a76a95588269ebb3030cb8808c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17489de168092aa36b45d79aeb89cdd8f3bf78a76a95588269ebb3030cb8808c->enter($__internal_17489de168092aa36b45d79aeb89cdd8f3bf78a76a95588269ebb3030cb8808c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_17489de168092aa36b45d79aeb89cdd8f3bf78a76a95588269ebb3030cb8808c->leave($__internal_17489de168092aa36b45d79aeb89cdd8f3bf78a76a95588269ebb3030cb8808c_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_347588e28ed07158c992350526a96ed4f6451348e89701d6cc0897ca5d707b44 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_347588e28ed07158c992350526a96ed4f6451348e89701d6cc0897ca5d707b44->enter($__internal_347588e28ed07158c992350526a96ed4f6451348e89701d6cc0897ca5d707b44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_347588e28ed07158c992350526a96ed4f6451348e89701d6cc0897ca5d707b44->leave($__internal_347588e28ed07158c992350526a96ed4f6451348e89701d6cc0897ca5d707b44_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
";
    }
}
