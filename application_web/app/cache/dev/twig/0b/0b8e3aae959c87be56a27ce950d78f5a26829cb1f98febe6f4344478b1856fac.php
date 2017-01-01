<?php

/* PharmacieStockBundle:Stock:afficher.html.twig */
class __TwigTemplate_302a9f2373246246679b922866a5a506c8f6c9ab1de6b126843d9072b3b0e172 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PharmacieStockBundle:Stock:lister.html.twig", "PharmacieStockBundle:Stock:afficher.html.twig", 1);
        $this->blocks = array(
            'table' => array($this, 'block_table'),
            'reste' => array($this, 'block_reste'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PharmacieStockBundle:Stock:lister.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ff44fe4009a75bd1dd59b12bce265213eed9eb7ec8d08eb46e4ea6cf3302c171 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff44fe4009a75bd1dd59b12bce265213eed9eb7ec8d08eb46e4ea6cf3302c171->enter($__internal_ff44fe4009a75bd1dd59b12bce265213eed9eb7ec8d08eb46e4ea6cf3302c171_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PharmacieStockBundle:Stock:afficher.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ff44fe4009a75bd1dd59b12bce265213eed9eb7ec8d08eb46e4ea6cf3302c171->leave($__internal_ff44fe4009a75bd1dd59b12bce265213eed9eb7ec8d08eb46e4ea6cf3302c171_prof);

    }

    // line 2
    public function block_table($context, array $blocks = array())
    {
        $__internal_6465503a286ed5da20969953d7d645e8cd2783d20dbc868389f1efc3b0199de2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6465503a286ed5da20969953d7d645e8cd2783d20dbc868389f1efc3b0199de2->enter($__internal_6465503a286ed5da20969953d7d645e8cd2783d20dbc868389f1efc3b0199de2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "table"));

        // line 3
        echo "  <center><h4 class=\"panel-heading alert-danger\">Détails sur le stock du produit : ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["stock"]) ? $context["stock"] : $this->getContext($context, "stock")), "libelle", array()), "html", null, true);
        echo "</h4></center>
  <hr class=\"colorgraph\">
  <ul class=\"list-group\">
  \t  <li class=\"list-group-item\"><u>N° article</u> : ";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["stock"]) ? $context["stock"] : $this->getContext($context, "stock")), "id", array()), "html", null, true);
        echo "</li>
  \t  <li class=\"list-group-item\"><u>Libellé</u> : ";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["stock"]) ? $context["stock"] : $this->getContext($context, "stock")), "libelle", array()), "html", null, true);
        echo "</li>
      <li class=\"list-group-item\"><u>Reference</u> : ";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["stock"]) ? $context["stock"] : $this->getContext($context, "stock")), "reference", array()), "html", null, true);
        echo " </li>
      <li class=\"list-group-item\"><u>Catégorie</u> : ";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["stock"]) ? $context["stock"] : $this->getContext($context, "stock")), "categorie", array()), "html", null, true);
        echo "</li>
      <li class=\"list-group-item\"><u>Quantité</u> : ";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["stock"]) ? $context["stock"] : $this->getContext($context, "stock")), "quantite", array()), "html", null, true);
        echo " </li>
      <li class=\"list-group-item\"><u>Seuil minimum</u>: ";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["stock"]) ? $context["stock"] : $this->getContext($context, "stock")), "seuilMin", array()), "html", null, true);
        echo "</li>
      <li class=\"list-group-item\"><u>Description</u>: ";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["stock"]) ? $context["stock"] : $this->getContext($context, "stock")), "description", array()), "html", null, true);
        echo "</li>
      <li class=\"list-group-item\"><u>Posologie</u> : ";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["stock"]) ? $context["stock"] : $this->getContext($context, "stock")), "posologie", array()), "html", null, true);
        echo " </li>

      ";
        // line 15
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["stock"]) ? $context["stock"] : $this->getContext($context, "stock")), "keywords", array())) != 0)) {
            // line 16
            echo "          ";
            $context["keyword"] = "";
            // line 17
            echo "
            ";
            // line 18
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["stock"]) ? $context["stock"] : $this->getContext($context, "stock")), "keywords", array()));
            foreach ($context['_seq'] as $context["cle"] => $context["valeur"]) {
                // line 19
                echo "              ";
                if (($context["cle"] == 0)) {
                    // line 20
                    echo "                ";
                    $context["keyword"] = $this->getAttribute($context["valeur"], "valeur", array());
                    // line 21
                    echo "              ";
                } else {
                    // line 22
                    echo "                ";
                    $context["keyword"] = (((isset($context["keyword"]) ? $context["keyword"] : $this->getContext($context, "keyword")) . ", ") . $this->getAttribute($context["valeur"], "valeur", array()));
                    // line 23
                    echo "              ";
                }
                // line 24
                echo "          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['cle'], $context['valeur'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 25
            echo "
          <li class=\"list-group-item\"><u>Mots clés</u> : ";
            // line 26
            echo twig_escape_filter($this->env, (isset($context["keyword"]) ? $context["keyword"] : $this->getContext($context, "keyword")), "html", null, true);
            echo " </li>
      ";
        } else {
            // line 28
            echo "          <li class=\"list-group-item\"><u>Mots clés</u> :  Pas de mots clés... </li>
      ";
        }
        // line 30
        echo "
      ";
        // line 31
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["stock"]) ? $context["stock"] : $this->getContext($context, "stock")), "champs", array())) != 0)) {
            // line 32
            echo "
          ";
            // line 33
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["stock"]) ? $context["stock"] : $this->getContext($context, "stock")), "champs", array()));
            foreach ($context['_seq'] as $context["cle"] => $context["valeur"]) {
                // line 34
                echo "              <li class=\"list-group-item\"><u>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["valeur"], "nom", array()), "html", null, true);
                echo "</u> : ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["valeur"], "valeur", array()), "html", null, true);
                echo " </li>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['cle'], $context['valeur'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 36
            echo "
      ";
        }
        // line 38
        echo "
      
  </ul>
