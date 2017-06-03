/*var lock; // To stop/start timer 1 for running 0 for stopping
var secs = 2500;
function starttimer(element){
    var task = $(element).formSerialize().split("&");
    console.log(task);
    // Is there a timer? -> restart
    $(element).append("<h1 id='timer'></h1>"); // id=timer
    countdown();
    // Alert!!!
    //$(element).find("div#"+element.id).attr("style","display:''");
}
function countdown(){
    document.getElementById("timer").textContent=parseInt(secs/60).toString()+":"+parseInt(secs%60).toString();
    secs--;
    lock = setTimeout(countdown(),1000);
}
function stoptimer(element){

}
*/
var lock; // Timer object
var secs; 
function starttimer(element){
    var task = $(element).formSerialize().split("&")[0].split("=")[1].split("+").join(" ");
    secs = parseInt($(element).formSerialize().split("&")[1].split("=")[1])*60;
    if(lock == null){
        // New timer
        $(element).append("<div><h1 id='task'>"+task+"</h1>");
        $(element).append("<h1 id='timer'></h1></div>"); // id=timer
        $(element).append("<audio id='beep' src='static/audio/beep.mp3' autoplay='autoplay' loop='loop' muted='muted'>Ha! Not beep for you!</audio>")
        countdown();
    }
    else{
        // Restart timer
        document.getElementById("task").textContent=task;
        document.getElementById("beep").muted=true;
        var temp = secs;
        stoptimer(lock);
        secs = temp;
        countdown();
    }
    // Alert!!!
    //$(element).find("div#"+element.id).attr("style","display:''");
}
function countdown(){
    document.getElementById("timer").textContent=parseInt(secs/60).toString()+":"+parseInt(secs%60).toString();
    secs--;
    console.log(secs);
    if(secs <0){
        stoptimer(lock);
        console.log(lock);
        console.log(document.getElementsByTagName("audio"));
        
        document.getElementsByTagName("audio")[0].muted=false;
        return;
    }
    lock = setTimeout("countdown()",1000);  // Have to use ""
}
function stoptimer(element){
    clearTimeout(lock);
    secs = 0;
}
