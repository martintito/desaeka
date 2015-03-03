<?php

/* RolBundle:RegisterDefinitionRol:show.html.twig */
class __TwigTemplate_0559f5ee7ae8ffac0a89bcc87b0603e38677dee01d1a69505927f7795c96bebf extends Twig_Template
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
        echo "registerdefinitionrol";
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        echo "Ficha de perfil de cargo";
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
                <legend><h3>1. Descripción del puesto vacante</h3></legend>
                <div class=\"row-fluid\">
                    <table class=\"record_properties\">
                        <tbody>
                            <tr>
                                <!--<th class=\"span2\">Proceso de Seleccion: </th>
                                <td class=\"span2\">";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "selectionProcess", array()), "html", null, true);
        echo "</td>
                                -->
                                <th class=\"span2\">Rol: </th>
                                <td class=\"span7\">";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "rol", array()), "html", null, true);
        echo "</td>
                                <!--
                                <th class=\"span2\">Nombre: </th>
                                <td class=\"span2\">";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "name", array()), "html", null, true);
        echo "</td>
                                -->
                            </tr>
                            <tr>
                                <th class=\"span2\">Descripcion: </th>
                                <td class=\"span7\">";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "descRol", array()), "html", null, true);
        echo "</td>
                                <!--
                                <th class=\"span2\">Experiencia Anterior: </th>
                                <td class=\"span2\">";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "expAnt", array()), "html", null, true);
        echo "</td>
                                <th class=\"span2\">Años de Experiencia: </th>
                                <td class=\"span2\">";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "expYears", array()), "html", null, true);
        echo "</td>
                                -->
                            </tr>
                            <!--
                            <tr>
                                <th class=\"span2\">Otros Estudios: </th>
                                <td class=\"span2\">";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "studyOther", array()), "html", null, true);
        echo "</td>
                                <th class=\"span2\">Funciones a Realizar: </th>
                                <td class=\"span2\">";
        // line 44
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "labor", array()), "html", null, true);
        echo "</td>
                                <th class=\"span2\"></th>
                                <td class=\"span2\"></td>
                            </tr>
                            -->
                        </tbody>
                    </table>
                </div>
                <br>
                <legend><h3>2. Perfil competencias requeridas</h3></legend>
                <table class=\"table table-striped\">
                    <thead>
                        <tr>
                            <th>Experiencia profesional anterior</th>
                            <th>Nº Años</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>";
        // line 63
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "expAnt", array()), "html", null, true);
        echo "</td>
                            <td>";
        // line 64
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "expYears", array()), "html", null, true);
        echo "</td>
                        </tr>
                    </tbody>
                </table>
                <br>
                <table class=\"table table-striped\"><!--inicio FORMACIÓN CABECERA-->
                    <thead>
                        <tr>
                            <th>Formación y Conocimientos Técnicos(R: Requeridos, V: Valorados)</th></legend>
                        </tr>
                    </thead>
                </table>
                <div class=\"row-fluid\">
                <table class=\"record_properties\"><!--inicio FORMACIÓN CUERPO-->
                            <tr><!--inicio NIVEL DE ESTUDIOS-->
                                    <th width=\"250px\" align= \"left\">Nivel de estudios</th>
                                    <th width=\"50px\" align= \"center\">
