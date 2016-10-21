<?php

/* @User/Registration/register.html.twig */
class __TwigTemplate_698791c26827538ad526de07e2c340b0a75d71253015d448435b9b6ce9795d73 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("UserBundle::base.html.twig", "@User/Registration/register.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "UserBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f27f6cda86058cb8456924eb2dfef1b7364583a654a3647294e9c9c6132eab89 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f27f6cda86058cb8456924eb2dfef1b7364583a654a3647294e9c9c6132eab89->enter($__internal_f27f6cda86058cb8456924eb2dfef1b7364583a654a3647294e9c9c6132eab89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f27f6cda86058cb8456924eb2dfef1b7364583a654a3647294e9c9c6132eab89->leave($__internal_f27f6cda86058cb8456924eb2dfef1b7364583a654a3647294e9c9c6132eab89_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_f3e265b229a65e0d32b19781ed48f8fc7b5bc54097897b4f4a820d8a6c997ea6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3e265b229a65e0d32b19781ed48f8fc7b5bc54097897b4f4a820d8a6c997ea6->enter($__internal_f3e265b229a65e0d32b19781ed48f8fc7b5bc54097897b4f4a820d8a6c997ea6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Create new entry";
        
        $__internal_f3e265b229a65e0d32b19781ed48f8fc7b5bc54097897b4f4a820d8a6c997ea6->leave($__internal_f3e265b229a65e0d32b19781ed48f8fc7b5bc54097897b4f4a820d8a6c997ea6_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_61b62a6f16e1ff5e5f2655f80b61cbec03795e49a911fcb0014120c459ab206b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61b62a6f16e1ff5e5f2655f80b61cbec03795e49a911fcb0014120c459ab206b->enter($__internal_61b62a6f16e1ff5e5f2655f80b61cbec03795e49a911fcb0014120c459ab206b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-md-6\">

            <form class=\"form-horizontal\" action=\"\" method=\"POST\">

                <fieldset>
                    <div id=\"legend\">
                        <legend class=\"\">Register</legend>
                    </div>
                    <div class=\"control-group\">
                        <label class=\"control-label\" for=\"name\">Name</label>
                        <div class=\"controls\">
                            ";
        // line 19
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'row');
        echo "
                        </div>
                    </div>

                    <div class=\"control-group\">
                        <label class=\"control-label\" for=\"surname\">Surname</label>
                        <div class=\"controls\">
                            ";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "surname", array()), 'row');
        echo "
                        </div>
                    </div>

                    <div class=\"control-group\">
                        <label class=\"control-label\" for=\"username\">Username</label>
                        <div class=\"controls\">
                            ";
        // line 33
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'row');
        echo "
                        </div>
                    </div>

                    <div class=\"control-group\">
                        <label class=\"control-label\" for=\"email\">E-mail</label>
                        <div class=\"controls\">
                            ";
        // line 40
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'row');
        echo "
                        </div>
                    </div>

                    <div class=\"control-group\">
                        <label class=\"control-label\" for=\"phone\">Phone</label>
                        <div class=\"controls\">
                            ";
        // line 47
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "phone", array()), 'row');
        echo "
                        </div>
                    </div>

                    <div class=\"control-group\">
                        <label class=\"control-label\" for=\"address\">Address</label>
                        <div class=\"controls\">
                            ";
        // line 54
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "address", array()), 'row');
        echo "
                        </div>
                    </div>

                    <div class=\"control-group\">
                        <label class=\"control-label\" for=\"website\">WebSite</label>
                        <div class=\"controls\">
                            ";
        // line 61
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "website", array()), 'row');
        echo "
                        </div>
                    </div>

                    <div class=\"control-group\">
                        <label class=\"control-label\" for=\"password\">Password</label>
                        <div class=\"controls\">
                            ";
        // line 68
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), 'row');
        echo "
                        </div>
                    </div>

                    <div class=\"control-group\">
                        ";
        // line 73
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 74
            echo "                            ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent_id", array()), 'row', array("value" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array())));
            echo "
                        ";
        } else {
            // line 76
            echo "                            ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent_id", array()), 'row', array("value" => 0));
            echo "
                        ";
        }
        // line 78
        echo "
                        ";
        // line 79
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
                        <!-- Button -->
                        <div class=\"controls\">
                            <button type=\"submit\" class=\"btn btn-success\">Register</button>
                        </div>

                    </div>
                </fieldset>
            </form>

        </div>
    </div>
</div>
";
        
        $__internal_61b62a6f16e1ff5e5f2655f80b61cbec03795e49a911fcb0014120c459ab206b->leave($__internal_61b62a6f16e1ff5e5f2655f80b61cbec03795e49a911fcb0014120c459ab206b_prof);

    }

    public function getTemplateName()
    {
        return "@User/Registration/register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  163 => 79,  160 => 78,  154 => 76,  148 => 74,  146 => 73,  138 => 68,  128 => 61,  118 => 54,  108 => 47,  98 => 40,  88 => 33,  78 => 26,  68 => 19,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'UserBundle::base.html.twig' %}

{% block title %}Create new entry{% endblock %}

{% block body %}
<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-md-6\">

            <form class=\"form-horizontal\" action=\"\" method=\"POST\">

                <fieldset>
                    <div id=\"legend\">
                        <legend class=\"\">Register</legend>
                    </div>
                    <div class=\"control-group\">
                        <label class=\"control-label\" for=\"name\">Name</label>
                        <div class=\"controls\">
                            {{ form_row(form.name) }}
                        </div>
                    </div>

                    <div class=\"control-group\">
                        <label class=\"control-label\" for=\"surname\">Surname</label>
                        <div class=\"controls\">
                            {{ form_row(form.surname) }}
                        </div>
                    </div>

                    <div class=\"control-group\">
                        <label class=\"control-label\" for=\"username\">Username</label>
                        <div class=\"controls\">
                            {{ form_row(form.username) }}
                        </div>
                    </div>

                    <div class=\"control-group\">
                        <label class=\"control-label\" for=\"email\">E-mail</label>
                        <div class=\"controls\">
                            {{ form_row(form.email) }}
                        </div>
                    </div>

                    <div class=\"control-group\">
                        <label class=\"control-label\" for=\"phone\">Phone</label>
                        <div class=\"controls\">
                            {{ form_row(form.phone) }}
                        </div>
                    </div>

                    <div class=\"control-group\">
                        <label class=\"control-label\" for=\"address\">Address</label>
                        <div class=\"controls\">
                            {{ form_row(form.address) }}
                        </div>
                    </div>

                    <div class=\"control-group\">
                        <label class=\"control-label\" for=\"website\">WebSite</label>
                        <div class=\"controls\">
                            {{ form_row(form.website) }}
                        </div>
                    </div>

                    <div class=\"control-group\">
                        <label class=\"control-label\" for=\"password\">Password</label>
                        <div class=\"controls\">
                            {{ form_row(form.plainPassword) }}
                        </div>
                    </div>

                    <div class=\"control-group\">
                        {% if is_granted('IS_AUTHENTICATED_FULLY') %}
                            {{ form_row(form.parent_id, {'value' : app.user.id}) }}
                        {% else %}
                            {{ form_row(form.parent_id, {'value' : 0 }) }}
                        {% endif %}

                        {{ form_rest(form) }}
                        <!-- Button -->
                        <div class=\"controls\">
                            <button type=\"submit\" class=\"btn btn-success\">Register</button>
                        </div>

                    </div>
                </fieldset>
            </form>

        </div>
    </div>
</div>
{% endblock %}";
    }
}
