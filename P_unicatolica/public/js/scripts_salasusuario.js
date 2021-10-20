function SaveData() {
	Validate_Form(()=>{
		Message_Confirm(()=>{
			var data = new FormData($("#form_salasUsuario")[0]);	
			var DatosSalasUsuario ={
				"Ctr":"Salasusuario",
				"Acc":"registrarSalasUsuario",
				"formularioSalasUsuario":ProcessData(data)
			}
				console.log(DatosSalasUsuario);
			ReadyChangeJquery(DatosSalasUsuario,"#table_data");
		})
	},"#form_salasUsuario")
}

function OneData(id){
	var OneIdSalasUsuario ={
		'Ctr':'Salasusuario',
		'Acc':'OneSalasUsuario',
		'id':id
	}
	console.log(OneIdSalasUsuario);
	ReadyChangeJquery(OneIdSalasUsuario,"#form_edit")
}	


function DeleteData(id){
	Message_Confirm(()=>{
		var SalasUsuarioDelete ={
			"Ctr":"Salasusuario",
			"Acc":"deleteSalasUsuario",
			"id":id,
		}
		ReadyChangeJquery(SalasUsuarioDelete,"#table_data")
	})
}

function UpdateData(id){
	Validate_Form(()=>{
		Message_Confirm(()=>{
		var data = new FormData($('#form_salasUsuario_edit')[0]);
		var DatosSalasUsuarioEdit ={
			'Ctr':'Salasusuario',
			'Acc':'editSalasUsuario',
			'id':id,
			'formularioSalasUsuarioEdit':ProcessData(data)
		}
		ReadyChangeJquery(DatosSalasUsuarioEdit,'#table_data')
	})
},'#form_salasUsuario_edit')
}