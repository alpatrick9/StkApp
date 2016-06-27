<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_99b0b2dcd028ea6cff1b3c47ae72b49b1253d7a351f354bdf3a4685e4b4627a9 extends Twig_Template
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
        $__internal_62656c56e7ea0ed08c4b0b1d610e929cbfc29ccc13c67fa1c7bb5d3dd7cd42a9 = $this->env->getExtension("native_profiler");
        $__internal_62656c56e7ea0ed08c4b0b1d610e929cbfc29ccc13c67fa1c7bb5d3dd7cd42a9->enter($__internal_62656c56e7ea0ed08c4b0b1d610e929cbfc29ccc13c67fa1c7bb5d3dd7cd42a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_62656c56e7ea0ed08c4b0b1d610e929cbfc29ccc13c67fa1c7bb5d3dd7cd42a9->leave($__internal_62656c56e7ea0ed08c4b0b1d610e929cbfc29ccc13c67fa1c7bb5d3dd7cd42a9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div>*/
/*     <?php echo $view['form']->label($form) ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* </div>*/
/* */
