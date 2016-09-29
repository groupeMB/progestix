<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_0b7bc5bfb039fd2948813e3e198e6663880fae9c6c7d181457403dafc065ee53 extends Twig_Template
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
        $__internal_bfd02c5a86150d187a8c73b33fc8c32dc775f7a493479fe9f3dff40f5007f6e3 = $this->env->getExtension("native_profiler");
        $__internal_bfd02c5a86150d187a8c73b33fc8c32dc775f7a493479fe9f3dff40f5007f6e3->enter($__internal_bfd02c5a86150d187a8c73b33fc8c32dc775f7a493479fe9f3dff40f5007f6e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_bfd02c5a86150d187a8c73b33fc8c32dc775f7a493479fe9f3dff40f5007f6e3->leave($__internal_bfd02c5a86150d187a8c73b33fc8c32dc775f7a493479fe9f3dff40f5007f6e3_prof);

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
