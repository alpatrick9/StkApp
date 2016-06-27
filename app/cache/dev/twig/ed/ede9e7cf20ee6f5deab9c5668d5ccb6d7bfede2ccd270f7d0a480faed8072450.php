<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_44da4224f9750b64e62ff01e41554e9e64dfc743ca38da65672d912f48b2bfd3 extends Twig_Template
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
        $__internal_171641e677306faf65b23c9f7372b215b867783bbbf6c26f8c9f4f7e39cbba74 = $this->env->getExtension("native_profiler");
        $__internal_171641e677306faf65b23c9f7372b215b867783bbbf6c26f8c9f4f7e39cbba74->enter($__internal_171641e677306faf65b23c9f7372b215b867783bbbf6c26f8c9f4f7e39cbba74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_171641e677306faf65b23c9f7372b215b867783bbbf6c26f8c9f4f7e39cbba74->leave($__internal_171641e677306faf65b23c9f7372b215b867783bbbf6c26f8c9f4f7e39cbba74_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="checkbox"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     <?php if (strlen($value) > 0): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?>*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
