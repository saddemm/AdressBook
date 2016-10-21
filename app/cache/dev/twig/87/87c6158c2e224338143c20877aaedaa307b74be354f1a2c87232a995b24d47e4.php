<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_ccb6c7ce75927f04441a51fc8911543113d38a853fe95f7eadad9a0eaf1779f1 extends Twig_Template
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
        $__internal_41993940121bfdd4683f487abbbcfae2ad64138e4e22ceb2523fa0063d2bfce9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41993940121bfdd4683f487abbbcfae2ad64138e4e22ceb2523fa0063d2bfce9->enter($__internal_41993940121bfdd4683f487abbbcfae2ad64138e4e22ceb2523fa0063d2bfce9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_41993940121bfdd4683f487abbbcfae2ad64138e4e22ceb2523fa0063d2bfce9->leave($__internal_41993940121bfdd4683f487abbbcfae2ad64138e4e22ceb2523fa0063d2bfce9_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "{% include '@Twig/Exception/error.xml.twig' %}
";
    }
}
