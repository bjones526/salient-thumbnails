<?php

output('a document written by Frank Porter Graham that encourages someone to join the finance committee', 1, 'salient', 'Citizen&#39;s Library Movement', 'CitizensLibraryMovement', "2.html");
output('a document in which someone declines to add his or her name to Graham&#39;s proposed statement and expresses regret that Social Security has become a partisan issue', 2, 'full', 'Economic Security Council', 'EconomicSecurityCouncil', "3.html");
output('a document from a librarian that mentions receiving a donation', 3, 'salient', 'Citizen&#39;s Library Movement', 'CitizensLibraryMovement', "4.html");
output('a document signed by Graham&#39;s vice-chairman, Paul Kellogg, that mentions the New York Herald Tribune', 4, 'full', 'Economic Security Council', 'EconomicSecurityCouncil', "message.html");

$message = fopen("message.html", "w");
fwrite($message, '<html>
<head>
<link rel="stylesheet" type="text/css" href="../style.css">
<link rel="stylesheet" href="../lightbox2-master/dist/css/lightbox.css">
</head>
<body>
    <p class="participant-message">You&#39;re done with the finding portion. The link below will take you to an article about Frank Porter Graham, which you should read at your own pace. When you&#39;ve finished reading and are ready to move on to the next task, let the moderator know.
        </br></br><a href="http://ncpedia.org/biography/graham-frank-porter">Read the article</a>
        <div class="secret-link" style="visibility:hidden"><a href="5.html">next</a></div>
    </p>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="../logClicks.js"></script>

<script>
$(document).ready(function(){
    $(".participant-message").click(function(event){
        $(".secret-link").css("visibility","visible");
    });
});
</script>
</body>
</html>');


function output($task_description, $task_number, $thumbnail_type, $header, $document_set, $next_link){

    $refind_task_number = $task_number+4;
    if($task_number < 4) $refind_link = $refind_task_number + 1 .'.html';
    else $refind_link = "https://unc.az1.qualtrics.com/SE/?SID=SV_06WkS49VrST8L41";

	$file1 = fopen($task_number.".html", "w"); 

    fwrite($file1, '<html>
<head>
<link rel="stylesheet" type="text/css" href="../style.css">
<link rel="stylesheet" href="../lightbox2-master/dist/css/lightbox.css">

</head>
<body>
    <h1>'.$header.'</h1>
    <p id="task-description">Task '.$task_number.': Select '.$task_description.'.</p>
    
    <div class="img">
        <a href="../'.$document_set.'/1.jpeg" data-lightbox="1"><img src="../'.$document_set.'/'.$thumbnail_type.'_1.jpeg"></a>
    </div> 

    <div class="img">
        <a href="../'.$document_set.'/2.jpeg" data-lightbox="2"><img src="../'.$document_set.'/'.$thumbnail_type.'_2.jpeg"></a>
    </div> 

    <div class="img">
        <a href="../'.$document_set.'/3.jpeg" data-lightbox="3"><img src="../'.$document_set.'/'.$thumbnail_type.'_3.jpeg"></a>
    </div> 

    <div class="img">
        <a href="../'.$document_set.'/4.jpeg" data-lightbox="4"><img src="../'.$document_set.'/'.$thumbnail_type.'_4.jpeg"></a>
    </div> 

    <div class="img">
        <a href="../'.$document_set.'/5.jpeg" data-lightbox="5"><img src="../'.$document_set.'/'.$thumbnail_type.'_5.jpeg"></a>
    </div> 

    <div class="img">
        <a href="../'.$document_set.'/6.jpeg" data-lightbox="6"><img src="../'.$document_set.'/'.$thumbnail_type.'_6.jpeg"></a>
    </div> 

    <div class="img">
        <a href="../'.$document_set.'/7.jpeg" data-lightbox="7"><img src="../'.$document_set.'/'.$thumbnail_type.'_7.jpeg"></a>
    </div>

    <div class="img">
        <a href="../'.$document_set.'/8.jpeg" data-lightbox="8"><img src="../'.$document_set.'/'.$thumbnail_type.'_8.jpeg"></a>
    </div>  

    <div class="img">
        <a href="../'.$document_set.'/9.jpeg" data-lightbox="9"><img src="../'.$document_set.'/'.$thumbnail_type.'_9.jpeg"></a>
    </div> 

    <div class="img">
        <a href="../'.$document_set.'/10.jpeg" data-lightbox="10"><img src="../'.$document_set.'/'.$thumbnail_type.'_10.jpeg"></a>
    </div> 

    <div class="img">
        <a href="../'.$document_set.'/11.jpeg" data-lightbox="11"><img src="../'.$document_set.'/'.$thumbnail_type.'_11.jpeg"></a>
    </div> 

    <div class="img">
        <a href="../'.$document_set.'/12.jpeg" data-lightbox="12"><img src="../'.$document_set.'/'.$thumbnail_type.'_12.jpeg"></a>
    </div> 

    <div class="img">
        <a href="../'.$document_set.'/13.jpeg" data-lightbox="13"><img src="../'.$document_set.'/'.$thumbnail_type.'_13.jpeg"></a>
    </div> 

    <div class="img">
        <a href="../'.$document_set.'/14.jpeg" data-lightbox="14"><img src="../'.$document_set.'/'.$thumbnail_type.'_14.jpeg"></a>
    </div> 

    <div class="img">
        <a href="../'.$document_set.'/15.jpeg" data-lightbox="15"><img src="../'.$document_set.'/'.$thumbnail_type.'_15.jpeg"></a>
    </div> 

    <div class="img">
        <a href="../'.$document_set.'/16.jpeg" data-lightbox="16"><img src="../'.$document_set.'/'.$thumbnail_type.'_16.jpeg"></a>
    </div> 

    <div class="img">
        <a href="../'.$document_set.'/17.jpeg" data-lightbox="17"><img src="../'.$document_set.'/'.$thumbnail_type.'_17.jpeg"></a>
    </div> 

    <div class="img">
        <a href="../'.$document_set.'/18.jpeg" data-lightbox="18"><img src="../'.$document_set.'/'.$thumbnail_type.'_18.jpeg"></a>
    </div> 

    <div class="img">
        <a href="../'.$document_set.'/19.jpeg" data-lightbox="19"><img src="../'.$document_set.'/'.$thumbnail_type.'_19.jpeg"></a>
    </div> 

    <div class="img">
        <a href="../'.$document_set.'/20.jpeg" data-lightbox="20"><img src="../'.$document_set.'/'.$thumbnail_type.'_20.jpeg"></a>
    </div> 

    <div class="img">
        <a href="../'.$document_set.'/21.jpeg" data-lightbox="21"><img src="../'.$document_set.'/'.$thumbnail_type.'_21.jpeg"></a>
    </div> 

    <div class="img">
        <a href="../'.$document_set.'/22.jpeg" data-lightbox="22"><img src="../'.$document_set.'/'.$thumbnail_type.'_22.jpeg"></a>
    </div> 

    <div class="img">
        <a href="../'.$document_set.'/23.jpeg" data-lightbox="23"><img src="../'.$document_set.'/'.$thumbnail_type.'_23.jpeg"></a>
    </div> 

    <div class="img">
        <a href="../'.$document_set.'/24.jpeg" data-lightbox="24"><img src="../'.$document_set.'/'.$thumbnail_type.'_24.jpeg"></a>
    </div> 

    <div class="img">
        <a href="../'.$document_set.'/25.jpeg" data-lightbox="25"><img src="../'.$document_set.'/'.$thumbnail_type.'_25.jpeg"></a>
    </div> 

    <div class="img">
        <a href="../'.$document_set.'/26.jpeg" data-lightbox="26"><img src="../'.$document_set.'/'.$thumbnail_type.'_26.jpeg"></a>
    </div> 

    <div class="img">
        <a href="../'.$document_set.'/27.jpeg" data-lightbox="27"><img src="../'.$document_set.'/'.$thumbnail_type.'_27.jpeg"></a>
    </div> 

    <div class="img">
        <a href="../'.$document_set.'/28.jpeg" data-lightbox="28"><img src="../'.$document_set.'/'.$thumbnail_type.'_28.jpeg"></a>
    </div> 

    <div class="img">
        <a href="../'.$document_set.'/29.jpeg" data-lightbox="29"><img src="../'.$document_set.'/'.$thumbnail_type.'_29.jpeg"></a>
    </div> 

    <div class="img">
        <a href="../'.$document_set.'/30.jpeg" data-lightbox="30"><img src="../'.$document_set.'/'.$thumbnail_type.'_30.jpeg"></a>
    </div>    
        
    <div class="img">
        <a href="../'.$document_set.'/31.jpeg" data-lightbox="31"><img src="../'.$document_set.'/'.$thumbnail_type.'_31.jpeg"></a>    
    </div>

    <div class="img">
        <a href="../'.$document_set.'/32.jpeg" data-lightbox="32"><img src="../'.$document_set.'/'.$thumbnail_type.'_32.jpeg"></a>
    </div>    
        
    <div class="img">
        <a href="../'.$document_set.'/33.jpeg" data-lightbox="33"><img src="../'.$document_set.'/'.$thumbnail_type.'_33.jpeg"></a>    
    </div>

    <div class="img">
        <a href="../'.$document_set.'/34.jpeg" data-lightbox="34"><img src="../'.$document_set.'/'.$thumbnail_type.'_34.jpeg"></a>
    </div>

    <div class="img">
        <a href="../'.$document_set.'/35.jpeg" data-lightbox="35"><img src="../'.$document_set.'/'.$thumbnail_type.'_35.jpeg"></a>  
    </div>
        
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="../lightbox2-master/dist/js/lightbox.js"></script>
<script src="../logClicks.js"></script>

<script>

$(document).ready(function(){
    $("#next").click(function(event){
        document.location.href = "'.$next_link.'";
    });    
});

</script>
</body>
</html>'
);


$file2 = fopen($refind_task_number.".html", "w"); 

    fwrite($file2, '<html>
<head>
<link rel="stylesheet" type="text/css" href="../style.css">
<link rel="stylesheet" href="../lightbox2-master/dist/css/lightbox.css">

</head>
<body>
    <h1>'.$header.'</h1>
    <p id="task-description">Task '.$refind_task_number.': <strong>Re-find</strong> the document you selected for task '
    .$task_number.' ('.$task_description.').</p>
    
    <div class="img">
        <a href="../'.$document_set.'/1.jpeg" data-lightbox="1"><img src="../'.$document_set.'/'.$thumbnail_type.'_1.jpeg"></a>
    </div> 

    <div class="img">
        <a href="../'.$document_set.'/2.jpeg" data-lightbox="2"><img src="../'.$document_set.'/'.$thumbnail_type.'_2.jpeg"></a>
    </div> 

    <div class="img">
        <a href="../'.$document_set.'/3.jpeg" data-lightbox="3"><img src="../'.$document_set.'/'.$thumbnail_type.'_3.jpeg"></a>
    </div> 

    <div class="img">
        <a href="../'.$document_set.'/4.jpeg" data-lightbox="4"><img src="../'.$document_set.'/'.$thumbnail_type.'_4.jpeg"></a>
    </div> 

    <div class="img">
        <a href="../'.$document_set.'/5.jpeg" data-lightbox="5"><img src="../'.$document_set.'/'.$thumbnail_type.'_5.jpeg"></a>
    </div> 

    <div class="img">
        <a href="../'.$document_set.'/6.jpeg" data-lightbox="6"><img src="../'.$document_set.'/'.$thumbnail_type.'_6.jpeg"></a>
    </div> 

    <div class="img">
        <a href="../'.$document_set.'/7.jpeg" data-lightbox="7"><img src="../'.$document_set.'/'.$thumbnail_type.'_7.jpeg"></a>
    </div>

    <div class="img">
        <a href="../'.$document_set.'/8.jpeg" data-lightbox="8"><img src="../'.$document_set.'/'.$thumbnail_type.'_8.jpeg"></a>
    </div>  

    <div class="img">
        <a href="../'.$document_set.'/9.jpeg" data-lightbox="9"><img src="../'.$document_set.'/'.$thumbnail_type.'_9.jpeg"></a>
    </div> 

    <div class="img">
        <a href="../'.$document_set.'/10.jpeg" data-lightbox="10"><img src="../'.$document_set.'/'.$thumbnail_type.'_10.jpeg"></a>
    </div> 

    <div class="img">
        <a href="../'.$document_set.'/11.jpeg" data-lightbox="11"><img src="../'.$document_set.'/'.$thumbnail_type.'_11.jpeg"></a>
    </div> 

    <div class="img">
        <a href="../'.$document_set.'/12.jpeg" data-lightbox="12"><img src="../'.$document_set.'/'.$thumbnail_type.'_12.jpeg"></a>
    </div> 

    <div class="img">
        <a href="../'.$document_set.'/13.jpeg" data-lightbox="13"><img src="../'.$document_set.'/'.$thumbnail_type.'_13.jpeg"></a>
    </div> 

    <div class="img">
        <a href="../'.$document_set.'/14.jpeg" data-lightbox="14"><img src="../'.$document_set.'/'.$thumbnail_type.'_14.jpeg"></a>
    </div> 

    <div class="img">
        <a href="../'.$document_set.'/15.jpeg" data-lightbox="15"><img src="../'.$document_set.'/'.$thumbnail_type.'_15.jpeg"></a>
    </div> 

    <div class="img">
        <a href="../'.$document_set.'/16.jpeg" data-lightbox="16"><img src="../'.$document_set.'/'.$thumbnail_type.'_16.jpeg"></a>
    </div> 

    <div class="img">
        <a href="../'.$document_set.'/17.jpeg" data-lightbox="17"><img src="../'.$document_set.'/'.$thumbnail_type.'_17.jpeg"></a>
    </div> 

    <div class="img">
        <a href="../'.$document_set.'/18.jpeg" data-lightbox="18"><img src="../'.$document_set.'/'.$thumbnail_type.'_18.jpeg"></a>
    </div> 

    <div class="img">
        <a href="../'.$document_set.'/19.jpeg" data-lightbox="19"><img src="../'.$document_set.'/'.$thumbnail_type.'_19.jpeg"></a>
    </div> 

    <div class="img">
        <a href="../'.$document_set.'/20.jpeg" data-lightbox="20"><img src="../'.$document_set.'/'.$thumbnail_type.'_20.jpeg"></a>
    </div> 

    <div class="img">
        <a href="../'.$document_set.'/21.jpeg" data-lightbox="21"><img src="../'.$document_set.'/'.$thumbnail_type.'_21.jpeg"></a>
    </div> 

    <div class="img">
        <a href="../'.$document_set.'/22.jpeg" data-lightbox="22"><img src="../'.$document_set.'/'.$thumbnail_type.'_22.jpeg"></a>
    </div> 

    <div class="img">
        <a href="../'.$document_set.'/23.jpeg" data-lightbox="23"><img src="../'.$document_set.'/'.$thumbnail_type.'_23.jpeg"></a>
    </div> 

    <div class="img">
        <a href="../'.$document_set.'/24.jpeg" data-lightbox="24"><img src="../'.$document_set.'/'.$thumbnail_type.'_24.jpeg"></a>
    </div> 

    <div class="img">
        <a href="../'.$document_set.'/25.jpeg" data-lightbox="25"><img src="../'.$document_set.'/'.$thumbnail_type.'_25.jpeg"></a>
    </div> 

    <div class="img">
        <a href="../'.$document_set.'/26.jpeg" data-lightbox="26"><img src="../'.$document_set.'/'.$thumbnail_type.'_26.jpeg"></a>
    </div> 

    <div class="img">
        <a href="../'.$document_set.'/27.jpeg" data-lightbox="27"><img src="../'.$document_set.'/'.$thumbnail_type.'_27.jpeg"></a>
    </div> 

    <div class="img">
        <a href="../'.$document_set.'/28.jpeg" data-lightbox="28"><img src="../'.$document_set.'/'.$thumbnail_type.'_28.jpeg"></a>
    </div> 

    <div class="img">
        <a href="../'.$document_set.'/29.jpeg" data-lightbox="29"><img src="../'.$document_set.'/'.$thumbnail_type.'_29.jpeg"></a>
    </div> 

    <div class="img">
        <a href="../'.$document_set.'/30.jpeg" data-lightbox="30"><img src="../'.$document_set.'/'.$thumbnail_type.'_30.jpeg"></a>
    </div>    
        
    <div class="img">
        <a href="../'.$document_set.'/31.jpeg" data-lightbox="31"><img src="../'.$document_set.'/'.$thumbnail_type.'_31.jpeg"></a>    
    </div>

    <div class="img">
        <a href="../'.$document_set.'/32.jpeg" data-lightbox="32"><img src="../'.$document_set.'/'.$thumbnail_type.'_32.jpeg"></a>
    </div>    
        
    <div class="img">
        <a href="../'.$document_set.'/33.jpeg" data-lightbox="33"><img src="../'.$document_set.'/'.$thumbnail_type.'_33.jpeg"></a>    
    </div>

    <div class="img">
        <a href="../'.$document_set.'/34.jpeg" data-lightbox="34"><img src="../'.$document_set.'/'.$thumbnail_type.'_34.jpeg"></a>
    </div>

    <div class="img">
        <a href="../'.$document_set.'/35.jpeg" data-lightbox="35"><img src="../'.$document_set.'/'.$thumbnail_type.'_35.jpeg"></a>  
    </div>
        
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="../lightbox2-master/dist/js/lightbox_refind.js"></script>
<script src="../logClicks.js"></script>

<script>

$(document).ready(function(){
    $("#next").click(function(event){
        document.location.href = "'.$refind_link.'";
    });    
});

</script>
</body>
</html>'

);
	
}

?>