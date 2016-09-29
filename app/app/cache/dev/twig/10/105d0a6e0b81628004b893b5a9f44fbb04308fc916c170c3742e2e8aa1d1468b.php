<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_dca2062e2c24da88aae2c08da408c8fbad7601c38a07ac086c3b004657c21cd8 extends Twig_Template
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
        $__internal_a8745e7fedc9e8ae02c554ae50a1e495ef8b84711752a32757e42879fa432aa8 = $this->env->getExtension("native_profiler");
        $__internal_a8745e7fedc9e8ae02c554ae50a1e495ef8b84711752a32757e42879fa432aa8->enter($__internal_a8745e7fedc9e8ae02c554ae50a1e495ef8b84711752a32757e42879fa432aa8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_a8745e7fedc9e8ae02c554ae50a1e495ef8b84711752a32757e42879fa432aa8->leave($__internal_a8745e7fedc9e8ae02c554ae50a1e495ef8b84711752a32757e42879fa432aa8_prof);

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
