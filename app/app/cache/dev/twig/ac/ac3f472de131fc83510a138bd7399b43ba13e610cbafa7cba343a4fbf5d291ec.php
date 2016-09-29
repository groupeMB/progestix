<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_1bafdd6733657552eb7d51eb107bd4457bbe273807288e5396b0694a837171a3 extends Twig_Template
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
        $__internal_798a602192a36e672d3cc7f4ead64fed9c16e8ab3cbed6c5f61cc847bf140229 = $this->env->getExtension("native_profiler");
        $__internal_798a602192a36e672d3cc7f4ead64fed9c16e8ab3cbed6c5f61cc847bf140229->enter($__internal_798a602192a36e672d3cc7f4ead64fed9c16e8ab3cbed6c5f61cc847bf140229_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

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
        
        $__internal_798a602192a36e672d3cc7f4ead64fed9c16e8ab3cbed6c5f61cc847bf140229->leave($__internal_798a602192a36e672d3cc7f4ead64fed9c16e8ab3cbed6c5f61cc847bf140229_prof);

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
