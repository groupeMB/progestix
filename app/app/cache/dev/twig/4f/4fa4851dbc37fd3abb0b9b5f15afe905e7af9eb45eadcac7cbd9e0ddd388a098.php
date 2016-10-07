<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_3c61d3a2d75ba0efaad4e301ac46c3a245b070dbe52c8e94090c4c1af394ffea extends Twig_Template
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
        $__internal_6fb832b0f0dc6d289eed86058322f18dc37a85d78838fc0dd2a3bbf1f7f2a07f = $this->env->getExtension("native_profiler");
        $__internal_6fb832b0f0dc6d289eed86058322f18dc37a85d78838fc0dd2a3bbf1f7f2a07f->enter($__internal_6fb832b0f0dc6d289eed86058322f18dc37a85d78838fc0dd2a3bbf1f7f2a07f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_6fb832b0f0dc6d289eed86058322f18dc37a85d78838fc0dd2a3bbf1f7f2a07f->leave($__internal_6fb832b0f0dc6d289eed86058322f18dc37a85d78838fc0dd2a3bbf1f7f2a07f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child) : ?>*/
/*     <?php echo $view['form']->row($child) ?>*/
/* <?php endforeach; ?>*/
/* */
