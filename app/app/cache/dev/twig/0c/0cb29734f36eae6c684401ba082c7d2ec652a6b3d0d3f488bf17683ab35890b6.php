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
        $__internal_a4fecb67ec69fb2cdfe4893468f15eb531ceb13218cb01e82e54d1bd38e1c06a = $this->env->getExtension("native_profiler");
        $__internal_a4fecb67ec69fb2cdfe4893468f15eb531ceb13218cb01e82e54d1bd38e1c06a->enter($__internal_a4fecb67ec69fb2cdfe4893468f15eb531ceb13218cb01e82e54d1bd38e1c06a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_a4fecb67ec69fb2cdfe4893468f15eb531ceb13218cb01e82e54d1bd38e1c06a->leave($__internal_a4fecb67ec69fb2cdfe4893468f15eb531ceb13218cb01e82e54d1bd38e1c06a_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_60ae24c85dc4ffc1bb205c994c5d1bb3887d4ec149a84dc81d5895c7a22bd624 = $this->env->getExtension("native_profiler");
        $__internal_60ae24c85dc4ffc1bb205c994c5d1bb3887d4ec149a84dc81d5895c7a22bd624->enter($__internal_60ae24c85dc4ffc1bb205c994c5d1bb3887d4ec149a84dc81d5895c7a22bd624_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_60ae24c85dc4ffc1bb205c994c5d1bb3887d4ec149a84dc81d5895c7a22bd624->leave($__internal_60ae24c85dc4ffc1bb205c994c5d1bb3887d4ec149a84dc81d5895c7a22bd624_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_bc1f1c0baf68446a2dfebd453aa10b385c4c561fb6e4d215340ef884ef828ed8 = $this->env->getExtension("native_profiler");
        $__internal_bc1f1c0baf68446a2dfebd453aa10b385c4c561fb6e4d215340ef884ef828ed8->enter($__internal_bc1f1c0baf68446a2dfebd453aa10b385c4c561fb6e4d215340ef884ef828ed8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_bc1f1c0baf68446a2dfebd453aa10b385c4c561fb6e4d215340ef884ef828ed8->leave($__internal_bc1f1c0baf68446a2dfebd453aa10b385c4c561fb6e4d215340ef884ef828ed8_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_25f5d621507917804ac92019d7e520a6988e1ea384f25b498dac3d674609cfa3 = $this->env->getExtension("native_profiler");
        $__internal_25f5d621507917804ac92019d7e520a6988e1ea384f25b498dac3d674609cfa3->enter($__internal_25f5d621507917804ac92019d7e520a6988e1ea384f25b498dac3d674609cfa3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_25f5d621507917804ac92019d7e520a6988e1ea384f25b498dac3d674609cfa3->leave($__internal_25f5d621507917804ac92019d7e520a6988e1ea384f25b498dac3d674609cfa3_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_b221cdf0b60b1e5af8cb96f69ff14a207918a4bc436bb67f336c4fca6c70bc62 = $this->env->getExtension("native_profiler");
        $__internal_b221cdf0b60b1e5af8cb96f69ff14a207918a4bc436bb67f336c4fca6c70bc62->enter($__internal_b221cdf0b60b1e5af8cb96f69ff14a207918a4bc436bb67f336c4fca6c70bc62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_b221cdf0b60b1e5af8cb96f69ff14a207918a4bc436bb67f336c4fca6c70bc62->leave($__internal_b221cdf0b60b1e5af8cb96f69ff14a207918a4bc436bb67f336c4fca6c70bc62_prof);

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
