<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_e28d39092ccf09be0077d386bd4f1452def30beb596654f7b3a09599ffda14a3 extends Twig_Template
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
        $__internal_46d3132af93c23449641895a25aa7220a00f47a1687d0f582e9f94747b2a332e = $this->env->getExtension("native_profiler");
        $__internal_46d3132af93c23449641895a25aa7220a00f47a1687d0f582e9f94747b2a332e->enter($__internal_46d3132af93c23449641895a25aa7220a00f47a1687d0f582e9f94747b2a332e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_46d3132af93c23449641895a25aa7220a00f47a1687d0f582e9f94747b2a332e->leave($__internal_46d3132af93c23449641895a25aa7220a00f47a1687d0f582e9f94747b2a332e_prof);

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
