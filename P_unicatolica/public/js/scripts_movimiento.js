
function SaveData() {
	Validate_Form(()=>{
		Message_Confirm(()=>{
			var data = new FormData($("#form_movimiento")[0]);	
			var Datosmovimiento ={
				"Ctr":"movimiento",
				"Acc":"registrarmovimiento",
				"formulariomovimiento":ProcessData(data)
			}
				console.log(Datosmovimiento);
			ReadyChangeJquery(Datosmovimiento,"#table_data");
		})
	},"#form_movimiento")
}

function OneData(id){
	var OneIdmovimiento ={
		'Ctr':'movimiento',
		'Acc':'Onemovimiento',
		'id':id
	}
	console.log(OneIdmovimiento);
	ReadyChangeJquery(OneIdmovimiento,"#form_edit")
}	


function DeleteData(id){
	Message_Confirm(()=>{
		var movimientoDelete ={
			"Ctr":"movimiento",
			"Acc":"deletemovimiento",
			"id":id,
		}
		ReadyChangeJquery(movimientoDelete,"#table_data")
	})
}

function UpdateData(id){
	Validate_Form(()=>{
		Message_Confirm(()=>{
		var data = new FormData($('#form_movimiento_edit')[0]);
		var DatosmovimientoEdit ={
			'Ctr':'movimiento',
			'Acc':'editmovimiento',
			'id':id,
			'formulariomovimientoEdit':ProcessData(data)
		}
		ReadyChangeJquery(DatosmovimientoEdit,'#table_data')
	})
},'#form_movimiento_edit')
}

