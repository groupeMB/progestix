<?php

/* SonataUserBundle::layout.html.twig */
class __TwigTemplate_d5347e0b242a96721339a9afa97b0c8062e5577c719a3ef14536394b57aeb311 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bdb943d7f307d7842cf99950169781a135278d29d74efaf328e51f059df7a01e = $this->env->getExtension("native_profiler");
        $__internal_bdb943d7f307d7842cf99950169781a135278d29d74efaf328e51f059df7a01e->enter($__internal_bdb943d7f307d7842cf99950169781a135278d29d74efaf328e51f059df7a01e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataUserBundle::layout.html.twig"));

        // line 1
        echo "<div>
    ";
        // line 2
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 4
        echo "</div>";
        
        $__internal_bdb943d7f307d7842cf99950169781a135278d29d74efaf328e51f059df7a01e->leave($__internal_bdb943d7f307d7842cf99950169781a135278d29d74efaf328e51f059df7a01e_prof);

    }

    // line 2
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9c2d641d9a9a4996a15d1e9aa9f8b3de87dc4e74313b7855df1014e2e33238b0 = $this->env->getExtension("native_profiler");
        $__internal_9c2d641d9a9a4996a15d1e9aa9f8b3de87dc4e74313b7855df1014e2e33238b0->enter($__internal_9c2d641d9a9a4996a15d1e9aa9f8b3de87dc4e74313b7855df1014e2e33238b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 3
        echo "    ";
        
        $__internal_9c2d641d9a9a4996a15d1e9aa9f8b3de87dc4e74313b7855df1014e2e33238b0->leave($__internal_9c2d641d9a9a4996a15d1e9aa9f8b3de87dc4e74313b7855df1014e2e33238b0_prof);

    }

    public function getTemplateName()
    {
        return "SonataUserBundle::layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  41 => 3,  35 => 2,  28 => 4,  26 => 2,  23 => 1,);
    }
}
/* <div>*/
/*     {% block fos_user_content %}*/
/*     {% endblock fos_user_content %}*/
/* </div>*/