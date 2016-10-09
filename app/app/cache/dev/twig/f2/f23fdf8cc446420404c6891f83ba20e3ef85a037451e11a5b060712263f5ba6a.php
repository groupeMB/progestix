<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_62d92fe5be2e3a1d63d21671d6fbc4ab7c8635147c6e53dd8873ae87a88b232f extends Twig_Template
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
        $__internal_5a3379c077fa9c4ad1b5af73e3b22622986cb4b9ea1d75d87ccb366d6a5bcc94 = $this->env->getExtension("native_profiler");
        $__internal_5a3379c077fa9c4ad1b5af73e3b22622986cb4b9ea1d75d87ccb366d6a5bcc94->enter($__internal_5a3379c077fa9c4ad1b5af73e3b22622986cb4b9ea1d75d87ccb366d6a5bcc94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_5a3379c077fa9c4ad1b5af73e3b22622986cb4b9ea1d75d87ccb366d6a5bcc94->leave($__internal_5a3379c077fa9c4ad1b5af73e3b22622986cb4b9ea1d75d87ccb366d6a5bcc94_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="radio"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     value="<?php echo $view->escape($value) ?>"*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
