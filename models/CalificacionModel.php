<?php
<<<<<<< HEAD:models/CalificacionModel.php
 class CalificacionModel
=======
class CalificacionModel
>>>>>>> 513d9a719bb50b6ca39b2c68ddc10625cc4f3f1e:core/models/CalificacionModel.php
{
	private $id;
	private $tipo;
	private $idBlog;


	public function __construct($id, $tipo, $idBlog)
	{
		$this->id = $id;
		$this->tipo = $tipo;
		$this->idBlog = $idBlog;
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
}
?>