<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_0898a7a23b899cb2bd19d011f36fae2cf6c07a7a24b00e61605c0470ef4e0a43 extends Twig_Template
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
        $__internal_855378e183da015621c2d015b7e1ce31600eff352cd34f7f972d8e01a216d4ad = $this->env->getExtension("native_profiler");
        $__internal_855378e183da015621c2d015b7e1ce31600eff352cd34f7f972d8e01a216d4ad->enter($__internal_855378e183da015621c2d015b7e1ce31600eff352cd34f7f972d8e01a216d4ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_855378e183da015621c2d015b7e1ce31600eff352cd34f7f972d8e01a216d4ad->leave($__internal_855378e183da015621c2d015b7e1ce31600eff352cd34f7f972d8e01a216d4ad_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
