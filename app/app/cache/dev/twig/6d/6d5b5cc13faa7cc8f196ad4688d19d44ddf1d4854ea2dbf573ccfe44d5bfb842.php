<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_9fb049f17df48b4f3658b7ecfcf1abdf0eb0463a3531d945fa4ef8d74d413f5d extends Twig_Template
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
        $__internal_a70dc3536eb8658b13108cd8306af0adc42a33059386136801436e05a6265b29 = $this->env->getExtension("native_profiler");
        $__internal_a70dc3536eb8658b13108cd8306af0adc42a33059386136801436e05a6265b29->enter($__internal_a70dc3536eb8658b13108cd8306af0adc42a33059386136801436e05a6265b29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_a70dc3536eb8658b13108cd8306af0adc42a33059386136801436e05a6265b29->leave($__internal_a70dc3536eb8658b13108cd8306af0adc42a33059386136801436e05a6265b29_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($form->vars['multipart']): ?>enctype="multipart/form-data"<?php endif ?>*/
/* */
