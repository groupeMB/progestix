<?php

/* SonataBlockBundle:Block:block_core_action.html.twig */
class __TwigTemplate_e29a9a393fb2ad5d9358541434ae2d0608f004c862b1bf6b37711e6f10ca239a extends Twig_Template
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
        $__internal_812633b52cb0aacb0e2ba12004d139634ca3b985b5d5e60b9368987ff71b1abd = $this->env->getExtension("native_profiler");
        $__internal_812633b52cb0aacb0e2ba12004d139634ca3b985b5d5e60b9368987ff71b1abd->enter($__internal_812633b52cb0aacb0e2ba12004d139634ca3b985b5d5e60b9368987ff71b1abd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_core_action.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_812633b52cb0aacb0e2ba12004d139634ca3b985b5d5e60b9368987ff71b1abd->leave($__internal_812633b52cb0aacb0e2ba12004d139634ca3b985b5d5e60b9368987ff71b1abd_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_c6f5420dbcb0bc8ae72fd1cfc2ed28e72d9dae3dcc90abec9f02bee40f2b82ed = $this->env->getExtension("native_profiler");
        $__internal_c6f5420dbcb0bc8ae72fd1cfc2ed28e72d9dae3dcc90abec9f02bee40f2b82ed->enter($__internal_c6f5420dbcb0bc8ae72fd1cfc2ed28e72d9dae3dcc90abec9f02bee40f2b82ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 15
        echo "    ";
        echo (isset($context["content"]) ? $context["content"] : $this->getContext($context, "content"));
        echo "
";
        
        $__internal_c6f5420dbcb0bc8ae72fd1cfc2ed28e72d9dae3dcc90abec9f02bee40f2b82ed->leave($__internal_c6f5420dbcb0bc8ae72fd1cfc2ed28e72d9dae3dcc90abec9f02bee40f2b82ed_prof);

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
