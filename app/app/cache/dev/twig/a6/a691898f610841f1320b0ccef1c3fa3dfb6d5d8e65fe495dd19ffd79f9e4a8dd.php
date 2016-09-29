<?php

/* base.html.twig */
class __TwigTemplate_1495e616591907c889642700292b38b156ac9600592de31080634671958fd486 extends Twig_Template
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
        $__internal_edabec9f495068af162e2bb902b9f09d713f646ed0bc9cb1823114a0105bbe2a = $this->env->getExtension("native_profiler");
        $__internal_edabec9f495068af162e2bb902b9f09d713f646ed0bc9cb1823114a0105bbe2a->enter($__internal_edabec9f495068af162e2bb902b9f09d713f646ed0bc9cb1823114a0105bbe2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_edabec9f495068af162e2bb902b9f09d713f646ed0bc9cb1823114a0105bbe2a->leave($__internal_edabec9f495068af162e2bb902b9f09d713f646ed0bc9cb1823114a0105bbe2a_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_7331268b55c428a081e8fed12d021191d83b3b299cbf9a20924d9999e7e6de5c = $this->env->getExtension("native_profiler");
        $__internal_7331268b55c428a081e8fed12d021191d83b3b299cbf9a20924d9999e7e6de5c->enter($__internal_7331268b55c428a081e8fed12d021191d83b3b299cbf9a20924d9999e7e6de5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_7331268b55c428a081e8fed12d021191d83b3b299cbf9a20924d9999e7e6de5c->leave($__internal_7331268b55c428a081e8fed12d021191d83b3b299cbf9a20924d9999e7e6de5c_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_7b86a4566acb40497a7331143710af9fa2f2fea72087b83f2f37671ba6bc3298 = $this->env->getExtension("native_profiler");
        $__internal_7b86a4566acb40497a7331143710af9fa2f2fea72087b83f2f37671ba6bc3298->enter($__internal_7b86a4566acb40497a7331143710af9fa2f2fea72087b83f2f37671ba6bc3298_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_7b86a4566acb40497a7331143710af9fa2f2fea72087b83f2f37671ba6bc3298->leave($__internal_7b86a4566acb40497a7331143710af9fa2f2fea72087b83f2f37671ba6bc3298_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_12c04fe43910673e0b5a42a2f6204254e75bef10b6d8325e77839628e5c1031c = $this->env->getExtension("native_profiler");
        $__internal_12c04fe43910673e0b5a42a2f6204254e75bef10b6d8325e77839628e5c1031c->enter($__internal_12c04fe43910673e0b5a42a2f6204254e75bef10b6d8325e77839628e5c1031c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_12c04fe43910673e0b5a42a2f6204254e75bef10b6d8325e77839628e5c1031c->leave($__internal_12c04fe43910673e0b5a42a2f6204254e75bef10b6d8325e77839628e5c1031c_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_be9fa8edbb45ecf88e88e8b142a61a3e7f2ee19e6e7067bf1929dec704f70dd5 = $this->env->getExtension("native_profiler");
        $__internal_be9fa8edbb45ecf88e88e8b142a61a3e7f2ee19e6e7067bf1929dec704f70dd5->enter($__internal_be9fa8edbb45ecf88e88e8b142a61a3e7f2ee19e6e7067bf1929dec704f70dd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_be9fa8edbb45ecf88e88e8b142a61a3e7f2ee19e6e7067bf1929dec704f70dd5->leave($__internal_be9fa8edbb45ecf88e88e8b142a61a3e7f2ee19e6e7067bf1929dec704f70dd5_prof);

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
