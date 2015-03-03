<?php

/* RolBundle:RegisterDefinitionRol:perfilcargopostulante.html.twig */
class __TwigTemplate_201fad006c7b26f08b3e25f2044943a2fa3fc29ad1bab7bfc54ef725ac83ddc3 extends Twig_Template
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

    // line 3
    public function block_id($context, array $blocks = array())
    {
        echo "registerdefinitionrol";
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        echo "Descripción del puesto vacante: ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "selectionProcess", array()), "html", null, true);
        echo " ";
    }

    // line 6
    public function block_article($context, array $blocks = array())
    {
        // line 7
        echo "
<div id=\"wrap\">
    <div class=\"container-fluid\">
        <div class=\"row-fluid\">
            <div class=\"span12 content\">
                <h2>";
        // line 12
        $this->displayBlock("title", $context, $blocks);
        echo "</h2>
                <br>
                
                <h2 style = \"text-align: center\" ></h2>
                
                <!--
                <div class=\"row-fluid\">
                    <table class=\"record_properties\">
\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<th class=\"span2\">Cargo: </th>
\t\t\t\t\t\t\t\t<td class=\"span7\">";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "rol", array()), "html", null, true);
        echo "</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<th class=\"span2\"> </th>
\t\t\t\t\t\t\t\t<td class=\"span7\">";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "descRol", array()), "html", null, true);
        echo "</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t</tbody>
