<?php

/* TwigBundle:Exception:traces.txt.twig */
class __TwigTemplate_d4269c22332ae3d4935bf4fdd46b39102d10e1f2c5abfcfd725ddab4a361c99b extends Twig_Template
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
        $__internal_d3643328995384e70b78a78bc27694e6d20ec0a6874cef2ce1cf98dd470a244d = $this->env->getExtension("native_profiler");
        $__internal_d3643328995384e70b78a78bc27694e6d20ec0a6874cef2ce1cf98dd470a244d->enter($__internal_d3643328995384e70b78a78bc27694e6d20ec0a6874cef2ce1cf98dd470a244d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.txt.twig"));

        // line 1
        if (twig_length_filter($this->env, twig_template_get_attributes($this, (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()))) {
            // line 2
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable(twig_template_get_attributes($this, (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->loadTemplate("TwigBundle:Exception:trace.txt.twig", "TwigBundle:Exception:traces.txt.twig", 3)->display(array("trace" => $context["trace"]));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_d3643328995384e70b78a78bc27694e6d20ec0a6874cef2ce1cf98dd470a244d->leave($__internal_d3643328995384e70b78a78bc27694e6d20ec0a6874cef2ce1cf98dd470a244d_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:traces.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  28 => 3,  24 => 2,  22 => 1,);
    }
}
