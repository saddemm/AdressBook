<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_f58ef75de9d345ff21db28ec7a0fec470edaa0dd85152dfc392a66798f7c9a0c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
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
        $__internal_81a1ea619f53dfac11459aaccbe4e60b398a7ab3c39f7da1943b650976a89749 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81a1ea619f53dfac11459aaccbe4e60b398a7ab3c39f7da1943b650976a89749->enter($__internal_81a1ea619f53dfac11459aaccbe4e60b398a7ab3c39f7da1943b650976a89749_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_81a1ea619f53dfac11459aaccbe4e60b398a7ab3c39f7da1943b650976a89749->leave($__internal_81a1ea619f53dfac11459aaccbe4e60b398a7ab3c39f7da1943b650976a89749_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_db6c1f187784a4c36a7617b6972b96408b61d1403417a4bd0e2418d1e16813ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db6c1f187784a4c36a7617b6972b96408b61d1403417a4bd0e2418d1e16813ff->enter($__internal_db6c1f187784a4c36a7617b6972b96408b61d1403417a4bd0e2418d1e16813ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_db6c1f187784a4c36a7617b6972b96408b61d1403417a4bd0e2418d1e16813ff->leave($__internal_db6c1f187784a4c36a7617b6972b96408b61d1403417a4bd0e2418d1e16813ff_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
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
{% include \"FOSUserBundle:Profile:show_content.html.twig\" %}
{% endblock fos_user_content %}
";
    }
}
