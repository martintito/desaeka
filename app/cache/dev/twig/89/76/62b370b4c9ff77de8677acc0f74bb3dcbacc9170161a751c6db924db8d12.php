<?php

/* RolBundle:RolDetail:edit.html.twig */
class __TwigTemplate_897662b370b4c9ff77de8677acc0f74bb3dcbacc9170161a751c6db924db8d12 extends Twig_Template
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
        echo "roldetail";
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        echo "Modificar otros conocimientos";
    }

    // line 6
    public function block_article($context, array $blocks = array())
    {
        // line 7
        echo "
<div id=\"wrap\">
    <div class=\"container-fluid\">
        <div class=\"row-fluid\">
            <div class=\"span12 content\">
                <h2>";
        // line 12
        $this->displayBlock("title", $context, $blocks);
        echo "</h2>
                <br>
                <br>
                <div class=\"row-fluid\">
                    ";
        // line 16
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form', array("action" => $this->env->getExtension('routing')->getPath("rol_detail_update", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array())))));
        echo "
                </div>
                <ul class=\"record_actions\">
                    <li>
                        <a href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("register_definition_rol_show", array("id" => $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "registerDefinitionRol", array()), "id", array()))), "html", null, true);
        echo "\">
                            Cancelar
                        </a>
                    </li>
                    <!--
                    <li>
                        <form action=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("rol_delete", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\" method=\"post\">
                            ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'widget');
        echo "
                            <button type=\"submit\">Borrar rol</button>
                        </form>
                    </li>
                    -->
                </ul>
            </div>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "RolBundle:RolDetail:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 27,  75 => 26,  66 => 20,  59 => 16,  52 => 12,  45 => 7,  42 => 6,  36 => 4,  30 => 3,);
    }
}
