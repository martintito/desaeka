<?php

/* SeleccionProcesBundle:ResultSPC:print.html.twig */
class __TwigTemplate_0fd046a71f5aead2b4b4c80462747278fd5fd906d35347ba579a9b5bebf0780b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::basePrint.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'article' => array($this, 'block_article'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::basePrint.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo "Impresión";
    }

    // line 4
    public function block_article($context, array $blocks = array())
    {
        // line 5
        echo "
<table >
    <tbody>
        <tr>
            <td width=\"40px\" ></td>
            <td colspan=2 align=\"center\">
                <div class=\"span11\">
                    <strong>
                        <font size=\"3\">
                        INFORME PSICOLABORAL
                        </font>
                    </strong>
                </div>
            </td>
        </tr>
        <tr> 
            <td width=\"40px\" ></td>
            <td colspan=2 align=\"right\">
                <font size=\"1\">
                    <strong>
                        CONFIDENCIAL
                        <br>
                        ";
        // line 27
        if ((isset($context["validarDatosPersonales"]) ? $context["validarDatosPersonales"] : $this->getContext($context, "validarDatosPersonales"))) {
            // line 28
            echo "                            ( ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entityRegisterDefinitionRol"]) ? $context["entityRegisterDefinitionRol"] : $this->getContext($context, "entityRegisterDefinitionRol")), "rol", array()), "name", array()), "html", null, true);
            echo " )
                        ";
        } else {
            // line 30
            echo "                            No se registró perfil de cargo.
                        ";
        }
        // line 32
        echo "                        <br>
                        DATOS PERSONALES
                    </strong>
                </font>
            </td>
        </tr>
        <tr>
            <td width=\"40px\" ></td>
            <td colspan=2 >
                <div class=\"span11\">
                    ";
        // line 42
        if ((isset($context["validarDatosPersonales"]) ? $context["validarDatosPersonales"] : $this->getContext($context, "validarDatosPersonales"))) {
            // line 43
            echo "                        <table border=\"1\">
                            <tr>
                                <td align=\"right\" width=\"200px\">
                                    <div class=\"span11\" align=\"right\">
                                        <font size=\"1\">
                                            <strong>Apellidos y Nombres </strong>
                                        </font>
                                    </div>
                                </td>
                                <td width=\"350px\">
                                    <div class=\"span1\"></div>
                                    <div class=\"span10\">
                                        <font size=\"1\">
                                            ";
            // line 56
            echo twig_escape_filter($this->env, (isset($context["DGnombreApellido"]) ? $context["DGnombreApellido"] : $this->getContext($context, "DGnombreApellido")), "html", null, true);
            echo "
                                        </font>
                                    </div>
                                </td>
                                <td align=\"right\" width=\"200px\">
                                    <div class=\"span11\" align=\"right\">
                                        <font size=\"1\">
                                            <strong>DNI </strong>
                                        </font>
                                    </div>
                                </td>
                                <td width=\"350px\">
                                    <div class=\"span1\"></div>
                                    <div class=\"span10\">
                                        <font size=\"1\">
                                            ";
            // line 71
            echo twig_escape_filter($this->env, (isset($context["DGdni"]) ? $context["DGdni"] : $this->getContext($context, "DGdni")), "html", null, true);
            echo "
                                        </font>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td align=\"right\" >
                                    <div class=\"span11\" align=\"right\">
                                        <font size=\"1\">
                                            <strong>Edad </strong>
                                        </font>
                                    </div>
                                </td>
                                <td >
                                    <div class=\"span1\"></div>
                                    <div class=\"span10\">
                                        <font size=\"1\">
                                            <!--";
            // line 88
            echo twig_escape_filter($this->env, (isset($context["DGFecNac"]) ? $context["DGFecNac"] : $this->getContext($context, "DGFecNac")), "html", null, true);
            echo "-->
                                            ";
            // line 89
            $context["dateList"] = twig_split_filter($this->env, (isset($context["DGFecNac"]) ? $context["DGFecNac"] : $this->getContext($context, "DGFecNac")), "/");
            // line 90
            echo "                                            ";
            $context["cDGFecNac"] = (((($this->getAttribute((isset($context["dateList"]) ? $context["dateList"] : $this->getContext($context, "dateList")), 1, array(), "array") . "/") . $this->getAttribute((isset($context["dateList"]) ? $context["dateList"] : $this->getContext($context, "dateList")), 0, array(), "array")) . "/") . $this->getAttribute((isset($context["dateList"]) ? $context["dateList"] : $this->getContext($context, "dateList")), 2, array(), "array"));
            // line 91
            echo "                                            ";
            $context["dFecNac"] = twig_date_converter($this->env, (isset($context["cDGFecNac"]) ? $context["cDGFecNac"] : $this->getContext($context, "cDGFecNac")));
            // line 92
            echo "                                            ";
            if (($this->env->getExtension('extension_jaxxes')->ageCalculate((isset($context["dFecNac"]) ? $context["dFecNac"] : $this->getContext($context, "dFecNac"))) <= 0)) {
                // line 93
                echo "                                                No se ingresó correctamente la fecha de nacimiento.
                                            ";
            } else {
                // line 95
                echo "                                                ";
                echo twig_escape_filter($this->env, $this->env->getExtension('extension_jaxxes')->ageCalculate((isset($context["dFecNac"]) ? $context["dFecNac"] : $this->getContext($context, "dFecNac"))), "html", null, true);
                echo " años
                                            ";
            }
            // line 97
            echo "                                        </font>
                                    </div>
                                </td>
                                <td align=\"right\" >
                                    <div class=\"span11\" align=\"right\">
                                        <font size=\"1\">
                                            <strong>Estado Civil </strong>
                                        </font>
                                    </div>
                                </td>
                                <td >
                                    <div class=\"span1\"></div>
                                    <div class=\"span10\">
                                        <font size=\"1\">
                                            ";
            // line 111
            echo twig_escape_filter($this->env, (isset($context["DGEstCiv"]) ? $context["DGEstCiv"] : $this->getContext($context, "DGEstCiv")), "html", null, true);
            echo "
                                        </font>
                                    </div>
                                </td>
                            </tr>
                            
                            ";
            // line 117
            if ((isset($context["validarED_Mae"]) ? $context["validarED_Mae"] : $this->getContext($context, "validarED_Mae"))) {
                // line 118
                echo "                            
                                <tr>
                                    <td align=\"right\" >
                                        <div class=\"span11\" align=\"right\">
                                            <font size=\"1\">
                                                <strong>Grado de Instrucción </strong>
                                            </font>
                                        </div>
                                    </td>
                                    <td>
                                        <div class=\"span1\"></div>
                                        <div class=\"span10\">
                                            <font size=\"1\">
                                                Maestria   
                                            </font>
                                        </div>
                                    </td>
                                    <td align=\"right\" >
                                        <div class=\"span11\" align=\"right\">
                                            <font size=\"1\">
                                                <strong>Centro de Estudios </strong>
                                            </font>
                                        </div>
                                    </td>
                                    <td >
                                        <div class=\"span1\"></div>
                                        <div class=\"span10\">
                                            <font size=\"1\">
                                                ";
                // line 146
                echo twig_escape_filter($this->env, (isset($context["ED_Mae_CentroEstudio"]) ? $context["ED_Mae_CentroEstudio"] : $this->getContext($context, "ED_Mae_CentroEstudio")), "html", null, true);
                echo "
                                            </font>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td align=\"right\" >
                                        <div class=\"span11\" align=\"right\">
                                            <font size=\"1\">
                                                <strong>Especialidad </strong>
                                            </font>
                                        </div>
                                    </td>
                                    <td colspan=3>
                                        <div class=\"span1\"></div>
                                        <div class=\"span10\">
                                            <font size=\"1\">
                                                ";
                // line 163
                echo twig_escape_filter($this->env, (isset($context["ED_Mae_Especialidad"]) ? $context["ED_Mae_Especialidad"] : $this->getContext($context, "ED_Mae_Especialidad")), "html", null, true);
                echo "
                                            </font>
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
                                            <font size=\"1\">
                                                <strong>Grado de Instrucción </strong>
                                            </font>
                                        </div>
                                    </td>
                                    <td>
                                        <div class=\"span1\"></div>
                                        <div class=\"span10\">
                                            <font size=\"1\">
                                                Maestria   
                                            </font>
                                        </div>
                                    </td>
                                    <td align=\"right\" >
                                        <div class=\"span11\" align=\"right\">
                                            <font size=\"1\">
                                                <strong>Centro de Estudios </strong>
                                            </font>
                                        </div>
                                    </td>
                                    <td >
                                        <div class=\"span1\"></div>
                                        <div class=\"span10\">
                                            <font size=\"1\">
                                                ";
                // line 199
                echo twig_escape_filter($this->env, (isset($context["ED_Mae_CentroEstudio2"]) ? $context["ED_Mae_CentroEstudio2"] : $this->getContext($context, "ED_Mae_CentroEstudio2")), "html", null, true);
                echo "
                                            </font>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td align=\"right\" >
                                        <div class=\"span11\" align=\"right\">
                                            <font size=\"1\">
                                                <strong>Especialidad </strong>
                                            </font>
                                        </div>
                                    </td>
                                    <td colspan=3>
                                        <div class=\"span1\"></div>
                                        <div class=\"span10\">
                                            <font size=\"1\">
                                                ";
                // line 216
                echo twig_escape_filter($this->env, (isset($context["ED_Mae_Especialidad2"]) ? $context["ED_Mae_Especialidad2"] : $this->getContext($context, "ED_Mae_Especialidad2")), "html", null, true);
                echo "
                                            </font>
                                        </div>
                                    </td>
                                </tr>
                            ";
            }
            // line 222
            echo "                            
                            ";
            // line 223
            if ((isset($context["validarED_Unv"]) ? $context["validarED_Unv"] : $this->getContext($context, "validarED_Unv"))) {
                // line 224
                echo "                            
                                <tr>
                                    <td align=\"right\" >
                                        <div class=\"span11\" align=\"right\">
                                            <font size=\"1\">
                                                <strong>Grado de Instrucción </strong>
                                            </font>
                                        </div>
                                    </td>
                                    <td>
                                        <div class=\"span1\"></div>
                                        <div class=\"span10\">
                                            <font size=\"1\">
                                                Universidad
                                            </font>
                                        </div>
                                    </td>
                                    <td align=\"right\" >
                                        <div class=\"span11\" align=\"right\">
                                            <font size=\"1\">
                                                <strong>Centro de Estudios </strong>
                                            </font>
                                        </div>
                                    </td>
                                    <td >
                                        <div class=\"span1\"></div>
                                        <div class=\"span10\">
                                            <font size=\"1\">
                                                ";
                // line 252
                echo twig_escape_filter($this->env, (isset($context["ED_Unv_CentroEstudio"]) ? $context["ED_Unv_CentroEstudio"] : $this->getContext($context, "ED_Unv_CentroEstudio")), "html", null, true);
                echo "
                                            </font>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td align=\"right\" >
                                        <div class=\"span11\" align=\"right\">
                                            <font size=\"1\">
                                                <strong>Especialidad </strong>
                                            </font>
                                        </div>
                                    </td>
                                    <td colspan=3>
                                        <div class=\"span1\"></div>
                                        <div class=\"span10\">
                                            <font size=\"1\">
                                                ";
                // line 269
                echo twig_escape_filter($this->env, (isset($context["ED_Unv_Especialidad"]) ? $context["ED_Unv_Especialidad"] : $this->getContext($context, "ED_Unv_Especialidad")), "html", null, true);
                echo "
                                            </font>
                                        </div>
                                    </td>
                                </tr>
                            ";
            }
            // line 275
            echo "                            
                            ";
            // line 276
            if ((isset($context["validarED_Unv2"]) ? $context["validarED_Unv2"] : $this->getContext($context, "validarED_Unv2"))) {
                // line 277
                echo "                            
                                <tr>
                                    <td align=\"right\" >
                                        <div class=\"span11\" align=\"right\">
                                            <font size=\"1\">
                                                <strong>Grado de Instrucción </strong>
                                            </font>
                                        </div>
                                    </td>
                                    <td>
                                        <div class=\"span1\"></div>
                                        <div class=\"span10\">
                                            <font size=\"1\">
                                                Universidad
                                            </font>
                                        </div>
                                    </td>
                                    <td align=\"right\" >
                                        <div class=\"span11\" align=\"right\">
                                            <font size=\"1\">
                                                <strong>Centro de Estudios </strong>
                                            </font>
                                        </div>
                                    </td>
                                    <td >
                                        <div class=\"span1\"></div>
                                        <div class=\"span10\">
                                            <font size=\"1\">
                                                ";
                // line 305
                echo twig_escape_filter($this->env, (isset($context["ED_Unv_CentroEstudio2"]) ? $context["ED_Unv_CentroEstudio2"] : $this->getContext($context, "ED_Unv_CentroEstudio2")), "html", null, true);
                echo "
                                            </font>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td align=\"right\" >
                                        <div class=\"span11\" align=\"right\">
                                            <font size=\"1\">
                                                <strong>Especialidad </strong>
                                            </font>
                                        </div>
                                    </td>
                                    <td colspan=3>
                                        <div class=\"span1\"></div>
                                        <div class=\"span10\">
                                            <font size=\"1\">
                                                ";
                // line 322
                echo twig_escape_filter($this->env, (isset($context["ED_Unv_Especialidad2"]) ? $context["ED_Unv_Especialidad2"] : $this->getContext($context, "ED_Unv_Especialidad2")), "html", null, true);
                echo "
                                            </font>
                                        </div>
                                    </td>
                                </tr>
                            ";
            }
            // line 328
            echo "                            
                            ";
            // line 329
            if ((isset($context["validarED_Tec"]) ? $context["validarED_Tec"] : $this->getContext($context, "validarED_Tec"))) {
                // line 330
                echo "                            
                                <tr>
                                    <td align=\"right\" >
                                        <div class=\"span11\" align=\"right\">
                                            <font size=\"1\">
                                                <strong>Grado de Instrucción </strong>
                                            </font>
                                        </div>
                                    </td>
                                    <td>
                                        <div class=\"span1\"></div>
                                        <div class=\"span10\">
                                            <font size=\"1\">
                                                Técnico
                                            </font>
                                        </div>
                                    </td>
                                    <td align=\"right\" >
                                        <div class=\"span11\" align=\"right\">
                                            <font size=\"1\">
                                                <strong>Centro de Estudios </strong>
                                            </font>
                                        </div>
                                    </td>
                                    <td >
                                        <div class=\"span1\"></div>
                                        <div class=\"span10\">
                                            <font size=\"1\">
                                                ";
                // line 358
                echo twig_escape_filter($this->env, (isset($context["ED_Tec_CentroEstudio"]) ? $context["ED_Tec_CentroEstudio"] : $this->getContext($context, "ED_Tec_CentroEstudio")), "html", null, true);
                echo "
                                            </font>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td align=\"right\" >
                                        <div class=\"span11\" align=\"right\">
                                            <font size=\"1\">
                                                <strong>Especialidad </strong>
                                            </font>
                                        </div>
                                    </td>
                                    <td colspan=3>
                                        <div class=\"span1\"></div>
                                        <div class=\"span10\">
                                            <font size=\"1\">
                                                ";
                // line 375
                echo twig_escape_filter($this->env, (isset($context["ED_Tec_Especialidad"]) ? $context["ED_Tec_Especialidad"] : $this->getContext($context, "ED_Tec_Especialidad")), "html", null, true);
                echo "
                                            </font>
                                        </div>
                                    </td>
                                </tr>
                            ";
            }
            // line 381
            echo "                            
                            ";
            // line 382
            if ((isset($context["validarED_Otr"]) ? $context["validarED_Otr"] : $this->getContext($context, "validarED_Otr"))) {
                // line 383
                echo "                            
                                <tr>
                                    <td align=\"right\" >
                                        <div class=\"span11\" align=\"right\">
                                            <font size=\"1\">
                                                <strong>Grado de Instrucción </strong>
                                            </font>
                                        </div>
                                    </td>
                                    <td>
                                        <div class=\"span1\"></div>
                                        <div class=\"span10\">
                                            <font size=\"1\">
                                                Otros Estudios
                                            </font>
                                        </div>
                                    </td>
                                    <td align=\"right\" >
                                        <div class=\"span11\" align=\"right\">
                                            <font size=\"1\">
                                                <strong>Centro de Estudios </strong>
                                            </font>
                                        </div>
                                    </td>
                                    <td >
                                        <div class=\"span1\"></div>
                                        <div class=\"span10\">
                                            <font size=\"1\">
                                                ";
                // line 411
                echo twig_escape_filter($this->env, (isset($context["ED_Otr_CentroEstudio"]) ? $context["ED_Otr_CentroEstudio"] : $this->getContext($context, "ED_Otr_CentroEstudio")), "html", null, true);
                echo "
                                            </font>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td align=\"right\" >
                                        <div class=\"span11\" align=\"right\">
                                            <font size=\"1\">
                                                <strong>Especialidad </strong>
                                            </font>
                                        </div>
                                    </td>
                                    <td colspan=3>
                                        <div class=\"span1\"></div>
                                        <div class=\"span10\">
                                            <font size=\"1\">
                                                ";
                // line 428
                echo twig_escape_filter($this->env, (isset($context["ED_Otr_Especialidad"]) ? $context["ED_Otr_Especialidad"] : $this->getContext($context, "ED_Otr_Especialidad")), "html", null, true);
                echo "
                                            </font>
                                        </div>
                                    </td>
                                </tr>
                            ";
            }
            // line 434
            echo "                            
                            ";
            // line 435
            if ((isset($context["validarED_Esc"]) ? $context["validarED_Esc"] : $this->getContext($context, "validarED_Esc"))) {
                // line 436
                echo "                            
                                <tr>
                                    <td align=\"right\" >
                                        <div class=\"span11\" align=\"right\">
                                            <font size=\"1\">
                                                <strong>Grado de Instrucción </strong>
                                            </font>
                                        </div>
                                    </td>
                                    <td>
                                        <div class=\"span1\"></div>
                                        <div class=\"span10\">
                                            <font size=\"1\">
                                                Escolar
                                            </font>
                                        </div>
                                    </td>
                                    <td align=\"right\" >
                                        <div class=\"span11\" align=\"right\">
                                            <font size=\"1\">
                                                <strong>Centro de Estudios </strong>
                                            </font>
                                        </div>
                                    </td>
                                    <td >
                                        <div class=\"span1\"></div>
                                        <div class=\"span10\">
                                            <font size=\"1\">
                                                ";
                // line 464
                echo twig_escape_filter($this->env, (isset($context["ED_Esc_CentroEstudio"]) ? $context["ED_Esc_CentroEstudio"] : $this->getContext($context, "ED_Esc_CentroEstudio")), "html", null, true);
                echo "
                                            </font>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td align=\"right\" >
                                        <div class=\"span11\" align=\"right\">
                                            <font size=\"1\">
                                                <strong>Especialidad </strong>
                                            </font>
                                        </div>
                                    </td>
                                    <td colspan=3>
                                        <div class=\"span1\"></div>
                                        <div class=\"span10\">
                                            <font size=\"1\">
                                                ";
                // line 481
                echo twig_escape_filter($this->env, (isset($context["ED_Esc_Especialidad"]) ? $context["ED_Esc_Especialidad"] : $this->getContext($context, "ED_Esc_Especialidad")), "html", null, true);
                echo "
                                            </font>
                                        </div>
                                    </td>
                                </tr>
                            ";
            }
            // line 487
            echo "                            
                        </table>
                    ";
        } else {
            // line 490
            echo "                        <h5>
                            ";
            // line 491
            if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "selectionProcessCandidate", array()), "candidate", array()), "gender", array()) == "m")) {
                // line 492
                echo "                                El candidato 
                            ";
            } else {
                // line 494
                echo "                                La candidata 
                            ";
            }
            // line 496
            echo "                            ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "selectionProcessCandidate", array()), "candidate", array()), "firstName", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "selectionProcessCandidate", array()), "candidate", array()), "lastName", array()), "html", null, true);
            echo " no registró su perfil de candidato.
                        </h5>
                    ";
        }
        // line 499
        echo "                </div>
            </td>
        </tr>
        <tr> 
            <td width=\"40px\" ></td>
            <td colspan=2 align=\"right\">
                <div class=\"span11\">
                    <strong>
                        <font size=\"1\">
                            <br>
                            EXPERIENCIA LABORAL
                        </font>
                    </strong>
                </div>
            </td>
        </tr>
        <tr>
            <td width=\"40px\" ></td>
            <td colspan=2 >
                <div class=\"span11\">
                    
                    <table class=\"record_properties\" border=\"1\">
                        ";
        // line 521
        if ((isset($context["validarIL_UlTra"]) ? $context["validarIL_UlTra"] : $this->getContext($context, "validarIL_UlTra"))) {
            // line 522
            echo "                            <tr>
                                <td align=\"left\" width=\"400px\">
                                    <div class=\"span1\"></div>
                                    <font size=\"1\">
                                        <strong>Nombre de la Empresa </strong>
                                    </font>
                                </td>
                                <td width=\"700px\">
                                    <div class=\"span1\"></div>
                                    <font size=\"1\">
                                        ";
            // line 532
            echo twig_escape_filter($this->env, (isset($context["IL_UlTra_Nombre"]) ? $context["IL_UlTra_Nombre"] : $this->getContext($context, "IL_UlTra_Nombre")), "html", null, true);
            echo "
                                    </font>
                                </td>
                            </tr>
                            <tr>
                                <td align=\"left\" width=\"400px\">
                                    <div class=\"span1\"></div>
                                    <font size=\"1\">
                                        <strong>Cargo </strong>
                                    </font>
                                </td>
                                <td width=\"700px\">
                                    <div class=\"span1\"></div>
                                    <font size=\"1\">
                                        ";
            // line 546
            echo twig_escape_filter($this->env, (isset($context["IL_UlTra_CarDes"]) ? $context["IL_UlTra_CarDes"] : $this->getContext($context, "IL_UlTra_CarDes")), "html", null, true);
            echo "
                                    </font>
                                </td>
                            </tr>
                            <tr>
                                <td align=\"left\" width=\"400px\">
                                    <div class=\"span1\"></div>
                                    <font size=\"1\">
                                        <strong>Motivo de Cese </strong>
                                    </font>
                                </td>
                                <td width=\"700px\">
                                    <div class=\"span1\"></div>
                                    <font size=\"1\">
                                        ";
            // line 560
            echo twig_escape_filter($this->env, (isset($context["IL_UlTra_Motivo"]) ? $context["IL_UlTra_Motivo"] : $this->getContext($context, "IL_UlTra_Motivo")), "html", null, true);
            echo "
                                    </font>
                                </td>
                            </tr>
                        ";
        }
        // line 565
        echo "                        
                        ";
        // line 566
        if ((isset($context["validarIL_UlTra2"]) ? $context["validarIL_UlTra2"] : $this->getContext($context, "validarIL_UlTra2"))) {
            // line 567
            echo "                            <tr>
                                <td align=\"left\" width=\"400px\">
                                    <div class=\"span1\"></div>
                                    <font size=\"1\">
                                        <strong>Nombre de la Empresa </strong>
                                    </font>
                                </td>
                                <td width=\"700px\">
                                    <div class=\"span1\"></div>
                                    <font size=\"1\">
                                        ";
            // line 577
            echo twig_escape_filter($this->env, (isset($context["IL_UlTra2_Nombre"]) ? $context["IL_UlTra2_Nombre"] : $this->getContext($context, "IL_UlTra2_Nombre")), "html", null, true);
            echo "
                                    </font>
                                </td>
                            </tr>
                            <tr>
                                <td align=\"left\" width=\"400px\">
                                    <div class=\"span1\"></div>
                                    <font size=\"1\">
                                        <strong>Cargo </strong>
                                    </font>
                                </td>
                                <td width=\"700px\">
                                    <div class=\"span1\"></div>
                                    <font size=\"1\">
                                        ";
            // line 591
            echo twig_escape_filter($this->env, (isset($context["IL_UlTra2_CarDes"]) ? $context["IL_UlTra2_CarDes"] : $this->getContext($context, "IL_UlTra2_CarDes")), "html", null, true);
            echo "
                                    </font>
                                </td>
                            </tr>
                            <tr>
                                <td align=\"left\" width=\"400px\">
                                    <div class=\"span1\"></div>
                                    <font size=\"1\">
                                        <strong>Motivo de Cese </strong>
                                    </font>
                                </td>
                                <td width=\"700px\">
                                    <div class=\"span1\"></div>
                                    <font size=\"1\">
                                        ";
            // line 605
            echo twig_escape_filter($this->env, (isset($context["IL_UlTra2_Motivo"]) ? $context["IL_UlTra2_Motivo"] : $this->getContext($context, "IL_UlTra2_Motivo")), "html", null, true);
            echo "
                                    </font>
                                </td>
                            </tr>
                        ";
        }
        // line 610
        echo "                        
                        ";
        // line 611
        if ((isset($context["validarIL_UlTra3"]) ? $context["validarIL_UlTra3"] : $this->getContext($context, "validarIL_UlTra3"))) {
            // line 612
            echo "                            <tr>
                                <td align=\"left\" width=\"400px\">
                                    <div class=\"span1\"></div>
                                    <font size=\"1\">
                                        <strong>Nombre de la Empresa </strong>
                                    </font>
                                </td>
                                <td width=\"700px\">
                                    <div class=\"span1\"></div>
                                    <font size=\"1\">
                                        ";
            // line 622
            echo twig_escape_filter($this->env, (isset($context["IL_UlTra3_Nombre"]) ? $context["IL_UlTra3_Nombre"] : $this->getContext($context, "IL_UlTra3_Nombre")), "html", null, true);
            echo "
                                    </font>
                                </td>
                            </tr>
                            <tr>
                                <td align=\"left\" width=\"400px\">
                                    <div class=\"span1\"></div>
                                    <font size=\"1\">
                                        <strong>Cargo </strong>
                                    </font>
                                </td>
                                <td width=\"700px\">
                                    <div class=\"span1\"></div>
                                    <font size=\"1\">
                                        ";
            // line 636
            echo twig_escape_filter($this->env, (isset($context["IL_UlTra3_CarDes"]) ? $context["IL_UlTra3_CarDes"] : $this->getContext($context, "IL_UlTra3_CarDes")), "html", null, true);
            echo "
                                    </font>
                                </td>
                            </tr>
                            <tr>
                                <td align=\"left\" width=\"400px\">
                                    <div class=\"span1\"></div>
                                    <font size=\"1\">
                                        <strong>Motivo de Cese </strong>
                                    </font>
                                </td>
                                <td width=\"700px\">
                                    <div class=\"span1\"></div>
                                    <font size=\"1\">
                                        ";
            // line 650
            echo twig_escape_filter($this->env, (isset($context["IL_UlTra3_Motivo"]) ? $context["IL_UlTra3_Motivo"] : $this->getContext($context, "IL_UlTra3_Motivo")), "html", null, true);
            echo "
                                    </font>
                                </td>
                            </tr>
                        ";
        }
        // line 655
        echo "                        
                    </table>
                </div>
            </td>
        </tr>
        <tr> 
            <td width=\"40px\" ></td>
            <td colspan=2 align=\"right\">
                <div class=\"span11\">
                    <strong>
                        <font size=\"1\">
                            <br>
                            EVALUACIÓN PSICOLABORAL CONDUCTUAL
                        </font>
                    </strong>
                </div>
            </td>
        </tr>
        
        ";
        // line 674
        if ((isset($context["validarGatbSP"]) ? $context["validarGatbSP"] : $this->getContext($context, "validarGatbSP"))) {
            // line 675
            echo "            <tr>
                <td width=\"40px\" ></td>
                <td colspan=2 >
                    <div class=\"span11\">
                        <legend>
                            <font size=\"1\">Aptitudes</font>
                        </legend>
                        <table class=\"record_properties\" border=\"1\">
                            <tr>
                                <td align=\"left\" bgcolor=\"#6699CC\" width=\"1100px\">
                                    <font size=\"1\">
                                        <strong>1.- General</strong>
                                    </font>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class=\"span1\">
                                    </div>
                                    <div class=\"span11\">
                                        <font size=\"1\">
                                            ";
            // line 696
            $context["general"] = ((($this->getAttribute((isset($context["entityGatbSP"]) ? $context["entityGatbSP"] : $this->getContext($context, "entityGatbSP")), "valorG3", array()) + $this->getAttribute((isset($context["entityGatbSP"]) ? $context["entityGatbSP"] : $this->getContext($context, "entityGatbSP")), "valorG4", array())) + $this->getAttribute((isset($context["entityGatbSP"]) ? $context["entityGatbSP"] : $this->getContext($context, "entityGatbSP")), "valorG5", array())) + 6);
            // line 697
            echo "                                            ";
            if ((((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) >= 0) && ((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) < 81))) {
                // line 698
                echo "                                                Inferior ( ";
                echo twig_escape_filter($this->env, (isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")), "html", null, true);
                echo " puntos)
                                            ";
            } elseif ((((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) > 80) && ((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) < 95))) {
                // line 700
                echo "                                                Normal Inferior ( ";
                echo twig_escape_filter($this->env, (isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")), "html", null, true);
                echo " puntos)
                                            ";
            } elseif ((((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) > 94) && ((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) < 106))) {
                // line 702
                echo "                                                Normal ( ";
                echo twig_escape_filter($this->env, (isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")), "html", null, true);
                echo " puntos)
                                            ";
            } elseif ((((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) > 105) && ((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) < 121))) {
                // line 704
                echo "                                                Normal Superior ( ";
                echo twig_escape_filter($this->env, (isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")), "html", null, true);
                echo " puntos)
                                            ";
            } elseif ((((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) > 120) && ((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) < 135))) {
                // line 706
                echo "                                                Superior ( ";
                echo twig_escape_filter($this->env, (isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")), "html", null, true);
                echo " puntos)
                                            ";
            } else {
                // line 708
                echo "                                                Muy Superior ( ";
                echo twig_escape_filter($this->env, (isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")), "html", null, true);
                echo " puntos)
                                            ";
            }
            // line 710
            echo "                                        </font>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td align=\"left\" bgcolor=\"#6699CC\">
                                    <font size=\"1\">
                                        <strong>2.- Verbal</strong>
                                    </font>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class=\"span1\">
                                    </div>
                                    <div class=\"span8\">
                                        <font size=\"1\">
                                            ";
            // line 727
            $context["general"] = ($this->getAttribute((isset($context["entityGatbSP"]) ? $context["entityGatbSP"] : $this->getContext($context, "entityGatbSP")), "valorV", array()) + 6);
            // line 728
            echo "                                            ";
            if ((((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) >= 0) && ((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) < 81))) {
                // line 729
                echo "                                                Inferior ( ";
                echo twig_escape_filter($this->env, (isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")), "html", null, true);
                echo " puntos)
                                            ";
            } elseif ((((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) > 80) && ((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) < 95))) {
                // line 731
                echo "                                                Normal Inferior ( ";
                echo twig_escape_filter($this->env, (isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")), "html", null, true);
                echo " puntos)
                                            ";
            } elseif ((((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) > 94) && ((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) < 106))) {
                // line 733
                echo "                                                Normal ( ";
                echo twig_escape_filter($this->env, (isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")), "html", null, true);
                echo " puntos)
                                            ";
            } elseif ((((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) > 105) && ((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) < 121))) {
                // line 735
                echo "                                                Normal Superior ( ";
                echo twig_escape_filter($this->env, (isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")), "html", null, true);
                echo " puntos)
                                            ";
            } elseif ((((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) > 120) && ((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) < 135))) {
                // line 737
                echo "                                                Superior ( ";
                echo twig_escape_filter($this->env, (isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")), "html", null, true);
                echo " puntos)
                                            ";
            } else {
                // line 739
                echo "                                                Muy Superior ( ";
                echo twig_escape_filter($this->env, (isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")), "html", null, true);
                echo " puntos)
                                            ";
            }
            // line 741
            echo "                                        </font>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td align=\"left\" bgcolor=\"#6699CC\">
                                    <font size=\"1\">
                                        <strong>3.- Numérica</strong>
                                    </font>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class=\"span1\">
                                    </div>
                                    <div class=\"span8\">
                                        <font size=\"1\">
                                            ";
            // line 758
            $context["general"] = (($this->getAttribute((isset($context["entityGatbSP"]) ? $context["entityGatbSP"] : $this->getContext($context, "entityGatbSP")), "valorN2", array()) + $this->getAttribute((isset($context["entityGatbSP"]) ? $context["entityGatbSP"] : $this->getContext($context, "entityGatbSP")), "valorN5", array())) + 6);
            // line 759
            echo "                                            ";
            if ((((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) >= 0) && ((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) < 81))) {
                // line 760
                echo "                                                Inferior ( ";
                echo twig_escape_filter($this->env, (isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")), "html", null, true);
                echo " puntos)
                                            ";
            } elseif ((((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) > 80) && ((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) < 95))) {
                // line 762
                echo "                                                Normal Inferior ( ";
                echo twig_escape_filter($this->env, (isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")), "html", null, true);
                echo " puntos)
                                            ";
            } elseif ((((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) > 94) && ((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) < 106))) {
                // line 764
                echo "                                                Normal ( ";
                echo twig_escape_filter($this->env, (isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")), "html", null, true);
                echo " puntos)
                                            ";
            } elseif ((((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) > 105) && ((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) < 121))) {
                // line 766
                echo "                                                Normal Superior ( ";
                echo twig_escape_filter($this->env, (isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")), "html", null, true);
                echo " puntos)
                                            ";
            } elseif ((((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) > 120) && ((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) < 135))) {
                // line 768
                echo "                                                Superior ( ";
                echo twig_escape_filter($this->env, (isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")), "html", null, true);
                echo " puntos)
                                            ";
            } else {
                // line 770
                echo "                                                Muy Superior ( ";
                echo twig_escape_filter($this->env, (isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")), "html", null, true);
                echo " puntos)
                                            ";
            }
            // line 772
            echo "                                        </font>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td align=\"left\" bgcolor=\"#6699CC\">
                                    <font size=\"1\">
                                        <strong>4.- Espacial</strong>
                                    </font>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class=\"span1\">
                                    </div>
                                    <div class=\"span8\">
                                        <font size=\"1\">
                                            ";
            // line 789
            $context["general"] = ($this->getAttribute((isset($context["entityGatbSP"]) ? $context["entityGatbSP"] : $this->getContext($context, "entityGatbSP")), "valorS", array()) + 8);
            // line 790
            echo "                                            ";
            if ((((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) >= 0) && ((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) < 81))) {
                // line 791
                echo "                                                Inferior ( ";
                echo twig_escape_filter($this->env, (isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")), "html", null, true);
                echo " puntos)
                                            ";
            } elseif ((((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) > 80) && ((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) < 95))) {
                // line 793
                echo "                                                Normal Inferior ( ";
                echo twig_escape_filter($this->env, (isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")), "html", null, true);
                echo " puntos)
                                            ";
            } elseif ((((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) > 94) && ((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) < 106))) {
                // line 795
                echo "                                                Normal ( ";
                echo twig_escape_filter($this->env, (isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")), "html", null, true);
                echo " puntos)
                                            ";
            } elseif ((((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) > 105) && ((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) < 121))) {
                // line 797
                echo "                                                Normal Superior ( ";
                echo twig_escape_filter($this->env, (isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")), "html", null, true);
                echo " puntos)
                                            ";
            } elseif ((((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) > 120) && ((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) < 135))) {
                // line 799
                echo "                                                Superior ( ";
                echo twig_escape_filter($this->env, (isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")), "html", null, true);
                echo " puntos)
                                            ";
            } else {
                // line 801
                echo "                                                Muy Superior ( ";
                echo twig_escape_filter($this->env, (isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")), "html", null, true);
                echo " puntos)
                                            ";
            }
            // line 803
            echo "                                        </font>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td align=\"left\" bgcolor=\"#6699CC\">
                                    <font size=\"1\">
                                        <strong>5.- De Oficina</strong>
                                    </font>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class=\"span1\">
                                    </div>
                                    <div class=\"span8\">
                                        <font size=\"1\">
                                            ";
            // line 820
            $context["general"] = ($this->getAttribute((isset($context["entityGatbSP"]) ? $context["entityGatbSP"] : $this->getContext($context, "entityGatbSP")), "valorQ", array()) + 9);
            // line 821
            echo "                                            ";
            if ((((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) >= 0) && ((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) < 81))) {
                // line 822
                echo "                                                Inferior ( ";
                echo twig_escape_filter($this->env, (isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")), "html", null, true);
                echo " puntos)
                                            ";
            } elseif ((((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) > 80) && ((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) < 95))) {
                // line 824
                echo "                                                Normal Inferior ( ";
                echo twig_escape_filter($this->env, (isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")), "html", null, true);
                echo " puntos)
                                            ";
            } elseif ((((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) > 94) && ((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) < 106))) {
                // line 826
                echo "                                                Normal ( ";
                echo twig_escape_filter($this->env, (isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")), "html", null, true);
                echo " puntos)
                                            ";
            } elseif ((((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) > 105) && ((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) < 121))) {
                // line 828
                echo "                                                Normal Superior ( ";
                echo twig_escape_filter($this->env, (isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")), "html", null, true);
                echo " puntos)
                                            ";
            } elseif ((((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) > 120) && ((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) < 135))) {
                // line 830
                echo "                                                Superior ( ";
                echo twig_escape_filter($this->env, (isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")), "html", null, true);
                echo " puntos)
                                            ";
            } else {
                // line 832
                echo "                                                Muy Superior ( ";
                echo twig_escape_filter($this->env, (isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")), "html", null, true);
                echo " puntos)
                                            ";
            }
            // line 834
            echo "                                        </font>
                                    </div>
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
                    <strong>
                        <font size=\"1\">
                            Comentario adicional
                        </font>
                    </strong>
                </td>
            </tr>
            <tr> 
                <td width=\"40px\" ></td>
                <td colspan=2 >
                    <font size=\"1\">";
            // line 857
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "commentGTB", array()), "html", null, true);
            echo "</font>
                </td>
            </tr>
            -->
        ";
        }
        // line 862
        echo "        ";
        if ((isset($context["validarPmaSP"]) ? $context["validarPmaSP"] : $this->getContext($context, "validarPmaSP"))) {
            // line 863
            echo "            <tr>
                <td width=\"40px\" ></td>
                <td colspan=2 >
                    <div class=\"span11\">
                        <legend>
                            <font size=\"1\">Características de lenguaje y comunicación, se carga los datos del Pma</font>
                        </legend>
                        <table class=\"record_properties\" border=\"1\">
                            <tr>
                                <td align=\"left\" bgcolor=\"#6699CC\" width=\"1100px\">
                                    <font size=\"1\">
                                        <strong>1.- Comprensión verbal</strong>
                                    </font>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class=\"span1\">
                                    </div>
                                    <div class=\"span11\">
                                        <font size=\"1\">
                                            ";
            // line 884
            $context["general"] = $this->getAttribute((isset($context["entityPmaSP"]) ? $context["entityPmaSP"] : $this->getContext($context, "entityPmaSP")), "valorV", array());
            // line 885
            echo "                                            ";
            if ((((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) >= 1) && ((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) <= 3))) {
                // line 886
                echo "                                                Nivel 1 ( ";
                echo twig_escape_filter($this->env, (isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")), "html", null, true);
                echo " puntos)
                                            ";
            } elseif ((((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) >= 4) && ((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) <= 6))) {
                // line 888
                echo "                                                Nivel 2 ( ";
                echo twig_escape_filter($this->env, (isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")), "html", null, true);
                echo " puntos)
                                            ";
            } elseif ((((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) >= 7) && ((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) <= 9))) {
                // line 890
                echo "                                                Nivel 3 ( ";
                echo twig_escape_filter($this->env, (isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")), "html", null, true);
                echo " puntos)
                                            ";
            } elseif ((((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) >= 10) && ((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) <= 15))) {
                // line 892
                echo "                                                Nivel 4 ( ";
                echo twig_escape_filter($this->env, (isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")), "html", null, true);
                echo " puntos)
                                            ";
            } elseif ((((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) >= 16) && ((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) <= 21))) {
                // line 894
                echo "                                                Nivel 5 ( ";
                echo twig_escape_filter($this->env, (isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")), "html", null, true);
                echo " puntos)
                                            ";
            } elseif ((((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) >= 22) && ((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) <= 27))) {
                // line 896
                echo "                                                Nivel 6 ( ";
                echo twig_escape_filter($this->env, (isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")), "html", null, true);
                echo " puntos)
                                            ";
            } elseif ((((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) >= 28) && ((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) <= 33))) {
                // line 898
                echo "                                                Nivel 7 ( ";
                echo twig_escape_filter($this->env, (isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")), "html", null, true);
                echo " puntos)
                                            ";
            } elseif ((((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) >= 34) && ((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) <= 45))) {
                // line 900
                echo "                                                Nivel 8 ( ";
                echo twig_escape_filter($this->env, (isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")), "html", null, true);
                echo " puntos)
                                            ";
            } elseif ((((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) >= 45) && ((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) <= 49))) {
                // line 902
                echo "                                                Nivel 9 ( ";
                echo twig_escape_filter($this->env, (isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")), "html", null, true);
                echo " puntos)
                                            ";
            } else {
                // line 904
                echo "                                                Nivel 0 ( ";
                echo twig_escape_filter($this->env, (isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")), "html", null, true);
                echo " puntos)
                                            ";
            }
            // line 906
            echo "                                        </font>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td align=\"left\" bgcolor=\"#6699CC\">
                                    <font size=\"1\">
                                        <strong>2.- Concepción espacial</strong>
                                    </font>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class=\"span1\">
                                    </div>
                                    <div class=\"span8\">
                                        <font size=\"1\">
                                            ";
            // line 923
            $context["general"] = $this->getAttribute((isset($context["entityPmaSP"]) ? $context["entityPmaSP"] : $this->getContext($context, "entityPmaSP")), "valorE", array());
            // line 924
            echo "                                            ";
            if ((((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) >= 0) && ((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) <= 6))) {
                // line 925
                echo "                                                Nivel 1 ( ";
                echo twig_escape_filter($this->env, (isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")), "html", null, true);
                echo " puntos)
                                            ";
            } elseif ((((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) >= 7) && ((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) <= 12))) {
                // line 927
                echo "                                                Nivel 2 ( ";
                echo twig_escape_filter($this->env, (isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")), "html", null, true);
                echo " puntos)
                                            ";
            } elseif ((((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) >= 13) && ((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) <= 18))) {
                // line 929
                echo "                                                Nivel 3 ( ";
                echo twig_escape_filter($this->env, (isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")), "html", null, true);
                echo " puntos)
                                            ";
            } elseif ((((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) >= 19) && ((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) <= 23))) {
                // line 931
                echo "                                                Nivel 4 ( ";
                echo twig_escape_filter($this->env, (isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")), "html", null, true);
                echo " puntos)
                                            ";
            } elseif ((((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) >= 24) && ((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) <= 28))) {
                // line 933
                echo "                                                Nivel 5 ( ";
                echo twig_escape_filter($this->env, (isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")), "html", null, true);
                echo " puntos)
                                            ";
            } elseif ((((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) >= 29) && ((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) <= 33))) {
                // line 935
                echo "                                                Nivel 6 ( ";
                echo twig_escape_filter($this->env, (isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")), "html", null, true);
                echo " puntos)
                                            ";
            } elseif ((((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) >= 34) && ((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) <= 42))) {
                // line 937
                echo "                                                Nivel 7 ( ";
                echo twig_escape_filter($this->env, (isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")), "html", null, true);
                echo " puntos)
                                            ";
            } elseif ((((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) >= 43) && ((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) <= 48))) {
                // line 939
                echo "                                                Nivel 8 ( ";
                echo twig_escape_filter($this->env, (isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")), "html", null, true);
                echo " puntos)
                                            ";
            } elseif ((((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) >= 49) && ((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) <= 54))) {
                // line 941
                echo "                                                Nivel 9 ( ";
                echo twig_escape_filter($this->env, (isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")), "html", null, true);
                echo " puntos)
                                            ";
            } else {
                // line 943
                echo "                                                Nivel -
                                            ";
            }
            // line 945
            echo "                                        </font>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td align=\"left\" bgcolor=\"#6699CC\">
                                    <font size=\"1\">
                                        <strong>3.- Razonamiento</strong>
                                    </font>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class=\"span1\">
                                    </div>
                                    <div class=\"span8\">
                                        <font size=\"1\">
                                            ";
            // line 962
            $context["general"] = $this->getAttribute((isset($context["entityPmaSP"]) ? $context["entityPmaSP"] : $this->getContext($context, "entityPmaSP")), "valorR", array());
            // line 963
            echo "                                            ";
            if ((((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) >= 0) && ((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) <= 3))) {
                // line 964
                echo "                                                Nivel 1 ( ";
                echo twig_escape_filter($this->env, (isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")), "html", null, true);
                echo " puntos)
                                            ";
            } elseif ((((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) >= 4) && ((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) <= 8))) {
                // line 966
                echo "                                                Nivel 2 ( ";
                echo twig_escape_filter($this->env, (isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")), "html", null, true);
                echo " puntos)
                                            ";
            } elseif ((((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) >= 9) && ((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) <= 12))) {
                // line 968
                echo "                                                Nivel 3 ( ";
                echo twig_escape_filter($this->env, (isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")), "html", null, true);
                echo " puntos)
                                            ";
            } elseif ((((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) >= 13) && ((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) <= 14))) {
                // line 970
                echo "                                                Nivel 4 ( ";
                echo twig_escape_filter($this->env, (isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")), "html", null, true);
                echo " puntos)
                                            ";
            } elseif ((((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) >= 15) && ((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) <= 16))) {
                // line 972
                echo "                                                Nivel 5 ( ";
                echo twig_escape_filter($this->env, (isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")), "html", null, true);
                echo " puntos)
                                            ";
            } elseif ((((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) >= 18) && ((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) <= 17))) {
                // line 974
                echo "                                                Nivel 6 ( ";
                echo twig_escape_filter($this->env, (isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")), "html", null, true);
                echo " puntos)
                                            ";
            } elseif ((((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) >= 19) && ((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) <= 21))) {
                // line 976
                echo "                                                Nivel 7 ( ";
                echo twig_escape_filter($this->env, (isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")), "html", null, true);
                echo " puntos)
                                            ";
            } elseif ((((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) >= 22) && ((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) <= 24))) {
                // line 978
                echo "                                                Nivel 8 ( ";
                echo twig_escape_filter($this->env, (isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")), "html", null, true);
                echo " puntos)
                                            ";
            } elseif ((((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) >= 25) && ((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) <= 30))) {
                // line 980
                echo "                                                Nivel 9 ( ";
                echo twig_escape_filter($this->env, (isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")), "html", null, true);
                echo " puntos)
                                            ";
            } else {
                // line 982
                echo "                                                Nivel -
                                            ";
            }
            // line 984
            echo "                                        </font>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td align=\"left\" bgcolor=\"#6699CC\">
                                    <font size=\"1\">
                                        <strong>4.- Cálculo numérico</strong>
                                    </font>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class=\"span1\">
                                    </div>
                                    <div class=\"span8\">
                                        <font size=\"1\">
                                            ";
            // line 1001
            $context["general"] = $this->getAttribute((isset($context["entityPmaSP"]) ? $context["entityPmaSP"] : $this->getContext($context, "entityPmaSP")), "valorN", array());
            // line 1002
            echo "                                            ";
            if ((((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) >= 1) && ((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) <= 7))) {
                // line 1003
                echo "                                                Nivel 1 ( ";
                echo twig_escape_filter($this->env, (isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")), "html", null, true);
                echo " puntos)
                                            ";
            } elseif ((((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) >= 8) && ((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) <= 12))) {
                // line 1005
                echo "                                                Nivel 2 ( ";
                echo twig_escape_filter($this->env, (isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")), "html", null, true);
                echo " puntos)
                                            ";
            } elseif ((((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) >= 13) && ((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) <= 16))) {
                // line 1007
                echo "                                                Nivel 3 ( ";
                echo twig_escape_filter($this->env, (isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")), "html", null, true);
                echo " puntos)
                                            ";
            } elseif ((((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) >= 17) && ((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) <= 21))) {
                // line 1009
                echo "                                                Nivel 4 ( ";
                echo twig_escape_filter($this->env, (isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")), "html", null, true);
                echo " puntos)
                                            ";
            } elseif ((((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) >= 22) && ((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) <= 26))) {
                // line 1011
                echo "                                                Nivel 5 ( ";
                echo twig_escape_filter($this->env, (isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")), "html", null, true);
                echo " puntos)
                                            ";
            } elseif ((((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) >= 27) && ((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) <= 31))) {
                // line 1013
                echo "                                                Nivel 6 ( ";
                echo twig_escape_filter($this->env, (isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")), "html", null, true);
                echo " puntos)
                                            ";
            } elseif ((((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) >= 32) && ((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) <= 37))) {
                // line 1015
                echo "                                                Nivel 7 ( ";
                echo twig_escape_filter($this->env, (isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")), "html", null, true);
                echo " puntos)
                                            ";
            } elseif ((((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) >= 38) && ((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) <= 49))) {
                // line 1017
                echo "                                                Nivel 8 ( ";
                echo twig_escape_filter($this->env, (isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")), "html", null, true);
                echo " puntos)
                                            ";
            } elseif ((((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) >= 50) && ((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) <= 70))) {
                // line 1019
                echo "                                                Nivel 9 ( ";
                echo twig_escape_filter($this->env, (isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")), "html", null, true);
                echo " puntos)
                                            ";
            } else {
                // line 1021
                echo "                                                Nivel 0
                                            ";
            }
            // line 1023
            echo "                                        </font>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td align=\"left\" bgcolor=\"#6699CC\">
                                    <font size=\"1\">
                                        <strong>5.- Fluidez verbal</strong>
                                    </font>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class=\"span1\">
                                    </div>
                                    <div class=\"span8\">
                                        <font size=\"1\">
                                            ";
            // line 1040
            $context["general"] = $this->getAttribute((isset($context["entityPmaSP"]) ? $context["entityPmaSP"] : $this->getContext($context, "entityPmaSP")), "valorF", array());
            // line 1041
            echo "                                            ";
            if ((((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) >= 1) && ((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) <= 25))) {
                // line 1042
                echo "                                                Nivel 1 ( ";
                echo twig_escape_filter($this->env, (isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")), "html", null, true);
                echo " puntos)
                                            ";
            } elseif ((((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) >= 26) && ((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) <= 28))) {
                // line 1044
                echo "                                                Nivel 2 ( ";
                echo twig_escape_filter($this->env, (isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")), "html", null, true);
                echo " puntos)
                                            ";
            } elseif ((((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) >= 29) && ((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) <= 30))) {
                // line 1046
                echo "                                                Nivel 3 ( ";
                echo twig_escape_filter($this->env, (isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")), "html", null, true);
                echo " puntos)
                                            ";
            } elseif ((((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) >= 31) && ((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) <= 37))) {
                // line 1048
                echo "                                                Nivel 4 ( ";
                echo twig_escape_filter($this->env, (isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")), "html", null, true);
                echo " puntos)
                                            ";
            } elseif ((((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) >= 38) && ((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) <= 43))) {
                // line 1050
                echo "                                                Nivel 5 ( ";
                echo twig_escape_filter($this->env, (isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")), "html", null, true);
                echo " puntos)
                                            ";
            } elseif ((((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) >= 44) && ((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) <= 52))) {
                // line 1052
                echo "                                                Nivel 6 ( ";
                echo twig_escape_filter($this->env, (isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")), "html", null, true);
                echo " puntos)
                                            ";
            } elseif ((((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) >= 53) && ((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) <= 58))) {
                // line 1054
                echo "                                                Nivel 7 ( ";
                echo twig_escape_filter($this->env, (isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")), "html", null, true);
                echo " puntos)
                                            ";
            } elseif ((((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) >= 59) && ((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) <= 64))) {
                // line 1056
                echo "                                                Nivel 8 ( ";
                echo twig_escape_filter($this->env, (isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")), "html", null, true);
                echo " puntos)
                                            ";
            } elseif ((((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) >= 65) && ((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) <= 70))) {
                // line 1058
                echo "                                                Nivel 9 ( ";
                echo twig_escape_filter($this->env, (isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")), "html", null, true);
                echo " puntos)
                                            ";
            } else {
                // line 1060
                echo "                                                Nivel 0
                                            ";
            }
            // line 1062
            echo "                                        </font>
                                    </div>
                                </td>
                            </tr>
                        </table>
                        <br>
                        <table class=\"record_properties\" border=\"1\">
                            <tr>
                                <td align=\"left\" bgcolor=\"#6699CC\" width=\"1100px\">
                                    <font size=\"1\">
                                        <strong>Total</strong>
                                    </font>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class=\"span1\">
                                    </div>
                                    <div class=\"span11\">
                                        <font size=\"1\">
                                            ";
            // line 1082
            $context["general"] = (((((1.5 * $this->getAttribute((isset($context["entityPmaSP"]) ? $context["entityPmaSP"] : $this->getContext($context, "entityPmaSP")), "valorV", array())) + $this->getAttribute((isset($context["entityPmaSP"]) ? $context["entityPmaSP"] : $this->getContext($context, "entityPmaSP")), "valorE", array())) + (2 * $this->getAttribute((isset($context["entityPmaSP"]) ? $context["entityPmaSP"] : $this->getContext($context, "entityPmaSP")), "valorR", array()))) + $this->getAttribute((isset($context["entityPmaSP"]) ? $context["entityPmaSP"] : $this->getContext($context, "entityPmaSP")), "valorN", array())) + $this->getAttribute((isset($context["entityPmaSP"]) ? $context["entityPmaSP"] : $this->getContext($context, "entityPmaSP")), "valorF", array()));
            // line 1083
            echo "                                            ";
            if ((((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) >= 0) && ((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) < 83))) {
                // line 1084
                echo "                                                DEFICIENTE ( ";
                echo twig_escape_filter($this->env, (isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")), "html", null, true);
                echo " puntos)
                                            ";
            } elseif ((((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) >= 83) && ((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) < 127))) {
                // line 1086
                echo "                                                INFERIOR ( ";
                echo twig_escape_filter($this->env, (isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")), "html", null, true);
                echo " puntos)
                                            ";
            } elseif ((((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) > 127) && ((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) <= 171))) {
                // line 1088
                echo "                                                NORMAL ( ";
                echo twig_escape_filter($this->env, (isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")), "html", null, true);
                echo " puntos)
                                            ";
            } elseif ((((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) > 171) && ((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) <= 215))) {
                // line 1090
                echo "                                                NORMAL BRILLANTE ( ";
                echo twig_escape_filter($this->env, (isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")), "html", null, true);
                echo " puntos)
                                            ";
            } elseif ((((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) > 215) && ((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) <= 259))) {
                // line 1092
                echo "                                                SUPERIOR ( ";
                echo twig_escape_filter($this->env, (isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")), "html", null, true);
                echo " puntos)
                                            ";
            } elseif (((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")) > 259)) {
                // line 1094
                echo "                                                MUY SUPERIOR ( ";
                echo twig_escape_filter($this->env, (isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")), "html", null, true);
                echo " puntos)
                                            ";
            } else {
                // line 1096
                echo "                                               - ( ";
                echo twig_escape_filter($this->env, (isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")), "html", null, true);
                echo " puntos)
                                            ";
            }
            // line 1098
            echo "                                        </font>
                                    </div>
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
                    <strong>
                        <font size=\"1\">
                            Comentario adicional
                        </font>
                    </strong>
                </td>
            </tr>
            <tr> 
                <td width=\"40px\" ></td>
                <td colspan=2 >
                    <font size=\"1\">";
            // line 1120
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "commentPMA", array()), "html", null, true);
            echo "</font>
                </td>
            </tr>
            -->
        ";
        }
        // line 1125
        echo "        
        ";
        // line 1126
        if ((isset($context["validarICESP"]) ? $context["validarICESP"] : $this->getContext($context, "validarICESP"))) {
            // line 1127
            echo "            <tr>
                <td width=\"40px\" ></td>
                <td colspan=2 >
                    <div class=\"span11\">
                        <legend>
                            <font size=\"1\">Competencias laborales</font>
                        </legend>
                        <table class=\"record_properties\" border=\"1\">
                            <tr>
                                <td align=\"left\" bgcolor=\"#6699CC\" width=\"1100px\">
                                    <font size=\"1\">
                                        <strong>1.- Intrapersonales</strong>
                                    </font>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class=\"span1\">
                                    </div>
                                    <div class=\"span11\">
                                        <font size=\"1\">
                                            <strong>
                                                Valor obtenido de la escala:
                                            </strong>
                                            ";
            // line 1151
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entityICESP"]) ? $context["entityICESP"] : $this->getContext($context, "entityICESP")), "ce_Intrapersonal", array()), "html", null, true);
            echo "
                                        </font>
                                        <table>
                                            <tr>
                                                <td width=\"100px\">
                                                    <font size=\"1\">
                                                        <strong>
                                                            Subescalas:
                                                        </strong>
                                                    </font>
                                                </td>
                                                <td width=\"200px\">
                                                    <font size=\"1\">
                                                        Conocimiento emocional de sí mismo
                                                    </font>
                                                </td>
                                                <td width=\"220px\">
                                                    <font size=\"1\">
                                                        <strong>
                                                            Valor obtenido de subescala:
                                                        </strong>
                                                    </font>
                                                </td>
                                                <td >
                                                    <font size=\"2\">
                                                        <font size=\"1\">
                                                            ";
            // line 1177
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entityICESP"]) ? $context["entityICESP"] : $this->getContext($context, "entityICESP")), "ce_sub_CM", array()), "html", null, true);
            echo "
                                                        </font>
                                                    </font>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td >
                                                </td>
                                                <td >
                                                    <font size=\"1\">
                                                        Seguridad
                                                    </font>
                                                </td>
                                                <td >
                                                </td>
                                                <td >
                                                    <font size=\"1\">
                                                        ";
            // line 1194
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entityICESP"]) ? $context["entityICESP"] : $this->getContext($context, "entityICESP")), "ce_sub_SE", array()), "html", null, true);
            echo "
                                                    </font>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td >
                                                </td>
                                                <td >
                                                    <font size=\"1\">
                                                        Autoestima
                                                    </font>
                                                </td>
                                                <td >
                                                </td>
                                                <td >
                                                    <font size=\"1\">
                                                        ";
            // line 1210
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entityICESP"]) ? $context["entityICESP"] : $this->getContext($context, "entityICESP")), "ce_sub_AE", array()), "html", null, true);
            echo "
                                                    </font>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td >
                                                </td>
                                                <td >
                                                    <font size=\"1\">
                                                        Autorrealización
                                                    </font>
                                                </td>
                                                <td >
                                                </td>
                                                <td >
                                                    <font size=\"1\">
                                                        ";
            // line 1226
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entityICESP"]) ? $context["entityICESP"] : $this->getContext($context, "entityICESP")), "ce_sub_AR", array()), "html", null, true);
            echo "
                                                    </font>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td >
                                                </td>
                                                <td >
                                                    <font size=\"1\">
                                                        Independencia
                                                    </font>
                                                </td>
                                                <td >
                                                </td>
                                                <td >
                                                    <font size=\"1\">
                                                        ";
            // line 1242
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entityICESP"]) ? $context["entityICESP"] : $this->getContext($context, "entityICESP")), "ce_sub_IN", array()), "html", null, true);
            echo "
                                                    </font>
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
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td align=\"left\" bgcolor=\"#6699CC\">
                                    <font size=\"1\">
                                        <strong>2.- Interpersonales</strong>
                                    </font>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class=\"span1\">
                                    </div>
                                    <div class=\"span11\">
                                        <font size=\"1\">
                                            <strong>
                                                Valor obtenido de la escala:
                                            </strong>
                                            ";
            // line 1277
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entityICESP"]) ? $context["entityICESP"] : $this->getContext($context, "entityICESP")), "ce_Interpersonal", array()), "html", null, true);
            echo "
                                        </font>
                                        <table>
                                            
                                            <tr>
                                                <td width=\"100px\">
                                                    <font size=\"1\">
                                                        <strong>
                                                            Subescalas:
                                                        </strong>
                                                </td>
                                                <td width=\"200px\">
                                                    <font size=\"1\">
                                                        Relaciones Interpersonales
                                                </td>
                                                <td width=\"220px\">
                                                    <font size=\"1\">
                                                        <strong>
                                                            Valor obtenido de subescala:
                                                        </strong>
                                                </td>
                                                <td >
                                                    <font size=\"1\">
                                                        ";
            // line 1300
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entityICESP"]) ? $context["entityICESP"] : $this->getContext($context, "entityICESP")), "ce_sub_RI", array()), "html", null, true);
            echo "
                                                    </font>
                                                    
                                                </td>
                                            </tr>
                                            <tr>
                                                <td >
                                                </td>
                                                <td >
                                                    <font size=\"1\">
                                                        Responsabilidad Social
                                                </td>
                                                <td >
                                                </td>
                                                <td >
                                                    <font size=\"1\">
                                                        ";
            // line 1316
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entityICESP"]) ? $context["entityICESP"] : $this->getContext($context, "entityICESP")), "ce_sub_RS", array()), "html", null, true);
            echo "
                                                    </font>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td >
                                                </td>
                                                <td >
                                                    <font size=\"1\">
                                                        Empatía
                                                </td>
                                                <td >
                                                </td>
                                                <td >
                                                    <font size=\"1\">
                                                        ";
            // line 1331
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entityICESP"]) ? $context["entityICESP"] : $this->getContext($context, "entityICESP")), "ce_sub_EM", array()), "html", null, true);
            echo "
                                                    </font>
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
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td align=\"left\" bgcolor=\"#6699CC\">
                                    <font size=\"1\">
                                        <strong>3.- Adaptabilidad</strong>
                                    </font>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class=\"span1\">
                                    </div>
                                    <div class=\"span11\">
                                        <font size=\"1\">
                                            <strong>
                                                Valor obtenido de la escala:
                                            </strong>
                                            ";
            // line 1366
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entityICESP"]) ? $context["entityICESP"] : $this->getContext($context, "entityICESP")), "ce_Adaptabilidad", array()), "html", null, true);
            echo "
                                        </font>
                                        <table>
                                            <tr>
                                                <td width=\"100px\">
                                                    <font size=\"1\">
                                                        <strong>
                                                            Subescalas:
                                                        </strong>
                                                    </font>
                                                </td>
                                                <td width=\"200px\">
                                                    <font size=\"1\">
                                                        Solución de Problemas
                                                    </font>
                                                </td>
                                                <td width=\"220px\">
                                                    <font size=\"1\">
                                                        <strong>
                                                            Valor obtenido de subescala:
                                                        </strong>
                                                    </font>
                                                </td>
                                                <td >
                                                    <font size=\"1\">
                                                        ";
            // line 1391
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entityICESP"]) ? $context["entityICESP"] : $this->getContext($context, "entityICESP")), "ce_sub_SP", array()), "html", null, true);
            echo "
                                                    </font>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td >
                                                </td>
                                                <td >
                                                    <font size=\"1\">
                                                        Prueba de la Realidad
                                                    </font>
                                                </td>
                                                <td >
                                                </td>
                                                <td >
                                                    <font size=\"1\">
                                                        ";
            // line 1407
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entityICESP"]) ? $context["entityICESP"] : $this->getContext($context, "entityICESP")), "ce_sub_PR", array()), "html", null, true);
            echo "
                                                    </font>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td >
                                                </td>
                                                <td >
                                                    <font size=\"1\">
                                                        Flexibilidad
                                                    </font>
                                                </td>
                                                <td >
                                                </td>
                                                <td >
                                                    <font size=\"1\">
                                                        ";
            // line 1423
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entityICESP"]) ? $context["entityICESP"] : $this->getContext($context, "entityICESP")), "ce_sub_FL", array()), "html", null, true);
            echo "
                                                    </font>
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
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td align=\"left\" bgcolor=\"#6699CC\">
                                    <font size=\"1\">
                                        <strong>4.- Manejo de las tensiones y estrés</strong>
                                    </font>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class=\"span1\">
                                    </div>
                                    <div class=\"span11\">
                                        <font size=\"1\">
                                            <strong>
                                                Valor obtenido de la escala:
                                            </strong>
                                            ";
            // line 1458
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entityICESP"]) ? $context["entityICESP"] : $this->getContext($context, "entityICESP")), "ce_Tension", array()), "html", null, true);
            echo "
                                        </font>
                                        <table>
                                            <tr>
                                                <td width=\"100px\">
                                                    <font size=\"1\">
                                                        <strong>
                                                            Subescalas:
                                                        </strong>
                                                    </font>
                                                </td>
                                                <td width=\"200px\">
                                                    <font size=\"1\">
                                                        Tolerancia a la Tensión
                                                    </font>
                                                </td>
                                                <td width=\"220px\">
                                                    <font size=\"1\">
                                                        <strong>
                                                            Valor obtenido de subescala:
                                                        </strong>
                                                    </font>
                                                </td>
                                                <td >
                                                    <font size=\"1\">
                                                        ";
            // line 1483
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entityICESP"]) ? $context["entityICESP"] : $this->getContext($context, "entityICESP")), "ce_sub_TT", array()), "html", null, true);
            echo "
                                                    </font>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td >
                                                </td>
                                                <td >
                                                    <font size=\"1\">
                                                        Control de los impulsos
                                                    </font>
                                                </td>
                                                <td >
                                                </td>
                                                <td >
                                                    <font size=\"1\">
                                                        ";
            // line 1499
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entityICESP"]) ? $context["entityICESP"] : $this->getContext($context, "entityICESP")), "ce_sub_CI", array()), "html", null, true);
            echo "
                                                    </font>
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
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td align=\"left\" bgcolor=\"#6699CC\">
                                    <font size=\"1\">
                                        <strong>5.- Ánimo general</strong>
                                    </font>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class=\"span1\">
                                    </div>
                                    <div class=\"span11\">
                                        <font size=\"1\">
                                            <strong>
                                                Valor obtenido de la escala:
                                            </strong>
                                            ";
            // line 1534
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entityICESP"]) ? $context["entityICESP"] : $this->getContext($context, "entityICESP")), "ce_Animo", array()), "html", null, true);
            echo "
                                        </font>
                                        <table>
                                            
                                            <tr>
                                                <td width=\"100px\">
                                                    <font size=\"1\">
                                                        <strong>
                                                            Subescalas:
                                                        </strong>
                                                    </font>
                                                </td>
                                                <td width=\"200px\">
                                                    <font size=\"1\">
                                                        Felicidad
                                                    </font>
                                                </td>
                                                <td width=\"220px\">
                                                    <font size=\"1\">
                                                        <strong>
                                                            Valor obtenido de subescala:
                                                        </strong>
                                                    </font>
                                                </td>
                                                
                                                <td >
                                                    <font size=\"1\">
                                                        ";
            // line 1561
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entityICESP"]) ? $context["entityICESP"] : $this->getContext($context, "entityICESP")), "ce_sub_FE", array()), "html", null, true);
            echo "
                                                    </font>
                                                    
                                                </td>
                                            </tr>
                                            <tr>
                                                <td >
                                                </td>
                                                <td >
                                                    <font size=\"1\">
                                                        Optimismo
                                                    </font>
                                                </td>
                                                <td >
                                                </td>
                                                <td >
                                                    <font size=\"1\">
                                                        ";
            // line 1578
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entityICESP"]) ? $context["entityICESP"] : $this->getContext($context, "entityICESP")), "ce_sub_OP", array()), "html", null, true);
            echo "
                                                    </font>
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
                                    <font size=\"1\">
                                        <strong>CE Total</strong>
                                    </font>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class=\"span1\">
                                    </div>
                                    <div class=\"span11\">
                                        <font size=\"1\">
                                            <strong>
                                                Valor obtenido de la escala total:
                                            </strong>
                                            ";
            // line 1616
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entityICESP"]) ? $context["entityICESP"] : $this->getContext($context, "entityICESP")), "ce_Total", array()), "html", null, true);
            echo "
                                        </font>
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
                    <font size=\"1\">
                        <strong>
                            Comentario adicional
                        </strong>
                    </font>
                </td>
            </tr>
            <tr> 
                <td width=\"40px\" ></td>
                <td colspan=2 >
                    <font size=\"1\">";
            // line 1640
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "commentICE", array()), "html", null, true);
            echo "</font>
                </td>
            </tr>
            -->
       ";
        }
        // line 1645
        echo "
        ";
        // line 1646
        if ((isset($context["validarEscudoSP"]) ? $context["validarEscudoSP"] : $this->getContext($context, "validarEscudoSP"))) {
            // line 1647
            echo "            <tr>
                <td width=\"40px\" ></td>
                <td colspan=2 >
                    <div class=\"span11\">
                        <legend>
                            <font size=\"1\">Resultado de la prueba del escudo</font>
                        </legend>
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
                                                            <font size=\"1\">
                                                                <strong>
                                                                    ";
            // line 1666
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entityEscudoSP"]) ? $context["entityEscudoSP"] : $this->getContext($context, "entityEscudoSP")), "escudospdetails", array()), 0, array(), "array"), "escudodetail", array()), "question", array()), "html", null, true);
            echo "
                                                                </strong>
                                                            </font>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <br>
                                                <font size=\"1\">
                                                    ";
            // line 1678
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entityEscudoSP"]) ? $context["entityEscudoSP"] : $this->getContext($context, "entityEscudoSP")), "escudospdetails", array()), 0, array(), "array"), "answer", array()), "html", null, true);
            echo "
                                                </font>
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
                                                            <font size=\"1\">
                                                                <strong>
                                                                    ";
            // line 1695
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entityEscudoSP"]) ? $context["entityEscudoSP"] : $this->getContext($context, "entityEscudoSP")), "escudospdetails", array()), 1, array(), "array"), "escudodetail", array()), "question", array()), "html", null, true);
            echo "
                                                                </strong>
                                                            </font>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <br>
                                                <font size=\"1\">
                                                    ";
            // line 1707
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entityEscudoSP"]) ? $context["entityEscudoSP"] : $this->getContext($context, "entityEscudoSP")), "escudospdetails", array()), 1, array(), "array"), "answer", array()), "html", null, true);
            echo "
                                                </font>
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
                                                            <font size=\"1\">
                                                                <strong>
                                                                    ";
            // line 1726
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entityEscudoSP"]) ? $context["entityEscudoSP"] : $this->getContext($context, "entityEscudoSP")), "escudospdetails", array()), 2, array(), "array"), "escudodetail", array()), "question", array()), "html", null, true);
            echo "
                                                                </strong>
                                                            </font>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <br>
                                                <font size=\"1\">
                                                    ";
            // line 1738
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entityEscudoSP"]) ? $context["entityEscudoSP"] : $this->getContext($context, "entityEscudoSP")), "escudospdetails", array()), 2, array(), "array"), "answer", array()), "html", null, true);
            echo "
                                                </font>
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
                                                            <font size=\"1\">
                                                                <strong>
                                                                    ";
            // line 1755
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entityEscudoSP"]) ? $context["entityEscudoSP"] : $this->getContext($context, "entityEscudoSP")), "escudospdetails", array()), 3, array(), "array"), "escudodetail", array()), "question", array()), "html", null, true);
            echo "
                                                                </strong>
                                                            </font>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <br>
                                                <font size=\"1\">
                                                    ";
            // line 1767
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entityEscudoSP"]) ? $context["entityEscudoSP"] : $this->getContext($context, "entityEscudoSP")), "escudospdetails", array()), 3, array(), "array"), "answer", array()), "html", null, true);
            echo "
                                                </font>
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
                                                            <font size=\"1\">
                                                                <strong>
                                                                    ";
            // line 1786
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entityEscudoSP"]) ? $context["entityEscudoSP"] : $this->getContext($context, "entityEscudoSP")), "escudospdetails", array()), 4, array(), "array"), "escudodetail", array()), "question", array()), "html", null, true);
            echo "
                                                                </strong>
                                                            </font>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <br>
                                                <font size=\"1\">
                                                    ";
            // line 1798
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entityEscudoSP"]) ? $context["entityEscudoSP"] : $this->getContext($context, "entityEscudoSP")), "escudospdetails", array()), 4, array(), "array"), "answer", array()), "html", null, true);
            echo "
                                                </font>
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
                                                            <font size=\"1\">
                                                                <strong>
                                                                    ";
            // line 1815
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entityEscudoSP"]) ? $context["entityEscudoSP"] : $this->getContext($context, "entityEscudoSP")), "escudospdetails", array()), 5, array(), "array"), "escudodetail", array()), "question", array()), "html", null, true);
            echo "
                                                                </strong>
                                                            </font>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <br>
                                                <font size=\"1\">
                                                    ";
            // line 1827
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entityEscudoSP"]) ? $context["entityEscudoSP"] : $this->getContext($context, "entityEscudoSP")), "escudospdetails", array()), 5, array(), "array"), "answer", array()), "html", null, true);
            echo "
                                                </font>
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
                                                            <font size=\"1\">
                                                                <strong>
                                                                    ";
            // line 1846
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entityEscudoSP"]) ? $context["entityEscudoSP"] : $this->getContext($context, "entityEscudoSP")), "escudospdetails", array()), 6, array(), "array"), "escudodetail", array()), "question", array()), "html", null, true);
            echo "
                                                                </strong>
                                                            </font>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <br>
                                                <font size=\"1\">
                                                    ";
            // line 1858
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entityEscudoSP"]) ? $context["entityEscudoSP"] : $this->getContext($context, "entityEscudoSP")), "escudospdetails", array()), 6, array(), "array"), "answer", array()), "html", null, true);
            echo "
                                                </font>
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
                                                            <font size=\"1\">
                                                                <strong>
                                                                    ";
            // line 1875
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entityEscudoSP"]) ? $context["entityEscudoSP"] : $this->getContext($context, "entityEscudoSP")), "escudospdetails", array()), 7, array(), "array"), "escudodetail", array()), "question", array()), "html", null, true);
            echo "
                                                                </strong>
                                                            </font>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <br>
                                                <font size=\"1\">
                                                    ";
            // line 1887
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entityEscudoSP"]) ? $context["entityEscudoSP"] : $this->getContext($context, "entityEscudoSP")), "escudospdetails", array()), 7, array(), "array"), "answer", array()), "html", null, true);
            echo "
                                                </font>
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
                                                            <font size=\"1\">
                                                                <strong>
                                                                    ";
            // line 1906
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entityEscudoSP"]) ? $context["entityEscudoSP"] : $this->getContext($context, "entityEscudoSP")), "escudospdetails", array()), 8, array(), "array"), "escudodetail", array()), "question", array()), "html", null, true);
            echo "
                                                                </strong>
                                                            </font>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <br>
                                                <font size=\"1\">
                                                    ";
            // line 1918
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entityEscudoSP"]) ? $context["entityEscudoSP"] : $this->getContext($context, "entityEscudoSP")), "escudospdetails", array()), 8, array(), "array"), "answer", array()), "html", null, true);
            echo "
                                                </font>
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
                                                            <font size=\"1\">
                                                                <strong>
                                                                    ";
            // line 1937
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entityEscudoSP"]) ? $context["entityEscudoSP"] : $this->getContext($context, "entityEscudoSP")), "escudospdetails", array()), 9, array(), "array"), "escudodetail", array()), "question", array()), "html", null, true);
            echo "
                                                                </strong>
                                                            </font>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <br>
                                                <font size=\"1\">
                                                    ";
            // line 1949
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entityEscudoSP"]) ? $context["entityEscudoSP"] : $this->getContext($context, "entityEscudoSP")), "escudospdetails", array()), 9, array(), "array"), "answer", array()), "html", null, true);
            echo "
                                                </font>
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
                                                            <font size=\"1\">
                                                                <strong>
                                                                    ";
            // line 1968
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entityEscudoSP"]) ? $context["entityEscudoSP"] : $this->getContext($context, "entityEscudoSP")), "escudospdetails", array()), 10, array(), "array"), "escudodetail", array()), "question", array()), "html", null, true);
            echo "
                                                                </strong>
                                                            </font>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <br>
                                                <font size=\"1\">
                                                    ";
            // line 1980
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entityEscudoSP"]) ? $context["entityEscudoSP"] : $this->getContext($context, "entityEscudoSP")), "escudospdetails", array()), 10, array(), "array"), "answer", array()), "html", null, true);
            echo "
                                                </font>
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
                                                            <font size=\"1\">
                                                                <strong>
                                                                    ";
            // line 1999
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entityEscudoSP"]) ? $context["entityEscudoSP"] : $this->getContext($context, "entityEscudoSP")), "escudospdetails", array()), 11, array(), "array"), "escudodetail", array()), "question", array()), "html", null, true);
            echo "
                                                                </strong>
                                                            </font>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <br>
                                                <font size=\"1\">
                                                    ";
            // line 2011
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entityEscudoSP"]) ? $context["entityEscudoSP"] : $this->getContext($context, "entityEscudoSP")), "escudospdetails", array()), 11, array(), "array"), "answer", array()), "html", null, true);
            echo "
                                                </font>
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
                                                            <font size=\"1\">
                                                                <strong>
                                                                    ";
            // line 2028
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entityEscudoSP"]) ? $context["entityEscudoSP"] : $this->getContext($context, "entityEscudoSP")), "escudospdetails", array()), 12, array(), "array"), "escudodetail", array()), "question", array()), "html", null, true);
            echo "
                                                                </strong>
                                                            </font>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <br>
                                                <font size=\"1\">
                                                    ";
            // line 2040
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entityEscudoSP"]) ? $context["entityEscudoSP"] : $this->getContext($context, "entityEscudoSP")), "escudospdetails", array()), 12, array(), "array"), "answer", array()), "html", null, true);
            echo "
                                                </font>
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
                                                            <font size=\"1\">
                                                                <strong>
                                                                    ";
            // line 2059
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entityEscudoSP"]) ? $context["entityEscudoSP"] : $this->getContext($context, "entityEscudoSP")), "escudospdetails", array()), 13, array(), "array"), "escudodetail", array()), "question", array()), "html", null, true);
            echo "
                                                                </strong>
                                                            </font>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <br>
                                                <font size=\"1\">
                                                    ";
            // line 2071
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entityEscudoSP"]) ? $context["entityEscudoSP"] : $this->getContext($context, "entityEscudoSP")), "escudospdetails", array()), 13, array(), "array"), "answer", array()), "html", null, true);
            echo "
                                                </font>
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
                                                            <font size=\"1\">
                                                                <strong>
                                                                    ";
            // line 2088
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entityEscudoSP"]) ? $context["entityEscudoSP"] : $this->getContext($context, "entityEscudoSP")), "escudospdetails", array()), 14, array(), "array"), "escudodetail", array()), "question", array()), "html", null, true);
            echo "
                                                                </strong>
                                                            </font>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <br>
                                                <font size=\"1\">
                                                    ";
            // line 2100
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entityEscudoSP"]) ? $context["entityEscudoSP"] : $this->getContext($context, "entityEscudoSP")), "escudospdetails", array()), 14, array(), "array"), "answer", array()), "html", null, true);
            echo "
                                                </font>
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
                    <strong>
                        <font size=\"1\">
                            Comentario adicional
                        </font>
                    </strong>
                </td>
            </tr>
            <tr> 
                <td width=\"40px\" ></td>
                <td colspan=2 >
                    <font size=\"1\">
                        ";
            // line 2127
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "commentESC", array()), "html", null, true);
            echo "
                    </font>
                </td>
            </tr>
            -->
        ";
        }
        // line 2133
        echo "        
        ";
        // line 2134
        if ((isset($context["validarRavenSP"]) ? $context["validarRavenSP"] : $this->getContext($context, "validarRavenSP"))) {
            // line 2135
            echo "            <tr> 
                <td width=\"40px\" ></td>
                <th colspan=2 height=\"20px\"></th>
            </tr>
        
            <tr>
                <td width=\"40px\" ></td>
                <td colspan=2 >
                    <div class=\"span11\">
                        <legend>
                            <font size=\"1\">Resultado de la prueba Raven</font>
                        </legend>
                        <table class=\"record_properties\" border=\"0\"  bordercolor=\"#C2C2C2\">
                            <tr>
                                <td>
                                    <font size=\"1\">
                                        <strong>Resultado :</strong>

                                        rango: ";
            // line 2153
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entityRavenSP"]) ? $context["entityRavenSP"] : $this->getContext($context, "entityRavenSP")), "rango", array()), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entityRavenSP"]) ? $context["entityRavenSP"] : $this->getContext($context, "entityRavenSP")), "descRango", array()), "html", null, true);
            echo "
                                    </font>
                                </td>
                            </tr>
                        </table>
                    </div>
                </td>
            </tr>
        ";
        }
        // line 2162
        echo "        <tr> 
            <td width=\"40px\" ></td>
            <td colspan=2 >
                <div class=\"span11\">
                    <legend>Cuestionario</legend>
                    <table class=\"table table-striped\" border=1>
                        <!--
                        <thead>
                            <tr>
                                <th width=\"500px\">
                                    <font size=\"1\">
                                        Preguntas
                                    </font>
                                </th>
                                
                                <th >
                                    <font size=\"1\">
                                        Comentarios
                                    </font>
                                </th>
                               
                            </tr>
                        </thead>
                         -->
                        <tbody>
                            ";
        // line 2187
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listaVirtualInterSPC"]) ? $context["listaVirtualInterSPC"] : $this->getContext($context, "listaVirtualInterSPC")));
        foreach ($context['_seq'] as $context["_key"] => $context["VirtualInterSPC"]) {
            // line 2188
            echo "                                <tr>
                                    <td >
                                        <font size=\"1\">
                                            <strong>
                                                ";
            // line 2192
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["VirtualInterSPC"], "VirtualInterviewQuestion", array()), "question", array()), "html", null, true);
            echo "
                                            </strong>
                                        </font>
                                    </td>
                                    
                                </tr>
                                <tr>
                                    <td >
                                        <font size=\"1\">
                                            ";
            // line 2201
            if (($this->getAttribute($context["VirtualInterSPC"], "answer", array()) != "")) {
                // line 2202
                echo "                                                ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["VirtualInterSPC"], "answer", array()), "html", null, true);
                echo "
                                            ";
            } else {
                // line 2204
                echo "                                               -
                                            ";
            }
            // line 2206
            echo "                
                                            
                                        </font>
                                    </td>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['VirtualInterSPC'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 2212
        echo "                        </tbody>
                    </table>
                </div>
            </td>
        </tr>
        <tr> 
            <td width=\"40px\" ></td>
            <td colspan=2 align=\"right\">
                <div class=\"span11\">
                    <strong>
                        <font size=\"1\">
                            DATOS COMPLEMENTARIOS
                        </font>
                    </strong>
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
                                <font size=\"1\">
                                    <strong>Estructura Salarial Reciente :</strong>
                                </font>
                            </td>
                            
                        </tr>
                        <tr>
                            <td align=\"left\" width=\"1100px\">
                                <div class=\"span1\"></div>
                                <font size=\"1\">
                                    <strong>Última o actual remuneración mensual bruta : </strong>
                                    ";
        // line 2248
        echo twig_escape_filter($this->env, (isset($context["IL_ER_UltRem"]) ? $context["IL_ER_UltRem"] : $this->getContext($context, "IL_ER_UltRem")), "html", null, true);
        echo "
                                </font>
                            </td>
                            
                        </tr>
                        <tr>
                            <td align=\"left\" >
                                <div class=\"span1\"></div>
                                <font size=\"1\">
                                    <strong>Número de sueldos recibidos al año : </strong>
                                    ";
        // line 2258
        echo twig_escape_filter($this->env, (isset($context["IL_ER_NumSuel"]) ? $context["IL_ER_NumSuel"] : $this->getContext($context, "IL_ER_NumSuel")), "html", null, true);
        echo "
                                </font>
                            </td>
                            
                        </tr>
                        <tr>
                            <td align=\"left\">
                                <div class=\"span1\"></div>
                                <font size=\"1\">
                                    <strong>Bono : </strong>
                                    ";
        // line 2268
        echo twig_escape_filter($this->env, (isset($context["IL_ER_Bono"]) ? $context["IL_ER_Bono"] : $this->getContext($context, "IL_ER_Bono")), "html", null, true);
        echo "
                                </font>
                            </td>
                            
                        </tr>
                        <tr>
                            <td align=\"left\" >
                                <div class=\"span1\"></div>
                                <font size=\"1\">
                                    <strong>Utilidades : </strong>
                                    ";
        // line 2278
        echo twig_escape_filter($this->env, (isset($context["IL_ER_Utilida"]) ? $context["IL_ER_Utilida"] : $this->getContext($context, "IL_ER_Utilida")), "html", null, true);
        echo "
                                </font>
                            </td>
                            
                        </tr>
                        <tr>
                            <td align=\"left\" >
                                <div class=\"span1\"></div>
                                <font size=\"1\">
                                    <strong>Variable : </strong>
                                    ";
        // line 2288
        echo twig_escape_filter($this->env, (isset($context["IL_ER_Variable"]) ? $context["IL_ER_Variable"] : $this->getContext($context, "IL_ER_Variable")), "html", null, true);
        echo "
                                </font>
                            </td>
                        </tr>
                        <tr>
                            <td align=\"left\" width=\"1100px\">
                                <br>
                                <font size=\"1\">
                                    <strong>Expectativas Salariales : </strong>
                                    ";
        // line 2297
        echo twig_escape_filter($this->env, (isset($context["IL_ER_Expectativa"]) ? $context["IL_ER_Expectativa"] : $this->getContext($context, "IL_ER_Expectativa")), "html", null, true);
        echo "
                                </font>
                            </td>
                        </tr>
                    </table>
                </div>
            </td>
        </tr>
        <tr> 
            <td width=\"40px\" ></td>
            <td colspan=2 align=\"right\">
                <div class=\"span11\">
                    <strong>
                        <font size=\"1\">
                            CONCLUSIONES
                        </font>
                    </strong>
                </div>
            </td>
        </tr>
        <!--
        <tr> 
            <td width=\"40px\" ></td>
            <td colspan=2 >
                <font size=\"1\">
                    <strong>
                    FORTALEZAS:
                    </strong>
                </font>
            </td>
        </tr>
        <tr> 
            <td width=\"40px\" ></td>
            <td colspan=2 >
                <font size=\"1\">
                    ";
        // line 2332
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "strengths", array()), "html", null, true);
        echo "
                </font>
            </td>
        </tr>
        <tr> 
            <td width=\"40px\" ></td>
            <td colspan=2 >
                <font size=\"1\">
                    <strong>
                    OPORTUNIDADES DE MEJORA:
                    </strong>
                </font>
            </td>
        </tr>
        <tr> 
            <td width=\"40px\" ></td>
            <td colspan=2 >
                <font size=\"1\">
                    ";
        // line 2350
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "improvementOpportunities", array()), "html", null, true);
        echo "
                </font>
            </td>
        </tr>
        -->
        <tr> 
            <td width=\"40px\" ></td>
            <td colspan=2 >
                <font size=\"1\">
                    <strong>
                    Observaciones:
                    </strong>
                </font>
            </td>
        </tr>
        <tr> 
            <td width=\"40px\" ></td>
            <td colspan=2 >
                <font size=\"1\">
                    ";
        // line 2369
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "recommendation", array()), "html", null, true);
        echo "
                </font>
            </td>
        </tr>
        <tr> 
            <td width=\"40px\" ></td>
            <td width=\"180px\">
                <font size=\"1\">
                    <strong>
                        Resultado final:
                    </strong>
                </font>
            </td>
            <td width=\"920px\">
                <font size=\"1\">
                    ";
        // line 2384
        if (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "finalResult", array()) == 1)) {
            // line 2385
            echo "                        Recomendable 
                    ";
        } elseif (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "finalResult", array()) == 2)) {
            // line 2387
            echo "                        Recomendable con observaciones 
                    ";
        } elseif (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "finalResult", array()) == 3)) {
            // line 2389
            echo "                        No recomendable 
                    ";
        } else {
            // line 2391
            echo "                       -
                    ";
        }
        // line 2393
        echo "                </font>
            </td>
        </tr>
        <tr> 
            <td width=\"40px\" ></td>
            <td colspan=2 >
                <div class=\"span1\"></div>
                <div class=\"span9\">
                    <table class=\"record_properties\" border=\"1\">
                        <tr>
                            <td>
                                <font size=\"1\">
                                    <strong>Recomendable. </strong>
                                    Cumple la mayor parte de las características requeridas por el cliente para el cargo. Esto puede anticipar un desenvolvimiento adecuado en las funciones y tareas que deberá asumir.
                                </font>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <font size=\"1\">
                                    <strong>Recomendable con observaciones. </strong>
                                    Posee buena parte de las características para el cargo y las demás pueden ser desarrolladas en el puesto de trabajo; se visualiza potencial para superar las oportunidades de mejora.
                                </font>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <font size=\"1\">
                                    <strong>No recomendable. </strong>
                                    El postulante no presenta el perfil concordante con los requisitos del cargo y de la organización. Puede presentar indicadores que dificulten su adaptación y/o desempeño a la organización y al cargo.
                                </font>
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

";
    }

    public function getTemplateName()
    {
        return "SeleccionProcesBundle:ResultSPC:print.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  3248 => 2393,  3244 => 2391,  3240 => 2389,  3236 => 2387,  3232 => 2385,  3230 => 2384,  3212 => 2369,  3190 => 2350,  3169 => 2332,  3131 => 2297,  3119 => 2288,  3106 => 2278,  3093 => 2268,  3080 => 2258,  3067 => 2248,  3029 => 2212,  3018 => 2206,  3014 => 2204,  3008 => 2202,  3006 => 2201,  2994 => 2192,  2988 => 2188,  2984 => 2187,  2957 => 2162,  2943 => 2153,  2923 => 2135,  2921 => 2134,  2918 => 2133,  2909 => 2127,  2879 => 2100,  2864 => 2088,  2844 => 2071,  2829 => 2059,  2807 => 2040,  2792 => 2028,  2772 => 2011,  2757 => 1999,  2735 => 1980,  2720 => 1968,  2698 => 1949,  2683 => 1937,  2661 => 1918,  2646 => 1906,  2624 => 1887,  2609 => 1875,  2589 => 1858,  2574 => 1846,  2552 => 1827,  2537 => 1815,  2517 => 1798,  2502 => 1786,  2480 => 1767,  2465 => 1755,  2445 => 1738,  2430 => 1726,  2408 => 1707,  2393 => 1695,  2373 => 1678,  2358 => 1666,  2337 => 1647,  2335 => 1646,  2332 => 1645,  2324 => 1640,  2297 => 1616,  2256 => 1578,  2236 => 1561,  2206 => 1534,  2168 => 1499,  2149 => 1483,  2121 => 1458,  2083 => 1423,  2064 => 1407,  2045 => 1391,  2017 => 1366,  1979 => 1331,  1961 => 1316,  1942 => 1300,  1916 => 1277,  1878 => 1242,  1859 => 1226,  1840 => 1210,  1821 => 1194,  1801 => 1177,  1772 => 1151,  1746 => 1127,  1744 => 1126,  1741 => 1125,  1733 => 1120,  1709 => 1098,  1703 => 1096,  1697 => 1094,  1691 => 1092,  1685 => 1090,  1679 => 1088,  1673 => 1086,  1667 => 1084,  1664 => 1083,  1662 => 1082,  1640 => 1062,  1636 => 1060,  1630 => 1058,  1624 => 1056,  1618 => 1054,  1612 => 1052,  1606 => 1050,  1600 => 1048,  1594 => 1046,  1588 => 1044,  1582 => 1042,  1579 => 1041,  1577 => 1040,  1558 => 1023,  1554 => 1021,  1548 => 1019,  1542 => 1017,  1536 => 1015,  1530 => 1013,  1524 => 1011,  1518 => 1009,  1512 => 1007,  1506 => 1005,  1500 => 1003,  1497 => 1002,  1495 => 1001,  1476 => 984,  1472 => 982,  1466 => 980,  1460 => 978,  1454 => 976,  1448 => 974,  1442 => 972,  1436 => 970,  1430 => 968,  1424 => 966,  1418 => 964,  1415 => 963,  1413 => 962,  1394 => 945,  1390 => 943,  1384 => 941,  1378 => 939,  1372 => 937,  1366 => 935,  1360 => 933,  1354 => 931,  1348 => 929,  1342 => 927,  1336 => 925,  1333 => 924,  1331 => 923,  1312 => 906,  1306 => 904,  1300 => 902,  1294 => 900,  1288 => 898,  1282 => 896,  1276 => 894,  1270 => 892,  1264 => 890,  1258 => 888,  1252 => 886,  1249 => 885,  1247 => 884,  1224 => 863,  1221 => 862,  1213 => 857,  1188 => 834,  1182 => 832,  1176 => 830,  1170 => 828,  1164 => 826,  1158 => 824,  1152 => 822,  1149 => 821,  1147 => 820,  1128 => 803,  1122 => 801,  1116 => 799,  1110 => 797,  1104 => 795,  1098 => 793,  1092 => 791,  1089 => 790,  1087 => 789,  1068 => 772,  1062 => 770,  1056 => 768,  1050 => 766,  1044 => 764,  1038 => 762,  1032 => 760,  1029 => 759,  1027 => 758,  1008 => 741,  1002 => 739,  996 => 737,  990 => 735,  984 => 733,  978 => 731,  972 => 729,  969 => 728,  967 => 727,  948 => 710,  942 => 708,  936 => 706,  930 => 704,  924 => 702,  918 => 700,  912 => 698,  909 => 697,  907 => 696,  884 => 675,  882 => 674,  861 => 655,  853 => 650,  836 => 636,  819 => 622,  807 => 612,  805 => 611,  802 => 610,  794 => 605,  777 => 591,  760 => 577,  748 => 567,  746 => 566,  743 => 565,  735 => 560,  718 => 546,  701 => 532,  689 => 522,  687 => 521,  663 => 499,  654 => 496,  650 => 494,  646 => 492,  644 => 491,  641 => 490,  636 => 487,  627 => 481,  607 => 464,  577 => 436,  575 => 435,  572 => 434,  563 => 428,  543 => 411,  513 => 383,  511 => 382,  508 => 381,  499 => 375,  479 => 358,  449 => 330,  447 => 329,  444 => 328,  435 => 322,  415 => 305,  385 => 277,  383 => 276,  380 => 275,  371 => 269,  351 => 252,  321 => 224,  319 => 223,  316 => 222,  307 => 216,  287 => 199,  257 => 171,  255 => 170,  252 => 169,  243 => 163,  223 => 146,  193 => 118,  191 => 117,  182 => 111,  166 => 97,  160 => 95,  156 => 93,  153 => 92,  150 => 91,  147 => 90,  145 => 89,  141 => 88,  121 => 71,  103 => 56,  88 => 43,  86 => 42,  74 => 32,  70 => 30,  64 => 28,  62 => 27,  38 => 5,  35 => 4,  29 => 2,);
    }
}
