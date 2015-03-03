<?php

/* TestPmaSPBundle:PmaPart2SP:new.html.twig */
class __TwigTemplate_507367f0e297845af5e694763d8cfd46b1a8cfed375c2e84354ab0fd2fa43a9d extends Twig_Template
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
        echo "pmapart2sp";
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "PMA - Factor E";
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
                        </font>", array("%tiempo%" => $this->env->getExtension('extension_jaxxes')->cuentaAtrasPmaPart2($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entityPmaPart2BlockSP"]) ? $context["entityPmaPart2BlockSP"] : $this->getContext($context, "entityPmaPart2BlockSP")), "pmaPart2SP", array()), "pmaSP", array()), "selectionProcessCandidate", array()), "candidate", array()), "birthDate", array()))), "messages");
        // line 18
        echo "                </h1>
                <div class=\"row-fluid\">
                    ";
        // line 20
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('routing')->getPath("test_pma_part2_sp_create", array("idpmasp" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entityPmaPart2BlockSP"]) ? $context["entityPmaPart2BlockSP"] : $this->getContext($context, "entityPmaPart2BlockSP")), "pmaPart2SP", array()), "pmaSP", array()), "id", array()), "block" => (isset($context["block"]) ? $context["block"] : $this->getContext($context, "block")), "id" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"))))));
        echo "  
                    
                        <fieldset>
                            <!--
                            ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "pmaPart2SP", array()), 'widget');
        echo "
                            ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "block", array()), 'widget');
        echo "
                            -->
                            <div class=\"row-fluid\">
                                <table class=\"record_properties\">
                                    <tbody>
                                        <tr> 
                                            <th class=\"span3\">Evaluado</th>
                                            <td class=\"span4\">";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entityPmaPart2BlockSP"]) ? $context["entityPmaPart2BlockSP"] : $this->getContext($context, "entityPmaPart2BlockSP")), "pmaPart2SP", array()), "pmaSP", array()), "html", null, true);
        echo "</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </fieldset>
                        <br>
                        <fieldset>
                            <center>
                                <div class=\"row-fluid\">
                                    <table class=\"record_properties\">
                                        <thead>
                                            <tr>
                                                <td></td>
                                                <td width=\"50px\"></td>
                                                <td width=\"110px\">
                                                    <CENTER>
                                                        <h3>A</h3>
                                                    </CENTER>
                                                </td>
                                                <td width=\"110px\">
                                                    <CENTER>
                                                        <h3>B</h3>
                                                    </CENTER>
                                                </td>
                                                <td width=\"110px\">
                                                    <CENTER>
                                                        <h3>C</h3>
                                                    </CENTER>
                                                </td>
                                                <td width=\"110px\">
                                                    <CENTER>
                                                        <h3>D</h3>
                                                    </CENTER>
                                                </td>
                                                <td width=\"110px\">
                                                    <CENTER>
                                                        <h3>E</h3>
                                                    </CENTER>
                                                </td>
                                                <td width=\"110px\">
                                                    <CENTER>
                                                        <h3>F</h3>
                                                    </CENTER>
                                                </td>
                                                <td width=\"20px\"></td>
                                                <th class=\"span2\"></th>
                                                <td width=\"20px\"></td>
                                                <td class=\"span1\"></td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            ";
        // line 84
        $context["i"] = 0;
        // line 85
        echo "                                            ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["entityPmaPart2BlockSP"]) ? $context["entityPmaPart2BlockSP"] : $this->getContext($context, "entityPmaPart2BlockSP")), "pmaPart2DetailSPs", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["pmaPart2DetailSP"]) {
            // line 86
            echo "                                                <tr >
                                                    <td>
                                                        <img alt=\"Fotografía\" style=\"border: 3px outset black;\"  width=\"80px\" height=\"70px\" src=\"";
            // line 88
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(((isset($context["directorio_imagenes_pma_part2"]) ? $context["directorio_imagenes_pma_part2"] : $this->getContext($context, "directorio_imagenes_pma_part2")) . $this->getAttribute($this->getAttribute($context["pmaPart2DetailSP"], "pmaPart2Detail", array()), "rutaFotoOperation", array()))), "html", null, true);
            echo "\">
                                                    </td>
                                                    <td width=\"50px\">
                                                    </td>
                                                    <td colspan=\"6\">
                                                        <img alt=\"Fotografía\" style=\"border: 3px outset black;\" width=\"660px\" height=\"70px\" src=\"";
            // line 93
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(((isset($context["directorio_imagenes_pma_part2"]) ? $context["directorio_imagenes_pma_part2"] : $this->getContext($context, "directorio_imagenes_pma_part2")) . $this->getAttribute($this->getAttribute($context["pmaPart2DetailSP"], "pmaPart2Detail", array()), "rutaFotoAlternatives", array()))), "html", null, true);
            echo "\">
                                                    </td>
                                                    <td width=\"20px\">
                                                    </td>
                                                    
                                                    <td width=\"20px\">
                                                    </td>
                                                    <td class=\"span1\">
                                                        <h4>
                                                            ";
            // line 102
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["pmaPart2DetailSP"], "pmaPart2Detail", array()), "number", array()), "html", null, true);
            echo "
                                                        </h4>
                                                    </td>
                                                    
                                                </tr>
                                               
                                                <tr>
                                                <td width=\"80px\">
                                                    </td>
                                                <td class=\"span1\">
                                                        ";
            // line 112
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "pmaPart2DetailSPs", array()), (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), array(), "array"), "answer", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 113
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 114
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["child"], 'widget');
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 115
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["child"], 'label');
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 118
            echo "                                                      <!--  ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "pmaPart2DetailSPs", array()), (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), array(), "array"), "answer", array()), 'widget');
            echo "-->
                                                </td> 
                                                </tr>
                                                
                                                <tr ";
            // line 122
            echo twig_escape_filter($this->env, $this->getAttribute($context["pmaPart2DetailSP"], "hiddenAux", array()), "html", null, true);
            echo ">
                                                    <td height=\"20px\" >
                                                    </td>
                                                </tr>
                                                ";
            // line 126
            $context["i"] = ((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) + 1);
            // line 127
            echo "                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pmaPart2DetailSP'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 128
        echo "                                        </tbody>
                                        <TFOOT>
                                            <tr>
                                                <th COLSPAN=3 ALIGN=LEFT>
                                                    ";
        // line 132
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
        // line 141
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "pmaPart2DetailSPs", array()), 'widget');
        echo "-->
                    ";
        // line 142
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
        return "TestPmaSPBundle:PmaPart2SP:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  250 => 142,  246 => 141,  234 => 132,  228 => 128,  222 => 127,  220 => 126,  213 => 122,  205 => 118,  196 => 115,  192 => 114,  189 => 113,  185 => 112,  172 => 102,  160 => 93,  152 => 88,  148 => 86,  143 => 85,  141 => 84,  86 => 32,  76 => 25,  72 => 24,  65 => 20,  61 => 18,  57 => 13,  53 => 12,  45 => 6,  42 => 5,  36 => 3,  30 => 2,);
    }
}
