<?php

/* RavenSPBundle:Default:new.html.twig */
class __TwigTemplate_209e2dd593d206d647ba3082a7003eac4d6c28b22780d46f73b013a7e068e425 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::candidate.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'article' => array($this, 'block_article'),
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

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo " Test Raven ";
    }

    // line 5
    public function block_article($context, array $blocks = array())
    {
        // line 6
        echo "<!--<h1>";
        $this->displayBlock("title", $context, $blocks);
        echo "</h1>-->
<div id=\"wrap\">
    <div class=\"container-fluid\">
        <div class=\"span12 content\">
            <table class=\"table table-striped\">
                <thead>
                    <tr>
                        <th>Pregunta</th>
                    </tr>
                    <!--
\t\t\t\t\t";
        // line 16
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
            // line 17
            echo "\t\t\t\t\t";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo " 
\t\t\t\t\t";
        }
        // line 19
        echo "\t\t\t\t\t-->
                </thead>
                <tbody>
\t\t\t\t\t
                    
\t\t\t\t\t";
        // line 24
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('routing')->getPath("rv_next", array("idQuestion" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()), "orden" => (isset($context["orden"]) ? $context["orden"] : $this->getContext($context, "orden"))))));
        echo "  
\t\t\t\t\t<table>
\t\t\t\t\t<td>
\t\t\t\t\t\t
\t\t\t\t\t\t<tr><img alt=\"Fotografia\" width=\"500\" height=\"250\" src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(((isset($context["directorio_imagenes_raven"]) ? $context["directorio_imagenes_raven"] : $this->getContext($context, "directorio_imagenes_raven")) . $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "ravendetail", array()), "rutaFotoSerie", array()))), "html", null, true);
        echo "\"></tr>
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<tr><img alt=\"Fotografia\" width=\"500\" height=\"250\" src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(((isset($context["directorio_imagenes_raven"]) ? $context["directorio_imagenes_raven"] : $this->getContext($context, "directorio_imagenes_raven")) . $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "ravendetail", array()), "rutaFotoAlternatives", array()))), "html", null, true);
        echo "\"></tr>\t\t\t\t\t\t
\t\t\t\t\t</td>
\t\t\t\t\t<tr>";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "answer", array()), 'row');
        echo " </tr>\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t</table>
\t\t\t\t\t";
        // line 35
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
                </tbody>
            </table>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "RavenSPBundle:Default:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 35,  85 => 33,  80 => 31,  74 => 28,  67 => 24,  60 => 19,  54 => 17,  52 => 16,  38 => 6,  35 => 5,  29 => 3,);
    }
}
