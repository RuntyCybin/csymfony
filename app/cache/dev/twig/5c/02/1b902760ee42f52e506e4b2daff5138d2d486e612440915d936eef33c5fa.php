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
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9628fce6d7b77d24dd08fff976c06a82c5c11a73387ad3c933d988566c87d8f6 = $this->env->getExtension("native_profiler");
        $__internal_9628fce6d7b77d24dd08fff976c06a82c5c11a73387ad3c933d988566c87d8f6->enter($__internal_9628fce6d7b77d24dd08fff976c06a82c5c11a73387ad3c933d988566c87d8f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
  <head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>";
        // line 8
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

    <!-- Latest compiled and minified CSS -->
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css\" integrity=\"sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7\" crossorigin=\"anonymous\">

    <!-- Optional theme -->
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css\" integrity=\"sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r\" crossorigin=\"anonymous\">

    <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/myStyle.css"), "html", null, true);
        echo "\">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src=\"https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js\"></script>
      <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
    <![endif]-->
  </head>
  <body>
    <h1>List of users</h1>
    <div class=\"table-responsive\">
      <table class=\"table table-hover\">
        ";
        // line 28
        $this->displayBlock('body', $context, $blocks);
        // line 36
        echo "      </table>
    </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js\"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js\" integrity=\"sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS\" crossorigin=\"anonymous\"></script>
  </body>
</html>";
        
        $__internal_9628fce6d7b77d24dd08fff976c06a82c5c11a73387ad3c933d988566c87d8f6->leave($__internal_9628fce6d7b77d24dd08fff976c06a82c5c11a73387ad3c933d988566c87d8f6_prof);

    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        $__internal_c0d8131a3ebb7a18148961577b7cb8f842dcf317b4c497f1a3807e082919718d = $this->env->getExtension("native_profiler");
        $__internal_c0d8131a3ebb7a18148961577b7cb8f842dcf317b4c497f1a3807e082919718d->enter($__internal_c0d8131a3ebb7a18148961577b7cb8f842dcf317b4c497f1a3807e082919718d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Users";
        
        $__internal_c0d8131a3ebb7a18148961577b7cb8f842dcf317b4c497f1a3807e082919718d->leave($__internal_c0d8131a3ebb7a18148961577b7cb8f842dcf317b4c497f1a3807e082919718d_prof);

    }

    // line 28
    public function block_body($context, array $blocks = array())
    {
        $__internal_f4f59414fbcb2eef74bab085feb0c78fbbab39b1b1e5279d9da7932a3bc3fe43 = $this->env->getExtension("native_profiler");
        $__internal_f4f59414fbcb2eef74bab085feb0c78fbbab39b1b1e5279d9da7932a3bc3fe43->enter($__internal_f4f59414fbcb2eef74bab085feb0c78fbbab39b1b1e5279d9da7932a3bc3fe43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 29
        echo "





        ";
        
        $__internal_f4f59414fbcb2eef74bab085feb0c78fbbab39b1b1e5279d9da7932a3bc3fe43->leave($__internal_f4f59414fbcb2eef74bab085feb0c78fbbab39b1b1e5279d9da7932a3bc3fe43_prof);

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
        return array (  93 => 29,  87 => 28,  75 => 8,  61 => 36,  59 => 28,  44 => 16,  33 => 8,  24 => 1,);
    }
}
