<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_d19f682dc47dc69e2c86f62547131e587d20b98e648863e6ae319006231b7d41 extends Twig_Template
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
        $__internal_2471af287d6b69d08ff47a794277ab306e6db5ad97e044a801d03d366b1524c2 = $this->env->getExtension("native_profiler");
        $__internal_2471af287d6b69d08ff47a794277ab306e6db5ad97e044a801d03d366b1524c2->enter($__internal_2471af287d6b69d08ff47a794277ab306e6db5ad97e044a801d03d366b1524c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_2471af287d6b69d08ff47a794277ab306e6db5ad97e044a801d03d366b1524c2->leave($__internal_2471af287d6b69d08ff47a794277ab306e6db5ad97e044a801d03d366b1524c2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child): ?>*/
/*     <?php if (!$child->isRendered()): ?>*/
/*         <?php echo $view['form']->row($child) ?>*/
/*     <?php endif; ?>*/
/* <?php endforeach; ?>*/
/* */
