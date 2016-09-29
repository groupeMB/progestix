<?php

/* @SonataAdmin/CRUD/list__batch.html.twig */
class __TwigTemplate_90934c42f6169d0ec1bda01e369ef8583a8485b680265c320c9b1363b2efb50f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "@SonataAdmin/CRUD/list__batch.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1513361f5a10dd94de7f3b56a41e5e1839064f82018bb8abfba5f833590a6e68 = $this->env->getExtension("native_profiler");
        $__internal_1513361f5a10dd94de7f3b56a41e5e1839064f82018bb8abfba5f833590a6e68->enter($__internal_1513361f5a10dd94de7f3b56a41e5e1839064f82018bb8abfba5f833590a6e68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/list__batch.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1513361f5a10dd94de7f3b56a41e5e1839064f82018bb8abfba5f833590a6e68->leave($__internal_1513361f5a10dd94de7f3b56a41e5e1839064f82018bb8abfba5f833590a6e68_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_aaa151acd30e1b0747d7388f648a8b66cc9dcc8caf3caae70a5ae545500ef970 = $this->env->getExtension("native_profiler");
        $__internal_aaa151acd30e1b0747d7388f648a8b66cc9dcc8caf3caae70a5ae545500ef970->enter($__internal_aaa151acd30e1b0747d7388f648a8b66cc9dcc8caf3caae70a5ae545500ef970_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    <input type=\"checkbox\" name=\"idx[]\" value=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "id", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"), "html", null, true);
        echo "\">
";
        
        $__internal_aaa151acd30e1b0747d7388f648a8b66cc9dcc8caf3caae70a5ae545500ef970->leave($__internal_aaa151acd30e1b0747d7388f648a8b66cc9dcc8caf3caae70a5ae545500ef970_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/list__batch.html.twig";
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
/* {% extends admin.getTemplate('base_list_field') %}*/
/* */
/* {% block field %}*/
/*     <input type="checkbox" name="idx[]" value="{{ admin.id(object) }}">*/
/* {% endblock %}*/
/* */
