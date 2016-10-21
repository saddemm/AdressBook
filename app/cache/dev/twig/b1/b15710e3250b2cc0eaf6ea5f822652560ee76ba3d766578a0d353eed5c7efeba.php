<?php

/* FOSUserBundle:ChangePassword:changePassword.html.twig */
class __TwigTemplate_b8d27493a70337fc4aa238e3c6ea366ec7a6f7e223b3943bcda86c0e02d78071 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 1);
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
        $__internal_c0eb08d0c1c54ecd62c3d70a16538263fb4e5993c67eba58dd0c72a85b647e7a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0eb08d0c1c54ecd62c3d70a16538263fb4e5993c67eba58dd0c72a85b647e7a->enter($__internal_c0eb08d0c1c54ecd62c3d70a16538263fb4e5993c67eba58dd0c72a85b647e7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c0eb08d0c1c54ecd62c3d70a16538263fb4e5993c67eba58dd0c72a85b647e7a->leave($__internal_c0eb08d0c1c54ecd62c3d70a16538263fb4e5993c67eba58dd0c72a85b647e7a_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a9ab5a808da55ad6b4d1ea9095b8b9ec99798543f13f92062e23c35cbffe7a37 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9ab5a808da55ad6b4d1ea9095b8b9ec99798543f13f92062e23c35cbffe7a37->enter($__internal_a9ab5a808da55ad6b4d1ea9095b8b9ec99798543f13f92062e23c35cbffe7a37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 4)->display($context);
        
        $__internal_a9ab5a808da55ad6b4d1ea9095b8b9ec99798543f13f92062e23c35cbffe7a37->leave($__internal_a9ab5a808da55ad6b4d1ea9095b8b9ec99798543f13f92062e23c35cbffe7a37_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:changePassword.html.twig";
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
{% include \"FOSUserBundle:ChangePassword:changePassword_content.html.twig\" %}
{% endblock fos_user_content %}
";
    }
}
