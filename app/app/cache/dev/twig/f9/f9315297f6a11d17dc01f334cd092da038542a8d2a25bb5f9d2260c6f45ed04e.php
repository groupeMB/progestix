<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_b1d3376ef148a086bda3130bbbe41065a3dd2f77be92abde44134c275f266f35 extends Twig_Template
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
        $__internal_49a8271a3809749a1d4896f38bc926a058e951bb88bd174205b9264a0b58a3ca = $this->env->getExtension("native_profiler");
        $__internal_49a8271a3809749a1d4896f38bc926a058e951bb88bd174205b9264a0b58a3ca->enter($__internal_49a8271a3809749a1d4896f38bc926a058e951bb88bd174205b9264a0b58a3ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_49a8271a3809749a1d4896f38bc926a058e951bb88bd174205b9264a0b58a3ca->leave($__internal_49a8271a3809749a1d4896f38bc926a058e951bb88bd174205b9264a0b58a3ca_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="checkbox"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     <?php if (strlen($value) > 0): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?>*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