\t\t\t\t\t</table>
\t\t\t\t</div>
\t\t\t\t-->
\t\t\t\t
\t\t\t\t<HR size=\"4\">
                <table class=\"table\">
                    <tbody>
                        <tr>
                            <td style=\"border:none;\" ><b>Cargo:</b></td>
                            <td width=\"80%\" style=\"border:none;\" ><b>";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "rol", array()), "html", null, true);
        echo "</b></td>
                        </tr>
                        <tr>
                            <td style=\"border:none;\" ></td>
                            <td width=\"80%\" style=\"border:none;\" >";
        // line 43
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "descRol", array()), "html", null, true);
        echo "</td>
                        </tr>
                        
                    </tbody>
                </table>
                <HR size=\"4\">
                <h3>1. Perfil de competencias requeridas</h3>
                <table class=\"table table-striped\">
                    <thead>
                        <tr>
                            <th>Experiencia profesional anterior</th>
                            <th width=\"10%\">N° Años</th>
                        </tr>
                        
                    </thead>
                    <tbody>
                        <tr>
                            <td>";
        // line 60
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "expAnt", array()), "html", null, true);
        echo "</td>
                            <td>";
        // line 61
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "expYears", array()), "html", null, true);
        echo "</td>
                        </tr>
                    </tbody>
                </table>
                <br>
                <table class=\"table table-striped\">
                    <thead>
                        <tr>
                            <th>Formación y Conocimientos Técnicos (R: Requeridos, V: Valorados)</th>
                        </tr>
                    </thead>
                </table>
                <div class=\"row-fluid\">
                    <div class=\"span4\">
                        <div>
                            Nivel de Estudios
                        </div>
                    </div>
                    <div class=\"span8\">
                        <table class=\"table table-striped\">
                            <thead>
                                <tr>
                                    <th>Descripción</th>
                                    <th width=\"20%\">Requerido</th>
                                </tr>
                            </thead>
                            <tbody>
                            ";
        // line 88
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["study_levels"]) ? $context["study_levels"] : $this->getContext($context, "study_levels")));
        foreach ($context['_seq'] as $context["_key"] => $context["study_level"]) {
            // line 89
            echo "                                <tr>
                                    <td>";
            // line 90
            echo twig_escape_filter($this->env, $this->getAttribute($context["study_level"], "descripcion", array()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 91
            echo twig_escape_filter($this->env, $this->getAttribute($context["study_level"], "req", array()), "html", null, true);
            echo "</td>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['study_level'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 94
        echo "                            </tbody>
                        </table>
                    </div>
                 </div>
                <br>
                <div class=\"row-fluid\">
                    <div class=\"span4\">
                        Maestría                       
                    </div>
                    <div class=\"span8\">
                        <table class=\"table table-striped\">
                            <thead>
                                <tr>
                                    <th>Descripción</th>
                                    <th width=\"20%\">Requerido</th>
                                </tr>
                            </thead>
                            <tbody>
                            ";
        // line 112
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["masters"]) ? $context["masters"] : $this->getContext($context, "masters")));
        foreach ($context['_seq'] as $context["_key"] => $context["master"]) {
            // line 113
            echo "                                <tr>
                                    <td>";
            // line 114
            echo twig_escape_filter($this->env, $this->getAttribute($context["master"], "descripcion", array()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 115
            echo twig_escape_filter($this->env, $this->getAttribute($context["master"], "req", array()), "html", null, true);
            echo "</td>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['master'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 118
        echo "                            </tbody>
                        </table>
                    </div>
                </div>
                <br>
                <div class=\"row-fluid\">
                    <div class=\"span4\">
                        <div>
                            Otros Conocimientos
                        </div>
                    </div>
                    <div class=\"span8\">
                        <table class=\"table table-striped\">
                            <thead>
                                <tr>
                                    <th>Nombre</th>
                                    <th width=\"20%\">Requerido</th>
                                </tr>
                            </thead>
                            <tbody>
                            ";
        // line 138
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["details"]) ? $context["details"] : $this->getContext($context, "details")));
        foreach ($context['_seq'] as $context["_key"] => $context["detail"]) {
            // line 139
            echo "                                <tr>
                                    <td>";
            // line 140
            echo twig_escape_filter($this->env, $this->getAttribute($context["detail"], "name", array()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 141
            echo twig_escape_filter($this->env, $this->getAttribute($context["detail"], "req", array()), "html", null, true);
            echo "</td>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['detail'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 144
        echo "                            </tbody>
                        </table>
                    </div>
                </div>
                
                <div class=\"row-fluid\">
                    <div class=\"span4\">
                        <div>
                            Lista de Idiomas
                        </div>
                    </div>
                    <div class=\"span8\">
                        <table class=\"table table-striped\">
                            <thead>
                                <tr>
                                    <th>Idioma</th>
                                    <th>Nivel</th>
                                    <th width=\"20%\">Requerido</th>
                                </tr>
                            </thead>
                            <tbody>
                            ";
        // line 165
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : $this->getContext($context, "languages")));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 166
            echo "                                <tr>
                                    <td>";
            // line 167
            echo twig_escape_filter($this->env, $this->getAttribute($context["language"], "language", array()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 168
            echo twig_escape_filter($this->env, $this->getAttribute($context["language"], "nivel", array()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 169
            echo twig_escape_filter($this->env, $this->getAttribute($context["language"], "req", array()), "html", null, true);
            echo "</td>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 172
        echo "                            </tbody>
                        </table>
                    </div>
                </div>

                <div class=\"row-fluid\">
                    <!--
                    <div class=\"span5\">
                    -->
                        <h3>2. Rasgos de Personalidad</h3>
                    <!--
                    </div>
                    -->
                </div>
                <table class=\"table table-striped\">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th width=\"10%\">Nivel</th>
                        </tr>
                    </thead>
                    <tbody>
                    ";
        // line 194
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["personalitys"]) ? $context["personalitys"] : $this->getContext($context, "personalitys")));
        foreach ($context['_seq'] as $context["_key"] => $context["personality"]) {
            // line 195
            echo "                        <tr>
                            <td>";
            // line 196
            echo twig_escape_filter($this->env, $this->getAttribute($context["personality"], "name", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 197
            echo twig_escape_filter($this->env, $this->getAttribute($context["personality"], "nivel", array()), "html", null, true);
            echo "</td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['personality'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 200
        echo "                    </tbody>
                </table>
                
                
                <div class=\"row-fluid\">
                    <div class=\"span5\">
                        <h3>3. Funciones a Realizar</h3>
                    </div>
                </div>
                <table class=\"table table-striped\">
                    <thead>
                        <tr>
                            <th>Descripción</th>
                        </tr>
                    </thead>
                    <tbody>
                    ";
        // line 216
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["functions"]) ? $context["functions"] : $this->getContext($context, "functions")));
        foreach ($context['_seq'] as $context["_key"] => $context["function"]) {
            // line 217
            echo "                        <tr>
                            <td>";
            // line 218
            echo twig_escape_filter($this->env, $this->getAttribute($context["function"], "descripcion", array()), "html", null, true);
            echo "</td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['function'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 221
        echo "                    </tbody>
                </table>
                <br>
                <br>
                <ul class=\"record_actions\">
                    <li>
                        <a href=\"";
        // line 227
        echo $this->env->getExtension('routing')->getPath("interview_new");
        echo "\">
                            Continuar con entrevista
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
        return "RolBundle:RegisterDefinitionRol:perfilcargopostulante.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  386 => 227,  378 => 221,  369 => 218,  366 => 217,  362 => 216,  344 => 200,  335 => 197,  331 => 196,  328 => 195,  324 => 194,  300 => 172,  291 => 169,  287 => 168,  283 => 167,  280 => 166,  276 => 165,  253 => 144,  244 => 141,  240 => 140,  237 => 139,  233 => 138,  211 => 118,  202 => 115,  198 => 114,  195 => 113,  191 => 112,  171 => 94,  162 => 91,  158 => 90,  155 => 89,  151 => 88,  121 => 61,  117 => 60,  97 => 43,  90 => 39,  75 => 27,  68 => 23,  54 => 12,  47 => 7,  44 => 6,  36 => 4,  30 => 3,);
    }
}
