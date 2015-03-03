<?php

/* SeleccionProcesBundle:ResultSPC:new.html.twig */
class __TwigTemplate_5c496e4ebd31fc362cc02f8bbb345caa77bcace63118a81baa41d79786e4d480 extends Twig_Template
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
        echo "resultspc";
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Pre impresión";
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
                <br>
                <h1>";
        // line 12
        $this->displayBlock("title", $context, $blocks);
        echo "</h1>
                <br>
                <br>
                <div class=\"row-fluid\">
                    
                    ";
        // line 17
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('routing')->getPath("sp_candidato_result_create", array("id_spc" => $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "selectionProcessCandidate", array()), "id", array())))));
        echo "  
                        ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
                        
                        <fieldset>
                            <div class=\"row-fluid\">
                                <table class=\"record_properties\">
                                    <tbody>
                                        <tr> 
                                            <td width=\"40px\" ></td>
                                            <td colspan=2 align=\"right\">
                                                <div class=\"span11\">
                                                    <h4>
                                                        INFORME PSICOLABORAL
                                                    </h4>
                                                </div>
                                                <br>
                                                <div class=\"span9\">
                                                    <h4>
                                                        CONFIDENCIAL 
                                                    </h4>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr> 
                                            <td width=\"40px\" ></td>
                                            <td colspan=2 align=\"right\">
                                                <div class=\"span11\">
                                                    <h5>
                                                        ";
        // line 45
        if ((isset($context["validarDatosPersonales"]) ? $context["validarDatosPersonales"] : $this->getContext($context, "validarDatosPersonales"))) {
            // line 46
            echo "                                                            ( ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entityRegisterDefinitionRol"]) ? $context["entityRegisterDefinitionRol"] : $this->getContext($context, "entityRegisterDefinitionRol")), "rol", array()), "name", array()), "html", null, true);
            echo " )
                                                        ";
        } else {
            // line 48
            echo "                                                            No se registró perfil de cargo.
                                                        ";
        }
        // line 50
        echo "                                                    </h5>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr> 
                                            <td width=\"40px\" ></td>
                                            <th  colspan=2 height=\"30px\"></th>
                                        </tr>
                                        <tr> 
                                            <td width=\"40px\" ></td>
                                            <td colspan=2 align=\"right\">
                                                <div class=\"span11\">
                                                    <h4>
                                                        DATOS PERSONALES
                                                    </h4>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td width=\"40px\" ></td>
                                            <td colspan=2 >
                                                <div class=\"span11\">
                                                    ";
        // line 72
        if ((isset($context["validarDatosPersonales"]) ? $context["validarDatosPersonales"] : $this->getContext($context, "validarDatosPersonales"))) {
            // line 73
            echo "                                                        <table class=\"record_properties\" border=\"1\">
                                                            <tr>
                                                                <td align=\"right\" width=\"200px\">
                                                                    <div class=\"span11\" align=\"right\">
                                                                        <strong>Apellidos y Nombres </strong>
                                                                    </div>
                                                                </td>
                                                                <td width=\"350px\">
                                                                    <div class=\"span1\"></div>
                                                                    <div class=\"span10\">
                                                                        ";
            // line 83
            echo twig_escape_filter($this->env, (isset($context["DGnombreApellido"]) ? $context["DGnombreApellido"] : $this->getContext($context, "DGnombreApellido")), "html", null, true);
            echo "
                                                                    </div>
                                                                </td>
                                                                <td align=\"right\" width=\"200px\">
                                                                    <div class=\"span11\" align=\"right\">
                                                                        <strong>DNI </strong>
                                                                    </div>
                                                                </td>
                                                                <td width=\"350px\">
                                                                    <div class=\"span1\"></div>
                                                                    <div class=\"span10\">
                                                                        ";
            // line 94
            echo twig_escape_filter($this->env, (isset($context["DGdni"]) ? $context["DGdni"] : $this->getContext($context, "DGdni")), "html", null, true);
            echo "
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td align=\"right\" >
                                                                    <div class=\"span11\" align=\"right\">
                                                                        <strong>Edad </strong>
                                                                    </div>
                                                                </td>
                                                                <td >
                                                                    <div class=\"span1\"></div>
                                                                    <div class=\"span10\">
                                                                        ";
            // line 107
            if (((isset($context["DGFecNac"]) ? $context["DGFecNac"] : $this->getContext($context, "DGFecNac")) != "")) {
                // line 108
                echo "                                                                            ";
                $context["dateList"] = twig_split_filter($this->env, (isset($context["DGFecNac"]) ? $context["DGFecNac"] : $this->getContext($context, "DGFecNac")), "/");
                // line 109
                echo "                                                                            ";
                $context["cDGFecNac"] = (((($this->getAttribute((isset($context["dateList"]) ? $context["dateList"] : $this->getContext($context, "dateList")), 1, array(), "array") . "/") . $this->getAttribute((isset($context["dateList"]) ? $context["dateList"] : $this->getContext($context, "dateList")), 0, array(), "array")) . "/") . $this->getAttribute((isset($context["dateList"]) ? $context["dateList"] : $this->getContext($context, "dateList")), 2, array(), "array"));
                // line 110
                echo "                                                                            ";
                $context["dFecNac"] = twig_date_converter($this->env, (isset($context["cDGFecNac"]) ? $context["cDGFecNac"] : $this->getContext($context, "cDGFecNac")));
                // line 111
                echo "                                                                            <!--
                                                                            ";
                // line 112
                echo twig_escape_filter($this->env, (isset($context["DGFecNac"]) ? $context["DGFecNac"] : $this->getContext($context, "DGFecNac")), "html", null, true);
                echo "
                                                                            ";
                // line 113
                if ((twig_date_converter($this->env, (isset($context["dFecNac"]) ? $context["dFecNac"] : $this->getContext($context, "dFecNac"))) < twig_date_converter($this->env, "now - 18 years"))) {
                    // line 114
                    echo "                                                                                mayor
                                                                            ";
                }
                // line 116
                echo "                                                                            ";
                echo twig_escape_filter($this->env, $this->env->getExtension('time_ago_extension')->timeAgoInWordsFilter((isset($context["dFecNac"]) ? $context["dFecNac"] : $this->getContext($context, "dFecNac")), false, false), "html", null, true);
                echo "
                                                                            --
                                                                            -->
                                                                            ";
                // line 119
                if (($this->env->getExtension('extension_jaxxes')->ageCalculate((isset($context["dFecNac"]) ? $context["dFecNac"] : $this->getContext($context, "dFecNac"))) <= 0)) {
                    // line 120
                    echo "                                                                                No se ingresó correctamente la fecha de nacimiento.
                                                                            ";
                } else {
                    // line 122
                    echo "                                                                                ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('extension_jaxxes')->ageCalculate((isset($context["dFecNac"]) ? $context["dFecNac"] : $this->getContext($context, "dFecNac"))), "html", null, true);
                    echo " años
                                                                            ";
                }
                // line 124
                echo "                                                                        ";
            }
            // line 125
            echo "                                                                    </div>
                                                                </td>
                                                                <td align=\"right\" >
                                                                    <div class=\"span11\" align=\"right\">
                                                                        <strong>Estado Civil </strong>
                                                                    </div>
                                                                </td>
                                                                <td >
                                                                    <div class=\"span1\"></div>
                                                                    <div class=\"span10\">
                                                                        ";
            // line 135
            echo twig_escape_filter($this->env, (isset($context["DGEstCiv"]) ? $context["DGEstCiv"] : $this->getContext($context, "DGEstCiv")), "html", null, true);
            echo "
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            
                                                            ";
            // line 140
            if ((isset($context["validarED_Mae"]) ? $context["validarED_Mae"] : $this->getContext($context, "validarED_Mae"))) {
                // line 141
                echo "                                                            
                                                                <tr>
                                                                    <td align=\"right\" >
                                                                        <div class=\"span11\" align=\"right\">
                                                                            <strong>Grado de Instrucción </strong>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class=\"span1\"></div>
                                                                        <div class=\"span10\">
                                                                            Maestria
                                                                        </div>
                                                                    </td>
                                                                    <td align=\"right\" >
                                                                        <div class=\"span11\" align=\"right\">
                                                                            <strong>Centro de Estudios </strong>
                                                                        </div>
                                                                    </td>
                                                                    <td >
                                                                        <div class=\"span1\"></div>
                                                                        <div class=\"span10\">
                                                                            ";
                // line 162
                echo twig_escape_filter($this->env, (isset($context["ED_Mae_CentroEstudio"]) ? $context["ED_Mae_CentroEstudio"] : $this->getContext($context, "ED_Mae_CentroEstudio")), "html", null, true);
                echo "
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td align=\"right\" >
                                                                        <div class=\"span11\" align=\"right\">
                                                                            <strong>Especialidad </strong>
                                                                        </div>
                                                                    </td>
                                                                    <td colspan=3>
                                                                        <div class=\"span1\"></div>
                                                                        <div class=\"span10\">
                                                                            ";
                // line 175
                echo twig_escape_filter($this->env, (isset($context["ED_Mae_Especialidad"]) ? $context["ED_Mae_Especialidad"] : $this->getContext($context, "ED_Mae_Especialidad")), "html", null, true);
                echo "
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                            ";
            }
            // line 180
            echo "                                                            
                                                            ";
            // line 181
            if ((isset($context["validarED_Mae2"]) ? $context["validarED_Mae2"] : $this->getContext($context, "validarED_Mae2"))) {
                // line 182
                echo "                                                            
                                                                <tr>
                                                                    <td align=\"right\" >
                                                                        <div class=\"span11\" align=\"right\">
                                                                            <strong>Grado de Instrucción </strong>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class=\"span1\"></div>
                                                                        <div class=\"span10\">
                                                                            Maestria
                                                                        </div>
                                                                    </td>
                                                                    <td align=\"right\" >
                                                                        <div class=\"span11\" align=\"right\">
                                                                            <strong>Centro de Estudios </strong>
                                                                        </div>
                                                                    </td>
                                                                    <td >
                                                                        <div class=\"span1\"></div>
                                                                        <div class=\"span10\">
                                                                            ";
                // line 203
                echo twig_escape_filter($this->env, (isset($context["ED_Mae_CentroEstudio2"]) ? $context["ED_Mae_CentroEstudio2"] : $this->getContext($context, "ED_Mae_CentroEstudio2")), "html", null, true);
                echo "
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td align=\"right\" >
                                                                        <div class=\"span11\" align=\"right\">
                                                                            <strong>Especialidad </strong>
                                                                        </div>
                                                                    </td>
                                                                    <td colspan=3>
                                                                        <div class=\"span1\"></div>
                                                                        <div class=\"span10\">
                                                                            ";
                // line 216
                echo twig_escape_filter($this->env, (isset($context["ED_Mae_Especialidad2"]) ? $context["ED_Mae_Especialidad2"] : $this->getContext($context, "ED_Mae_Especialidad2")), "html", null, true);
                echo "
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                            ";
            }
            // line 221
            echo "                                                            
                                                            ";
            // line 222
            if ((isset($context["validarED_Unv"]) ? $context["validarED_Unv"] : $this->getContext($context, "validarED_Unv"))) {
                // line 223
                echo "                                                            
                                                                <tr>
                                                                    <td align=\"right\" >
                                                                        <div class=\"span11\" align=\"right\">
                                                                            <strong>Grado de Instrucción </strong>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class=\"span1\"></div>
                                                                        <div class=\"span10\">
                                                                            Universidad
                                                                        </div>
                                                                    </td>
                                                                    <td align=\"right\" >
                                                                        <div class=\"span11\" align=\"right\">
                                                                            <strong>Centro de Estudios </strong>
                                                                        </div>
                                                                    </td>
                                                                    <td >
                                                                        <div class=\"span1\"></div>
                                                                        <div class=\"span10\">
                                                                            ";
                // line 244
                echo twig_escape_filter($this->env, (isset($context["ED_Unv_CentroEstudio"]) ? $context["ED_Unv_CentroEstudio"] : $this->getContext($context, "ED_Unv_CentroEstudio")), "html", null, true);
                echo "
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td align=\"right\" >
                                                                        <div class=\"span11\" align=\"right\">
                                                                            <strong>Especialidad </strong>
                                                                        </div>
                                                                    </td>
                                                                    <td colspan=3>
                                                                        <div class=\"span1\"></div>
                                                                        <div class=\"span10\">
                                                                            ";
                // line 257
                echo twig_escape_filter($this->env, (isset($context["ED_Unv_Especialidad"]) ? $context["ED_Unv_Especialidad"] : $this->getContext($context, "ED_Unv_Especialidad")), "html", null, true);
                echo "
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                            ";
            }
            // line 262
            echo "                                                            
                                                            ";
            // line 263
            if ((isset($context["validarED_Unv2"]) ? $context["validarED_Unv2"] : $this->getContext($context, "validarED_Unv2"))) {
                // line 264
                echo "                                                            
                                                                <tr>
                                                                    <td align=\"right\" >
                                                                        <div class=\"span11\" align=\"right\">
                                                                            <strong>Grado de Instrucción </strong>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class=\"span1\"></div>
                                                                        <div class=\"span10\">
                                                                            Universidad
                                                                        </div>
                                                                    </td>
                                                                    <td align=\"right\" >
                                                                        <div class=\"span11\" align=\"right\">
                                                                            <strong>Centro de Estudios </strong>
                                                                        </div>
                                                                    </td>
                                                                    <td >
                                                                        <div class=\"span1\"></div>
                                                                        <div class=\"span10\">
                                                                            ";
                // line 285
                echo twig_escape_filter($this->env, (isset($context["ED_Unv_CentroEstudio2"]) ? $context["ED_Unv_CentroEstudio2"] : $this->getContext($context, "ED_Unv_CentroEstudio2")), "html", null, true);
                echo "
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td align=\"right\" >
                                                                        <div class=\"span11\" align=\"right\">
                                                                            <strong>Especialidad </strong>
                                                                        </div>
                                                                    </td>
                                                                    <td colspan=3>
                                                                        <div class=\"span1\"></div>
                                                                        <div class=\"span10\">
                                                                            ";
                // line 298
                echo twig_escape_filter($this->env, (isset($context["ED_Unv_Especialidad2"]) ? $context["ED_Unv_Especialidad2"] : $this->getContext($context, "ED_Unv_Especialidad2")), "html", null, true);
                echo "
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                            ";
            }
            // line 303
            echo "                                                            
                                                            ";
            // line 304
            if ((isset($context["validarED_Tec"]) ? $context["validarED_Tec"] : $this->getContext($context, "validarED_Tec"))) {
                // line 305
                echo "                                                            
                                                                <tr>
                                                                    <td align=\"right\" >
                                                                        <div class=\"span11\" align=\"right\">
                                                                            <strong>Grado de Instrucción </strong>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class=\"span1\"></div>
                                                                        <div class=\"span10\">
                                                                            Técnico
                                                                        </div>
                                                                    </td>
                                                                    <td align=\"right\" >
                                                                        <div class=\"span11\" align=\"right\">
                                                                            <strong>Centro de Estudios </strong>
                                                                        </div>
                                                                    </td>
                                                                    <td >
                                                                        <div class=\"span1\"></div>
                                                                        <div class=\"span10\">
                                                                            ";
                // line 326
                echo twig_escape_filter($this->env, (isset($context["ED_Tec_CentroEstudio"]) ? $context["ED_Tec_CentroEstudio"] : $this->getContext($context, "ED_Tec_CentroEstudio")), "html", null, true);
                echo "
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td align=\"right\" >
                                                                        <div class=\"span11\" align=\"right\">
                                                                            <strong>Especialidad </strong>
                                                                        </div>
                                                                    </td>
                                                                    <td colspan=3>
                                                                        <div class=\"span1\"></div>
                                                                        <div class=\"span10\">
                                                                            ";
                // line 339
                echo twig_escape_filter($this->env, (isset($context["ED_Tec_Especialidad"]) ? $context["ED_Tec_Especialidad"] : $this->getContext($context, "ED_Tec_Especialidad")), "html", null, true);
                echo "
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                            ";
            }
            // line 344
            echo "                                                            
                                                            ";
            // line 345
            if ((isset($context["validarED_Otr"]) ? $context["validarED_Otr"] : $this->getContext($context, "validarED_Otr"))) {
                // line 346
                echo "                                                            
                                                                <tr>
                                                                    <td align=\"right\" >
                                                                        <div class=\"span11\" align=\"right\">
                                                                            <strong>Grado de Instrucción </strong>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class=\"span1\"></div>
                                                                        <div class=\"span10\">
                                                                            Otros Estudios
                                                                        </div>
                                                                    </td>
                                                                    <td align=\"right\" >
                                                                        <div class=\"span11\" align=\"right\">
                                                                            <strong>Centro de Estudios </strong>
                                                                        </div>
                                                                    </td>
                                                                    <td >
                                                                        <div class=\"span1\"></div>
                                                                        <div class=\"span10\">
                                                                            ";
                // line 367
                echo twig_escape_filter($this->env, (isset($context["ED_Otr_CentroEstudio"]) ? $context["ED_Otr_CentroEstudio"] : $this->getContext($context, "ED_Otr_CentroEstudio")), "html", null, true);
                echo "
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td align=\"right\" >
                                                                        <div class=\"span11\" align=\"right\">
                                                                            <strong>Especialidad </strong>
                                                                        </div>
                                                                    </td>
                                                                    <td colspan=3>
                                                                        <div class=\"span1\"></div>
                                                                        <div class=\"span10\">
                                                                            ";
                // line 380
                echo twig_escape_filter($this->env, (isset($context["ED_Otr_Especialidad"]) ? $context["ED_Otr_Especialidad"] : $this->getContext($context, "ED_Otr_Especialidad")), "html", null, true);
                echo "
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                            ";
            }
            // line 385
            echo "                                                            
                                                            ";
            // line 386
            if ((isset($context["validarED_Esc"]) ? $context["validarED_Esc"] : $this->getContext($context, "validarED_Esc"))) {
                // line 387
                echo "                                                            
                                                                <tr>
                                                                    <td align=\"right\" >
                                                                        <div class=\"span11\" align=\"right\">
                                                                            <strong>Grado de Instrucción </strong>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class=\"span1\"></div>
                                                                        <div class=\"span10\">
                                                                            Escolar
                                                                        </div>
                                                                    </td>
                                                                    <td align=\"right\" >
                                                                        <div class=\"span11\" align=\"right\">
                                                                            <strong>Centro de Estudios </strong>
                                                                        </div>
                                                                    </td>
                                                                    <td >
                                                                        <div class=\"span1\"></div>
                                                                        <div class=\"span10\">
                                                                            ";
                // line 408
                echo twig_escape_filter($this->env, (isset($context["ED_Esc_CentroEstudio"]) ? $context["ED_Esc_CentroEstudio"] : $this->getContext($context, "ED_Esc_CentroEstudio")), "html", null, true);
                echo "
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td align=\"right\" >
                                                                        <div class=\"span11\" align=\"right\">
                                                                            <strong>Especialidad </strong>
                                                                        </div>
                                                                    </td>
                                                                    <td colspan=3>
                                                                        <div class=\"span1\"></div>
                                                                        <div class=\"span10\">
                                                                            ";
                // line 421
                echo twig_escape_filter($this->env, (isset($context["ED_Esc_Especialidad"]) ? $context["ED_Esc_Especialidad"] : $this->getContext($context, "ED_Esc_Especialidad")), "html", null, true);
                echo "
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                            ";
            }
            // line 426
            echo "                                                            
                                                        </table>
                                                    ";
        } else {
            // line 429
            echo "                                                        <h5>
                                                            ";
            // line 430
            if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "selectionProcessCandidate", array()), "candidate", array()), "gender", array()) == "m")) {
                // line 431
                echo "                                                                El candidato 
                                                            ";
            } else {
                // line 433
                echo "                                                                La candidata 
                                                            ";
            }
            // line 435
            echo "                                                            ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "selectionProcessCandidate", array()), "candidate", array()), "firstName", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "selectionProcessCandidate", array()), "candidate", array()), "lastName", array()), "html", null, true);
            echo " no registró su perfil de candidato.
                                                        </h5>
                                                    ";
        }
        // line 438
        echo "                                                </div>
                                            </td>
                                        </tr>
                                        <tr> 
                                            <td width=\"40px\" ></td>
                                            <th  colspan=2 height=\"30px\"></th>
                                        </tr>
                                        <tr> 
                                            <td width=\"40px\" ></td>
                                            <td colspan=2 align=\"right\">
                                                <div class=\"span11\">
                                                    <h4>
                                                        EXPERIENCIA LABORAL
                                                    </h4>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td width=\"40px\" ></td>
                                            <td colspan=2 >
                                                <div class=\"span11\">
                                                    
                                                    <table class=\"record_properties\" border=\"1\">
                                                        ";
        // line 461
        if ((isset($context["validarIL_UlTra"]) ? $context["validarIL_UlTra"] : $this->getContext($context, "validarIL_UlTra"))) {
            // line 462
            echo "                                                            <tr>
                                                                <td align=\"left\" width=\"400px\">
                                                                    <div class=\"span1\"></div>
                                                                    <strong>Nombre de la Empresa </strong>
                                                                </td>
                                                                <td width=\"700px\">
                                                                    <div class=\"span1\"></div>
                                                                    <div class=\"span11\">
                                                                        ";
            // line 470
            echo twig_escape_filter($this->env, (isset($context["IL_UlTra_Nombre"]) ? $context["IL_UlTra_Nombre"] : $this->getContext($context, "IL_UlTra_Nombre")), "html", null, true);
            echo "
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td align=\"left\" width=\"400px\">
                                                                    <div class=\"span1\"></div>
                                                                    <strong>Cargo </strong>
                                                                </td>
                                                                <td width=\"700px\">
                                                                    <div class=\"span1\"></div>
                                                                    <div class=\"span11\">
                                                                        ";
            // line 482
            echo twig_escape_filter($this->env, (isset($context["IL_UlTra_CarDes"]) ? $context["IL_UlTra_CarDes"] : $this->getContext($context, "IL_UlTra_CarDes")), "html", null, true);
            echo "
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td align=\"left\" width=\"400px\">
                                                                    <div class=\"span1\"></div>
                                                                    <strong>Motivo de Cese </strong>
                                                                </td>
                                                                <td width=\"700px\">
                                                                    <div class=\"span1\"></div>
                                                                    <div class=\"span9\">
                                                                        ";
            // line 494
            echo twig_escape_filter($this->env, (isset($context["IL_UlTra_Motivo"]) ? $context["IL_UlTra_Motivo"] : $this->getContext($context, "IL_UlTra_Motivo")), "html", null, true);
            echo "
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                        ";
        }
        // line 499
        echo "                                                        
                                                        ";
        // line 500
        if ((isset($context["validarIL_UlTra2"]) ? $context["validarIL_UlTra2"] : $this->getContext($context, "validarIL_UlTra2"))) {
            // line 501
            echo "                                                            <tr>
                                                                <td align=\"left\" width=\"400px\">
                                                                    <div class=\"span1\"></div>
                                                                    <strong>Nombre de la Empresa </strong>
                                                                </td>
                                                                <td width=\"700px\">
                                                                    <div class=\"span1\"></div>
                                                                    <div class=\"span11\">
                                                                        ";
            // line 509
            echo twig_escape_filter($this->env, (isset($context["IL_UlTra2_Nombre"]) ? $context["IL_UlTra2_Nombre"] : $this->getContext($context, "IL_UlTra2_Nombre")), "html", null, true);
            echo "
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td align=\"left\" width=\"400px\">
                                                                    <div class=\"span1\"></div>
                                                                    <strong>Cargo </strong>
                                                                </td>
                                                                <td width=\"700px\">
                                                                    <div class=\"span1\"></div>
                                                                    <div class=\"span11\">
                                                                        ";
            // line 521
            echo twig_escape_filter($this->env, (isset($context["IL_UlTra2_CarDes"]) ? $context["IL_UlTra2_CarDes"] : $this->getContext($context, "IL_UlTra2_CarDes")), "html", null, true);
            echo "
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td align=\"left\" width=\"400px\">
                                                                    <div class=\"span1\"></div>
                                                                    <strong>Motivo de Cese </strong>
                                                                </td>
                                                                <td width=\"700px\">
                                                                    <div class=\"span1\"></div>
                                                                    <div class=\"span11\">
                                                                        ";
            // line 533
            echo twig_escape_filter($this->env, (isset($context["IL_UlTra2_Motivo"]) ? $context["IL_UlTra2_Motivo"] : $this->getContext($context, "IL_UlTra2_Motivo")), "html", null, true);
            echo "
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                        ";
        }
        // line 538
        echo "                                                        
                                                        ";
        // line 539
        if ((isset($context["validarIL_UlTra3"]) ? $context["validarIL_UlTra3"] : $this->getContext($context, "validarIL_UlTra3"))) {
            // line 540
            echo "                                                            <tr>
                                                                <td align=\"left\" width=\"400px\">
                                                                    <div class=\"span1\"></div>
                                                                    <strong>Nombre de la Empresa </strong>
                                                                </td>
                                                                <td width=\"700px\">
                                                                    <div class=\"span1\"></div>
                                                                    <div class=\"span11\">
                                                                        ";
            // line 548
            echo twig_escape_filter($this->env, (isset($context["IL_UlTra3_Nombre"]) ? $context["IL_UlTra3_Nombre"] : $this->getContext($context, "IL_UlTra3_Nombre")), "html", null, true);
            echo "
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td align=\"left\" width=\"400px\">
                                                                    <div class=\"span1\"></div>
                                                                    <strong>Cargo </strong>
                                                                </td>
                                                                <td width=\"700px\">
                                                                    <div class=\"span1\"></div>
                                                                    <div class=\"span11\">
                                                                        ";
            // line 560
            echo twig_escape_filter($this->env, (isset($context["IL_UlTra3_CarDes"]) ? $context["IL_UlTra3_CarDes"] : $this->getContext($context, "IL_UlTra3_CarDes")), "html", null, true);
            echo "
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td align=\"left\" width=\"400px\">
                                                                    <div class=\"span1\"></div>
                                                                    <strong>Motivo de Cese </strong>
                                                                </td>
                                                                <td width=\"700px\">
                                                                    <div class=\"span1\"></div>
                                                                    <div class=\"span11\">
                                                                        ";
            // line 572
            echo twig_escape_filter($this->env, (isset($context["IL_UlTra3_Motivo"]) ? $context["IL_UlTra3_Motivo"] : $this->getContext($context, "IL_UlTra3_Motivo")), "html", null, true);
            echo "
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                        ";
        }
        // line 577
        echo "                                                        
                                                    </table>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr> 
                                            <td width=\"40px\" ></td>
                                            <th  colspan=2 height=\"30px\"></th>
                                        </tr>
                                        <tr> 
                                            <td width=\"40px\" ></td>
                                            <td colspan=2 align=\"right\">
                                                <div class=\"span11\">
                                                    <h4>
                                                        EVALUACIÓN PSICOLABORAL CONDUCTUAL
                                                    </h4>
                                                </div>
                                            </td>
                                        </tr>
                                        
                                        <tr> 
                                            <td width=\"40px\" ></td>
                                            <th  colspan=2 height=\"10px\"></th>
                                        </tr>
                                        
                                        ";
        // line 602
        if ((isset($context["validarGatbSP"]) ? $context["validarGatbSP"] : $this->getContext($context, "validarGatbSP"))) {
            // line 603
            echo "                                            <tr>
                                                <td width=\"40px\" ></td>
                                                <td colspan=2 >
                                                    <div class=\"span11\">
                                                        <legend>Aptitudes</legend>
                                                        <table class=\"record_properties\" border=\"1\">
                                                            <tr>
                                                                <td align=\"left\" bgcolor=\"#6699CC\" width=\"1100px\">
                                                                    <strong>1.- General</strong>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div class=\"span1\">
                                                                    </div>
                                                                    <div class=\"span11\">
                                                                        ";
            // line 619
            $context["general"] = ((($this->getAttribute((isset($context["entityGatbSP"]) ? $context["entityGatbSP"] : $this->getContext($context, "entityGatbSP")), "valorG3", array()) + $this->getAttribute((isset($context["entityGatbSP"]) ? $context["entityGatbSP"] : $this->getContext($context, "entityGatbSP")), "valorG4", array())) + $this->getAttribute((isset($context["entityGatbSP"]) ? $context["entityGatbSP"] : $this->getContext($context, "entityGatbSP")), "valorG5", array())) + 6);
            // line 620
            echo "                                                                        ";
            if ((((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) >= 0) && ((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) < 81))) {
                // line 621
                echo "                                                                            Inferior ( ";
                echo twig_escape_filter($this->env, (isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")), "html", null, true);
                echo " puntos)
                                                                        ";
            } elseif ((((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) > 80) && ((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) < 95))) {
                // line 623
                echo "                                                                            Normal Inferior ( ";
                echo twig_escape_filter($this->env, (isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")), "html", null, true);
                echo " puntos)
                                                                        ";
            } elseif ((((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) > 94) && ((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) < 106))) {
                // line 625
                echo "                                                                            Normal ( ";
                echo twig_escape_filter($this->env, (isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")), "html", null, true);
                echo " puntos)
                                                                        ";
            } elseif ((((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) > 105) && ((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) < 121))) {
                // line 627
                echo "                                                                            Normal Superior ( ";
                echo twig_escape_filter($this->env, (isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")), "html", null, true);
                echo " puntos)
                                                                        ";
            } elseif ((((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) > 120) && ((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) < 135))) {
                // line 629
                echo "                                                                            Superior ( ";
                echo twig_escape_filter($this->env, (isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")), "html", null, true);
                echo " puntos)
                                                                        ";
            } else {
                // line 631
                echo "                                                                            Muy Superior ( ";
                echo twig_escape_filter($this->env, (isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")), "html", null, true);
                echo " puntos)
                                                                        ";
            }
            // line 633
            echo "                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td align=\"left\" bgcolor=\"#6699CC\">
                                                                    <strong>2.- Verbal</strong>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div class=\"span1\">
                                                                    </div>
                                                                    <div class=\"span8\">
                                                                        ";
            // line 646
            $context["general"] = ($this->getAttribute((isset($context["entityGatbSP"]) ? $context["entityGatbSP"] : $this->getContext($context, "entityGatbSP")), "valorV", array()) + 6);
            // line 647
            echo "                                                                        ";
            if ((((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) >= 0) && ((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) < 81))) {
                // line 648
                echo "                                                                            Inferior ( ";
                echo twig_escape_filter($this->env, (isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")), "html", null, true);
                echo " puntos)
                                                                        ";
            } elseif ((((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) > 80) && ((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) < 95))) {
                // line 650
                echo "                                                                            Normal Inferior ( ";
                echo twig_escape_filter($this->env, (isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")), "html", null, true);
                echo " puntos)
                                                                        ";
            } elseif ((((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) > 94) && ((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) < 106))) {
                // line 652
                echo "                                                                            Normal ( ";
                echo twig_escape_filter($this->env, (isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")), "html", null, true);
                echo " puntos)
                                                                        ";
            } elseif ((((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) > 105) && ((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) < 121))) {
                // line 654
                echo "                                                                            Normal Superior ( ";
                echo twig_escape_filter($this->env, (isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")), "html", null, true);
                echo " puntos)
                                                                        ";
            } elseif ((((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) > 120) && ((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) < 135))) {
                // line 656
                echo "                                                                            Superior ( ";
                echo twig_escape_filter($this->env, (isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")), "html", null, true);
                echo " puntos)
                                                                        ";
            } else {
                // line 658
                echo "                                                                            Muy Superior ( ";
                echo twig_escape_filter($this->env, (isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")), "html", null, true);
                echo " puntos)
                                                                        ";
            }
            // line 660
            echo "                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td align=\"left\" bgcolor=\"#6699CC\">
                                                                    <strong>3.- Numérica</strong>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div class=\"span1\">
                                                                    </div>
                                                                    <div class=\"span8\">
                                                                        ";
            // line 673
            $context["general"] = (($this->getAttribute((isset($context["entityGatbSP"]) ? $context["entityGatbSP"] : $this->getContext($context, "entityGatbSP")), "valorN2", array()) + $this->getAttribute((isset($context["entityGatbSP"]) ? $context["entityGatbSP"] : $this->getContext($context, "entityGatbSP")), "valorN5", array())) + 6);
            // line 674
            echo "                                                                        ";
            if ((((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) >= 0) && ((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) < 81))) {
                // line 675
                echo "                                                                            Inferior ( ";
                echo twig_escape_filter($this->env, (isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")), "html", null, true);
                echo " puntos)
                                                                        ";
            } elseif ((((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) > 80) && ((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) < 95))) {
                // line 677
                echo "                                                                            Normal Inferior ( ";
                echo twig_escape_filter($this->env, (isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")), "html", null, true);
                echo " puntos)
                                                                        ";
            } elseif ((((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) > 94) && ((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) < 106))) {
                // line 679
                echo "                                                                            Normal ( ";
                echo twig_escape_filter($this->env, (isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")), "html", null, true);
                echo " puntos)
                                                                        ";
            } elseif ((((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) > 105) && ((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) < 121))) {
                // line 681
                echo "                                                                            Normal Superior ( ";
                echo twig_escape_filter($this->env, (isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")), "html", null, true);
                echo " puntos)
                                                                        ";
            } elseif ((((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) > 120) && ((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) < 135))) {
                // line 683
                echo "                                                                            Superior ( ";
                echo twig_escape_filter($this->env, (isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")), "html", null, true);
                echo " puntos)
                                                                        ";
            } else {
                // line 685
                echo "                                                                            Muy Superior ( ";
                echo twig_escape_filter($this->env, (isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")), "html", null, true);
                echo " puntos)
                                                                        ";
            }
            // line 687
            echo "                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td align=\"left\" bgcolor=\"#6699CC\">
                                                                    <strong>4.- Espacial</strong>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div class=\"span1\">
                                                                    </div>
                                                                    <div class=\"span8\">
                                                                        ";
            // line 700
            $context["general"] = ($this->getAttribute((isset($context["entityGatbSP"]) ? $context["entityGatbSP"] : $this->getContext($context, "entityGatbSP")), "valorS", array()) + 8);
            // line 701
            echo "                                                                        ";
            if ((((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) >= 0) && ((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) < 81))) {
                // line 702
                echo "                                                                            Inferior ( ";
                echo twig_escape_filter($this->env, (isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")), "html", null, true);
                echo " puntos)
                                                                        ";
            } elseif ((((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) > 80) && ((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) < 95))) {
                // line 704
                echo "                                                                            Normal Inferior ( ";
                echo twig_escape_filter($this->env, (isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")), "html", null, true);
                echo " puntos)
                                                                        ";
            } elseif ((((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) > 94) && ((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) < 106))) {
                // line 706
                echo "                                                                            Normal ( ";
                echo twig_escape_filter($this->env, (isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")), "html", null, true);
                echo " puntos)
                                                                        ";
            } elseif ((((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) > 105) && ((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) < 121))) {
                // line 708
                echo "                                                                            Normal Superior ( ";
                echo twig_escape_filter($this->env, (isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")), "html", null, true);
                echo " puntos)
                                                                        ";
            } elseif ((((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) > 120) && ((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) < 135))) {
                // line 710
                echo "                                                                            Superior ( ";
                echo twig_escape_filter($this->env, (isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")), "html", null, true);
                echo " puntos)
                                                                        ";
            } else {
                // line 712
                echo "                                                                            Muy Superior ( ";
                echo twig_escape_filter($this->env, (isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")), "html", null, true);
                echo " puntos)
                                                                        ";
            }
            // line 714
            echo "                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td align=\"left\" bgcolor=\"#6699CC\">
                                                                    <strong>5.- De Oficina</strong>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div class=\"span1\">
                                                                    </div>
                                                                    <div class=\"span8\">
                                                                        ";
            // line 727
            $context["general"] = ($this->getAttribute((isset($context["entityGatbSP"]) ? $context["entityGatbSP"] : $this->getContext($context, "entityGatbSP")), "valorQ", array()) + 9);
            // line 728
            echo "                                                                        ";
            if ((((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) >= 0) && ((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) < 81))) {
                // line 729
                echo "                                                                            Inferior ( ";
                echo twig_escape_filter($this->env, (isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")), "html", null, true);
                echo " puntos)
                                                                        ";
            } elseif ((((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) > 80) && ((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) < 95))) {
                // line 731
                echo "                                                                            Normal Inferior ( ";
                echo twig_escape_filter($this->env, (isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")), "html", null, true);
                echo " puntos)
                                                                        ";
            } elseif ((((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) > 94) && ((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) < 106))) {
                // line 733
                echo "                                                                            Normal ( ";
                echo twig_escape_filter($this->env, (isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")), "html", null, true);
                echo " puntos)
                                                                        ";
            } elseif ((((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) > 105) && ((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) < 121))) {
                // line 735
                echo "                                                                            Normal Superior ( ";
                echo twig_escape_filter($this->env, (isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")), "html", null, true);
                echo " puntos)
                                                                        ";
            } elseif ((((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) > 120) && ((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) < 135))) {
                // line 737
                echo "                                                                            Superior ( ";
                echo twig_escape_filter($this->env, (isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")), "html", null, true);
                echo " puntos)
                                                                        ";
            } else {
                // line 739
                echo "                                                                            Muy Superior ( ";
                echo twig_escape_filter($this->env, (isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")), "html", null, true);
                echo " puntos)
                                                                        ";
            }
            // line 741
            echo "                                                                    </div>
                                                                </td>
                                                            </tr>
                                                        </table>
                                                        
                                                    </div>
                                                </td>
                                            </tr>
                                            <!--
                                            <tr> 
                                                <td width=\"40px\" ></td>
                                                <td colspan=2 >
                                                    <h5>
                                                        Comentario adicional
                                                    </h5>
                                                </td>
                                            </tr>
                                            <tr> 
                                                <td width=\"40px\" ></td>
                                                <td colspan=2 >";
            // line 760
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "commentGTB", array()), 'widget');
            echo "</td>
                                            </tr>
                                            -->
                                        ";
        }
        // line 764
        echo "                                        
                                        <tr> 
                                            <td width=\"40px\" ></td>
                                            <th colspan=2 height=\"20px\"></th>
                                        </tr>
                                        
                                        
                                        
                                        ";
        // line 772
        if ((isset($context["validarPmaSP"]) ? $context["validarPmaSP"] : $this->getContext($context, "validarPmaSP"))) {
            // line 773
            echo "                                            <tr>
                                                <td width=\"40px\" ></td>
                                                <td colspan=2 >
                                                    <div class=\"span11\">
                                                        <legend>Características de lenguaje y comunicación, se carga los datos del Pma</legend>
                                                        <table class=\"record_properties\" border=\"1\">
                                                            <tr>
                                                                <td align=\"left\" bgcolor=\"#6699CC\" width=\"1100px\">
                                                                    <strong>1.- Comprensión verbal</strong>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div class=\"span1\">
                                                                    </div>
                                                                    <div class=\"span11\">
                                                                        ";
            // line 789
            $context["general"] = $this->getAttribute((isset($context["entityPmaSP"]) ? $context["entityPmaSP"] : $this->getContext($context, "entityPmaSP")), "valorV", array());
            // line 790
            echo "                                                                        ";
            if ((((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) >= 1) && ((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) <= 3))) {
                // line 791
                echo "                                                                            Nivel 1 ( ";
                echo twig_escape_filter($this->env, (isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")), "html", null, true);
                echo " puntos)
                                                                        ";
            } elseif ((((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) >= 4) && ((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) <= 6))) {
                // line 793
                echo "                                                                            Nivel 2 ( ";
                echo twig_escape_filter($this->env, (isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")), "html", null, true);
                echo " puntos)
                                                                        ";
            } elseif ((((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) >= 7) && ((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) <= 9))) {
                // line 795
                echo "                                                                            Nivel 3 ( ";
                echo twig_escape_filter($this->env, (isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")), "html", null, true);
                echo " puntos)
                                                                        ";
            } elseif ((((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) >= 10) && ((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) <= 15))) {
                // line 797
                echo "                                                                            Nivel 4 ( ";
                echo twig_escape_filter($this->env, (isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")), "html", null, true);
                echo " puntos)
                                                                        ";
            } elseif ((((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) >= 16) && ((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) <= 21))) {
                // line 799
                echo "                                                                            Nivel 5 ( ";
                echo twig_escape_filter($this->env, (isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")), "html", null, true);
                echo " puntos)
                                                                        ";
            } elseif ((((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) >= 22) && ((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) <= 27))) {
                // line 801
                echo "                                                                            Nivel 6 ( ";
                echo twig_escape_filter($this->env, (isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")), "html", null, true);
                echo " puntos)
                                                                        ";
            } elseif ((((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) >= 28) && ((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) <= 33))) {
                // line 803
                echo "                                                                            Nivel 7 ( ";
                echo twig_escape_filter($this->env, (isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")), "html", null, true);
                echo " puntos)
                                                                        ";
            } elseif ((((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) >= 34) && ((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) <= 45))) {
                // line 805
                echo "                                                                            Nivel 8 ( ";
                echo twig_escape_filter($this->env, (isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")), "html", null, true);
                echo " puntos)
                                                                        ";
            } elseif ((((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) >= 45) && ((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) <= 49))) {
                // line 807
                echo "                                                                            Nivel 9 ( ";
                echo twig_escape_filter($this->env, (isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")), "html", null, true);
                echo " puntos)
                                                                        ";
            } else {
                // line 809
                echo "                                                                            Nivel 0 ( ";
                echo twig_escape_filter($this->env, (isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")), "html", null, true);
                echo " puntos)
                                                                        ";
            }
            // line 811
            echo "                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td align=\"left\" bgcolor=\"#6699CC\">
                                                                    <strong>2.- Concepción espacial</strong>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div class=\"span1\">
                                                                    </div>
                                                                    <div class=\"span8\">
                                                                        ";
            // line 824
            $context["general"] = $this->getAttribute((isset($context["entityPmaSP"]) ? $context["entityPmaSP"] : $this->getContext($context, "entityPmaSP")), "valorE", array());
            // line 825
            echo "                                                                        ";
            if ((((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) >= 0) && ((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) <= 6))) {
                // line 826
                echo "                                                                            Nivel 1 ( ";
                echo twig_escape_filter($this->env, (isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")), "html", null, true);
                echo " puntos)
                                                                        ";
            } elseif ((((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) >= 7) && ((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) <= 12))) {
                // line 828
                echo "                                                                            Nivel 2 ( ";
                echo twig_escape_filter($this->env, (isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")), "html", null, true);
                echo " puntos)
                                                                        ";
            } elseif ((((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) >= 13) && ((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) <= 18))) {
                // line 830
                echo "                                                                            Nivel 3 ( ";
                echo twig_escape_filter($this->env, (isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")), "html", null, true);
                echo " puntos)
                                                                        ";
            } elseif ((((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) >= 19) && ((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) <= 23))) {
                // line 832
                echo "                                                                            Nivel 4 ( ";
                echo twig_escape_filter($this->env, (isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")), "html", null, true);
                echo " puntos)
                                                                        ";
            } elseif ((((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) >= 24) && ((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) <= 28))) {
                // line 834
                echo "                                                                            Nivel 5 ( ";
                echo twig_escape_filter($this->env, (isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")), "html", null, true);
                echo " puntos)
                                                                        ";
            } elseif ((((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) >= 29) && ((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) <= 33))) {
                // line 836
                echo "                                                                            Nivel 6 ( ";
                echo twig_escape_filter($this->env, (isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")), "html", null, true);
                echo " puntos)
                                                                        ";
            } elseif ((((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) >= 34) && ((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) <= 42))) {
                // line 838
                echo "                                                                            Nivel 7 ( ";
                echo twig_escape_filter($this->env, (isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")), "html", null, true);
                echo " puntos)
                                                                        ";
            } elseif ((((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) >= 43) && ((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) <= 48))) {
                // line 840
                echo "                                                                            Nivel 8 ( ";
                echo twig_escape_filter($this->env, (isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")), "html", null, true);
                echo " puntos)
                                                                        ";
            } elseif ((((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) >= 49) && ((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) <= 54))) {
                // line 842
                echo "                                                                            Nivel 9 ( ";
                echo twig_escape_filter($this->env, (isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")), "html", null, true);
                echo " puntos)
                                                                        ";
            } else {
                // line 844
                echo "                                                                            Nivel -
                                                                        ";
            }
            // line 846
            echo "                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td align=\"left\" bgcolor=\"#6699CC\">
                                                                    <strong>3.- Razonamiento</strong>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div class=\"span1\">
                                                                    </div>
                                                                    <div class=\"span8\">
                                                                        ";
            // line 859
            $context["general"] = $this->getAttribute((isset($context["entityPmaSP"]) ? $context["entityPmaSP"] : $this->getContext($context, "entityPmaSP")), "valorR", array());
            // line 860
            echo "                                                                        ";
            if ((((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) >= 0) && ((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) <= 3))) {
                // line 861
                echo "                                                                            Nivel 1 ( ";
                echo twig_escape_filter($this->env, (isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")), "html", null, true);
                echo " puntos)
                                                                        ";
            } elseif ((((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) >= 4) && ((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) <= 8))) {
                // line 863
                echo "                                                                            Nivel 2 ( ";
                echo twig_escape_filter($this->env, (isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")), "html", null, true);
                echo " puntos)
                                                                        ";
            } elseif ((((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) >= 9) && ((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) <= 12))) {
                // line 865
                echo "                                                                            Nivel 3 ( ";
                echo twig_escape_filter($this->env, (isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")), "html", null, true);
                echo " puntos)
                                                                        ";
            } elseif ((((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) >= 13) && ((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) <= 14))) {
                // line 867
                echo "                                                                            Nivel 4 ( ";
                echo twig_escape_filter($this->env, (isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")), "html", null, true);
                echo " puntos)
                                                                        ";
            } elseif ((((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) >= 15) && ((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) <= 16))) {
                // line 869
                echo "                                                                            Nivel 5 ( ";
                echo twig_escape_filter($this->env, (isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")), "html", null, true);
                echo " puntos)
                                                                        ";
            } elseif ((((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) >= 18) && ((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) <= 17))) {
                // line 871
                echo "                                                                            Nivel 6 ( ";
                echo twig_escape_filter($this->env, (isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")), "html", null, true);
                echo " puntos)
                                                                        ";
            } elseif ((((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) >= 19) && ((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) <= 21))) {
                // line 873
                echo "                                                                            Nivel 7 ( ";
                echo twig_escape_filter($this->env, (isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")), "html", null, true);
                echo " puntos)
                                                                        ";
            } elseif ((((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) >= 22) && ((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) <= 24))) {
                // line 875
                echo "                                                                            Nivel 8 ( ";
                echo twig_escape_filter($this->env, (isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")), "html", null, true);
                echo " puntos)
                                                                        ";
            } elseif ((((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) >= 25) && ((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) <= 30))) {
                // line 877
                echo "                                                                            Nivel 9 ( ";
                echo twig_escape_filter($this->env, (isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")), "html", null, true);
                echo " puntos)
                                                                        ";
            } else {
                // line 879
                echo "                                                                            Nivel -
                                                                        ";
            }
            // line 881
            echo "                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td align=\"left\" bgcolor=\"#6699CC\">
                                                                    <strong>4.- Cálculo numérico</strong>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div class=\"span1\">
                                                                    </div>
                                                                    <div class=\"span8\">
                                                                        ";
            // line 894
            $context["general"] = $this->getAttribute((isset($context["entityPmaSP"]) ? $context["entityPmaSP"] : $this->getContext($context, "entityPmaSP")), "valorN", array());
            // line 895
            echo "                                                                        ";
            if ((((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) >= 1) && ((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) <= 7))) {
                // line 896
                echo "                                                                            Nivel 1 ( ";
                echo twig_escape_filter($this->env, (isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")), "html", null, true);
                echo " puntos)
                                                                        ";
            } elseif ((((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) >= 8) && ((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) <= 12))) {
                // line 898
                echo "                                                                            Nivel 2 ( ";
                echo twig_escape_filter($this->env, (isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")), "html", null, true);
                echo " puntos)
                                                                        ";
            } elseif ((((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) >= 13) && ((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) <= 16))) {
                // line 900
                echo "                                                                            Nivel 3 ( ";
                echo twig_escape_filter($this->env, (isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")), "html", null, true);
                echo " puntos)
                                                                        ";
            } elseif ((((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) >= 17) && ((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) <= 21))) {
                // line 902
                echo "                                                                            Nivel 4 ( ";
                echo twig_escape_filter($this->env, (isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")), "html", null, true);
                echo " puntos)
                                                                        ";
            } elseif ((((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) >= 22) && ((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) <= 26))) {
                // line 904
                echo "                                                                            Nivel 5 ( ";
                echo twig_escape_filter($this->env, (isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")), "html", null, true);
                echo " puntos)
                                                                        ";
            } elseif ((((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) >= 27) && ((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) <= 31))) {
                // line 906
                echo "                                                                            Nivel 6 ( ";
                echo twig_escape_filter($this->env, (isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")), "html", null, true);
                echo " puntos)
                                                                        ";
            } elseif ((((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) >= 32) && ((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) <= 37))) {
                // line 908
                echo "                                                                            Nivel 7 ( ";
                echo twig_escape_filter($this->env, (isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")), "html", null, true);
                echo " puntos)
                                                                        ";
            } elseif ((((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) >= 38) && ((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) <= 49))) {
                // line 910
                echo "                                                                            Nivel 8 ( ";
                echo twig_escape_filter($this->env, (isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")), "html", null, true);
                echo " puntos)
                                                                        ";
            } elseif ((((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) >= 50) && ((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) <= 70))) {
                // line 912
                echo "                                                                            Nivel 9 ( ";
                echo twig_escape_filter($this->env, (isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")), "html", null, true);
                echo " puntos)
                                                                        ";
            } else {
                // line 914
                echo "                                                                            Nivel 0
                                                                        ";
            }
            // line 916
            echo "                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td align=\"left\" bgcolor=\"#6699CC\">
                                                                    <strong>5.- Fluidez verbal</strong>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div class=\"span1\">
                                                                    </div>
                                                                    <div class=\"span8\">
                                                                        ";
            // line 929
            $context["general"] = $this->getAttribute((isset($context["entityPmaSP"]) ? $context["entityPmaSP"] : $this->getContext($context, "entityPmaSP")), "valorF", array());
            // line 930
            echo "                                                                        ";
            if ((((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) >= 1) && ((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) <= 25))) {
                // line 931
                echo "                                                                            Nivel 1 ( ";
                echo twig_escape_filter($this->env, (isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")), "html", null, true);
                echo " puntos)
                                                                        ";
            } elseif ((((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) >= 26) && ((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) <= 28))) {
                // line 933
                echo "                                                                            Nivel 2 ( ";
                echo twig_escape_filter($this->env, (isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")), "html", null, true);
                echo " puntos)
                                                                        ";
            } elseif ((((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) >= 29) && ((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) <= 30))) {
                // line 935
                echo "                                                                            Nivel 3 ( ";
                echo twig_escape_filter($this->env, (isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")), "html", null, true);
                echo " puntos)
                                                                        ";
            } elseif ((((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) >= 31) && ((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) <= 37))) {
                // line 937
                echo "                                                                            Nivel 4 ( ";
                echo twig_escape_filter($this->env, (isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")), "html", null, true);
                echo " puntos)
                                                                        ";
            } elseif ((((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) >= 38) && ((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) <= 43))) {
                // line 939
                echo "                                                                            Nivel 5 ( ";
                echo twig_escape_filter($this->env, (isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")), "html", null, true);
                echo " puntos)
                                                                        ";
            } elseif ((((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) >= 44) && ((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) <= 52))) {
                // line 941
                echo "                                                                            Nivel 6 ( ";
                echo twig_escape_filter($this->env, (isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")), "html", null, true);
                echo " puntos)
                                                                        ";
            } elseif ((((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) >= 53) && ((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) <= 58))) {
                // line 943
                echo "                                                                            Nivel 7 ( ";
                echo twig_escape_filter($this->env, (isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")), "html", null, true);
                echo " puntos)
                                                                        ";
            } elseif ((((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) >= 59) && ((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) <= 64))) {
                // line 945
                echo "                                                                            Nivel 8 ( ";
                echo twig_escape_filter($this->env, (isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")), "html", null, true);
                echo " puntos)
                                                                        ";
            } elseif ((((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) >= 65) && ((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) <= 70))) {
                // line 947
                echo "                                                                            Nivel 9 ( ";
                echo twig_escape_filter($this->env, (isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")), "html", null, true);
                echo " puntos)
                                                                        ";
            } else {
                // line 949
                echo "                                                                            Nivel 0
                                                                        ";
            }
            // line 951
            echo "                                                                    </div>
                                                                </td>
                                                            </tr>
                                                        </table>
                                                        <br>
                                                        <table class=\"record_properties\" border=\"1\">
                                                            <tr>
                                                                <td align=\"left\" bgcolor=\"#6699CC\" width=\"1100px\">
                                                                    <strong>Total</strong>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div class=\"span1\">
                                                                    </div>
                                                                    <div class=\"span11\">
                                                                        ";
            // line 967
            $context["general"] = (((((1.5 * $this->getAttribute((isset($context["entityPmaSP"]) ? $context["entityPmaSP"] : $this->getContext($context, "entityPmaSP")), "valorV", array())) + $this->getAttribute((isset($context["entityPmaSP"]) ? $context["entityPmaSP"] : $this->getContext($context, "entityPmaSP")), "valorE", array())) + (2 * $this->getAttribute((isset($context["entityPmaSP"]) ? $context["entityPmaSP"] : $this->getContext($context, "entityPmaSP")), "valorR", array()))) + $this->getAttribute((isset($context["entityPmaSP"]) ? $context["entityPmaSP"] : $this->getContext($context, "entityPmaSP")), "valorN", array())) + $this->getAttribute((isset($context["entityPmaSP"]) ? $context["entityPmaSP"] : $this->getContext($context, "entityPmaSP")), "valorF", array()));
            // line 968
            echo "                                                                        ";
            if ((((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) >= 0) && ((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) < 83))) {
                // line 969
                echo "                                                                            DEFICIENTE ( ";
                echo twig_escape_filter($this->env, (isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")), "html", null, true);
                echo " puntos)
                                                                        ";
            } elseif ((((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) >= 83) && ((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) < 127))) {
                // line 971
                echo "                                                                            INFERIOR ( ";
                echo twig_escape_filter($this->env, (isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")), "html", null, true);
                echo " puntos)
                                                                        ";
            } elseif ((((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) > 127) && ((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) <= 171))) {
                // line 973
                echo "                                                                            NORMAL ( ";
                echo twig_escape_filter($this->env, (isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")), "html", null, true);
                echo " puntos)
                                                                        ";
            } elseif ((((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) > 171) && ((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) <= 215))) {
                // line 975
                echo "                                                                            NORMAL BRILLANTE ( ";
                echo twig_escape_filter($this->env, (isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")), "html", null, true);
                echo " puntos)
                                                                        ";
            } elseif ((((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) > 215) && ((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) <= 259))) {
                // line 977
                echo "                                                                            SUPERIOR ( ";
                echo twig_escape_filter($this->env, (isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")), "html", null, true);
                echo " puntos)
                                                                        ";
            } elseif (((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) > 259)) {
                // line 979
                echo "                                                                            MUY SUPERIOR ( ";
                echo twig_escape_filter($this->env, (isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")), "html", null, true);
                echo " puntos)
                                                                        ";
            } else {
                // line 981
                echo "                                                                           - ( ";
                echo twig_escape_filter($this->env, (isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")), "html", null, true);
                echo " puntos)
                                                                        ";
            }
            // line 983
            echo "                                                                    </div>
                                                                </td>
                                                            </tr>
                                                        </table>
                                                    </div>
                                                </td>
                                            </tr>
                                            <!--
                                            <tr> 
                                                <td width=\"40px\" ></td>
                                                <td colspan=2 >
                                                    <h5>
                                                        Comentario adicional
                                                    </h5>
                                                </td>
                                            </tr>
                                            <tr> 
                                                <td width=\"40px\" ></td>
                                                <td colspan=2 >";
            // line 1001
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "commentPMA", array()), 'widget');
            echo "</td>
                                            </tr>
                                            -->
                                        ";
        }
        // line 1005
        echo "                                        
                                        <tr> 
                                            <td width=\"40px\" ></td>
                                            <th colspan=2 height=\"20px\"></th>
                                        </tr>
                                        
                                        ";
        // line 1011
        if ((isset($context["validarICESP"]) ? $context["validarICESP"] : $this->getContext($context, "validarICESP"))) {
            // line 1012
            echo "                                            <tr>
                                                <td width=\"40px\" ></td>
                                                <td colspan=2 >
                                                    <div class=\"span11\">
                                                        <legend>Competencias laborales</legend>
                                                        <table class=\"record_properties\" border=\"1\">
                                                            <tr>
                                                                <td align=\"left\" bgcolor=\"#6699CC\" width=\"1100px\">
                                                                    <strong>1.- Intrapersonales</strong>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div class=\"span1\">
                                                                    </div>
                                                                    <div class=\"span11\">
                                                                        <strong>
                                                                            Valor obtenido de la escala:
                                                                        </strong>
                                                                        ";
            // line 1031
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entityICESP"]) ? $context["entityICESP"] : $this->getContext($context, "entityICESP")), "ce_Intrapersonal", array()), "html", null, true);
            echo "
                                                                        <table>
                                                                            <tr>
                                                                                <td >
                                                                                </td>
                                                                                <td >
                                                                                    
                                                                                </td>
                                                                                <td >
                                                                                </td>
                                                                                <td >
                                                                                    <table >
                                                                                        <tr>
                                                                                            <td width=\"20px\">
                                                                                                
                                                                                            </td>
                                                                                            <td>
                                                                                                <table border=0 bgcolor=\"black\">
                                                                                                    <tr>
                                                                                                        <td width=\"80px\" align=\"center\">
                                                                                                            <font size=\"1\">Muy Bajo</font>
                                                                                                        </td>
                                                                                                        <td width=\"40px\" align=\"center\">
                                                                                                            <font size=\"1\">Bajo</font>
                                                                                                        </td>
                                                                                                        <td width=\"80px\" align=\"center\">
                                                                                                            <font size=\"1\">Promedio</font>
                                                                                                        </td>
                                                                                                        <td width=\"40px\" align=\"center\">
                                                                                                            <font size=\"1\">Alto</font>
                                                                                                        </td>
                                                                                                        <td width=\"80px\" align=\"center\">
                                                                                                            <font size=\"1\">Muy alto</font>
                                                                                                        </td>
                                                                                                    </tr>
                                                                                                </table>
                                                                                            </td>
                                                                                        </tr>
                                                                                    </table>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td width=\"100px\">
                                                                                    <strong>
                                                                                        Subescalas:
                                                                                    </strong>
                                                                                </td>
                                                                                <td width=\"200px\">
                                                                                    Conocimiento emocional de sí mismo
                                                                                </td>
                                                                                <td width=\"220px\">
                                                                                    <strong>
                                                                                        Valor obtenido de subescala:
                                                                                    </strong>
                                                                                </td>
                                                                                <td >
                                                                                    <table >
                                                                                        <tr>
                                                                                            <td width=\"20px\">
                                                                                                <font size=\"2\">
                                                                                                    ";
            // line 1091
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entityICESP"]) ? $context["entityICESP"] : $this->getContext($context, "entityICESP")), "ce_sub_CM", array()), "html", null, true);
            echo "
                                                                                                </font>
                                                                                            </td>
                                                                                            <td>
                                                                                                <table border=1 bgcolor=\"black\">
                                                                                                    <tr>
                                                                                                        <td width=\"340px\" height=\"15px\">
                                                                                                            ";
            // line 1098
            $context["valor"] = (($this->getAttribute((isset($context["entityICESP"]) ? $context["entityICESP"] : $this->getContext($context, "entityICESP")), "ce_sub_CM", array()) - 60) * 4.25);
            // line 1099
            echo "                                                                                                            <table width=\"";
            echo twig_escape_filter($this->env, (isset($context["valor"]) ? $context["valor"] : $this->getContext($context, "valor")), "html", null, true);
            echo "px\" bgcolor=\"black\">
                                                                                                                <tr>
                                                                                                                    <td style=\"background-color:#EEEE3B\" height=\"5px\"></td>
                                                                                                                </tr>
                                                                                                            </table>
                                                                                                        </td>
                                                                                                    </tr>
                                                                                                </table>
                                                                                            </td>
                                                                                        </tr>
                                                                                    </table>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td >
                                                                                </td>
                                                                                <td >
                                                                                    Seguridad
                                                                                </td>
                                                                                <td >
                                                                                </td>
                                                                                <td >
                                                                                    <!--";
            // line 1121
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entityICESP"]) ? $context["entityICESP"] : $this->getContext($context, "entityICESP")), "ce_sub_SE", array()), "html", null, true);
            echo "-->
                                                                                    <table >
                                                                                        <tr>
                                                                                            <td width=\"20px\">
                                                                                                <font size=\"2\">
                                                                                                    ";
            // line 1126
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entityICESP"]) ? $context["entityICESP"] : $this->getContext($context, "entityICESP")), "ce_sub_SE", array()), "html", null, true);
            echo "
                                                                                                </font>
                                                                                            </td>
                                                                                            <td>
                                                                                                <table border=1 bgcolor=\"black\">
                                                                                                    <tr>
                                                                                                        <td width=\"340px\" height=\"15px\">
                                                                                                            ";
            // line 1133
            $context["valor"] = (($this->getAttribute((isset($context["entityICESP"]) ? $context["entityICESP"] : $this->getContext($context, "entityICESP")), "ce_sub_SE", array()) - 60) * 4.25);
            // line 1134
            echo "                                                                                                            <table width=\"";
            echo twig_escape_filter($this->env, (isset($context["valor"]) ? $context["valor"] : $this->getContext($context, "valor")), "html", null, true);
            echo "px\" bgcolor=\"black\">
                                                                                                                <tr>
                                                                                                                    <td style=\"background-color:#EEEE3B\" height=\"5px\"></td>
                                                                                                                </tr>
                                                                                                            </table>
                                                                                                        </td>
                                                                                                    </tr>
                                                                                                </table>
                                                                                            </td>
                                                                                        </tr>
                                                                                    </table>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td >
                                                                                </td>
                                                                                <td >
                                                                                    Autoestima
                                                                                </td>
                                                                                <td >
                                                                                </td>
                                                                                <td >
                                                                                    <!--";
            // line 1156
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entityICESP"]) ? $context["entityICESP"] : $this->getContext($context, "entityICESP")), "ce_sub_AE", array()), "html", null, true);
            echo "-->
                                                                                    <table >
                                                                                        <tr>
                                                                                            <td width=\"20px\">
                                                                                                <font size=\"2\">
                                                                                                    ";
            // line 1161
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entityICESP"]) ? $context["entityICESP"] : $this->getContext($context, "entityICESP")), "ce_sub_AE", array()), "html", null, true);
            echo "
                                                                                                </font>
                                                                                            </td>
                                                                                            <td>
                                                                                                <table border=1 bgcolor=\"black\">
                                                                                                    <tr>
                                                                                                        <td width=\"340px\" height=\"15px\">
                                                                                                            ";
            // line 1168
            $context["valor"] = (($this->getAttribute((isset($context["entityICESP"]) ? $context["entityICESP"] : $this->getContext($context, "entityICESP")), "ce_sub_AE", array()) - 60) * 4.25);
            // line 1169
            echo "                                                                                                            <table width=\"";
            echo twig_escape_filter($this->env, (isset($context["valor"]) ? $context["valor"] : $this->getContext($context, "valor")), "html", null, true);
            echo "px\" bgcolor=\"black\">
                                                                                                                <tr>
                                                                                                                    <td style=\"background-color:#EEEE3B\" height=\"5px\"></td>
                                                                                                                </tr>
                                                                                                            </table>
                                                                                                        </td>
                                                                                                    </tr>
                                                                                                </table>
                                                                                            </td>
                                                                                        </tr>
                                                                                    </table>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td >
                                                                                </td>
                                                                                <td >
                                                                                    Autorrealización
                                                                                </td>
                                                                                <td >
                                                                                </td>
                                                                                <td >
                                                                                    <!--";
            // line 1191
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entityICESP"]) ? $context["entityICESP"] : $this->getContext($context, "entityICESP")), "ce_sub_AR", array()), "html", null, true);
            echo "-->
                                                                                    <table >
                                                                                        <tr>
                                                                                            <td width=\"20px\">
                                                                                                <font size=\"2\">
                                                                                                    ";
            // line 1196
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entityICESP"]) ? $context["entityICESP"] : $this->getContext($context, "entityICESP")), "ce_sub_AR", array()), "html", null, true);
            echo "
                                                                                                </font>
                                                                                            </td>
                                                                                            <td>
                                                                                                <table border=1 bgcolor=\"black\">
                                                                                                    <tr>
                                                                                                        <td width=\"340px\" height=\"15px\">
                                                                                                            ";
            // line 1203
            $context["valor"] = (($this->getAttribute((isset($context["entityICESP"]) ? $context["entityICESP"] : $this->getContext($context, "entityICESP")), "ce_sub_AR", array()) - 60) * 4.25);
            // line 1204
            echo "                                                                                                            <table width=\"";
            echo twig_escape_filter($this->env, (isset($context["valor"]) ? $context["valor"] : $this->getContext($context, "valor")), "html", null, true);
            echo "px\" bgcolor=\"black\">
                                                                                                                <tr>
                                                                                                                    <td style=\"background-color:#EEEE3B\" height=\"5px\"></td>
                                                                                                                </tr>
                                                                                                            </table>
                                                                                                        </td>
                                                                                                    </tr>
                                                                                                </table>
                                                                                            </td>
                                                                                        </tr>
                                                                                    </table>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td >
                                                                                </td>
                                                                                <td >
                                                                                    Independencia
                                                                                </td>
                                                                                <td >
                                                                                </td>
                                                                                <td >
                                                                                    <!--";
            // line 1226
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entityICESP"]) ? $context["entityICESP"] : $this->getContext($context, "entityICESP")), "ce_sub_IN", array()), "html", null, true);
            echo "-->
                                                                                    <table >
                                                                                        <tr>
                                                                                            <td width=\"20px\">
                                                                                                <font size=\"2\">
                                                                                                    ";
            // line 1231
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entityICESP"]) ? $context["entityICESP"] : $this->getContext($context, "entityICESP")), "ce_sub_IN", array()), "html", null, true);
            echo "
                                                                                                </font>
                                                                                            </td>
                                                                                            <td>
                                                                                                <table border=1 bgcolor=\"black\">
                                                                                                    <tr>
                                                                                                        <td width=\"340px\" height=\"15px\">
                                                                                                            ";
            // line 1238
            $context["valor"] = (($this->getAttribute((isset($context["entityICESP"]) ? $context["entityICESP"] : $this->getContext($context, "entityICESP")), "ce_sub_IN", array()) - 60) * 4.25);
            // line 1239
            echo "                                                                                                            <table width=\"";
            echo twig_escape_filter($this->env, (isset($context["valor"]) ? $context["valor"] : $this->getContext($context, "valor")), "html", null, true);
            echo "px\" bgcolor=\"black\">
                                                                                                                <tr>
                                                                                                                    <td style=\"background-color:#EEEE3B\" height=\"5px\"></td>
                                                                                                                </tr>
                                                                                                            </table>
                                                                                                        </td>
                                                                                                    </tr>
                                                                                                </table>
                                                                                            </td>
                                                                                        </tr>
                                                                                    </table>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td >
                                                                                </td>
                                                                                <td >
                                                                                    
                                                                                </td>
                                                                                <td >
                                                                                </td>
                                                                                <td >
                                                                                    <table border=0>
                                                                                        <tr>
                                                                                            <td width=\"40px\" height=\"4px\" align=\"center\">
                                                                                                <font size=\"1\">60</font>
                                                                                            </td>
                                                                                            <td width=\"40px\" align=\"center\">
                                                                                                <font size=\"1\">70</font>
                                                                                            </td>
                                                                                            <td width=\"40px\" align=\"center\">
                                                                                                <font size=\"1\">80</font>
                                                                                            </td>
                                                                                            <td width=\"40px\" align=\"center\">
                                                                                                <font size=\"1\">90</font>
                                                                                            </td>
                                                                                            <td width=\"40px\" align=\"center\">
                                                                                                <font size=\"1\">100</font>
                                                                                            </td>
                                                                                            <td width=\"40px\" align=\"center\">
                                                                                                <font size=\"1\">110</font>
                                                                                            </td>
                                                                                            <td width=\"40px\" align=\"center\">
                                                                                                <font size=\"1\">120</font>
                                                                                            </td>
                                                                                            <td width=\"40px\" align=\"center\">
                                                                                                <font size=\"1\">130</font>
                                                                                            </td>
                                                                                            <td width=\"40px\" align=\"center\">
                                                                                                <font size=\"1\">140</font>
                                                                                            </td>
                                                                                        </tr>
                                                                                    </table>
                                                                                </td>
                                                                            </tr>
                                                                        </table>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td align=\"left\" bgcolor=\"#6699CC\">
                                                                    <strong>2.- Interpersonales</strong>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div class=\"span1\">
                                                                    </div>
                                                                    <div class=\"span11\">
                                                                        <strong>
                                                                            Valor obtenido de la escala:
                                                                        </strong>
                                                                        ";
            // line 1311
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entityICESP"]) ? $context["entityICESP"] : $this->getContext($context, "entityICESP")), "ce_Interpersonal", array()), "html", null, true);
            echo "
                                                                        <table>
                                                                            <tr>
                                                                                <td >
                                                                                </td>
                                                                                <td >
                                                                                    
                                                                                </td>
                                                                                <td >
                                                                                </td>
                                                                                <td >
                                                                                    <table >
                                                                                        <tr>
                                                                                            <td width=\"20px\">
                                                                                                
                                                                                            </td>
                                                                                            <td>
                                                                                                <table border=0 bgcolor=\"black\">
                                                                                                    <tr>
                                                                                                        <td width=\"80px\" align=\"center\">
                                                                                                            <font size=\"1\">Muy Bajo</font>
                                                                                                        </td>
                                                                                                        <td width=\"40px\" align=\"center\">
                                                                                                            <font size=\"1\">Bajo</font>
                                                                                                        </td>
                                                                                                        <td width=\"80px\" align=\"center\">
                                                                                                            <font size=\"1\">Promedio</font>
                                                                                                        </td>
                                                                                                        <td width=\"40px\" align=\"center\">
                                                                                                            <font size=\"1\">Alto</font>
                                                                                                        </td>
                                                                                                        <td width=\"80px\" align=\"center\">
                                                                                                            <font size=\"1\">Muy alto</font>
                                                                                                        </td>
                                                                                                    </tr>
                                                                                                </table>
                                                                                            </td>
                                                                                        </tr>
                                                                                    </table>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td width=\"100px\">
                                                                                    <strong>
                                                                                        Subescalas:
                                                                                    </strong>
                                                                                </td>
                                                                                <td width=\"200px\">
                                                                                    Relaciones Interpersonales
                                                                                </td>
                                                                                <td width=\"220px\">
                                                                                    <strong>
                                                                                        Valor obtenido de subescala:
                                                                                    </strong>
                                                                                </td>
                                                                                <td >
                                                                                    <table >
                                                                                        <tr>
                                                                                            <td width=\"20px\">
                                                                                                <font size=\"2\">
                                                                                                    ";
            // line 1371
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entityICESP"]) ? $context["entityICESP"] : $this->getContext($context, "entityICESP")), "ce_sub_RI", array()), "html", null, true);
            echo "
                                                                                                </font>
                                                                                            </td>
                                                                                            <td>
                                                                                                <table border=1 bgcolor=\"black\">
                                                                                                    <tr>
                                                                                                        <td width=\"340px\" height=\"15px\">
                                                                                                            ";
            // line 1378
            $context["valor"] = (($this->getAttribute((isset($context["entityICESP"]) ? $context["entityICESP"] : $this->getContext($context, "entityICESP")), "ce_sub_RI", array()) - 60) * 4.25);
            // line 1379
            echo "                                                                                                            <table width=\"";
            echo twig_escape_filter($this->env, (isset($context["valor"]) ? $context["valor"] : $this->getContext($context, "valor")), "html", null, true);
            echo "px\" bgcolor=\"black\">
                                                                                                                <tr>
                                                                                                                    <td style=\"background-color:#EEEE3B\" height=\"5px\"></td>
                                                                                                                </tr>
                                                                                                            </table>
                                                                                                        </td>
                                                                                                    </tr>
                                                                                                </table>
                                                                                            </td>
                                                                                        </tr>
                                                                                    </table>
                                                                                </td>
                                                                                <!--
                                                                                <td width=\"50px\">
                                                                                    ";
            // line 1393
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entityICESP"]) ? $context["entityICESP"] : $this->getContext($context, "entityICESP")), "ce_sub_RI", array()), "html", null, true);
            echo "
                                                                                </td>
                                                                                -->
                                                                            </tr>
                                                                            <tr>
                                                                                <td >
                                                                                </td>
                                                                                <td >
                                                                                    Responsabilidad Social
                                                                                </td>
                                                                                <td >
                                                                                </td>
                                                                                <!--
                                                                                <td >
                                                                                    ";
            // line 1407
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entityICESP"]) ? $context["entityICESP"] : $this->getContext($context, "entityICESP")), "ce_sub_RS", array()), "html", null, true);
            echo "
                                                                                </td>-->
                                                                                <td >
                                                                                    <table >
                                                                                        <tr>
                                                                                            <td width=\"20px\">
                                                                                                <font size=\"2\">
                                                                                                    ";
            // line 1414
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entityICESP"]) ? $context["entityICESP"] : $this->getContext($context, "entityICESP")), "ce_sub_RS", array()), "html", null, true);
            echo "
                                                                                                </font>
                                                                                            </td>
                                                                                            <td>
                                                                                                <table border=1 bgcolor=\"black\">
                                                                                                    <tr>
                                                                                                        <td width=\"340px\" height=\"15px\">
                                                                                                            ";
            // line 1421
            $context["valor"] = (($this->getAttribute((isset($context["entityICESP"]) ? $context["entityICESP"] : $this->getContext($context, "entityICESP")), "ce_sub_RS", array()) - 60) * 4.25);
            // line 1422
            echo "                                                                                                            <table width=\"";
            echo twig_escape_filter($this->env, (isset($context["valor"]) ? $context["valor"] : $this->getContext($context, "valor")), "html", null, true);
            echo "px\" bgcolor=\"black\">
                                                                                                                <tr>
                                                                                                                    <td style=\"background-color:#EEEE3B\" height=\"5px\"></td>
                                                                                                                </tr>
                                                                                                            </table>
                                                                                                        </td>
                                                                                                    </tr>
                                                                                                </table>
                                                                                            </td>
                                                                                        </tr>
                                                                                    </table>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td >
                                                                                </td>
                                                                                <td >
                                                                                    Empatía
                                                                                </td>
                                                                                <td >
                                                                                </td>
                                                                                <!--
                                                                                <td >
                                                                                    ";
            // line 1445
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entityICESP"]) ? $context["entityICESP"] : $this->getContext($context, "entityICESP")), "ce_sub_EM", array()), "html", null, true);
            echo "
                                                                                </td>
                                                                                -->
                                                                                <td >
                                                                                    <table >
                                                                                        <tr>
                                                                                            <td width=\"20px\">
                                                                                                <font size=\"2\">
                                                                                                    ";
            // line 1453
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entityICESP"]) ? $context["entityICESP"] : $this->getContext($context, "entityICESP")), "ce_sub_EM", array()), "html", null, true);
            echo "
                                                                                                </font>
                                                                                            </td>
                                                                                            <td>
                                                                                                <table border=1 bgcolor=\"black\">
                                                                                                    <tr>
                                                                                                        <td width=\"340px\" height=\"15px\">
                                                                                                            ";
            // line 1460
            $context["valor"] = (($this->getAttribute((isset($context["entityICESP"]) ? $context["entityICESP"] : $this->getContext($context, "entityICESP")), "ce_sub_EM", array()) - 60) * 4.25);
            // line 1461
            echo "                                                                                                            <table width=\"";
            echo twig_escape_filter($this->env, (isset($context["valor"]) ? $context["valor"] : $this->getContext($context, "valor")), "html", null, true);
            echo "px\" bgcolor=\"black\">
                                                                                                                <tr>
                                                                                                                    <td style=\"background-color:#EEEE3B\" height=\"5px\"></td>
                                                                                                                </tr>
                                                                                                            </table>
                                                                                                        </td>
                                                                                                    </tr>
                                                                                                </table>
                                                                                            </td>
                                                                                        </tr>
                                                                                    </table>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td >
                                                                                </td>
                                                                                <td >
                                                                                    
                                                                                </td>
                                                                                <td >
                                                                                </td>
                                                                                <td >
                                                                                    <table border=0>
                                                                                        <tr>
                                                                                            <td width=\"40px\" height=\"4px\" align=\"center\">
                                                                                                <font size=\"1\">60</font>
                                                                                            </td>
                                                                                            <td width=\"40px\" align=\"center\">
                                                                                                <font size=\"1\">70</font>
                                                                                            </td>
                                                                                            <td width=\"40px\" align=\"center\">
                                                                                                <font size=\"1\">80</font>
                                                                                            </td>
                                                                                            <td width=\"40px\" align=\"center\">
                                                                                                <font size=\"1\">90</font>
                                                                                            </td>
                                                                                            <td width=\"40px\" align=\"center\">
                                                                                                <font size=\"1\">100</font>
                                                                                            </td>
                                                                                            <td width=\"40px\" align=\"center\">
                                                                                                <font size=\"1\">110</font>
                                                                                            </td>
                                                                                            <td width=\"40px\" align=\"center\">
                                                                                                <font size=\"1\">120</font>
                                                                                            </td>
                                                                                            <td width=\"40px\" align=\"center\">
                                                                                                <font size=\"1\">130</font>
                                                                                            </td>
                                                                                            <td width=\"40px\" align=\"center\">
                                                                                                <font size=\"1\">140</font>
                                                                                            </td>
                                                                                        </tr>
                                                                                    </table>
                                                                                </td>
                                                                            </tr>
                                                                        </table>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td align=\"left\" bgcolor=\"#6699CC\">
                                                                    <strong>3.- Adaptabilidad</strong>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div class=\"span1\">
                                                                    </div>
                                                                    <div class=\"span11\">
                                                                        <strong>
                                                                            Valor obtenido de la escala:
                                                                        </strong>
                                                                        ";
            // line 1533
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entityICESP"]) ? $context["entityICESP"] : $this->getContext($context, "entityICESP")), "ce_Adaptabilidad", array()), "html", null, true);
            echo "
                                                                        <table>
                                                                            <tr>
                                                                                <td >
                                                                                </td>
                                                                                <td >
                                                                                    
                                                                                </td>
                                                                                <td >
                                                                                </td>
                                                                                <td >
                                                                                    <table >
                                                                                        <tr>
                                                                                            <td width=\"20px\">
                                                                                                
                                                                                            </td>
                                                                                            <td>
                                                                                                <table border=0 bgcolor=\"black\">
                                                                                                    <tr>
                                                                                                        <td width=\"80px\" align=\"center\">
                                                                                                            <font size=\"1\">Muy Bajo</font>
                                                                                                        </td>
                                                                                                        <td width=\"40px\" align=\"center\">
                                                                                                            <font size=\"1\">Bajo</font>
                                                                                                        </td>
                                                                                                        <td width=\"80px\" align=\"center\">
                                                                                                            <font size=\"1\">Promedio</font>
                                                                                                        </td>
                                                                                                        <td width=\"40px\" align=\"center\">
                                                                                                            <font size=\"1\">Alto</font>
                                                                                                        </td>
                                                                                                        <td width=\"80px\" align=\"center\">
                                                                                                            <font size=\"1\">Muy alto</font>
                                                                                                        </td>
                                                                                                    </tr>
                                                                                                </table>
                                                                                            </td>
                                                                                        </tr>
                                                                                    </table>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td width=\"100px\">
                                                                                    <strong>
                                                                                        Subescalas:
                                                                                    </strong>
                                                                                </td>
                                                                                <td width=\"200px\">
                                                                                    Solución de Problemas
                                                                                </td>
                                                                                <td width=\"220px\">
                                                                                    <strong>
                                                                                        Valor obtenido de subescala:
                                                                                    </strong>
                                                                                </td>
                                                                                <!--
                                                                                <td width=\"50px\">
                                                                                    ";
            // line 1590
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entityICESP"]) ? $context["entityICESP"] : $this->getContext($context, "entityICESP")), "ce_sub_SP", array()), "html", null, true);
            echo "
                                                                                </td>
                                                                                -->
                                                                                <td >
                                                                                    <table >
                                                                                        <tr>
                                                                                            <td width=\"20px\">
                                                                                                <font size=\"2\">
                                                                                                    ";
            // line 1598
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entityICESP"]) ? $context["entityICESP"] : $this->getContext($context, "entityICESP")), "ce_sub_SP", array()), "html", null, true);
            echo "
                                                                                                </font>
                                                                                            </td>
                                                                                            <td>
                                                                                                <table border=1 bgcolor=\"black\">
                                                                                                    <tr>
                                                                                                        <td width=\"340px\" height=\"15px\">
                                                                                                            ";
            // line 1605
            $context["valor"] = (($this->getAttribute((isset($context["entityICESP"]) ? $context["entityICESP"] : $this->getContext($context, "entityICESP")), "ce_sub_SP", array()) - 60) * 4.25);
            // line 1606
            echo "                                                                                                            <table width=\"";
            echo twig_escape_filter($this->env, (isset($context["valor"]) ? $context["valor"] : $this->getContext($context, "valor")), "html", null, true);
            echo "px\" bgcolor=\"black\">
                                                                                                                <tr>
                                                                                                                    <td style=\"background-color:#EEEE3B\" height=\"5px\"></td>
                                                                                                                </tr>
                                                                                                            </table>
                                                                                                        </td>
                                                                                                    </tr>
                                                                                                </table>
                                                                                            </td>
                                                                                        </tr>
                                                                                    </table>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td >
                                                                                </td>
                                                                                <td >
                                                                                    Prueba de la Realidad
                                                                                </td>
                                                                                <td >
                                                                                </td>
                                                                                <!--
                                                                                <td >
                                                                                    ";
            // line 1629
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entityICESP"]) ? $context["entityICESP"] : $this->getContext($context, "entityICESP")), "ce_sub_PR", array()), "html", null, true);
            echo "
                                                                                </td>
                                                                                -->
                                                                                <td >
                                                                                    <table >
                                                                                        <tr>
                                                                                            <td width=\"20px\">
                                                                                                <font size=\"2\">
                                                                                                    ";
            // line 1637
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entityICESP"]) ? $context["entityICESP"] : $this->getContext($context, "entityICESP")), "ce_sub_PR", array()), "html", null, true);
            echo "
                                                                                                </font>
                                                                                            </td>
                                                                                            <td>
                                                                                                <table border=1 bgcolor=\"black\">
                                                                                                    <tr>
                                                                                                        <td width=\"340px\" height=\"15px\">
                                                                                                            ";
            // line 1644
            $context["valor"] = (($this->getAttribute((isset($context["entityICESP"]) ? $context["entityICESP"] : $this->getContext($context, "entityICESP")), "ce_sub_PR", array()) - 60) * 4.25);
            // line 1645
            echo "                                                                                                            <table width=\"";
            echo twig_escape_filter($this->env, (isset($context["valor"]) ? $context["valor"] : $this->getContext($context, "valor")), "html", null, true);
            echo "px\" bgcolor=\"black\">
                                                                                                                <tr>
                                                                                                                    <td style=\"background-color:#EEEE3B\" height=\"5px\"></td>
                                                                                                                </tr>
                                                                                                            </table>
                                                                                                        </td>
                                                                                                    </tr>
                                                                                                </table>
                                                                                            </td>
                                                                                        </tr>
                                                                                    </table>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td >
                                                                                </td>
                                                                                <td >
                                                                                    Flexibilidad
                                                                                </td>
                                                                                <td >
                                                                                </td>
                                                                                <!--
                                                                                <td >
                                                                                    ";
            // line 1668
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entityICESP"]) ? $context["entityICESP"] : $this->getContext($context, "entityICESP")), "ce_sub_FL", array()), "html", null, true);
            echo "
                                                                                </td>
                                                                                -->
                                                                                <td >
                                                                                    <table >
                                                                                        <tr>
                                                                                            <td width=\"20px\">
                                                                                                <font size=\"2\">
                                                                                                    ";
            // line 1676
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entityICESP"]) ? $context["entityICESP"] : $this->getContext($context, "entityICESP")), "ce_sub_FL", array()), "html", null, true);
            echo "
                                                                                                </font>
                                                                                            </td>
                                                                                            <td>
                                                                                                <table border=1 bgcolor=\"black\">
                                                                                                    <tr>
                                                                                                        <td width=\"340px\" height=\"15px\">
                                                                                                            ";
            // line 1683
            $context["valor"] = (($this->getAttribute((isset($context["entityICESP"]) ? $context["entityICESP"] : $this->getContext($context, "entityICESP")), "ce_sub_FL", array()) - 60) * 4.25);
            // line 1684
            echo "                                                                                                            <table width=\"";
            echo twig_escape_filter($this->env, (isset($context["valor"]) ? $context["valor"] : $this->getContext($context, "valor")), "html", null, true);
            echo "px\" bgcolor=\"black\">
                                                                                                                <tr>
                                                                                                                    <td style=\"background-color:#EEEE3B\" height=\"5px\"></td>
                                                                                                                </tr>
                                                                                                            </table>
                                                                                                        </td>
                                                                                                    </tr>
                                                                                                </table>
                                                                                            </td>
                                                                                        </tr>
                                                                                    </table>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td >
                                                                                </td>
                                                                                <td >
                                                                                    
                                                                                </td>
                                                                                <td >
                                                                                </td>
                                                                                <td >
                                                                                    <table border=0>
                                                                                        <tr>
                                                                                            <td width=\"40px\" height=\"4px\" align=\"center\">
                                                                                                <font size=\"1\">60</font>
                                                                                            </td>
                                                                                            <td width=\"40px\" align=\"center\">
                                                                                                <font size=\"1\">70</font>
                                                                                            </td>
                                                                                            <td width=\"40px\" align=\"center\">
                                                                                                <font size=\"1\">80</font>
                                                                                            </td>
                                                                                            <td width=\"40px\" align=\"center\">
                                                                                                <font size=\"1\">90</font>
                                                                                            </td>
                                                                                            <td width=\"40px\" align=\"center\">
                                                                                                <font size=\"1\">100</font>
                                                                                            </td>
                                                                                            <td width=\"40px\" align=\"center\">
                                                                                                <font size=\"1\">110</font>
                                                                                            </td>
                                                                                            <td width=\"40px\" align=\"center\">
                                                                                                <font size=\"1\">120</font>
                                                                                            </td>
                                                                                            <td width=\"40px\" align=\"center\">
                                                                                                <font size=\"1\">130</font>
                                                                                            </td>
                                                                                            <td width=\"40px\" align=\"center\">
                                                                                                <font size=\"1\">140</font>
                                                                                            </td>
                                                                                        </tr>
                                                                                    </table>
                                                                                </td>
                                                                            </tr>
                                                                        </table>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td align=\"left\" bgcolor=\"#6699CC\">
                                                                    <strong>4.- Manejo de la tensión</strong>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div class=\"span1\">
                                                                    </div>
                                                                    <div class=\"span11\">
                                                                        <strong>
                                                                            Valor obtenido de la escala:
                                                                        </strong>
                                                                        ";
            // line 1756
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entityICESP"]) ? $context["entityICESP"] : $this->getContext($context, "entityICESP")), "ce_Tension", array()), "html", null, true);
            echo "
                                                                        <table>
                                                                            <tr>
                                                                                <td >
                                                                                </td>
                                                                                <td >
                                                                                    
                                                                                </td>
                                                                                <td >
                                                                                </td>
                                                                                <td >
                                                                                    <table >
                                                                                        <tr>
                                                                                            <td width=\"20px\">
                                                                                                
                                                                                            </td>
                                                                                            <td>
                                                                                                <table border=0 bgcolor=\"black\">
                                                                                                    <tr>
                                                                                                        <td width=\"80px\" align=\"center\">
                                                                                                            <font size=\"1\">Muy Bajo</font>
                                                                                                        </td>
                                                                                                        <td width=\"40px\" align=\"center\">
                                                                                                            <font size=\"1\">Bajo</font>
                                                                                                        </td>
                                                                                                        <td width=\"80px\" align=\"center\">
                                                                                                            <font size=\"1\">Promedio</font>
                                                                                                        </td>
                                                                                                        <td width=\"40px\" align=\"center\">
                                                                                                            <font size=\"1\">Alto</font>
                                                                                                        </td>
                                                                                                        <td width=\"80px\" align=\"center\">
                                                                                                            <font size=\"1\">Muy alto</font>
                                                                                                        </td>
                                                                                                    </tr>
                                                                                                </table>
                                                                                            </td>
                                                                                        </tr>
                                                                                    </table>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td width=\"100px\">
                                                                                    <strong>
                                                                                        Subescalas:
                                                                                    </strong>
                                                                                </td>
                                                                                <td width=\"200px\">
                                                                                    Tolerancia a la Tensión
                                                                                </td>
                                                                                <td width=\"220px\">
                                                                                    <strong>
                                                                                        Valor obtenido de subescala:
                                                                                    </strong>
                                                                                </td>
                                                                                <!--
                                                                                <td width=\"50px\">
                                                                                    ";
            // line 1813
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entityICESP"]) ? $context["entityICESP"] : $this->getContext($context, "entityICESP")), "ce_sub_TT", array()), "html", null, true);
            echo "
                                                                                </td>
                                                                                -->
                                                                                <td >
                                                                                    <table >
                                                                                        <tr>
                                                                                            <td width=\"20px\">
                                                                                                <font size=\"2\">
                                                                                                    ";
            // line 1821
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entityICESP"]) ? $context["entityICESP"] : $this->getContext($context, "entityICESP")), "ce_sub_TT", array()), "html", null, true);
            echo "
                                                                                                </font>
                                                                                            </td>
                                                                                            <td>
                                                                                                <table border=1 bgcolor=\"black\">
                                                                                                    <tr>
                                                                                                        <td width=\"340px\" height=\"15px\">
                                                                                                            ";
            // line 1828
            $context["valor"] = (($this->getAttribute((isset($context["entityICESP"]) ? $context["entityICESP"] : $this->getContext($context, "entityICESP")), "ce_sub_TT", array()) - 60) * 4.25);
            // line 1829
            echo "                                                                                                            <table width=\"";
            echo twig_escape_filter($this->env, (isset($context["valor"]) ? $context["valor"] : $this->getContext($context, "valor")), "html", null, true);
            echo "px\" bgcolor=\"black\">
                                                                                                                <tr>
                                                                                                                    <td style=\"background-color:#EEEE3B\" height=\"5px\"></td>
                                                                                                                </tr>
                                                                                                            </table>
                                                                                                        </td>
                                                                                                    </tr>
                                                                                                </table>
                                                                                            </td>
                                                                                        </tr>
                                                                                    </table>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td >
                                                                                </td>
                                                                                <td >
                                                                                    Control de los impulsos
                                                                                </td>
                                                                                <td >
                                                                                </td>
                                                                                <!--
                                                                                <td >
                                                                                    ";
            // line 1852
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entityICESP"]) ? $context["entityICESP"] : $this->getContext($context, "entityICESP")), "ce_sub_CI", array()), "html", null, true);
            echo "
                                                                                </td>
                                                                                -->
                                                                                <td >
                                                                                    <table >
                                                                                        <tr>
                                                                                            <td width=\"20px\">
                                                                                                <font size=\"2\">
                                                                                                    ";
            // line 1860
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entityICESP"]) ? $context["entityICESP"] : $this->getContext($context, "entityICESP")), "ce_sub_CI", array()), "html", null, true);
            echo "
                                                                                                </font>
                                                                                            </td>
                                                                                            <td>
                                                                                                <table border=1 bgcolor=\"black\">
                                                                                                    <tr>
                                                                                                        <td width=\"340px\" height=\"15px\">
                                                                                                            ";
            // line 1867
            $context["valor"] = (($this->getAttribute((isset($context["entityICESP"]) ? $context["entityICESP"] : $this->getContext($context, "entityICESP")), "ce_sub_CI", array()) - 60) * 4.25);
            // line 1868
            echo "                                                                                                            <table width=\"";
            echo twig_escape_filter($this->env, (isset($context["valor"]) ? $context["valor"] : $this->getContext($context, "valor")), "html", null, true);
            echo "px\" bgcolor=\"black\">
                                                                                                                <tr>
                                                                                                                    <td style=\"background-color:#EEEE3B\" height=\"5px\"></td>
                                                                                                                </tr>
                                                                                                            </table>
                                                                                                        </td>
                                                                                                    </tr>
                                                                                                </table>
                                                                                            </td>
                                                                                        </tr>
                                                                                    </table>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td >
                                                                                </td>
                                                                                <td >
                                                                                    
                                                                                </td>
                                                                                <td >
                                                                                </td>
                                                                                <td >
                                                                                    <table border=0>
                                                                                        <tr>
                                                                                            <td width=\"40px\" height=\"4px\" align=\"center\">
                                                                                                <font size=\"1\">60</font>
                                                                                            </td>
                                                                                            <td width=\"40px\" align=\"center\">
                                                                                                <font size=\"1\">70</font>
                                                                                            </td>
                                                                                            <td width=\"40px\" align=\"center\">
                                                                                                <font size=\"1\">80</font>
                                                                                            </td>
                                                                                            <td width=\"40px\" align=\"center\">
                                                                                                <font size=\"1\">90</font>
                                                                                            </td>
                                                                                            <td width=\"40px\" align=\"center\">
                                                                                                <font size=\"1\">100</font>
                                                                                            </td>
                                                                                            <td width=\"40px\" align=\"center\">
                                                                                                <font size=\"1\">110</font>
                                                                                            </td>
                                                                                            <td width=\"40px\" align=\"center\">
                                                                                                <font size=\"1\">120</font>
                                                                                            </td>
                                                                                            <td width=\"40px\" align=\"center\">
                                                                                                <font size=\"1\">130</font>
                                                                                            </td>
                                                                                            <td width=\"40px\" align=\"center\">
                                                                                                <font size=\"1\">140</font>
                                                                                            </td>
                                                                                        </tr>
                                                                                    </table>
                                                                                </td>
                                                                            </tr>
                                                                        </table>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td align=\"left\" bgcolor=\"#6699CC\">
                                                                    <strong>5.- Ánimo general</strong>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div class=\"span1\">
                                                                    </div>
                                                                    <div class=\"span11\">
                                                                        <strong>
                                                                            Valor obtenido de la escala:
                                                                        </strong>
                                                                        ";
            // line 1940
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entityICESP"]) ? $context["entityICESP"] : $this->getContext($context, "entityICESP")), "ce_Animo", array()), "html", null, true);
            echo "
                                                                        <table>
                                                                            <tr>
                                                                                <td >
                                                                                </td>
                                                                                <td >
                                                                                    
                                                                                </td>
                                                                                <td >
                                                                                </td>
                                                                                <td >
                                                                                    <table >
                                                                                        <tr>
                                                                                            <td width=\"20px\">
                                                                                                
                                                                                            </td>
                                                                                            <td>
                                                                                                <table border=0 bgcolor=\"black\">
                                                                                                    <tr>
                                                                                                        <td width=\"80px\" align=\"center\">
                                                                                                            <font size=\"1\">Muy Bajo</font>
                                                                                                        </td>
                                                                                                        <td width=\"40px\" align=\"center\">
                                                                                                            <font size=\"1\">Bajo</font>
                                                                                                        </td>
                                                                                                        <td width=\"80px\" align=\"center\">
                                                                                                            <font size=\"1\">Promedio</font>
                                                                                                        </td>
                                                                                                        <td width=\"40px\" align=\"center\">
                                                                                                            <font size=\"1\">Alto</font>
                                                                                                        </td>
                                                                                                        <td width=\"80px\" align=\"center\">
                                                                                                            <font size=\"1\">Muy alto</font>
                                                                                                        </td>
                                                                                                    </tr>
                                                                                                </table>
                                                                                            </td>
                                                                                        </tr>
                                                                                    </table>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td width=\"100px\">
                                                                                    <strong>
                                                                                        Subescalas:
                                                                                    </strong>
                                                                                </td>
                                                                                <td width=\"200px\">
                                                                                    Felicidad
                                                                                </td>
                                                                                <td width=\"220px\">
                                                                                    <strong>
                                                                                        Valor obtenido de subescala:
                                                                                    </strong>
                                                                                </td>
                                                                                <!--
                                                                                <td width=\"50px\">
                                                                                    ";
            // line 1997
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entityICESP"]) ? $context["entityICESP"] : $this->getContext($context, "entityICESP")), "ce_sub_FE", array()), "html", null, true);
            echo "
                                                                                </td>
                                                                                -->
                                                                                <td >
                                                                                    <table >
                                                                                        <tr>
                                                                                            <td width=\"20px\">
                                                                                                <font size=\"2\">
                                                                                                    ";
            // line 2005
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entityICESP"]) ? $context["entityICESP"] : $this->getContext($context, "entityICESP")), "ce_sub_FE", array()), "html", null, true);
            echo "
                                                                                                </font>
                                                                                            </td>
                                                                                            <td>
                                                                                                <table border=1 bgcolor=\"black\">
                                                                                                    <tr>
                                                                                                        <td width=\"340px\" height=\"15px\">
                                                                                                            ";
            // line 2012
            $context["valor"] = (($this->getAttribute((isset($context["entityICESP"]) ? $context["entityICESP"] : $this->getContext($context, "entityICESP")), "ce_sub_FE", array()) - 60) * 4.25);
            // line 2013
            echo "                                                                                                            <table width=\"";
            echo twig_escape_filter($this->env, (isset($context["valor"]) ? $context["valor"] : $this->getContext($context, "valor")), "html", null, true);
            echo "px\" bgcolor=\"black\">
                                                                                                                <tr>
                                                                                                                    <td style=\"background-color:#EEEE3B\" height=\"5px\"></td>
                                                                                                                </tr>
                                                                                                            </table>
                                                                                                        </td>
                                                                                                    </tr>
                                                                                                </table>
                                                                                            </td>
                                                                                        </tr>
                                                                                    </table>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td >
                                                                                </td>
                                                                                <td >
                                                                                    Optimismo
                                                                                </td>
                                                                                <td >
                                                                                </td>
                                                                                <!--
                                                                                <td >
                                                                                    ";
            // line 2036
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entityICESP"]) ? $context["entityICESP"] : $this->getContext($context, "entityICESP")), "ce_sub_OP", array()), "html", null, true);
            echo "
                                                                                </td>
                                                                                -->
                                                                                <td >
                                                                                    <table >
                                                                                        <tr>
                                                                                            <td width=\"20px\">
                                                                                                <font size=\"2\">
                                                                                                    ";
            // line 2044
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entityICESP"]) ? $context["entityICESP"] : $this->getContext($context, "entityICESP")), "ce_sub_OP", array()), "html", null, true);
            echo "
                                                                                                </font>
                                                                                            </td>
                                                                                            <td>
                                                                                                <table border=1 bgcolor=\"black\">
                                                                                                    <tr>
                                                                                                        <td width=\"340px\" height=\"15px\">
                                                                                                            ";
            // line 2051
            $context["valor"] = (($this->getAttribute((isset($context["entityICESP"]) ? $context["entityICESP"] : $this->getContext($context, "entityICESP")), "ce_sub_OP", array()) - 60) * 4.25);
            // line 2052
            echo "                                                                                                            <table width=\"";
            echo twig_escape_filter($this->env, (isset($context["valor"]) ? $context["valor"] : $this->getContext($context, "valor")), "html", null, true);
            echo "px\" bgcolor=\"black\">
                                                                                                                <tr>
                                                                                                                    <td style=\"background-color:#EEEE3B\" height=\"5px\"></td>
                                                                                                                </tr>
                                                                                                            </table>
                                                                                                        </td>
                                                                                                    </tr>
                                                                                                </table>
                                                                                            </td>
                                                                                        </tr>
                                                                                    </table>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td >
                                                                                </td>
                                                                                <td >
                                                                                    
                                                                                </td>
                                                                                <td >
                                                                                </td>
                                                                                <td >
                                                                                    <table border=0>
                                                                                        <tr>
                                                                                            <td width=\"40px\" height=\"4px\" align=\"center\">
                                                                                                <font size=\"1\">60</font>
                                                                                            </td>
                                                                                            <td width=\"40px\" align=\"center\">
                                                                                                <font size=\"1\">70</font>
                                                                                            </td>
                                                                                            <td width=\"40px\" align=\"center\">
                                                                                                <font size=\"1\">80</font>
                                                                                            </td>
                                                                                            <td width=\"40px\" align=\"center\">
                                                                                                <font size=\"1\">90</font>
                                                                                            </td>
                                                                                            <td width=\"40px\" align=\"center\">
                                                                                                <font size=\"1\">100</font>
                                                                                            </td>
                                                                                            <td width=\"40px\" align=\"center\">
                                                                                                <font size=\"1\">110</font>
                                                                                            </td>
                                                                                            <td width=\"40px\" align=\"center\">
                                                                                                <font size=\"1\">120</font>
                                                                                            </td>
                                                                                            <td width=\"40px\" align=\"center\">
                                                                                                <font size=\"1\">130</font>
                                                                                            </td>
                                                                                            <td width=\"40px\" align=\"center\">
                                                                                                <font size=\"1\">140</font>
                                                                                            </td>
                                                                                        </tr>
                                                                                    </table>
                                                                                </td>
                                                                            </tr>
                                                                        </table>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                        </table>
                                                        <br>
                                                        <table class=\"record_properties\" border=\"1\">
                                                            <tr>
                                                                <td align=\"left\" bgcolor=\"#6699CC\" width=\"1100px\">
                                                                    <strong>CE Total</strong>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div class=\"span1\">
                                                                    </div>
                                                                    <div class=\"span11\">
                                                                        <strong>
                                                                            Valor obtenido de la escala total:
                                                                        </strong>
                                                                        ";
            // line 2127
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entityICESP"]) ? $context["entityICESP"] : $this->getContext($context, "entityICESP")), "ce_Total", array()), "html", null, true);
            echo "
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            
                                                        </table>
                                                    </div>
                                                </td>
                                            <tr>
                                            <!--
                                            <tr> 
                                                <td width=\"40px\" ></td>
                                                <td colspan=2 >
                                                    <h5>
                                                        Comentario adicional
                                                    </h5>
                                                </td>
                                            </tr>
                                            <tr> 
                                                <td width=\"40px\" ></td>
                                                <td colspan=2 >";
            // line 2147
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "commentICE", array()), 'widget');
            echo "</td>
                                            </tr>
                                            -->
                                       ";
        }
        // line 2151
        echo "
                                        <tr> 
                                            <td width=\"40px\" ></td>
                                            <th colspan=2 height=\"10px\"></th>
                                        </tr>
                                        
                                        ";
        // line 2157
        if ((isset($context["validarEscudoSP"]) ? $context["validarEscudoSP"] : $this->getContext($context, "validarEscudoSP"))) {
            // line 2158
            echo "                                            <tr>
                                                <td width=\"40px\" ></td>
                                                <td colspan=2 >
                                                    <div class=\"span11\">
                                                        <legend>Resultado de la prueba del escudo</legend>
                                                        <table class=\"record_properties\" border=\"2\"  bordercolor=\"#C2C2C2\">
                                                            <tr>
                                                                <td width=\"550px\" align=\"center\">
                                                                    <br>
                                                                    <table class=\"record_properties\">
                                                                        <tr >
                                                                            <td width=\"500px\" align=\"center\">
                                                                                <table class=\"record_properties\" border=\"2\" cellpadding=\"6\"  cellspacing=\"0\">
                                                                                    <tr >
                                                                                        <td width=\"480px\" >
                                                                                            <strong>
                                                                                                ";
            // line 2174
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entityEscudoSP"]) ? $context["entityEscudoSP"] : $this->getContext($context, "entityEscudoSP")), "escudospdetails", array()), 0, array(), "array"), "escudodetail", array()), "question", array()), "html", null, true);
            echo "
                                                                                            </strong>
                                                                                        </td>
                                                                                    </tr>
                                                                                </table>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>
                                                                                <br>
                                                                                ";
            // line 2184
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entityEscudoSP"]) ? $context["entityEscudoSP"] : $this->getContext($context, "entityEscudoSP")), "escudospdetails", array()), 0, array(), "array"), "answer", array()), "html", null, true);
            echo "
                                                                            </td>
                                                                        </tr>
                                                                    </table>
                                                                    <br>
                                                                </td>
                                                                <td width=\"550px\" align=\"center\">
                                                                    <br>
                                                                    <table class=\"record_properties\">
                                                                        <tr >
                                                                            <td width=\"500px\" align=\"center\">
                                                                                <table class=\"record_properties\" border=\"2\"  cellpadding=\"6\"  cellspacing=\"0\">
                                                                                    <tr >
                                                                                        <td width=\"480px\" >
                                                                                            <strong>
                                                                                                ";
            // line 2199
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entityEscudoSP"]) ? $context["entityEscudoSP"] : $this->getContext($context, "entityEscudoSP")), "escudospdetails", array()), 1, array(), "array"), "escudodetail", array()), "question", array()), "html", null, true);
            echo "
                                                                                            </strong>
                                                                                        </td>
                                                                                    </tr>
                                                                                </table>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>
                                                                                <br>
                                                                                ";
            // line 2209
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entityEscudoSP"]) ? $context["entityEscudoSP"] : $this->getContext($context, "entityEscudoSP")), "escudospdetails", array()), 1, array(), "array"), "answer", array()), "html", null, true);
            echo "
                                                                            </td>
                                                                        </tr>
                                                                    </table>
                                                                    <br>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td align=\"center\">
                                                                    <br>
                                                                    <table class=\"record_properties\">
                                                                        <tr >
                                                                            <td width=\"500px\" align=\"center\">
                                                                                <table class=\"record_properties\" border=\"2\"  cellpadding=\"6\"  cellspacing=\"0\">
                                                                                    <tr >
                                                                                        <td width=\"480px\" >
                                                                                            <strong>
                                                                                                ";
            // line 2226
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entityEscudoSP"]) ? $context["entityEscudoSP"] : $this->getContext($context, "entityEscudoSP")), "escudospdetails", array()), 2, array(), "array"), "escudodetail", array()), "question", array()), "html", null, true);
            echo "
                                                                                            </strong>
                                                                                        </td>
                                                                                    </tr>
                                                                                </table>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>
                                                                                <br>
                                                                                ";
            // line 2236
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entityEscudoSP"]) ? $context["entityEscudoSP"] : $this->getContext($context, "entityEscudoSP")), "escudospdetails", array()), 2, array(), "array"), "answer", array()), "html", null, true);
            echo "
                                                                            </td>
                                                                        </tr>
                                                                    </table>
                                                                    <br>
                                                                </td>
                                                                <td align=\"center\">
                                                                    <br>
                                                                    <table class=\"record_properties\">
                                                                        <tr >
                                                                            <td width=\"500px\" align=\"center\">
                                                                                <table class=\"record_properties\" border=\"2\"  cellpadding=\"6\"  cellspacing=\"0\">
                                                                                    <tr >
                                                                                        <td width=\"480px\" >
                                                                                            <strong>
                                                                                                ";
            // line 2251
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entityEscudoSP"]) ? $context["entityEscudoSP"] : $this->getContext($context, "entityEscudoSP")), "escudospdetails", array()), 3, array(), "array"), "escudodetail", array()), "question", array()), "html", null, true);
            echo "
                                                                                            </strong>
                                                                                        </td>
                                                                                    </tr>
                                                                                </table>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>
                                                                                <br>
                                                                                ";
            // line 2261
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entityEscudoSP"]) ? $context["entityEscudoSP"] : $this->getContext($context, "entityEscudoSP")), "escudospdetails", array()), 3, array(), "array"), "answer", array()), "html", null, true);
            echo "
                                                                            </td>
                                                                        </tr>
                                                                    </table>
                                                                    <br>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td align=\"center\">
                                                                    <br>
                                                                    <table class=\"record_properties\">
                                                                        <tr >
                                                                            <td width=\"500px\" align=\"center\">
                                                                                <table class=\"record_properties\" border=\"2\" cellpadding=\"6\"  cellspacing=\"0\">
                                                                                    <tr >
                                                                                        <td width=\"480px\" >
                                                                                            <strong>
                                                                                                ";
            // line 2278
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entityEscudoSP"]) ? $context["entityEscudoSP"] : $this->getContext($context, "entityEscudoSP")), "escudospdetails", array()), 4, array(), "array"), "escudodetail", array()), "question", array()), "html", null, true);
            echo "
                                                                                            </strong>
                                                                                        </td>
                                                                                    </tr>
                                                                                </table>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>
                                                                                <br>
                                                                                ";
            // line 2288
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entityEscudoSP"]) ? $context["entityEscudoSP"] : $this->getContext($context, "entityEscudoSP")), "escudospdetails", array()), 4, array(), "array"), "answer", array()), "html", null, true);
            echo "
                                                                            </td>
                                                                        </tr>
                                                                    </table>
                                                                    <br>
                                                                </td>
                                                                <td align=\"center\">
                                                                    <br>
                                                                    <table class=\"record_properties\">
                                                                        <tr >
                                                                            <td width=\"500px\" align=\"center\">
                                                                                <table class=\"record_properties\" border=\"2\" cellpadding=\"6\"  cellspacing=\"0\">
                                                                                    <tr >
                                                                                        <td width=\"480px\" >
                                                                                            <strong>
                                                                                                ";
            // line 2303
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entityEscudoSP"]) ? $context["entityEscudoSP"] : $this->getContext($context, "entityEscudoSP")), "escudospdetails", array()), 5, array(), "array"), "escudodetail", array()), "question", array()), "html", null, true);
            echo "
                                                                                            </strong>
                                                                                        </td>
                                                                                    </tr>
                                                                                </table>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>
                                                                                <br>
                                                                                ";
            // line 2313
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entityEscudoSP"]) ? $context["entityEscudoSP"] : $this->getContext($context, "entityEscudoSP")), "escudospdetails", array()), 5, array(), "array"), "answer", array()), "html", null, true);
            echo "
                                                                            </td>
                                                                        </tr>
                                                                    </table>
                                                                    <br>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td align=\"center\">
                                                                    <br>
                                                                    <table class=\"record_properties\">
                                                                        <tr >
                                                                            <td width=\"500px\" align=\"center\">
                                                                                <table class=\"record_properties\" border=\"2\" cellpadding=\"6\"  cellspacing=\"0\">
                                                                                    <tr >
                                                                                        <td width=\"480px\" >
                                                                                            <strong>
                                                                                                ";
            // line 2330
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entityEscudoSP"]) ? $context["entityEscudoSP"] : $this->getContext($context, "entityEscudoSP")), "escudospdetails", array()), 6, array(), "array"), "escudodetail", array()), "question", array()), "html", null, true);
            echo "
                                                                                            </strong>
                                                                                        </td>
                                                                                    </tr>
                                                                                </table>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>
                                                                                <br>
                                                                                ";
            // line 2340
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entityEscudoSP"]) ? $context["entityEscudoSP"] : $this->getContext($context, "entityEscudoSP")), "escudospdetails", array()), 6, array(), "array"), "answer", array()), "html", null, true);
            echo "
                                                                            </td>
                                                                        </tr>
                                                                    </table>
                                                                    <br>
                                                                </td>
                                                                <td align=\"center\">
                                                                    <br>
                                                                    <table class=\"record_properties\">
                                                                        <tr >
                                                                            <td width=\"500px\" align=\"center\">
                                                                                <table class=\"record_properties\" border=\"2\" cellpadding=\"6\"  cellspacing=\"0\">
                                                                                    <tr >
                                                                                        <td width=\"480px\" >
                                                                                            <strong>
                                                                                                ";
            // line 2355
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entityEscudoSP"]) ? $context["entityEscudoSP"] : $this->getContext($context, "entityEscudoSP")), "escudospdetails", array()), 7, array(), "array"), "escudodetail", array()), "question", array()), "html", null, true);
            echo "
                                                                                            </strong>
                                                                                        </td>
                                                                                    </tr>
                                                                                </table>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>
                                                                                <br>
                                                                                ";
            // line 2365
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entityEscudoSP"]) ? $context["entityEscudoSP"] : $this->getContext($context, "entityEscudoSP")), "escudospdetails", array()), 7, array(), "array"), "answer", array()), "html", null, true);
            echo "
                                                                            </td>
                                                                        </tr>
                                                                    </table>
                                                                    <br>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td colspan=2 align=\"center\">
                                                                    <br>
                                                                    <table class=\"record_properties\">
                                                                        <tr >
                                                                            <td width=\"1000px\" align=\"center\">
                                                                                <table class=\"record_properties\" border=\"2\" cellpadding=\"6\"  cellspacing=\"0\">
                                                                                    <tr >
                                                                                        <td width=\"960px\" >
                                                                                            <strong>
                                                                                                ";
            // line 2382
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entityEscudoSP"]) ? $context["entityEscudoSP"] : $this->getContext($context, "entityEscudoSP")), "escudospdetails", array()), 8, array(), "array"), "escudodetail", array()), "question", array()), "html", null, true);
            echo "
                                                                                            </strong>
                                                                                        </td>
                                                                                    </tr>
                                                                                </table>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>
                                                                                <br>
                                                                                ";
            // line 2392
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entityEscudoSP"]) ? $context["entityEscudoSP"] : $this->getContext($context, "entityEscudoSP")), "escudospdetails", array()), 8, array(), "array"), "answer", array()), "html", null, true);
            echo "
                                                                            </td>
                                                                        </tr>
                                                                    </table>
                                                                    <br>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td colspan=2 align=\"center\">
                                                                    <br>
                                                                    <table class=\"record_properties\">
                                                                        <tr >
                                                                            <td width=\"1000px\" align=\"center\">
                                                                                <table class=\"record_properties\" border=\"2\" cellpadding=\"6\"  cellspacing=\"0\">
                                                                                    <tr >
                                                                                        <td width=\"960px\" >
                                                                                            <strong>
                                                                                                ";
            // line 2409
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entityEscudoSP"]) ? $context["entityEscudoSP"] : $this->getContext($context, "entityEscudoSP")), "escudospdetails", array()), 9, array(), "array"), "escudodetail", array()), "question", array()), "html", null, true);
            echo "
                                                                                            </strong>
                                                                                        </td>
                                                                                    </tr>
                                                                                </table>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>
                                                                                <br>
                                                                                ";
            // line 2419
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entityEscudoSP"]) ? $context["entityEscudoSP"] : $this->getContext($context, "entityEscudoSP")), "escudospdetails", array()), 9, array(), "array"), "answer", array()), "html", null, true);
            echo "
                                                                            </td>
                                                                        </tr>
                                                                    </table>
                                                                    <br>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td colspan=2 align=\"center\">
                                                                    <br>
                                                                    <table class=\"record_properties\">
                                                                        <tr >
                                                                            <td width=\"1000px\" align=\"center\">
                                                                                <table class=\"record_properties\" border=\"2\" cellpadding=\"6\"  cellspacing=\"0\">
                                                                                    <tr >
                                                                                        <td width=\"960px\" >
                                                                                            <strong>
                                                                                                ";
            // line 2436
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entityEscudoSP"]) ? $context["entityEscudoSP"] : $this->getContext($context, "entityEscudoSP")), "escudospdetails", array()), 10, array(), "array"), "escudodetail", array()), "question", array()), "html", null, true);
            echo "
                                                                                            </strong>
                                                                                        </td>
                                                                                    </tr>
                                                                                </table>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>
                                                                                <br>
                                                                                ";
            // line 2446
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entityEscudoSP"]) ? $context["entityEscudoSP"] : $this->getContext($context, "entityEscudoSP")), "escudospdetails", array()), 10, array(), "array"), "answer", array()), "html", null, true);
            echo "
                                                                            </td>
                                                                        </tr>
                                                                    </table>
                                                                    <br>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td align=\"center\">
                                                                    <br>
                                                                    <table class=\"record_properties\">
                                                                        <tr >
                                                                            <td width=\"500px\" align=\"center\">
                                                                                <table class=\"record_properties\" border=\"2\" cellpadding=\"6\"  cellspacing=\"0\">
                                                                                    <tr >
                                                                                        <td width=\"480px\" >
                                                                                            <strong>
                                                                                                ";
            // line 2463
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entityEscudoSP"]) ? $context["entityEscudoSP"] : $this->getContext($context, "entityEscudoSP")), "escudospdetails", array()), 11, array(), "array"), "escudodetail", array()), "question", array()), "html", null, true);
            echo "
                                                                                            </strong>
                                                                                        </td>
                                                                                    </tr>
                                                                                </table>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>
                                                                                <br>
                                                                                ";
            // line 2473
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entityEscudoSP"]) ? $context["entityEscudoSP"] : $this->getContext($context, "entityEscudoSP")), "escudospdetails", array()), 11, array(), "array"), "answer", array()), "html", null, true);
            echo "
                                                                            </td>
                                                                        </tr>
                                                                    </table>
                                                                    <br>
                                                                </td>
                                                                <td align=\"center\">
                                                                    <br>
                                                                    <table class=\"record_properties\">
                                                                        <tr >
                                                                            <td width=\"500px\" align=\"center\">
                                                                                <table class=\"record_properties\" border=\"2\" cellpadding=\"6\"  cellspacing=\"0\">
                                                                                    <tr >
                                                                                        <td width=\"480px\" >
                                                                                            <strong>
                                                                                                ";
            // line 2488
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entityEscudoSP"]) ? $context["entityEscudoSP"] : $this->getContext($context, "entityEscudoSP")), "escudospdetails", array()), 12, array(), "array"), "escudodetail", array()), "question", array()), "html", null, true);
            echo "
                                                                                            </strong>
                                                                                        </td>
                                                                                    </tr>
                                                                                </table>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>
                                                                                <br>
                                                                                ";
            // line 2498
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entityEscudoSP"]) ? $context["entityEscudoSP"] : $this->getContext($context, "entityEscudoSP")), "escudospdetails", array()), 12, array(), "array"), "answer", array()), "html", null, true);
            echo "
                                                                            </td>
                                                                        </tr>
                                                                    </table>
                                                                    <br>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td align=\"center\">
                                                                    <br>
                                                                    <table class=\"record_properties\">
                                                                        <tr >
                                                                            <td width=\"500px\" align=\"center\">
                                                                                <table class=\"record_properties\" border=\"2\" cellpadding=\"6\"  cellspacing=\"0\">
                                                                                    <tr >
                                                                                        <td width=\"480px\" >
                                                                                            <strong>
                                                                                                ";
            // line 2515
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entityEscudoSP"]) ? $context["entityEscudoSP"] : $this->getContext($context, "entityEscudoSP")), "escudospdetails", array()), 13, array(), "array"), "escudodetail", array()), "question", array()), "html", null, true);
            echo "
                                                                                            </strong>
                                                                                        </td>
                                                                                    </tr>
                                                                                </table>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>
                                                                                <br>
                                                                                ";
            // line 2525
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entityEscudoSP"]) ? $context["entityEscudoSP"] : $this->getContext($context, "entityEscudoSP")), "escudospdetails", array()), 13, array(), "array"), "answer", array()), "html", null, true);
            echo "
                                                                            </td>
                                                                        </tr>
                                                                    </table>
                                                                    <br>
                                                                </td>
                                                                <td align=\"center\">
                                                                    <br>
                                                                    <table class=\"record_properties\">
                                                                        <tr >
                                                                            <td width=\"500px\" align=\"center\">
                                                                                <table class=\"record_properties\" border=\"2\" cellpadding=\"6\"  cellspacing=\"0\">
                                                                                    <tr >
                                                                                        <td width=\"480px\" >
                                                                                            <strong>
                                                                                                ";
            // line 2540
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entityEscudoSP"]) ? $context["entityEscudoSP"] : $this->getContext($context, "entityEscudoSP")), "escudospdetails", array()), 14, array(), "array"), "escudodetail", array()), "question", array()), "html", null, true);
            echo "
                                                                                            </strong>
                                                                                        </td>
                                                                                    </tr>
                                                                                </table>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>
                                                                                <br>
                                                                                ";
            // line 2550
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entityEscudoSP"]) ? $context["entityEscudoSP"] : $this->getContext($context, "entityEscudoSP")), "escudospdetails", array()), 14, array(), "array"), "answer", array()), "html", null, true);
            echo "
                                                                            </td>
                                                                        </tr>
                                                                    </table>
                                                                    <br>
                                                                </td>
                                                            </tr>
                                                        </table>
                                                    </div>
                                                </td>
                                            </tr>
                                            <!--
                                            <tr> 
                                                <td width=\"40px\" ></td>
                                                <td colspan=2 >
                                                    <h5>
                                                        Comentario adicional
                                                    </h5>
                                                </td>
                                            </tr>
                                            <tr> 
                                                <td width=\"40px\" ></td>
                                                <td colspan=2 >";
            // line 2572
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "commentESC", array()), 'widget');
            echo "</td>
                                            </tr>
                                            -->
                                        ";
        }
        // line 2576
        echo "                                        
                                        ";
        // line 2577
        if ((isset($context["validarRavenSP"]) ? $context["validarRavenSP"] : $this->getContext($context, "validarRavenSP"))) {
            // line 2578
            echo "                                            <tr> 
                                                <td width=\"40px\" ></td>
                                                <th colspan=2 height=\"20px\"></th>
                                            </tr>
                                        
                                            <tr>
                                                <td width=\"40px\" ></td>
                                                <td colspan=2 >
                                                    <div class=\"span11\">
                                                        <legend>Resultado de la prueba Raven</legend>
                                                        <table class=\"record_properties\" border=\"0\"  bordercolor=\"#C2C2C2\">
                                                            <tr>
                                                                <td>
                                                                    <strong>Resultado :</strong>

                                                                    rango: ";
            // line 2593
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entityRavenSP"]) ? $context["entityRavenSP"] : $this->getContext($context, "entityRavenSP")), "rango", array()), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entityRavenSP"]) ? $context["entityRavenSP"] : $this->getContext($context, "entityRavenSP")), "descRango", array()), "html", null, true);
            echo "
                                                                </td>
                                                            </tr>
                                                        </table>
                                                    </div>
                                                </td>
                                            </tr>
                                        ";
        }
        // line 2601
        echo "                                        
                                        <tr> 
                                            <td width=\"40px\" ></td>
                                            <th colspan=2 height=\"10px\"></th>
                                        </tr>
                                        <tr> 
                                            <td width=\"40px\" ></td>
                                            <td colspan=2 >
                                                <div class=\"span11\">
                                                    <legend>Cuestionario</legend>
                                                    <table class=\"table table-striped\">
                                                        <thead>
                                                            <tr>
                                                                <th class=\"span7\">Preguntas</th>
                                                                <th class=\"span5\">Comentarios</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            ";
        // line 2619
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listaVirtualInterSPC"]) ? $context["listaVirtualInterSPC"] : $this->getContext($context, "listaVirtualInterSPC")));
        foreach ($context['_seq'] as $context["_key"] => $context["VirtualInterSPC"]) {
            // line 2620
            echo "                                                                <tr>
                                                                    <td class=\"span7\">
                                                                        ";
            // line 2622
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["VirtualInterSPC"], "VirtualInterviewQuestion", array()), "question", array()), "html", null, true);
            echo "
                                                                    </td>
                                                                    <td class=\"span5\">
                                                                        ";
            // line 2625
            echo twig_escape_filter($this->env, $this->getAttribute($context["VirtualInterSPC"], "answer", array()), "html", null, true);
            echo "
                                                                    </td>
                                                                </tr>
                                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['VirtualInterSPC'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 2629
        echo "                                                        </tbody>
                                                    </table>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr> 
                                            <td width=\"40px\" ></td>
                                            <th colspan=2 height=\"10px\"></th>
                                        </tr>
                                        <tr> 
                                            <td width=\"40px\" ></td>
                                            <td colspan=2 align=\"right\">
                                                <div class=\"span11\">
                                                    <h4>
                                                        DATOS COMPLEMENTARIOS
                                                    </h4>
                                                </div>
                                            </td>
                                        </tr>
            
                                        <tr>
                                            <td width=\"40px\" ></td>
                                            <td colspan=2 >
                                                <div class=\"span11\">
                                                    
                                                    <table class=\"record_properties\" border=\"0\">
                                                        <tr>
                                                            <td align=\"left\" width=\"1100px\" height=\"50px\">
                                                                <strong>Estructura Salarial Reciente :</strong>
                                                            </td>
                                                            
                                                        </tr>
                                                        <tr>
                                                            <td align=\"left\" width=\"1100px\">
                                                                <div class=\"span1\"></div>
                                                                <strong>Última o actual remuneración mensual bruta : </strong>
                                                                ";
        // line 2665
        echo twig_escape_filter($this->env, (isset($context["IL_ER_UltRem"]) ? $context["IL_ER_UltRem"] : $this->getContext($context, "IL_ER_UltRem")), "html", null, true);
        echo "
                                                            </td>
                                                            
                                                        </tr>
                                                        <tr>
                                                            <td align=\"left\" >
                                                                <div class=\"span1\"></div>
                                                                <strong>Número de sueldos recibidos al año : </strong>
                                                                ";
        // line 2673
        echo twig_escape_filter($this->env, (isset($context["IL_ER_NumSuel"]) ? $context["IL_ER_NumSuel"] : $this->getContext($context, "IL_ER_NumSuel")), "html", null, true);
        echo "
                                                            </td>
                                                            
                                                        </tr>
                                                        <tr>
                                                            <td align=\"left\">
                                                                <div class=\"span1\"></div>
                                                                <strong>Bono : </strong>
                                                                ";
        // line 2681
        echo twig_escape_filter($this->env, (isset($context["IL_ER_Bono"]) ? $context["IL_ER_Bono"] : $this->getContext($context, "IL_ER_Bono")), "html", null, true);
        echo "
                                                            </td>
                                                            
                                                        </tr>
                                                        <tr>
                                                            <td align=\"left\" >
                                                                <div class=\"span1\"></div>
                                                                <strong>Utilidades : </strong>
                                                                ";
        // line 2689
        echo twig_escape_filter($this->env, (isset($context["IL_ER_Utilida"]) ? $context["IL_ER_Utilida"] : $this->getContext($context, "IL_ER_Utilida")), "html", null, true);
        echo "
                                                            </td>
                                                            
                                                        </tr>
                                                        <tr>
                                                            <td align=\"left\" >
                                                                <div class=\"span1\"></div>
                                                                <strong>Variable : </strong>
                                                                ";
        // line 2697
        echo twig_escape_filter($this->env, (isset($context["IL_ER_Variable"]) ? $context["IL_ER_Variable"] : $this->getContext($context, "IL_ER_Variable")), "html", null, true);
        echo "
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td align=\"left\" width=\"1100px\">
                                                                <br>
                                                                <strong>Expectativas Salariales : </strong>
                                                                ";
        // line 2704
        echo twig_escape_filter($this->env, (isset($context["IL_ER_Expectativa"]) ? $context["IL_ER_Expectativa"] : $this->getContext($context, "IL_ER_Expectativa")), "html", null, true);
        echo "
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </div>
                                            </td>
                                        </tr>
                                        
                                        
                                        <tr> 
                                            <td width=\"40px\" ></td>
                                            <th colspan=2 height=\"10px\"></th>
                                        </tr>
                                        <tr> 
                                            <td width=\"40px\" ></td>
                                            <td colspan=2 align=\"right\">
                                                <div class=\"span11\">
                                                    <h4>
                                                        CONCLUSIONES
                                                    </h4>
                                                </div>
                                            </td>
                                        </tr>
                                        <!--
                                        <tr> 
                                            <td width=\"40px\" ></td>
                                            <td colspan=2 >
                                                <strong>
                                                FORTALEZAS:
                                                </strong>
                                            </td>
                                        </tr>
                                        <tr> 
                                            <td width=\"40px\" ></td>
                                            <td colspan=2 >";
        // line 2738
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "strengths", array()), 'widget');
        echo "</td>
                                        </tr>
                                        <tr> 
                                            <td width=\"40px\" ></td>
                                            <th colspan=2 height=\"10px\"></th>
                                        </tr>
                                        <tr> 
                                            <td width=\"40px\" ></td>
                                            <td colspan=2 >
                                                <strong>
                                                OPORTUNIDADES DE MEJORA:
                                                </strong>
                                            </td>
                                        </tr>
                                        <tr> 
                                            <td width=\"40px\" ></td>
                                            <td colspan=2 >";
        // line 2754
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "improvementOpportunities", array()), 'widget');
        echo "</td>
                                        </tr>
                                        <tr> 
                                            <td width=\"40px\" ></td>
                                            <th colspan=2 height=\"10px\"></th>
                                        </tr>
                                        -->
                                        <tr> 
                                            <td width=\"40px\" ></td>
                                            <td colspan=2 >
                                                <strong>
                                                Observaciones:
                                                </strong>
                                            </td>
                                        </tr>
                                        <tr> 
                                            <td width=\"40px\" ></td>
                                            <td colspan=2 >";
        // line 2771
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "recommendation", array()), 'widget');
        echo "</td>
                                        </tr>
                                        <tr> 
                                            <td width=\"40px\" ></td>
                                            <th colspan=2 height=\"20px\"></th>
                                        </tr>
                                        <tr> 
                                            <td width=\"40px\" ></td>
                                            <td width=\"180px\">
                                                <strong>
                                                    Resultado final:
                                                </strong>
                                            </td>
                                            <td width=\"920px\">";
        // line 2784
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "finalResult", array()), 'widget');
        echo "</td>
                                        </tr>
                                        <tr> 
                                            <td width=\"40px\" ></td>
                                            <th colspan=2 height=\"10px\"></th>
                                        </tr>
                                        <tr> 
                                            <td width=\"40px\" ></td>
                                            <td colspan=2 >
                                                <div class=\"span1\"></div>
                                                <div class=\"span9\">
                                                    <table class=\"record_properties\" border=\"1\">
                                                        <tr>
                                                            <td>
                                                                <strong>Recomendable. </strong>
                                                                Cumple la mayor parte de las características requeridas por el cliente para el cargo. Esto puede anticipar un desenvolvimiento adecuado en las funciones y tareas que deberá asumir.
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <strong>Recomendable con observaciones. </strong>
                                                                Posee buena parte de las características para el cargo y las demás pueden ser desarrolladas en el puesto de trabajo; se visualiza potencial para superar las oportunidades de mejora.
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <strong>No recomendable. </strong>
                                                                El postulante no presenta el perfil concordante con los requisitos del cargo y de la organización. Puede presentar indicadores que dificulten su adaptación y/o desempeño a la organización y al cargo.
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </div>
                                                <div class=\"span3\"></div>
                                            </td>
                                        </tr>
                                        <tr> 
                                            <td width=\"40px\" ></td>
                                            <th colspan=2 height=\"10px\"></th>
                                        </tr>
                                        
                                        <tr> 
                                            <td width=\"40px\" ></td>
                                            <td colspan=2 >";
        // line 2826
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "guardar", array()), 'widget');
        echo "</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </fieldset>
                        <!--";
        // line 2832
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "commentGTB", array()), 'widget');
        echo "-->
                        <!--";
        // line 2833
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "commentPMA", array()), 'widget');
        echo "-->
                        <!--";
        // line 2834
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "commentICE", array()), 'widget');
        echo "-->
                        <!--";
        // line 2835
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "commentESC", array()), 'widget');
        echo "-->
                    ";
        // line 2836
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
                    
                </div>
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
        return "SeleccionProcesBundle:ResultSPC:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  3839 => 2836,  3835 => 2835,  3831 => 2834,  3827 => 2833,  3823 => 2832,  3814 => 2826,  3769 => 2784,  3753 => 2771,  3733 => 2754,  3714 => 2738,  3677 => 2704,  3667 => 2697,  3656 => 2689,  3645 => 2681,  3634 => 2673,  3623 => 2665,  3585 => 2629,  3575 => 2625,  3569 => 2622,  3565 => 2620,  3561 => 2619,  3541 => 2601,  3528 => 2593,  3511 => 2578,  3509 => 2577,  3506 => 2576,  3499 => 2572,  3474 => 2550,  3461 => 2540,  3443 => 2525,  3430 => 2515,  3410 => 2498,  3397 => 2488,  3379 => 2473,  3366 => 2463,  3346 => 2446,  3333 => 2436,  3313 => 2419,  3300 => 2409,  3280 => 2392,  3267 => 2382,  3247 => 2365,  3234 => 2355,  3216 => 2340,  3203 => 2330,  3183 => 2313,  3170 => 2303,  3152 => 2288,  3139 => 2278,  3119 => 2261,  3106 => 2251,  3088 => 2236,  3075 => 2226,  3055 => 2209,  3042 => 2199,  3024 => 2184,  3011 => 2174,  2993 => 2158,  2991 => 2157,  2983 => 2151,  2976 => 2147,  2953 => 2127,  2874 => 2052,  2872 => 2051,  2862 => 2044,  2851 => 2036,  2824 => 2013,  2822 => 2012,  2812 => 2005,  2801 => 1997,  2741 => 1940,  2665 => 1868,  2663 => 1867,  2653 => 1860,  2642 => 1852,  2615 => 1829,  2613 => 1828,  2603 => 1821,  2592 => 1813,  2532 => 1756,  2456 => 1684,  2454 => 1683,  2444 => 1676,  2433 => 1668,  2406 => 1645,  2404 => 1644,  2394 => 1637,  2383 => 1629,  2356 => 1606,  2354 => 1605,  2344 => 1598,  2333 => 1590,  2273 => 1533,  2197 => 1461,  2195 => 1460,  2185 => 1453,  2174 => 1445,  2147 => 1422,  2145 => 1421,  2135 => 1414,  2125 => 1407,  2108 => 1393,  2090 => 1379,  2088 => 1378,  2078 => 1371,  2015 => 1311,  1939 => 1239,  1937 => 1238,  1927 => 1231,  1919 => 1226,  1893 => 1204,  1891 => 1203,  1881 => 1196,  1873 => 1191,  1847 => 1169,  1845 => 1168,  1835 => 1161,  1827 => 1156,  1801 => 1134,  1799 => 1133,  1789 => 1126,  1781 => 1121,  1755 => 1099,  1753 => 1098,  1743 => 1091,  1680 => 1031,  1659 => 1012,  1657 => 1011,  1649 => 1005,  1642 => 1001,  1622 => 983,  1616 => 981,  1610 => 979,  1604 => 977,  1598 => 975,  1592 => 973,  1586 => 971,  1580 => 969,  1577 => 968,  1575 => 967,  1557 => 951,  1553 => 949,  1547 => 947,  1541 => 945,  1535 => 943,  1529 => 941,  1523 => 939,  1517 => 937,  1511 => 935,  1505 => 933,  1499 => 931,  1496 => 930,  1494 => 929,  1479 => 916,  1475 => 914,  1469 => 912,  1463 => 910,  1457 => 908,  1451 => 906,  1445 => 904,  1439 => 902,  1433 => 900,  1427 => 898,  1421 => 896,  1418 => 895,  1416 => 894,  1401 => 881,  1397 => 879,  1391 => 877,  1385 => 875,  1379 => 873,  1373 => 871,  1367 => 869,  1361 => 867,  1355 => 865,  1349 => 863,  1343 => 861,  1340 => 860,  1338 => 859,  1323 => 846,  1319 => 844,  1313 => 842,  1307 => 840,  1301 => 838,  1295 => 836,  1289 => 834,  1283 => 832,  1277 => 830,  1271 => 828,  1265 => 826,  1262 => 825,  1260 => 824,  1245 => 811,  1239 => 809,  1233 => 807,  1227 => 805,  1221 => 803,  1215 => 801,  1209 => 799,  1203 => 797,  1197 => 795,  1191 => 793,  1185 => 791,  1182 => 790,  1180 => 789,  1162 => 773,  1160 => 772,  1150 => 764,  1143 => 760,  1122 => 741,  1116 => 739,  1110 => 737,  1104 => 735,  1098 => 733,  1092 => 731,  1086 => 729,  1083 => 728,  1081 => 727,  1066 => 714,  1060 => 712,  1054 => 710,  1048 => 708,  1042 => 706,  1036 => 704,  1030 => 702,  1027 => 701,  1025 => 700,  1010 => 687,  1004 => 685,  998 => 683,  992 => 681,  986 => 679,  980 => 677,  974 => 675,  971 => 674,  969 => 673,  954 => 660,  948 => 658,  942 => 656,  936 => 654,  930 => 652,  924 => 650,  918 => 648,  915 => 647,  913 => 646,  898 => 633,  892 => 631,  886 => 629,  880 => 627,  874 => 625,  868 => 623,  862 => 621,  859 => 620,  857 => 619,  839 => 603,  837 => 602,  810 => 577,  802 => 572,  787 => 560,  772 => 548,  762 => 540,  760 => 539,  757 => 538,  749 => 533,  734 => 521,  719 => 509,  709 => 501,  707 => 500,  704 => 499,  696 => 494,  681 => 482,  666 => 470,  656 => 462,  654 => 461,  629 => 438,  620 => 435,  616 => 433,  612 => 431,  610 => 430,  607 => 429,  602 => 426,  594 => 421,  578 => 408,  555 => 387,  553 => 386,  550 => 385,  542 => 380,  526 => 367,  503 => 346,  501 => 345,  498 => 344,  490 => 339,  474 => 326,  451 => 305,  449 => 304,  446 => 303,  438 => 298,  422 => 285,  399 => 264,  397 => 263,  394 => 262,  386 => 257,  370 => 244,  347 => 223,  345 => 222,  342 => 221,  334 => 216,  318 => 203,  295 => 182,  293 => 181,  290 => 180,  282 => 175,  266 => 162,  243 => 141,  241 => 140,  233 => 135,  221 => 125,  218 => 124,  212 => 122,  208 => 120,  206 => 119,  199 => 116,  195 => 114,  193 => 113,  189 => 112,  186 => 111,  183 => 110,  180 => 109,  177 => 108,  175 => 107,  159 => 94,  145 => 83,  133 => 73,  131 => 72,  107 => 50,  103 => 48,  97 => 46,  95 => 45,  65 => 18,  61 => 17,  53 => 12,  45 => 6,  42 => 5,  36 => 3,  30 => 2,);
    }
}
