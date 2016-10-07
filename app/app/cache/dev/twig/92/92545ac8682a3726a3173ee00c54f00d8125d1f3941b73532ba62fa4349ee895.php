<?php

/* knp_menu.html.twig */
class __TwigTemplate_ac170f1f124247d59d0c5704d1388022309ee32c558054faf2a46c80f391a8ea extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("knp_menu_base.html.twig", "knp_menu.html.twig", 1);
        $this->blocks = array(
            'compressed_root' => array($this, 'block_compressed_root'),
            'root' => array($this, 'block_root'),
            'list' => array($this, 'block_list'),
            'children' => array($this, 'block_children'),
            'item' => array($this, 'block_item'),
            'linkElement' => array($this, 'block_linkElement'),
            'spanElement' => array($this, 'block_spanElement'),
            'label' => array($this, 'block_label'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "knp_menu_base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_eb3db821a6841ff13aadb745fabd58a88472671c1e3f9162118a0574c7299bff = $this->env->getExtension("native_profiler");
        $__internal_eb3db821a6841ff13aadb745fabd58a88472671c1e3f9162118a0574c7299bff->enter($__internal_eb3db821a6841ff13aadb745fabd58a88472671c1e3f9162118a0574c7299bff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "knp_menu.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_eb3db821a6841ff13aadb745fabd58a88472671c1e3f9162118a0574c7299bff->leave($__internal_eb3db821a6841ff13aadb745fabd58a88472671c1e3f9162118a0574c7299bff_prof);

    }

    // line 11
    public function block_compressed_root($context, array $blocks = array())
    {
        $__internal_ec2798fea28c6a424d66368a275297865e01e47bfb841e7ec6aaf1b547a544d9 = $this->env->getExtension("native_profiler");
        $__internal_ec2798fea28c6a424d66368a275297865e01e47bfb841e7ec6aaf1b547a544d9->enter($__internal_ec2798fea28c6a424d66368a275297865e01e47bfb841e7ec6aaf1b547a544d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "compressed_root"));

        // line 12
        ob_start();
        // line 13
        $this->displayBlock("root", $context, $blocks);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_ec2798fea28c6a424d66368a275297865e01e47bfb841e7ec6aaf1b547a544d9->leave($__internal_ec2798fea28c6a424d66368a275297865e01e47bfb841e7ec6aaf1b547a544d9_prof);

    }

    // line 17
    public function block_root($context, array $blocks = array())
    {
        $__internal_ad308ae4ce5eb74adddb661565572c0def50eb5e5f579d6c465848ed4dc5272c = $this->env->getExtension("native_profiler");
        $__internal_ad308ae4ce5eb74adddb661565572c0def50eb5e5f579d6c465848ed4dc5272c->enter($__internal_ad308ae4ce5eb74adddb661565572c0def50eb5e5f579d6c465848ed4dc5272c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "root"));

        // line 18
        $context["listAttributes"] = $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "childrenAttributes", array());
        // line 19
        $this->displayBlock("list", $context, $blocks);
        
        $__internal_ad308ae4ce5eb74adddb661565572c0def50eb5e5f579d6c465848ed4dc5272c->leave($__internal_ad308ae4ce5eb74adddb661565572c0def50eb5e5f579d6c465848ed4dc5272c_prof);

    }

    // line 22
    public function block_list($context, array $blocks = array())
    {
        $__internal_f9676706e32b7c558a7dd2e8185661946ba337ce67a54e2cec36c8f4f24b2bee = $this->env->getExtension("native_profiler");
        $__internal_f9676706e32b7c558a7dd2e8185661946ba337ce67a54e2cec36c8f4f24b2bee->enter($__internal_f9676706e32b7c558a7dd2e8185661946ba337ce67a54e2cec36c8f4f24b2bee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list"));

        // line 23
        if ((($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "hasChildren", array()) &&  !($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "depth", array()) === 0)) && $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "displayChildren", array()))) {
            // line 24
            echo "    ";
            $context["knp_menu"] = $this;
            // line 25
            echo "    <ul";
            echo $context["knp_menu"]->getattributes((isset($context["listAttributes"]) ? $context["listAttributes"] : $this->getContext($context, "listAttributes")));
            echo ">
        ";
            // line 26
            $this->displayBlock("children", $context, $blocks);
            echo "
    </ul>
";
        }
        
        $__internal_f9676706e32b7c558a7dd2e8185661946ba337ce67a54e2cec36c8f4f24b2bee->leave($__internal_f9676706e32b7c558a7dd2e8185661946ba337ce67a54e2cec36c8f4f24b2bee_prof);

    }

    // line 31
    public function block_children($context, array $blocks = array())
    {
        $__internal_d78c2c297bc1f54b01cf7b33d3d9b4facea716dde1236e9415576246ac109724 = $this->env->getExtension("native_profiler");
        $__internal_d78c2c297bc1f54b01cf7b33d3d9b4facea716dde1236e9415576246ac109724->enter($__internal_d78c2c297bc1f54b01cf7b33d3d9b4facea716dde1236e9415576246ac109724_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "children"));

        // line 33
        $context["currentOptions"] = (isset($context["options"]) ? $context["options"] : $this->getContext($context, "options"));
        // line 34
        $context["currentItem"] = (isset($context["item"]) ? $context["item"] : $this->getContext($context, "item"));
        // line 36
        if ( !(null === $this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "depth", array()))) {
            // line 37
            $context["options"] = twig_array_merge((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), array("depth" => ($this->getAttribute((isset($context["currentOptions"]) ? $context["currentOptions"] : $this->getContext($context, "currentOptions")), "depth", array()) - 1)));
        }
        // line 40
        if (( !(null === $this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "matchingDepth", array())) && ($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "matchingDepth", array()) > 0))) {
            // line 41
            $context["options"] = twig_array_merge((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), array("matchingDepth" => ($this->getAttribute((isset($context["currentOptions"]) ? $context["currentOptions"] : $this->getContext($context, "currentOptions")), "matchingDepth", array()) - 1)));
        }
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["currentItem"]) ? $context["currentItem"] : $this->getContext($context, "currentItem")), "children", array()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 44
            echo "    ";
            $this->displayBlock("item", $context, $blocks);
            echo "
