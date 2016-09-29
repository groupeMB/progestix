<?php

/* SonataBlockBundle:Block:block_core_menu.html.twig */
class __TwigTemplate_2d0561059773291ae26f51d3ebe1cd31bf04efbabeb0961a0c0a7728535b1714 extends Twig_Template
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
        $__internal_e7de0d932c8094a6f269c15c140a68315d16f94d0036224403d9a7daeb0cc418 = $this->env->getExtension("native_profiler");
        $__internal_e7de0d932c8094a6f269c15c140a68315d16f94d0036224403d9a7daeb0cc418->enter($__internal_e7de0d932c8094a6f269c15c140a68315d16f94d0036224403d9a7daeb0cc418_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_core_menu.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e7de0d932c8094a6f269c15c140a68315d16f94d0036224403d9a7daeb0cc418->leave($__internal_e7de0d932c8094a6f269c15c140a68315d16f94d0036224403d9a7daeb0cc418_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_90c3795834b5f28ba04626bc3f1a20badb08ebf6e0e733b2a9453fd5861a5b97 = $this->env->getExtension("native_profiler");
        $__internal_90c3795834b5f28ba04626bc3f1a20badb08ebf6e0e733b2a9453fd5861a5b97->enter($__internal_90c3795834b5f28ba04626bc3f1a20badb08ebf6e0e733b2a9453fd5861a5b97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 15
        echo "    ";
        echo $this->env->getExtension('knp_menu')->render((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")), (isset($context["menu_options"]) ? $context["menu_options"] : $this->getContext($context, "menu_options")));
        echo "
";
        
        $__internal_90c3795834b5f28ba04626bc3f1a20badb08ebf6e0e733b2a9453fd5861a5b97->leave($__internal_90c3795834b5f28ba04626bc3f1a20badb08ebf6e0e733b2a9453fd5861a5b97_prof);

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
