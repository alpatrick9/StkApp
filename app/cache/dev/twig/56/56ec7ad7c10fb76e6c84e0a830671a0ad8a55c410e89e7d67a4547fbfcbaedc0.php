<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_dff49ff973527c1d3c0334dbcc0c212d1e001d70a0f0c1c8ece58970547b82bb extends Twig_Template
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
        $__internal_3b474dbd5c676fdcff8334481d5475d2eebfb5df29ed4963b32adfd5af2f8493 = $this->env->getExtension("native_profiler");
        $__internal_3b474dbd5c676fdcff8334481d5475d2eebfb5df29ed4963b32adfd5af2f8493->enter($__internal_3b474dbd5c676fdcff8334481d5475d2eebfb5df29ed4963b32adfd5af2f8493_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_3b474dbd5c676fdcff8334481d5475d2eebfb5df29ed4963b32adfd5af2f8493->leave($__internal_3b474dbd5c676fdcff8334481d5475d2eebfb5df29ed4963b32adfd5af2f8493_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
