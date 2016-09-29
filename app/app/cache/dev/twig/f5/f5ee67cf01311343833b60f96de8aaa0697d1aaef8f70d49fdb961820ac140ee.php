<?php

/* @FOSUser/Resetting/reset_content.html.twig */
class __TwigTemplate_6c108f2fe4896d7e9afd9393dbc228278714bd8d344b2c1bd9fbb1fc363927d1 extends Twig_Template
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
        $__internal_080ad87859972c61e2b7f9066ce3cdcaf13a78dcfbd55c0320cd46d0ba44bc6e = $this->env->getExtension("native_profiler");
        $__internal_080ad87859972c61e2b7f9066ce3cdcaf13a78dcfbd55c0320cd46d0ba44bc6e->enter($__internal_080ad87859972c61e2b7f9066ce3cdcaf13a78dcfbd55c0320cd46d0ba44bc6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/reset_content.html.twig"));

        // line 1
        echo "<form action=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fos_user_resetting_reset", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))), "html", null, true);
        echo "\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " method=\"POST\" class=\"fos_user_resetting_reset\">
    ";
        // line 2
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
    <div>
        <input type=\"submit\" value=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.reset.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
</form>
";
        
        $__internal_080ad87859972c61e2b7f9066ce3cdcaf13a78dcfbd55c0320cd46d0ba44bc6e->leave($__internal_080ad87859972c61e2b7f9066ce3cdcaf13a78dcfbd55c0320cd46d0ba44bc6e_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/reset_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 4,  29 => 2,  22 => 1,);
    }
}
/* <form action="{{ path('fos_user_resetting_reset', {'token': token}) }}" {{ form_enctype(form) }} method="POST" class="fos_user_resetting_reset">*/
/*     {{ form_widget(form) }}*/
/*     <div>*/
/*         <input type="submit" value="{{ 'resetting.reset.submit'|trans({}, 'FOSUserBundle') }}" />*/
/*     </div>*/
/* </form>*/
/* */
