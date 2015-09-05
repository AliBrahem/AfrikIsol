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
            <form action=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("tech_calculTole", array("id" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")))), "html", null, true);
        echo "\"  method=\"POST\" >
                <h1> Calcul de tôle </h1>
            <table id=\"example2\" class=\"table table-bordered table-hover\">
                <tr>
                    <td>    Tôle </td>
                    <td>    <select id=\"tole\" name='tole' class=\"tole\">
                            <option value=\"TUYAUTERIES\">TUYAUTERIES</option>
                            <option value=\"COUDE\">COUDE</option>
                            <option value=\"REDUCTION\">REDUCTION</option>
                            <!--<option value=\"50\">50</option>-->
                            
                            </select>  
                    </td>
                </tr>
                <tr>
                    <td>    Diamètre intérieur </td>
                    <td>    
                        <select id=\"diametreinter\" name=\"diametreinter\" class=\"diametreinter\">
                            <option value=\"15\">15</option>
                            <option value=\"20\">20</option>
                            <option value=\"25\">25</option>
                            <option value=\"33\">33</option>
                            <option value=\"40\">40</option>
                            <option value=\"50\">50</option>
                            <option value=\"66\">66</option>
                            <option value=\"80\">80</option>
                            <option value=\"102\">102</option>
                            <option value=\"125\">125</option>
                            <option value=\"150\">150</option>
                            <option value=\"200\">200</option>
                            <option value=\"250\">250</option>
                            <option value=\"300\">300</option>
                            <option value=\"350\">350</option>
                            <option value=\"400\">400</option>
                            <option value=\"450\">450</option>
                            <option value=\"500\">500</option>
                            <option value=\"550\">550</option>
                            <option value=\"600\">600</option>
                            <option value=\"650\">650</option>
                            <option value=\"700\">700</option>
                            <option value=\"750\">750</option>
                            <option value=\"800\">800</option>
                            <option value=\"900\">900</option>
                            <option value=\"1000\">1000</option>

                        </select> 
                    </td>
                </tr>
                 <tr>
                    <td>    Diamètre extérieur </td>
                    <td>    <select id=\"dnext\" name=\"dnext\" class=\"dnext\">
                            <option value=\"21\">21</option>
                            <option value=\"27\">27</option>
                            <option value=\"34\">34</option>
                            <option value=\"42\">42</option>
                            <option value=\"49\">49</option>
                            <option value=\"60\">60</option>
                            <option value=\"76\">76</option>
                            <option value=\"89\">89</option>
                            <option value=\"114\">114</option>
                            <option value=\"140\">140</option>
                            <option value=\"168\">168</option>
                            <option value=\"219\">219</option>
                            <option value=\"273\">273</option>
                            <option value=\"323\">323</option>
                            <option value=\"356\">356</option>
                            <option value=\"406\">406</option>
                            <option value=\"456\">456</option>
                            <option value=\"508\">508</option>
                            <option value=\"556\">556</option>
                            <option value=\"610\">610</option>
                            <option value=\"660\">660</option>
                            <option value=\"710\">710</option>
                            <option value=\"756\">756</option>
                            <option value=\"810\">810</option>
                            <option value=\"910\">910</option>
                            <option value=\"1100\">1100</option>

                        </select> 
                    </td>
                </tr>    
                <tr>
                    <td>    Epaisseur </td>
                    <td>    <select id=\"epaisseur\" name='epaisseur' class=\"epaisseur\">
                            <option value=\"19\">19</option>
                            <option value=\"20\">20</option>
                            <option value=\"30\">30</option>
                            <option value=\"32\">32</option>
                            <option value=\"40\">40</option>
                            <option value=\"50\">50</option>
                            <option value=\"60\">60</option>
                            <option value=\"70\">70</option>
                            <option value=\"80\">80</option>
                            <option value=\"90\">90</option>
                            <option value=\"100\">100</option>
                            <option value=\"120\">120</option>
                         </select> 
                 </td>
                </tr>
                <tr>
                    <td>    Diamètre isolé </td>
                    <td>    <input type=\"number\"  name=\"dnisole\" id=\"dnisole\"/> </td>
                </tr>
                <tr>
                    <td>    Circonférence </td>
                    <td>    <input type=\"number\" step=\"any\"  name=\"circ\" id=\"circ\"/> </td>
                </tr>
                <tr>
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
                    <td>    Largeur Tôle </td>
                    <td>  <input type=\"number\" step=\"any\" name=\"largeurtole\" id=\"largeurtole\"/> </td>
                </tr>
                <tr>
                    <td>    Quantité Nette </td>
                    <td> <input type=\"number\" step=\"any\" name=\"qtenet\" id=\"qtenet\"/>   </td>
                </tr>
                <tr>
                    <td>    Déchet </td>
                    <td>   <input type=\"number\" step=\"any\" name=\"dechet\" id=\"dechet\"/>  </td>
                </tr>
                <tr>
                    <td>    Quantité Brute </td>
                    <td> <input type=\"number\" step=\"any\" name=\"qtebrute\" id=\"qtebrute\"/>  </td>
                </tr>
                <tr>
                    
                    <td>    Temps de préfabrication </td>
                    <td>  <input type=\"number\" step=\"any\" name=\"tempsprefa\" id=\"tempsprefa\"/> </td>
                </tr>
                <tr>
                    
                    <td>    Temps de montage </td>
                    <td>  <input type=\"number\" step=\"any\" name=\"tempsmonta\" id=\"tempsmonta\"/> </td>
                </tr>
                <tr>
                    
                    <td>    Temps de préfa + montage </td>
                    <td>  <input type=\"number\" step=\"any\" name=\"prefamonta\" id=\"prefamonta\"/> </td>
                </tr>
                <tr>
                    
                    <td>    Prix unitaire de tôle </td>
                    <td>  <input type=\"number\" step=\"any\" name=\"prixUnitaireTole\" id=\"prixUnitaireTole\"/> </td>
                </tr>
                <tr>
                    
                    <td>    Prix unitaire de l'isolant </td>
                    <td>  <input type=\"number\" step=\"any\" name=\"prixUnitaireIsolant\" id=\"prixUnitaireIsolant\"/> </td>
                </tr>
                <tr>
                    
                    <td>    Prix main d'oeuvre </td>
                    <td>  <input type=\"number\" step=\"any\" name=\"prixMO\" id=\"prixMO\"/> </td>
                </tr>
                 <tr>
                    
                    <td>    Quantité </td>
                    <td>  <input type=\"number\" step=\"any\" name=\"quantite\" id=\"quantite\"/> </td>
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
