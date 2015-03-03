<?php

/* TestPmaSPBundle:PmaPart1SP:show.html.twig */
class __TwigTemplate_5fbb95926ae15a8aa7b1dc870902095d4eb78844677ebfd6c526418990b8f802 extends Twig_Template
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
        echo "pmapart1sp";
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        echo "Prueba PMA ";
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
                <div class=\"row-fluid\">
                    <table class=\"record_properties\">
                        <tbody>
                            <tr>
                                <th class=\"span3\">Evaluado</th>
                                <td class=\"span4\">";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "pmaSP", array()), "html", null, true);
        echo "</td>
                            </tr>
                            <tr>
                                <th class=\"span3\">Test Finalizado</th>
                                <td class=\"span4\">";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "pmaPart1", array()), "html", null, true);
        echo "</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class=\"row-fluid\">
                    <center>
                        <h1>FACTOR E</h1>
                    </center>
                    <br>
                    <div class=\"row-fluid\">
                        <div class=\"span2\">
                        </div>
                        <div class=\"span9\" STYLE=\"font-family: Arial; font-size: 18px; color: black\">
                            Mire la fila de figuras de debajo. La primera figura es como una F. Todas las restantes figuras son EXACTAMENTE IGUALES a la primera,
                            pero han sido colocadas en diferentes posiciones. Sólo falta ponerlas derechas para ver que son EXACTAMENTE IGUALES a la primera.
                            Obsérvelo.
                        </div>
                    </div>
                    <br>
                    <div class=\"row-fluid\">
                        <div class=\"span2\">
                        </div>
                        <div class=\"span9\">
                            <div class=\"row-fluid\">
                                <div class=\"span2\">
                                    <img alt=\"Imagen\" src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(((isset($context["directorio_imagenes_pma"]) ? $context["directorio_imagenes_pma"] : $this->getContext($context, "directorio_imagenes_pma")) . "imagenEjer1Preg.jpg")), "html", null, true);
        echo "\">
                                </div>
                                <div class=\"span2\">
                                </div>
                                <div class=\"span7\">
                                    <img alt=\"Imagen\" src=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(((isset($context["directorio_imagenes_pma"]) ? $context["directorio_imagenes_pma"] : $this->getContext($context, "directorio_imagenes_pma")) . "imagenEjer1Alter.jpg")), "html", null, true);
        echo "\">
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class=\"row-fluid\">
                        <div class=\"span2\">
                        </div>
                        <div class=\"span9\" STYLE=\"font-family: Arial; font-size: 18px; color: black\">
                            Ahora mire la fila siguiente de figuritas. La primera es semejante a una F. Pero ninguna de las restantes es IGUAL  a la F, aun en el 
                            caso de que las pusiera derechas. Están hechas todas al revés. No dé vueltas al papel. Déjelo sobre la mesa, sin levantarlo. Lo que
                            tiene que hacer es imaginárselo.
                        </div>
                    </div>
                    <br>
                    <div class=\"row-fluid\">
                        <div class=\"span2\">
                        </div>
                        <div class=\"span9\">
                            <div class=\"row-fluid\">
                                <div class=\"span2\">
                                    <img alt=\"Imagen\" src=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(((isset($context["directorio_imagenes_pma"]) ? $context["directorio_imagenes_pma"] : $this->getContext($context, "directorio_imagenes_pma")) . "imagenEjer2Preg.jpg")), "html", null, true);
        echo "\">
                                </div>
                                <div class=\"span2\">
                                </div>
                                <div class=\"span7\">
                                    <img alt=\"Imagen\" src=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(((isset($context["directorio_imagenes_pma"]) ? $context["directorio_imagenes_pma"] : $this->getContext($context, "directorio_imagenes_pma")) . "imagenEjer2Alter.jpg")), "html", null, true);
        echo "\">
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class=\"row-fluid\">
                        <div class=\"span2\">
                        </div>
                        <div class=\"span9\" STYLE=\"font-family: Arial; font-size: 18px; color: black\">
                            Algunas de la figuas que siguen son IGUALES a la primera. Otras están al revés.
                        </div>
                    </div>
                    <div class=\"row-fluid\">
                        <div class=\"span2\">
                        </div>
                        <div class=\"span9\">
                            <div class=\"row-fluid\">
                                <div class=\"span2\"></div>
                                <div class=\"span3\"></div>
                                <div class=\"span1\"><h4>A</h4></div>
                                <div class=\"span1\"><h4>B</h4></div>
                                <div class=\"span1\"><h4>C</h4></div>
                                <div class=\"span1\"><h4>D</h4></div>
                                <div class=\"span1\"><h4>E</h4></div>
                                <div class=\"span1\"><h4>F</h4></div>
                                
                            </div>
                            <div class=\"row-fluid\">
                                <div class=\"span2\">
                                    <img alt=\"Imagen\" src=\"";
        // line 111
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(((isset($context["directorio_imagenes_pma"]) ? $context["directorio_imagenes_pma"] : $this->getContext($context, "directorio_imagenes_pma")) . "imagenEjer3Preg.jpg")), "html", null, true);
        echo "\">
                                </div>
                                <div class=\"span2\">
                                </div>
                                <div class=\"span7\">
                                    <img alt=\"Imagen\" src=\"";
        // line 116
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(((isset($context["directorio_imagenes_pma"]) ? $context["directorio_imagenes_pma"] : $this->getContext($context, "directorio_imagenes_pma")) . "imagenEjer3Alter.jpg")), "html", null, true);
        echo "\">
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class=\"row-fluid\">
                        <div class=\"span2\">
                        </div>
                        <div class=\"span9\" STYLE=\"font-family: Arial; font-size: 18px; color: black\">
                            Las figuras C, E y F son IGUALES a la primera figura. Por eso se han rodeado las letras C, E y F, del margen. 
                            Fijese en que se rodean TODAS las letras de las figuras IGUALES a la primera.
                        </div>
                    </div>
                    <br>
                    <div class=\"row-fluid\">
                        <div class=\"span2\">
                        </div>
                        <div class=\"span9\" STYLE=\"font-family: Arial; font-size: 18px; color: black\">
                            En la fila que sigue, fijese bien en las figuras que son IGUALES a la primera. Qué letras tienen? Rodee las
                            mismas letras en el margen . No rodee las letras de las figuras que están hechas al revés de la primera.
                        </div>
                    </div>
                    <div class=\"row-fluid\">
                        <div class=\"span2\">
                        </div>
                        <div class=\"span9\">
                            <div class=\"row-fluid\">
                                <div class=\"span2\"></div>
                                <div class=\"span3\"></div>
                                <div class=\"span1\"><h4>A</h4></div>
                                <div class=\"span1\"><h4>B</h4></div>
                                <div class=\"span1\"><h4>C</h4></div>
                                <div class=\"span1\"><h4>D</h4></div>
                                <div class=\"span1\"><h4>E</h4></div>
                                <div class=\"span1\"><h4>F</h4></div>
                                
                            </div>
                            <div class=\"row-fluid\">
                                <div class=\"span2\">
                                    <img alt=\"Imagen\" src=\"";
        // line 156
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(((isset($context["directorio_imagenes_pma"]) ? $context["directorio_imagenes_pma"] : $this->getContext($context, "directorio_imagenes_pma")) . "imagenEjer4Preg.jpg")), "html", null, true);
        echo "\">
                                </div>
                                <div class=\"span2\">
                                </div>
                                <div class=\"span7\">
                                    <img alt=\"Imagen\" src=\"";
        // line 161
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(((isset($context["directorio_imagenes_pma"]) ? $context["directorio_imagenes_pma"] : $this->getContext($context, "directorio_imagenes_pma")) . "imagenEjer4Alter.jpg")), "html", null, true);
        echo "\">
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class=\"row-fluid\">
                        <div class=\"span2\">
                        </div>
                        <div class=\"span9\" STYLE=\"font-family: Arial; font-size: 18px; color: black\">
                            Lo han hecho bien si ha rodeado las letras A y E.
                        </div>
                    </div>
                    <br>
                    <div class=\"row-fluid\">
                        <div class=\"span2\">
                        </div>
                        <div class=\"span9\" STYLE=\"font-family: Arial; font-size: 18px; color: black\">
                            Haga lo mismo con las filas de abajo. Si quiere cambiar una respuesta, tache la letra equivocada con una aspa (x).
                            Luego rodee la nueva letra, como siempre.
                        </div>
                    </div>
                    <div class=\"row-fluid\">
                        <div class=\"span2\">
                        </div>
                        <div class=\"span9\">
                            <div class=\"row-fluid\">
                                <div class=\"span2\"></div>
                                <div class=\"span3\"></div>
                                <div class=\"span1\"><h4>A</h4></div>
                                <div class=\"span1\"><h4>B</h4></div>
                                <div class=\"span1\"><h4>C</h4></div>
                                <div class=\"span1\"><h4>D</h4></div>
                                <div class=\"span1\"><h4>E</h4></div>
                                <div class=\"span1\"><h4>F</h4></div>
                                
                            </div>
                            <div class=\"row-fluid\">
                                <div class=\"span2\">
                                    <img alt=\"Imagen\" src=\"";
        // line 200
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(((isset($context["directorio_imagenes_pma"]) ? $context["directorio_imagenes_pma"] : $this->getContext($context, "directorio_imagenes_pma")) . "imagenEjer5Preg.jpg")), "html", null, true);
        echo "\">
                                </div>
                                <div class=\"span2\">
                                </div>
                                <div class=\"span7\">
                                    <img alt=\"Imagen\" src=\"";
        // line 205
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(((isset($context["directorio_imagenes_pma"]) ? $context["directorio_imagenes_pma"] : $this->getContext($context, "directorio_imagenes_pma")) . "imagenEjer5Alter.jpg")), "html", null, true);
        echo "\">
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class=\"row-fluid\">
                        <div class=\"span2\">
                        </div>
                        <div class=\"span9\">
                            <div class=\"row-fluid\">
                                <div class=\"span2\"></div>
                                <div class=\"span3\"></div>
                                <div class=\"span1\"><h4>A</h4></div>
                                <div class=\"span1\"><h4>B</h4></div>
                                <div class=\"span1\"><h4>C</h4></div>
                                <div class=\"span1\"><h4>D</h4></div>
                                <div class=\"span1\"><h4>E</h4></div>
                                <div class=\"span1\"><h4>F</h4></div>
                                
                            </div>
                            <div class=\"row-fluid\">
                                <div class=\"span2\">
                                    <img alt=\"Imagen\" src=\"";
        // line 228
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(((isset($context["directorio_imagenes_pma"]) ? $context["directorio_imagenes_pma"] : $this->getContext($context, "directorio_imagenes_pma")) . "imagenEjer6Preg.jpg")), "html", null, true);
        echo "\">
                                </div>
                                <div class=\"span2\">
                                </div>
                                <div class=\"span7\">
                                    <img alt=\"Imagen\" src=\"";
        // line 233
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(((isset($context["directorio_imagenes_pma"]) ? $context["directorio_imagenes_pma"] : $this->getContext($context, "directorio_imagenes_pma")) . "imagenEjer6Alter.jpg")), "html", null, true);
        echo "\">
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class=\"row-fluid\">
                        <div class=\"span2\">
                        </div>
                        <div class=\"span9\" STYLE=\"font-family: Arial; font-size: 18px; color: black\">
                            En la primera fila tenía que rodear las letras A,D y F. En la segunda fila, las soluciones eran C y F.
                        </div>
                    </div>
                    <br>
                    <div class=\"row-fluid\">
                        <div class=\"span2\">
                        </div>
                        <div class=\"span9\" STYLE=\"font-family: Arial; font-size: 18px; color: black\">
                            Recuerde que en cada fila puede haber un número cualquiera de figuras IGUALES a la primera.
                        </div>
                    </div>
                    <br>
                    <div class=\"row-fluid\">
                        <div class=\"span2\">
                        </div>
                        <div class=\"span9\" STYLE=\"font-family: Arial; font-size: 18px; color: black\">
                            Asegúrese de que ha comprendido bien la manera de hacer esta prueba. Cuando el examinador dé la señal,
                            tendrá usted que resolver otras semejantes. Trabaje de prisa, pero procurando no equivocarse.
                            <br>
                            Tendra CINCO MINUTOS para toda esta prueba. Si no termina, no se preocupe; es lo corriente.
                        </div>
                    </div>
                    <br>
                    <div class=\"row-fluid\">
                        <div class=\"span2\">
                        </div>
                        <div class=\"span9\">
                            <ul class=\"record_actions\">
                                <li>
                                    <a href=\"";
        // line 272
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("test_pma_part2_sp_new", array("idpmasp" => $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "pmaSP", array()), "id", array()))), "html", null, true);
        echo "\">
                                        Empezar Prueba Factor E
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
        return "TestPmaSPBundle:PmaPart1SP:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  357 => 272,  315 => 233,  307 => 228,  281 => 205,  273 => 200,  231 => 161,  223 => 156,  180 => 116,  172 => 111,  139 => 81,  131 => 76,  106 => 54,  98 => 49,  68 => 22,  61 => 18,  52 => 12,  45 => 7,  42 => 6,  36 => 4,  30 => 3,);
    }
}
