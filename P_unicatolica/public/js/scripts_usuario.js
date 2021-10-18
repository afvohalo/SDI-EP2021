
function SaveData() {
	Validate_Form(()=>{
		Message_Confirm(()=>{
			var data = new FormData($("#form_Usuario")[0]);	
			var DatosUsuario ={
				"Ctr":"Usuario",
				"Acc":"registrarUsuario",
				"formularioUsuario":ProcessData(data)
			}
				console.log(DatosUsuario);
			ReadyChangeJquery(DatosUsuario,"#table_data");
		})
	},"#form_salas")
}

function OneData(id){
	var OneIdUsuario ={
		'Ctr':'Usuario',
		'Acc':'OneUsuario',
		'id':id
	}
	console.log(OneIdUsuario);
	ReadyChangeJquery(OneIdUsuario,"#form_edit")
}	


function DeleteData(id){
	Message_Confirm(()=>{
		var UsuarioDelete ={
			"Ctr":"Usuario",
			"Acc":"deleteUsuario",
			"id":id,
		}
		ReadyChangeJquery(UsuarioDelete,"#table_data")
	})
}

function UpdateData(id){
	Validate_Form(()=>{
		Message_Confirm(()=>{
		var data = new FormData($('#form_usuario_edit')[0]);
		var DatosUsuarioEdit ={
			'Ctr':'Usuario',
			'Acc':'editUsuario',
			'id':id,
			'formularioUsuarioEdit':ProcessData(data)
		}
		ReadyChangeJquery(DatosUsuarioEdit,'#table_data')
	})
},'#form_usuario_edit')
}

