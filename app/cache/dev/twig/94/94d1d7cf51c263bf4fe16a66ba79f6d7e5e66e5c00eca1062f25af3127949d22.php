<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_fc79973d20865ac752a68aa9f96c4f523bae0349a88bad4af5329d099c243849 extends Twig_Template
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
        $__internal_42ab35fb60c4086c417488639fc748f3d5dd31998f3aae5c5d4eab667241ca6f = $this->env->getExtension("native_profiler");
        $__internal_42ab35fb60c4086c417488639fc748f3d5dd31998f3aae5c5d4eab667241ca6f->enter($__internal_42ab35fb60c4086c417488639fc748f3d5dd31998f3aae5c5d4eab667241ca6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_42ab35fb60c4086c417488639fc748f3d5dd31998f3aae5c5d4eab667241ca6f->leave($__internal_42ab35fb60c4086c417488639fc748f3d5dd31998f3aae5c5d4eab667241ca6f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr>*/
/*     <td>*/
/*         <?php echo $view['form']->label($form) ?>*/
/*     </td>*/
/*     <td>*/
/*         <?php echo $view['form']->errors($form) ?>*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
