<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_994d19a0c8d637af1580183467bb305b92b1b3b6cf0a643b75d16133dab51ac1 extends Twig_Template
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
        $__internal_da7da8d93e2c9ffd5ae3e94de670d40dfc8ecfd69656fed6131a893da0c36c32 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da7da8d93e2c9ffd5ae3e94de670d40dfc8ecfd69656fed6131a893da0c36c32->enter($__internal_da7da8d93e2c9ffd5ae3e94de670d40dfc8ecfd69656fed6131a893da0c36c32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_da7da8d93e2c9ffd5ae3e94de670d40dfc8ecfd69656fed6131a893da0c36c32->leave($__internal_da7da8d93e2c9ffd5ae3e94de670d40dfc8ecfd69656fed6131a893da0c36c32_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
    }
}
