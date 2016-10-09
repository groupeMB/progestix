<?php

/* SonataUserBundle:Security:base_login.html.twig */
class __TwigTemplate_1d2f81028a7904f2032c26a62da43486f7f2313ae9cb1a20c9469338713c608d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataUserBundle::layout.html.twig", "SonataUserBundle:Security:base_login.html.twig", 12);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
            'sonata_user_login' => array($this, 'block_sonata_user_login'),
            'sonata_user_login_error' => array($this, 'block_sonata_user_login_error'),
            'sonata_user_login_form' => array($this, 'block_sonata_user_login_form'),
            'sonata_user_registration' => array($this, 'block_sonata_user_registration'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8212b5587aab68eb5682677864942cbda15703bd3ef9ceea7879ad78906e3d3e = $this->env->getExtension("native_profiler");
        $__internal_8212b5587aab68eb5682677864942cbda15703bd3ef9ceea7879ad78906e3d3e->enter($__internal_8212b5587aab68eb5682677864942cbda15703bd3ef9ceea7879ad78906e3d3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataUserBundle:Security:base_login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8212b5587aab68eb5682677864942cbda15703bd3ef9ceea7879ad78906e3d3e->leave($__internal_8212b5587aab68eb5682677864942cbda15703bd3ef9ceea7879ad78906e3d3e_prof);

    }

    // line 14
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f27762b4e3c25c02b69e68595a25a8905dfad3faa33f2e64673f1b58f3f7ec38 = $this->env->getExtension("native_profiler");
        $__internal_f27762b4e3c25c02b69e68595a25a8905dfad3faa33f2e64673f1b58f3f7ec38->enter($__internal_f27762b4e3c25c02b69e68595a25a8905dfad3faa33f2e64673f1b58f3f7ec38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 15
        echo "    <div class=\"row\">
        <div class=\"col-sm-6\">
            ";
        // line 17
        $this->displayBlock('sonata_user_login', $context, $blocks);
        // line 74
        echo "        </div>
        <div class=\"col-sm-6\">
            ";
        // line 76
        $this->displayBlock('sonata_user_registration', $context, $blocks);
        // line 79
        echo "        </div>
    </div>
";
        
        $__internal_f27762b4e3c25c02b69e68595a25a8905dfad3faa33f2e64673f1b58f3f7ec38->leave($__internal_f27762b4e3c25c02b69e68595a25a8905dfad3faa33f2e64673f1b58f3f7ec38_prof);

    }

    // line 17
    public function block_sonata_user_login($context, array $blocks = array())
    {
        $__internal_08143e935c9cb04ac22d3ff851e7470766b4469ddee105379cc55b9577780ae0 = $this->env->getExtension("native_profiler");
        $__internal_08143e935c9cb04ac22d3ff851e7470766b4469ddee105379cc55b9577780ae0->enter($__internal_08143e935c9cb04ac22d3ff851e7470766b4469ddee105379cc55b9577780ae0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_user_login"));

        // line 18
        echo "                <div class=\"panel panel-info\">

                <div class=\"panel-heading\">
                    <h2 class=\"panel-title\">";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title_user_authentication", array(), "SonataUserBundle"), "html", null, true);
        echo "</h2>
                </div>

                <div class=\"panel-body\">

                    ";
        // line 26
        $this->displayBlock('sonata_user_login_error', $context, $blocks);
        // line 31
        echo "
                    ";
        // line 32
        $this->displayBlock('sonata_user_login_form', $context, $blocks);
        // line 71
        echo "                </div>
            </div>
            ";
        
        $__internal_08143e935c9cb04ac22d3ff851e7470766b4469ddee105379cc55b9577780ae0->leave($__internal_08143e935c9cb04ac22d3ff851e7470766b4469ddee105379cc55b9577780ae0_prof);

    }

    // line 26
    public function block_sonata_user_login_error($context, array $blocks = array())
    {
        $__internal_c6a7b67be4f11eb006ab78d397591caf6bf84d3764eb57e43df34633a406ac5f = $this->env->getExtension("native_profiler");
        $__internal_c6a7b67be4f11eb006ab78d397591caf6bf84d3764eb57e43df34633a406ac5f->enter($__internal_c6a7b67be4f11eb006ab78d397591caf6bf84d3764eb57e43df34633a406ac5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_user_login_error"));

        // line 27
        echo "                        ";
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 28
            echo "                            <div class=\"alert alert-danger alert-error\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), array(), "FOSUserBundle"), "html", null, true);
            echo "</div>
                        ";
        }
        // line 30
        echo "                    ";
        
        $__internal_c6a7b67be4f11eb006ab78d397591caf6bf84d3764eb57e43df34633a406ac5f->leave($__internal_c6a7b67be4f11eb006ab78d397591caf6bf84d3764eb57e43df34633a406ac5f_prof);

    }

    // line 32
    public function block_sonata_user_login_form($context, array $blocks = array())
    {
        $__internal_08b705a85edcd12e6fb7100aa5dff5606943895ad5c1811f34c4bd61f159295b = $this->env->getExtension("native_profiler");
        $__internal_08b705a85edcd12e6fb7100aa5dff5606943895ad5c1811f34c4bd61f159295b->enter($__internal_08b705a85edcd12e6fb7100aa5dff5606943895ad5c1811f34c4bd61f159295b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_user_login_form"));

        // line 33
        echo "                        <form action=\"";
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\" role=\"form\" class=\"form-horizontal\">
                            <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 34
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\"/>

                            <div class=\"form-group\">
                                <label for=\"username\" class=\"col-sm-4 control-label\">";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.username", array(), "SonataUserBundle"), "html", null, true);
        echo "</label>
                                <div class=\"col-sm-8\"><input type=\"text\" class=\"form-control\" id=\"username\" name=\"_username\" value=\"";
        // line 38
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\"/></div>
                            </div>


                            <div class=\"form-group control-group\">
                                <label for=\"password\" class=\"col-sm-4 control-label\">";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.password", array(), "SonataUserBundle"), "html", null, true);
        echo "</label>
                                <div class=\"col-sm-8\"><input type=\"password\" class=\"form-control\" id=\"password\" name=\"_password\" required=\"required\"/></div>
                            </div>

                            <div class=\"form-group\">
                                <div class=\"col-sm-offset-4 col-sm-8\">
                                    <div class=\"checkbox control-group\">
                                        <label for=\"remember_me\">
                                            <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\"/>
                                            ";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.remember_me", array(), "FOSUserBundle"), "html", null, true);
        echo "
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class=\"form-group control-group\">
                                <div class=\"controls col-sm-offset-4 col-sm-8\">
                                    <a href=\"";
        // line 60
        echo $this->env->getExtension('routing')->getPath("fos_user_resetting_request");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("forgotten_password", array(), "SonataUserBundle"), "html", null, true);
        echo "</a>
                                </div>
                            </div>

                            <div class=\"form-group\">
                                <div class=\"col-sm-offset-4 col-sm-8\">
                                    <input type=\"submit\" id=\"_submit\" name=\"_submit\" class=\"btn btn-primary\" value=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\"/>
                                </div>
                            </div>
                        </form>
                    ";
        
        $__internal_08b705a85edcd12e6fb7100aa5dff5606943895ad5c1811f34c4bd61f159295b->leave($__internal_08b705a85edcd12e6fb7100aa5dff5606943895ad5c1811f34c4bd61f159295b_prof);

    }

    // line 76
    public function block_sonata_user_registration($context, array $blocks = array())
    {
        $__internal_a8c15da52b00eb36d3fdacce9b45c7ccb1c7101b423803850fe0b90db178259f = $this->env->getExtension("native_profiler");
        $__internal_a8c15da52b00eb36d3fdacce9b45c7ccb1c7101b423803850fe0b90db178259f->enter($__internal_a8c15da52b00eb36d3fdacce9b45c7ccb1c7101b423803850fe0b90db178259f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_user_registration"));

        // line 77
        echo "                ";
        echo $this->env->getExtension('actions')->renderUri($this->env->getExtension('http_kernel')->controller("SonataUserBundle:RegistrationFOSUser1:register"), array());
        // line 78
        echo "            ";
        
        $__internal_a8c15da52b00eb36d3fdacce9b45c7ccb1c7101b423803850fe0b90db178259f->leave($__internal_a8c15da52b00eb36d3fdacce9b45c7ccb1c7101b423803850fe0b90db178259f_prof);

    }

    public function getTemplateName()
    {
        return "SonataUserBundle:Security:base_login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  206 => 78,  203 => 77,  197 => 76,  185 => 66,  174 => 60,  163 => 52,  151 => 43,  143 => 38,  139 => 37,  133 => 34,  128 => 33,  122 => 32,  115 => 30,  109 => 28,  106 => 27,  100 => 26,  91 => 71,  89 => 32,  86 => 31,  84 => 26,  76 => 21,  71 => 18,  65 => 17,  56 => 79,  54 => 76,  50 => 74,  48 => 17,  44 => 15,  38 => 14,  11 => 12,);
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
/* {% extends "SonataUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/*     <div class="row">*/
/*         <div class="col-sm-6">*/
/*             {% block sonata_user_login %}*/
/*                 <div class="panel panel-info">*/
/* */
/*                 <div class="panel-heading">*/
/*                     <h2 class="panel-title">{{ 'title_user_authentication'|trans({}, 'SonataUserBundle') }}</h2>*/
/*                 </div>*/
/* */
/*                 <div class="panel-body">*/
/* */
/*                     {% block sonata_user_login_error %}*/
/*                         {% if error %}*/
/*                             <div class="alert alert-danger alert-error">{{ error|trans({}, 'FOSUserBundle') }}</div>*/
/*                         {% endif %}*/
/*                     {% endblock %}*/
/* */
/*                     {% block sonata_user_login_form %}*/
/*                         <form action="{{ path("fos_user_security_check") }}" method="post" role="form" class="form-horizontal">*/
/*                             <input type="hidden" name="_csrf_token" value="{{ csrf_token }}"/>*/
/* */
/*                             <div class="form-group">*/
/*                                 <label for="username" class="col-sm-4 control-label">{{ 'security.login.username'|trans({}, 'SonataUserBundle') }}</label>*/
/*                                 <div class="col-sm-8"><input type="text" class="form-control" id="username" name="_username" value="{{ last_username }}" required="required"/></div>*/
/*                             </div>*/
/* */
/* */
/*                             <div class="form-group control-group">*/
/*                                 <label for="password" class="col-sm-4 control-label">{{ 'security.login.password'|trans({}, 'SonataUserBundle') }}</label>*/
/*                                 <div class="col-sm-8"><input type="password" class="form-control" id="password" name="_password" required="required"/></div>*/
/*                             </div>*/
/* */
/*                             <div class="form-group">*/
/*                                 <div class="col-sm-offset-4 col-sm-8">*/
/*                                     <div class="checkbox control-group">*/
/*                                         <label for="remember_me">*/
/*                                             <input type="checkbox" id="remember_me" name="_remember_me" value="on"/>*/
/*                                             {{ 'security.login.remember_me'|trans({}, 'FOSUserBundle') }}*/
/*                                         </label>*/
/*                                     </div>*/
/*                                 </div>*/
/*                             </div>*/
/* */
/*                             <div class="form-group control-group">*/
/*                                 <div class="controls col-sm-offset-4 col-sm-8">*/
/*                                     <a href="{{ path('fos_user_resetting_request') }}">{{ 'forgotten_password'|trans({}, 'SonataUserBundle') }}</a>*/
/*                                 </div>*/
/*                             </div>*/
/* */
/*                             <div class="form-group">*/
/*                                 <div class="col-sm-offset-4 col-sm-8">*/
/*                                     <input type="submit" id="_submit" name="_submit" class="btn btn-primary" value="{{ 'security.login.submit'|trans({}, 'FOSUserBundle') }}"/>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </form>*/
/*                     {% endblock %}*/
/*                 </div>*/
/*             </div>*/
/*             {% endblock %}*/
/*         </div>*/
/*         <div class="col-sm-6">*/
/*             {% block sonata_user_registration %}*/
/*                 {% render controller("SonataUserBundle:RegistrationFOSUser1:register") %}*/
/*             {% endblock %}*/
/*         </div>*/
/*     </div>*/
/* {% endblock fos_user_content %}*/
/* */
