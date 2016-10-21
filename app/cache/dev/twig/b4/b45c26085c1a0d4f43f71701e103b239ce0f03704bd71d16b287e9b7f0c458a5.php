<?php

/* @FOSUser/Resetting/reset.html.twig */
class __TwigTemplate_c59513b5755391569a39745baeb728f64e41ae3c1f5fad100ac0314d8e4af337 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/reset.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_49e9619a36f862582b9fb6938209a15a911b65ec7bbe94f42db24788ee8ee129 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49e9619a36f862582b9fb6938209a15a911b65ec7bbe94f42db24788ee8ee129->enter($__internal_49e9619a36f862582b9fb6938209a15a911b65ec7bbe94f42db24788ee8ee129_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_49e9619a36f862582b9fb6938209a15a911b65ec7bbe94f42db24788ee8ee129->leave($__internal_49e9619a36f862582b9fb6938209a15a911b65ec7bbe94f42db24788ee8ee129_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b491c7a8d3940dd80b5f23eafe4742cdcfbe98e6a0daeae1fabf8afcdcd48d69 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b491c7a8d3940dd80b5f23eafe4742cdcfbe98e6a0daeae1fabf8afcdcd48d69->enter($__internal_b491c7a8d3940dd80b5f23eafe4742cdcfbe98e6a0daeae1fabf8afcdcd48d69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "@FOSUser/Resetting/reset.html.twig", 4)->display($context);
        
        $__internal_b491c7a8d3940dd80b5f23eafe4742cdcfbe98e6a0daeae1fabf8afcdcd48d69->leave($__internal_b491c7a8d3940dd80b5f23eafe4742cdcfbe98e6a0daeae1fabf8afcdcd48d69_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/reset.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"FOSUserBundle::layout.html.twig\" %}

{% block fos_user_content %}
{% include \"FOSUserBundle:Resetting:reset_content.html.twig\" %}
{% endblock fos_user_content %}
";
    }
}
