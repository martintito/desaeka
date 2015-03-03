<?php

/* TestPmaSPBundle:PmaPart2SP:show.html.twig */
class __TwigTemplate_4fd495206966f779dcc17998bba858c50103eb29faa05058ff95139d8368972e extends Twig_Template
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
        echo "pmapart2sp";
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        echo "Prueba PMA Factor R";
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
                <!--<h2>";
        // line 12
        $this->displayBlock("title", $context, $blocks);
        echo "</h2>-->
                <div class=\"row-fluid\">
                    <table class=\"record_properties\">
                        <tbody>
                            <tr>
                                <th class=\"span3\">Evaluado</th>
                                <td class=\"span4\">";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "pmaSP", array()), "html", null, true);
        echo "</td>
                            </tr>
                            <tr>
                                <th class=\"span3\">Test Finalizado</th>
                                <!--<td class=\"span4\">";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "pmaPart2", array()), "html", null, true);
        echo "</td>-->
                                <td class=\"span4\">Factor E</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class=\"row-fluid\">
                    <center>
                        <h1>FACTOR R</h1>
                    </center>
                    <br>
                    <div class=\"row-fluid\">
                        <div class=\"span2\">
                        </div>
                        <div class=\"span9\" STYLE=\"font-family: Arial; font-size: 18px; color: black\">
                            Ahora va a resolver problemas de series formadas por letras del alfabeto. Tenga en cuenta que se suprimen, para mayor
                            facilidad, las letras compuestas del alfabeto español: ch, ll, rr.
                        </div>
                    </div>
                    <br>
                    <br>
                    <div class=\"row-fluid\">
                        <div class=\"span2\">
                        </div>
                        <div class=\"span9\" STYLE=\"font-family: Arial; font-size: 18px; color: black\">
                            Examine esta serie de letras: ¿Cuál seria la letra siguiente?
                        </div>
                    </div>
                    <div class=\"row-fluid\">
                        <div class=\"span3\">
                        </div>
                        <div class=\"span5\" align=\"right\" STYLE=\"font-family: Arial; font-size: 18px; color: black\">
                            a b a b a b a b
                        </div>
                        <div class=\"span3\" align=\"right\" STYLE=\"font-family: Arial; font-size: 18px; color: black\">
                            <strong>a</strong> b c d e f
                        </div>
                        <div class=\"span2\">
                        </div>
                    </div>
                    <br>
                    <div class=\"row-fluid\">
                        <div class=\"span2\">
                        </div>
                        <div class=\"span9\" STYLE=\"font-family: Arial; font-size: 18px; color: black\">
                            La serie sigue este orden: ab ab ab ab. La letra SIGUIENTE en esta serie seria la <strong>a</strong>. Se ha rodeado la
                            <strong>a</strong> del margen. Mírelo. Fíjese que lo que tiene que hacer es buscar cuáles son los grupos de letras que se van repitiendo, y
                            rodear al margen la letra con que prolongaría usted la serie.
                            <br>
                            <br>
                            <br>
                            Ahora fíjese en esta otra serie. Piense cuál es la letra que continuaría la serie. Trace un círculo alrededor de este letra,
                            en el margen.
                        </div>
                    </div>
                    <div class=\"row-fluid\">
                        <div class=\"span3\">
                        </div>
                        <div class=\"span5\" align=\"right\" STYLE=\"font-family: Arial; font-size: 18px; color: black\">
                            c a d a e a f a
                        </div>
                        <div class=\"span3\" align=\"right\" STYLE=\"font-family: Arial; font-size: 18px; color: black\">
                            a c d e f g
                        </div>
                        <div class=\"span2\">
                        </div>
                    </div>
                    <br>
                    <div class=\"row-fluid\">
                        <div class=\"span2\">
                        </div>
                        <div class=\"span9\" STYLE=\"font-family: Arial; font-size: 18px; color: black\">
                            La serie sigue este orden: ca da ea fa. Ha debido usted rodear la g.
                            <br>
                            <br>
                            <br>
                            Ahora estudíe las series de letras que vienen debajo. En cada una de ellas diga cuál es la letra que debería seguir.
                            Rodéela al margen con un círculo.
                        </div>
                    </div>
                    <div class=\"row-fluid\">
                        <div class=\"span3\">
                        </div>
                        <div class=\"span5\" align=\"right\" STYLE=\"font-family: Arial; font-size: 18px; color: black\">
                            c d c d c d
                            <br>
                            a a b b c c d d
                            <br>
                            a b x c d x e f x g h x
                        </div>
                        <div class=\"span3\" align=\"right\" STYLE=\"font-family: Arial; font-size: 18px; color: black\">
                            a b c d e f
                            <br>
                            a b c d e f
                            <br>
                            h i j k x y
                        </div>
                        <div class=\"span2\">
                        </div>
                    </div>
                    <br>
                    <div class=\"row-fluid\">
                        <div class=\"span2\">
                        </div>
                        <div class=\"span9\" STYLE=\"font-family: Arial; font-size: 18px; color: black\">
                            En la primera fila la serie seguía este orden: cd cd cd. Debío rodear la c.
                            <br>
                            <br>
                            En la segunda fila la serie seguía este orden: aa bb cc. Debío rodear la e.
                            <br>
                            <br>
                            En la tercera serie el orden era así: abx cdx efx ghx. Debío rodear la i.
                            <br>
                            <br>
                            <br>
                            Ahora haga estos otros ejercicios para practicar: señale la letra siguiente en cada serie, rodeándola en el margen.
                        </div>
                    </div>
                    <br>
                    <div class=\"row-fluid\">
                        <div class=\"span3\">
                        </div>
                        <div class=\"span5\" align=\"right\" STYLE=\"font-family: Arial; font-size: 18px; color: black\">
                            a a a b b b c c c d d
                            <br>
                            a x b y a x b y a x b
                            <br>
                            a b m c d m e f m g h m
                            <br>
                            r s r t r u r v r w r x r
                            <br>
                            a b c d a b c e a b c f a b c
                        </div>
                        <div class=\"span3\" align=\"right\" STYLE=\"font-family: Arial; font-size: 18px; color: black\">
                            a b c d e f
                            <br>
                            a b c x y z
                            <br>
                            g h i j m n
                            <br>
                            r s t w x y
                            <br>
                            a b c f g h
                        </div>
                        <div class=\"span2\">
                        </div>
                    </div>
                    <br>
                    <div class=\"row-fluid\">
                        <div class=\"span2\">
                        </div>
                        <div class=\"span9\" STYLE=\"font-family: Arial; font-size: 18px; color: black\">
                            En la primera fila la serie sigue este orden: aaa bbb ccc dd. Debío rodear la d.
                            <br>
                            <br>
                            En la segunda serie el orden es: axby axby axb. Debío rodear la y.
                            <br>
                            <br>
                            En la tercera serie el orden es: abm cdm efm ghm. Debío rodear la i
                            <br>
                            <br>
                            En la cuarta serie el orden es: rs rt rv rw rx r. Debío rodear la y
                            <br>
                            <br>
                            En la quinta serie el orden es: abcd abce abcf abc. Debío rodear la g.
                        </div>
                    </div>
                    <br>
                    <br>
                    <div class=\"row-fluid\">
                        <div class=\"span2\">
                        </div>
                        <div class=\"span9\" STYLE=\"font-family: Arial; font-size: 18px; color: black\">
                            Asegúrese bien de que entiende esta clase de problemas. Si no sabe hacer un problema, déjelo y pase al siguiente. Si luego le sobra
                            tiempo. trate de resolver los problemas que haya dejado.
                            <br>
                            <br>
                            Trabaje de prisa, pero procurando no equivocarse. Tendrá SIES MINUTOS para toda esta prueba. no termina, no se preocupe; es lo corriente.
                        </div>
                    </div>
                    
                    <div class=\"row-fluid\">
                        <div class=\"span2\">
                        </div>
                        <div class=\"span9\">
                            <ul class=\"record_actions\">
                                <li>
                                    <a href=\"";
        // line 210
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("test_pma_part3_sp_new", array("idpmasp" => $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "pmaSP", array()), "id", array()))), "html", null, true);
        echo "\">
                                        Empezar Prueba 3
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "TestPmaSPBundle:PmaPart2SP:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  259 => 210,  68 => 22,  61 => 18,  52 => 12,  45 => 7,  42 => 6,  36 => 4,  30 => 3,);
    }
}
