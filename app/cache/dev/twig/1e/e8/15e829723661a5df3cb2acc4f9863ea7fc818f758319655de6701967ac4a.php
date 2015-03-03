<?php

/* ::admin.html.twig */
class __TwigTemplate_1ee815e829723661a5df3cb2acc4f9863ea7fc818f758319655de6701967ac4a extends Twig_Template
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
        echo $this->env->getExtension('routing')->getPath("candidate_bienvenida");
        echo "\">Candidatos</a></li>
                    </ul>
                </div>\t
            </div>
        </div>
    </div>
</header>
<article>
    ";
        // line 22
        $this->displayBlock('article', $context, $blocks);
        // line 23
        echo "</article>
<aside>
    ";
        // line 25
        $this->displayBlock('aside', $context, $blocks);
        // line 26
        echo "</aside>
";
    }

    // line 22
    public function block_article($context, array $blocks = array())
    {
    }

    // line 25
    public function block_aside($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::admin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 25,  72 => 22,  67 => 26,  65 => 25,  61 => 23,  59 => 22,  48 => 14,  40 => 9,  33 => 4,  30 => 3,);
    }
}
