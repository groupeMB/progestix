<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_76c38a9f8b72fd32d7e68b807d288abaae00e075e6402aa922d1a90694979884 extends Twig_Template
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
        $__internal_e9a15bae1336d8ef245fbe427a56853ffc3dd8d0a8def779319868a47fc1c044 = $this->env->getExtension("native_profiler");
        $__internal_e9a15bae1336d8ef245fbe427a56853ffc3dd8d0a8def779319868a47fc1c044->enter($__internal_e9a15bae1336d8ef245fbe427a56853ffc3dd8d0a8def779319868a47fc1c044_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_e9a15bae1336d8ef245fbe427a56853ffc3dd8d0a8def779319868a47fc1c044->leave($__internal_e9a15bae1336d8ef245fbe427a56853ffc3dd8d0a8def779319868a47fc1c044_prof);

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
