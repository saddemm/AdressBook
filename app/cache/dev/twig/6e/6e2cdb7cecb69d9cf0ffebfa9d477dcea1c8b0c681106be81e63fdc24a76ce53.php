<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_2b4361c939e6659e706d9468716f8557ea9831fb674f9a9b661eaa5747e2a8ed extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_92a04a1ac9612fa177ee1afd14b0f903d8a780f26dfa88c64f84959ca89745d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92a04a1ac9612fa177ee1afd14b0f903d8a780f26dfa88c64f84959ca89745d0->enter($__internal_92a04a1ac9612fa177ee1afd14b0f903d8a780f26dfa88c64f84959ca89745d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 1
        $this->displayBlock('subject', $context, $blocks);
        // line 6
        $this->displayBlock('body_text', $context, $blocks);
        // line 11
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_92a04a1ac9612fa177ee1afd14b0f903d8a780f26dfa88c64f84959ca89745d0->leave($__internal_92a04a1ac9612fa177ee1afd14b0f903d8a780f26dfa88c64f84959ca89745d0_prof);

    }

    // line 1
    public function block_subject($context, array $blocks = array())
    {
        $__internal_f5be1afd29d1f27e2b7821e8da2b9a7d287ae069537c8f4e276e9f1e92ddc2ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5be1afd29d1f27e2b7821e8da2b9a7d287ae069537c8f4e276e9f1e92ddc2ec->enter($__internal_f5be1afd29d1f27e2b7821e8da2b9a7d287ae069537c8f4e276e9f1e92ddc2ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 3
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_f5be1afd29d1f27e2b7821e8da2b9a7d287ae069537c8f4e276e9f1e92ddc2ec->leave($__internal_f5be1afd29d1f27e2b7821e8da2b9a7d287ae069537c8f4e276e9f1e92ddc2ec_prof);

    }

    // line 6
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_9680274f219673eec126549093561133ff058f62949058f3abf92665562d5628 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9680274f219673eec126549093561133ff058f62949058f3abf92665562d5628->enter($__internal_9680274f219673eec126549093561133ff058f62949058f3abf92665562d5628_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_9680274f219673eec126549093561133ff058f62949058f3abf92665562d5628->leave($__internal_9680274f219673eec126549093561133ff058f62949058f3abf92665562d5628_prof);

    }

    // line 11
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_cc7171c925f188051d8dde253fa694a4f08969db41e4a33484487bf6fbd89b00 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc7171c925f188051d8dde253fa694a4f08969db41e4a33484487bf6fbd89b00->enter($__internal_cc7171c925f188051d8dde253fa694a4f08969db41e4a33484487bf6fbd89b00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_cc7171c925f188051d8dde253fa694a4f08969db41e4a33484487bf6fbd89b00->leave($__internal_cc7171c925f188051d8dde253fa694a4f08969db41e4a33484487bf6fbd89b00_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 11,  57 => 8,  51 => 6,  42 => 3,  36 => 1,  29 => 11,  27 => 6,  25 => 1,);
    }

    public function getSource()
    {
        return "{% block subject %}
{% autoescape false %}
{{ 'resetting.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}, 'FOSUserBundle') }}
{% endautoescape %}
{% endblock %}
{% block body_text %}
{% autoescape false %}
{{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}, 'FOSUserBundle') }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
";
    }
}
