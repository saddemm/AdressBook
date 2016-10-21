<?php

/* FOSUserBundle:Profile:edit_content.html.twig */
class __TwigTemplate_17ec3052dbeae76221d98a05ec36848cc5ea2116b5dafb0e3d50c9f583d0ac50 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("UserBundle::base.html.twig", "FOSUserBundle:Profile:edit_content.html.twig", 2);
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
        $__internal_200bc7ae56860fc56288aa082571c0c84de138927124489e092bb293b659106b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_200bc7ae56860fc56288aa082571c0c84de138927124489e092bb293b659106b->enter($__internal_200bc7ae56860fc56288aa082571c0c84de138927124489e092bb293b659106b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit_content.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_200bc7ae56860fc56288aa082571c0c84de138927124489e092bb293b659106b->leave($__internal_200bc7ae56860fc56288aa082571c0c84de138927124489e092bb293b659106b_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_3b575f016c64e04b510f8e5cdb2e0abdc779e03724439bcab42aef7b474c8f59 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b575f016c64e04b510f8e5cdb2e0abdc779e03724439bcab42aef7b474c8f59->enter($__internal_3b575f016c64e04b510f8e5cdb2e0abdc779e03724439bcab42aef7b474c8f59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Create new entry";
        
        $__internal_3b575f016c64e04b510f8e5cdb2e0abdc779e03724439bcab42aef7b474c8f59->leave($__internal_3b575f016c64e04b510f8e5cdb2e0abdc779e03724439bcab42aef7b474c8f59_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_519efe19ba87b9b5a548ab6db597a58c05aad94f5aa5d3087125fe1ce8b67df4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_519efe19ba87b9b5a548ab6db597a58c05aad94f5aa5d3087125fe1ce8b67df4->enter($__internal_519efe19ba87b9b5a548ab6db597a58c05aad94f5aa5d3087125fe1ce8b67df4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "      
    <nav class=\"navbar navbar-inverse\">
  <div class=\"container-fluid\">
    <div class=\"navbar-header\">
      <a class=\"navbar-brand\" href=\"";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("index");
        echo "\">Carnet d'adresse</a>
    </div>
    <ul class=\"nav navbar-nav\">
      <li class=\"active\"><a href=\"";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register");
        echo "\">Ajouter</a></li>
     
     
    </ul>
    <ul class=\"nav navbar-nav navbar-right\">
      
      <li><a href=\"";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
        echo "\"><span class=\"glyphicon glyphicon-log-in\"></span> Se deconnecter</a></li>
      <li>
          
      </li>
    </ul>
  </div>
</nav>
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-6\">

                <form class=\"form-horizontal\" action=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_edit", array("id" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")))), "html", null, true);
        echo "\" ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " method=\"POST\" class=\"fos_user_profile_edit\">

                    <fieldset>
                        <div id=\"legend\">
                            <legend class=\"\">Modifier utilisateur</legend>
                        </div>


                        <div class=\"control-group\">

                            <div class=\"controls\">
                                ";
        // line 42
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'row');
        echo "
                            </div>
                        </div>

                        <div class=\"control-group\">

                            <div class=\"controls\">
                                ";
        // line 49
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "phone", array()), 'row');
        echo "
                            </div>
                        </div>

                        <div class=\"control-group\">

                            <div class=\"controls\">
                                ";
        // line 56
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "address", array()), 'row');
        echo "
                            </div>
                        </div>

                        <div class=\"control-group\">

                            <div class=\"controls\">
                                ";
        // line 63
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "website", array()), 'row');
        echo "
                            </div>
                        </div>



                        <div class=\"control-group\">

                            ";
        // line 71
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
                            <!-- Button -->
                            <div class=\"controls\">
                                <button type=\"submit\" class=\"btn btn-success\">Modifier</button>
                            </div>

                        </div>
                    </fieldset>
                </form>

            </div>
        </div>
    </div>
";
        
        $__internal_519efe19ba87b9b5a548ab6db597a58c05aad94f5aa5d3087125fe1ce8b67df4->leave($__internal_519efe19ba87b9b5a548ab6db597a58c05aad94f5aa5d3087125fe1ce8b67df4_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 71,  134 => 63,  124 => 56,  114 => 49,  104 => 42,  88 => 31,  74 => 20,  65 => 14,  59 => 11,  53 => 7,  47 => 6,  35 => 4,  11 => 2,);
    }

    public function getSource()
    {
        return "
{% extends 'UserBundle::base.html.twig' %}

{% block title %}Create new entry{% endblock %}

{% block body %}
      
    <nav class=\"navbar navbar-inverse\">
  <div class=\"container-fluid\">
    <div class=\"navbar-header\">
      <a class=\"navbar-brand\" href=\"{{path('index')}}\">Carnet d'adresse</a>
    </div>
    <ul class=\"nav navbar-nav\">
      <li class=\"active\"><a href=\"{{ path('fos_user_registration_register') }}\">Ajouter</a></li>
     
     
    </ul>
    <ul class=\"nav navbar-nav navbar-right\">
      
      <li><a href=\"{{ path('fos_user_security_logout') }}\"><span class=\"glyphicon glyphicon-log-in\"></span> Se deconnecter</a></li>
      <li>
          
      </li>
    </ul>
  </div>
</nav>
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-6\">

                <form class=\"form-horizontal\" action=\"{{ path('fos_user_profile_edit',{'id' : id}) }}\" {{ form_enctype(form) }} method=\"POST\" class=\"fos_user_profile_edit\">

                    <fieldset>
                        <div id=\"legend\">
                            <legend class=\"\">Modifier utilisateur</legend>
                        </div>


                        <div class=\"control-group\">

                            <div class=\"controls\">
                                {{ form_row(form.email) }}
                            </div>
                        </div>

                        <div class=\"control-group\">

                            <div class=\"controls\">
                                {{ form_row(form.phone) }}
                            </div>
                        </div>

                        <div class=\"control-group\">

                            <div class=\"controls\">
                                {{ form_row(form.address) }}
                            </div>
                        </div>

                        <div class=\"control-group\">

                            <div class=\"controls\">
                                {{ form_row(form.website) }}
                            </div>
                        </div>



                        <div class=\"control-group\">

                            {{ form_rest(form) }}
                            <!-- Button -->
                            <div class=\"controls\">
                                <button type=\"submit\" class=\"btn btn-success\">Modifier</button>
                            </div>

                        </div>
                    </fieldset>
                </form>

            </div>
        </div>
    </div>
{% endblock %}
";
    }
}
