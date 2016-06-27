<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_e05662fdefc0c24efa774a34d1ce5e7f3152cf5e103736f1811b104266ed91fe extends Twig_Template
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
        $__internal_df2e15e679952a24d0516d4b328e4021318b7a0e519257ef958c2c28ce593b9a = $this->env->getExtension("native_profiler");
        $__internal_df2e15e679952a24d0516d4b328e4021318b7a0e519257ef958c2c28ce593b9a->enter($__internal_df2e15e679952a24d0516d4b328e4021318b7a0e519257ef958c2c28ce593b9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_df2e15e679952a24d0516d4b328e4021318b7a0e519257ef958c2c28ce593b9a->leave($__internal_df2e15e679952a24d0516d4b328e4021318b7a0e519257ef958c2c28ce593b9a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <table <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <tr>*/
/*         <td colspan="2">*/
/*             <?php echo $view['form']->errors($form) ?>*/
/*         </td>*/
/*     </tr>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </table>*/
/* */
