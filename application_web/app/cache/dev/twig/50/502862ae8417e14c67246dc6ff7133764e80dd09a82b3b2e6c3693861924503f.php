<?php

/* PharmacieStockBundle:Produit:voirStats.html.twig */
class __TwigTemplate_3c80daee256ed9a399938cb9e6f542761a74ec2defc2a3b6b1bff5769a19f99f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PharmacieStockBundle:Produit:lister.html.twig", "PharmacieStockBundle:Produit:voirStats.html.twig", 1);
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
        $__internal_b2e941c106a3309895f51a763f6bbaf7bd8735c108e190b0472999995293a9f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2e941c106a3309895f51a763f6bbaf7bd8735c108e190b0472999995293a9f2->enter($__internal_b2e941c106a3309895f51a763f6bbaf7bd8735c108e190b0472999995293a9f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PharmacieStockBundle:Produit:voirStats.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b2e941c106a3309895f51a763f6bbaf7bd8735c108e190b0472999995293a9f2->leave($__internal_b2e941c106a3309895f51a763f6bbaf7bd8735c108e190b0472999995293a9f2_prof);

    }

    // line 2
    public function block_table($context, array $blocks = array())
    {
        $__internal_1c4f279ac868d128c400b652f7ee92ab0a259d270e3fe8705bae13d8af3e09f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c4f279ac868d128c400b652f7ee92ab0a259d270e3fe8705bae13d8af3e09f4->enter($__internal_1c4f279ac868d128c400b652f7ee92ab0a259d270e3fe8705bae13d8af3e09f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "table"));

        // line 3
        echo "

<script type=\"text/javascript\" src=\" ";
        // line 5
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "schemeAndHttpHost", array()) . $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/
pharmacieaccueil/js/jquery.min.js")), "html", null, true);
        // line 6
        echo "\"></script>

<script type=\"text/javascript\" src=\" ";
        // line 8
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "schemeAndHttpHost", array()) . $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/pharmacieaccueil/js/highcharts.js")), "html", null, true);
        echo "\"></script>

<script type=\"text/javascript\" src=\" ";
        // line 10
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "schemeAndHttpHost", array()) . $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/pharmacieaccueil/js/exporting.js")), "html", null, true);
        echo "\"></script>
 
<script type=\"text/javascript\">
    ";
        // line 13
        echo $this->env->getExtension('Ob\HighchartsBundle\Twig\HighchartsExtension')->chart((isset($context["chart"]) ? $context["chart"] : $this->getContext($context, "chart")));
        echo "
</script>

<div id=\"linechart\" style=\"min-width: 400px; height: 400px; margin: 0 auto\"></div>
";
        
        $__internal_1c4f279ac868d128c400b652f7ee92ab0a259d270e3fe8705bae13d8af3e09f4->leave($__internal_1c4f279ac868d128c400b652f7ee92ab0a259d270e3fe8705bae13d8af3e09f4_prof);

    }

    public function getTemplateName()
    {
        return "PharmacieStockBundle:Produit:voirStats.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 13,  56 => 10,  51 => 8,  47 => 6,  44 => 5,  40 => 3,  34 => 2,  11 => 1,);
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


<script type=\"text/javascript\" src=\" {{ app.request.schemeAndHttpHost ~ asset('bundles/
pharmacieaccueil/js/jquery.min.js') }}\"></script>

<script type=\"text/javascript\" src=\" {{ app.request.schemeAndHttpHost ~ asset('bundles/pharmacieaccueil/js/highcharts.js') }}\"></script>

<script type=\"text/javascript\" src=\" {{ app.request.schemeAndHttpHost ~ asset('bundles/pharmacieaccueil/js/exporting.js') }}\"></script>
 
<script type=\"text/javascript\">
    {{ chart(chart) }}
</script>

<div id=\"linechart\" style=\"min-width: 400px; height: 400px; margin: 0 auto\"></div>
{% endblock %}
", "PharmacieStockBundle:Produit:voirStats.html.twig", "/home/abdoulaye/workspace/workflows/progestix/progestix/app/src/Pharmacie/StockBundle/Resources/views/Produit/voirStats.html.twig");
    }
}
