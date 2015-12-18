<?php

/* TwigBundle:Exception:logs.html.twig */
class __TwigTemplate_597e2043cfb906bb7a8b01833e9eea9364ace86aba12e2497988421736ff8894 extends Twig_Template
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
        $__internal_e1940b593956ae6f342389aed5be826172d45f378e712b8a8b705a22cc93a994 = $this->env->getExtension("native_profiler");
        $__internal_e1940b593956ae6f342389aed5be826172d45f378e712b8a8b705a22cc93a994->enter($__internal_e1940b593956ae6f342389aed5be826172d45f378e712b8a8b705a22cc93a994_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:logs.html.twig"));

        // line 1
        echo "<ol class=\"traces logs\">
    ";
        // line 2
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["logs"]) ? $context["logs"] : $this->getContext($context, "logs")));
        foreach ($context['_seq'] as $context["_key"] => $context["log"]) {
            // line 3
            echo "        <li";
            if ((twig_template_get_attributes($this, $context["log"], "priority", array()) >= 400)) {
                echo " class=\"error\"";
            } elseif ((twig_template_get_attributes($this, $context["log"], "priority", array()) >= 300)) {
                echo " class=\"warning\"";
            }
            echo ">
            ";
            // line 4
            echo twig_escape_filter($this->env, twig_template_get_attributes($this, $context["log"], "priorityName", array()), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, twig_template_get_attributes($this, $context["log"], "message", array()), "html", null, true);
            echo "
        </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['log'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "</ol>
";
        
        $__internal_e1940b593956ae6f342389aed5be826172d45f378e712b8a8b705a22cc93a994->leave($__internal_e1940b593956ae6f342389aed5be826172d45f378e712b8a8b705a22cc93a994_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:logs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 7,  38 => 4,  29 => 3,  25 => 2,  22 => 1,);
    }
}
