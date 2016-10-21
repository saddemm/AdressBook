<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_024d727a997be27513a26e68b816cce14bbb41d2da47fe2d5a6fa39c871f422c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_385bac9df56a7d2e4eb9c7ba417a41731f90346c2c73020e725e00688e308d6e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_385bac9df56a7d2e4eb9c7ba417a41731f90346c2c73020e725e00688e308d6e->enter($__internal_385bac9df56a7d2e4eb9c7ba417a41731f90346c2c73020e725e00688e308d6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_385bac9df56a7d2e4eb9c7ba417a41731f90346c2c73020e725e00688e308d6e->leave($__internal_385bac9df56a7d2e4eb9c7ba417a41731f90346c2c73020e725e00688e308d6e_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_b554555c12a9b0c8347f2731d121bb1e8e23922b3d7f9e2600b5f7a1757e6f32 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b554555c12a9b0c8347f2731d121bb1e8e23922b3d7f9e2600b5f7a1757e6f32->enter($__internal_b554555c12a9b0c8347f2731d121bb1e8e23922b3d7f9e2600b5f7a1757e6f32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_b554555c12a9b0c8347f2731d121bb1e8e23922b3d7f9e2600b5f7a1757e6f32->leave($__internal_b554555c12a9b0c8347f2731d121bb1e8e23922b3d7f9e2600b5f7a1757e6f32_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_6e65f942084517e252d0f5444e8707846d89607597df2d1cee1cc96ea47a2ceb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e65f942084517e252d0f5444e8707846d89607597df2d1cee1cc96ea47a2ceb->enter($__internal_6e65f942084517e252d0f5444e8707846d89607597df2d1cee1cc96ea47a2ceb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_6e65f942084517e252d0f5444e8707846d89607597df2d1cee1cc96ea47a2ceb->leave($__internal_6e65f942084517e252d0f5444e8707846d89607597df2d1cee1cc96ea47a2ceb_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_031b48faf96b20e956471f7db83854fc429a7bf8b8395645135bbfa84a1b3e1b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_031b48faf96b20e956471f7db83854fc429a7bf8b8395645135bbfa84a1b3e1b->enter($__internal_031b48faf96b20e956471f7db83854fc429a7bf8b8395645135bbfa84a1b3e1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_031b48faf96b20e956471f7db83854fc429a7bf8b8395645135bbfa84a1b3e1b->leave($__internal_031b48faf96b20e956471f7db83854fc429a7bf8b8395645135bbfa84a1b3e1b_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
";
    }
}
