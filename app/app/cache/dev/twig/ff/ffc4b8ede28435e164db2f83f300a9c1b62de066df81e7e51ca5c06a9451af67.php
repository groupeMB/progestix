<?php

/* SonataUserBundle:Form:form_admin_fields.html.twig */
class __TwigTemplate_c9a0afab83622d776cfd8718eabd827289e19a83a6e8f529dc7dcf38324983e1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'sonata_security_roles_widget' => array($this, 'block_sonata_security_roles_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0a5c8c08c1765613d2b9b866d1c9eadc62cb7a909a1fda609add211ac35a3f26 = $this->env->getExtension("native_profiler");
        $__internal_0a5c8c08c1765613d2b9b866d1c9eadc62cb7a909a1fda609add211ac35a3f26->enter($__internal_0a5c8c08c1765613d2b9b866d1c9eadc62cb7a909a1fda609add211ac35a3f26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataUserBundle:Form:form_admin_fields.html.twig"));

        // line 1
        $this->displayBlock('sonata_security_roles_widget', $context, $blocks);
        
        $__internal_0a5c8c08c1765613d2b9b866d1c9eadc62cb7a909a1fda609add211ac35a3f26->leave($__internal_0a5c8c08c1765613d2b9b866d1c9eadc62cb7a909a1fda609add211ac35a3f26_prof);

    }

    public function block_sonata_security_roles_widget($context, array $blocks = array())
    {
        $__internal_7f90cad45d545a99e421b42ef89a45c6ca6c12843f4405b670861702dd181fb8 = $this->env->getExtension("native_profiler");
        $__internal_7f90cad45d545a99e421b42ef89a45c6ca6c12843f4405b670861702dd181fb8->enter($__internal_7f90cad45d545a99e421b42ef89a45c6ca6c12843f4405b670861702dd181fb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_security_roles_widget"));

        // line 2
        ob_start();
        // line 3
        echo "    <div class=\"editable\">
        <h4>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("field.label_roles_editable", array(), "SonataUserBundle"), "html", null, true);
        echo "</h4>
        ";
        // line 5
        $this->displayBlock("choice_widget", $context, $blocks);
        echo "
    </div>
    ";
        // line 7
        if ((twig_length_filter($this->env, (isset($context["read_only_choices"]) ? $context["read_only_choices"] : $this->getContext($context, "read_only_choices"))) > 0)) {
            // line 8
            echo "    <div class=\"readonly\">
        <h4>";
            // line 9
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("field.label_roles_readonly", array(), "SonataUserBundle"), "html", null, true);
            echo "</h4>
        <ul>
        ";
            // line 11
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["read_only_choices"]) ? $context["read_only_choices"] : $this->getContext($context, "read_only_choices")));
            foreach ($context['_seq'] as $context["_key"] => $context["choice"]) {
                // line 12
                echo "            <li>";
                echo twig_escape_filter($this->env, $context["choice"], "html", null, true);
                echo "</li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['choice'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 14
            echo "        </ul>
    </div>
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_7f90cad45d545a99e421b42ef89a45c6ca6c12843f4405b670861702dd181fb8->leave($__internal_7f90cad45d545a99e421b42ef89a45c6ca6c12843f4405b670861702dd181fb8_prof);

    }

    public function getTemplateName()
    {
        return "SonataUserBundle:Form:form_admin_fields.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  72 => 14,  63 => 12,  59 => 11,  54 => 9,  51 => 8,  49 => 7,  44 => 5,  40 => 4,  37 => 3,  35 => 2,  23 => 1,);
    }
}
/* {% block sonata_security_roles_widget %}*/
/* {% spaceless %}*/
/*     <div class="editable">*/
/*         <h4>{{ 'field.label_roles_editable'|trans({}, "SonataUserBundle") }}</h4>*/
/*         {{ block('choice_widget') }}*/
/*     </div>*/
/*     {% if read_only_choices|length > 0 %}*/
/*     <div class="readonly">*/
/*         <h4>{{ 'field.label_roles_readonly'|trans({}, "SonataUserBundle") }}</h4>*/
/*         <ul>*/
/*         {% for choice in read_only_choices %}*/
/*             <li>{{ choice }}</li>*/
/*         {% endfor %}*/
/*         </ul>*/
/*     </div>*/
/*     {% endif %}*/
/* {% endspaceless %}*/
/* {% endblock sonata_security_roles_widget %}*/
/* */
