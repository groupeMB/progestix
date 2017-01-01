<?php

/* PharmacieAccueilBundle:Security:presentation.html.twig */
class __TwigTemplate_2974d9f3a08016475aac13f954b8cd7c684ba969a29c9a007ecf09062fa2089b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PharmacieAccueilBundle:Template:template1.html.twig", "PharmacieAccueilBundle:Security:presentation.html.twig", 1);
        $this->blocks = array(
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PharmacieAccueilBundle:Template:template1.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a4e2fa67cf015342fa4416c0faf4204f37df182aa1575692d05fb165e2fbd0fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4e2fa67cf015342fa4416c0faf4204f37df182aa1575692d05fb165e2fbd0fa->enter($__internal_a4e2fa67cf015342fa4416c0faf4204f37df182aa1575692d05fb165e2fbd0fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PharmacieAccueilBundle:Security:presentation.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a4e2fa67cf015342fa4416c0faf4204f37df182aa1575692d05fb165e2fbd0fa->leave($__internal_a4e2fa67cf015342fa4416c0faf4204f37df182aa1575692d05fb165e2fbd0fa_prof);

    }

    // line 4
    public function block_main($context, array $blocks = array())
    {
        $__internal_87a38d8ca20474f1b85f8c108b221c174c6a4fed677da20f18ac28caa83b8457 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87a38d8ca20474f1b85f8c108b221c174c6a4fed677da20f18ac28caa83b8457->enter($__internal_87a38d8ca20474f1b85f8c108b221c174c6a4fed677da20f18ac28caa83b8457_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 5
        echo "    <center>
        ";
        // line 6
        echo $this->env->getExtension('Ras\Bundle\FlashAlertBundle\Twig\FlashAlertsExtension')->renderFlashAlerts();
        echo "
    </center>

    <div id=\"carousel-example-generic\" class=\"carousel slide\" data-ride=\"carousel\">
        <ol class=\"carousel-indicators\">
            <li data-target=\"#carousel-example-generic\" data-slide-to=\"0\" class=\"active\"></li>
            <li data-target=\"#carousel-example-generic\" data-slide-to=\"1\"></li>
            <li data-target=\"#carousel-example-generic\" data-slide-to=\"2\"></li>
            <li data-target=\"#carousel-example-generic\" data-slide-to=\"2\"></li>
        </ol>
        <center>
\t        <div class=\"carousel-inner\">
\t            <div class=\"item active\">
\t                <img class=\"slide-image\" src=\"";
        // line 19
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "schemeAndHttpHost", array()) . $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/pharmacieaccueil/images/test.jpg")), "html", null, true);
        echo "\" alt=\"\">
\t            </div>
\t            <div class=\"item\">
\t                <img class=\"slide-image\" src=\"";
        // line 22
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "schemeAndHttpHost", array()) . $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/pharmacieaccueil/images/Pharmacie.jpg")), "html", null, true);
        echo "\" alt=\"\">
\t            </div>
\t        </div>
\t     </center>
        <a class=\"left carousel-control\" href=\"#carousel-example-generic\" data-slide=\"prev\">
            <span class=\"glyphicon glyphicon-chevron-left\"></span>
        </a>
        <a class=\"right carousel-control\" href=\"#carousel-example-generic\" data-slide=\"next\">
            <span class=\"glyphicon glyphicon-chevron-right\"></span>
        </a>
    </div>

";
        
        $__internal_87a38d8ca20474f1b85f8c108b221c174c6a4fed677da20f18ac28caa83b8457->leave($__internal_87a38d8ca20474f1b85f8c108b221c174c6a4fed677da20f18ac28caa83b8457_prof);

    }

    public function getTemplateName()
    {
        return "PharmacieAccueilBundle:Security:presentation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 22,  59 => 19,  43 => 6,  40 => 5,  34 => 4,  11 => 1,);
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


{% block main %}
    <center>
        {{ render_flash_alerts() }}
    </center>

    <div id=\"carousel-example-generic\" class=\"carousel slide\" data-ride=\"carousel\">
        <ol class=\"carousel-indicators\">
            <li data-target=\"#carousel-example-generic\" data-slide-to=\"0\" class=\"active\"></li>
            <li data-target=\"#carousel-example-generic\" data-slide-to=\"1\"></li>
            <li data-target=\"#carousel-example-generic\" data-slide-to=\"2\"></li>
            <li data-target=\"#carousel-example-generic\" data-slide-to=\"2\"></li>
        </ol>
        <center>
\t        <div class=\"carousel-inner\">
\t            <div class=\"item active\">
\t                <img class=\"slide-image\" src=\"{{ app.request.schemeAndHttpHost ~ asset('bundles/pharmacieaccueil/images/test.jpg') }}\" alt=\"\">
\t            </div>
\t            <div class=\"item\">
\t                <img class=\"slide-image\" src=\"{{ app.request.schemeAndHttpHost ~ asset('bundles/pharmacieaccueil/images/Pharmacie.jpg') }}\" alt=\"\">
\t            </div>
\t        </div>
\t     </center>
        <a class=\"left carousel-control\" href=\"#carousel-example-generic\" data-slide=\"prev\">
            <span class=\"glyphicon glyphicon-chevron-left\"></span>
        </a>
        <a class=\"right carousel-control\" href=\"#carousel-example-generic\" data-slide=\"next\">
            <span class=\"glyphicon glyphicon-chevron-right\"></span>
        </a>
    </div>

{% endblock %}", "PharmacieAccueilBundle:Security:presentation.html.twig", "/home/abdoulaye/workspace/workflows/progestix/progestix/app/src/Pharmacie/AccueilBundle/Resources/views/Security/presentation.html.twig");
    }
}
