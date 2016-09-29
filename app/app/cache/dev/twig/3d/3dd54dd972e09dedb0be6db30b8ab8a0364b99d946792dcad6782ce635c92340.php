<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_2dac21862a9f1315dcef701caf951f1a70cedb6314741d34de7b94e641b823b7 extends Twig_Template
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
        $__internal_2f20fecb75418afa25cf02cfd5467af9e136670cbcd66a3365c1b4dfc208eddf = $this->env->getExtension("native_profiler");
        $__internal_2f20fecb75418afa25cf02cfd5467af9e136670cbcd66a3365c1b4dfc208eddf->enter($__internal_2f20fecb75418afa25cf02cfd5467af9e136670cbcd66a3365c1b4dfc208eddf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2f20fecb75418afa25cf02cfd5467af9e136670cbcd66a3365c1b4dfc208eddf->leave($__internal_2f20fecb75418afa25cf02cfd5467af9e136670cbcd66a3365c1b4dfc208eddf_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e6289dca2a2c50cc4f5235f0145aa10a97f2caf5cc54e2cf54c1a96dbc11db4c = $this->env->getExtension("native_profiler");
        $__internal_e6289dca2a2c50cc4f5235f0145aa10a97f2caf5cc54e2cf54c1a96dbc11db4c->enter($__internal_e6289dca2a2c50cc4f5235f0145aa10a97f2caf5cc54e2cf54c1a96dbc11db4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
        
        $__internal_e6289dca2a2c50cc4f5235f0145aa10a97f2caf5cc54e2cf54c1a96dbc11db4c->leave($__internal_e6289dca2a2c50cc4f5235f0145aa10a97f2caf5cc54e2cf54c1a96dbc11db4c_prof);

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
