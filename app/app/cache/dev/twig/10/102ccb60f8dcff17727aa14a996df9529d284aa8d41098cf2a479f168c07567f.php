<?php

/* GestionStockBundle:Produit:afficher.html.twig */
class __TwigTemplate_5d27989d64bd3d39a2f33bc6d48f2ff9d0083e425b95ba8bccec9a77b270cb58 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("GestionStockBundle::template.html.twig", "GestionStockBundle:Produit:afficher.html.twig", 1);
        $this->blocks = array(
            'contenu' => array($this, 'block_contenu'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "GestionStockBundle::template.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b69ba579b613dcc1c127d6c16e1444ce83377137ffaef6388f5d20495ae3c546 = $this->env->getExtension("native_profiler");
        $__internal_b69ba579b613dcc1c127d6c16e1444ce83377137ffaef6388f5d20495ae3c546->enter($__internal_b69ba579b613dcc1c127d6c16e1444ce83377137ffaef6388f5d20495ae3c546_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GestionStockBundle:Produit:afficher.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b69ba579b613dcc1c127d6c16e1444ce83377137ffaef6388f5d20495ae3c546->leave($__internal_b69ba579b613dcc1c127d6c16e1444ce83377137ffaef6388f5d20495ae3c546_prof);

    }

    // line 2
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_7737e0fb3f47af9b779ca2b5b70d4832d36da23c79336278b76c0a451d7c3120 = $this->env->getExtension("native_profiler");
        $__internal_7737e0fb3f47af9b779ca2b5b70d4832d36da23c79336278b76c0a451d7c3120->enter($__internal_7737e0fb3f47af9b779ca2b5b70d4832d36da23c79336278b76c0a451d7c3120_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

        // line 3
        echo "\t <div class=\"col-md-12\" >
     <div class=\"row\">
          <div class=\"col-sm-6 col-md-4\">
            <div class=\"thumbnail\">
              <img src=\"...\" alt=\"...\">
              <div class=\"caption\">
                <h3>detail du produit</h3>
                
                <p>
                 libellé : ";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["code"]) ? $context["code"] : $this->getContext($context, "code")), "libelle", array()), "html", null, true);
        echo ";<br>
                quantité : ";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["code"]) ? $context["code"] : $this->getContext($context, "code")), "quantite", array()), "html", null, true);
        echo "<br>
                prix    : ";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["code"]) ? $context["code"] : $this->getContext($context, "code")), "prixUnitaire", array()), "html", null, true);
        echo "<br>
                type    : ";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["code"]) ? $context["code"] : $this->getContext($context, "code")), "type", array()), "html", null, true);
        echo "<br>
                codeBarre : ";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["code"]) ? $context["code"] : $this->getContext($context, "code")), "codebarre", array()), "html", null, true);
        echo "   
                </p>
              </div>
            </div>
          </div>
        </div>
        
";
        
        $__internal_7737e0fb3f47af9b779ca2b5b70d4832d36da23c79336278b76c0a451d7c3120->leave($__internal_7737e0fb3f47af9b779ca2b5b70d4832d36da23c79336278b76c0a451d7c3120_prof);

    }

    public function getTemplateName()
    {
        return "GestionStockBundle:Produit:afficher.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 16,  63 => 15,  59 => 14,  55 => 13,  51 => 12,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends "GestionStockBundle::template.html.twig" %}*/
/* {% block contenu %}*/
/* 	 <div class="col-md-12" >*/
/*      <div class="row">*/
/*           <div class="col-sm-6 col-md-4">*/
/*             <div class="thumbnail">*/
/*               <img src="..." alt="...">*/
/*               <div class="caption">*/
/*                 <h3>detail du produit</h3>*/
/*                 */
/*                 <p>*/
/*                  libellé : {{ code.libelle }};<br>*/
/*                 quantité : {{ code.quantite }}<br>*/
/*                 prix    : {{ code.prixUnitaire}}<br>*/
/*                 type    : {{code.type }}<br>*/
/*                 codeBarre : {{code.codebarre }}   */
/*                 </p>*/
/*               </div>*/
/*             </div>*/
/*           </div>*/
/*         </div>*/
/*         */
/* {% endblock%}*/
