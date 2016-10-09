<?php

/* GestionStockBundle:Produit:lister.html.twig */
class __TwigTemplate_d08056cdeaa743fe113b5850450b9920911883f2c9c326d6ae4848ac380ff3d9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("GestionStockBundle::template.html.twig", "GestionStockBundle:Produit:lister.html.twig", 1);
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
        $__internal_e0f2893c0d01c60e64bf16c1c378cff2879ab09e472e40c74bc44530c3ece34a = $this->env->getExtension("native_profiler");
        $__internal_e0f2893c0d01c60e64bf16c1c378cff2879ab09e472e40c74bc44530c3ece34a->enter($__internal_e0f2893c0d01c60e64bf16c1c378cff2879ab09e472e40c74bc44530c3ece34a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GestionStockBundle:Produit:lister.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e0f2893c0d01c60e64bf16c1c378cff2879ab09e472e40c74bc44530c3ece34a->leave($__internal_e0f2893c0d01c60e64bf16c1c378cff2879ab09e472e40c74bc44530c3ece34a_prof);

    }

    // line 2
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_cd72daff7c96d452a84251129314a42f72d1b47d9c20e4c3124b985234ea842e = $this->env->getExtension("native_profiler");
        $__internal_cd72daff7c96d452a84251129314a42f72d1b47d9c20e4c3124b985234ea842e->enter($__internal_cd72daff7c96d452a84251129314a42f72d1b47d9c20e4c3124b985234ea842e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

        // line 3
        echo "\t <div class=\"col-md-12\" >
        <div class=\"table-responsive\">
            <table id=\"mytable\" class=\"table table-bordered\">
                <thead>
                    <th>Libellé</th>
                    <th>Catégorie</th>
                    <th>Code Barre</th>
                    <th>Prix Unitaire</th>
                    <th>Date de Péremption</th>
                    <th>Réference</th>
                    
                    <th></th>
                </thead>
                <tbody>
                    ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["produits"]) ? $context["produits"] : $this->getContext($context, "produits")));
        foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
            // line 18
            echo "                         <tr>
                            <td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], "libelle", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], "categorie", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], "codebarre", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], "prixunitaire", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 23
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["tag"], "dateperemption", array()), "m-d-Y"), "html", null, true);
            echo "</td>
                            <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], "reference", array()), "html", null, true);
            echo "</td>
                            
                             <td>
                             <a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("gestion_stock_afficher_produit", array("code" => $this->getAttribute($context["tag"], "codebarre", array()))), "html", null, true);
            echo "\"><button class=\"btn btn-info btn-xs\"><span class=\"glyphicon glyphicon-list\"></span></button></a>
                             <a href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("gestion_stock_modifier_produit", array("codebarre" => $this->getAttribute($context["tag"], "codebarre", array()))), "html", null, true);
            echo "\"><button class=\"btn btn-info btn-xs\"><span class=\"glyphicon glyphicon-edit\"></span></button></a>
                             <a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("gestion_stock_supprimer_produit", array("codebarre" => $this->getAttribute($context["tag"], "codebarre", array()))), "html", null, true);
            echo "\"><button class=\"btn btn-info btn-xs\"><span class=\"glyphicon glyphicon-trash\"></span></button></a>
                             </td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "                </tbody>
            </table>
        </div>
";
        
        $__internal_cd72daff7c96d452a84251129314a42f72d1b47d9c20e4c3124b985234ea842e->leave($__internal_cd72daff7c96d452a84251129314a42f72d1b47d9c20e4c3124b985234ea842e_prof);

    }

    public function getTemplateName()
    {
        return "GestionStockBundle:Produit:lister.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 33,  97 => 29,  93 => 28,  89 => 27,  83 => 24,  79 => 23,  75 => 22,  71 => 21,  67 => 20,  63 => 19,  60 => 18,  56 => 17,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends "GestionStockBundle::template.html.twig" %}*/
/* {% block contenu %}*/
/* 	 <div class="col-md-12" >*/
/*         <div class="table-responsive">*/
/*             <table id="mytable" class="table table-bordered">*/
/*                 <thead>*/
/*                     <th>Libellé</th>*/
/*                     <th>Catégorie</th>*/
/*                     <th>Code Barre</th>*/
/*                     <th>Prix Unitaire</th>*/
/*                     <th>Date de Péremption</th>*/
/*                     <th>Réference</th>*/
/*                     */
/*                     <th></th>*/
/*                 </thead>*/
/*                 <tbody>*/
/*                     {% for tag in produits %}*/
/*                          <tr>*/
/*                             <td>{{ tag.libelle}}</td>*/
/*                             <td>{{ tag.categorie }}</td>*/
/*                             <td>{{ tag.codebarre}}</td>*/
/*                             <td>{{ tag.prixunitaire}}</td>*/
/*                             <td>{{ tag.dateperemption |date('m-d-Y')}}</td>*/
/*                             <td>{{ tag.reference }}</td>*/
/*                             */
/*                              <td>*/
/*                              <a href="{{ path('gestion_stock_afficher_produit', {'code': tag.codebarre}) }}"><button class="btn btn-info btn-xs"><span class="glyphicon glyphicon-list"></span></button></a>*/
/*                              <a href="{{ path('gestion_stock_modifier_produit', {'codebarre': tag.codebarre}) }}"><button class="btn btn-info btn-xs"><span class="glyphicon glyphicon-edit"></span></button></a>*/
/*                              <a href="{{ path('gestion_stock_supprimer_produit', {'codebarre': tag.codebarre}) }}"><button class="btn btn-info btn-xs"><span class="glyphicon glyphicon-trash"></span></button></a>*/
/*                              </td>*/
/*                         </tr>*/
/*                     {% endfor %}*/
/*                 </tbody>*/
/*             </table>*/
/*         </div>*/
/* {% endblock%}*/
