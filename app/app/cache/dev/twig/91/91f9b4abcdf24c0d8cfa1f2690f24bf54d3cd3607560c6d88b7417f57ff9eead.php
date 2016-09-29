<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_3a9fae8ac194b513dd76960f4b2f09497443ecf7c84dabb5b3c1e38d03ec6263 extends Twig_Template
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
        $__internal_14f06f84dce16ffa19ec1418af2ac10d10e7c7407a45f6169d64acbccbc4f0b8 = $this->env->getExtension("native_profiler");
        $__internal_14f06f84dce16ffa19ec1418af2ac10d10e7c7407a45f6169d64acbccbc4f0b8->enter($__internal_14f06f84dce16ffa19ec1418af2ac10d10e7c7407a45f6169d64acbccbc4f0b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_14f06f84dce16ffa19ec1418af2ac10d10e7c7407a45f6169d64acbccbc4f0b8->leave($__internal_14f06f84dce16ffa19ec1418af2ac10d10e7c7407a45f6169d64acbccbc4f0b8_prof);

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
