<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_c39edf1666d7d9bfb61e28f4019ec28f54aa1312f0a8822b5ff0e5f004414d4f extends Twig_Template
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
        $__internal_57d86ce8949fd04fb487b897926df1c1bbdac542d6a910bf03e9a50f590d24bf = $this->env->getExtension("native_profiler");
        $__internal_57d86ce8949fd04fb487b897926df1c1bbdac542d6a910bf03e9a50f590d24bf->enter($__internal_57d86ce8949fd04fb487b897926df1c1bbdac542d6a910bf03e9a50f590d24bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_57d86ce8949fd04fb487b897926df1c1bbdac542d6a910bf03e9a50f590d24bf->leave($__internal_57d86ce8949fd04fb487b897926df1c1bbdac542d6a910bf03e9a50f590d24bf_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </div>*/
/* */
