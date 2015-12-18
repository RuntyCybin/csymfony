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
        $__internal_cae89618051ba9a45b1cf8421320aee069d103fd295e3c42133bcda3a3cf31ea = $this->env->getExtension("native_profiler");
        $__internal_cae89618051ba9a45b1cf8421320aee069d103fd295e3c42133bcda3a3cf31ea->enter($__internal_cae89618051ba9a45b1cf8421320aee069d103fd295e3c42133bcda3a3cf31ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ModulesUserBundle:Post:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cae89618051ba9a45b1cf8421320aee069d103fd295e3c42133bcda3a3cf31ea->leave($__internal_cae89618051ba9a45b1cf8421320aee069d103fd295e3c42133bcda3a3cf31ea_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_a239b5ccc645b9dd89392bf916f12f5ff91cf3289423ac38328f6ac4af50732e = $this->env->getExtension("native_profiler");
        $__internal_a239b5ccc645b9dd89392bf916f12f5ff91cf3289423ac38328f6ac4af50732e->enter($__internal_a239b5ccc645b9dd89392bf916f12f5ff91cf3289423ac38328f6ac4af50732e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>Post list</h1>

    <table class=\"records_list\">
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
        // line 20
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 21
            echo "            <tr>
                <td><a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_show", array("id" => twig_template_get_attributes($this, $context["entity"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_template_get_attributes($this, $context["entity"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, twig_template_get_attributes($this, $context["entity"], "name", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, twig_template_get_attributes($this, $context["entity"], "dni", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 25
            echo twig_escape_filter($this->env, twig_template_get_attributes($this, $context["entity"], "age", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 26
            echo twig_escape_filter($this->env, twig_template_get_attributes($this, $context["entity"], "active", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 27
            if (twig_template_get_attributes($this, $context["entity"], "created", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_template_get_attributes($this, $context["entity"], "created", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 28
            if (twig_template_get_attributes($this, $context["entity"], "updated", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_template_get_attributes($this, $context["entity"], "updated", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>
                <ul>
                    <li>
                        <a href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_show", array("id" => twig_template_get_attributes($this, $context["entity"], "id", array()))), "html", null, true);
            echo "\">show</a>
                    </li>
                    <li>
                        <a href=\"";
            // line 35
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
        // line 41
        echo "        </tbody>
    </table>

        <ul>
        <li>
            <a href=\"";
        // line 46
        echo $this->env->getExtension('routing')->getPath("_new");
        echo "\">
                Create a new entry
            </a>
        </li>
    </ul>
    ";
        
        $__internal_a239b5ccc645b9dd89392bf916f12f5ff91cf3289423ac38328f6ac4af50732e->leave($__internal_a239b5ccc645b9dd89392bf916f12f5ff91cf3289423ac38328f6ac4af50732e_prof);

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
        return array (  127 => 46,  120 => 41,  108 => 35,  102 => 32,  93 => 28,  87 => 27,  83 => 26,  79 => 25,  75 => 24,  71 => 23,  65 => 22,  62 => 21,  58 => 20,  40 => 4,  34 => 3,  11 => 1,);
    }
}
