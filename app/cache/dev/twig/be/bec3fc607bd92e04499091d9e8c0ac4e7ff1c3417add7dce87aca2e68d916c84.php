<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_4a796088a8c619a841b59b8bdabebcc2fe18ca8c00cfb770e29c78e1a2124547 extends Twig_Template
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
        $__internal_4484835aad4771b8b7096be96299c48ae347fb05fcc37e18ac4d7319d31e0f30 = $this->env->getExtension("native_profiler");
        $__internal_4484835aad4771b8b7096be96299c48ae347fb05fcc37e18ac4d7319d31e0f30->enter($__internal_4484835aad4771b8b7096be96299c48ae347fb05fcc37e18ac4d7319d31e0f30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_4484835aad4771b8b7096be96299c48ae347fb05fcc37e18ac4d7319d31e0f30->leave($__internal_4484835aad4771b8b7096be96299c48ae347fb05fcc37e18ac4d7319d31e0f30_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($widget == 'single_text'): ?>*/
/*     <?php echo $view['form']->block($form, 'form_widget_simple'); ?>*/
/* <?php else: ?>*/
/*     <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*         <?php echo $view['form']->widget($form['date']).' '.$view['form']->widget($form['time']) ?>*/
/*     </div>*/
/* <?php endif ?>*/
/* */
