<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_afe7d7acd7212cc4efe7281acb71add246698be8557593c065c0c8486be1401f extends Twig_Template
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
        $__internal_dc929932aa82c8120f84108cb7ced08bd0c2abb2188438128b4cd82100d8a935 = $this->env->getExtension("native_profiler");
        $__internal_dc929932aa82c8120f84108cb7ced08bd0c2abb2188438128b4cd82100d8a935->enter($__internal_dc929932aa82c8120f84108cb7ced08bd0c2abb2188438128b4cd82100d8a935_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_dc929932aa82c8120f84108cb7ced08bd0c2abb2188438128b4cd82100d8a935->leave($__internal_dc929932aa82c8120f84108cb7ced08bd0c2abb2188438128b4cd82100d8a935_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child): ?>*/
/*     <?php if (!$child->isRendered()): ?>*/
/*         <?php echo $view['form']->row($child) ?>*/
/*     <?php endif; ?>*/
/* <?php endforeach; ?>*/
/* */
