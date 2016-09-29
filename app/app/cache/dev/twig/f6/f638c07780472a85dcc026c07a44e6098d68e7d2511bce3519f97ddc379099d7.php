<?php

/* @SonataAdmin/CRUD/list_percent.html.twig */
class __TwigTemplate_6686e10b5998cab8f18a4cdf8c8ea89f39749ec2ed2c3c218116d2f2e449ed06 extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "@SonataAdmin/CRUD/list_percent.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1d82d385e68f79e9d24c7d51d72976f42e67f35ddceaecd06837c69f580f5f73 = $this->env->getExtension("native_profiler");
        $__internal_1d82d385e68f79e9d24c7d51d72976f42e67f35ddceaecd06837c69f580f5f73->enter($__internal_1d82d385e68f79e9d24c7d51d72976f42e67f35ddceaecd06837c69f580f5f73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/list_percent.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1d82d385e68f79e9d24c7d51d72976f42e67f35ddceaecd06837c69f580f5f73->leave($__internal_1d82d385e68f79e9d24c7d51d72976f42e67f35ddceaecd06837c69f580f5f73_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_b319f3908e8bb79d37cd8571aa7d4d85964d75701f744cb7649e7602a0324e6a = $this->env->getExtension("native_profiler");
        $__internal_b319f3908e8bb79d37cd8571aa7d4d85964d75701f744cb7649e7602a0324e6a->enter($__internal_b319f3908e8bb79d37cd8571aa7d4d85964d75701f744cb7649e7602a0324e6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        $context["value"] = ((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")) * 100);
        // line 16
        echo "    ";
        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
        echo " %
";
        
        $__internal_b319f3908e8bb79d37cd8571aa7d4d85964d75701f744cb7649e7602a0324e6a->leave($__internal_b319f3908e8bb79d37cd8571aa7d4d85964d75701f744cb7649e7602a0324e6a_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/list_percent.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 16,  39 => 15,  33 => 14,  18 => 12,);
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
/*     {% set value = value * 100 %}*/
/*     {{ value }} %*/
/* {% endblock %}*/
/* */
