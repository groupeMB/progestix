<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_d1cdb449f5abc4b6137d92c69ca8e77152f67529ffc775026b4a27bb8a538f6e extends Twig_Template
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
        $__internal_eecaeeddc2ecc7d942ed23a9948d0117834ddd7604e419c65a3a5d93b4aa5aee = $this->env->getExtension("native_profiler");
        $__internal_eecaeeddc2ecc7d942ed23a9948d0117834ddd7604e419c65a3a5d93b4aa5aee->enter($__internal_eecaeeddc2ecc7d942ed23a9948d0117834ddd7604e419c65a3a5d93b4aa5aee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_eecaeeddc2ecc7d942ed23a9948d0117834ddd7604e419c65a3a5d93b4aa5aee->leave($__internal_eecaeeddc2ecc7d942ed23a9948d0117834ddd7604e419c65a3a5d93b4aa5aee_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($expanded): ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_expanded') ?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_collapsed') ?>*/
/* <?php endif ?>*/
/* */
