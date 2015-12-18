<?php

/* ModulesUserBundle:Post:show.html.twig */
class __TwigTemplate_5c897c5f6f06f8de1b574698e66ea64341c0e14833bce2f47288bae51942afb8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "ModulesUserBundle:Post:show.html.twig", 1);
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
        $__internal_86b2710e03631281bbfdc64482554080300a94afacdbb03b00fef56a815090b1 = $this->env->getExtension("native_profiler");
        $__internal_86b2710e03631281bbfdc64482554080300a94afacdbb03b00fef56a815090b1->enter($__internal_86b2710e03631281bbfdc64482554080300a94afacdbb03b00fef56a815090b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ModulesUserBundle:Post:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_86b2710e03631281bbfdc64482554080300a94afacdbb03b00fef56a815090b1->leave($__internal_86b2710e03631281bbfdc64482554080300a94afacdbb03b00fef56a815090b1_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_52ebb7e1133c57c66386ae4afb82e7798c27f55387e05e0c971ba0e6fed39875 = $this->env->getExtension("native_profiler");
        $__internal_52ebb7e1133c57c66386ae4afb82e7798c27f55387e05e0c971ba0e6fed39875->enter($__internal_52ebb7e1133c57c66386ae4afb82e7798c27f55387e05e0c971ba0e6fed39875_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>Post</h1>

    <table class=\"record_properties\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, twig_template_get_attributes($this, (isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Name</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, twig_template_get_attributes($this, (isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "name", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Dni</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, twig_template_get_attributes($this, (isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "dni", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Age</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, twig_template_get_attributes($this, (isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "age", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Active</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, twig_template_get_attributes($this, (isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "active", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Created</th>
                <td>";
        // line 30
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_template_get_attributes($this, (isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "created", array()), "Y-m-d H:i:s"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Updated</th>
                <td>";
        // line 34
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_template_get_attributes($this, (isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "updated", array()), "Y-m-d H:i:s"), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 41
        echo $this->env->getExtension('routing')->getPath("");
        echo "\">
            Back to the list
        </a>
    </li>
    <li>
        <a href=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_edit", array("id" => twig_template_get_attributes($this, (isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\">
            Edit
        </a>
    </li>
    <li>";
        // line 50
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "</li>
</ul>
";
        
        $__internal_52ebb7e1133c57c66386ae4afb82e7798c27f55387e05e0c971ba0e6fed39875->leave($__internal_52ebb7e1133c57c66386ae4afb82e7798c27f55387e05e0c971ba0e6fed39875_prof);

    }

    public function getTemplateName()
    {
        return "ModulesUserBundle:Post:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 50,  108 => 46,  100 => 41,  90 => 34,  83 => 30,  76 => 26,  69 => 22,  62 => 18,  55 => 14,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
    }
}
