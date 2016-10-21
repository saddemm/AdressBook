<?php

/* @User/base.html.twig */
class __TwigTemplate_1dd263d6120bc41c3f004f7c17b46ade3e69c862430e0997a2f4d13d6398f19c extends Twig_Template
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
        $__internal_f9957a7ca0e8b3ed68af0ea17c01540569daeca8d8b6ac35cd898e5dd211f300 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9957a7ca0e8b3ed68af0ea17c01540569daeca8d8b6ac35cd898e5dd211f300->enter($__internal_f9957a7ca0e8b3ed68af0ea17c01540569daeca8d8b6ac35cd898e5dd211f300_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/base.html.twig"));

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
        
        $__internal_f9957a7ca0e8b3ed68af0ea17c01540569daeca8d8b6ac35cd898e5dd211f300->leave($__internal_f9957a7ca0e8b3ed68af0ea17c01540569daeca8d8b6ac35cd898e5dd211f300_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_06227f6ea0b3489d7792135be5c252d88a2b786abea90f71563adfa088f0c4c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06227f6ea0b3489d7792135be5c252d88a2b786abea90f71563adfa088f0c4c4->enter($__internal_06227f6ea0b3489d7792135be5c252d88a2b786abea90f71563adfa088f0c4c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Mon titre";
        
        $__internal_06227f6ea0b3489d7792135be5c252d88a2b786abea90f71563adfa088f0c4c4->leave($__internal_06227f6ea0b3489d7792135be5c252d88a2b786abea90f71563adfa088f0c4c4_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_453c1cfab6da93325147282d4b08ad539b4065924f9c707f8277dd8fe87c6f78 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_453c1cfab6da93325147282d4b08ad539b4065924f9c707f8277dd8fe87c6f78->enter($__internal_453c1cfab6da93325147282d4b08ad539b4065924f9c707f8277dd8fe87c6f78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_453c1cfab6da93325147282d4b08ad539b4065924f9c707f8277dd8fe87c6f78->leave($__internal_453c1cfab6da93325147282d4b08ad539b4065924f9c707f8277dd8fe87c6f78_prof);

    }

    // line 18
    public function block_body($context, array $blocks = array())
    {
        $__internal_b258f070bf62a8ae0c3dfaf61328b7620b033b7a3823751a4255b5794bd3307b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b258f070bf62a8ae0c3dfaf61328b7620b033b7a3823751a4255b5794bd3307b->enter($__internal_b258f070bf62a8ae0c3dfaf61328b7620b033b7a3823751a4255b5794bd3307b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_b258f070bf62a8ae0c3dfaf61328b7620b033b7a3823751a4255b5794bd3307b->leave($__internal_b258f070bf62a8ae0c3dfaf61328b7620b033b7a3823751a4255b5794bd3307b_prof);

    }

    // line 21
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_6d450376fd108a1b1d2b46cc221d8e04db9367fca1d60fa0e2d087e9d81d2af7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d450376fd108a1b1d2b46cc221d8e04db9367fca1d60fa0e2d087e9d81d2af7->enter($__internal_6d450376fd108a1b1d2b46cc221d8e04db9367fca1d60fa0e2d087e9d81d2af7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 22
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_6d450376fd108a1b1d2b46cc221d8e04db9367fca1d60fa0e2d087e9d81d2af7->leave($__internal_6d450376fd108a1b1d2b46cc221d8e04db9367fca1d60fa0e2d087e9d81d2af7_prof);

    }

    public function getTemplateName()
    {
        return "@User/base.html.twig";
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
