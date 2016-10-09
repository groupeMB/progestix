<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_0f408e08abf632cf8fbe4f1c6b7c863df138081ced3bf1fc02f0b48a4dcade72 extends Twig_Template
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
        $__internal_e3a4c90e0533896782783d8ef04b3ee03b2a83a168265e772b8d02e0a8fc9243 = $this->env->getExtension("native_profiler");
        $__internal_e3a4c90e0533896782783d8ef04b3ee03b2a83a168265e772b8d02e0a8fc9243->enter($__internal_e3a4c90e0533896782783d8ef04b3ee03b2a83a168265e772b8d02e0a8fc9243_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_e3a4c90e0533896782783d8ef04b3ee03b2a83a168265e772b8d02e0a8fc9243->leave($__internal_e3a4c90e0533896782783d8ef04b3ee03b2a83a168265e772b8d02e0a8fc9243_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <textarea <?php echo $view['form']->block($form, 'widget_attributes') ?>><?php echo $view->escape($value) ?></textarea>*/
/* */
