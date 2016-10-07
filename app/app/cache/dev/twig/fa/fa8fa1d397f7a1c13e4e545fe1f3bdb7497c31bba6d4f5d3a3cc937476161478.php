<?php

/* SonataBlockBundle:Block:block_base.html.twig */
class __TwigTemplate_74d097c8f36c40e48759f0ba193c44b117a9e5ae715f922bb392920cf78f37ba extends Twig_Template
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
        $__internal_ac1a25ec4441bee186395feae1a2c87f3755fca1441866590818db1b586266d1 = $this->env->getExtension("native_profiler");
        $__internal_ac1a25ec4441bee186395feae1a2c87f3755fca1441866590818db1b586266d1->enter($__internal_ac1a25ec4441bee186395feae1a2c87f3755fca1441866590818db1b586266d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_base.html.twig"));

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
        
        $__internal_ac1a25ec4441bee186395feae1a2c87f3755fca1441866590818db1b586266d1->leave($__internal_ac1a25ec4441bee186395feae1a2c87f3755fca1441866590818db1b586266d1_prof);

    }

    // line 12
    public function block_block($context, array $blocks = array())
    {
        $__internal_b8cb3bf5098f133cdab00c6b618c275bb4e74ef08ad62aa6d8abbb760f5320eb = $this->env->getExtension("native_profiler");
        $__internal_b8cb3bf5098f133cdab00c6b618c275bb4e74ef08ad62aa6d8abbb760f5320eb->enter($__internal_b8cb3bf5098f133cdab00c6b618c275bb4e74ef08ad62aa6d8abbb760f5320eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        echo "EMPTY CONTENT";
        
        $__internal_b8cb3bf5098f133cdab00c6b618c275bb4e74ef08ad62aa6d8abbb760f5320eb->leave($__internal_b8cb3bf5098f133cdab00c6b618c275bb4e74ef08ad62aa6d8abbb760f5320eb_prof);

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
