<?php

/* SonataAdminBundle:Block:block_stats.html.twig */
class __TwigTemplate_61614a2c9fb007afdb09e1a2c97d0b76c95e9ed3fd9d1f20f398c190fdf024ad extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'block' => array($this, 'block_block'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_block"]) ? $context["sonata_block"] : $this->getContext($context, "sonata_block")), "templates", array()), "block_base", array()), "SonataAdminBundle:Block:block_stats.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_81f688e8601498de7f7b6c9a37b26e71319b2dcc235197e6496d2690223ef649 = $this->env->getExtension("native_profiler");
        $__internal_81f688e8601498de7f7b6c9a37b26e71319b2dcc235197e6496d2690223ef649->enter($__internal_81f688e8601498de7f7b6c9a37b26e71319b2dcc235197e6496d2690223ef649_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Block:block_stats.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_81f688e8601498de7f7b6c9a37b26e71319b2dcc235197e6496d2690223ef649->leave($__internal_81f688e8601498de7f7b6c9a37b26e71319b2dcc235197e6496d2690223ef649_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_436ce743dbf492bfb275ad3551d5f2d4cab59e2d39f16cc0614b164e48cb11d3 = $this->env->getExtension("native_profiler");
        $__internal_436ce743dbf492bfb275ad3551d5f2d4cab59e2d39f16cc0614b164e48cb11d3->enter($__internal_436ce743dbf492bfb275ad3551d5f2d4cab59e2d39f16cc0614b164e48cb11d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 15
        echo "    <!-- small box -->
    <div class=\"small-box ";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "color", array()), "html", null, true);
        echo "\">
        <div class=\"inner\">
            <h3>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pager"]) ? $context["pager"] : $this->getContext($context, "pager")), "count", array(), "method"), "html", null, true);
        echo "</h3>

            <p>";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "text", array()), array(), $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "translationDomain", array())), "html", null, true);
        echo "</p>
        </div>
        <div class=\"icon\">
            <i class=\"fa ";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "icon", array()), "html", null, true);
        echo "\"></i>
        </div>
        <a href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "list", 1 => array("filter" => $this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "filters", array()))), "method"), "html", null, true);
        echo "\" class=\"small-box-footer\">
            ";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("stats_view_more", array(), "SonataAdminBundle"), "html", null, true);
        echo " <i class=\"fa fa-arrow-circle-right\"></i>
        </a>
    </div>
";
        
        $__internal_436ce743dbf492bfb275ad3551d5f2d4cab59e2d39f16cc0614b164e48cb11d3->leave($__internal_436ce743dbf492bfb275ad3551d5f2d4cab59e2d39f16cc0614b164e48cb11d3_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Block:block_stats.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 26,  63 => 25,  58 => 23,  52 => 20,  47 => 18,  42 => 16,  39 => 15,  33 => 14,  18 => 12,);
    }
}
/* {#*/
/* */
/* This file is part of the Sonata package.*/
/* */
/* (c) Thomas Rabaix <thomas.rabaix@sonata-project.org>*/
/* */
/* For the full copyright and license information, please view the LICENSE*/
/* file that was distributed with this source code.*/
/* */
/* #}*/
/* */
/* {% extends sonata_block.templates.block_base %}*/
/* */
/* {% block block %}*/
/*     <!-- small box -->*/
/*     <div class="small-box {{ settings.color }}">*/
/*         <div class="inner">*/
/*             <h3>{{ pager.count() }}</h3>*/
/* */
/*             <p>{{ settings.text|trans({}, admin.translationDomain) }}</p>*/
/*         </div>*/
/*         <div class="icon">*/
/*             <i class="fa {{ settings.icon }}"></i>*/
/*         </div>*/
/*         <a href="{{ admin.generateUrl('list', {filter: settings.filters}) }}" class="small-box-footer">*/
/*             {{ 'stats_view_more'|trans({}, 'SonataAdminBundle') }} <i class="fa fa-arrow-circle-right"></i>*/
/*         </a>*/
/*     </div>*/
/* {% endblock %}*/
/* */
