<?php

/* ::base.html.twig */
class __TwigTemplate_2d58acbef262e9d2818dc36bb443eab0d70ed4d1c09d0f298777049e22a9cce6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6e1d74d30fce9a3b16521519c0957c80ea3a62cb42b523b15a8451c7806288a9 = $this->env->getExtension("native_profiler");
        $__internal_6e1d74d30fce9a3b16521519c0957c80ea3a62cb42b523b15a8451c7806288a9->enter($__internal_6e1d74d30fce9a3b16521519c0957c80ea3a62cb42b523b15a8451c7806288a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
        <script type=\"text/javascript\" src=\"https://code.jquery.com/jquery-3.0.0.min.js\"></script>
    </head>
    <body>
        ";
        // line 11
        $this->displayBlock('body', $context, $blocks);
        // line 12
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 13
        echo "    </body>
</html>
";
        
        $__internal_6e1d74d30fce9a3b16521519c0957c80ea3a62cb42b523b15a8451c7806288a9->leave($__internal_6e1d74d30fce9a3b16521519c0957c80ea3a62cb42b523b15a8451c7806288a9_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_cd23e3160b90771f2430ca61ea3939cd0866d33c3c416190cb1064c3d7b49ce0 = $this->env->getExtension("native_profiler");
        $__internal_cd23e3160b90771f2430ca61ea3939cd0866d33c3c416190cb1064c3d7b49ce0->enter($__internal_cd23e3160b90771f2430ca61ea3939cd0866d33c3c416190cb1064c3d7b49ce0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_cd23e3160b90771f2430ca61ea3939cd0866d33c3c416190cb1064c3d7b49ce0->leave($__internal_cd23e3160b90771f2430ca61ea3939cd0866d33c3c416190cb1064c3d7b49ce0_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_e8ef043bf592117df2609e7facd557a6c3c08103efa7e8095713726cf5991d20 = $this->env->getExtension("native_profiler");
        $__internal_e8ef043bf592117df2609e7facd557a6c3c08103efa7e8095713726cf5991d20->enter($__internal_e8ef043bf592117df2609e7facd557a6c3c08103efa7e8095713726cf5991d20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_e8ef043bf592117df2609e7facd557a6c3c08103efa7e8095713726cf5991d20->leave($__internal_e8ef043bf592117df2609e7facd557a6c3c08103efa7e8095713726cf5991d20_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_008733a1272209c866aed0a655796e43926f944b27f2b20c8271d252f32caf12 = $this->env->getExtension("native_profiler");
        $__internal_008733a1272209c866aed0a655796e43926f944b27f2b20c8271d252f32caf12->enter($__internal_008733a1272209c866aed0a655796e43926f944b27f2b20c8271d252f32caf12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_008733a1272209c866aed0a655796e43926f944b27f2b20c8271d252f32caf12->leave($__internal_008733a1272209c866aed0a655796e43926f944b27f2b20c8271d252f32caf12_prof);

    }

    // line 12
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_16d5e7d59dd3051f5434b05288fd8d2b3b7e0557122073b7e05e540e198cc721 = $this->env->getExtension("native_profiler");
        $__internal_16d5e7d59dd3051f5434b05288fd8d2b3b7e0557122073b7e05e540e198cc721->enter($__internal_16d5e7d59dd3051f5434b05288fd8d2b3b7e0557122073b7e05e540e198cc721_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_16d5e7d59dd3051f5434b05288fd8d2b3b7e0557122073b7e05e540e198cc721->leave($__internal_16d5e7d59dd3051f5434b05288fd8d2b3b7e0557122073b7e05e540e198cc721_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 12,  83 => 11,  72 => 6,  60 => 5,  51 => 13,  48 => 12,  46 => 11,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*         <script type="text/javascript" src="https://code.jquery.com/jquery-3.0.0.min.js"></script>*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
