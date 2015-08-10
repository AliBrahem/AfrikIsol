<?php

/* AdminBundle:User:list.html.twig */
class __TwigTemplate_3eba78099956e28cebc8afa955ab0f041f19daf1b71a1a90b32306056d4f3de4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AdminBundle::layoutSUP.html.twig", "AdminBundle:User:list.html.twig", 1);
        $this->blocks = array(
            'user_content' => array($this, 'block_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AdminBundle::layoutSUP.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_user_content($context, array $blocks = array())
    {
        // line 3
        echo "    <div class=\"box-body\">
        <div class=\"box-header\">
                  <h3 class=\"box-title\">Liste des TUYAUTERIES</h3>
                </div><!-- /.box-header -->
                <div class=\"box-body\">
                  <table id=\"example1\" class=\"table table-bordered table-striped\">
            <thead>
                <tr>
                    <th>Login</th>
                    <th>Email</th>
                    <th>Poste</th>
                    <th>Dernière connexion</th>
                    <th>Etat</th>
                    <th>Date d'expiration</th>
                    <th>Modifier</th>
                    <th>Supprimer</th>
                </tr>
            </thead>
            <tbody>
                ";
        // line 22
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) ? $context["users"] : $this->getContext($context, "users")));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 23
            echo "                    <tr>
                        <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "username", array()));
            echo "</td>
                        <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "email", array()));
            echo "</td>
                        <td>
                            ";
            // line 27
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["user"], "roles", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                // line 28
                echo "                            ";
                echo twig_escape_filter($this->env, $context["role"], "html", null, true);
                echo ",
                          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 30
            echo "                        </td>
                        <td>";
            // line 31
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["user"], "lastLogin", array()), "d/m/Y, H:i:s", false), "html", null, true);
            echo "</td>
                        ";
            // line 32
            if (($this->getAttribute($context["user"], "locked", array()) == 0)) {
                // line 33
                echo "                            
                        <td>Activé </td>
                        ";
            } else {
                // line 36
                echo "                           <td>Désactivé </td> 
                        ";
            }
            // line 38
            echo "                        <td>";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["user"], "expiresAt", array()), "d/m/Y, H:i:s", false), "html", null, true);
            echo "</td>
                        <td><a href=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_updateOtherUser", array("id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
            echo "\"> Modifier </a></td>
                        <td><a href=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_supprimeruser", array("id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
            echo "\"> Suprimer </a></td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "            </tbody>
            <tfoot>
                <tr>
                    <th>Login</th>
                    <th>Email</th>
                    <th>Poste</th>
                    <th>Dernière connexion</th>
                    <th>Etat</th>
                    <th>Date d'expiration</th>
                    <th>Modifier</th>
                    <th>Supprimer</th>
                </tr>
            </tfoot>
        </table>
                </div>
    </div>
    </div><!-- /.box-body -->

";
    }

    public function getTemplateName()
    {
        return "AdminBundle:User:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 43,  108 => 40,  104 => 39,  99 => 38,  95 => 36,  90 => 33,  88 => 32,  84 => 31,  81 => 30,  72 => 28,  68 => 27,  63 => 25,  59 => 24,  56 => 23,  52 => 22,  31 => 3,  28 => 2,  11 => 1,);
    }
}
