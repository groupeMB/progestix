<?php

/* PharmacieStockBundle:Produit:afficher.html.twig */
class __TwigTemplate_63190dd03fa580931e22df9d59f8c295807a96939578d12a939f2db06799b6df extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PharmacieStockBundle:Produit:lister.html.twig", "PharmacieStockBundle:Produit:afficher.html.twig", 1);
        $this->blocks = array(
            'table' => array($this, 'block_table'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PharmacieStockBundle:Produit:lister.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bbe63a424decfaf7250fac8b8827c325feceed62904f25d2b9b9724a86762c1d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bbe63a424decfaf7250fac8b8827c325feceed62904f25d2b9b9724a86762c1d->enter($__internal_bbe63a424decfaf7250fac8b8827c325feceed62904f25d2b9b9724a86762c1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PharmacieStockBundle:Produit:afficher.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bbe63a424decfaf7250fac8b8827c325feceed62904f25d2b9b9724a86762c1d->leave($__internal_bbe63a424decfaf7250fac8b8827c325feceed62904f25d2b9b9724a86762c1d_prof);

    }

    // line 2
    public function block_table($context, array $blocks = array())
    {
        $__internal_d7c92f54382474cf71cf917759ac2a2e1a150617463eaa7e0a22e957b096f567 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7c92f54382474cf71cf917759ac2a2e1a150617463eaa7e0a22e957b096f567->enter($__internal_d7c92f54382474cf71cf917759ac2a2e1a150617463eaa7e0a22e957b096f567_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "table"));

        // line 3
        echo "  <center><h4 class=\"panel-heading alert-danger\">Détails du produit : ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["code"]) ? $context["code"] : $this->getContext($context, "code")), "libelle", array()), "html", null, true);
        echo "</h4></center>
  <hr class=\"colorgraph\">
  <ul class=\"list-group\">
      <li class=\"list-group-item\"><u>Libellé</u> : ";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["code"]) ? $context["code"] : $this->getContext($context, "code")), "libelle", array()), "html", null, true);
        echo "</li>
      <li class=\"list-group-item\"><u>Code barre</u>: ";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["code"]) ? $context["code"] : $this->getContext($context, "code")), "codebarre", array()), "html", null, true);
        echo "</li>
      <li class=\"list-group-item\"><u>Prix</u> : ";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["code"]) ? $context["code"] : $this->getContext($context, "code")), "prixunitaire", array()), "html", null, true);
        echo " FCFA</li>
      <li class=\"list-group-item\"><u>Date de péremption</u> : ";
        // line 9
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["code"]) ? $context["code"] : $this->getContext($context, "code")), "dateperemption", array()), "d-M-Y"), "html", null, true);
        echo "</li>

 </ul>
";
        
        $__internal_d7c92f54382474cf71cf917759ac2a2e1a150617463eaa7e0a22e957b096f567->leave($__internal_d7c92f54382474cf71cf917759ac2a2e1a150617463eaa7e0a22e957b096f567_prof);

    }

    public function getTemplateName()
    {
        return "PharmacieStockBundle:Produit:afficher.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 9,  55 => 8,  51 => 7,  47 => 6,  40 => 3,  34 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"PharmacieStockBundle:Produit:lister.html.twig\" %}
{% block table %}
  <center><h4 class=\"panel-heading alert-danger\">Détails du produit : {{ code.libelle }}</h4></center>
  <hr class=\"colorgraph\">
  <ul class=\"list-group\">
      <li class=\"list-group-item\"><u>Libellé</u> : {{ code.libelle }}</li>
      <li class=\"list-group-item\"><u>Code barre</u>: {{ code.codebarre }}</li>
      <li class=\"list-group-item\"><u>Prix</u> : {{ code.prixunitaire}} FCFA</li>
      <li class=\"list-group-item\"><u>Date de péremption</u> : {{code.dateperemption|date('d-M-Y') }}</li>

 </ul>
{% endblock%}
", "PharmacieStockBundle:Produit:afficher.html.twig", "/home/abdoulaye/workspace/workflows/progestix/progestix/app/src/Pharmacie/StockBundle/Resources/views/Produit/afficher.html.twig");
    }
}
