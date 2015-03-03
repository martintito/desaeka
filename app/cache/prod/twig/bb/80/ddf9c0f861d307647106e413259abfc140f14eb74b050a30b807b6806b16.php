<?php

/* TestPmaSPBundle:PmaPart4SP:new.html.twig */
class __TwigTemplate_bb80ddf9c0f861d307647106e413259abfc140f14eb74b050a30b807b6806b16 extends Twig_Template
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
        echo "pmapart4sp";
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "PMA - PARTE 4";
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
                        </font>", array("%tiempo%" => $this->env->getExtension('extension_jaxxes')->cuentaAtrasPmaPart4($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "pmaSP", array()), "selectionProcessCandidate", array()), "candidate", array()), "birthDate", array()))), "messages");
        // line 18
        echo "                </h1>
                <div class=\"row-fluid\">
                    ";
        // line 20
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('routing')->getPath("test_pma_part4_sp_create", array("idpmasp" => $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "pmaSP", array()), "id", array())))));
        echo "  
                    
                        <fieldset>
                            <!--
                            ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "pmaPart4", array()), 'widget');
        echo "
                            ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "pmaSP", array()), 'widget');
        echo "
                            -->
                            <div class=\"row-fluid\">
                                <table class=\"record_properties\">
                                    <tbody>
                                        <tr> 
                                            <th class=\"span3\">Evaluado</th>
                                            <td class=\"span4\">";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "pmaSP", array()), "html", null, true);
        echo "</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </fieldset>
                        <br>
                        <fieldset>
                            <br>
                            <br>
                            <center>
                                <div class=\"row-fluid\">
                                    <table class=\"record_properties\">
                                        <tbody>
                                            ";
        // line 46
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "pmaPart4", array()), "pmaPart4Groups", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["pmaPart4Group"]) {
            // line 47
            echo "                                                <tr>
                                                    
                                                    ";
            // line 49
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["pmaPart4Group"], "pmaPart4Details", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["pmaPart4Detail"]) {
                // line 50
                echo "                                                    <td width=\"120px\" >
                                                        <CENTER>
                                                            <strong>(";
                // line 52
                echo twig_escape_filter($this->env, $this->getAttribute($context["pmaPart4Detail"], "letter", array()), "html", null, true);
                echo ")</strong>
                                                            <br>
                                                            ___
                                                            <br>
                                                            ";
                // line 56
                echo twig_escape_filter($this->env, $this->getAttribute($context["pmaPart4Detail"], "valor1", array()), "html", null, true);
                echo "
                                                            <br>
                                                            ";
                // line 58
                echo twig_escape_filter($this->env, $this->getAttribute($context["pmaPart4Detail"], "valor2", array()), "html", null, true);
                echo "
                                                            <br>
                                                            ";
                // line 60
                echo twig_escape_filter($this->env, $this->getAttribute($context["pmaPart4Detail"], "valor3", array()), "html", null, true);
                echo "
                                                            <br>
                                                            ";
                // line 62
                echo twig_escape_filter($this->env, $this->getAttribute($context["pmaPart4Detail"], "valor4", array()), "html", null, true);
                echo "
                                                            <br>
                                                            ____
                                                            <br>
                                                            ";
                // line 66
                echo twig_escape_filter($this->env, $this->getAttribute($context["pmaPart4Detail"], "result", array()), "html", null, true);
                echo "
                                                        </CENTER>
                                                    </td>
                                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pmaPart4Detail'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 70
            echo "                                                    <td width=\"70px\"></td>
                                                    <td width=\"210px\">
                                                        <table class=\"record_properties\">
                                                            <tbody>
                                                                ";
            // line 74
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["pmaPart4Group"], "pmaPart4Details", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["pmaPart4Detail"]) {
                // line 75
                echo "                                                                    <tr>
                                                                        <td width=\"50px\" ALIGN=LEFT>
                                                                            <strong>(";
                // line 77
                echo twig_escape_filter($this->env, $this->getAttribute($context["pmaPart4Detail"], "letter", array()), "html", null, true);
                echo ")</strong>
                                                                        </td>
                                                                        <td ALIGN=CENTER>
                                                                            <div id=\"jaxxes_testpmaspbundle_pmapart4sp_pmaPart4DetailSPs_0_answer\" class=\"span12\">
                                                                                <table class=\"record_properties\">
                                                                                    <tbody>
                                                                                        <tr>
                                                                                            <td width=\"20px\">
                                                                                                <input type=\"radio\" id=\"jaxxes_testpmaspbundle_pmapart4sp_pmaPart4DetailSPs_";
                // line 85
                echo twig_escape_filter($this->env, ($this->getAttribute($context["pmaPart4Detail"], "number", array()) - 1), "html", null, true);
                echo "_answer_1\" name=\"jaxxes_testpmaspbundle_pmapart4sp[pmaPart4DetailSPs][";
                echo twig_escape_filter($this->env, ($this->getAttribute($context["pmaPart4Detail"], "number", array()) - 1), "html", null, true);
                echo "][answer]\" value=\"B\" />
                                                                                            </td>
                                                                                            <td width=\"20px\">
                                                                                                <label for=\"jaxxes_testpmaspbundle_pmapart4sp_pmaPart4DetailSPs_0_answer_1\" class=\"required\">B</label>
                                                                                            </td>
                                                                                            <td width=\"30px\">
                                                                                            </td>
                                                                                            <td width=\"20px\">
                                                                                                <input type=\"radio\" id=\"jaxxes_testpmaspbundle_pmapart4sp_pmaPart4DetailSPs_";
                // line 93
                echo twig_escape_filter($this->env, ($this->getAttribute($context["pmaPart4Detail"], "number", array()) - 1), "html", null, true);
                echo "_answer_2\" name=\"jaxxes_testpmaspbundle_pmapart4sp[pmaPart4DetailSPs][";
                echo twig_escape_filter($this->env, ($this->getAttribute($context["pmaPart4Detail"], "number", array()) - 1), "html", null, true);
                echo "][answer]\" value=\"M\" />
                                                                                            </td>
                                                                                            <td width=\"20px\">
                                                                                                <label for=\"jaxxes_testpmaspbundle_pmapart4sp_pmaPart4DetailSPs_0_answer_2\" class=\"required\">M</label>
                                                                                            </td>
                                                                                        </tr>
                                                                                    </tbody>
                                                                                </table>
                                                                            </div>
                                                                        </td>
                                                                        <td width=\"50px\" ALIGN=RIGHT>
                                                                            <strong>
                                                                                ";
                // line 105
                echo twig_escape_filter($this->env, $this->getAttribute($context["pmaPart4Detail"], "number", array()), "html", null, true);
                echo "
                                                                            </strong>
                                                                        </td>
                                                                    </tr>
                                                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pmaPart4Detail'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 110
            echo "                                                            </tbody>
                                                        </table>
                                                    </td>
                                                    <td width=\"80px\"></td>
                                                </tr>
                                                <TR>
                                                    <TD HEIGHT=\"30px\"></TD>
                                                </TR>
                                                <tr>
                                                    <td COLSPAN=8>
                                                        <legend></legend>
                                                    </td>
                                                </tr>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pmaPart4Group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 124
        echo "                                        </tbody>
                                        <TFOOT>
                                            <tr>
                                                
                                                <th COLSPAN=3 ALIGN=LEFT>
                                                    ";
        // line 129
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
        // line 139
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "pmaPart4DetailSPs", array()), 'widget');
        echo "-->
                    ";
        // line 140
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
        return "TestPmaSPBundle:PmaPart4SP:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  267 => 140,  263 => 139,  250 => 129,  243 => 124,  224 => 110,  213 => 105,  196 => 93,  183 => 85,  172 => 77,  168 => 75,  164 => 74,  158 => 70,  148 => 66,  141 => 62,  136 => 60,  131 => 58,  126 => 56,  119 => 52,  115 => 50,  111 => 49,  107 => 47,  103 => 46,  86 => 32,  76 => 25,  72 => 24,  65 => 20,  61 => 18,  57 => 13,  53 => 12,  45 => 6,  42 => 5,  36 => 3,  30 => 2,);
    }
}
