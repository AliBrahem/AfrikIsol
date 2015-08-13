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
*/