<?php

/* GestionStockBundle:Stock:lister.html.twig */
class __TwigTemplate_b2efe4a9c7a3fc312677243892ec5a9b416eadaf71a68536dea70425014bff7c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("GestionStockBundle::template.html.twig", "GestionStockBundle:Stock:lister.html.twig", 1);
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
        $__internal_87eb1137ecc693e2a1dfc9077886b6e4bbd8c9cfdd1ed400dd185c2e0dbd916d = $this->env->getExtension("native_profiler");
        $__internal_87eb1137ecc693e2a1dfc9077886b6e4bbd8c9cfdd1ed400dd185c2e0dbd916d->enter($__internal_87eb1137ecc693e2a1dfc9077886b6e4bbd8c9cfdd1ed400dd185c2e0dbd916d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GestionStockBundle:Stock:lister.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_87eb1137ecc693e2a1dfc9077886b6e4bbd8c9cfdd1ed400dd185c2e0dbd916d->leave($__internal_87eb1137ecc693e2a1dfc9077886b6e4bbd8c9cfdd1ed400dd185c2e0dbd916d_prof);

    }

    // line 2
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_3ea9ba683dbc0be8971a03f36f6c1b7df569478798539d1851bca49924f3f1fa = $this->env->getExtension("native_profiler");
        $__internal_3ea9ba683dbc0be8971a03f36f6c1b7df569478798539d1851bca49924f3f1fa->enter($__internal_3ea9ba683dbc0be8971a03f36f6c1b7df569478798539d1851bca49924f3f1fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

        // line 3
        echo "\t <div class=\"col-md-12\" >
        <div class=\"table-responsive\">
            <table id=\"mytable\" class=\"table table-bordered \">
                <thead>
                    <th>Seuil Mininum</th>
                    <th>Quantité</th>
                    <th>Identifiant Produit</th>
                    
                    <th></th>
                </thead>
                <tbody>
                    ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["stocks"]) ? $context["stocks"] : $this->getContext($context, "stocks")));
        foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
            // line 15
            echo "                         <tr>
                            <td>";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], "seuilMin", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], "quantite", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], "produit", array()), "html", null, true);
            echo "</td>

                            <td>
                            <a href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("gestion_stockage_afficher_stock", array("id" => $this->getAttribute($context["tag"], "id", array()))), "html", null, true);
            echo "\"><button class=\"btn btn-info btn-xs\"><span class=\"glyphicon glyphicon-list\"></span></button></a>
                            <a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("gestion_stockage_modifier_stock", array("id" => $this->getAttribute($context["tag"], "id", array()))), "html", null, true);
            echo "\"><button class=\"btn btn-info btn-xs\"><span class=\"glyphicon glyphicon-edit\"></span></button></a>
                            <a href=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("gestion_stockage_supprimer_stock", array("id" => $this->getAttribute($context["tag"], "id", array()))), "html", null, true);
            echo "\"><button class=\"btn btn-info btn-xs\"><span class=\"glyphicon glyphicon-trash\"></span></button></a>
                            </td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "                </tbody>
            </table>
        </div>
";
        
        $__internal_3ea9ba683dbc0be8971a03f36f6c1b7df569478798539d1851bca49924f3f1fa->leave($__internal_3ea9ba683dbc0be8971a03f36f6c1b7df569478798539d1851bca49924f3f1fa_prof);

    }

    public function getTemplateName()
    {
        return "GestionStockBundle:Stock:lister.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 27,  82 => 23,  78 => 22,  74 => 21,  68 => 18,  64 => 17,  60 => 16,  57 => 15,  53 => 14,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/*     {% extends "GestionStockBundle::template.html.twig" %}*/
/* {% block contenu %}*/
/* 	 <div class="col-md-12" >*/
/*         <div class="table-responsive">*/
/*             <table id="mytable" class="table table-bordered ">*/
/*                 <thead>*/
/*                     <th>Seuil Mininum</th>*/
/*                     <th>Quantité</th>*/
/*                     <th>Identifiant Produit</th>*/
/*                     */
/*                     <th></th>*/
/*                 </thead>*/
/*                 <tbody>*/
/*                     {% for tag in stocks %}*/
/*                          <tr>*/
/*                             <td>{{ tag.seuilMin }}</td>*/
/*                             <td>{{ tag.quantite }}</td>*/
/*                             <td>{{ tag.produit }}</td>*/
/* */
/*                             <td>*/
/*                             <a href="{{ path('gestion_stockage_afficher_stock', {'id': tag.id }) }}"><button class="btn btn-info btn-xs"><span class="glyphicon glyphicon-list"></span></button></a>*/
/*                             <a href="{{ path('gestion_stockage_modifier_stock', {'id': tag.id }) }}"><button class="btn btn-info btn-xs"><span class="glyphicon glyphicon-edit"></span></button></a>*/
/*                             <a href="{{ path('gestion_stockage_supprimer_stock', {'id': tag.id }) }}"><button class="btn btn-info btn-xs"><span class="glyphicon glyphicon-trash"></span></button></a>*/
/*                             </td>*/
/*                         </tr>*/
/*                     {% endfor %}*/
/*                 </tbody>*/
/*             </table>*/
/*         </div>*/
/* {% endblock%}*/
