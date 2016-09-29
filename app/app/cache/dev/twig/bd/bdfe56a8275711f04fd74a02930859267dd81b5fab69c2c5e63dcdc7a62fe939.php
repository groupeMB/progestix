<?php

/* @SonataUser/Resetting/request.html.twig */
class __TwigTemplate_cdfd1699da5d985df979f7179e7e1a71b15b8715b4533f00a34089768981c2a5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SonataUserBundle::layout.html.twig", "@SonataUser/Resetting/request.html.twig", 1);
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
        $__internal_4af565bb3366a5800e09e08628170fa527df04e579074727ab8fb049362fa257 = $this->env->getExtension("native_profiler");
        $__internal_4af565bb3366a5800e09e08628170fa527df04e579074727ab8fb049362fa257->enter($__internal_4af565bb3366a5800e09e08628170fa527df04e579074727ab8fb049362fa257_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataUser/Resetting/request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4af565bb3366a5800e09e08628170fa527df04e579074727ab8fb049362fa257->leave($__internal_4af565bb3366a5800e09e08628170fa527df04e579074727ab8fb049362fa257_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_df337a54c0091f7b73d00e506b8f0e7beffc1a458ac9ac003c38b8c12242f55a = $this->env->getExtension("native_profiler");
        $__internal_df337a54c0091f7b73d00e506b8f0e7beffc1a458ac9ac003c38b8c12242f55a->enter($__internal_df337a54c0091f7b73d00e506b8f0e7beffc1a458ac9ac003c38b8c12242f55a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    <div class=\"panel panel-default\">
        <div class=\"panel-heading\">
            <h3 class=\"panel-title\">";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title_user_resetting", array(), "SonataUserBundle"), "html", null, true);
        echo "</h3>
        </div>
        <div class=\"panel-body\">
            ";
        // line 9
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "@SonataUser/Resetting/request.html.twig", 9)->display($context);
        // line 10
        echo "        </div>
    </div>
";
        
        $__internal_df337a54c0091f7b73d00e506b8f0e7beffc1a458ac9ac003c38b8c12242f55a->leave($__internal_df337a54c0091f7b73d00e506b8f0e7beffc1a458ac9ac003c38b8c12242f55a_prof);

    }

    public function getTemplateName()
    {
        return "@SonataUser/Resetting/request.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 10,  50 => 9,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "SonataUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/*     <div class="panel panel-default">*/
/*         <div class="panel-heading">*/
/*             <h3 class="panel-title">{{ "title_user_resetting" | trans({}, 'SonataUserBundle') }}</h3>*/
/*         </div>*/
/*         <div class="panel-body">*/
/*             {% include "FOSUserBundle:Resetting:request_content.html.twig" %}*/
/*         </div>*/
/*     </div>*/
/* {% endblock fos_user_content %}*/
/* */
