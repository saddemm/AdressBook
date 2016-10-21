<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_bc48515fca9d9585bf70b39555b9418a10dec130f91e5893cb48860806850d9b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
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
        $__internal_b2ec61ccd175c818e89eca0dde5b2a228f5b5a3e63dc0dbd5d52eec551c9af27 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2ec61ccd175c818e89eca0dde5b2a228f5b5a3e63dc0dbd5d52eec551c9af27->enter($__internal_b2ec61ccd175c818e89eca0dde5b2a228f5b5a3e63dc0dbd5d52eec551c9af27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b2ec61ccd175c818e89eca0dde5b2a228f5b5a3e63dc0dbd5d52eec551c9af27->leave($__internal_b2ec61ccd175c818e89eca0dde5b2a228f5b5a3e63dc0dbd5d52eec551c9af27_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_0a9de95d28ace9fa4de161f5b5c61df9ae5b5349c168faddf0a4956464538ec9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a9de95d28ace9fa4de161f5b5c61df9ae5b5349c168faddf0a4956464538ec9->enter($__internal_0a9de95d28ace9fa4de161f5b5c61df9ae5b5349c168faddf0a4956464538ec9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_0a9de95d28ace9fa4de161f5b5c61df9ae5b5349c168faddf0a4956464538ec9->leave($__internal_0a9de95d28ace9fa4de161f5b5c61df9ae5b5349c168faddf0a4956464538ec9_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
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
{% include \"FOSUserBundle:Resetting:request_content.html.twig\" %}
{% endblock fos_user_content %}
";
    }
}
