
function SaveData() {
	Validate_Form(()=>{
		Message_Confirm(()=>{
			var data = new FormData($("#form_tipodocumento")[0]);	
			var DatosTipodocumento ={
				"Ctr":"Tipodocumento",
				"Acc":"registrarTipodocumento",
				"formularioTipodocumento":ProcessData(data)
			}
				console.log(DatosTipodocumento);
			ReadyChangeJquery(DatosTipodocumento,"#table_data");
		})
	},"#form_tipodocumento")
}

function OneData(id){
	var OneIdTipodocumento ={
		'Ctr':'Tipodocumento',
		'Acc':'OneTipodocumento',
		'id':id
	}
	console.log(OneIdTipodocumento);
	ReadyChangeJquery(OneIdTipodocumento,"#form_edit")
}	


function DeleteData(id){
	Message_Confirm(()=>{
		var TipodocumentoDelete ={
			"Ctr":"Tipodocumento",
			"Acc":"deleteTipodocumento",
			"id":id,
		}
		ReadyChangeJquery(TipodocumentoDelete,"#table_data")
	})
}

function UpdateData(id){
	Validate_Form(()=>{
		Message_Confirm(()=>{
		var data = new FormData($('#form_tipodocumento_edit')[0]);
		var DatosTipodocumentoEdit ={
			'Ctr':'Tipodocumento',
			'Acc':'editTipodocumento',
			'id':id,
			'formularioTipodocumentoEdit':ProcessData(data)
		}
		ReadyChangeJquery(DatosTipodocumentoEdit,'#table_data')
	})
},'#form_tipodocumento_edit')
}

