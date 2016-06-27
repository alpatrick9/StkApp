<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_3e91d62918ce50224646fb641659f9522a809dae05709e1fe497f087e6291568 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
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
        $__internal_ae825a28dbf9370194e217dcefd109fa8b190e2b24d345f219289040b68f6167 = $this->env->getExtension("native_profiler");
        $__internal_ae825a28dbf9370194e217dcefd109fa8b190e2b24d345f219289040b68f6167->enter($__internal_ae825a28dbf9370194e217dcefd109fa8b190e2b24d345f219289040b68f6167_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ae825a28dbf9370194e217dcefd109fa8b190e2b24d345f219289040b68f6167->leave($__internal_ae825a28dbf9370194e217dcefd109fa8b190e2b24d345f219289040b68f6167_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_b313be38fb56486db3ead04dbac092551d2106458e19997dc43860a3364a7983 = $this->env->getExtension("native_profiler");
        $__internal_b313be38fb56486db3ead04dbac092551d2106458e19997dc43860a3364a7983->enter($__internal_b313be38fb56486db3ead04dbac092551d2106458e19997dc43860a3364a7983_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_b313be38fb56486db3ead04dbac092551d2106458e19997dc43860a3364a7983->leave($__internal_b313be38fb56486db3ead04dbac092551d2106458e19997dc43860a3364a7983_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_1611e4d951dda918066fb2f53063c72b78655015ff686ef65a88204162e506e9 = $this->env->getExtension("native_profiler");
        $__internal_1611e4d951dda918066fb2f53063c72b78655015ff686ef65a88204162e506e9->enter($__internal_1611e4d951dda918066fb2f53063c72b78655015ff686ef65a88204162e506e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_1611e4d951dda918066fb2f53063c72b78655015ff686ef65a88204162e506e9->leave($__internal_1611e4d951dda918066fb2f53063c72b78655015ff686ef65a88204162e506e9_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block title 'Redirection Intercepted' %}*/
/* */
/* {% block body %}*/
/*     <div class="sf-reset">*/
/*         <div class="block-exception">*/
/*             <h1>This request redirects to <a href="{{ location }}">{{ location }}</a>.</h1>*/
/* */
/*             <p>*/
/*                 <small>*/
/*                     The redirect was intercepted by the web debug toolbar to help debugging.*/
/*                     For more information, see the "intercept-redirects" option of the Profiler.*/
/*                 </small>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
