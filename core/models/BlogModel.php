<?php

class BlogModel
{
	private $id;
	private $codigo;
	private $titulo;
	private $intro;
	private $fechaPublicacion;
	private $publicar;
	private $estado;
	private $idUsuario;
	private $idCategoria;


	public function __construct($id, $codigo, $titulo, $intro, $fechaPublicacion, $publicar, $estado, $idUsuario, $idCategoria)
	{
		$this->id = $id;
		$this->codigo = $codigo;
		$this->titulo = $titulo;
		$this->intro = $intro;
		$this->fechaPublicacion = $fechaPublicacion;
		$this->publicar = $publicar;
		$this->estado = $estado;
		$this->idUsuario = $idUsuario;
		$this->idCategoria = $idCategoria;
	}

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     *
     * @return self
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getCodigo()
    {
        return $this->codigo;
    }

    /**
     * @param mixed $codigo
     *
     * @return self
     */
    public function setCodigo($codigo)
    {
        $this->codigo = $codigo;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getTitulo()
    {
        return $this->titulo;
    }

    /**
     * @param mixed $titulo
     *
     * @return self
     */
    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getIntro()
    {
        return $this->intro;
    }

    /**
     * @param mixed $intro
     *
     * @return self
     */
    public function setIntro($intro)
    {
        $this->intro = $intro;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getFechaPublicacion()
    {
        return $this->fechaPublicacion;
    }

    /**
     * @param mixed $fechaPublicacion
     *
     * @return self
     */
    public function setFechaPublicacion($fechaPublicacion)
    {
        $this->fechaPublicacion = $fechaPublicacion;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getPublicar()
    {
        return $this->publicar;
    }

    /**
     * @param mixed $publicar
     *
     * @return self
     */
    public function setPublicar($publicar)
    {
        $this->publicar = $publicar;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getEstado()
    {
        return $this->estado;
    }

    /**
     * @param mixed $estado
     *
     * @return self
     */
    public function setEstado($estado)
    {
        $this->estado = $estado;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getIdUsuario()
    {
        return $this->idUsuario;
    }

    /**
     * @param mixed $idUsuario
     *
     * @return self
     */
    public function setIdUsuario($idUsuario)
    {
        $this->idUsuario = $idUsuario;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getIdCategoria()
    {
        return $this->idCategoria;
    }

    /**
     * @param mixed $idCategoria
     *
     * @return self
     */
    public function setIdCategoria($idCategoria)
    {
        $this->idCategoria = $idCategoria;

        return $this;
    }
}
?>