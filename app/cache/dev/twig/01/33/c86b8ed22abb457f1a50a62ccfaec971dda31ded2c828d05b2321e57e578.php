<?php

/* SeleccionProcesBundle:Candidate:failure.html.twig */
class __TwigTemplate_0133c86b8ed22abb457f1a50a62ccfaec971dda31ded2c828d05b2321e57e578 extends Twig_Template
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
        echo "Acceso Denegado";
    }

    // line 5
    public function block_article($context, array $blocks = array())
    {
        // line 6
        echo "
<h1><p><strong>EKA - JAXXES</strong></p></h1>

Usuario o contraseña incorrecta, verifique la información enviada por correo y vuelta a intentarlo

";
    }

    public function getTemplateName()
    {
        return "SeleccionProcesBundle:Candidate:failure.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 6,  35 => 5,  29 => 3,);
    }
}
