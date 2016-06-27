<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_880fa81ed2e06fa327da6ed31875ebfc2abc257f2fc9851170793710ee72f92b extends Twig_Template
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
        $__internal_682162c43bedea11ec1fab49cff4b79b2d17c923b4cc9eb9098d6e0b33a6bd67 = $this->env->getExtension("native_profiler");
        $__internal_682162c43bedea11ec1fab49cff4b79b2d17c923b4cc9eb9098d6e0b33a6bd67->enter($__internal_682162c43bedea11ec1fab49cff4b79b2d17c923b4cc9eb9098d6e0b33a6bd67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_682162c43bedea11ec1fab49cff4b79b2d17c923b4cc9eb9098d6e0b33a6bd67->leave($__internal_682162c43bedea11ec1fab49cff4b79b2d17c923b4cc9eb9098d6e0b33a6bd67_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/* <?php foreach ($form as $child): ?>*/
/*     <?php echo $view['form']->widget($child) ?>*/
/*     <?php echo $view['form']->label($child, null, array('translation_domain' => $choice_translation_domain)) ?>*/
/* <?php endforeach ?>*/
/* </div>*/
/* */
