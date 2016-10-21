<?php

/* @FOSUser/Group/edit.html.twig */
class __TwigTemplate_c33911d265cbf79447c1338ebabc88a207e287125087c3ceb2dbe36ac62577fc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/edit.html.twig", 1);
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
        $__internal_809da92e5d2e68504aed4b941fb275d4cc0f0d9c976dfd72cf249f2b91bca648 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_809da92e5d2e68504aed4b941fb275d4cc0f0d9c976dfd72cf249f2b91bca648->enter($__internal_809da92e5d2e68504aed4b941fb275d4cc0f0d9c976dfd72cf249f2b91bca648_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_809da92e5d2e68504aed4b941fb275d4cc0f0d9c976dfd72cf249f2b91bca648->leave($__internal_809da92e5d2e68504aed4b941fb275d4cc0f0d9c976dfd72cf249f2b91bca648_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_bd731b59587f8c0fd77e16871860b850f74cff3777f82edbb4474eccf435a2b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd731b59587f8c0fd77e16871860b850f74cff3777f82edbb4474eccf435a2b4->enter($__internal_bd731b59587f8c0fd77e16871860b850f74cff3777f82edbb4474eccf435a2b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "@FOSUser/Group/edit.html.twig", 4)->display($context);
        
        $__internal_bd731b59587f8c0fd77e16871860b850f74cff3777f82edbb4474eccf435a2b4->leave($__internal_bd731b59587f8c0fd77e16871860b850f74cff3777f82edbb4474eccf435a2b4_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/edit.html.twig";
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
{% include \"FOSUserBundle:Group:edit_content.html.twig\" %}
{% endblock fos_user_content %}
";
    }
}
