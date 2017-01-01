<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_a89fe1c950911ed38568ec260e2e88838ed03de61229ef4f324c86f392c34068 extends Twig_Template
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
        $__internal_6da0c4ab8481ac7410b25ad61ce4080779df052852f1a9634eb754ccaa22d779 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6da0c4ab8481ac7410b25ad61ce4080779df052852f1a9634eb754ccaa22d779->enter($__internal_6da0c4ab8481ac7410b25ad61ce4080779df052852f1a9634eb754ccaa22d779_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6da0c4ab8481ac7410b25ad61ce4080779df052852f1a9634eb754ccaa22d779->leave($__internal_6da0c4ab8481ac7410b25ad61ce4080779df052852f1a9634eb754ccaa22d779_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_319eecbc340c940f9a8bb4fab92d5674dbbf52007532ef321b617258f1feec9c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319eecbc340c940f9a8bb4fab92d5674dbbf52007532ef321b617258f1feec9c->enter($__internal_319eecbc340c940f9a8bb4fab92d5674dbbf52007532ef321b617258f1feec9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_319eecbc340c940f9a8bb4fab92d5674dbbf52007532ef321b617258f1feec9c->leave($__internal_319eecbc340c940f9a8bb4fab92d5674dbbf52007532ef321b617258f1feec9c_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_66b90bd247b99c076d66deb48bcdd67fdd4ef307070c3d2acfb01f5273585ea5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66b90bd247b99c076d66deb48bcdd67fdd4ef307070c3d2acfb01f5273585ea5->enter($__internal_66b90bd247b99c076d66deb48bcdd67fdd4ef307070c3d2acfb01f5273585ea5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_66b90bd247b99c076d66deb48bcdd67fdd4ef307070c3d2acfb01f5273585ea5->leave($__internal_66b90bd247b99c076d66deb48bcdd67fdd4ef307070c3d2acfb01f5273585ea5_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_cd1d6ae854e8df3546d4fe79a97e3a2bda871e08a5d1de10add3f33b9d36645f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd1d6ae854e8df3546d4fe79a97e3a2bda871e08a5d1de10add3f33b9d36645f->enter($__internal_cd1d6ae854e8df3546d4fe79a97e3a2bda871e08a5d1de10add3f33b9d36645f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_cd1d6ae854e8df3546d4fe79a97e3a2bda871e08a5d1de10add3f33b9d36645f->leave($__internal_cd1d6ae854e8df3546d4fe79a97e3a2bda871e08a5d1de10add3f33b9d36645f_prof);

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

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/home/abdoulaye/workspace/workflows/progestix/progestix/app/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
