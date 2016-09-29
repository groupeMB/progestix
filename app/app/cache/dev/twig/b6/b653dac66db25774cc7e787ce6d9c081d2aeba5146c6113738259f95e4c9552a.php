<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_3a6089cb59fb8df6a3401fd7d8ede24fa54de4f4340769c5075071f9c2659c16 extends Twig_Template
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
        $__internal_112045905b26efdde5be6b335b669b694fccb79c065754a83c7292eab2bf9634 = $this->env->getExtension("native_profiler");
        $__internal_112045905b26efdde5be6b335b669b694fccb79c065754a83c7292eab2bf9634->enter($__internal_112045905b26efdde5be6b335b669b694fccb79c065754a83c7292eab2bf9634_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_112045905b26efdde5be6b335b669b694fccb79c065754a83c7292eab2bf9634->leave($__internal_112045905b26efdde5be6b335b669b694fccb79c065754a83c7292eab2bf9634_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($compound): ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_compound')?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_simple')?>*/
/* <?php endif ?>*/
/* */
