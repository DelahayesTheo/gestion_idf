<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_2efe23150b65d201034166ad4efe5df3340aa72bb0b4b3910f73bb5b348791b6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_42d01d259864c938fb88526f522aa39397e68591cdcb6646c5b1dbc1f4c350f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42d01d259864c938fb88526f522aa39397e68591cdcb6646c5b1dbc1f4c350f4->enter($__internal_42d01d259864c938fb88526f522aa39397e68591cdcb6646c5b1dbc1f4c350f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_42d01d259864c938fb88526f522aa39397e68591cdcb6646c5b1dbc1f4c350f4->leave($__internal_42d01d259864c938fb88526f522aa39397e68591cdcb6646c5b1dbc1f4c350f4_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_8644c60a1212ae71600f15bfd3deee8d0078ea0e080a7a341a50fd107928f6d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8644c60a1212ae71600f15bfd3deee8d0078ea0e080a7a341a50fd107928f6d0->enter($__internal_8644c60a1212ae71600f15bfd3deee8d0078ea0e080a7a341a50fd107928f6d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_8644c60a1212ae71600f15bfd3deee8d0078ea0e080a7a341a50fd107928f6d0->leave($__internal_8644c60a1212ae71600f15bfd3deee8d0078ea0e080a7a341a50fd107928f6d0_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_98f14f08818e7d43d24688746dab5a83b8762d84101e74ffac6aadd81c9fc301 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98f14f08818e7d43d24688746dab5a83b8762d84101e74ffac6aadd81c9fc301->enter($__internal_98f14f08818e7d43d24688746dab5a83b8762d84101e74ffac6aadd81c9fc301_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_98f14f08818e7d43d24688746dab5a83b8762d84101e74ffac6aadd81c9fc301->leave($__internal_98f14f08818e7d43d24688746dab5a83b8762d84101e74ffac6aadd81c9fc301_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_583b540c8d58bce9c3f359b5b467cba2255942ffda4f5e960c37866740d55459 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_583b540c8d58bce9c3f359b5b467cba2255942ffda4f5e960c37866740d55459->enter($__internal_583b540c8d58bce9c3f359b5b467cba2255942ffda4f5e960c37866740d55459_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_583b540c8d58bce9c3f359b5b467cba2255942ffda4f5e960c37866740d55459->leave($__internal_583b540c8d58bce9c3f359b5b467cba2255942ffda4f5e960c37866740d55459_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/var/www/gestion/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
