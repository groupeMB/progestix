<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_995cc5c0680e4f507b77a2b1320231807a053b6a03a8961c2d9a29a59d8eca5b extends Twig_Template
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
        $__internal_3c09c4eb2a3b79eed8407cc40c7cac77e55904ce384e22d213fda45fc7a44c75 = $this->env->getExtension("native_profiler");
        $__internal_3c09c4eb2a3b79eed8407cc40c7cac77e55904ce384e22d213fda45fc7a44c75->enter($__internal_3c09c4eb2a3b79eed8407cc40c7cac77e55904ce384e22d213fda45fc7a44c75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_3c09c4eb2a3b79eed8407cc40c7cac77e55904ce384e22d213fda45fc7a44c75->leave($__internal_3c09c4eb2a3b79eed8407cc40c7cac77e55904ce384e22d213fda45fc7a44c75_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/* <?php foreach ($form as $child): ?>*/
/*     <?php echo $view['form']->widget($child) ?>*/
/*     <?php echo $view['form']->label($child, null, array('translation_domain' => $choice_translation_domain)) ?>*/
/* <?php endforeach ?>*/
/* </div>*/
/* */
