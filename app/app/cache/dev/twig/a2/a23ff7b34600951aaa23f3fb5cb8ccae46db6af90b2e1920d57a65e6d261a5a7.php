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
        $__internal_8c89f87e2b7c5883780a29c717738622b53ab6d3aaf237de1924734f133f75e7 = $this->env->getExtension("native_profiler");
        $__internal_8c89f87e2b7c5883780a29c717738622b53ab6d3aaf237de1924734f133f75e7->enter($__internal_8c89f87e2b7c5883780a29c717738622b53ab6d3aaf237de1924734f133f75e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

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
        
        $__internal_8c89f87e2b7c5883780a29c717738622b53ab6d3aaf237de1924734f133f75e7->leave($__internal_8c89f87e2b7c5883780a29c717738622b53ab6d3aaf237de1924734f133f75e7_prof);

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
