<?php

/* @SonataBlock/Block/block_core_menu.html.twig */
class __TwigTemplate_fa1f8ecffce27acc7dd7c5086531fba940e4085740e746dfe7e9b75770e0383d extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_block"]) ? $context["sonata_block"] : $this->getContext($context, "sonata_block")), "templates", array()), "block_base", array()), "@SonataBlock/Block/block_core_menu.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_feac70a51083d1caf8faa1e1dce9bf7e283f9c43faf322e8009a6913a754fd25 = $this->env->getExtension("native_profiler");
        $__internal_feac70a51083d1caf8faa1e1dce9bf7e283f9c43faf322e8009a6913a754fd25->enter($__internal_feac70a51083d1caf8faa1e1dce9bf7e283f9c43faf322e8009a6913a754fd25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataBlock/Block/block_core_menu.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_feac70a51083d1caf8faa1e1dce9bf7e283f9c43faf322e8009a6913a754fd25->leave($__internal_feac70a51083d1caf8faa1e1dce9bf7e283f9c43faf322e8009a6913a754fd25_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_d4bd22da1f3f8c7c53d6572387b6f62e3bf8376e8347b5a0e6f3fa2b9d220b51 = $this->env->getExtension("native_profiler");
        $__internal_d4bd22da1f3f8c7c53d6572387b6f62e3bf8376e8347b5a0e6f3fa2b9d220b51->enter($__internal_d4bd22da1f3f8c7c53d6572387b6f62e3bf8376e8347b5a0e6f3fa2b9d220b51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 15
        echo "    ";
        echo $this->env->getExtension('knp_menu')->render((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")), (isset($context["menu_options"]) ? $context["menu_options"] : $this->getContext($context, "menu_options")));
        echo "
";
        
        $__internal_d4bd22da1f3f8c7c53d6572387b6f62e3bf8376e8347b5a0e6f3fa2b9d220b51->leave($__internal_d4bd22da1f3f8c7c53d6572387b6f62e3bf8376e8347b5a0e6f3fa2b9d220b51_prof);

    }

    public function getTemplateName()
    {
        return "@SonataBlock/Block/block_core_menu.html.twig";
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
