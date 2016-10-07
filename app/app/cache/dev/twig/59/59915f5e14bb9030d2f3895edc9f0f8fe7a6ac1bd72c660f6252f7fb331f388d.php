<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_a886f3bc90cbfd1b1751ecaaec2cd09bd79d2672f31220a1486c730a8af54915 extends Twig_Template
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
        $__internal_44a17259ed84cff46e480d1d293302ff3fee6b09f6d47493d47b2c3e9cd6d367 = $this->env->getExtension("native_profiler");
        $__internal_44a17259ed84cff46e480d1d293302ff3fee6b09f6d47493d47b2c3e9cd6d367->enter($__internal_44a17259ed84cff46e480d1d293302ff3fee6b09f6d47493d47b2c3e9cd6d367_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_44a17259ed84cff46e480d1d293302ff3fee6b09f6d47493d47b2c3e9cd6d367->leave($__internal_44a17259ed84cff46e480d1d293302ff3fee6b09f6d47493d47b2c3e9cd6d367_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <table <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <tr>*/
/*         <td colspan="2">*/
/*             <?php echo $view['form']->errors($form) ?>*/
/*         </td>*/
/*     </tr>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </table>*/
/* */
