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
        $__internal_05d90fd5464219e454404c00281259b25b5d77c907ad695d4fecb1d4d7f39066 = $this->env->getExtension("native_profiler");
        $__internal_05d90fd5464219e454404c00281259b25b5d77c907ad695d4fecb1d4d7f39066->enter($__internal_05d90fd5464219e454404c00281259b25b5d77c907ad695d4fecb1d4d7f39066_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_05d90fd5464219e454404c00281259b25b5d77c907ad695d4fecb1d4d7f39066->leave($__internal_05d90fd5464219e454404c00281259b25b5d77c907ad695d4fecb1d4d7f39066_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_9f08d277dc19a3b4462655a5b4c8877785029f897c168acd3557f43d8dcc98a1 = $this->env->getExtension("native_profiler");
        $__internal_9f08d277dc19a3b4462655a5b4c8877785029f897c168acd3557f43d8dcc98a1->enter($__internal_9f08d277dc19a3b4462655a5b4c8877785029f897c168acd3557f43d8dcc98a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_9f08d277dc19a3b4462655a5b4c8877785029f897c168acd3557f43d8dcc98a1->leave($__internal_9f08d277dc19a3b4462655a5b4c8877785029f897c168acd3557f43d8dcc98a1_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_0fc029c3c722eaae6610f872d7c98f8aa4163db0338cedb4e74df67801885bff = $this->env->getExtension("native_profiler");
        $__internal_0fc029c3c722eaae6610f872d7c98f8aa4163db0338cedb4e74df67801885bff->enter($__internal_0fc029c3c722eaae6610f872d7c98f8aa4163db0338cedb4e74df67801885bff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_0fc029c3c722eaae6610f872d7c98f8aa4163db0338cedb4e74df67801885bff->leave($__internal_0fc029c3c722eaae6610f872d7c98f8aa4163db0338cedb4e74df67801885bff_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_dd2337b53ecc31db2ab5e673477aba96fda6fa45a0f3d960cf6f5863a188aeda = $this->env->getExtension("native_profiler");
        $__internal_dd2337b53ecc31db2ab5e673477aba96fda6fa45a0f3d960cf6f5863a188aeda->enter($__internal_dd2337b53ecc31db2ab5e673477aba96fda6fa45a0f3d960cf6f5863a188aeda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_dd2337b53ecc31db2ab5e673477aba96fda6fa45a0f3d960cf6f5863a188aeda->leave($__internal_dd2337b53ecc31db2ab5e673477aba96fda6fa45a0f3d960cf6f5863a188aeda_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_e6ae83ed0e59245bc7cac9b7e5aef73652d0b6f42f9b2ba7fa43b8b6a377786f = $this->env->getExtension("native_profiler");
        $__internal_e6ae83ed0e59245bc7cac9b7e5aef73652d0b6f42f9b2ba7fa43b8b6a377786f->enter($__internal_e6ae83ed0e59245bc7cac9b7e5aef73652d0b6f42f9b2ba7fa43b8b6a377786f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_e6ae83ed0e59245bc7cac9b7e5aef73652d0b6f42f9b2ba7fa43b8b6a377786f->leave($__internal_e6ae83ed0e59245bc7cac9b7e5aef73652d0b6f42f9b2ba7fa43b8b6a377786f_prof);

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
