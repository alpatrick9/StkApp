<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_9337cca50616d8e25de700b8a4af64fefc789ee48c77dfe128d67cfc771caa1c extends Twig_Template
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
        $__internal_3529f2328d33a5289a30d6875ffbe1073468bcbae4410c72eb3061259b4a314b = $this->env->getExtension("native_profiler");
        $__internal_3529f2328d33a5289a30d6875ffbe1073468bcbae4410c72eb3061259b4a314b->enter($__internal_3529f2328d33a5289a30d6875ffbe1073468bcbae4410c72eb3061259b4a314b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_3529f2328d33a5289a30d6875ffbe1073468bcbae4410c72eb3061259b4a314b->leave($__internal_3529f2328d33a5289a30d6875ffbe1073468bcbae4410c72eb3061259b4a314b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child) : ?>*/
/*     <?php echo $view['form']->row($child) ?>*/
/* <?php endforeach; ?>*/
/* */
