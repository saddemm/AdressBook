<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_048f180d92a371624c5131d49398c53d25b831e0ec9464564f23de899afb286f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
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
        $__internal_5639383076d3d63f4b5fd4e454e34edd554696448771c614f6e8fbd1b1394e92 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5639383076d3d63f4b5fd4e454e34edd554696448771c614f6e8fbd1b1394e92->enter($__internal_5639383076d3d63f4b5fd4e454e34edd554696448771c614f6e8fbd1b1394e92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5639383076d3d63f4b5fd4e454e34edd554696448771c614f6e8fbd1b1394e92->leave($__internal_5639383076d3d63f4b5fd4e454e34edd554696448771c614f6e8fbd1b1394e92_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_e3efc74b078e4b1c2b09a160ed024140f6ac696b92abd6e2e3bd546eb31c12d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3efc74b078e4b1c2b09a160ed024140f6ac696b92abd6e2e3bd546eb31c12d0->enter($__internal_e3efc74b078e4b1c2b09a160ed024140f6ac696b92abd6e2e3bd546eb31c12d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_e3efc74b078e4b1c2b09a160ed024140f6ac696b92abd6e2e3bd546eb31c12d0->leave($__internal_e3efc74b078e4b1c2b09a160ed024140f6ac696b92abd6e2e3bd546eb31c12d0_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_c078f178d12c6d810f457eaf9ed7fa3e2eb6f4c1b39bf27403e0118a78a5ec37 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c078f178d12c6d810f457eaf9ed7fa3e2eb6f4c1b39bf27403e0118a78a5ec37->enter($__internal_c078f178d12c6d810f457eaf9ed7fa3e2eb6f4c1b39bf27403e0118a78a5ec37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_c078f178d12c6d810f457eaf9ed7fa3e2eb6f4c1b39bf27403e0118a78a5ec37->leave($__internal_c078f178d12c6d810f457eaf9ed7fa3e2eb6f4c1b39bf27403e0118a78a5ec37_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_7e48bcd38ff0d9ef52a99f7e9c030ec27bf084d1d1c5eb8d5e805aaf51ff43a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e48bcd38ff0d9ef52a99f7e9c030ec27bf084d1d1c5eb8d5e805aaf51ff43a4->enter($__internal_7e48bcd38ff0d9ef52a99f7e9c030ec27bf084d1d1c5eb8d5e805aaf51ff43a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_7e48bcd38ff0d9ef52a99f7e9c030ec27bf084d1d1c5eb8d5e805aaf51ff43a4->leave($__internal_7e48bcd38ff0d9ef52a99f7e9c030ec27bf084d1d1c5eb8d5e805aaf51ff43a4_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
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
