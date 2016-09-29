<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_4e8e6d7e92fc08541da5c8be849c35db5907fde14c985434690068525a041fd5 extends Twig_Template
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
        $__internal_e4582cfb69c855b68cdf7e72fce798ac1cc151da35d59e35031c1f48b66ecbc6 = $this->env->getExtension("native_profiler");
        $__internal_e4582cfb69c855b68cdf7e72fce798ac1cc151da35d59e35031c1f48b66ecbc6->enter($__internal_e4582cfb69c855b68cdf7e72fce798ac1cc151da35d59e35031c1f48b66ecbc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

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
        
        $__internal_e4582cfb69c855b68cdf7e72fce798ac1cc151da35d59e35031c1f48b66ecbc6->leave($__internal_e4582cfb69c855b68cdf7e72fce798ac1cc151da35d59e35031c1f48b66ecbc6_prof);

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
