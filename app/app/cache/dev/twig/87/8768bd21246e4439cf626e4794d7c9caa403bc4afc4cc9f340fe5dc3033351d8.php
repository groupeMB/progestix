<?php

/* GestionStockBundle:Stock:afficher.html.twig */
class __TwigTemplate_389445bcc518c9e40106800fc41b74888eacc11539b4c74c2e51b7b3801c2b8d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("GestionStockBundle::template.html.twig", "GestionStockBundle:Stock:afficher.html.twig", 1);
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
        $__internal_26fb5cd1091f4c92d1e12f64ed93b820ca927b64807ba684bdb93f02081402ae = $this->env->getExtension("native_profiler");
        $__internal_26fb5cd1091f4c92d1e12f64ed93b820ca927b64807ba684bdb93f02081402ae->enter($__internal_26fb5cd1091f4c92d1e12f64ed93b820ca927b64807ba684bdb93f02081402ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GestionStockBundle:Stock:afficher.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_26fb5cd1091f4c92d1e12f64ed93b820ca927b64807ba684bdb93f02081402ae->leave($__internal_26fb5cd1091f4c92d1e12f64ed93b820ca927b64807ba684bdb93f02081402ae_prof);

    }

    // line 2
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_fcbbedc6dcfd0924c712d750a1b7be541e054299408be3788d76b0b80665a320 = $this->env->getExtension("native_profiler");
        $__internal_fcbbedc6dcfd0924c712d750a1b7be541e054299408be3788d76b0b80665a320->enter($__internal_fcbbedc6dcfd0924c712d750a1b7be541e054299408be3788d76b0b80665a320_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

        // line 3
        echo "\t <div class=\"col-md-12\" >
     <div class=\"row\">
          <div class=\"col-sm-6 col-md-4\">
            <div class=\"thumbnail\">

              <div class=\"caption\">
                <h3>detail sur le stock</h3>
                
                <p>
                  Seuil minimum : ";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["stock"]) ? $context["stock"] : $this->getContext($context, "stock")), "seuilMin", array()), "html", null, true);
        echo ";<br>
                  Quantité : ";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["stock"]) ? $context["stock"] : $this->getContext($context, "stock")), "quantite", array()), "html", null, true);
        echo "<br>
                  Identifiant Produit   : ";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["stock"]) ? $context["stock"] : $this->getContext($context, "stock")), "produit", array()), "html", null, true);
        echo "<br>
                </p>
              </div>
            </div>
          </div>
        </div>
        
";
        
        $__internal_fcbbedc6dcfd0924c712d750a1b7be541e054299408be3788d76b0b80665a320->leave($__internal_fcbbedc6dcfd0924c712d750a1b7be541e054299408be3788d76b0b80665a320_prof);

    }

    public function getTemplateName()
    {
        return "GestionStockBundle:Stock:afficher.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 14,  55 => 13,  51 => 12,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends "GestionStockBundle::template.html.twig" %}*/
/* {% block contenu %}*/
/* 	 <div class="col-md-12" >*/
/*      <div class="row">*/
/*           <div class="col-sm-6 col-md-4">*/
/*             <div class="thumbnail">*/
/* */
/*               <div class="caption">*/
/*                 <h3>detail sur le stock</h3>*/
/*                 */
/*                 <p>*/
/*                   Seuil minimum : {{ stock.seuilMin }};<br>*/
/*                   Quantité : {{ stock.quantite }}<br>*/
/*                   Identifiant Produit   : {{ stock.produit }}<br>*/
/*                 </p>*/
/*               </div>*/
/*             </div>*/
/*           </div>*/
/*         </div>*/
/*         */
/* {% endblock%}*/
