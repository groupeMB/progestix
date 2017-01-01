<?php

/* PharmacieStockBundle:Categorie:statistiques.html.twig */
class __TwigTemplate_b24a0a3785a219b93a94f0e131f2f421d089e4ff11c6ed12d0501771744fcc83 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PharmacieStockBundle:Categorie:lister.html.twig", "PharmacieStockBundle:Categorie:statistiques.html.twig", 1);
        $this->blocks = array(
            'table' => array($this, 'block_table'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PharmacieStockBundle:Categorie:lister.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a3340551a7e6a9ad500d4d113794a9a03b0bd652af3f63a263c725209dae3ecd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3340551a7e6a9ad500d4d113794a9a03b0bd652af3f63a263c725209dae3ecd->enter($__internal_a3340551a7e6a9ad500d4d113794a9a03b0bd652af3f63a263c725209dae3ecd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PharmacieStockBundle:Categorie:statistiques.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a3340551a7e6a9ad500d4d113794a9a03b0bd652af3f63a263c725209dae3ecd->leave($__internal_a3340551a7e6a9ad500d4d113794a9a03b0bd652af3f63a263c725209dae3ecd_prof);

    }

    // line 2
    public function block_table($context, array $blocks = array())
    {
        $__internal_4746cb5a5e24d75af469db68c20a171a95dcf7ca9e7610a69f69dbfc977b29fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4746cb5a5e24d75af469db68c20a171a95dcf7ca9e7610a69f69dbfc977b29fe->enter($__internal_4746cb5a5e24d75af469db68c20a171a95dcf7ca9e7610a69f69dbfc977b29fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "table"));

        // line 3
        echo "<center><h4 class=\"panel-heading alert-danger\">Statistiques catégorie</h4></center>
            <hr class=\"colorgraph\">
        <div class=\"table-responsive\">
            <table id=\"mytable\" class=\"table table-bordered\">
                <thead>
                    <th>Categorie</th>
                    <th>Nombre total produits</th>
                    <th>Estimation coût (F CFA)</th>
                    <th>Graphes</th>
                    <th></th>
                </thead>
                <tbody>
                    ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : $this->getContext($context, "categories")));
        foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
            // line 16
            echo "                         <tr>
                            <td>";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], "categorie", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], "nb_produits", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], "estimation_cout", array()), "html", null, true);
            echo "</td>
                            <td></td>
                            <td>
                                <a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gestion_stock_categorie_modifier", array("id" => $this->getAttribute($context["tag"], "id", array()))), "html", null, true);
            echo "\"><button class=\"btn btn-success btn-xs\"><span class=\"glyphicon glyphicon-edit\"></span></button></a>

                                <a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gestion_stock_categorie_produit", array("id" => $this->getAttribute($context["tag"], "id", array()))), "html", null, true);
            echo "\"><button class=\"btn btn-info btn-xs\"><span class=\"glyphicon glyphicon-eye-open\"></span></button></a>

                                <a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gestion_stock_categorie_supprimer", array("id" => $this->getAttribute($context["tag"], "id", array()))), "html", null, true);
            echo "\" data-confirm=\"Vous êtes sur le point de supprimer la catégorie ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], "categorie", array()), "html", null, true);
            echo ". Etes-vous sûr de bien vouloir effectué cette opération ?\"><button class=\"btn btn-danger btn-xs\"><span class=\"glyphicon glyphicon-trash\"></span></button></a>
                            </td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "                </tbody>
            </table>
        </div>

        <br/><br/><br/>
";
        
        $__internal_4746cb5a5e24d75af469db68c20a171a95dcf7ca9e7610a69f69dbfc977b29fe->leave($__internal_4746cb5a5e24d75af469db68c20a171a95dcf7ca9e7610a69f69dbfc977b29fe_prof);

    }

    public function getTemplateName()
    {
        return "PharmacieStockBundle:Categorie:statistiques.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 30,  85 => 26,  80 => 24,  75 => 22,  69 => 19,  65 => 18,  61 => 17,  58 => 16,  54 => 15,  40 => 3,  34 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"PharmacieStockBundle:Categorie:lister.html.twig\" %}
{% block table %}
<center><h4 class=\"panel-heading alert-danger\">Statistiques catégorie</h4></center>
            <hr class=\"colorgraph\">
        <div class=\"table-responsive\">
            <table id=\"mytable\" class=\"table table-bordered\">
                <thead>
                    <th>Categorie</th>
                    <th>Nombre total produits</th>
                    <th>Estimation coût (F CFA)</th>
                    <th>Graphes</th>
                    <th></th>
                </thead>
                <tbody>
                    {% for tag in categories %}
                         <tr>
                            <td>{{ tag.categorie }}</td>
                            <td>{{ tag.nb_produits }}</td>
                            <td>{{ tag.estimation_cout }}</td>
                            <td></td>
                            <td>
                                <a href=\"{{ path('gestion_stock_categorie_modifier', { 'id': tag.id }) }}\"><button class=\"btn btn-success btn-xs\"><span class=\"glyphicon glyphicon-edit\"></span></button></a>

                                <a href=\"{{ path('gestion_stock_categorie_produit', { 'id': tag.id }) }}\"><button class=\"btn btn-info btn-xs\"><span class=\"glyphicon glyphicon-eye-open\"></span></button></a>

                                <a href=\"{{ path('gestion_stock_categorie_supprimer', { 'id': tag.id }) }}\" data-confirm=\"Vous êtes sur le point de supprimer la catégorie {{tag.categorie }}. Etes-vous sûr de bien vouloir effectué cette opération ?\"><button class=\"btn btn-danger btn-xs\"><span class=\"glyphicon glyphicon-trash\"></span></button></a>
                            </td>
                        </tr>
                    {% endfor %}
                </tbody>
            </table>
        </div>

        <br/><br/><br/>
{% endblock %}

", "PharmacieStockBundle:Categorie:statistiques.html.twig", "/home/abdoulaye/workspace/workflows/progestix/progestix/app/src/Pharmacie/StockBundle/Resources/views/Categorie/statistiques.html.twig");
    }
}
