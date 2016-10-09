<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_7815ea1312f5617c8da73bc004c564c39914c4b4b46ddb44d564e9086bc8514b extends Twig_Template
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
        $__internal_e8b35f293fd49acd9103183daa40e535d255341f643a0bc2507a7789c7a0e19a = $this->env->getExtension("native_profiler");
        $__internal_e8b35f293fd49acd9103183daa40e535d255341f643a0bc2507a7789c7a0e19a->enter($__internal_e8b35f293fd49acd9103183daa40e535d255341f643a0bc2507a7789c7a0e19a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_e8b35f293fd49acd9103183daa40e535d255341f643a0bc2507a7789c7a0e19a->leave($__internal_e8b35f293fd49acd9103183daa40e535d255341f643a0bc2507a7789c7a0e19a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr>*/
/*     <td>*/
/*         <?php echo $view['form']->label($form) ?>*/
/*     </td>*/
/*     <td>*/
/*         <?php echo $view['form']->errors($form) ?>*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
