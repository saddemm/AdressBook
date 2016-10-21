<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_2b6d98f65223d5488414666f9fea7c53c80fdc02346ed8415bc029f7420daf6c extends Twig_Template
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
        $__internal_adce2150e176aae673287261191634c25b5080d0a12f883ed1869db30e9d357a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_adce2150e176aae673287261191634c25b5080d0a12f883ed1869db30e9d357a->enter($__internal_adce2150e176aae673287261191634c25b5080d0a12f883ed1869db30e9d357a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_adce2150e176aae673287261191634c25b5080d0a12f883ed1869db30e9d357a->leave($__internal_adce2150e176aae673287261191634c25b5080d0a12f883ed1869db30e9d357a_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
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
        return "/*
{{ status_code }} {{ status_text }}

*/
";
    }
}
