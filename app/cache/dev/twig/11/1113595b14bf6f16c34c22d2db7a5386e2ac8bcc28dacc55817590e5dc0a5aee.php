<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_a82b375d12efbe943a883bbf19d32502635c61c7f095ddd081c3b6a24214b6e1 extends Twig_Template
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
        $__internal_be07574560ed8a35cf8004f5a7cb8ae533ead3cf0a91870c514fa40064bdabb5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be07574560ed8a35cf8004f5a7cb8ae533ead3cf0a91870c514fa40064bdabb5->enter($__internal_be07574560ed8a35cf8004f5a7cb8ae533ead3cf0a91870c514fa40064bdabb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
        
        $__internal_be07574560ed8a35cf8004f5a7cb8ae533ead3cf0a91870c514fa40064bdabb5->leave($__internal_be07574560ed8a35cf8004f5a7cb8ae533ead3cf0a91870c514fa40064bdabb5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
    }
}
