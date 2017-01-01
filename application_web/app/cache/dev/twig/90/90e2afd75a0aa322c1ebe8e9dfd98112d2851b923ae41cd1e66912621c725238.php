<?php

/* PharmacieStockBundle:Produit:ajouter.html.twig */
class __TwigTemplate_31a61aae3f44da8cdcf522f19385da22224441590c8e2d46d012abf7338362cb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PharmacieStockBundle:Produit:lister.html.twig", "PharmacieStockBundle:Produit:ajouter.html.twig", 1);
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
        $__internal_dbaae815ff9670144181ed1ce784cfd967a085c43defd771c71e9c2b83c04ed7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dbaae815ff9670144181ed1ce784cfd967a085c43defd771c71e9c2b83c04ed7->enter($__internal_dbaae815ff9670144181ed1ce784cfd967a085c43defd771c71e9c2b83c04ed7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PharmacieStockBundle:Produit:ajouter.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dbaae815ff9670144181ed1ce784cfd967a085c43defd771c71e9c2b83c04ed7->leave($__internal_dbaae815ff9670144181ed1ce784cfd967a085c43defd771c71e9c2b83c04ed7_prof);

    }

    // line 2
    public function block_table($context, array $blocks = array())
    {
        $__internal_52ae91e2f14b55e32a3d4f98b009f61060ce571137080d1e697474cedcf250a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52ae91e2f14b55e32a3d4f98b009f61060ce571137080d1e697474cedcf250a2->enter($__internal_52ae91e2f14b55e32a3d4f98b009f61060ce571137080d1e697474cedcf250a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "table"));

        // line 3
        echo "\t <div class=\"\">
        <center><h5 class=\"panel-heading alert-danger\">Ajouter un nouveau produit pharmaceutique </h5></center>
\t\t";
        // line 5
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["formulaire"]) ? $context["formulaire"] : $this->getContext($context, "formulaire")), 'form_start', array("attr" => array("class" => "form-horizontal")));
        echo "
\t\t";
        // line 6
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["formulaire"]) ? $context["formulaire"] : $this->getContext($context, "formulaire")), 'errors');
        echo "
\t\t
\t\t<div class=\"form-group\">
\t\t    ";
        // line 10
        echo "\t\t    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaire"]) ? $context["formulaire"] : $this->getContext($context, "formulaire")), "libelle", array()), 'label', array("label_attr" => array("class" => "col-sm-4 control-label"), "label" => "Libellé produit"));
        echo "

\t\t    ";
        // line 13
        echo "\t\t    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaire"]) ? $context["formulaire"] : $this->getContext($context, "formulaire")), "libelle", array()), 'errors');
        echo "

\t\t    <div class=\"col-sm-4\">
\t\t        ";
        // line 17
        echo "\t\t        ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaire"]) ? $context["formulaire"] : $this->getContext($context, "formulaire")), "libelle", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t    </div>
\t\t    <div class=\"col-sm-2\">
        \t\t<a href=\"";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gestion_stockage_ajouter_stock");
        echo "\"><button type=\"button\" class=\"btn btn-success\"><span class=\"glyphicon glyphicon-plus\"></span> Nouveau Produit</button></a>
        \t</div>
\t\t</div>

\t\t<div class=\"form-group\">
\t\t    ";
        // line 26
        echo "\t\t    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaire"]) ? $context["formulaire"] : $this->getContext($context, "formulaire")), "codebarre", array()), 'label', array("label_attr" => array("class" => "col-sm-4 control-label"), "label" => "Code barre"));
        echo "

\t\t    ";
        // line 29
        echo "\t\t    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaire"]) ? $context["formulaire"] : $this->getContext($context, "formulaire")), "codebarre", array()), 'errors');
        echo "

\t\t    <div class=\"col-sm-4\">
\t\t        ";
        // line 33
        echo "\t\t        ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaire"]) ? $context["formulaire"] : $this->getContext($context, "formulaire")), "codebarre", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t    </div>
\t\t</div>
\t\t<div class=\"form-group\">
\t\t    ";
        // line 38
        echo "\t\t    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaire"]) ? $context["formulaire"] : $this->getContext($context, "formulaire")), "prixunitaire", array()), 'label', array("label_attr" => array("class" => "col-sm-4 control-label"), "label" => "Prix Unitaire"));
        echo "

