<?php

/* SeleccionProcesBundle:Default:login.html.twig */
class __TwigTemplate_4667baa11138fa5d9a8d4f6481eb8c8037e63d58d8d6e8d8a2afe6607a3933f0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::candidate.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'id' => array($this, 'block_id'),
            'article' => array($this, 'block_article'),
            'aside' => array($this, 'block_aside'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::candidate.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        echo "Ingreso";
    }

    // line 5
    public function block_id($context, array $blocks = array())
    {
        echo "usuario";
    }

    // line 7
    public function block_article($context, array $blocks = array())
    {
        // line 8
        echo "


\t<div id=\"wrap\">
\t\t<div class=\"container-fluid\">\t
\t\t\t<div class=\"row-fluid\">
\t\t\t\t<div class=\"span12\">
\t\t\t\t\t<!--<div class=\"container\">\t-->
\t\t\t\t\t\t<div class=\"row-fluid\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>

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
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(((isset($context["directorio_imagenes_carousel"]) ? $context["directorio_imagenes_carousel"] : $this->getContext($context, "directorio_imagenes_carousel")) . "slide1.png")), "html", null, true);
        echo "\">\t
\t\t\t\t\t\t\t\t\t\t\t    </div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t\t\t\t\t\t    \t<img src=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(((isset($context["directorio_imagenes_carousel"]) ? $context["directorio_imagenes_carousel"] : $this->getContext($context, "directorio_imagenes_carousel")) . "slide2.png")), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t\t\t\t\t    </div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t\t\t\t\t\t    \t<img src=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(((isset($context["directorio_imagenes_carousel"]) ? $context["directorio_imagenes_carousel"] : $this->getContext($context, "directorio_imagenes_carousel")) . "slide3.png")), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t\t\t\t\t    </div>\t\t    
\t\t\t\t\t\t\t\t\t\t\t     
\t\t\t\t\t\t\t\t\t\t    </div>
\t\t\t\t\t\t\t\t\t\t    <!-- Carousel nav -->
\t\t\t\t\t\t\t\t\t\t    <a class=\"carousel-control left\" href=\"#myCarousel\" data-slide=\"prev\">&lsaquo;</a>
\t\t\t\t\t\t\t\t\t\t    <a class=\"carousel-control right\" href=\"#myCarousel\" data-slide=\"next\">&rsaquo;</a>
\t\t\t\t\t\t\t\t\t\t</div>



\t\t\t\t\t\t\t\t\t\t<form  class=\"frmlogin\"   action=\"";
        // line 52
        echo $this->env->getExtension('routing')->getPath("usuario_login_check");
        echo "\" method=\"post\" >
\t\t\t\t\t\t\t\t\t\t\t";
        // line 53
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 54
            echo "\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 56
            echo "\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 57
        echo "\t\t
\t\t\t\t\t\t\t\t\t\t\t<h3>INICIAR SESIÃ“N</h3>

