
$(window).load(function() {
    $.post("../logClicks.php",
        {
            eventType:'pageLoaded',
            objectType: 'task started',
            objectID: $('#task-description').text()
        }
    );
})

$(document).ready(function(){

    /*$.post("../logClicks.php",
        {
            eventType:'pageLoaded',
            objectType: 'task started',
            objectID: $('#task-description').html()
        }
    );*/

    //mouse over thumbnail
    $(".img").mouseenter(function(event){
        $.post("../logClicks.php",
                {
                    eventType: 'mouseenter',
                    objectType: 'thumbnail',
                    objectID: $(this).find("a").attr("href"),
                    timestamp: event.timestamp
                }
            );
        });

    //mouse off thumbnail
    $(".img").mouseleave(function(event){
        $.post("../logClicks.php",
                {
                    eventType: 'mouseleave',
                    objectType: "thumbnail",
                    objectID: $(this).find("a").attr("href"),
                    timestamp: event.timestamp
                }
            );
        });
    
    //click thumbnail to open viewer
    $(".img").click(function(event){
        $.post("../logClicks.php",
                {
                    eventType: 'click',
                    objectType: "thumbnail",
                    objectValue: "null",
                    objectID: $(this).find("a").attr("href"),
                    timestamp: event.timestamp
                }
            );
        });
    
    //click close button to close viewer
    $(".lb-close").click(function(event){
        $.post("../logClicks.php",
            {
                eventType: 'click',
                objectType:"close button",
                objectValue: "null",
                objectID: $(".lb-image").attr("src"),
                timestamp: event.timestamp
            }
        );
    });

    //click found it button
    $("#foundIt").click(function(event){
        $.post("../logClicks.php",
            {
                eventType: 'click',
                objectType:"found it button",
                objectValue: "null",
                objectID: $(".lb-image").attr("src"),
                timestamp: event.timestamp
            }
        );
        
        if($(this).hasClass('selected')) {
      deselect($(this));               
    } else {
      $(this).addClass('selected');
      $('.pop').slideFadeToggle();
    }
    return false;
    });

    //select confidence rating for found it button
    $(".confidence_rating").click(function(event){  
        $.post("../logClicks.php",
            {
                eventType: 'click',
                objectType:"confidence button",
                objectValue: $(this).html(),
                objectID: $(".lb-image").attr("src"),
                timestamp: event.timestamp,
                comment: $("input:text[name=thumbnail-recognition]").val()
            }
        );

        $(".lb-dataContainer").html("");
        $("#confidence").css("visibility", "hidden");
        $("#next").css("visibility", "visible");
    });

});

function deselect(e) {
  $('.pop').slideFadeToggle(function() {
    e.removeClass('selected');
  });    
}

$.fn.slideFadeToggle = function(easing, callback) {
  return this.animate({ opacity: 'toggle', height: 'toggle' }, 'fast', easing, callback);
};