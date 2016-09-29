<?php

/* @SonataBlock/Block/block_core_text.html.twig */
class __TwigTemplate_6c8e829dd706413c682ad58ef866232cd21078fd2cfce23ad2a0b1ba20939b78 extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_block"]) ? $context["sonata_block"] : $this->getContext($context, "sonata_block")), "templates", array()), "block_base", array()), "@SonataBlock/Block/block_core_text.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cc897bebc652ade2f2722dd14ca0d08f180397b6f0f2948b7411c7992154d6c0 = $this->env->getExtension("native_profiler");
        $__internal_cc897bebc652ade2f2722dd14ca0d08f180397b6f0f2948b7411c7992154d6c0->enter($__internal_cc897bebc652ade2f2722dd14ca0d08f180397b6f0f2948b7411c7992154d6c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataBlock/Block/block_core_text.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cc897bebc652ade2f2722dd14ca0d08f180397b6f0f2948b7411c7992154d6c0->leave($__internal_cc897bebc652ade2f2722dd14ca0d08f180397b6f0f2948b7411c7992154d6c0_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_a5e4923fc325978f121f8d8d7e18a2dd2c4b852c6b57cfbcc7622c821269ec44 = $this->env->getExtension("native_profiler");
        $__internal_a5e4923fc325978f121f8d8d7e18a2dd2c4b852c6b57cfbcc7622c821269ec44->enter($__internal_a5e4923fc325978f121f8d8d7e18a2dd2c4b852c6b57cfbcc7622c821269ec44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 15
        echo "    ";
        echo $this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "content", array());
        echo "
";
        
        $__internal_a5e4923fc325978f121f8d8d7e18a2dd2c4b852c6b57cfbcc7622c821269ec44->leave($__internal_a5e4923fc325978f121f8d8d7e18a2dd2c4b852c6b57cfbcc7622c821269ec44_prof);

    }

    public function getTemplateName()
    {
        return "@SonataBlock/Block/block_core_text.html.twig";
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
