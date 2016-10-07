<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_e31b02e33b004cdd9a8c873c23c1a6e86cfbe9c871a7943dcbd2589564e96f27 extends Twig_Template
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
        $__internal_6fd1902b81ee79aaf9450aa9f3147dbc4050380aa73ff7570c5ccd7ce805f628 = $this->env->getExtension("native_profiler");
        $__internal_6fd1902b81ee79aaf9450aa9f3147dbc4050380aa73ff7570c5ccd7ce805f628->enter($__internal_6fd1902b81ee79aaf9450aa9f3147dbc4050380aa73ff7570c5ccd7ce805f628_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_6fd1902b81ee79aaf9450aa9f3147dbc4050380aa73ff7570c5ccd7ce805f628->leave($__internal_6fd1902b81ee79aaf9450aa9f3147dbc4050380aa73ff7570c5ccd7ce805f628_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/* <?php foreach ($form as $child): ?>*/
/*     <?php echo $view['form']->widget($child) ?>*/
/*     <?php echo $view['form']->label($child, null, array('translation_domain' => $choice_translation_domain)) ?>*/
/* <?php endforeach ?>*/
/* </div>*/
/* */
