<?php

/* AdminBundle::layoutTech.html.twig */
class __TwigTemplate_ee6cc84bbe8565020c36e52a87b90b50b457f0489ace8431ea5afb022dfb93bd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'user_content' => array($this, 'block_user_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>AfrikIsol | Dashboard</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <!-- Bootstrap 3.3.4 -->
        <link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />    
        <!-- FontAwesome 4.3.0 -->
        <link href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css\" rel=\"stylesheet\" type=\"text/css\" />
        <!-- Ionicons 2.0.0 -->
        <link href=\"https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css\" rel=\"stylesheet\" type=\"text/css\" />    
        <!-- Theme style -->
        <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("dist/css/AdminLTE.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
        <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
    <!-- Font Awesome Icons -->
    <link href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css\" rel=\"stylesheet\" type=\"text/css\" />
    <!-- Ionicons -->
    <link href=\"https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css\" rel=\"stylesheet\" type=\"text/css\" />
    <!-- DATA TABLES -->
    <link href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/datatables/dataTables.bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
    <!-- Theme style -->
    <link href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("dist/css/AdminLTE.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
    <!-- date-range-picker -->
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js\" type=\"text/javascript\"></script>

    <!-- AdminLTE Skins. Choose a skin from the css/skins 
         folder instead of downloading all of them to reduce the load. -->
    <link href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("dist/css/skins/_all-skins.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
        <link href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("dist/css/skins/_all-skins.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
        <!-- iCheck -->
        <link href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/iCheck/flat/blue.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
        <!-- Morris chart -->
        <link href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/morris/morris.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
        <!-- jvectormap -->
        <link href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/jvectormap/jquery-jvectormap-1.2.2.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
        <!-- Date Picker -->
        <link href=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/datepicker/datepicker3.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
        <!-- Daterange picker -->
        <link href=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/daterangepicker/daterangepicker-bs3.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
        <!-- bootstrap wysihtml5 - text editor -->
        <link href=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
         <script src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js\" type=\"text/javascript\"></script>
         <script type=\"text/javascript\">
      \$(function () {
        \$(\"#example1\").dataTable();
        \$('#example2').dataTable({
          \"bPaginate\": true,
          \"bLengthChange\": false,
          \"bFilter\": false,
          \"bSort\": true,
          \"bInfo\": true,
          \"bAutoWidth\": false
        });
      });
    </script>
    
    
    </head>
    <body class=\"skin-blue sidebar-mini\">
        <div class=\"wrapper\">

            <header class=\"main-header\">
                <!-- Logo -->
                <a href=\"\" class=\"logo\" height=\"40\" width=\"40\">
                    <!-- mini logo for sidebar mini 50x50 pixels -->
                    <span class=\"logo-mini\"><b>A</b>AI</span>
                    <!-- logo for regular state and mobile devices -->
                    <span class=\"logo-lg\"><b>Admin</b>AfrikIsol<br></span>
                    
                </a>
                
                <!-- Header Navbar: style can be found in header.less -->
                <nav class=\"navbar navbar-static-top\" role=\"navigation\">
                    <!-- Sidebar toggle button-->
                    <a href=\"#\" class=\"sidebar-toggle\" data-toggle=\"offcanvas\" role=\"button\">
                        <span class=\"sr-only\">Toggle navigation</span>
                    </a>
                    <div class=\"navbar-custom-menu\">
                        <ul class=\"nav navbar-nav\">
                            <li class=\"dropdown user user-menu\">
                                ";
        // line 82
        $context["imag"] = $this->env->getExtension('img_extension')->afficheImg($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()));
        // line 83
        echo "                                <a href=\"";
        echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
        echo "\" class=\"dropdown-toggle\" >
                                    <img src=\"data:image/png;base64,";
        // line 84
        echo twig_escape_filter($this->env, (isset($context["imag"]) ? $context["imag"] : $this->getContext($context, "imag")), "html", null, true);
        echo "\" class=\"user-image\" alt=\"User Image\" />
                                    <span class=\"hidden-xs\">Déconnexion</span>
                                </a>

                            </li>
                            <!-- Control Sidebar Toggle Button 
                            <li>
                              <a href=\"#\" data-toggle=\"control-sidebar\"><i class=\"fa fa-gears\"></i></a>
                            </li>
                            -->
                        </ul>
                    </div>
                </nav>
            </header>
            <!-- Left side column. contains the logo and sidebar -->
            <aside class=\"main-sidebar\">
                <!-- sidebar: style can be found in sidebar.less -->
                <section class=\"sidebar\">
                    <!-- Sidebar user panel -->
                    <div class=\"user-panel\">
                        <div class=\"pull-left image\">
                            
                            <img src=\"data:image/png;base64,";
        // line 106
        echo twig_escape_filter($this->env, (isset($context["imag"]) ? $context["imag"] : $this->getContext($context, "imag")), "html", null, true);
        echo "\" class=\"img-circle\" alt=\"User Image\" />                                  
                      
                        </div>
                        <div class=\"pull-left info\">
                            <p>";
        // line 110
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
        echo " </p>
                            <a href=\"#\"><i class=\"fa fa-circle text-success\"></i> Online</a>
                        </div>
                    </div>
                    <!-- search form -->
                    <form action=\"#\" method=\"get\" class=\"sidebar-form\">
                        <div class=\"input-group\">
                            <input type=\"text\" name=\"q\" class=\"form-control\" placeholder=\"Search...\"/>
                            <span class=\"input-group-btn\">
                                <button type='submit' name='search' id='search-btn' class=\"btn btn-flat\"><i class=\"fa fa-search\"></i></button>
                            </span>
                        </div>
                    </form>
                    <!-- /.search form -->
                    <!-- sidebar menu: : style can be found in sidebar.less -->
                    <ul class=\"sidebar-menu\">
                        <li class=\"header\">Menu de navigation</li>
                        <li class=\"active treeview\">
                            <a href=\"#\">
                                <i class=\"fa fa-slideshare\"></i> <span>Gestion des Clients</span> <i class=\"fa fa-angle-left pull-right\"></i>
                            </a>
                            <ul class=\"treeview-menu\">
                                <li class=\"active\">
                                    <a href=\"";
        // line 133
        echo $this->env->getExtension('routing')->getPath("tech_addClient");
        echo "\"><i class=\"fa fa-plus\"></i> Ajouter Client</a>
                                  
                                </li>
                                <li>
                                    <a href=\"";
        // line 137
        echo $this->env->getExtension('routing')->getPath("tech_listClient");
        echo "\"><i class=\"fa fa-th-list\"></i> Lister Clients</a>
                                   
                                </li>
                               
                            </ul>
                        </li>
                        <li class=\"active treeview\">
                            <a href=\"#\">
                                <i class=\"fa fa-clipboard\"></i> <span>Gestion des Projets</span> <i class=\"fa fa-angle-left pull-right\"></i>
                            </a>
                            <ul class=\"treeview-menu\">
                                <li class=\"active\">
                                    <a href=\"";
        // line 149
        echo $this->env->getExtension('routing')->getPath("tech_addProjet");
        echo "\"><i class=\"fa fa-plus-square-o\"></i> Ajouter Projet</a>
                                  
                                </li>
                                <li>
                                    <a href=\"";
        // line 153
        echo $this->env->getExtension('routing')->getPath("tech_listProjet");
        echo "\"><i class=\"fa fa-list-ul\"></i> Lister projets</a>
                                   
                                </li>
                                <li>
                                  <a href=\"";
        // line 157
        echo $this->env->getExtension('routing')->getPath("tech_listGantt");
        echo "\"><i class=\"fa fa-bar-chart\"></i>Planification des travaux</a>
                                </li> 
                                <li>
                                   <a href=\"";
        // line 160
        echo $this->env->getExtension('routing')->getPath("tech_listTole");
        echo "\"><i class=\"fa fa-edit\"></i> Ajouter/Lister tôles</a>  
                                </li>
                                <li>
                                   <a href=\"";
        // line 163
        echo $this->env->getExtension('routing')->getPath("tech_listPlan");
        echo "\"><i class=\"fa fa-area-chart\"></i>Planification </a> 
                                </li>
                                <li>
                                  <a href=\"";
        // line 166
        echo $this->env->getExtension('routing')->getPath("tech_listAvancement");
        echo "\"><i class=\"fa fa-area-chart\"></i>Avancement</a>   
                                </li>
                                <li>
                                   <a href=\"";
        // line 169
        echo $this->env->getExtension('routing')->getPath("tech_listMAD");
        echo "\"><i class=\"fa fa-area-chart\"></i>Mise à disposition</a>     
                                </li>
                             
                            </ul>
                        </li>

                        
                    </ul>
                </section>
                <!-- /.sidebar -->
            </aside>

            <!-- Content Wrapper. Contains page content -->
            <div class=\"content-wrapper\">
                <!-- Content Header (Page header) -->
                <section class=\"content-header\">
                    <h1>
                        Tableau de bord
                        <small>Service Technique</small>
                    </h1>
                    <ol class=\"breadcrumb\">
                      
                    </ol>
                </section>

                <!-- Main content -->
                <section class=\"content\">
                    
                    <br>
                    <br>
                    ";
        // line 199
        $this->displayBlock('user_content', $context, $blocks);
        // line 214
        echo "                         
                         <br>
                         <br>
                         ";
        // line 217
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "hasPreviousSession", array())) {
            // line 218
            echo "            ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array(), "method"));
            foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
                // line 219
                echo "                ";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($context["messages"]);
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 220
                    echo "                    <div class=\"flash-";
                    echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                    echo "\">
                        <h3> ";
                    // line 221
                    echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                    echo " </h3>
                    </div>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 224
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 225
            echo "        ";
        }
        // line 226
        echo "                </section><!-- /.content -->
            </div><!-- /.content-wrapper -->
            <footer class=\"main-footer\">

                <strong>Copyright &copy; 2014-2015 <a href=\"\">Ali Brahem</a>.</strong> All rights reserved.
            </footer>

            <!-- Control Sidebar -->      

            <!-- Add the sidebar's background. This div must be placed
                 immediately after the control sidebar -->
            <div class='control-sidebar-bg'></div>
        </div><!-- ./wrapper -->

        <!-- jQuery 2.1.4 -->
        <script src=\"";
        // line 241
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/jQuery/jQuery-2.1.4.min.js"), "html", null, true);
        echo "\"></script>
        <!-- jQuery UI 1.11.2 -->
        <script src=\"http://code.jquery.com/ui/1.11.2/jquery-ui.min.js\" type=\"text/javascript\"></script>
        <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
        <script>
            \$.widget.bridge('uibutton', \$.ui.button);
        </script>
        <!-- Bootstrap 3.3.2 JS -->
        <script src=\"";
        // line 249
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>  
        <script src=\"";
        // line 250
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bootstrap/js/calculTole.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 251
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bootstrap/js/avancement.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <!-- Morris.js charts -->
        <script src=\"http://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js\"></script>
        <script src=\"";
        // line 254
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/morris/morris.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <!-- Sparkline -->
        <script src=\"";
        // line 256
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/sparkline/jquery.sparkline.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <!-- jvectormap -->
        <script src=\"";
        // line 258
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 259
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/jvectormap/jquery-jvectormap-world-mill-en.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <!-- jQuery Knob Chart -->
        <script src=\"";
        // line 261
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/knob/jquery.knob.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <!-- daterangepicker -->
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 264
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/daterangepicker/daterangepicker.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <!-- datepicker -->
        <script src=\"";
        // line 266
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/datepicker/bootstrap-datepicker.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <!-- Bootstrap WYSIHTML5 -->
        <script src=\"";
        // line 268
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <!-- Slimscroll -->
        <script src=\"";
        // line 270
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/slimScroll/jquery.slimscroll.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <!-- FastClick -->
        <script src=\"";
        // line 272
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/fastclick/fastclick.min.js"), "html", null, true);
        echo "\"></script>
        <!-- AdminLTE App -->
        <script src=\"";
        // line 274
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("dist/js/app.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>    

        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <script src=\"";
        // line 277
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("dist/js/pages/dashboard.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>   
        <!-- DATA TABES SCRIPT -->
    <script src=\"";
        // line 279
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/datatables/jquery.dataTables.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 280
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/datatables/dataTables.bootstrap.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
      <link href=\"";
        // line 281
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bootstrap/css/loading.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
       

        <!-- AdminLTE for demo purposes -->
        <script src=\"";
        // line 285
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("dist/js/demo.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    </body>
</html>";
    }

    // line 199
    public function block_user_content($context, array $blocks = array())
    {
        // line 200
        echo "           
                    <!-- Small boxes (Stat box) -->
                    <div class=\"row\">
                        <div class=\"col-lg-3 col-xs-6\">
                            <!-- small box -->

                        </div><!-- ./col -->

                        <!-- Main row -->
                        <div class=\"row\">
                            
                        </div><!-- /.row (main row) -->
                        
                         ";
    }

    public function getTemplateName()
    {
        return "AdminBundle::layoutTech.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  470 => 200,  467 => 199,  460 => 285,  453 => 281,  449 => 280,  445 => 279,  440 => 277,  434 => 274,  429 => 272,  424 => 270,  419 => 268,  414 => 266,  409 => 264,  403 => 261,  398 => 259,  394 => 258,  389 => 256,  384 => 254,  378 => 251,  374 => 250,  370 => 249,  359 => 241,  342 => 226,  339 => 225,  333 => 224,  324 => 221,  319 => 220,  314 => 219,  309 => 218,  307 => 217,  302 => 214,  300 => 199,  267 => 169,  261 => 166,  255 => 163,  249 => 160,  243 => 157,  236 => 153,  229 => 149,  214 => 137,  207 => 133,  181 => 110,  174 => 106,  149 => 84,  144 => 83,  142 => 82,  99 => 42,  94 => 40,  89 => 38,  84 => 36,  79 => 34,  74 => 32,  69 => 30,  65 => 29,  56 => 23,  51 => 21,  42 => 15,  38 => 14,  29 => 8,  20 => 1,);
    }
}
