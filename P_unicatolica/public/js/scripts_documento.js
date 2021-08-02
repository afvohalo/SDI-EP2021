
function SaveData() {
	Validate_Form(()=>{
		Message_Confirm(()=>{
			var data = new FormData($("#form_documento")[0]);	
			var DatosDocumento ={
				"Ctr":"Documento",
				"Acc":"registrarDocumento",
				"formularioDocumento":ProcessData(data)
			}
				console.log(DatosDocumento);
			ReadyChangeJquery(DatosDocumento,"#table_data");
		})
	},"#form_documento")
}

function OneData(id){
	var OneIdDocumento ={
		'Ctr':'Documento',
		'Acc':'oneDocumento',
		'id':id
	}
	ReadyChangeJquery(OneIdDocumento,"#form_edit")
}


function DeleteData(id){
	Message_Confirm(()=>{
		var DocumentoDelete ={
			"Ctr":"Documento",
			"Acc":"deleteDocumento",
			"id":id,
		}
		ReadyChangeJquery(DocumentoDelete,"#table_data")
	})
}

function UpdateData(id){
	Validate_Form(()=>{
		Message_Confirm(()=>{
		var data = new FormData($('#form_documento_edit')[0]);
		var DatosDocumentoEdit ={
			'Ctr':'Documento',
			'Acc':'editDocumento',
			'id':id,
			'formularioDocumentoEdit':ProcessData(data)
		}
		ReadyChangeJquery(DatosDocumentoEdit,'#table_data')
	})
},'#form_documento_edit')
}

