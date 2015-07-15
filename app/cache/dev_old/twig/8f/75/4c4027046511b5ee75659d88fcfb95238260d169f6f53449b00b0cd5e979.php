<?php

/* FOSUserBundle:Registration:register_content.html.twig */
class __TwigTemplate_8f754c4027046511b5ee75659d88fcfb95238260d169f6f53449b00b0cd5e979 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        echo "
<div class=\"row\" align=\"center\">
    <br>
   
  <h1>   Création de compte </h1>
  <br>
   <br>
 <div class=\"col-lg-3 col-xs-6\" align=\"center\">
   
     <form  enctype=\"multipart/form-data\" accept-charset=\" \"action=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
        echo "\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " method=\"POST\" class=\"fos_user_registration_register\">
     <table id=\"lol\" >
                    <tr>
                        <td><label for=\"exampleInputEmail1\">Nom de l'utilisateur      </label></td>
                        <td>";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo " </td>
                        ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'errors');
        echo "
                    </tr>

                    <tr>
                        <td><label for=\"exampleInputEmail1\">Adresse e-mail </label></td> 

                        <td>";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo " </td>
                        ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'errors');
        echo "
                    </tr>
                    <tr>
                         <td><label for=\"exampleInputEmail1\">Mot de passe </td> </label> <td>";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "first", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo " </td>
                         ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "first", array()), 'errors');
        echo "
                     </tr>
                     <tr>
                        <td><label for=\"exampleInputEmail1\">Vérification</td> </label> <td>";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "second", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo " </td>
                         ";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "second", array()), 'errors');
        echo "
                     </tr>
                  
                     
                    
                    <tr>
                        <td><label for=\"exampleInputEmail1\">Poste     </label></td>
                          
                        <td>
                        <select id=\"role\" name='role' class=\"role\">
                            <option value=\"ROLE_TECHNIQUE\">Service Technique</option>
                            <option value=\"ROLE_COMMERCIAL\">Service Commercial</option>
                            <option value=\"ROLE_LOGISTIQUE\">Service Logistique</option>
                            <option value=\"ROLE_FINANCIER\">Service Financier</option>
                            <option value=\"\" selected=\"selected\"></option>
                            
                            </select>
                        </td>
                       
                    </tr>
                    <tr>
                        <td><label for=\"exampleInputEmail1\">Date d'éxpiration </label></td>
                        <td>";
        // line 53
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "expiresAt", array()), 'widget');
        echo " </td>
                        ";
        // line 54
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "expiresAt", array()), 'errors');
        echo "
                    </tr>
                    
                    <tr> 
                        <td><label for=\"exampleInputEmail1\">Image : </label></td><td><input type=\"file\" name=\"photo\" accept=\"image/x-png, image/gif, image/jpeg\" required/></td> 
                    </tr>
                     <tr>
                         ";
        // line 61
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
                     </tr>
     </table>
                <div>
                    <br>
                    <input type=\"submit\" class=\"btn btn-primary btn-block btn-flat\" value=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
                </div>
      
</form>
 </div>
                </div>";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 66,  115 => 61,  105 => 54,  101 => 53,  76 => 31,  72 => 30,  66 => 27,  62 => 26,  56 => 23,  52 => 22,  43 => 16,  39 => 15,  30 => 11,  19 => 2,);
    }
}
