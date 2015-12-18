<?php

/* ModulesUserBundle:Post:edit.html.twig */
class __TwigTemplate_020653526607677b478961c4874f1516bae245c1c4bdf8180ad44f92e0019229 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "ModulesUserBundle:Post:edit.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_09f3e659590f4c43cdd8fdf26993c5330e22b567cb87c5360d096aec276a59fa = $this->env->getExtension("native_profiler");
        $__internal_09f3e659590f4c43cdd8fdf26993c5330e22b567cb87c5360d096aec276a59fa->enter($__internal_09f3e659590f4c43cdd8fdf26993c5330e22b567cb87c5360d096aec276a59fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ModulesUserBundle:Post:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_09f3e659590f4c43cdd8fdf26993c5330e22b567cb87c5360d096aec276a59fa->leave($__internal_09f3e659590f4c43cdd8fdf26993c5330e22b567cb87c5360d096aec276a59fa_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_06244a4393d9369e53805431b7931d55bdd55d02b197ab4ac5607e7239acd715 = $this->env->getExtension("native_profiler");
        $__internal_06244a4393d9369e53805431b7931d55bdd55d02b197ab4ac5607e7239acd715->enter($__internal_06244a4393d9369e53805431b7931d55bdd55d02b197ab4ac5607e7239acd715_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>Post edit</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form');
        echo "

        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("");
        echo "\">
            Back to the list
        </a>
    </li>
    <li>";
        // line 14
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "</li>
</ul>
";
        
        $__internal_06244a4393d9369e53805431b7931d55bdd55d02b197ab4ac5607e7239acd715->leave($__internal_06244a4393d9369e53805431b7931d55bdd55d02b197ab4ac5607e7239acd715_prof);

    }

    public function getTemplateName()
    {
        return "ModulesUserBundle:Post:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 14,  51 => 10,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
