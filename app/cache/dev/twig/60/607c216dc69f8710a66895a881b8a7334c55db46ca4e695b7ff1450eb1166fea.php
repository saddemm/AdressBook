<?php

/* @FOSUser/Registration/email.txt.twig */
class __TwigTemplate_95565687c683a37d8ba3c8f0fc21f612bbec5cfaebc162f1370f863c0e65f591 extends Twig_Template
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
        $__internal_3b633d9e2339c1293acc14ed26d112b83bab1b4c37bc29fce20a04f72a85a379 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b633d9e2339c1293acc14ed26d112b83bab1b4c37bc29fce20a04f72a85a379->enter($__internal_3b633d9e2339c1293acc14ed26d112b83bab1b4c37bc29fce20a04f72a85a379_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/email.txt.twig"));

        // line 1
        $this->displayBlock('subject', $context, $blocks);
        // line 6
        $this->displayBlock('body_text', $context, $blocks);
        // line 11
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_3b633d9e2339c1293acc14ed26d112b83bab1b4c37bc29fce20a04f72a85a379->leave($__internal_3b633d9e2339c1293acc14ed26d112b83bab1b4c37bc29fce20a04f72a85a379_prof);

    }

    // line 1
    public function block_subject($context, array $blocks = array())
    {
        $__internal_5405d8e7e5fa77542e6b213e431563da7a84fd7aba57ed366726f2d080e7b4ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5405d8e7e5fa77542e6b213e431563da7a84fd7aba57ed366726f2d080e7b4ff->enter($__internal_5405d8e7e5fa77542e6b213e431563da7a84fd7aba57ed366726f2d080e7b4ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 3
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_5405d8e7e5fa77542e6b213e431563da7a84fd7aba57ed366726f2d080e7b4ff->leave($__internal_5405d8e7e5fa77542e6b213e431563da7a84fd7aba57ed366726f2d080e7b4ff_prof);

    }

    // line 6
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_2c8209560d99f9c8453ce1581cb06a96b10265d6eecce6035b58719fccf00b5a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c8209560d99f9c8453ce1581cb06a96b10265d6eecce6035b58719fccf00b5a->enter($__internal_2c8209560d99f9c8453ce1581cb06a96b10265d6eecce6035b58719fccf00b5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_2c8209560d99f9c8453ce1581cb06a96b10265d6eecce6035b58719fccf00b5a->leave($__internal_2c8209560d99f9c8453ce1581cb06a96b10265d6eecce6035b58719fccf00b5a_prof);

    }

    // line 11
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_7ffcbdbfe0639be87afa9c6ec9bea302bead154fb368eec7512d68c80f089de6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ffcbdbfe0639be87afa9c6ec9bea302bead154fb368eec7512d68c80f089de6->enter($__internal_7ffcbdbfe0639be87afa9c6ec9bea302bead154fb368eec7512d68c80f089de6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_7ffcbdbfe0639be87afa9c6ec9bea302bead154fb368eec7512d68c80f089de6->leave($__internal_7ffcbdbfe0639be87afa9c6ec9bea302bead154fb368eec7512d68c80f089de6_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/email.txt.twig";
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
