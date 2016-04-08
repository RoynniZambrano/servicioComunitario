<?php

namespace Tesis\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * InfoAdicional
 *
 * @ORM\Table(name="info_adicional", indexes={@ORM\Index(name="fk_info_adicional_estudiante1_idx", columns={"estudiante_id_estudiante"})})
 * @ORM\Entity
 * @UniqueEntity(fields="idEstudiante",  errorPath="resumen", message="Información Adicional ya esta registrado.")  
 */
class InfoAdicional
{
    /**
     * @var text
     *
     * @ORM\Column(name="resumen", type="text", length=8192, nullable=false)
     * @Assert\NotBlank(message="Por favor, introduzca resumen.")
     * @Assert\Length(
     *      max = 8192,
     *      maxMessage = "el resumen debe tener máximo {{ limit }} caracteres.")      
     */
    private $resumen;


    /**
     * @var text
     *
     * @ORM\Column(name="problema", type="text", length=8192, nullable=false)
     * @Assert\NotBlank(message="Por favor, introduzca problema.")
     * @Assert\Length(
     *      max = 8192,
     *      maxMessage = "el problema debe tener máximo {{ limit }} caracteres.")      
     */
    private $problema;

  
    /**
     * @var text
     *
     * @ORM\Column(name="justificacion", type="text", length=8192, nullable=false)
     * @Assert\NotBlank(message="Por favor, introduzca la justificación.")
     * @Assert\Length(
     *      max = 8192,
     *      maxMessage = "la justificación debe tener máximo {{ limit }} caracteres.")       
     */
    private $justificacion;

    /**
     * @var text
     *
     * @ORM\Column(name="objetivo_g", type="text", length=8192, nullable=false)
     * @Assert\NotBlank(message="Por favor, introduzca objetivo general.")
     * @Assert\Length(
     *      max = 8192,
     *      maxMessage = "el objetivo general debe tener máximo {{ limit }} caracteres.")       
     */
    private $objetivoG;


    /**
     * @var text
     *
     * @ORM\Column(name="resultados", type="text", length=8192, nullable=false)
     * @Assert\NotBlank(message="Por favor, introduzca resultados.")
     * @Assert\Length(
     *      max = 8192,
     *      maxMessage = "resultados debe tener máximo {{ limit }} caracteres.")       
     */
    private $resultados;


    /**
     * @var text
     *
     * @ORM\Column(name="conclusion", type="text", length=8192, nullable=false)
     * @Assert\NotBlank(message="Por favor, introduzca conclusión.")
     * @Assert\Length(
     *      max = 8192,
     *      maxMessage = "conclusión debe tener máximo {{ limit }} caracteres.")       
     */
    private $conclusion;


     /**
     * @var text
     *
     * @ORM\Column(name="objetivo_e", type="text", length=8192, nullable=false)
     * @Assert\NotBlank(message="Por favor, introduzca objetivos especificos.")
     * @Assert\Length(
     *      max = 8192,
     *      maxMessage = "objetivos especificos debe tener máximo {{ limit }} caracteres.")       
     */
    private $objetivoE;

    /**
     * @var string
     *
     * @ORM\Column(name="calificacion", type="string", length=100, nullable=true)
     */
    private $calificacion;


     /**
     * @var string
     *
     * @ORM\Column(name="observacion", type="string", length=3000, nullable=false)
     * @Assert\Length(
     *      max = 3000,
     *      maxMessage = "observación debe tener máximo {{ limit }} caracteres.")       
     */
    private $observacion;


    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha", type="date", nullable=false)
     * @Assert\NotBlank(message="Por favor, introduzca fecha.")
     * @Assert\Date(message="Por favor, introduzca una fecha valida.")
     */
    private $fecha;    

    /**
     * @var integer
     *
     * @ORM\Column(name="id_info_adicional", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $idInfoAdicional;

    /**
     * @var \Tesis\AdminBundle\Entity\Estudiante
     *
     * @ORM\ManyToOne(targetEntity="Tesis\AdminBundle\Entity\Estudiante")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="estudiante_id_estudiante", referencedColumnName="id_estudiante")
     * })
     */
    private $idEstudiante;



