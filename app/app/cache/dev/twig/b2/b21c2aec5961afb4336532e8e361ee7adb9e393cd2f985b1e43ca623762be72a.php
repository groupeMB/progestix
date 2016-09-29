<?php

/* @FOSUser/Group/show_content.html.twig */
class __TwigTemplate_8224aa3a66fa7ce93b23782c4c81dc73785a1a59d45cc1b245e51b7821206a8c extends Twig_Template
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
        $__internal_ccd8a713225920fe3de6ade98ca884bd1d2807d49e4d8d34c2db85d0cf4fbc9c = $this->env->getExtension("native_profiler");
        $__internal_ccd8a713225920fe3de6ade98ca884bd1d2807d49e4d8d34c2db85d0cf4fbc9c->enter($__internal_ccd8a713225920fe3de6ade98ca884bd1d2807d49e4d8d34c2db85d0cf4fbc9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show_content.html.twig"));

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
        
        $__internal_ccd8a713225920fe3de6ade98ca884bd1d2807d49e4d8d34c2db85d0cf4fbc9c->leave($__internal_ccd8a713225920fe3de6ade98ca884bd1d2807d49e4d8d34c2db85d0cf4fbc9c_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/show_content.html.twig";
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
