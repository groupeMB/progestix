<?php

/* SonataBlockBundle:Block:block_core_menu.html.twig */
class __TwigTemplate_d04b68818197e74724f61fc9c42cf36422f019d3e231ebed6573547281f52241 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'block' => array($this, 'block_block'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_block"]) ? $context["sonata_block"] : $this->getContext($context, "sonata_block")), "templates", array()), "block_base", array()), "SonataBlockBundle:Block:block_core_menu.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f2b2b52de5d919816d2668a7e2fdd1eaa3f053411244f68c8d287a4b83a9fc83 = $this->env->getExtension("native_profiler");
        $__internal_f2b2b52de5d919816d2668a7e2fdd1eaa3f053411244f68c8d287a4b83a9fc83->enter($__internal_f2b2b52de5d919816d2668a7e2fdd1eaa3f053411244f68c8d287a4b83a9fc83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_core_menu.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f2b2b52de5d919816d2668a7e2fdd1eaa3f053411244f68c8d287a4b83a9fc83->leave($__internal_f2b2b52de5d919816d2668a7e2fdd1eaa3f053411244f68c8d287a4b83a9fc83_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_c5d54c8f0430d51a7c43b0f5660c047e1f993dee58882f6413e64ab3cfe151df = $this->env->getExtension("native_profiler");
        $__internal_c5d54c8f0430d51a7c43b0f5660c047e1f993dee58882f6413e64ab3cfe151df->enter($__internal_c5d54c8f0430d51a7c43b0f5660c047e1f993dee58882f6413e64ab3cfe151df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 15
        echo "    ";
        echo $this->env->getExtension('knp_menu')->render((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")), (isset($context["menu_options"]) ? $context["menu_options"] : $this->getContext($context, "menu_options")));
        echo "
";
        
        $__internal_c5d54c8f0430d51a7c43b0f5660c047e1f993dee58882f6413e64ab3cfe151df->leave($__internal_c5d54c8f0430d51a7c43b0f5660c047e1f993dee58882f6413e64ab3cfe151df_prof);

    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_core_menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 15,  33 => 14,  18 => 12,);
    }
}
/* {#*/
/* */
/* This file is part of the Sonata package.*/
/* */
/* (c) Thomas Rabaix <thomas.rabaix@sonata-project.org>*/
/* */
/* For the full copyright and license information, please view the LICENSE*/
/* file that was distributed with this source code.*/
/* */
/* #}*/
/* */
/* {% extends sonata_block.templates.block_base %}*/
/* */
/* {% block block %}*/
/*     {{ knp_menu_render(menu, menu_options) }}*/
/* {% endblock %}*/
/* */
