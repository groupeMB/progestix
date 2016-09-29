<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_a65e33de3eef77397267680c42022e86081d67c729635a0a85cd2e80cc4bb6b8 extends Twig_Template
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
        $__internal_966bdd22305cbb8196faa69e8a5ac3eb8fee72eab614a3927c43881917e6a19f = $this->env->getExtension("native_profiler");
        $__internal_966bdd22305cbb8196faa69e8a5ac3eb8fee72eab614a3927c43881917e6a19f->enter($__internal_966bdd22305cbb8196faa69e8a5ac3eb8fee72eab614a3927c43881917e6a19f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_966bdd22305cbb8196faa69e8a5ac3eb8fee72eab614a3927c43881917e6a19f->leave($__internal_966bdd22305cbb8196faa69e8a5ac3eb8fee72eab614a3927c43881917e6a19f_prof);

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
