<?php

/* PharmacieStockBundle:Stock:ajouter.html.twig */
class __TwigTemplate_4eff066efd3e407540d2e803f1c717f7ea94891f1e108debf96659a4263b1224 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PharmacieStockBundle:Stock:lister.html.twig", "PharmacieStockBundle:Stock:ajouter.html.twig", 1);
        $this->blocks = array(
            'table' => array($this, 'block_table'),
            '__internal_64ff023559176726abe6a93c4cc392cd6c87b1846f105715548b4677dff0e53f' => array($this, 'block___internal_64ff023559176726abe6a93c4cc392cd6c87b1846f105715548b4677dff0e53f'),
            '__internal_610667a35aa0114dec0f5e2c1e1c36f5f15dbecd4f9dc8577b962b18bfde7a45' => array($this, 'block___internal_610667a35aa0114dec0f5e2c1e1c36f5f15dbecd4f9dc8577b962b18bfde7a45'),
            'reste' => array($this, 'block_reste'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PharmacieStockBundle:Stock:lister.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4331ccec4a5ddaa50a59fe7c82b60dcab843f61bee4d9e6000c3fdef29b3e43e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4331ccec4a5ddaa50a59fe7c82b60dcab843f61bee4d9e6000c3fdef29b3e43e->enter($__internal_4331ccec4a5ddaa50a59fe7c82b60dcab843f61bee4d9e6000c3fdef29b3e43e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PharmacieStockBundle:Stock:ajouter.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4331ccec4a5ddaa50a59fe7c82b60dcab843f61bee4d9e6000c3fdef29b3e43e->leave($__internal_4331ccec4a5ddaa50a59fe7c82b60dcab843f61bee4d9e6000c3fdef29b3e43e_prof);

    }

    // line 3
    public function block_table($context, array $blocks = array())
    {
        $__internal_f8d3a7064d68cb42e272878c7f1f961c45fa276adcde7dd003b004ed9eadcff0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8d3a7064d68cb42e272878c7f1f961c45fa276adcde7dd003b004ed9eadcff0->enter($__internal_f8d3a7064d68cb42e272878c7f1f961c45fa276adcde7dd003b004ed9eadcff0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "table"));

        // line 4
        echo "\t <div id=\"div_stock_ajout\">
\t\t <div class=\"\">
\t        <center><h4 class=\"panel-heading alert-danger\">Valider un nouveau stock de produit </h4></center>
\t\t\t";
        // line 7
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["formulaire"]) ? $context["formulaire"] : $this->getContext($context, "formulaire")), 'form_start', array("attr" => array("class" => "form-horizontal")));
        echo "
\t\t\t";
        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["formulaire"]) ? $context["formulaire"] : $this->getContext($context, "formulaire")), 'errors');
        echo "


\t\t\t<div class=\"form-group\">
\t\t\t    ";
        // line 13
        echo "\t\t\t    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaire"]) ? $context["formulaire"] : $this->getContext($context, "formulaire")), "reference", array()), 'label', array("label_attr" => array("class" => "col-sm-4 control-label"), "label" => "Réference du produit"));
        echo "

\t\t\t    ";
        // line 16
        echo "\t\t\t    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaire"]) ? $context["formulaire"] : $this->getContext($context, "formulaire")), "reference", array()), 'errors');
        echo "

\t\t\t    <div class=\"col-sm-4\">
\t\t\t        ";
        // line 20
        echo "\t\t\t        ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaire"]) ? $context["formulaire"] : $this->getContext($context, "formulaire")), "reference", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t    </div>


\t\t\t\t
\t\t\t</div>

\t\t\t<div class=\"form-group\">
\t\t\t    ";
        // line 29
        echo "\t\t\t    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaire"]) ? $context["formulaire"] : $this->getContext($context, "formulaire")), "libelle", array()), 'label', array("label_attr" => array("class" => "col-sm-4 control-label"), "label" => "Libelle du produit : "));
        echo "

\t\t\t    ";
        // line 32
        echo "\t\t\t    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaire"]) ? $context["formulaire"] : $this->getContext($context, "formulaire")), "libelle", array()), 'errors');
        echo "

