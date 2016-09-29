<?php

/* @WebProfiler/Profiler/header.html.twig */
class __TwigTemplate_b4ad4e96de25f4172cab4003cd102c4db5a5ad77b8553a79b65bf5e8842327f3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c7706c1fb9fbc02497ee4aeda2ff822a222ae79e7218eac090cc5c0f8ee106ed = $this->env->getExtension("native_profiler");
        $__internal_c7706c1fb9fbc02497ee4aeda2ff822a222ae79e7218eac090cc5c0f8ee106ed->enter($__internal_c7706c1fb9fbc02497ee4aeda2ff822a222ae79e7218eac090cc5c0f8ee106ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_c7706c1fb9fbc02497ee4aeda2ff822a222ae79e7218eac090cc5c0f8ee106ed->leave($__internal_c7706c1fb9fbc02497ee4aeda2ff822a222ae79e7218eac090cc5c0f8ee106ed_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 3,  22 => 1,);
    }
}
/* <div id="header">*/
/*     <div class="container">*/
/*         <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>*/
/* */
/*         <div class="search">*/
/*             <form method="get" action="https://symfony.com/search" target="_blank">*/
/*                 <div class="form-row">*/
/*                     <input name="q" id="search-id" type="search" placeholder="search on symfony.com">*/
/*                     <button type="submit" class="btn">Search</button>*/
/*                 </div>*/
/*            </form>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */
