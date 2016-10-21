<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_38206925bc7a3c759f63545824f182935134d0d90fb0d8b9ef3a4dbaa3e9fb97 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
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
        $__internal_15b26ea1a81b15b8b5e500370ad9ea0b33cd95c0fec9f4ec2a8114dddb91430e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15b26ea1a81b15b8b5e500370ad9ea0b33cd95c0fec9f4ec2a8114dddb91430e->enter($__internal_15b26ea1a81b15b8b5e500370ad9ea0b33cd95c0fec9f4ec2a8114dddb91430e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_15b26ea1a81b15b8b5e500370ad9ea0b33cd95c0fec9f4ec2a8114dddb91430e->leave($__internal_15b26ea1a81b15b8b5e500370ad9ea0b33cd95c0fec9f4ec2a8114dddb91430e_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_6f2c50fb5019f4b52a5e99dbec58545f3d3d95f2c8d63a54a58a2e97bfff0459 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f2c50fb5019f4b52a5e99dbec58545f3d3d95f2c8d63a54a58a2e97bfff0459->enter($__internal_6f2c50fb5019f4b52a5e99dbec58545f3d3d95f2c8d63a54a58a2e97bfff0459_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_6f2c50fb5019f4b52a5e99dbec58545f3d3d95f2c8d63a54a58a2e97bfff0459->leave($__internal_6f2c50fb5019f4b52a5e99dbec58545f3d3d95f2c8d63a54a58a2e97bfff0459_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_f80424a7fda8979a791016d4c946456e255fb40c428d4fa3bb1c6bcafdfb5b90 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f80424a7fda8979a791016d4c946456e255fb40c428d4fa3bb1c6bcafdfb5b90->enter($__internal_f80424a7fda8979a791016d4c946456e255fb40c428d4fa3bb1c6bcafdfb5b90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_f80424a7fda8979a791016d4c946456e255fb40c428d4fa3bb1c6bcafdfb5b90->leave($__internal_f80424a7fda8979a791016d4c946456e255fb40c428d4fa3bb1c6bcafdfb5b90_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
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
