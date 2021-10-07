
function SaveData() {
	Validate_Form(()=>{
		Message_Confirm(()=>{
			var data = new FormData($("#form_Usuario")[0]);	
			var DatosSalas ={
				"Ctr":"Usuario",
				"Acc":"registrarUsuario",
				"formularioUsuario":ProcessData(data)
			}
				console.log(DatosSalas);
			ReadyChangeJquery(DatosSalas,"#table_data");
		})
	},"#form_salas")
}

function OneData(id){
	var OneIdSalas ={
		'Ctr':'Usuario',
		'Acc':'OneUsuario',
		'id':id
	}
	console.log(OneIdSalas);
	ReadyChangeJquery(OneIdSalas,"#form_edit")
}	


function DeleteData(id){
	Message_Confirm(()=>{
		var SalasDelete ={
			"Ctr":"Usuario",
			"Acc":"deleteUsuario",
			"id":id,
		}
		ReadyChangeJquery(SalasDelete,"#table_data")
	})
}

function UpdateData(id){
	Validate_Form(()=>{
		Message_Confirm(()=>{
		var data = new FormData($('#form_usuario_edit')[0]);
		var DatosSalasEdit ={
			'Ctr':'Usuario',
			'Acc':'editUsuario',
			'id':id,
			'formularioUsuarioEdit':ProcessData(data)
		}
		ReadyChangeJquery(DatosSalasEdit,'#table_data')
	})
},'#form_usuario_edit')
}

