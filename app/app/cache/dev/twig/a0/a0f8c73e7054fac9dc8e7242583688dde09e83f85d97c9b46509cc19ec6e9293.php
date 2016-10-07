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
        $__internal_721801bc8ae6993174671c54aa5f2f777ee9b332f6f8720e432e15e3deffa996 = $this->env->getExtension("native_profiler");
        $__internal_721801bc8ae6993174671c54aa5f2f777ee9b332f6f8720e432e15e3deffa996->enter($__internal_721801bc8ae6993174671c54aa5f2f777ee9b332f6f8720e432e15e3deffa996_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_721801bc8ae6993174671c54aa5f2f777ee9b332f6f8720e432e15e3deffa996->leave($__internal_721801bc8ae6993174671c54aa5f2f777ee9b332f6f8720e432e15e3deffa996_prof);

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
