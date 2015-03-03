<?php

/* TestGatbSPBundle:GatbPart2SP:show.html.twig */
class __TwigTemplate_fa61c434710ebf277f24bc16ce262362aeadfbfec329da8e14ef671430570d31 extends Twig_Template
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
        echo "gatbpart2sp";
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        echo "Prueba 2 Gatb ";
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
                <!--<h2>";
        // line 12
        $this->displayBlock("title", $context, $blocks);
        echo "</h2>-->
                <br>
                <br>
                <div class=\"row-fluid\">
                    <table class=\"record_properties\">
                        <tbody>
                            <tr>
                                <th class=\"span3\">Evaluado :</th>
                                <td class=\"span4\">";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "gatbSP", array()), "html", null, true);
        echo ".</td>
                            </tr>
                            <tr>
                                <th class=\"span3\">Test Finalizado :</th>
                                <td class=\"span4\">";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "gatbPart2", array()), "html", null, true);
        echo ".</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class=\"row-fluid\">
                    <center>
                        <h2>PARTE 3</h2>
                        <h3>INSTRUCCIONES</h3>
                    </center>
                    <br>
                    <div class=\"row-fluid\">
                        <div class=\"span2\">
                        </div>
                        <div class=\"span9\" STYLE=\"font-family: Arial; font-size: 18px; color: black\">
                            En esta página hay algunos ejercicios que consisten en encontrar objetos hechos de planchas de metal.
                        </div>
                    </div>
                    <br>
                    <br>
                    <div class=\"row-fluid\">
                        <div class=\"span2\">
                        </div>
                        <div class=\"span9\" STYLE=\"font-family: Arial; font-size: 18px; color: black\">
                            <strong>
                                Observe el ejercicio 1, abajo:
                            </strong>
                        </div>
                    </div>
                    <div class=\"row-fluid\">
                        <div class=\"span2\">
                        </div>
                        <div class=\"span9\" STYLE=\"font-family: Arial; font-size: 18px; color: black\">
                            <img alt=\"Imagen\" src=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(((isset($context["directorio_imagenes_gatb"]) ? $context["directorio_imagenes_gatb"] : $this->getContext($context, "directorio_imagenes_gatb")) . "ImagenEjercicio1Pregunta.jpg")), "html", null, true);
        echo "\">
                            <img alt=\"Imagen\" src=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(((isset($context["directorio_imagenes_gatb"]) ? $context["directorio_imagenes_gatb"] : $this->getContext($context, "directorio_imagenes_gatb")) . "ImagenEjercicio1Alternativas.jpg")), "html", null, true);
        echo "\">
                        </div>
                    </div>
                    <br>
                    <div class=\"row-fluid\">
                        <div class=\"span2\">
                        </div>
                        <div class=\"span9\" STYLE=\"font-family: Arial; font-size: 18px; color: black\">
                            <!--A la izquierda hay un dibujo que representa una pieza plana de metal. Las líneas de guiones muestran donde se debe doblar el metal. A la derecha hay dibujos de cuatro objetos. Observe que solamente el objeto D se puede hacer doblando la pieza de metal de la figura 1. Ahora mire en la hoja de respuestas en la Parte 3 la casilla de práctica. Observe que en la fila para el ejercicio 1 el espacio bajo la letra D ha sido marcado.-->
                            En la parte superior se tiene la figura 1 que representa una pieza plana de metal. Las líneas de guiones muestran donde se debe doblar el metal. En la parte inferior a la figura hay dibujos de cuatro objetos (A, B, C, D respectivamente). Observe que solamente el objeto D se puede hacer doblando la pieza de metal de la figura 1. Entonces la respuesta a la pregunta será la letra D. 
                        </div>
                    </div>
                    <br>
                    <br>
                    <div class=\"row-fluid\">
                        <div class=\"span2\">
                        </div>
                        <div class=\"span9\" STYLE=\"font-family: Arial; font-size: 18px; color: black\">
                            <strong>
                                Ahora observe el ejercicio 2
                            </strong>
                        </div>
                    </div>
                    <div class=\"row-fluid\">
                        <div class=\"span2\">
                        </div>
                        <div class=\"span9\" STYLE=\"font-family: Arial; font-size: 18px; color: black\">
                            <img alt=\"Imagen\" src=\"";
        // line 85
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(((isset($context["directorio_imagenes_gatb"]) ? $context["directorio_imagenes_gatb"] : $this->getContext($context, "directorio_imagenes_gatb")) . "ImagenEjercicio2Pregunta.jpg")), "html", null, true);
        echo "\">
                            <img alt=\"Imagen\" src=\"";
        // line 86
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(((isset($context["directorio_imagenes_gatb"]) ? $context["directorio_imagenes_gatb"] : $this->getContext($context, "directorio_imagenes_gatb")) . "ImagenEjercicio2Alternativas.jpg")), "html", null, true);
        echo "\">
                        </div>
                    </div>
                    <br>
                    <div class=\"row-fluid\">
                        <div class=\"span2\">
                        </div>
                        <div class=\"span9\" STYLE=\"font-family: Arial; font-size: 18px; color: black\">
                            <!--A la izquierda hay otro dibujo de una pieza plana de metal. Solamente el objeto C se puede hacer de la figura 2, esta vez enrollando y doblando el metal. Por esto, en la fila para el ejercicio de práctica 2 en la hoja de respuestas se ha marcado el espacio bajo la letra C.-->
                            Para el ejercicio se tiene la figura 2 con otro dibujo de una pieza plana de metal. Solamente el dibujo con el objeto C se puede hacer de la figura 2, esta vez enrollando y doblando el metal. Por esto, la respuesta a la pregunta sería la letra C.
                        </div>
                    </div>
                    <br>
                    <br>
                    <div class=\"row-fluid\">
                        <div class=\"span2\">
                        </div>
                        <div class=\"span9\" >
                            <ul class=\"record_actions\">
                                <li>
                                    <a href=\"";
        // line 106
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("test_gatb_part3_sp_new", array("idgatbsp" => $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "gatbSP", array()), "id", array()))), "html", null, true);
        echo "\">
                                        Empezar Prueba 3
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "TestGatbSPBundle:GatbPart2SP:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  167 => 106,  144 => 86,  140 => 85,  110 => 58,  106 => 57,  70 => 24,  63 => 20,  52 => 12,  45 => 7,  42 => 6,  36 => 4,  30 => 3,);
    }
}
