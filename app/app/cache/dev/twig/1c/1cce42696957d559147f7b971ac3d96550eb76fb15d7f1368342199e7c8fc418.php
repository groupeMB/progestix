<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_6ede9e8c7ff6a7282633ec06cdc3b32815e202a434d15edbde89e3ab12ed17fa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_37b4a65a8e987bede6ee515f1bc2a0e0f3af0524e451ad3d9e90880a5797bc21 = $this->env->getExtension("native_profiler");
        $__internal_37b4a65a8e987bede6ee515f1bc2a0e0f3af0524e451ad3d9e90880a5797bc21->enter($__internal_37b4a65a8e987bede6ee515f1bc2a0e0f3af0524e451ad3d9e90880a5797bc21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_37b4a65a8e987bede6ee515f1bc2a0e0f3af0524e451ad3d9e90880a5797bc21->leave($__internal_37b4a65a8e987bede6ee515f1bc2a0e0f3af0524e451ad3d9e90880a5797bc21_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_3ce76bc0d98a155914fe28e579af06e7f8ed9a78f9425be7a6c2b337bfb4fe29 = $this->env->getExtension("native_profiler");
        $__internal_3ce76bc0d98a155914fe28e579af06e7f8ed9a78f9425be7a6c2b337bfb4fe29->enter($__internal_3ce76bc0d98a155914fe28e579af06e7f8ed9a78f9425be7a6c2b337bfb4fe29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_3ce76bc0d98a155914fe28e579af06e7f8ed9a78f9425be7a6c2b337bfb4fe29->leave($__internal_3ce76bc0d98a155914fe28e579af06e7f8ed9a78f9425be7a6c2b337bfb4fe29_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_b84eef7fd4f518997756eae9193ec2ac94d2c5e76528ec8fe474aa4651ae48f0 = $this->env->getExtension("native_profiler");
        $__internal_b84eef7fd4f518997756eae9193ec2ac94d2c5e76528ec8fe474aa4651ae48f0->enter($__internal_b84eef7fd4f518997756eae9193ec2ac94d2c5e76528ec8fe474aa4651ae48f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_b84eef7fd4f518997756eae9193ec2ac94d2c5e76528ec8fe474aa4651ae48f0->leave($__internal_b84eef7fd4f518997756eae9193ec2ac94d2c5e76528ec8fe474aa4651ae48f0_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_0d1377696ad1b0bef67a4637659294ad8694d187ae020802f896634f89433be0 = $this->env->getExtension("native_profiler");
        $__internal_0d1377696ad1b0bef67a4637659294ad8694d187ae020802f896634f89433be0->enter($__internal_0d1377696ad1b0bef67a4637659294ad8694d187ae020802f896634f89433be0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_0d1377696ad1b0bef67a4637659294ad8694d187ae020802f896634f89433be0->leave($__internal_0d1377696ad1b0bef67a4637659294ad8694d187ae020802f896634f89433be0_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
