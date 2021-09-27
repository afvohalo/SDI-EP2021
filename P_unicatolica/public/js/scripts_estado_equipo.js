
function SaveData() {
	Validate_Form(()=>{
		Message_Confirm(()=>{
			var data = new FormData($("#form_estadoEquipo")[0]);	
			var DatosEstadoEquipo ={
				"Ctr":"Estado_equipo",
				"Acc":"registrarEstadoEquipo",
				"formularioEstadoEquipo":ProcessData(data)
			}
				console.log(DatosEstadoEquipo);
			ReadyChangeJquery(DatosEstadoEquipo,"#table_data_estadoEquipo");
		})
	},"#form_estadoEquipo")
}

function OneData(id){
	var OneIdEstadoEquipo ={
		'Ctr':'Estado_equipo',
		'Acc':'oneEstadoEquipo',
		'id':id
	}
	console.log(OneIdEstadoEquipo);
	ReadyChangeJquery(OneIdEstadoEquipo,"#form_edit")
}	


function DeleteData(id){
	Message_Confirm(()=>{
		var EstadoEquipoDelete ={
			"Ctr":"Estado_equipo",
			"Acc":"deleteEstadoEquipo",
			"id":id,
		}
		ReadyChangeJquery(EstadoEquipoDelete,"#table_data_estadoEquipo")
	})
}

function UpdateData(id){
	Validate_Form(()=>{
		Message_Confirm(()=>{
		var data = new FormData($('#form_estadoEquipo_edit')[0]);
		var DatosEstadoEquipoEdit ={
			'Ctr':'Estado_equipo',
			'Acc':'editEstadoEquipo',
			'id':id,
			'formularioEstadoEquipoEdit':ProcessData(data)
		}
		ReadyChangeJquery(DatosEstadoEquipoEdit,'#table_data_estadoEquipo')
	})
},'#form_estadoEquipo_edit')
}

