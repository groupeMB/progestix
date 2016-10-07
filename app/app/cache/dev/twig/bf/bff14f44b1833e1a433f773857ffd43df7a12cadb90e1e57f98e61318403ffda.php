<?php

/* FOSUserBundle:Group:new_content.html.twig */
class __TwigTemplate_ccddf50125f7dfaecac1577bb4092fd42e54bf94261d21e6b0c2e4fdf268bfce extends Twig_Template
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
        $__internal_103c81b5af904289bffd997b4c46bfbeaee44bd6747a7b8924f5e955607709cc = $this->env->getExtension("native_profiler");
        $__internal_103c81b5af904289bffd997b4c46bfbeaee44bd6747a7b8924f5e955607709cc->enter($__internal_103c81b5af904289bffd997b4c46bfbeaee44bd6747a7b8924f5e955607709cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new_content.html.twig"));

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
        
        $__internal_103c81b5af904289bffd997b4c46bfbeaee44bd6747a7b8924f5e955607709cc->leave($__internal_103c81b5af904289bffd997b4c46bfbeaee44bd6747a7b8924f5e955607709cc_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new_content.html.twig";
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
