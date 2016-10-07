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
        $__internal_dd5afacc7ae17926d4dad4d8a1c64a3a44c09f82818094da379e219572ce579d = $this->env->getExtension("native_profiler");
        $__internal_dd5afacc7ae17926d4dad4d8a1c64a3a44c09f82818094da379e219572ce579d->enter($__internal_dd5afacc7ae17926d4dad4d8a1c64a3a44c09f82818094da379e219572ce579d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_dd5afacc7ae17926d4dad4d8a1c64a3a44c09f82818094da379e219572ce579d->leave($__internal_dd5afacc7ae17926d4dad4d8a1c64a3a44c09f82818094da379e219572ce579d_prof);

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
