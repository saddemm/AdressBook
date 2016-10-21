<?php

/* FOSUserBundle:Group:show_content.html.twig */
class __TwigTemplate_c4d8a67672599fa5eecea6f128f8a69d0d54393ad2e79791af99559aa1972362 extends Twig_Template
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
        $__internal_75e6891849f30229dc2967921d87434d194a3a8d61e71dcf3c2534f95cb768f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75e6891849f30229dc2967921d87434d194a3a8d61e71dcf3c2534f95cb768f4->enter($__internal_75e6891849f30229dc2967921d87434d194a3a8d61e71dcf3c2534f95cb768f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

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
        
        $__internal_75e6891849f30229dc2967921d87434d194a3a8d61e71dcf3c2534f95cb768f4->leave($__internal_75e6891849f30229dc2967921d87434d194a3a8d61e71dcf3c2534f95cb768f4_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show_content.html.twig";
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
