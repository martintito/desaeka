<?php

/* SeleccionProcesBundle:Default:seleccionproces.html.twig */
class __TwigTemplate_8f379f5ee0b5c8c9bde8a06d30618db032604d459661bb6771d485b4a4f9b6c4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::consultor.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'id' => array($this, 'block_id'),
            'article' => array($this, 'block_article'),
            'aside' => array($this, 'block_aside'),
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
    public function block_title($context, array $blocks = array())
    {
        echo " Titulo Seleccion Process  -- ";
    }

    // line 4
    public function block_id($context, array $blocks = array())
    {
        echo "seleccionproces";
    }

    // line 6
    public function block_article($context, array $blocks = array())
    {
        // line 7
        echo "<div id=\"wrap\">
    <div class=\"container-fluid\">\t
        <div class=\"row-fluid\">
            <div class=\"span12\">
                    <div class=\"row-fluid\">
                        <div class=\"span12 content\">

                            <div class=\"row-fluid\">
                                <div class=\"span5\">
                                    <h2>LISTA DE PROCESOS DE SELECCION</h2>
                                </div>
                                <div class=\"span7\">
                                    <a href=\"#\" class=\"btn btn-primary add\"  title=\"Agregar\" >
                                        <i class=\"icon-plus icon-large\"></i>
                                    </a>
                                </div>\t
                            </div>

                            <hr/>
                            <div class=\"row-fluid\">
                                <div class=\"span12\">
                                    <table class=\"table table-striped\" id=\"pseleccion\">
                                        <thead>
                                            <tr>\t\t\t
                                                <th style=\"display: none;\">
                                                    <!--<a href=\"root/company/list\" data-params=\"\" class=\"onload\" root=\"data\" ></a>-->
                                                </th>\t\t\t\t\t\t\t\t\t\t\t
                                                <th >Empresa</th>\t\t\t\t\t\t\t\t\t\t\t\t\t\t
                                                <th>Cargo</th>
                                                <th>Nivel de Cargo</th>
                                                <th >Fecha</th>\t
                                                <th>Participantes</th>
                                                <th>Completados</th>\t\t\t\t\t\t\t\t\t\t\t\t\t
                                                <th width=\"50px\">Acciones</th>
                                            </tr>
                                        </thead>
                                        <tfoot></tfoot>
                                        <tbody>

                                            <tr class=\"model\"  data-pk=\"idPseleccion\">\t\t\t\t\t\t\t\t\t\t\t\t\t
                                                <td class=\"empresa\"></td>\t\t\t\t\t\t\t\t\t\t\t\t\t
                                                <td class=\"cargo\"></td>
                                                <td class=\"nivelCargo\"></td>
                                                <td class=\"fecha\"></td>
                                                <td class=\"participantes\"></td>
                                                <td class=\"completados\"></td>\t\t\t\t\t\t\t\t\t\t\t\t\t
                                                <td class=\"actions\">\t\t
                                                    <div class=\"btn-group\">
                                                        <a href=\"#\" class=\"edit btn btn-warning\" title=\"Editar\"><i class=\"icon-large icon-edit\"></i></a>
                                                        <a href=\"#\" class=\"delete btn btn-danger\" title=\"Eliminar\" style=\"color:white\"><i class=\"icon-large icon-trash\"></i></a>
                                                    </div>\t
                                                </td>
                                            </tr>\t\t\t\t\t\t\t\t\t\t\t

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>\t
            </div>\t\t
        </div>\t\t\t
    </div>
    <div id=\"push\"></div>
</div>

<table class=\"records_list estrecha\">
    <thead>
        <tr>
            <th>Nombre</th>
            <th>Cliente</th>
        </tr>
    </thead>
    <tbody>
    ";
        // line 81
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 82
            echo "        <tr>
            <td>";
            // line 83
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "name", array()), "html", null, true);
            echo "</td>
            <!--<td>";
            // line 84
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "customer", array()), "html", null, true);
            echo "</td>-->
            <td>prueba</td>
        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 88
        echo "    </tbody>
</table>

<ul>
    <li>
        <a class=\"boton\" >
            Añadir una nuevo proceso de seleccion
        </a>
    </li>
</ul>

";
    }

    // line 101
    public function block_aside($context, array $blocks = array())
    {
        echo " Aside Seleccion Process -- ";
    }

    public function getTemplateName()
    {
        return "SeleccionProcesBundle:Default:seleccionproces.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  158 => 101,  143 => 88,  133 => 84,  129 => 83,  126 => 82,  122 => 81,  46 => 7,  43 => 6,  37 => 4,  31 => 3,);
    }
}
