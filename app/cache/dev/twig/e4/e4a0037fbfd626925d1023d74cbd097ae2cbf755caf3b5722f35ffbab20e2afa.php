<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_990601b90c8c68300b2e93c8bb3e158378d50bc2b9b8ccb22cb33f66199b661f extends Twig_Template
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
        $__internal_69d4d824d9e1eb35ea11c722e31815cf2eb02f9273d3cd0df699d7197770b592 = $this->env->getExtension("native_profiler");
        $__internal_69d4d824d9e1eb35ea11c722e31815cf2eb02f9273d3cd0df699d7197770b592->enter($__internal_69d4d824d9e1eb35ea11c722e31815cf2eb02f9273d3cd0df699d7197770b592_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_69d4d824d9e1eb35ea11c722e31815cf2eb02f9273d3cd0df699d7197770b592->leave($__internal_69d4d824d9e1eb35ea11c722e31815cf2eb02f9273d3cd0df699d7197770b592_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}*/
/* */
