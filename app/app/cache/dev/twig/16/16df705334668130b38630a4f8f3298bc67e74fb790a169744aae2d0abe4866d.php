<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_327b550bd184f20b237fb13179cff3d2e9af026b2e2cf67091ebe7c5bca48237 extends Twig_Template
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
        $__internal_c509f9b4b2544602cad963436566bff43c13094ad2117b07b786a62acfc8139f = $this->env->getExtension("native_profiler");
        $__internal_c509f9b4b2544602cad963436566bff43c13094ad2117b07b786a62acfc8139f->enter($__internal_c509f9b4b2544602cad963436566bff43c13094ad2117b07b786a62acfc8139f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_c509f9b4b2544602cad963436566bff43c13094ad2117b07b786a62acfc8139f->leave($__internal_c509f9b4b2544602cad963436566bff43c13094ad2117b07b786a62acfc8139f_prof);

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
