<?php

/* :default:index.html.twig */
class __TwigTemplate_127c94b1f04aec0afcccf2f7a6d7a8d8ac64918c52ec5d492e466bb6e0c29852 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", ":default:index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9646e341946268af41b5d2cf42e1daba36ac9b107ab78a2477bf642afadbdc85 = $this->env->getExtension("native_profiler");
        $__internal_9646e341946268af41b5d2cf42e1daba36ac9b107ab78a2477bf642afadbdc85->enter($__internal_9646e341946268af41b5d2cf42e1daba36ac9b107ab78a2477bf642afadbdc85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9646e341946268af41b5d2cf42e1daba36ac9b107ab78a2477bf642afadbdc85->leave($__internal_9646e341946268af41b5d2cf42e1daba36ac9b107ab78a2477bf642afadbdc85_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_e99b1f1ae8ff65d6c58b80435690bebfc8b556b829c6764805d14c1d9871d186 = $this->env->getExtension("native_profiler");
        $__internal_e99b1f1ae8ff65d6c58b80435690bebfc8b556b829c6764805d14c1d9871d186->enter($__internal_e99b1f1ae8ff65d6c58b80435690bebfc8b556b829c6764805d14c1d9871d186_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    Stk
";
        
        $__internal_e99b1f1ae8ff65d6c58b80435690bebfc8b556b829c6764805d14c1d9871d186->leave($__internal_e99b1f1ae8ff65d6c58b80435690bebfc8b556b829c6764805d14c1d9871d186_prof);

    }

    public function getTemplateName()
    {
        return ":default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends "::base.html.twig" %}*/
/* {% block body %}*/
/*     Stk*/
/* {% endblock %}*/
