
function SaveData() {
	Validate_Form(()=>{
		Message_Confirm(()=>{
			var data = new FormData($("#form_rol")[0]);	
			var DatosRol ={
				"Ctr":"Rol",
				"Acc":"registrarRol",
				"formularioRol":ProcessData(data)
			}
				console.log(DatosRol);
			ReadyChangeJquery(DatosRol,"#table_data");
		})
	},"#form_rol")
}

function OneData(id){
	var OneIdRol ={
		'Ctr':'Rol',
		'Acc':'oneRol',
		'id':id
	}
	ReadyChangeJquery(OneIdRol,"#form_edit")
}	


function DeleteData(id){
	Message_Confirm(()=>{
		var RolDelete ={
			"Ctr":"Rol",
			"Acc":"deleteRol",
			"id":id,
		}
		console.log(RolDelete);
		ReadyChangeJquery(RolDelete,"#table_data")
	})
}

function UpdateData(id){
	Validate_Form(()=>{
		Message_Confirm(()=>{
		var data = new FormData($('#form_rol_edit')[0]);
		var DatosRolEdit ={
			'Ctr':'Rol',
			'Acc':'editRol',
			'id':id,
			'formularioRolEdit':ProcessData(data)
		}
		ReadyChangeJquery(DatosRolEdit,'#table_data')
	})
},'#form_rol_edit')
}

