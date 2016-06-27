<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_69a5e019c4820eea53238e6e8d18f59dc45ea49b4650858fbaa64637c8d30e8d extends Twig_Template
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
        $__internal_093eb05bfae12a87dc76c55381633d844c5c0a9f86c16e9643488c74920568c1 = $this->env->getExtension("native_profiler");
        $__internal_093eb05bfae12a87dc76c55381633d844c5c0a9f86c16e9643488c74920568c1->enter($__internal_093eb05bfae12a87dc76c55381633d844c5c0a9f86c16e9643488c74920568c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_093eb05bfae12a87dc76c55381633d844c5c0a9f86c16e9643488c74920568c1->leave($__internal_093eb05bfae12a87dc76c55381633d844c5c0a9f86c16e9643488c74920568c1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="<?php echo isset($type) ? $view->escape($type) : 'text' ?>" <?php echo $view['form']->block($form, 'widget_attributes') ?><?php if (!empty($value) || is_numeric($value)): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?> />*/
/* */
