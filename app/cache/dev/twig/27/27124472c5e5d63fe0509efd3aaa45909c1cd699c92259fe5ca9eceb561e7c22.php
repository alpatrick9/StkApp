<?php

/* @Framework/Form/widget_attributes.html.php */
class __TwigTemplate_298eeda16b5a030c1a41965f112973bbfe32f4a21b52d99b36d5933123b43fe9 extends Twig_Template
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
        $__internal_0ceaf8cd9a97db2a8c99882edb67beddbc35cf1e0547200cd4171d9b9cecec5a = $this->env->getExtension("native_profiler");
        $__internal_0ceaf8cd9a97db2a8c99882edb67beddbc35cf1e0547200cd4171d9b9cecec5a->enter($__internal_0ceaf8cd9a97db2a8c99882edb67beddbc35cf1e0547200cd4171d9b9cecec5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$read_only): ?> readonly=\"readonly\"<?php endif ?>
<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php foreach (\$attr as \$k => \$v): ?>
<?php if ('readonly' === \$k && \$read_only): continue; endif ?>
<?php if (in_array(\$k, array('placeholder', 'title'), true)): ?>
<?php printf(' %s=\"%s\"', \$view->escape(\$k), \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$v, array(), \$translation_domain) : \$v)) ?>
<?php elseif (\$v === true): ?>
<?php printf(' %s=\"%s\"', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf(' %s=\"%s\"', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_0ceaf8cd9a97db2a8c99882edb67beddbc35cf1e0547200cd4171d9b9cecec5a->leave($__internal_0ceaf8cd9a97db2a8c99882edb67beddbc35cf1e0547200cd4171d9b9cecec5a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* id="<?php echo $view->escape($id) ?>" name="<?php echo $view->escape($full_name) ?>"<?php if ($read_only): ?> readonly="readonly"<?php endif ?>*/
/* <?php if ($disabled): ?> disabled="disabled"<?php endif ?>*/
/* <?php if ($required): ?> required="required"<?php endif ?>*/
/* <?php foreach ($attr as $k => $v): ?>*/
/* <?php if ('readonly' === $k && $read_only): continue; endif ?>*/
/* <?php if (in_array($k, array('placeholder', 'title'), true)): ?>*/
/* <?php printf(' %s="%s"', $view->escape($k), $view->escape(false !== $translation_domain ? $view['translator']->trans($v, array(), $translation_domain) : $v)) ?>*/
/* <?php elseif ($v === true): ?>*/
/* <?php printf(' %s="%s"', $view->escape($k), $view->escape($k)) ?>*/
/* <?php elseif ($v !== false): ?>*/
/* <?php printf(' %s="%s"', $view->escape($k), $view->escape($v)) ?>*/
/* <?php endif ?>*/
/* <?php endforeach ?>*/
/* */
