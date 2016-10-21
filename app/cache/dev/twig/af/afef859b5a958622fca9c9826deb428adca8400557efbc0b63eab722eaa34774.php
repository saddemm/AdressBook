<?php

/* base.html.twig */
class __TwigTemplate_97bd594fd6e67f7284e9256a4dc140eaad8950345597040cbd703211b724d764 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d8c1f881d5060330078b7ee34577917cf90235e119eb44b0087cacd6b4f4039a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8c1f881d5060330078b7ee34577917cf90235e119eb44b0087cacd6b4f4039a->enter($__internal_d8c1f881d5060330078b7ee34577917cf90235e119eb44b0087cacd6b4f4039a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\" />
    <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>


    ";
        // line 8
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 13
        echo "
    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
</head>

<body>
";
        // line 18
        $this->displayBlock('body', $context, $blocks);
        // line 20
        echo "
";
        // line 21
        $this->displayBlock('javascripts', $context, $blocks);
        // line 24
        echo "</body>
</html>";
        
        $__internal_d8c1f881d5060330078b7ee34577917cf90235e119eb44b0087cacd6b4f4039a->leave($__internal_d8c1f881d5060330078b7ee34577917cf90235e119eb44b0087cacd6b4f4039a_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_d1c20f4679127507c481851bad87b357e1f311949b3b6d4211a288085438c155 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1c20f4679127507c481851bad87b357e1f311949b3b6d4211a288085438c155->enter($__internal_d1c20f4679127507c481851bad87b357e1f311949b3b6d4211a288085438c155_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Mon titre";
        
        $__internal_d1c20f4679127507c481851bad87b357e1f311949b3b6d4211a288085438c155->leave($__internal_d1c20f4679127507c481851bad87b357e1f311949b3b6d4211a288085438c155_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_a494cfbb3231c91ca763c2137cd836821f03b3d74b90aa661d2ed5192c8f67ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a494cfbb3231c91ca763c2137cd836821f03b3d74b90aa661d2ed5192c8f67ad->enter($__internal_a494cfbb3231c91ca763c2137cd836821f03b3d74b90aa661d2ed5192c8f67ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 9
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\">
        <script src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\"></script>
    ";
        
        $__internal_a494cfbb3231c91ca763c2137cd836821f03b3d74b90aa661d2ed5192c8f67ad->leave($__internal_a494cfbb3231c91ca763c2137cd836821f03b3d74b90aa661d2ed5192c8f67ad_prof);

    }

    // line 18
    public function block_body($context, array $blocks = array())
    {
        $__internal_b9daa3b6be4b02e2baaaac9e643c0be718cce1caea2cdb3e35e24132af7a80d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9daa3b6be4b02e2baaaac9e643c0be718cce1caea2cdb3e35e24132af7a80d2->enter($__internal_b9daa3b6be4b02e2baaaac9e643c0be718cce1caea2cdb3e35e24132af7a80d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_b9daa3b6be4b02e2baaaac9e643c0be718cce1caea2cdb3e35e24132af7a80d2->leave($__internal_b9daa3b6be4b02e2baaaac9e643c0be718cce1caea2cdb3e35e24132af7a80d2_prof);

    }

    // line 21
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_960d3d466f479a9ffef9bc0e803499643db34fcfd07277c7d03d25fea4de81ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_960d3d466f479a9ffef9bc0e803499643db34fcfd07277c7d03d25fea4de81ae->enter($__internal_960d3d466f479a9ffef9bc0e803499643db34fcfd07277c7d03d25fea4de81ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 22
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_960d3d466f479a9ffef9bc0e803499643db34fcfd07277c7d03d25fea4de81ae->leave($__internal_960d3d466f479a9ffef9bc0e803499643db34fcfd07277c7d03d25fea4de81ae_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 22,  112 => 21,  101 => 18,  92 => 11,  88 => 10,  83 => 9,  77 => 8,  65 => 5,  57 => 24,  55 => 21,  52 => 20,  50 => 18,  43 => 14,  40 => 13,  38 => 8,  32 => 5,  26 => 1,);
    }

    public function getSource()
    {
        return "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\" />
    <title>{% block title %}Mon titre{% endblock %}</title>


    {% block stylesheets %}
        <link rel=\"stylesheet\" href=\"{{ asset('css/bootstrap.css') }}\">
        <script src=\"{{ asset('js/jquery.min.js') }}\"></script>
        <script src=\"{{ asset('js/bootstrap.js') }}\"></script>
    {% endblock %}

    <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
</head>

<body>
{% block body %}
{% endblock %}

{% block javascripts %}
    <script src=\"{{ asset('js/bootstrap.js') }}\"></script>
{% endblock %}
</body>
</html>";
    }
}
