<?php

/* SonataDoctrineORMAdminBundle:CRUD:edit_orm_one_association_script.html.twig */
class __TwigTemplate_d6f33e2b993f7c87db0fb79538713dacf4ac02b7d7d7edfdedcab58d581f2f31 extends Twig_Template
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
        $__internal_9cd12e4c170eab6f8628c5a0a484bffee88f19dc31761659fd8b9339d4326126 = $this->env->getExtension("native_profiler");
        $__internal_9cd12e4c170eab6f8628c5a0a484bffee88f19dc31761659fd8b9339d4326126->enter($__internal_9cd12e4c170eab6f8628c5a0a484bffee88f19dc31761659fd8b9339d4326126_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataDoctrineORMAdminBundle:CRUD:edit_orm_one_association_script.html.twig"));

        // line 11
        echo "

";
        // line 18
        echo "
";
        // line 20
        echo "
<!-- edit one association -->

<script type=\"text/javascript\">

    // handle the add link
    var field_add_";
        // line 26
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo " = function(event) {

        event.preventDefault();
        event.stopPropagation();

        var form = jQuery(this).closest('form');

        // the ajax post
        jQuery(form).ajaxSubmit({
            url: '";
        // line 35
        echo $this->env->getExtension('routing')->getPath("sonata_admin_append_form_element", (array("code" => $this->getAttribute($this->getAttribute($this->getAttribute(        // line 36
(isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "admin", array()), "root", array()), "code", array()), "elementId" =>         // line 37
(isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "objectId" => $this->getAttribute($this->getAttribute($this->getAttribute(        // line 38
(isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "admin", array()), "root", array()), "id", array(0 => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "admin", array()), "root", array()), "subject", array())), "method"), "uniqid" => $this->getAttribute($this->getAttribute($this->getAttribute(        // line 39
(isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "admin", array()), "root", array()), "uniqid", array()), "subclass" => $this->getAttribute($this->getAttribute($this->getAttribute(        // line 40
(isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "subclass"), "method")) + $this->getAttribute($this->getAttribute(        // line 41
(isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description", array()), "getOption", array(0 => "link_parameters", 1 => array()), "method")));
        echo "',
            type: \"POST\",
            dataType: 'html',
            data: { _xml_http_request: true },
            success: function(html) {
                if (!html.length) {
                    return;
                }

                jQuery('#field_container_";
        // line 50
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo "').replaceWith(html); // replace the html

                Admin.shared_setup(jQuery('#field_container_";
        // line 52
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo "'));

                if(jQuery('input[type=\"file\"]', form).length > 0) {
                    jQuery(form).attr('enctype', 'multipart/form-data');
                    jQuery(form).attr('encoding', 'multipart/form-data');
                }
                jQuery('#sonata-ba-field-container-";
        // line 58
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo "').trigger('sonata.add_element');
                jQuery('#field_container_";
        // line 59
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo "').trigger('sonata.add_element');
            }
        });

        return false;
    };

    var field_widget_";
        // line 66
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo " = false;

    // this function initialize the popup
    // this can be only done this way has popup can be cascaded
    function start_field_retrieve_";
        // line 70
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo "(link) {

        link.onclick = null;

        // initialize component
        field_widget_";
        // line 75
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo " = jQuery(\"#field_widget_";
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo "\");

        // add the jQuery event to the a element
        jQuery(link)
            .click(field_add_";
        // line 79
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo ")
            .trigger('click')
        ;

        return false;
    }
</script>

<!-- / edit one association -->

";
        
        $__internal_9cd12e4c170eab6f8628c5a0a484bffee88f19dc31761659fd8b9339d4326126->leave($__internal_9cd12e4c170eab6f8628c5a0a484bffee88f19dc31761659fd8b9339d4326126_prof);

    }

    public function getTemplateName()
    {
        return "SonataDoctrineORMAdminBundle:CRUD:edit_orm_one_association_script.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 79,  110 => 75,  102 => 70,  95 => 66,  85 => 59,  81 => 58,  72 => 52,  67 => 50,  55 => 41,  54 => 40,  53 => 39,  52 => 38,  51 => 37,  50 => 36,  49 => 35,  37 => 26,  29 => 20,  26 => 18,  22 => 11,);
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
/* */
/* {#*/
/* */
/* This code manage the one-to-many association field popup*/
/* */
/* #}*/
/* */
/* {% autoescape false %}*/
/* */
/* <!-- edit one association -->*/
/* */
/* <script type="text/javascript">*/
/* */
/*     // handle the add link*/
/*     var field_add_{{ id }} = function(event) {*/
/* */
/*         event.preventDefault();*/
/*         event.stopPropagation();*/
/* */
/*         var form = jQuery(this).closest('form');*/
/* */
/*         // the ajax post*/
/*         jQuery(form).ajaxSubmit({*/
/*             url: '{{ path('sonata_admin_append_form_element', {*/
/*                 'code':      sonata_admin.admin.root.code,*/
/*                 'elementId': id,*/
/*                 'objectId':  sonata_admin.admin.root.id(sonata_admin.admin.root.subject),*/
/*                 'uniqid':    sonata_admin.admin.root.uniqid,*/
/*                 'subclass': app.request.query.get('subclass'),*/
/*             } + sonata_admin.field_description.getOption('link_parameters', {})) }}',*/
/*             type: "POST",*/
/*             dataType: 'html',*/
/*             data: { _xml_http_request: true },*/
/*             success: function(html) {*/
/*                 if (!html.length) {*/
/*                     return;*/
/*                 }*/
/* */
/*                 jQuery('#field_container_{{ id }}').replaceWith(html); // replace the html*/
/* */
/*                 Admin.shared_setup(jQuery('#field_container_{{ id }}'));*/
/* */
/*                 if(jQuery('input[type="file"]', form).length > 0) {*/
/*                     jQuery(form).attr('enctype', 'multipart/form-data');*/
/*                     jQuery(form).attr('encoding', 'multipart/form-data');*/
/*                 }*/
/*                 jQuery('#sonata-ba-field-container-{{ id }}').trigger('sonata.add_element');*/
/*                 jQuery('#field_container_{{ id }}').trigger('sonata.add_element');*/
/*             }*/
/*         });*/
/* */
/*         return false;*/
/*     };*/
/* */
/*     var field_widget_{{ id }} = false;*/
/* */
/*     // this function initialize the popup*/
/*     // this can be only done this way has popup can be cascaded*/
/*     function start_field_retrieve_{{ id }}(link) {*/
/* */
/*         link.onclick = null;*/
/* */
/*         // initialize component*/
/*         field_widget_{{ id }} = jQuery("#field_widget_{{ id }}");*/
/* */
/*         // add the jQuery event to the a element*/
/*         jQuery(link)*/
/*             .click(field_add_{{ id }})*/
/*             .trigger('click')*/
/*         ;*/
/* */
/*         return false;*/
/*     }*/
/* </script>*/
/* */
/* <!-- / edit one association -->*/
/* */
/* {% endautoescape %}*/
/* */
