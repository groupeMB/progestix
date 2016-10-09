<?php

/* SonataUserBundle:Admin/Core:user_block.html.twig */
class __TwigTemplate_04486c877f60d3441631631e151441f1d9b38987a2018a42a6a84eb44c47c6eb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'user_block' => array($this, 'block_user_block'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_50953101bc14abeffc219f2808e788353e80ca8b155ebdde0e90d541c8b8e049 = $this->env->getExtension("native_profiler");
        $__internal_50953101bc14abeffc219f2808e788353e80ca8b155ebdde0e90d541c8b8e049->enter($__internal_50953101bc14abeffc219f2808e788353e80ca8b155ebdde0e90d541c8b8e049_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataUserBundle:Admin/Core:user_block.html.twig"));

        // line 1
        $this->displayBlock('user_block', $context, $blocks);
        
        $__internal_50953101bc14abeffc219f2808e788353e80ca8b155ebdde0e90d541c8b8e049->leave($__internal_50953101bc14abeffc219f2808e788353e80ca8b155ebdde0e90d541c8b8e049_prof);

    }

    public function block_user_block($context, array $blocks = array())
    {
        $__internal_06f7335138be10e5d7fe1c686bafdc0553fef88341e6d61b9b39c53688aee61b = $this->env->getExtension("native_profiler");
        $__internal_06f7335138be10e5d7fe1c686bafdc0553fef88341e6d61b9b39c53688aee61b->enter($__internal_06f7335138be10e5d7fe1c686bafdc0553fef88341e6d61b9b39c53688aee61b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_block"));

        // line 2
        echo "    ";
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
            // line 3
            echo "        ";
            $context["_bg_class"] = "bg-light-blue";
            // line 4
            echo "        ";
            $context["_logout_uri"] = $this->env->getExtension('routing')->getUrl("sonata_user_admin_security_logout");
            // line 5
            echo "        ";
            $context["_logout_text"] = $this->env->getExtension('translator')->trans("user_block_logout", array(), "SonataUserBundle");
            // line 6
            echo "        ";
            $context["_profile_uri"] = (($this->getAttribute($this->getAttribute((isset($context["sonata_user"]) ? $context["sonata_user"] : $this->getContext($context, "sonata_user")), "userAdmin", array()), "isGranted", array(0 => "EDIT", 1 => $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())), "method")) ? ($this->getAttribute($this->getAttribute((isset($context["sonata_user"]) ? $context["sonata_user"] : $this->getContext($context, "sonata_user")), "userAdmin", array()), "generateUrl", array(0 => "edit", 1 => array("id" => $this->getAttribute($this->getAttribute((isset($context["sonata_user"]) ? $context["sonata_user"] : $this->getContext($context, "sonata_user")), "userAdmin", array()), "id", array(0 => $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())), "method"))), "method")) : ($this->getAttribute($this->getAttribute((isset($context["sonata_user"]) ? $context["sonata_user"] : $this->getContext($context, "sonata_user")), "userAdmin", array()), "generateUrl", array(0 => "show", 1 => array("id" => $this->getAttribute($this->getAttribute((isset($context["sonata_user"]) ? $context["sonata_user"] : $this->getContext($context, "sonata_user")), "userAdmin", array()), "id", array(0 => $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())), "method"))), "method")));
            // line 7
            echo "        ";
            $context["_profile_text"] = $this->env->getExtension('translator')->trans("user_block_profile", array(), "SonataUserBundle");
            // line 8
            echo "        ";
            $context["_user_image"] = $this->env->getExtension('asset')->getAssetUrl($this->getAttribute((isset($context["sonata_user"]) ? $context["sonata_user"] : $this->getContext($context, "sonata_user")), "defaultAvatar", array()));
            // line 9
            echo "        ";
            // line 10
            echo "        ";
            // line 11
            echo "
        ";
            // line 12
            if (($this->env->getExtension('security')->isGranted("ROLE_PREVIOUS_ADMIN") && $this->getAttribute((isset($context["sonata_user"]) ? $context["sonata_user"] : $this->getContext($context, "sonata_user")), "impersonating", array()))) {
                // line 13
                echo "            ";
                $context["_bg_class"] = "bg-light-green";
                // line 14
                echo "            ";
                $context["_logout_uri"] = $this->env->getExtension('routing')->getUrl($this->getAttribute($this->getAttribute((isset($context["sonata_user"]) ? $context["sonata_user"] : $this->getContext($context, "sonata_user")), "impersonating", array()), "route", array()), twig_array_merge($this->getAttribute($this->getAttribute((isset($context["sonata_user"]) ? $context["sonata_user"] : $this->getContext($context, "sonata_user")), "impersonating", array()), "parameters", array()), array("_switch_user" => "_exit")));
                // line 15
                echo "            ";
                $context["_logout_text"] = $this->env->getExtension('translator')->trans("switch_user_exit", array(), "SonataUserBundle");
                // line 16
                echo "        ";
            }
            // line 17
            echo "
        <li class=\"user-header ";
            // line 18
            echo twig_escape_filter($this->env, (isset($context["_bg_class"]) ? $context["_bg_class"] : $this->getContext($context, "_bg_class")), "html", null, true);
            echo "\">
            ";
            // line 19
            if ((isset($context["_user_image"]) ? $context["_user_image"] : $this->getContext($context, "_user_image"))) {
                // line 20
                echo "                <img src=\"";
                echo twig_escape_filter($this->env, (isset($context["_user_image"]) ? $context["_user_image"] : $this->getContext($context, "_user_image")), "html", null, true);
                echo "\" class=\"img-circle\" alt=\"Avatar\" />
            ";
            }
            // line 22
            echo "            <p>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "html", null, true);
            echo "</p>
        </li>

