<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_805df8aa71d4c7438e0c63fe236c75e1c44a9d4094bbeec7dce1217274d21f7d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("UserBundle::base.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
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
        $__internal_7c71afd84f1b639ad373704d626d492500e17ba6403082434a7d12de217b9509 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c71afd84f1b639ad373704d626d492500e17ba6403082434a7d12de217b9509->enter($__internal_7c71afd84f1b639ad373704d626d492500e17ba6403082434a7d12de217b9509_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7c71afd84f1b639ad373704d626d492500e17ba6403082434a7d12de217b9509->leave($__internal_7c71afd84f1b639ad373704d626d492500e17ba6403082434a7d12de217b9509_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_07bfcb9970521623e93da2d852699f720180e2417702987f42c959d572bfc9b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07bfcb9970521623e93da2d852699f720180e2417702987f42c959d572bfc9b7->enter($__internal_07bfcb9970521623e93da2d852699f720180e2417702987f42c959d572bfc9b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Login page";
        
        $__internal_07bfcb9970521623e93da2d852699f720180e2417702987f42c959d572bfc9b7->leave($__internal_07bfcb9970521623e93da2d852699f720180e2417702987f42c959d572bfc9b7_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_2f733381e371a1397f42fa77964e08abfff27ce5cadd05dfd05d23fc3fdae10b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f733381e371a1397f42fa77964e08abfff27ce5cadd05dfd05d23fc3fdae10b->enter($__internal_2f733381e371a1397f42fa77964e08abfff27ce5cadd05dfd05d23fc3fdae10b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "
    <div class=\"container\">
        <div class=\"row\" style=\"height: inherit;\">
            <div class=\"col-sm-6 col-md-4 col-md-offset-4\">
                <h1 class=\"text-center\">Welcome To Your Address Book</h1>
                <div class=\"account-wall\">
                    ";
        // line 11
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 12
            echo "                        <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), array(), "FOSUserBundle"), "html", null, true);
            echo "</div>
                    ";
        }
        // line 14
        echo "                    <div id=\"my-tab-content\" class=\"tab-content\">

                        <div class=\"tab-pane active\" id=\"login\">

                            <form class=\"form-signin\" action=\"";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
                                <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 19
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\" />
                                <input id=\"username\" name=\"_username\" value=\"";
        // line 20
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" type=\"text\" class=\"form-control\" placeholder=\"Username\" required autofocus>
                                <input id=\"password\" name=\"_password\" type=\"password\" class=\"form-control\" placeholder=\"Password\" required>
                                <input type=\"submit\" class=\"btn btn-lg btn-default btn-block\" value=\"Sign In\" />
                            </form>
                            <div id=\"tabs\" data-tabs=\"tabs\">
                                <p class=\"text-center\"><a href=\"#register\" data-toggle=\"tab\">Need an Account?</a></p>
                            </div>
                        </div>
                        <div class=\"tab-pane\" id=\"register\" style=\"height: inherit;\">
                            <form class=\"form-signin\" action=\"";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register");
        echo "\" method=\"post\" class=\"fos_user_registration_register\">
                                ";
        // line 30
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'row');
        echo "
                                ";
        // line 31
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "surname", array()), 'row');
        echo "
                                ";
        // line 32
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'row');
        echo "
                                ";
        // line 33
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'row');
        echo "
                                ";
        // line 34
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "phone", array()), 'row');
        echo "
                                ";
        // line 35
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "address", array()), 'row');
        echo "
                                ";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "website", array()), 'row');
        echo "
                                ";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), 'row');
        echo "
                                ";
        // line 38
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 39
            echo "                                    ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent_id", array()), 'row', array("value" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array())));
            echo "
                                ";
        } else {
            // line 41
            echo "                                    ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent_id", array()), 'row', array("value" => 0));
            echo "
                                ";
        }
        // line 43
        echo "                                ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "

                                <input type=\"submit\" class=\"btn btn-lg btn-default btn-block\" value=\"Sign Up\" />
                            </form>
                            <div id=\"tabs\" data-tabs=\"tabs\">
                                <p class=\"text-center\"><a href=\"#login\" data-toggle=\"tab\">Have an Account?</a></p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>


    ";
        
        $__internal_2f733381e371a1397f42fa77964e08abfff27ce5cadd05dfd05d23fc3fdae10b->leave($__internal_2f733381e371a1397f42fa77964e08abfff27ce5cadd05dfd05d23fc3fdae10b_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 43,  139 => 41,  133 => 39,  131 => 38,  127 => 37,  123 => 36,  119 => 35,  115 => 34,  111 => 33,  107 => 32,  103 => 31,  99 => 30,  95 => 29,  83 => 20,  79 => 19,  75 => 18,  69 => 14,  63 => 12,  61 => 11,  53 => 5,  47 => 4,  35 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'UserBundle::base.html.twig' %}

{% block title %}Login page{% endblock %}
    {% block body %}

    <div class=\"container\">
        <div class=\"row\" style=\"height: inherit;\">
            <div class=\"col-sm-6 col-md-4 col-md-offset-4\">
                <h1 class=\"text-center\">Welcome To Your Address Book</h1>
                <div class=\"account-wall\">
                    {% if error %}
                        <div>{{ error|trans({}, 'FOSUserBundle') }}</div>
                    {% endif %}
                    <div id=\"my-tab-content\" class=\"tab-content\">

                        <div class=\"tab-pane active\" id=\"login\">

                            <form class=\"form-signin\" action=\"{{ path(\"fos_user_security_check\") }}\" method=\"post\">
                                <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token }}\" />
                                <input id=\"username\" name=\"_username\" value=\"{{ last_username }}\" type=\"text\" class=\"form-control\" placeholder=\"Username\" required autofocus>
                                <input id=\"password\" name=\"_password\" type=\"password\" class=\"form-control\" placeholder=\"Password\" required>
                                <input type=\"submit\" class=\"btn btn-lg btn-default btn-block\" value=\"Sign In\" />
                            </form>
                            <div id=\"tabs\" data-tabs=\"tabs\">
                                <p class=\"text-center\"><a href=\"#register\" data-toggle=\"tab\">Need an Account?</a></p>
                            </div>
                        </div>
                        <div class=\"tab-pane\" id=\"register\" style=\"height: inherit;\">
                            <form class=\"form-signin\" action=\"{{ path('fos_user_registration_register') }}\" method=\"post\" class=\"fos_user_registration_register\">
                                {{ form_row(form.name) }}
                                {{ form_row(form.surname) }}
                                {{ form_row(form.username) }}
                                {{ form_row(form.email) }}
                                {{ form_row(form.phone) }}
                                {{ form_row(form.address) }}
                                {{ form_row(form.website) }}
                                {{ form_row(form.plainPassword) }}
                                {% if is_granted('IS_AUTHENTICATED_FULLY') %}
                                    {{ form_row(form.parent_id, {'value' : app.user.id}) }}
                                {% else %}
                                    {{ form_row(form.parent_id, {'value' : 0 }) }}
                                {% endif %}
                                {{ form_rest(form) }}

                                <input type=\"submit\" class=\"btn btn-lg btn-default btn-block\" value=\"Sign Up\" />
                            </form>
                            <div id=\"tabs\" data-tabs=\"tabs\">
                                <p class=\"text-center\"><a href=\"#login\" data-toggle=\"tab\">Have an Account?</a></p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>


    {% endblock %}


";
    }
}
