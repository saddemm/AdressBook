<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_badf11e9e041cc6a751b9ca46d4309554aef6ac1363c651490051f648fbc6445 extends Twig_Template
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
        $__internal_5f6460eb2d08dc1c6e222adf16428c0ab484362041970d02f6fea09d404b0f70 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f6460eb2d08dc1c6e222adf16428c0ab484362041970d02f6fea09d404b0f70->enter($__internal_5f6460eb2d08dc1c6e222adf16428c0ab484362041970d02f6fea09d404b0f70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5f6460eb2d08dc1c6e222adf16428c0ab484362041970d02f6fea09d404b0f70->leave($__internal_5f6460eb2d08dc1c6e222adf16428c0ab484362041970d02f6fea09d404b0f70_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_354c0c9ba786daee5d446fa387d5e2e63d4990d9532a4930e50b306675b31be6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_354c0c9ba786daee5d446fa387d5e2e63d4990d9532a4930e50b306675b31be6->enter($__internal_354c0c9ba786daee5d446fa387d5e2e63d4990d9532a4930e50b306675b31be6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Authentification";
        
        $__internal_354c0c9ba786daee5d446fa387d5e2e63d4990d9532a4930e50b306675b31be6->leave($__internal_354c0c9ba786daee5d446fa387d5e2e63d4990d9532a4930e50b306675b31be6_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_121d807fa1033d50d9d3ddd583c3f2603060fad14758e91d6ca26a9f8860696e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_121d807fa1033d50d9d3ddd583c3f2603060fad14758e91d6ca26a9f8860696e->enter($__internal_121d807fa1033d50d9d3ddd583c3f2603060fad14758e91d6ca26a9f8860696e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "
        
    <div class=\"container\">
        <div class=\"row\" style=\"height: inherit;\">
            <div class=\"col-sm-6 col-md-4 col-md-offset-4\">
                <h1 class=\"text-center\">Bienvenu sur votre carnet d'adresse</h1>
                <div class=\"account-wall\">
                    ";
        // line 12
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 13
            echo "                        <div class=\"alert alert-danger\">
  <strong> Identifiant invalide</strong>
</div>
                        <div></div>
                    ";
        }
        // line 18
        echo "                    <div id=\"my-tab-content\" class=\"tab-content\">

                        <div class=\"tab-pane active\" id=\"login\">

                            <form class=\"form-signin\" action=\"";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
                                <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 23
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\" />
                                <input id=\"username\" name=\"_username\" value=\"";
        // line 24
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" type=\"text\" class=\"form-control\" placeholder=\"Username\" required autofocus>
                                <input id=\"password\" name=\"_password\" type=\"password\" class=\"form-control\" placeholder=\"Password\" required>
                                <input type=\"submit\" class=\"btn btn-lg btn-default btn-block\" value=\"Se connecter\" />
                            </form>
                            <div id=\"tabs\" data-tabs=\"tabs\">
                                <p class=\"text-center\"><a href=\"#register\" data-toggle=\"tab\">Pas encore inscrit ?</a></p>
                            </div>
                        </div>
                        <div class=\"tab-pane\" id=\"register\" style=\"height: inherit;\">
                            <form class=\"form-signin\" action=\"";
        // line 33
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register");
        echo "\" method=\"post\" class=\"fos_user_registration_register\">
                                ";
        // line 34
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'row');
        echo "
                                ";
        // line 35
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "surname", array()), 'row');
        echo "
                                ";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'row');
        echo "
                                ";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'row');
        echo "
                                ";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "phone", array()), 'row');
        echo "
                                ";
        // line 39
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "address", array()), 'row');
        echo "
                                ";
        // line 40
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "website", array()), 'row');
        echo "
                                ";
        // line 41
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), 'row');
        echo "
                                ";
        // line 42
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 43
            echo "                                    ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent_id", array()), 'row', array("value" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array())));
            echo "
                                ";
        } else {
            // line 45
            echo "                                    ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent_id", array()), 'row', array("value" => 0));
            echo "
                                ";
        }
        // line 47
        echo "                                ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "

                                <input type=\"submit\" class=\"btn btn-lg btn-default btn-block\" value=\"S'inscrire\" />
                            </form>
                            <div id=\"tabs\" data-tabs=\"tabs\">
                                <p class=\"text-center\"><a href=\"#login\" data-toggle=\"tab\">Déjà enregistré?</a></p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>


    ";
        
        $__internal_121d807fa1033d50d9d3ddd583c3f2603060fad14758e91d6ca26a9f8860696e->leave($__internal_121d807fa1033d50d9d3ddd583c3f2603060fad14758e91d6ca26a9f8860696e_prof);

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
        return array (  147 => 47,  141 => 45,  135 => 43,  133 => 42,  129 => 41,  125 => 40,  121 => 39,  117 => 38,  113 => 37,  109 => 36,  105 => 35,  101 => 34,  97 => 33,  85 => 24,  81 => 23,  77 => 22,  71 => 18,  64 => 13,  62 => 12,  53 => 5,  47 => 4,  35 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'UserBundle::base.html.twig' %}

{% block title %}Authentification{% endblock %}
    {% block body %}

        
    <div class=\"container\">
        <div class=\"row\" style=\"height: inherit;\">
            <div class=\"col-sm-6 col-md-4 col-md-offset-4\">
                <h1 class=\"text-center\">Bienvenu sur votre carnet d'adresse</h1>
                <div class=\"account-wall\">
                    {% if error %}
                        <div class=\"alert alert-danger\">
  <strong> Identifiant invalide</strong>
</div>
                        <div></div>
                    {% endif %}
                    <div id=\"my-tab-content\" class=\"tab-content\">

                        <div class=\"tab-pane active\" id=\"login\">

                            <form class=\"form-signin\" action=\"{{ path(\"fos_user_security_check\") }}\" method=\"post\">
                                <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token }}\" />
                                <input id=\"username\" name=\"_username\" value=\"{{ last_username }}\" type=\"text\" class=\"form-control\" placeholder=\"Username\" required autofocus>
                                <input id=\"password\" name=\"_password\" type=\"password\" class=\"form-control\" placeholder=\"Password\" required>
                                <input type=\"submit\" class=\"btn btn-lg btn-default btn-block\" value=\"Se connecter\" />
                            </form>
                            <div id=\"tabs\" data-tabs=\"tabs\">
                                <p class=\"text-center\"><a href=\"#register\" data-toggle=\"tab\">Pas encore inscrit ?</a></p>
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

                                <input type=\"submit\" class=\"btn btn-lg btn-default btn-block\" value=\"S'inscrire\" />
                            </form>
                            <div id=\"tabs\" data-tabs=\"tabs\">
                                <p class=\"text-center\"><a href=\"#login\" data-toggle=\"tab\">Déjà enregistré?</a></p>
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
