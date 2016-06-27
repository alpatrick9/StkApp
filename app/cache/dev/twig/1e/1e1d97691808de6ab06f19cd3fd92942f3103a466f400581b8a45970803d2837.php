<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_df4f873d3c9546d1b722c4b61ef3ab21efe5e0954d67ed1b199f2df0cadb2814 extends Twig_Template
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
        $__internal_81d094830a801afc3955c2bbea98e340d1d00a735c424e0759ab01f09cd3a0af = $this->env->getExtension("native_profiler");
        $__internal_81d094830a801afc3955c2bbea98e340d1d00a735c424e0759ab01f09cd3a0af->enter($__internal_81d094830a801afc3955c2bbea98e340d1d00a735c424e0759ab01f09cd3a0af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_81d094830a801afc3955c2bbea98e340d1d00a735c424e0759ab01f09cd3a0af->leave($__internal_81d094830a801afc3955c2bbea98e340d1d00a735c424e0759ab01f09cd3a0af_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($compound): ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_compound')?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_simple')?>*/
/* <?php endif ?>*/
/* */
