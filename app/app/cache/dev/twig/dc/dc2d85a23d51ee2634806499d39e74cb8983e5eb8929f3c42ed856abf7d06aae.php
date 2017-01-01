<?php

/* PharmacieStockBundle:Produit:index.html.twig */
class __TwigTemplate_5235253cd9cce6824ae87c19b35ad8120d4ce1388235c89408548d49ff71c0b2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PharmacieAccueilBundle:Template:template1.html.twig", "PharmacieStockBundle:Produit:index.html.twig", 1);
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
        $__internal_631b890c5836a1fad5460dda5308156ba296593d46ef9e288c4f7ff20d924945 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_631b890c5836a1fad5460dda5308156ba296593d46ef9e288c4f7ff20d924945->enter($__internal_631b890c5836a1fad5460dda5308156ba296593d46ef9e288c4f7ff20d924945_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PharmacieStockBundle:Produit:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_631b890c5836a1fad5460dda5308156ba296593d46ef9e288c4f7ff20d924945->leave($__internal_631b890c5836a1fad5460dda5308156ba296593d46ef9e288c4f7ff20d924945_prof);

    }

    // line 2
    public function block_contain_menu_left($context, array $blocks = array())
    {
        $__internal_da78eca31d836115af7ba2c99ae47c198bbd476ae7dfcd8c882382a58243be61 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da78eca31d836115af7ba2c99ae47c198bbd476ae7dfcd8c882382a58243be61->enter($__internal_da78eca31d836115af7ba2c99ae47c198bbd476ae7dfcd8c882382a58243be61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contain_menu_left"));

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
        
        $__internal_da78eca31d836115af7ba2c99ae47c198bbd476ae7dfcd8c882382a58243be61->leave($__internal_da78eca31d836115af7ba2c99ae47c198bbd476ae7dfcd8c882382a58243be61_prof);

    }

    public function getTemplateName()
    {
        return "PharmacieStockBundle:Produit:index.html.twig";
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
{%endblock%}", "PharmacieStockBundle:Produit:index.html.twig", "/home/abdoulaye/workspace/workflows/progestix/progestix/app/src/Pharmacie/StockBundle/Resources/views/Produit/index.html.twig");
    }
}
