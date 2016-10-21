<?php

/* @FOSUser/Resetting/passwordAlreadyRequested.html.twig */
class __TwigTemplate_5e25eef4aebff174f759e6ef320cd61a2dd68cdf45762b1285c0b62dd02ae01f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/passwordAlreadyRequested.html.twig", 1);
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
        $__internal_229d08beb6c65f577c2319b26511afd346b991d54f35fbc779bdec3a4376a0a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_229d08beb6c65f577c2319b26511afd346b991d54f35fbc779bdec3a4376a0a5->enter($__internal_229d08beb6c65f577c2319b26511afd346b991d54f35fbc779bdec3a4376a0a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/passwordAlreadyRequested.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_229d08beb6c65f577c2319b26511afd346b991d54f35fbc779bdec3a4376a0a5->leave($__internal_229d08beb6c65f577c2319b26511afd346b991d54f35fbc779bdec3a4376a0a5_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d593240b8367a2f1bacc5e77591c0dae958c0d84b5eff4740c821d3c225c2780 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d593240b8367a2f1bacc5e77591c0dae958c0d84b5eff4740c821d3c225c2780->enter($__internal_d593240b8367a2f1bacc5e77591c0dae958c0d84b5eff4740c821d3c225c2780_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_d593240b8367a2f1bacc5e77591c0dae958c0d84b5eff4740c821d3c225c2780->leave($__internal_d593240b8367a2f1bacc5e77591c0dae958c0d84b5eff4740c821d3c225c2780_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/passwordAlreadyRequested.html.twig";
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
