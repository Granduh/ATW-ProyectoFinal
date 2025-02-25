<?php

/**
 * Clase Autor: Representa la entidad "Autor".
 * Contiene propiedades privadas y sus respectivos getters y setters.
 */
class Autor
{
    // Propiedades privadas
    private $id;
    private $nombre;
    private $nacionalidad;

    // Constructor opcional para inicializar propiedades
    public function __construct($nombre = null, $nacionalidad = null)
    {
        $this->nombre = $nombre;
        $this->nacionalidad = $nacionalidad;
    }

    // Getters y Setters

    public function getId()
    {
        return $this->id;
    }
    public function setId($id)
    {
        $this->id = $id;
    }
    public function getNombre()
    {
        return $this->nombre;
    }
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }
    public function getNacionalidad()
    {
        return $this->nacionalidad;
    }
    public function setNacionalidad($nacionalidad)
    {
        $this->nacionalidad = $nacionalidad;
    }
}
