<?php

/* PharmacieStockBundle:Categorie:lister.html.twig */
class __TwigTemplate_2728d3d10c720c602b0548479c06aae0a62aab365aa34ab19a0d425d0c7a3233 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PharmacieStockBundle:Categorie:index.html.twig", "PharmacieStockBundle:Categorie:lister.html.twig", 1);
        $this->blocks = array(
            'main' => array($this, 'block_main'),
            'table' => array($this, 'block_table'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PharmacieStockBundle:Categorie:index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_979114e15130999f476abede50ccedb9a2150ef957550223fd64bc1be9c6c2c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_979114e15130999f476abede50ccedb9a2150ef957550223fd64bc1be9c6c2c9->enter($__internal_979114e15130999f476abede50ccedb9a2150ef957550223fd64bc1be9c6c2c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PharmacieStockBundle:Categorie:lister.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_979114e15130999f476abede50ccedb9a2150ef957550223fd64bc1be9c6c2c9->leave($__internal_979114e15130999f476abede50ccedb9a2150ef957550223fd64bc1be9c6c2c9_prof);

    }

    // line 2
    public function block_main($context, array $blocks = array())
    {
        $__internal_59aa22de1b1c0390782da32f08a031076d8b042724f09cea8ca623ec7f08aee9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59aa22de1b1c0390782da32f08a031076d8b042724f09cea8ca623ec7f08aee9->enter($__internal_59aa22de1b1c0390782da32f08a031076d8b042724f09cea8ca623ec7f08aee9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 3
        echo "
\t<center><h4 class=\"alert alert-success\">Gestion des catégories de médicaments de votre pharmacie</h4></center>
    <hr class=\"colorgraph\">
    <div class=\"row\">
    <div class=\"col-md-9\" >
    \t";
        // line 8
        $this->displayBlock('table', $context, $blocks);
        // line 38
        echo "        </div>
        <div class=\"col-md-3\">
        \t<center><h4 class=\"panel-heading alert-danger\">Actions à effectuer</h4></center>
            <hr class=\"colorgraph\">
            <ul class=\"list-group\">
        \t\t<li class=\"list-group-item\">
            \t\t<a href=\"";
        // line 44
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gestion_stock_categorie_ajouter");
        echo "\"><button type=\"button\" class=\"btn btn-success btn-block\"><span class=\"glyphicon glyphicon-list\"></span> Ajout Nouvelle catégorie</button></a>
            \t</li>
\t        \t<li class=\"list-group-item\">
\t        \t\t<a href=\"";
        // line 47
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gestion_stock_categorie_statistiques");
        echo "\"><button type=\"button\" class=\"btn btn-primary btn-block\"><span class=\"glyphicon glyphicon-edit\"></span> Statistiques</button>
\t        \t</li>
\t        \t<li class=\"list-group-item\">
            \t\t<a href=\"";
        // line 50
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gestion_stock_categorie_lister");
        echo "\"><button type=\"button\" class=\"btn btn-danger btn-block\"><span class=\"glyphicon glyphicon-list\"></span> Liste des catégories</button></a>
            \t</li>
\t        </ul>
        </div>
        </div>
    </div>
    <br/><br/><br/>
 \t
";
        
        $__internal_59aa22de1b1c0390782da32f08a031076d8b042724f09cea8ca623ec7f08aee9->leave($__internal_59aa22de1b1c0390782da32f08a031076d8b042724f09cea8ca623ec7f08aee9_prof);

    }

    // line 8
    public function block_table($context, array $blocks = array())
    {
        $__internal_f961ef678468d3f0daca31724deb36c9316aa41fb9fb6b771798d055a5db70aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f961ef678468d3f0daca31724deb36c9316aa41fb9fb6b771798d055a5db70aa->enter($__internal_f961ef678468d3f0daca31724deb36c9316aa41fb9fb6b771798d055a5db70aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "table"));

        // line 9
        echo "    \t<center><h4 class=\"panel-heading alert-danger\">Listes des catégories existantes</h4></center>
            <hr class=\"colorgraph\">
        <div class=\"table-responsive\">
            <table id=\"mytable\" class=\"table table-bordered\">
                <thead>
                    <th>ID</th>
                    <th>Libellé</th>
                    <th>Description</th>
                    <th>Fonctions</th>
                </thead>
                <tbody>
                    ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : $this->getContext($context, "categories")));
        foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
            // line 21
            echo "                         <tr>
                            <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], "id", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], "libelle", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], "description", array()), "html", null, true);
            echo "</td>
                            <td>
                            \t<a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gestion_stock_categorie_modifier", array("id" => $this->getAttribute($context["tag"], "id", array()))), "html", null, true);
            echo "\"><button class=\"btn btn-success btn-xs\"><span class=\"glyphicon glyphicon-edit\"></span></button></a>

                                <a href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gestion_stock_categorie_produit", array("id" => $this->getAttribute($context["tag"], "id", array()))), "html", null, true);
            echo "\"><button class=\"btn btn-info btn-xs\"><span class=\"glyphicon glyphicon-eye-open\"></span></button></a>

                            \t<a href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gestion_stock_categorie_supprimer", array("id" => $this->getAttribute($context["tag"], "id", array()))), "html", null, true);
            echo "\" data-confirm=\"Vous êtes sur le point de supprimer la catégorie ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], "libelle", array()), "html", null, true);
            echo ". Etes-vous sûr de bien vouloir effectué cette opération ?\"><button class=\"btn btn-danger btn-xs\"><span class=\"glyphicon glyphicon-trash\"></span></button></a>
                            </td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "                </tbody>
            </table>
        </div>
        ";
        
        $__internal_f961ef678468d3f0daca31724deb36c9316aa41fb9fb6b771798d055a5db70aa->leave($__internal_f961ef678468d3f0daca31724deb36c9316aa41fb9fb6b771798d055a5db70aa_prof);

    }

    public function getTemplateName()
    {
        return "PharmacieStockBundle:Categorie:lister.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 34,  135 => 30,  130 => 28,  125 => 26,  120 => 24,  116 => 23,  112 => 22,  109 => 21,  105 => 20,  92 => 9,  86 => 8,  70 => 50,  64 => 47,  58 => 44,  50 => 38,  48 => 8,  41 => 3,  35 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"PharmacieStockBundle:Categorie:index.html.twig\" %}
{% block main %}

\t<center><h4 class=\"alert alert-success\">Gestion des catégories de médicaments de votre pharmacie</h4></center>
    <hr class=\"colorgraph\">
    <div class=\"row\">
    <div class=\"col-md-9\" >
    \t{% block table %}
    \t<center><h4 class=\"panel-heading alert-danger\">Listes des catégories existantes</h4></center>
            <hr class=\"colorgraph\">
        <div class=\"table-responsive\">
            <table id=\"mytable\" class=\"table table-bordered\">
                <thead>
                    <th>ID</th>
                    <th>Libellé</th>
                    <th>Description</th>
                    <th>Fonctions</th>
                </thead>
                <tbody>
                    {% for tag in categories %}
                         <tr>
                            <td>{{ tag.id}}</td>
                            <td>{{ tag.libelle}}</td>
                            <td>{{ tag.description}}</td>
                            <td>
                            \t<a href=\"{{ path('gestion_stock_categorie_modifier', { 'id': tag.id }) }}\"><button class=\"btn btn-success btn-xs\"><span class=\"glyphicon glyphicon-edit\"></span></button></a>

                                <a href=\"{{ path('gestion_stock_categorie_produit', { 'id': tag.id }) }}\"><button class=\"btn btn-info btn-xs\"><span class=\"glyphicon glyphicon-eye-open\"></span></button></a>

                            \t<a href=\"{{ path('gestion_stock_categorie_supprimer', { 'id': tag.id }) }}\" data-confirm=\"Vous êtes sur le point de supprimer la catégorie {{tag.libelle}}. Etes-vous sûr de bien vouloir effectué cette opération ?\"><button class=\"btn btn-danger btn-xs\"><span class=\"glyphicon glyphicon-trash\"></span></button></a>
                            </td>
                        </tr>
                    {% endfor %}
                </tbody>
            </table>
        </div>
        {% endblock %}
        </div>
        <div class=\"col-md-3\">
        \t<center><h4 class=\"panel-heading alert-danger\">Actions à effectuer</h4></center>
            <hr class=\"colorgraph\">
            <ul class=\"list-group\">
        \t\t<li class=\"list-group-item\">
            \t\t<a href=\"{{ path('gestion_stock_categorie_ajouter')}}\"><button type=\"button\" class=\"btn btn-success btn-block\"><span class=\"glyphicon glyphicon-list\"></span> Ajout Nouvelle catégorie</button></a>
            \t</li>
\t        \t<li class=\"list-group-item\">
\t        \t\t<a href=\"{{ path('gestion_stock_categorie_statistiques')}}\"><button type=\"button\" class=\"btn btn-primary btn-block\"><span class=\"glyphicon glyphicon-edit\"></span> Statistiques</button>
\t        \t</li>
\t        \t<li class=\"list-group-item\">
            \t\t<a href=\"{{ path('gestion_stock_categorie_lister')}}\"><button type=\"button\" class=\"btn btn-danger btn-block\"><span class=\"glyphicon glyphicon-list\"></span> Liste des catégories</button></a>
            \t</li>
\t        </ul>
        </div>
        </div>
    </div>
    <br/><br/><br/>
 \t
{% endblock %}
", "PharmacieStockBundle:Categorie:lister.html.twig", "/home/abdoulaye/workspace/workflows/progestix/progestix/app/src/Pharmacie/StockBundle/Resources/views/Categorie/lister.html.twig");
    }
}
