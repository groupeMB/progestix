<?php

/* SonataBlockBundle:Block:block_base.html.twig */
class __TwigTemplate_716173fdc81d181b9be21e6f227b3f10441e16c19466b127aa17cc945208d173 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'block' => array($this, 'block_block'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ee293a2ace32d269aa24b6f9b1fb5375bb1dd8216117bc717be5d5e3571303ec = $this->env->getExtension("native_profiler");
        $__internal_ee293a2ace32d269aa24b6f9b1fb5375bb1dd8216117bc717be5d5e3571303ec->enter($__internal_ee293a2ace32d269aa24b6f9b1fb5375bb1dd8216117bc717be5d5e3571303ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_base.html.twig"));

        // line 11
        echo "<div id=\"cms-block-";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["block"]) ? $context["block"] : $this->getContext($context, "block")), "id", array()), "html", null, true);
        echo "\" class=\"cms-block cms-block-element\">
    ";
        // line 12
        $this->displayBlock('block', $context, $blocks);
        // line 13
        echo "</div>
";
        
        $__internal_ee293a2ace32d269aa24b6f9b1fb5375bb1dd8216117bc717be5d5e3571303ec->leave($__internal_ee293a2ace32d269aa24b6f9b1fb5375bb1dd8216117bc717be5d5e3571303ec_prof);

    }

    // line 12
    public function block_block($context, array $blocks = array())
    {
        $__internal_aa8f652435ac7c789a178c809c9b10c7b214772206027f889f37275d4eb328fd = $this->env->getExtension("native_profiler");
        $__internal_aa8f652435ac7c789a178c809c9b10c7b214772206027f889f37275d4eb328fd->enter($__internal_aa8f652435ac7c789a178c809c9b10c7b214772206027f889f37275d4eb328fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        echo "EMPTY CONTENT";
        
        $__internal_aa8f652435ac7c789a178c809c9b10c7b214772206027f889f37275d4eb328fd->leave($__internal_aa8f652435ac7c789a178c809c9b10c7b214772206027f889f37275d4eb328fd_prof);

    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 12,  30 => 13,  28 => 12,  23 => 11,);
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
/* <div id="cms-block-{{ block.id }}" class="cms-block cms-block-element">*/
/*     {% block block %}EMPTY CONTENT{% endblock %}*/
/* </div>*/
/* */
