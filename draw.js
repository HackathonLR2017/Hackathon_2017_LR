
// Declaration of variables
var dataBox1 = [], dataBox2 = [],
    chart1 = null, chart2 = null;

/**
 * Initialization 
 *
 * @return
 */
function init() {

    // Change chart
    $("#selectChart").change(function(){
        var valTypeChart = $("#selectChart").val();
        var val = $("#select0").val();
        chart1.destroy();
        $.getJSON( dataBox1[3], function(metadata) {
            // Draw a visualization
            drawGraph(dataBox1[0], valTypeChart, dataBox1[2], metadata, val, dataBox1[3], dataBox1[4]);
        });
    });

    // On changing selection, reload graph
    $("#select0").change(function() {
        var val = $("#select0").val();
        chart1.destroy();
        $.getJSON( dataBox1[3], function(metadata) {
            // Draw a visualization
            drawGraph(dataBox1[0], dataBox1[1], dataBox1[2], metadata, val, dataBox1[3], dataBox1[4]);
        });
    });

    $("#select1").change(function() {
        var val = $("#select1").val();
        chart2.destroy();
        $.getJSON( dataBox2[3], function(metadata) {
            // Draw a visualization
            drawGraph(dataBox2[0], dataBox2[1], dataBox2[2], metadata, val, dataBox2[3], dataBox2[4]);
        });
    });
    return;
};

/**
 * Call the good method to draw the graph, timeline or map
 *
 * @param  {Object}         dataJson            Data from open data la rochelle plateform
 * @param  {Number}         position            Id user origin
 * @param  {Object}         metadata            ???
 *
 * @return
 */
function drawRandomVisualization(dataJson, position, metadata, metadataLink) {

    // Maybe put this information in a Json file
    var HistorisedLocalisableVisualisation = ["graph", "timeline", "map"];
    var NotHistorisedNotLocalisableVisualisation = ["graph"];
    var NotHistorisedLocalisableVisualisation = ["graph", /*"map",*/ "table"];
    var HistorisedNotLocalisableVisualisation = ["graph", "table","timeline"]; //timeline

    // Call the good method to draw the graph, timeline or map
    switch (metadata.dataType) {
        case 'HistorisedLocalisable':

            // Get a random visualisation from the "type" list of visualization
            var rand = Math.floor(Math.random() * HistorisedLocalisableVisualisation.length);
            // TODO : Delete - this is just for testing
            rand = 0;


            if("graph" === HistorisedLocalisableVisualisation[rand]) {

                // Get a random graph visualisation from the "possibleGraphs" list of visualization
                var typeGraph = metadata.graph.possibleGraphs;
                var randGraph = Math.floor(Math.random() * typeGraph.length);

                // Draw the graph
                console.log("draw Graph");
                var opts = {};
                opts["legend"] = false;
                opts["link"] = true;
                drawGraph(dataJson, typeGraph[randGraph], position, metadata, 0, metadataLink, opts);
            }
            else if("timeline" === HistorisedLocalisableVisualisation[rand]) {

                // Draw the timeline
                console.log("draw Timeline");
            }
            else if("map" === HistorisedLocalisableVisualisation[rand]) {

                // Draw the timeline
                console.log("draw Map");
            }
            break;
        case 'NotHistorisedNotLocalisable':
            console.log('archive');

            break;
        case 'NotHistorisedLocalisable':
            console.log('Parking');
             // Get a random visualisation from the "type" list of visualization
            var rand = Math.floor(Math.random() * NotHistorisedLocalisableVisualisation.length);

            if("graph" === NotHistorisedLocalisableVisualisation[rand]) {

                // Get a random graph visualisation from the "possibleGraphs" list of visualization
                var typeGraph = metadata.graph.possibleGraphs;
                var randGraph = Math.floor(Math.random() * typeGraph.length);

                // Draw the graph
                console.log("draw Graph");
                var opts = {};
                opts["legend"] = false;
                opts["link"] = true;
                drawGraph(dataJson, typeGraph[randGraph], position, metadata, 0, metadataLink, opts);
            }
            else if("map" === NotHistorisedLocalisableVisualisation[rand]) {

                // Draw the map
                console.log("draw Map");
            }
             else if("table" === NotHistorisedLocalisableVisualisation[rand]) {

                // Draw the map
                console.log("draw Table");
                drawTable(dataJson, metadata, metadataLink, position);
            }

            break;
        case 'HistorisedNotLocalisable':
            console.log('Budget');
            // Get a random visualisation from the "type" list of visualization
            var rand = Math.floor(Math.random() * HistorisedNotLocalisableVisualisation.length);
            // TODO : Delete - this is just for testing
            rand = 0;

            if("graph" === HistorisedNotLocalisableVisualisation[rand]) {

                // Get a random graph visualisation from the "possibleGraphs" list of visualization
                var typeGraph = metadata.graph.possibleGraphs;
                var randGraph = Math.floor(Math.random() * typeGraph.length);

                // Draw the graph
                console.log("draw Graph");
                var opts = {};
                opts["legend"] = false;
                opts["link"] = true;
                drawGraph(dataJson, typeGraph[randGraph], position, metadata, 0, metadataLink, opts);
            }
            else if("timeline" === HistorisedNotLocalisableVisualisation[rand]) {

                // Draw the timeline
                console.log("draw Timeline");
            }
            else if("table" === HistorisedNotLocalisableVisualisation[rand]) {

                // Draw the table
                console.log("table");
                drawTable(dataJson, metadata, metadataLink, position);
            }
            break;
    }
};


