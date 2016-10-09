<?php

/* FOSUserBundle:ChangePassword:changePassword_content.html.twig */
class __TwigTemplate_d0e5540ec0db37445eebb6a2ae4ed24581ef3373d1d98902566f5fd443ffbd2b extends Twig_Template
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
        $__internal_b52c9d4893d60398528fc830b04dd0b76d92b981b349be53af4f27a98b88ebea = $this->env->getExtension("native_profiler");
        $__internal_b52c9d4893d60398528fc830b04dd0b76d92b981b349be53af4f27a98b88ebea->enter($__internal_b52c9d4893d60398528fc830b04dd0b76d92b981b349be53af4f27a98b88ebea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:changePassword_content.html.twig"));

        // line 1
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('routing')->getPath("sonata_user_change_password")));
        echo "
";
        // line 2
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "

<div class=\"form-actions form-group\">
    <div class=\"col-sm-offset-3 col-sm-9\">
        <button type=\"submit\" class=\"btn btn-danger\">";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("change_password.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "</button>
    </div>
</div>
";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_b52c9d4893d60398528fc830b04dd0b76d92b981b349be53af4f27a98b88ebea->leave($__internal_b52c9d4893d60398528fc830b04dd0b76d92b981b349be53af4f27a98b88ebea_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:changePassword_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 9,  33 => 6,  26 => 2,  22 => 1,);
    }
}
/* {{ form_start(form, {'action': path('sonata_user_change_password')  }) }}*/
/* {{ form_widget(form) }}*/
/* */
/* <div class="form-actions form-group">*/
/*     <div class="col-sm-offset-3 col-sm-9">*/
/*         <button type="submit" class="btn btn-danger">{{ 'change_password.submit'|trans({}, 'FOSUserBundle') }}</button>*/
/*     </div>*/
/* </div>*/
/* {{ form_end(form) }}*/
/* */
