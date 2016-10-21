<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_c28f7d8a841403df085aef2223c84d6abf18164de3af91227ff8b4f560b4ff38 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
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
        $__internal_3b5092b52e4c5b5612c729a8b3ef4add777889a8feb8196a3d3b105e3b1dc44d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b5092b52e4c5b5612c729a8b3ef4add777889a8feb8196a3d3b105e3b1dc44d->enter($__internal_3b5092b52e4c5b5612c729a8b3ef4add777889a8feb8196a3d3b105e3b1dc44d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3b5092b52e4c5b5612c729a8b3ef4add777889a8feb8196a3d3b105e3b1dc44d->leave($__internal_3b5092b52e4c5b5612c729a8b3ef4add777889a8feb8196a3d3b105e3b1dc44d_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_e77b96812752928b8d4fdaa38c5e07486d1a3d8a5332eb6dc75f89e74ed72d41 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e77b96812752928b8d4fdaa38c5e07486d1a3d8a5332eb6dc75f89e74ed72d41->enter($__internal_e77b96812752928b8d4fdaa38c5e07486d1a3d8a5332eb6dc75f89e74ed72d41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_e77b96812752928b8d4fdaa38c5e07486d1a3d8a5332eb6dc75f89e74ed72d41->leave($__internal_e77b96812752928b8d4fdaa38c5e07486d1a3d8a5332eb6dc75f89e74ed72d41_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_db6606a11cdd3075f6c8e33ea3d5aaf8ba2f99c44bf0d0c4eefb725eb6c9304d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db6606a11cdd3075f6c8e33ea3d5aaf8ba2f99c44bf0d0c4eefb725eb6c9304d->enter($__internal_db6606a11cdd3075f6c8e33ea3d5aaf8ba2f99c44bf0d0c4eefb725eb6c9304d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_db6606a11cdd3075f6c8e33ea3d5aaf8ba2f99c44bf0d0c4eefb725eb6c9304d->leave($__internal_db6606a11cdd3075f6c8e33ea3d5aaf8ba2f99c44bf0d0c4eefb725eb6c9304d_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_fcb5f9fc16cc2ba70bbde083b01a0c0b27ebe488be211384763e488a9f6aed18 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fcb5f9fc16cc2ba70bbde083b01a0c0b27ebe488be211384763e488a9f6aed18->enter($__internal_fcb5f9fc16cc2ba70bbde083b01a0c0b27ebe488be211384763e488a9f6aed18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_fcb5f9fc16cc2ba70bbde083b01a0c0b27ebe488be211384763e488a9f6aed18->leave($__internal_fcb5f9fc16cc2ba70bbde083b01a0c0b27ebe488be211384763e488a9f6aed18_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
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