\t\t\t    <div class=\"col-sm-4\">
\t\t\t        ";
        // line 36
        echo "\t\t\t        ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaire"]) ? $context["formulaire"] : $this->getContext($context, "formulaire")), "libelle", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t    </div>
\t\t\t</div>

\t\t\t<div class=\"form-group\">
\t\t\t    ";
        // line 42
        echo "\t\t\t    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaire"]) ? $context["formulaire"] : $this->getContext($context, "formulaire")), "categorie", array()), 'label', array("label_attr" => array("class" => "col-sm-4 control-label"), "label" => "Categorie du produit"));
        echo "

\t\t\t    ";
        // line 45
        echo "\t\t\t    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaire"]) ? $context["formulaire"] : $this->getContext($context, "formulaire")), "categorie", array()), 'errors');
        echo "

\t\t\t    <div class=\"col-sm-4\">
\t\t\t        ";
        // line 49
        echo "\t\t\t        ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaire"]) ? $context["formulaire"] : $this->getContext($context, "formulaire")), "categorie", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t    </div>
\t\t\t</div>


\t\t\t<div class=\"form-group\">
\t\t\t    ";
        // line 56
        echo "\t\t\t    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaire"]) ? $context["formulaire"] : $this->getContext($context, "formulaire")), "seuilMin", array()), 'label', array("label_attr" => array("class" => "col-sm-4 control-label"), "label" => "Seuil Minimum "));
        echo "

\t\t\t    ";
        // line 59
        echo "\t\t\t    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaire"]) ? $context["formulaire"] : $this->getContext($context, "formulaire")), "seuilMin", array()), 'errors');
        echo "

\t\t\t    <div class=\"col-sm-4\">
\t\t\t        ";
        // line 63
        echo "\t\t\t        ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaire"]) ? $context["formulaire"] : $this->getContext($context, "formulaire")), "seuilMin", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t    </div>
\t\t\t</div>
\t\t\t

\t\t\t<div class=\"form-group\">
\t\t\t    ";
        // line 70
        echo "\t\t\t    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaire"]) ? $context["formulaire"] : $this->getContext($context, "formulaire")), "description", array()), 'label', array("label_attr" => array("class" => "col-sm-4 control-label"), "label" => "Description"));
        echo "

\t\t\t    ";
        // line 73
        echo "\t\t\t    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaire"]) ? $context["formulaire"] : $this->getContext($context, "formulaire")), "description", array()), 'errors');
        echo "

\t\t\t    <div class=\"col-sm-4\">
\t\t\t        ";
        // line 77
        echo "\t\t\t        ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaire"]) ? $context["formulaire"] : $this->getContext($context, "formulaire")), "description", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t    </div>
\t\t\t</div>

\t\t\t<div class=\"form-group\">
\t\t\t    ";
        // line 83
        echo "\t\t\t    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaire"]) ? $context["formulaire"] : $this->getContext($context, "formulaire")), "posologie", array()), 'label', array("label_attr" => array("class" => "col-sm-4 control-label"), "label" => "Posologie"));
        echo "

\t\t\t    ";
        // line 86
        echo "\t\t\t    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaire"]) ? $context["formulaire"] : $this->getContext($context, "formulaire")), "posologie", array()), 'errors');
        echo "

\t\t\t    <div class=\"col-sm-4\">
\t\t\t        ";
        // line 90
        echo "\t\t\t        ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaire"]) ? $context["formulaire"] : $this->getContext($context, "formulaire")), "posologie", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t    </div>
\t\t\t</div>

\t\t\t<div id=\"keywords_div\" data-prototype=\"
\t\t\t\t";
        // line 95
        echo twig_escape_filter($this->env,         $this->renderBlock("__internal_64ff023559176726abe6a93c4cc392cd6c87b1846f105715548b4677dff0e53f", $context, $blocks));
        // line 105
        echo "\">
\t\t\t</div>

