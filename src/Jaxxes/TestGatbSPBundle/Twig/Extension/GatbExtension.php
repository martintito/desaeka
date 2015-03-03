<?php

namespace Jaxxes\TestGatbSPBundle\Twig\Extension;

use Symfony\Component\Translation\TranslatorInterface;

/**
 * Extensión propia de Twig con filtros y funciones útiles para
 * la aplicación
 */
class GatbExtension extends \Twig_Extension
{
    private $translator;

    public function __construct(TranslatorInterface $translator = null)
    {
        $this->translator = $translator;
    }

    public function getTranslator()
    {
        return $this->translator;
    }

    public function getFilters()
    {
        return array(
            'mostrar_como_lista' => new \Twig_Filter_Method($this, 'mostrarComoLista', array('is_safe' => array('html'))),
            'cuenta_atras' => new \Twig_Filter_Method($this, 'cuentaAtras', array('is_safe' => array('html'))),
            'cuenta_atras_GatbPart1' => new \Twig_Filter_Method($this, 'cuentaAtrasGatbPart1', array('is_safe' => array('html'))),
            'cuenta_atras_GatbPart2' => new \Twig_Filter_Method($this, 'cuentaAtrasGatbPart2', array('is_safe' => array('html'))),
            'cuenta_atras_GatbPart3' => new \Twig_Filter_Method($this, 'cuentaAtrasGatbPart3', array('is_safe' => array('html'))),
            'cuenta_atras_GatbPart4' => new \Twig_Filter_Method($this, 'cuentaAtrasGatbPart4', array('is_safe' => array('html'))),
            'cuenta_atras_GatbPart5' => new \Twig_Filter_Method($this, 'cuentaAtrasGatbPart5', array('is_safe' => array('html'))),
            'cuenta_atras_PmaPart1'  => new \Twig_Filter_Method($this, 'cuentaAtrasPmaPart1' , array('is_safe' => array('html'))),
            'cuenta_atras_PmaPart2'  => new \Twig_Filter_Method($this, 'cuentaAtrasPmaPart2' , array('is_safe' => array('html'))),
            'cuenta_atras_PmaPart3'  => new \Twig_Filter_Method($this, 'cuentaAtrasPmaPart3' , array('is_safe' => array('html'))),
            'cuenta_atras_PmaPart4'  => new \Twig_Filter_Method($this, 'cuentaAtrasPmaPart4' , array('is_safe' => array('html'))),
            'cuenta_atras_PmaPart5'  => new \Twig_Filter_Method($this, 'cuentaAtrasPmaPart5' , array('is_safe' => array('html'))),
            'fecha' => new \Twig_Filter_Method($this, 'fecha'),
             new \Twig_SimpleFilter('age', array($this, 'ageCalculate')),
        );
    }

    public function getFunctions()
    {
        return array(
            'descuento' => new \Twig_Function_Method($this, 'descuento')
        );
    }

    /**
     * Muestra como una lista HTML el contenido de texto al que se
     * aplica el filtro. Cada "\n" genera un nuevo elemento de
     * la lista.
     *
     * @param string $value El texto que se transforma
     * @param string $tipo  Tipo de lista a generar ('ul', 'ol')
     */
    public function mostrarComoLista($value, $tipo='ul')
    {
        $html = "<".$tipo.">".PHP_EOL;
        $html .= "  <li>".str_replace(PHP_EOL, "</li>".PHP_EOL."  <li>", $value)."</li>".PHP_EOL;
        $html .= "</".$tipo.">".PHP_EOL;

        return $html;
    }

    /**
     * Transforma una fecha en una cuenta atrás actualizada en tiempo
     * real mediante JavaScript.
     *
     * La cuenta atrás se muestra en un elemento HTML con un atributo
     * `id` generado automáticamente, para que se puedan añadir varias
     * cuentas atrás en la misma página.
     *
     * @param string $fecha Objeto que representa la fecha original
     */
    public function cuentaAtrasGatbPart1($fecha)
    {
        
        $idBoton = "jaxxes_testgatbspbundle_gatbpart1sp_guardar";
        $minutos = 6;
        return $this->cuentaAtras($fecha, $idBoton, $minutos);
    }
    
    public function cuentaAtrasGatbPart2($fecha)
    {
        
        $idBoton = "jaxxes_testgatbspbundle_gatbpart2sp_guardar";
        $minutos = 6;
        return $this->cuentaAtras($fecha, $idBoton, $minutos);
    }
    
    public function cuentaAtrasGatbPart3($fecha)
    {
        
        $idBoton = "jaxxes_testgatbspbundle_gatbpart3sp_guardar";
        $minutos = 6;
        return $this->cuentaAtras($fecha, $idBoton, $minutos);
    }
    
    public function cuentaAtrasGatbPart4($fecha)
    {
        
        $idBoton = "jaxxes_testgatbspbundle_gatbpart4sp_guardar";
        $minutos = 6;
        return $this->cuentaAtras($fecha, $idBoton, $minutos);
    }
    
    public function cuentaAtrasGatbPart5($fecha)
    {
        
        $idBoton = "jaxxes_testgatbspbundle_gatbpart5sp_guardar";
        $minutos = 7;
        return $this->cuentaAtras($fecha, $idBoton, $minutos);
    }
    
