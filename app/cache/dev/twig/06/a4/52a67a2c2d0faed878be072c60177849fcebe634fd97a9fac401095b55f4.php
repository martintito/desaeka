<?php

/* SeleccionProcesBundle:Candidate:welcome.html.twig */
class __TwigTemplate_06a452a67a2c2d0faed878be072c60177849fcebe634fd97a9fac401095b55f4 extends Twig_Template
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
<style type=\"text/css\">
.ui-datepicker {
   background: #FFFFFF;
   border: 1px solid #FFFFFF;
   color: #000000;
}
</style>

<script src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("uploads/js/jquery.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("uploads/js/jquery-ui-1.10.3.custom.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("uploads/js/jquery-ui.js"), "html", null, true);
        echo "\"></script>

<!--<script src=\"//code.jquery.com/ui/1.11.1/jquery-ui.js\"></script>-->
<!--<script src=\"js/jquery.js\"></script>-->
<!--<script src=\"js/jquery-ui-1.10.3.custom.min.js\"></script>-->

<!--
<script type=\"text/javascript\">

var \$j = jQuery.noConflict();
var \$q = jQuery.noConflict();
var \$k = jQuery.noConflict();
\t\t\$q(document).on(\"ready\",function(){
\t\t\t\$j(\".frmhoraEvaluacion\").find(\"input.fecha\").datepicker();
\t\t\t\$k(\".frmhoraEvaluacion\").find(\"input.jaxxes_seleccionprocesbundle_selectionprocesscandidateType[dateStart]\").datepicker();
\t\t\t
\t\t});
</script>
-->
</head>

<body>
    <div id=\"wrap\">
    <div class=\"container-fluid\">
        <div class=\"row-fluid\">
            <div class=\"span12 content\">
                <h1><p><center><strong>Bienvenido ";
        // line 44
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["candidate"]) ? $context["candidate"] : $this->getContext($context, "candidate")), "firstname", array()), "html", null, true);
        echo "</strong></center></p></h1>
                <br>

                <br>
                Bienvenido al proceso de evaluación bajo la plataforma de pruebas de EKA Consultores.
                <br>
\t\t  <br>
\t\t  <p><strong></strong></p>
\t\t  <h3><strong>Instrucciones</strong></h3>
\t\t  A continuación planifique la fecha y hora para realizar la evaluación. 
            </div>
        </div>
    </div>
    </div>
</body>

<div id=\"wrap\">
    <div class=\"container-fluid\">
        <div class=\"row-fluid\">
            <div class=\"span12 content\">
                <!--<h1>";
        // line 64
        $this->displayBlock("title", $context, $blocks);
        echo "</h1>
                <br>
                <br>-->
                <h3>Especifique la hora de inicio de su evaluación</h3>
                <div class=\"row-fluid\">
                    
                    ";
        // line 70
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('routing')->getPath("sp_candidato_createwelcome")));
        echo "
\t\t\t\t\t\t\t\t<div class=\"row-fluid\">
\t\t\t\t\t\t\t\t\t<div class=\"span12\">
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<form class=\"frmhoraEvaluacion\" method=\"post\" action=\"\">
\t\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<form class=\"frmhoraEvaluacion\" method=\"post\"  action=\"";
        // line 77
        echo $this->env->getExtension('routing')->getPath("sp_candidato_createwelcome");
        echo "\">
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<div class=\"row-fluid\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"span3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label><b>Duracion de la evaluacion</b></label>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"span3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label>";
        // line 86
        echo twig_escape_filter($this->env, (isset($context["duracion"]) ? $context["duracion"] : $this->getContext($context, "duracion")), "html", null, true);
        echo " minutos</label>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<div class=\"row-fluid\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"span3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label><b>Fecha de inicio</b></label>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"span3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<!--<input type=\"date\" name=\"jaxxes_seleccionprocesbundle_selectionprocesscandidateType[dateStart]\" class=\"input-block-level fecha \" data-date-format=\"yyyy-mm-dd\" ><!--value=\"\"-->
\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 98
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dateStart", array()), 'widget');
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<div class=\"row-fluid\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"span3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label><b>Hora de inicio</b></label>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"span3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 107
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "hourStart", array()), 'widget');
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t<!--<select  name=\"jaxxes_seleccionprocesbundle_selectionprocesscandidateType[hourStart]\" class=\"input-block-level hora\" value=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"00:00\">00:00</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"00:30\">00:30</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"01:00\">01:00</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"01:30\">01:30</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"02:00\">02:00</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"02:30\">02:30</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"03:00\">03:00</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"03:30\">03:30</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"04:00\">04:00</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"04:30\">04:30</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"05:00\">05:00</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"05:30\">05:30</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"06:00\">06:00</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"06:30\">06:30</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"07:00\">07:00</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"07:30\">07:30</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"08:00\">08:00</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"08:30\">08:30</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"09:00\">09:00</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"09:30\">09:30</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"10:00\">10:00</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"10:30\">10:30</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"11:00\">11:00</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"11:30\">11:30</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"12:00\">12:00</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"12:30\">12:30</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"13:00\">13:00</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"13:30\">13:30</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"14:00\">14:00</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"14:30\">14:30</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"15:00\">15:00</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"15:30\">15:30</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"16:00\">16:00</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"16:30\">16:30</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"17:00\">17:00</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"17:00\">17:00</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"18:00\">18:00</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"18:30\">18:30</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"19:00\">19:00</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"19:30\">19:30</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"20:00\">20:00</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"20:30\">20:30</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"21:00\">21:00</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"21:30\">21:30</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"22:00\">22:00</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"22:30\">22:30</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"23:00\">23:00</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"23:30\">23:30</option>
\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t-->
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<div class=\"row-fluid\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"span3 offset3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 168
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "guardar", array()), 'widget');
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t<!--<input type=\"submit\" name=\"jaxxes_seleccionprocesbundle_selectionprocesscandidateType[guardar]\"class=\"btn btn-primary save\" value=\"Guardar cambios\" 
\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"float:right\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t-->
\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t</div>\t
\t\t\t\t\t\t\t\t</div>
                   ";
        // line 180
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
                </div>
                <!--<ul class=\"record_actions\">
                    <li>
                        <a href=\"";
        // line 184
        echo $this->env->getExtension('routing')->getPath("enterprise_homepage");
        echo "\">
                            Volver al listado
                        </a>
                    </li>
                </ul>-->
            </div>
        </div>
    </div>
</div>

";
    }

    public function getTemplateName()
    {
        return "SeleccionProcesBundle:Candidate:welcome.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  254 => 184,  247 => 180,  232 => 168,  168 => 107,  156 => 98,  141 => 86,  129 => 77,  119 => 70,  110 => 64,  87 => 44,  58 => 18,  54 => 17,  50 => 16,  38 => 6,  35 => 5,  29 => 3,);
    }
}
