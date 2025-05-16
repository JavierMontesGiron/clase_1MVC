<?php

namespace Model;

class Usuarios extends ActiveRecord{
    public $tabla = 'usuarios';
    public $columnasDB = [
        'usuario_nombres',
        'usuario_apellidos',
        'usuario_nit',
        'usuario_telefono',
        'usuario_correo',
        'usuario_estado',
        'usuario_situacion'
    ];

    public $idTabla = 'usuario_id';
    public $usuario_id;
    public $usuario_nombres;
    public $usuario_apellidos;
    public $usuario_nit;
    public $usuario_telefono;
    public $usuario_correo;
    public $usuario_estado;
    public $usuario_situacion;

    public function __construct($arg = [])
    {
        $this->usuario_id = $arg['usuario_id'] ?? null;
        $this->usuario_nombres = $arg['usuario_nombres'] ?? '';
        $this->usuario_apellidos = $arg['usuario_apellidos'] ?? '';
        $this->usuario_nit = $arg['usuario_nit'] ?? 0;
        $this->usuario_telefono = $arg['usuario_telefono'] ?? 0;
        $this->usuario_correo = $arg['usuario_correo'] ?? 0;
        $this->usuario_estado = $arg['usuario_estado'] ?? 0;
        $this->usuario_situacion = $arg['usuario_situacion'] ?? 1;
    }
}