/**
 * Parse data for graph
 *
 * @param  {Object}         dataJson            Data from open data la rochelle plateform
 * @param  {String}         metadata            Meta data
 * @param  {Number}         position            Id user origin
 *
 * @return
 */
function parseDataForGraph(dataJson, metadata, position) {
    var excludeData = metadata.graph.dataComposition.excludeLines;
    var selectList = metadata.graph.dataComposition.selectList;
    var onlyOneElement = metadata.graph.dataComposition.onlyOneElement;

    var hide_table = "#test_table" + position;
    var hide_select = "#select" + position;

    // Initialization arrays
    var keys = [], values = [], select=[], s = false;

    //Hide the table
    $(hide_table).hide();

    // Parse if there is only one element
    if(onlyOneElement) {

        // Insert datas in tables
        var d=[], v=[], k=[];

        dataJson.forEach(function(d) {
            v.push(d[onlyOneElement]);
            k.push(d[selectList]);
        });
        values.push(v);
        keys.push(k);

        //Hide the select 
        $(hide_select).hide();

    } else {
        // Parse data && fill the select input
        for (var i = 0; i < Object.keys(dataJson).length; i++) {

            if(selectList) { s = true }

            // Insert datas in tables
            var d=[], v=[], k=[];
            Object.keys(dataJson[i]).forEach(function (key) {
                // If the key value is in the table of exclude data, don't push the data
                if($.inArray(key, excludeData) <= -1) {
                    // Data
                    d.push({ key: key, value: dataJson[i][key]});
                    // Values
                    v.push(dataJson[i][key]);
                    // Keys
                    k.push(key);
                }
                if(key == selectList) {
                    select.push(dataJson[i][key]);
                    // Insert options in the select list
                    $(hide_select).append($("<option value='" + i + "'>" + dataJson[i][key] + "</option>"));
                }
            });
            values.push(v);
            keys.push(k);
        }
    }

    return([keys, values, select]);
}


/**
 * Draw Graph
 *
 * @param  {Object}         dataJson            Data from open data la rochelle plateform
 * @param  {String}         randGraph           Random graph (chartjs)
 * @param  {Number}         position            Id user origin
 * @param  {Object}         metadata            Meta data
 * @param  {Object}         selectVal           Select value
 * @param  {Object}         metadataLink        Meta data link
 *
 * @return
 */
