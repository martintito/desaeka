<?php

/* RolBundle:RolLanguage:new.html.twig */
class __TwigTemplate_ffe7063ec564da53cc139a3ae7ca38850de181a715e9e84af43f863c350808f6 extends Twig_Template
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

    // line 2
    public function block_id($context, array $blocks = array())
    {
        echo "rollanguage";
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Registro de Idioma a Perfil de Cargo";
    }

    // line 5
    public function block_article($context, array $blocks = array())
    {
        // line 6
        echo "
<div id=\"wrap\">
    <div class=\"container-fluid\">
        <div class=\"row-fluid\">
            <div class=\"span12 content\">
                <h2>";
        // line 11
        $this->displayBlock("title", $context, $blocks);
        echo "</h2>
                <br>
                <div class=\"row-fluid\">
                    ";
        // line 14
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form', array("action" => $this->env->getExtension('routing')->getPath("rol_language_create")));
        echo "
                </div>
                <!--
                <ul class=\"record_actions\">
                    <li>
                        <a href=\"";
        // line 19
        echo $this->env->getExtension('routing')->getPath("rol_homepage");
        echo "\">
                            Volver al listado
                        </a>
                    </li>
                </ul>
                -->
            </div>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "RolBundle:RolLanguage:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 19,  58 => 14,  52 => 11,  45 => 6,  42 => 5,  36 => 3,  30 => 2,);
    }
}
