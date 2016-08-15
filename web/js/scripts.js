/**
 * Created by Twentyfour7 on 8/11/2016.
 */

$(document).ready(function () {

    /* SEARCH BLOCK START */
    var theKeyword = "";
    $("#startAirport-filter").keyup(function() {
        theKeyword = $(this).val();
        if(theKeyword.length>3) {
            getAirports(theKeyword);
        }
        console.log($(this).val());
    });
    /* SEARCH BLOCK END   */

});

function getAirports(theKeyword) {
    $.ajax({
            method: "GET",
            url: "/getAirports",
            data: { getAirports: theKeyword },
            cache: false
        })
        .done(function( html ) {
            console.log( html );
            //$("#results").append( html );
        });
}