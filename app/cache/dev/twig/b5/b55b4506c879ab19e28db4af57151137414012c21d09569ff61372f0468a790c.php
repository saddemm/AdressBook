<?php

/* @FOSUser/Profile/show.html.twig */
class __TwigTemplate_7e4f0852e2c1461ec62e74b938d939da0c8bd64d4ada54cd78e9bb18f11ef529 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Profile/show.html.twig", 1);
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
        $__internal_74f1cbf31021de27c6efa3499e6e374bc463901c84b25a55677a08cef0b8874f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74f1cbf31021de27c6efa3499e6e374bc463901c84b25a55677a08cef0b8874f->enter($__internal_74f1cbf31021de27c6efa3499e6e374bc463901c84b25a55677a08cef0b8874f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_74f1cbf31021de27c6efa3499e6e374bc463901c84b25a55677a08cef0b8874f->leave($__internal_74f1cbf31021de27c6efa3499e6e374bc463901c84b25a55677a08cef0b8874f_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2ad0798c7f6e6c10a6d43f996332d17c7b66bf78b9f3c0130c4c8fe85159d18b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ad0798c7f6e6c10a6d43f996332d17c7b66bf78b9f3c0130c4c8fe85159d18b->enter($__internal_2ad0798c7f6e6c10a6d43f996332d17c7b66bf78b9f3c0130c4c8fe85159d18b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "@FOSUser/Profile/show.html.twig", 4)->display($context);
        
        $__internal_2ad0798c7f6e6c10a6d43f996332d17c7b66bf78b9f3c0130c4c8fe85159d18b->leave($__internal_2ad0798c7f6e6c10a6d43f996332d17c7b66bf78b9f3c0130c4c8fe85159d18b_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/show.html.twig";
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
{% include \"FOSUserBundle:Profile:show_content.html.twig\" %}
{% endblock fos_user_content %}
";
    }
}
