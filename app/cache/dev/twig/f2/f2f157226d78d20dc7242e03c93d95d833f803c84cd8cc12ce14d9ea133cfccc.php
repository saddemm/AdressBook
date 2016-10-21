<?php

/* @FOSUser/Group/new.html.twig */
class __TwigTemplate_5992dd99e57c90f52e514d2e966a42405ae90737de1822e77993f4bd5eb98c32 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/new.html.twig", 1);
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
        $__internal_ee48c76578845b0ce19cc2ff3dd6b3b6b9da5f6df13024e203f0b24a0ffb624f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee48c76578845b0ce19cc2ff3dd6b3b6b9da5f6df13024e203f0b24a0ffb624f->enter($__internal_ee48c76578845b0ce19cc2ff3dd6b3b6b9da5f6df13024e203f0b24a0ffb624f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ee48c76578845b0ce19cc2ff3dd6b3b6b9da5f6df13024e203f0b24a0ffb624f->leave($__internal_ee48c76578845b0ce19cc2ff3dd6b3b6b9da5f6df13024e203f0b24a0ffb624f_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_0628509655d6bf6bf7cb4e0167b2317be85db1df4b3b6c8ff2b46c3f619a9bf1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0628509655d6bf6bf7cb4e0167b2317be85db1df4b3b6c8ff2b46c3f619a9bf1->enter($__internal_0628509655d6bf6bf7cb4e0167b2317be85db1df4b3b6c8ff2b46c3f619a9bf1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "@FOSUser/Group/new.html.twig", 4)->display($context);
        
        $__internal_0628509655d6bf6bf7cb4e0167b2317be85db1df4b3b6c8ff2b46c3f619a9bf1->leave($__internal_0628509655d6bf6bf7cb4e0167b2317be85db1df4b3b6c8ff2b46c3f619a9bf1_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/new.html.twig";
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
