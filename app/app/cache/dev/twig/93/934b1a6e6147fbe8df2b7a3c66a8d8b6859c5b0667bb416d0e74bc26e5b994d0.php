<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_24b6f25c0c55f139187179920a5385b448d69c15b86546f17cff687eacc6e7d0 extends Twig_Template
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
        $__internal_9c88d4a44244d9db43c817deb1b38c3be04adae6eb8132ffa8e8350f5281b27c = $this->env->getExtension("native_profiler");
        $__internal_9c88d4a44244d9db43c817deb1b38c3be04adae6eb8132ffa8e8350f5281b27c->enter($__internal_9c88d4a44244d9db43c817deb1b38c3be04adae6eb8132ffa8e8350f5281b27c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_9c88d4a44244d9db43c817deb1b38c3be04adae6eb8132ffa8e8350f5281b27c->leave($__internal_9c88d4a44244d9db43c817deb1b38c3be04adae6eb8132ffa8e8350f5281b27c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($compound): ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_compound')?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_simple')?>*/
/* <?php endif ?>*/
/* */