    public function cuentaAtrasPmaPart1($fecha)
    {
        
        $idBoton = "jaxxes_testpmaspbundle_pmapart1sp_guardar";
        $minutos = 4;
        return $this->cuentaAtras($fecha, $idBoton, $minutos);
    }
    
    public function cuentaAtrasPmaPart2($fecha)
    {
        
        $idBoton = "jaxxes_testpmaspbundle_pmapart2blocksp_guardar";
        $minutos = 5/4;
        return $this->cuentaAtras($fecha, $idBoton, $minutos);
    }
    
    public function cuentaAtrasPmaPart3($fecha)
    {
        
        $idBoton = "jaxxes_testpmaspbundle_pmapart3sp_guardar";
        $minutos = 6;
        return $this->cuentaAtras($fecha, $idBoton, $minutos);
    }
    
    public function cuentaAtrasPmaPart4($fecha)
    {
        
        $idBoton = "jaxxes_testpmaspbundle_pmapart4sp_guardar";
        $minutos = 6;
        return $this->cuentaAtras($fecha, $idBoton, $minutos);
    }
    
    public function cuentaAtrasPmaPart5($fecha)
    {
        
        $idBoton = "jaxxes_testpmaspbundle_pmapart5sp_guardar";
        $minutos = 5;
        return $this->cuentaAtras($fecha, $idBoton, $minutos);
    }
    
    public function cuentaAtras($fecha, $idBoton, $minutos)
    {
        // En JavaScript los meses empiezan a contar en 0 y acaban en 12
        // En PHP los meses van de 1 a 12, por lo que hay que convertir la fecha
        $fecha = json_encode(array(
            'ano' => $fecha->format('Y'),
            'mes' => $fecha->format('m')-1,
            'dia' => $fecha->format('d'),
            'hora'    => $fecha->format('H'),
            'minuto'  => $fecha->format('i'),
            'segundo' => $fecha->format('s')
        ));
        
        $tiempo = $minutos * 60;

        $idAleatorio = 'cuenta-atras-'.rand(1, 100000);
        $html = <<<EOJ
        <span id="$idAleatorio"></span>

        <script type="text/javascript">
        funcion_expira = function(){
            var expira = $fecha;
            muestraCuentaAtras('$idAleatorio', expira, '$idBoton', $tiempo);
        }
        if (!window.addEventListener) {
            window.attachEvent("onload", funcion_expira);
        } else {
            window.addEventListener('load', funcion_expira);
        }
        </script>
EOJ;

        return $html;
    }

    /**
     * Formatea la fecha indicada según las características del locale seleccionado.
     * Se utiliza para mostrar correctamente las fechas en el idioma de cada usuario.
     *
     * @param string $fecha        Objeto que representa la fecha original
     * @param string $formatoFecha Formato con el que se muestra la fecha
     * @param string $formatoHora  Formato con el que se muestra la hora
     * @param string $locale       El locale al que se traduce la fecha
     */
    public function fecha($fecha, $formatoFecha = 'medium', $formatoHora = 'none', $locale = null)
    {
        // Código copiado de
        //   https://github.com/thaberkern/symfony/blob
        //   /b679a23c331471961d9b00eb4d44f196351067c8
        //   /src/Symfony/Bridge/Twig/Extension/TranslationExtension.php

        // Formatos: http://www.php.net/manual/en/class.intldateformatter.php#intl.intldateformatter-constants
        $formatos = array(
            // Fecha/Hora: (no se muestra nada)
            'none'   => \IntlDateFormatter::NONE,
            // Fecha: 12/13/52  Hora: 3:30pm
            'short'  => \IntlDateFormatter::SHORT,
            // Fecha: Jan 12, 1952  Hora:
            'medium' => \IntlDateFormatter::MEDIUM,
            // Fecha: January 12, 1952  Hora: 3:30:32pm
            'long'   => \IntlDateFormatter::LONG,
            // Fecha: Tuesday, April 12, 1952 AD  Hora: 3:30:42pm PST
            'full'   => \IntlDateFormatter::FULL,
        );

        $formateador = \IntlDateFormatter::create(
            $locale != null ? $locale : $this->getTranslator()->getLocale(),
            $formatos[$formatoFecha],
            $formatos[$formatoHora]
        );

        if ($fecha instanceof \DateTime) {
            return $formateador->format($fecha);
        } else {
            return $formateador->format(new \DateTime($fecha));
        }
    }

    /**
     * Calcula el porcentaje que supone el descuento indicado en euros.
     * El precio no es el precio original sino el precio de venta (también en euros)
     *
     * @param string $precio    Precio de venta del producto (en euros)
     * @param string $descuento Descuento sobre el precio original (en euros)
     * @param string $decimales Número de decimales que muestra el descuento
     */
    public function descuento($precio, $descuento, $decimales = 0)
    {
        if (!is_numeric($precio) || !is_numeric($descuento)) {
            return '-';
        }

        if ($descuento == 0 || $descuento == null) {
            return '0%';
        }

        $precio_original = $precio + $descuento;
        $porcentaje = ($descuento / $precio_original) * 100;

        return '-'.number_format($porcentaje, $decimales).'%';
    }
    
    public function ageCalculate(\DateTime $bithdayDate)
    {
        $now = new \DateTime();
        $interval = $now->diff($bithdayDate);

        return $interval->y;
    }

    public function getName()
    {
        return 'extension_jaxxes';
    }
}
