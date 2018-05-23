<?php
public class EnlaceModel
{
	private $id;
	private $idBlog;
	private $url;
	private $texto;


	public function __construct($id, $idBlog, $url, $texto)
	{
		$this->id = $id;
		$this->idBlog = $idBlog;
		$this->url = $url;
		$this->texto = $texto;
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
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * @param mixed $url
     *
     * @return self
     */
    public function setUrl($url)
    {
        $this->url = $url;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getTexto()
    {
        return $this->texto;
    }

    /**
     * @param mixed $texto
     *
     * @return self
     */
    public function setTexto($texto)
    {
        $this->texto = $texto;

        return $this;
    }
}
?>