<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_4b28ee2112910659ba42a54d9f26cdd32b9d097f89ca9154d55a4e9e36e23de1 extends Twig_Template
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
        $__internal_adc1f49fdea13e2e5088bf8aa557e692bcf7a2b8060d1b6ee7267a62d73f82fc = $this->env->getExtension("native_profiler");
        $__internal_adc1f49fdea13e2e5088bf8aa557e692bcf7a2b8060d1b6ee7267a62d73f82fc->enter($__internal_adc1f49fdea13e2e5088bf8aa557e692bcf7a2b8060d1b6ee7267a62d73f82fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_adc1f49fdea13e2e5088bf8aa557e692bcf7a2b8060d1b6ee7267a62d73f82fc->leave($__internal_adc1f49fdea13e2e5088bf8aa557e692bcf7a2b8060d1b6ee7267a62d73f82fc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($widget == 'single_text'): ?>*/
/*     <?php echo $view['form']->block($form, 'form_widget_simple'); ?>*/
/* <?php else: ?>*/
/*     <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*         <?php echo $view['form']->widget($form['date']).' '.$view['form']->widget($form['time']) ?>*/
/*     </div>*/
/* <?php endif ?>*/
/* */