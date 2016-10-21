<?php

/* UserBundle::base.html.twig */
class __TwigTemplate_cb1bc6fc8c64efb5eb8b2efeff784b72c1379c04c2b432c16e1b819224ff4bfa extends Twig_Template
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
        $__internal_4eeaa2f564be4ca11f23722fa093a867337b167b92fffcda41d6ea09be7fee48 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4eeaa2f564be4ca11f23722fa093a867337b167b92fffcda41d6ea09be7fee48->enter($__internal_4eeaa2f564be4ca11f23722fa093a867337b167b92fffcda41d6ea09be7fee48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle::base.html.twig"));

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
        
        $__internal_4eeaa2f564be4ca11f23722fa093a867337b167b92fffcda41d6ea09be7fee48->leave($__internal_4eeaa2f564be4ca11f23722fa093a867337b167b92fffcda41d6ea09be7fee48_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_df2ff30a894811a186343d1b345d422ed2ca9c699da2d01a0079a84e0c9d1ead = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df2ff30a894811a186343d1b345d422ed2ca9c699da2d01a0079a84e0c9d1ead->enter($__internal_df2ff30a894811a186343d1b345d422ed2ca9c699da2d01a0079a84e0c9d1ead_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Mon titre";
        
        $__internal_df2ff30a894811a186343d1b345d422ed2ca9c699da2d01a0079a84e0c9d1ead->leave($__internal_df2ff30a894811a186343d1b345d422ed2ca9c699da2d01a0079a84e0c9d1ead_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_604886b39e911135d9b6a05ed6f6df102abc92fe098740c41d4b91c9e7b99a06 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_604886b39e911135d9b6a05ed6f6df102abc92fe098740c41d4b91c9e7b99a06->enter($__internal_604886b39e911135d9b6a05ed6f6df102abc92fe098740c41d4b91c9e7b99a06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_604886b39e911135d9b6a05ed6f6df102abc92fe098740c41d4b91c9e7b99a06->leave($__internal_604886b39e911135d9b6a05ed6f6df102abc92fe098740c41d4b91c9e7b99a06_prof);

    }

    // line 18
    public function block_body($context, array $blocks = array())
    {
        $__internal_8421f21c3514045f96ac0a737df31f92db5856a3cea92084dda2e60200de1f79 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8421f21c3514045f96ac0a737df31f92db5856a3cea92084dda2e60200de1f79->enter($__internal_8421f21c3514045f96ac0a737df31f92db5856a3cea92084dda2e60200de1f79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_8421f21c3514045f96ac0a737df31f92db5856a3cea92084dda2e60200de1f79->leave($__internal_8421f21c3514045f96ac0a737df31f92db5856a3cea92084dda2e60200de1f79_prof);

    }

    // line 21
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_8030e5625821627c94fa3d8ddf08c41960893316bc86741fea11830ece21e4a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8030e5625821627c94fa3d8ddf08c41960893316bc86741fea11830ece21e4a3->enter($__internal_8030e5625821627c94fa3d8ddf08c41960893316bc86741fea11830ece21e4a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 22
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_8030e5625821627c94fa3d8ddf08c41960893316bc86741fea11830ece21e4a3->leave($__internal_8030e5625821627c94fa3d8ddf08c41960893316bc86741fea11830ece21e4a3_prof);

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
