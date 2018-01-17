<!DOCTYPE html>
<html>
    <head>
        <title>Hackathon</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		
		<!-- core CSS -->
		
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="../style/style.css">
        <link rel="stylesheet" type="text/css" href="../style/styleVisu.css">
		<link href="../css/bootstrap.min.css" rel="stylesheet">
		<link href="../css/font-awesome.min.css" rel="stylesheet">
		<link href="../css/animate.min.css" rel="stylesheet">
		<link href="../css/prettyPhoto.css" rel="stylesheet">
		<link href="../css/main.css" rel="stylesheet">
		<link href="../css/responsive.css" rel="stylesheet">
	
		<!-- call JS -->
		<script src="../js/jquery.js"></script>
		<script src="../js/bootstrap.min.js"></script>
		<script src="../js/jquery.prettyPhoto.js"></script>
		<script src="../js/jquery.isotope.min.js"></script>
		<script src="../js/main.js"></script>
		<script src="../js/wow.min.js"></script> 
		
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    </head>

    <!-- ============================ -->
    <!-- =========== Body =========== -->
    <!-- ============================ -->
    <body>
        <div class="divContent">

            <div id="titlePage" class="page-header">
            </br>
                <h2 id="titleVisualisation"> Visualisation 
                   <?php 
                    if ($_GET['resource'] == disponibilite_parking) {
                        echo " - Parkings - Places disponibles"; 
                    } 
                    if ($_GET['resource'] == archive_fiche) {
                        echo " - Archives"; 
                    }
                    if ($_GET['resource'] == bp_2017_fonction) {
                        echo " - Budget prévisionnel - 2017 fonction"; 
                    }
                    if ($_GET['resource'] == population_2008) {
                        echo " - Population 2008"; 
                    }?>
                </h2> 
            </div>

            </br>
            <a id="infoButtonVisu" href="index.php" class="glyphicon glyphicon-info-sign btn btn-default bottomButton" aria-hidden="true"></a>
			<a id="exclamationButtonVisu" class="glyphicon glyphicon-exclamation-sign btn btn-default bottomButton" aria-hidden="true" data-toggle="modal" data-target="#example"></a>

                <div class="modal fade" tabindex="-1" role="dialog" id="example">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                <h4 class="modal-title">Vous rencontrer un problème ? </h4>
                            </div>
                            <div class="modal-body">
                                <p style="margin-bottom:7px;">Ce message sera envoyé par mail à la ville.</p>
                                <textarea class="form-control" style="min-width: 100%"></textarea>
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-default" data-dismiss="modal">Envoyer</button>
                            </div>
                        </div><!-- /.modal-content -->
                    </div><!-- /.modal-dialog -->
                </div><!-- /.modal -->

			<div class="bord">
			    <div class="row" id="donnees">
		            <div id="tableDonnees" class="col-xs-12 col-sm-8 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <h2 id="titleLateralMenu">Table de données</h2>
                        <div class="accordion">
                            <div class="panel-group" id="accordion1"> <!-- class : sidenav--> 
            					<div class="panel panel-default">
            						<div class="panel-heading active">
            							<h3 class="panel-title">
            								<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapse6">
            									Citoyenneté
            								</a>
            							</h3>
            						</div>
            						<div id="collapse6" class="panel-collapse collapse">
            							<div class="panel-body">
            								<div id="archive_fiche" class="checkData">
            									Archive
            								</div>
            								<div id="population_2008" class="checkData">
                                                INSEE
            								</div>
            							</div>
            						</div>
                                </div>
            						  
                                <div class="panel panel-default">
                                    <div class="panel-heading">
            							<h3 class="panel-title">
            								<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapse7">
            									Déplacement
            								</a>
            							</h3>
                                    </div>
            						<div id="collapse7" class="panel-collapse collapse">
            							<div class="panel-body">
            								<div id="disponibilite_parking" class="checkData">
            									Parking
            								</div>
            							</div>
                                    </div>
                                </div>
                                    
            					<div class="panel panel-default">
                                    <div class="panel-heading">
            							<h3 class="panel-title">
            								<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapseTwo1">
            									Espace public
            								</a>
            							</h3>
                                    </div>
                                    <div id="collapseTwo1" class="panel-collapse collapse">
            							<div class="panel-body">
            							</div>
            						</div>
                                </div>
            					  
                                <div class="panel panel-default">
                                    <div class="panel-heading">
            							<h3 class="panel-title">
            								<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapseOne1">
            									Finance
            								</a>
            							</h3>
                                    </div>
            						<div id="collapseOne1" class="panel-collapse collapse">
            							<div class="panel-body">
            								<div id="bp_2017_fonction" class="checkData">
            									Budget
            								</div>
            							</div>
                                    </div>
                                </div>

            					<div class="panel panel-default">
                                    <div class="panel-heading">
            							<h3 class="panel-title">
            								<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapse8">
            									Gestion interne
            								</a>
            							</h3>
                                    </div>
                                    <div id="collapse8" class="panel-collapse collapse">
            							<div class="panel-body">
                                        </div>
                                    </div>
                                </div>

            					<div class="panel panel-default">
                                    <div class="panel-heading">
            							<h3 class="panel-title">
            								<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapse2">
            									Jeunesse, sport et culture
            								</a>
            							</h3>
                                    </div>
                                    <div id="collapse2" class="panel-collapse collapse">
            							<div class="panel-body">
                                        </div>
                                    </div>
                                </div>

                                <div class="panel panel-default">
                                    <div class="panel-heading">
            							<h3 class="panel-title">
            								<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapse3">
            									Référenciel géographique
            								</a>
            							</h3>
                                    </div>
                                    <div id="collapse3" class="panel-collapse collapse">
            							<div class="panel-body">
                                        </div>
                                    </div>
                                </div>

            					<div class="panel panel-default">
                                    <div class="panel-heading">
            							<h3 class="panel-title">
            								<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapse9">
            									Urbanisme et politique de la ville
            								</a>
            							</h3>
                                    </div>
                                    <div id="collapse9" class="panel-collapse collapse">
            							<div class="panel-body">
                                        </div>
                                    </div>
                                </div>
                            </div><!--/#group-panel accordion1-->
                        </div><!--/#accordion-->
                    </div><!--/#tableDonnees-->
                </div><!--/row #donnees-->
        	</div>
			




            <div id="contentPage">
                <div id="exTab2" class="container"> 
                    <ul class="nav nav-tabs">
                        <li id="tab1"><a href="#1" data-toggle="tab">Graphe</a></li>
                        <li id="tab2"><a href="#2" data-toggle="tab">Tableau</a></li>
                        <li id="tab3"><a href="#3" data-toggle="tab">Carte</a></li>
                        <li id="tab4"><a href="#4" data-toggle="tab">Infos</a></li>
                        <li id="tab5"><a href="#5" data-toggle="tab">Télécharger</a></li>
                    </ul>

                    <div class="tab-content ">
                        <div class="tab-pane" id="1">
                            <div id='box1' class="boxVisu">
                                <h4 class="panel-title pull-left"></h4>

                                <div id="panel-body-0">
                                    <select class="form-control select" id="selectChart"></select>
                                    <select class="form-control select" id="select0"></select>
                                    <a id="seeMoreChart0"><canvas id="myChart0" class="chart" height="1000" width="600"></canvas></a>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="2">
                            <div id='box2' class="boxVisu">
                                <h4 class="panel-title pull-left"></h4>

                                <div id="panel-body-1">
                                    </br>
                                    <select class="form-control" id="select1"></select>
                                    </br>
                                    <a id="seeMoreChart1"><canvas id="myChart1" class="chart"></canvas></a>
                                </div>
                            </div>
                        </div>
                      <div class="tab-pane" id="3">
                            <div id='box3' class="panel panel-default">
                                <h4 class="panel-title pull-left"></h4>

                                <div id="panel-body-2" class="panel-body form-group panelBody">
                                    </br>
                                    <select class="form-control" id="select2"></select>
                                    </br>
                                    <a id="seeMoreChart2"><canvas id="myChart2" class="chart"></canvas></a>
                                </div>
                            </div>
                      </div>
                      <div class="tab-pane" id="4">
                          <h3>Affichage des informations sur la donnée</h3>
                      </div>
                      <div class="tab-pane" id="5">
                          <h3>Affichage des liens de téléchargement</h3>
                      </div>
                  </div>
                </div>

                <div class="page-header">
                    <h2>Partager </h2>
                </div>
                <p>Vous pouvez partager cette page sur facebook ainsi que twitter : </p>
                <div id="rs">
                    
                    <!-- FACEBOOK -->
                    <div id="fb-root" class="rs"></div>
                    <script>(
                        function(d, s, id) {
                            var js, fjs = d.getElementsByTagName(s)[0];
                            if (d.getElementById(id)) return;
                            js = d.createElement(s); js.id = id;
                            js.src = "//connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v2.9&appId=778292025574313";
                            fjs.parentNode.insertBefore(js, fjs);
                        }(document, 'script', 'facebook-jssdk'));
                    </script>

                    <!-- TWITTER -->
                    <div class="rs">
                        <a href="https://twitter.com/share" class="twitter-share-button" data-size="large">Tweet</a> 
                        <script>
                            !function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');
                        </script>
                    </div>

                      <!-- Your share button code -->
                      <div class="fb-share-button" data-href="https://developers.facebook.com/docs/plugins/" data-layout="button" data-size="large" data-mobile-iframe="true"><a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;src=sdkpreparse">Partager</a></div>
                </div>

                <div class="page-header">
                    <h2>Commentaires </h2>
                </div>
                <div class="post-footer">
                    <ul class="comments-list">
                        <li class="comment">
                            <div class="comment-body">
                                <div class="comment-heading">
                                    <h4 class="user">Annonyme</h4>
                                    <h5 class="time">Il y a 8 minutes</h5>
                                </div>
                                <p>Commentaire numéro 1</p>
                            </div>
                        </li>
                        <li class="comment">
                            <div class="comment-body">
                                <div class="comment-heading">
                                    <h4 class="user">Open Data La Rochelle</h4>
                                    <h5 class="time">Il y a 3 minutes</h5>
                                </div>
                                <p>Commentaire numéro 2</p>
                            </div>
                        </li>
                        <li class="comment">
                            <div class="comment-body">
                                <div class="comment-heading">
                                    <h4 class="user">Annonyme</h4>
                                    <h5 class="time">Il y a 2 minutes</h5>
                                </div>
                                <p>Commentaire numéro 3</p>
                            </div>
                        </li>
                    </ul>
                    <div class="input-group"> 
                        <input class="form-control" placeholder="Add a comment" type="text">
                        <span class="input-group-addon">
                            <a href="#"><i class="glyphicon glyphicon-pencil"></i></a>  
                        </span>
                    </div>
                </div>
            </div> <!-- END CONTENT PAGE -->

            <!-- ============================ -->
            <!-- ========== Footer ========== -->
            <!-- ============================ -->
            <a href="#top"><div class="topHalfCircle">
                <span id="arrowFooter" class="glyphicon glyphicon-menu-up"></span>
            </div></a>

            <script type="text/javascript">
                $("a[href='#top']").click(function() {
                    $("html, body").animate({ scrollTop: 0 }, "slow");
                });
            </script>

            <footer>

            </footer>

        </div>
    </body>

    <!-- ============================ -->
    <!-- ======== Javascript ======== -->
    <!-- ============================ -->
    <script type="text/javascript">
        if (<?php echo '"' . $_GET['type'] . '"' ?> == "graph") {
            $("#1").addClass("active");
            $("#tab1").addClass("active");
        }

        if (<?php echo '"' . $_GET['type'] . '"' ?> == "tableau") {
            $("#2").addClass("active");
            $("#tab2").addClass("active");
        }

        if (<?php echo '"' . $_GET['type'] . '"' ?> == "info") {
            $("#5").addClass("active");
            $("#tab5").addClass("active");
        }
    </script>


    <!-- ============================ -->
    <!-- ========== Import ========== -->
    <!-- ============================ --> 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js" />
    <script src="http://canvasjs.com/assets/script/canvasjs.min.js"></script>
    <script type="text/javascript" src="../draw.js"></script>
    <script type="text/javascript" src="../controller.js"></script>
    <script type="text/javascript" src="../visu.js"></script>
    <!--<script src="http://d3js.org/d3.v3.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js" />

    <script src="http://canvasjs.com/assets/script/canvasjs.min.js"></script>
    <script type="text/javascript" src="../draw.js"></script>
    <script type="text/javascript" src="../controller.js"></script>-->

   

</html>
