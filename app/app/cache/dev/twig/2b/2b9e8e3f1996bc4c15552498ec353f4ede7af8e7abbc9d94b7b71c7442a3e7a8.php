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
        $__internal_34aeeeb42565f950ff703d7d3aac138a85eaa865f382c895e1fffbbd21afac4d = $this->env->getExtension("native_profiler");
        $__internal_34aeeeb42565f950ff703d7d3aac138a85eaa865f382c895e1fffbbd21afac4d->enter($__internal_34aeeeb42565f950ff703d7d3aac138a85eaa865f382c895e1fffbbd21afac4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_core_text.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_34aeeeb42565f950ff703d7d3aac138a85eaa865f382c895e1fffbbd21afac4d->leave($__internal_34aeeeb42565f950ff703d7d3aac138a85eaa865f382c895e1fffbbd21afac4d_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_e02f3bd4cbdae06c36ce083afa4f64508f0f4c5caf9f1bed28d6ca56210fa1d4 = $this->env->getExtension("native_profiler");
        $__internal_e02f3bd4cbdae06c36ce083afa4f64508f0f4c5caf9f1bed28d6ca56210fa1d4->enter($__internal_e02f3bd4cbdae06c36ce083afa4f64508f0f4c5caf9f1bed28d6ca56210fa1d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 15
        echo "    ";
        echo $this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "content", array());
        echo "
";
        
        $__internal_e02f3bd4cbdae06c36ce083afa4f64508f0f4c5caf9f1bed28d6ca56210fa1d4->leave($__internal_e02f3bd4cbdae06c36ce083afa4f64508f0f4c5caf9f1bed28d6ca56210fa1d4_prof);

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
