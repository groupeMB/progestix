<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_447dae1b0a5195b7d7730e5e3df19edefc88cf5b39a06b5a5d433622879ac009 extends Twig_Template
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
        $__internal_70692a00f1b62c8e644785c36ba0a53fb8e6f8de07bdb221cb5f5f2d94584dfc = $this->env->getExtension("native_profiler");
        $__internal_70692a00f1b62c8e644785c36ba0a53fb8e6f8de07bdb221cb5f5f2d94584dfc->enter($__internal_70692a00f1b62c8e644785c36ba0a53fb8e6f8de07bdb221cb5f5f2d94584dfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_70692a00f1b62c8e644785c36ba0a53fb8e6f8de07bdb221cb5f5f2d94584dfc->leave($__internal_70692a00f1b62c8e644785c36ba0a53fb8e6f8de07bdb221cb5f5f2d94584dfc_prof);

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
