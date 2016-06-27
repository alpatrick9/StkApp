<?php

/* default/index.html.twig */
class __TwigTemplate_da85d903c021a450f48d8f5b60ef13ade518bcac78f89eb59f5e84eea05fa85a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "default/index.html.twig", 1);
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        // line 3
        echo "    <form method=\"post\">
        ";
        // line 4
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'widget');
        echo "
        <input type=\"submit\" value=\"Publier\">
    </form>
    <hr>
    ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["comments"]) ? $context["comments"] : null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 9
            echo "        ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["comment"], "comment", array()), "html", null, true);
            echo " <br>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 11
            echo "        Aucun commentaire
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "

    <script>
        function refreshComment() {
            \$.ajax({
                url: \"";
        // line 18
        echo $this->env->getExtension('routing')->getPath("refresh_comment");
        echo "\",
                method: \"post\",
                data: {nbComment: ";
        // line 20
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["comments"]) ? $context["comments"] : null)), "html", null, true);
        echo " },
                success: function (msg) {
                    if(JSON.parse(msg).status) {
                        document.location.href=\"";
        // line 23
        echo $this->env->getExtension('routing')->getPath("homepage");
        echo "\";
                    }
                },
                error: function (msg) {
                    console.log('Error request Ajax');
                }
            })
            setTimeout(refreshComment,5000);
        }
        refreshComment();
    </script>
";
    }

    public function getTemplateName()
    {
        return "default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 23,  73 => 20,  68 => 18,  61 => 13,  54 => 11,  46 => 9,  41 => 8,  34 => 4,  31 => 3,  28 => 2,  11 => 1,);
    }
}
/* {% extends "::base.html.twig" %}*/
/* {% block body %}*/
/*     <form method="post">*/
/*         {{ form_widget(form) }}*/
/*         <input type="submit" value="Publier">*/
/*     </form>*/
/*     <hr>*/
/*     {% for comment in comments %}*/
/*         {{ comment.comment }} <br>*/
/*     {% else %}*/
/*         Aucun commentaire*/
/*     {% endfor %}*/
/* */
/* */
/*     <script>*/
/*         function refreshComment() {*/
/*             $.ajax({*/
/*                 url: "{{ path('refresh_comment') }}",*/
/*                 method: "post",*/
/*                 data: {nbComment: {{ comments|length}} },*/
/*                 success: function (msg) {*/
/*                     if(JSON.parse(msg).status) {*/
/*                         document.location.href="{{ path('homepage') }}";*/
/*                     }*/
/*                 },*/
/*                 error: function (msg) {*/
/*                     console.log('Error request Ajax');*/
/*                 }*/
/*             })*/
/*             setTimeout(refreshComment,5000);*/
/*         }*/
/*         refreshComment();*/
/*     </script>*/
/* {% endblock %}*/
