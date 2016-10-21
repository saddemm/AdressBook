<?php

/* FOSUserBundle:Resetting:checkEmail.html.twig */
class __TwigTemplate_ae787f1fe33ae99ddcdab6912540fc5b1e987f635e1f80a367307a6d48e2ca77 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:checkEmail.html.twig", 1);
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
        $__internal_bd35e69e64c1a58e6a27c527ac9765ea29ff769dfe3c3e646b258b32d1eb51e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd35e69e64c1a58e6a27c527ac9765ea29ff769dfe3c3e646b258b32d1eb51e0->enter($__internal_bd35e69e64c1a58e6a27c527ac9765ea29ff769dfe3c3e646b258b32d1eb51e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bd35e69e64c1a58e6a27c527ac9765ea29ff769dfe3c3e646b258b32d1eb51e0->leave($__internal_bd35e69e64c1a58e6a27c527ac9765ea29ff769dfe3c3e646b258b32d1eb51e0_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6cff5c82ff8ea41c7f6e5eb509ca1bd27763feee562c130ef890eda6ce375445 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6cff5c82ff8ea41c7f6e5eb509ca1bd27763feee562c130ef890eda6ce375445->enter($__internal_6cff5c82ff8ea41c7f6e5eb509ca1bd27763feee562c130ef890eda6ce375445_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "<p>
";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_6cff5c82ff8ea41c7f6e5eb509ca1bd27763feee562c130ef890eda6ce375445->leave($__internal_6cff5c82ff8ea41c7f6e5eb509ca1bd27763feee562c130ef890eda6ce375445_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:checkEmail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"FOSUserBundle::layout.html.twig\" %}

{% block fos_user_content %}
<p>
{{ 'resetting.check_email'|trans({'%email%': email}, 'FOSUserBundle') }}
</p>
{% endblock %}
";
    }
}
