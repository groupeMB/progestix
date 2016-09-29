<?php

/* @FOSUser/Group/new_content.html.twig */
class __TwigTemplate_b3e7eb97ab023f53bec3e80f5ea028de4d927f8ef15dd79518f640e5ee2db754 extends Twig_Template
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
        $__internal_e053d4e4a4ecd03bad95ae44c36e50e99f10dacbcbf5de806a35d985da9bbe91 = $this->env->getExtension("native_profiler");
        $__internal_e053d4e4a4ecd03bad95ae44c36e50e99f10dacbcbf5de806a35d985da9bbe91->enter($__internal_e053d4e4a4ecd03bad95ae44c36e50e99f10dacbcbf5de806a35d985da9bbe91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/new_content.html.twig"));

        // line 1
        echo "<form action=\"";
        echo $this->env->getExtension('routing')->getPath("fos_user_group_new");
        echo "\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " method=\"POST\" class=\"fos_user_group_new\">
    ";
        // line 2
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
    <div>
        <input type=\"submit\" value=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("group.new.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
</form>
";
        
        $__internal_e053d4e4a4ecd03bad95ae44c36e50e99f10dacbcbf5de806a35d985da9bbe91->leave($__internal_e053d4e4a4ecd03bad95ae44c36e50e99f10dacbcbf5de806a35d985da9bbe91_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/new_content.html.twig";
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
/* <form action="{{ path('fos_user_group_new') }}" {{ form_enctype(form) }} method="POST" class="fos_user_group_new">*/
/*     {{ form_widget(form) }}*/
/*     <div>*/
/*         <input type="submit" value="{{ 'group.new.submit'|trans([], 'FOSUserBundle') }}" />*/
/*     </div>*/
/* </form>*/
/* */
