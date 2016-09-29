<?php

/* @SonataBlock/Block/block_core_action.html.twig */
class __TwigTemplate_b2021c3a28449f1d65df1785b577593ecdf41020e57b9d247ddbd5ea0a128733 extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_block"]) ? $context["sonata_block"] : $this->getContext($context, "sonata_block")), "templates", array()), "block_base", array()), "@SonataBlock/Block/block_core_action.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_88041b3d4e37a646659f28db4b3b8a40de91b85712688ad0b4a284525d902d78 = $this->env->getExtension("native_profiler");
        $__internal_88041b3d4e37a646659f28db4b3b8a40de91b85712688ad0b4a284525d902d78->enter($__internal_88041b3d4e37a646659f28db4b3b8a40de91b85712688ad0b4a284525d902d78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataBlock/Block/block_core_action.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_88041b3d4e37a646659f28db4b3b8a40de91b85712688ad0b4a284525d902d78->leave($__internal_88041b3d4e37a646659f28db4b3b8a40de91b85712688ad0b4a284525d902d78_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_42d6749a4fd4c441fd7aed59ace1914480f70205e48355eaf47716eee4ea3138 = $this->env->getExtension("native_profiler");
        $__internal_42d6749a4fd4c441fd7aed59ace1914480f70205e48355eaf47716eee4ea3138->enter($__internal_42d6749a4fd4c441fd7aed59ace1914480f70205e48355eaf47716eee4ea3138_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 15
        echo "    ";
        echo (isset($context["content"]) ? $context["content"] : $this->getContext($context, "content"));
        echo "
";
        
        $__internal_42d6749a4fd4c441fd7aed59ace1914480f70205e48355eaf47716eee4ea3138->leave($__internal_42d6749a4fd4c441fd7aed59ace1914480f70205e48355eaf47716eee4ea3138_prof);

    }

    public function getTemplateName()
    {
        return "@SonataBlock/Block/block_core_action.html.twig";
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
/*     {{ content|raw }}*/
/* {% endblock %}*/
/* */
