<?php

/* SeleccionProcesBundle:Candidate:welcomeShow.html.twig */
class __TwigTemplate_d8d2aa0ce7b9d121eb2e5838fa2c34b7c8b0597b28f1d85aaa1fc17f8788de42 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::candidate.html.twig");

        $this->blocks = array(
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
    public function block_title($context, array $blocks = array())
    {
        echo "Bienvenida al postulante";
    }

    // line 5
    public function block_article($context, array $blocks = array())
    {
        // line 6
        echo "


<head>


<script src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("uploads/js/jquery.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("uploads/js/jquery-ui-1.10.3.custom.min.js"), "html", null, true);
        echo "\"></script>

<script src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("uploads/js/jquery-ui.js"), "html", null, true);
        echo "\"></script>




<!--<script src=\"//code.jquery.com/ui/1.11.1/jquery-ui.js\"></script>
-->

<!--<script src=\"js/jquery.js\"></script>-->
<!--<script src=\"js/jquery-ui-1.10.3.custom.min.js\"></script>-->

<script type=\"text/javascript\">

var \$j = jQuery.noConflict();
var \$q = jQuery.noConflict();
var \$k = jQuery.noConflict();
\t\t\$q(document).on(\"ready\",function(){
\t\t\t\$j(\".frmhoraEvaluacion\").find(\"input.fecha\").datepicker();
\t\t\t\$k(\".frmhoraEvaluacion\").find(\"input.jaxxes_seleccionprocesbundle_selectionprocesscandidateType[dateStart]\").datepicker();
\t\t\t
\t\t});

\t</script>
\t




</head>


<body>
    <div id=\"wrap\">
    <div class=\"container-fluid\">
        <div class=\"row-fluid\">
            <div class=\"span12 content\">
                <h1><p><center><strong>Bienvenido ";
        // line 51
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["candidate"]) ? $context["candidate"] : $this->getContext($context, "candidate")), "lastname", array()), "html", null, true);
        echo "</strong><center></p></h1>

                <br>
                Bienvenido al proceso de evaluación bajo la plataforma de pruebas de EKA Consultores.
                <br>
\t\t  <br>
\t\t  <!--p><strong></strong></p>
\t\t  <h3><strong>Instrucciones</strong></h3>
\t\t  A continuación planifique la fecha y hora para realizar la evaluación. -->
            </div>
        </div>
    </div>
    </div>
</body>


\t\t\t
<div id=\"wrap\">
    <div class=\"container-fluid\">
        <div class=\"row-fluid\">
            <div class=\"span12 content\">
                <h3>La hora de inicio de la evaluación es:</h3>
                <table class=\"record_properties\">
                    <tbody>
                        <tr>
                            <td class=\"span3\"><b>Duracion de la evaluacion</b></td>
                            <td class=\"span4\">";
        // line 77
        echo twig_escape_filter($this->env, (isset($context["duracion"]) ? $context["duracion"] : $this->getContext($context, "duracion")), "html", null, true);
        echo " minutos</td>
                        </tr>
                        <tr>
                            <td class=\"span3\"><b>Fecha de Inicio</b></td>
                            <td class=\"span4\">";
        // line 81
        echo twig_escape_filter($this->env, (isset($context["fecha"]) ? $context["fecha"] : $this->getContext($context, "fecha")), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <td class=\"span3\"><b>Hora de Inicio</b></td>
                            <td class=\"span4\">";
        // line 85
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "hourStart", array()), "html", null, true);
        echo " horas</td>
                        </tr>
                    </tbody>
                </table>
                </br>
                </br>
                <ul class=\"record_actions\">
                    <li>
                        <a href=\"";
        // line 93
        echo $this->env->getExtension('routing')->getPath("register_definition_rol_perfilcargopostulante");
        echo "\">
                            Continuar con perfil de cargo
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

";
    }

    public function getTemplateName()
    {
        return "SeleccionProcesBundle:Candidate:welcomeShow.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 93,  137 => 85,  130 => 81,  123 => 77,  94 => 51,  55 => 15,  50 => 13,  46 => 12,  38 => 6,  35 => 5,  29 => 3,);
    }
}
