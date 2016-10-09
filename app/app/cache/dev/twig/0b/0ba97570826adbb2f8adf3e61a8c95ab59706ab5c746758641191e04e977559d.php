<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_db6317796fa621b566a48e6e7f8970349acb07772f25d8203e221e72f9799fe4 extends Twig_Template
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
        $__internal_b02180efdd869d649dccd04ceaee8d6c3002217885ecfd002a49a4dcabcad479 = $this->env->getExtension("native_profiler");
        $__internal_b02180efdd869d649dccd04ceaee8d6c3002217885ecfd002a49a4dcabcad479->enter($__internal_b02180efdd869d649dccd04ceaee8d6c3002217885ecfd002a49a4dcabcad479_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_b02180efdd869d649dccd04ceaee8d6c3002217885ecfd002a49a4dcabcad479->leave($__internal_b02180efdd869d649dccd04ceaee8d6c3002217885ecfd002a49a4dcabcad479_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </div>*/
/* */
