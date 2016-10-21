<?php

/* @FOSUser/ChangePassword/changePassword.html.twig */
class __TwigTemplate_23d99db9f76380c48276776f9958510bdfb2d2de380a1ab78a93fb348457b502 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/ChangePassword/changePassword.html.twig", 1);
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
        $__internal_d59df507933687057aeb66f73b783d07cb555c79c334ec0be5cd6930d36436ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d59df507933687057aeb66f73b783d07cb555c79c334ec0be5cd6930d36436ff->enter($__internal_d59df507933687057aeb66f73b783d07cb555c79c334ec0be5cd6930d36436ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/ChangePassword/changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d59df507933687057aeb66f73b783d07cb555c79c334ec0be5cd6930d36436ff->leave($__internal_d59df507933687057aeb66f73b783d07cb555c79c334ec0be5cd6930d36436ff_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_008dee2d9756d16db7b324bcb2356941b4e1ce02425b28f8e4f2fdc3e304f43d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_008dee2d9756d16db7b324bcb2356941b4e1ce02425b28f8e4f2fdc3e304f43d->enter($__internal_008dee2d9756d16db7b324bcb2356941b4e1ce02425b28f8e4f2fdc3e304f43d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "@FOSUser/ChangePassword/changePassword.html.twig", 4)->display($context);
        
        $__internal_008dee2d9756d16db7b324bcb2356941b4e1ce02425b28f8e4f2fdc3e304f43d->leave($__internal_008dee2d9756d16db7b324bcb2356941b4e1ce02425b28f8e4f2fdc3e304f43d_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/ChangePassword/changePassword.html.twig";
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
{% include \"FOSUserBundle:ChangePassword:changePassword_content.html.twig\" %}
{% endblock fos_user_content %}
";
    }
}
