function SaveData() {
	Validate_Form(()=>{
		Message_Confirm(()=>{
			var data = new FormData($("#form_inventario")[0]);	
			var DatosInventario ={
				"Ctr":"Inventario",
				"Acc":"registrarinventario",
				"formularioInventario":ProcessData(data)
			}
				console.log(DatosInventario);
			ReadyChangeJquery(DatosInventario,"#table_data");
		})
	},"#form_inventario")
}

function OneData(id){
	var OneIdInventario ={
		'Ctr':'Inventario',
		'Acc':'Oneinventario',
		'id':id
	}
	console.log(OneIdInventario);
	ReadyChangeJquery(OneIdInventario,"#form_edit")
}	


function DeleteData(id){
	Message_Confirm(()=>{
		var InventarioDelete ={
			"Ctr":"Inventario",
			"Acc":"deleteinventario",
			"id":id,
		}
		ReadyChangeJquery(InventarioDelete,"#table_data")
	})
}

function UpdateData(id){
	Validate_Form(()=>{
		Message_Confirm(()=>{
		var data = new FormData($('#form_inventario_edit')[0]);
		
		var DatosInventarioEdit ={
			'Ctr':'Inventario',
			'Acc':'editinventario',
			'id':id,
			'formularioInventarioEdit':ProcessData(data)
		}
		console.log(DatosInventarioEdit);
		ReadyChangeJquery(DatosInventarioEdit,'#table_data')
	})
},'#form_inventario_edit')
}
