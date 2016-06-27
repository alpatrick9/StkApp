<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_b9ed23c39c68155dcdf8eacd11bb01f4e0a772d98cd0c46eb089922b7855ef31 extends Twig_Template
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
        $__internal_57c5bf86d4ab7fb420ea21c0eabc5a83ec62ac97b3d27f9a868a616231b39f09 = $this->env->getExtension("native_profiler");
        $__internal_57c5bf86d4ab7fb420ea21c0eabc5a83ec62ac97b3d27f9a868a616231b39f09->enter($__internal_57c5bf86d4ab7fb420ea21c0eabc5a83ec62ac97b3d27f9a868a616231b39f09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_57c5bf86d4ab7fb420ea21c0eabc5a83ec62ac97b3d27f9a868a616231b39f09->leave($__internal_57c5bf86d4ab7fb420ea21c0eabc5a83ec62ac97b3d27f9a868a616231b39f09_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (count($errors) > 0): ?>*/
/*     <ul>*/
/*         <?php foreach ($errors as $error): ?>*/
/*             <li><?php echo $error->getMessage() ?></li>*/
/*         <?php endforeach; ?>*/
/*     </ul>*/
/* <?php endif ?>*/
/* */
