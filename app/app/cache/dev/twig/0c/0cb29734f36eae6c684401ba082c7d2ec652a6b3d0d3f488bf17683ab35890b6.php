<?php

/* base.html.twig */
class __TwigTemplate_24cf7accb40da4f34f3bf8dc93638612ae34c30f126fdd19268e5f8d8d3e6402 extends Twig_Template
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
        $__internal_a158cf1cc713cab4b0ef270ce180f9ecae581d2a8bf0b87227f63925dfa37fea = $this->env->getExtension("native_profiler");
        $__internal_a158cf1cc713cab4b0ef270ce180f9ecae581d2a8bf0b87227f63925dfa37fea->enter($__internal_a158cf1cc713cab4b0ef270ce180f9ecae581d2a8bf0b87227f63925dfa37fea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_a158cf1cc713cab4b0ef270ce180f9ecae581d2a8bf0b87227f63925dfa37fea->leave($__internal_a158cf1cc713cab4b0ef270ce180f9ecae581d2a8bf0b87227f63925dfa37fea_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_9742bc5903db8c50a68b48507306cee9c8d5c98b53a821f8788a2904a2dad3ed = $this->env->getExtension("native_profiler");
        $__internal_9742bc5903db8c50a68b48507306cee9c8d5c98b53a821f8788a2904a2dad3ed->enter($__internal_9742bc5903db8c50a68b48507306cee9c8d5c98b53a821f8788a2904a2dad3ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_9742bc5903db8c50a68b48507306cee9c8d5c98b53a821f8788a2904a2dad3ed->leave($__internal_9742bc5903db8c50a68b48507306cee9c8d5c98b53a821f8788a2904a2dad3ed_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_215190162a4132694f8764649a2559dbf59b133cf8e7db359847aa980b0034ec = $this->env->getExtension("native_profiler");
        $__internal_215190162a4132694f8764649a2559dbf59b133cf8e7db359847aa980b0034ec->enter($__internal_215190162a4132694f8764649a2559dbf59b133cf8e7db359847aa980b0034ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_215190162a4132694f8764649a2559dbf59b133cf8e7db359847aa980b0034ec->leave($__internal_215190162a4132694f8764649a2559dbf59b133cf8e7db359847aa980b0034ec_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_fe80c90d96c4d967e9e91f71d30b51c7aa5cdc6749d3137d66a5a6f3d8252ea1 = $this->env->getExtension("native_profiler");
        $__internal_fe80c90d96c4d967e9e91f71d30b51c7aa5cdc6749d3137d66a5a6f3d8252ea1->enter($__internal_fe80c90d96c4d967e9e91f71d30b51c7aa5cdc6749d3137d66a5a6f3d8252ea1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_fe80c90d96c4d967e9e91f71d30b51c7aa5cdc6749d3137d66a5a6f3d8252ea1->leave($__internal_fe80c90d96c4d967e9e91f71d30b51c7aa5cdc6749d3137d66a5a6f3d8252ea1_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_c491d84da55eb0eab0ba6b108c53edbf6c4a9ee5bb93a70ed533b9bc66b3f1cb = $this->env->getExtension("native_profiler");
        $__internal_c491d84da55eb0eab0ba6b108c53edbf6c4a9ee5bb93a70ed533b9bc66b3f1cb->enter($__internal_c491d84da55eb0eab0ba6b108c53edbf6c4a9ee5bb93a70ed533b9bc66b3f1cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_c491d84da55eb0eab0ba6b108c53edbf6c4a9ee5bb93a70ed533b9bc66b3f1cb->leave($__internal_c491d84da55eb0eab0ba6b108c53edbf6c4a9ee5bb93a70ed533b9bc66b3f1cb_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
