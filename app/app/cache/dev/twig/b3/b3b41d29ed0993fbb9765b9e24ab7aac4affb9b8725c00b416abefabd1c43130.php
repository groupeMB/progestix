<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_8ad7d04f2cef224ee5e20117045ec5bc0c6bb4d659bda10ce5df3ce33b29371f extends Twig_Template
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
        $__internal_fc4ce33427e20ffb108eb0988a163c9c73e2ffc4df68f306cca9ff3e0f75c849 = $this->env->getExtension("native_profiler");
        $__internal_fc4ce33427e20ffb108eb0988a163c9c73e2ffc4df68f306cca9ff3e0f75c849->enter($__internal_fc4ce33427e20ffb108eb0988a163c9c73e2ffc4df68f306cca9ff3e0f75c849_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_fc4ce33427e20ffb108eb0988a163c9c73e2ffc4df68f306cca9ff3e0f75c849->leave($__internal_fc4ce33427e20ffb108eb0988a163c9c73e2ffc4df68f306cca9ff3e0f75c849_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="<?php echo isset($type) ? $view->escape($type) : 'text' ?>" <?php echo $view['form']->block($form, 'widget_attributes') ?><?php if (!empty($value) || is_numeric($value)): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?> />*/
/* */
