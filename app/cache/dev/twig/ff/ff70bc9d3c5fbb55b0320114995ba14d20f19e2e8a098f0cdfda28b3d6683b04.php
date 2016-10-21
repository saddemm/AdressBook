<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_3dbb569e48c819a114e3a9d7306be92aa833a53bc661404dfdd39305d097f6d7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_11da60d8706c4705bb7ff094b31972bbb5c12594c4de142150bbab7a36cb0a05 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11da60d8706c4705bb7ff094b31972bbb5c12594c4de142150bbab7a36cb0a05->enter($__internal_11da60d8706c4705bb7ff094b31972bbb5c12594c4de142150bbab7a36cb0a05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_11da60d8706c4705bb7ff094b31972bbb5c12594c4de142150bbab7a36cb0a05->leave($__internal_11da60d8706c4705bb7ff094b31972bbb5c12594c4de142150bbab7a36cb0a05_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_6d59fe124478fd6653057ab5d74fa91be63539ec75fd3e07ed656f626c16e257 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d59fe124478fd6653057ab5d74fa91be63539ec75fd3e07ed656f626c16e257->enter($__internal_6d59fe124478fd6653057ab5d74fa91be63539ec75fd3e07ed656f626c16e257_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_6d59fe124478fd6653057ab5d74fa91be63539ec75fd3e07ed656f626c16e257->leave($__internal_6d59fe124478fd6653057ab5d74fa91be63539ec75fd3e07ed656f626c16e257_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSource()
    {
        return "{% block panel '' %}
";
    }
}
