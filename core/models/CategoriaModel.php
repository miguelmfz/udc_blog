<?php
public class CategoriaModel
{
	private $id;
	private $nombre;
	private $descripccion;


	public function __construct($id, $nombre, $descripccion)
	{
		$this->id = $id;
		$this->nombre = $nombre;
		$this->descripccion = $descripccion;
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
}
?>