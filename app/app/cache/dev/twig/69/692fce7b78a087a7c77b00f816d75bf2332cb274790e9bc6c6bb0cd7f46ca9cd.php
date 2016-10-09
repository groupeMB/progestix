<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_518e47e0cb2a251e845e9b57f01ef7940e2d501d76cfb76bfba584a57e908308 extends Twig_Template
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
        $__internal_f6e2540b3fcfeb96a2991207e4dfaae883d888189a7dade13e3590435297b0bb = $this->env->getExtension("native_profiler");
        $__internal_f6e2540b3fcfeb96a2991207e4dfaae883d888189a7dade13e3590435297b0bb->enter($__internal_f6e2540b3fcfeb96a2991207e4dfaae883d888189a7dade13e3590435297b0bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_f6e2540b3fcfeb96a2991207e4dfaae883d888189a7dade13e3590435297b0bb->leave($__internal_f6e2540b3fcfeb96a2991207e4dfaae883d888189a7dade13e3590435297b0bb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo str_replace('{{ widget }}', $view['form']->block($form, 'form_widget_simple'), $money_pattern) ?>*/
/* */