    /**
     * Set resumen
     *
     * @param text $resumen
     * @return InfoAdicional
     */
    public function setResumen($resumen)
    {
        $this->resumen = $resumen;

        return $this;
    }

    /**
     * Get resumen
     *
     * @return text 
     */
    public function getResumen()
    {
        return $this->resumen;
    }

    /**
     * Set problema
     *
     * @param text $problema
     * @return InfoAdicional
     */
    public function setProblema($problema)
    {
        $this->problema = $problema;

        return $this;
    }

    /**
     * Get problema
     *
     * @return text 
     */
    public function getProblema()
    {
        return $this->problema;
    }

    /**
     * Set justificacion
     *
     * @param text $justificacion
     * @return InfoAdicional
     */
    public function setJustificacion($justificacion)
    {
        $this->justificacion = $justificacion;

        return $this;
    }

    /**
     * Get justificacion
     *
     * @return text 
     */
    public function getJustificacion()
    {
        return $this->justificacion;
    }

    /**
     * Set objetivoG
     *
     * @param text $objetivoG
     * @return InfoAdicional
     */
    public function setObjetivoG($objetivoG)
    {
        $this->objetivoG = $objetivoG;

        return $this;
    }

    /**
     * Get objetivoG
     *
     * @return text 
     */
    public function getObjetivoG()
    {
        return $this->objetivoG;
    }

    /**
     * Set resultados
     *
     * @param text $resultados
     * @return InfoAdicional
     */
    public function setResultados($resultados)
    {
        $this->resultados = $resultados;

        return $this;
    }

    /**
     * Get resultados
     *
     * @return text 
     */
    public function getResultados()
    {
        return $this->resultados;
    }

    /**
     * Set conclusion
     *
     * @param text $conclusion
     * @return InfoAdicional
     */
    public function setConclusion($conclusion)
    {
        $this->conclusion = $conclusion;

        return $this;
    }

    /**
     * Get conclusion
     *
     * @return text 
     */
    public function getConclusion()
    {
        return $this->conclusion;
    }

    /**
     * Set objetivoE
     *
     * @param text $objetivoE
     * @return InfoAdicional
     */
    public function setObjetivoE($objetivoE)
    {
        $this->objetivoE = $objetivoE;

        return $this;
    }

    /**
     * Get objetivoE
     *
     * @return text 
     */
    public function getObjetivoE()
    {
        return $this->objetivoE;
    }

    /**
     * Set calificacion
     *
     * @param string $calificacion
     * @return InfoAdicional
     */
    public function setCalificacion($calificacion)
    {
        $this->calificacion = $calificacion;

        return $this;
    }

    /**
     * Get calificacion
     *
     * @return string 
     */
    public function getCalificacion()
    {
        return $this->calificacion;
    }

    /**
     * Set observacion
     *
     * @param string $observacion
     * @return InfoAdicional
     */
    public function setObservacion($observacion)
    {
        $this->observacion = $observacion;

        return $this;
    }

    /**
     * Get observacion
     *
     * @return string 
     */
    public function getObservacion()
    {
        return $this->observacion;
    }

    /**
     * Set fecha
     *
     * @param \DateTime  $fecha
     * @return InfoAdicional
     */
    public function setFecha($fecha)
    {
        $this->fecha = $fecha;

        return $this;
    }

    /**
     * Get fecha
     *
     * @return \DateTime  
     */
    public function getFecha()
    {
        return $this->fecha;
    }

    /**
     * Get idInfoAdicional
     *
     * @return integer 
     */
    public function getIdInfoAdicional()
    {
        return $this->idInfoAdicional;
    }


    /**
     * Set idEstudiante
     *
     * @param \Tesis\AdminBundle\Entity\Estudiante $idEstudiante
     * @return InfoAdicional
     */
    public function setIdEstudiante(\Tesis\AdminBundle\Entity\Estudiante $idEstudiante = null)
    {
        $this->idEstudiante = $idEstudiante;

        return $this;
    }

    /**
     * Get idEstudiante
     *
     * @return \Tesis\AdminBundle\Entity\Estudiante 
     */
    public function getIdEstudiante()
    {
        return $this->idEstudiante;
    }

}
