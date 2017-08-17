// var etiquetas=["Hola", "mundo"];

$(document).ready(function(){
   Loadimages();

    var d= new Date();

    var dia= d.getDate();
    var mes= d.getMonth();
    var año= d.getFullYear();

    var date= dia+"/0"+(mes+1)+"/"+año;

   $('#Inputdate1').val(date);

    $('#Inputdate2').val(date);

   
});

$(".input-daterange input").datetimepicker({
    format: "dd/mm/yyyy "
});

 $(function() {
      $('#profile-image').on('click', function() {
          $('#imagenedit').click();
      });
  });

$(document).on("click", "#Datesdelete", function(e){


    Loadimages();

    var d= new Date();

    var dia= d.getDate();
    var mes= d.getMonth();
    var año= d.getFullYear();

    var date= dia+"/0"+(mes+1)+"/"+año;

   $('#Inputdate1').val(date);

    $('#Inputdate2').val(date);





});


$(document).on('click', "#Dates", function(e) {


    e.preventDefault(); 

    var Date1=$('#Inputdate1').val();

    var Date2= $('#Inputdate2').val();

    var Fechas={
        Date1: Date1, Date2: Date2

    };

    $.ajax({

        url:"routes/routeContent.php",
        type:"POST",
        data:{info:Fechas, action:"Getinfodate"},
        dataType:"JSON",
        beforesend: function(){

            showspinner();
        },
        error: function(error){

            toast1("error", error, 8000, error);
        },
        success: function(data){

           if(data!=""){ 
            var headers=["ID", "CABECERA","CATEGORIA","NOTICIA", "IMAGEN","TAGS","FECHA", "OPCIONES"];
                jQueryTabletext("tableContainer", headers,data, 8, "450 px", "Image");
        
        }else{

            toast1("Error", "No hay noticias en ese rango", 8000, "error"); 
            $("tbody").empty();
        }
    }


    }); 


});





 $(document).on("click","#Agregar_cat", function(e){

    $("#Modalcat").modal("show"); 

 }); 


 $(document).on("click","#Agregar_Categoria", function(e){

    var categoria=$("#cat_nueva").val();

    $.ajax({

        url:"routes/routeContent.php",
        type:"POST",
        data:{info:categoria, action:"Agregar_cat"},
        dataType:"JSON",
        beforesend: function(){
            showspinner();
        },
        error: function(error){
            toast1("error", "error", 8000,"error");
        },
        success: function(data){
            if(data==true){
                 location.reload();
                toast1("Exito","Categoria Agregada Correctamente",8000,"success");

            }
        }  



    }); 

 }); 



   // $('.names').append('<option>test</option>');
   //  $('.names').trigger('liszt:updated');


var error = "Ocurrió un error insesperado en el sitio, por favor intentelo mas tarde o pongase en contacto con su administrador.";
var success = "La accion se ralizó con exito";
var datosIncorrectos = "Datos incorrectos, vuelve a intentarlo.";


function Loadimages(){

	$.ajax({
		url:"routes/routeContent.php",
        type:"POST",
		data:{action:"read"},
        dataType:"JSON",
		beforesend:function(){
			showspinner();
		},
		error:function(error){
			toast1("error", error,8000, "error");
		},
		success:function(data){

			if (data!=""){
            
				var headers=["ID", "CABECERA","CATEGORIA","NOTICIA", "IMAGEN","TAGS","FECHA", "OPCIONES"];
                jQueryTabletext("tableContainer", headers,data, 8, "450 px", "Image");

			}else{
				//toast1("Error","Tabla vacia", 8000, "error");
				$("tbody").empty();
			}
		}



	});
}

function verImage(id){


   window.open("Ver.php?id="+id);
            


}

function editarImage(id){

    window.open("Editar.php?id="+id);




}


$(document).on("click","#add_content",function(e){

    window.open("Agregar.php");

	
	e.preventDefault();



});


function readURL(input) {

    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#imageadd').attr('src', e.target.result);
            document.getElementById('imageadd').style.display = 'block';


        }

        reader.readAsDataURL(input.files[0]);
    }
}

$(document).on("change", "#imagen", function(){
    readURL(this);

});


