<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_376e19e3330e5ae9a968fbb870eed057e8343f9282b81d6239f180e9db08c88d extends Twig_Template
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
        $__internal_e96e9742af7c69504ab0f57623b0b4a091d295107c8255e70e614191c7a85492 = $this->env->getExtension("native_profiler");
        $__internal_e96e9742af7c69504ab0f57623b0b4a091d295107c8255e70e614191c7a85492->enter($__internal_e96e9742af7c69504ab0f57623b0b4a091d295107c8255e70e614191c7a85492_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_e96e9742af7c69504ab0f57623b0b4a091d295107c8255e70e614191c7a85492->leave($__internal_e96e9742af7c69504ab0f57623b0b4a091d295107c8255e70e614191c7a85492_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}*/
/* */
