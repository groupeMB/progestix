<?php

/* @SonataUser/Registration/register_content.html.twig */
class __TwigTemplate_a12c81dea02519b572ff0e3b98fbd75ddc8628bfa6d8398fe7a1ebf714ddf788 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_dd3c19b95445fa62a384c1672f48295406f42555e5b9bb76070f2765c763358b = $this->env->getExtension("native_profiler");
        $__internal_dd3c19b95445fa62a384c1672f48295406f42555e5b9bb76070f2765c763358b->enter($__internal_dd3c19b95445fa62a384c1672f48295406f42555e5b9bb76070f2765c763358b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataUser/Registration/register_content.html.twig"));

        // line 1
        echo "<div class=\"panel panel-success\">
    <div class=\"panel-heading\">
        <h2 class=\"panel-title\">";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title_user_registration", array(), "SonataUserBundle"), "html", null, true);
        echo "</h2>
    </div>
    <div class=\"panel-body\">
        <form action=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
        echo "\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " method=\"POST\" class=\"fos_user_registration_register form-horizontal\">

            ";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "

            <div class=\"form-actions\">
                <input type=\"submit\" value=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" class=\"btn btn-success pull-right\" />
            </div>
        </form>
    </div>
</div>";
        
        $__internal_dd3c19b95445fa62a384c1672f48295406f42555e5b9bb76070f2765c763358b->leave($__internal_dd3c19b95445fa62a384c1672f48295406f42555e5b9bb76070f2765c763358b_prof);

    }

    public function getTemplateName()
    {
        return "@SonataUser/Registration/register_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 11,  39 => 8,  32 => 6,  26 => 3,  22 => 1,);
    }
}
/* <div class="panel panel-success">*/
/*     <div class="panel-heading">*/
/*         <h2 class="panel-title">{{ 'title_user_registration'|trans({}, 'SonataUserBundle') }}</h2>*/
/*     </div>*/
/*     <div class="panel-body">*/
/*         <form action="{{ path('fos_user_registration_register') }}" {{ form_enctype(form) }} method="POST" class="fos_user_registration_register form-horizontal">*/
/* */
/*             {{ form_widget(form) }}*/
/* */
/*             <div class="form-actions">*/
/*                 <input type="submit" value="{{ 'registration.submit'|trans({}, 'FOSUserBundle') }}" class="btn btn-success pull-right" />*/
/*             </div>*/
/*         </form>*/
/*     </div>*/
/* </div>*/