";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        $context["item"] = (isset($context["currentItem"]) ? $context["currentItem"] : $this->getContext($context, "currentItem"));
        // line 48
        $context["options"] = (isset($context["currentOptions"]) ? $context["currentOptions"] : $this->getContext($context, "currentOptions"));
        
        $__internal_d78c2c297bc1f54b01cf7b33d3d9b4facea716dde1236e9415576246ac109724->leave($__internal_d78c2c297bc1f54b01cf7b33d3d9b4facea716dde1236e9415576246ac109724_prof);

    }

    // line 51
    public function block_item($context, array $blocks = array())
    {
        $__internal_35dcc0d3375874df315f7a7e4391f100c256803c9a0f9d6fa6020a9555a34099 = $this->env->getExtension("native_profiler");
        $__internal_35dcc0d3375874df315f7a7e4391f100c256803c9a0f9d6fa6020a9555a34099->enter($__internal_35dcc0d3375874df315f7a7e4391f100c256803c9a0f9d6fa6020a9555a34099_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "item"));

        // line 52
        if ($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "displayed", array())) {
            // line 54
            $context["classes"] = (( !twig_test_empty($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "attribute", array(0 => "class"), "method"))) ? (array(0 => $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "attribute", array(0 => "class"), "method"))) : (array()));
            // line 55
            if ($this->getAttribute((isset($context["matcher"]) ? $context["matcher"] : $this->getContext($context, "matcher")), "isCurrent", array(0 => (isset($context["item"]) ? $context["item"] : $this->getContext($context, "item"))), "method")) {
                // line 56
                $context["classes"] = twig_array_merge((isset($context["classes"]) ? $context["classes"] : $this->getContext($context, "classes")), array(0 => $this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "currentClass", array())));
            } elseif ($this->getAttribute(            // line 57
(isset($context["matcher"]) ? $context["matcher"] : $this->getContext($context, "matcher")), "isAncestor", array(0 => (isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), 1 => $this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "matchingDepth", array())), "method")) {
                // line 58
                $context["classes"] = twig_array_merge((isset($context["classes"]) ? $context["classes"] : $this->getContext($context, "classes")), array(0 => $this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "ancestorClass", array())));
            }
            // line 60
            if ($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "actsLikeFirst", array())) {
                // line 61
                $context["classes"] = twig_array_merge((isset($context["classes"]) ? $context["classes"] : $this->getContext($context, "classes")), array(0 => $this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "firstClass", array())));
            }
            // line 63
            if ($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "actsLikeLast", array())) {
                // line 64
                $context["classes"] = twig_array_merge((isset($context["classes"]) ? $context["classes"] : $this->getContext($context, "classes")), array(0 => $this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "lastClass", array())));
            }
            // line 66
            echo "
    ";
            // line 68
            echo "    ";
            if (($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "hasChildren", array()) &&  !($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "depth", array()) === 0))) {
                // line 69
                echo "        ";
                if (( !twig_test_empty($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "branch_class", array())) && $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "displayChildren", array()))) {
                    // line 70
                    $context["classes"] = twig_array_merge((isset($context["classes"]) ? $context["classes"] : $this->getContext($context, "classes")), array(0 => $this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "branch_class", array())));
                    // line 71
                    echo "        ";
                }
                // line 72
                echo "    ";
            } elseif ( !twig_test_empty($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "leaf_class", array()))) {
                // line 73
                $context["classes"] = twig_array_merge((isset($context["classes"]) ? $context["classes"] : $this->getContext($context, "classes")), array(0 => $this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "leaf_class", array())));
            }
            // line 76
            $context["attributes"] = $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "attributes", array());
            // line 77
            if ( !twig_test_empty((isset($context["classes"]) ? $context["classes"] : $this->getContext($context, "classes")))) {
                // line 78
                $context["attributes"] = twig_array_merge((isset($context["attributes"]) ? $context["attributes"] : $this->getContext($context, "attributes")), array("class" => twig_join_filter((isset($context["classes"]) ? $context["classes"] : $this->getContext($context, "classes")), " ")));
            }
            // line 81
            echo "    ";
            $context["knp_menu"] = $this;
            // line 82
            echo "    <li";
            echo $context["knp_menu"]->getattributes((isset($context["attributes"]) ? $context["attributes"] : $this->getContext($context, "attributes")));
            echo ">";
            // line 83
            if (( !twig_test_empty($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "uri", array())) && ( !$this->getAttribute((isset($context["matcher"]) ? $context["matcher"] : $this->getContext($context, "matcher")), "isCurrent", array(0 => (isset($context["item"]) ? $context["item"] : $this->getContext($context, "item"))), "method") || $this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "currentAsLink", array())))) {
                // line 84
                echo "        ";
                $this->displayBlock("linkElement", $context, $blocks);
            } else {
                // line 86
                echo "        ";
                $this->displayBlock("spanElement", $context, $blocks);
            }
            // line 89
            $context["childrenClasses"] = (( !twig_test_empty($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "childrenAttribute", array(0 => "class"), "method"))) ? (array(0 => $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "childrenAttribute", array(0 => "class"), "method"))) : (array()));
            // line 90
            $context["childrenClasses"] = twig_array_merge((isset($context["childrenClasses"]) ? $context["childrenClasses"] : $this->getContext($context, "childrenClasses")), array(0 => ("menu_level_" . $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "level", array()))));
            // line 91
            $context["listAttributes"] = twig_array_merge($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "childrenAttributes", array()), array("class" => twig_join_filter((isset($context["childrenClasses"]) ? $context["childrenClasses"] : $this->getContext($context, "childrenClasses")), " ")));
            // line 92
            echo "        ";
            $this->displayBlock("list", $context, $blocks);
            echo "
    </li>
