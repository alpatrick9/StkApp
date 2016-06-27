<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_0bb58c640181a82e93f218bbf7c93693678b6d60e648ba244d710008b02ec670 extends Twig_Template
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
        $__internal_2a5f2b8e7db3f7a65d7c1d319efadebb53a0ae3ab0c271a1d6b101850105f31c = $this->env->getExtension("native_profiler");
        $__internal_2a5f2b8e7db3f7a65d7c1d319efadebb53a0ae3ab0c271a1d6b101850105f31c->enter($__internal_2a5f2b8e7db3f7a65d7c1d319efadebb53a0ae3ab0c271a1d6b101850105f31c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_2a5f2b8e7db3f7a65d7c1d319efadebb53a0ae3ab0c271a1d6b101850105f31c->leave($__internal_2a5f2b8e7db3f7a65d7c1d319efadebb53a0ae3ab0c271a1d6b101850105f31c_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
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
