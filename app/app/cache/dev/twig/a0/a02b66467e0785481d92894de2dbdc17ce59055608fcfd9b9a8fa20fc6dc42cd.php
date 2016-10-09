<?php

/* FOSUserBundle:Group:show_content.html.twig */
class __TwigTemplate_1601a4d4a7cdc4ccd4010b68161b89659ccf12f5254836a28f5e38738dc15fac extends Twig_Template
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
        $__internal_809205be715789070da55fa65bb6a4b3e5591960b1b761756b3797ac0dbb64d5 = $this->env->getExtension("native_profiler");
        $__internal_809205be715789070da55fa65bb6a4b3e5591960b1b761756b3797ac0dbb64d5->enter($__internal_809205be715789070da55fa65bb6a4b3e5591960b1b761756b3797ac0dbb64d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

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
        
        $__internal_809205be715789070da55fa65bb6a4b3e5591960b1b761756b3797ac0dbb64d5->leave($__internal_809205be715789070da55fa65bb6a4b3e5591960b1b761756b3797ac0dbb64d5_prof);

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
