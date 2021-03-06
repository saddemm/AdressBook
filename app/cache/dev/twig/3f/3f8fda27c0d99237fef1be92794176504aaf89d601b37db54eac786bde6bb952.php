<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_2dab833c94296e3837b7ee5a9076374cabc2a828b7855a5c64c8eb5bdc7a34ad extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_159e93a80c19aefaf77af8e7ad3e808367b84077663ddf458591ce5bd648772b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_159e93a80c19aefaf77af8e7ad3e808367b84077663ddf458591ce5bd648772b->enter($__internal_159e93a80c19aefaf77af8e7ad3e808367b84077663ddf458591ce5bd648772b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_159e93a80c19aefaf77af8e7ad3e808367b84077663ddf458591ce5bd648772b->leave($__internal_159e93a80c19aefaf77af8e7ad3e808367b84077663ddf458591ce5bd648772b_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_bb54bd9283ff15533ac03c0aa253756500aaa1ae3a339a6942a034499f493ff4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb54bd9283ff15533ac03c0aa253756500aaa1ae3a339a6942a034499f493ff4->enter($__internal_bb54bd9283ff15533ac03c0aa253756500aaa1ae3a339a6942a034499f493ff4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_bb54bd9283ff15533ac03c0aa253756500aaa1ae3a339a6942a034499f493ff4->leave($__internal_bb54bd9283ff15533ac03c0aa253756500aaa1ae3a339a6942a034499f493ff4_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_ad9844f23c3095998631bfffeeb0e295af9f6468900ac7fd356d3be3a3ac23ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad9844f23c3095998631bfffeeb0e295af9f6468900ac7fd356d3be3a3ac23ec->enter($__internal_ad9844f23c3095998631bfffeeb0e295af9f6468900ac7fd356d3be3a3ac23ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_ad9844f23c3095998631bfffeeb0e295af9f6468900ac7fd356d3be3a3ac23ec->leave($__internal_ad9844f23c3095998631bfffeeb0e295af9f6468900ac7fd356d3be3a3ac23ec_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_35d0b514623634839460e37eaec46a833cf44c9f6be0fd6ded80fab2d41d1774 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35d0b514623634839460e37eaec46a833cf44c9f6be0fd6ded80fab2d41d1774->enter($__internal_35d0b514623634839460e37eaec46a833cf44c9f6be0fd6ded80fab2d41d1774_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_35d0b514623634839460e37eaec46a833cf44c9f6be0fd6ded80fab2d41d1774->leave($__internal_35d0b514623634839460e37eaec46a833cf44c9f6be0fd6ded80fab2d41d1774_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 33,  114 => 32,  108 => 28,  106 => 27,  102 => 25,  96 => 24,  88 => 21,  82 => 17,  80 => 16,  75 => 14,  70 => 13,  64 => 12,  54 => 9,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
";
    }
}
