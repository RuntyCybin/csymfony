<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_580522129aeaa05c647b030ed27d5b46cbb9b87c844983d8ac4d73ddec1b1a92 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cc862a70fb562c9cd2b9fc577fd5ba6ccf7fb9e72619701bfdb1219c3cf7d50c = $this->env->getExtension("native_profiler");
        $__internal_cc862a70fb562c9cd2b9fc577fd5ba6ccf7fb9e72619701bfdb1219c3cf7d50c->enter($__internal_cc862a70fb562c9cd2b9fc577fd5ba6ccf7fb9e72619701bfdb1219c3cf7d50c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cc862a70fb562c9cd2b9fc577fd5ba6ccf7fb9e72619701bfdb1219c3cf7d50c->leave($__internal_cc862a70fb562c9cd2b9fc577fd5ba6ccf7fb9e72619701bfdb1219c3cf7d50c_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_2d22fe3eecdb707860e2420fcd64e0e054edd43eaa1ccf1bef1ad0a109622396 = $this->env->getExtension("native_profiler");
        $__internal_2d22fe3eecdb707860e2420fcd64e0e054edd43eaa1ccf1bef1ad0a109622396->enter($__internal_2d22fe3eecdb707860e2420fcd64e0e054edd43eaa1ccf1bef1ad0a109622396_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_2d22fe3eecdb707860e2420fcd64e0e054edd43eaa1ccf1bef1ad0a109622396->leave($__internal_2d22fe3eecdb707860e2420fcd64e0e054edd43eaa1ccf1bef1ad0a109622396_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_c93b70900d0128b8736a57368868deebff739113c89fc843926d0502e202a08f = $this->env->getExtension("native_profiler");
        $__internal_c93b70900d0128b8736a57368868deebff739113c89fc843926d0502e202a08f->enter($__internal_c93b70900d0128b8736a57368868deebff739113c89fc843926d0502e202a08f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, twig_template_get_attributes($this, (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_c93b70900d0128b8736a57368868deebff739113c89fc843926d0502e202a08f->leave($__internal_c93b70900d0128b8736a57368868deebff739113c89fc843926d0502e202a08f_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_bc536938c36262ef89ba7a1fa8ad77f61492b6a004a6ec071b5c78cf633c763c = $this->env->getExtension("native_profiler");
        $__internal_bc536938c36262ef89ba7a1fa8ad77f61492b6a004a6ec071b5c78cf633c763c->enter($__internal_bc536938c36262ef89ba7a1fa8ad77f61492b6a004a6ec071b5c78cf633c763c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_bc536938c36262ef89ba7a1fa8ad77f61492b6a004a6ec071b5c78cf633c763c->leave($__internal_bc536938c36262ef89ba7a1fa8ad77f61492b6a004a6ec071b5c78cf633c763c_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
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
