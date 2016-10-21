<?php

/* @FOSUser/Group/show.html.twig */
class __TwigTemplate_dbbc553369a04ab24426278108c2593184d270b4802b68d850bd1f1b467cde9d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/show.html.twig", 1);
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
        $__internal_7bdee826e62bec27aef0c29ce94fdb55b41199b40f975137771846696672a824 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7bdee826e62bec27aef0c29ce94fdb55b41199b40f975137771846696672a824->enter($__internal_7bdee826e62bec27aef0c29ce94fdb55b41199b40f975137771846696672a824_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7bdee826e62bec27aef0c29ce94fdb55b41199b40f975137771846696672a824->leave($__internal_7bdee826e62bec27aef0c29ce94fdb55b41199b40f975137771846696672a824_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3c9e302b2983618d03fc115ca403478ba1b0f8e45227e3f65d72d3dffe276b44 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c9e302b2983618d03fc115ca403478ba1b0f8e45227e3f65d72d3dffe276b44->enter($__internal_3c9e302b2983618d03fc115ca403478ba1b0f8e45227e3f65d72d3dffe276b44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "@FOSUser/Group/show.html.twig", 4)->display($context);
        
        $__internal_3c9e302b2983618d03fc115ca403478ba1b0f8e45227e3f65d72d3dffe276b44->leave($__internal_3c9e302b2983618d03fc115ca403478ba1b0f8e45227e3f65d72d3dffe276b44_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/show.html.twig";
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
{% include \"FOSUserBundle:Group:show_content.html.twig\" %}
{% endblock fos_user_content %}
";
    }
}
