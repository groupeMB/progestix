<?php

/* SonataBlockBundle:Block:block_exception.html.twig */
class __TwigTemplate_eeb6ea866e186983388261381fa533576497168f145ca7b7c733f9dcb22dc8d8 extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_block"]) ? $context["sonata_block"] : $this->getContext($context, "sonata_block")), "templates", array()), "block_base", array()), "SonataBlockBundle:Block:block_exception.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4bc7b134975b34fb7f26a9615a7d67c77097afeb93804c73129aa32e200a4be8 = $this->env->getExtension("native_profiler");
        $__internal_4bc7b134975b34fb7f26a9615a7d67c77097afeb93804c73129aa32e200a4be8->enter($__internal_4bc7b134975b34fb7f26a9615a7d67c77097afeb93804c73129aa32e200a4be8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_exception.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4bc7b134975b34fb7f26a9615a7d67c77097afeb93804c73129aa32e200a4be8->leave($__internal_4bc7b134975b34fb7f26a9615a7d67c77097afeb93804c73129aa32e200a4be8_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_b7d28ac2d37d5eb7d6f909b3c0b22370a6d283627101173526cb9ca879bb2b7d = $this->env->getExtension("native_profiler");
        $__internal_b7d28ac2d37d5eb7d6f909b3c0b22370a6d283627101173526cb9ca879bb2b7d->enter($__internal_b7d28ac2d37d5eb7d6f909b3c0b22370a6d283627101173526cb9ca879bb2b7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 15
        echo "    <div class=\"cms-block-exception\">
        <h2>";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["block"]) ? $context["block"] : $this->getContext($context, "block")), "name", array()), "html", null, true);
        echo "</h2>
        <h3>";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo "</h3>
    </div>
";
        
        $__internal_b7d28ac2d37d5eb7d6f909b3c0b22370a6d283627101173526cb9ca879bb2b7d->leave($__internal_b7d28ac2d37d5eb7d6f909b3c0b22370a6d283627101173526cb9ca879bb2b7d_prof);

    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 17,  42 => 16,  39 => 15,  33 => 14,  18 => 12,);
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
/*     <div class="cms-block-exception">*/
/*         <h2>{{ block.name }}</h2>*/
/*         <h3>{{ exception.message }}</h3>*/
/*     </div>*/
/* {% endblock %}*/
/* */
