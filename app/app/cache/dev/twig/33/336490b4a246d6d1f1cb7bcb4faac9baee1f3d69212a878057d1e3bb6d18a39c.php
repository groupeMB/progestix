<?php

/* GestionInventaireBundle:Rapports:rapportPeremption.html.twig */
class __TwigTemplate_f797106337ba88b0e989ac970f78d58b4b80c3d459f2d10eba928f2d70837e6a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("GestionInventaireBundle::templateInventaire.html.twig", "GestionInventaireBundle:Rapports:rapportPeremption.html.twig", 1);
        $this->blocks = array(
            'tableInventaire' => array($this, 'block_tableInventaire'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "GestionInventaireBundle::templateInventaire.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2cfd72ce5d37a58b85e0ea3ee0f543d6d3086319f335b595d2bb8295a3f922d4 = $this->env->getExtension("native_profiler");
        $__internal_2cfd72ce5d37a58b85e0ea3ee0f543d6d3086319f335b595d2bb8295a3f922d4->enter($__internal_2cfd72ce5d37a58b85e0ea3ee0f543d6d3086319f335b595d2bb8295a3f922d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GestionInventaireBundle:Rapports:rapportPeremption.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2cfd72ce5d37a58b85e0ea3ee0f543d6d3086319f335b595d2bb8295a3f922d4->leave($__internal_2cfd72ce5d37a58b85e0ea3ee0f543d6d3086319f335b595d2bb8295a3f922d4_prof);

    }

    // line 3
    public function block_tableInventaire($context, array $blocks = array())
    {
        $__internal_219b22a61e62a580834654421e3d919e6e7b6bcb3fd78248f5be510befe32a73 = $this->env->getExtension("native_profiler");
        $__internal_219b22a61e62a580834654421e3d919e6e7b6bcb3fd78248f5be510befe32a73->enter($__internal_219b22a61e62a580834654421e3d919e6e7b6bcb3fd78248f5be510befe32a73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tableInventaire"));

        // line 4
        echo "
    <div class=\"tableauInventaire\"><table>
            <caption>Tableau Inventaire Peremption</caption>
            <thead>
                <tr>
                    <th colspan=\"2\">Produit</th>
                    <th>Quantité</th>
                    <th>Date de Péremption</th>
                    <th>Prix</th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th colspan=\"3\">Quantité total</th>
                    <th>Quantité</th>
                    <th>Date de Péremption</th>

                </tr>
            </tfoot>
            <tbody>
            ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["produits"]) ? $context["produits"] : $this->getContext($context, "produits")));
        foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
            // line 25
            echo "                <tr>
                    <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], "libelle", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], "categorie", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], "codebarre", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 29
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["tag"], "datePeremption", array()), "m-d-Y"), "html", null, true);
            echo "</td>
                    <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], "prixunitaire", array()), "html", null, true);
            echo "</td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "            </tbody>
        </table></div>
    <br><br>
    <a href=";
        // line 36
        echo twig_escape_filter($this->env, ("download/pdf/" . (isset($context["filename"]) ? $context["filename"] : $this->getContext($context, "filename"))), "html", null, true);
        echo "><button class=\"btn btn-info btn-lg \"><span class=\"glyphicon glyphicon-plus\"></span> télécharger rapport en PDF</button></a>
    <a href=";
        // line 37
        echo "download/excel/";
        echo "><button class=\"btn btn-info btn-lg \"><span class=\"glyphicon glyphicon-plus\"></span> télécharger rapport en Excel</button></a>
";
        
        $__internal_219b22a61e62a580834654421e3d919e6e7b6bcb3fd78248f5be510befe32a73->leave($__internal_219b22a61e62a580834654421e3d919e6e7b6bcb3fd78248f5be510befe32a73_prof);

    }

    public function getTemplateName()
    {
        return "GestionInventaireBundle:Rapports:rapportPeremption.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 37,  99 => 36,  94 => 33,  85 => 30,  81 => 29,  77 => 28,  73 => 27,  69 => 26,  66 => 25,  62 => 24,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "GestionInventaireBundle::templateInventaire.html.twig" %}*/
/* */
/* {% block tableInventaire %}*/
/* */
/*     <div class="tableauInventaire"><table>*/
/*             <caption>Tableau Inventaire Peremption</caption>*/
/*             <thead>*/
/*                 <tr>*/
/*                     <th colspan="2">Produit</th>*/
/*                     <th>Quantité</th>*/
/*                     <th>Date de Péremption</th>*/
/*                     <th>Prix</th>*/
/*                 </tr>*/
/*             </thead>*/
/*             <tfoot>*/
/*                 <tr>*/
/*                     <th colspan="3">Quantité total</th>*/
/*                     <th>Quantité</th>*/
/*                     <th>Date de Péremption</th>*/
/* */
/*                 </tr>*/
/*             </tfoot>*/
/*             <tbody>*/
/*             {% for tag in produits %}*/
/*                 <tr>*/
/*                     <td>{{ tag.libelle}}</td>*/
/*                     <td>{{ tag.categorie }}</td>*/
/*                     <td>{{ tag.codebarre}}</td>*/
/*                     <td>{{ tag.datePeremption |date('m-d-Y')}}</td>*/
/*                     <td>{{ tag.prixunitaire}}</td>*/
/*                 </tr>*/
/*             {% endfor %}*/
/*             </tbody>*/
/*         </table></div>*/
/*     <br><br>*/
/*     <a href={{"download/pdf/" ~ filename}}><button class="btn btn-info btn-lg "><span class="glyphicon glyphicon-plus"></span> télécharger rapport en PDF</button></a>*/
/*     <a href={{"download/excel/"}}><button class="btn btn-info btn-lg "><span class="glyphicon glyphicon-plus"></span> télécharger rapport en Excel</button></a>*/
/* {% endblock %}*/
