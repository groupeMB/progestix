<?php

/* GestionInventaireBundle:modele:peremption.html.twig */
class __TwigTemplate_7596b88763abee9848874bd552c9e4f5b5da5cc3bf7149956f90c0db6b7a2a26 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("GestionInventaireBundle::templateInventaire.html.twig", "GestionInventaireBundle:modele:peremption.html.twig", 1);
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
        $__internal_e0dca1ae16f418b33cbc7d09616aadda3582fc3397a1ad8871dd9c2c42d4294f = $this->env->getExtension("native_profiler");
        $__internal_e0dca1ae16f418b33cbc7d09616aadda3582fc3397a1ad8871dd9c2c42d4294f->enter($__internal_e0dca1ae16f418b33cbc7d09616aadda3582fc3397a1ad8871dd9c2c42d4294f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GestionInventaireBundle:modele:peremption.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e0dca1ae16f418b33cbc7d09616aadda3582fc3397a1ad8871dd9c2c42d4294f->leave($__internal_e0dca1ae16f418b33cbc7d09616aadda3582fc3397a1ad8871dd9c2c42d4294f_prof);

    }

    // line 3
    public function block_tableInventaire($context, array $blocks = array())
    {
        $__internal_df8d570517501e94c240db9c13e988a482280ac4b26cedbd23c56966a7704708 = $this->env->getExtension("native_profiler");
        $__internal_df8d570517501e94c240db9c13e988a482280ac4b26cedbd23c56966a7704708->enter($__internal_df8d570517501e94c240db9c13e988a482280ac4b26cedbd23c56966a7704708_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tableInventaire"));

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
";
        
        $__internal_df8d570517501e94c240db9c13e988a482280ac4b26cedbd23c56966a7704708->leave($__internal_df8d570517501e94c240db9c13e988a482280ac4b26cedbd23c56966a7704708_prof);

    }

    public function getTemplateName()
    {
        return "GestionInventaireBundle:modele:peremption.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 33,  85 => 30,  81 => 29,  77 => 28,  73 => 27,  69 => 26,  66 => 25,  62 => 24,  40 => 4,  34 => 3,  11 => 1,);
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
/* {% endblock %}*/
