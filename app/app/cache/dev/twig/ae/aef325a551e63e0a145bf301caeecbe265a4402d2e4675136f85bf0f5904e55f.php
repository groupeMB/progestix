<?php

/* GestionStockBundle:Produit:lister.html.twig */
class __TwigTemplate_626ddb2b5b2e685d76591f1f95114071ac606f3674eb50f4a595a3f5d81632f9 extends Twig_Template
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
        $__internal_84c16533cc683eed7d8d0ab0fa4fa0e47cd9c6df4888184576186e07eeebfe7c = $this->env->getExtension("native_profiler");
        $__internal_84c16533cc683eed7d8d0ab0fa4fa0e47cd9c6df4888184576186e07eeebfe7c->enter($__internal_84c16533cc683eed7d8d0ab0fa4fa0e47cd9c6df4888184576186e07eeebfe7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GestionStockBundle:Produit:lister.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_84c16533cc683eed7d8d0ab0fa4fa0e47cd9c6df4888184576186e07eeebfe7c->leave($__internal_84c16533cc683eed7d8d0ab0fa4fa0e47cd9c6df4888184576186e07eeebfe7c_prof);

    }

    // line 2
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_11c483c1e80999d8dd619059784bda63eca20d2a1d47bdc3b856c14be00b8990 = $this->env->getExtension("native_profiler");
        $__internal_11c483c1e80999d8dd619059784bda63eca20d2a1d47bdc3b856c14be00b8990->enter($__internal_11c483c1e80999d8dd619059784bda63eca20d2a1d47bdc3b856c14be00b8990_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

        // line 3
        echo "\t <div class=\"col-md-12\" >
        <div class=\"table-responsive\">
            <table id=\"mytable\" class=\"table table-bordered \">
                <thead>
                    <th>Libellé</th>
                    <th>Quantité</th>
                    <th>Prix Unitaire</th>
                    <th>Code Barre</th>
                    <th>Type</th>
                    <th></th>
                </thead>
                <tbody>
                    ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["produits"]) ? $context["produits"] : $this->getContext($context, "produits")));
        foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
            // line 16
            echo "                         <tr>
                            <td>";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], "libelle", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], "quantite", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], "prixUnitaire", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], "codeBarre", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], "type", array()), "html", null, true);
            echo "</td>
                             <td><a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("gestion_stock_afficher_produit", array("code" => $this->getAttribute($context["tag"], "codeBarre", array()))), "html", null, true);
            echo "\"><button class=\"btn btn-info btn-xs\"><span class=\"glyphicon glyphicon-list\"></span></button></a></td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "                </tbody>
            </table>
        </div>
";
        
        $__internal_11c483c1e80999d8dd619059784bda63eca20d2a1d47bdc3b856c14be00b8990->leave($__internal_11c483c1e80999d8dd619059784bda63eca20d2a1d47bdc3b856c14be00b8990_prof);

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
        return array (  90 => 25,  81 => 22,  77 => 21,  73 => 20,  69 => 19,  65 => 18,  61 => 17,  58 => 16,  54 => 15,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends "GestionStockBundle::template.html.twig" %}*/
/* {% block contenu %}*/
/* 	 <div class="col-md-12" >*/
/*         <div class="table-responsive">*/
/*             <table id="mytable" class="table table-bordered ">*/
/*                 <thead>*/
/*                     <th>Libellé</th>*/
/*                     <th>Quantité</th>*/
/*                     <th>Prix Unitaire</th>*/
/*                     <th>Code Barre</th>*/
/*                     <th>Type</th>*/
/*                     <th></th>*/
/*                 </thead>*/
/*                 <tbody>*/
/*                     {% for tag in produits %}*/
/*                          <tr>*/
/*                             <td>{{ tag.libelle}}</td>*/
/*                             <td>{{ tag.quantite}}</td>*/
/*                             <td>{{ tag.prixUnitaire}}</td>*/
/*                             <td>{{ tag.codeBarre}}</td>*/
/*                             <td>{{ tag.type }}</td>*/
/*                              <td><a href="{{ path('gestion_stock_afficher_produit', {'code': tag.codeBarre}) }}"><button class="btn btn-info btn-xs"><span class="glyphicon glyphicon-list"></span></button></a></td>*/
/*                         </tr>*/
/*                     {% endfor %}*/
/*                 </tbody>*/
/*             </table>*/
/*         </div>*/
/* {% endblock%}*/
