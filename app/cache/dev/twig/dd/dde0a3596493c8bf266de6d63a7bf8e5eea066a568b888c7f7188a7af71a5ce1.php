<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_85221b5e0430cf0484853aa4c7b775506ba7f4f2bbe9319a3da713b6063c76e9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
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
        $__internal_d03c6b765763b947d1a36e1e1dfaa086987f602c97f8590f9a2a663db7c2461c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d03c6b765763b947d1a36e1e1dfaa086987f602c97f8590f9a2a663db7c2461c->enter($__internal_d03c6b765763b947d1a36e1e1dfaa086987f602c97f8590f9a2a663db7c2461c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d03c6b765763b947d1a36e1e1dfaa086987f602c97f8590f9a2a663db7c2461c->leave($__internal_d03c6b765763b947d1a36e1e1dfaa086987f602c97f8590f9a2a663db7c2461c_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b9df4e243c36811b0087a308fe3a927705ffbc2b6db5459f8f2216ce9d5dcbcc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9df4e243c36811b0087a308fe3a927705ffbc2b6db5459f8f2216ce9d5dcbcc->enter($__internal_b9df4e243c36811b0087a308fe3a927705ffbc2b6db5459f8f2216ce9d5dcbcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_b9df4e243c36811b0087a308fe3a927705ffbc2b6db5459f8f2216ce9d5dcbcc->leave($__internal_b9df4e243c36811b0087a308fe3a927705ffbc2b6db5459f8f2216ce9d5dcbcc_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
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
{% include \"FOSUserBundle:Group:edit_content.html.twig\" %}
{% endblock fos_user_content %}
";
    }
}
