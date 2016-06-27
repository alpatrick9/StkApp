<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_4222d9eb961b428ea8f657079817187d21c76097b7ea3f67372eb771359d81f8 extends Twig_Template
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
        $__internal_85c08e666a72977a9e91f071f1668c6cce9bbb95a244b9a1f2ebf8ada66c2d9b = $this->env->getExtension("native_profiler");
        $__internal_85c08e666a72977a9e91f071f1668c6cce9bbb95a244b9a1f2ebf8ada66c2d9b->enter($__internal_85c08e666a72977a9e91f071f1668c6cce9bbb95a244b9a1f2ebf8ada66c2d9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_85c08e666a72977a9e91f071f1668c6cce9bbb95a244b9a1f2ebf8ada66c2d9b->leave($__internal_85c08e666a72977a9e91f071f1668c6cce9bbb95a244b9a1f2ebf8ada66c2d9b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="radio"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     value="<?php echo $view->escape($value) ?>"*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
