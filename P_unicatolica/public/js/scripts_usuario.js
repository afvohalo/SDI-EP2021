
function SaveData() {
	Validate_Form(()=>{
		Message_Confirm(()=>{
			var data = new FormData($("#form_salas")[0]);	
			var DatosSalas ={
				"Ctr":"Salas",
				"Acc":"registrarSalas",
				"formularioSalas":ProcessData(data)
			}
				console.log(DatosSalas);
			ReadyChangeJquery(DatosSalas,"#table_data");
		})
	},"#form_salas")
}

function OneData(id){
	var OneIdSalas ={
		'Ctr':'Salas',
		'Acc':'OneSalas',
		'id':id
	}
	console.log(OneIdSalas);
	ReadyChangeJquery(OneIdSalas,"#form_edit")
}	


function DeleteData(id){
	Message_Confirm(()=>{
		var SalasDelete ={
			"Ctr":"Salas",
			"Acc":"deleteSalas",
			"id":id,
		}
		ReadyChangeJquery(SalasDelete,"#table_data")
	})
}

function UpdateData(id){
	Validate_Form(()=>{
		Message_Confirm(()=>{
		var data = new FormData($('#form_salas_edit')[0]);
		var DatosSalasEdit ={
			'Ctr':'Salas',
			'Acc':'editSalas',
			'id':id,
			'formularioSalasEdit':ProcessData(data)
		}
		ReadyChangeJquery(DatosSalasEdit,'#table_data')
	})
},'#form_salas_edit')
}

