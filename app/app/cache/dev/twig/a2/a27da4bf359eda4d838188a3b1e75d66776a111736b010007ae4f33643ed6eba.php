<?php

/* GestionInventaireBundle:Inventaire:ajouterType.html.twig */
class __TwigTemplate_1bfe8a921cbba2185e83f3e39f273b477a9ad784dd510d1833935b2d5923b676 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("GestionInventaireBundle::template.html.twig", "GestionInventaireBundle:Inventaire:ajouterType.html.twig", 1);
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
        $__internal_0d9c834697c7e34896e9f41ee963228a5731b4e632d86b8367aac7185ed14136 = $this->env->getExtension("native_profiler");
        $__internal_0d9c834697c7e34896e9f41ee963228a5731b4e632d86b8367aac7185ed14136->enter($__internal_0d9c834697c7e34896e9f41ee963228a5731b4e632d86b8367aac7185ed14136_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GestionInventaireBundle:Inventaire:ajouterType.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0d9c834697c7e34896e9f41ee963228a5731b4e632d86b8367aac7185ed14136->leave($__internal_0d9c834697c7e34896e9f41ee963228a5731b4e632d86b8367aac7185ed14136_prof);

    }

    // line 2
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_f0926048b5ff6968d6b867aeaf21defd15a3e16411704a48e0f054c40aadf28d = $this->env->getExtension("native_profiler");
        $__internal_f0926048b5ff6968d6b867aeaf21defd15a3e16411704a48e0f054c40aadf28d->enter($__internal_f0926048b5ff6968d6b867aeaf21defd15a3e16411704a48e0f054c40aadf28d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

        // line 3
        echo "    <br><br>
    <div class=\"well\">
        <form method=\"post\" ";
        // line 5
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">
            ";
        // line 6
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
            <input type=\"submit\" class=\"btn btn-primary\" value=\"valider\"/>
        </form>
    </div>
 ";
        
        $__internal_f0926048b5ff6968d6b867aeaf21defd15a3e16411704a48e0f054c40aadf28d->leave($__internal_f0926048b5ff6968d6b867aeaf21defd15a3e16411704a48e0f054c40aadf28d_prof);

    }

    public function getTemplateName()
    {
        return "GestionInventaireBundle:Inventaire:ajouterType.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 6,  44 => 5,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends "GestionInventaireBundle::template.html.twig" %}*/
/*  {% block contenu %}*/
/*     <br><br>*/
/*     <div class="well">*/
/*         <form method="post" {{ form_enctype(form) }}>*/
/*             {{ form_widget(form) }}*/
/*             <input type="submit" class="btn btn-primary" value="valider"/>*/
/*         </form>*/
/*     </div>*/
/*  {%endblock%}*/
