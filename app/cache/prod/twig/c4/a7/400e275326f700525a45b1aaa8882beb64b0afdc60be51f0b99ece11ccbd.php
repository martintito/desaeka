<?php

/* TestGatbSPBundle:GatbPart5SP:new.html.twig */
class __TwigTemplate_c4a7400e275326f700525a45b1aaa8882beb64b0afdc60be51f0b99ece11ccbd extends Twig_Template
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
        echo "gatbpart5sp";
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "GATB - Parte 5";
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
                        </font>", array("%tiempo%" => $this->env->getExtension('extension_jaxxes')->cuentaAtrasGatbPart5($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "gatbSP", array()), "selectionProcessCandidate", array()), "candidate", array()), "birthDate", array()))), "messages");
        // line 18
        echo "                </h1>
                <div class=\"row-fluid\">
                    ";
        // line 20
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('routing')->getPath("test_gatb_part5_sp_create", array("idgatbsp" => $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "gatbSP", array()), "id", array())))));
        echo "  
                    
                        <fieldset>
                            <!--
                            ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "gatbPart5", array()), 'widget');
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
                            <!--
                            <center>
                                <h4>HAGA TODOS SUS CALCULOS EN EL PAPEL EN BLANCO PROPORCIONADO</h4>
                                <h4>NO ESCRIBA EN ESTA HOJA</h4>
                            </center>
                            -->
                            <br>
                            <br>
                            <center>
                                <div class=\"row-fluid\">
                                    <table class=\"record_properties\">
                                        <tbody>
                                            ";
        // line 52
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "gatbPart5DetailSPs", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["gatbPart5DetailSP"]) {
            // line 53
            echo "                                                <tr>
                                                    <th class=\"span1\">
                                                        <strong>";
            // line 55
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["gatbPart5DetailSP"], "gatbPart5Detail", array()), "number", array()), "html", null, true);
            echo ".</strong>
                                                    </th>
                                                    <td class=\"span5\" COLSPAN=3>
                                                        <strong>";
            // line 58
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["gatbPart5DetailSP"], "gatbPart5Detail", array()), "question", array()), "html", null, true);
            echo ".</strong>
                                                    </td>
                                                    <td>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th></th>
                                                    <td class=\"span5\">
                                                        <strong>A </strong> ";
            // line 66
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["gatbPart5DetailSP"], "gatbPart5Detail", array()), "fieldA", array()), "html", null, true);
            echo "
                                                    </td>
                                                    <th></th>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th></th>
                                                    <td class=\"span5\">
                                                        <strong>B </strong> ";
            // line 74
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["gatbPart5DetailSP"], "gatbPart5Detail", array()), "fieldB", array()), "html", null, true);
            echo "
                                                    </td>
                                                    <th></th>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th></th>
                                                    <td class=\"span5\">
                                                        <strong>C </strong> ";
            // line 82
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["gatbPart5DetailSP"], "gatbPart5Detail", array()), "fieldC", array()), "html", null, true);
            echo "
                                                    </td>
                                                    <th></th>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th></th>
                                                    <td class=\"span5\">
                                                        <strong>D </strong> ";
            // line 90
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["gatbPart5DetailSP"], "gatbPart5Detail", array()), "fieldD", array()), "html", null, true);
            echo "
                                                    </td>
                                                    <th></th>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th></th>
                                                    <td class=\"span5\">
                                                        <strong>E </strong> ";
            // line 98
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["gatbPart5DetailSP"], "gatbPart5Detail", array()), "fieldE", array()), "html", null, true);
            echo "
                                                    </td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th></th>
                                                    <td class=\"span5\">
                                                    </td>
                                                    <td class=\"span2\">
                                                        Respuesta pregunta ";
            // line 108
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["gatbPart5DetailSP"], "gatbPart5Detail", array()), "number", array()), "html", null, true);
            echo ":
                                                    </td>
                                                    <td class=\"span2\">
                                                        ";
            // line 111
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "gatbPart5DetailSPs", array()), ($this->getAttribute($this->getAttribute($context["gatbPart5DetailSP"], "gatbPart5Detail", array()), "number", array()) - 1), array(), "array"), "answer", array()), 'widget');
            echo "
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th>
                                                        <legend></legend>
                                                    </th>
                                                    <td>
                                                       <legend></legend>
                                                    </td>
                                                    <th>
                                                        <legend></legend>
                                                    </th>
                                                    <th>
                                                        <legend></legend>
                                                    </th>
                                                </tr>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['gatbPart5DetailSP'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 129
        echo "                                        </tbody>
                                        <TFOOT>
                                            <tr>
                                                <th></th>
                                                <th COLSPAN=2 ALIGN=LEFT>
                                                    ";
        // line 134
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "guardar", array()), 'widget');
        echo "
                                                </th>
                                                
                                            </tr>
                                        </TFOOT>
                                    </table>
                                </div>
                                
                            </center>
                        </fieldset>
                        <!--";
        // line 144
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "gatbPart5DetailSPs", array()), 'widget');
        echo "-->
                    ";
        // line 145
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
        return "TestGatbSPBundle:GatbPart5SP:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  245 => 145,  241 => 144,  228 => 134,  221 => 129,  197 => 111,  191 => 108,  178 => 98,  167 => 90,  156 => 82,  145 => 74,  134 => 66,  123 => 58,  117 => 55,  113 => 53,  109 => 52,  86 => 32,  76 => 25,  72 => 24,  65 => 20,  61 => 18,  57 => 13,  53 => 12,  45 => 6,  42 => 5,  36 => 3,  30 => 2,);
    }
}
