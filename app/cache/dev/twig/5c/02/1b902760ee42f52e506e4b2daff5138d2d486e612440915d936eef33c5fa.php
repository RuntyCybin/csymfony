<?php

/* ::base.html.twig */
class __TwigTemplate_5c021b902760ee42f52e506e4b2daff5138d2d486e612440915d936eef33c5fa extends Twig_Template
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
        $__internal_1b8a7084dd4460da7250b460aa58d9b5c456f5ab39182f649a7cc4d98a1654de = $this->env->getExtension("native_profiler");
        $__internal_1b8a7084dd4460da7250b460aa58d9b5c456f5ab39182f649a7cc4d98a1654de->enter($__internal_1b8a7084dd4460da7250b460aa58d9b5c456f5ab39182f649a7cc4d98a1654de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
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
        
        $__internal_1b8a7084dd4460da7250b460aa58d9b5c456f5ab39182f649a7cc4d98a1654de->leave($__internal_1b8a7084dd4460da7250b460aa58d9b5c456f5ab39182f649a7cc4d98a1654de_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_e1942703688a3030025e9aa4df569d6b0b4b1506b580278ba72d78410df31a73 = $this->env->getExtension("native_profiler");
        $__internal_e1942703688a3030025e9aa4df569d6b0b4b1506b580278ba72d78410df31a73->enter($__internal_e1942703688a3030025e9aa4df569d6b0b4b1506b580278ba72d78410df31a73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_e1942703688a3030025e9aa4df569d6b0b4b1506b580278ba72d78410df31a73->leave($__internal_e1942703688a3030025e9aa4df569d6b0b4b1506b580278ba72d78410df31a73_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_c2ca2ce4bcff060747a609bb47dc1bdd48d866b47e6d1dd48ce4daff6bcefec6 = $this->env->getExtension("native_profiler");
        $__internal_c2ca2ce4bcff060747a609bb47dc1bdd48d866b47e6d1dd48ce4daff6bcefec6->enter($__internal_c2ca2ce4bcff060747a609bb47dc1bdd48d866b47e6d1dd48ce4daff6bcefec6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_c2ca2ce4bcff060747a609bb47dc1bdd48d866b47e6d1dd48ce4daff6bcefec6->leave($__internal_c2ca2ce4bcff060747a609bb47dc1bdd48d866b47e6d1dd48ce4daff6bcefec6_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_a2ae676f008799c1ef309a3968adbdb4b04e0d4f9565c0e6668025a3e3e5c58e = $this->env->getExtension("native_profiler");
        $__internal_a2ae676f008799c1ef309a3968adbdb4b04e0d4f9565c0e6668025a3e3e5c58e->enter($__internal_a2ae676f008799c1ef309a3968adbdb4b04e0d4f9565c0e6668025a3e3e5c58e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_a2ae676f008799c1ef309a3968adbdb4b04e0d4f9565c0e6668025a3e3e5c58e->leave($__internal_a2ae676f008799c1ef309a3968adbdb4b04e0d4f9565c0e6668025a3e3e5c58e_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_99e13a989cc7f7f6c5cf53c160103ba416afac97e135f984e44d21554f859b40 = $this->env->getExtension("native_profiler");
        $__internal_99e13a989cc7f7f6c5cf53c160103ba416afac97e135f984e44d21554f859b40->enter($__internal_99e13a989cc7f7f6c5cf53c160103ba416afac97e135f984e44d21554f859b40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_99e13a989cc7f7f6c5cf53c160103ba416afac97e135f984e44d21554f859b40->leave($__internal_99e13a989cc7f7f6c5cf53c160103ba416afac97e135f984e44d21554f859b40_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
