<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_bf8174ba55409e2127e7a716c6a9ee2c0ffc59f7561da530b419d51b7f43022c extends Twig_Template
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
        $__internal_8cad554df708c7806614a1434fe35ac094a324dfb63d8153738c9826dee7725d = $this->env->getExtension("native_profiler");
        $__internal_8cad554df708c7806614a1434fe35ac094a324dfb63d8153738c9826dee7725d->enter($__internal_8cad554df708c7806614a1434fe35ac094a324dfb63d8153738c9826dee7725d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_8cad554df708c7806614a1434fe35ac094a324dfb63d8153738c9826dee7725d->leave($__internal_8cad554df708c7806614a1434fe35ac094a324dfb63d8153738c9826dee7725d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <textarea <?php echo $view['form']->block($form, 'widget_attributes') ?>><?php echo $view->escape($value) ?></textarea>*/
/* */
