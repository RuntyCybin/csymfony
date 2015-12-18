<?php

/* ModulesUserBundle:Post:index.html.twig */
class __TwigTemplate_7c59d24649ee94357369ab14d40aaf1cab5cbb7acd074fc24d44e1bf44a8d02b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "ModulesUserBundle:Post:index.html.twig", 1);
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
        $__internal_51c757b438fae88c921a54fdb9b74d30ac9868f74a4964d560614c26883ef0f5 = $this->env->getExtension("native_profiler");
        $__internal_51c757b438fae88c921a54fdb9b74d30ac9868f74a4964d560614c26883ef0f5->enter($__internal_51c757b438fae88c921a54fdb9b74d30ac9868f74a4964d560614c26883ef0f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ModulesUserBundle:Post:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_51c757b438fae88c921a54fdb9b74d30ac9868f74a4964d560614c26883ef0f5->leave($__internal_51c757b438fae88c921a54fdb9b74d30ac9868f74a4964d560614c26883ef0f5_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_4da3a15e31e13bc6c7a2711f0964bba1381c9fc3ee1e83fcb236ec17cfdaa658 = $this->env->getExtension("native_profiler");
        $__internal_4da3a15e31e13bc6c7a2711f0964bba1381c9fc3ee1e83fcb236ec17cfdaa658->enter($__internal_4da3a15e31e13bc6c7a2711f0964bba1381c9fc3ee1e83fcb236ec17cfdaa658_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>Post list</h1>

        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Dni</th>
                <th>Age</th>
                <th>Active</th>
                <th>Created</th>
                <th>Updated</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 19
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 20
            echo "            <tr>
                <td><a href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_show", array("id" => twig_template_get_attributes($this, $context["entity"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_template_get_attributes($this, $context["entity"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, twig_template_get_attributes($this, $context["entity"], "name", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, twig_template_get_attributes($this, $context["entity"], "dni", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, twig_template_get_attributes($this, $context["entity"], "age", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 25
            echo twig_escape_filter($this->env, twig_template_get_attributes($this, $context["entity"], "active", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 26
            if (twig_template_get_attributes($this, $context["entity"], "created", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_template_get_attributes($this, $context["entity"], "created", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 27
            if (twig_template_get_attributes($this, $context["entity"], "updated", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_template_get_attributes($this, $context["entity"], "updated", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>
                <ul>
                    <li>
                        <a type=\"button\" class=\"btn btn-info btn-xs\" href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_show", array("id" => twig_template_get_attributes($this, $context["entity"], "id", array()))), "html", null, true);
            echo "\">show</a>
                    </li>
                    <li>
                        <a type=\"button\" class=\"btn btn-warning btn-xs\" href=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_edit", array("id" => twig_template_get_attributes($this, $context["entity"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                    </li>
                </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "        </tbody>

        <ul>
            <li>
                <a type=\"button\" href=\"";
        // line 44
        echo $this->env->getExtension('routing')->getPath("_new");
        echo "\" class=\"btn btn-success\">Create a new entry</a>
                
            </li>
        </ul>
    ";
        
        $__internal_4da3a15e31e13bc6c7a2711f0964bba1381c9fc3ee1e83fcb236ec17cfdaa658->leave($__internal_4da3a15e31e13bc6c7a2711f0964bba1381c9fc3ee1e83fcb236ec17cfdaa658_prof);

    }

    public function getTemplateName()
    {
        return "ModulesUserBundle:Post:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 44,  119 => 40,  107 => 34,  101 => 31,  92 => 27,  86 => 26,  82 => 25,  78 => 24,  74 => 23,  70 => 22,  64 => 21,  61 => 20,  57 => 19,  40 => 4,  34 => 3,  11 => 1,);
    }
}
