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
        $__internal_8b87d2cb7aea69a41e496541d23d6f4160556815de84316f1088257241d668c8 = $this->env->getExtension("native_profiler");
        $__internal_8b87d2cb7aea69a41e496541d23d6f4160556815de84316f1088257241d668c8->enter($__internal_8b87d2cb7aea69a41e496541d23d6f4160556815de84316f1088257241d668c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GestionStockBundle:Produit:lister.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8b87d2cb7aea69a41e496541d23d6f4160556815de84316f1088257241d668c8->leave($__internal_8b87d2cb7aea69a41e496541d23d6f4160556815de84316f1088257241d668c8_prof);

    }

    // line 2
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_0d87490ee7cc2ff363be33e31f2d537e3840fb445653c9641c4b6f8746426d10 = $this->env->getExtension("native_profiler");
        $__internal_0d87490ee7cc2ff363be33e31f2d537e3840fb445653c9641c4b6f8746426d10->enter($__internal_0d87490ee7cc2ff363be33e31f2d537e3840fb445653c9641c4b6f8746426d10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

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
        
        $__internal_0d87490ee7cc2ff363be33e31f2d537e3840fb445653c9641c4b6f8746426d10->leave($__internal_0d87490ee7cc2ff363be33e31f2d537e3840fb445653c9641c4b6f8746426d10_prof);

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
