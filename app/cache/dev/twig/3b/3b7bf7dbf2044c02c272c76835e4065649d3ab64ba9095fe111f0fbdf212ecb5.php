<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_2d2886a4128b6b5befafdcec43da787aa9849f5d1601ea3dbb765631a37337f8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
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
        $__internal_7fe9df31731be253b1d60be81208445d90bd964a73672ccbb35d3c41bd2b9397 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7fe9df31731be253b1d60be81208445d90bd964a73672ccbb35d3c41bd2b9397->enter($__internal_7fe9df31731be253b1d60be81208445d90bd964a73672ccbb35d3c41bd2b9397_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7fe9df31731be253b1d60be81208445d90bd964a73672ccbb35d3c41bd2b9397->leave($__internal_7fe9df31731be253b1d60be81208445d90bd964a73672ccbb35d3c41bd2b9397_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_cc03ad9008ad3ac65d9e60969240e415772e5d66bb4d54736245b9632a0c5d76 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc03ad9008ad3ac65d9e60969240e415772e5d66bb4d54736245b9632a0c5d76->enter($__internal_cc03ad9008ad3ac65d9e60969240e415772e5d66bb4d54736245b9632a0c5d76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_cc03ad9008ad3ac65d9e60969240e415772e5d66bb4d54736245b9632a0c5d76->leave($__internal_cc03ad9008ad3ac65d9e60969240e415772e5d66bb4d54736245b9632a0c5d76_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
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
{% include \"FOSUserBundle:Group:show_content.html.twig\" %}
{% endblock fos_user_content %}
";
    }
}
