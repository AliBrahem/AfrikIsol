<?php

/* AdminBundle:Technique:calculTole.html.twig */
class __TwigTemplate_2a848088072867b62c6274dcf4e9df18dfafe10dea1830ded4f571d5f9e3187b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'user_content' => array($this, 'block_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 3
        return $this->loadTemplate((($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) ? ("AdminBundle::layoutSUP.html.twig") : ("AdminBundle::layoutTech.html.twig")), "AdminBundle:Technique:calculTole.html.twig", 3);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_user_content($context, array $blocks = array())
    {
        // line 5
        echo "
    <!-- Small boxes (Stat box) -->
    <div align=\"center\" >
        <div class=\"col-lg-3 col-xs-6\" align=\"center\">
            <form id=\"calculform\" class=\"calculform\"  action=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("tech_calculTole", array("id" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")))), "html", null, true);
        echo "\"  method=\"POST\" >
                <h1> Calcul de tôle </h1>
            <table id=\"example2\" class=\"table table-bordered table-hover\">
                <tr>
                    <td>    Travaux </td>
                    <td>    <select id=\"tole\" name='tole' class=\"tole\">
                            <option value=\"TUYAUTERIES\">TUYAUTERIES</option>
                            <option value=\"COUDE\">COUDE</option>
                            <option value=\"REDUCTION\">REDUCTION</option>
                            <option value=\"VANNE\">Vanne</option>
                            <option value=\"BRIDE\">Bride</option>
                            <option value=\"TE\">Té</option>
                            <option value=\"SURFACE\">Surface Plane</option>
                            <!--<option value=\"50\">50</option>-->
                            
                            </select>  
                    </td>
                    
                    <td>&nbsp</td><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td>
                    <td>Désignation</td>
                    <td><textarea name=\"designation\"></textarea></td>
                    
                </tr>
                <tr>
                    <td>    Diamètre intérieur </td>
                    <td>    
                        <select id=\"diametreinter\" name=\"diametreinter\" class=\"diametreinter\">
                            <option value=\"8\">8</option>
                            <option value=\"10\">10</option>
                            <option value=\"12\">12</option>
                            <option value=\"15\">15</option>
                            <option value=\"20\">20</option>
                            <option value=\"25\">25</option>
                            <option value=\"32\">32</option>
                            <option value=\"40\">40</option>
                            <option value=\"50\">50</option>
                            <option value=\"65\">65</option>
                            <option value=\"80\">80</option>
                            <option value=\"90\">90</option>
                            <option value=\"100\">100</option>
                            <option value=\"125\">125</option>
                            <option value=\"150\">150</option>
                            <option value=\"200\">200</option>
                            <option value=\"250\">250</option>
                            <option value=\"300\">300</option>
                            <option value=\"350\">350</option>
                            <option value=\"400\">400</option>
                            <option value=\"450\">450</option>
                            <option value=\"500\">500</option>
                            <option value=\"600\">600</option>
                            <option value=\"650\">650</option>
                            <option value=\"700\">700</option>
                            <option value=\"750\">750</option>
                            <option value=\"800\">800</option>
                            <option value=\"850\">850</option>
                            <option value=\"900\">900</option>
                            <option value=\"1000\">1000</option>

                        </select> 
                    </td>
                </tr>
                 <tr>
                    <td>    Diamètre extérieur </td>
                    <td>    <select id=\"dnext\" name=\"dnext\" class=\"dnext\">
                            <option value=\"10.3\">10.3</option>
                            <option value=\"13.7\">13.7</option>
                            <option value=\"17.1\">17.1</option>
                            <option value=\"21.3\">21.3</option>
                            <option value=\"26.7\">26.7</option>
                            <option value=\"33.4\">33.4</option>
                            <option value=\"42.2\">42.2</option>
                            <option value=\"48.3\">48.3</option>
                            <option value=\"60.3\">60.3</option>
                            <option value=\"76.1\">76.1</option>
                            <option value=\"88.9\">88.9</option>
                            <option value=\"101.6\">101.6</option>
                            <option value=\"114.3\">114.3</option>
                            <option value=\"141.3\">141.3</option>
                            <option value=\"168.3\">168.3</option>
                            <option value=\"219.1\">219.1</option>
                            <option value=\"273.1\">273.1</option>
                            <option value=\"323.8\">323.8</option>
                            <option value=\"356.6\">356.6</option>
                            <option value=\"406.4\">406.4</option>
                            <option value=\"457.2\">457.2</option>
                            <option value=\"508\">508</option>
                            <option value=\"609.6\">609.6</option>
                            <option value=\"660.4\">660.4</option>
                            <option value=\"711.2\">711.2</option>
                            <option value=\"762\">762</option>
                            <option value=\"812.8\">812.8</option>
                            <option value=\"863.6\">863.6</option>
                            <option value=\"914.4\">914.4</option>
                            <option value=\"1016.4\">1016</option>
                        </select> 
                    </td>
                    
                    <td>&nbsp</td><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td>
                  
                    <td>    Pouce inter </td>
                    <td>    
                        <select id=\"pouce\" name=\"pouce\" class=\"pouce\">
                            <option value=\"0.125\">0.125</option>
                            <option value=\"0.25\">0.25</option>
                            <option value=\"0.375\">0.375</option>
                            <option value=\"0.5\">0.5</option>
                            <option value=\"0.75\">0.75</option>
                            <option value=\"1\">1</option>
                            <option value=\"1.25\">1.25</option>
                            <option value=\"1.5\">1.5</option>
                            <option value=\"2\">2</option>
                            <option value=\"2.5\">2.5</option>
                            <option value=\"3\">3</option>
                            <option value=\"3.5\">3.5</option>
                            <option value=\"4\">4</option>
                            <option value=\"5\">5</option>
                            <option value=\"6\">6</option>
                            <option value=\"8\">8</option>
                            <option value=\"10\">10</option>
                            <option value=\"12\">12</option>
                            <option value=\"14\">14</option>
                            <option value=\"16\">16</option>
                            <option value=\"18\">18</option>
                            <option value=\"20\">20</option>
                            <option value=\"24\">24</option>
                            <option value=\"26\">26</option>
                            <option value=\"28\">28</option>
                            <option value=\"30\">30</option>
                            <option value=\"32\">32</option>
                            <option value=\"34\">34</option>
                            <option value=\"36\">36</option>
                            <option value=\"40\">40</option>

                        </select> 
                    </td>
                </tr>    
                <tr>

                  <td>    Epaisseur </td>
                  <td>    <input type=\"number\" step=\"any\"  name=\"epaisseur\" id=\"epaisseur\"/> </td>
                  
                 
                  <td>&nbsp</td><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td>
                    
                  <td>    Diamètre isolé </td>
                    <td>    <input type=\"number\" step=\"any\"  name=\"dnisole\" id=\"dnisole\"/> </td>
                </tr>
             
                <tr>
                    <td>    Circonférence </td>
                    <td>    <input type=\"number\" step=\"any\"  name=\"circ\" id=\"circ\"/> </td>
                    <td>&nbsp</td><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td>
                    
                     <td>    Recouvrement </td>
                    <td>    <select id=\"recouv\" name='recouv' class=\"recouv\">
                            <option value=\"3\">3</option>
                            <option value=\"5\">5</option>
                            <option value=\"30\">30</option>
                            <option value=\"50\">50</option>
                            
                            </select>  
                    </td>
                </tr>
            
                <tr>
                    <td>    Quantité Nette </td>
                    <td> <input type=\"number\" step=\"any\" name=\"qtenet\" id=\"qtenet\"/>   </td>
                    <td>&nbsp</td><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td>
                    
                    <td>    Déchet </td>
                    <td>   <input type=\"number\" step=\"any\" name=\"dechet\" id=\"dechet\"/>  </td>
            
                </tr>
              
                <tr>
                    <td>    Quantité Brute </td>
                    <td> <input type=\"number\" step=\"any\" name=\"qtebrute\" id=\"qtebrute\"/>  </td>
                </tr>
                <tr>
                    
                    <td>    Quantité des travaux </td>
                    <td>  <input type=\"number\" step=\"any\" name=\"quantite\" id=\"quantite\"/> </td>
                    <td>&nbsp</td><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td>
                    
                     <td>    Unité </td>
                    <td>    <select id=\"unite\" name='unite' class=\"unite\">
                            <option value=\"MM\">MM</option>
                            <option value=\"ML\">ML</option>
                            <option value=\"Piece\">Piece</option>
                            </select>  
                    </td>
                </tr>
                <tr>
                    
                    <td>    Temps de préfabrication </td>
                    <td>  <input type=\"number\" step=\"any\" name=\"tempsprefa\" id=\"tempsprefa\"/> </td>
                    <td>&nbsp</td><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td>
                     <td>    Temps de montage </td>
                    <td>  <input type=\"number\" step=\"any\" name=\"tempsmonta\" id=\"tempsmonta\"/> </td>
              
                </tr>
                <tr>
                   <td>   Nombre de couches</td>
                    <td>  <input type=\"number\" step=\"any\" name=\"nbcouche\" id=\"nbcouche\"/> </td>
                     
                </tr>
                <tr>
                    
                    <td>    Temps de préfa + montage </td>
                    <td>  <input type=\"number\" step=\"any\" name=\"prefamonta\" id=\"prefamonta\"/> </td>
                </tr>
                <tr>
                    
                    <td>    Prix unitaire de tôle</td>
                    <td>  <input type=\"number\" step=\"any\" name=\"prixUnitaireTole\" id=\"prixUnitaireTole\"/> </td>
                </tr>
                <tr>
                        <td>    Prix unitaire de Isolant/M²</td>
                    <td>  <input type=\"number\" step=\"any\" name=\"prixUnitaireIsolantMm\" id=\"prixUnitaireIsolantMm\"/> </td>
                    <td>&nbsp</td><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td>
                    <td>    Prix unitaire de Isolant/ML</td>
                    <td>  <input type=\"number\" step=\"any\" name=\"prixUnitaireIsolantML\" id=\"prixUnitaireIsolantML\"/> </td>
                   
                </tr>
                <tr>
                    
                    <td>    Prix main d'oeuvre </td>
                    <td>  <input type=\"number\" step=\"any\" name=\"prixMO\" id=\"prixMO\"/> </td>
                 </tr>
                 <tr>
                           <td>    Accessoires/M² </td>
                    <td>  <input type=\"number\" step=\"any\" name=\"accessoire\" id=\"accessoire\"/> </td>
                    <td>&nbsp</td><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td>
                      <td>    Echaffaudage/M²  </td>
                    <td>  <input type=\"number\" step=\"any\" name=\"echaffaudage\" id=\"echaffaudage\"/> </td>
                
                 </tr>
                <tr>
                    
                    <td>    Prix total </td>
                    <td>  <input type=\"number\" step=\"any\" name=\"prix\" id=\"prix\"/> </td>
                </tr>
                <tr>
                    
                    <td>    </td>
                    <td>  <input type=\"submit\"  class=\"btn btn-primary btn-block btn-flat\" value=\"Ajouter\"/> </td>
                </tr>
                
            </table>
            </form>
        </div><!-- ./col -->
    </div>

        <!-- Main row -->
        <div class=\"row\">

        </div><!-- /.row (main row) -->
    ";
    }

    public function getTemplateName()
    {
        return "AdminBundle:Technique:calculTole.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 9,  30 => 5,  27 => 4,  18 => 3,);
    }
}
