<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_3b80442e6e859e9ef66f3ac73cb0593198ac32dde62b9e0b91223b5e074ed568 extends Twig_Template
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
        $__internal_cba6b5e27edbe79c80caf5231bf825232d2fdaf78f19615f896a80361eace605 = $this->env->getExtension("native_profiler");
        $__internal_cba6b5e27edbe79c80caf5231bf825232d2fdaf78f19615f896a80361eace605->enter($__internal_cba6b5e27edbe79c80caf5231bf825232d2fdaf78f19615f896a80361eace605_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_cba6b5e27edbe79c80caf5231bf825232d2fdaf78f19615f896a80361eace605->leave($__internal_cba6b5e27edbe79c80caf5231bf825232d2fdaf78f19615f896a80361eace605_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!isset($render_rest) || $render_rest): ?>*/
/* <?php echo $view['form']->rest($form) ?>*/
/* <?php endif ?>*/
/* </form>*/
/* */
