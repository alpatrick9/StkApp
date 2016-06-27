<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_72b22fc7022a3fdc7c24fc9ec2899e209a8fb22a0098b1aa46edb29ad574d648 extends Twig_Template
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
        $__internal_7194f048ab8feee42222933fec82ee2cec29e0d1148a06e89a6affd933e8ab13 = $this->env->getExtension("native_profiler");
        $__internal_7194f048ab8feee42222933fec82ee2cec29e0d1148a06e89a6affd933e8ab13->enter($__internal_7194f048ab8feee42222933fec82ee2cec29e0d1148a06e89a6affd933e8ab13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_7194f048ab8feee42222933fec82ee2cec29e0d1148a06e89a6affd933e8ab13->leave($__internal_7194f048ab8feee42222933fec82ee2cec29e0d1148a06e89a6affd933e8ab13_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (isset($prototype)): ?>*/
/*     <?php $attr['data-prototype'] = $view->escape($view['form']->row($prototype)) ?>*/
/* <?php endif ?>*/
/* <?php echo $view['form']->widget($form, array('attr' => $attr)) ?>*/
/* */
