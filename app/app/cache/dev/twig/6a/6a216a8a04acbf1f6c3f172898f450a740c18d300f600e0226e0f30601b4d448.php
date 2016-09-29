<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_4e201c17e974b14041490bd583fe2b6295701a6a5b616340f770725d2514c0be extends Twig_Template
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
        $__internal_068c05dbcc087e46b146670271e4b74df59279a77c1f25002992aa121354def0 = $this->env->getExtension("native_profiler");
        $__internal_068c05dbcc087e46b146670271e4b74df59279a77c1f25002992aa121354def0->enter($__internal_068c05dbcc087e46b146670271e4b74df59279a77c1f25002992aa121354def0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_068c05dbcc087e46b146670271e4b74df59279a77c1f25002992aa121354def0->leave($__internal_068c05dbcc087e46b146670271e4b74df59279a77c1f25002992aa121354def0_prof);

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
