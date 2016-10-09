<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_bfa81061ec37937cd6ee042f0ed6dc13d44a65c2fff4a412948bb0514d7d2c71 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SonataUserBundle::layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
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
        $__internal_1824078a39d2ffe3baf05e6c3ffd4f44d42edd6d4eb58ec9f9bdb951a3230be1 = $this->env->getExtension("native_profiler");
        $__internal_1824078a39d2ffe3baf05e6c3ffd4f44d42edd6d4eb58ec9f9bdb951a3230be1->enter($__internal_1824078a39d2ffe3baf05e6c3ffd4f44d42edd6d4eb58ec9f9bdb951a3230be1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1824078a39d2ffe3baf05e6c3ffd4f44d42edd6d4eb58ec9f9bdb951a3230be1->leave($__internal_1824078a39d2ffe3baf05e6c3ffd4f44d42edd6d4eb58ec9f9bdb951a3230be1_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_16bb6fce8efb71626a7ac0c044384264fa66fcfe6cdfa18d344a587977be8f9c = $this->env->getExtension("native_profiler");
        $__internal_16bb6fce8efb71626a7ac0c044384264fa66fcfe6cdfa18d344a587977be8f9c->enter($__internal_16bb6fce8efb71626a7ac0c044384264fa66fcfe6cdfa18d344a587977be8f9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 9)->display($context);
        // line 10
        echo "        </div>
    </div>
";
        
        $__internal_16bb6fce8efb71626a7ac0c044384264fa66fcfe6cdfa18d344a587977be8f9c->leave($__internal_16bb6fce8efb71626a7ac0c044384264fa66fcfe6cdfa18d344a587977be8f9c_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
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
