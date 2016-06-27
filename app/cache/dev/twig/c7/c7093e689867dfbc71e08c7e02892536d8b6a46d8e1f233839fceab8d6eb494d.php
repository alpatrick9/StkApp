<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_b8f3c103687e8ccaac8dcd99a23c852e6c65884204983658923e34525372b83b extends Twig_Template
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
        $__internal_bba841f0712c12667c0a35f43ccec8f0c4eeeb724fa571d7fdfc924715bc73d8 = $this->env->getExtension("native_profiler");
        $__internal_bba841f0712c12667c0a35f43ccec8f0c4eeeb724fa571d7fdfc924715bc73d8->enter($__internal_bba841f0712c12667c0a35f43ccec8f0c4eeeb724fa571d7fdfc924715bc73d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_bba841f0712c12667c0a35f43ccec8f0c4eeeb724fa571d7fdfc924715bc73d8->leave($__internal_bba841f0712c12667c0a35f43ccec8f0c4eeeb724fa571d7fdfc924715bc73d8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($expanded): ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_expanded') ?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_collapsed') ?>*/
/* <?php endif ?>*/
/* */
