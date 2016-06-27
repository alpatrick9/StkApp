<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_a225ffd96c00f7fb0ddb6589385482f544f551c793338a2bbe5577243e470abf extends Twig_Template
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
        $__internal_691ec4d6dec3ec83fce52e8b03b782b54417f0bb8c68ef6b2b0eab39720c5ccd = $this->env->getExtension("native_profiler");
        $__internal_691ec4d6dec3ec83fce52e8b03b782b54417f0bb8c68ef6b2b0eab39720c5ccd->enter($__internal_691ec4d6dec3ec83fce52e8b03b782b54417f0bb8c68ef6b2b0eab39720c5ccd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_691ec4d6dec3ec83fce52e8b03b782b54417f0bb8c68ef6b2b0eab39720c5ccd->leave($__internal_691ec4d6dec3ec83fce52e8b03b782b54417f0bb8c68ef6b2b0eab39720c5ccd_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */
