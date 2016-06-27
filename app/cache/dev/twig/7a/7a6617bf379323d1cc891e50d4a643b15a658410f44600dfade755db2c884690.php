<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_28ec66996a69c8d61a7364f17cb75a054980849a3a1b5bf9b769a9563e33a9a6 extends Twig_Template
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
        $__internal_584d241fd5940d63216f370b6b9c69a4156f37ab34f62dbdfeef6d49768d82f7 = $this->env->getExtension("native_profiler");
        $__internal_584d241fd5940d63216f370b6b9c69a4156f37ab34f62dbdfeef6d49768d82f7->enter($__internal_584d241fd5940d63216f370b6b9c69a4156f37ab34f62dbdfeef6d49768d82f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_584d241fd5940d63216f370b6b9c69a4156f37ab34f62dbdfeef6d49768d82f7->leave($__internal_584d241fd5940d63216f370b6b9c69a4156f37ab34f62dbdfeef6d49768d82f7_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
