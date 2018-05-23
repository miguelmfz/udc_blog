<?php
class MultimediaModel
{
	private $id;
	private $idBlog;
	private $descripccion;
	private $nombre;
	private $tipo;
	private $estado;


	public function __construct($id, $idBlog, $descripccion, $nombre, $tipo, $estado)
	{
		$this->id = $id;
		$this->idBlog = $idBlog;
		$this->descripccion = $descripccion;
		$this->nombre = $nombre;
		$this->tipo = $tipo;
		$this->estado = $estado;
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
    public function getIdBlog()
    {
        return $this->idBlog;
    }

    /**
     * @param mixed $idBlog
     *
     * @return self
     */
    public function setIdBlog($idBlog)
    {
        $this->idBlog = $idBlog;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getDescripccion()
    {
        return $this->descripccion;
    }

    /**
     * @param mixed $descripccion
     *
     * @return self
     */
    public function setDescripccion($descripccion)
    {
        $this->descripccion = $descripccion;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * @param mixed $nombre
     *
     * @return self
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getTipo()
    {
        return $this->tipo;
    }

    /**
     * @param mixed $tipo
     *
     * @return self
     */
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;

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
}
?>