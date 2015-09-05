<?php
// src/BackOffice/AdminBundle/Entity/User.php

namespace BackOffice\AdminBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="user")
 */
class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    public function __construct()
    {
        parent::__construct();
        // your own logic
    }
}/*
{% extends "AdminBundle::layoutTech.html.twig" %}

{% block user_content %}
    <div class="row">
        <div class="col-lg-3 col-xs-6">
        <form action="" {{ form_enctype(form) }} method="POST">
             <h1> Planification </h1>
             <br>
            <table id="example2" class="table table-bordered table-hover">
                <tr>
                  
                    <td>  <label for="exampleInputEmail1">Préavis d'attribution </label>  </td>
                    <td>{{ form_widget(form.preavis) }}</td>
                    </tr>
                    <tr>
                    <td>  <label for="exampleInputEmail1">Avis d'attribution KICK OFF meeting </label>  </td>
                    <td>{{ form_widget(form.avisKickoff) }}</td>
                    <td>&nbsp</td><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td>
                    
                    <td>  <label for="exampleInputEmail1">Retrait de la tôle pour la préfabrication </label>  </td>
                    <td>{{ form_widget(form.retraitTole) }}</td>
                    </tr>
                    <tr>
                   <td>  <label for="exampleInputEmail1">Retrait du plan des priorités </label>  </td>
                    <td>{{ form_widget(form.retraitPlan) }}</td>
                    <td>&nbsp</td><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td>
                    
                    <td>  <label for="exampleInputEmail1">Début d'installation sur site </label>  </td>
                    <td>{{ form_widget(form.debutInstallation) }}</td>
                    </tr>
                    <tr>
                    <td>  <label for="exampleInputEmail1">Début de préfabrication à Bizerte </label>  </td>
                    <td>{{ form_widget(form.debutPrefa) }}</td>
                    <td>&nbsp</td><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td>
                    
                    <td>  <label for="exampleInputEmail1">Début montage </label>  </td>
                    <td>{{ form_widget(form.debutMonta) }}</td>
                    </tr>
                    <tr>
                    <td>  <label for="exampleInputEmail1">Livraison de première commande de préfabrication </label>  </td>
                    <td>{{ form_widget(form.livraisonCommandePrefa) }}</td>
                    <td>&nbsp</td><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td>
                    
                    <td>  <label for="exampleInputEmail1">Début montage avec les premières équipes </label>  </td>
                    <td>{{ form_widget(form.debutMontagePremierGroupe) }}</td>
                    </tr>
                    <tr>
                    <td>  <label for="exampleInputEmail1">Début montage avec les deuxièmes équipes </label>  </td>
                    <td>{{ form_widget(form.debutMontageDeuxiemeGroupe) }}</td>
                    <td>&nbsp</td><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td>
                    
                    <td>  <label for="exampleInputEmail1">Début de démobilisation </label>  </td>
                    <td>{{ form_widget(form.debutDemobilisation) }}</td>
                    </tr>
                    <tr>
                    <td>  <label for="exampleInputEmail1">Fin de démobilisation </label>  </td>
                    <td>{{ form_widget(form.finDemobilisation) }}</td>
                    <td>&nbsp</td><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td>
                    
                    <td>  <label for="exampleInputEmail1">Fin du projet </label>  </td>
                    <td>{{ form_widget(form.dateFin) }}</td>
                    </tr>
                    
                <tr>
                         {{ form_rest(form) }}
                </tr>
            </table>
    <div>
        <input type="submit" class="btn btn-primary btn-block btn-flat" value="Ajouter Planification" />
    </div>
    </form>
        </div>    
    </div>
    
    
{% endblock user_content %}{# empty Twig template #}
 * 
 * {% for Plan in plan %}
                             {% if not loop.last%}
                    {{Plan.chargePrefaHr}}+{{Plan.chargePrefaHommes}},
                         {% else %}   
                             {{Plan.chargePrefaHr}}+{{Plan.chargePrefaHommes}}
                             {% endif %} 
                          {% endfor %}
*/








/*
 * 
 <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"
type="text/javascript"></script>
<script src="//code.highcharts.com/4.0.1/highcharts.js"></script>
<script src="//code.highcharts.com/4.0.1/modules/exporting.js"></script>
<script type="text/javascript">
 $(function () {
    $('#container').highcharts({
        title: {
            text: 'Suivie du projet n° {{avanc[0].idprojet}}' ,
            x: -20 //center
        },
        subtitle: {
            text: 'Afrikisol',
            x: -20
        },
        xAxis: {
            categories: [{% for Avanc in avanc %}
                            
                             {% if not loop.last%}
                                 '{{Avanc.date|date("d/m/Y")}}',
                    
                             {% else %}
                                 '{{Avanc.date|date("d/m/Y")}}'
                             {% endif %} 
                                 {% endfor %}
                        , 
                           {% for Mad in mad %}
                               {% if not loop.last%}
                           '{{Mad.date|date("d/m/Y")}}',
                               {% else %}
                                   '{{Mad.date|date("d/m/Y")}}'
                                   {% endif %}
                            {% endfor %}
                            , 
                           {% for Plan in plan %}
                               {% if not loop.last%}
                           '{{Plan.date|date("d/m/Y")}}',
                               {% else %}
                                   '{{Plan.date|date("d/m/Y")}}'
                                   {% endif %}
                            {% endfor %}]
                              
        },
        yAxis: {
            title: {
                text: 'Quantité (%)'
            },
            minTickInterval: 0,
            min: 0,
            max: 100,
            plotLines: [{
                value: 0,
                width: 1,
                color: '#808080'
            }]
        },
        tooltip: {
            valueSuffix: '%'
        },
        legend: {
            layout: 'vertical',
            align: 'right',
            verticalAlign: 'middle',
            borderWidth: 0
        },
        series: [{
            name: 'Avancement réel',
             {% set var = 0 %}
            data: [{% for Avanc in avanc %}
               
            {% set var = var + Avanc.quantite %}
                             {% if not loop.last%}
                    ({{var}}/{{projet.quantite}})*100,
                         {% else %}   
                             ({{var}}/{{projet.quantite}})*100
                             {% endif %}
                         
                          {% endfor %} ]
        }, {
            name: 'Mise à disposition',
             {% set var2 = 0 %}
            data: [{% for Mad in mad %}
                {% set var2 = var2 + Mad.quantite%}
                             {% if not loop.last%}
                    ({{var2}}/{{projet.quantite}})*100,
                         {% else %}   
                             ({{var2}}/{{projet.quantite}})*100
                             {% endif %} 
                          {% endfor %} ]
        }, {
            name: 'Avancement prévisionnel',
             {% set var3 = 0 %}
            data: [{% for Plan in plan %}
                {% set var3 = var3 + Plan.quantite%}
                             {% if not loop.last%}
                    ({{var3}}/{{projet.quantite}})*100,
                         {% else %}   
                             ({{var3}}/{{projet.quantite}})*100
                             {% endif %} 
                          {% endfor %} ]
        }]
    });
});
</script>
<div id="container" style="min-width: 400px; height: 400px; margin: 0 auto"></div>
 * 
 * 
 * 
 */