\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" id=\"username\" name=\"_username\"  class=\"userName input-block-level frmfield\"   value=\"";
        // line 60
        echo twig_escape_filter($this->env, ((array_key_exists("last_username", $context)) ? (_twig_default_filter((isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "")) : ("")), "html", null, true);
        echo "\" placeholder=\"Usuario\" />
\t\t
\t\t\t\t\t\t\t\t\t\t\t<input type=\"password\" id=\"password\" name=\"_password\" class=\"userKey input-block-level frmfield\"   placeholder=\"ContraseÃ±a\" />
\t\t
\t\t\t\t\t\t\t\t\t\t\t<input type=\"submit\" name=\"login\" class=\"btnlogin btn-success\"  value=\"Acceder\" />
\t\t
\t\t\t\t\t\t\t\t\t\t\t";
        // line 70
        echo "\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"_target_path\" value=\"candidate_bienvenida\" />
\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t</form>



\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"row-fluid\">
\t\t\t\t\t\t\t\t\t<div class=\"span12 section1\">
\t\t\t\t\t\t\t\t\t\t<h1 class=\"titulo\">ALGUNAS <b>CARACTERISTICAS</b> IMPORTANTES </h1>

\t\t\t\t\t\t\t\t\t\t<div class=\"row-fluid\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"span4\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"caracteristica\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"icono\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon-3x icon-user\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"titulo-c\">Característica <b>Uno</b></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<p>Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. 
\t\t\t\t\t\t\t\t\t\t\t\t\tLorem Ipsum ha sido el texto de relleno estándar</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"btn-leermas\" value=\"LEER MÁS\" />
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"span4\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"caracteristica\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"icono\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon-3x icon-user\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"titulo-c\">Característica <b>Uno</b></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<p>Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. 
\t\t\t\t\t\t\t\t\t\t\t\t\tLorem Ipsum ha sido el texto de relleno estándar</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"btn-leermas\" value=\"LEER MÁS\" />
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"span4\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"caracteristica\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"icono\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon-3x icon-user\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"titulo-c\">Característica <b>Uno</b></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<p>Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. 
\t\t\t\t\t\t\t\t\t\t\t\t\tLorem Ipsum ha sido el texto de relleno estándar</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"btn-leermas\" value=\"LEER MÁS\" />
\t\t\t\t\t\t\t\t\t\t\t\t</div>\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t</div>\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"row-fluid\">
\t\t\t\t\t\t\t\t\t<div class=\"span12 section2\">\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<div class=\"row-fluid\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"span4 nosotros\">
\t\t\t\t\t\t\t\t\t\t\t\t<h3>Porqué nos eligen?</h3>
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"accordion\" id=\"accordion2\" >
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"accordion-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t    <div class=\"accordion-heading\" data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapseOne\">
\t\t\t\t\t\t\t\t\t\t\t\t\t      <h4 class=\"accordion-title\">\t\t\t\t        
\t\t\t\t\t\t\t\t\t\t\t\t\t        Titulo1\t\t        
\t\t\t\t\t\t\t\t\t\t\t\t\t      </h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t    </div>
\t\t\t\t\t\t\t\t\t\t\t\t\t    <div id=\"collapseOne\" class=\"accordion-body collapse in\">
\t\t\t\t\t\t\t\t\t\t\t\t\t      <div class=\"accordion-inner\">
\t\t\t\t\t\t\t\t\t\t\t\t\t       \tLorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. 
\t\t\t\t\t\t\t\t\t\t\t\t\t       \tLorem Ipsum ha sido el texto de relleno estándar.
\t\t\t\t\t\t\t\t\t\t\t\t\t      </div>
\t\t\t\t\t\t\t\t\t\t\t\t\t    </div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"accordion-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t    <div class=\"accordion-heading\" data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapseTwo\">
\t\t\t\t\t\t\t\t\t\t\t\t\t      <h4 class=\"accordion-title\">\t\t\t\t        
\t\t\t\t\t\t\t\t\t\t\t\t\t        Titulo1\t\t        
\t\t\t\t\t\t\t\t\t\t\t\t\t      </h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t    </div>
\t\t\t\t\t\t\t\t\t\t\t\t\t    <div id=\"collapseTwo\" class=\"accordion-body collapse \">
\t\t\t\t\t\t\t\t\t\t\t\t\t      <div class=\"accordion-inner\">
\t\t\t\t\t\t\t\t\t\t\t\t\t       \tLorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. 
\t\t\t\t\t\t\t\t\t\t\t\t\t       \tLorem Ipsum ha sido el texto de relleno estándar.
\t\t\t\t\t\t\t\t\t\t\t\t\t      </div>
\t\t\t\t\t\t\t\t\t\t\t\t\t    </div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"accordion-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t    <div class=\"accordion-heading\" data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapseThree\">
\t\t\t\t\t\t\t\t\t\t\t\t\t      <h4 class=\"accordion-title\">\t\t\t\t        
\t\t\t\t\t\t\t\t\t\t\t\t\t        Titulo1\t\t        
\t\t\t\t\t\t\t\t\t\t\t\t\t      </h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t    </div>
\t\t\t\t\t\t\t\t\t\t\t\t\t    <div id=\"collapseThree\" class=\"accordion-body collapse \">
\t\t\t\t\t\t\t\t\t\t\t\t\t      <div class=\"accordion-inner\">
\t\t\t\t\t\t\t\t\t\t\t\t\t       \tLorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. 
\t\t\t\t\t\t\t\t\t\t\t\t\t       \tLorem Ipsum ha sido el texto de relleno estándar.
\t\t\t\t\t\t\t\t\t\t\t\t\t      </div>
\t\t\t\t\t\t\t\t\t\t\t\t\t    </div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>\t  

\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"span4 c-destacado\">
\t\t\t\t\t\t\t\t\t\t\t\t<h3>Lo mas destacado?</h3>
\t\t\t\t\t\t\t\t\t\t\t\t<p>Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar.</p>

\t\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><i class=\"icon-large icon-chevron-right\"></i>lo mas destacado 1</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><i class=\"icon-large icon-chevron-right\"></i>lo mas destacado 2</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><i class=\"icon-large icon-chevron-right\"></i>lo mas destacado 3</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><i class=\"icon-large icon-chevron-right\"></i>lo mas destacado 4</li>
\t\t\t\t\t\t\t\t\t\t\t\t</ul>

\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"span4\">
\t\t\t\t\t\t\t\t\t\t\t\t<h3>TESTIMONIOS</h3>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row-fluid\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"span12 slider testimonios\" >
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div id=\"myCarousel2\" class=\"carousel slide\" >
\t\t\t\t\t\t\t\t\t\t\t\t\t\t    <ol class=\"carousel-indicators\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t    <li class=\"active\" data-target=\"#myCarousel2\" data-slide-to=\"1\"></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t    <li data-target=\"#myCarousel2\" data-slide-to=\"2\"></li>\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t    <li data-target=\"#myCarousel2\" data-slide-to=\"3\"></li>\t\t\t\t\t\t\t\t\t\t\t   \t\t   
\t\t\t\t\t\t\t\t\t\t\t\t\t\t    </ol>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t    <!-- Carousel items -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t    <div class=\"carousel-inner\" >
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"active item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"foto\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--<img src=\"img/03.jpg\" />--> 
                                                                                                                              <img src=\"";
        // line 200
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(((isset($context["directorio_imagenes_carousel"]) ? $context["directorio_imagenes_carousel"] : $this->getContext($context, "directorio_imagenes_carousel")) . "03.jpg")), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"autor\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label>Michael Anderson</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"descripcion\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto.</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>\t   \t \t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t    </div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t    \t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t    </div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t    \t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t    </div>\t\t    
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t     
\t\t\t\t\t\t\t\t\t\t\t\t\t\t    </div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>\t

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








";
    }

    // line 249
    public function block_aside($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "SeleccionProcesBundle:Default:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  310 => 249,  258 => 200,  126 => 70,  117 => 60,  112 => 57,  109 => 56,  107 => 54,  105 => 53,  101 => 52,  87 => 41,  81 => 38,  75 => 35,  46 => 8,  43 => 7,  37 => 5,  31 => 4,);
    }
}
