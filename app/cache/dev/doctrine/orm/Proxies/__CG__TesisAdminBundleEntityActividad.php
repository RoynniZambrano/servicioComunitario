<?php

namespace Proxies\__CG__\Tesis\AdminBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Actividad extends \Tesis\AdminBundle\Entity\Actividad implements \Doctrine\ORM\Proxy\Proxy
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
            return array('__isInitialized__', '' . "\0" . 'Tesis\\AdminBundle\\Entity\\Actividad' . "\0" . 'nombre', '' . "\0" . 'Tesis\\AdminBundle\\Entity\\Actividad' . "\0" . 'comentario', '' . "\0" . 'Tesis\\AdminBundle\\Entity\\Actividad' . "\0" . 'faseIdFase', '' . "\0" . 'Tesis\\AdminBundle\\Entity\\Actividad' . "\0" . 'idActividad', '' . "\0" . 'Tesis\\AdminBundle\\Entity\\Actividad' . "\0" . 'periodoPeriodo', '' . "\0" . 'Tesis\\AdminBundle\\Entity\\Actividad' . "\0" . 'faseFase', '' . "\0" . 'Tesis\\AdminBundle\\Entity\\Actividad' . "\0" . 'diarioDiario');
        }

        return array('__isInitialized__', '' . "\0" . 'Tesis\\AdminBundle\\Entity\\Actividad' . "\0" . 'nombre', '' . "\0" . 'Tesis\\AdminBundle\\Entity\\Actividad' . "\0" . 'comentario', '' . "\0" . 'Tesis\\AdminBundle\\Entity\\Actividad' . "\0" . 'faseIdFase', '' . "\0" . 'Tesis\\AdminBundle\\Entity\\Actividad' . "\0" . 'idActividad', '' . "\0" . 'Tesis\\AdminBundle\\Entity\\Actividad' . "\0" . 'periodoPeriodo', '' . "\0" . 'Tesis\\AdminBundle\\Entity\\Actividad' . "\0" . 'faseFase', '' . "\0" . 'Tesis\\AdminBundle\\Entity\\Actividad' . "\0" . 'diarioDiario');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Actividad $proxy) {
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
    public function setNombre($nombre)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNombre', array($nombre));

        return parent::setNombre($nombre);
    }

    /**
     * {@inheritDoc}
     */
    public function getNombre()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNombre', array());

        return parent::getNombre();
    }

    /**
     * {@inheritDoc}
     */
    public function setComentario($comentario)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setComentario', array($comentario));

        return parent::setComentario($comentario);
    }

    /**
     * {@inheritDoc}
     */
    public function getComentario()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getComentario', array());

        return parent::getComentario();
    }

    /**
     * {@inheritDoc}
     */
    public function setFaseIdFase($faseIdFase)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFaseIdFase', array($faseIdFase));

        return parent::setFaseIdFase($faseIdFase);
    }

    /**
     * {@inheritDoc}
     */
    public function getFaseIdFase()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFaseIdFase', array());

        return parent::getFaseIdFase();
    }

    /**
     * {@inheritDoc}
     */
    public function getIdActividad()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getIdActividad();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdActividad', array());

        return parent::getIdActividad();
    }

    /**
     * {@inheritDoc}
     */
    public function addPeriodoPeriodo(\Tesis\AdminBundle\Entity\Periodo $periodoPeriodo)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addPeriodoPeriodo', array($periodoPeriodo));

        return parent::addPeriodoPeriodo($periodoPeriodo);
    }

    /**
     * {@inheritDoc}
     */
    public function removePeriodoPeriodo(\Tesis\AdminBundle\Entity\Periodo $periodoPeriodo)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removePeriodoPeriodo', array($periodoPeriodo));

        return parent::removePeriodoPeriodo($periodoPeriodo);
    }

    /**
     * {@inheritDoc}
     */
    public function getPeriodoPeriodo()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPeriodoPeriodo', array());

        return parent::getPeriodoPeriodo();
    }

    /**
     * {@inheritDoc}
     */
    public function addFaseFase(\Tesis\AdminBundle\Entity\Fase $faseFase)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addFaseFase', array($faseFase));

        return parent::addFaseFase($faseFase);
    }

    /**
     * {@inheritDoc}
     */
    public function removeFaseFase(\Tesis\AdminBundle\Entity\Fase $faseFase)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeFaseFase', array($faseFase));

        return parent::removeFaseFase($faseFase);
    }

    /**
     * {@inheritDoc}
     */
    public function getFaseFase()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFaseFase', array());

        return parent::getFaseFase();
    }

    /**
     * {@inheritDoc}
     */
    public function addDiarioDiario(\Tesis\AdminBundle\Entity\Diario $diarioDiario)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addDiarioDiario', array($diarioDiario));

        return parent::addDiarioDiario($diarioDiario);
    }

    /**
     * {@inheritDoc}
     */
    public function removeDiarioDiario(\Tesis\AdminBundle\Entity\Diario $diarioDiario)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeDiarioDiario', array($diarioDiario));

        return parent::removeDiarioDiario($diarioDiario);
    }

    /**
     * {@inheritDoc}
     */
    public function getDiarioDiario()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDiarioDiario', array());

        return parent::getDiarioDiario();
    }

}
