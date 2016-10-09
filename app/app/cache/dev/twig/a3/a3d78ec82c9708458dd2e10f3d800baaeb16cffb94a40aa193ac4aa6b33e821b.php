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
        $__internal_bfff96e15386d7d96935a06252750dccbae0a6a9ef0f1113138d999e879c686b = $this->env->getExtension("native_profiler");
        $__internal_bfff96e15386d7d96935a06252750dccbae0a6a9ef0f1113138d999e879c686b->enter($__internal_bfff96e15386d7d96935a06252750dccbae0a6a9ef0f1113138d999e879c686b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_bfff96e15386d7d96935a06252750dccbae0a6a9ef0f1113138d999e879c686b->leave($__internal_bfff96e15386d7d96935a06252750dccbae0a6a9ef0f1113138d999e879c686b_prof);

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
