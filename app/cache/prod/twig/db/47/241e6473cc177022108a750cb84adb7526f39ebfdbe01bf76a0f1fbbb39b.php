<?php

/* SeleccionProcesBundle:ResultSPC:show.html.twig */
class __TwigTemplate_db47241e6473cc177022108a750cb84adb7526f39ebfdbe01bf76a0f1fbbb39b extends Twig_Template
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
        echo "Impresión";
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
                <h1>
                <a target='_parent' href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sp_candidato_result_print", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\">
                    ";
        // line 14
        $this->displayBlock("title", $context, $blocks);
        echo "
                </a>
                </h1>
                <div class=\"row-fluid\">    
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
        // line 43
        if ((isset($context["validarDatosPersonales"]) ? $context["validarDatosPersonales"] : $this->getContext($context, "validarDatosPersonales"))) {
            // line 44
            echo "                                                            ( ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entityRegisterDefinitionRol"]) ? $context["entityRegisterDefinitionRol"] : $this->getContext($context, "entityRegisterDefinitionRol")), "rol", array()), "name", array()), "html", null, true);
            echo " )
                                                        ";
        } else {
            // line 46
            echo "                                                            No se registró perfil de cargo.
                                                        ";
        }
        // line 48
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
        // line 70
        if ((isset($context["validarDatosPersonales"]) ? $context["validarDatosPersonales"] : $this->getContext($context, "validarDatosPersonales"))) {
            // line 71
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
            // line 81
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
            // line 92
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
                                                                        <!--";
            // line 105
            echo twig_escape_filter($this->env, (isset($context["DGFecNac"]) ? $context["DGFecNac"] : $this->getContext($context, "DGFecNac")), "html", null, true);
            echo "-->
                                                                        ";
            // line 106
            $context["dateList"] = twig_split_filter($this->env, (isset($context["DGFecNac"]) ? $context["DGFecNac"] : $this->getContext($context, "DGFecNac")), "/");
            // line 107
            echo "                                                                        ";
            $context["cDGFecNac"] = (((($this->getAttribute((isset($context["dateList"]) ? $context["dateList"] : $this->getContext($context, "dateList")), 1, array(), "array") . "/") . $this->getAttribute((isset($context["dateList"]) ? $context["dateList"] : $this->getContext($context, "dateList")), 0, array(), "array")) . "/") . $this->getAttribute((isset($context["dateList"]) ? $context["dateList"] : $this->getContext($context, "dateList")), 2, array(), "array"));
            // line 108
            echo "                                                                        ";
            $context["dFecNac"] = twig_date_converter($this->env, (isset($context["cDGFecNac"]) ? $context["cDGFecNac"] : $this->getContext($context, "cDGFecNac")));
            // line 109
            echo "                                                                        ";
            if (($this->env->getExtension('extension_jaxxes')->ageCalculate((isset($context["dFecNac"]) ? $context["dFecNac"] : $this->getContext($context, "dFecNac"))) <= 0)) {
                // line 110
                echo "                                                                            No se ingresó correctamente la fecha de nacimiento.
                                                                        ";
            } else {
                // line 112
                echo "                                                                            ";
                echo twig_escape_filter($this->env, $this->env->getExtension('extension_jaxxes')->ageCalculate((isset($context["dFecNac"]) ? $context["dFecNac"] : $this->getContext($context, "dFecNac"))), "html", null, true);
                echo " años
                                                                        ";
            }
            // line 114
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
            // line 124
            echo twig_escape_filter($this->env, (isset($context["DGEstCiv"]) ? $context["DGEstCiv"] : $this->getContext($context, "DGEstCiv")), "html", null, true);
            echo "
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            
                                                            ";
            // line 129
            if ((isset($context["validarED_Mae"]) ? $context["validarED_Mae"] : $this->getContext($context, "validarED_Mae"))) {
                // line 130
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
                // line 151
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
                // line 164
                echo twig_escape_filter($this->env, (isset($context["ED_Mae_Especialidad"]) ? $context["ED_Mae_Especialidad"] : $this->getContext($context, "ED_Mae_Especialidad")), "html", null, true);
                echo "
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                            ";
            }
            // line 169
            echo "                                                            
                                                            ";
            // line 170
            if ((isset($context["validarED_Mae2"]) ? $context["validarED_Mae2"] : $this->getContext($context, "validarED_Mae2"))) {
                // line 171
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
                // line 192
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
                // line 205
                echo twig_escape_filter($this->env, (isset($context["ED_Mae_Especialidad2"]) ? $context["ED_Mae_Especialidad2"] : $this->getContext($context, "ED_Mae_Especialidad2")), "html", null, true);
                echo "
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                            ";
            }
            // line 210
            echo "                                                            
                                                            ";
            // line 211
            if ((isset($context["validarED_Unv"]) ? $context["validarED_Unv"] : $this->getContext($context, "validarED_Unv"))) {
                // line 212
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
                // line 233
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
                // line 246
                echo twig_escape_filter($this->env, (isset($context["ED_Unv_Especialidad"]) ? $context["ED_Unv_Especialidad"] : $this->getContext($context, "ED_Unv_Especialidad")), "html", null, true);
                echo "
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                            ";
            }
            // line 251
            echo "                                                            
                                                            ";
            // line 252
            if ((isset($context["validarED_Unv2"]) ? $context["validarED_Unv2"] : $this->getContext($context, "validarED_Unv2"))) {
                // line 253
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
                // line 274
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
                // line 287
                echo twig_escape_filter($this->env, (isset($context["ED_Unv_Especialidad2"]) ? $context["ED_Unv_Especialidad2"] : $this->getContext($context, "ED_Unv_Especialidad2")), "html", null, true);
                echo "
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                            ";
            }
            // line 292
            echo "                                                            
                                                            ";
            // line 293
            if ((isset($context["validarED_Tec"]) ? $context["validarED_Tec"] : $this->getContext($context, "validarED_Tec"))) {
                // line 294
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
                // line 315
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
                // line 328
                echo twig_escape_filter($this->env, (isset($context["ED_Tec_Especialidad"]) ? $context["ED_Tec_Especialidad"] : $this->getContext($context, "ED_Tec_Especialidad")), "html", null, true);
                echo "
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                            ";
            }
            // line 333
            echo "                                                            
                                                            ";
            // line 334
            if ((isset($context["validarED_Otr"]) ? $context["validarED_Otr"] : $this->getContext($context, "validarED_Otr"))) {
                // line 335
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
                // line 356
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
                // line 369
                echo twig_escape_filter($this->env, (isset($context["ED_Otr_Especialidad"]) ? $context["ED_Otr_Especialidad"] : $this->getContext($context, "ED_Otr_Especialidad")), "html", null, true);
                echo "
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                            ";
            }
            // line 374
            echo "                                                            
                                                            ";
            // line 375
            if ((isset($context["validarED_Esc"]) ? $context["validarED_Esc"] : $this->getContext($context, "validarED_Esc"))) {
                // line 376
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
                // line 397
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
                // line 410
                echo twig_escape_filter($this->env, (isset($context["ED_Esc_Especialidad"]) ? $context["ED_Esc_Especialidad"] : $this->getContext($context, "ED_Esc_Especialidad")), "html", null, true);
                echo "
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                            ";
            }
            // line 415
            echo "                                                            
                                                        </table>
                                                    ";
        } else {
            // line 418
            echo "                                                        <h5>
                                                            ";
            // line 419
            if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "selectionProcessCandidate", array()), "candidate", array()), "gender", array()) == "m")) {
                // line 420
                echo "                                                                El candidato 
                                                            ";
            } else {
                // line 422
                echo "                                                                La candidata 
                                                            ";
            }
            // line 424
            echo "                                                            ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "selectionProcessCandidate", array()), "candidate", array()), "firstName", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "selectionProcessCandidate", array()), "candidate", array()), "lastName", array()), "html", null, true);
            echo " no registró su perfil de candidato.
                                                        </h5>
                                                    ";
        }
        // line 427
        echo "                                                        
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
        // line 451
        if ((isset($context["validarIL_UlTra"]) ? $context["validarIL_UlTra"] : $this->getContext($context, "validarIL_UlTra"))) {
            // line 452
            echo "                                                            <tr>
                                                                <td align=\"left\" width=\"400px\">
                                                                    <div class=\"span1\"></div>
                                                                    <strong>Nombre de la Empresa </strong>
                                                                </td>
                                                                <td width=\"700px\">
                                                                    <div class=\"span1\"></div>
                                                                    <div class=\"span11\">
                                                                        ";
            // line 460
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
            // line 472
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
                                                                    <div class=\"span11\">
                                                                        ";
            // line 484
            echo twig_escape_filter($this->env, (isset($context["IL_UlTra_Motivo"]) ? $context["IL_UlTra_Motivo"] : $this->getContext($context, "IL_UlTra_Motivo")), "html", null, true);
            echo "
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                        ";
        }
        // line 489
        echo "                                                        
                                                        ";
        // line 490
        if ((isset($context["validarIL_UlTra2"]) ? $context["validarIL_UlTra2"] : $this->getContext($context, "validarIL_UlTra2"))) {
            // line 491
            echo "                                                            <tr>
                                                                <td align=\"left\" width=\"400px\">
                                                                    <div class=\"span1\"></div>
                                                                    <strong>Nombre de la Empresa </strong>
                                                                </td>
                                                                <td width=\"700px\">
                                                                    <div class=\"span1\"></div>
                                                                    <div class=\"span11\">
                                                                        ";
            // line 499
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
            // line 511
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
            // line 523
            echo twig_escape_filter($this->env, (isset($context["IL_UlTra2_Motivo"]) ? $context["IL_UlTra2_Motivo"] : $this->getContext($context, "IL_UlTra2_Motivo")), "html", null, true);
            echo "
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                        ";
        }
        // line 528
        echo "                                                        
                                                        ";
        // line 529
        if ((isset($context["validarIL_UlTra3"]) ? $context["validarIL_UlTra3"] : $this->getContext($context, "validarIL_UlTra3"))) {
            // line 530
            echo "                                                            <tr>
                                                                <td align=\"left\" width=\"400px\">
                                                                    <div class=\"span1\"></div>
                                                                    <strong>Nombre de la Empresa </strong>
                                                                </td>
                                                                <td width=\"700px\">
                                                                    <div class=\"span1\"></div>
                                                                    <div class=\"span11\">
                                                                        ";
            // line 538
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
            // line 550
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
            // line 562
            echo twig_escape_filter($this->env, (isset($context["IL_UlTra3_Motivo"]) ? $context["IL_UlTra3_Motivo"] : $this->getContext($context, "IL_UlTra3_Motivo")), "html", null, true);
            echo "
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                        ";
        }
        // line 567
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
        // line 592
        if ((isset($context["validarGatbSP"]) ? $context["validarGatbSP"] : $this->getContext($context, "validarGatbSP"))) {
            // line 593
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
            // line 609
            $context["general"] = ((($this->getAttribute((isset($context["entityGatbSP"]) ? $context["entityGatbSP"] : $this->getContext($context, "entityGatbSP")), "valorG3", array()) + $this->getAttribute((isset($context["entityGatbSP"]) ? $context["entityGatbSP"] : $this->getContext($context, "entityGatbSP")), "valorG4", array())) + $this->getAttribute((isset($context["entityGatbSP"]) ? $context["entityGatbSP"] : $this->getContext($context, "entityGatbSP")), "valorG5", array())) + 6);
            // line 610
            echo "                                                                        ";
            if ((((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) >= 0) && ((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) < 81))) {
                // line 611
                echo "                                                                            Inferior ( ";
                echo twig_escape_filter($this->env, (isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")), "html", null, true);
                echo " puntos)
                                                                        ";
            } elseif ((((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) > 80) && ((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) < 95))) {
                // line 613
                echo "                                                                            Normal Inferior ( ";
                echo twig_escape_filter($this->env, (isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")), "html", null, true);
                echo " puntos)
                                                                        ";
            } elseif ((((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) > 94) && ((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) < 106))) {
                // line 615
                echo "                                                                            Normal ( ";
                echo twig_escape_filter($this->env, (isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")), "html", null, true);
                echo " puntos)
                                                                        ";
            } elseif ((((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) > 105) && ((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) < 121))) {
                // line 617
                echo "                                                                            Normal Superior ( ";
                echo twig_escape_filter($this->env, (isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")), "html", null, true);
                echo " puntos)
                                                                        ";
            } elseif ((((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) > 120) && ((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) < 135))) {
                // line 619
                echo "                                                                            Superior ( ";
                echo twig_escape_filter($this->env, (isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")), "html", null, true);
                echo " puntos)
                                                                        ";
            } else {
                // line 621
                echo "                                                                            Muy Superior ( ";
                echo twig_escape_filter($this->env, (isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")), "html", null, true);
                echo " puntos)
                                                                        ";
            }
            // line 623
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
            // line 636
            $context["general"] = ($this->getAttribute((isset($context["entityGatbSP"]) ? $context["entityGatbSP"] : $this->getContext($context, "entityGatbSP")), "valorV", array()) + 6);
            // line 637
            echo "                                                                        ";
            if ((((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) >= 0) && ((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) < 81))) {
                // line 638
                echo "                                                                            Inferior ( ";
                echo twig_escape_filter($this->env, (isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")), "html", null, true);
                echo " puntos)
                                                                        ";
            } elseif ((((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) > 80) && ((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) < 95))) {
                // line 640
                echo "                                                                            Normal Inferior ( ";
                echo twig_escape_filter($this->env, (isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")), "html", null, true);
                echo " puntos)
                                                                        ";
            } elseif ((((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) > 94) && ((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) < 106))) {
                // line 642
                echo "                                                                            Normal ( ";
                echo twig_escape_filter($this->env, (isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")), "html", null, true);
                echo " puntos)
                                                                        ";
            } elseif ((((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) > 105) && ((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) < 121))) {
                // line 644
                echo "                                                                            Normal Superior ( ";
                echo twig_escape_filter($this->env, (isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")), "html", null, true);
                echo " puntos)
                                                                        ";
            } elseif ((((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) > 120) && ((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) < 135))) {
                // line 646
                echo "                                                                            Superior ( ";
                echo twig_escape_filter($this->env, (isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")), "html", null, true);
                echo " puntos)
                                                                        ";
            } else {
                // line 648
                echo "                                                                            Muy Superior ( ";
                echo twig_escape_filter($this->env, (isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")), "html", null, true);
                echo " puntos)
                                                                        ";
            }
            // line 650
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
            // line 663
            $context["general"] = (($this->getAttribute((isset($context["entityGatbSP"]) ? $context["entityGatbSP"] : $this->getContext($context, "entityGatbSP")), "valorN2", array()) + $this->getAttribute((isset($context["entityGatbSP"]) ? $context["entityGatbSP"] : $this->getContext($context, "entityGatbSP")), "valorN5", array())) + 6);
            // line 664
            echo "                                                                        ";
            if ((((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) >= 0) && ((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) < 81))) {
                // line 665
                echo "                                                                            Inferior ( ";
                echo twig_escape_filter($this->env, (isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")), "html", null, true);
                echo " puntos)
                                                                        ";
            } elseif ((((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) > 80) && ((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) < 95))) {
                // line 667
                echo "                                                                            Normal Inferior ( ";
                echo twig_escape_filter($this->env, (isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")), "html", null, true);
                echo " puntos)
                                                                        ";
            } elseif ((((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) > 94) && ((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) < 106))) {
                // line 669
                echo "                                                                            Normal ( ";
                echo twig_escape_filter($this->env, (isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")), "html", null, true);
                echo " puntos)
                                                                        ";
            } elseif ((((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) > 105) && ((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) < 121))) {
                // line 671
                echo "                                                                            Normal Superior ( ";
                echo twig_escape_filter($this->env, (isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")), "html", null, true);
                echo " puntos)
                                                                        ";
            } elseif ((((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) > 120) && ((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) < 135))) {
                // line 673
                echo "                                                                            Superior ( ";
                echo twig_escape_filter($this->env, (isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")), "html", null, true);
                echo " puntos)
                                                                        ";
            } else {
                // line 675
                echo "                                                                            Muy Superior ( ";
                echo twig_escape_filter($this->env, (isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")), "html", null, true);
                echo " puntos)
                                                                        ";
            }
            // line 677
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
            // line 690
            $context["general"] = ($this->getAttribute((isset($context["entityGatbSP"]) ? $context["entityGatbSP"] : $this->getContext($context, "entityGatbSP")), "valorS", array()) + 8);
            // line 691
            echo "                                                                        ";
            if ((((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) >= 0) && ((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) < 81))) {
                // line 692
                echo "                                                                            Inferior ( ";
                echo twig_escape_filter($this->env, (isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")), "html", null, true);
                echo " puntos)
                                                                        ";
            } elseif ((((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) > 80) && ((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) < 95))) {
                // line 694
                echo "                                                                            Normal Inferior ( ";
                echo twig_escape_filter($this->env, (isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")), "html", null, true);
                echo " puntos)
                                                                        ";
            } elseif ((((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) > 94) && ((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) < 106))) {
                // line 696
                echo "                                                                            Normal ( ";
                echo twig_escape_filter($this->env, (isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")), "html", null, true);
                echo " puntos)
                                                                        ";
            } elseif ((((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) > 105) && ((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) < 121))) {
                // line 698
                echo "                                                                            Normal Superior ( ";
                echo twig_escape_filter($this->env, (isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")), "html", null, true);
                echo " puntos)
                                                                        ";
            } elseif ((((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) > 120) && ((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) < 135))) {
                // line 700
                echo "                                                                            Superior ( ";
                echo twig_escape_filter($this->env, (isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")), "html", null, true);
                echo " puntos)
                                                                        ";
            } else {
                // line 702
                echo "                                                                            Muy Superior ( ";
                echo twig_escape_filter($this->env, (isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")), "html", null, true);
                echo " puntos)
                                                                        ";
            }
            // line 704
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
            // line 717
            $context["general"] = ($this->getAttribute((isset($context["entityGatbSP"]) ? $context["entityGatbSP"] : $this->getContext($context, "entityGatbSP")), "valorQ", array()) + 9);
            // line 718
            echo "                                                                        ";
            if ((((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) >= 0) && ((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) < 81))) {
                // line 719
                echo "                                                                            Inferior ( ";
                echo twig_escape_filter($this->env, (isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")), "html", null, true);
                echo " puntos)
                                                                        ";
            } elseif ((((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) > 80) && ((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) < 95))) {
                // line 721
                echo "                                                                            Normal Inferior ( ";
                echo twig_escape_filter($this->env, (isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")), "html", null, true);
                echo " puntos)
                                                                        ";
            } elseif ((((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) > 94) && ((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) < 106))) {
                // line 723
                echo "                                                                            Normal ( ";
                echo twig_escape_filter($this->env, (isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")), "html", null, true);
                echo " puntos)
                                                                        ";
            } elseif ((((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) > 105) && ((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) < 121))) {
                // line 725
                echo "                                                                            Normal Superior ( ";
                echo twig_escape_filter($this->env, (isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")), "html", null, true);
                echo " puntos)
                                                                        ";
            } elseif ((((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) > 120) && ((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) < 135))) {
                // line 727
                echo "                                                                            Superior ( ";
                echo twig_escape_filter($this->env, (isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")), "html", null, true);
                echo " puntos)
                                                                        ";
            } else {
                // line 729
                echo "                                                                            Muy Superior ( ";
                echo twig_escape_filter($this->env, (isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")), "html", null, true);
                echo " puntos)
                                                                        ";
            }
            // line 731
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
            // line 750
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "commentGTB", array()), "html", null, true);
            echo "</td>
                                            </tr>
                                            -->
                                        ";
        }
        // line 754
        echo "                                        
                                        <tr> 
                                            <td width=\"40px\" ></td>
                                            <th colspan=2 height=\"20px\"></th>
                                        </tr>
                                        
                                        
                                        
                                        ";
        // line 762
        if ((isset($context["validarPmaSP"]) ? $context["validarPmaSP"] : $this->getContext($context, "validarPmaSP"))) {
            // line 763
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
            // line 779
            $context["general"] = $this->getAttribute((isset($context["entityPmaSP"]) ? $context["entityPmaSP"] : $this->getContext($context, "entityPmaSP")), "valorV", array());
            // line 780
            echo "                                                                        ";
            if ((((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) >= 1) && ((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) <= 3))) {
                // line 781
                echo "                                                                            Nivel 1 ( ";
                echo twig_escape_filter($this->env, (isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")), "html", null, true);
                echo " puntos)
                                                                        ";
            } elseif ((((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) >= 4) && ((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) <= 6))) {
                // line 783
                echo "                                                                            Nivel 2 ( ";
                echo twig_escape_filter($this->env, (isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")), "html", null, true);
                echo " puntos)
                                                                        ";
            } elseif ((((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) >= 7) && ((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) <= 9))) {
                // line 785
                echo "                                                                            Nivel 3 ( ";
                echo twig_escape_filter($this->env, (isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")), "html", null, true);
                echo " puntos)
                                                                        ";
            } elseif ((((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) >= 10) && ((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) <= 15))) {
                // line 787
                echo "                                                                            Nivel 4 ( ";
                echo twig_escape_filter($this->env, (isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")), "html", null, true);
                echo " puntos)
                                                                        ";
            } elseif ((((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) >= 16) && ((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) <= 21))) {
                // line 789
                echo "                                                                            Nivel 5 ( ";
                echo twig_escape_filter($this->env, (isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")), "html", null, true);
                echo " puntos)
                                                                        ";
            } elseif ((((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) >= 22) && ((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) <= 27))) {
                // line 791
                echo "                                                                            Nivel 6 ( ";
                echo twig_escape_filter($this->env, (isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")), "html", null, true);
                echo " puntos)
                                                                        ";
            } elseif ((((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) >= 28) && ((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) <= 33))) {
                // line 793
                echo "                                                                            Nivel 7 ( ";
                echo twig_escape_filter($this->env, (isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")), "html", null, true);
                echo " puntos)
                                                                        ";
            } elseif ((((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) >= 34) && ((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) <= 45))) {
                // line 795
                echo "                                                                            Nivel 8 ( ";
                echo twig_escape_filter($this->env, (isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")), "html", null, true);
                echo " puntos)
                                                                        ";
            } elseif ((((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) >= 45) && ((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) <= 49))) {
                // line 797
                echo "                                                                            Nivel 9 ( ";
                echo twig_escape_filter($this->env, (isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")), "html", null, true);
                echo " puntos)
                                                                        ";
            } else {
                // line 799
                echo "                                                                            Nivel 0 ( ";
                echo twig_escape_filter($this->env, (isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")), "html", null, true);
                echo " puntos)
                                                                        ";
            }
            // line 801
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
            // line 814
            $context["general"] = $this->getAttribute((isset($context["entityPmaSP"]) ? $context["entityPmaSP"] : $this->getContext($context, "entityPmaSP")), "valorE", array());
            // line 815
            echo "                                                                        ";
            if ((((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) >= 0) && ((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) <= 6))) {
                // line 816
                echo "                                                                            Nivel 1 ( ";
                echo twig_escape_filter($this->env, (isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")), "html", null, true);
                echo " puntos)
                                                                        ";
            } elseif ((((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) >= 7) && ((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) <= 12))) {
                // line 818
                echo "                                                                            Nivel 2 ( ";
                echo twig_escape_filter($this->env, (isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")), "html", null, true);
                echo " puntos)
                                                                        ";
            } elseif ((((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) >= 13) && ((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) <= 18))) {
                // line 820
                echo "                                                                            Nivel 3 ( ";
                echo twig_escape_filter($this->env, (isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")), "html", null, true);
                echo " puntos)
                                                                        ";
            } elseif ((((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) >= 19) && ((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) <= 23))) {
                // line 822
                echo "                                                                            Nivel 4 ( ";
                echo twig_escape_filter($this->env, (isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")), "html", null, true);
                echo " puntos)
                                                                        ";
            } elseif ((((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) >= 24) && ((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) <= 28))) {
                // line 824
                echo "                                                                            Nivel 5 ( ";
                echo twig_escape_filter($this->env, (isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")), "html", null, true);
                echo " puntos)
                                                                        ";
            } elseif ((((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) >= 29) && ((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) <= 33))) {
                // line 826
                echo "                                                                            Nivel 6 ( ";
                echo twig_escape_filter($this->env, (isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")), "html", null, true);
                echo " puntos)
                                                                        ";
            } elseif ((((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) >= 34) && ((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) <= 42))) {
                // line 828
                echo "                                                                            Nivel 7 ( ";
                echo twig_escape_filter($this->env, (isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")), "html", null, true);
                echo " puntos)
                                                                        ";
            } elseif ((((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) >= 43) && ((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) <= 48))) {
                // line 830
                echo "                                                                            Nivel 8 ( ";
                echo twig_escape_filter($this->env, (isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")), "html", null, true);
                echo " puntos)
                                                                        ";
            } elseif ((((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) >= 49) && ((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) <= 54))) {
                // line 832
                echo "                                                                            Nivel 9 ( ";
                echo twig_escape_filter($this->env, (isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")), "html", null, true);
                echo " puntos)
                                                                        ";
            } else {
                // line 834
                echo "                                                                            Nivel -
                                                                        ";
            }
            // line 836
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
            // line 849
            $context["general"] = $this->getAttribute((isset($context["entityPmaSP"]) ? $context["entityPmaSP"] : $this->getContext($context, "entityPmaSP")), "valorR", array());
            // line 850
            echo "                                                                        ";
            if ((((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) >= 0) && ((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) <= 3))) {
                // line 851
                echo "                                                                            Nivel 1 ( ";
                echo twig_escape_filter($this->env, (isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")), "html", null, true);
                echo " puntos)
                                                                        ";
            } elseif ((((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) >= 4) && ((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) <= 8))) {
                // line 853
                echo "                                                                            Nivel 2 ( ";
                echo twig_escape_filter($this->env, (isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")), "html", null, true);
                echo " puntos)
                                                                        ";
            } elseif ((((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) >= 9) && ((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) <= 12))) {
                // line 855
                echo "                                                                            Nivel 3 ( ";
                echo twig_escape_filter($this->env, (isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")), "html", null, true);
                echo " puntos)
                                                                        ";
            } elseif ((((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) >= 13) && ((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) <= 14))) {
                // line 857
                echo "                                                                            Nivel 4 ( ";
                echo twig_escape_filter($this->env, (isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")), "html", null, true);
                echo " puntos)
                                                                        ";
            } elseif ((((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) >= 15) && ((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) <= 16))) {
                // line 859
                echo "                                                                            Nivel 5 ( ";
                echo twig_escape_filter($this->env, (isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")), "html", null, true);
                echo " puntos)
                                                                        ";
            } elseif ((((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) >= 18) && ((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) <= 17))) {
                // line 861
                echo "                                                                            Nivel 6 ( ";
                echo twig_escape_filter($this->env, (isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")), "html", null, true);
                echo " puntos)
                                                                        ";
            } elseif ((((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) >= 19) && ((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) <= 21))) {
                // line 863
                echo "                                                                            Nivel 7 ( ";
                echo twig_escape_filter($this->env, (isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")), "html", null, true);
                echo " puntos)
                                                                        ";
            } elseif ((((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) >= 22) && ((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) <= 24))) {
                // line 865
                echo "                                                                            Nivel 8 ( ";
                echo twig_escape_filter($this->env, (isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")), "html", null, true);
                echo " puntos)
                                                                        ";
            } elseif ((((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) >= 25) && ((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) <= 30))) {
                // line 867
                echo "                                                                            Nivel 9 ( ";
                echo twig_escape_filter($this->env, (isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")), "html", null, true);
                echo " puntos)
                                                                        ";
            } else {
                // line 869
                echo "                                                                            Nivel -
                                                                        ";
            }
            // line 871
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
            // line 884
            $context["general"] = $this->getAttribute((isset($context["entityPmaSP"]) ? $context["entityPmaSP"] : $this->getContext($context, "entityPmaSP")), "valorN", array());
            // line 885
            echo "                                                                        ";
            if ((((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) >= 1) && ((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) <= 7))) {
                // line 886
                echo "                                                                            Nivel 1 ( ";
                echo twig_escape_filter($this->env, (isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")), "html", null, true);
                echo " puntos)
                                                                        ";
            } elseif ((((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) >= 8) && ((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) <= 12))) {
                // line 888
                echo "                                                                            Nivel 2 ( ";
                echo twig_escape_filter($this->env, (isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")), "html", null, true);
                echo " puntos)
                                                                        ";
            } elseif ((((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) >= 13) && ((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) <= 16))) {
                // line 890
                echo "                                                                            Nivel 3 ( ";
                echo twig_escape_filter($this->env, (isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")), "html", null, true);
                echo " puntos)
                                                                        ";
            } elseif ((((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) >= 17) && ((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) <= 21))) {
                // line 892
                echo "                                                                            Nivel 4 ( ";
                echo twig_escape_filter($this->env, (isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")), "html", null, true);
                echo " puntos)
                                                                        ";
            } elseif ((((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) >= 22) && ((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) <= 26))) {
                // line 894
                echo "                                                                            Nivel 5 ( ";
                echo twig_escape_filter($this->env, (isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")), "html", null, true);
                echo " puntos)
                                                                        ";
            } elseif ((((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) >= 27) && ((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) <= 31))) {
                // line 896
                echo "                                                                            Nivel 6 ( ";
                echo twig_escape_filter($this->env, (isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")), "html", null, true);
                echo " puntos)
                                                                        ";
            } elseif ((((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) >= 32) && ((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) <= 37))) {
                // line 898
                echo "                                                                            Nivel 7 ( ";
                echo twig_escape_filter($this->env, (isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")), "html", null, true);
                echo " puntos)
                                                                        ";
            } elseif ((((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) >= 38) && ((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) <= 49))) {
                // line 900
                echo "                                                                            Nivel 8 ( ";
                echo twig_escape_filter($this->env, (isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")), "html", null, true);
                echo " puntos)
                                                                        ";
            } elseif ((((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) >= 50) && ((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) <= 70))) {
                // line 902
                echo "                                                                            Nivel 9 ( ";
                echo twig_escape_filter($this->env, (isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")), "html", null, true);
                echo " puntos)
                                                                        ";
            } else {
                // line 904
                echo "                                                                            Nivel 0
                                                                        ";
            }
            // line 906
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
            // line 919
            $context["general"] = $this->getAttribute((isset($context["entityPmaSP"]) ? $context["entityPmaSP"] : $this->getContext($context, "entityPmaSP")), "valorF", array());
            // line 920
            echo "                                                                        ";
            if ((((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) >= 1) && ((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) <= 25))) {
                // line 921
                echo "                                                                            Nivel 1 ( ";
                echo twig_escape_filter($this->env, (isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")), "html", null, true);
                echo " puntos)
                                                                        ";
            } elseif ((((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) >= 26) && ((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) <= 28))) {
                // line 923
                echo "                                                                            Nivel 2 ( ";
                echo twig_escape_filter($this->env, (isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")), "html", null, true);
                echo " puntos)
                                                                        ";
            } elseif ((((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) >= 29) && ((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) <= 30))) {
                // line 925
                echo "                                                                            Nivel 3 ( ";
                echo twig_escape_filter($this->env, (isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")), "html", null, true);
                echo " puntos)
                                                                        ";
            } elseif ((((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) >= 31) && ((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) <= 37))) {
                // line 927
                echo "                                                                            Nivel 4 ( ";
                echo twig_escape_filter($this->env, (isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")), "html", null, true);
                echo " puntos)
                                                                        ";
            } elseif ((((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) >= 38) && ((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) <= 43))) {
                // line 929
                echo "                                                                            Nivel 5 ( ";
                echo twig_escape_filter($this->env, (isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")), "html", null, true);
                echo " puntos)
                                                                        ";
            } elseif ((((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) >= 44) && ((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) <= 52))) {
                // line 931
                echo "                                                                            Nivel 6 ( ";
                echo twig_escape_filter($this->env, (isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")), "html", null, true);
                echo " puntos)
                                                                        ";
            } elseif ((((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) >= 53) && ((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) <= 58))) {
                // line 933
                echo "                                                                            Nivel 7 ( ";
                echo twig_escape_filter($this->env, (isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")), "html", null, true);
                echo " puntos)
                                                                        ";
            } elseif ((((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) >= 59) && ((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) <= 64))) {
                // line 935
                echo "                                                                            Nivel 8 ( ";
                echo twig_escape_filter($this->env, (isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")), "html", null, true);
                echo " puntos)
                                                                        ";
            } elseif ((((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) >= 65) && ((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) <= 70))) {
                // line 937
                echo "                                                                            Nivel 9 ( ";
                echo twig_escape_filter($this->env, (isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")), "html", null, true);
                echo " puntos)
                                                                        ";
            } else {
                // line 939
                echo "                                                                            Nivel 0
                                                                        ";
            }
            // line 941
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
            // line 957
            $context["general"] = (((((1.5 * $this->getAttribute((isset($context["entityPmaSP"]) ? $context["entityPmaSP"] : $this->getContext($context, "entityPmaSP")), "valorV", array())) + $this->getAttribute((isset($context["entityPmaSP"]) ? $context["entityPmaSP"] : $this->getContext($context, "entityPmaSP")), "valorE", array())) + (2 * $this->getAttribute((isset($context["entityPmaSP"]) ? $context["entityPmaSP"] : $this->getContext($context, "entityPmaSP")), "valorR", array()))) + $this->getAttribute((isset($context["entityPmaSP"]) ? $context["entityPmaSP"] : $this->getContext($context, "entityPmaSP")), "valorN", array())) + $this->getAttribute((isset($context["entityPmaSP"]) ? $context["entityPmaSP"] : $this->getContext($context, "entityPmaSP")), "valorF", array()));
            // line 958
            echo "                                                                        ";
            if ((((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) >= 0) && ((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) < 83))) {
                // line 959
                echo "                                                                            DEFICIENTE ( ";
                echo twig_escape_filter($this->env, (isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")), "html", null, true);
                echo " puntos)
                                                                        ";
            } elseif ((((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) >= 83) && ((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) < 127))) {
                // line 961
                echo "                                                                            INFERIOR ( ";
                echo twig_escape_filter($this->env, (isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")), "html", null, true);
                echo " puntos)
                                                                        ";
            } elseif ((((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) > 127) && ((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) <= 171))) {
                // line 963
                echo "                                                                            NORMAL ( ";
                echo twig_escape_filter($this->env, (isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")), "html", null, true);
                echo " puntos)
                                                                        ";
            } elseif ((((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) > 171) && ((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) <= 215))) {
                // line 965
                echo "                                                                            NORMAL BRILLANTE ( ";
                echo twig_escape_filter($this->env, (isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")), "html", null, true);
                echo " puntos)
                                                                        ";
            } elseif ((((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) > 215) && ((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) <= 259))) {
                // line 967
                echo "                                                                            SUPERIOR ( ";
                echo twig_escape_filter($this->env, (isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")), "html", null, true);
                echo " puntos)
                                                                        ";
            } elseif (((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) > 259)) {
                // line 969
                echo "                                                                            MUY SUPERIOR ( ";
                echo twig_escape_filter($this->env, (isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")), "html", null, true);
                echo " puntos)
                                                                        ";
            } else {
                // line 971
                echo "                                                                           - ( ";
                echo twig_escape_filter($this->env, (isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")), "html", null, true);
                echo " puntos)
                                                                        ";
            }
            // line 973
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
            // line 991
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "commentPMA", array()), "html", null, true);
            echo "</td>
                                            </tr>
                                            -->
                                        ";
        }
        // line 995
        echo "                                        
                                        <tr> 
                                            <td width=\"40px\" ></td>
                                            <th colspan=2 height=\"20px\"></th>
                                        </tr>
                                        
                                        ";
        // line 1001
        if ((isset($context["validarICESP"]) ? $context["validarICESP"] : $this->getContext($context, "validarICESP"))) {
            // line 1002
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
            // line 1021
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
            // line 1081
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entityICESP"]) ? $context["entityICESP"] : $this->getContext($context, "entityICESP")), "ce_sub_CM", array()), "html", null, true);
            echo "
                                                                                                </font>
                                                                                            </td>
                                                                                            <td>
                                                                                                <table border=1 bgcolor=\"black\">
                                                                                                    <tr>
                                                                                                        <td width=\"340px\" height=\"15px\">
                                                                                                            ";
            // line 1088
            $context["valor"] = (($this->getAttribute((isset($context["entityICESP"]) ? $context["entityICESP"] : $this->getContext($context, "entityICESP")), "ce_sub_CM", array()) - 60) * 4.25);
            // line 1089
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
            // line 1111
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entityICESP"]) ? $context["entityICESP"] : $this->getContext($context, "entityICESP")), "ce_sub_SE", array()), "html", null, true);
            echo "-->
                                                                                    <table >
                                                                                        <tr>
                                                                                            <td width=\"20px\">
                                                                                                <font size=\"2\">
                                                                                                    ";
            // line 1116
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entityICESP"]) ? $context["entityICESP"] : $this->getContext($context, "entityICESP")), "ce_sub_SE", array()), "html", null, true);
            echo "
                                                                                                </font>
                                                                                            </td>
                                                                                            <td>
                                                                                                <table border=1 bgcolor=\"black\">
                                                                                                    <tr>
                                                                                                        <td width=\"340px\" height=\"15px\">
                                                                                                            ";
            // line 1123
            $context["valor"] = (($this->getAttribute((isset($context["entityICESP"]) ? $context["entityICESP"] : $this->getContext($context, "entityICESP")), "ce_sub_SE", array()) - 60) * 4.25);
            // line 1124
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
            // line 1146
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entityICESP"]) ? $context["entityICESP"] : $this->getContext($context, "entityICESP")), "ce_sub_AE", array()), "html", null, true);
            echo "-->
                                                                                    <table >
                                                                                        <tr>
                                                                                            <td width=\"20px\">
                                                                                                <font size=\"2\">
                                                                                                    ";
            // line 1151
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entityICESP"]) ? $context["entityICESP"] : $this->getContext($context, "entityICESP")), "ce_sub_AE", array()), "html", null, true);
            echo "
                                                                                                </font>
                                                                                            </td>
                                                                                            <td>
                                                                                                <table border=1 bgcolor=\"black\">
                                                                                                    <tr>
                                                                                                        <td width=\"340px\" height=\"15px\">
                                                                                                            ";
            // line 1158
            $context["valor"] = (($this->getAttribute((isset($context["entityICESP"]) ? $context["entityICESP"] : $this->getContext($context, "entityICESP")), "ce_sub_AE", array()) - 60) * 4.25);
            // line 1159
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
            // line 1181
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entityICESP"]) ? $context["entityICESP"] : $this->getContext($context, "entityICESP")), "ce_sub_AR", array()), "html", null, true);
            echo "-->
                                                                                    <table >
                                                                                        <tr>
                                                                                            <td width=\"20px\">
                                                                                                <font size=\"2\">
                                                                                                    ";
            // line 1186
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entityICESP"]) ? $context["entityICESP"] : $this->getContext($context, "entityICESP")), "ce_sub_AR", array()), "html", null, true);
            echo "
                                                                                                </font>
                                                                                            </td>
                                                                                            <td>
                                                                                                <table border=1 bgcolor=\"black\">
                                                                                                    <tr>
                                                                                                        <td width=\"340px\" height=\"15px\">
                                                                                                            ";
            // line 1193
            $context["valor"] = (($this->getAttribute((isset($context["entityICESP"]) ? $context["entityICESP"] : $this->getContext($context, "entityICESP")), "ce_sub_AR", array()) - 60) * 4.25);
            // line 1194
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
            // line 1216
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entityICESP"]) ? $context["entityICESP"] : $this->getContext($context, "entityICESP")), "ce_sub_IN", array()), "html", null, true);
            echo "-->
                                                                                    <table >
                                                                                        <tr>
                                                                                            <td width=\"20px\">
                                                                                                <font size=\"2\">
                                                                                                    ";
            // line 1221
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entityICESP"]) ? $context["entityICESP"] : $this->getContext($context, "entityICESP")), "ce_sub_IN", array()), "html", null, true);
            echo "
                                                                                                </font>
                                                                                            </td>
                                                                                            <td>
                                                                                                <table border=1 bgcolor=\"black\">
                                                                                                    <tr>
                                                                                                        <td width=\"340px\" height=\"15px\">
                                                                                                            ";
            // line 1228
            $context["valor"] = (($this->getAttribute((isset($context["entityICESP"]) ? $context["entityICESP"] : $this->getContext($context, "entityICESP")), "ce_sub_IN", array()) - 60) * 4.25);
            // line 1229
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
            // line 1301
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
            // line 1361
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entityICESP"]) ? $context["entityICESP"] : $this->getContext($context, "entityICESP")), "ce_sub_RI", array()), "html", null, true);
            echo "
                                                                                                </font>
                                                                                            </td>
                                                                                            <td>
                                                                                                <table border=1 bgcolor=\"black\">
                                                                                                    <tr>
                                                                                                        <td width=\"340px\" height=\"15px\">
                                                                                                            ";
            // line 1368
            $context["valor"] = (($this->getAttribute((isset($context["entityICESP"]) ? $context["entityICESP"] : $this->getContext($context, "entityICESP")), "ce_sub_RI", array()) - 60) * 4.25);
            // line 1369
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
            // line 1383
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
            // line 1397
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entityICESP"]) ? $context["entityICESP"] : $this->getContext($context, "entityICESP")), "ce_sub_RS", array()), "html", null, true);
            echo "
                                                                                </td>-->
                                                                                <td >
                                                                                    <table >
                                                                                        <tr>
                                                                                            <td width=\"20px\">
                                                                                                <font size=\"2\">
                                                                                                    ";
            // line 1404
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entityICESP"]) ? $context["entityICESP"] : $this->getContext($context, "entityICESP")), "ce_sub_RS", array()), "html", null, true);
            echo "
                                                                                                </font>
                                                                                            </td>
                                                                                            <td>
                                                                                                <table border=1 bgcolor=\"black\">
                                                                                                    <tr>
                                                                                                        <td width=\"340px\" height=\"15px\">
                                                                                                            ";
            // line 1411
            $context["valor"] = (($this->getAttribute((isset($context["entityICESP"]) ? $context["entityICESP"] : $this->getContext($context, "entityICESP")), "ce_sub_RS", array()) - 60) * 4.25);
            // line 1412
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
            // line 1435
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
            // line 1443
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entityICESP"]) ? $context["entityICESP"] : $this->getContext($context, "entityICESP")), "ce_sub_EM", array()), "html", null, true);
            echo "
                                                                                                </font>
                                                                                            </td>
                                                                                            <td>
                                                                                                <table border=1 bgcolor=\"black\">
                                                                                                    <tr>
                                                                                                        <td width=\"340px\" height=\"15px\">
                                                                                                            ";
            // line 1450
            $context["valor"] = (($this->getAttribute((isset($context["entityICESP"]) ? $context["entityICESP"] : $this->getContext($context, "entityICESP")), "ce_sub_EM", array()) - 60) * 4.25);
            // line 1451
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
            // line 1523
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
            // line 1580
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
            // line 1588
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entityICESP"]) ? $context["entityICESP"] : $this->getContext($context, "entityICESP")), "ce_sub_SP", array()), "html", null, true);
            echo "
                                                                                                </font>
                                                                                            </td>
                                                                                            <td>
                                                                                                <table border=1 bgcolor=\"black\">
                                                                                                    <tr>
                                                                                                        <td width=\"340px\" height=\"15px\">
                                                                                                            ";
            // line 1595
            $context["valor"] = (($this->getAttribute((isset($context["entityICESP"]) ? $context["entityICESP"] : $this->getContext($context, "entityICESP")), "ce_sub_SP", array()) - 60) * 4.25);
            // line 1596
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
            // line 1619
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
            // line 1627
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entityICESP"]) ? $context["entityICESP"] : $this->getContext($context, "entityICESP")), "ce_sub_PR", array()), "html", null, true);
            echo "
                                                                                                </font>
                                                                                            </td>
                                                                                            <td>
                                                                                                <table border=1 bgcolor=\"black\">
                                                                                                    <tr>
                                                                                                        <td width=\"340px\" height=\"15px\">
                                                                                                            ";
            // line 1634
            $context["valor"] = (($this->getAttribute((isset($context["entityICESP"]) ? $context["entityICESP"] : $this->getContext($context, "entityICESP")), "ce_sub_PR", array()) - 60) * 4.25);
            // line 1635
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
            // line 1658
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
            // line 1666
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entityICESP"]) ? $context["entityICESP"] : $this->getContext($context, "entityICESP")), "ce_sub_FL", array()), "html", null, true);
            echo "
                                                                                                </font>
                                                                                            </td>
                                                                                            <td>
                                                                                                <table border=1 bgcolor=\"black\">
                                                                                                    <tr>
                                                                                                        <td width=\"340px\" height=\"15px\">
                                                                                                            ";
            // line 1673
            $context["valor"] = (($this->getAttribute((isset($context["entityICESP"]) ? $context["entityICESP"] : $this->getContext($context, "entityICESP")), "ce_sub_FL", array()) - 60) * 4.25);
            // line 1674
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
            // line 1746
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
            // line 1803
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
            // line 1811
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entityICESP"]) ? $context["entityICESP"] : $this->getContext($context, "entityICESP")), "ce_sub_TT", array()), "html", null, true);
            echo "
                                                                                                </font>
                                                                                            </td>
                                                                                            <td>
                                                                                                <table border=1 bgcolor=\"black\">
                                                                                                    <tr>
                                                                                                        <td width=\"340px\" height=\"15px\">
                                                                                                            ";
            // line 1818
            $context["valor"] = (($this->getAttribute((isset($context["entityICESP"]) ? $context["entityICESP"] : $this->getContext($context, "entityICESP")), "ce_sub_TT", array()) - 60) * 4.25);
            // line 1819
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
            // line 1842
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
            // line 1850
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entityICESP"]) ? $context["entityICESP"] : $this->getContext($context, "entityICESP")), "ce_sub_CI", array()), "html", null, true);
            echo "
                                                                                                </font>
                                                                                            </td>
                                                                                            <td>
                                                                                                <table border=1 bgcolor=\"black\">
                                                                                                    <tr>
                                                                                                        <td width=\"340px\" height=\"15px\">
                                                                                                            ";
            // line 1857
            $context["valor"] = (($this->getAttribute((isset($context["entityICESP"]) ? $context["entityICESP"] : $this->getContext($context, "entityICESP")), "ce_sub_CI", array()) - 60) * 4.25);
            // line 1858
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
            // line 1930
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
            // line 1987
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
            // line 1995
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entityICESP"]) ? $context["entityICESP"] : $this->getContext($context, "entityICESP")), "ce_sub_FE", array()), "html", null, true);
            echo "
                                                                                                </font>
                                                                                            </td>
                                                                                            <td>
                                                                                                <table border=1 bgcolor=\"black\">
                                                                                                    <tr>
                                                                                                        <td width=\"340px\" height=\"15px\">
                                                                                                            ";
            // line 2002
            $context["valor"] = (($this->getAttribute((isset($context["entityICESP"]) ? $context["entityICESP"] : $this->getContext($context, "entityICESP")), "ce_sub_FE", array()) - 60) * 4.25);
            // line 2003
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
            // line 2026
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
            // line 2034
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entityICESP"]) ? $context["entityICESP"] : $this->getContext($context, "entityICESP")), "ce_sub_OP", array()), "html", null, true);
            echo "
                                                                                                </font>
                                                                                            </td>
                                                                                            <td>
                                                                                                <table border=1 bgcolor=\"black\">
                                                                                                    <tr>
                                                                                                        <td width=\"340px\" height=\"15px\">
                                                                                                            ";
            // line 2041
            $context["valor"] = (($this->getAttribute((isset($context["entityICESP"]) ? $context["entityICESP"] : $this->getContext($context, "entityICESP")), "ce_sub_OP", array()) - 60) * 4.25);
            // line 2042
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
            // line 2117
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
            // line 2137
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "commentICE", array()), "html", null, true);
            echo "</td>
                                            </tr>
                                            -->
                                       ";
        }
        // line 2141
        echo "
                                        <tr> 
                                            <td width=\"40px\" ></td>
                                            <th colspan=2 height=\"10px\"></th>
                                        </tr>
                                        
                                        ";
        // line 2147
        if ((isset($context["validarEscudoSP"]) ? $context["validarEscudoSP"] : $this->getContext($context, "validarEscudoSP"))) {
            // line 2148
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
            // line 2164
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
            // line 2174
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
            // line 2189
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
            // line 2199
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
            // line 2216
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
            // line 2226
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
            // line 2241
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
            // line 2251
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
            // line 2268
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
            // line 2278
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
            // line 2293
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
            // line 2303
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
            // line 2320
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
            // line 2330
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
            // line 2345
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
            // line 2355
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
            // line 2372
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
            // line 2382
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
            // line 2399
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
            // line 2409
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
            // line 2426
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
            // line 2436
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
            // line 2453
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
            // line 2463
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
            // line 2478
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
            // line 2488
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
            // line 2505
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
            // line 2515
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
            // line 2530
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
            // line 2540
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
            // line 2562
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "commentESC", array()), "html", null, true);
            echo "</td>
                                            </tr>
                                            -->
                                        ";
        }
        // line 2566
        echo "                                            
                                        
                                        ";
        // line 2568
        if ((isset($context["validarRavenSP"]) ? $context["validarRavenSP"] : $this->getContext($context, "validarRavenSP"))) {
            // line 2569
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
            // line 2584
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
        // line 2592
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
        // line 2610
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listaVirtualInterSPC"]) ? $context["listaVirtualInterSPC"] : $this->getContext($context, "listaVirtualInterSPC")));
        foreach ($context['_seq'] as $context["_key"] => $context["VirtualInterSPC"]) {
            // line 2611
            echo "                                                                <tr>
                                                                    <td class=\"span7\">
                                                                        ";
            // line 2613
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["VirtualInterSPC"], "VirtualInterviewQuestion", array()), "question", array()), "html", null, true);
            echo "
                                                                    </td>
                                                                    <td class=\"span5\">
                                                                        ";
            // line 2616
            echo twig_escape_filter($this->env, $this->getAttribute($context["VirtualInterSPC"], "answer", array()), "html", null, true);
            echo "
                                                                    </td>
                                                                </tr>
                                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['VirtualInterSPC'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 2620
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
        // line 2655
        echo twig_escape_filter($this->env, (isset($context["IL_ER_UltRem"]) ? $context["IL_ER_UltRem"] : $this->getContext($context, "IL_ER_UltRem")), "html", null, true);
        echo "
                                                            </td>
                                                            
                                                        </tr>
                                                        <tr>
                                                            <td align=\"left\" >
                                                                <div class=\"span1\"></div>
                                                                <strong>Número de sueldos recibidos al año : </strong>
                                                                ";
        // line 2663
        echo twig_escape_filter($this->env, (isset($context["IL_ER_NumSuel"]) ? $context["IL_ER_NumSuel"] : $this->getContext($context, "IL_ER_NumSuel")), "html", null, true);
        echo "
                                                            </td>
                                                            
                                                        </tr>
                                                        <tr>
                                                            <td align=\"left\">
                                                                <div class=\"span1\"></div>
                                                                <strong>Bono : </strong>
                                                                ";
        // line 2671
        echo twig_escape_filter($this->env, (isset($context["IL_ER_Bono"]) ? $context["IL_ER_Bono"] : $this->getContext($context, "IL_ER_Bono")), "html", null, true);
        echo "
                                                            </td>
                                                            
                                                        </tr>
                                                        <tr>
                                                            <td align=\"left\" >
                                                                <div class=\"span1\"></div>
                                                                <strong>Utilidades : </strong>
                                                                ";
        // line 2679
        echo twig_escape_filter($this->env, (isset($context["IL_ER_Utilida"]) ? $context["IL_ER_Utilida"] : $this->getContext($context, "IL_ER_Utilida")), "html", null, true);
        echo "
                                                            </td>
                                                            
                                                        </tr>
                                                        <tr>
                                                            <td align=\"left\" >
                                                                <div class=\"span1\"></div>
                                                                <strong>Variable : </strong>
                                                                ";
        // line 2687
        echo twig_escape_filter($this->env, (isset($context["IL_ER_Variable"]) ? $context["IL_ER_Variable"] : $this->getContext($context, "IL_ER_Variable")), "html", null, true);
        echo "
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td align=\"left\" width=\"1100px\">
                                                                <br>
                                                                <strong>Expectativas Salariales : </strong>
                                                                ";
        // line 2694
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
        // line 2728
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "strengths", array()), "html", null, true);
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
        // line 2744
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "improvementOpportunities", array()), "html", null, true);
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
        // line 2761
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "recommendation", array()), "html", null, true);
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
                                            <td width=\"920px\">
                                                ";
        // line 2775
        if (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "finalResult", array()) == 1)) {
            // line 2776
            echo "                                                    Recomendable 
                                                ";
        } elseif (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "finalResult", array()) == 2)) {
            // line 2778
            echo "                                                    Recomendable con observaciones 
                                                ";
        } elseif (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "finalResult", array()) == 3)) {
            // line 2780
            echo "                                                    No recomendable 
                                                ";
        } else {
            // line 2782
            echo "                                                   -
                                                ";
        }
        // line 2784
        echo "                                            </td>
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
                                        
                                    </tbody>
                                </table>
                            </div>
                        </fieldset>
                       
                    
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
        return "SeleccionProcesBundle:ResultSPC:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  3763 => 2784,  3759 => 2782,  3755 => 2780,  3751 => 2778,  3747 => 2776,  3745 => 2775,  3728 => 2761,  3708 => 2744,  3689 => 2728,  3652 => 2694,  3642 => 2687,  3631 => 2679,  3620 => 2671,  3609 => 2663,  3598 => 2655,  3561 => 2620,  3551 => 2616,  3545 => 2613,  3541 => 2611,  3537 => 2610,  3517 => 2592,  3504 => 2584,  3487 => 2569,  3485 => 2568,  3481 => 2566,  3474 => 2562,  3449 => 2540,  3436 => 2530,  3418 => 2515,  3405 => 2505,  3385 => 2488,  3372 => 2478,  3354 => 2463,  3341 => 2453,  3321 => 2436,  3308 => 2426,  3288 => 2409,  3275 => 2399,  3255 => 2382,  3242 => 2372,  3222 => 2355,  3209 => 2345,  3191 => 2330,  3178 => 2320,  3158 => 2303,  3145 => 2293,  3127 => 2278,  3114 => 2268,  3094 => 2251,  3081 => 2241,  3063 => 2226,  3050 => 2216,  3030 => 2199,  3017 => 2189,  2999 => 2174,  2986 => 2164,  2968 => 2148,  2966 => 2147,  2958 => 2141,  2951 => 2137,  2928 => 2117,  2849 => 2042,  2847 => 2041,  2837 => 2034,  2826 => 2026,  2799 => 2003,  2797 => 2002,  2787 => 1995,  2776 => 1987,  2716 => 1930,  2640 => 1858,  2638 => 1857,  2628 => 1850,  2617 => 1842,  2590 => 1819,  2588 => 1818,  2578 => 1811,  2567 => 1803,  2507 => 1746,  2431 => 1674,  2429 => 1673,  2419 => 1666,  2408 => 1658,  2381 => 1635,  2379 => 1634,  2369 => 1627,  2358 => 1619,  2331 => 1596,  2329 => 1595,  2319 => 1588,  2308 => 1580,  2248 => 1523,  2172 => 1451,  2170 => 1450,  2160 => 1443,  2149 => 1435,  2122 => 1412,  2120 => 1411,  2110 => 1404,  2100 => 1397,  2083 => 1383,  2065 => 1369,  2063 => 1368,  2053 => 1361,  1990 => 1301,  1914 => 1229,  1912 => 1228,  1902 => 1221,  1894 => 1216,  1868 => 1194,  1866 => 1193,  1856 => 1186,  1848 => 1181,  1822 => 1159,  1820 => 1158,  1810 => 1151,  1802 => 1146,  1776 => 1124,  1774 => 1123,  1764 => 1116,  1756 => 1111,  1730 => 1089,  1728 => 1088,  1718 => 1081,  1655 => 1021,  1634 => 1002,  1632 => 1001,  1624 => 995,  1617 => 991,  1597 => 973,  1591 => 971,  1585 => 969,  1579 => 967,  1573 => 965,  1567 => 963,  1561 => 961,  1555 => 959,  1552 => 958,  1550 => 957,  1532 => 941,  1528 => 939,  1522 => 937,  1516 => 935,  1510 => 933,  1504 => 931,  1498 => 929,  1492 => 927,  1486 => 925,  1480 => 923,  1474 => 921,  1471 => 920,  1469 => 919,  1454 => 906,  1450 => 904,  1444 => 902,  1438 => 900,  1432 => 898,  1426 => 896,  1420 => 894,  1414 => 892,  1408 => 890,  1402 => 888,  1396 => 886,  1393 => 885,  1391 => 884,  1376 => 871,  1372 => 869,  1366 => 867,  1360 => 865,  1354 => 863,  1348 => 861,  1342 => 859,  1336 => 857,  1330 => 855,  1324 => 853,  1318 => 851,  1315 => 850,  1313 => 849,  1298 => 836,  1294 => 834,  1288 => 832,  1282 => 830,  1276 => 828,  1270 => 826,  1264 => 824,  1258 => 822,  1252 => 820,  1246 => 818,  1240 => 816,  1237 => 815,  1235 => 814,  1220 => 801,  1214 => 799,  1208 => 797,  1202 => 795,  1196 => 793,  1190 => 791,  1184 => 789,  1178 => 787,  1172 => 785,  1166 => 783,  1160 => 781,  1157 => 780,  1155 => 779,  1137 => 763,  1135 => 762,  1125 => 754,  1118 => 750,  1097 => 731,  1091 => 729,  1085 => 727,  1079 => 725,  1073 => 723,  1067 => 721,  1061 => 719,  1058 => 718,  1056 => 717,  1041 => 704,  1035 => 702,  1029 => 700,  1023 => 698,  1017 => 696,  1011 => 694,  1005 => 692,  1002 => 691,  1000 => 690,  985 => 677,  979 => 675,  973 => 673,  967 => 671,  961 => 669,  955 => 667,  949 => 665,  946 => 664,  944 => 663,  929 => 650,  923 => 648,  917 => 646,  911 => 644,  905 => 642,  899 => 640,  893 => 638,  890 => 637,  888 => 636,  873 => 623,  867 => 621,  861 => 619,  855 => 617,  849 => 615,  843 => 613,  837 => 611,  834 => 610,  832 => 609,  814 => 593,  812 => 592,  785 => 567,  777 => 562,  762 => 550,  747 => 538,  737 => 530,  735 => 529,  732 => 528,  724 => 523,  709 => 511,  694 => 499,  684 => 491,  682 => 490,  679 => 489,  671 => 484,  656 => 472,  641 => 460,  631 => 452,  629 => 451,  603 => 427,  594 => 424,  590 => 422,  586 => 420,  584 => 419,  581 => 418,  576 => 415,  568 => 410,  552 => 397,  529 => 376,  527 => 375,  524 => 374,  516 => 369,  500 => 356,  477 => 335,  475 => 334,  472 => 333,  464 => 328,  448 => 315,  425 => 294,  423 => 293,  420 => 292,  412 => 287,  396 => 274,  373 => 253,  371 => 252,  368 => 251,  360 => 246,  344 => 233,  321 => 212,  319 => 211,  316 => 210,  308 => 205,  292 => 192,  269 => 171,  267 => 170,  264 => 169,  256 => 164,  240 => 151,  217 => 130,  215 => 129,  207 => 124,  195 => 114,  189 => 112,  185 => 110,  182 => 109,  179 => 108,  176 => 107,  174 => 106,  170 => 105,  154 => 92,  140 => 81,  128 => 71,  126 => 70,  102 => 48,  98 => 46,  92 => 44,  90 => 43,  58 => 14,  54 => 13,  45 => 6,  42 => 5,  36 => 3,  30 => 2,);
    }
}
