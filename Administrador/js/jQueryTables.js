


function jQueryTable(id_container, headers, data, LimitRow, maxHeight, NameFunc) {

	var thead = '<tr id="cabecera">';

	for (var i = 0; i < headers.length; i++){
		thead += '<th>'+headers[i]+'</th>'
	}
	thead += '</tr>'

	$('#thead').empty()
	$('#thead').append(thead)

	var tbody = "";
	var indices = data[0].length;

	for (var i = 0; i < data.length; i++) {
		tbody += '<tr data-toggle="tooltip" title="" id="row_'+data[i][0]+'">'
		for (var j = 0; j < indices; j++) {
			if(j == (indices-1))
				if(data[i][j] == "Activo")
					tbody += '<td><button type="button" class="btn btn-success btn-xs">&nbsp&nbsp&nbsp'+data[i][j]+'&nbsp&nbsp&nbsp</button></td>'
				else
					tbody += '<td><button type="button" class="btn btn-danger btn-xs">&nbsp&nbsp&nbsp'+data[i][j]+'&nbsp&nbsp&nbsp</button></td>'
			else
				tbody += '<td>'+data[i][j]+'</td>'
		}

		if(data[i][data[i].length-1] == "Activo"){
			tbody += '<td>'+
						'<a href="#" onclick="edit'+NameFunc+'('+data[i][0]+')" class="btn btn-info btn-xs" id="edit">'+
							'<i class="glyphicon glyphicon-pencil"></i> Editar '+
						'</a>&nbsp&nbsp&nbsp'+
						'<a href="#" onclick="delete'+NameFunc+'('+data[i][0]+')" class="btn btn-danger btn-xs">'+
							'<i class="glyphicon glyphicon-trash"></i> Dar de baja '+
							'</a>&nbsp&nbsp&nbsp'+
						'<a href="#" onclick="tienda'+NameFunc+'('+data[i][0]+')" class="btn btn-warning btn-xs">'+
							'<i class="glyphicon glyphicon-home"></i> tiendas '+
						'</a>&nbsp&nbsp&nbsp'+
					'</td>'
		}else{
			tbody += '<td>'+
						'<a href="#" onclick="reactiva'+NameFunc+'('+data[i][0]+')" class="btn btn-success btn-xs">'+
							'<i class="glyphicon glyphicon-ok"></i> Reactivar '+
						'</a>'+
					 '</td>'
		}


		tbody += '</tr>'

		if(i == LimitRow){
			$('#'+id_container).css({
	            "overflow-y":"scroll",
	            "max-height":maxHeight
	        });
        }
	}
	$('#tbody').empty()
	$('#tbody').append(tbody)

}

function jQueryTabletext(id_container, headers, data, LimitRow, maxHeight, NameFunc) {

	var thead = '<tr id="cabecera">';

	for (var i = 0; i < headers.length; i++){
		thead += '<th>'+headers[i]+'</th>'
	}
	thead += '</tr>'

	$('#thead2').empty()
	$('#thead2').append(thead)


	var tbody = "";
	var indices = data[0].length;
	$("idstore_add").val(data[0][1]);

	for (var i = 0; i < data.length; i++) {
		tbody += '<tr data-toggle="tooltip" title="" id="row_'+data[i][0]+'">'
		
		for (var j = 0; j < indices; j++) {
			
				
				tbody += '<td>'+data[i][j]+'</td>'
		}

			tbody += '<td>'+
						'<a href="#" onclick="ver'+NameFunc+'('+data[i][0]+')" class="btn btn-success btn-xs">'+
							'<i class="glyphicon glyphicon-eye-open"></i> ver '+
							'</a>&nbsp&nbsp&nbsp'+
						'<a href="#" onclick="editar'+NameFunc+'('+data[i][0]+')" class="btn btn-primary btn-xs">'+
							'<i class="glyphicon glyphicon-pencil"></i> editar '+
						'</a>&nbsp&nbsp&nbsp'+
					'</td>'
		


		tbody += '</tr>'

		if(i == LimitRow){
			$('#'+id_container).css({
	            "overflow-y":"scroll",
	            "max-height":maxHeight
	        });
        }
	}
	$('#tbody2').empty()
	$('#tbody2').append(tbody)

}



function jQueryTableNormal(id_container, headers, data, LimitRow, maxHeight) {

	var thead = '<tr id="cabecera">';

	for (var i = 0; i < headers.length; i++){
		thead += '<th>'+headers[i]+'</th>'
	}
	thead += '</tr>'

	$('#thead2').empty()
	$('#thead2').append(thead)

	var tbody = "";
	var indices = data[0].length;
	for (var i = 0; i < data.length; i++) {
		tbody += '<tr data-toggle="tooltip" title="Hooray!">'
		for (var j = 1; j < indices; j++) {

			if(j == (indices-3)){
				//Obtengo la fecha en formato YYYY-mm-dd
				var split = data[i][j].split('-')
				var fecha = split[2]+' de '+meses(split[1])+' de '+split[0]
				tbody += '<td>'+fecha+'</td>'
			}
			else{
				if(j == (indices-1))
					if(data[i][j] == "Pagado")
						tbody += '<td><button type="button" class="btn btn-success btn-xs">&nbsp&nbsp&nbsp'+data[i][j]+'&nbsp&nbsp&nbsp</button></td>'
					else
						tbody += '<td><button type="button" class="btn btn-danger btn-xs">&nbsp&nbsp&nbsp'+data[i][j]+'&nbsp&nbsp&nbsp</button></td>'
				else
					tbody += '<td>'+data[i][j]+'</td>'
			}
		}

		

		tbody += '</tr>'

		if(i == LimitRow){
			$('#'+id_container).css({
            "overflow-y":"scroll",
            "max-height":maxHeight
        });}
	}
	$('#tbody').empty()
	$('#tbody').append(tbody)

}

function meses(key){
	var meses = {"01": "Enero", "02": "Febrero", "03": "Marzo",
				 "04": "Abril", "05": "Mayo", "06": "Junio",
				 "07": "Julio", "08": "Agosto","09": "Septiembre",
				 "10": "Octubre", "11": "Noviembre", "12": "Diciembre"}
	return meses[key]
}
