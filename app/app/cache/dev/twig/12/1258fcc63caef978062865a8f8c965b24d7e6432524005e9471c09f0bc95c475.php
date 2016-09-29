<?php

/* @SonataBlock/Block/block_exception_debug.html.twig */
class __TwigTemplate_e80793fd5bf69f7f22a59896a939a6d6cc5c4cd9dab30bd9cb46662f0e685337 extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_block"]) ? $context["sonata_block"] : $this->getContext($context, "sonata_block")), "templates", array()), "block_base", array()), "@SonataBlock/Block/block_exception_debug.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_11a2078e14e00d6a353a7b81d4b8be85abdf17efd809936b3b572578b3266c73 = $this->env->getExtension("native_profiler");
        $__internal_11a2078e14e00d6a353a7b81d4b8be85abdf17efd809936b3b572578b3266c73->enter($__internal_11a2078e14e00d6a353a7b81d4b8be85abdf17efd809936b3b572578b3266c73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataBlock/Block/block_exception_debug.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_11a2078e14e00d6a353a7b81d4b8be85abdf17efd809936b3b572578b3266c73->leave($__internal_11a2078e14e00d6a353a7b81d4b8be85abdf17efd809936b3b572578b3266c73_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_bab3edf870528c58cd33bcaf764f1eb655174fe8c54df14efabe5dae3d4e1db6 = $this->env->getExtension("native_profiler");
        $__internal_bab3edf870528c58cd33bcaf764f1eb655174fe8c54df14efabe5dae3d4e1db6->enter($__internal_bab3edf870528c58cd33bcaf764f1eb655174fe8c54df14efabe5dae3d4e1db6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 15
        echo "    <div class=\"cms-block-exception\" ";
        if ((isset($context["forceStyle"]) ? $context["forceStyle"] : $this->getContext($context, "forceStyle"))) {
            echo "style=\"overflow-y: scroll; min-width: 300px; max-height: 300px;\"";
        }
        echo ">

        ";
        // line 18
        echo "        ";
        if ((isset($context["forceStyle"]) ? $context["forceStyle"] : $this->getContext($context, "forceStyle"))) {
            // line 19
            echo "            <link href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception_layout.css"), "html", null, true);
            echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
            <link href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css"), "html", null, true);
            echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
        ";
        }
        // line 22
        echo "        ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "@SonataBlock/Block/block_exception_debug.html.twig", 22)->display($context);
        // line 23
        echo "    </div>
";
        
        $__internal_bab3edf870528c58cd33bcaf764f1eb655174fe8c54df14efabe5dae3d4e1db6->leave($__internal_bab3edf870528c58cd33bcaf764f1eb655174fe8c54df14efabe5dae3d4e1db6_prof);

    }

    public function getTemplateName()
    {
        return "@SonataBlock/Block/block_exception_debug.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 23,  60 => 22,  55 => 20,  50 => 19,  47 => 18,  39 => 15,  33 => 14,  18 => 12,);
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
/*     <div class="cms-block-exception" {% if forceStyle %}style="overflow-y: scroll; min-width: 300px; max-height: 300px;"{% endif %}>*/
/* */
/*         {# this is dirty but the alternative would require a new block-optimized exception css #}*/
/*         {% if forceStyle %}*/
/*             <link href="{{ asset('bundles/framework/css/exception_layout.css') }}" rel="stylesheet" type="text/css" media="all" />*/
/*             <link href="{{ asset('bundles/framework/css/exception.css') }}" rel="stylesheet" type="text/css" media="all" />*/
/*         {% endif %}*/
/*         {% include 'TwigBundle:Exception:exception.html.twig' %}*/
/*     </div>*/
/* {% endblock %}*/
/* */
