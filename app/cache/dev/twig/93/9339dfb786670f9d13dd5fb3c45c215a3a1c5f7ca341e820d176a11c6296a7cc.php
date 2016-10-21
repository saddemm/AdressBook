<?php

/* @User/Profile/edit_content.html.twig */
class __TwigTemplate_e753ef3c6784039c7664365557540d0f24161071e08117cdf831d5f8249cefcd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("UserBundle::base.html.twig", "@User/Profile/edit_content.html.twig", 2);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "UserBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4ae3dc313be260da0e76af5df4d96032c8be4ea39bb10576281e12c6a6afe39d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ae3dc313be260da0e76af5df4d96032c8be4ea39bb10576281e12c6a6afe39d->enter($__internal_4ae3dc313be260da0e76af5df4d96032c8be4ea39bb10576281e12c6a6afe39d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/Profile/edit_content.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4ae3dc313be260da0e76af5df4d96032c8be4ea39bb10576281e12c6a6afe39d->leave($__internal_4ae3dc313be260da0e76af5df4d96032c8be4ea39bb10576281e12c6a6afe39d_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_b26e47cb7cc73a88b051692da3ca3f86c12694e9f5004a4822cfae2c028f0a79 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b26e47cb7cc73a88b051692da3ca3f86c12694e9f5004a4822cfae2c028f0a79->enter($__internal_b26e47cb7cc73a88b051692da3ca3f86c12694e9f5004a4822cfae2c028f0a79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Create new entry";
        
        $__internal_b26e47cb7cc73a88b051692da3ca3f86c12694e9f5004a4822cfae2c028f0a79->leave($__internal_b26e47cb7cc73a88b051692da3ca3f86c12694e9f5004a4822cfae2c028f0a79_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_88eaf4a99393ec01346dbfafdd3d354dd6726ecb69e7c3d09beb2562e95dc1e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88eaf4a99393ec01346dbfafdd3d354dd6726ecb69e7c3d09beb2562e95dc1e5->enter($__internal_88eaf4a99393ec01346dbfafdd3d354dd6726ecb69e7c3d09beb2562e95dc1e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-6\">

                <form class=\"form-horizontal\" action=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_edit", array("id" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")))), "html", null, true);
        echo "\" ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " method=\"POST\" class=\"fos_user_profile_edit\">

                    <fieldset>
                        <div id=\"legend\">
                            <legend class=\"\">Update user</legend>
                        </div>






                        <div class=\"control-group\">

                            <div class=\"controls\">
                                ";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'row');
        echo "
                            </div>
                        </div>

                        <div class=\"control-group\">

                            <div class=\"controls\">
                                ";
        // line 33
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "phone", array()), 'row');
        echo "
                            </div>
                        </div>

                        <div class=\"control-group\">

                            <div class=\"controls\">
                                ";
        // line 40
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "address", array()), 'row');
        echo "
                            </div>
                        </div>

                        <div class=\"control-group\">

                            <div class=\"controls\">
                                ";
        // line 47
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "website", array()), 'row');
        echo "
                            </div>
                        </div>



                        <div class=\"control-group\">

                            ";
        // line 55
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
                            <!-- Button -->
                            <div class=\"controls\">
                                <button type=\"submit\" class=\"btn btn-success\">Update</button>
                            </div>

                        </div>
                    </fieldset>
                </form>

            </div>
        </div>
    </div>
";
        
        $__internal_88eaf4a99393ec01346dbfafdd3d354dd6726ecb69e7c3d09beb2562e95dc1e5->leave($__internal_88eaf4a99393ec01346dbfafdd3d354dd6726ecb69e7c3d09beb2562e95dc1e5_prof);

    }

    public function getTemplateName()
    {
        return "@User/Profile/edit_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 55,  109 => 47,  99 => 40,  89 => 33,  79 => 26,  59 => 11,  53 => 7,  47 => 6,  35 => 4,  11 => 2,);
    }

    public function getSource()
    {
        return "
{% extends 'UserBundle::base.html.twig' %}

{% block title %}Create new entry{% endblock %}

{% block body %}
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-6\">

                <form class=\"form-horizontal\" action=\"{{ path('fos_user_profile_edit',{'id' : id}) }}\" {{ form_enctype(form) }} method=\"POST\" class=\"fos_user_profile_edit\">

                    <fieldset>
                        <div id=\"legend\">
                            <legend class=\"\">Update user</legend>
                        </div>






                        <div class=\"control-group\">

                            <div class=\"controls\">
                                {{ form_row(form.email) }}
                            </div>
                        </div>

                        <div class=\"control-group\">

                            <div class=\"controls\">
                                {{ form_row(form.phone) }}
                            </div>
                        </div>

                        <div class=\"control-group\">

                            <div class=\"controls\">
                                {{ form_row(form.address) }}
                            </div>
                        </div>

                        <div class=\"control-group\">

                            <div class=\"controls\">
                                {{ form_row(form.website) }}
                            </div>
                        </div>



                        <div class=\"control-group\">

                            {{ form_rest(form) }}
                            <!-- Button -->
                            <div class=\"controls\">
                                <button type=\"submit\" class=\"btn btn-success\">Update</button>
                            </div>

                        </div>
                    </fieldset>
                </form>

            </div>
        </div>
    </div>
{% endblock %}
";
    }
}
