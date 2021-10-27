
function SaveData() {
	console.log($("#form_equipos"));
	let prueba = new FormData($("#form_equipos")[0]);
	console.log(ProcessData(prueba));
	Validate_Form(()=>{
		Message_Confirm(()=>{
			var data = new FormData($("#form_equipos")[0]);	
			var Datosequipos ={
				"Ctr":"equipos",
				"Acc":"registrarequipos",
				"formularioequipos":ProcessData(data)
			}
				console.log(Datosequipos);
			ReadyChangeJquery(Datosequipos,"#table_data");
		})
	},"#form_equipos")
}

function OneData(id){
	var OneIdequipos ={
		'Ctr':'equipos',
		'Acc':'Oneequipos',
		'id':id
	}
	console.log(OneIdequipos);
	ReadyChangeJquery(OneIdequipos,"#form_edit")
}	


function DeleteData(id){
	Message_Confirm(()=>{
		var equiposDelete ={
			"Ctr":"equipos",
			"Acc":"deleteequipos",
			"id":id,
		}
		ReadyChangeJquery(equiposDelete,"#table_data")
	})
}

function UpdateData(id){
	Validate_Form(()=>{
		Message_Confirm(()=>{
		var data = new FormData($('#form_equipos_edit')[0]);
		var DatosequiposEdit ={
			'Ctr':'equipos',
			'Acc':'editequipos',
			'id':id,
			'formularioequiposEdit':ProcessData(data)
		}
		ReadyChangeJquery(DatosequiposEdit,'#table_data')
	})
},'#form_equipos_edit')
}

