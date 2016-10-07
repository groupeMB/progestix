<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_b2bfecdb2eb53e1e6ca7fdf13dbabc62785120f35849e812dfee8e5ee2b6b750 extends Twig_Template
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
        $__internal_791129860328bc0c17e31d38f106fefd00d997433541f5603f55ec6f5e3aaf32 = $this->env->getExtension("native_profiler");
        $__internal_791129860328bc0c17e31d38f106fefd00d997433541f5603f55ec6f5e3aaf32->enter($__internal_791129860328bc0c17e31d38f106fefd00d997433541f5603f55ec6f5e3aaf32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_791129860328bc0c17e31d38f106fefd00d997433541f5603f55ec6f5e3aaf32->leave($__internal_791129860328bc0c17e31d38f106fefd00d997433541f5603f55ec6f5e3aaf32_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (isset($prototype)): ?>*/
/*     <?php $attr['data-prototype'] = $view->escape($view['form']->row($prototype)) ?>*/
/* <?php endif ?>*/
/* <?php echo $view['form']->widget($form, array('attr' => $attr)) ?>*/
/* */
