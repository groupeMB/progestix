<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_576bf2f029e631e7a3aa63311660854b8d3bab7366d0350129ff30234d3a9c6d extends Twig_Template
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
        $__internal_b2ed4b95fde5235ab1569e97442ef45dca84ee7d10094366a89caa1a3386db4f = $this->env->getExtension("native_profiler");
        $__internal_b2ed4b95fde5235ab1569e97442ef45dca84ee7d10094366a89caa1a3386db4f->enter($__internal_b2ed4b95fde5235ab1569e97442ef45dca84ee7d10094366a89caa1a3386db4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_b2ed4b95fde5235ab1569e97442ef45dca84ee7d10094366a89caa1a3386db4f->leave($__internal_b2ed4b95fde5235ab1569e97442ef45dca84ee7d10094366a89caa1a3386db4f_prof);

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
