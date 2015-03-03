<?php

namespace Proxies\__CG__\Jaxxes\SeleccionProcesBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class ResumePrivateCandidate extends \Jaxxes\SeleccionProcesBundle\Entity\ResumePrivateCandidate implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Persistence\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array();



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return array('__isInitialized__', '' . "\0" . 'Jaxxes\\SeleccionProcesBundle\\Entity\\ResumePrivateCandidate' . "\0" . 'id', '' . "\0" . 'Jaxxes\\SeleccionProcesBundle\\Entity\\ResumePrivateCandidate' . "\0" . 'answer', '' . "\0" . 'Jaxxes\\SeleccionProcesBundle\\Entity\\ResumePrivateCandidate' . "\0" . 'typeAnswer', '' . "\0" . 'Jaxxes\\SeleccionProcesBundle\\Entity\\ResumePrivateCandidate' . "\0" . 'codeTable', 'SPCResumePrivate', 'questionbyProcessSelection');
        }

        return array('__isInitialized__', '' . "\0" . 'Jaxxes\\SeleccionProcesBundle\\Entity\\ResumePrivateCandidate' . "\0" . 'id', '' . "\0" . 'Jaxxes\\SeleccionProcesBundle\\Entity\\ResumePrivateCandidate' . "\0" . 'answer', '' . "\0" . 'Jaxxes\\SeleccionProcesBundle\\Entity\\ResumePrivateCandidate' . "\0" . 'typeAnswer', '' . "\0" . 'Jaxxes\\SeleccionProcesBundle\\Entity\\ResumePrivateCandidate' . "\0" . 'codeTable', 'SPCResumePrivate', 'questionbyProcessSelection');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (ResumePrivateCandidate $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', array());
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', array());
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function __toString()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, '__toString', array());

        return parent::__toString();
    }

    /**
     * {@inheritDoc}
     */
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', array());

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function setAnswer($answer)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAnswer', array($answer));

        return parent::setAnswer($answer);
    }

    /**
     * {@inheritDoc}
     */
    public function getAnswer()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAnswer', array());

        return parent::getAnswer();
    }

    /**
     * {@inheritDoc}
     */
    public function settypeAnswer($typeAnswer)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'settypeAnswer', array($typeAnswer));

        return parent::settypeAnswer($typeAnswer);
    }

    /**
     * {@inheritDoc}
     */
    public function gettypeAnswer()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'gettypeAnswer', array());

        return parent::gettypeAnswer();
    }

    /**
     * {@inheritDoc}
     */
    public function setcodeTable($codeTable)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setcodeTable', array($codeTable));

        return parent::setcodeTable($codeTable);
    }

    /**
     * {@inheritDoc}
     */
    public function getcodeTable()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getcodeTable', array());

        return parent::getcodeTable();
    }

    /**
     * {@inheritDoc}
     */
    public function setQuestionbyProcessSelection(\Jaxxes\SeleccionProcesBundle\Entity\QuestionbyProcessSelection $questionbyProcessSelection)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setQuestionbyProcessSelection', array($questionbyProcessSelection));

        return parent::setQuestionbyProcessSelection($questionbyProcessSelection);
    }

    /**
     * {@inheritDoc}
     */
    public function getQuestionbyProcessSelection()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getQuestionbyProcessSelection', array());

        return parent::getQuestionbyProcessSelection();
    }

    /**
     * {@inheritDoc}
     */
    public function setSPCResumePrivate(\Jaxxes\SeleccionProcesBundle\Entity\SelectionProcessCandidate $SPCResumePrivate)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSPCResumePrivate', array($SPCResumePrivate));

        return parent::setSPCResumePrivate($SPCResumePrivate);
    }

    /**
     * {@inheritDoc}
     */
    public function getSPCResumePrivate()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSPCResumePrivate', array());

        return parent::getSPCResumePrivate();
    }

}
