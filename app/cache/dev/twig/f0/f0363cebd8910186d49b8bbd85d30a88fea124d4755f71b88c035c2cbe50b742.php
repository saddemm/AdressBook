<?php

/* ::base.html.twig */
class __TwigTemplate_4ab7f089f6b7cf81c5c6dcdf5a70611e323f06ca2174981db1c28a3626548869 extends Twig_Template
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
        $__internal_7c772683dd60b61d66983f0a4ade318366a5fabc76a27ece81039d3848b4f6bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c772683dd60b61d66983f0a4ade318366a5fabc76a27ece81039d3848b4f6bd->enter($__internal_7c772683dd60b61d66983f0a4ade318366a5fabc76a27ece81039d3848b4f6bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        // line 16
        echo "
    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
</head>

<body>
";
        // line 21
        $this->displayBlock('body', $context, $blocks);
        // line 23
        echo "
";
        // line 24
        $this->displayBlock('javascripts', $context, $blocks);
        // line 27
        echo "</body>
</html>";
        
        $__internal_7c772683dd60b61d66983f0a4ade318366a5fabc76a27ece81039d3848b4f6bd->leave($__internal_7c772683dd60b61d66983f0a4ade318366a5fabc76a27ece81039d3848b4f6bd_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_060961648a753fbdc2417f5d497ad5b38c01a6656c72d47bbf5c00acd1f57685 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_060961648a753fbdc2417f5d497ad5b38c01a6656c72d47bbf5c00acd1f57685->enter($__internal_060961648a753fbdc2417f5d497ad5b38c01a6656c72d47bbf5c00acd1f57685_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Mon titre";
        
        $__internal_060961648a753fbdc2417f5d497ad5b38c01a6656c72d47bbf5c00acd1f57685->leave($__internal_060961648a753fbdc2417f5d497ad5b38c01a6656c72d47bbf5c00acd1f57685_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_a6dce94abeb55270edcff460b48ed8bf7d7183096330ae013014c42a4dd9ec82 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6dce94abeb55270edcff460b48ed8bf7d7183096330ae013014c42a4dd9ec82->enter($__internal_a6dce94abeb55270edcff460b48ed8bf7d7183096330ae013014c42a4dd9ec82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 9
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\">
        
        <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("http://www.w3schools.com/lib/w3.css"), "html", null, true);
        echo "\">
      <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("https://fonts.googleapis.com/icon?family=Material+Icons"), "html", null, true);
        echo "\">
        <script src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\"></script>
    ";
        
        $__internal_a6dce94abeb55270edcff460b48ed8bf7d7183096330ae013014c42a4dd9ec82->leave($__internal_a6dce94abeb55270edcff460b48ed8bf7d7183096330ae013014c42a4dd9ec82_prof);

    }

    // line 21
    public function block_body($context, array $blocks = array())
    {
        $__internal_2a51e5e7214bd8733f371f64b26797b7842e72a02b16a2555e46c9399ec75747 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a51e5e7214bd8733f371f64b26797b7842e72a02b16a2555e46c9399ec75747->enter($__internal_2a51e5e7214bd8733f371f64b26797b7842e72a02b16a2555e46c9399ec75747_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_2a51e5e7214bd8733f371f64b26797b7842e72a02b16a2555e46c9399ec75747->leave($__internal_2a51e5e7214bd8733f371f64b26797b7842e72a02b16a2555e46c9399ec75747_prof);

    }

    // line 24
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_cd1776379a8a3b17d87429d8992a459173128ba7aa978fd628970e7117992328 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd1776379a8a3b17d87429d8992a459173128ba7aa978fd628970e7117992328->enter($__internal_cd1776379a8a3b17d87429d8992a459173128ba7aa978fd628970e7117992328_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 25
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_cd1776379a8a3b17d87429d8992a459173128ba7aa978fd628970e7117992328->leave($__internal_cd1776379a8a3b17d87429d8992a459173128ba7aa978fd628970e7117992328_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 25,  121 => 24,  110 => 21,  101 => 14,  97 => 13,  93 => 12,  89 => 11,  83 => 9,  77 => 8,  65 => 5,  57 => 27,  55 => 24,  52 => 23,  50 => 21,  43 => 17,  40 => 16,  38 => 8,  32 => 5,  26 => 1,);
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
        
        <link rel=\"stylesheet\" href=\"{{ asset('http://www.w3schools.com/lib/w3.css') }}\">
      <link rel=\"stylesheet\" href=\"{{ asset('https://fonts.googleapis.com/icon?family=Material+Icons') }}\">
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
