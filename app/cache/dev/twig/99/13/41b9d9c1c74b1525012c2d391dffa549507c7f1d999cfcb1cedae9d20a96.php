<?php

/* SeleccionProcesBundle:Candidate:ResumePrivate.html.twig */
class __TwigTemplate_991341b9d9c1c74b1525012c2d391dffa549507c7f1d999cfcb1cedae9d20a96 extends Twig_Template
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
        echo " Ficha del candidato ";
    }

    // line 5
    public function block_article($context, array $blocks = array())
    {
        // line 6
        echo "
<!--<h1>";
        // line 7
        $this->displayBlock("title", $context, $blocks);
        echo "</h1>-->
<div id=\"wrap\">
    <div class=\"container-fluid\" class=\"align-center\">
        <div class=\"row-fluid\">
            <div class=\"span12 content\">
                
                    <div class=\"table table-striped\">
                        ";
        // line 14
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('routing')->getPath("resume_create", array("spc" => $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "candidate", array()), "id", array())))));
        echo "
                        <h1>";
        // line 15
        $this->displayBlock("title", $context, $blocks);
        echo "</h1>
                        <fieldset>
                            <div class=\"row-fluid\">
                                <table class=\"record_properties\">
                                    <tbody>
                                        <tr> 
                                            <td class=\"span9\"></td>
                                            <td class=\"span5\">
                                                <strong>Candidato:</strong> ";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "candidate", array()), "firstName", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "candidate", array()), "lastName", array()), "html", null, true);
        echo " 
                                                <br>
                                                <br>
                                                <strong>Cargo al que Postula: </strong> ";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entityRegisterDefinitionRol"]) ? $context["entityRegisterDefinitionRol"] : $this->getContext($context, "entityRegisterDefinitionRol")), "rol", array()), "name", array()), "html", null, true);
        echo "
                                                <br>
                                                <br>
                                                <strong>Razón Social del Cliente: </strong> ";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "selectionProcess", array()), "customer", array()), "razonSocial", array()), "html", null, true);
        echo "
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </fieldset>
                        
                        <fieldset>
                            ";
        // line 38
        $context["i"] = 0;
        // line 39
        echo "                            <!-- Datos Generales -->
                            <legend><h3>";
        // line 40
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "answersResumePrivate", array()), (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), array(), "array"), "questionbyProcessSelection", array()), "questionbySection", array()), "nivelSelectedbyResume", array()), "name", array()), "html", null, true);
        echo "</h3></legend>
                                <table class=\"record_properties\"   class=\"span12\">
                                    ";
        // line 42
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(range(0, 15));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 43
            echo "                                        <tr>
                                            <td class=\"span8\"><label for=\"jaxxes_FC_question_";
            // line 44
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "answersResumePrivate", array()), $context["i"], array(), "array"), "questionbyProcessSelection", array()), "questionbySection", array()), "description", array()), "html", null, true);
            echo ":</td>
                                            <td class=\"span4\">";
            // line 45
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "answersResumePrivate", array()), $context["i"], array(), "array"), 'widget');
            echo "</td>
                                        </tr>\t
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "                                </table>\t
                        </fieldset>
                        <fieldset>
                            ";
        // line 51
        $context["i"] = 16;
        // line 52
        echo "                            <legend><h3>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "answersResumePrivate", array()), (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), array(), "array"), "questionbyProcessSelection", array()), "questionbySection", array()), "nivelSelectedbyResume", array()), "sectionSelectedByResume", array()), "name", array()), "html", null, true);
        echo "</h3></legend>
                            <fieldset>
                                <legend>";
        // line 54
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "answersResumePrivate", array()), (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), array(), "array"), "questionbyProcessSelection", array()), "questionbySection", array()), "nivelSelectedbyResume", array()), "name", array()), "html", null, true);
        echo "</legend>
                                    <!-- Estudios de Post Grado o Maestria -->
                                    <table class=\"record_properties\" class=\"span12\">
                                        ";
        // line 57
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(range(16, 21));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 58
            echo "                                            <tr>
                                                <td class=\"span8\"><label for=\"jaxxes_FC_question_";
            // line 59
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "answersResumePrivate", array()), $context["i"], array(), "array"), "questionbyProcessSelection", array()), "questionbySection", array()), "description", array()), "html", null, true);
            echo ":</td>
                                                <td class=\"span4\">";
            // line 60
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "answersResumePrivate", array()), $context["i"], array(), "array"), 'widget');
            echo "</td>
                                            </tr>\t
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        echo "                                    </table>\t\t\t\t\t\t
                            </fieldset>
                            ";
        // line 65
        $context["i"] = 22;
        // line 66
        echo "                            <fieldset>
                                <legend>";
        // line 67
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "answersResumePrivate", array()), (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), array(), "array"), "questionbyProcessSelection", array()), "questionbySection", array()), "nivelSelectedbyResume", array()), "name", array()), "html", null, true);
        echo "</legend>
                                    <!-- Estudios de Post Grado o Maestria -->
                                    <table class=\"record_properties\" class=\"span12\">
                                        ";
        // line 70
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(range(22, 27));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 71
            echo "                                            <tr>
                                                <td class=\"span8\"><label for=\"jaxxes_FC_question_";
            // line 72
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "answersResumePrivate", array()), $context["i"], array(), "array"), "questionbyProcessSelection", array()), "questionbySection", array()), "description", array()), "html", null, true);
            echo ":</td>
                                                <td class=\"span4\">";
            // line 73
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "answersResumePrivate", array()), $context["i"], array(), "array"), 'widget');
            echo "</td>
                                            </tr>\t
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 76
        echo "                                    </table>\t\t\t\t\t\t
                            </fieldset>
                            <fieldset>
                                ";
        // line 79
        $context["i"] = 28;
        // line 80
        echo "                                <legend>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "answersResumePrivate", array()), (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), array(), "array"), "questionbyProcessSelection", array()), "questionbySection", array()), "nivelSelectedbyResume", array()), "name", array()), "html", null, true);
        echo "</legend>
                                    <!-- Estudios Universitarios -->
                                    <table class=\"record_properties\" class=\"span12\" >
                                        ";
        // line 83
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(range(28, 33));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 84
            echo "                                            <tr>
                                                <td class=\"span8\"><label for=\"jaxxes_FC_question_";
            // line 85
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "answersResumePrivate", array()), $context["i"], array(), "array"), "questionbyProcessSelection", array()), "questionbySection", array()), "description", array()), "html", null, true);
            echo ":</td>
                                                <td class=\"span4\">";
            // line 86
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "answersResumePrivate", array()), $context["i"], array(), "array"), 'widget');
            echo "</td>
                                            </tr>\t
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 89
        echo "                                    </table>\t\t\t\t\t\t
                            </fieldset>\t\t\t\t\t\t
                            <fieldset>
                                ";
        // line 92
        $context["i"] = 34;
        // line 93
        echo "                                <legend>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "answersResumePrivate", array()), (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), array(), "array"), "questionbyProcessSelection", array()), "questionbySection", array()), "nivelSelectedbyResume", array()), "name", array()), "html", null, true);
        echo "</legend>
                                    <!-- Estudios Universitarios -->
                                    <table class=\"record_properties\" class=\"span12\" >
                                        ";
        // line 96
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(range(34, 39));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 97
            echo "                                            <tr>
                                                <td class=\"span8\"><label for=\"jaxxes_FC_question_";
            // line 98
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "answersResumePrivate", array()), $context["i"], array(), "array"), "questionbyProcessSelection", array()), "questionbySection", array()), "description", array()), "html", null, true);
            echo ":</td>
                                                <td class=\"span4\">";
            // line 99
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "answersResumePrivate", array()), $context["i"], array(), "array"), 'widget');
            echo "</td>
                                            </tr>\t
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 102
        echo "                                    </table>\t\t\t\t\t\t
                            </fieldset>\t\t\t
                            <fieldset>
                                ";
        // line 105
        $context["i"] = 40;
        // line 106
        echo "                                <legend>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "answersResumePrivate", array()), (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), array(), "array"), "questionbyProcessSelection", array()), "questionbySection", array()), "nivelSelectedbyResume", array()), "name", array()), "html", null, true);
        echo "</legend>
                                    <!-- Estudios Técnicos -->
                                    <table class=\"record_properties\" class=\"span12\" >
                                        ";
        // line 109
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(range(40, 45));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 110
            echo "                                            <tr>
                                                <td class=\"span8\"><label for=\"jaxxes_FC_question_";
            // line 111
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "answersResumePrivate", array()), $context["i"], array(), "array"), "questionbyProcessSelection", array()), "questionbySection", array()), "description", array()), "html", null, true);
            echo ":</td>
                                                <td class=\"span4\">";
            // line 112
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "answersResumePrivate", array()), $context["i"], array(), "array"), 'widget');
            echo "</td>
                                            </tr>\t
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 115
        echo "                                    </table>\t\t\t\t\t\t
                            </fieldset>
                            
                            <fieldset>
                                ";
        // line 119
        $context["i"] = 46;
        // line 120
        echo "                                <legend>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "answersResumePrivate", array()), (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), array(), "array"), "questionbyProcessSelection", array()), "questionbySection", array()), "nivelSelectedbyResume", array()), "name", array()), "html", null, true);
        echo "</legend>
                                    <!-- otros estudios -->
                                    <table class=\"record_properties\" class=\"span12\" >
                                        ";
        // line 123
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(range(46, 50));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            echo " <!-- solo hasta 50 ya que no va rango academico-->
                                            <tr>
                                                <td class=\"span8\"><label for=\"jaxxes_FC_question_";
            // line 125
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "answersResumePrivate", array()), $context["i"], array(), "array"), "questionbyProcessSelection", array()), "questionbySection", array()), "description", array()), "html", null, true);
            echo ":</td>
                                                <td class=\"span4\">";
            // line 126
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "answersResumePrivate", array()), $context["i"], array(), "array"), 'widget');
            echo "</td>
                                            </tr>\t
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 129
        echo "                                    </table>\t\t\t\t\t\t
                            </fieldset>\t\t\t\t\t\t\t\t\t\t
                            
                            <fieldset>
                                ";
        // line 133
        $context["i"] = 52;
        // line 134
        echo "                                <legend>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "answersResumePrivate", array()), (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), array(), "array"), "questionbyProcessSelection", array()), "questionbySection", array()), "nivelSelectedbyResume", array()), "name", array()), "html", null, true);
        echo "</legend>
                                    <!-- Estudios Escolar -->
                                    <table class=\"record_properties\" class=\"span12\" >
                                        ";
        // line 137
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(range(52, 56));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            echo " <!-- solo hasta 56 ya que no va rango academico-->
                                            <tr>
                                                <td class=\"span8\"><label for=\"jaxxes_FC_question_";
            // line 139
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "answersResumePrivate", array()), $context["i"], array(), "array"), "questionbyProcessSelection", array()), "questionbySection", array()), "description", array()), "html", null, true);
            echo ":</td>
                                                <td class=\"span4\">";
            // line 140
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "answersResumePrivate", array()), $context["i"], array(), "array"), 'widget');
            echo "</td>
                                            </tr>\t
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 143
        echo "                                    </table>\t\t\t\t\t\t
                            </fieldset>
                            
                            <fieldset>
                                ";
        // line 147
        $context["i"] = 58;
        // line 148
        echo "                                <legend>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "answersResumePrivate", array()), (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), array(), "array"), "questionbyProcessSelection", array()), "questionbySection", array()), "nivelSelectedbyResume", array()), "name", array()), "html", null, true);
        echo "</legend>
                                    <!-- idiomas -->
                                    <table class=\"record_properties\" class=\"span12\" >
                                        <tr>
                                            ";
        // line 152
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(range(58, 62));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            echo "\t\t\t\t\t\t\t\t\t\t
                                                <td class=\"span2\"><label for=\"jaxxes_FC_question_";
            // line 153
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "answersResumePrivate", array()), $context["i"], array(), "array"), "questionbyProcessSelection", array()), "questionbySection", array()), "description", array()), "html", null, true);
            echo ":</td>\t\t\t\t\t\t\t\t\t\t
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 155
        echo "                                        </tr>
                                        ";
        // line 156
        $context["i"] = 58;
        // line 157
        echo "                                        <tr>
                                            ";
        // line 158
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(range(58, 62));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
                                                <td class=\"span2\">";
            // line 159
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "answersResumePrivate", array()), $context["i"], array(), "array"), 'widget');
            echo "</td>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 161
        echo "                                        </tr>
                                        ";
        // line 162
        $context["i"] = 63;
        // line 163
        echo "                                        <tr>
                                            ";
        // line 164
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(range(63, 67));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
                                                <td class=\"span2\">";
            // line 165
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "answersResumePrivate", array()), $context["i"], array(), "array"), 'widget');
            echo "</td>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 167
        echo "                                        </tr>
                                        ";
        // line 168
        $context["i"] = 68;
        // line 169
        echo "                                        <tr>
                                            ";
        // line 170
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(range(68, 72));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
                                                <td class=\"span2\">";
            // line 171
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "answersResumePrivate", array()), $context["i"], array(), "array"), 'widget');
            echo "</td>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 173
        echo "                                        </tr>\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
                                    </table>\t\t\t\t\t\t
                            </fieldset>\t\t\t\t\t\t\t
                            <fieldset>
                                ";
        // line 177
        $context["i"] = 73;
        // line 178
        echo "                                <legend>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "answersResumePrivate", array()), (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), array(), "array"), "questionbyProcessSelection", array()), "questionbySection", array()), "nivelSelectedbyResume", array()), "name", array()), "html", null, true);
        echo "</legend>
                                    <!-- herramientas -->
                                    <table class=\"record_properties\" class=\"span12\" >
                                        <tr> 
                                            ";
        // line 182
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(range(73, 77));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            echo "\t\t\t\t\t\t\t\t\t\t
                                                <td class=\"span2\"><label for=\"jaxxes_FC_question_";
            // line 183
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "answersResumePrivate", array()), $context["i"], array(), "array"), "questionbyProcessSelection", array()), "questionbySection", array()), "description", array()), "html", null, true);
            echo ":</td>\t\t\t\t\t\t\t\t\t\t\t
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 185
        echo "                                        </tr>
                                        ";
        // line 186
        $context["i"] = 73;
        // line 187
        echo "                                        <tr>
                                            ";
        // line 188
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(range(73, 77));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
                                                <td class=\"span2\">";
            // line 189
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "answersResumePrivate", array()), $context["i"], array(), "array"), 'widget');
            echo "</td>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 191
        echo "                                        </tr>
                                        ";
        // line 192
        $context["i"] = ((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) + 1);
        // line 193
        echo "                                        <tr>
                                            ";
        // line 194
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(range(78, 82));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
                                                <td class=\"span2\">";
            // line 195
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "answersResumePrivate", array()), $context["i"], array(), "array"), 'widget');
            echo "</td>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 197
        echo "                                        </tr>
                                        ";
        // line 198
        $context["i"] = ((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) + 1);
        // line 199
        echo "                                        <tr>
                                            ";
        // line 200
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(range(83, 87));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
                                                <td class=\"span2\">";
            // line 201
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "answersResumePrivate", array()), $context["i"], array(), "array"), 'widget');
            echo "</td>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 203
        echo "                                        </tr>
                                        ";
        // line 204
        $context["i"] = ((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) + 1);
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        $context["i"] = 76;
        // line 205
        echo "                                        <tr>
                                            ";
        // line 206
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(range(88, 92));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
                                                <td class=\"span2\">";
            // line 207
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "answersResumePrivate", array()), $context["i"], array(), "array"), 'widget');
            echo "</td>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 209
        echo "                                        </tr>
                                    </table>\t\t\t\t\t\t
                            </fieldset>\t\t
                        </fieldset>
                    <fieldset>
                            ";
        // line 214
        $context["i"] = 93;
        // line 215
        echo "                            <legend><h3>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "answersResumePrivate", array()), (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), array(), "array"), "questionbyProcessSelection", array()), "questionbySection", array()), "nivelSelectedbyResume", array()), "sectionSelectedByResume", array()), "name", array()), "html", null, true);
        echo "</h3></legend>                    
                            <fieldset>
                                <!-- Trabajo actual -->
                                <legend>";
        // line 218
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "answersResumePrivate", array()), (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), array(), "array"), "questionbyProcessSelection", array()), "questionbySection", array()), "nivelSelectedbyResume", array()), "name", array()), "html", null, true);
        echo "</legend>
                                    <table class=\"record_properties\" class=\"span12\" >
                                        ";
        // line 220
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(range(93, 112));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 221
            echo "                                            ";
            if (($context["i"] != "104")) {
                // line 222
                echo "                                                ";
                if (($context["i"] == "103")) {
                    // line 223
                    echo "                                                    <tr>
                                                        <td>
                                                            ";
                    // line 225
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "answersResumePrivate", array()), $context["i"], array(), "array"), "questionbyProcessSelection", array()), "questionbySection", array()), "description", array()), "html", null, true);
                    echo ":
                                                        </td>
                                                        <td>
                                                            ";
                    // line 228
                    echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "answersResumePrivate", array()), $context["i"], array(), "array"), 'widget');
                    echo "
                                                        </td>
                                                        <td>
                                                            ";
                    // line 231
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "answersResumePrivate", array()), ($context["i"] + 1), array(), "array"), "questionbyProcessSelection", array()), "questionbySection", array()), "description", array()), "html", null, true);
                    echo ":
                                                        </td>
                                                        <td>
                                                            ";
                    // line 234
                    echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "answersResumePrivate", array()), ($context["i"] + 1), array(), "array"), 'widget');
                    echo "
                                                        </td>
                                                    </tr>
                                                ";
                } else {
                    // line 238
                    echo "                                                    <tr>
                                                        <td class=\"span8\" colspan=3 ><label for=\"jaxxes_FC_question_";
                    // line 239
                    echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                    echo "\" >
                                                            ";
                    // line 240
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "answersResumePrivate", array()), $context["i"], array(), "array"), "questionbyProcessSelection", array()), "questionbySection", array()), "description", array()), "html", null, true);
                    echo ":
                                                        </td>
                                                        <td >";
                    // line 242
                    echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "answersResumePrivate", array()), $context["i"], array(), "array"), 'widget');
                    echo "</td>
                                                    </tr>
                                                ";
                }
                // line 245
                echo "                                            ";
            }
            // line 246
            echo "                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 247
        echo "                                    </table>\t\t\t\t\t\t
                            </fieldset>
                            <fieldset>
                                ";
        // line 250
        $context["i"] = 113;
        // line 251
        echo "                                <legend>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "answersResumePrivate", array()), (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), array(), "array"), "questionbyProcessSelection", array()), "questionbySection", array()), "nivelSelectedbyResume", array()), "name", array()), "html", null, true);
        echo "</legend>
                                    <!-- anterior trabajo -->
                                    <table class=\"record_properties\" class=\"span12\" >
                                        ";
        // line 254
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(range(113, 132));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 255
            echo "                                            ";
            if (($context["i"] != "124")) {
                // line 256
                echo "                                                ";
                if (($context["i"] == "123")) {
                    // line 257
                    echo "                                                    <tr>
                                                        <td>
                                                            ";
                    // line 259
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "answersResumePrivate", array()), $context["i"], array(), "array"), "questionbyProcessSelection", array()), "questionbySection", array()), "description", array()), "html", null, true);
                    echo ":
                                                        </td>
                                                        <td>
                                                            ";
                    // line 262
                    echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "answersResumePrivate", array()), $context["i"], array(), "array"), 'widget');
                    echo "
                                                        </td>
                                                        <td>
                                                            ";
                    // line 265
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "answersResumePrivate", array()), ($context["i"] + 1), array(), "array"), "questionbyProcessSelection", array()), "questionbySection", array()), "description", array()), "html", null, true);
                    echo ":
                                                        </td>
                                                        <td>
                                                            ";
                    // line 268
                    echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "answersResumePrivate", array()), ($context["i"] + 1), array(), "array"), 'widget');
                    echo "
                                                        </td>
                                                    </tr>
                                                ";
                } else {
                    // line 272
                    echo "                                                    <tr>
                                                        <td class=\"span8\" colspan=3 ><label for=\"jaxxes_FC_question_";
                    // line 273
                    echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                    echo "\" >
                                                            ";
                    // line 274
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "answersResumePrivate", array()), $context["i"], array(), "array"), "questionbyProcessSelection", array()), "questionbySection", array()), "description", array()), "html", null, true);
                    echo ":
                                                        </td>
                                                        <td >";
                    // line 276
                    echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "answersResumePrivate", array()), $context["i"], array(), "array"), 'widget');
                    echo "</td>
                                                    </tr>
                                                ";
                }
                // line 279
                echo "                                            ";
            }
            // line 280
            echo "                                            
                                            
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 283
        echo "                                    </table>\t\t\t\t\t\t
                            </fieldset>
                            <fieldset>
                                ";
        // line 286
        $context["i"] = 133;
        // line 287
        echo "                                <legend>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "answersResumePrivate", array()), (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), array(), "array"), "questionbyProcessSelection", array()), "questionbySection", array()), "nivelSelectedbyResume", array()), "name", array()), "html", null, true);
        echo "</legend>
                                    <!-- anterior trabajo -->
                                    <table class=\"record_properties\" class=\"span12\" >
                                        ";
        // line 290
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(range(133, 152));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 291
            echo "                                            ";
            if (($context["i"] != "144")) {
                // line 292
                echo "                                                ";
                if (($context["i"] == "143")) {
                    // line 293
                    echo "                                                    <tr>
                                                        <td>
                                                            ";
                    // line 295
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "answersResumePrivate", array()), $context["i"], array(), "array"), "questionbyProcessSelection", array()), "questionbySection", array()), "description", array()), "html", null, true);
                    echo ":
                                                        </td>
                                                        <td>
                                                            ";
                    // line 298
                    echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "answersResumePrivate", array()), $context["i"], array(), "array"), 'widget');
                    echo "
                                                        </td>
                                                        <td>
                                                            ";
                    // line 301
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "answersResumePrivate", array()), ($context["i"] + 1), array(), "array"), "questionbyProcessSelection", array()), "questionbySection", array()), "description", array()), "html", null, true);
                    echo ":
                                                        </td>
                                                        <td>
                                                            ";
                    // line 304
                    echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "answersResumePrivate", array()), ($context["i"] + 1), array(), "array"), 'widget');
                    echo "
                                                        </td>
                                                    </tr>
                                                ";
                } else {
                    // line 308
                    echo "                                                    <tr>
                                                        <td class=\"span8\" colspan=3 ><label for=\"jaxxes_FC_question_";
                    // line 309
                    echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                    echo "\" >
                                                            ";
                    // line 310
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "answersResumePrivate", array()), $context["i"], array(), "array"), "questionbyProcessSelection", array()), "questionbySection", array()), "description", array()), "html", null, true);
                    echo ":
                                                        </td>
                                                        <td >";
                    // line 312
                    echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "answersResumePrivate", array()), $context["i"], array(), "array"), 'widget');
                    echo "</td>
                                                    </tr>
                                                ";
                }
                // line 315
                echo "                                            ";
            }
            // line 316
            echo "                                            
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 318
        echo "                                    </table>
                            </fieldset>
                            <fieldset>
                                ";
        // line 321
        $context["i"] = 153;
        // line 322
        echo "                                <legend>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "answersResumePrivate", array()), (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), array(), "array"), "questionbyProcessSelection", array()), "questionbySection", array()), "nivelSelectedbyResume", array()), "name", array()), "html", null, true);
        echo "</legend>
                                    <!-- metas profesionales -->
                                    <table class=\"record_properties\" class=\"span12\" >
                                        ";
        // line 325
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(range(153, 155));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 326
            echo "                                            <tr>
                                                <td class=\"span8\" ><label for=\"jaxxes_FC_question_";
            // line 327
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "answersResumePrivate", array()), $context["i"], array(), "array"), "questionbyProcessSelection", array()), "questionbySection", array()), "description", array()), "html", null, true);
            echo ":</td>
                                                <td class=\"span4\" >";
            // line 328
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "answersResumePrivate", array()), $context["i"], array(), "array"), 'widget');
            echo "</td>
                                            </tr>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 331
        echo "                                    </table>\t\t\t\t
                            </fieldset>
                            <fieldset>
                                ";
        // line 334
        $context["i"] = 156;
        // line 335
        echo "                                <legend>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "answersResumePrivate", array()), (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), array(), "array"), "questionbyProcessSelection", array()), "questionbySection", array()), "nivelSelectedbyResume", array()), "name", array()), "html", null, true);
        echo "</legend>
                                    <!-- Expectativas remunerativas -->
                                    <table class=\"record_properties\" class=\"span12\" >
                                        ";
        // line 338
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(range(156, 161));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 339
            echo "                                            <tr>
                                                <td class=\"span8\"  ><label for=\"jaxxes_FC_question_";
            // line 340
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "answersResumePrivate", array()), $context["i"], array(), "array"), "questionbyProcessSelection", array()), "questionbySection", array()), "description", array()), "html", null, true);
            echo ":</td>
                                                <td class=\"span4\" >";
            // line 341
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "answersResumePrivate", array()), $context["i"], array(), "array"), 'widget');
            echo "</td>
                                            </tr>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 344
        echo "                                    </table>\t\t\t\t
                            </fieldset>
                            <fieldset>
                                ";
        // line 347
        $context["i"] = 162;
        // line 348
        echo "                                <legend>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "answersResumePrivate", array()), (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), array(), "array"), "questionbyProcessSelection", array()), "questionbySection", array()), "nivelSelectedbyResume", array()), "name", array()), "html", null, true);
        echo "</legend>
                                    <!-- Referencias Laborales -->
                                    <table class=\"record_properties\" class=\"span12\" >\t\t\t\t\t\t\t\t\t
                                        <tr> 
                                            ";
        // line 352
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(range(162, 165));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            echo "\t\t\t\t\t\t\t\t\t\t
                                                <td class=\"span3\" ><label for=\"jaxxes_FC_question_";
            // line 353
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "answersResumePrivate", array()), $context["i"], array(), "array"), "questionbyProcessSelection", array()), "questionbySection", array()), "description", array()), "html", null, true);
            echo ":</td>\t\t\t\t\t\t\t\t\t\t\t
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 355
        echo "                                        </tr>
                                        ";
        // line 356
        $context["i"] = 162;
        // line 357
        echo "                                        <tr>
                                            ";
        // line 358
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(range(162, 165));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
                                                <td class=\"span3\" > ";
            // line 359
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "answersResumePrivate", array()), $context["i"], array(), "array"), 'widget');
            echo "</td>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 361
        echo "                                        </tr>
                                        ";
        // line 362
        $context["i"] = 166;
        // line 363
        echo "                                        <tr>
                                            ";
        // line 364
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(range(166, 169));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
                                                <td class=\"span3\" >";
            // line 365
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "answersResumePrivate", array()), $context["i"], array(), "array"), 'widget');
            echo "</td>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 367
        echo "                                        </tr>
                                        ";
        // line 368
        $context["i"] = 170;
        // line 369
        echo "                                        <tr>
                                            ";
        // line 370
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(range(170, 173));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
                                                <td class=\"span3\" >";
            // line 371
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "answersResumePrivate", array()), $context["i"], array(), "array"), 'widget');
            echo "</td>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 373
        echo "                                        </tr>
                                        ";
        // line 374
        $context["i"] = 174;
        // line 375
        echo "                                        <tr>
                                            ";
        // line 376
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(range(174, 177));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
                                                <td class=\"span3\" >";
            // line 377
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "answersResumePrivate", array()), $context["i"], array(), "array"), 'widget');
            echo "</td>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 379
        echo "                                        </tr>\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
                                    </table>
                            </fieldset>\t\t\t\t\t\t
                    </fieldset>
                    <fieldset>
                            ";
        // line 384
        $context["i"] = 178;
        // line 385
        echo "                            <legend><h3>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "answersResumePrivate", array()), (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), array(), "array"), "questionbyProcessSelection", array()), "questionbySection", array()), "nivelSelectedbyResume", array()), "sectionSelectedByResume", array()), "name", array()), "html", null, true);
        echo "</h3></legend>
                            <!-- Entorno Familiar -->
                            <fieldset>
                                ";
        // line 388
        $context["i"] = 178;
        // line 389
        echo "                                <legend>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "answersResumePrivate", array()), (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), array(), "array"), "questionbyProcessSelection", array()), "questionbySection", array()), "nivelSelectedbyResume", array()), "name", array()), "html", null, true);
        echo "</legend>
                                    <table class=\"record_properties\" class=\"span12\" >
                                        <tr> 
                                            ";
        // line 392
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(range(178, 182));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            echo "\t\t\t\t\t\t\t\t\t\t
                                                <td class=\"span2\"><label for=\"jaxxes_FC_question_";
            // line 393
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "answersResumePrivate", array()), $context["i"], array(), "array"), "questionbyProcessSelection", array()), "questionbySection", array()), "description", array()), "html", null, true);
            echo ":</td>\t\t\t\t\t\t\t\t\t\t\t
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 395
        echo "                                        </tr>
                                        ";
        // line 396
        $context["i"] = 195;
        // line 397
        echo "                                        <tr>
                                            ";
        // line 398
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(range(178, 182));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
                                                <td class=\"span2\">";
            // line 399
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "answersResumePrivate", array()), $context["i"], array(), "array"), 'widget');
            echo "</td>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 401
        echo "                                        </tr>
                                        ";
        // line 402
        $context["i"] = 188;
        // line 403
        echo "                                        <tr>
                                            ";
        // line 404
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(range(183, 187));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
                                                <td class=\"span2\">";
            // line 405
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "answersResumePrivate", array()), $context["i"], array(), "array"), 'widget');
            echo "</td>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 407
        echo "                                        </tr>
                                        ";
        // line 408
        $context["i"] = 193;
        // line 409
        echo "                                        <tr>
                                            ";
        // line 410
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(range(188, 192));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
                                                <td class=\"span2\">";
            // line 411
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "answersResumePrivate", array()), $context["i"], array(), "array"), 'widget');
            echo "</td>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 413
        echo "                                        </tr>
                                        ";
        // line 414
        $context["i"] = 198;
        // line 415
        echo "                                        <tr>
                                            ";
        // line 416
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(range(193, 197));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
                                                <td class=\"span2\">";
            // line 417
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "answersResumePrivate", array()), $context["i"], array(), "array"), 'widget');
            echo "</td>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 419
        echo "                                        </tr>
                                    </table>\t\t\t\t
                            </fieldset>\t\t\t\t\t
                            <fieldset>
                                ";
        // line 423
        $context["i"] = 198;
        // line 424
        echo "                                <legend>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "answersResumePrivate", array()), (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), array(), "array"), "questionbyProcessSelection", array()), "questionbySection", array()), "nivelSelectedbyResume", array()), "name", array()), "html", null, true);
        echo "</legend>
                                    <!-- referencia personales -->
                                    <table class=\"record_properties\" class=\"span12\" >
                                        <tr> 
                                            ";
        // line 428
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(range(198, 202));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            echo "\t\t\t\t\t\t\t\t\t\t
                                                <td class=\"span3\"><label for=\"jaxxes_FC_question_";
            // line 429
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "answersResumePrivate", array()), $context["i"], array(), "array"), "questionbyProcessSelection", array()), "questionbySection", array()), "description", array()), "html", null, true);
            echo ":</td>\t\t\t\t\t\t\t\t\t\t\t
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 431
        echo "                                        </tr>
                                        ";
        // line 432
        $context["i"] = 198;
        // line 433
        echo "                                        <tr>
                                            ";
        // line 434
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(range(198, 202));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
                                                <td class=\"span3\">";
            // line 435
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "answersResumePrivate", array()), $context["i"], array(), "array"), 'widget');
            echo "</td>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 437
        echo "                                        </tr>
                                        ";
        // line 438
        $context["i"] = 203;
        // line 439
        echo "                                        <tr>
                                            ";
        // line 440
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(range(203, 207));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
                                                <td class=\"span3\"> ";
            // line 441
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "answersResumePrivate", array()), $context["i"], array(), "array"), 'widget');
            echo "</td>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 443
        echo "                                        </tr>
                                        ";
        // line 444
        $context["i"] = 208;
        // line 445
        echo "                                        <tr>
                                            ";
        // line 446
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(range(208, 212));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
                                                <td class=\"span3\">";
            // line 447
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "answersResumePrivate", array()), $context["i"], array(), "array"), 'widget');
            echo "</td>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 449
        echo "                                        </tr>
                                        <!--
                                        ";
        // line 451
        $context["i"] = 213;
        // line 452
        echo "                                        <tr>
                                            ";
        // line 453
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(range(213, 217));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
                                                <td>";
            // line 454
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "answersResumePrivate", array()), $context["i"], array(), "array"), 'widget');
            echo "</td>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 456
        echo "                                        </tr>
                                        ";
        // line 457
        $context["i"] = 218;
        // line 458
        echo "                                        <tr>
                                            ";
        // line 459
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(range(218, 222));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
                                                <td>";
            // line 460
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "answersResumePrivate", array()), $context["i"], array(), "array"), 'widget');
            echo "</td>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 462
        echo "                                        </tr>\t
                                        ";
        // line 463
        $context["i"] = 223;
        // line 464
        echo "                                        <tr>
                                            ";
        // line 465
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(range(223, 227));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
                                                <td>";
            // line 466
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "answersResumePrivate", array()), $context["i"], array(), "array"), 'widget');
            echo "</td>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 468
        echo "                                        </tr>\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
                                        -->\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
                                    </table>\t\t\t\t
                            </fieldset>\t
                            <fieldset>
                                ";
        // line 473
        $context["i"] = 228;
        // line 474
        echo "                                <legend>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "answersResumePrivate", array()), (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), array(), "array"), "questionbyProcessSelection", array()), "questionbySection", array()), "nivelSelectedbyResume", array()), "name", array()), "html", null, true);
        echo "</legend>
                                    <!-- Asociaciones -->
                                    <table class=\"record_properties\" class=\"span12\" >
                                        <tr> 
                                            ";
        // line 478
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(range(228, 231));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            echo "\t\t\t\t\t\t\t\t\t\t
                                                <td class=\"span3\" ><label for=\"jaxxes_FC_question_";
            // line 479
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "answersResumePrivate", array()), $context["i"], array(), "array"), "questionbyProcessSelection", array()), "questionbySection", array()), "description", array()), "html", null, true);
            echo ":</td>\t\t\t\t\t\t\t\t\t\t\t
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 481
        echo "                                        </tr>
                                        ";
        // line 482
        $context["i"] = 228;
        // line 483
        echo "                                        <tr>
                                            ";
        // line 484
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(range(228, 231));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
                                                <td class=\"span3\">";
            // line 485
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "answersResumePrivate", array()), $context["i"], array(), "array"), 'widget');
            echo "</td>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 487
        echo "                                        </tr>
                                        ";
        // line 488
        $context["i"] = 232;
        // line 489
        echo "                                        <tr>
                                            ";
        // line 490
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(range(232, 235));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
                                                <td class=\"span3\">";
            // line 491
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "answersResumePrivate", array()), $context["i"], array(), "array"), 'widget');
            echo "</td>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 493
        echo "                                        </tr>
                                                                        
                                    </table>\t\t\t\t
                            </fieldset>
                            <fieldset>
                                ";
        // line 498
        $context["i"] = 236;
        // line 499
        echo "                                <legend>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "answersResumePrivate", array()), (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), array(), "array"), "questionbyProcessSelection", array()), "questionbySection", array()), "nivelSelectedbyResume", array()), "name", array()), "html", null, true);
        echo "</legend>
                                    <!-- Propiedad -->
                                    <table class=\"record_properties\" class=\"span12\" >
                                        <tr> 
                                            ";
        // line 503
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(range(236, 238));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            echo "\t\t\t\t\t\t\t\t\t\t
                                                <td class=\"span4\" ><label for=\"jaxxes_FC_question_";
            // line 504
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "answersResumePrivate", array()), $context["i"], array(), "array"), "questionbyProcessSelection", array()), "questionbySection", array()), "description", array()), "html", null, true);
            echo ":</td>\t\t\t\t\t\t\t\t\t\t\t
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 506
        echo "                                        </tr>
                                        ";
        // line 507
        $context["i"] = 236;
        // line 508
        echo "                                        <tr>
                                            ";
        // line 509
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(range(236, 238));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
                                                <td class=\"span4\" > ";
            // line 510
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "answersResumePrivate", array()), $context["i"], array(), "array"), 'widget');
            echo "</td>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 512
        echo "                                        </tr>
                                        ";
        // line 513
        $context["i"] = 239;
        // line 514
        echo "                                        <tr>
                                            ";
        // line 515
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(range(239, 241));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
                                                <td class=\"span4\" >";
            // line 516
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "answersResumePrivate", array()), $context["i"], array(), "array"), 'widget');
            echo "</td>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 518
        echo "                                        </tr>\t\t\t\t\t\t\t\t\t
                                    </table>\t\t\t\t
                            </fieldset>\t\t\t\t\t\t\t
                            <fieldset>
                                ";
        // line 522
        $context["i"] = 242;
        // line 523
        echo "                                <legend>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "answersResumePrivate", array()), (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), array(), "array"), "questionbyProcessSelection", array()), "questionbySection", array()), "nivelSelectedbyResume", array()), "name", array()), "html", null, true);
        echo "</legend>
                                    <!-- Estado de Salud Fisica -->
                                    <table class=\"record_properties\" class=\"span12\" >
                                        ";
        // line 526
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(range(242, 246));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 527
            echo "                                            <tr>
                                                <td class=\"span8\" ><label for=\"jaxxes_FC_question_";
            // line 528
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "answersResumePrivate", array()), $context["i"], array(), "array"), "questionbyProcessSelection", array()), "questionbySection", array()), "description", array()), "html", null, true);
            echo ":</td>
                                                <td class=\"span4\" >";
            // line 529
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "answersResumePrivate", array()), $context["i"], array(), "array"), 'widget');
            echo "</td>
                                            </tr>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 532
        echo "                                    </table>\t\t\t\t
                            </fieldset>\t
                            <fieldset>
                                ";
        // line 535
        $context["i"] = 247;
        // line 536
        echo "                                <legend>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "answersResumePrivate", array()), (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), array(), "array"), "questionbyProcessSelection", array()), "questionbySection", array()), "nivelSelectedbyResume", array()), "name", array()), "html", null, true);
        echo "</legend>
                                    <!-- Disponibilidad -->
                                    <table class=\"record_properties\" class=\"span12\" >
                                        ";
        // line 539
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(range(247, 251));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 540
            echo "                                            <tr>
                                                <td class=\"span8\" ><label for=\"jaxxes_FC_question_";
            // line 541
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "answersResumePrivate", array()), $context["i"], array(), "array"), "questionbyProcessSelection", array()), "questionbySection", array()), "description", array()), "html", null, true);
            echo ":</td>
                                                <td class=\"span4\" >";
            // line 542
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "answersResumePrivate", array()), $context["i"], array(), "array"), 'widget');
            echo "</td>
                                            </tr>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 545
        echo "                                    </table>\t\t\t\t
                            </fieldset>
                    </fieldset>
                    <br>
                    <fieldset>
                            <div class=\"row-fluid\">
                                <table class=\"record_properties\">
                                    <tbody>
                                        <tr> 
                                            <td class=\"span7\"></td>
                                                <strong><u>DECLARACIÓN JURADA:</u></strong> Considérese el presente documento como declaración jurada del postulante en mención quien acepta que los 
                                                 <br>
                                                 datos presentados son ciertos y comprobables, el candidato se somete ante las pautas de conducta y normas internas de la empresa, ante 
                                                 <br>
                                                 cualquier falsedad.
                                            <td class=\"span2\">
                                                
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </fieldset>
                        <br>
                        ";
        // line 569
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Guardar", array()), 'widget');
        echo "
                        <!--";
        // line 570
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "answersResumePrivate", array()), 'widget');
        echo "-->
                        ";
        // line 571
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
        return "SeleccionProcesBundle:Candidate:ResumePrivate.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1600 => 571,  1596 => 570,  1592 => 569,  1566 => 545,  1557 => 542,  1551 => 541,  1548 => 540,  1544 => 539,  1537 => 536,  1535 => 535,  1530 => 532,  1521 => 529,  1515 => 528,  1512 => 527,  1508 => 526,  1501 => 523,  1499 => 522,  1493 => 518,  1485 => 516,  1479 => 515,  1476 => 514,  1474 => 513,  1471 => 512,  1463 => 510,  1457 => 509,  1454 => 508,  1452 => 507,  1449 => 506,  1439 => 504,  1433 => 503,  1425 => 499,  1423 => 498,  1416 => 493,  1408 => 491,  1402 => 490,  1399 => 489,  1397 => 488,  1394 => 487,  1386 => 485,  1380 => 484,  1377 => 483,  1375 => 482,  1372 => 481,  1362 => 479,  1356 => 478,  1348 => 474,  1346 => 473,  1339 => 468,  1331 => 466,  1325 => 465,  1322 => 464,  1320 => 463,  1317 => 462,  1309 => 460,  1303 => 459,  1300 => 458,  1298 => 457,  1295 => 456,  1287 => 454,  1281 => 453,  1278 => 452,  1276 => 451,  1272 => 449,  1264 => 447,  1258 => 446,  1255 => 445,  1253 => 444,  1250 => 443,  1242 => 441,  1236 => 440,  1233 => 439,  1231 => 438,  1228 => 437,  1220 => 435,  1214 => 434,  1211 => 433,  1209 => 432,  1206 => 431,  1196 => 429,  1190 => 428,  1182 => 424,  1180 => 423,  1174 => 419,  1166 => 417,  1160 => 416,  1157 => 415,  1155 => 414,  1152 => 413,  1144 => 411,  1138 => 410,  1135 => 409,  1133 => 408,  1130 => 407,  1122 => 405,  1116 => 404,  1113 => 403,  1111 => 402,  1108 => 401,  1100 => 399,  1094 => 398,  1091 => 397,  1089 => 396,  1086 => 395,  1076 => 393,  1070 => 392,  1063 => 389,  1061 => 388,  1054 => 385,  1052 => 384,  1045 => 379,  1037 => 377,  1031 => 376,  1028 => 375,  1026 => 374,  1023 => 373,  1015 => 371,  1009 => 370,  1006 => 369,  1004 => 368,  1001 => 367,  993 => 365,  987 => 364,  984 => 363,  982 => 362,  979 => 361,  971 => 359,  965 => 358,  962 => 357,  960 => 356,  957 => 355,  947 => 353,  941 => 352,  933 => 348,  931 => 347,  926 => 344,  917 => 341,  911 => 340,  908 => 339,  904 => 338,  897 => 335,  895 => 334,  890 => 331,  881 => 328,  875 => 327,  872 => 326,  868 => 325,  861 => 322,  859 => 321,  854 => 318,  847 => 316,  844 => 315,  838 => 312,  833 => 310,  829 => 309,  826 => 308,  819 => 304,  813 => 301,  807 => 298,  801 => 295,  797 => 293,  794 => 292,  791 => 291,  787 => 290,  780 => 287,  778 => 286,  773 => 283,  765 => 280,  762 => 279,  756 => 276,  751 => 274,  747 => 273,  744 => 272,  737 => 268,  731 => 265,  725 => 262,  719 => 259,  715 => 257,  712 => 256,  709 => 255,  705 => 254,  698 => 251,  696 => 250,  691 => 247,  685 => 246,  682 => 245,  676 => 242,  671 => 240,  667 => 239,  664 => 238,  657 => 234,  651 => 231,  645 => 228,  639 => 225,  635 => 223,  632 => 222,  629 => 221,  625 => 220,  620 => 218,  613 => 215,  611 => 214,  604 => 209,  596 => 207,  590 => 206,  587 => 205,  583 => 204,  580 => 203,  572 => 201,  566 => 200,  563 => 199,  561 => 198,  558 => 197,  550 => 195,  544 => 194,  541 => 193,  539 => 192,  536 => 191,  528 => 189,  522 => 188,  519 => 187,  517 => 186,  514 => 185,  504 => 183,  498 => 182,  490 => 178,  488 => 177,  482 => 173,  474 => 171,  468 => 170,  465 => 169,  463 => 168,  460 => 167,  452 => 165,  446 => 164,  443 => 163,  441 => 162,  438 => 161,  430 => 159,  424 => 158,  421 => 157,  419 => 156,  416 => 155,  406 => 153,  400 => 152,  392 => 148,  390 => 147,  384 => 143,  375 => 140,  369 => 139,  362 => 137,  355 => 134,  353 => 133,  347 => 129,  338 => 126,  332 => 125,  325 => 123,  318 => 120,  316 => 119,  310 => 115,  301 => 112,  295 => 111,  292 => 110,  288 => 109,  281 => 106,  279 => 105,  274 => 102,  265 => 99,  259 => 98,  256 => 97,  252 => 96,  245 => 93,  243 => 92,  238 => 89,  229 => 86,  223 => 85,  220 => 84,  216 => 83,  209 => 80,  207 => 79,  202 => 76,  193 => 73,  187 => 72,  184 => 71,  180 => 70,  174 => 67,  171 => 66,  169 => 65,  165 => 63,  156 => 60,  150 => 59,  147 => 58,  143 => 57,  137 => 54,  131 => 52,  129 => 51,  124 => 48,  115 => 45,  109 => 44,  106 => 43,  102 => 42,  97 => 40,  94 => 39,  92 => 38,  80 => 29,  74 => 26,  66 => 23,  55 => 15,  51 => 14,  41 => 7,  38 => 6,  35 => 5,  29 => 3,);
    }
}
