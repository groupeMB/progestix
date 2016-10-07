<?php

/* @FOSUser/Registration/register_content.html.twig */
class __TwigTemplate_aa5d29097deeb64890369b374c8d798e00e939baf014432ba6bc5e336fd566e8 extends Twig_Template
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
        $__internal_59ecfb69d33a7d1a58ec7a3a31b081a53f5cbff5ff6f2f51915c80bc02f80c9b = $this->env->getExtension("native_profiler");
        $__internal_59ecfb69d33a7d1a58ec7a3a31b081a53f5cbff5ff6f2f51915c80bc02f80c9b->enter($__internal_59ecfb69d33a7d1a58ec7a3a31b081a53f5cbff5ff6f2f51915c80bc02f80c9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register_content.html.twig"));

        // line 1
        echo "<form action=\"";
        echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
        echo "\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " method=\"POST\" class=\"fos_user_registration_register\">
    ";
        // line 2
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
    <div>
        <input type=\"submit\" value=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
</form>
";
        
        $__internal_59ecfb69d33a7d1a58ec7a3a31b081a53f5cbff5ff6f2f51915c80bc02f80c9b->leave($__internal_59ecfb69d33a7d1a58ec7a3a31b081a53f5cbff5ff6f2f51915c80bc02f80c9b_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register_content.html.twig";
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
/* <form action="{{ path('fos_user_registration_register') }}" {{ form_enctype(form) }} method="POST" class="fos_user_registration_register">*/
/*     {{ form_widget(form) }}*/
/*     <div>*/
/*         <input type="submit" value="{{ 'registration.submit'|trans({}, 'FOSUserBundle') }}" />*/
/*     </div>*/
/* </form>*/
/* */
