<?php

/* WebProfilerBundle:Profiler:header.html.twig */
class __TwigTemplate_a8f46190ba455be4c2b3a0ff9b30774c69ae53ec4c7b2b1ac26478c64a38d8e8 extends Twig_Template
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
        $__internal_8f81594f9ae7923a9646bf1060e7db597bcded3dc9b2ac03cbecf07050f29d45 = $this->env->getExtension("native_profiler");
        $__internal_8f81594f9ae7923a9646bf1060e7db597bcded3dc9b2ac03cbecf07050f29d45->enter($__internal_8f81594f9ae7923a9646bf1060e7db597bcded3dc9b2ac03cbecf07050f29d45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

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
        
        $__internal_8f81594f9ae7923a9646bf1060e7db597bcded3dc9b2ac03cbecf07050f29d45->leave($__internal_8f81594f9ae7923a9646bf1060e7db597bcded3dc9b2ac03cbecf07050f29d45_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:header.html.twig";
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
