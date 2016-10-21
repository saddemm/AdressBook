<?php

/* @FOSUser/Resetting/checkEmail.html.twig */
class __TwigTemplate_9f286a4bc559211948408d1c9554b1991d7af550f42a7448222611c1c6517d67 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/checkEmail.html.twig", 1);
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
        $__internal_4dcd7fdb35a37f4def130e388dab40da7fdd7b93e15d89c2fae812e48a1e9066 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4dcd7fdb35a37f4def130e388dab40da7fdd7b93e15d89c2fae812e48a1e9066->enter($__internal_4dcd7fdb35a37f4def130e388dab40da7fdd7b93e15d89c2fae812e48a1e9066_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4dcd7fdb35a37f4def130e388dab40da7fdd7b93e15d89c2fae812e48a1e9066->leave($__internal_4dcd7fdb35a37f4def130e388dab40da7fdd7b93e15d89c2fae812e48a1e9066_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_346c35f72231dc93d9403b59cc71c00f6cc10f49f6624666f4a0d42a69d64a03 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_346c35f72231dc93d9403b59cc71c00f6cc10f49f6624666f4a0d42a69d64a03->enter($__internal_346c35f72231dc93d9403b59cc71c00f6cc10f49f6624666f4a0d42a69d64a03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "<p>
";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_346c35f72231dc93d9403b59cc71c00f6cc10f49f6624666f4a0d42a69d64a03->leave($__internal_346c35f72231dc93d9403b59cc71c00f6cc10f49f6624666f4a0d42a69d64a03_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/checkEmail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"FOSUserBundle::layout.html.twig\" %}

{% block fos_user_content %}
<p>
{{ 'resetting.check_email'|trans({'%email%': email}, 'FOSUserBundle') }}
</p>
{% endblock %}
";
    }
}
