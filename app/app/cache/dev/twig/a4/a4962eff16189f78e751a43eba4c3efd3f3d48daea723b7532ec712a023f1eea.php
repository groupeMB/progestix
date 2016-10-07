<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_02821a0205cdb4d0b8c3fbc53dbbbc93540a722d8c87af015533b91831071add extends Twig_Template
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
        $__internal_4c327a36b6da636b149873001d4965d2a9a62534c2d268c2dcf686398bf113fa = $this->env->getExtension("native_profiler");
        $__internal_4c327a36b6da636b149873001d4965d2a9a62534c2d268c2dcf686398bf113fa->enter($__internal_4c327a36b6da636b149873001d4965d2a9a62534c2d268c2dcf686398bf113fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_4c327a36b6da636b149873001d4965d2a9a62534c2d268c2dcf686398bf113fa->leave($__internal_4c327a36b6da636b149873001d4965d2a9a62534c2d268c2dcf686398bf113fa_prof);

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
