$("document").ready(function() { 
    
    $(".calculform").change(function() {
        
        //var x = document.getElementById("diametreinter").value;
        var epaisseur = document.getElementById("epaisseur");
        var diamex = document.getElementById("dnext").value;
        var dnisole = document.getElementById("dnisole");
        var circ = document.getElementById("circ");
        var recouv = document.getElementById("recouv");
        var qtenet = document.getElementById("qtenet");
        var dechet = document.getElementById("dechet");
        var qtebrute = document.getElementById("qtebrute");
        var prefa = document.getElementById("tempsprefa");
        var monta = document.getElementById("tempsmonta");
        var prefamonta = document.getElementById("prefamonta");
        var prixutole = document.getElementById("prixUnitaireTole");
        var prixuisolantMm = document.getElementById("prixUnitaireIsolantMm");
        var prixuisolantML = document.getElementById("prixUnitaireIsolantML");
        var prix = document.getElementById("prix");
        var prixMO = document.getElementById("prixMO");
        var accessoire = document.getElementById("accessoire");
        var echaff = document.getElementById("echaffaudage");
        var unite = document.getElementById("unite");
        var nbcouche = document.getElementById("nbcouche");
        var quantite = document.getElementById("quantite");
        dnisole.value = epaisseur.value*2+parseFloat(diamex);
        //circ.value = ((dnisole.value*3.14).toFixed(2));
        qtenet.value  = (((epaisseur.value*2+parseFloat(diamex))*3.14 +parseFloat(recouv.value))/1000).toFixed(2);
        circ.value = qtenet.value*1000;
        dechet.value = Math.round((qtenet.value*0.1)*100)/100;
        qtebrute.value = (parseFloat(dechet.value) + parseFloat(qtenet.value)).toFixed(2) ;
        var pre,m;
        var pm,q;
         
             if(diamex >= 10 && diamex <= 50)
            {
                pre = 0.6;
                m= 0.9;
         
            }
            if(diamex >= 60 && diamex <= 102)
            {
                pre = 0.8;
                m = 1.2;
                //prefamonta.value = parseFloat(prefa.value)+parseFloat(monta.value);
            }
            if(diamex >= 114 && diamex <= 142)
            {
                pre = 1;
                m= 1.5;
                //prefamonta.value = parseFloat(prefa.value)+parseFloat(monta.value);
            }
            if(diamex >= 168 && diamex <= 324)
            {
                pre= 1.2;
                m = 1.8;
               // prefamonta.value = parseFloat(prefa.value)+parseFloat(monta.value);
            }
            if(diamex >= 356 && diamex <= 458)
            {
                pre= 1.4;
                m = 2.1;
                //prefamonta.value = parseFloat(prefa.value)+parseFloat(monta.value);
            }
            if(diamex >= 508 && diamex <= 864)
            {
                pre= 1.6;
                m = 2.4;
                //.value = parseFloat(prefa.value)+parseFloat(monta.value);
            }
            if(diamex >= 914 && diamex <= 1017)
            {
                pre= 2;
                m= 3;
                //prefamonta.value = parseFloat(prefa.value)+parseFloat(monta.value);
            }
            
            
   
            if(epaisseur.value >= 30 && epaisseur.value <= 100)
            {
                prefa.value=pre;
                monta.value = m;
                prefamonta.value = (parseFloat(prefa.value)+parseFloat(monta.value)).toFixed(2);
                nbcouche.value = 1;
                if(document.getElementById("tole").value=="SURFACE")
                    {
                prefa.value=1.6;
                monta.value = 2.4;
                prefamonta.value = (parseFloat(prefa.value)+parseFloat(monta.value)).toFixed(2);
                    }
            }
            if(epaisseur.value >= 110 && epaisseur.value <= 200)
            {
                prefa.value=pre;
                monta.value = m + (parseFloat(m)*0.3);
                prefamonta.value = (parseFloat(prefa.value)+parseFloat(monta.value)).toFixed(2);
                nbcouche.value = 2;
                 if(document.getElementById("tole").value=="SURFACE")
  
                       {
                prefa.value=2.1;
                monta.value = 3.1;
                prefamonta.value = (parseFloat(prefa.value)+parseFloat(monta.value)).toFixed(2);
                    }
        
            }
            if(epaisseur.value >= 210 && epaisseur.value <= 300)
            {
                prefa.value=pre;
                monta.value =m + parseFloat(m)*0.3 + (m+parseFloat(m)*0.3)*0.3;
                prefamonta.value = (parseFloat(prefa.value)+parseFloat(monta.value)).toFixed(2);
                nbcouche.value = 3;
                 if(document.getElementById("tole").value=="SURFACE")
  
                       {
                prefa.value=2.7;
                monta.value = 4.1;
                prefamonta.value = (parseFloat(prefa.value)+parseFloat(monta.value)).toFixed(2);
                    }

            }
            if(epaisseur.value >= 310 && epaisseur.value <= 400)
            {
                prefa.value=pre;
                var a = m + parseFloat(m)*0.3 + (m+parseFloat(m)*0.3)*0.3;
                monta.value = a + a*0.3;
                prefamonta.value = (parseFloat(prefa.value)+parseFloat(monta.value)).toFixed(2);
                nbcouche.value = 4;
                 if(document.getElementById("tole").value=="SURFACE")
  
                       {
                prefa.value=3.5;
                monta.value = 5.3;
                prefamonta.value = (parseFloat(prefa.value)+parseFloat(monta.value)).toFixed(2);
                    }
            }
            if(epaisseur.value >= 410)
            {
                prefa.value=pre;
                var a =  m + parseFloat(m)*0.3 + (m+parseFloat(m)*0.3)*0.3;
                var b =  a + a*0.3;
                monta.value = b+ (b*0.3);
                prefamonta.value = (parseFloat(prefa.value)+parseFloat(monta.value)).toFixed(2);
                nbcouche.value = 5;
                 if(document.getElementById("tole").value=="SURFACE")
  
                {
                prefa.value=4.6;
                monta.value = 6.9;
                prefamonta.value = (parseFloat(prefa.value)+parseFloat(monta.value)).toFixed(2);
                }
            }
            
            
        
        //------------------------------       Calcul du temps préfa & montage selon la tôle   ----------------------------------------------------------------------
        if(diamex >= 10 && diamex <= 50)
        {
               
        if(document.getElementById("tole").value=="COUDE")
        {
           pm = prefamonta.value*1;
            q = qtenet.value*1;
            prefamonta.value = pm.toFixed(2);
            qtenet.value= q;
        }
        if(document.getElementById("tole").value=="VANNE")
        {
           pm = prefamonta.value*2.5;
            q = qtenet.value*2.5;
            prefamonta.value = pm.toFixed(2);
            qtenet.value= q.toFixed(2);
        }
        if(document.getElementById("tole").value=="BRIDE")
        {
           pm = prefamonta.value*1.6;
            q = qtenet.value*1.6;
            prefamonta.value = pm.toFixed(2);
            qtenet.value= q.toFixed(2);
        }
        if(document.getElementById("tole").value=="TE")
        {
           pm = prefamonta.value*1;
            q = qtenet.value*1;
            prefamonta.value = pm.toFixed(2);
            qtenet.value= q.toFixed(2);
        }
        if(document.getElementById("tole").value=="REDUCTION")
        {
           pm = prefamonta.value*0.2;
            q = qtenet.value*0.2;
            prefamonta.value = pm.toFixed(2);
            qtenet.value= q.toFixed(2);
        }
            }
            if(diamex >= 60 && diamex <= 90)
            {
            
        if(document.getElementById("tole").value=="COUDE")
        {
           pm = prefamonta.value*1.2;
            q = qtenet.value*1.2;
            prefamonta.value = pm.toFixed(2);
            qtenet.value= q.toFixed(2);
        }
        if(document.getElementById("tole").value=="VANNE")
        {
           pm = prefamonta.value*3;
            q = qtenet.value*3;
            prefamonta.value = pm.toFixed(2);
            qtenet.value= q.toFixed(2);
        }
        if(document.getElementById("tole").value=="BRIDE")
        {
           pm = prefamonta.value*2;
            q = qtenet.value*2;
            prefamonta.value = pm.toFixed(2);
            qtenet.value= q;
        }
        if(document.getElementById("tole").value=="TE")
        {
           pm = prefamonta.value*1;
            q = qtenet.value*1;
            prefamonta.value = pm.toFixed(2);
            qtenet.value= q;
        }
        if(document.getElementById("tole").value=="REDUCTION")
        {
           pm = prefamonta.value*0.25;
            q = qtenet.value*0.25;
            prefamonta.value = pm.toFixed(2);
            qtenet.value= q.toFixed(2);
        }
            }
            if(diamex >= 101 && diamex <= 169)
            {
           
        if(document.getElementById("tole").value=="COUDE")
        {
           pm = prefamonta.value*1.4;
            q = qtenet.value*1.4;
            prefamonta.value = pm.toFixed(2);
            qtenet.value= q.toFixed(2);
        }
        if(document.getElementById("tole").value=="VANNE")
        {
           pm = prefamonta.value*3.5;
            q = qtenet.value*3.5;
            prefamonta.value = pm.toFixed(2);
            qtenet.value= q.toFixed(2);
        }
        if(document.getElementById("tole").value=="BRIDE")
        {
           pm = prefamonta.value*2.2;
            q = qtenet.value*2.2;
            prefamonta.value = pm.toFixed(2);
            qtenet.value= q.toFixed(2);
        }
        if(document.getElementById("tole").value=="TE")
        {
           pm = prefamonta.value*1.2;
            q = qtenet.value*1.2;
            prefamonta.value = pm.toFixed(2);
            qtenet.value= q.toFixed(2);
        }
        if(document.getElementById("tole").value=="REDUCTION")
        {
           pm = prefamonta.value*0.3;
            q = qtenet.value*0.3;
            prefamonta.value = pm.toFixed(2);
            qtenet.value= q.toFixed(2);
        }
            }
            if(diamex >= 218 && diamex <= 324)
            {
            
                  if(document.getElementById("tole").value=="COUDE")
        {
           pm = prefamonta.value*2;
            q = qtenet.value*2;
            prefamonta.value = pm.toFixed(2);
            qtenet.value= q;
        }
        if(document.getElementById("tole").value=="VANNE")
        {
           pm = prefamonta.value*4;
            q = qtenet.value*4;
            prefamonta.value = pm.toFixed(2);
            qtenet.value= q;
        }
        if(document.getElementById("tole").value=="BRIDE")
        {
           pm = prefamonta.value*2.7;
            q = qtenet.value*2.7;
            prefamonta.value = pm.toFixed(2);
            qtenet.value= q.toFixed(2);
        }
        if(document.getElementById("tole").value=="TE")
        {
           pm = prefamonta.value*1.2;
            q = qtenet.value*1.2;
            prefamonta.value = pm.toFixed(2);
            qtenet.value= q.toFixed(2);
        }
        if(document.getElementById("tole").value=="REDUCTION")
        {
           pm = prefamonta.value*0.4;
            q = qtenet.value*0.4;
            prefamonta.value = pm.toFixed(2);
            qtenet.value= q.toFixed(2);
        }
            }
            if(diamex >= 356 && diamex <= 508)
            {
          
        if(document.getElementById("tole").value=="COUDE")
        {
           pm = prefamonta.value*2.5;
            q = qtenet.value*2.5;
            prefamonta.value = pm.toFixed(2);
            qtenet.value= q.toFixed(2);
        }
        if(document.getElementById("tole").value=="VANNE")
        {
           pm = prefamonta.value*4.5;
            q = qtenet.value*4.5;
            prefamonta.value = pm.toFixed(2);
            qtenet.value= q.toFixed(2);
        }
        if(document.getElementById("tole").value=="BRIDE")
        {
           pm = prefamonta.value*3;
            q = qtenet.value*3;
            prefamonta.value = pm.toFixed(2);
            qtenet.value= q;
        }
        if(document.getElementById("tole").value=="TE")
        {
           pm = prefamonta.value*2;
            q = qtenet.value*2;
            prefamonta.value = pm.toFixed(2);
            qtenet.value= q;
        }
        if(document.getElementById("tole").value=="REDUCTION")
        {
           pm = prefamonta.value*0.8;
            q = qtenet.value*0.8;
            prefamonta.value = pm.toFixed(2);
            qtenet.value= q.toFixed(2);
        }
            }
            if(diamex >= 609 && diamex <= 1017)
            {
    
        if(document.getElementById("tole").value=="COUDE")
        {
           pm = prefamonta.value*3.5;
            q = qtenet.value*3.5;
            prefamonta.value = pm.toFixed(2);
            qtenet.value= q.toFixed(2);
        }
        if(document.getElementById("tole").value=="VANNE")
        {
           pm = prefamonta.value*4.5;
            q = qtenet.value*4.5;
            prefamonta.value = pm.toFixed(2);
            qtenet.value= q.toFixed(2);
        }
        if(document.getElementById("tole").value=="BRIDE")
        {
           pm = prefamonta.value*3.4;
            q = qtenet.value*3.4;
            prefamonta.value = pm.toFixed(2);
            qtenet.value= q.toFixed(2);
        }
        if(document.getElementById("tole").value=="TE")
        {
           pm = prefamonta.value*2;
            q = qtenet.value*2;
            prefamonta.value = pm.toFixed(2);
            qtenet.value= q;
        }
        if(document.getElementById("tole").value=="REDUCTION")
        {
           pm = prefamonta.value*1;
            q = qtenet.value*1;
            prefamonta.value = pm.toFixed(2);
            qtenet.value= q;
        }
            }
        
 //--------------------------------------------------------------------------------------------------------------------------------------------------------------------
        
        var tpm = prefamonta.value * quantite.value;
        var tm = monta.value* quantite.value;
        var tp = prefa.value* quantite.value;
        monta.value = tm;
        prefa.value = tp;
        prefamonta.value = tpm; 
        if(unite.value == "MM")
            {
               var qteB = quantite.value * qtebrute.value;
        prix.value = ( parseFloat(qteB * prixuisolantMm.value)+ parseFloat(echaff.value)+ parseFloat(accessoire.value)+ parseFloat(prixMO.value) + parseFloat(prixutole.value));
        
            }
          if(unite.value == "ML")
            {
                 var qteB = quantite.value * circ.value;
        prix.value = ( parseFloat(qteB * prixuisolantMm.value)+ parseFloat(echaff.value)+ parseFloat(accessoire.value)+ parseFloat(prixMO.value) + parseFloat(prixutole.value));
     
            }   
    });


    
    $(".diametreinter").change(function() {
        
         var x = document.getElementById("diametreinter").value;
        var epaisseur = document.getElementById("epaisseur");
        var diamex = document.getElementById("dnext").value;
        var dnisole = document.getElementById("dnisole");
        var circ = document.getElementById("circ");
        var recouv = document.getElementById("recouv");
        var qtenet = document.getElementById("qtenet");
        var dechet = document.getElementById("dechet");
        var qtebrute = document.getElementById("qtebrute");
        var prefa = document.getElementById("tempsprefa");
        var monta = document.getElementById("tempsmonta");
        var prefamonta = document.getElementById("prefamonta");
        var prixutole = document.getElementById("prixUnitaireTole");
        var prixuisolantMm = document.getElementById("prixUnitaireIsolantMm");
        var prixuisolantML = document.getElementById("prixUnitaireIsolantML");
        var prix = document.getElementById("prix");
        var prixMO = document.getElementById("prixMO");
        var accessoire = document.getElementById("accessoire");
        var echaff = document.getElementById("echaffaudage");
        var unite = document.getElementById("unite");
        var nbcouche = document.getElementById("nbcouche");
        var quantite = document.getElementById("quantite");

        
        if(x==8)
        {
           document.getElementById("dnext").value=10.3;
           document.getElementById("pouce").value=0.125;
        }
        if(x==10)
        {
           document.getElementById("dnext").value=13.7;
           document.getElementById("pouce").value=0.25;
        }
        if(x==12)
        {
           document.getElementById("dnext").value=17.1;
           document.getElementById("pouce").value=0.375;
        }
        if(x==15)
        {
           document.getElementById("dnext").value=21.3;
           document.getElementById("pouce").value=0.5;
        }
        if(x==20)
        {
           document.getElementById("dnext").value=26.7;
           document.getElementById("pouce").value=0.75;
        }
        if(x==25)
        {
           document.getElementById("dnext").value=33.4;
           document.getElementById("pouce").value=1;
        }
        if(x==32)
        {
           document.getElementById("dnext").value=42.2;
           document.getElementById("pouce").value=1.25;
        }
        if(x==40)
        {
           document.getElementById("dnext").value=48.3;
           document.getElementById("pouce").value=1.5;
        }
        if(x==50)
        {
           document.getElementById("dnext").value=60.3;
           document.getElementById("pouce").value=2;
        }
        if(x==65)
        {
           document.getElementById("dnext").value=76.1;
           document.getElementById("pouce").value=2.5;
        }
        if(x==80)
        {
           document.getElementById("dnext").value=88.9;
           document.getElementById("pouce").value=3;
        }
         if(x==90)
        {
           document.getElementById("dnext").value=101.6;
           document.getElementById("pouce").value=3.5;
        }
        if(x==100)
        {
           document.getElementById("dnext").value=114.3;
           document.getElementById("pouce").value=4;
        }
        if(x==125)
        {
           document.getElementById("dnext").value=141.3;
           document.getElementById("pouce").value=5;
        }
        if(x==150)
        {
           document.getElementById("dnext").value=168.3;
           document.getElementById("pouce").value=6;
        }
        if(x==200)
        {
           document.getElementById("dnext").value=219.1;
           document.getElementById("pouce").value=8;
        }
        if(x==250)
        {
           document.getElementById("dnext").value=273.1;
           document.getElementById("pouce").value=10;
        }
        if(x==300)
        {
           document.getElementById("dnext").value=323.8;
           document.getElementById("pouce").value=12;
        }
        if(x==350)
        {
           document.getElementById("dnext").value=356.6;
           document.getElementById("pouce").value=14;
        }
        if(x==400)
        {
           document.getElementById("dnext").value=406.4;
           document.getElementById("pouce").value=16;
        }
        if(x==450)
        {
           document.getElementById("dnext").value=457.2;
           document.getElementById("pouce").value=18;
        }
        if(x==500)
        {
           document.getElementById("dnext").value=508;
           document.getElementById("pouce").value=20;
        }
     
        if(x==600)
        {
           document.getElementById("dnext").value=609.6;
           document.getElementById("pouce").value=24;
        }
        if(x==650)
        {
           document.getElementById("dnext").value=660.4;
           document.getElementById("pouce").value=26;
        }
        if(x==700)
        {
           document.getElementById("dnext").value=711.2;
           document.getElementById("pouce").value=28;
        }
        if(x==750)
        {
           document.getElementById("dnext").value=762;
           document.getElementById("pouce").value=30;
        }
        if(x==800)
        {
           document.getElementById("dnext").value=812.8;
           document.getElementById("pouce").value=32;
        }
        if(x==850)
        {
           document.getElementById("dnext").value=863.6;
           document.getElementById("pouce").value=34;
        }
        if(x==900)
        {
           document.getElementById("dnext").value=914.4;
           document.getElementById("pouce").value=36;
        }
        if(x==1000)
        {
           document.getElementById("dnext").value=1016.4;
           document.getElementById("pouce").value=40;
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
        
        
         if(diamex==10.3)
        {
           document.getElementById("diametreinter").value=8;
           document.getElementById("pouce").value=0.125;
        }
         if(diamex==13.7)
        {
           document.getElementById("diametreinter").value=10;
           document.getElementById("pouce").value=0.25;
        }
         if(diamex==17.1)
        {
           document.getElementById("diametreinter").value=12;
           document.getElementById("pouce").value=0.375;
        }
         if(diamex==21.3)
        {
           document.getElementById("diametreinter").value=15;
           document.getElementById("pouce").value=0.5;
        }
        if(diamex==26.7)
        {
           document.getElementById("diametreinter").value=20;
           document.getElementById("pouce").value=0.75;
        }
        if(diamex==33.4)
        {
           document.getElementById("diametreinter").value=25;
           document.getElementById("pouce").value=1;
        }
        if(diamex==42.2)
        {
           document.getElementById("diametreinter").value=32;
           document.getElementById("pouce").value=1.25;
        }
        if(diamex==48.3)
        {
           document.getElementById("diametreinter").value=40;
           document.getElementById("pouce").value=1.5;
        }
        if(diamex==60.3)
        {
           document.getElementById("diametreinter").value=50;
           document.getElementById("pouce").value=2;
        }
        if(diamex==76.1)
        {
           document.getElementById("diametreinter").value=65;
           document.getElementById("pouce").value=2.5;
        }
        if(diamex==88.9)
        {
           document.getElementById("diametreinter").value=80;
           document.getElementById("pouce").value=3;
        }
        if(diamex==101.6)
        {
           document.getElementById("diametreinter").value=90;
           document.getElementById("pouce").value=3.5;
        }
        if(diamex==114.3)
        {
           document.getElementById("diametreinter").value=100;
           document.getElementById("pouce").value=4;
        }
        if(diamex==141.3)
        {
           document.getElementById("diametreinter").value=120;
           document.getElementById("pouce").value=5;
        }
        if(diamex==168.3)
        {
           document.getElementById("diametreinter").value=150;
           document.getElementById("pouce").value=6;
        }
        if(diamex==219.1)
        {
           document.getElementById("diametreinter").value=200;
           document.getElementById("pouce").value=8;
        }
        if(diamex==273.1)
        {
           document.getElementById("diametreinter").value=250;
           document.getElementById("pouce").value=10;
        }
        if(diamex==323.8)
        {
           document.getElementById("diametreinter").value=300;
           document.getElementById("pouce").value=12;
        }
        if(diamex==356.6)
        {
           document.getElementById("diametreinter").value=350;
           document.getElementById("pouce").value=14;
        }
        if(diamex==406.4)
        {
           document.getElementById("diametreinter").value=400;
           document.getElementById("pouce").value=16;
        }
        if(diamex==457.2)
        {
           document.getElementById("diametreinter").value=450;
           document.getElementById("pouce").value=18;
        }
        if(diamex==508)
        {
           document.getElementById("diametreinter").value=500;
           document.getElementById("pouce").value=20;
        }
        if(diamex==609.6)
        {
           document.getElementById("diametreinter").value=600;
           document.getElementById("pouce").value=24;
        }
        if(diamex==660.4)
        {
           document.getElementById("diametreinter").value=650;
           document.getElementById("pouce").value=26;
        }
        if(diamex==711.2)
        {
           document.getElementById("diametreinter").value=700;
           document.getElementById("pouce").value=28;
        }
        if(diamex==762)
        {
           document.getElementById("diametreinter").value=750;
           document.getElementById("pouce").value=30;
        }
        if(diamex==812.8)
        {
           document.getElementById("diametreinter").value=800;
           document.getElementById("pouce").value=32;
        }
        if(diamex==863.6)
        {
           document.getElementById("diametreinter").value=850;
           document.getElementById("pouce").value=34;
        }
        if(diamex==914.4)
        {
           document.getElementById("diametreinter").value=900;
           document.getElementById("pouce").value=36;
        }
        if(diamex==1016.4)
        {
           document.getElementById("diametreinter").value=1000;
           document.getElementById("pouce").value=40;
        }
        
        
        
    });
    
    });