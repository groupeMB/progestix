<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_0999de06edc86b74332a32ad0c713853d6674feeb0157628be58a7d3fd2eed64 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SonataUserBundle::layout.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_67ccfe22fbd86341a43e418af5dd944a68369452b8406fbfe746b01c058a722e = $this->env->getExtension("native_profiler");
        $__internal_67ccfe22fbd86341a43e418af5dd944a68369452b8406fbfe746b01c058a722e->enter($__internal_67ccfe22fbd86341a43e418af5dd944a68369452b8406fbfe746b01c058a722e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_67ccfe22fbd86341a43e418af5dd944a68369452b8406fbfe746b01c058a722e->leave($__internal_67ccfe22fbd86341a43e418af5dd944a68369452b8406fbfe746b01c058a722e_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_879974b081a2d78d6a24e25e7b001d3f5ba5acdb2283d211ceb1681fe4ea85d2 = $this->env->getExtension("native_profiler");
        $__internal_879974b081a2d78d6a24e25e7b001d3f5ba5acdb2283d211ceb1681fe4ea85d2->enter($__internal_879974b081a2d78d6a24e25e7b001d3f5ba5acdb2283d211ceb1681fe4ea85d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "

    <div class=\"panel panel-default\">
        <div class=\"panel-heading\">
            <h3 class=\"panel-title\">";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title_user_resetting_reset", array(), "SonataUserBundle"), "html", null, true);
        echo "</h3>
        </div>
        <div class=\"panel-body\">
            ";
        // line 11
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 11)->display($context);
        // line 12
        echo "        </div>
    </div>
";
        
        $__internal_879974b081a2d78d6a24e25e7b001d3f5ba5acdb2283d211ceb1681fe4ea85d2->leave($__internal_879974b081a2d78d6a24e25e7b001d3f5ba5acdb2283d211ceb1681fe4ea85d2_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 12,  54 => 11,  48 => 8,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "SonataUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/*     {{ form_errors(form) }}*/
/* */
/*     <div class="panel panel-default">*/
/*         <div class="panel-heading">*/
/*             <h3 class="panel-title">{{ "title_user_resetting_reset" | trans({}, 'SonataUserBundle') }}</h3>*/
/*         </div>*/
/*         <div class="panel-body">*/
/*             {% include "FOSUserBundle:Resetting:reset_content.html.twig" %}*/
/*         </div>*/
/*     </div>*/
/* {% endblock fos_user_content %}*/
/* */
