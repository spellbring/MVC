function Sistema(){
    
    

}
       
 Sistema.prototype.procesoEnviaForm = function(urlCarga, titulo){
        $.ajax({
             type:"POST", 
             url:urlCarga,  
             cache: false,
             contentType: false,
             processData: false,
             beforeSend: function () {
             },
             success:function(data)
             { 
                
                 $( "#ML_tituloForm" ).html( titulo );
                 $( "#ML_divPopup" ).html( data );               
                          
                            
             }   
                               
                             
             
         });
         return false;  
     }