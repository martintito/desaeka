<?php

/* SeleccionProcesBundle:Default:index.html.twig */
class __TwigTemplate_b7aebb55b84d5f639861c72645b76373667911dc7fe06a086270d0584240c5f1 extends Twig_Template
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
        echo "seleccionProcess";
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        echo "Listado de Proceso de Selección";
    }

    // line 6
    public function block_article($context, array $blocks = array())
    {
        // line 7
        echo "<!--<h1>";
        $this->displayBlock("title", $context, $blocks);
        echo "</h1>-->
<div id=\"wrap\">
    <div class=\"container-fluid\">
        <div class=\"span12 content\">
            <br>
            <br>
            <div class=\"row-fluid\">
                <div class=\"span9\">
                    <h2>";
        // line 15
        $this->displayBlock("title", $context, $blocks);
        echo "</h2>
                </div>
                <div class=\"span1\">
                </div>
                <div class=\"span1\">
                    <a href=\"";
        // line 20
        echo $this->env->getExtension('routing')->getPath("consultor_new");
        echo "\" class=\"btn btn-primary add\"  title=\"Agregar\" >
                        <i class=\"icon-plus icon-large\"></i>
                    </a>
                </div>\t
            </div>
            <br>
            <table class=\"table table-striped\">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Cliente</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                ";
        // line 35
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 36
            echo "                    <tr>
                        <td class=\"span7\">";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "name", array()), "html", null, true);
            echo "</td>
                        <td class=\"span7\">";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "customer", array()), "html", null, true);
            echo "</td>
                        <td class=\"span2\">
                            <div class=\"btn-group\">
                                <a href=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("consultor_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\" class=\"edit btn btn-warning\" title=\"Editar\"><i class=\"icon-large icon-edit\"></i></a>
                            </div>
                        </td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "                </tbody>
            </table>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "SeleccionProcesBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 46,  100 => 41,  94 => 38,  90 => 37,  87 => 36,  83 => 35,  65 => 20,  57 => 15,  45 => 7,  42 => 6,  36 => 4,  30 => 3,);
    }
}
