<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_be865369d5af3156da640d1e4e2e7c51ecbc35e1b2c2fa821b416a9c8d141a96 extends Twig_Template
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
        $__internal_1603853e94cc08f59d48648e86ffb689d40e2a77cf9f43966ffefe9177cda725 = $this->env->getExtension("native_profiler");
        $__internal_1603853e94cc08f59d48648e86ffb689d40e2a77cf9f43966ffefe9177cda725->enter($__internal_1603853e94cc08f59d48648e86ffb689d40e2a77cf9f43966ffefe9177cda725_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_1603853e94cc08f59d48648e86ffb689d40e2a77cf9f43966ffefe9177cda725->leave($__internal_1603853e94cc08f59d48648e86ffb689d40e2a77cf9f43966ffefe9177cda725_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo $view['form']->start($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* <?php echo $view['form']->end($form) ?>*/
/* */