function drawGraph(dataJson, randGraph, position, metadata, selectVal, metadataLink, opts) {
    
    // Put link on the graph if we are in the random page
    if (opts.link) {
        defineLinks("graph", position, metadata.link);
    }

    // Initialization
    var ctx = null, val = null, titleCanvas = metadata.graph.dataComposition.title, colors = [], dataBox = null;
    var hide_select = "#select" + position, myChart = "#myChart" + position, myBox = "#box" + (position + 1);

    // Get actual box
    if(position === 0) {
        dataBox = dataBox1;
    } else if(position === 1) {
        dataBox = dataBox2;
    }

    // Parse data to draw chart
    dataParsed = parseDataForGraph(dataJson, metadata, position);

    // Getting value from data parse function
    var keys = dataParsed[0];
    var values = dataParsed[1];
    var select = dataParsed[2];


    // Add data to dataBox to be able to re-draw the chart 
    if(metadata.graph.dataComposition.selectList === "") {
        $(hide_select).hide();
    } else {
        dataBox.push(dataJson);
        dataBox.push(randGraph);
        dataBox.push(position);
        dataBox.push(metadataLink);
        dataBox.push(opts);
        val = $(hide_select).val();
    }

    // Set color array
    for (var i = 0; i < keys[0].length; i++) {
        colors.push(getRandomColor());
    }

    // Add the title
    $(myBox).find("h4").text(titleCanvas);
    
    // Define chart context 
    ctx = $(myChart);

    // Define global parameters
    var legend = false;
    if(opts.legend == true && (randGraph == "pie" || randGraph == "doughnut")) {
        legend = true;
    }
    var responsive = false;
    Chart.defaults.global.legend.position = "bottom";

    //Height of canvas
    if(opts.height){

        var courentChart = "myChart" + position ;
        var elementTemp = document.getElementById(courentChart);

        if(dataJson.length < 50 && (randGraph == "pie" || randGraph == "doughnut")) {
            elementTemp.width = 600;
            elementTemp.height = 500;
            
        }
        else if (dataJson.length >= 50){
            elementTemp.width = 1000;
            elementTemp.height = dataJson.length * 13;
        }
    }
    // DRAW Chart
    chart = new Chart(ctx, {
        type: randGraph,
        data: {
            labels: keys[selectVal],
            datasets: [{
                data: values[selectVal],
                backgroundColor: colors
            }]
        },
        zoom: {
            enabled: true
        },
        options: {
            responsive: responsive,
            /*scales: {
                yAxes: [{
                    display: false,
                    ticks: {
                        //suggestedMin: 0,    // minimum will be 0, unless there is a lower value.
                        // OR //
                        beginAtZero: true   // minimum value will be 0.
                    }
                }],
                xAxes: [{
                    display: false,
                    ticks: {
                        //suggestedMin: 0,    // minimum will be 0, unless there is a lower value.
                        // OR //
                        beginAtZero: true   // minimum value will be 0.
                    }
                }]
            },*/
            legend: { display: legend }//,
            /*title: {
                display: true,
                text: title[val]
            }*/
        }
    });

    // Add canvas to databox array
    if(position === 0) {
        chart1 = chart;
    } else if(position === 1) {
        chart2 = chart;
    }
};


/**
 * Draw table
 *
 * @param  {Object}         dataJson            Data from open data la rochelle plateform
 * @param  {Object}         metadata            Meta data
 * @param  {Object}         metadataLink        Meta data link
 * @param  {Number}         position            Position of random box
 *
 * @return null
 */
function drawTable(dataJson, metadata, metadataLink, position) {

    // Links
    defineLinks("tableau", position, metadata.link);

    // Initialization
    var main_div = "panel-body-" + position;
    var courrent_select = "#select" + position;
    var courrent_myChart = "#myChart" + position;
    var new_position = position + 1;
    var courrent_box = "#box" + new_position;
    var box_title = metadata.table.dataComposition.title;
    var select = metadata.table.dataComposition.selectList;
    var keys_list_table =[];
    var value_list_table = [];
    keys_list_table = metadata.table.dataComposition.keys_list;
    value_list_table = metadata.table.dataComposition.value_list;
    
    // Hide select and chart div
    $(courrent_select).hide();
    $(courrent_myChart).hide();

    // Add the title
    $(courrent_box).find("h4").text(box_title);
    
    // Create table
    val_html = "<table id=\"my_table" + position + "\" class=\"table table-list-search\"><thead><tr>"
    value_list_table.forEach(function(d) {
        val_html += "<th>" + d + "</th>"
    })
    val_html += "</tr></thead><tbody id=\"table_element" + position + "\"></tbody></table>"
    
    // Draw table
    // TODO : Parse data for insee
    document.getElementById(main_div).innerHTML=val_html;
    dataJson.forEach(function(d,i) {
        table = document.getElementById("my_table" + position);
        tr = table.insertRow(i);
        keys_list_table.forEach(function(p, j) {
            tr.insertCell(j).innerHTML = d[p];
            document.getElementById("table_element" + position).appendChild(tr);     
        });
    });   
    if(metadata.timeline.year) {
        console.log("timeline")
        //drawTimeLine(metadata.timeline.year)
    }
};

