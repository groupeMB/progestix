<?php

/* PharmacieStockBundle:Stock:index.html.twig */
class __TwigTemplate_09fd4e9c14c7c605d9fc1149689998137a36aee7a143e4f84447987713772828 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PharmacieAccueilBundle:Template:template1.html.twig", "PharmacieStockBundle:Stock:index.html.twig", 1);
        $this->blocks = array(
            'contain_menu_left' => array($this, 'block_contain_menu_left'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PharmacieAccueilBundle:Template:template1.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_964c9c37fb66bff0b2da7e8e85c5a55348f4eb7dc3376004e0346a9b24bc473b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_964c9c37fb66bff0b2da7e8e85c5a55348f4eb7dc3376004e0346a9b24bc473b->enter($__internal_964c9c37fb66bff0b2da7e8e85c5a55348f4eb7dc3376004e0346a9b24bc473b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PharmacieStockBundle:Stock:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_964c9c37fb66bff0b2da7e8e85c5a55348f4eb7dc3376004e0346a9b24bc473b->leave($__internal_964c9c37fb66bff0b2da7e8e85c5a55348f4eb7dc3376004e0346a9b24bc473b_prof);

    }

    // line 2
    public function block_contain_menu_left($context, array $blocks = array())
    {
        $__internal_62da1b845a6f8af66cd78dbc74108ccdbbb6f0206600485f23509f2f2158aa53 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62da1b845a6f8af66cd78dbc74108ccdbbb6f0206600485f23509f2f2158aa53->enter($__internal_62da1b845a6f8af66cd78dbc74108ccdbbb6f0206600485f23509f2f2158aa53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contain_menu_left"));

        // line 3
        echo "\t<ul class=\"list-group\">
\t\t<li class=\"list-group-item alert-success\"><span class=\"btn-block\"><a href=\"";
        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gestion_stock_categorie_lister");
        echo "\"><span class=\"glyphicon glyphicon-book\"></span> Mes catégories</a></span></li>
\t\t<li class=\"list-group-item alert-success\"><span class=\"btn-block\"><a href=\"";
        // line 5
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gestion_stock_lister_produit");
        echo "\"><span class=\"glyphicon glyphicon-book\"></span> Mes produits</a></span></li>
\t\t<li class=\"list-group-item alert-success\"><span class=\"btn-block\"><a href=\"";
        // line 6
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gestion_stockage_lister_stock");
        echo "\"><span class=\"glyphicon glyphicon-book\"></span> Mes stocks</a></span></li>
\t</ul
";
        
        $__internal_62da1b845a6f8af66cd78dbc74108ccdbbb6f0206600485f23509f2f2158aa53->leave($__internal_62da1b845a6f8af66cd78dbc74108ccdbbb6f0206600485f23509f2f2158aa53_prof);

    }

    public function getTemplateName()
    {
        return "PharmacieStockBundle:Stock:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 6,  47 => 5,  43 => 4,  40 => 3,  34 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"PharmacieAccueilBundle:Template:template1.html.twig\" %}
{% block contain_menu_left %}
\t<ul class=\"list-group\">
\t\t<li class=\"list-group-item alert-success\"><span class=\"btn-block\"><a href=\"{{ path(\"gestion_stock_categorie_lister\")}}\"><span class=\"glyphicon glyphicon-book\"></span> Mes catégories</a></span></li>
\t\t<li class=\"list-group-item alert-success\"><span class=\"btn-block\"><a href=\"{{ path(\"gestion_stock_lister_produit\")}}\"><span class=\"glyphicon glyphicon-book\"></span> Mes produits</a></span></li>
\t\t<li class=\"list-group-item alert-success\"><span class=\"btn-block\"><a href=\"{{ path(\"gestion_stockage_lister_stock\")}}\"><span class=\"glyphicon glyphicon-book\"></span> Mes stocks</a></span></li>
\t</ul
{%endblock%}", "PharmacieStockBundle:Stock:index.html.twig", "/home/abdoulaye/workspace/workflows/progestix/progestix/app/src/Pharmacie/StockBundle/Resources/views/Stock/index.html.twig");
    }
}
