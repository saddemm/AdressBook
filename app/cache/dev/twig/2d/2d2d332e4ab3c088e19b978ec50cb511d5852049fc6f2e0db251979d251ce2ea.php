<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_0b06ee515b451b162f9390271db27f5e89527fe9eca86448b22ffedfefca314b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:new.html.twig", 1);
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
        $__internal_6f92302e10ca560d9a84bd0cd9be082beba3fd0057e7b1c7938e9c4732cfcd13 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f92302e10ca560d9a84bd0cd9be082beba3fd0057e7b1c7938e9c4732cfcd13->enter($__internal_6f92302e10ca560d9a84bd0cd9be082beba3fd0057e7b1c7938e9c4732cfcd13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f92302e10ca560d9a84bd0cd9be082beba3fd0057e7b1c7938e9c4732cfcd13->leave($__internal_6f92302e10ca560d9a84bd0cd9be082beba3fd0057e7b1c7938e9c4732cfcd13_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_603264ddd21eb70fa3c99298834431a73ba9b314abb35dc55f9a35ddb9b13921 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_603264ddd21eb70fa3c99298834431a73ba9b314abb35dc55f9a35ddb9b13921->enter($__internal_603264ddd21eb70fa3c99298834431a73ba9b314abb35dc55f9a35ddb9b13921_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_603264ddd21eb70fa3c99298834431a73ba9b314abb35dc55f9a35ddb9b13921->leave($__internal_603264ddd21eb70fa3c99298834431a73ba9b314abb35dc55f9a35ddb9b13921_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new.html.twig";
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
{% include \"FOSUserBundle:Group:new_content.html.twig\" %}
{% endblock fos_user_content %}
";
    }
}