\t\t    ";
        // line 41
        echo "\t\t    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaire"]) ? $context["formulaire"] : $this->getContext($context, "formulaire")), "prixunitaire", array()), 'errors');
        echo "

\t\t    <div class=\"col-sm-4\">
\t\t        ";
        // line 45
        echo "\t\t        ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaire"]) ? $context["formulaire"] : $this->getContext($context, "formulaire")), "prixunitaire", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t    </div>
\t\t</div>
\t\t<div class=\"form-group\">
\t\t    ";
        // line 50
        echo "\t\t    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaire"]) ? $context["formulaire"] : $this->getContext($context, "formulaire")), "dateperemption", array()), 'label', array("label_attr" => array("class" => "col-sm-4 control-label"), "label" => "Date de péremption"));
        echo "

\t\t    ";
        // line 53
        echo "\t\t    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaire"]) ? $context["formulaire"] : $this->getContext($context, "formulaire")), "dateperemption", array()), 'errors');
        echo "

\t\t    <div class=\"col-sm-4\">
\t\t        ";
        // line 57
        echo "\t\t        ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaire"]) ? $context["formulaire"] : $this->getContext($context, "formulaire")), "dateperemption", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t    </div>
\t\t</div>


        <center><span>";
        // line 62
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaire"]) ? $context["formulaire"] : $this->getContext($context, "formulaire")), "Valider", array()), 'widget', array("attr" => array("class" => "btn btn-success")));
        echo "</span>
         <span>";
        // line 63
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaire"]) ? $context["formulaire"] : $this->getContext($context, "formulaire")), "Annuler", array()), 'widget', array("label" => "Annuler", "attr" => array("class" => "btn btn-warning")));
        echo "</span></center>

\t\t";
        // line 65
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["formulaire"]) ? $context["formulaire"] : $this->getContext($context, "formulaire")), 'widget');
        echo "
\t\t ";
        // line 66
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["formulaire"]) ? $context["formulaire"] : $this->getContext($context, "formulaire")), 'form_end');
        echo "\t
\t\t </div><br><br>
\t";
        
        $__internal_52ae91e2f14b55e32a3d4f98b009f61060ce571137080d1e697474cedcf250a2->leave($__internal_52ae91e2f14b55e32a3d4f98b009f61060ce571137080d1e697474cedcf250a2_prof);

    }

    public function getTemplateName()
    {
        return "PharmacieStockBundle:Produit:ajouter.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  159 => 66,  155 => 65,  150 => 63,  146 => 62,  137 => 57,  130 => 53,  124 => 50,  116 => 45,  109 => 41,  103 => 38,  95 => 33,  88 => 29,  82 => 26,  74 => 20,  67 => 17,  60 => 13,  54 => 10,  48 => 6,  44 => 5,  40 => 3,  34 => 2,  11 => 1,);
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
        <center><h5 class=\"panel-heading alert-danger\">Ajouter un nouveau produit pharmaceutique </h5></center>
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
        \t\t<a href=\"{{ path('gestion_stockage_ajouter_stock')}}\"><button type=\"button\" class=\"btn btn-success\"><span class=\"glyphicon glyphicon-plus\"></span> Nouveau Produit</button></a>
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
\t\t    {{ form_label(formulaire.prixunitaire, \"Prix Unitaire\", {'label_attr': {'class': 'col-sm-4 control-label'}}) }}

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


        <center><span>{{ form_widget(formulaire.Valider, {'attr': {'class': 'btn btn-success'}}) }}</span>
         <span>{{ form_widget(formulaire.Annuler, {'label': 'Annuler', 'attr': {'class': 'btn btn-warning'}}) }}</span></center>

\t\t{{ form_widget(formulaire) }}
\t\t {{ form_end(formulaire) }}\t
\t\t </div><br><br>
\t{%endblock%}", "PharmacieStockBundle:Produit:ajouter.html.twig", "/home/abdoulaye/workspace/workflows/progestix/progestix/app/src/Pharmacie/StockBundle/Resources/views/Produit/ajouter.html.twig");
    }
}
