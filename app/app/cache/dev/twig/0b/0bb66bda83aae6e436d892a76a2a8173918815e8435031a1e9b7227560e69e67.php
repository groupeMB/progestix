<?php

/* @SonataDoctrineORMAdmin/CRUD/edit_modal.html.twig */
class __TwigTemplate_6196c5db4c651e76ee01bc2f8e72588f7ecfd73f41bbcc21607e82fa42618f75 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_567ebeba87f8d2201bc62eebbc314da3cd33484ee338a52b865803e0b27e1912 = $this->env->getExtension("native_profiler");
        $__internal_567ebeba87f8d2201bc62eebbc314da3cd33484ee338a52b865803e0b27e1912->enter($__internal_567ebeba87f8d2201bc62eebbc314da3cd33484ee338a52b865803e0b27e1912_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataDoctrineORMAdmin/CRUD/edit_modal.html.twig"));

        // line 11
        echo "
<div class=\"modal fade\" id=\"field_dialog_";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-lg\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                <h4 class=\"modal-title\"></h4>
            </div>
            <div class=\"modal-body\">
            </div>
        </div>
    </div>
</div>
";
        
        $__internal_567ebeba87f8d2201bc62eebbc314da3cd33484ee338a52b865803e0b27e1912->leave($__internal_567ebeba87f8d2201bc62eebbc314da3cd33484ee338a52b865803e0b27e1912_prof);

    }

    public function getTemplateName()
    {
        return "@SonataDoctrineORMAdmin/CRUD/edit_modal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 12,  22 => 11,);
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
/* <div class="modal fade" id="field_dialog_{{ id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">*/
/*     <div class="modal-dialog modal-lg">*/
/*         <div class="modal-content">*/
/*             <div class="modal-header">*/
/*                 <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>*/
/*                 <h4 class="modal-title"></h4>*/
/*             </div>*/
/*             <div class="modal-body">*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */
