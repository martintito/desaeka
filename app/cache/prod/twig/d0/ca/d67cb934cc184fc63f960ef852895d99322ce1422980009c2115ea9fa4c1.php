<?php

/* SeleccionProcesBundle:Default:show.html.twig */
class __TwigTemplate_d0cad67cb934cc184fc63f960ef852895d99322ce1422980009c2115ea9fa4c1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::consultor.html.twig");

        $this->blocks = array(
            'id' => array($this, 'block_id'),
            'title' => array($this, 'block_title'),
            'article' => array($this, 'block_article'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::consultor.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_id($context, array $blocks = array())
    {
        echo "seleccionprocess";
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        echo "Definición de proceso de selección";
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
                <br>
                <h2>";
        // line 13
        $this->displayBlock("title", $context, $blocks);
        echo "</h2>
                
                <div class=\"row-fluid\">
                    <table class=\"record_properties\">
                        <tbody>
                            <tr> 
                                <td width=\"40px\" ></td>
                                <th width=\"120px\">Nombre :</th>
                                <td width=\"520px\">";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "name", array()), "html", null, true);
        echo "</td>
                            </tr>
                            <tr> 
                                <td width=\"10px\" ></td>
                                <th  colspan=2 height=\"10px\"></th>
                            </tr>
                            <tr> 
                                <td width=\"40px\" ></td>
                                <th width=\"120px\">Cliente :</th>
                                <td width=\"520px\">";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "customer", array()), "html", null, true);
        echo "</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <br>
                <br>
                <div class=\"row-fluid\">
                    <div class=\"span1\"></div>
                    <div class=\"span8\">
                        <div class=\"span9\">
                            <h4>Listado de Candidatos</h4>
                        </div>
                        <div class=\"span2\">
                            <a href=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sp_candidato_new", array("idselectionprocess" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-primary add\"  title=\"Agregar\" >
                                <i class=\"icon-plus icon-large\"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class=\"row-fluid\">
                    <div class=\"span1\"></div>
                    <div class=\"span8\">
                        <table class=\"table table-striped\">
                            <thead>
                                <tr>
                                    <th class=\"span7\">Candidato</th>
                                    <th class=\"span5\">Usuario</th>
                                    <th class=\"span2\">Activo</th>
                                    <th class=\"span3\">Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                            ";
        // line 63
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["sp_candidatos"]) ? $context["sp_candidatos"] : $this->getContext($context, "sp_candidatos")));
        foreach ($context['_seq'] as $context["_key"] => $context["sp_candidato"]) {
            // line 64
            echo "                                <tr>
                                    <td class=\"span7\">";
            // line 65
            echo twig_escape_filter($this->env, $this->getAttribute($context["sp_candidato"], "candidate", array()), "html", null, true);
            echo "  
                                        ";
            // line 66
            if ($this->getAttribute($context["sp_candidato"], "finishtest", array())) {
                // line 67
                echo "                                            - <strong>(Test finalizado)</strong>
                                        ";
            }
            // line 69
            echo "                                    </td>
                                    <td class=\"span5\">";
            // line 70
            echo twig_escape_filter($this->env, $this->getAttribute($context["sp_candidato"], "userCandidate", array()), "html", null, true);
            echo "</td>
                                    <td class=\"span2\">
                                        ";
            // line 72
            if ($this->getAttribute($context["sp_candidato"], "active", array())) {
                // line 73
                echo "                                            <img alt=\"Fotografía\"  width=\"20px\" height=\"10px\"  src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(((isset($context["directorio_imagenes_jaxxes"]) ? $context["directorio_imagenes_jaxxes"] : $this->getContext($context, "directorio_imagenes_jaxxes")) . "check.jpg")), "html", null, true);
                echo "\">
                                        ";
            }
            // line 75
            echo "                                    </td>
                                    <td class=\"span3\">
                                        <div class=\"btn-group\">
                                            <a href=\"";
            // line 78
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sp_candidato_edit", array("id" => $this->getAttribute($context["sp_candidato"], "id", array()))), "html", null, true);
            echo "\" class=\"edit btn btn-warning\" title=\"Editar\"><i class=\"icon-large icon-edit\"></i></a>
                                        </div>
                                        ";
            // line 80
            if ($this->getAttribute($context["sp_candidato"], "finishtest", array())) {
                // line 81
                echo "                                            <div class=\"btn-group\">
                                                <a href=\"";
                // line 82
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sp_candidato_result_index", array("id_spc" => $this->getAttribute($context["sp_candidato"], "id", array()))), "html", null, true);
                echo "\" title=\"Impresión\">
                                                    <img alt=\"Fotografía\"  width=\"35px\" height=\"35px\"  src=\"";
                // line 83
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(((isset($context["directorio_imagenes_jaxxes"]) ? $context["directorio_imagenes_jaxxes"] : $this->getContext($context, "directorio_imagenes_jaxxes")) . "impresora.jpg")), "html", null, true);
                echo "\">
                                                </a>
                                            </div>
                                        ";
            }
            // line 87
            echo "                                    </td>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sp_candidato'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 90
        echo "                            </tbody>
                        </table>
                    </div>
                    
                </div>
                <br>
                <br>
                <ul class=\"record_actions\">
                    <li>
                        <a href=\"";
        // line 99
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("register_definition_rol_since_select_edit", array("idseleccionprocess" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\">
                            Agregar perfil de cargo
                        </a>
                    </li>
                    <li>
                        <a href=\"";
        // line 104
        echo $this->env->getExtension('routing')->getPath("consultor_portada");
        echo "\">
                            Volver al listado de proceso de selección
                        </a>
                    </li>
                    <!--<li>
                        <a  href=\"";
        // line 109
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("consultor_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\">
                            Modificar proceso seleccion
                        </a>
                    </li>-->
                </ul>
                <br>
                <br>
            </div>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "SeleccionProcesBundle:Default:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  209 => 109,  201 => 104,  193 => 99,  182 => 90,  174 => 87,  167 => 83,  163 => 82,  160 => 81,  158 => 80,  153 => 78,  148 => 75,  142 => 73,  140 => 72,  135 => 70,  132 => 69,  128 => 67,  126 => 66,  122 => 65,  119 => 64,  115 => 63,  93 => 44,  76 => 30,  64 => 21,  53 => 13,  45 => 7,  42 => 6,  36 => 4,  30 => 3,);
    }
}
