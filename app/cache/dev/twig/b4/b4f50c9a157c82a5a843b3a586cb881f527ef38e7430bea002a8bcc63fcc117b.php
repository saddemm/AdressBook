<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_9e51a2f0f7e16cca003d2b6a7a7046e501a67fb81e496fc6900945533349ee21 extends Twig_Template
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
        $__internal_4fbaf926259cc19cde4bfaf8bcbc889961d35cf151010ff071600ce6d29ca217 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4fbaf926259cc19cde4bfaf8bcbc889961d35cf151010ff071600ce6d29ca217->enter($__internal_4fbaf926259cc19cde4bfaf8bcbc889961d35cf151010ff071600ce6d29ca217_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_4fbaf926259cc19cde4bfaf8bcbc889961d35cf151010ff071600ce6d29ca217->leave($__internal_4fbaf926259cc19cde4bfaf8bcbc889961d35cf151010ff071600ce6d29ca217_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 1,);
    }

    public function getSource()
    {
        return "<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\" />
";
    }
}
