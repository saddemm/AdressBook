<?php

/* @FOSUser/Resetting/request.html.twig */
class __TwigTemplate_d06af904886bec6cc701f5a783a04b4ccba54e2c342b5443226283e92d098acb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/request.html.twig", 1);
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
        $__internal_d12361c0f2bdc25b1de837545f7dc1c33ba1051fbcc20b10dab4b335829403b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d12361c0f2bdc25b1de837545f7dc1c33ba1051fbcc20b10dab4b335829403b0->enter($__internal_d12361c0f2bdc25b1de837545f7dc1c33ba1051fbcc20b10dab4b335829403b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d12361c0f2bdc25b1de837545f7dc1c33ba1051fbcc20b10dab4b335829403b0->leave($__internal_d12361c0f2bdc25b1de837545f7dc1c33ba1051fbcc20b10dab4b335829403b0_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b76d7f12cb804b50fca409284c6c7f0327fb45f5eb224f7f55cf122fc46c6b3d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b76d7f12cb804b50fca409284c6c7f0327fb45f5eb224f7f55cf122fc46c6b3d->enter($__internal_b76d7f12cb804b50fca409284c6c7f0327fb45f5eb224f7f55cf122fc46c6b3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "@FOSUser/Resetting/request.html.twig", 4)->display($context);
        
        $__internal_b76d7f12cb804b50fca409284c6c7f0327fb45f5eb224f7f55cf122fc46c6b3d->leave($__internal_b76d7f12cb804b50fca409284c6c7f0327fb45f5eb224f7f55cf122fc46c6b3d_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/request.html.twig";
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
{% include \"FOSUserBundle:Resetting:request_content.html.twig\" %}
{% endblock fos_user_content %}
";
    }
}
