<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_1a993558d377742feb69c04242cf222075c7b25f657f42a73f0a5a7d68ca42ff extends Twig_Template
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
        $__internal_0a963f8a780df79a59bab05ed4098c21a73b6cdf3743401611e38fc2956c2ff4 = $this->env->getExtension("native_profiler");
        $__internal_0a963f8a780df79a59bab05ed4098c21a73b6cdf3743401611e38fc2956c2ff4->enter($__internal_0a963f8a780df79a59bab05ed4098c21a73b6cdf3743401611e38fc2956c2ff4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_0a963f8a780df79a59bab05ed4098c21a73b6cdf3743401611e38fc2956c2ff4->leave($__internal_0a963f8a780df79a59bab05ed4098c21a73b6cdf3743401611e38fc2956c2ff4_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
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
