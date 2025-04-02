<?php

// Función polimórfica para mostrar datos de usuarios
function mostrarInformacionUsuario(BaseUsuario $usuario)
{
  $usuario->mostrarDatos();
}

// Función para validar strings
function validarString(string $valor): string
{
  return filter_var($valor, FILTER_SANITIZE_SPECIAL_CHARS) ?? '';
}

// Función para validar enteros
function validarEntero($valor): int
{
  return filter_var($valor, FILTER_VALIDATE_INT) ?? 0;
}

// Función para validar correos electrónicos
function validarEmail(string $email): string
{
  return filter_var($email, FILTER_VALIDATE_EMAIL) ?? '';
}

// Función para validar decimales
function validarDecimal($valor): float
{
  return filter_var($valor, FILTER_VALIDATE_FLOAT) ?? 0.0;
}
