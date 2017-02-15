<?php

/* base.html.twig */
class __TwigTemplate_f9d67bedd7cc36162d472642e1a47eea2f2d8fba059ed6d1072c3882ef0905ef extends Twig_Template
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
        $__internal_ff8f3aa8de948b870821eeb984548ddc70fbce1167d1f5d38d56fe66559d9e35 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff8f3aa8de948b870821eeb984548ddc70fbce1167d1f5d38d56fe66559d9e35->enter($__internal_ff8f3aa8de948b870821eeb984548ddc70fbce1167d1f5d38d56fe66559d9e35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_ff8f3aa8de948b870821eeb984548ddc70fbce1167d1f5d38d56fe66559d9e35->leave($__internal_ff8f3aa8de948b870821eeb984548ddc70fbce1167d1f5d38d56fe66559d9e35_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_e70632162b31c05f8577c391e395e06b1503edc3c711978db979cc406b64be9f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e70632162b31c05f8577c391e395e06b1503edc3c711978db979cc406b64be9f->enter($__internal_e70632162b31c05f8577c391e395e06b1503edc3c711978db979cc406b64be9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_e70632162b31c05f8577c391e395e06b1503edc3c711978db979cc406b64be9f->leave($__internal_e70632162b31c05f8577c391e395e06b1503edc3c711978db979cc406b64be9f_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_ac4dc7375e9a789a032b95d689d64d9fa31d6b306c4fecadc04d7f1f0660ab7f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac4dc7375e9a789a032b95d689d64d9fa31d6b306c4fecadc04d7f1f0660ab7f->enter($__internal_ac4dc7375e9a789a032b95d689d64d9fa31d6b306c4fecadc04d7f1f0660ab7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_ac4dc7375e9a789a032b95d689d64d9fa31d6b306c4fecadc04d7f1f0660ab7f->leave($__internal_ac4dc7375e9a789a032b95d689d64d9fa31d6b306c4fecadc04d7f1f0660ab7f_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_b2fdd018cb2f6473200d262ffc7eae99c179f8e0c9ae2072a6f3f99ac0045b36 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2fdd018cb2f6473200d262ffc7eae99c179f8e0c9ae2072a6f3f99ac0045b36->enter($__internal_b2fdd018cb2f6473200d262ffc7eae99c179f8e0c9ae2072a6f3f99ac0045b36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_b2fdd018cb2f6473200d262ffc7eae99c179f8e0c9ae2072a6f3f99ac0045b36->leave($__internal_b2fdd018cb2f6473200d262ffc7eae99c179f8e0c9ae2072a6f3f99ac0045b36_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_0d6dda3a2502d8dacc016bd38b80e7cb07b490eb0bfea2fa1b157c4233091b89 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d6dda3a2502d8dacc016bd38b80e7cb07b490eb0bfea2fa1b157c4233091b89->enter($__internal_0d6dda3a2502d8dacc016bd38b80e7cb07b490eb0bfea2fa1b157c4233091b89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_0d6dda3a2502d8dacc016bd38b80e7cb07b490eb0bfea2fa1b157c4233091b89->leave($__internal_0d6dda3a2502d8dacc016bd38b80e7cb07b490eb0bfea2fa1b157c4233091b89_prof);

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
", "base.html.twig", "/var/www/gestion_idf/app/Resources/views/base.html.twig");
    }
}
