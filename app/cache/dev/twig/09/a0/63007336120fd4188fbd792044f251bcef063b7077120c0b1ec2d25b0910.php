<?php

/* TestGatbSPBundle:Default:show.html.twig */
class __TwigTemplate_09a063007336120fd4188fbd792044f251bcef063b7077120c0b1ec2d25b0910 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::candidate.html.twig");

        $this->blocks = array(
            'id' => array($this, 'block_id'),
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
    public function block_id($context, array $blocks = array())
    {
        echo "gatbsp";
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        echo "GATB ";
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
                <center>
                    <h1>";
        // line 13
        $this->displayBlock("title", $context, $blocks);
        echo "</h1>
                    <br>
                    <h2>INVENTARIO GENERAL DE APTITUDES</h2>
                </center>
                <br>
                <br>
                <div class=\"row-fluid\">
                    <table class=\"record_properties\">
                        <tbody>
                            <tr>
                                <th class=\"span3\">Evaluado :</th>
                                <td class=\"span4\">";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "selectionProcessCandidate", array()), "html", null, true);
        echo ".</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                
                <div class=\"row-fluid\">
                    <center>
                        <h2>PARTE 1</h2>
                        <h3>INSTRUCCIONES</h3>
                    </center>
                    <table class=\"record_properties\">
                        <tbody>
                            <tr>
                                <td class=\"span2\"></td>
                                <td class=\"span4\">
                                    En esta página hay algunos ejercicios de comparación de nombres y razones sociales.
                                </td>
                                <td class=\"span2\"></td>
                            </tr>
                            <tr>
                                <td class=\"span2\"></td>
                                <td class=\"span4\">
                                    Observe el ejercicio 1
                                    <br>
                                    <br>
                                </td>
                                <td class=\"span2\"></td>
                            </tr>
                            <tr>
                                <td class=\"span2\"></td>
                                <td class=\"span4\">
                                    <center>
                                        1. Manuel G. Franco - Manuel G. Franco
                                        <br>
                                        <br>
                                    </center>
                                </td>
                                <td class=\"span2\"></td>
                            </tr>
                            <tr>
                                <td class=\"span2\"></td>
                                <td class=\"span4\">
                                    Los dos nombres son exactamente iguales. La letra <strong>I</strong> ha sido marcada.
                                    <br>
                                    <br>
                                </td>
                                <td class=\"span2\"></td>
                            </tr>
                            <tr>
                                <td class=\"span2\"></td>
                                <td class=\"span4\">
                                    <center>
                                        2. Jaen Leopoldo N - Jean Leopoldo N.
                                    </center>
                                    <br>
                                    <br>
                                </td>
                                <td class=\"span2\"></td>
                            </tr>
                            <tr>
                                <td class=\"span2\"></td>
                                <td class=\"span4\">
                                    Los dos nombres son diferentes, por esto el espacio bajo la letra <strong>D</strong>, ha sido marcada en la fila
                                    <br>
                                    ejercicio de práctica 2.
                                </td>
                                <td class=\"span2\"></td>
                            </tr>
                            <tr>
                                <td class=\"span2\"></td>
                                <td class=\"span4\">
                                    <br>
                                    <ul class=\"record_actions\">
                                        <li>
                                            <a href=\"";
        // line 99
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("test_gatb_part1_sp_new", array("idgatbsp" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\">
                                                Iniciar Prueba 1
                                            </a>
                                        </li>
                                    </ul>
                                </td>
                                <td class=\"span2\">
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                
                
                
                
               
            </div>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "TestGatbSPBundle:Default:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 99,  67 => 24,  53 => 13,  45 => 7,  42 => 6,  36 => 4,  30 => 3,);
    }
}
