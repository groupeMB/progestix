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
        $__internal_ad0d57c2a5986c312ee35e2d96e41e75852c1f7df81d659ad3fe63ab8540486e = $this->env->getExtension("native_profiler");
        $__internal_ad0d57c2a5986c312ee35e2d96e41e75852c1f7df81d659ad3fe63ab8540486e->enter($__internal_ad0d57c2a5986c312ee35e2d96e41e75852c1f7df81d659ad3fe63ab8540486e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataUserBundle::layout.html.twig"));

        // line 1
        echo "<div>
    ";
        // line 2
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 4
        echo "</div>";
        
        $__internal_ad0d57c2a5986c312ee35e2d96e41e75852c1f7df81d659ad3fe63ab8540486e->leave($__internal_ad0d57c2a5986c312ee35e2d96e41e75852c1f7df81d659ad3fe63ab8540486e_prof);

    }

    // line 2
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_eb9e6d701e54dbb21002f4343c328888ed2e086b20d0a4dd5e6f59ac22c2d31c = $this->env->getExtension("native_profiler");
        $__internal_eb9e6d701e54dbb21002f4343c328888ed2e086b20d0a4dd5e6f59ac22c2d31c->enter($__internal_eb9e6d701e54dbb21002f4343c328888ed2e086b20d0a4dd5e6f59ac22c2d31c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 3
        echo "    ";
        
        $__internal_eb9e6d701e54dbb21002f4343c328888ed2e086b20d0a4dd5e6f59ac22c2d31c->leave($__internal_eb9e6d701e54dbb21002f4343c328888ed2e086b20d0a4dd5e6f59ac22c2d31c_prof);

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
