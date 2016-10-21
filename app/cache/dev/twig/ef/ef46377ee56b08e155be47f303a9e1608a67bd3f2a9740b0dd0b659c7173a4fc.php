<?php

/* @FOSUser/Group/list.html.twig */
class __TwigTemplate_ec4a2b38a28275141b1822219092b29c25263f108733ccfbd36c357dd7a50aeb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/list.html.twig", 1);
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
        $__internal_37236672a0814af270c93e1a88e32459fa1710c3a10a71cbd79fb05e0dec06db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37236672a0814af270c93e1a88e32459fa1710c3a10a71cbd79fb05e0dec06db->enter($__internal_37236672a0814af270c93e1a88e32459fa1710c3a10a71cbd79fb05e0dec06db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_37236672a0814af270c93e1a88e32459fa1710c3a10a71cbd79fb05e0dec06db->leave($__internal_37236672a0814af270c93e1a88e32459fa1710c3a10a71cbd79fb05e0dec06db_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_63d17960eb086b24ef3eb00bd1f246fdf470b5db0ade479b69a0a6394e0314b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63d17960eb086b24ef3eb00bd1f246fdf470b5db0ade479b69a0a6394e0314b5->enter($__internal_63d17960eb086b24ef3eb00bd1f246fdf470b5db0ade479b69a0a6394e0314b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "@FOSUser/Group/list.html.twig", 4)->display($context);
        
        $__internal_63d17960eb086b24ef3eb00bd1f246fdf470b5db0ade479b69a0a6394e0314b5->leave($__internal_63d17960eb086b24ef3eb00bd1f246fdf470b5db0ade479b69a0a6394e0314b5_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/list.html.twig";
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
{% include \"FOSUserBundle:Group:list_content.html.twig\" %}
{% endblock fos_user_content %}
";
    }
}
