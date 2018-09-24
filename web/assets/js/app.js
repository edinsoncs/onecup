'use strict';

let configuration = {

	pages: {
		loginPage: {
			count: 0
		}
	}

}


/**
* Dom - Panel Login
*/

var count__Login = 0;

let resetPassword = (t) => {

	var form_id = $("#reset");
	var form_login = $("#login");

	if(count__Login == 0) {
		$(t).text('¿Tenes Cuenta?');
		$(form_login).addClass('d-none');
		$(form_id).removeClass('d-none');
		count__Login = 1;
	} else {
		$(t).text('¿Olvidaste tu contraseña?');
		$(form_id).addClass('d-none');
		$(form_login).removeClass('d-none');
		count__Login = 0;
	}


}