<?php

/* GestionInventaireBundle:modele:annuel.html.twig */
class __TwigTemplate_75b057533439e7f5ae4d700a45a7592b15d70576a5eac1140dd78d7402234669 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("GestionInventaireBundle::templateInventaire.html.twig", "GestionInventaireBundle:modele:annuel.html.twig", 1);
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
        $__internal_84ccd3a4ceaf5ef304c5acf18bf762c5b066ecadd5d560fdb035feb5eadb963d = $this->env->getExtension("native_profiler");
        $__internal_84ccd3a4ceaf5ef304c5acf18bf762c5b066ecadd5d560fdb035feb5eadb963d->enter($__internal_84ccd3a4ceaf5ef304c5acf18bf762c5b066ecadd5d560fdb035feb5eadb963d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GestionInventaireBundle:modele:annuel.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_84ccd3a4ceaf5ef304c5acf18bf762c5b066ecadd5d560fdb035feb5eadb963d->leave($__internal_84ccd3a4ceaf5ef304c5acf18bf762c5b066ecadd5d560fdb035feb5eadb963d_prof);

    }

    // line 3
    public function block_tableInventaire($context, array $blocks = array())
    {
        $__internal_d17adbc79335bdef7bb07acd88e0f8a43189539d9cbb2dab0c92c693c4de86b6 = $this->env->getExtension("native_profiler");
        $__internal_d17adbc79335bdef7bb07acd88e0f8a43189539d9cbb2dab0c92c693c4de86b6->enter($__internal_d17adbc79335bdef7bb07acd88e0f8a43189539d9cbb2dab0c92c693c4de86b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tableInventaire"));

        // line 4
        echo "
    <div class=\"tableauInventaire\"><table>
            <caption>Tableau Inventaire Annuel</caption>
            <thead>
                <tr>
                    <th>Produit</th>
                    <th>Quantité</th>
                    <th>Date de Péremption</th>
                    <th>header</th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th colspan=\"2\">Quantité total</th>
                    <th>Quantité</th>
                    <th>Date de Péremption</th>

                </tr>
            </tfoot>
            <tbody>
                <tr>
                    <td>data</td>
                    <td>data</td>
                    <td>data</td>
                    <td>data</td>
                </tr>
            </tbody>
        </table></div>
";
        
        $__internal_d17adbc79335bdef7bb07acd88e0f8a43189539d9cbb2dab0c92c693c4de86b6->leave($__internal_d17adbc79335bdef7bb07acd88e0f8a43189539d9cbb2dab0c92c693c4de86b6_prof);

    }

    public function getTemplateName()
    {
        return "GestionInventaireBundle:modele:annuel.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "GestionInventaireBundle::templateInventaire.html.twig" %}*/
/* */
/* {% block tableInventaire %}*/
/* */
/*     <div class="tableauInventaire"><table>*/
/*             <caption>Tableau Inventaire Annuel</caption>*/
/*             <thead>*/
/*                 <tr>*/
/*                     <th>Produit</th>*/
/*                     <th>Quantité</th>*/
/*                     <th>Date de Péremption</th>*/
/*                     <th>header</th>*/
/*                 </tr>*/
/*             </thead>*/
/*             <tfoot>*/
/*                 <tr>*/
/*                     <th colspan="2">Quantité total</th>*/
/*                     <th>Quantité</th>*/
/*                     <th>Date de Péremption</th>*/
/* */
/*                 </tr>*/
/*             </tfoot>*/
/*             <tbody>*/
/*                 <tr>*/
/*                     <td>data</td>*/
/*                     <td>data</td>*/
/*                     <td>data</td>*/
/*                     <td>data</td>*/
/*                 </tr>*/
/*             </tbody>*/
/*         </table></div>*/
/* {% endblock %}*/
