<?php

	/* FUNCIONES */

	/**
	 * Descripción: obtener ruta para incluir csrf
	 * Entrada/s: string nombre
	 * Salida: string con ruta
	 */
	function obtenerCsrf($metodo)
	{
		switch ($metodo) {
		    case "put":
		        return 'csrf.put';
		        break;
		    case "delete":
		        return 'csrf.delete';
		        break;      
		    default:
		        return 'csrf.post';
		}
	}
?>