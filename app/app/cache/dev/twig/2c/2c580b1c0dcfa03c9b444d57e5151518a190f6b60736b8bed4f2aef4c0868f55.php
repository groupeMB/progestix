<?php

/* @SonataBlock/Block/block_base.html.twig */
class __TwigTemplate_1aa061fbc9ea752ed8d63d2953de481331e56e86946859368d84eb80158f4210 extends Twig_Template
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
        $__internal_f2ea1ad2ea3d0148acc8b24c431f38f99c1d765c1cc58240b8a52b212f08eb63 = $this->env->getExtension("native_profiler");
        $__internal_f2ea1ad2ea3d0148acc8b24c431f38f99c1d765c1cc58240b8a52b212f08eb63->enter($__internal_f2ea1ad2ea3d0148acc8b24c431f38f99c1d765c1cc58240b8a52b212f08eb63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataBlock/Block/block_base.html.twig"));

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
        
        $__internal_f2ea1ad2ea3d0148acc8b24c431f38f99c1d765c1cc58240b8a52b212f08eb63->leave($__internal_f2ea1ad2ea3d0148acc8b24c431f38f99c1d765c1cc58240b8a52b212f08eb63_prof);

    }

    // line 12
    public function block_block($context, array $blocks = array())
    {
        $__internal_d79d15a165790b3bf86be40f0ef533f35585e35782084717341d80477fa36912 = $this->env->getExtension("native_profiler");
        $__internal_d79d15a165790b3bf86be40f0ef533f35585e35782084717341d80477fa36912->enter($__internal_d79d15a165790b3bf86be40f0ef533f35585e35782084717341d80477fa36912_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        echo "EMPTY CONTENT";
        
        $__internal_d79d15a165790b3bf86be40f0ef533f35585e35782084717341d80477fa36912->leave($__internal_d79d15a165790b3bf86be40f0ef533f35585e35782084717341d80477fa36912_prof);

    }

    public function getTemplateName()
    {
        return "@SonataBlock/Block/block_base.html.twig";
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
