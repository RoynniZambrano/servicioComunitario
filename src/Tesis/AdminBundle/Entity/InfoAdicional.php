<?php

namespace Tesis\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * InfoAdicional
 *
 * @ORM\Table(name="info_adicional", indexes={@ORM\Index(name="fk_info_adicional_estudiante1_idx", columns={"estudiante_id_estudiante"})})
 * @ORM\Entity
 */
class InfoAdicional
{
    /**
     * @var string
     *
     * @ORM\Column(name="resumen", type="string", length=2000, nullable=true)
     */
    private $resumen;

    /**
     * @var string
     *
     * @ORM\Column(name="problema", type="string", length=2000, nullable=true)
     */
    private $problema;

    /**
     * @var string
     *
     * @ORM\Column(name="justificacion", type="string", length=2000, nullable=true)
     */
    private $justificacion;

    /**
     * @var string
     *
     * @ORM\Column(name="objetivo", type="string", length=2000, nullable=true)
     */
    private $objetivo;

    /**
     * @var string
     *
     * @ORM\Column(name="resultados", type="string", length=2000, nullable=true)
     */
    private $resultados;

    /**
     * @var string
     *
     * @ORM\Column(name="conclusion", type="string", length=2000, nullable=true)
     */
    private $conclusion;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_info_adicional", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
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
    private $estudianteEstudiante;



    /**
     * Set resumen
     *
     * @param string $resumen
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
     * @return string 
     */
    public function getResumen()
    {
        return $this->resumen;
    }

    /**
     * Set problema
     *
     * @param string $problema
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
     * @return string 
     */
    public function getProblema()
    {
        return $this->problema;
    }

    /**
     * Set justificacion
     *
     * @param string $justificacion
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
     * @return string 
     */
    public function getJustificacion()
    {
        return $this->justificacion;
    }

    /**
     * Set objetivo
     *
     * @param string $objetivo
     * @return InfoAdicional
     */
    public function setObjetivo($objetivo)
    {
        $this->objetivo = $objetivo;

        return $this;
    }

    /**
     * Get objetivo
     *
     * @return string 
     */
    public function getObjetivo()
    {
        return $this->objetivo;
    }

    /**
     * Set resultados
     *
     * @param string $resultados
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
     * @return string 
     */
    public function getResultados()
    {
        return $this->resultados;
    }

    /**
     * Set conclusion
     *
     * @param string $conclusion
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
     * @return string 
     */
    public function getConclusion()
    {
        return $this->conclusion;
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
     * Set estudianteEstudiante
     *
     * @param \Tesis\AdminBundle\Entity\Estudiante $estudianteEstudiante
     * @return InfoAdicional
     */
    public function setEstudianteEstudiante(\Tesis\AdminBundle\Entity\Estudiante $estudianteEstudiante = null)
    {
        $this->estudianteEstudiante = $estudianteEstudiante;

        return $this;
    }

    /**
     * Get estudianteEstudiante
     *
     * @return \Tesis\AdminBundle\Entity\Estudiante 
     */
    public function getEstudianteEstudiante()
    {
        return $this->estudianteEstudiante;
    }
}
