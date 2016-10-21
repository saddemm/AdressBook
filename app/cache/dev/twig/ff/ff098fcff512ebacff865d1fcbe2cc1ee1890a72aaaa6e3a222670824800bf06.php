<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_96d79e8ffbd8ac6c306a7e4fe06dd64ca548a0d3f0ac1fdd4afdcfd69fdb5b9d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
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
        $__internal_1f9913fa4599415e9c270f5f8f70f811e5dd620447be173c97626c427446b02f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f9913fa4599415e9c270f5f8f70f811e5dd620447be173c97626c427446b02f->enter($__internal_1f9913fa4599415e9c270f5f8f70f811e5dd620447be173c97626c427446b02f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1f9913fa4599415e9c270f5f8f70f811e5dd620447be173c97626c427446b02f->leave($__internal_1f9913fa4599415e9c270f5f8f70f811e5dd620447be173c97626c427446b02f_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2d9e0e01307c3f1f80becb55eeb6c2c334466749a607a096d1c5464d1d2ff809 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d9e0e01307c3f1f80becb55eeb6c2c334466749a607a096d1c5464d1d2ff809->enter($__internal_2d9e0e01307c3f1f80becb55eeb6c2c334466749a607a096d1c5464d1d2ff809_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_2d9e0e01307c3f1f80becb55eeb6c2c334466749a607a096d1c5464d1d2ff809->leave($__internal_2d9e0e01307c3f1f80becb55eeb6c2c334466749a607a096d1c5464d1d2ff809_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
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
{% include \"FOSUserBundle:Group:list_content.html.twig\" %}
{% endblock fos_user_content %}
";
    }
}