\t\t\t
\t\t\t<div id=\"reste_stock\">
\t\t\t\t<button type=\"button\" class=\"btn btn-primary btn-lg\" data-toggle=\"modal\" data-target=\"#champsmodal\"><span class=\"glyphicon glyphicon-plus\"></span>
\t\t\t\t  \tAjouter d'autres champs
\t\t\t\t</button>
\t\t\t</div>
\t\t\t

\t\t\t<!-- Modal -->
\t\t\t<div class=\"modal fade\" id=\"champsmodal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"champsmodalLabel\">
\t\t\t  <div class=\"modal-dialog\" role=\"document\">
\t\t\t    <div class=\"modal-content\">
\t\t\t      <div class=\"modal-header\">
\t\t\t        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
\t\t\t        <h4 class=\"modal-title\" id=\"champsmodalLabel\">Ajout de nouveaux champs</h4>
\t\t\t      </div>
\t\t\t      <div class=\"modal-body\">
\t\t\t        \t<div id=\"champs_div\" data-prototype=\"
\t\t\t\t\t\t";
        // line 126
        echo twig_escape_filter($this->env,         $this->renderBlock("__internal_610667a35aa0114dec0f5e2c1e1c36f5f15dbecd4f9dc8577b962b18bfde7a45", $context, $blocks));
        // line 142
        echo "\">
\t\t\t\t\t</div>
\t\t\t      </div>
\t\t\t      <div class=\"modal-footer\">

\t\t\t        <span style=\"margin-left:30%\">";
        // line 147
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaire"]) ? $context["formulaire"] : $this->getContext($context, "formulaire")), "Valider", array()), 'widget', array("attr" => array("class" => "btn btn-primary")));
        echo "</span>

\t        \t\t<span style=\"margin-left:25%\">";
        // line 149
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaire"]) ? $context["formulaire"] : $this->getContext($context, "formulaire")), "Annuler", array()), 'widget', array("attr" => array("class" => "btn btn-default", "data-dismiss" => "modal")));
        echo "</span>

\t\t\t      </div>
\t\t\t    </div>
\t\t\t  </div>
\t\t\t</div>


\t\t\t\t</br>

\t\t\t";
        // line 160
        echo "\t        <span style=\"margin-left:30%\">";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaire"]) ? $context["formulaire"] : $this->getContext($context, "formulaire")), "Valider", array()), 'widget', array("attr" => array("class" => "btn btn-primary")));
        echo "</span>

\t        <span style=\"margin-left:25%\">";
        // line 162
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaire"]) ? $context["formulaire"] : $this->getContext($context, "formulaire")), "Annuler", array()), 'widget', array("attr" => array("class" => "btn btn-warning")));
        echo "</span>

\t\t\t";
        // line 164
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["formulaire"]) ? $context["formulaire"] : $this->getContext($context, "formulaire")), 'widget');
        echo "
\t\t\t ";
        // line 165
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["formulaire"]) ? $context["formulaire"] : $this->getContext($context, "formulaire")), 'form_end');
        echo "\t
\t\t\t 


\t\t\t </div>
\t\t </div>



\t";
        
        $__internal_f8d3a7064d68cb42e272878c7f1f961c45fa276adcde7dd003b004ed9eadcff0->leave($__internal_f8d3a7064d68cb42e272878c7f1f961c45fa276adcde7dd003b004ed9eadcff0_prof);

    }

    // line 95
    public function block___internal_64ff023559176726abe6a93c4cc392cd6c87b1846f105715548b4677dff0e53f($context, array $blocks = array())
    {
        $__internal_c1a18730fcc9a0f0d3148c5a131a00207cba58a56821e7d625ecd63a8a3114ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1a18730fcc9a0f0d3148c5a131a00207cba58a56821e7d625ecd63a8a3114ab->enter($__internal_c1a18730fcc9a0f0d3148c5a131a00207cba58a56821e7d625ecd63a8a3114ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "__internal_64ff023559176726abe6a93c4cc392cd6c87b1846f105715548b4677dff0e53f"));

        // line 96
        echo "\t\t        <div class='form-group'>
