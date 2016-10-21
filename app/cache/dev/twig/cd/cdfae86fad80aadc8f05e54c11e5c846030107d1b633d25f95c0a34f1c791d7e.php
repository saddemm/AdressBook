<?php

/* FOSUserBundle:Registration:checkEmail.html.twig */
class __TwigTemplate_da0beb8500dcacfb2c2b92c64369c1ebf6e32790c5387ee33ea04350d40685eb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:checkEmail.html.twig", 1);
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
        $__internal_816c9c0c4390d099d1ef725ddc1371eac9be7d8e5b7d4949a9bca4ab9d7b6319 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_816c9c0c4390d099d1ef725ddc1371eac9be7d8e5b7d4949a9bca4ab9d7b6319->enter($__internal_816c9c0c4390d099d1ef725ddc1371eac9be7d8e5b7d4949a9bca4ab9d7b6319_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_816c9c0c4390d099d1ef725ddc1371eac9be7d8e5b7d4949a9bca4ab9d7b6319->leave($__internal_816c9c0c4390d099d1ef725ddc1371eac9be7d8e5b7d4949a9bca4ab9d7b6319_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_792553f22a89df7b9ee4dec5eea42dc378e5b532fff96536215054b11a60dc53 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_792553f22a89df7b9ee4dec5eea42dc378e5b532fff96536215054b11a60dc53->enter($__internal_792553f22a89df7b9ee4dec5eea42dc378e5b532fff96536215054b11a60dc53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_792553f22a89df7b9ee4dec5eea42dc378e5b532fff96536215054b11a60dc53->leave($__internal_792553f22a89df7b9ee4dec5eea42dc378e5b532fff96536215054b11a60dc53_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:checkEmail.html.twig";
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
    <p>{{ 'registration.check_email'|trans({'%email%': user.email}, 'FOSUserBundle') }}</p>
{% endblock fos_user_content %}
";
    }
}
