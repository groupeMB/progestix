<?php

/* PharmacieStockBundle:Produit:modifier.html.twig */
class __TwigTemplate_2e319c30d76e319a5296a177633e15b8570ae68306bbf3f00eaaad0eac5f3ce0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PharmacieStockBundle:Produit:lister.html.twig", "PharmacieStockBundle:Produit:modifier.html.twig", 1);
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
        $__internal_e86cdcc2e8e0295d20fc8915b80d1bfa45d0aba94b21b0d5065fbcbb669bdc83 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e86cdcc2e8e0295d20fc8915b80d1bfa45d0aba94b21b0d5065fbcbb669bdc83->enter($__internal_e86cdcc2e8e0295d20fc8915b80d1bfa45d0aba94b21b0d5065fbcbb669bdc83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PharmacieStockBundle:Produit:modifier.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e86cdcc2e8e0295d20fc8915b80d1bfa45d0aba94b21b0d5065fbcbb669bdc83->leave($__internal_e86cdcc2e8e0295d20fc8915b80d1bfa45d0aba94b21b0d5065fbcbb669bdc83_prof);

    }

    // line 2
    public function block_table($context, array $blocks = array())
    {
        $__internal_cca0375ce47a82ed31a56c8847ea1bda8ec6e011c0c22855a2696a27220edc41 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cca0375ce47a82ed31a56c8847ea1bda8ec6e011c0c22855a2696a27220edc41->enter($__internal_cca0375ce47a82ed31a56c8847ea1bda8ec6e011c0c22855a2696a27220edc41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "table"));

        // line 3
        echo "\t <div class=\"\">
        <em><center><h4 class=\"panel-heading alert-danger\">Modifier le produit ";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["code"]) ? $context["code"] : $this->getContext($context, "code")), "libelle", array()), "html", null, true);
        echo " </h4></center></em>
        </br>
\t\t";
        // line 6
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["formulaire"]) ? $context["formulaire"] : $this->getContext($context, "formulaire")), 'form_start', array("attr" => array("class" => "form-horizontal")));
        echo "
\t\t";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["formulaire"]) ? $context["formulaire"] : $this->getContext($context, "formulaire")), 'errors');
        echo "
\t\t
\t\t<div class=\"form-group\">
\t\t    ";
        // line 11
        echo "\t\t    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaire"]) ? $context["formulaire"] : $this->getContext($context, "formulaire")), "libelle", array()), 'label', array("label_attr" => array("class" => "col-sm-4 control-label"), "label" => "Libellé produit"));
        echo "

\t\t    ";
        // line 14
        echo "\t\t    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaire"]) ? $context["formulaire"] : $this->getContext($context, "formulaire")), "libelle", array()), 'errors');
        echo "

\t\t    <div class=\"col-sm-4\">
\t\t        ";
        // line 18
        echo "\t\t        ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaire"]) ? $context["formulaire"] : $this->getContext($context, "formulaire")), "libelle", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t    </div>
\t\t    <div class=\"col-sm-2\">
        \t\t<a href=\"";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gestion_stockage_ajouter_stock");
        echo "\" alt=\"Nouveau Produit\"><button type=\"button\" class=\"btn btn-success\"><span class=\"glyphicon glyphicon-plus\"></span></button></a>
        \t</div>
\t\t</div>

\t\t<div class=\"form-group\">
\t\t    ";
        // line 27
        echo "\t\t    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaire"]) ? $context["formulaire"] : $this->getContext($context, "formulaire")), "codebarre", array()), 'label', array("label_attr" => array("class" => "col-sm-4 control-label"), "label" => "Code barre"));
        echo "

\t\t    ";
        // line 30
        echo "\t\t    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaire"]) ? $context["formulaire"] : $this->getContext($context, "formulaire")), "codebarre", array()), 'errors');
        echo "

\t\t    <div class=\"col-sm-4\">
\t\t        ";
        // line 34
        echo "\t\t        ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaire"]) ? $context["formulaire"] : $this->getContext($context, "formulaire")), "codebarre", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t    </div>
\t\t</div>
\t\t<div class=\"form-group\">
\t\t    ";
        // line 39
        echo "\t\t    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaire"]) ? $context["formulaire"] : $this->getContext($context, "formulaire")), "prixunitaire", array()), 'label', array("label_attr" => array("class" => "col-sm-4 control-label"), "label" => "Prix unitaire"));
        echo "

\t\t    ";
        // line 42
        echo "\t\t    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaire"]) ? $context["formulaire"] : $this->getContext($context, "formulaire")), "prixunitaire", array()), 'errors');
        echo "

\t\t    <div class=\"col-sm-4\">
\t\t        ";
        // line 46
        echo "\t\t        ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaire"]) ? $context["formulaire"] : $this->getContext($context, "formulaire")), "prixunitaire", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t    </div>
\t\t</div>
\t\t<div class=\"form-group\">
\t\t    ";
        // line 51
        echo "\t\t    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaire"]) ? $context["formulaire"] : $this->getContext($context, "formulaire")), "dateperemption", array()), 'label', array("label_attr" => array("class" => "col-sm-4 control-label"), "label" => "Date de péremption"));
        echo "

\t\t    ";
        // line 54
        echo "\t\t    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaire"]) ? $context["formulaire"] : $this->getContext($context, "formulaire")), "dateperemption", array()), 'errors');
        echo "

\t\t    <div class=\"col-sm-4\">
\t\t        ";
        // line 58
        echo "\t\t        ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaire"]) ? $context["formulaire"] : $this->getContext($context, "formulaire")), "dateperemption", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t    </div>
