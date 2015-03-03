<?php

/* ::candidate.html.twig */
class __TwigTemplate_87c4605ad79a759bb2feee560c6120dd26f8a45e97e96d804ba3f6da54ed3af8 extends Twig_Template
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

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "<header>
    <div class=\"row-fluid\">
        <div class=\"span12 nav-m\" >
            <div class=\"row-fluid\">
                <div class=\"span3 logo\">
                    <img alt=\"Fotografía Jaxxes\" src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(((isset($context["directorio_imagenes_jaxxes"]) ? $context["directorio_imagenes_jaxxes"] : $this->getContext($context, "directorio_imagenes_jaxxes")) . "logojaxxes.png")), "html", null, true);
        echo "\">
                    <!--<h2>JAXXES</h2>-->
                </div>
                <div class=\"span9\">
                    <ul class=\"menu\">
                        <li ><a href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("candidate_login_check");
        echo "\">Bienvenida</a></li>
\t\t\t   <!--
                        <li ><a href=\"";
        // line 16
        echo $this->env->getExtension('routing')->getPath("rv_new");
        echo "\">Raven</a></li>
               
                        <li ><a href=\"";
        // line 18
        echo $this->env->getExtension('routing')->getPath("sp_candidato_test_index");
        echo "\">Evaluación</a></li>
                 -->
                        <li ><a href=\"";
        // line 20
        echo $this->env->getExtension('routing')->getPath("candidate_logout");
        echo "\">Salir</a>
                    </ul>
                </div>\t
            </div>
        </div>
    </div>
</header>
<article>
    ";
        // line 28
        $this->displayBlock('article', $context, $blocks);
        // line 29
        echo "</article>
<aside>
    ";
        // line 31
        $this->displayBlock('aside', $context, $blocks);
        // line 32
        echo "</aside>
";
    }

    // line 28
    public function block_article($context, array $blocks = array())
    {
    }

    // line 31
    public function block_aside($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::candidate.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 31,  87 => 28,  82 => 32,  80 => 31,  76 => 29,  74 => 28,  63 => 20,  58 => 18,  53 => 16,  48 => 14,  40 => 9,  33 => 4,  30 => 3,);
    }
}
