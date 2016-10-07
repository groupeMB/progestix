<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_2b9dd99c9ad118222931d63c6d7855c1ed4738375975e832517187dff1fbf7f3 extends Twig_Template
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
        $__internal_d67a01fc9e98a260e4e4c29a1cf4b6aeaa82221662a2b0ea4084281193df8108 = $this->env->getExtension("native_profiler");
        $__internal_d67a01fc9e98a260e4e4c29a1cf4b6aeaa82221662a2b0ea4084281193df8108->enter($__internal_d67a01fc9e98a260e4e4c29a1cf4b6aeaa82221662a2b0ea4084281193df8108_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_d67a01fc9e98a260e4e4c29a1cf4b6aeaa82221662a2b0ea4084281193df8108->leave($__internal_d67a01fc9e98a260e4e4c29a1cf4b6aeaa82221662a2b0ea4084281193df8108_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div>*/
/*     <?php echo $view['form']->label($form) ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* </div>*/
/* */
