<?php

/* GestionInventaireBundle:Inventaire:listerType.html.twig */
class __TwigTemplate_4f8f3f8de119f54da58ea90c3f1cab487c82f7de9cff73d0229d65cc277e5ca7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("GestionInventaireBundle::template.html.twig", "GestionInventaireBundle:Inventaire:listerType.html.twig", 1);
        $this->blocks = array(
            'contenu' => array($this, 'block_contenu'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "GestionInventaireBundle::template.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fa9b8b2260348f30e82110c7140aecd94c17263604b138b3773dca79c9aa88ec = $this->env->getExtension("native_profiler");
        $__internal_fa9b8b2260348f30e82110c7140aecd94c17263604b138b3773dca79c9aa88ec->enter($__internal_fa9b8b2260348f30e82110c7140aecd94c17263604b138b3773dca79c9aa88ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GestionInventaireBundle:Inventaire:listerType.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fa9b8b2260348f30e82110c7140aecd94c17263604b138b3773dca79c9aa88ec->leave($__internal_fa9b8b2260348f30e82110c7140aecd94c17263604b138b3773dca79c9aa88ec_prof);

    }

    // line 2
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_20f4f48d273276cdd1bbbda1af7328e845db7ca7154d3f16706012a61ec185f5 = $this->env->getExtension("native_profiler");
        $__internal_20f4f48d273276cdd1bbbda1af7328e845db7ca7154d3f16706012a61ec185f5->enter($__internal_20f4f48d273276cdd1bbbda1af7328e845db7ca7154d3f16706012a61ec185f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

        // line 3
        echo "\t <div class=\"col-md-12\" >
    <a href=\"";
        // line 4
        echo $this->env->getExtension('routing')->getPath("gestion_inventaire_ajouter_type");
        echo "\"><button class=\"btn btn-info btn-xs\"><span class=\"glyphicon glyphicon-plus\"></span> ajouter</button></a>
        <div class=\"table-responsive\">
            <table id=\"mytable\" class=\"table table-bordered\">
                <thead>
                    <th>Libellé</th>
                    <th>Description</th>
                    <th></th>
                </thead>
                <tbody>
                    ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["types"]) ? $context["types"] : $this->getContext($context, "types")));
        foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
            // line 14
            echo "                         <tr>
                            <td>";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], "libelle", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], "description", array()), "html", null, true);
            echo "</td>

                             <td>
                             <a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("gestion_inventaire_modifier_type", array("id" => $this->getAttribute($context["tag"], "id", array()))), "html", null, true);
            echo "\"><button class=\"btn btn-info btn-xs\"><span class=\"glyphicon glyphicon-edit\"></span></button></a>
                             <a href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("gestion_inventaire_supprimer_type", array("id" => $this->getAttribute($context["tag"], "id", array()))), "html", null, true);
            echo "\"><button class=\"btn btn-info btn-xs\"><span class=\"glyphicon glyphicon-trash\"></span></button></a>
                             </td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "                </tbody>
            </table>
        </div>
";
        
        $__internal_20f4f48d273276cdd1bbbda1af7328e845db7ca7154d3f16706012a61ec185f5->leave($__internal_20f4f48d273276cdd1bbbda1af7328e845db7ca7154d3f16706012a61ec185f5_prof);

    }

    public function getTemplateName()
    {
        return "GestionInventaireBundle:Inventaire:listerType.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 24,  76 => 20,  72 => 19,  66 => 16,  62 => 15,  59 => 14,  55 => 13,  43 => 4,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends "GestionInventaireBundle::template.html.twig" %}*/
/* {% block contenu %}*/
/* 	 <div class="col-md-12" >*/
/*     <a href="{{ path('gestion_inventaire_ajouter_type')}}"><button class="btn btn-info btn-xs"><span class="glyphicon glyphicon-plus"></span> ajouter</button></a>*/
/*         <div class="table-responsive">*/
/*             <table id="mytable" class="table table-bordered">*/
/*                 <thead>*/
/*                     <th>Libellé</th>*/
/*                     <th>Description</th>*/
/*                     <th></th>*/
/*                 </thead>*/
/*                 <tbody>*/
/*                     {% for tag in types %}*/
/*                          <tr>*/
/*                             <td>{{ tag.libelle}}</td>*/
/*                             <td>{{ tag.description }}</td>*/
/* */
/*                              <td>*/
/*                              <a href="{{ path('gestion_inventaire_modifier_type', {'id': tag.id}) }}"><button class="btn btn-info btn-xs"><span class="glyphicon glyphicon-edit"></span></button></a>*/
/*                              <a href="{{ path('gestion_inventaire_supprimer_type', {'id': tag.id}) }}"><button class="btn btn-info btn-xs"><span class="glyphicon glyphicon-trash"></span></button></a>*/
/*                              </td>*/
/*                         </tr>*/
/*                     {% endfor %}*/
/*                 </tbody>*/
/*             </table>*/
/*         </div>*/
/* {% endblock%}*/
