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
        $__internal_947b09aacb2a5a43ceb36041ae10a6031ed47baf0de610131d3bc08cbaa62753 = $this->env->getExtension("native_profiler");
        $__internal_947b09aacb2a5a43ceb36041ae10a6031ed47baf0de610131d3bc08cbaa62753->enter($__internal_947b09aacb2a5a43ceb36041ae10a6031ed47baf0de610131d3bc08cbaa62753_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_947b09aacb2a5a43ceb36041ae10a6031ed47baf0de610131d3bc08cbaa62753->leave($__internal_947b09aacb2a5a43ceb36041ae10a6031ed47baf0de610131d3bc08cbaa62753_prof);

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
