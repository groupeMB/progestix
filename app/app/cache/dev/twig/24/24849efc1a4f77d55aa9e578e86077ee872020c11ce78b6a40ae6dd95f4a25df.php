<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_f4170e2d270f95e77298dc707cd54145372996ec4795e6b23347d7f2832461b8 extends Twig_Template
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
        $__internal_4379748833b269b36087d878f6a516d6d71fbbf33f9e753f93e903503a34afa4 = $this->env->getExtension("native_profiler");
        $__internal_4379748833b269b36087d878f6a516d6d71fbbf33f9e753f93e903503a34afa4->enter($__internal_4379748833b269b36087d878f6a516d6d71fbbf33f9e753f93e903503a34afa4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_4379748833b269b36087d878f6a516d6d71fbbf33f9e753f93e903503a34afa4->leave($__internal_4379748833b269b36087d878f6a516d6d71fbbf33f9e753f93e903503a34afa4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!$label) { $label = isset($label_format)*/
/*     ? strtr($label_format, array('%name%' => $name, '%id%' => $id))*/
/*     : $view['form']->humanize($name); } ?>*/
/* <button type="<?php echo isset($type) ? $view->escape($type) : 'button' ?>" <?php echo $view['form']->block($form, 'button_attributes') ?>><?php echo $view->escape(false !== $translation_domain ? $view['translator']->trans($label, array(), $translation_domain) : $label) ?></button>*/
/* */
