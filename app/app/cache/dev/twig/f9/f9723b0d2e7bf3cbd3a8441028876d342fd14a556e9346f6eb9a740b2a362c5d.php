<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_d3c051a541b3c0e2758eba8bcad3077a7e86a1e3a48f36cdf3160dc8b79b4c5c extends Twig_Template
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
        $__internal_73689b2be2e35b6dbfaadf4c445558d9c05b79a733a859a5398be49ff0eaa78a = $this->env->getExtension("native_profiler");
        $__internal_73689b2be2e35b6dbfaadf4c445558d9c05b79a733a859a5398be49ff0eaa78a->enter($__internal_73689b2be2e35b6dbfaadf4c445558d9c05b79a733a859a5398be49ff0eaa78a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_73689b2be2e35b6dbfaadf4c445558d9c05b79a733a859a5398be49ff0eaa78a->leave($__internal_73689b2be2e35b6dbfaadf4c445558d9c05b79a733a859a5398be49ff0eaa78a_prof);

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
