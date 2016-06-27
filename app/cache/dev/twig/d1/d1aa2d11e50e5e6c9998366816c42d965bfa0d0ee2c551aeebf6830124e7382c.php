<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_3164c11cbcfc585f04c5747d9fade119b6ed80e89b7cb347a7600bcc5068539e extends Twig_Template
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
        $__internal_5e91fbfb718ca5d0b2d4d2715e8c1eeee0ca1b582447e9b56b51d095e09cd9dd = $this->env->getExtension("native_profiler");
        $__internal_5e91fbfb718ca5d0b2d4d2715e8c1eeee0ca1b582447e9b56b51d095e09cd9dd->enter($__internal_5e91fbfb718ca5d0b2d4d2715e8c1eeee0ca1b582447e9b56b51d095e09cd9dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_5e91fbfb718ca5d0b2d4d2715e8c1eeee0ca1b582447e9b56b51d095e09cd9dd->leave($__internal_5e91fbfb718ca5d0b2d4d2715e8c1eeee0ca1b582447e9b56b51d095e09cd9dd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr style="display: none">*/
/*     <td colspan="2">*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
