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
        $__internal_e603b44005a6fe09376e7ef11760b5bb0c0cdf7329206d043754f6f99099aecc = $this->env->getExtension("native_profiler");
        $__internal_e603b44005a6fe09376e7ef11760b5bb0c0cdf7329206d043754f6f99099aecc->enter($__internal_e603b44005a6fe09376e7ef11760b5bb0c0cdf7329206d043754f6f99099aecc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_e603b44005a6fe09376e7ef11760b5bb0c0cdf7329206d043754f6f99099aecc->leave($__internal_e603b44005a6fe09376e7ef11760b5bb0c0cdf7329206d043754f6f99099aecc_prof);

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
