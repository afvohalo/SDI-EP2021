
function SaveData() {
	Validate_Form(()=>{
		Message_Confirm(()=>{
			var data = new FormData($("#form_estadoInventario")[0]);	
			var DatosEstadoInventario ={
				"Ctr":"Estado_inventario",
				"Acc":"registrarEstadoInventario",
				"formularioEstadoInventario":ProcessData(data)
			}
				console.log(DatosEstadoInventario);
			ReadyChangeJquery(DatosEstadoInventario,"#table_data_estadoInventario");
		})
	},"#form_estadoInventario")
}

function OneData(id){
	var OneIdEstadoInventario ={
		'Ctr':'Estado_inventario',
		'Acc':'oneEstadoInventario',
		'id':id
	}
	console.log(OneIdEstadoInventario);
	ReadyChangeJquery(OneIdEstadoInventario,"#form_edit")
}	


function DeleteData(id){
	Message_Confirm(()=>{
		var EstadoInventarioDelete ={
			"Ctr":"Estado_inventario",
			"Acc":"deleteEstadoInventario",
			"id":id,
		}
		ReadyChangeJquery(EstadoInventarioDelete,"#table_data_estadoInventario")
	})
}

function UpdateData(id){
	Validate_Form(()=>{
		Message_Confirm(()=>{
		var data = new FormData($('#form_estadoInventario_edit')[0]);
		var DatosEstadoInventarioEdit ={
			'Ctr':'Estado_inventario',
			'Acc':'editEstadoInventario',
			'id':id,
			'formularioEstadoInventarioEdit':ProcessData(data)
		}
		ReadyChangeJquery(DatosEstadoInventarioEdit,'#table_data_estadoInventario')
	})
},'#form_estadoInventario_edit')
}

