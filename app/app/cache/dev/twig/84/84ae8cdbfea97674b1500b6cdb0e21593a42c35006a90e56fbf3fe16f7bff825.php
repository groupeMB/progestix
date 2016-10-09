<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_717fe91d680aa0f2d48be1c95a9e6b5bf234e8aa18eda18a8f68761a78bad04d extends Twig_Template
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
        $__internal_6d17d9baf37ccabeb73e165c04e6999ef960bb5d01d91935391e1bb05b47d243 = $this->env->getExtension("native_profiler");
        $__internal_6d17d9baf37ccabeb73e165c04e6999ef960bb5d01d91935391e1bb05b47d243->enter($__internal_6d17d9baf37ccabeb73e165c04e6999ef960bb5d01d91935391e1bb05b47d243_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_6d17d9baf37ccabeb73e165c04e6999ef960bb5d01d91935391e1bb05b47d243->leave($__internal_6d17d9baf37ccabeb73e165c04e6999ef960bb5d01d91935391e1bb05b47d243_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (count($errors) > 0): ?>*/
/*     <ul>*/
/*         <?php foreach ($errors as $error): ?>*/
/*             <li><?php echo $error->getMessage() ?></li>*/
/*         <?php endforeach; ?>*/
/*     </ul>*/
/* <?php endif ?>*/
/* */