";
        }
        
        $__internal_35dcc0d3375874df315f7a7e4391f100c256803c9a0f9d6fa6020a9555a34099->leave($__internal_35dcc0d3375874df315f7a7e4391f100c256803c9a0f9d6fa6020a9555a34099_prof);

    }

    // line 97
    public function block_linkElement($context, array $blocks = array())
    {
        $__internal_54fc650ce9fd8a6e157597c29f5008076beb983cdfc7033cb2c853f61fc17e06 = $this->env->getExtension("native_profiler");
        $__internal_54fc650ce9fd8a6e157597c29f5008076beb983cdfc7033cb2c853f61fc17e06->enter($__internal_54fc650ce9fd8a6e157597c29f5008076beb983cdfc7033cb2c853f61fc17e06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "linkElement"));

        $context["knp_menu"] = $this;
        echo "<a href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "uri", array()), "html", null, true);
        echo "\"";
        echo $context["knp_menu"]->getattributes($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "linkAttributes", array()));
        echo ">";
        $this->displayBlock("label", $context, $blocks);
        echo "</a>";
        
        $__internal_54fc650ce9fd8a6e157597c29f5008076beb983cdfc7033cb2c853f61fc17e06->leave($__internal_54fc650ce9fd8a6e157597c29f5008076beb983cdfc7033cb2c853f61fc17e06_prof);

    }

    // line 99
    public function block_spanElement($context, array $blocks = array())
    {
        $__internal_0d42ae34ae520123138431ce1aa39a0812fb78ab5ad041da50141d01b673270c = $this->env->getExtension("native_profiler");
        $__internal_0d42ae34ae520123138431ce1aa39a0812fb78ab5ad041da50141d01b673270c->enter($__internal_0d42ae34ae520123138431ce1aa39a0812fb78ab5ad041da50141d01b673270c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "spanElement"));

        $context["knp_menu"] = $this;
        echo "<span";
        echo $context["knp_menu"]->getattributes($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "labelAttributes", array()));
        echo ">";
        $this->displayBlock("label", $context, $blocks);
        echo "</span>";
        
        $__internal_0d42ae34ae520123138431ce1aa39a0812fb78ab5ad041da50141d01b673270c->leave($__internal_0d42ae34ae520123138431ce1aa39a0812fb78ab5ad041da50141d01b673270c_prof);

    }

    // line 101
    public function block_label($context, array $blocks = array())
    {
        $__internal_3e011a7869067bb19103157cbcd634f5c4b360ca84a069754ddfbf5facba2642 = $this->env->getExtension("native_profiler");
        $__internal_3e011a7869067bb19103157cbcd634f5c4b360ca84a069754ddfbf5facba2642->enter($__internal_3e011a7869067bb19103157cbcd634f5c4b360ca84a069754ddfbf5facba2642_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        if (($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "allow_safe_labels", array()) && $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "getExtra", array(0 => "safe_label", 1 => false), "method"))) {
            echo $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "label", array());
        } else {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "label", array()), "html", null, true);
        }
        
        $__internal_3e011a7869067bb19103157cbcd634f5c4b360ca84a069754ddfbf5facba2642->leave($__internal_3e011a7869067bb19103157cbcd634f5c4b360ca84a069754ddfbf5facba2642_prof);

    }

    // line 3
    public function getattributes($__attributes__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "attributes" => $__attributes__,
            "varargs" => func_num_args() > 1 ? array_slice(func_get_args(), 1) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_9f7cf9701b6ec997f4aa766ea95a20aa61c14d718caf8f38f81397f9b8222b9d = $this->env->getExtension("native_profiler");
            $__internal_9f7cf9701b6ec997f4aa766ea95a20aa61c14d718caf8f38f81397f9b8222b9d->enter($__internal_9f7cf9701b6ec997f4aa766ea95a20aa61c14d718caf8f38f81397f9b8222b9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "attributes"));

            // line 4
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["attributes"]) ? $context["attributes"] : $this->getContext($context, "attributes")));
            foreach ($context['_seq'] as $context["name"] => $context["value"]) {
                // line 5
                if (( !(null === $context["value"]) &&  !($context["value"] === false))) {
                    // line 6
                    echo sprintf(" %s=\"%s\"", $context["name"], ((($context["value"] === true)) ? (twig_escape_filter($this->env, $context["name"])) : (twig_escape_filter($this->env, $context["value"]))));
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            
            $__internal_9f7cf9701b6ec997f4aa766ea95a20aa61c14d718caf8f38f81397f9b8222b9d->leave($__internal_9f7cf9701b6ec997f4aa766ea95a20aa61c14d718caf8f38f81397f9b8222b9d_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "knp_menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  328 => 6,  326 => 5,  322 => 4,  307 => 3,  291 => 101,  274 => 99,  255 => 97,  243 => 92,  241 => 91,  239 => 90,  237 => 89,  233 => 86,  229 => 84,  227 => 83,  223 => 82,  220 => 81,  217 => 78,  215 => 77,  213 => 76,  210 => 73,  207 => 72,  204 => 71,  202 => 70,  199 => 69,  196 => 68,  193 => 66,  190 => 64,  188 => 63,  185 => 61,  183 => 60,  180 => 58,  178 => 57,  176 => 56,  174 => 55,  172 => 54,  170 => 52,  164 => 51,  157 => 48,  155 => 47,  138 => 44,  121 => 43,  118 => 41,  116 => 40,  113 => 37,  111 => 36,  109 => 34,  107 => 33,  101 => 31,  90 => 26,  85 => 25,  82 => 24,  80 => 23,  74 => 22,  67 => 19,  65 => 18,  59 => 17,  49 => 13,  47 => 12,  41 => 11,  11 => 1,);
    }
}
/* {% extends 'knp_menu_base.html.twig' %}*/
/* */
/* {% macro attributes(attributes) %}*/
/* {% for name, value in attributes %}*/
/*     {%- if value is not none and value is not same as(false) -%}*/
/*         {{- ' %s="%s"'|format(name, value is same as(true) ? name|e : value|e)|raw -}}*/
/*     {%- endif -%}*/
/* {%- endfor -%}*/
/* {% endmacro %}*/
/* */
/* {% block compressed_root %}*/
/* {% spaceless %}*/
/* {{ block('root') }}*/
/* {% endspaceless %}*/
/* {% endblock %}*/
/* */
/* {% block root %}*/
/* {% set listAttributes = item.childrenAttributes %}*/
/* {{ block('list') -}}*/
/* {% endblock %}*/
/* */
/* {% block list %}*/
/* {% if item.hasChildren and options.depth is not same as(0) and item.displayChildren %}*/
/*     {% import _self as knp_menu %}*/
/*     <ul{{ knp_menu.attributes(listAttributes) }}>*/
/*         {{ block('children') }}*/
/*     </ul>*/
/* {% endif %}*/
/* {% endblock %}*/
/* */
/* {% block children %}*/
/* {# save current variables #}*/
/* {% set currentOptions = options %}*/
/* {% set currentItem = item %}*/
/* {# update the depth for children #}*/
/* {% if options.depth is not none %}*/
/* {% set options = options|merge({'depth': currentOptions.depth - 1}) %}*/
/* {% endif %}*/
/* {# update the matchingDepth for children #}*/
/* {% if options.matchingDepth is not none and options.matchingDepth > 0 %}*/
/* {% set options = options|merge({'matchingDepth': currentOptions.matchingDepth - 1}) %}*/
/* {% endif %}*/
/* {% for item in currentItem.children %}*/
/*     {{ block('item') }}*/
/* {% endfor %}*/
/* {# restore current variables #}*/
/* {% set item = currentItem %}*/
/* {% set options = currentOptions %}*/
/* {% endblock %}*/
/* */
/* {% block item %}*/
/* {% if item.displayed %}*/
/* {# building the class of the item #}*/
/*     {%- set classes = item.attribute('class') is not empty ? [item.attribute('class')] : [] %}*/
/*     {%- if matcher.isCurrent(item) %}*/
/*         {%- set classes = classes|merge([options.currentClass]) %}*/
/*     {%- elseif matcher.isAncestor(item, options.matchingDepth) %}*/
/*         {%- set classes = classes|merge([options.ancestorClass]) %}*/
/*     {%- endif %}*/
/*     {%- if item.actsLikeFirst %}*/
/*         {%- set classes = classes|merge([options.firstClass]) %}*/
/*     {%- endif %}*/
/*     {%- if item.actsLikeLast %}*/
/*         {%- set classes = classes|merge([options.lastClass]) %}*/
/*     {%- endif %}*/
/* */
/*     {# Mark item as "leaf" (no children) or as "branch" (has children that are displayed) #}*/
/*     {% if item.hasChildren and options.depth is not same as(0) %}*/
/*         {% if options.branch_class is not empty and item.displayChildren %}*/
/*             {%- set classes = classes|merge([options.branch_class]) %}*/
/*         {% endif %}*/
/*     {% elseif options.leaf_class is not empty %}*/
/*         {%- set classes = classes|merge([options.leaf_class]) %}*/
/*     {%- endif %}*/
/* */
/*     {%- set attributes = item.attributes %}*/
/*     {%- if classes is not empty %}*/
/*         {%- set attributes = attributes|merge({'class': classes|join(' ')}) %}*/
/*     {%- endif %}*/
/* {# displaying the item #}*/
/*     {% import _self as knp_menu %}*/
/*     <li{{ knp_menu.attributes(attributes) }}>*/
/*         {%- if item.uri is not empty and (not matcher.isCurrent(item) or options.currentAsLink) %}*/
/*         {{ block('linkElement') }}*/
/*         {%- else %}*/
/*         {{ block('spanElement') }}*/
/*         {%- endif %}*/
/* {# render the list of children#}*/
/*         {%- set childrenClasses = item.childrenAttribute('class') is not empty ? [item.childrenAttribute('class')] : [] %}*/
/*         {%- set childrenClasses = childrenClasses|merge(['menu_level_' ~ item.level]) %}*/
/*         {%- set listAttributes = item.childrenAttributes|merge({'class': childrenClasses|join(' ') }) %}*/
/*         {{ block('list') }}*/
/*     </li>*/
/* {% endif %}*/
/* {% endblock %}*/
/* */
/* {% block linkElement %}{% import _self as knp_menu %}<a href="{{ item.uri }}"{{ knp_menu.attributes(item.linkAttributes) }}>{{ block('label') }}</a>{% endblock %}*/
/* */
/* {% block spanElement %}{% import _self as knp_menu %}<span{{ knp_menu.attributes(item.labelAttributes) }}>{{ block('label') }}</span>{% endblock %}*/
/* */
/* {% block label %}{% if options.allow_safe_labels and item.getExtra('safe_label', false) %}{{ item.label|raw }}{% else %}{{ item.label }}{% endif %}{% endblock %}*/
/* */