/**
 * Draw map
 *
 * @param dataJson
 * @param metadata
 * @param metadataLink
 * @param position
 */
function drawMap(dataJson, metadata, metadataLink, position) {
    var main_div = "panel-body-" + position;
    var courrent_select = "#select" + position;
    var courrent_myChart = "#myChart" + position;
    var new_position = position + 1;
    var courrent_box = "#box" + new_position;
    var box_title = metadata.table.dataComposition.title;
    var select = metadata.table.dataComposition.selectList;

    // Hide select and chart div
    $(courrent_select).hide();
    $(courrent_myChart).hide();

    // Add the title
    $(courrent_box).find("h4").text(box_title);

    //Coordonnées du centre de la carte lors de l'initialisation de la vue.
    var laRochelle = ol.proj.fromLonLat([-1.15, 46.15]);

    //Création de la vue avec initialisation du centre (variable déclarée ligne précédente) et du niveau de zoom.
    var view = new ol.View({
        center: laRochelle,
        zoom: 13
    });

    //Création de la carte avec l'élément HTML visé (target), la couche à afficher et la vue de départ.
    var map = new ol.Map({
        target: 'seeMoreChart' + position,
        layers: [
            new ol.layer.Tile({
                source: new ol.source.OSM()
            })
        ],
        view: view
    });
};


/**
 * Fonction pour dessiner la timeline et l'adapter aux données.
 * @param dataJson
 * @param metadata
 * @param metadataLink
 */
function drawTimeLine(dataType, dataName){

    if(dataType === "HistorisedNotLocalisable" || dataType === "HistorisedLocalisable") {

        var listYear = [];

        if (dataName === "population_2008") {
            listYear = ['2000','2012','2017'];
        } else if (dataName === "bp_2017_fonction") {
            listYear = ['2000','2012', '2014', '2017'];
        } else {
            // Affiche pas la timeline
            console.log("Faire un hide")
        }

        //Les années sont récupérées par Ahmed et Claire lors du check ou du uncheck

        //Problème relevé : Les ticks n'apparaissent que pour les années précisées, mais on peut quand même sélectionner les années "entre".
        
        var listYearNumber=[];
        for (var i in listYear){
            listYearNumber.push(Number(listYear[i]));
        }

        var anneeMin = Math.min.apply(Math, listYearNumber);
        var anneeMax = Math.max.apply(Math, listYearNumber);

        var timeLine = document.getElementById("timeControl");
        var datalist = document.getElementById("tickList");

        if (null != timeLine){
            timeLine.setAttribute("min",anneeMin);
            timeLine.setAttribute("max",anneeMax);
            timeLine.setAttribute("value",anneeMax);
            timeLine.setAttribute("list","tickList");

            //Dessiner les étapes intermédiaires
            var min = timeLine.getAttribute("min");
            var max = timeLine.getAttribute("max");

            for (i in listYearNumber){
                var option = document.createElement("option");
                var text = document.createTextNode(listYearNumber[i]);
                option.appendChild(text);
                datalist.appendChild(option);
            }
        }

        $("#timeControl").show();

    } else {
        $("#timeControl").hide();
        console.log('hide la time line')
    }
};


/**
 * Get a random color for chart
 *
 * @return  {String}    Color   Color string
 */
function getRandomColor() {
    var color = ['#117A65', '#FFC300', '#FF5733', '#C70039', '#900C3F', '#95083F', '#581845', '#D35400', '#C0392B', '#6C3483', '#7D3C98', '#A569BD', '#A93226', '#C0392B', '#B03A2E'];
    return color[Math.floor((Math.random() * color.length) )];
};


/**
 * Definie link
 *
 * @param  {Object}         type                Type of visualisation
 * @param  {Object}         metadataLink        Meta data link
 * @param  {Number}         position            Position of random box
 *
 * @return null
 */
function defineLinks(type, position, metadataLink){
    var seeMore = "#seeMore" + position;
    $(seeMore).attr("href", "visu.php?type=" + type + "&resource=" + metadataLink);
   
    var seeMoreChart = "#seeMoreChart" + position;
    $(seeMoreChart).attr("href", "visu.php?type=" + type + "&resource=" + metadataLink);

    var info = "#info" + position;
    $(info).attr("href", "visu.php?type=info&resource=" + metadataLink);
}


init();








