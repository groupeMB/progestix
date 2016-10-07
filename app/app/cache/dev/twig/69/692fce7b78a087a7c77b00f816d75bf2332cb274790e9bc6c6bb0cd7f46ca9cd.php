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
        $__internal_3031d6496c07e34d63b6ef743643675824b44ea5fb1c5a29b2d70c8a5781cfbb = $this->env->getExtension("native_profiler");
        $__internal_3031d6496c07e34d63b6ef743643675824b44ea5fb1c5a29b2d70c8a5781cfbb->enter($__internal_3031d6496c07e34d63b6ef743643675824b44ea5fb1c5a29b2d70c8a5781cfbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_3031d6496c07e34d63b6ef743643675824b44ea5fb1c5a29b2d70c8a5781cfbb->leave($__internal_3031d6496c07e34d63b6ef743643675824b44ea5fb1c5a29b2d70c8a5781cfbb_prof);

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
