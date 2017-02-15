<?php

/* base.html.twig */
class __TwigTemplate_8bbdb53efec637aa71660d4aafdf623f07c2c8dfd655b7709c52403b44699a03 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0996e1a7b9962e5090ccbd2bcfbf7154f3f0b6356af9215c8cc92cf84ce31e95 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0996e1a7b9962e5090ccbd2bcfbf7154f3f0b6356af9215c8cc92cf84ce31e95->enter($__internal_0996e1a7b9962e5090ccbd2bcfbf7154f3f0b6356af9215c8cc92cf84ce31e95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_0996e1a7b9962e5090ccbd2bcfbf7154f3f0b6356af9215c8cc92cf84ce31e95->leave($__internal_0996e1a7b9962e5090ccbd2bcfbf7154f3f0b6356af9215c8cc92cf84ce31e95_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_ee77d5666bc63732b6125d04e8b84c0d90a2c879c51720609ce53bc189dd08a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee77d5666bc63732b6125d04e8b84c0d90a2c879c51720609ce53bc189dd08a4->enter($__internal_ee77d5666bc63732b6125d04e8b84c0d90a2c879c51720609ce53bc189dd08a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_ee77d5666bc63732b6125d04e8b84c0d90a2c879c51720609ce53bc189dd08a4->leave($__internal_ee77d5666bc63732b6125d04e8b84c0d90a2c879c51720609ce53bc189dd08a4_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_f7ba0fc03001fc50ba9bd7bc3a7c5c74de6c677892cfe6f1445ee7d37caad35a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7ba0fc03001fc50ba9bd7bc3a7c5c74de6c677892cfe6f1445ee7d37caad35a->enter($__internal_f7ba0fc03001fc50ba9bd7bc3a7c5c74de6c677892cfe6f1445ee7d37caad35a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_f7ba0fc03001fc50ba9bd7bc3a7c5c74de6c677892cfe6f1445ee7d37caad35a->leave($__internal_f7ba0fc03001fc50ba9bd7bc3a7c5c74de6c677892cfe6f1445ee7d37caad35a_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_13ef940d9f64b3279cecd2656056f36f8150218b8727e78580a39452b8be8394 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13ef940d9f64b3279cecd2656056f36f8150218b8727e78580a39452b8be8394->enter($__internal_13ef940d9f64b3279cecd2656056f36f8150218b8727e78580a39452b8be8394_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_13ef940d9f64b3279cecd2656056f36f8150218b8727e78580a39452b8be8394->leave($__internal_13ef940d9f64b3279cecd2656056f36f8150218b8727e78580a39452b8be8394_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_282bee07464378b81abe4a34a597d1d4503eff29f748dc271f8a6bd7e599f057 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_282bee07464378b81abe4a34a597d1d4503eff29f748dc271f8a6bd7e599f057->enter($__internal_282bee07464378b81abe4a34a597d1d4503eff29f748dc271f8a6bd7e599f057_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_282bee07464378b81abe4a34a597d1d4503eff29f748dc271f8a6bd7e599f057->leave($__internal_282bee07464378b81abe4a34a597d1d4503eff29f748dc271f8a6bd7e599f057_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/var/www/gestion/app/Resources/views/base.html.twig");
    }
}
