<?php

/* PharmacieStockBundle:Stock:statistiques.html.twig */
class __TwigTemplate_9d7b250bbb2ca9901cd446887340b681f6f17ed650272109094d1adb2b7a0dc4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PharmacieStockBundle:Stock:lister.html.twig", "PharmacieStockBundle:Stock:statistiques.html.twig", 1);
        $this->blocks = array(
            'table' => array($this, 'block_table'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PharmacieStockBundle:Stock:lister.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ab287c4510ecd15b6a895f15d363e008ca5b77e8b09238d31912865847ab6037 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab287c4510ecd15b6a895f15d363e008ca5b77e8b09238d31912865847ab6037->enter($__internal_ab287c4510ecd15b6a895f15d363e008ca5b77e8b09238d31912865847ab6037_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PharmacieStockBundle:Stock:statistiques.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ab287c4510ecd15b6a895f15d363e008ca5b77e8b09238d31912865847ab6037->leave($__internal_ab287c4510ecd15b6a895f15d363e008ca5b77e8b09238d31912865847ab6037_prof);

    }

    // line 2
    public function block_table($context, array $blocks = array())
    {
        $__internal_4c8ab0c73388f482df798df475f1cec924b0b55f250fa99d628d32efae5e784a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c8ab0c73388f482df798df475f1cec924b0b55f250fa99d628d32efae5e784a->enter($__internal_4c8ab0c73388f482df798df475f1cec924b0b55f250fa99d628d32efae5e784a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "table"));

        // line 3
        echo "<center><h4 class=\"panel-heading alert-danger\">Statistiques du stock</h4></center>
            <hr class=\"colorgraph\">
        <div class=\"table-responsive\">
            <table id=\"mytable\" class=\"table table-bordered\">
                <thead>
                    <th>Produit</th>
                    <th>Nombre total articles</th>
                    <th>Estimation coût (F CFA)</th>
                    <th>Graphes</th>
                    <th></th>
                </thead>
                <tbody>
                    ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["stocks"]) ? $context["stocks"] : $this->getContext($context, "stocks")));
        foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
            // line 16
            echo "                         <tr>
                            <td>";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], "produit", array()), "html", null, true);
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
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gestion_stockage_afficher_stock", array("id" => $this->getAttribute($context["tag"], "id", array()))), "html", null, true);
            echo "\"><button class=\"btn btn-info btn-xs\"><span class=\"glyphicon glyphicon-list\"></span></button></a>
                                <a href=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gestion_stockage_modifier_stock", array("id" => $this->getAttribute($context["tag"], "id", array()))), "html", null, true);
            echo "\"><button class=\"btn btn-success btn-xs\"><span class=\"glyphicon glyphicon-edit\"></span></button></a>
                                <a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gestion_stockage_supprimer_stock", array("id" => $this->getAttribute($context["tag"], "id", array()))), "html", null, true);
            echo "\" data-confirm=\"Vous êtes sur le point de supprimer le médicament ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], "produit", array()), "html", null, true);
            echo " du stock. Etes-vous sûr de bien vouloir effectué cette opération ?\"><button class=\"btn btn-danger btn-xs\"><span class=\"glyphicon glyphicon-trash\"></span></button></a>
                            </td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "                </tbody>
            </table>
        </div>

        <br/><br/><br/>

";
        
        $__internal_4c8ab0c73388f482df798df475f1cec924b0b55f250fa99d628d32efae5e784a->leave($__internal_4c8ab0c73388f482df798df475f1cec924b0b55f250fa99d628d32efae5e784a_prof);

    }

    public function getTemplateName()
    {
        return "PharmacieStockBundle:Stock:statistiques.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 28,  83 => 24,  79 => 23,  75 => 22,  69 => 19,  65 => 18,  61 => 17,  58 => 16,  54 => 15,  40 => 3,  34 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"PharmacieStockBundle:Stock:lister.html.twig\" %}
{% block table %}
<center><h4 class=\"panel-heading alert-danger\">Statistiques du stock</h4></center>
            <hr class=\"colorgraph\">
        <div class=\"table-responsive\">
            <table id=\"mytable\" class=\"table table-bordered\">
                <thead>
                    <th>Produit</th>
                    <th>Nombre total articles</th>
                    <th>Estimation coût (F CFA)</th>
                    <th>Graphes</th>
                    <th></th>
                </thead>
                <tbody>
                    {% for tag in stocks %}
                         <tr>
                            <td>{{ tag.produit }}</td>
                            <td>{{ tag.nb_produits }}</td>
                            <td>{{ tag.estimation_cout }}</td>
                            <td></td>
                            <td>
                                <a href=\"{{ path('gestion_stockage_afficher_stock', {'id': tag.id }) }}\"><button class=\"btn btn-info btn-xs\"><span class=\"glyphicon glyphicon-list\"></span></button></a>
                                <a href=\"{{ path('gestion_stockage_modifier_stock', {'id': tag.id }) }}\"><button class=\"btn btn-success btn-xs\"><span class=\"glyphicon glyphicon-edit\"></span></button></a>
                                <a href=\"{{ path('gestion_stockage_supprimer_stock', {'id': tag.id }) }}\" data-confirm=\"Vous êtes sur le point de supprimer le médicament {{tag.produit }} du stock. Etes-vous sûr de bien vouloir effectué cette opération ?\"><button class=\"btn btn-danger btn-xs\"><span class=\"glyphicon glyphicon-trash\"></span></button></a>
                            </td>
                        </tr>
                    {% endfor %}
                </tbody>
            </table>
        </div>

        <br/><br/><br/>

{% endblock %}

", "PharmacieStockBundle:Stock:statistiques.html.twig", "/home/abdoulaye/workspace/workflows/progestix/progestix/app/src/Pharmacie/StockBundle/Resources/views/Stock/statistiques.html.twig");
    }
}
