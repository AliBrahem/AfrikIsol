    $( document ).ready(function() {
   
         $.ajax({
             type:'get',
             url: 'http://localhost/web/app_dev.php/findTole/' + $(".isolant").val(),
             beforeSend: function (){
               $(".prefa").parent().append('<div class="loading"></div>');
               $(".monta").parent().append('<div class="loading"></div>');
               $(".quantite").parent().append('<div class="loading"></div>');
             },
             success : function(data)
             {
                 $(".prefa").val(data.prefa);
                 $(".monta").val(data.monta);
                 $(".quantite").val(data.quantite);
                 $(".loading").remove();
                 q = $(".quantite").val();
             }
             
         });

    var q;
    $(".isolant").change(function ()
     {
         
         
         $.ajax({
             type:'get',
             url: 'http://localhost/web/app_dev.php/findTole/' + $(this).val(),
             beforeSend: function (){
               $(".prefa").parent().append('<div class="loading"></div>');
               $(".monta").parent().append('<div class="loading"></div>');
               $(".quantite").parent().append('<div class="loading"></div>');
             },
             success : function(data)
             {
                 $(".prefa").val(data.prefa);
                 $(".monta").val(data.monta);
                 $(".quantite").val(data.quantite);
                 $(".loading").remove();
                 q = $(".quantite").val();
             }
             
         });

    });
    
    $(".prefah").change(function ()
     {
          var prefa = $(".prefa").val();
        
         var ph = $(".prefah").val();
         
          $(".prefa").val(prefa/ph);
         
          
    });
    
    $(".montah").change(function ()
     {
         
         var monta = $(".monta").val();
         
         var mh = $(".montah").val();
         
          $(".monta").val(monta/mh);
          
    });

    $(".quantite").change(function ()
     {
         
         var q2 = $(".quantite").val();
        
        if (q2>q)
         {
             alert("Le quantitatif réel des travaux ne doit pas dépasser la quantité calculée : "+q);
             
         }  
    });
    
    
    $('myform').on('submit', function () {
    var q2 = $(".quantite").val();
        
        if (q2>q)
         {
             alert("Le quantitatif réel des travaux ne doit pas dépasser la quantité calculée : "+q);
             return false;
         }
});
});