<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_aa6d5fd274e77f7183878005665d41847c8131d26f2fffec777c63d974c52465 extends Twig_Template
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
        $__internal_a1c79f8f9d6f1069e4e0f3dc65e878b607ad9bad5f629cf17f7a9642b78e7ca3 = $this->env->getExtension("native_profiler");
        $__internal_a1c79f8f9d6f1069e4e0f3dc65e878b607ad9bad5f629cf17f7a9642b78e7ca3->enter($__internal_a1c79f8f9d6f1069e4e0f3dc65e878b607ad9bad5f629cf17f7a9642b78e7ca3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_a1c79f8f9d6f1069e4e0f3dc65e878b607ad9bad5f629cf17f7a9642b78e7ca3->leave($__internal_a1c79f8f9d6f1069e4e0f3dc65e878b607ad9bad5f629cf17f7a9642b78e7ca3_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
