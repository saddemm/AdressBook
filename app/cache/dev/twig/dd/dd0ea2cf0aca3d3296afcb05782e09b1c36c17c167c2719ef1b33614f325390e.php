<?php

/* @FOSUser/Group/show_content.html.twig */
class __TwigTemplate_e2d843406ee54c745d7537433dab48b849f7b0a3f1fe72c17379fdb4cf3cac92 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_601387531477b93fdf8fef130e81e643ae2fa3fb4cc2355c85e37e2037a9088b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_601387531477b93fdf8fef130e81e643ae2fa3fb4cc2355c85e37e2037a9088b->enter($__internal_601387531477b93fdf8fef130e81e643ae2fa3fb4cc2355c85e37e2037a9088b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show_content.html.twig"));

        // line 1
        echo "<div class=\"fos_user_group_show\">
    <p>";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("group.show.name", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "getName", array(), "method"), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_601387531477b93fdf8fef130e81e643ae2fa3fb4cc2355c85e37e2037a9088b->leave($__internal_601387531477b93fdf8fef130e81e643ae2fa3fb4cc2355c85e37e2037a9088b_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }

    public function getSource()
    {
        return "<div class=\"fos_user_group_show\">
    <p>{{ 'group.show.name'|trans([], 'FOSUserBundle') }}: {{ group.getName() }}</p>
</div>
";
    }
}
