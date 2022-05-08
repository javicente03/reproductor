<?php
/**
 * ajax -> core -> signup
 * 
 * @package Sngine
 * @author Zamblek
 */

// fetch bootstrap
require('../../../bootstrap.php');

// check AJAX Request
is_ajax();

try {

	global $db, $date;

	switch($_GET['do']){
		case 'create':
			if(!isset($_POST['email']) || $_POST['email'] =="" || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL))
				return_json(array('error' => true, 'message' => 'Debes ingresar un correo válido'));

			if(!isset($_POST['subject']) || $_POST['subject'] =="")
				return_json(array('error' => true, 'message' => 'Debes ingresar un asunto'));

			if(!isset($_POST['message']) || $_POST['message'] =="")
				return_json(array('error' => true, 'message' => 'Debes ingresar un mensaje'));

			if(strlen($_POST['message']) > 500)
				return_json(array('error' => true, 'message' => 'El mensaje no debe exceder los 500 caracteres'));

			$db->query(sprintf("INSERT INTO messages_contact (message_email, message_subject, message_text, message_date) VALUES (%s, %s, %s, %s)", 
								secure($_POST['email']), 
								secure($_POST['subject']), 
								secure($_POST['message']),
								secure($date))) or _error("SQL_ERROR_THROWEN");

			return_json(array('callback' => "success.html('Mensaje enviado exitósamente');
												success.css('display', 'block');
												setTimeout(function(){
	                        					success.css('display', 'none')
                    						}, 5000);
                    						document.querySelector('.js_ajax-forms').reset()"));

			break;

		case 'read':
			// check user logged in
			if (!$user->_logged_in) {
				return_json(array('callback' => 'location.href= "'.SYS_URL.'/signin";'));
			}

			if(!isset($_POST['id']) || !is_numeric($_POST['id']))
				return_json(array('error' => true, 'message' => 'Ha ocurrido un error'));

			$db->query(sprintf("UPDATE messages_contact SET message_status = true WHERE message_id = %s", secure($_POST['id']))) or _error(404);

			return_json(array('callback' => "location.href = '".SYS_URL."/messages/pending'"));
			break;

		case 'delete':
			// check user logged in
			if (!$user->_logged_in) {
				return_json(array('callback' => 'location.href= "'.SYS_URL.'/signin";'));
			}

			if(!isset($_POST['id']) || !is_numeric($_POST['id']))
				return_json(array('error' => true, 'message' => 'Ha ocurrido un error'));

			$db->query(sprintf("DELETE FROM messages_contact WHERE message_id = %s", secure($_POST['id']))) or _error(404);

			return_json(array('callback' => "location.href = '".SYS_URL."/messages/read'"));
			break;
	}

} catch (Exception $e) {
	return_json(array('error' => true, 'message' => $e->getMessage()));
}