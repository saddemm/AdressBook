<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_9d4d21d8c8bb2a6406a300204f5cdcbf476adb715e726e94df756e18e25bd2f7 extends Twig_Template
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
        $__internal_1a2a32c9f352253396f24bc999b7843e8c3b7fa75f35c47d811b7af0c50754bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a2a32c9f352253396f24bc999b7843e8c3b7fa75f35c47d811b7af0c50754bd->enter($__internal_1a2a32c9f352253396f24bc999b7843e8c3b7fa75f35c47d811b7af0c50754bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_1a2a32c9f352253396f24bc999b7843e8c3b7fa75f35c47d811b7af0c50754bd->leave($__internal_1a2a32c9f352253396f24bc999b7843e8c3b7fa75f35c47d811b7af0c50754bd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
    }
}
