<?php

/* @WebProfiler/Profiler/ajax_layout.html.twig */
class __TwigTemplate_abeb2adeb3c2b1239788ec632f5dec45e8d8cc00a9440dbb1bdbdce53b95fb8f extends Twig_Template
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
        $__internal_d169f2be0f8c9b92ecce920bf23cc66c35f3f403c70b0c275e8c63c7504009e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d169f2be0f8c9b92ecce920bf23cc66c35f3f403c70b0c275e8c63c7504009e7->enter($__internal_d169f2be0f8c9b92ecce920bf23cc66c35f3f403c70b0c275e8c63c7504009e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_d169f2be0f8c9b92ecce920bf23cc66c35f3f403c70b0c275e8c63c7504009e7->leave($__internal_d169f2be0f8c9b92ecce920bf23cc66c35f3f403c70b0c275e8c63c7504009e7_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_d3520a34e5c898e496cc2d7cc61c094dc1463f566cec05b39033348685f7e691 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3520a34e5c898e496cc2d7cc61c094dc1463f566cec05b39033348685f7e691->enter($__internal_d3520a34e5c898e496cc2d7cc61c094dc1463f566cec05b39033348685f7e691_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_d3520a34e5c898e496cc2d7cc61c094dc1463f566cec05b39033348685f7e691->leave($__internal_d3520a34e5c898e496cc2d7cc61c094dc1463f566cec05b39033348685f7e691_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/ajax_layout.html.twig";
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
