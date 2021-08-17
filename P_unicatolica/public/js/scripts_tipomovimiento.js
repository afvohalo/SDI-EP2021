
function SaveData() {
	Validate_Form(()=>{
		Message_Confirm(()=>{
			var data = new FormData($("#form_tipomovimiento")[0]);	
			var DatosTipomovimiento ={
				"Ctr":"Tipomovimiento",
				"Acc":"registrarTipomovimiento",
				"formularioTipomovimiento":ProcessData(data)
			}
				console.log(DatosTipomovimiento);
			ReadyChangeJquery(DatosTipomovimiento,"#table_data");
		})
	},"#form_tipomovimiento")
}

function OneData(id){
	var OneIdTipomovimiento ={
		'Ctr':'Tipomovimiento',
		'Acc':'OneTipomovimiento',
		'id':id
	}
	console.log(OneIdTipomovimiento);
	ReadyChangeJquery(OneIdTipomovimiento,"#form_edit")
}	


function DeleteData(id){
	Message_Confirm(()=>{
		var TipomovimientoDelete ={
			"Ctr":"Tipomovimiento",
			"Acc":"deleteTipomovimiento",
			"id":id,
		}
		ReadyChangeJquery(TipomovimientoDelete,"#table_data")
	})
}

function UpdateData(id){
	Validate_Form(()=>{
		Message_Confirm(()=>{
		var data = new FormData($('#form_tipomovimiento_edit')[0]);
		var DatosTipomovimientoEdit ={
			'Ctr':'Tipomovimiento',
			'Acc':'editTipomovimiento',
			'id':id,
			'formularioTipomovimientoEdit':ProcessData(data)
		}
		ReadyChangeJquery(DatosTipomovimientoEdit,'#table_data')
	})
},'#form_tipomovimiento_edit')
}

