<?php

/* PharmacieStockBundle:Stock:lister.html.twig */
class __TwigTemplate_a0d6f670b3dbac19fa7ea5571e4f18399b3b500d921e68fbb11a37cc0fe87d66 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PharmacieStockBundle:Stock:index.html.twig", "PharmacieStockBundle:Stock:lister.html.twig", 1);
        $this->blocks = array(
            'main' => array($this, 'block_main'),
            'table' => array($this, 'block_table'),
            'reste' => array($this, 'block_reste'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PharmacieStockBundle:Stock:index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7e795115990455a12b7ece3cac66ca408e94b20a83cf4ac0302358e42c0573d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e795115990455a12b7ece3cac66ca408e94b20a83cf4ac0302358e42c0573d1->enter($__internal_7e795115990455a12b7ece3cac66ca408e94b20a83cf4ac0302358e42c0573d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PharmacieStockBundle:Stock:lister.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7e795115990455a12b7ece3cac66ca408e94b20a83cf4ac0302358e42c0573d1->leave($__internal_7e795115990455a12b7ece3cac66ca408e94b20a83cf4ac0302358e42c0573d1_prof);

    }

    // line 2
    public function block_main($context, array $blocks = array())
    {
        $__internal_9467ca96b5044b228eabbd3e0a537b807470d550e89713a2daff72ad0f7db242 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9467ca96b5044b228eabbd3e0a537b807470d550e89713a2daff72ad0f7db242->enter($__internal_9467ca96b5044b228eabbd3e0a537b807470d550e89713a2daff72ad0f7db242_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 3
        echo "    <center><h4 class=\"alert alert-success\">Gestion du stock de médicaments de votre pharmacie</h4></center>
    <hr class=\"colorgraph\">
    <div class=\"row\">
       <div class=\"col-md-9\" >
        ";
        // line 7
        $this->displayBlock('table', $context, $blocks);
        // line 40
        echo "        </div>
        <div class=\"col-md-3\">
            <center><h4 class=\"panel-heading alert-danger\">Actions à effectuer</h4></center>
            <hr class=\"colorgraph\">
            <ul class=\"list-group\">
                <li class=\"list-group-item\">
                    <a href=\"";
        // line 46
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gestion_stockage_ajouter_stock");
        echo "\"><button type=\"button\" class=\"btn btn-success btn-block\"><span class=\"glyphicon glyphicon-list\"></span> Ajout Nouveau stock</button></a>
                </li>
                <li class=\"list-group-item\">
                    <a href=\"";
        // line 49
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gestion_stock_stock_statistiques");
        echo "\"><button type=\"button\" class=\"btn btn-primary btn-block\"><span class=\"glyphicon glyphicon-edit\"></span> Statistiques</button></a>
                </li>
                <li class=\"list-group-item\">
                    <a href=\"";
        // line 52
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gestion_stockage_lister_stock");
        echo "\"><button type=\"button\" class=\"btn btn-danger btn-block\"><span class=\"glyphicon glyphicon-list\"></span> Liste des stocks </button></a>
                </li>
            </ul>
        </div>
    </div>

    ";
        // line 58
        $this->displayBlock('reste', $context, $blocks);
        
        $__internal_9467ca96b5044b228eabbd3e0a537b807470d550e89713a2daff72ad0f7db242->leave($__internal_9467ca96b5044b228eabbd3e0a537b807470d550e89713a2daff72ad0f7db242_prof);

    }

    // line 7
    public function block_table($context, array $blocks = array())
    {
        $__internal_45c8a52e4293eedb9a1de6e4bc68f444ee404c40fa7d98a7255e5155305180a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45c8a52e4293eedb9a1de6e4bc68f444ee404c40fa7d98a7255e5155305180a9->enter($__internal_45c8a52e4293eedb9a1de6e4bc68f444ee404c40fa7d98a7255e5155305180a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "table"));

        // line 8
        echo "        <center><h4 class=\"panel-heading alert-danger\">Listes des médicaments existants</h4></center>
            <hr class=\"colorgraph\">
        <div class=\"table-responsive\">
            <table id=\"mytable\" class=\"table table-bordered \">
                <thead>
                    <th>Réference</th>
                    <th>Libellé Produit</th>
                    <th>Quantité</th>
                    <th>Catégorie</th>
                    <th>Description</th>
                    <th>Fonctions</th>
                </thead>
                <tbody>
                    ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["stocks"]) ? $context["stocks"] : $this->getContext($context, "stocks")));
        foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
            // line 22
            echo "                         <tr>
                            <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], "reference", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], "libelle", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], "quantite", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], "categorie", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], "description", array()), "html", null, true);
            echo "</td>
                            <td>
                            <a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gestion_stockage_afficher_stock", array("id" => $this->getAttribute($context["tag"], "id", array()))), "html", null, true);
            echo "\"><button class=\"btn btn-info btn-xs\"><span class=\"glyphicon glyphicon-list\"></span></button></a>
                            <a href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gestion_stockage_modifier_stock", array("id" => $this->getAttribute($context["tag"], "id", array()))), "html", null, true);
            echo "\"><button class=\"btn btn-success btn-xs\"><span class=\"glyphicon glyphicon-edit\"></span></button></a>
                            <a href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gestion_stockage_supprimer_stock", array("id" => $this->getAttribute($context["tag"], "id", array()))), "html", null, true);
            echo "\" data-confirm=\"Vous êtes sur le point de supprimer le médicament ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], "libelle", array()), "html", null, true);
            echo " du stock. Etes-vous sûr de bien vouloir effectué cette opération ?\"><button class=\"btn btn-danger btn-xs\"><span class=\"glyphicon glyphicon-trash\"></span></button></a>
                            </td>
                            
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "                </tbody>
            </table>
        </div>
        ";
        
        $__internal_45c8a52e4293eedb9a1de6e4bc68f444ee404c40fa7d98a7255e5155305180a9->leave($__internal_45c8a52e4293eedb9a1de6e4bc68f444ee404c40fa7d98a7255e5155305180a9_prof);

    }

    // line 58
    public function block_reste($context, array $blocks = array())
    {
        $__internal_fcb70d57e04ec93510e30c4ac732486643b45446879653dccfb196a1d9c7aa2d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fcb70d57e04ec93510e30c4ac732486643b45446879653dccfb196a1d9c7aa2d->enter($__internal_fcb70d57e04ec93510e30c4ac732486643b45446879653dccfb196a1d9c7aa2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reste"));

        // line 59
        echo "    <div class=\"row\">
        <div class=\"col-md-3\">
            <a href=\"";
        // line 61
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gestion_stock_ajouter_produit");
        echo "\"><button type=\"button\" class=\"btn btn-warning\"><span class=\"glyphicon glyphicon-plus\"></span> Ajouter article</button></a>
        </div>
    </div>
    <br/><br/><br/>
    ";
        
        $__internal_fcb70d57e04ec93510e30c4ac732486643b45446879653dccfb196a1d9c7aa2d->leave($__internal_fcb70d57e04ec93510e30c4ac732486643b45446879653dccfb196a1d9c7aa2d_prof);

    }

    public function getTemplateName()
    {
        return "PharmacieStockBundle:Stock:lister.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  176 => 61,  172 => 59,  166 => 58,  156 => 36,  143 => 31,  139 => 30,  135 => 29,  130 => 27,  126 => 26,  122 => 25,  118 => 24,  114 => 23,  111 => 22,  107 => 21,  92 => 8,  86 => 7,  79 => 58,  70 => 52,  64 => 49,  58 => 46,  50 => 40,  48 => 7,  42 => 3,  36 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"PharmacieStockBundle:Stock:index.html.twig\" %}
{% block main %}
    <center><h4 class=\"alert alert-success\">Gestion du stock de médicaments de votre pharmacie</h4></center>
    <hr class=\"colorgraph\">
    <div class=\"row\">
       <div class=\"col-md-9\" >
        {% block table %}
        <center><h4 class=\"panel-heading alert-danger\">Listes des médicaments existants</h4></center>
            <hr class=\"colorgraph\">
        <div class=\"table-responsive\">
            <table id=\"mytable\" class=\"table table-bordered \">
                <thead>
                    <th>Réference</th>
                    <th>Libellé Produit</th>
                    <th>Quantité</th>
                    <th>Catégorie</th>
                    <th>Description</th>
                    <th>Fonctions</th>
                </thead>
                <tbody>
                    {% for tag in stocks %}
                         <tr>
                            <td>{{ tag.reference }}</td>
                            <td>{{ tag.libelle }}</td>
                            <td>{{ tag.quantite }}</td>
                            <td>{{ tag.categorie }}</td>
                            <td>{{ tag.description }}</td>
                            <td>
                            <a href=\"{{ path('gestion_stockage_afficher_stock', {'id': tag.id }) }}\"><button class=\"btn btn-info btn-xs\"><span class=\"glyphicon glyphicon-list\"></span></button></a>
                            <a href=\"{{ path('gestion_stockage_modifier_stock', {'id': tag.id }) }}\"><button class=\"btn btn-success btn-xs\"><span class=\"glyphicon glyphicon-edit\"></span></button></a>
                            <a href=\"{{ path('gestion_stockage_supprimer_stock', {'id': tag.id }) }}\" data-confirm=\"Vous êtes sur le point de supprimer le médicament {{tag.libelle }} du stock. Etes-vous sûr de bien vouloir effectué cette opération ?\"><button class=\"btn btn-danger btn-xs\"><span class=\"glyphicon glyphicon-trash\"></span></button></a>
                            </td>
                            
                        </tr>
                    {% endfor %}
                </tbody>
            </table>
        </div>
        {% endblock%}
        </div>
        <div class=\"col-md-3\">
            <center><h4 class=\"panel-heading alert-danger\">Actions à effectuer</h4></center>
            <hr class=\"colorgraph\">
            <ul class=\"list-group\">
                <li class=\"list-group-item\">
                    <a href=\"{{ path('gestion_stockage_ajouter_stock')}}\"><button type=\"button\" class=\"btn btn-success btn-block\"><span class=\"glyphicon glyphicon-list\"></span> Ajout Nouveau stock</button></a>
                </li>
                <li class=\"list-group-item\">
                    <a href=\"{{ path('gestion_stock_stock_statistiques')}}\"><button type=\"button\" class=\"btn btn-primary btn-block\"><span class=\"glyphicon glyphicon-edit\"></span> Statistiques</button></a>
                </li>
                <li class=\"list-group-item\">
                    <a href=\"{{ path('gestion_stockage_lister_stock')}}\"><button type=\"button\" class=\"btn btn-danger btn-block\"><span class=\"glyphicon glyphicon-list\"></span> Liste des stocks </button></a>
                </li>
            </ul>
        </div>
    </div>

    {% block reste %}
    <div class=\"row\">
        <div class=\"col-md-3\">
            <a href=\"{{ path('gestion_stock_ajouter_produit')}}\"><button type=\"button\" class=\"btn btn-warning\"><span class=\"glyphicon glyphicon-plus\"></span> Ajouter article</button></a>
        </div>
    </div>
    <br/><br/><br/>
    {% endblock %}
{% endblock%}", "PharmacieStockBundle:Stock:lister.html.twig", "/home/abdoulaye/workspace/workflows/progestix/progestix/app/src/Pharmacie/StockBundle/Resources/views/Stock/lister.html.twig");
    }
}
