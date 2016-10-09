<?php

/* GestionInventaireBundle:Inventaire:lister.html.twig */
class __TwigTemplate_b558a83b5208955afa6959c34e515169485642bf0fb8fec248b3dc9979a0697a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("GestionInventaireBundle::template.html.twig", "GestionInventaireBundle:Inventaire:lister.html.twig", 1);
        $this->blocks = array(
            'contenu' => array($this, 'block_contenu'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "GestionInventaireBundle::template.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_50d167a6fac00fae2e6cba9c85f18b98b4e96865a1752a5879683177894ead8b = $this->env->getExtension("native_profiler");
        $__internal_50d167a6fac00fae2e6cba9c85f18b98b4e96865a1752a5879683177894ead8b->enter($__internal_50d167a6fac00fae2e6cba9c85f18b98b4e96865a1752a5879683177894ead8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GestionInventaireBundle:Inventaire:lister.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_50d167a6fac00fae2e6cba9c85f18b98b4e96865a1752a5879683177894ead8b->leave($__internal_50d167a6fac00fae2e6cba9c85f18b98b4e96865a1752a5879683177894ead8b_prof);

    }

    // line 2
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_38364c205dec6e14b65205c28d75dd580ba3f980bf476bcee18a54a9a35faacb = $this->env->getExtension("native_profiler");
        $__internal_38364c205dec6e14b65205c28d75dd580ba3f980bf476bcee18a54a9a35faacb->enter($__internal_38364c205dec6e14b65205c28d75dd580ba3f980bf476bcee18a54a9a35faacb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

        // line 3
        echo "\t <div class=\"col-md-12\" >
    <a href=\"";
        // line 4
        echo $this->env->getExtension('routing')->getPath("gestion_inventaire_homepage");
        echo "\"><button class=\"btn btn-info btn-lg\"><span class=\"glyphicon glyphicon-plus\"></span> ajouter</button></a>
        <div class=\"table-responsive\">
            <table id=\"mytable\" class=\"table table-bordered\">
                <thead>
                    <th>Effectué le</th>
                    <th colspan=\"2\">période </th>
                    <th>Type d'inentaire</th>
                    <th colspan=\"2\">Actions</th>
                </thead>
                <tbody>
                    ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["types"]) ? $context["types"] : $this->getContext($context, "types")));
        foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
            // line 15
            echo "                        ";
            if (($this->getAttribute($context["tag"], "rapport", array()) != null)) {
                // line 16
                echo "                         <tr>
                            <td>";
                // line 17
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["tag"], "dateInventaire", array()), "Y-m-d h:s"), "html", null, true);
                echo "</td>
                            <td>";
                // line 18
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["tag"], "dateDebut", array()), "Y-m-d"), "html", null, true);
                echo "</td>
                             <td>";
                // line 19
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["tag"], "dateFin", array()), "Y-m-d"), "html", null, true);
                echo "</td>
                             <td>";
                // line 20
                echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], "typeInventaire", array()), "html", null, true);
                echo "</td>
                             <td>
                                 <a href=\"";
                // line 22
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("generer_pdf_inventaire", array("filename" => $this->getAttribute($context["tag"], "rapport", array()))), "html", null, true);
                echo "\"><button class=\"btn btn-info\"><span class=\"glyphicon glyphicon-download\"> télécharger Rapport</span></button></a>
                             </td>
                             <td>
                             <a href=\"";
                // line 25
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("gestion_inventaire_supprimer_type", array("id" => $this->getAttribute($context["tag"], "id", array()))), "html", null, true);
                echo "\"><button class=\"btn btn-warning\"><span class=\"glyphicon glyphicon-trash\"> Supprimer</span></button></a>
                             </td>
                        </tr>
                        ";
            }
            // line 29
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "                </tbody>
            </table>
        </div>
";
        
        $__internal_38364c205dec6e14b65205c28d75dd580ba3f980bf476bcee18a54a9a35faacb->leave($__internal_38364c205dec6e14b65205c28d75dd580ba3f980bf476bcee18a54a9a35faacb_prof);

    }

    public function getTemplateName()
    {
        return "GestionInventaireBundle:Inventaire:lister.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 30,  96 => 29,  89 => 25,  83 => 22,  78 => 20,  74 => 19,  70 => 18,  66 => 17,  63 => 16,  60 => 15,  56 => 14,  43 => 4,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends "GestionInventaireBundle::template.html.twig" %}*/
/* {% block contenu %}*/
/* 	 <div class="col-md-12" >*/
/*     <a href="{{ path('gestion_inventaire_homepage')}}"><button class="btn btn-info btn-lg"><span class="glyphicon glyphicon-plus"></span> ajouter</button></a>*/
/*         <div class="table-responsive">*/
/*             <table id="mytable" class="table table-bordered">*/
/*                 <thead>*/
/*                     <th>Effectué le</th>*/
/*                     <th colspan="2">période </th>*/
/*                     <th>Type d'inentaire</th>*/
/*                     <th colspan="2">Actions</th>*/
/*                 </thead>*/
/*                 <tbody>*/
/*                     {% for tag in types %}*/
/*                         {% if tag.rapport != null %}*/
/*                          <tr>*/
/*                             <td>{{ tag.dateInventaire|date('Y-m-d h:s') }}</td>*/
/*                             <td>{{ tag.dateDebut|date('Y-m-d') }}</td>*/
/*                              <td>{{ tag.dateFin|date('Y-m-d') }}</td>*/
/*                              <td>{{ tag.typeInventaire }}</td>*/
/*                              <td>*/
/*                                  <a href="{{ path('generer_pdf_inventaire', {'filename': tag.rapport}) }}"><button class="btn btn-info"><span class="glyphicon glyphicon-download"> télécharger Rapport</span></button></a>*/
/*                              </td>*/
/*                              <td>*/
/*                              <a href="{{ path('gestion_inventaire_supprimer_type', {'id': tag.id}) }}"><button class="btn btn-warning"><span class="glyphicon glyphicon-trash"> Supprimer</span></button></a>*/
/*                              </td>*/
/*                         </tr>*/
/*                         {% endif %}*/
/*                     {% endfor %}*/
/*                 </tbody>*/
/*             </table>*/
/*         </div>*/
/* {% endblock%}*/
