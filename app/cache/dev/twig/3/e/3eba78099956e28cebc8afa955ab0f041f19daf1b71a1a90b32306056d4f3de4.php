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
        <table id=\"example2\" class=\"table table-bordered table-hover\">
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
        // line 18
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) ? $context["users"] : $this->getContext($context, "users")));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 19
            echo "                    <tr>
                        <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "username", array()));
            echo "</td>
                        <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "email", array()));
            echo "</td>
                        <td>
                            ";
            // line 23
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["user"], "roles", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                // line 24
                echo "                            ";
                echo twig_escape_filter($this->env, $context["role"], "html", null, true);
                echo ",
                          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 26
            echo "                        </td>
                        <td>";
            // line 27
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["user"], "lastLogin", array()), "d/m/Y, H:i:s", false), "html", null, true);
            echo "</td>
                        ";
            // line 28
            if (($this->getAttribute($context["user"], "locked", array()) == 0)) {
                // line 29
                echo "                            
                        <td>Activé </td>
                        ";
            } else {
                // line 32
                echo "                           <td>Désactivé </td> 
                        ";
            }
            // line 34
            echo "                        <td>";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["user"], "expiresAt", array()), "d/m/Y, H:i:s", false), "html", null, true);
            echo "</td>
                        <td><a href=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_updateOtherUser", array("id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
            echo "\"> Modifier </a></td>
                        <td><a href=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_supprimeruser", array("id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
            echo "\"> Suprimer </a></td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
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
        return array (  113 => 39,  104 => 36,  100 => 35,  95 => 34,  91 => 32,  86 => 29,  84 => 28,  80 => 27,  77 => 26,  68 => 24,  64 => 23,  59 => 21,  55 => 20,  52 => 19,  48 => 18,  31 => 3,  28 => 2,  11 => 1,);
    }
}
