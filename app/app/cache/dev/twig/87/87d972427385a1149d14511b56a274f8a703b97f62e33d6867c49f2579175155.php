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
        $__internal_f076a14be31b6983e392607915c1c824ae4e6ebbfbc6bd00787ae907b1abc3c2 = $this->env->getExtension("native_profiler");
        $__internal_f076a14be31b6983e392607915c1c824ae4e6ebbfbc6bd00787ae907b1abc3c2->enter($__internal_f076a14be31b6983e392607915c1c824ae4e6ebbfbc6bd00787ae907b1abc3c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_f076a14be31b6983e392607915c1c824ae4e6ebbfbc6bd00787ae907b1abc3c2->leave($__internal_f076a14be31b6983e392607915c1c824ae4e6ebbfbc6bd00787ae907b1abc3c2_prof);

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
