
function SaveData() {
	Validate_Form(()=>{
		Message_Confirm(()=>{
			var data = new FormData($("#form_estado")[0]);	
			var DatosEstado ={
				"Ctr":"Estado",
				"Acc":"registrarEstado",
				"formularioEstado":ProcessData(data)
			}
				console.log(DatosEstado);
			ReadyChangeJquery(DatosEstado,"#table_data");
		})
	},"#form_estado")
}

function OneData(id){
	var OneIdEstado ={
		'Ctr':'Estado',
		'Acc':'OneEstado',
		'id':id
	}
	console.log(OneIdEstado);
	ReadyChangeJquery(OneIdEstado,"#form_edit")
}	


function DeleteData(id){
	Message_Confirm(()=>{
		var EstadoDelete ={
			"Ctr":"Estado",
			"Acc":"deleteEstado",
			"id":id,
		}
		ReadyChangeJquery(EstadoDelete,"#table_data")
	})
}

function UpdateData(id){
	Validate_Form(()=>{
		Message_Confirm(()=>{
		var data = new FormData($('#form_estado_edit')[0]);
		var DatosEstadoEdit ={
			'Ctr':'Estado',
			'Acc':'editEstado',
			'id':id,
			'formularioEstadoEdit':ProcessData(data)
		}
		ReadyChangeJquery(DatosEstadoEdit,'#table_data')
	})
},'#form_estado_edit')
}

