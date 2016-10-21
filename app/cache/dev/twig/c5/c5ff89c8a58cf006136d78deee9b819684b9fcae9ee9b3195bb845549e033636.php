<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_aea76d97c8034116c7bff10585c1b45a25fba41d24c76fc98c9e36a290a3bf62 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
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
        $__internal_85b6b88ce36db13dfd9be44a562fd708097c67010ae0407ba464a9386885525b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85b6b88ce36db13dfd9be44a562fd708097c67010ae0407ba464a9386885525b->enter($__internal_85b6b88ce36db13dfd9be44a562fd708097c67010ae0407ba464a9386885525b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_85b6b88ce36db13dfd9be44a562fd708097c67010ae0407ba464a9386885525b->leave($__internal_85b6b88ce36db13dfd9be44a562fd708097c67010ae0407ba464a9386885525b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8acd8e279d73b8b1e733cd4b97c441b8aa442b7aa1be3db387294cd8c08c16ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8acd8e279d73b8b1e733cd4b97c441b8aa442b7aa1be3db387294cd8c08c16ee->enter($__internal_8acd8e279d73b8b1e733cd4b97c441b8aa442b7aa1be3db387294cd8c08c16ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_8acd8e279d73b8b1e733cd4b97c441b8aa442b7aa1be3db387294cd8c08c16ee->leave($__internal_8acd8e279d73b8b1e733cd4b97c441b8aa442b7aa1be3db387294cd8c08c16ee_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
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
{% include \"FOSUserBundle:Resetting:reset_content.html.twig\" %}
{% endblock fos_user_content %}
";
    }
}