\t\t</div>
\t
\t   </br>
        <span style=\"margin-left:30%\">";
        // line 63
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaire"]) ? $context["formulaire"] : $this->getContext($context, "formulaire")), "Valider", array()), 'widget', array("label" => "Modifier", "attr" => array("class" => "btn btn-primary")));
        echo "</span>

         <span style=\"margin-left:25%\">";
        // line 65
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaire"]) ? $context["formulaire"] : $this->getContext($context, "formulaire")), "Annuler", array()), 'widget', array("label" => "Annuler", "attr" => array("class" => "btn btn-warning")));
        echo "</span>

\t\t";
        // line 67
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["formulaire"]) ? $context["formulaire"] : $this->getContext($context, "formulaire")), 'widget');
        echo "
\t\t ";
        // line 68
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["formulaire"]) ? $context["formulaire"] : $this->getContext($context, "formulaire")), 'form_end');
        echo "\t
\t\t </div>
\t";
        
        $__internal_cca0375ce47a82ed31a56c8847ea1bda8ec6e011c0c22855a2696a27220edc41->leave($__internal_cca0375ce47a82ed31a56c8847ea1bda8ec6e011c0c22855a2696a27220edc41_prof);

    }

    public function getTemplateName()
    {
        return "PharmacieStockBundle:Produit:modifier.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  164 => 68,  160 => 67,  155 => 65,  150 => 63,  141 => 58,  134 => 54,  128 => 51,  120 => 46,  113 => 42,  107 => 39,  99 => 34,  92 => 30,  86 => 27,  78 => 21,  71 => 18,  64 => 14,  58 => 11,  52 => 7,  48 => 6,  43 => 4,  40 => 3,  34 => 2,  11 => 1,);
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
\t {% block table %}
\t <div class=\"\">
        <em><center><h4 class=\"panel-heading alert-danger\">Modifier le produit {{code.libelle}} </h4></center></em>
        </br>
\t\t{{ form_start(formulaire, {'attr': {'class': 'form-horizontal'}}) }}
\t\t{{ form_errors(formulaire) }}
\t\t
\t\t<div class=\"form-group\">
\t\t    {# Génération du label. #}
\t\t    {{ form_label(formulaire.libelle, \"Libellé produit\", {'label_attr': {'class': 'col-sm-4 control-label'}}) }}

\t\t    {# Affichage des erreurs pour ce champ précis. #}
\t\t    {{ form_errors(formulaire.libelle) }}

\t\t    <div class=\"col-sm-4\">
\t\t        {# Génération de l'input. #}
\t\t        {{ form_widget(formulaire.libelle, {'attr': {'class': 'form-control'}}) }}
\t\t    </div>
\t\t    <div class=\"col-sm-2\">
        \t\t<a href=\"{{ path('gestion_stockage_ajouter_stock')}}\" alt=\"Nouveau Produit\"><button type=\"button\" class=\"btn btn-success\"><span class=\"glyphicon glyphicon-plus\"></span></button></a>
        \t</div>
\t\t</div>

\t\t<div class=\"form-group\">
\t\t    {# Génération du label. #}
\t\t    {{ form_label(formulaire.codebarre, \"Code barre\", {'label_attr': {'class': 'col-sm-4 control-label'}}) }}

\t\t    {# Affichage des erreurs pour ce champ précis. #}
\t\t    {{ form_errors(formulaire.codebarre) }}

\t\t    <div class=\"col-sm-4\">
\t\t        {# Génération de l'input. #}
\t\t        {{ form_widget(formulaire.codebarre, {'attr': {'class': 'form-control'}}) }}
\t\t    </div>
\t\t</div>
\t\t<div class=\"form-group\">
\t\t    {# Génération du label. #}
\t\t    {{ form_label(formulaire.prixunitaire, \"Prix unitaire\", {'label_attr': {'class': 'col-sm-4 control-label'}}) }}

\t\t    {# Affichage des erreurs pour ce champ précis. #}
\t\t    {{ form_errors(formulaire.prixunitaire) }}

\t\t    <div class=\"col-sm-4\">
\t\t        {# Génération de l'input. #}
\t\t        {{ form_widget(formulaire.prixunitaire, {'attr': {'class': 'form-control'}}) }}
\t\t    </div>
\t\t</div>
\t\t<div class=\"form-group\">
\t\t    {# Génération du label. #}
\t\t    {{ form_label(formulaire.dateperemption, \"Date de péremption\", {'label_attr': {'class': 'col-sm-4 control-label'}}) }}

\t\t    {# Affichage des erreurs pour ce champ précis. #}
\t\t    {{ form_errors(formulaire.dateperemption) }}

\t\t    <div class=\"col-sm-4\">
\t\t        {# Génération de l'input. #}
\t\t        {{ form_widget(formulaire.dateperemption, {'attr': {'class': 'form-control'}}) }}
\t\t    </div>
\t\t</div>
\t
\t   </br>
        <span style=\"margin-left:30%\">{{ form_widget(formulaire.Valider, {'label': 'Modifier', 'attr': {'class': 'btn btn-primary'}}) }}</span>

         <span style=\"margin-left:25%\">{{ form_widget(formulaire.Annuler, {'label': 'Annuler', 'attr': {'class': 'btn btn-warning'}}) }}</span>

\t\t{{ form_widget(formulaire) }}
\t\t {{ form_end(formulaire) }}\t
\t\t </div>
\t{%endblock%}", "PharmacieStockBundle:Produit:modifier.html.twig", "/home/abdoulaye/workspace/workflows/progestix/progestix/app/src/Pharmacie/StockBundle/Resources/views/Produit/modifier.html.twig");
    }
}