function readURLedit(input) {

    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            
            $('#profile-image').attr('src', e.target.result);

            

        }

        reader.readAsDataURL(input.files[0]);
    }
}

$(document).on("change", "#imagenedit", function(){
    readURLedit(this);

});



    


$(document).on("click", "#Subirimage", function(){


    var altura = document.getElementById("imageadd").height;
    var ancho= document.getElementById('imageadd').width; 

    if(ancho>=400 && ancho<=900 || altura>=250 && altura<=600){

      
        var formData = new FormData($("#formimage")[0]);
        var message = ""; 

    

        //hacemos la petición ajax  
        $.ajax({
            url: 'js/upload.php',  
            type: 'POST',
            // Form data
            //datos del formulario
            data: formData,
            //necesario para subir archivos via ajax
            cache: false,
            contentType: false,
            processData: false,
            //mientras enviamos el archivo
            beforeSend: function(){
                message = $("<span class='before'>Subiendo la imagen, por favor espere...</span>");
                showMessage(message)        
            },
            //una vez finalizado correctamente
            success: function(data){



                message = $("<span class='success'>La imagen ha subido correctamente.</span>");   
                showMessage(message)   

                
                var header=$("#header").val();

                //var Texto= tinymce.get("texteditor").getContent();

                var Texto= tinymce.get("textadd").getContent();

                var categoria= $("#select_categoria").val();

                var Etiquetas=$("#tags").val();


                var Text ={
                    header: header, Texto:Texto, nameimage:"js/images/"+data,
                    categoria:categoria, Etiquetas:Etiquetas
                };

                $.ajax({


                    url:"routes/routeContent.php",
                    type:"POST",
                    data:{info:Text, action:"add"},
                    beforeSend: function(){
                        showSpinner();
                    },
                    error: function(error){
                        toast1("error",error,8000,"error");
                        removeSpinner();
                    },
                    success: function(data){
                        removeSpinner();
                        if(data!=false){
                            toast1("¡Exito!", "adicion correcta", 8000, "success");
                            Loadimages();
                            resetForm("formtext");
                            resetForm("formimage");
                            resetForm("get-data-form");
                            document.getElementById('imageadd').style.display = 'none';
                            $('#tags').tagsinput('removeAll');

                            
                        }


                    }


                });

            }
            //si ha ocurrido un error
         
        });
    }else{
        toast1("error", "Favor de cambiar el tamaño de la imagen", 8000, "error"); 
        return; 
    }

       

    
})
 
//como la utilizamos demasiadas veces, creamos una función para 
//evitar repetición de código
function showMessage(message){
    $(".messages").html("").show();
    $(".messages").html(message);
}
 
//comprobamos si el archivo a subir es una imagen
//para visualizarla una vez haya subido
function isImage(extension)
{
    switch(extension.toLowerCase()) 
    {
        case 'jpg': case 'gif': case 'png': case 'jpeg':
            return true;
        break;
        default:
            return false;
        break;
    }
}




  $(document).on("change","#imagenedit",function(e)
    {

        setTimeout(validacion,100); 


       function validacion(){

         var altura = document.getElementById("profile-image").height;
        var ancho= document.getElementById('profile-image').width; 
        var fileName= document.getElementById("profile-image").src;
        


        if(ancho>=400 && ancho<=900 || altura>=250 && altura<=600){

            

            showMessage("<span class='success'> Tamaño Correcto: "+ancho+"x"+altura+".</span>");
     

        }else{


            showMessage("<span class='error'> Tamaño Incorrecto favor de corregir: "+ancho+"x"+altura+".</span>");
      

     

        }
       }
    
    });

   $(document).on("change","#imagen",function(e)
    {

        setTimeout(validacion,100); 


       function validacion(){

         var altura = document.getElementById("imageadd").height;
        var ancho= document.getElementById('imageadd').width; 
        var fileName= document.getElementById("imageadd").src;
        


        if(ancho>=400 && ancho<=900 || altura>=250 && altura<=600){

            

            showMessage("<span class='success'> Tamaño Correcto: "+ancho+"x"+altura+".</span>");
     

        }else{


            showMessage("<span class='error'> Tamaño Incorrecto favor de corregir: "+ancho+"x"+altura+".</span>");
      

     

        }
       }
    
    });



