<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_abd0f5cc311aa276e86125d6c99a5774480b87e19107bb0794d10d098638d6eb extends Twig_Template
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
        $__internal_4a89df4da591329ec8ee53f4c06efdbc088b9fcf43e5df861f85c95cef0c0f94 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a89df4da591329ec8ee53f4c06efdbc088b9fcf43e5df861f85c95cef0c0f94->enter($__internal_4a89df4da591329ec8ee53f4c06efdbc088b9fcf43e5df861f85c95cef0c0f94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4a89df4da591329ec8ee53f4c06efdbc088b9fcf43e5df861f85c95cef0c0f94->leave($__internal_4a89df4da591329ec8ee53f4c06efdbc088b9fcf43e5df861f85c95cef0c0f94_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_97330e720893de549e80b2d09abda1324b2917571cdf5a5c08397fcbed74e5e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97330e720893de549e80b2d09abda1324b2917571cdf5a5c08397fcbed74e5e3->enter($__internal_97330e720893de549e80b2d09abda1324b2917571cdf5a5c08397fcbed74e5e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_97330e720893de549e80b2d09abda1324b2917571cdf5a5c08397fcbed74e5e3->leave($__internal_97330e720893de549e80b2d09abda1324b2917571cdf5a5c08397fcbed74e5e3_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_a8cea0dd0622ce6b41f0d48efffee7455e5e284b23e0d9c5a28e95258d13420a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8cea0dd0622ce6b41f0d48efffee7455e5e284b23e0d9c5a28e95258d13420a->enter($__internal_a8cea0dd0622ce6b41f0d48efffee7455e5e284b23e0d9c5a28e95258d13420a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_a8cea0dd0622ce6b41f0d48efffee7455e5e284b23e0d9c5a28e95258d13420a->leave($__internal_a8cea0dd0622ce6b41f0d48efffee7455e5e284b23e0d9c5a28e95258d13420a_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_325620582401b3c5da97e8c0ca63531710e8a700a6276706685362ecf8f12e7c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_325620582401b3c5da97e8c0ca63531710e8a700a6276706685362ecf8f12e7c->enter($__internal_325620582401b3c5da97e8c0ca63531710e8a700a6276706685362ecf8f12e7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_325620582401b3c5da97e8c0ca63531710e8a700a6276706685362ecf8f12e7c->leave($__internal_325620582401b3c5da97e8c0ca63531710e8a700a6276706685362ecf8f12e7c_prof);

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
", "@WebProfiler/Collector/router.html.twig", "/var/www/gestion_idf/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
