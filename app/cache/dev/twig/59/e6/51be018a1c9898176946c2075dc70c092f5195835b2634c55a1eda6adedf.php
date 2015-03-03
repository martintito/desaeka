<?php

/* TestGatbSPBundle:GatbPart4SP:new.html.twig */
class __TwigTemplate_59e651be018a1c9898176946c2075dc70c092f5195835b2634c55a1eda6adedf extends Twig_Template
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
        echo "gatbpart4sp";
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "GATB - Parte 4";
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
                        </font>", array("%tiempo%" => $this->env->getExtension('extension_jaxxes')->cuentaAtrasGatbPart4($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "gatbSP", array()), "selectionProcessCandidate", array()), "candidate", array()), "birthDate", array()))), "messages");
        // line 18
        echo "                </h1>
                <div class=\"row-fluid\">
                    ";
        // line 20
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('routing')->getPath("test_gatb_part4_sp_create", array("idgatbsp" => $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "gatbSP", array()), "id", array())))));
        echo "  
                    
                        <fieldset>
                            <!--
                            ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "gatbPart4", array()), 'widget');
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
                                        <tbody>
                                            ";
        // line 45
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "gatbPart4DetailSPs", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["gatbPart4DetailSP"]) {
            // line 46
            echo "                                                <tr>
                                                    <th class=\"span1\">
                                                        <strong>";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["gatbPart4DetailSP"], "gatbPart4Detail", array()), "number", array()), "html", null, true);
            echo ".</strong>
                                                    </th>
                                                    <td class=\"span2\">
                                                        <strong>a) </strong> ";
            // line 51
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["gatbPart4DetailSP"], "gatbPart4Detail", array()), "fieldA", array()), "html", null, true);
            echo "
                                                    </td>
                                                    <td class=\"span2\">
                                                        <strong>b) </strong> ";
            // line 54
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["gatbPart4DetailSP"], "gatbPart4Detail", array()), "fieldB", array()), "html", null, true);
            echo "
                                                    </td>
                                                    <td class=\"span2\">
                                                        <strong>c) </strong> ";
            // line 57
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["gatbPart4DetailSP"], "gatbPart4Detail", array()), "fieldC", array()), "html", null, true);
            echo "
                                                    </td>
                                                    <td class=\"span2\">
                                                        <strong>d) </strong> ";
            // line 60
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["gatbPart4DetailSP"], "gatbPart4Detail", array()), "fieldD", array()), "html", null, true);
            echo "
                                                    </td>
                                                    <td class=\"span2\">
                                                        ";
            // line 63
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "gatbPart4DetailSPs", array()), ($this->getAttribute($this->getAttribute($context["gatbPart4DetailSP"], "gatbPart4Detail", array()), "number", array()) - 1), array(), "array"), "answer", array()), 'widget');
            echo "
                                                    </td>
                                                </tr>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['gatbPart4DetailSP'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
        echo "                                        </tbody>
                                        <TFOOT>
                                            <tr>
                                                <th></th>
                                                <th COLSPAN=3 ALIGN=LEFT>
                                                    ";
        // line 72
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
        // line 82
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "gatbPart4DetailSPs", array()), 'widget');
        echo "-->
                    ";
        // line 83
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
        return "TestGatbSPBundle:GatbPart4SP:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  174 => 83,  170 => 82,  157 => 72,  150 => 67,  140 => 63,  134 => 60,  128 => 57,  122 => 54,  116 => 51,  110 => 48,  106 => 46,  102 => 45,  86 => 32,  76 => 25,  72 => 24,  65 => 20,  61 => 18,  57 => 13,  53 => 12,  45 => 6,  42 => 5,  36 => 3,  30 => 2,);
    }
}
