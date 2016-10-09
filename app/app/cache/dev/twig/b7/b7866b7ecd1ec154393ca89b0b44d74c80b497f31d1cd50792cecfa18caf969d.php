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
        $__internal_6040d878261d4dc720f54cb3bcc09ccf6f591e9a1ec12c07422a38e7438aa689 = $this->env->getExtension("native_profiler");
        $__internal_6040d878261d4dc720f54cb3bcc09ccf6f591e9a1ec12c07422a38e7438aa689->enter($__internal_6040d878261d4dc720f54cb3bcc09ccf6f591e9a1ec12c07422a38e7438aa689_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_6040d878261d4dc720f54cb3bcc09ccf6f591e9a1ec12c07422a38e7438aa689->leave($__internal_6040d878261d4dc720f54cb3bcc09ccf6f591e9a1ec12c07422a38e7438aa689_prof);

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
