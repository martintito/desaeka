<?php

/* SeleccionProcesBundle:Consultant:login.html.twig */
class __TwigTemplate_6a36bee179eb8967b921b7fd40f7d2f0f83865bfba39f75b305ce8823d9549c8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::consultor.html.twig");

        $this->blocks = array(
            'id' => array($this, 'block_id'),
            'title' => array($this, 'block_title'),
            'article' => array($this, 'block_article'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::consultor.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_id($context, array $blocks = array())
    {
        echo "consultor";
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        echo "Consultor";
    }

    // line 6
    public function block_article($context, array $blocks = array())
    {
        // line 7
        echo "
\t\t";
        // line 8
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 9
            echo "\t\t\t<div>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "message", array()), "html", null, true);
            echo "</div>
\t\t";
        }
        // line 11
        echo "

\t<body>
\t<div id=\"wrap\">
\t\t<div class=\"container-fluid\">\t
\t\t\t<div class=\"row-fluid\">
\t\t\t\t<div class=\"span12\">
\t\t\t\t\t<!--<div class=\"container\">\t-->
\t\t\t\t\t\t<div class=\"row-fluid\">
\t\t\t\t\t\t\t<div class=\"span12\">

\t\t\t\t\t\t\t\t<div class=\"row-fluid\">
\t\t\t\t\t\t\t\t\t<div class=\"span12 slider principal\" >
\t\t\t\t\t\t\t\t\t\t<!--border:5px solid #FFFFFF;box-shadow:0 0 5px #CCCCCC;padding-top:0px -->
\t\t\t\t\t\t\t\t\t\t<div id=\"myCarousel\" class=\"carousel slide\" >
\t\t\t\t\t\t\t\t\t\t    <ol class=\"carousel-indicators\">
\t\t\t\t\t\t\t\t\t\t\t    <li class=\"active\" data-target=\"#myCarousel\" data-slide-to=\"1\"></li>
\t\t\t\t\t\t\t\t\t\t\t    <li data-target=\"#myCarousel\" data-slide-to=\"2\"></li>\t
\t\t\t\t\t\t\t\t\t\t\t    <li data-target=\"#myCarousel\" data-slide-to=\"3\"></li>\t\t\t\t\t\t\t\t\t\t\t   \t\t   
\t\t\t\t\t\t\t\t\t\t    </ol>
\t\t\t\t\t\t\t\t\t\t    <!-- Carousel items -->
\t\t\t\t\t\t\t\t\t\t    <div class=\"carousel-inner\" >
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"active item\">
\t\t\t\t\t\t\t\t\t\t\t    \t<img src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(((isset($context["directorio_imagenes_carousel"]) ? $context["directorio_imagenes_carousel"] : $this->getContext($context, "directorio_imagenes_carousel")) . "slide1.png")), "html", null, true);
        echo "\">\t
\t\t\t\t\t\t\t\t\t\t\t    </div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t\t\t\t\t\t    \t<img src=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(((isset($context["directorio_imagenes_carousel"]) ? $context["directorio_imagenes_carousel"] : $this->getContext($context, "directorio_imagenes_carousel")) . "slide2.png")), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t\t\t\t\t    </div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t\t\t\t\t\t    \t<img src=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(((isset($context["directorio_imagenes_carousel"]) ? $context["directorio_imagenes_carousel"] : $this->getContext($context, "directorio_imagenes_carousel")) . "slide3.png")), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t\t\t\t\t    </div>\t\t    
\t\t\t\t\t\t\t\t\t\t\t     
\t\t\t\t\t\t\t\t\t\t    </div>
\t\t\t\t\t\t\t\t\t\t    <!-- Carousel nav -->
\t\t\t\t\t\t\t\t\t\t    <a class=\"carousel-control left\" href=\"#myCarousel\" data-slide=\"prev\">&lsaquo;</a>
\t\t\t\t\t\t\t\t\t\t    <a class=\"carousel-control right\" href=\"#myCarousel\" data-slide=\"next\">&rsaquo;</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 48
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 49
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<div>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "message", array()), "html", null, true);
            echo "</div>
\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 51
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t<form  class=\"frmlogin\"   action=\"";
        // line 52
        echo $this->env->getExtension('routing')->getPath("consultor_login_check");
        echo "\" method=\"post\" >
\t\t\t\t\t\t\t\t\t\t\t\t<h3>INICIAR SESIÓN</h3>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div>\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" id=\"username\" name=\"_username\"  class=\"userName input-block-level frmfield\"   value=\"";
        // line 55
        echo twig_escape_filter($this->env, ((array_key_exists("last_username", $context)) ? (_twig_default_filter((isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "")) : ("")), "html", null, true);
        echo "\" placeholder=\"Usuario\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"password\" id=\"password\" name=\"_password\" class=\"userKey input-block-level frmfield\"   placeholder=\"clave\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"submit\" name=\"login\" class=\"btnlogin btn-success\"  value=\"Entrar\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"_target_path\" value=\"consultor_portada\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>\t
\t\t\t\t\t\t</div>
\t\t\t\t\t<!--</div>-->
\t\t\t\t</div>\t\t
\t\t\t</div>\t\t\t
\t\t</div>
\t\t<div id=\"push\"></div>
\t</div>

\t<div id=\"footer\">
\t\t<?php include_once(\"footer.php\") ?>\t\t\t
\t</div>
</body>
\t\t\t
";
    }

    public function getTemplateName()
    {
        return "SeleccionProcesBundle:Consultant:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 55,  115 => 52,  112 => 51,  106 => 49,  104 => 48,  93 => 40,  87 => 37,  81 => 34,  56 => 11,  50 => 9,  48 => 8,  45 => 7,  42 => 6,  36 => 4,  30 => 3,);
    }
}
