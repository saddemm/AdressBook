<?php

/* UserBundle:Home:index.html.twig */
class __TwigTemplate_b9943109e27f9d93d45c248fc9e8b48957a361baa13d99329340c814fab01c4e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "UserBundle:Home:index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e3d7a944b5f2d4f925e815303e42ddf607a31e47455c828e1a03a5ca5570905a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3d7a944b5f2d4f925e815303e42ddf607a31e47455c828e1a03a5ca5570905a->enter($__internal_e3d7a944b5f2d4f925e815303e42ddf607a31e47455c828e1a03a5ca5570905a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Home:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e3d7a944b5f2d4f925e815303e42ddf607a31e47455c828e1a03a5ca5570905a->leave($__internal_e3d7a944b5f2d4f925e815303e42ddf607a31e47455c828e1a03a5ca5570905a_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_7d7637f999bd30114af414951ff4b4f88fd7b864a199ff9f63cccf9857dcb036 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d7637f999bd30114af414951ff4b4f88fd7b864a199ff9f63cccf9857dcb036->enter($__internal_7d7637f999bd30114af414951ff4b4f88fd7b864a199ff9f63cccf9857dcb036_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Accueil";
        
        $__internal_7d7637f999bd30114af414951ff4b4f88fd7b864a199ff9f63cccf9857dcb036->leave($__internal_7d7637f999bd30114af414951ff4b4f88fd7b864a199ff9f63cccf9857dcb036_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_a8fa17f21c0a908b2a348baee235f544d6a045e37f8d9f7a57394769d0daf4ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8fa17f21c0a908b2a348baee235f544d6a045e37f8d9f7a57394769d0daf4ee->enter($__internal_a8fa17f21c0a908b2a348baee235f544d6a045e37f8d9f7a57394769d0daf4ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    
<nav class=\"navbar navbar-inverse\">
  <div class=\"container-fluid\">
    <div class=\"navbar-header\">
      <a class=\"navbar-brand\" href=\"";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("index");
        echo "\">Carnet d'adresse</a>
    </div>
    <ul class=\"nav navbar-nav\">
      <li class=\"active\"><a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register");
        echo "\">Ajouter</a></li>
     
     
    </ul>
    <ul class=\"nav navbar-nav navbar-right\">
      
      <li><a href=\"";
        // line 19
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
        echo "\"><span class=\"glyphicon glyphicon-log-in\"></span> Se deconnecter</a></li>
    </ul>
  </div>
</nav>

    
<div class=\"w3-container\">

  <ul class=\"w3-ul w3-card-4\">
       ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) ? $context["users"] : $this->getContext($context, "users")));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 29
            echo "    <li class=\"w3-padding-16\">
      <span onclick=\"this.parentElement.style.display='none'\" 
      class=\"w3-closebtn w3-padding w3-margin-right w3-medium\">
          <a href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_edit", array("id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
            echo "\"><span class=\"glyphicon glyphicon-pencil\"></span></a></
          <span>  <a href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("delete", array("id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
            echo "\">X</a></span>
      <img src=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("./img/img_avatar2.png"), "html", null, true);
            echo "\" class=\"w3-left w3-circle w3-margin-right\" style=\"width:60px\">
      <span class=\"w3-xlarge\">";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "name", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "surname", array()), "html", null, true);
            echo "</span><br>
        <i class=\"glyphicon glyphicon-home\"></i>
      
      <span>";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "address", array()), "html", null, true);
            echo "</span>
      <i class=\"glyphicon glyphicon-phone\"></i>
      </span><span>";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "phone", array()), "html", null, true);
            echo "</span>
      <span class=\"glyphicon glyphicon-envelope\"> <span>";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "email", array()), "html", null, true);
            echo "</span>
     
         <i class=\"glyphicon glyphicon-globe\"></i> <span>";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "website", array()), "html", null, true);
            echo "</span>
    </li>
 ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "  </ul>
</div>

";
        
        $__internal_a8fa17f21c0a908b2a348baee235f544d6a045e37f8d9f7a57394769d0daf4ee->leave($__internal_a8fa17f21c0a908b2a348baee235f544d6a045e37f8d9f7a57394769d0daf4ee_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Home:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 46,  129 => 43,  124 => 41,  120 => 40,  115 => 38,  107 => 35,  103 => 34,  99 => 33,  95 => 32,  90 => 29,  86 => 28,  74 => 19,  65 => 13,  59 => 10,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"::base.html.twig\" %}

{% block title %}Accueil{% endblock %}

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
    </ul>
  </div>
</nav>

    
<div class=\"w3-container\">

  <ul class=\"w3-ul w3-card-4\">
       {%  for user in users %}
    <li class=\"w3-padding-16\">
      <span onclick=\"this.parentElement.style.display='none'\" 
      class=\"w3-closebtn w3-padding w3-margin-right w3-medium\">
          <a href=\"{{ path('fos_user_profile_edit',{'id' : user.id}) }}\"><span class=\"glyphicon glyphicon-pencil\"></span></a></
          <span>  <a href=\"{{ path('delete',{'id' : user.id}) }}\">X</a></span>
      <img src=\"{{ asset('./img/img_avatar2.png')}}\" class=\"w3-left w3-circle w3-margin-right\" style=\"width:60px\">
      <span class=\"w3-xlarge\">{{ user.name }} {{ user.surname }}</span><br>
        <i class=\"glyphicon glyphicon-home\"></i>
      
      <span>{{ user.address }}</span>
      <i class=\"glyphicon glyphicon-phone\"></i>
      </span><span>{{ user.phone }}</span>
      <span class=\"glyphicon glyphicon-envelope\"> <span>{{ user.email }}</span>
     
         <i class=\"glyphicon glyphicon-globe\"></i> <span>{{ user.website }}</span>
    </li>
 {% endfor %}
  </ul>
</div>

{% endblock %}
";
    }
}
