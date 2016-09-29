<?php

/* SonataBlockBundle:Block:block_exception.html.twig */
class __TwigTemplate_d86a095f90d189e4e11b12707aaac00a0db6ea8ea14acc02a14675f8fdf09b73 extends Twig_Template
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
        $__internal_dc9e5b658e23bb4985f1554e9e4715bfc8b51a03231058f2c6cae86c24d6e8db = $this->env->getExtension("native_profiler");
        $__internal_dc9e5b658e23bb4985f1554e9e4715bfc8b51a03231058f2c6cae86c24d6e8db->enter($__internal_dc9e5b658e23bb4985f1554e9e4715bfc8b51a03231058f2c6cae86c24d6e8db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_exception.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dc9e5b658e23bb4985f1554e9e4715bfc8b51a03231058f2c6cae86c24d6e8db->leave($__internal_dc9e5b658e23bb4985f1554e9e4715bfc8b51a03231058f2c6cae86c24d6e8db_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_ed501155fce815bb69e250ec96cd9e3c63903eda480bb37f20e750e0c577e322 = $this->env->getExtension("native_profiler");
        $__internal_ed501155fce815bb69e250ec96cd9e3c63903eda480bb37f20e750e0c577e322->enter($__internal_ed501155fce815bb69e250ec96cd9e3c63903eda480bb37f20e750e0c577e322_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

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
        
        $__internal_ed501155fce815bb69e250ec96cd9e3c63903eda480bb37f20e750e0c577e322->leave($__internal_ed501155fce815bb69e250ec96cd9e3c63903eda480bb37f20e750e0c577e322_prof);

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
