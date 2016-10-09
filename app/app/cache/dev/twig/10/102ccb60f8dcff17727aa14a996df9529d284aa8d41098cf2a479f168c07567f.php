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
        $__internal_5dca0ae4dc181db34c30e2ffa942c798b11042f08f38c847c4568b42595f022a = $this->env->getExtension("native_profiler");
        $__internal_5dca0ae4dc181db34c30e2ffa942c798b11042f08f38c847c4568b42595f022a->enter($__internal_5dca0ae4dc181db34c30e2ffa942c798b11042f08f38c847c4568b42595f022a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GestionStockBundle:Produit:afficher.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5dca0ae4dc181db34c30e2ffa942c798b11042f08f38c847c4568b42595f022a->leave($__internal_5dca0ae4dc181db34c30e2ffa942c798b11042f08f38c847c4568b42595f022a_prof);

    }

    // line 2
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_ca0c3dd9df1ccd99ae413cc31b885cf66f3f39e13af4a4cedc5f2df3b4f08969 = $this->env->getExtension("native_profiler");
        $__internal_ca0c3dd9df1ccd99ae413cc31b885cf66f3f39e13af4a4cedc5f2df3b4f08969->enter($__internal_ca0c3dd9df1ccd99ae413cc31b885cf66f3f39e13af4a4cedc5f2df3b4f08969_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

        // line 3
        echo "\t <div class=\"col-md-12\" >
     <div class=\"row\">
          <div class=\"col-sm-6 col-md-4\">
            <div class=\"thumbnail\">
            
              <div class=\"caption\">
                <h3>detail du produit</h3>
                
                <p>
                 libellé : ";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["code"]) ? $context["code"] : $this->getContext($context, "code")), "libelle", array()), "html", null, true);
        echo ";<br>
                 code barre: ";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["code"]) ? $context["code"] : $this->getContext($context, "code")), "codebarre", array()), "html", null, true);
        echo "<br>
                 prix    : ";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["code"]) ? $context["code"] : $this->getContext($context, "code")), "prixunitaire", array()), "html", null, true);
        echo "<br>
                 date de péremption   : ";
        // line 15
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["code"]) ? $context["code"] : $this->getContext($context, "code")), "dateperemption", array()), "m-d-Y"), "html", null, true);
        echo "<br>
                 Réference : ";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["code"]) ? $context["code"] : $this->getContext($context, "code")), "reference", array()), "html", null, true);
        echo "   
                 Catégorie : ";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["code"]) ? $context["code"] : $this->getContext($context, "code")), "categorie", array()), "html", null, true);
        echo "   
                </p>
              </div>
            </div>
          </div>
        </div>
        
";
        
        $__internal_ca0c3dd9df1ccd99ae413cc31b885cf66f3f39e13af4a4cedc5f2df3b4f08969->leave($__internal_ca0c3dd9df1ccd99ae413cc31b885cf66f3f39e13af4a4cedc5f2df3b4f08969_prof);

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
        return array (  71 => 17,  67 => 16,  63 => 15,  59 => 14,  55 => 13,  51 => 12,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends "GestionStockBundle::template.html.twig" %}*/
/* {% block contenu %}*/
/* 	 <div class="col-md-12" >*/
/*      <div class="row">*/
/*           <div class="col-sm-6 col-md-4">*/
/*             <div class="thumbnail">*/
/*             */
/*               <div class="caption">*/
/*                 <h3>detail du produit</h3>*/
/*                 */
/*                 <p>*/
/*                  libellé : {{ code.libelle }};<br>*/
/*                  code barre: {{ code.codebarre }}<br>*/
/*                  prix    : {{ code.prixunitaire}}<br>*/
/*                  date de péremption   : {{code.dateperemption|date('m-d-Y') }}<br>*/
/*                  Réference : {{code.reference }}   */
/*                  Catégorie : {{code.categorie }}   */
/*                 </p>*/
/*               </div>*/
/*             </div>*/
/*           </div>*/
/*         </div>*/
/*         */
/* {% endblock%}*/
/* */
