<?php

/* GeneralBundle:Default:indexConsulting.html.twig */
class __TwigTemplate_8e0cb17f87fab601763f04dbb24daad1f4cbb60541b5559404acee81c56b8936 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::admin.html.twig");

        $this->blocks = array(
            'id' => array($this, 'block_id'),
            'title' => array($this, 'block_title'),
            'article' => array($this, 'block_article'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::admin.html.twig";
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
        echo "Lista de consultores";
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
            <div class=\"row-fluid\">
                <div class=\"span5\">
                    <h2>";
        // line 13
        $this->displayBlock("title", $context, $blocks);
        echo "</h2>
                </div>
                <div class=\"span7\">
                    <a href=\"";
        // line 16
        echo $this->env->getExtension('routing')->getPath("backend_consultores_new");
        echo "\" class=\"btn btn-primary add\"  title=\"Agregar\" >
                        <i class=\"icon-plus icon-large\"></i>
                    </a>
                </div>\t
            </div>
            <table class=\"table table-striped\">
                <thead>
                    <tr>
                        <th>Nombre Completo</th>
                        <th>login</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                ";
        // line 30
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 31
            echo "                    <tr>
                        <td>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "nombre", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "login", array()), "html", null, true);
            echo "</td>
                        <td>
                            <div class=\"btn-group\">
                                <a href=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("consultant_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\" class=\"edit btn btn-warning\" title=\"Editar\"><i class=\"icon-large icon-edit\"></i></a>
                            </div>
                        </td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "                </tbody>
            </table>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "GeneralBundle:Default:indexConsulting.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 41,  95 => 36,  89 => 33,  85 => 32,  82 => 31,  78 => 30,  61 => 16,  55 => 13,  45 => 7,  42 => 6,  36 => 4,  30 => 3,);
    }
}
