<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_359c9e15d16f88ace17e7afe656edbfa430fe69e6ebb091b0e7b9214475e575c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0cf9c1cbea750195b77cfdfec9f54a24a574bc9c9e8acf6af9e2461e72a6657d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0cf9c1cbea750195b77cfdfec9f54a24a574bc9c9e8acf6af9e2461e72a6657d->enter($__internal_0cf9c1cbea750195b77cfdfec9f54a24a574bc9c9e8acf6af9e2461e72a6657d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0cf9c1cbea750195b77cfdfec9f54a24a574bc9c9e8acf6af9e2461e72a6657d->leave($__internal_0cf9c1cbea750195b77cfdfec9f54a24a574bc9c9e8acf6af9e2461e72a6657d_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_360dc43e2cebf1235e221885afecc8c586f20a624396826e2bfef536572fc126 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_360dc43e2cebf1235e221885afecc8c586f20a624396826e2bfef536572fc126->enter($__internal_360dc43e2cebf1235e221885afecc8c586f20a624396826e2bfef536572fc126_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_360dc43e2cebf1235e221885afecc8c586f20a624396826e2bfef536572fc126->leave($__internal_360dc43e2cebf1235e221885afecc8c586f20a624396826e2bfef536572fc126_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_14c3827c1b420ae2f91d1f0c70c383bf369a5e3c23675c37430026cb6dfa610a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14c3827c1b420ae2f91d1f0c70c383bf369a5e3c23675c37430026cb6dfa610a->enter($__internal_14c3827c1b420ae2f91d1f0c70c383bf369a5e3c23675c37430026cb6dfa610a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_14c3827c1b420ae2f91d1f0c70c383bf369a5e3c23675c37430026cb6dfa610a->leave($__internal_14c3827c1b420ae2f91d1f0c70c383bf369a5e3c23675c37430026cb6dfa610a_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_c3248bb275b34e0642003425ac71a438b0372d690027af3c7a1aaf631b8c2f80 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3248bb275b34e0642003425ac71a438b0372d690027af3c7a1aaf631b8c2f80->enter($__internal_c3248bb275b34e0642003425ac71a438b0372d690027af3c7a1aaf631b8c2f80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_c3248bb275b34e0642003425ac71a438b0372d690027af3c7a1aaf631b8c2f80->leave($__internal_c3248bb275b34e0642003425ac71a438b0372d690027af3c7a1aaf631b8c2f80_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
";
    }
}
