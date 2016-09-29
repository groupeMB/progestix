<?php

/* SonataBlockBundle:Block:block_core_action.html.twig */
class __TwigTemplate_ee680fe2b5b494c4e1995b9092947355a64b90b4a7f9b185e38cbc9de5f81d15 extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_block"]) ? $context["sonata_block"] : $this->getContext($context, "sonata_block")), "templates", array()), "block_base", array()), "SonataBlockBundle:Block:block_core_action.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_05bcf2c2f136343a9b874bdea3202af82b760d7bb1462fd48644aebdd5ebcb51 = $this->env->getExtension("native_profiler");
        $__internal_05bcf2c2f136343a9b874bdea3202af82b760d7bb1462fd48644aebdd5ebcb51->enter($__internal_05bcf2c2f136343a9b874bdea3202af82b760d7bb1462fd48644aebdd5ebcb51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_core_action.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_05bcf2c2f136343a9b874bdea3202af82b760d7bb1462fd48644aebdd5ebcb51->leave($__internal_05bcf2c2f136343a9b874bdea3202af82b760d7bb1462fd48644aebdd5ebcb51_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_b442ee4f217409d83a5c221ddc6bec60246aa56db66613279453549370d59edd = $this->env->getExtension("native_profiler");
        $__internal_b442ee4f217409d83a5c221ddc6bec60246aa56db66613279453549370d59edd->enter($__internal_b442ee4f217409d83a5c221ddc6bec60246aa56db66613279453549370d59edd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 15
        echo "    ";
        echo (isset($context["content"]) ? $context["content"] : $this->getContext($context, "content"));
        echo "
";
        
        $__internal_b442ee4f217409d83a5c221ddc6bec60246aa56db66613279453549370d59edd->leave($__internal_b442ee4f217409d83a5c221ddc6bec60246aa56db66613279453549370d59edd_prof);

    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_core_action.html.twig";
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
