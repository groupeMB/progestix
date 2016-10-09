<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_57d7e296101fd77b72f55a217334f6f8dde32d456327d24eab4cb5fdfa150778 extends Twig_Template
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
        $__internal_a086517c54c17647fc84d7807fb0cbce3b1a04ea991ed65393206e95759bd136 = $this->env->getExtension("native_profiler");
        $__internal_a086517c54c17647fc84d7807fb0cbce3b1a04ea991ed65393206e95759bd136->enter($__internal_a086517c54c17647fc84d7807fb0cbce3b1a04ea991ed65393206e95759bd136_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_a086517c54c17647fc84d7807fb0cbce3b1a04ea991ed65393206e95759bd136->leave($__internal_a086517c54c17647fc84d7807fb0cbce3b1a04ea991ed65393206e95759bd136_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr style="display: none">*/
/*     <td colspan="2">*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
