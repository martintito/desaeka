<?php

/* RolBundle:Default:show.html.twig */
class __TwigTemplate_9f9d7ac6805cff8c9d39574fa64ad319aa08cf92678e7e7cde40a252b506a9cf extends Twig_Template
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
        echo "rol";
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        echo "Definición de Rol";
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
                    <table class=\"record_properties\">
                        <tbody>
                            <tr>
                                <th class=\"span3\">Nombre :</th>
                                <td class=\"span4\">";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "name", array()), "html", null, true);
        echo "</td>
                            </tr>
                            <tr>
                                <th class=\"span3\">Descripción :</th>
                                <td class=\"span4\">";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "descripcion", array()), "html", null, true);
        echo "</td>
                            </tr>
                            <tr>
                                <th class=\"span3\">Nivel :</th>
                                <td class=\"span4\">";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "nivel", array()), "html", null, true);
        echo "</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <br>
                <ul class=\"record_actions\">
                    <li>
                        <a href=\"";
        // line 36
        echo $this->env->getExtension('routing')->getPath("rol_homepage");
        echo "\">
                            Volver al listado de roles
                        </a>
                    </li>
                    <li>
                        <a  href=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("rol_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\">
                            Modificar rol
                        </a>
                    </li>
                </ul>
                <br>
            </div>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "RolBundle:Default:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 41,  88 => 36,  77 => 28,  70 => 24,  63 => 20,  52 => 12,  45 => 7,  42 => 6,  36 => 4,  30 => 3,);
    }
}
