<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_b3fad0766316b8c8c124b27f0b75f378e25f2687d1427faf64a6e5df889128ff extends Twig_Template
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
        $__internal_5ad98ee7139a2f7c5b48bedac4bd2b8bc8075b90df6d321cf78d65b30d176740 = $this->env->getExtension("native_profiler");
        $__internal_5ad98ee7139a2f7c5b48bedac4bd2b8bc8075b90df6d321cf78d65b30d176740->enter($__internal_5ad98ee7139a2f7c5b48bedac4bd2b8bc8075b90df6d321cf78d65b30d176740_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_5ad98ee7139a2f7c5b48bedac4bd2b8bc8075b90df6d321cf78d65b30d176740->leave($__internal_5ad98ee7139a2f7c5b48bedac4bd2b8bc8075b90df6d321cf78d65b30d176740_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!$label) { $label = isset($label_format)*/
/*     ? strtr($label_format, array('%name%' => $name, '%id%' => $id))*/
/*     : $view['form']->humanize($name); } ?>*/
/* <button type="<?php echo isset($type) ? $view->escape($type) : 'button' ?>" <?php echo $view['form']->block($form, 'button_attributes') ?>><?php echo $view->escape(false !== $translation_domain ? $view['translator']->trans($label, array(), $translation_domain) : $label) ?></button>*/
/* */
