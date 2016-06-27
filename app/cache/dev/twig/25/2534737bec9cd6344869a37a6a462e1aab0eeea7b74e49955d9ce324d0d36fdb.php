<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_00d22faef7c9bc9ba5f6c4235965fd79c064fee396d5da887d180f6e885b90ef extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3b5c15e918f83bc2cc526582ded0dc157219956e9dad25874a86e56713e57a95 = $this->env->getExtension("native_profiler");
        $__internal_3b5c15e918f83bc2cc526582ded0dc157219956e9dad25874a86e56713e57a95->enter($__internal_3b5c15e918f83bc2cc526582ded0dc157219956e9dad25874a86e56713e57a95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3b5c15e918f83bc2cc526582ded0dc157219956e9dad25874a86e56713e57a95->leave($__internal_3b5c15e918f83bc2cc526582ded0dc157219956e9dad25874a86e56713e57a95_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_03ca563b95d2fe14ed2cda5df298bd0685e5d7017e687311f71a2cc50e1bc5e2 = $this->env->getExtension("native_profiler");
        $__internal_03ca563b95d2fe14ed2cda5df298bd0685e5d7017e687311f71a2cc50e1bc5e2->enter($__internal_03ca563b95d2fe14ed2cda5df298bd0685e5d7017e687311f71a2cc50e1bc5e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_03ca563b95d2fe14ed2cda5df298bd0685e5d7017e687311f71a2cc50e1bc5e2->leave($__internal_03ca563b95d2fe14ed2cda5df298bd0685e5d7017e687311f71a2cc50e1bc5e2_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_19424854616b34ca32ed861c9225ed64b3a20fab3e1414827f0c641ebfd9eec9 = $this->env->getExtension("native_profiler");
        $__internal_19424854616b34ca32ed861c9225ed64b3a20fab3e1414827f0c641ebfd9eec9->enter($__internal_19424854616b34ca32ed861c9225ed64b3a20fab3e1414827f0c641ebfd9eec9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_19424854616b34ca32ed861c9225ed64b3a20fab3e1414827f0c641ebfd9eec9->leave($__internal_19424854616b34ca32ed861c9225ed64b3a20fab3e1414827f0c641ebfd9eec9_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_1c0638bc93492bea844d0545478ef07de41593a1d7b8e1ad2f5e75ddf38533fd = $this->env->getExtension("native_profiler");
        $__internal_1c0638bc93492bea844d0545478ef07de41593a1d7b8e1ad2f5e75ddf38533fd->enter($__internal_1c0638bc93492bea844d0545478ef07de41593a1d7b8e1ad2f5e75ddf38533fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_1c0638bc93492bea844d0545478ef07de41593a1d7b8e1ad2f5e75ddf38533fd->leave($__internal_1c0638bc93492bea844d0545478ef07de41593a1d7b8e1ad2f5e75ddf38533fd_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
