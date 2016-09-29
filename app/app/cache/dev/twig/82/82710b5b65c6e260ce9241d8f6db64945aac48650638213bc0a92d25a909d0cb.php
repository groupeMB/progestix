<?php

/* @SonataUser/layout.html.twig */
class __TwigTemplate_fbe5ddd9d4180f953d34ded0cfe47b4d5a43a6ca60289d2e3d557c9cdc4a194f extends Twig_Template
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
        $__internal_d731e43109888649b856a3be31074047cb41d6f862955a8df0ebbd73f8cc11ee = $this->env->getExtension("native_profiler");
        $__internal_d731e43109888649b856a3be31074047cb41d6f862955a8df0ebbd73f8cc11ee->enter($__internal_d731e43109888649b856a3be31074047cb41d6f862955a8df0ebbd73f8cc11ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataUser/layout.html.twig"));

        // line 1
        echo "<div>
    ";
        // line 2
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 4
        echo "</div>";
        
        $__internal_d731e43109888649b856a3be31074047cb41d6f862955a8df0ebbd73f8cc11ee->leave($__internal_d731e43109888649b856a3be31074047cb41d6f862955a8df0ebbd73f8cc11ee_prof);

    }

    // line 2
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c54b1198f95f4aa0a19381421cd379cbb5114ebc247b6aa33df6e71526f2ef62 = $this->env->getExtension("native_profiler");
        $__internal_c54b1198f95f4aa0a19381421cd379cbb5114ebc247b6aa33df6e71526f2ef62->enter($__internal_c54b1198f95f4aa0a19381421cd379cbb5114ebc247b6aa33df6e71526f2ef62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 3
        echo "    ";
        
        $__internal_c54b1198f95f4aa0a19381421cd379cbb5114ebc247b6aa33df6e71526f2ef62->leave($__internal_c54b1198f95f4aa0a19381421cd379cbb5114ebc247b6aa33df6e71526f2ef62_prof);

    }

    public function getTemplateName()
    {
        return "@SonataUser/layout.html.twig";
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
