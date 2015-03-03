<?php

/* ::base.html.twig */
class __TwigTemplate_348c713163bf622cc8007c9c8f1809e3ca380bd7be66bfa7cb1bd71ddd2fcbca extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'id' => array($this, 'block_id'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        
        <link href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/font-awesome-ie7.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
        <link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
        <link href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/estilos.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
        
        <link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bootstrap/css/bootstrap-responsive.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
        <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
        <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bootstrap/css/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
        <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bootstrap/css/bootstrap-select.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
        <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bootstrap/css/bootstrap-responsive.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
        <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bootstrap/css/bootstrap-select.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
        
        <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/custom-scrollbar-plugin/jquery.mCustomScrollbar.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
        
        <script src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bootstrap/js/bootstrap-select.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bootstrap/js/bootstrap-select.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bootstrap/js/bootstrap.js"), "html", null, true);
        echo "\"></script>
        
        <script src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("uploads/js/jquery.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("uploads/js/jquery-ui-1.10.3.custom.min.js"), "html", null, true);
        echo "\"></script>
        
        <script src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js"), "html", null, true);
        echo "\"></script>
        
        <script src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("uploads/js/jaxxes.js"), "html", null, true);
        echo "\"></script>
        
        ";
        // line 32
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 37
        echo "        
        
        ";
        // line 39
        $this->displayBlock('javascripts', $context, $blocks);
        // line 44
        echo "    </head>
    <body id=\"";
        // line 45
        $this->displayBlock('id', $context, $blocks);
        echo "\">
        <div id=\"contenedor\">
            
            ";
        // line 48
        $this->displayBlock('body', $context, $blocks);
        // line 49
        echo "    </body>
    <footer>
        <div id=\"footer\">
            <div class=\"row-fluid\">
                <div class=\"span12 c-footer\" >
                    <!--
                    ";
        // line 55
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " -&copy; Copyright JAXXES by 
                    <span><a href=\"http://www.cleverclouds.im/\" target=\"blank\" style=\"color:#ffffff;font-weight:bold\">Clever Clouds</a></span>
                    -->
                </div>
            </div>\t
        </div>
    </footer>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "JAXXES!";
    }

    // line 32
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 33
        echo "        ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
        } else {
            // asset "e8b7ee0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_e8b7ee0") : $this->env->getExtension('assets')->getAssetUrl("css/e8b7ee0.css");
            // line 34
            echo "        
        ";
        }
        unset($context["asset_url"]);
        // line 36
        echo "        ";
    }

    // line 39
    public function block_javascripts($context, array $blocks = array())
    {
        // line 40
        echo "        ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
        } else {
            // asset "1b37284"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_1b37284") : $this->env->getExtension('assets')->getAssetUrl("js/1b37284.js");
            // line 41
            echo "        
        ";
        }
        unset($context["asset_url"]);
        // line 42
        echo "  
        ";
    }

    // line 45
    public function block_id($context, array $blocks = array())
    {
        echo "";
    }

    // line 48
    public function block_body($context, array $blocks = array())
    {
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
        return array (  203 => 48,  197 => 45,  192 => 42,  187 => 41,  181 => 40,  178 => 39,  174 => 36,  169 => 34,  163 => 33,  160 => 32,  154 => 5,  141 => 55,  133 => 49,  131 => 48,  125 => 45,  122 => 44,  120 => 39,  116 => 37,  114 => 32,  109 => 30,  104 => 28,  99 => 26,  95 => 25,  91 => 24,  86 => 22,  82 => 21,  78 => 20,  73 => 18,  68 => 16,  64 => 15,  60 => 14,  56 => 13,  52 => 12,  48 => 11,  43 => 9,  39 => 8,  35 => 7,  30 => 5,  24 => 1,);
    }
}
