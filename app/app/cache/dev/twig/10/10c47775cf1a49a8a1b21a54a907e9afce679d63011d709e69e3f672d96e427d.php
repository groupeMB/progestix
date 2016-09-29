<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_f6a5bc07a49e8ac9ae4d279853e5984e1f7073d955ce3fba05982c5cab9415b5 extends Twig_Template
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
        $__internal_9b36a4d2123724c1945a4ba3963441c2339d1f4737e1e11a0292b234e15c1d3b = $this->env->getExtension("native_profiler");
        $__internal_9b36a4d2123724c1945a4ba3963441c2339d1f4737e1e11a0292b234e15c1d3b->enter($__internal_9b36a4d2123724c1945a4ba3963441c2339d1f4737e1e11a0292b234e15c1d3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_9b36a4d2123724c1945a4ba3963441c2339d1f4737e1e11a0292b234e15c1d3b->leave($__internal_9b36a4d2123724c1945a4ba3963441c2339d1f4737e1e11a0292b234e15c1d3b_prof);

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
