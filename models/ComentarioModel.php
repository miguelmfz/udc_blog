<?php
class ComentarioModel
{
	private $id;
	private $comentario;
	private $idBlog;


	public function __construct($id, $comentario, $idBlog)
	{
		$this->id = $id;
		$this->comentario = $comentario;
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
    public function getComentario()
    {
        return $this->comentario;
    }

    /**
     * @param mixed $comentario
     *
     * @return self
     */
    public function setComentario($comentario)
    {
        $this->comentario = $comentario;

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