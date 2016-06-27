<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_b21d881d652d160b51eff6c8db522f2ce96b76c57a1068b6c0b38a9435979654 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_6eca6c210a42ea8d2dbae6c6593f6ba2b70aa91b460552c8e92001eea7979116 = $this->env->getExtension("native_profiler");
        $__internal_6eca6c210a42ea8d2dbae6c6593f6ba2b70aa91b460552c8e92001eea7979116->enter($__internal_6eca6c210a42ea8d2dbae6c6593f6ba2b70aa91b460552c8e92001eea7979116_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6eca6c210a42ea8d2dbae6c6593f6ba2b70aa91b460552c8e92001eea7979116->leave($__internal_6eca6c210a42ea8d2dbae6c6593f6ba2b70aa91b460552c8e92001eea7979116_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_528bf12bf7eeb7a201e491b4619ac3cb5f7f2022a14e2fd9bc13c5ed02ec0150 = $this->env->getExtension("native_profiler");
        $__internal_528bf12bf7eeb7a201e491b4619ac3cb5f7f2022a14e2fd9bc13c5ed02ec0150->enter($__internal_528bf12bf7eeb7a201e491b4619ac3cb5f7f2022a14e2fd9bc13c5ed02ec0150_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_528bf12bf7eeb7a201e491b4619ac3cb5f7f2022a14e2fd9bc13c5ed02ec0150->leave($__internal_528bf12bf7eeb7a201e491b4619ac3cb5f7f2022a14e2fd9bc13c5ed02ec0150_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_b5d01c8afa8bc6d9fb465dda455bbf4ef438933214f1ac865c8d04c35e433a07 = $this->env->getExtension("native_profiler");
        $__internal_b5d01c8afa8bc6d9fb465dda455bbf4ef438933214f1ac865c8d04c35e433a07->enter($__internal_b5d01c8afa8bc6d9fb465dda455bbf4ef438933214f1ac865c8d04c35e433a07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_b5d01c8afa8bc6d9fb465dda455bbf4ef438933214f1ac865c8d04c35e433a07->leave($__internal_b5d01c8afa8bc6d9fb465dda455bbf4ef438933214f1ac865c8d04c35e433a07_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_fdefdbabd3a1bc89ccb1da318041e3fc79b907b5c583c8f8de4e2a938e276891 = $this->env->getExtension("native_profiler");
        $__internal_fdefdbabd3a1bc89ccb1da318041e3fc79b907b5c583c8f8de4e2a938e276891->enter($__internal_fdefdbabd3a1bc89ccb1da318041e3fc79b907b5c583c8f8de4e2a938e276891_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_fdefdbabd3a1bc89ccb1da318041e3fc79b907b5c583c8f8de4e2a938e276891->leave($__internal_fdefdbabd3a1bc89ccb1da318041e3fc79b907b5c583c8f8de4e2a938e276891_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 33,  114 => 32,  108 => 28,  106 => 27,  102 => 25,  96 => 24,  88 => 21,  82 => 17,  80 => 16,  75 => 14,  70 => 13,  64 => 12,  54 => 9,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     {% if collector.hasexception %}*/
/*         <style>*/
/*             {{ render(path('_profiler_exception_css', { token: token })) }}*/
/*         </style>*/
/*     {% endif %}*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block menu %}*/
/*     <span class="label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}">*/
/*         <span class="icon">{{ include('@WebProfiler/Icon/exception.svg') }}</span>*/
/*         <strong>Exception</strong>*/
/*         {% if collector.hasexception %}*/
/*             <span class="count">*/
/*                 <span>1</span>*/
/*             </span>*/
/*         {% endif %}*/
/*     </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     <h2>Exceptions</h2>*/
/* */
/*     {% if not collector.hasexception %}*/
/*         <div class="empty">*/
/*             <p>No exception was thrown and caught during the request.</p>*/
/*         </div>*/
/*     {% else %}*/
/*         <div class="sf-reset">*/
/*             {{ render(path('_profiler_exception', { token: token })) }}*/
/*         </div>*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