";
        
        $__internal_6465503a286ed5da20969953d7d645e8cd2783d20dbc868389f1efc3b0199de2->leave($__internal_6465503a286ed5da20969953d7d645e8cd2783d20dbc868389f1efc3b0199de2_prof);

    }

    // line 43
    public function block_reste($context, array $blocks = array())
    {
        $__internal_95332111ea2b202ba533acdc11beeee08750a2808361713aedd3fe0be6b515bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95332111ea2b202ba533acdc11beeee08750a2808361713aedd3fe0be6b515bb->enter($__internal_95332111ea2b202ba533acdc11beeee08750a2808361713aedd3fe0be6b515bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reste"));

        
        $__internal_95332111ea2b202ba533acdc11beeee08750a2808361713aedd3fe0be6b515bb->leave($__internal_95332111ea2b202ba533acdc11beeee08750a2808361713aedd3fe0be6b515bb_prof);

    }

    public function getTemplateName()
    {
        return "PharmacieStockBundle:Stock:afficher.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  163 => 43,  153 => 38,  149 => 36,  138 => 34,  134 => 33,  131 => 32,  129 => 31,  126 => 30,  122 => 28,  117 => 26,  114 => 25,  108 => 24,  105 => 23,  102 => 22,  99 => 21,  96 => 20,  93 => 19,  89 => 18,  86 => 17,  83 => 16,  81 => 15,  76 => 13,  72 => 12,  68 => 11,  64 => 10,  60 => 9,  56 => 8,  52 => 7,  48 => 6,  41 => 3,  35 => 2,  11 => 1,);
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
  <center><h4 class=\"panel-heading alert-danger\">Détails sur le stock du produit : {{ stock.libelle }}</h4></center>
  <hr class=\"colorgraph\">
  <ul class=\"list-group\">
  \t  <li class=\"list-group-item\"><u>N° article</u> : {{ stock.id }}</li>
  \t  <li class=\"list-group-item\"><u>Libellé</u> : {{ stock.libelle }}</li>
      <li class=\"list-group-item\"><u>Reference</u> : {{ stock.reference }} </li>
      <li class=\"list-group-item\"><u>Catégorie</u> : {{ stock.categorie }}</li>
      <li class=\"list-group-item\"><u>Quantité</u> : {{ stock.quantite }} </li>
      <li class=\"list-group-item\"><u>Seuil minimum</u>: {{ stock.seuilMin }}</li>
      <li class=\"list-group-item\"><u>Description</u>: {{ stock.description }}</li>
      <li class=\"list-group-item\"><u>Posologie</u> : {{ stock.posologie }} </li>

      {% if stock.keywords|length != 0 %}
          {% set keyword = '' %}

            {% for cle, valeur in stock.keywords %}
              {% if cle==0 %}
                {% set keyword = valeur.valeur %}
              {% else %}
                {% set keyword = keyword ~ \", \" ~ valeur.valeur %}
              {% endif %}
          {% endfor %}

          <li class=\"list-group-item\"><u>Mots clés</u> : {{ keyword }} </li>
      {% else %}
          <li class=\"list-group-item\"><u>Mots clés</u> :  Pas de mots clés... </li>
      {% endif %}

      {% if stock.champs|length != 0 %}

          {% for cle, valeur in stock.champs %}
              <li class=\"list-group-item\"><u>{{ valeur.nom }}</u> : {{ valeur.valeur }} </li>
          {% endfor %}

      {% endif %}

      
  </ul>
{% endblock%}

{% block reste %}{% endblock %}", "PharmacieStockBundle:Stock:afficher.html.twig", "/home/abdoulaye/workspace/workflows/progestix/progestix/app/src/Pharmacie/StockBundle/Resources/views/Stock/afficher.html.twig");
    }
}
