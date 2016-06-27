<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_8de2e0917ce4b71fdce2a53273853333d62b7f56f4a177278c64c2ea0645f15a extends Twig_Template
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
        $__internal_19a370339a96776feb4ef028f11e8ebc88b194a75f21c21b0c22daba17a9477f = $this->env->getExtension("native_profiler");
        $__internal_19a370339a96776feb4ef028f11e8ebc88b194a75f21c21b0c22daba17a9477f->enter($__internal_19a370339a96776feb4ef028f11e8ebc88b194a75f21c21b0c22daba17a9477f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_19a370339a96776feb4ef028f11e8ebc88b194a75f21c21b0c22daba17a9477f->leave($__internal_19a370339a96776feb4ef028f11e8ebc88b194a75f21c21b0c22daba17a9477f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!isset($render_rest) || $render_rest): ?>*/
/* <?php echo $view['form']->rest($form) ?>*/
/* <?php endif ?>*/
/* </form>*/
/* */
