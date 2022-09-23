const  formulario = document.getElementById('formulario'); 
const  inputs  =  document.querySelectorAll('#formulario input');

const expresiones = {
	usuario: /(^[a-zA-Z0-9\.\_\-]{4,30}$|^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$)/,
	contraseña: /^.{4,16}$/
};

const campos = {
	usuario: false,
	contraseña: false
}

const ValidarForm = (e) => {
	switch (e.target.name){
		case 'usuario': 
			ValidarCampo(expresiones.usuario,e.target,'usuario');
		break;
		case 'contraseña': 
		ValidarCampo(expresiones.contraseña,e.target,'contraseña');
		break;
	};			
};

inputs.forEach ((input)=>{
	input.addEventListener('keyup', ValidarForm)
	input.addEventListener('blur', ValidarForm)
});

const ValidarCampo= (expresion,input,campo)=>{
	if (expresion.test(input.value)){
		document.getElementById(`id__grupo-${campo}`).classList.add('grupo-correcto');
		document.getElementById(`id__grupo-${campo}`).classList.remove('grupo-incorrecto');
		document.querySelector(`#id__grupo-${campo} i`).classList.remove('fa-circle-xmark');
		document.querySelector(`#id__grupo-${campo} i`).classList.add('fa-circle-check');
		document.querySelector(`#id__grupo-${campo} .mensaje-error`).classList.remove('mensaje-error-activo');
		campos[campo]=true;
	} else {
		document.getElementById(`id__grupo-${campo}`).classList.add('grupo-incorrecto');
		document.getElementById(`id__grupo-${campo}`).classList.remove('grupo-correcto');
		document.querySelector(`#id__grupo-${campo} i`).classList.remove('fa-circle-check');
		document.querySelector(`#id__grupo-${campo} i`).classList.add('fa-circle-xmark');
		document.querySelector(`#id__grupo-${campo} .mensaje-error`).classList.add('mensaje-error-activo');
		campos[campo]=false;
	};
}

formulario.addEventListener ('submit',(e)=>{
	e.preventDefault();
	if (campos.usuario && campos.contraseña) {
		formulario.reset();
		document.querySelectorAll('.grupo-correcto').forEach((icono)=>{
			icono.classList.remove('grupo-correcto')
		})
	} else {
		document.getElementById('error-enviar').classList.add('error-enviar-activo');
	}
})