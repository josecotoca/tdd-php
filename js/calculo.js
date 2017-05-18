function calcular(){    
          var num1=$("#numero1").val();
          var num2=$("#numero2").val();
          var operacion=$("#operacion").val();
          $("#resultado").val('');
          $.ajax({
           type: "POST",
           url: "request.php",
           data: "num1="+num1+"&num2="+num2+"&operacion="+operacion,
           success: function(respuesta){ 
           console.log(respuesta);   
            if(respuesta.realizado==true){
	             $("#resultado").val(respuesta.resultado);
            }
           }
          });
        return false;
    }