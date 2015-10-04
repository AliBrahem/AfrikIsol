<?php

/* AdminBundle:Technique:addGantt.html.twig */
class __TwigTemplate_ef572e03e3b837a9e3929855b719cf84e53e667b1a471c2604df2e54be40ade7 extends Twig_Template
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
        return $this->loadTemplate((($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) ? ("AdminBundle::layoutSUP.html.twig") : ("AdminBundle::layoutTech.html.twig")), "AdminBundle:Technique:addGantt.html.twig", 3);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_user_content($context, array $blocks = array())
    {
        // line 5
        echo "    <div class=\"row\">
        <div class=\"col-lg-3 col-xs-6\">
        <form action=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("tech_addGantt", array("id" => (isset($context["id"]) ? $context["id"] : null))), "html", null, true);
        echo "\"  method=\"POST\">
             <h1> Planification </h1>
             <br>
            <table id=\"example2\" class=\"table table-bordered table-hover\">
                
                    <tr>
                  
                    <td>  <label for=\"exampleInputEmail1\">Item 1 </label>  </td>
                    <td><textarea name=\"titem1\"></textarea></td>
                    
                    <td>&nbsp</td><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td>
                    
                    <td>  <label for=\"exampleInputEmail1\">Date Début 1 </label>  </td>
                    <td><input type=\"date\" name=\"dated1\"></td>
                    <td>&nbsp</td><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td>
                    
                     <td>  <label for=\"exampleInputEmail1\">Date Fin 1 </label>  </td>
                    <td><input type=\"date\" name=\"datef1\"></td>
                    
                    </tr>
                    <tr>
                        <td>  <label for=\"exampleInputEmail1\">Item 2 </label>  </td>
                    <td><textarea name=\"titem2\"></textarea></td>
                    <td>&nbsp</td><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td>
                    
                    <td>  <label for=\"exampleInputEmail1\">Date Début 2 </label>  </td>
                    <td><input type=\"date\" name=\"dated2\"></td>
                    
                    <td>&nbsp</td><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td>
                    
                    <td>  <label for=\"exampleInputEmail1\">Date Fin 2</label>  </td>
                    <td><input type=\"date\" name=\"datef2\"></td>
                    
                  
                    </tr>
                    <tr>
                         <td>  <label for=\"exampleInputEmail1\">Item 3 </label>  </td>
                    <td><textarea name=\"titem3\"></textarea></td>
                    <td>&nbsp</td><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td>
                    
                    <td>  <label for=\"exampleInputEmail1\">Date Début 3 </label>  </td>
                    <td><input type=\"date\" name=\"dated3\"></td>
                    
                    <td>&nbsp</td><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td>
                    
                    <td>  <label for=\"exampleInputEmail1\">Date Fin 3</label>  </td>
                    <td><input type=\"date\" name=\"datef3\"></td>
                     </tr>
                    
                <tr>
                   <td>  <label for=\"exampleInputEmail1\">Item 4 </label>  </td>
                    <td><textarea name=\"titem4\"></textarea></td>
                    <td>&nbsp</td><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td>
                    
                    <td>  <label for=\"exampleInputEmail1\">Date Début 4 </label>  </td>
                    <td><input type=\"date\" name=\"dated4\"></td>
                    
                    <td>&nbsp</td><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td>
                    
                    <td>  <label for=\"exampleInputEmail1\">Date Fin 4</label>  </td>
                    <td><input type=\"date\" name=\"datef4\"></td>     
                </tr>
                <tr>
                        <td>  <label for=\"exampleInputEmail1\">Item 5 </label>  </td>
                    <td><textarea name=\"titem5\"></textarea></td>
                    <td>&nbsp</td><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td>
                    
                    <td>  <label for=\"exampleInputEmail1\">Date Début 5 </label>  </td>
                    <td><input type=\"date\" name=\"dated5\"></td>
                    
                    <td>&nbsp</td><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td>
                    
                    <td>  <label for=\"exampleInputEmail1\">Date Fin 5</label>  </td>
                    <td><input type=\"date\" name=\"datef5\"></td>
                 
                    </tr>
                <tr>
                        <td>  <label for=\"exampleInputEmail1\">Item 6 </label>  </td>
                    <td><textarea name=\"titem6\"></textarea></td>
                    <td>&nbsp</td><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td>
                    
                    <td>  <label for=\"exampleInputEmail1\">Date Début 6 </label>  </td>
                    <td><input type=\"date\" name=\"dated6\"></td>
                    
                    <td>&nbsp</td><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td>
                    
                    <td>  <label for=\"exampleInputEmail1\">Date Fin 6 </label>  </td>
                    <td><input type=\"date\" name=\"datef6\"></td>
                    </tr>
                
                    <tr>
                        <td>  <label for=\"exampleInputEmail1\">Item 7 </label>  </td>
                    <td><textarea name=\"titem7\"></textarea></td>
                    <td>&nbsp</td><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td>
                    
                    <td>  <label for=\"exampleInputEmail1\">Date Début 7 </label>  </td>
                    <td><input type=\"date\" name=\"dated7\"></td>
                    
                    <td>&nbsp</td><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td>
                    
                    <td>  <label for=\"exampleInputEmail1\">Date Fin 7</label>  </td>
                    <td><input type=\"date\" name=\"datef7\"></td>

                    </tr>
                    
                    <tr>
                        <td>  <label for=\"exampleInputEmail1\">Item 8 </label>  </td>
                    <td><textarea name=\"titem8\"></textarea></td>
                    <td>&nbsp</td><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td>
                    
                    <td>  <label for=\"exampleInputEmail1\">Date Début 8 </label>  </td>
                    <td><input type=\"date\" name=\"dated8\"></td>
                    
                    <td>&nbsp</td><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td>
                    
                    <td>  <label for=\"exampleInputEmail1\">Date Fin 8</label>  </td>
                    <td><input type=\"date\" name=\"datef8\"></td>
                    
                    </tr>
                    
                    <tr>
                        <td>  <label for=\"exampleInputEmail1\">Item 9 </label>  </td>
                    <td><textarea name=\"titem9\"></textarea></td>
                    <td>&nbsp</td><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td>
                    
                    <td>  <label for=\"exampleInputEmail1\">Date Début 9 </label>  </td>
                    <td><input type=\"date\" name=\"dated9\"></td>
                    
                    <td>&nbsp</td><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td>
                    
                    <td>  <label for=\"exampleInputEmail1\">Date Fin 9 </label>  </td>
                    <td><input type=\"date\" name=\"datef9\"></td>
                    
                  
                    </tr>
                    
                    <tr>
                        <td>  <label for=\"exampleInputEmail1\">Item 10 </label>  </td>
                    <td><textarea name=\"titem10\"></textarea></td>
                    <td>&nbsp</td><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td>
                    
                    <td>  <label for=\"exampleInputEmail1\">Date Début 10 </label>  </td>
                    <td><input type=\"date\" name=\"dated10\"></td>
                    
                    <td>&nbsp</td><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td>
                    
                    <td>  <label for=\"exampleInputEmail1\">Date Fin 10 </label>  </td>
                    <td><input type=\"date\" name=\"datef10\"></td>
                    
                  
                    </tr>
                    
            </table>
    <div>
        <input type=\"submit\" class=\"btn btn-primary btn-block btn-flat\" value=\"Ajouter Planification\" />
    </div>
    </form>
        </div>    
    </div>
    
    
";
    }

    public function getTemplateName()
    {
        return "AdminBundle:Technique:addGantt.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 7,  30 => 5,  27 => 4,  18 => 3,);
    }
}
