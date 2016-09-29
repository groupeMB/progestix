<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_84b59a9a419ae2ec4eae0828857849b55b7075e8ec68439692d1d340ffcb197b extends Twig_Template
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
        $__internal_23d3847083eeba60714a2245497daf89be0d0426f7e06de2a6bbd710a9421dbd = $this->env->getExtension("native_profiler");
        $__internal_23d3847083eeba60714a2245497daf89be0d0426f7e06de2a6bbd710a9421dbd->enter($__internal_23d3847083eeba60714a2245497daf89be0d0426f7e06de2a6bbd710a9421dbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_23d3847083eeba60714a2245497daf89be0d0426f7e06de2a6bbd710a9421dbd->leave($__internal_23d3847083eeba60714a2245497daf89be0d0426f7e06de2a6bbd710a9421dbd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div>*/
/*     <?php echo $view['form']->label($form) ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* </div>*/
/* */
