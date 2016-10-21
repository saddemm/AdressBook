<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_46753637764b9481b50b810fa90bff74d2e7c1eb240ddfae8e89164cf2b4615c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
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
        $__internal_089618f13125bc6ac66de67670451fb9ecc0f1718f31f72945c249f85d1eb458 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_089618f13125bc6ac66de67670451fb9ecc0f1718f31f72945c249f85d1eb458->enter($__internal_089618f13125bc6ac66de67670451fb9ecc0f1718f31f72945c249f85d1eb458_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_089618f13125bc6ac66de67670451fb9ecc0f1718f31f72945c249f85d1eb458->leave($__internal_089618f13125bc6ac66de67670451fb9ecc0f1718f31f72945c249f85d1eb458_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_622fdacef228ebca6c90e83798eb8920fdc10aaca3d93278bf0e9206f8ed26bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_622fdacef228ebca6c90e83798eb8920fdc10aaca3d93278bf0e9206f8ed26bd->enter($__internal_622fdacef228ebca6c90e83798eb8920fdc10aaca3d93278bf0e9206f8ed26bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_622fdacef228ebca6c90e83798eb8920fdc10aaca3d93278bf0e9206f8ed26bd->leave($__internal_622fdacef228ebca6c90e83798eb8920fdc10aaca3d93278bf0e9206f8ed26bd_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
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
