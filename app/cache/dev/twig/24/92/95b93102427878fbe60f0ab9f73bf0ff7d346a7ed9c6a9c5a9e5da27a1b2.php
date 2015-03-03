<?php

/* SeleccionProcesBundle:Consultant:failure.html.twig */
class __TwigTemplate_249295b93102427878fbe60f0ab9f73bf0ff7d346a7ed9c6a9c5a9e5da27a1b2 extends Twig_Template
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
        return "SeleccionProcesBundle:Consultant:failure.html.twig";
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
