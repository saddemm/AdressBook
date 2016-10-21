<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_3ea4aa3de8c1731e59ae6c9354729d7ca500ab014dea0ede6a60ce952bf7ba80 extends Twig_Template
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
        $__internal_fde9c915d72c3f9695d12f60e9ff6df9a41e62f9a950315a6686671b7a81def1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fde9c915d72c3f9695d12f60e9ff6df9a41e62f9a950315a6686671b7a81def1->enter($__internal_fde9c915d72c3f9695d12f60e9ff6df9a41e62f9a950315a6686671b7a81def1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 1
        $this->displayBlock('subject', $context, $blocks);
        // line 6
        $this->displayBlock('body_text', $context, $blocks);
        // line 11
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_fde9c915d72c3f9695d12f60e9ff6df9a41e62f9a950315a6686671b7a81def1->leave($__internal_fde9c915d72c3f9695d12f60e9ff6df9a41e62f9a950315a6686671b7a81def1_prof);

    }

    // line 1
    public function block_subject($context, array $blocks = array())
    {
        $__internal_d6c2f842b5d010b99c6abfb432c9f9e298f0f5ca07b780b5699504e3ff300c72 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6c2f842b5d010b99c6abfb432c9f9e298f0f5ca07b780b5699504e3ff300c72->enter($__internal_d6c2f842b5d010b99c6abfb432c9f9e298f0f5ca07b780b5699504e3ff300c72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 3
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_d6c2f842b5d010b99c6abfb432c9f9e298f0f5ca07b780b5699504e3ff300c72->leave($__internal_d6c2f842b5d010b99c6abfb432c9f9e298f0f5ca07b780b5699504e3ff300c72_prof);

    }

    // line 6
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_f911dcc3a33201ec93588a3690560fb51490517bb7ed3af966e29314e2b14b4b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f911dcc3a33201ec93588a3690560fb51490517bb7ed3af966e29314e2b14b4b->enter($__internal_f911dcc3a33201ec93588a3690560fb51490517bb7ed3af966e29314e2b14b4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_f911dcc3a33201ec93588a3690560fb51490517bb7ed3af966e29314e2b14b4b->leave($__internal_f911dcc3a33201ec93588a3690560fb51490517bb7ed3af966e29314e2b14b4b_prof);

    }

    // line 11
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_51b2622cb9a6b1e977b6e50e0a651344b6fa0edab52816ea971b91047381e3a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51b2622cb9a6b1e977b6e50e0a651344b6fa0edab52816ea971b91047381e3a1->enter($__internal_51b2622cb9a6b1e977b6e50e0a651344b6fa0edab52816ea971b91047381e3a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_51b2622cb9a6b1e977b6e50e0a651344b6fa0edab52816ea971b91047381e3a1->leave($__internal_51b2622cb9a6b1e977b6e50e0a651344b6fa0edab52816ea971b91047381e3a1_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 11,  57 => 8,  51 => 6,  42 => 3,  36 => 1,  29 => 11,  27 => 6,  25 => 1,);
    }

    public function getSource()
    {
        return "{% block subject %}
{% autoescape false %}
{{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}, 'FOSUserBundle') }}
{% endautoescape %}
{% endblock %}
{% block body_text %}
{% autoescape false %}
{{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}, 'FOSUserBundle') }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
";
    }
}
