<!DOCTYPE html>
<html>
    <head>
        <title>Hackathon</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="../style/style.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">

    </head>

    <!-- ============================ -->
    <!-- =========== Body =========== -->
    <!-- ============================ -->
    <body>
        <div id="randomData">
        
            <div class="box-wrapper-inner">
                <div id="BienvenuPanel" class="panel panel-default">
                    <div class="panel-body">
                        <h3>Bienvenue sur CoustaData </h3>
                        </br>
                        <p>le site de la démarche Open Data de la Ville de La Rochelle. Vous trouverez ici l'ensemble des jeux de données publiés par les services de la Ville et ses partenaires sous plusieurs forme de visualisation : cartographique, graphique, tableau ainsi que line temporelle !</p>
                        <p>Voici quelques visualisations aléatoires générées pour vous !</p>
                        </br>
                    </div>
                </div>
            </div>

            <div class="box-wrapper-inner">
                <div id='box1' class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title pull-left"></h4>
                        <button class="btn btn-default label label-warning pull-right" data-toggle="modal" data-target="#example">Un problème ?</button>

                        <div class="modal fade" tabindex="-1" role="dialog" id="example">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                        <h4 class="modal-title">Modal title</h4>
                                    </div>
                                    <div class="modal-body">
                                        <div class="checkbox">
                                            <label class="labelModal"> <input class="check_list" name="check_list[]" type="checkbox">Les données vous semble incorrecte ...</label>
                                        </div>
                                        <div class="checkbox"> 
                                            <label class="labelModal"> <input class="check_list" name="check_list[]" type="checkbox">La visualisation ne vous convient pas ...</label>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-default" data-dismiss="modal">Envoyer</button>
                                    </div>
                                </div><!-- /.modal-content -->
                            </div><!-- /.modal-dialog -->
                        </div><!-- /.modal -->

                        <div class="clearfix"></div>
                    </div>
                    <div id="panel-body-0" class="panel-body form-group panelBody">
                        </br>
                        <select class="form-control" id="select0"></select>
                        </br>
                        <a id="seeMoreChart0"><canvas id="myChart0" class="chart" height="300" width="300"></canvas></a>
                    </div>
                    <a id="seeMore0" style="float:right" class="glyphicon glyphicon-zoom-in btn btn-default bottomButton" aria-hidden="true"></a>
                    <a id="info0" style="float:right" class="glyphicon glyphicon-info-sign btn btn-default bottomButton" aria-hidden="true"></a>
                </div>

                <div id='box2' class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title pull-left"></h4>
                        <button class="btn btn-default label label-warning pull-right" data-toggle="modal" data-target="#example">un problème ?</button>
                        
                        <div class="modal fade" tabindex="-1" role="dialog" id="example">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                        <h4 class="modal-title">Modal title</h4>
                                    </div>
                                    <div class="modal-body">
                                        <div class="checkbox">
                                            <label class="labelModal"> <input class="check_list" name="check_list[]" type="checkbox">Les données vous semble incorrecte ...</label>
                                        </div>
                                        <div class="checkbox"> 
                                            <label class="labelModal"> <input class="check_list" name="check_list[]" type="checkbox">La visualisation ne vous convient pas ...</label>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-default" data-dismiss="modal">Envoyer</button>
                                    </div>
                                </div><!-- /.modal-content -->
                            </div><!-- /.modal-dialog -->
                        </div><!-- /.modal -->
                        
                        <div class="clearfix"></div>
                    </div>
                    <div id="panel-body-1" class="panel-body form-group panelBody">
                        </br>
                        <select class="form-control" id="select1"></select>
                        </br>
                        <a id="seeMoreChart1"><canvas id="myChart1" class="chart" height="300" width="300"></canvas></a>
                    </div>
                    <a id="seeMore1" style="float:right" class="glyphicon glyphicon-zoom-in btn btn-default bottomButton" aria-hidden="true"></a>
                    <a id="info1" style="float:right" class="glyphicon glyphicon-info-sign btn btn-default bottomButton" aria-hidden="true"></a>
                </div>
            </div>


            <!--<div class="box-wrapper-inner">
                <div id='box3' class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title pull-left"></h4>
                        <button class="btn btn-default label label-warning pull-right" data-toggle="modal" data-target="#example">Warning</button>

                        <div class="modal fade" tabindex="-1" role="dialog" id="example">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                        <h4 class="modal-title">Modal title</h4>
                                    </div>
                                    <div class="modal-body">
                                        <div class="checkbox">
                                            <label class="labelModal"> <input class="check_list" name="check_list[]" type="checkbox">Les données vous semble incorrecte ...</label>
                                        </div>
                                        <div class="checkbox"> 
                                            <label class="labelModal"> <input class="check_list" name="check_list[]" type="checkbox">La visualisation ne vous convient pas ...</label>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-default" data-dismiss="modal">Envoyer</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div id="panel-body-2"  class="panel-body form-group panelBody">
                        </br>
                        <select class="form-control" id="select2"></select>
                        </br>
                        <a id="seeMoreChart2"><canvas id="myChart2" class="chart" height="300" width="300"></canvas></a>
                    </div>
                    <a id="seeMore2" style="float:right" class="glyphicon glyphicon-zoom-in btn btn-default bottomButton" aria-hidden="true"></a>
                    <a id="info2" style="float:right" class="glyphicon glyphicon-info-sign btn btn-default bottomButton" aria-hidden="true"></a>
                </div> -->

                <!--<div id='box4' class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title pull-left"></h4>
                        <button class="btn btn-default label label-warning pull-right" data-toggle="modal" data-target="#example">Warning</button>
                        
                        <div class="modal fade" tabindex="-1" role="dialog" id="example">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                        <h4 class="modal-title">Modal title</h4>
                                    </div>
                                    <div class="modal-body">
                                        <div class="checkbox">
                                            <label class="labelModal"> <input class="check_list" name="check_list[]" type="checkbox">Les données vous semble incorrecte ...</label>
                                        </div>
                                        <div class="checkbox"> 
                                            <label class="labelModal"> <input class="check_list" name="check_list[]" type="checkbox">La visualisation ne vous convient pas ...</label>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-default" data-dismiss="modal">Envoyer</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="clearfix"></div>
                    </div>
                    <div id="panel-body-3" class="panel-body form-group panelBody">
                        </br>
                        <select class="form-control" id="select3"></select>
                        </br>
                        <a id="seeMoreChart3"><canvas id="myChart3" class="chart" height="300" width="300"></canvas></a>
                    </div>
                    <a id="seeMore3" style="float:right" class="glyphicon glyphicon-zoom-in btn btn-default bottomButton" aria-hidden="true"></a>
                    <a id="info3" style="float:right" class="glyphicon glyphicon-info-sign btn btn-default bottomButton" aria-hidden="true"></a>
                </div>
            </div> -->

            </br>
            </br>

        </div>
        <?php /*include '../Time/histoNonLoc.php';*/?>
    </body>


    <!-- ============================ -->
    <!-- ========== Footer ========== -->
    <!-- ============================ -->
    <a href="#top"><div class="topHalfCircle">
        <span id="arrowFooter" class="glyphicon glyphicon-menu-up"></span>
    </div></a>
    
    <footer> </footer>


    <!-- ============================ -->
    <!-- ========== Import ========== -->
    <!-- ============================ -->  

    <script src="http://d3js.org/d3.v3.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js" />

    <script src="http://canvasjs.com/assets/script/canvasjs.min.js"></script>
    <script type="text/javascript" src="../draw.js"></script>
    <script type="text/javascript" src="../controller.js"></script>
    <script type="text/javascript" src="../random.js"></script>
   

</html>