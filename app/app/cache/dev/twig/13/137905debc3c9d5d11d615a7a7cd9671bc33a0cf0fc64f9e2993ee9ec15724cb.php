<?php

/* ::base.html.twig */
class __TwigTemplate_d106e6a3e9407a882946590a927c8b29cc6a4f042b6ef52cbde83cb1fac9da33 extends Twig_Template
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
        $__internal_e2f171179a7c2b07804be487d3c2267970156c49726d309002d22d22a4ecdb7c = $this->env->getExtension("native_profiler");
        $__internal_e2f171179a7c2b07804be487d3c2267970156c49726d309002d22d22a4ecdb7c->enter($__internal_e2f171179a7c2b07804be487d3c2267970156c49726d309002d22d22a4ecdb7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_e2f171179a7c2b07804be487d3c2267970156c49726d309002d22d22a4ecdb7c->leave($__internal_e2f171179a7c2b07804be487d3c2267970156c49726d309002d22d22a4ecdb7c_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_b8f5d0df44cdfa468827c4de94deb4873f9a3e64f593bafb8396777e47a216f9 = $this->env->getExtension("native_profiler");
        $__internal_b8f5d0df44cdfa468827c4de94deb4873f9a3e64f593bafb8396777e47a216f9->enter($__internal_b8f5d0df44cdfa468827c4de94deb4873f9a3e64f593bafb8396777e47a216f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_b8f5d0df44cdfa468827c4de94deb4873f9a3e64f593bafb8396777e47a216f9->leave($__internal_b8f5d0df44cdfa468827c4de94deb4873f9a3e64f593bafb8396777e47a216f9_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_703489f076afaf5ff54a4ea24b094bf3070252001b2656867e5b6fa233b3f0c7 = $this->env->getExtension("native_profiler");
        $__internal_703489f076afaf5ff54a4ea24b094bf3070252001b2656867e5b6fa233b3f0c7->enter($__internal_703489f076afaf5ff54a4ea24b094bf3070252001b2656867e5b6fa233b3f0c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_703489f076afaf5ff54a4ea24b094bf3070252001b2656867e5b6fa233b3f0c7->leave($__internal_703489f076afaf5ff54a4ea24b094bf3070252001b2656867e5b6fa233b3f0c7_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_e0d708a5fdf87f56b7a19b18085aa579db864b8b8a06318990d0b5b5471417c3 = $this->env->getExtension("native_profiler");
        $__internal_e0d708a5fdf87f56b7a19b18085aa579db864b8b8a06318990d0b5b5471417c3->enter($__internal_e0d708a5fdf87f56b7a19b18085aa579db864b8b8a06318990d0b5b5471417c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_e0d708a5fdf87f56b7a19b18085aa579db864b8b8a06318990d0b5b5471417c3->leave($__internal_e0d708a5fdf87f56b7a19b18085aa579db864b8b8a06318990d0b5b5471417c3_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_500938fcdc0278f682e78cbf0063dce87fc20cf02846553e5a67619deb797d76 = $this->env->getExtension("native_profiler");
        $__internal_500938fcdc0278f682e78cbf0063dce87fc20cf02846553e5a67619deb797d76->enter($__internal_500938fcdc0278f682e78cbf0063dce87fc20cf02846553e5a67619deb797d76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_500938fcdc0278f682e78cbf0063dce87fc20cf02846553e5a67619deb797d76->leave($__internal_500938fcdc0278f682e78cbf0063dce87fc20cf02846553e5a67619deb797d76_prof);

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