\t\t\t\t\t\t\t\t\t   <a href=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("rol_study_level_new", array("idregisterdefinitionrol" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-primary add\"  title=\"Agregar\" >
\t\t\t\t\t\t\t\t\t   <i class=\"icon-plus icon-large\"></i>
\t\t\t\t\t\t\t\t\t   </a>
                                    </th>
                                    <th width=\"50px\" align= \"center\"></th>
                                    <th>              
                          \t\t\t<table>
\t\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t<th width=\"500px\" align= \"center\" bgcolor=\"#2f949c\"><font color=\"ffffff\">Descripción</font></th>
\t\t\t\t\t\t\t\t\t\t\t\t<th width=\"150px\" align= \"center\" bgcolor=\"#2f949c\"><font color=\"ffffff\">Requerido</font></th>
\t\t\t\t\t\t\t\t\t\t\t\t<th width=\"180px\" align= \"center\" bgcolor=\"#2f949c\"><font color=\"ffffff\">Modificar</font></th>
\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"table table-striped\">
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 97
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["study_levels"]) ? $context["study_levels"] : $this->getContext($context, "study_levels")));
        foreach ($context['_seq'] as $context["_key"] => $context["study_level"]) {
            // line 98
            echo "\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td width=\"500px\" >";
            // line 99
            echo twig_escape_filter($this->env, $this->getAttribute($context["study_level"], "descripcion", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td width=\"150px\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 101
            if ($this->getAttribute($context["study_level"], "req", array())) {
                // line 102
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img alt=\"Fotografía\"  width=\"20px\" height=\"10px\"  src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(((isset($context["directorio_imagenes_jaxxes"]) ? $context["directorio_imagenes_jaxxes"] : $this->getContext($context, "directorio_imagenes_jaxxes")) . "check.jpg")), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 104
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td width=\"180px\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"btn-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 107
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("rol_study_level_edit", array("id" => $this->getAttribute($context["study_level"], "id", array()))), "html", null, true);
            echo "\" class=\"edit btn btn-warning\" title=\"Editar\"><i class=\"icon-large icon-edit\"></i></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['study_level'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 112
        echo "\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t</table>
                                     </th> 
                            </tr><!--FIN NIVEL DE ESTUDIOS-->
                            <tr><td colspan=\"3\" > &nbsp </td></tr>
\t\t\t\t\t\t\t<tr><!--inicio MAESTRIA-->
                \t\t\t\t\t<th width=\"250px\" align= \"left\">Maestría</th>
                                    <th width=\"50px\" align= \"center\">
\t\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 121
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("rol_master_new", array("idregisterdefinitionrol" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-primary add\"  title=\"Agregar\" >
\t\t\t\t\t\t\t\t\t\t<i class=\"icon-plus icon-large\"></i>
\t\t\t\t\t\t\t\t\t\t</a>&nbsp &nbsp
\t\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t\t<th width=\"50px\" align= \"center\"></th>
                                    <th> 
                  \t\t\t\t\t\t<table class=\"record_properties\">
\t\t\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t<th width=\"500px\" align= \"center\" bgcolor=\"#2f949c\"><font color=\"ffffff\">Descripción</font></th>
\t\t\t\t\t\t\t\t\t\t\t\t\t<th width=\"150px\" align= \"center\" bgcolor=\"#2f949c\"><font color=\"ffffff\">Requerido</font></th>
\t\t\t\t\t\t\t\t\t\t\t\t\t<th width=\"180px\" align= \"center\" bgcolor=\"#2f949c\"><font color=\"ffffff\">Modificar</font></th>
\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t";
        // line 136
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["masters"]) ? $context["masters"] : $this->getContext($context, "masters")));
        foreach ($context['_seq'] as $context["_key"] => $context["master"]) {
            // line 137
            echo "\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td width=\"500px\">";
            // line 138
            echo twig_escape_filter($this->env, $this->getAttribute($context["master"], "descripcion", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td width=\"150px\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 140
            if ($this->getAttribute($context["master"], "req", array())) {
                // line 141
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img alt=\"Fotografía\"  width=\"20px\" height=\"10px\"  src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(((isset($context["directorio_imagenes_jaxxes"]) ? $context["directorio_imagenes_jaxxes"] : $this->getContext($context, "directorio_imagenes_jaxxes")) . "check.jpg")), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 143
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td width=\"180px\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"btn-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 146
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("rol_master_edit", array("id" => $this->getAttribute($context["master"], "id", array()))), "html", null, true);
            echo "\" class=\"edit btn btn-warning\" title=\"Editar\"><i class=\"icon-large icon-edit\"></i></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['master'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 151
        echo "\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t</th> 
                                     <!--FIN NIVEL maestría-->
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t<tr><td colspan=\"3\" > &nbsp </td>
\t\t\t\t\t\t\t<tr><!--inicio OTROS CONOCIMIENTOS-->
\t\t\t\t\t\t\t\t<th width=\"250px\" align= \"left\">Otros Conocimientos</th>
                                <th width=\"50px\" align= \"center\">
\t\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 160
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("rol_detail_new", array("idregisterdefinitionrol" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-primary add\"  title=\"Agregar\" >
\t\t\t\t\t\t\t\t\t\t<i class=\"icon-plus icon-large\"></i>
\t\t\t\t\t\t\t\t\t\t</a>&nbsp &nbsp
\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t<th width=\"50px\" align= \"center\"></th>
                                <th>
\t\t\t\t\t\t\t\t\t<table class=\"record_properties\">
\t\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t<th width=\"500px\" align= \"center\" bgcolor=\"#2f949c\"><font color=\"ffffff\">Nombre</font></th>
\t\t\t\t\t\t\t\t\t\t\t\t<th width=\"150px\" align= \"center\" bgcolor=\"#2f949c\"><font color=\"ffffff\">Requerido</font></th>
\t\t\t\t\t\t\t\t\t\t\t\t<th width=\"180px\" align= \"center\" bgcolor=\"#2f949c\"><font color=\"ffffff\">Modificar</font></th>
\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t";
        // line 175
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["details"]) ? $context["details"] : $this->getContext($context, "details")));
        foreach ($context['_seq'] as $context["_key"] => $context["detail"]) {
            // line 176
            echo "\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t<td width=\"500px\">";
            // line 177
            echo twig_escape_filter($this->env, $this->getAttribute($context["detail"], "name", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td width=\"150px\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 179
            if ($this->getAttribute($context["detail"], "req", array())) {
                // line 180
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img alt=\"Fotografía\"  width=\"20px\" height=\"10px\"  src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(((isset($context["directorio_imagenes_jaxxes"]) ? $context["directorio_imagenes_jaxxes"] : $this->getContext($context, "directorio_imagenes_jaxxes")) . "check.jpg")), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 182
            echo "\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td width=\"180px\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"btn-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 185
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("rol_detail_edit", array("id" => $this->getAttribute($context["detail"], "id", array()))), "html", null, true);
            echo "\" class=\"edit btn btn-warning\" title=\"Editar\"><i class=\"icon-large icon-edit\"></i></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['detail'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 190
        echo "\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t<tr><td colspan=\"3\" > &nbsp </td>
\t\t\t\t\t\t\t<tr><!--inicio IDIOMAS-->
\t\t\t\t\t\t\t\t<th width=\"250px\" align= \"left\">Listado de Idiomas</th>
                                <th width=\"50px\" align= \"center\">
                \t\t\t\t\t\t<a href=\"";
        // line 198
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("rol_language_new", array("idregisterdefinitionrol" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-primary add\"  title=\"Agregar\" >
\t\t\t\t\t\t\t\t\t\t<i class=\"icon-plus icon-large\"></i>
\t\t\t\t\t\t\t\t\t\t</a>&nbsp &nbsp
\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t<th width=\"50px\" align= \"center\">
\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t<th>
\t\t\t\t\t\t\t\t\t<table class=\"record_properties\">
\t\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t<th width=\"250px\" align= \"center\" bgcolor=\"#2f949c\"><font color=\"ffffff\">Idioma</font></th>
\t\t\t\t\t\t\t\t\t\t\t\t<th width=\"250px\" align= \"center\" bgcolor=\"#2f949c\"><font color=\"ffffff\">Nivel</font></th>
\t\t\t\t\t\t\t\t\t\t\t\t<th width=\"150px\" align= \"center\" bgcolor=\"#2f949c\"><font color=\"ffffff\">Requerido</font></th>
\t\t\t\t\t\t\t\t\t\t\t\t<th width=\"180px\" align= \"center\" bgcolor=\"#2f949c\"><font color=\"ffffff\">Modificar</font></th>
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t";
        // line 216
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : $this->getContext($context, "languages")));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 217
            echo "\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t<td width=\"250px\">";
            // line 218
            echo twig_escape_filter($this->env, $this->getAttribute($context["language"], "language", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td width=\"250px\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 220
            if (($this->getAttribute($context["language"], "nivel", array()) == 1)) {
                // line 221
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\tBajo
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } elseif (($this->getAttribute($context["language"], "nivel", array()) == 2)) {
                // line 223
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\tIntermedio
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 225
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\tAvanzado
\t\t\t\t\t\t\t\t\t\t\t\t\t ";
            }
            // line 227
            echo "\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td width=\"150px\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 229
            if ($this->getAttribute($context["language"], "req", array())) {
                // line 230
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img alt=\"Fotografía\"  width=\"20px\" height=\"10px\"  src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(((isset($context["directorio_imagenes_jaxxes"]) ? $context["directorio_imagenes_jaxxes"] : $this->getContext($context, "directorio_imagenes_jaxxes")) . "check.jpg")), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 232
            echo "\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td width=\"180px\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"btn-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 235
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("rol_language_edit", array("id" => $this->getAttribute($context["language"], "id", array()))), "html", null, true);
            echo "\" class=\"edit btn btn-warning\" title=\"Editar\"><i class=\"icon-large icon-edit\"></i></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 240
        echo "\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t<tr><td colspan=\"3\" > &nbsp </td>
                </table> <!---fin de FORMACIÓN-->
                </div>
                <br>
                <br>
                <br>
                <table class=\"table table-striped\"><!--inicio RASGOS CABECERA-->
                    <thead>
                        <tr>
                            <th>Rasgos de personalidad</th></legend>
                        </tr>
                    </thead>
                </table>
                <div class=\"row-fluid\">
                   <table class=\"record_properties\"><!--inicio RASGOS CUERPO-->
                             <tr><!--inicio SOLO BOTÓN-->
                                    <th width=\"250px\" align= \"left\"></th>
                                    <th width=\"50px\" align= \"center\">
\t\t\t\t\t\t\t\t\t   <a href=\"";
        // line 262
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("rol_personality_new", array("idregisterdefinitionrol" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-primary add\"  title=\"Agregar\" >
\t\t\t\t\t\t\t\t\t\t<i class=\"icon-plus icon-large\"></i>
\t\t\t\t\t\t\t\t\t\t</a>
                                    </th>
                                    <th width=\"50px\" align= \"center\">
\t\t\t\t\t\t\t\t\t</th>
                                    <th>                               
                          \t\t\t<table>
\t\t\t\t\t\t\t\t\t\t<!--<thead>-->
\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t<th width=\"500px\" align= \"center\" bgcolor=\"#2f949c\"><font color=\"ffffff\">Nombre</font></th>
\t\t\t\t\t\t\t\t\t\t\t\t<th width=\"150px\" align= \"center\" bgcolor=\"#2f949c\"><font color=\"ffffff\">Nivel</font></th>
\t\t\t\t\t\t\t\t\t\t\t\t<th width=\"80px\" align= \"center\" bgcolor=\"#2f949c\"><font color=\"ffffff\">Modificar</font></th>
\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t<!--</thead>-->
\t\t\t\t\t\t\t\t\t\t\t\t <tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 278
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["personalitys"]) ? $context["personalitys"] : $this->getContext($context, "personalitys")));
        foreach ($context['_seq'] as $context["_key"] => $context["personality"]) {
            // line 279
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td width=\"550px\">";
            // line 280
            echo twig_escape_filter($this->env, $this->getAttribute($context["personality"], "name", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td width=\"250px\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 282
            if (($this->getAttribute($context["personality"], "nivel", array()) == 1)) {
                // line 283
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tBajo
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } elseif (($this->getAttribute($context["personality"], "nivel", array()) == 2)) {
                // line 285
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tIntermedio
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 287
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tAvanzado
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t ";
            }
            // line 289
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td width=\"50px\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"btn-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 292
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("rol_personality_edit", array("id" => $this->getAttribute($context["personality"], "id", array()))), "html", null, true);
            echo "\" class=\"edit btn btn-warning\" title=\"Editar\"><i class=\"icon-large icon-edit\"></i></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['personality'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 297
        echo "\t\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t</table>
                                     </th> 
                                     <!--FIN rasgos-->
                               </tr>
                            <tr><td colspan=\"3\" > &nbsp </td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t</table>
\t\t\t\t</div>
                <!-- -->
                <br>
                <br>
                <!---->
                <div class=\"row-fluid\">
                    <legend><h3>3. Funciones a realizar</h3></legend>
                </div>
                <div class=\"row-fluid\">
                    <table class=\"record_properties\"><!--3.-->
                            <thead>
\t\t\t\t\t\t\t<tr><!--inicio SOLO BOTÓN-->
                                    <th width=\"250px\" align= \"left\"></th>
                                    <th width=\"50px\" align= \"center\">
\t\t\t\t\t\t\t\t\t   <a href=\"";
        // line 319
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("rol_function_new", array("idregisterdefinitionrol" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-primary add\"  title=\"Agregar\" >
\t\t\t\t\t\t\t\t\t\t<i class=\"icon-plus icon-large\"></i>
\t\t\t\t\t\t\t\t\t\t</a>
                                    </th>
                                    <th width=\"50px\" align= \"center\">
\t\t\t\t\t\t\t\t\t</th>
                                    <th>                               
                          \t\t\t<table>
\t\t\t\t\t\t\t\t\t\t<!--<thead>-->
\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t<th width=\"500px\" align= \"center\" bgcolor=\"#2f949c\"><font color=\"ffffff\">Descripción</font></th>
\t\t\t\t\t\t\t\t\t\t\t\t<th width=\"80px\" align= \"center\" bgcolor=\"#2f949c\"><font color=\"ffffff\">Modificar</font></th>
\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t<!--</thead>-->
\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 334
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["functions"]) ? $context["functions"] : $this->getContext($context, "functions")));
        foreach ($context['_seq'] as $context["_key"] => $context["function"]) {
            // line 335
            echo "\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t<td width=\"700px\">";
            // line 336
            echo twig_escape_filter($this->env, $this->getAttribute($context["function"], "descripcion", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td width=\"50px\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"btn-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 339
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("rol_function_edit", array("id" => $this->getAttribute($context["function"], "id", array()))), "html", null, true);
            echo "\" class=\"edit btn btn-warning\" title=\"Editar\"><i class=\"icon-large icon-edit\"></i></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['function'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 344
        echo "\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t</th>  
\t\t\t\t\t\t\t </tr>
\t\t\t\t\t\t\t</thead>
\t\t\t\t\t</table>
\t\t\t\t    </div>
                     <!---->
                    
                </div>
                <br>
                <li>
                    <a href=\"";
        // line 356
        echo $this->env->getExtension('routing')->getPath("consultor_portada");
        echo "\">
                        Finalizar
                    </a>
                </li>
                <br>
                <br>
            </div>
            
        </div>
          </div>

";
    }

    public function getTemplateName()
    {
        return "RolBundle:RegisterDefinitionRol:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  589 => 356,  575 => 344,  564 => 339,  558 => 336,  555 => 335,  551 => 334,  533 => 319,  509 => 297,  498 => 292,  493 => 289,  489 => 287,  485 => 285,  481 => 283,  479 => 282,  474 => 280,  471 => 279,  467 => 278,  448 => 262,  424 => 240,  413 => 235,  408 => 232,  402 => 230,  400 => 229,  396 => 227,  392 => 225,  388 => 223,  384 => 221,  382 => 220,  377 => 218,  374 => 217,  370 => 216,  349 => 198,  339 => 190,  328 => 185,  323 => 182,  317 => 180,  315 => 179,  310 => 177,  307 => 176,  303 => 175,  285 => 160,  274 => 151,  263 => 146,  258 => 143,  252 => 141,  250 => 140,  245 => 138,  242 => 137,  238 => 136,  220 => 121,  209 => 112,  198 => 107,  193 => 104,  187 => 102,  185 => 101,  180 => 99,  177 => 98,  173 => 97,  154 => 81,  134 => 64,  130 => 63,  108 => 44,  103 => 42,  94 => 36,  89 => 34,  83 => 31,  75 => 26,  69 => 23,  63 => 20,  52 => 12,  45 => 7,  42 => 6,  36 => 4,  30 => 3,);
    }
}
