 $( document ).ready(function() {
       var val = 0 ;
       var quantite = 0;
       
          $('.demandeform').on('submit', function () {
              
       var val = 0 ;
        $(':checkbox:checked').each(function(i){
          val = parseFloat($(this).val()) + parseFloat(val);
          quantite = parseFloat($(this).attr('id'));
        });  
       
          if (val > quantite)
         {
             alert("Cette quantité n'est pas dispo "+val);
             return false;
         } 
          else
         {
             quantite = quantite - val;
             $(':checkbox:checked').each(function(i){
                
           $.ajax({
             type:'get',
             url: 'http://localhost/AfriqueIsol/web/app_dev.php/updDmd/' +$(this).attr('class')+"/"+quantite,
              success : function(data)
             {
                 console.log("OK OK OK ! "+data.quantite);
             }
             
         });
         });
         }
       
});
         
         
         
});        
         