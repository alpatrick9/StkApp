<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_80473f03cf12c4a22387751d93ffeff237442f521e131587226555b7c6fdf90d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8994dad84e58b79de82f0674e66e2640d920f90684e902a9f9203a9116a1fb90 = $this->env->getExtension("native_profiler");
        $__internal_8994dad84e58b79de82f0674e66e2640d920f90684e902a9f9203a9116a1fb90->enter($__internal_8994dad84e58b79de82f0674e66e2640d920f90684e902a9f9203a9116a1fb90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8994dad84e58b79de82f0674e66e2640d920f90684e902a9f9203a9116a1fb90->leave($__internal_8994dad84e58b79de82f0674e66e2640d920f90684e902a9f9203a9116a1fb90_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_87f24259ca8c6e847725aada109b46baf2f5bddd463f3f1a7d1147d7d0c7c85a = $this->env->getExtension("native_profiler");
        $__internal_87f24259ca8c6e847725aada109b46baf2f5bddd463f3f1a7d1147d7d0c7c85a->enter($__internal_87f24259ca8c6e847725aada109b46baf2f5bddd463f3f1a7d1147d7d0c7c85a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_87f24259ca8c6e847725aada109b46baf2f5bddd463f3f1a7d1147d7d0c7c85a->leave($__internal_87f24259ca8c6e847725aada109b46baf2f5bddd463f3f1a7d1147d7d0c7c85a_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_fcca918d512d8a82654dc97b2fbdb9e6dca58d6bc0c1037239393ead725f7abe = $this->env->getExtension("native_profiler");
        $__internal_fcca918d512d8a82654dc97b2fbdb9e6dca58d6bc0c1037239393ead725f7abe->enter($__internal_fcca918d512d8a82654dc97b2fbdb9e6dca58d6bc0c1037239393ead725f7abe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_fcca918d512d8a82654dc97b2fbdb9e6dca58d6bc0c1037239393ead725f7abe->leave($__internal_fcca918d512d8a82654dc97b2fbdb9e6dca58d6bc0c1037239393ead725f7abe_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_11b82af7b4381614ab2898ae049d589137b35f86c5115a2bbd40f8b0bed2879b = $this->env->getExtension("native_profiler");
        $__internal_11b82af7b4381614ab2898ae049d589137b35f86c5115a2bbd40f8b0bed2879b->enter($__internal_11b82af7b4381614ab2898ae049d589137b35f86c5115a2bbd40f8b0bed2879b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_11b82af7b4381614ab2898ae049d589137b35f86c5115a2bbd40f8b0bed2879b->leave($__internal_11b82af7b4381614ab2898ae049d589137b35f86c5115a2bbd40f8b0bed2879b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
