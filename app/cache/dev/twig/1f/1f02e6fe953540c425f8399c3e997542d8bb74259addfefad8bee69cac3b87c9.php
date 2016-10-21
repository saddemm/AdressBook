<?php

/* @FOSUser/Registration/checkEmail.html.twig */
class __TwigTemplate_32c9733ccc6aec036ef8ce5fdf6767ef90b47e3270a07009d09e861223bf4271 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Registration/checkEmail.html.twig", 1);
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
        $__internal_d8011cd421cd5fda8fd347d3d3bce12368b3f4e2adda4eb810f2cc45fc661d0f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8011cd421cd5fda8fd347d3d3bce12368b3f4e2adda4eb810f2cc45fc661d0f->enter($__internal_d8011cd421cd5fda8fd347d3d3bce12368b3f4e2adda4eb810f2cc45fc661d0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d8011cd421cd5fda8fd347d3d3bce12368b3f4e2adda4eb810f2cc45fc661d0f->leave($__internal_d8011cd421cd5fda8fd347d3d3bce12368b3f4e2adda4eb810f2cc45fc661d0f_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1d7ad539db564fe307350f68d0d0d11af5aa8be38df1b64ff39fca65f1a7c0f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d7ad539db564fe307350f68d0d0d11af5aa8be38df1b64ff39fca65f1a7c0f6->enter($__internal_1d7ad539db564fe307350f68d0d0d11af5aa8be38df1b64ff39fca65f1a7c0f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_1d7ad539db564fe307350f68d0d0d11af5aa8be38df1b64ff39fca65f1a7c0f6->leave($__internal_1d7ad539db564fe307350f68d0d0d11af5aa8be38df1b64ff39fca65f1a7c0f6_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/checkEmail.html.twig";
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
    <p>{{ 'registration.check_email'|trans({'%email%': user.email}, 'FOSUserBundle') }}</p>
{% endblock fos_user_content %}
";
    }
}