";
            // line 31
            echo "
        <li class=\"user-footer\">
            <div class=\"pull-left\">
                <a href=\"";
            // line 34
            echo twig_escape_filter($this->env, (isset($context["_profile_uri"]) ? $context["_profile_uri"] : $this->getContext($context, "_profile_uri")), "html", null, true);
            echo "\" class=\"btn btn-default btn-flat\"><i class=\"fa fa-user\"></i> ";
            echo twig_escape_filter($this->env, (isset($context["_profile_text"]) ? $context["_profile_text"] : $this->getContext($context, "_profile_text")), "html", null, true);
            echo "</a>
            </div>

            <div class=\"pull-right\">
                <a href=\"";
            // line 38
            echo twig_escape_filter($this->env, (isset($context["_logout_uri"]) ? $context["_logout_uri"] : $this->getContext($context, "_logout_uri")), "html", null, true);
            echo "\" class=\"btn btn-default btn-flat\"><i class=\"fa fa-sign-out fa-fw\"></i> ";
            echo twig_escape_filter($this->env, (isset($context["_logout_text"]) ? $context["_logout_text"] : $this->getContext($context, "_logout_text")), "html", null, true);
            echo "</a>
            </div>
        </li>
    ";
        }
        
        $__internal_06f7335138be10e5d7fe1c686bafdc0553fef88341e6d61b9b39c53688aee61b->leave($__internal_06f7335138be10e5d7fe1c686bafdc0553fef88341e6d61b9b39c53688aee61b_prof);

    }

    public function getTemplateName()
    {
        return "SonataUserBundle:Admin/Core:user_block.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  113 => 38,  104 => 34,  99 => 31,  92 => 22,  86 => 20,  84 => 19,  80 => 18,  77 => 17,  74 => 16,  71 => 15,  68 => 14,  65 => 13,  63 => 12,  60 => 11,  58 => 10,  56 => 9,  53 => 8,  50 => 7,  47 => 6,  44 => 5,  41 => 4,  38 => 3,  35 => 2,  23 => 1,);
    }
}
/* {% block user_block %}*/
/*     {% if app.user %}*/
/*         {% set _bg_class          = "bg-light-blue" %}*/
/*         {% set _logout_uri        = url('sonata_user_admin_security_logout') %}*/
/*         {% set _logout_text       = 'user_block_logout'|trans({}, 'SonataUserBundle') %}*/
/*         {% set _profile_uri       = sonata_user.userAdmin.isGranted('EDIT', app.user) ? sonata_user.userAdmin.generateUrl('edit', {id: sonata_user.userAdmin.id(app.user)}) : sonata_user.userAdmin.generateUrl('show', {id: sonata_user.userAdmin.id(app.user)}) %}*/
/*         {% set _profile_text      = 'user_block_profile'|trans({}, 'SonataUserBundle') %}*/
/*         {% set _user_image        = asset(sonata_user.defaultAvatar) %}*/
/*         {# Customize this with your profile picture implementation, see below for example #}*/
/*         {#{% set _user_image  = app.user.profilePicture|default(asset(sonata_user.defaultAvatar)) %}#}*/
/* */
/*         {% if is_granted('ROLE_PREVIOUS_ADMIN') and sonata_user.impersonating %}*/
/*             {% set _bg_class    = "bg-light-green" %}*/
/*             {% set _logout_uri  = url(sonata_user.impersonating.route, sonata_user.impersonating.parameters| merge({'_switch_user': '_exit'})) %}*/
/*             {% set _logout_text = 'switch_user_exit'|trans({}, 'SonataUserBundle') %}*/
/*         {% endif %}*/
/* */
/*         <li class="user-header {{ _bg_class }}">*/
/*             {% if _user_image %}*/
/*                 <img src="{{ _user_image }}" class="img-circle" alt="Avatar" />*/
/*             {% endif %}*/
/*             <p>{{ app.user }}</p>*/
/*         </li>*/
/* */
/* {#*/
/*     Uncomment to add some information*/
/*         <li class="user-body">*/
/* */
/*         </li>*/
/* #}*/
/* */
/*         <li class="user-footer">*/
/*             <div class="pull-left">*/
/*                 <a href="{{ _profile_uri }}" class="btn btn-default btn-flat"><i class="fa fa-user"></i> {{ _profile_text }}</a>*/
/*             </div>*/
/* */
/*             <div class="pull-right">*/
/*                 <a href="{{ _logout_uri }}" class="btn btn-default btn-flat"><i class="fa fa-sign-out fa-fw"></i> {{ _logout_text }}</a>*/
/*             </div>*/
/*         </li>*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
