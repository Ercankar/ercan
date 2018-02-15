$(document).ready(function(){
    $("#belirlizaman").click(function(){
        var sehir = $("#sehir").val();
        var key = '7b58258b3cdc3deff0c35433216579e5';

        $.ajax({
            url:'http://api.openweathermap.org/data/2.5/forecast',
            dataType:'json',
            type:'GET',
            data:{ q:sehir, appid: key, units: 'metric'},
    
            success: function(data){


                var wf = '';
                $.each(data.list, function(index, val){

                    wf +=  '<p><b>' + val.main.temp + '&deg;C'  + ' | ' + 
                    val.dt_txt + ' ' + '<hr>'  




                });
                $("#sayfa1").html(wf.substr(0,302));
                $("#sayfa2").html(wf.substr(300,319));
                 $("#sayfa3").html(wf.substr(319,338));
                  $("#sayfa4").html(wf.substr(338,357));
                   $("#sayfa5").html(wf.substr(357,376));
                    $("#sayfa6").html(wf.substr(376,395));
                    $("#sayfa7").html(wf.substr(395,414));
               


                



             }
        });
    });
});



 
