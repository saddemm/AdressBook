<?php

/* @FOSUser/Registration/register.html.twig */
class __TwigTemplate_74d52418d577ab93a2636aa944d6dd3b8d2be460a9f2664763dbccd87121dd41 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Registration/register.html.twig", 1);
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
        $__internal_9d20dd5eb890bb4678d56df9a4209ea338cb46d603f8db9064a2bdff6e36dc12 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d20dd5eb890bb4678d56df9a4209ea338cb46d603f8db9064a2bdff6e36dc12->enter($__internal_9d20dd5eb890bb4678d56df9a4209ea338cb46d603f8db9064a2bdff6e36dc12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9d20dd5eb890bb4678d56df9a4209ea338cb46d603f8db9064a2bdff6e36dc12->leave($__internal_9d20dd5eb890bb4678d56df9a4209ea338cb46d603f8db9064a2bdff6e36dc12_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_133af3733e25203a14606659eadbc4b0692c899313f93da66b13858e233f8086 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_133af3733e25203a14606659eadbc4b0692c899313f93da66b13858e233f8086->enter($__internal_133af3733e25203a14606659eadbc4b0692c899313f93da66b13858e233f8086_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "@FOSUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_133af3733e25203a14606659eadbc4b0692c899313f93da66b13858e233f8086->leave($__internal_133af3733e25203a14606659eadbc4b0692c899313f93da66b13858e233f8086_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register.html.twig";
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
{% include \"FOSUserBundle:Registration:register_content.html.twig\" %}
{% endblock fos_user_content %}
";
    }
}
