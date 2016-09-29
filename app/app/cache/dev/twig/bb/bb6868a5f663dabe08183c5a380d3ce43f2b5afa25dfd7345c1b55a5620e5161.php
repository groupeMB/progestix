<?php

/* FOSUserBundle:Group:show_content.html.twig */
class __TwigTemplate_e009d3392dca2bc7ef611e53e117a32d2be3fdc86c3752d036be9f125782fdf4 extends Twig_Template
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
        $__internal_f2d51380b6559e9bd4a11a7dc44e0204885896b2ea671ef5070a1bc7e5d4ac97 = $this->env->getExtension("native_profiler");
        $__internal_f2d51380b6559e9bd4a11a7dc44e0204885896b2ea671ef5070a1bc7e5d4ac97->enter($__internal_f2d51380b6559e9bd4a11a7dc44e0204885896b2ea671ef5070a1bc7e5d4ac97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

        // line 1
        echo "<div class=\"fos_user_group_show\">
    <p>";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("group.show.name", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "getName", array(), "method"), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_f2d51380b6559e9bd4a11a7dc44e0204885896b2ea671ef5070a1bc7e5d4ac97->leave($__internal_f2d51380b6559e9bd4a11a7dc44e0204885896b2ea671ef5070a1bc7e5d4ac97_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* <div class="fos_user_group_show">*/
/*     <p>{{ 'group.show.name'|trans([], 'FOSUserBundle') }}: {{ group.getName() }}</p>*/
/* </div>*/
/* */