\t\t\t\t
\t\t\t\t\t";
        // line 98
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["formulaire"]) ? $context["formulaire"] : $this->getContext($context, "formulaire")), "keywords", array()), "vars", array()), "prototype", array()), "valeur", array())), 'label', array("label_attr" => array("class" => "col-sm-4 control-label"), "label" => "Mot clé"));
        echo "
\t\t\t\t\t";
        // line 99
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["formulaire"]) ? $context["formulaire"] : $this->getContext($context, "formulaire")), "keywords", array()), "vars", array()), "prototype", array()), "valeur", array())), 'errors');
        echo "
\t\t\t\t\t<div class='col-sm-4'>
\t\t\t\t\t\t";
        // line 101
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["formulaire"]) ? $context["formulaire"] : $this->getContext($context, "formulaire")), "keywords", array()), "vars", array()), "prototype", array()), "valeur", array())), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t\t\t</div>

\t\t\t\t</div> 
\t\t    \t";
        
        $__internal_c1a18730fcc9a0f0d3148c5a131a00207cba58a56821e7d625ecd63a8a3114ab->leave($__internal_c1a18730fcc9a0f0d3148c5a131a00207cba58a56821e7d625ecd63a8a3114ab_prof);

    }

    // line 126
    public function block___internal_610667a35aa0114dec0f5e2c1e1c36f5f15dbecd4f9dc8577b962b18bfde7a45($context, array $blocks = array())
    {
        $__internal_892cfcd729f9c9418fab0018343402ceb5aac840c4e9e2cd3ab3ee7eceeceb1c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_892cfcd729f9c9418fab0018343402ceb5aac840c4e9e2cd3ab3ee7eceeceb1c->enter($__internal_892cfcd729f9c9418fab0018343402ceb5aac840c4e9e2cd3ab3ee7eceeceb1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "__internal_610667a35aa0114dec0f5e2c1e1c36f5f15dbecd4f9dc8577b962b18bfde7a45"));

        // line 127
        echo "\t\t\t\t        <div class='form-group'>
\t\t\t\t\t\t
\t\t\t\t\t\t\t";
        // line 129
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["formulaire"]) ? $context["formulaire"] : $this->getContext($context, "formulaire")), "champs", array()), "vars", array()), "prototype", array()), "nom", array())), 'label', array("label_attr" => array("class" => "col-sm-1 control-label"), "label" => "Nom"));
        echo "
\t\t\t\t\t\t\t";
        // line 130
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["formulaire"]) ? $context["formulaire"] : $this->getContext($context, "formulaire")), "champs", array()), "vars", array()), "prototype", array()), "nom", array())), 'errors');
        echo "
\t\t\t\t\t\t\t<div class='col-sm-4'>
\t\t\t\t\t\t\t\t";
        // line 132
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["formulaire"]) ? $context["formulaire"] : $this->getContext($context, "formulaire")), "champs", array()), "vars", array()), "prototype", array()), "nom", array())), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t";
        // line 135
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["formulaire"]) ? $context["formulaire"] : $this->getContext($context, "formulaire")), "champs", array()), "vars", array()), "prototype", array()), "valeur", array())), 'label', array("label_attr" => array("class" => "col-sm-1 control-label"), "label" => "Valeur"));
        echo "
\t\t\t\t\t\t\t";
        // line 136
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["formulaire"]) ? $context["formulaire"] : $this->getContext($context, "formulaire")), "champs", array()), "vars", array()), "prototype", array()), "valeur", array())), 'errors');
        echo "
