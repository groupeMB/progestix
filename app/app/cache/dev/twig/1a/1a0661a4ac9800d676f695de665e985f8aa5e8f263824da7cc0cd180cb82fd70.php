<?php

/* PharmacieStockBundle:Produit:lister.html.twig */
class __TwigTemplate_ecbc68f52d25b7c066e3db7fa0e3ec32c1751a53add9e1da2fb7578607a6dc75 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PharmacieStockBundle:Produit:index.html.twig", "PharmacieStockBundle:Produit:lister.html.twig", 1);
        $this->blocks = array(
            'main' => array($this, 'block_main'),
            'table' => array($this, 'block_table'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PharmacieStockBundle:Produit:index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_63987e674a791c3c85527e03162677af0eb43fee7996f2203a033ceff5c0cdff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63987e674a791c3c85527e03162677af0eb43fee7996f2203a033ceff5c0cdff->enter($__internal_63987e674a791c3c85527e03162677af0eb43fee7996f2203a033ceff5c0cdff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PharmacieStockBundle:Produit:lister.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_63987e674a791c3c85527e03162677af0eb43fee7996f2203a033ceff5c0cdff->leave($__internal_63987e674a791c3c85527e03162677af0eb43fee7996f2203a033ceff5c0cdff_prof);

    }

    // line 2
    public function block_main($context, array $blocks = array())
    {
        $__internal_e17a51df405546e40493c3243e58a99a12a81525e49e19e79bd5b3cd48a85cf2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e17a51df405546e40493c3243e58a99a12a81525e49e19e79bd5b3cd48a85cf2->enter($__internal_e17a51df405546e40493c3243e58a99a12a81525e49e19e79bd5b3cd48a85cf2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 3
        echo "    <center><h5 class=\"alert alert-success\">Rubrique Gestion des produits pharmaceutiques : Renseignez tous les produits que vous vendez au niveau de votre pharmacie</h5></center>
    <hr class=\"colorgraph\">

    <div class=\"row\">
       <div class=\"col-md-9\" >
        ";
        // line 8
        $this->displayBlock('table', $context, $blocks);
        // line 36
        echo "        </div>
        <div class=\"col-md-3\">
            <center><h5 class=\"panel-heading myheading\">Actions à effectuer</h5></center>
            <hr class=\"colorgraph\">
                <button class=\"btn-success btn-block sous-menu-item\"><a href=\"";
        // line 40
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gestion_stock_ajouter_produit");
        echo "\" class=\"\"><span class=\"glyphicon glyphicon-tags\"></span> Ajout Produit</a></button>
                </br>
               <button type=\"button\" class=\"btn-info btn-block sous-menu-item\"><a href=\"";
        // line 42
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gestion_stock_produit_statistiques");
        echo "\"><span class=\"glyphicon glyphicon-stats\"></span> Statistiques</a></button>
               </br>
                <button type=\"button\" class=\"btn-danger btn-block sous-menu-item\"><a href=\"";
        // line 44
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gestion_stock_lister_produit");
        echo "\"><span class=\"glyphicon glyphicon-list\"></span> Liste des produits</a></button>
        </div>
    </div>
";
        
        $__internal_e17a51df405546e40493c3243e58a99a12a81525e49e19e79bd5b3cd48a85cf2->leave($__internal_e17a51df405546e40493c3243e58a99a12a81525e49e19e79bd5b3cd48a85cf2_prof);

    }

    // line 8
    public function block_table($context, array $blocks = array())
    {
        $__internal_6c6a948997da62bca0668620ab47555ce2dc8e0b33d4096404338f5da3e57fdc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c6a948997da62bca0668620ab47555ce2dc8e0b33d4096404338f5da3e57fdc->enter($__internal_6c6a948997da62bca0668620ab47555ce2dc8e0b33d4096404338f5da3e57fdc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "table"));

        // line 9
        echo "        <div class=\"table-responsive\">
            <table id=\"mytable\" class=\"table table-bordered \">
                <thead>
                    <th>Code barre</th>
                    <th>Libellé</th>
                    <th>Prix unitaire</th>
                    <th>Date de peremption</th>
                    <th>Fonctions</th>
                </thead>
                <tbody>
                    ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["produits"]) ? $context["produits"] : $this->getContext($context, "produits")));
        foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
            // line 20
            echo "                         <tr>
                            <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], "codebarre", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], "libelle", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], "prixunitaire", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 24
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["tag"], "dateperemption", array()), "d-M-Y"), "html", null, true);
            echo "</td>
                            <td>
                             <a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gestion_stock_afficher_produit", array("code" => $this->getAttribute($context["tag"], "codebarre", array()))), "html", null, true);
            echo "\"><button class=\"btn btn-info btn-xs\"><span class=\"glyphicon glyphicon-list\"></span></button></a>
                             <a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gestion_stock_modifier_produit", array("codebarre" => $this->getAttribute($context["tag"], "codebarre", array()))), "html", null, true);
            echo "\"><button class=\"btn btn-success btn-xs\"><span class=\"glyphicon glyphicon-edit\"></span></button></a>
                             <a href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gestion_stock_supprimer_produit", array("codebarre" => $this->getAttribute($context["tag"], "codebarre", array()))), "html", null, true);
            echo "\" data-confirm=\"Vous êtes sur le point de supprimer le médicament ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], "libelle", array()), "html", null, true);
            echo ". Etes-vous sûr de bien vouloir effectué cette opération ?\"><button class=\"btn btn-danger btn-xs\"><span class=\"glyphicon glyphicon-trash\"></span></button></a>
                             </td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "                </tbody>
            </table>
        </div>
        ";
        
        $__internal_6c6a948997da62bca0668620ab47555ce2dc8e0b33d4096404338f5da3e57fdc->leave($__internal_6c6a948997da62bca0668620ab47555ce2dc8e0b33d4096404338f5da3e57fdc_prof);

    }

    public function getTemplateName()
    {
        return "PharmacieStockBundle:Produit:lister.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  139 => 32,  127 => 28,  123 => 27,  119 => 26,  114 => 24,  110 => 23,  106 => 22,  102 => 21,  99 => 20,  95 => 19,  83 => 9,  77 => 8,  66 => 44,  61 => 42,  56 => 40,  50 => 36,  48 => 8,  41 => 3,  35 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"PharmacieStockBundle:Produit:index.html.twig\" %}
{% block main %}
    <center><h5 class=\"alert alert-success\">Rubrique Gestion des produits pharmaceutiques : Renseignez tous les produits que vous vendez au niveau de votre pharmacie</h5></center>
    <hr class=\"colorgraph\">

    <div class=\"row\">
       <div class=\"col-md-9\" >
        {% block table %}
        <div class=\"table-responsive\">
            <table id=\"mytable\" class=\"table table-bordered \">
                <thead>
                    <th>Code barre</th>
                    <th>Libellé</th>
                    <th>Prix unitaire</th>
                    <th>Date de peremption</th>
                    <th>Fonctions</th>
                </thead>
                <tbody>
                    {% for tag in produits %}
                         <tr>
                            <td>{{ tag.codebarre }}</td>
                            <td>{{ tag.libelle }}</td>
                            <td>{{ tag.prixunitaire }}</td>
                            <td>{{ tag.dateperemption|date('d-M-Y') }}</td>
                            <td>
                             <a href=\"{{ path('gestion_stock_afficher_produit', {'code': tag.codebarre}) }}\"><button class=\"btn btn-info btn-xs\"><span class=\"glyphicon glyphicon-list\"></span></button></a>
                             <a href=\"{{ path('gestion_stock_modifier_produit', {'codebarre': tag.codebarre}) }}\"><button class=\"btn btn-success btn-xs\"><span class=\"glyphicon glyphicon-edit\"></span></button></a>
                             <a href=\"{{ path('gestion_stock_supprimer_produit', {'codebarre': tag.codebarre}) }}\" data-confirm=\"Vous êtes sur le point de supprimer le médicament {{tag.libelle }}. Etes-vous sûr de bien vouloir effectué cette opération ?\"><button class=\"btn btn-danger btn-xs\"><span class=\"glyphicon glyphicon-trash\"></span></button></a>
                             </td>
                        </tr>
                    {% endfor %}
                </tbody>
            </table>
        </div>
        {% endblock%}
        </div>
        <div class=\"col-md-3\">
            <center><h5 class=\"panel-heading myheading\">Actions à effectuer</h5></center>
            <hr class=\"colorgraph\">
                <button class=\"btn-success btn-block sous-menu-item\"><a href=\"{{ path('gestion_stock_ajouter_produit')}}\" class=\"\"><span class=\"glyphicon glyphicon-tags\"></span> Ajout Produit</a></button>
                </br>
               <button type=\"button\" class=\"btn-info btn-block sous-menu-item\"><a href=\"{{ path('gestion_stock_produit_statistiques')}}\"><span class=\"glyphicon glyphicon-stats\"></span> Statistiques</a></button>
               </br>
                <button type=\"button\" class=\"btn-danger btn-block sous-menu-item\"><a href=\"{{ path('gestion_stock_lister_produit')}}\"><span class=\"glyphicon glyphicon-list\"></span> Liste des produits</a></button>
        </div>
    </div>
{% endblock%}", "PharmacieStockBundle:Produit:lister.html.twig", "/home/abdoulaye/workspace/workflows/progestix/progestix/app/src/Pharmacie/StockBundle/Resources/views/Produit/lister.html.twig");
    }
}