$(document).on("click", "#Guardar_cambios", function(e){

    var altura = document.getElementById("profile-image").height;
    var ancho= document.getElementById('profile-image').width; 

    if(ancho>=400 && ancho<=900 || altura>=250 && altura<=600){

        var formData = new FormData($(".formedit")[0]);
         
          var message = ""; 

       
         $.ajax({
            url: 'js/upload.php',  
            type: 'POST',
            // Form data
            //datos del formulario
            data: formData,
            //necesario para subir archivos via ajax
            cache: false,
            contentType: false,
            processData: false,
            //mientras enviamos el archivo
            beforeSend: function(){
                message = $("<span class='before'>Subiendo la imagen, por favor espere...</span>");
                showMessage(message)        
            },
            //una vez finalizado correctamente
            success: function(data){

                

                message = $("<span class='success'>Adicion Exitosa.</span>");
                showMessage(message);
                
                
                var cat=$("#Editcat").val();
                if (cat==0){

                    toast1("ERROR", "Ingrese una categoria",8000,"error");
                    return; 
                }

                var id= $("#idedit").val();
                 var Etiquetas= $("#marksedit").val();
                var header=$("#headeredit").val();
                 var texto= tinymce.get("texteditar").getContent();
                 var imagen_actual= $("#imagen_actual").val();
                


                var Text ={

                   id:id , Cat:cat,header: header, texto:texto, imagen_nueva:"js/images/"+data, Etiquetas: Etiquetas, imagen_actual:imagen_actual
                
                };

               

                $.ajax({


                    url:"routes/routeContent.php",
                    type:"POST",
                    data:{info:Text, action:"edit"},
                    beforeSend: function(){
                        showSpinner();
                    },
                    error: function(error){
                        toast1("error",error,8000,"error");
                        removeSpinner();
                    },
                    success: function(data){
                        removeSpinner();
                        if(data!=false){
                            toast1("¡Exito!", "adicion correcta", 8000, "success");
                           

                            Loadimages();
                
                          
                        }

                    }


                });

            },
            
        });


    }else{

        toast1("error", "Favor de cambiar el tamaño de la imagen", 8000, "error"); 
        return; 
    }
    
  
      


});

function salir(){
     $('#showImage-edit').attr('src', "");
    $('#showImage-edit').attr('width', "0");
    $('#showImage-edit').attr('height', "0");
    resetForm("formteditimage");
     $(".messages").html("").show();
}

$(document).on("keyup", "#txt_busqueda", function(e){


    $.ajax({
        url:"routes/routeContent.php",
        type:"POST",
        async:false,
        data:{info:$(this).val(), action:"searchead"},
        dataType:"JSON",
        beforeSend: function(){
            //showSpinner();
        },
        error: function(error){
            //removeSpinner();
            toast1("Error!", error, 8000, "error");
        },
        success:function(data){
            //removeSpinner();

            if (data!=""){
                var headers=["ID", "CABECERA","CATEGORIA","NOTICIA", "IMAGEN","TAGS","FECHA", "OPCIONES"];
                jQueryTabletext("tableContainer", headers,data, 8, "450 px", "Image");
                //jQueryTable(id_container, headers, data, LimitRow, maxHeight,NameFunc);
            }else{
                $("tbody").empty();
                //toast1("Error!", error, 8000, "error");

            }
        }


    });



});

$(document).on("change","#select_categoriaload", function(e){

   var categoria=$("#select_categoriaload").val();

   $.ajax({

     url:"routes/routeContent.php",
        type:"POST",
        async:false,
        data:{info:categoria, action:"search"},
        dataType:"JSON",
        beforeSend: function(){
            //showSpinner();
        },
        error: function(error){
            //removeSpinner();
            toast1("Error!", error, 8000, "error");
        },
        success:function(data){
            //removeSpinner();

            if (data!=""){
                var headers=["ID", "CABECERA","CATEGORIA","NOTICIA", "IMAGEN","TAGS","FECHA", "OPCIONES"];
                jQueryTabletext("tableContainer", headers,data, 8, "450 px", "Image");
                //jQueryTable(id_container, headers, data, LimitRow, maxHeight,NameFunc);
            }else{
                $("tbody").empty();


                toast1("Error!", "No hay noticias", 8000, "error");

            }
        }



   });



});







