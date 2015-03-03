<?php

/* ::consultor.html.twig */
class __TwigTemplate_0d76525d8db0cad33bb758c387f5d67495ed8aed145faf7ef01c4274443cdd04 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'article' => array($this, 'block_article'),
            'aside' => array($this, 'block_aside'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "<header>
    <div class=\"row-fluid\">
        <div class=\"span12 nav-m\" >
            <div class=\"row-fluid\">
                <div class=\"span3 logo\">
                    <img alt=\"Fotografía Jaxxes\" src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(((isset($context["directorio_imagenes_jaxxes"]) ? $context["directorio_imagenes_jaxxes"] : $this->getContext($context, "directorio_imagenes_jaxxes")) . "logojaxxes.png")), "html", null, true);
        echo "\">
                    <!--<h2>JAXXES</h2>-->
                </div>
                <div class=\"span9\">
                    <ul class=\"menu\">
                        <li ><a href=\"";
        // line 16
        echo $this->env->getExtension('routing')->getPath("nivel_homepage");
        echo "\">Nivel</a></li>
                        <li ><a href=\"";
        // line 17
        echo $this->env->getExtension('routing')->getPath("rol_homepage");
        echo "\">Rol</a></li>
                        <li ><a href=\"";
        // line 18
        echo $this->env->getExtension('routing')->getPath("enterprise_homepage");
        echo "\">Cliente</a></li>
                        <li ><a href=\"";
        // line 19
        echo $this->env->getExtension('routing')->getPath("candidate_homepage");
        echo "\">Candidato</a></li>
                        <li ><a href=\"";
        // line 20
        echo $this->env->getExtension('routing')->getPath("consultor_portada");
        echo "\">Proceso de Selección</a></li>
                        <li ><a href=\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("consultor_logout");
        echo "\">Salir</a>
                    </ul>
                </div>\t
            </div>
        </div>
    </div>
</header>
<article>
    ";
        // line 29
        $this->displayBlock('article', $context, $blocks);
        // line 30
        echo "</article>
<aside>
    ";
        // line 32
        $this->displayBlock('aside', $context, $blocks);
        // line 33
        echo "</aside>
";
    }

    // line 29
    public function block_article($context, array $blocks = array())
    {
    }

    // line 32
    public function block_aside($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::consultor.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 32,  92 => 29,  87 => 33,  85 => 32,  81 => 30,  79 => 29,  68 => 21,  64 => 20,  60 => 19,  56 => 18,  52 => 17,  48 => 16,  40 => 11,  33 => 6,  30 => 5,);
    }
}
