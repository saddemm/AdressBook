<?php

/* FOSUserBundle::layout.html.twig */
class __TwigTemplate_55725fe1cf690ab9fb968b5f69a13c9d066d6a1132bb232ec66012095cbf2d04 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_826e1fb09aba94ef86ec37ec14ae30ba4288011a823e0e9b83c6af8a840e7154 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_826e1fb09aba94ef86ec37ec14ae30ba4288011a823e0e9b83c6af8a840e7154->enter($__internal_826e1fb09aba94ef86ec37ec14ae30ba4288011a823e0e9b83c6af8a840e7154_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
    </head>
    <body>
        <div>
          
        </div>

        ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "all", array()));
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 12
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 13
                echo "                <div class=\"";
                echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                echo "\">
                    ";
                // line 14
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["message"], array(), "FOSUserBundle"), "html", null, true);
                echo "
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 17
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "
        <div>
            ";
        // line 20
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 22
        echo "        </div>
    </body>
</html>
";
        
        $__internal_826e1fb09aba94ef86ec37ec14ae30ba4288011a823e0e9b83c6af8a840e7154->leave($__internal_826e1fb09aba94ef86ec37ec14ae30ba4288011a823e0e9b83c6af8a840e7154_prof);

    }

    // line 20
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c42bee53ab49efd3c3c038749f4ea9497c2ba63cd7944ba0bf5ef2bd0924dfca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c42bee53ab49efd3c3c038749f4ea9497c2ba63cd7944ba0bf5ef2bd0924dfca->enter($__internal_c42bee53ab49efd3c3c038749f4ea9497c2ba63cd7944ba0bf5ef2bd0924dfca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 21
        echo "            ";
        
        $__internal_c42bee53ab49efd3c3c038749f4ea9497c2ba63cd7944ba0bf5ef2bd0924dfca->leave($__internal_c42bee53ab49efd3c3c038749f4ea9497c2ba63cd7944ba0bf5ef2bd0924dfca_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 21,  80 => 20,  70 => 22,  68 => 20,  64 => 18,  58 => 17,  49 => 14,  44 => 13,  39 => 12,  35 => 11,  23 => 1,);
    }

    public function getSource()
    {
        return "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
    </head>
    <body>
        <div>
          
        </div>

        {% for type, messages in app.session.flashBag.all %}
            {% for message in messages %}
                <div class=\"{{ type }}\">
                    {{ message|trans({}, 'FOSUserBundle') }}
                </div>
            {% endfor %}
        {% endfor %}

        <div>
            {% block fos_user_content %}
            {% endblock fos_user_content %}
        </div>
    </body>
</html>
";
    }
}
