<?php

/* SonataAdminBundle:Block:block_rss_dashboard.html.twig */
class __TwigTemplate_944140cb89e0602cdd33487340d4a1e987e4b68b4d818d33d699c8d2e7e58741 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataBlockBundle:Block:block_core_rss.html.twig", "SonataAdminBundle:Block:block_rss_dashboard.html.twig", 12);
        $this->blocks = array(
            'block' => array($this, 'block_block'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataBlockBundle:Block:block_core_rss.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_84c9455a25975a0ffcd2b02fe26fdd649cf64cffa6d6f048a353f5bb63fd83b5 = $this->env->getExtension("native_profiler");
        $__internal_84c9455a25975a0ffcd2b02fe26fdd649cf64cffa6d6f048a353f5bb63fd83b5->enter($__internal_84c9455a25975a0ffcd2b02fe26fdd649cf64cffa6d6f048a353f5bb63fd83b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Block:block_rss_dashboard.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_84c9455a25975a0ffcd2b02fe26fdd649cf64cffa6d6f048a353f5bb63fd83b5->leave($__internal_84c9455a25975a0ffcd2b02fe26fdd649cf64cffa6d6f048a353f5bb63fd83b5_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_a3f99fc8c019508e9f22e093ac50f84c06879ba270209486249e290fe756e4a3 = $this->env->getExtension("native_profiler");
        $__internal_a3f99fc8c019508e9f22e093ac50f84c06879ba270209486249e290fe756e4a3->enter($__internal_a3f99fc8c019508e9f22e093ac50f84c06879ba270209486249e290fe756e4a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 15
        echo "    <div class=\"box box-warning\">
        <div class=\"box-header with-border\">
            <h3 class=\"box-title sonata-feed-title\"><i class=\"fa fa-rss\"></i> ";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "title", array()), "html", null, true);
        echo "</h3>
        </div>

        <div class=\"sonata-feeds-container list-group\">
            ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["feeds"]) ? $context["feeds"] : $this->getContext($context, "feeds")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["feed"]) {
            // line 22
            echo "                <a class=\"list-group-item\" href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["feed"], "link", array()), "html", null, true);
            echo "\" rel=\"nofollow\" title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["feed"], "title", array()), "html", null, true);
            echo "\">
                    <strong>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["feed"], "title", array()), "html", null, true);
            echo "</strong>
                    <div>";
            // line 24
            echo $this->getAttribute($context["feed"], "description", array());
            echo "</div>
                </a>
            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 27
            echo "                <div class=\"list-group-item\">No feeds available.</div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['feed'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "        </div>
    </div>
";
        
        $__internal_a3f99fc8c019508e9f22e093ac50f84c06879ba270209486249e290fe756e4a3->leave($__internal_a3f99fc8c019508e9f22e093ac50f84c06879ba270209486249e290fe756e4a3_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Block:block_rss_dashboard.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 29,  75 => 27,  67 => 24,  63 => 23,  56 => 22,  51 => 21,  44 => 17,  40 => 15,  34 => 14,  11 => 12,);
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
/* {% extends "SonataBlockBundle:Block:block_core_rss.html.twig" %}*/
/* */
/* {% block block %}*/
/*     <div class="box box-warning">*/
/*         <div class="box-header with-border">*/
/*             <h3 class="box-title sonata-feed-title"><i class="fa fa-rss"></i> {{ settings.title }}</h3>*/
/*         </div>*/
/* */
/*         <div class="sonata-feeds-container list-group">*/
/*             {% for feed in feeds %}*/
/*                 <a class="list-group-item" href="{{ feed.link}}" rel="nofollow" title="{{ feed.title }}">*/
/*                     <strong>{{ feed.title }}</strong>*/
/*                     <div>{{ feed.description|raw }}</div>*/
/*                 </a>*/
/*             {% else %}*/
/*                 <div class="list-group-item">No feeds available.</div>*/
/*             {% endfor %}*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
