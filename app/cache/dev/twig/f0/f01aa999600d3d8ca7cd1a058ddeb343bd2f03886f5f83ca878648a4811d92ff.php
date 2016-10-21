<?php

/* UserBundle::base.html.twig */
class __TwigTemplate_0184b749a9a7c1ecd35c1e21a59c17eb276f34f703f231de8b0f0fe0ed337f95 extends Twig_Template
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
        $__internal_2da1167783bf2823e6bb3f2dbd7df6dc68ea370e2c6ef70353a3abb517c89626 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2da1167783bf2823e6bb3f2dbd7df6dc68ea370e2c6ef70353a3abb517c89626->enter($__internal_2da1167783bf2823e6bb3f2dbd7df6dc68ea370e2c6ef70353a3abb517c89626_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle::base.html.twig"));

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
        
        $__internal_2da1167783bf2823e6bb3f2dbd7df6dc68ea370e2c6ef70353a3abb517c89626->leave($__internal_2da1167783bf2823e6bb3f2dbd7df6dc68ea370e2c6ef70353a3abb517c89626_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_d383bc0446cf920eb6a6a7bf646d4ede4dcd196951fcfa11bb64fb95bc9714b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d383bc0446cf920eb6a6a7bf646d4ede4dcd196951fcfa11bb64fb95bc9714b8->enter($__internal_d383bc0446cf920eb6a6a7bf646d4ede4dcd196951fcfa11bb64fb95bc9714b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Mon titre";
        
        $__internal_d383bc0446cf920eb6a6a7bf646d4ede4dcd196951fcfa11bb64fb95bc9714b8->leave($__internal_d383bc0446cf920eb6a6a7bf646d4ede4dcd196951fcfa11bb64fb95bc9714b8_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_d79380b63c0161efb7a5d0281da9d1c34772fed60d3ee159d10935e20ecccfbf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d79380b63c0161efb7a5d0281da9d1c34772fed60d3ee159d10935e20ecccfbf->enter($__internal_d79380b63c0161efb7a5d0281da9d1c34772fed60d3ee159d10935e20ecccfbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_d79380b63c0161efb7a5d0281da9d1c34772fed60d3ee159d10935e20ecccfbf->leave($__internal_d79380b63c0161efb7a5d0281da9d1c34772fed60d3ee159d10935e20ecccfbf_prof);

    }

    // line 18
    public function block_body($context, array $blocks = array())
    {
        $__internal_5ffc086448d3081661f803a9de1978553a66845025ea52c4d67e14b797e53b80 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ffc086448d3081661f803a9de1978553a66845025ea52c4d67e14b797e53b80->enter($__internal_5ffc086448d3081661f803a9de1978553a66845025ea52c4d67e14b797e53b80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_5ffc086448d3081661f803a9de1978553a66845025ea52c4d67e14b797e53b80->leave($__internal_5ffc086448d3081661f803a9de1978553a66845025ea52c4d67e14b797e53b80_prof);

    }

    // line 21
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_cd342de4ce076412269e0f2a325980abfd094ec0816a8c8f9b904960444a773c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd342de4ce076412269e0f2a325980abfd094ec0816a8c8f9b904960444a773c->enter($__internal_cd342de4ce076412269e0f2a325980abfd094ec0816a8c8f9b904960444a773c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 22
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_cd342de4ce076412269e0f2a325980abfd094ec0816a8c8f9b904960444a773c->leave($__internal_cd342de4ce076412269e0f2a325980abfd094ec0816a8c8f9b904960444a773c_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle::base.html.twig";
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
