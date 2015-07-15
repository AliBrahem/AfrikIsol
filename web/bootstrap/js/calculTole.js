$("document").ready(function() { 
    
    $("form").change(function() {
        
        var x = document.getElementById("diametreinter").value;
        var epaisseur = document.getElementById("epaisseur").value;
        var diamex = document.getElementById("dnext").value;
        var dnisole = document.getElementById("dnisole");
        var circ = document.getElementById("circ");
        var recouv = document.getElementById("recouv");
        var larg = document.getElementById("largeurtole");
        var qtenet = document.getElementById("qtenet");
        var dechet = document.getElementById("dechet");
        var qtebrute = document.getElementById("qtebrute");
        var prefa = document.getElementById("tempsprefa");
        var monta = document.getElementById("tempsmonta");
        var prefamonta = document.getElementById("prefamonta");
        var prixutole = document.getElementById("prixUnitaireTole");
        var prixuisolant = document.getElementById("prixUnitaireIsolant");
        var prix = document.getElementById("prix");
        
        if(document.getElementById("tole").value=="TUYAUTERIES")
        {
  
            dnisole.value = epaisseur*2+parseFloat(diamex);
            circ.value = (dnisole.value*3.14).toFixed(2);
            larg.value = (( parseFloat(circ.value)+parseFloat(recouv.value ))/1000).toFixed(2);
            //qtenet.value = (larg.value/100).toFixed(2);
            dechet.value = Math.round((larg.value*0.1)*100)/100;
            qtebrute.value = (parseFloat(dechet.value) + parseFloat(larg.value)).toFixed(2) ;
            
            if(diamex >= 21 && diamex <= 180)
            {
                prefa.value = 27;
                monta.value = 63;
                prefamonta.value = parseFloat(prefa.value)+parseFloat(monta.value);
            }
            if(diamex >= 219 && diamex <= 356)
            {
                prefa.value = 31.5;
                monta.value = 73.5;
                prefamonta.value = parseFloat(prefa.value)+parseFloat(monta.value);
            }
            if(diamex >= 406 && diamex <= 660)
            {
                prefa.value = 45;
                monta.value = 90;
                prefamonta.value = parseFloat(prefa.value)+parseFloat(monta.value);
            }
            if(diamex >= 710 && diamex <= 813)
            {
                prefa.value = 54;
                monta.value = 108;
                prefamonta.value = parseFloat(prefa.value)+parseFloat(monta.value);
            }
            if(diamex >= 864 && diamex <= 1016)
            {
                prefa.value = 54;
                monta.value = 180;
                prefamonta.value = parseFloat(prefa.value)+parseFloat(monta.value);
            }
     
        }
         if(document.getElementById("tole").value=="COUDE")
        {
            dnisole.value = epaisseur*2+parseFloat(diamex);
            circ.value = (dnisole.value*3.14).toFixed(2);
            if(x >= 15 && x <= 50)
            {
                if(epaisseur== 19 || epaisseur== 30 || epaisseur== 32 || epaisseur== 40 || epaisseur== 50 || epaisseur== 60 || epaisseur== 80 || epaisseur== 100 )

                {
                    
                    larg.value = (((parseFloat(circ.value))/10)*0.5).toFixed(3);
                    qtenet.value = ( parseFloat(recouv.value) + parseFloat(larg.value)).toFixed(2);
                    dechet.value = Math.round((qtenet.value*0.1)*100)/100;
                    qtebrute.value = (parseFloat(dechet.value) + parseFloat(qtenet.value)).toFixed(2) ;
                }
            }
            
            if(x >= 66 && x <= 102)
            {
                if(epaisseur== 19 || epaisseur== 30 || epaisseur== 32 || epaisseur== 40 || epaisseur== 50 || epaisseur== 60 || epaisseur== 80 || epaisseur== 100 )

                {
                    
                    larg.value = (((parseFloat(circ.value))/10)*0.65).toFixed(3);
                    qtenet.value = ( parseFloat(recouv.value) + parseFloat(larg.value)).toFixed(2);
                    dechet.value = Math.round((qtenet.value*0.1)*100)/100;
                    qtebrute.value = (parseFloat(dechet.value) + parseFloat(qtenet.value)).toFixed(2) ;
                }
            }
            if(x >= 125 && x <= 200)
            {
                if(epaisseur== 19 || epaisseur== 30 || epaisseur== 32 || epaisseur== 40 || epaisseur== 50 || epaisseur== 60 || epaisseur== 80 || epaisseur== 100 )

                {
                    
                    larg.value = (((parseFloat(circ.value))/10)*0.85).toFixed(3);
                    qtenet.value = ( parseFloat(recouv.value) + parseFloat(larg.value)).toFixed(2);
                    dechet.value = Math.round((qtenet.value*0.1)*100)/100;
                    qtebrute.value = (parseFloat(dechet.value) + parseFloat(qtenet.value)).toFixed(2) ;
                }
            }
            if(x >= 250 && x <= 350)
            {
                if(epaisseur== 19 || epaisseur== 30 || epaisseur== 32 || epaisseur== 40 || epaisseur== 50 || epaisseur== 60 || epaisseur== 80 || epaisseur== 100 )

                {
                    
                    larg.value = (((parseFloat(circ.value))/10)*1.1).toFixed(3);
                    qtenet.value = ( parseFloat(recouv.value) + parseFloat(larg.value)).toFixed(2);
                    dechet.value = Math.round((qtenet.value*0.1)*100)/100;
                    qtebrute.value = (parseFloat(dechet.value) + parseFloat(qtenet.value)).toFixed(2) ;
                }
            }
            if(x >= 400 && x <= 600)
            {
                if(epaisseur== 19 || epaisseur== 30 || epaisseur== 32 || epaisseur== 40 || epaisseur== 50 || epaisseur== 60 || epaisseur== 80 || epaisseur== 100 )

                {
                    
                    larg.value = (((parseFloat(circ.value))/10)*1.5).toFixed(3);
                    qtenet.value = ( parseFloat(recouv.value) + parseFloat(larg.value)).toFixed(2);
                    dechet.value = Math.round((qtenet.value*0.1)*100)/100;
                    qtebrute.value = (parseFloat(dechet.value) + parseFloat(qtenet.value)).toFixed(2) ;
                }
            }
            if(x >= 650 && x <= 1000)
            {
                if(epaisseur== 19 || epaisseur== 30 || epaisseur== 32 || epaisseur== 40 || epaisseur== 50 || epaisseur== 60 || epaisseur== 80 || epaisseur== 100 )

                {
                    
                    larg.value = (((parseFloat(circ.value))/10)*2).toFixed(3);
                    qtenet.value = ( parseFloat(recouv.value) + parseFloat(larg.value)).toFixed(2);
                    dechet.value = Math.round((qtenet.value*0.1)*100)/100;
                    qtebrute.value = (parseFloat(dechet.value) + parseFloat(qtenet.value)).toFixed(2) ;
                }
            }
            
            
            if(diamex >= 21 && diamex <= 180)
            {
                prefa.value = 54;
                monta.value = 36;
                prefamonta.value = parseFloat(prefa.value)+parseFloat(monta.value);
            }
            if(diamex >= 219 && diamex <= 356)
            {
                prefa.value = 63;
                monta.value = 42;
                prefamonta.value = parseFloat(prefa.value)+parseFloat(monta.value);
            }
            if(diamex >= 406 && diamex <= 660)
            {
                prefa.value = 90;
                monta.value = 60;
                prefamonta.value = parseFloat(prefa.value)+parseFloat(monta.value);
            }
            if(diamex >= 710 && diamex <= 813)
            {
                prefa.value = 108;
                monta.value = 72;
                prefamonta.value = parseFloat(prefa.value)+parseFloat(monta.value);
            }
            if(diamex >= 864 && diamex <= 1016)
            {
                prefa.value = 180;
                monta.value = 120;
                prefamonta.value = parseFloat(prefa.value)+parseFloat(monta.value);
            }
        }
        
        if(document.getElementById("tole").value=="REDUCTION")
        {
                if(x >= 15 && x <= 50)
            {
                if(epaisseur== 19 || epaisseur== 30 || epaisseur== 32 || epaisseur== 40 || epaisseur== 50 || epaisseur== 60 || epaisseur== 80 || epaisseur== 100 )

                {
                    dnisole.value = epaisseur*2+parseFloat(diamex);
                    circ.value = (dnisole.value*3.14).toFixed(2);
                    larg.value = (((parseFloat(circ.value))/10)*0.3).toFixed(3);
                    qtenet.value = ( parseFloat(recouv.value) + parseFloat(larg.value)).toFixed(2);
                    dechet.value = Math.round((qtenet.value*0.1)*100)/100;
                    qtebrute.value = (parseFloat(dechet.value) + parseFloat(qtenet.value)).toFixed(2) ;
                }
            }
            
            if(x >= 66 && x <= 102)
            {
                if(epaisseur== 19 || epaisseur== 30 || epaisseur== 32 || epaisseur== 40 || epaisseur== 50 || epaisseur== 60 || epaisseur== 80 || epaisseur== 100 )

                {
                    dnisole.value = epaisseur*2+parseFloat(diamex);
                    circ.value = (dnisole.value*3.14).toFixed(2);
                    larg.value = (((parseFloat(circ.value))/10)*0.4).toFixed(3);
                    qtenet.value = ( parseFloat(recouv.value) + parseFloat(larg.value)).toFixed(2);
                    dechet.value = Math.round((qtenet.value*0.1)*100)/100;
                    qtebrute.value = (parseFloat(dechet.value) + parseFloat(qtenet.value)).toFixed(2) ;
                }
            }
            if(x >= 125 && x <= 200)
            {
                if(epaisseur== 19 || epaisseur== 30 || epaisseur== 32 || epaisseur== 40 || epaisseur== 50 || epaisseur== 60 || epaisseur== 80 || epaisseur== 100 )

                {
                    dnisole.value = epaisseur*2+parseFloat(diamex);
                    circ.value = (dnisole.value*3.14).toFixed(2);
                    larg.value = (((parseFloat(circ.value))/10)*0.6).toFixed(3);
                    qtenet.value = ( parseFloat(recouv.value) + parseFloat(larg.value)).toFixed(2);
                    dechet.value = Math.round((qtenet.value*0.1)*100)/100;
                    qtebrute.value = (parseFloat(dechet.value) + parseFloat(qtenet.value)).toFixed(2) ;
                }
            }
            if(x >= 250 && x <= 350)
            {
                if(epaisseur== 19 || epaisseur== 30 || epaisseur== 32 || epaisseur== 40 || epaisseur== 50 || epaisseur== 60 || epaisseur== 80 || epaisseur== 100 )

                {
                    dnisole.value = epaisseur*2+parseFloat(diamex);
                    circ.value = (dnisole.value*3.14).toFixed(2);
                    larg.value = (((parseFloat(circ.value))/10)*0.8).toFixed(3);
                    qtenet.value = ( parseFloat(recouv.value) + parseFloat(larg.value)).toFixed(2);
                    dechet.value = Math.round((qtenet.value*0.1)*100)/100;
                    qtebrute.value = (parseFloat(dechet.value) + parseFloat(qtenet.value)).toFixed(2) ;
                }
            }
            if(x >= 400 && x <= 600)
            {
                if(epaisseur== 19 || epaisseur== 30 || epaisseur== 32 || epaisseur== 40 || epaisseur== 50 || epaisseur== 60 || epaisseur== 80 || epaisseur== 100 )

                {
                    dnisole.value = epaisseur*2+parseFloat(diamex);
                    circ.value = (dnisole.value*3.14).toFixed(2);
                    larg.value = (((parseFloat(circ.value))/10)).toFixed(3);
                    qtenet.value = ( parseFloat(recouv.value) + parseFloat(larg.value)).toFixed(2);
                    dechet.value = Math.round((qtenet.value*0.1)*100)/100;
                    qtebrute.value = (parseFloat(dechet.value) + parseFloat(qtenet.value)).toFixed(2) ;
                }
            }
            if(x >= 650 && x <= 1000)
            {
                if(epaisseur== 19 || epaisseur== 30 || epaisseur== 32 || epaisseur== 40 || epaisseur== 50 || epaisseur== 60 || epaisseur== 80 || epaisseur== 100 )

                {
                    dnisole.value = epaisseur*2+parseFloat(diamex);
                    circ.value = (dnisole.value*3.14).toFixed(2);
                    larg.value = (((parseFloat(circ.value))/10)*1.1).toFixed(3);
                    qtenet.value = ( parseFloat(recouv.value) + parseFloat(larg.value)).toFixed(2);
                    dechet.value = Math.round((qtenet.value*0.1)*100)/100;
                    qtebrute.value = (parseFloat(dechet.value) + parseFloat(qtenet.value)).toFixed(2) ;
                }
            }
            
             if(diamex >= 21 && diamex <= 180)
            {
                prefa.value = 27;
                monta.value = 63;
                prefamonta.value = parseFloat(prefa.value)+parseFloat(monta.value);
            }
            if(diamex >= 219 && diamex <= 356)
            {
                prefa.value = 31.5;
                monta.value = 73.5;
                prefamonta.value = parseFloat(prefa.value)+parseFloat(monta.value);
            }
            if(diamex >= 406 && diamex <= 660)
            {
                prefa.value = 45;
                monta.value = 90;
                prefamonta.value = parseFloat(prefa.value)+parseFloat(monta.value);
            }
            if(diamex >= 710 && diamex <= 813)
            {
                prefa.value = 54;
                monta.value = 108;
                prefamonta.value = parseFloat(prefa.value)+parseFloat(monta.value);
            }
            if(diamex >= 864 && diamex <= 1016)
            {
                prefa.value = 54;
                monta.value = 180;
                prefamonta.value = parseFloat(prefa.value)+parseFloat(monta.value);
            }
        }
       
    });


    
    $(".diametreinter").change(function() {
        
        var x = document.getElementById("diametreinter").value;
        var epaisseur = document.getElementById("epaisseur").value;
        var diamex = document.getElementById("dnext").value;
        var dnisole = document.getElementById("dnisole").value;
        var circ = document.getElementById("circ").value;
        var recouv = document.getElementById("recouv").value;
        var larg = document.getElementById("largeurtole").value;
        var qtenet = document.getElementById("qtenet").value;
        var dechet = document.getElementById("dechet").value;
        var qtebrute = document.getElementById("qtebrute").value;
        var prefa = document.getElementById("tempsprefa").value;
        
        
        if(x==15)
        {
           document.getElementById("dnext").value=21;
           
        }
        if(x==20)
        {
           document.getElementById("dnext").value=27;
           
        }
        if(x==25)
        {
           document.getElementById("dnext").value=34;
           
        }
        if(x==33)
        {
           document.getElementById("dnext").value=42;
           
        }
        if(x==40)
        {
           document.getElementById("dnext").value=49;
           
        }
        if(x==50)
        {
           document.getElementById("dnext").value=60;
           
        }
        if(x==66)
        {
           document.getElementById("dnext").value=76;
           
        }
        if(x==80)
        {
           document.getElementById("dnext").value=89;
           
        }
        if(x==102)
        {
           document.getElementById("dnext").value=114;
           
        }
        if(x==125)
        {
           document.getElementById("dnext").value=140;
           
        }
        if(x==150)
        {
           document.getElementById("dnext").value=168;
           
        }
        if(x==200)
        {
           document.getElementById("dnext").value=219;
           
        }
        if(x==250)
        {
           document.getElementById("dnext").value=273;
           
        }
        if(x==300)
        {
           document.getElementById("dnext").value=323;
           
        }
        if(x==350)
        {
           document.getElementById("dnext").value=356;
           
        }
        if(x==400)
        {
           document.getElementById("dnext").value=406;
           
        }
        if(x==450)
        {
           document.getElementById("dnext").value=456;
           
        }
        if(x==500)
        {
           document.getElementById("dnext").value=508;
           
        }
        if(x==550)
        {
           document.getElementById("dnext").value=556;
           
        }
        if(x==600)
        {
           document.getElementById("dnext").value=610;
           
        }
        if(x==650)
        {
           document.getElementById("dnext").value=660;
           
        }
        if(x==700)
        {
           document.getElementById("dnext").value=710;
           
        }
        if(x==750)
        {
           document.getElementById("dnext").value=756;
           
        }
        if(x==800)
        {
           document.getElementById("dnext").value=810;
           
        }
        if(x==900)
        {
           document.getElementById("dnext").value=910;
           
        }
        if(x==1000)
        {
           document.getElementById("dnext").value=1100;
           
        }
    });

     $(".dnext").change(function() {

        var x = document.getElementById("diametreinter").value;
        var epaisseur = document.getElementById("epaisseur").value;
        var diamex = document.getElementById("dnext").value;
        var dnisole = document.getElementById("dnisole");
        var circ = document.getElementById("circ");
        var recouv = document.getElementById("recouv");
        var larg = document.getElementById("largeurtole");
        var qtenet = document.getElementById("qtenet");
        var dechet = document.getElementById("dechet");
        var qtebrute = document.getElementById("qtebrute");
        var prefa = document.getElementById("tempsprefa").value;
        
        
         if(diamex==21)
        {
           document.getElementById("diametreinter").value=15;
           
        }
        if(diamex==27)
        {
           document.getElementById("diametreinter").value=20;
           
        }
        if(diamex==34)
        {
           document.getElementById("diametreinter").value=25;
           
        }
        if(diamex==42)
        {
           document.getElementById("diametreinter").value=33;
           
        }
        if(diamex==49)
        {
           document.getElementById("diametreinter").value=40;
           
        }
        if(diamex==60)
        {
           document.getElementById("diametreinter").value=50;
           
        }
        if(diamex==76)
        {
           document.getElementById("diametreinter").value=66;
           
        }
        if(diamex==89)
        {
           document.getElementById("diametreinter").value=80;
           
        }
        if(diamex==114)
        {
           document.getElementById("diametreinter").value=102;
           
        }
        if(diamex==140)
        {
           document.getElementById("diametreinter").value=125;
           
        }
        if(diamex==168)
        {
           document.getElementById("diametreinter").value=150;
           
        }
        if(diamex==219)
        {
           document.getElementById("diametreinter").value=200;
           
        }
        if(diamex==273)
        {
           document.getElementById("diametreinter").value=250;
           
        }
        if(diamex==323)
        {
           document.getElementById("diametreinter").value=300;
           
        }
        if(diamex==356)
        {
           document.getElementById("diametreinter").value=350;
           
        }
        if(diamex==406)
        {
           document.getElementById("diametreinter").value=400;
           
        }
        if(diamex==456)
        {
           document.getElementById("diametreinter").value=450;
           
        }
        if(diamex==508)
        {
           document.getElementById("diametreinter").value=500;
           
        }
        if(diamex==556)
        {
           document.getElementById("diametreinter").value=550;
           
        }
        if(diamex==610)
        {
           document.getElementById("diametreinter").value=600;
           
        }
        if(diamex==660)
        {
           document.getElementById("diametreinter").value=650;
           
        }
        if(diamex==710)
        {
           document.getElementById("diametreinter").value=700;
           
        }
        if(diamex==756)
        {
           document.getElementById("diametreinter").value=750;
           
        }
        if(diamex==810)
        {
           document.getElementById("diametreinter").value=800;
           
        }
        if(diamex==910)
        {
           document.getElementById("diametreinter").value=900;
           
        }
        if(diamex==1100)
        {
           document.getElementById("diametreinter").value=1000;
           
        }
        
        
    });


    });