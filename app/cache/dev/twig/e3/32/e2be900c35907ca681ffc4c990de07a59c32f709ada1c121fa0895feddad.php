<?php

/* TestGatbSPBundle:GatbPart2SP:new.html.twig */
class __TwigTemplate_e332e2be900c35907ca681ffc4c990de07a59c32f709ada1c121fa0895feddad extends Twig_Template
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

    // line 2
    public function block_id($context, array $blocks = array())
    {
        echo "gatbpart2sp";
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "GATB - Parte 2";
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
                <h1>
                    ";
        // line 12
        $this->displayBlock("title", $context, $blocks);
        echo "
                    ";
        // line 13
        echo $this->env->getExtension('translator')->getTranslator()->trans("<font size=\"5\" color=\"#6699CC\">
                            (Tiempo corriendo, faltan: %tiempo%)
                        </font>", array("%tiempo%" => $this->env->getExtension('extension_jaxxes')->cuentaAtrasGatbPart2($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "gatbSP", array()), "selectionProcessCandidate", array()), "candidate", array()), "birthDate", array()))), "messages");
        // line 18
        echo "                </h1>
                <div class=\"row-fluid\">
                    ";
        // line 20
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('routing')->getPath("test_gatb_part2_sp_create", array("idgatbsp" => $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "gatbSP", array()), "id", array())))));
        echo "  
                    
                        <fieldset>
                            <!--
                            ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "gatbPart2", array()), 'widget');
        echo "
                            ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "gatbSP", array()), 'widget');
        echo "
                            -->
                            <div class=\"row-fluid\">
                                <table class=\"record_properties\">
                                    <tbody>
                                        <tr> 
                                            <th class=\"span3\">Evaluado :</th>
                                            <td class=\"span4\">";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "gatbSP", array()), "html", null, true);
        echo ".</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </fieldset>
                        <br>
                        <fieldset>
                            <br>
                            <center>
                                <div class=\"row-fluid\">
                                    <table class=\"record_properties\">
                                        <thead>
                                            <th class=\"span1\"></th>
                                            <th class=\"span5\"></th>
                                            <td>
                                                <h4>
                                                    Alternativas
                                                </h4>
                                            </td>
                                            <th class=\"span4\"></th>
                                            <td></td>
                                        </thead>
                                        <tbody>
                                            ";
        // line 56
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "gatbPart2DetailSpTemps", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["gatbPart2DetailSP"]) {
            // line 57
            echo "                                                <tr>
                                                    <th class=\"span1\">";
            // line 58
            echo twig_escape_filter($this->env, $this->getAttribute($context["gatbPart2DetailSP"], "number", array()), "html", null, true);
            echo ".</th>
                                                    <th class=\"span5\">";
            // line 59
            echo twig_escape_filter($this->env, $this->getAttribute($context["gatbPart2DetailSP"], "operation", array()), "html", null, true);
            echo "</th>
                                                    <td></td>
                                                    <th class=\"span4\">RESPUESTA :</th>
                                                    <td >";
            // line 62
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "gatbPart2DetailSpTemps", array()), ($this->getAttribute($context["gatbPart2DetailSP"], "number", array()) - 1), array(), "array"), "answer", array()), 'widget');
            echo "</td>
                                                </tr>
                                                <tr>
                                                    <th class=\"span1\"></th>
                                                    <td class=\"span5\">
                                                        <center>
                                                            ";
            // line 68
            echo twig_escape_filter($this->env, $this->getAttribute($context["gatbPart2DetailSP"], "valueTop", array()), "html", null, true);
            echo "
                                                            <br>
                                                            ";
            // line 70
            echo twig_escape_filter($this->env, $this->getAttribute($context["gatbPart2DetailSP"], "valueDown", array()), "html", null, true);
            echo "
                                                            <br>
                                                            
                                                        </center>
                                                    </td>
                                                    <td >
                                                        <table class=\"record_properties\">
                                                            <tbody>
                                                                <tr>
                                                                    <td class=\"span4\"><strong>A.</strong>  ";
            // line 79
            echo twig_escape_filter($this->env, $this->getAttribute($context["gatbPart2DetailSP"], "fieldA", array()), "html", null, true);
            echo "</td>
                                                                </tr>
                                                                <tr>
                                                                    <td class=\"span4\"><strong>B.</strong>  ";
            // line 82
            echo twig_escape_filter($this->env, $this->getAttribute($context["gatbPart2DetailSP"], "fieldB", array()), "html", null, true);
            echo "</td>
                                                                </tr>
                                                                <tr>
                                                                    <td class=\"span4\"><strong>C.</strong>  ";
            // line 85
            echo twig_escape_filter($this->env, $this->getAttribute($context["gatbPart2DetailSP"], "fieldC", array()), "html", null, true);
            echo "</td>
                                                                </tr>
                                                                <tr>
                                                                    <td class=\"span4\"><strong>D.</strong>  ";
            // line 88
            echo twig_escape_filter($this->env, $this->getAttribute($context["gatbPart2DetailSP"], "fieldD", array()), "html", null, true);
            echo "</td>
                                                                </tr>
                                                                <tr>
                                                                    <td class=\"span4\"><strong>E.</strong>  ";
            // line 91
            echo twig_escape_filter($this->env, $this->getAttribute($context["gatbPart2DetailSP"], "fieldE", array()), "html", null, true);
            echo "</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </td>
                                                    <th></th>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th>
                                                        <legend></legend>
                                                    </th>
                                                    <th>
                                                        <legend></legend>
                                                    </th>
                                                    <td>
                                                        <legend></legend>
                                                    </td>
                                                    <th>
                                                        <legend></legend>
                                                    </th>
                                                    <td>
                                                        <legend></legend>
                                                    </td>
                                                </tr>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['gatbPart2DetailSP'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 117
        echo "                                        </tbody>
                                        <TFOOT>
                                            <tr>
                                                <th>
                                                </th>
                                                <th COLSPAN=3 ALIGN=LEFT>
                                                    ";
        // line 123
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "guardar", array()), 'widget');
        echo "
                                                </th>
                                                <td>
                                                </td>
                                            </tr>
                                        </TFOOT>
                                    </table>
                                </div>
                                
                            </center>
                        </fieldset>
                        <!--";
        // line 134
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "gatbPart2DetailSpTemps", array()), 'widget');
        echo "-->
                    ";
        // line 135
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
                </div>
            </div>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "TestGatbSPBundle:GatbPart2SP:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  238 => 135,  234 => 134,  220 => 123,  212 => 117,  180 => 91,  174 => 88,  168 => 85,  162 => 82,  156 => 79,  144 => 70,  139 => 68,  130 => 62,  124 => 59,  120 => 58,  117 => 57,  113 => 56,  86 => 32,  76 => 25,  72 => 24,  65 => 20,  61 => 18,  57 => 13,  53 => 12,  45 => 6,  42 => 5,  36 => 3,  30 => 2,);
    }
}
