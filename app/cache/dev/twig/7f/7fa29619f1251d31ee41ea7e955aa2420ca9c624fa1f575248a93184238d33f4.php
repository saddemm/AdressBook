<?php

/* @User/Home/index.html.twig */
class __TwigTemplate_5ceeabd9aff5c5a38454aa21877cabf23679e1c7cd707bda0a6b95a43ffced1e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "@User/Home/index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0e8a6ecf4dc94b3ac62933b6187d0476fd8617cac27fe6a6abad86820a277263 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e8a6ecf4dc94b3ac62933b6187d0476fd8617cac27fe6a6abad86820a277263->enter($__internal_0e8a6ecf4dc94b3ac62933b6187d0476fd8617cac27fe6a6abad86820a277263_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/Home/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0e8a6ecf4dc94b3ac62933b6187d0476fd8617cac27fe6a6abad86820a277263->leave($__internal_0e8a6ecf4dc94b3ac62933b6187d0476fd8617cac27fe6a6abad86820a277263_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_9fc3ecea2a0d2868d6e86f4802f9d2d7b691f0de6b6f8fc35eb8917994218bb1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9fc3ecea2a0d2868d6e86f4802f9d2d7b691f0de6b6f8fc35eb8917994218bb1->enter($__internal_9fc3ecea2a0d2868d6e86f4802f9d2d7b691f0de6b6f8fc35eb8917994218bb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Home";
        
        $__internal_9fc3ecea2a0d2868d6e86f4802f9d2d7b691f0de6b6f8fc35eb8917994218bb1->leave($__internal_9fc3ecea2a0d2868d6e86f4802f9d2d7b691f0de6b6f8fc35eb8917994218bb1_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_f76bb0583737a2562d20dd13c879a4e9e19cdf6bd97e277911d6a0170c2fc1d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f76bb0583737a2562d20dd13c879a4e9e19cdf6bd97e277911d6a0170c2fc1d5->enter($__internal_f76bb0583737a2562d20dd13c879a4e9e19cdf6bd97e277911d6a0170c2fc1d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<h1>Welcome to Your Address Book</h1>
    <a href=\"";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
        echo "\">
        Logout
    </a>
    <a href=\"";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register");
        echo "\" class=\"text-center\">Add new Entry</a>
<table class=\"table table-hover\">
    <thead>
        <th>Name</th>
        <th>Surname</th>
        <th>Address</th>
        <th>Phone</th>
        <th>Email</th>
        <th>Website</th>
        <th>Action</th>
    </thead>
    <tbody>
    ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) ? $context["users"] : $this->getContext($context, "users")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 23
            echo "
        <tr>
            <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "name", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "surname", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "address", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "phone", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "email", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "website", array()), "html", null, true);
            echo "</td>
            <td><a href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_edit", array("id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
            echo "\"><span class=\"glyphicon-pencil\"></span></a></td>
            <td><a href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("delete", array("id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
            echo "\"><span class=\"glyphicon-remove\"></span></a></td>
        </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 35
            echo "        <tr class=\"text-center\">
            No user are registered in your address book
        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "    </tbody>
</table>


";
        
        $__internal_f76bb0583737a2562d20dd13c879a4e9e19cdf6bd97e277911d6a0170c2fc1d5->leave($__internal_f76bb0583737a2562d20dd13c879a4e9e19cdf6bd97e277911d6a0170c2fc1d5_prof);

    }

    public function getTemplateName()
    {
        return "@User/Home/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 39,  122 => 35,  114 => 32,  110 => 31,  106 => 30,  102 => 29,  98 => 28,  94 => 27,  90 => 26,  86 => 25,  82 => 23,  77 => 22,  62 => 10,  56 => 7,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"::base.html.twig\" %}

{% block title %}Home{% endblock %}

{% block body %}
<h1>Welcome to Your Address Book</h1>
    <a href=\"{{ path('fos_user_security_logout') }}\">
        Logout
    </a>
    <a href=\"{{ path('fos_user_registration_register') }}\" class=\"text-center\">Add new Entry</a>
<table class=\"table table-hover\">
    <thead>
        <th>Name</th>
        <th>Surname</th>
        <th>Address</th>
        <th>Phone</th>
        <th>Email</th>
        <th>Website</th>
        <th>Action</th>
    </thead>
    <tbody>
    {%  for user in users %}

        <tr>
            <td>{{ user.name }}</td>
            <td>{{ user.surname }}</td>
            <td>{{ user.address }}</td>
            <td>{{ user.phone }}</td>
            <td>{{ user.email }}</td>
            <td>{{ user.website }}</td>
            <td><a href=\"{{ path('fos_user_profile_edit',{'id' : user.id}) }}\"><span class=\"glyphicon-pencil\"></span></a></td>
            <td><a href=\"{{ path('delete',{'id' : user.id}) }}\"><span class=\"glyphicon-remove\"></span></a></td>
        </tr>
        {% else %}
        <tr class=\"text-center\">
            No user are registered in your address book
        </tr>
    {% endfor %}
    </tbody>
</table>


{% endblock %}
";
    }
}
