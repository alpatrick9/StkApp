<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_2d7578a3c5608ac7616728a337ad7aec2851b0c12d8172e052e6b6a394f96b33 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_70d6e26de273e0c7750134a85c4003139961fc03ebb20622e52a4be3c0889b9d = $this->env->getExtension("native_profiler");
        $__internal_70d6e26de273e0c7750134a85c4003139961fc03ebb20622e52a4be3c0889b9d->enter($__internal_70d6e26de273e0c7750134a85c4003139961fc03ebb20622e52a4be3c0889b9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_70d6e26de273e0c7750134a85c4003139961fc03ebb20622e52a4be3c0889b9d->leave($__internal_70d6e26de273e0c7750134a85c4003139961fc03ebb20622e52a4be3c0889b9d_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_1b373fdb8fb652ff4407138f0e2927850dec6ec84ad48805e4e0f4f079bac247 = $this->env->getExtension("native_profiler");
        $__internal_1b373fdb8fb652ff4407138f0e2927850dec6ec84ad48805e4e0f4f079bac247->enter($__internal_1b373fdb8fb652ff4407138f0e2927850dec6ec84ad48805e4e0f4f079bac247_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_1b373fdb8fb652ff4407138f0e2927850dec6ec84ad48805e4e0f4f079bac247->leave($__internal_1b373fdb8fb652ff4407138f0e2927850dec6ec84ad48805e4e0f4f079bac247_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
