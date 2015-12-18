<?php

/* ModulesUserBundle:Post:new.html.twig */
class __TwigTemplate_6c5b0dc284fe34ff2ca7a907332ace49c192661bb7b54779d181610769115b08 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "ModulesUserBundle:Post:new.html.twig", 1);
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
        $__internal_55876021ef3fc1ccbfa89c82df9fac11b485ef3dace707112305ab46ac78a4cf = $this->env->getExtension("native_profiler");
        $__internal_55876021ef3fc1ccbfa89c82df9fac11b485ef3dace707112305ab46ac78a4cf->enter($__internal_55876021ef3fc1ccbfa89c82df9fac11b485ef3dace707112305ab46ac78a4cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ModulesUserBundle:Post:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_55876021ef3fc1ccbfa89c82df9fac11b485ef3dace707112305ab46ac78a4cf->leave($__internal_55876021ef3fc1ccbfa89c82df9fac11b485ef3dace707112305ab46ac78a4cf_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_a9859c5b878bf79c801a5b5f797baed9219baec6f383d9d096c783300cf12f86 = $this->env->getExtension("native_profiler");
        $__internal_a9859c5b878bf79c801a5b5f797baed9219baec6f383d9d096c783300cf12f86->enter($__internal_a9859c5b878bf79c801a5b5f797baed9219baec6f383d9d096c783300cf12f86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>Post creation</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
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
</ul>
";
        
        $__internal_a9859c5b878bf79c801a5b5f797baed9219baec6f383d9d096c783300cf12f86->leave($__internal_a9859c5b878bf79c801a5b5f797baed9219baec6f383d9d096c783300cf12f86_prof);

    }

    public function getTemplateName()
    {
        return "ModulesUserBundle:Post:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 10,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
