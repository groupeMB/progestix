<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_c8dd5d60a28a3289414fc533150b2aeb3edcb42d47dec27787b8d0f28a8f5a24 extends Twig_Template
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
        $__internal_f517aa9690cf49c05c0230fdda47db8fe791d5bb42319a36b639376cfa478f7b = $this->env->getExtension("native_profiler");
        $__internal_f517aa9690cf49c05c0230fdda47db8fe791d5bb42319a36b639376cfa478f7b->enter($__internal_f517aa9690cf49c05c0230fdda47db8fe791d5bb42319a36b639376cfa478f7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_f517aa9690cf49c05c0230fdda47db8fe791d5bb42319a36b639376cfa478f7b->leave($__internal_f517aa9690cf49c05c0230fdda47db8fe791d5bb42319a36b639376cfa478f7b_prof);

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
