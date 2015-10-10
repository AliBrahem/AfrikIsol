<?php

/* AdminBundle:Technique:addGanttJ.html.twig */
class __TwigTemplate_9d4652f7e51d58244c8f70ed25d6f44057a71d8aea42db94c1bf684c6e89b888 extends Twig_Template
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
        return $this->loadTemplate((($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) ? ("AdminBundle::layoutSUP.html.twig") : ("AdminBundle::layoutTech.html.twig")), "AdminBundle:Technique:addGanttJ.html.twig", 3);
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
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("tech_addGanttJ", array("id" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")))), "html", null, true);
        echo "\"  method=\"POST\">
             <h1> Planification par jour </h1>
             <br>
            <table id=\"example2\" class=\"table table-bordered table-hover\">
                
                    <tr>
                  
                    <td>  <label for=\"exampleInputEmail1\">Travaux 1 </label>  </td>
                    <td><textarea name=\"titem1\"></textarea></td>
                    
                    <td>&nbsp</td><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td>
                    
                    <td>  <label for=\"exampleInputEmail1\">Début Travaux 1 </label>  </td>
                    <td><input type=\"number\" name=\"dated1\"></td>
                    <td>&nbsp</td><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td>
                    
                     <td>  <label for=\"exampleInputEmail1\">Fin Travaux 2 </label>  </td>
                    <td><input type=\"number\" name=\"datef1\"></td>
                    
                    </tr>
                    <tr>
                        <td>  <label for=\"exampleInputEmail1\">Travaux 2 </label>  </td>
                    <td><textarea name=\"titem2\"></textarea></td>
                    <td>&nbsp</td><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td>
                    
                    <td>  <label for=\"exampleInputEmail1\">Début Travaux 2 </label>  </td>
                    <td><input type=\"number\" name=\"dated2\"></td>
                    
                    <td>&nbsp</td><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td>
                    
                    <td>  <label for=\"exampleInputEmail1\">Fin Travaux 2</label>  </td>
                    <td><input type=\"number\" name=\"datef2\"></td>
                    
                  
                    </tr>
                    <tr>
                         <td>  <label for=\"exampleInputEmail1\">Travaux 3 </label>  </td>
                    <td><textarea name=\"titem3\"></textarea></td>
                    <td>&nbsp</td><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td>
                    
                    <td>  <label for=\"exampleInputEmail1\">Début Travaux 3 </label>  </td>
                    <td><input type=\"number\" name=\"dated3\"></td>
                    
                    <td>&nbsp</td><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td>
                    
                    <td>  <label for=\"exampleInputEmail1\">Fin Travaux 3</label>  </td>
                    <td><input type=\"number\" name=\"datef3\"></td>
                     </tr>
                    
                <tr>
                   <td>  <label for=\"exampleInputEmail1\">Travaux 4 </label>  </td>
                    <td><textarea name=\"titem4\"></textarea></td>
                    <td>&nbsp</td><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td>
                    
                    <td>  <label for=\"exampleInputEmail1\">Début Travaux 4 </label>  </td>
                    <td><input type=\"number\" name=\"dated4\"></td>
                    
                    <td>&nbsp</td><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td>
                    
                    <td>  <label for=\"exampleInputEmail1\">Fin Travaux 4</label>  </td>
                    <td><input type=\"number\" name=\"datef4\"></td>     
                </tr>
                <tr>
                        <td>  <label for=\"exampleInputEmail1\">Travaux 5 </label>  </td>
                    <td><textarea name=\"titem5\"></textarea></td>
                    <td>&nbsp</td><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td>
                    
                    <td>  <label for=\"exampleInputEmail1\">Début Travaux 5 </label>  </td>
                    <td><input type=\"number\" name=\"dated5\"></td>
                    
                    <td>&nbsp</td><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td>
                    
                    <td>  <label for=\"exampleInputEmail1\">Fin Travaux 5</label>  </td>
                    <td><input type=\"number\" name=\"datef5\"></td>
                 
                    </tr>
                <tr>
                        <td>  <label for=\"exampleInputEmail1\">Travaux 6 </label>  </td>
                    <td><textarea name=\"titem6\"></textarea></td>
                    <td>&nbsp</td><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td>
                    
                    <td>  <label for=\"exampleInputEmail1\">Début Travaux 6 </label>  </td>
                    <td><input type=\"number\" name=\"dated6\"></td>
                    
                    <td>&nbsp</td><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td>
                    
                    <td>  <label for=\"exampleInputEmail1\">Fin Travaux 6 </label>  </td>
                    <td><input type=\"number\" name=\"datef6\"></td>
                    </tr>
                
                    <tr>
                        <td>  <label for=\"exampleInputEmail1\">Travaux 7 </label>  </td>
                    <td><textarea name=\"titem7\"></textarea></td>
                    <td>&nbsp</td><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td>
                    
                    <td>  <label for=\"exampleInputEmail1\">Début Travaux 7 </label>  </td>
                    <td><input type=\"number\" name=\"dated7\"></td>
                    
                    <td>&nbsp</td><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td>
                    
                    <td>  <label for=\"exampleInputEmail1\">Fin Travaux 7</label>  </td>
                    <td><input type=\"number\" name=\"datef7\"></td>

                    </tr>
                    
                    <tr>
                        <td>  <label for=\"exampleInputEmail1\">Travaux 8 </label>  </td>
                    <td><textarea name=\"titem8\"></textarea></td>
                    <td>&nbsp</td><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td>
                    
                    <td>  <label for=\"exampleInputEmail1\">Début Travaux 8 </label>  </td>
                    <td><input type=\"number\" name=\"dated8\"></td>
                    
                    <td>&nbsp</td><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td>
                    
                    <td>  <label for=\"exampleInputEmail1\">Fin Travaux 8</label>  </td>
                    <td><input type=\"number\" name=\"datef8\"></td>
                    
                    </tr>
                    
                    <tr>
                        <td>  <label for=\"exampleInputEmail1\">Travaux 9 </label>  </td>
                    <td><textarea name=\"titem9\"></textarea></td>
                    <td>&nbsp</td><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td>
                    
                    <td>  <label for=\"exampleInputEmail1\">Début Travaux 9 </label>  </td>
                    <td><input type=\"number\" name=\"dated9\"></td>
                    
                    <td>&nbsp</td><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td>
                    
                    <td>  <label for=\"exampleInputEmail1\">Fin Travaux 9 </label>  </td>
                    <td><input type=\"number\" name=\"datef9\"></td>
                    
                  
                    </tr>
                    
                    <tr>
                        <td>  <label for=\"exampleInputEmail1\">Travaux 10 </label>  </td>
                    <td><textarea name=\"titem10\"></textarea></td>
                    <td>&nbsp</td><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td>
                    
                    <td>  <label for=\"exampleInputEmail1\">Début Travaux 10 </label>  </td>
                    <td><input type=\"number\" name=\"dated10\"></td>
                    
                    <td>&nbsp</td><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td>
                    
                    <td>  <label for=\"exampleInputEmail1\">Fin Travaux 10 </label>  </td>
                    <td><input type=\"number\" name=\"datef10\"></td>
                    
                  
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
        return "AdminBundle:Technique:addGanttJ.html.twig";
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
