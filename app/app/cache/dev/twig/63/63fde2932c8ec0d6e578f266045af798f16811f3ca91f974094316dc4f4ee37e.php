<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_460bec09dd3666993a9fcdd06c47d88cda3631c8d01c1205b9cd45cc22da678b extends Twig_Template
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
        $__internal_26ea8eac705b02a18f316608fb24cc46632d2dcbaea3f534cdeac23359cc6595 = $this->env->getExtension("native_profiler");
        $__internal_26ea8eac705b02a18f316608fb24cc46632d2dcbaea3f534cdeac23359cc6595->enter($__internal_26ea8eac705b02a18f316608fb24cc46632d2dcbaea3f534cdeac23359cc6595_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_26ea8eac705b02a18f316608fb24cc46632d2dcbaea3f534cdeac23359cc6595->leave($__internal_26ea8eac705b02a18f316608fb24cc46632d2dcbaea3f534cdeac23359cc6595_prof);

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
