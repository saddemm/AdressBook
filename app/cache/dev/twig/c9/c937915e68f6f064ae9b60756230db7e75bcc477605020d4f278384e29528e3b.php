<?php

/* @FOSUser/Resetting/email.txt.twig */
class __TwigTemplate_ce1db56127c7417503c70889319105a16434b00741d642f69abd97a1d0992bb6 extends Twig_Template
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
        $__internal_be0e5a1b6c7a1dc5b3bd32fa1bcb97c3de2964e34867f13f89f62d92f260f842 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be0e5a1b6c7a1dc5b3bd32fa1bcb97c3de2964e34867f13f89f62d92f260f842->enter($__internal_be0e5a1b6c7a1dc5b3bd32fa1bcb97c3de2964e34867f13f89f62d92f260f842_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/email.txt.twig"));

        // line 1
        $this->displayBlock('subject', $context, $blocks);
        // line 6
        $this->displayBlock('body_text', $context, $blocks);
        // line 11
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_be0e5a1b6c7a1dc5b3bd32fa1bcb97c3de2964e34867f13f89f62d92f260f842->leave($__internal_be0e5a1b6c7a1dc5b3bd32fa1bcb97c3de2964e34867f13f89f62d92f260f842_prof);

    }

    // line 1
    public function block_subject($context, array $blocks = array())
    {
        $__internal_1948d50fb4e9e53e15b6684a9901ee89894903b0fd28032630a5aeeb9b0767dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1948d50fb4e9e53e15b6684a9901ee89894903b0fd28032630a5aeeb9b0767dd->enter($__internal_1948d50fb4e9e53e15b6684a9901ee89894903b0fd28032630a5aeeb9b0767dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 3
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_1948d50fb4e9e53e15b6684a9901ee89894903b0fd28032630a5aeeb9b0767dd->leave($__internal_1948d50fb4e9e53e15b6684a9901ee89894903b0fd28032630a5aeeb9b0767dd_prof);

    }

    // line 6
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_7aa52449c7980a31f271f053b8270c8eecd2c10869f2606c599036ac7ff5db96 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7aa52449c7980a31f271f053b8270c8eecd2c10869f2606c599036ac7ff5db96->enter($__internal_7aa52449c7980a31f271f053b8270c8eecd2c10869f2606c599036ac7ff5db96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_7aa52449c7980a31f271f053b8270c8eecd2c10869f2606c599036ac7ff5db96->leave($__internal_7aa52449c7980a31f271f053b8270c8eecd2c10869f2606c599036ac7ff5db96_prof);

    }

    // line 11
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_0bc02f93d53edec0aff55a26d38850734179f14c544fb9206eaba8e4e953bd87 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0bc02f93d53edec0aff55a26d38850734179f14c544fb9206eaba8e4e953bd87->enter($__internal_0bc02f93d53edec0aff55a26d38850734179f14c544fb9206eaba8e4e953bd87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_0bc02f93d53edec0aff55a26d38850734179f14c544fb9206eaba8e4e953bd87->leave($__internal_0bc02f93d53edec0aff55a26d38850734179f14c544fb9206eaba8e4e953bd87_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/email.txt.twig";
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