\t\t\t\t\t\t\t<div class='col-sm-4'>
\t\t\t\t\t\t\t\t";
        // line 138
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["formulaire"]) ? $context["formulaire"] : $this->getContext($context, "formulaire")), "champs", array()), "vars", array()), "prototype", array()), "valeur", array())), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</div> 
\t\t\t\t    \t";
        
        $__internal_892cfcd729f9c9418fab0018343402ceb5aac840c4e9e2cd3ab3ee7eceeceb1c->leave($__internal_892cfcd729f9c9418fab0018343402ceb5aac840c4e9e2cd3ab3ee7eceeceb1c_prof);

    }

    // line 176
    public function block_reste($context, array $blocks = array())
    {
        $__internal_eeaa0fb06744634b0b4ad05965758c4489a1d64ff6eabfac30673fe680bff7e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eeaa0fb06744634b0b4ad05965758c4489a1d64ff6eabfac30673fe680bff7e4->enter($__internal_eeaa0fb06744634b0b4ad05965758c4489a1d64ff6eabfac30673fe680bff7e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reste"));

        
        $__internal_eeaa0fb06744634b0b4ad05965758c4489a1d64ff6eabfac30673fe680bff7e4->leave($__internal_eeaa0fb06744634b0b4ad05965758c4489a1d64ff6eabfac30673fe680bff7e4_prof);

    }

    public function getTemplateName()
    {
        return "PharmacieStockBundle:Stock:ajouter.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  357 => 176,  345 => 138,  340 => 136,  336 => 135,  330 => 132,  325 => 130,  321 => 129,  317 => 127,  311 => 126,  299 => 101,  294 => 99,  290 => 98,  286 => 96,  280 => 95,  263 => 165,  259 => 164,  254 => 162,  248 => 160,  235 => 149,  230 => 147,  223 => 142,  221 => 126,  198 => 105,  196 => 95,  187 => 90,  180 => 86,  174 => 83,  165 => 77,  158 => 73,  152 => 70,  142 => 63,  135 => 59,  129 => 56,  119 => 49,  112 => 45,  106 => 42,  97 => 36,  90 => 32,  84 => 29,  72 => 20,  65 => 16,  59 => 13,  52 => 8,  48 => 7,  43 => 4,  37 => 3,  11 => 1,);
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

\t {% block table %}
\t <div id=\"div_stock_ajout\">
\t\t <div class=\"\">
\t        <center><h4 class=\"panel-heading alert-danger\">Valider un nouveau stock de produit </h4></center>
\t\t\t{{ form_start(formulaire, {'attr': {'class': 'form-horizontal'}}) }}
\t\t\t{{ form_errors(formulaire) }}


\t\t\t<div class=\"form-group\">
\t\t\t    {# Génération du label. #}
\t\t\t    {{ form_label(formulaire.reference, \"Réference du produit\", {'label_attr': {'class': 'col-sm-4 control-label'}}) }}

\t\t\t    {# Affichage des erreurs pour ce champ précis. #}
\t\t\t    {{ form_errors(formulaire.reference) }}

\t\t\t    <div class=\"col-sm-4\">
\t\t\t        {# Génération de l'input. #}
\t\t\t        {{ form_widget(formulaire.reference, {'attr': {'class': 'form-control'}}) }}
\t\t\t    </div>


\t\t\t\t
\t\t\t</div>

\t\t\t<div class=\"form-group\">
\t\t\t    {# Génération du label. #}
\t\t\t    {{ form_label(formulaire.libelle, \"Libelle du produit : \", {'label_attr': {'class': 'col-sm-4 control-label'}}) }}

\t\t\t    {# Affichage des erreurs pour ce champ précis. #}
\t\t\t    {{ form_errors(formulaire.libelle) }}

\t\t\t    <div class=\"col-sm-4\">
\t\t\t        {# Génération de l'input. #}
\t\t\t        {{ form_widget(formulaire.libelle, {'attr': {'class': 'form-control'}}) }}
\t\t\t    </div>
\t\t\t</div>

\t\t\t<div class=\"form-group\">
\t\t\t    {# Génération du label. #}
\t\t\t    {{ form_label(formulaire.categorie, \"Categorie du produit\", {'label_attr': {'class': 'col-sm-4 control-label'}}) }}

\t\t\t    {# Affichage des erreurs pour ce champ précis. #}
\t\t\t    {{ form_errors(formulaire.categorie) }}

\t\t\t    <div class=\"col-sm-4\">
\t\t\t        {# Génération de l'input. #}
\t\t\t        {{ form_widget(formulaire.categorie, {'attr': {'class': 'form-control'}}) }}
\t\t\t    </div>
\t\t\t</div>


\t\t\t<div class=\"form-group\">
\t\t\t    {# Génération du label. #}
\t\t\t    {{ form_label(formulaire.seuilMin, \"Seuil Minimum \", {'label_attr': {'class': 'col-sm-4 control-label'}}) }}

\t\t\t    {# Affichage des erreurs pour ce champ précis. #}
\t\t\t    {{ form_errors(formulaire.seuilMin) }}

\t\t\t    <div class=\"col-sm-4\">
\t\t\t        {# Génération de l'input. #}
\t\t\t        {{ form_widget(formulaire.seuilMin, {'attr': {'class': 'form-control'}}) }}
\t\t\t    </div>
\t\t\t</div>
\t\t\t

\t\t\t<div class=\"form-group\">
\t\t\t    {# Génération du label. #}
\t\t\t    {{ form_label(formulaire.description, \"Description\", {'label_attr': {'class': 'col-sm-4 control-label'}}) }}

\t\t\t    {# Affichage des erreurs pour ce champ précis. #}
\t\t\t    {{ form_errors(formulaire.description) }}

\t\t\t    <div class=\"col-sm-4\">
\t\t\t        {# Génération de l'input. #}
\t\t\t        {{ form_widget(formulaire.description, {'attr': {'class': 'form-control'}}) }}
\t\t\t    </div>
\t\t\t</div>

\t\t\t<div class=\"form-group\">
\t\t\t    {# Génération du label. #}
\t\t\t    {{ form_label(formulaire.posologie, \"Posologie\", {'label_attr': {'class': 'col-sm-4 control-label'}}) }}

\t\t\t    {# Affichage des erreurs pour ce champ précis. #}
\t\t\t    {{ form_errors(formulaire.posologie) }}

\t\t\t    <div class=\"col-sm-4\">
\t\t\t        {# Génération de l'input. #}
\t\t\t        {{ form_widget(formulaire.posologie, {'attr': {'class': 'form-control'}}) }}
\t\t\t    </div>
\t\t\t</div>

\t\t\t<div id=\"keywords_div\" data-prototype=\"
\t\t\t\t{% filter escape %}
\t\t        <div class='form-group'>
\t\t\t\t
\t\t\t\t\t{{ form_label(formulaire.keywords.vars.prototype.valeur|e, 'Mot clé', {'label_attr': {'class': 'col-sm-4 control-label'}}) }}
\t\t\t\t\t{{ form_errors(formulaire.keywords.vars.prototype.valeur|e) }}
\t\t\t\t\t<div class='col-sm-4'>
\t\t\t\t\t\t{{ form_widget(formulaire.keywords.vars.prototype.valeur|e, {'attr': {'class': 'form-control'}}) }}
\t\t\t\t\t</div>

\t\t\t\t</div> 
\t\t    \t{% endfilter %}\">
\t\t\t</div>

\t\t\t
\t\t\t<div id=\"reste_stock\">
\t\t\t\t<button type=\"button\" class=\"btn btn-primary btn-lg\" data-toggle=\"modal\" data-target=\"#champsmodal\"><span class=\"glyphicon glyphicon-plus\"></span>
\t\t\t\t  \tAjouter d'autres champs
\t\t\t\t</button>
\t\t\t</div>
\t\t\t

\t\t\t<!-- Modal -->
\t\t\t<div class=\"modal fade\" id=\"champsmodal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"champsmodalLabel\">
\t\t\t  <div class=\"modal-dialog\" role=\"document\">
\t\t\t    <div class=\"modal-content\">
\t\t\t      <div class=\"modal-header\">
\t\t\t        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
\t\t\t        <h4 class=\"modal-title\" id=\"champsmodalLabel\">Ajout de nouveaux champs</h4>
\t\t\t      </div>
\t\t\t      <div class=\"modal-body\">
\t\t\t        \t<div id=\"champs_div\" data-prototype=\"
\t\t\t\t\t\t{% filter escape %}
\t\t\t\t        <div class='form-group'>
\t\t\t\t\t\t
\t\t\t\t\t\t\t{{ form_label(formulaire.champs.vars.prototype.nom|e, 'Nom', {'label_attr': {'class': 'col-sm-1 control-label'}}) }}
\t\t\t\t\t\t\t{{ form_errors(formulaire.champs.vars.prototype.nom|e) }}
\t\t\t\t\t\t\t<div class='col-sm-4'>
\t\t\t\t\t\t\t\t{{ form_widget(formulaire.champs.vars.prototype.nom|e, {'attr': {'class': 'form-control'}}) }}
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t{{ form_label(formulaire.champs.vars.prototype.valeur|e, 'Valeur', {'label_attr': {'class': 'col-sm-1 control-label'}}) }}
\t\t\t\t\t\t\t{{ form_errors(formulaire.champs.vars.prototype.valeur|e) }}
\t\t\t\t\t\t\t<div class='col-sm-4'>
\t\t\t\t\t\t\t\t{{ form_widget(formulaire.champs.vars.prototype.valeur|e, {'attr': {'class': 'form-control'}}) }}
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</div> 
\t\t\t\t    \t{% endfilter %}\">
\t\t\t\t\t</div>
\t\t\t      </div>
\t\t\t      <div class=\"modal-footer\">

\t\t\t        <span style=\"margin-left:30%\">{{ form_widget(formulaire.Valider, {'attr': {'class': 'btn btn-primary'}}) }}</span>

\t        \t\t<span style=\"margin-left:25%\">{{ form_widget(formulaire.Annuler, {'attr': {'class': 'btn btn-default', 'data-dismiss':'modal'}}) }}</span>

\t\t\t      </div>
\t\t\t    </div>
\t\t\t  </div>
\t\t\t</div>


\t\t\t\t</br>

\t\t\t{# Pour le bouton, pas de label ni d'erreur, on affiche juste le widget #}
\t        <span style=\"margin-left:30%\">{{ form_widget(formulaire.Valider, {'attr': {'class': 'btn btn-primary'}}) }}</span>

\t        <span style=\"margin-left:25%\">{{ form_widget(formulaire.Annuler, {'attr': {'class': 'btn btn-warning'}}) }}</span>

\t\t\t{{ form_widget(formulaire) }}
\t\t\t {{ form_end(formulaire) }}\t
\t\t\t 


\t\t\t </div>
\t\t </div>



\t{%endblock%}

\t{% block reste %}{% endblock %}


{#<div class=\"form-group\">
\t\t    <label class=\"col-sm-6 control-label\">Ajouter des mots clés</label>
\t\t    <div class=\"col-sm-2\">
    \t\t\t<a href=\"\" id=\"ajout_keyword\"><button type=\"button\" class=\"btn btn-success\"><span class=\"glyphicon glyphicon-plus\"></span></button></a>
    \t\t</div>
\t\t</div>#}

\t\t{#{% set prototype_keywords = formulaire.keywords.vars.prototype %}
\t\t<div id=\"prototype-keywords\" class=\"prototype-keywords\">
\t\t\t<div class=\"form-group\">
\t\t\t\t
\t\t\t\t\t{{ form_label(prototype_keywords.valeur, \"Mot clé\", {'label_attr': {'class': 'col-sm-4 control-label'}}) }}
\t\t\t\t\t{{ form_errors(prototype_keywords.valeur) }}
\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t{{ form_widget(prototype_keywords.valeur, {'attr': {'class': 'form-control'}}) }}
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t

\t\t\t</div>
\t\t</div>
\t\t#}

\t\t{#<div id=\"keywords\" data-prototype=\"
\t\t         {% filter escape %}
\t\t             {{ include('PharmacieStockBundle:Keyword:ajouter.html.twig', { 'formulaire': formulaire.keywords.vars.prototype }) }}
\t\t         {% endfilter %}\">
\t\t</div> #}", "PharmacieStockBundle:Stock:ajouter.html.twig", "/home/abdoulaye/workspace/workflows/progestix/progestix/app/src/Pharmacie/StockBundle/Resources/views/Stock/ajouter.html.twig");
    }
}
