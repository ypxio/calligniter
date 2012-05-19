<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * CodeIgniter
 *
 * An open source application development framework for PHP 5.1.6 or newer
 *
 * @package		CodeIgniter
 * @author		ExpressionEngine Dev Team
 * @copyright	Copyright (c) 2008 - 2011, EllisLab, Inc.
 * @license		http://codeigniter.com/user_guide/license.html
 * @link			http://codeigniter.com
 * @since		Version 1.0
 * @filesource
 */

// ------------------------------------------------------------------------

/**
 * Calligniter - a Codeigniter Helper to help generate mySQL stored procedure's queries 
 *
 * @package		CodeIgniter
 * @subpackage	Helpers
 * @category	Helpers
 * @author		Yuri Pertamax - yuripertamax@gmail.com
 * @link			./your/application/helper/folder/path/
 */

// ------------------------------------------------------------------------

/**
 * Call
 *
 * Generate you a stored procedure queries
 * only with input 2 parameters, the name of stored procedure and array of data
 *
 * @access	public
 * @param	string
 * @param	array
 * @return	string
 */

if ( ! function_exists('call')) {

	function call($procedure_name , $array_data)
	{
		$query  = "call ";
		$query .= $procedure_name."(";

		for($i=0 ; $i < count($array_data) ; $i++)
		{	
			if($i==(count($array_data) - 1))
			{
				$query .= "'".$array_data[$i]."'";
			}
			else
			{
				$query .= "'".$array_data[$i]."',";
			}
		}

		$query .= ")";
		echo $query;
	}

}