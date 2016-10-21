<?php

/* FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig */
class __TwigTemplate_5a66021cc0016012f996601cfb8c032d4b8942617db3c66d09c5754310fe92cd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig", 1);
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
        $__internal_fcdc84356714a88c6c2c6783c70118c97e8e9af723cfc8d503fb61a51d1e406d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fcdc84356714a88c6c2c6783c70118c97e8e9af723cfc8d503fb61a51d1e406d->enter($__internal_fcdc84356714a88c6c2c6783c70118c97e8e9af723cfc8d503fb61a51d1e406d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fcdc84356714a88c6c2c6783c70118c97e8e9af723cfc8d503fb61a51d1e406d->leave($__internal_fcdc84356714a88c6c2c6783c70118c97e8e9af723cfc8d503fb61a51d1e406d_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f208d7e4200f4271dc439751c8dadf4a4337916aa12431b3cc10ac1d00140c57 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f208d7e4200f4271dc439751c8dadf4a4337916aa12431b3cc10ac1d00140c57->enter($__internal_f208d7e4200f4271dc439751c8dadf4a4337916aa12431b3cc10ac1d00140c57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_f208d7e4200f4271dc439751c8dadf4a4337916aa12431b3cc10ac1d00140c57->leave($__internal_f208d7e4200f4271dc439751c8dadf4a4337916aa12431b3cc10ac1d00140c57_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig";
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
<p>{{ 'resetting.password_already_requested'|trans({}, 'FOSUserBundle') }}</p>
{% endblock fos_user_content %}
";
    }
}
