<?php

/* SonataBlockBundle:Block:block_core_text.html.twig */
class __TwigTemplate_9e3bb2726827dc1b2be4c2d07a64f88acf4a06601957250c81f37cc1262e2ab3 extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_block"]) ? $context["sonata_block"] : $this->getContext($context, "sonata_block")), "templates", array()), "block_base", array()), "SonataBlockBundle:Block:block_core_text.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_14354aefcbdef4625701b837edbc5186914775c7c6279a40481458e54e73fe40 = $this->env->getExtension("native_profiler");
        $__internal_14354aefcbdef4625701b837edbc5186914775c7c6279a40481458e54e73fe40->enter($__internal_14354aefcbdef4625701b837edbc5186914775c7c6279a40481458e54e73fe40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_core_text.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_14354aefcbdef4625701b837edbc5186914775c7c6279a40481458e54e73fe40->leave($__internal_14354aefcbdef4625701b837edbc5186914775c7c6279a40481458e54e73fe40_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_db1a9420cc3f1c2e80c449e1cc5f197ec15345f5ca8c0fbbdf2962db2eacf266 = $this->env->getExtension("native_profiler");
        $__internal_db1a9420cc3f1c2e80c449e1cc5f197ec15345f5ca8c0fbbdf2962db2eacf266->enter($__internal_db1a9420cc3f1c2e80c449e1cc5f197ec15345f5ca8c0fbbdf2962db2eacf266_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 15
        echo "    ";
        echo $this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "content", array());
        echo "
";
        
        $__internal_db1a9420cc3f1c2e80c449e1cc5f197ec15345f5ca8c0fbbdf2962db2eacf266->leave($__internal_db1a9420cc3f1c2e80c449e1cc5f197ec15345f5ca8c0fbbdf2962db2eacf266_prof);

    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_core_text.html.twig";
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
/*     {{ settings.content|raw }}*/
/* {% endblock %}*/
/* */
