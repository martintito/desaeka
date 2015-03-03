<?php

/* NivelBundle:Default:show.html.twig */
class __TwigTemplate_8108a376bb9873d017699f4cea3d78e101f1340966f608c4625a7a9bc22c3f31 extends Twig_Template
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
        echo "nivel";
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        echo "Definición Nivel ";
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
                                <th class=\"span3\">Nombre : </th>
                                <td class=\"span4\">";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "name", array()), "html", null, true);
        echo "</td>
                            </tr>
                            <tr>
                                <th class=\"span3\">Descripción : </th>
                                <td class=\"span4\">";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "descr", array()), "html", null, true);
        echo "</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <br>
                <br>
                <ul class=\"record_actions\">
                    <li>
                        <a href=\"";
        // line 33
        echo $this->env->getExtension('routing')->getPath("nivel_homepage");
        echo "\">
                            Volver al listado
                        </a>
                    </li>
                    <li>
                        <a  href=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nivel_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\">
                            Modificar nivel
                        </a>
                    </li>
                </ul>
                <br>
                <br>
                <br>
                <br>
            </div>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "NivelBundle:Default:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 38,  82 => 33,  70 => 24,  63 => 20,  52 => 12,  45 => 7,  42 => 6,  36 => 4,  30 => 3,);
    }
}
