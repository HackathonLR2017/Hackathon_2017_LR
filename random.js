
/**
 * Call ajax request and transfer data to draw visualisation
 *
 * @return
 */
function generateAleatoryVariables() {
    // Get random values between 1 and 4 and put them in an array
    var numberArray = [];
    for (i = 0; i < 2; i++) {
        numberArray.push(Math.floor(Math.random() * 3));
    }

    var dataArray = ['&db=insee&table=population_2008&format=json', '&db=stationnement&table=disponibilite_parking&format=json',/* '&db=archive&table=fiche&format=json',*/ '&db=budget&table=bp_2017_fonction&format=json'];

    // Get data from open data la rochelle
    for (i = 0; i < numberArray.length; i++) {
        // Get final URL
        var j = numberArray[i];

        ajaxRequest(dataArray[j], i, function(dataToSend) {
            drawRandomVisualization(dataToSend.data, dataToSend.i, dataToSend.metadata, dataToSend.linkMetadata);
            return;
        });
    };
};

/**
 * Init
 *
 * @return
 */
function init() {
    $('.chart').hover(
        function() {$(this).animate({ 'zoom': 1.1 }, 100); },
        function() {$(this).animate({ 'zoom': 1 }, 100);
    });

    $("a[href='#top']").click(function() {
        $("html, body").animate({ scrollTop: 0 }, "slow");
    });

    return;
};


init();
generateAleatoryVariables();
