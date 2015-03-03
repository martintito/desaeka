<?php

/* CandidateBundle:Default:show.html.twig */
class __TwigTemplate_9000aba91b3a4ffb16f7e08afb7be5f8f642c697461543bd5ce77d8c54a69e85 extends Twig_Template
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
        echo "candidate";
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        echo "Definición de candidato";
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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "firstName", array()), "html", null, true);
        echo "</td>
                            </tr>
                            <tr>
                                <th class=\"span3\">Apellido :</th>
                                <td class=\"span4\">";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "lastName", array()), "html", null, true);
        echo "</td>
                            </tr>
                            <tr>
                                <th class=\"span3\">Genero :</th>
                                <td class=\"span4\">
                                    ";
        // line 29
        if (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "gender", array()) == "m")) {
            // line 30
            echo "                                        Masculino
                                    ";
        } else {
            // line 32
            echo "                                        Femenino
                                    ";
        }
        // line 34
        echo "                                </td>
                            </tr>
                            <tr>
                                <th class=\"span3\">Fecha Nacimiento :</th>
                                <td class=\"span4\">";
        // line 38
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "birthDate", array()), "d / m / Y"), "html", null, true);
        echo "  </td>
                            </tr>
                            <tr>
                                <th class=\"span3\">Correo Electrónico :</th>
                                <td class=\"span4\">";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "email", array()), "html", null, true);
        echo "</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <br>
                <ul class=\"record_actions\">
                    <li>
                        <a href=\"";
        // line 50
        echo $this->env->getExtension('routing')->getPath("candidate_homepage");
        echo "\">
                            Volver al listado de candidatos
                        </a>
                    </li>
                    <li>
                        <a  href=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("candidate_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\">
                            Modificar candidato
                        </a>
                    </li>
                </ul>
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
        return "CandidateBundle:Default:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 55,  112 => 50,  101 => 42,  94 => 38,  88 => 34,  84 => 32,  80 => 30,  78 => 29,  70 => 24,  63 => 20,  52 => 12,  45 => 7,  42 => 6,  36 => 4,  30 => 3,);
    }
}
