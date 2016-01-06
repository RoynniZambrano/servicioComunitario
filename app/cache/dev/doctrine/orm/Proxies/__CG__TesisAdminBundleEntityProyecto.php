<?php

namespace Proxies\__CG__\Tesis\AdminBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Proyecto extends \Tesis\AdminBundle\Entity\Proyecto implements \Doctrine\ORM\Proxy\Proxy
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
            return array('__isInitialized__', '' . "\0" . 'Tesis\\AdminBundle\\Entity\\Proyecto' . "\0" . 'nombre', '' . "\0" . 'Tesis\\AdminBundle\\Entity\\Proyecto' . "\0" . 'fechaInicio', '' . "\0" . 'Tesis\\AdminBundle\\Entity\\Proyecto' . "\0" . 'fechaFin', '' . "\0" . 'Tesis\\AdminBundle\\Entity\\Proyecto' . "\0" . 'locacion', '' . "\0" . 'Tesis\\AdminBundle\\Entity\\Proyecto' . "\0" . 'instituto', '' . "\0" . 'Tesis\\AdminBundle\\Entity\\Proyecto' . "\0" . 'institutoPropone', '' . "\0" . 'Tesis\\AdminBundle\\Entity\\Proyecto' . "\0" . 'justificacion', '' . "\0" . 'Tesis\\AdminBundle\\Entity\\Proyecto' . "\0" . 'periodo', '' . "\0" . 'Tesis\\AdminBundle\\Entity\\Proyecto' . "\0" . 'departamento', '' . "\0" . 'Tesis\\AdminBundle\\Entity\\Proyecto' . "\0" . 'fechaDesco', '' . "\0" . 'Tesis\\AdminBundle\\Entity\\Proyecto' . "\0" . 'descripcion', '' . "\0" . 'Tesis\\AdminBundle\\Entity\\Proyecto' . "\0" . 'estatus', '' . "\0" . 'Tesis\\AdminBundle\\Entity\\Proyecto' . "\0" . 'idProyecto', '' . "\0" . 'Tesis\\AdminBundle\\Entity\\Proyecto' . "\0" . 'faseFase');
        }

        return array('__isInitialized__', '' . "\0" . 'Tesis\\AdminBundle\\Entity\\Proyecto' . "\0" . 'nombre', '' . "\0" . 'Tesis\\AdminBundle\\Entity\\Proyecto' . "\0" . 'fechaInicio', '' . "\0" . 'Tesis\\AdminBundle\\Entity\\Proyecto' . "\0" . 'fechaFin', '' . "\0" . 'Tesis\\AdminBundle\\Entity\\Proyecto' . "\0" . 'locacion', '' . "\0" . 'Tesis\\AdminBundle\\Entity\\Proyecto' . "\0" . 'instituto', '' . "\0" . 'Tesis\\AdminBundle\\Entity\\Proyecto' . "\0" . 'institutoPropone', '' . "\0" . 'Tesis\\AdminBundle\\Entity\\Proyecto' . "\0" . 'justificacion', '' . "\0" . 'Tesis\\AdminBundle\\Entity\\Proyecto' . "\0" . 'periodo', '' . "\0" . 'Tesis\\AdminBundle\\Entity\\Proyecto' . "\0" . 'departamento', '' . "\0" . 'Tesis\\AdminBundle\\Entity\\Proyecto' . "\0" . 'fechaDesco', '' . "\0" . 'Tesis\\AdminBundle\\Entity\\Proyecto' . "\0" . 'descripcion', '' . "\0" . 'Tesis\\AdminBundle\\Entity\\Proyecto' . "\0" . 'estatus', '' . "\0" . 'Tesis\\AdminBundle\\Entity\\Proyecto' . "\0" . 'idProyecto', '' . "\0" . 'Tesis\\AdminBundle\\Entity\\Proyecto' . "\0" . 'faseFase');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Proyecto $proxy) {
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
    public function setFechaInicio($fechaInicio)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFechaInicio', array($fechaInicio));

        return parent::setFechaInicio($fechaInicio);
    }

    /**
     * {@inheritDoc}
     */
    public function getFechaInicio()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFechaInicio', array());

        return parent::getFechaInicio();
    }

    /**
     * {@inheritDoc}
     */
    public function setFechaFin($fechaFin)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFechaFin', array($fechaFin));

        return parent::setFechaFin($fechaFin);
    }

    /**
     * {@inheritDoc}
     */
    public function getFechaFin()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFechaFin', array());

        return parent::getFechaFin();
    }

    /**
     * {@inheritDoc}
     */
    public function setLocacion($locacion)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLocacion', array($locacion));

        return parent::setLocacion($locacion);
    }

    /**
     * {@inheritDoc}
     */
    public function getLocacion()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLocacion', array());

        return parent::getLocacion();
    }

    /**
     * {@inheritDoc}
     */
    public function setInstituto($instituto)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setInstituto', array($instituto));

        return parent::setInstituto($instituto);
    }

    /**
     * {@inheritDoc}
     */
    public function getInstituto()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getInstituto', array());

        return parent::getInstituto();
    }

    /**
     * {@inheritDoc}
     */
    public function setInstitutoPropone($institutoPropone)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setInstitutoPropone', array($institutoPropone));

        return parent::setInstitutoPropone($institutoPropone);
    }

    /**
     * {@inheritDoc}
     */
    public function getInstitutoPropone()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getInstitutoPropone', array());

        return parent::getInstitutoPropone();
    }

    /**
     * {@inheritDoc}
     */
    public function setJustificacion($justificacion)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setJustificacion', array($justificacion));

        return parent::setJustificacion($justificacion);
    }

    /**
     * {@inheritDoc}
     */
    public function getJustificacion()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getJustificacion', array());

        return parent::getJustificacion();
    }

    /**
     * {@inheritDoc}
     */
    public function setPeriodo($periodo)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPeriodo', array($periodo));

        return parent::setPeriodo($periodo);
    }

    /**
     * {@inheritDoc}
     */
    public function getPeriodo()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPeriodo', array());

        return parent::getPeriodo();
    }

    /**
     * {@inheritDoc}
     */
    public function setDepartamento($departamento)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDepartamento', array($departamento));

        return parent::setDepartamento($departamento);
    }

    /**
     * {@inheritDoc}
     */
    public function getDepartamento()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDepartamento', array());

        return parent::getDepartamento();
    }

    /**
     * {@inheritDoc}
     */
    public function setFechaDesco($fechaDesco)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFechaDesco', array($fechaDesco));

        return parent::setFechaDesco($fechaDesco);
    }

    /**
     * {@inheritDoc}
     */
    public function getFechaDesco()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFechaDesco', array());

        return parent::getFechaDesco();
    }

    /**
     * {@inheritDoc}
     */
    public function setDescripcion($descripcion)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDescripcion', array($descripcion));

        return parent::setDescripcion($descripcion);
    }

    /**
     * {@inheritDoc}
     */
    public function getDescripcion()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDescripcion', array());

        return parent::getDescripcion();
    }

    /**
     * {@inheritDoc}
     */
    public function setEstatus($estatus)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEstatus', array($estatus));

        return parent::setEstatus($estatus);
    }

    /**
     * {@inheritDoc}
     */
    public function getEstatus()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEstatus', array());

        return parent::getEstatus();
    }

    /**
     * {@inheritDoc}
     */
    public function getIdProyecto()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getIdProyecto();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdProyecto', array());

        return parent::getIdProyecto();
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

}
