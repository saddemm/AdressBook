<?php

/* @FOSUser/Profile/edit.html.twig */
class __TwigTemplate_3cac45bbdbbf5bdb6a70eacd4f48e7c9ca97de86359bf8e32f8e751bf9f99fb6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Profile/edit.html.twig", 1);
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
        $__internal_bc19a20bca8abb0d62c13ddfd6977ff89949d72ac4fc20892086147e5e757795 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc19a20bca8abb0d62c13ddfd6977ff89949d72ac4fc20892086147e5e757795->enter($__internal_bc19a20bca8abb0d62c13ddfd6977ff89949d72ac4fc20892086147e5e757795_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bc19a20bca8abb0d62c13ddfd6977ff89949d72ac4fc20892086147e5e757795->leave($__internal_bc19a20bca8abb0d62c13ddfd6977ff89949d72ac4fc20892086147e5e757795_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_fe7309810747e835ecce2bd28263bb2f71bde61e6e1422657602b557ba716b4d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe7309810747e835ecce2bd28263bb2f71bde61e6e1422657602b557ba716b4d->enter($__internal_fe7309810747e835ecce2bd28263bb2f71bde61e6e1422657602b557ba716b4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "@FOSUser/Profile/edit.html.twig", 4)->display($context);
        
        $__internal_fe7309810747e835ecce2bd28263bb2f71bde61e6e1422657602b557ba716b4d->leave($__internal_fe7309810747e835ecce2bd28263bb2f71bde61e6e1422657602b557ba716b4d_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/edit.html.twig";
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
{% include \"FOSUserBundle:Profile:edit_content.html.twig\" %}
{% endblock fos_user_content %}
";
    }
}
