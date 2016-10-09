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
        $__internal_074647489fe4b2f8459c49b9afead55237d997d3f40c1f2eb5bb3f23002922a4 = $this->env->getExtension("native_profiler");
        $__internal_074647489fe4b2f8459c49b9afead55237d997d3f40c1f2eb5bb3f23002922a4->enter($__internal_074647489fe4b2f8459c49b9afead55237d997d3f40c1f2eb5bb3f23002922a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_074647489fe4b2f8459c49b9afead55237d997d3f40c1f2eb5bb3f23002922a4->leave($__internal_074647489fe4b2f8459c49b9afead55237d997d3f40c1f2eb5bb3f23002922a4_prof);

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
