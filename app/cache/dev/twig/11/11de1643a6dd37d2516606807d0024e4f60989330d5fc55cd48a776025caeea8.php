<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_cb673a22ff04a4166bc342f2ba01192864cd10358bad0dc4cfd7516c1db8e9e4 extends Twig_Template
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
        $__internal_399421a1895c1bb308e75fae253fd38979636d93a49b2c18d49ed5c3e13dfcf2 = $this->env->getExtension("native_profiler");
        $__internal_399421a1895c1bb308e75fae253fd38979636d93a49b2c18d49ed5c3e13dfcf2->enter($__internal_399421a1895c1bb308e75fae253fd38979636d93a49b2c18d49ed5c3e13dfcf2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_399421a1895c1bb308e75fae253fd38979636d93a49b2c18d49ed5c3e13dfcf2->leave($__internal_399421a1895c1bb308e75fae253fd38979636d93a49b2c18d49ed5c3e13dfcf2_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
