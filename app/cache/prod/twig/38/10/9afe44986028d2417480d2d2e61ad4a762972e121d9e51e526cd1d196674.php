<?php

/* SeleccionProcesBundle:Candidate:login.html.twig */
class __TwigTemplate_38109afe44986028d2417480d2d2e61ad4a762972e121d9e51e526cd1d196674 extends Twig_Template
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
                                
                                \t<div id=\"textohome\">
                                    Personas unidas bajo un mismo objetivo<br>
\t\t\t\t\t\t\t\t\tque se mueven de acuerdo al mercado y<br>
                                    a cómo está el mundo de las<br>
                                    organizaciones... siempre en movimiento.<br><br>
                                    Bienvenido a Jaxxes,<br>
                                    al ritmo de las organizaciones.<br>
                                    </div>
\t\t\t\t\t\t\t\t\t<div class=\"span12 slider principal\" >
\t\t\t\t\t\t\t\t\t\t<!--border:5px solid #FFFFFF;box-shadow:0 0 5px #CCCCCC;padding-top:0px -->

\t\t\t\t\t\t\t\t\t\t<form  class=\"frmlogin\"   action=\"";
        // line 36
        echo $this->env->getExtension('routing')->getPath("candidate_login_check");
        echo "\" method=\"post\" >
\t\t\t\t\t\t\t\t\t\t\t";
        // line 37
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 38
            echo "\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 40
            echo "\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 41
        echo "\t\t
\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" id=\"username\" name=\"_username\"  class=\"userName input-block-level frmfield\"   value=\"";
        // line 42
        echo twig_escape_filter($this->env, ((array_key_exists("last_username", $context)) ? (_twig_default_filter((isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "")) : ("")), "html", null, true);
        echo "\" placeholder=\"Usuario\" />
\t\t
\t\t\t\t\t\t\t\t\t\t\t<input type=\"password\" id=\"password\" name=\"_password\" class=\"userKey input-block-level frmfield\"   placeholder=\"Contraseña\" />
\t\t
\t\t\t\t\t\t\t\t\t\t\t<input type=\"submit\" name=\"login\" class=\"btnlogin btn-success\"  value=\"Acceder\" />
\t\t
\t\t\t\t\t\t\t\t\t\t\t";
        // line 53
        echo "\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t</form>
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


";
    }

    // line 69
    public function block_aside($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "SeleccionProcesBundle:Candidate:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 69,  99 => 53,  90 => 42,  87 => 41,  84 => 40,  82 => 38,  80 => 37,  76 => 36,  46 => 8,  43 => 7,  37 => 5,  31 => 4,);
    }
}
