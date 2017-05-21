function newTop() {
    if (navigator.userAgent.match(/Mobile/i)) {
        window.scrollTo(0, 0);
        var nPageH = $(document).height();
        var nViewH = window.outerHeight;
        if (nViewH > nPageH) {
            nViewH = nViewH / window.devicePixelRatio;
            $('BODY').css('height', nViewH + 'px');
        }
        window.scrollTo(0, 1);
    }

}
var checkMinePresence={
    '1':'url("fire.gif")',
    '0':'green'
};
var createCookie=function(name, value, days) {
    if (days) {
        var date = new Date();
        date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
        var expires = "; expires=" + date.toGMTString();
    }
    else var expires = "";
    document.cookie = name + "=" + value + expires + "; path=/";
}
var readCookie=function(name) {
    var nameEQ = name + "=";
    var ca = document.cookie.split(';');
    for (var i = 0; i < ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) == ' ') c = c.substring(1, c.length);
        if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length, c.length);
    }
    return null;
}
var okModal=function(){
    document.getElementById('modal-body').style.display='none';
    document.getElementById('modal-spread').style.opacity=1;
}
var showModal=function(){
    var modal_body=document.getElementById('modal-body');
    modal_body.style.display='inline';
    modal_body.setAttribute('class','modal-body');
    document.getElementById('modal-spread').style.opacity=0;
    modal_body.innerHTML="<div class='close-modal' onclick='okModal();'>x</div>This game works purely on guess,click on the blue Boxes and guess the danger boxes" +
        " ,If you click on the danger boxes you'll lose the game,but don't worry If you play again your number of guessing box will be reduced" +
        " ,clicking on reset will reset whole game you may have to play from begining."
}

function logALL(action){
    var unique=readCookie('_seccc');
    if(!unique){
        createCookie('_seccc',Math.random()*10000000000,1);
        showModal();
        setTimeout(function(){
            okModal();
        },10000);
    }
    unique=readCookie('_seccc');

    var xmlhttp;
    if (window.XMLHttpRequest)
    {// code for IE7+, Firefox, Chrome, Opera, Safari
        xmlhttp=new XMLHttpRequest();
    }
    else
    {// code for IE6, IE5
        xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp.onreadystatechange=function()
    {
        if (xmlhttp.readyState==4 && xmlhttp.status==200)
        {

        }
    }
    xmlhttp.open("POST","log_mguess.php",true);
    xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
    xmlhttp.send("unique="+unique+"&action="+action);
}
function setMines()
{
    logALL('setMines Called');
    var random_row1=Math.abs(Math.floor((Math.random()*10)-1));
    var random_row2=Math.abs(Math.floor((Math.random()*10)-1));
    var random_row3=Math.abs(Math.floor((Math.random()*10)-1));
    var random_row4=Math.abs(Math.floor((Math.random()*10)-1));
    var random_row5=Math.abs(Math.floor((Math.random()*10)-1));
    var random_col1=Math.abs(Math.floor((Math.random()*10)-1));
    var random_col2=Math.abs(Math.floor((Math.random()*10)-1));
    var random_col3=Math.abs(Math.floor((Math.random()*10)-1));
    var random_col4=Math.abs(Math.floor((Math.random()*10)-1));
    var random_col5=Math.abs(Math.floor((Math.random()*10)-1));

    (random_row1==0)?random_row1=1:random_row1=random_row1;
    (random_row2==0)?random_row2=2:random_row2=random_row2;
    (random_row3==0)?random_row3=3:random_row3=random_row3;
    (random_row4==0)?random_row4=4:random_row4=random_row4;
    (random_row5==0)?random_row5=5:random_row5=random_row5;
    (random_col1==0)?random_col1=1:random_col1=random_col1;
    (random_col2==0)?random_col2=2:random_col2=random_col2;
    (random_col3==0)?random_col3=3:random_col3=random_col3;
    (random_col4==0)?random_col4=4:random_col4=random_col4;
    (random_col5==0)?random_col5=5:random_col5=random_col5;

    var placeMines_object=['r'+random_row1+random_col1,'r'+random_row2+random_col2,'r'+random_row3+random_col3,'r'+random_row4+random_col4,'r'+random_row5+random_col5];
    for(var i=1;i<9;i++){
        for(var j=1;j<9;j++){
            document.getElementById("r"+i+j).setAttribute('class','msweep-text-onload');
        }
    }
    var placeMines=[];
    var count_dup=true;
    while(count_dup){
        for(var k=0;k<placeMines_object.length;k++){
            for(var l=k+1;l<placeMines_object.length;l++){
                if(placeMines_object[k]===placeMines_object[l]){
                    random_row1=Math.abs(Math.floor((Math.random()*10)-1));
                    random_row2=Math.abs(Math.floor((Math.random()*10)-1));
                    random_row3=Math.abs(Math.floor((Math.random()*10)-1));
                    random_row4=Math.abs(Math.floor((Math.random()*10)-1));
                    random_row5=Math.abs(Math.floor((Math.random()*10)-1));
                    random_col1=Math.abs(Math.floor((Math.random()*10)-1));
                    random_col2=Math.abs(Math.floor((Math.random()*10)-1));
                    random_col3=Math.abs(Math.floor((Math.random()*10)-1));
                    random_col4=Math.abs(Math.floor((Math.random()*10)-1));
                    random_col5=Math.abs(Math.floor((Math.random()*10)-1));

                    (random_row1==0)?random_row1=1:random_row1=random_row1;
                    (random_row2==0)?random_row2=2:random_row2=random_row2;
                    (random_row3==0)?random_row3=3:random_row3=random_row3;
                    (random_row4==0)?random_row4=4:random_row4=random_row4;
                    (random_row5==0)?random_row5=5:random_row5=random_row5;
                    (random_col1==0)?random_col1=1:random_col1=random_col1;
                    (random_col2==0)?random_col2=2:random_col2=random_col2;
                    (random_col3==0)?random_col3=3:random_col3=random_col3;
                    (random_col4==0)?random_col4=4:random_col4=random_col4;
                    (random_col5==0)?random_col5=5:random_col5=random_col5;
                    placeMines_object=['r'+random_row1+random_col1,'r'+random_row2+random_col2,'r'+random_row3+random_col3,'r'+random_row4+random_col4,'r'+random_row5+random_col5];
                }
                else{
                }
            }
        }
        count_dup=false;
    }
    placeMines=placeMines_object;
    this.checkMine=function(id){
        var count=0;
        if(placeMines.indexOf(id)<0){
            document.getElementById(id).removeAttribute('class','msweep-text-onload');
            document.getElementById(id).setAttribute('class','msweep-text-after-click');
        }
        else{
            for(var i=0;i<placeMines.length;i++){
                var place_mine_element= document.getElementById(placeMines[i]);
                place_mine_element.style.backgroundImage=checkMinePresence[1];
                place_mine_element.style.backgroundColor='#F84F01';
                place_mine_element.style.backgroundRepeat='no-repeat';
            }
            var err_display=document.getElementById('error-display');
            err_display.removeAttribute('class','animated slideOutUp');
            err_display.setAttribute('class','animated slideInDown');
            err_display.style.display="block";
            err_display.innerHTML="YOU LOST <div class='btn-sm btn-default play-again ' onclick='clearFields(0)'>Play Again</div>";
            logALL('lost at '+game_count);
		_gaq.push(['_trackPageview','lost_at '+game_count]);
            if(game_count==0){
                final_count=59;
            }
            for(var i=1;i<9;i++){
                for(var j=1;j<9;j++){
                    document.getElementById("r"+i+j).disabled=true;
                }
            }

        }
        for(var i=1;i<9;i++){
            for(var j=1;j<9;j++){
                if(document.getElementById("r"+i+j).getAttribute('class')==='msweep-text-after-click')
                {
                    count++;
                    document.getElementById('counter').innerHTML='Remaining Boxes '+(final_count-count);
                    if(count===final_count)
                    {
                        setMainContainerAttribute();
                        var err_display=document.getElementById('error-display');
                        err_display.removeAttribute('class','animated slideOutUp');
                        err_display.setAttribute('class','animated slideInDown');
                        err_display.style.display="block";
                        document.getElementById('counter').innerHTML='Remaining Boxes '+(final_count-count);
                        err_display.innerHTML="Congrates You Won!!!";
                        logALL('game won game count ='+game_count);
			_gaq.push(['_trackPageview','Won']);
                        game_count=0;
                        final_count=59;
                    }
                }
            }
        }
    }
}
var game_count=0;
var final_count=59;
var clearSet={
    1:'1',
    2:'1',
    3:'1',
    4:'1',
    5:'2',
    6:'2',
    7:'2',
    8:'3',
    9:'3',
    10:'4',
    11:'4'
}
function clearFields(val){
    cl={};
    if(val){
        game_count=0;
        final_count=59;
        logALL('clear field Called for reset');
    }
    else{
        logALL('clear field Called for play again game count='+game_count);
    }
    document.getElementById('counter').innerHTML='Remaining Boxes '+final_count;
    setOtherAttributes();
    for(var i=1;i<9;i++){
        for(var j=1;j<9;j++){
            var ijElement=document.getElementById("r"+i+j);
            ijElement.setAttribute('class','msweep-text-onload');
            ijElement.disabled=false;
            ijElement.style.backgroundImage='';
            ijElement.style.backgroundColor='';
            ijElement.setAttribute('data-place-mine','');
        }
    }
    var err_display= document.getElementById('error-display');
    err_display.innerHTML="";
    err_display.removeAttribute('class','animated slideInDown');
    err_display.setAttribute('class','animated slideOutUp');
    cl=new setMines();
    if(game_count==5 || game_count==8 || game_count==10 || game_count==11){
        setMainContainerAttribute();
        var game_options=document.getElementById('game-options-'+clearSet[game_count]);
        game_options.style.display='block';
        game_options.removeAttribute('class','game-options animated slideOutUp');
        game_options.setAttribute('class','game-options animated slideInDown');
        logALL('clear field in game count = '+game_count);
    }
    game_count++;
    if(game_count>5){
        final_count=50;
    }
    if(game_count>8){
        final_count=40;
    }
    if(game_count>10){
        final_count=30;
    }
    if(game_count>11){
        final_count=59;
    }
    if(game_count>=11){
        game_count=0;

    }
    document.getElementById('counter').innerHTML='Remaining Boxes '+final_count;
    return cl;
}

function slideUp(){
    setOtherAttributes();
}

var setMainContainerAttribute=function(){
    document.getElementById('main-div').setAttribute('class','div-center container reduce-index');
}
var setOtherAttributes=function(){
    document.getElementById('main-div').removeAttribute('class','reduce-index');
    document.getElementById('main-div').setAttribute('class','div-center container');
    document.getElementById('game-options-1').removeAttribute('class','game-options animated slideInDown');
    document.getElementById('game-options-1').setAttribute('class','game-options animated slideOutUp');
    document.getElementById('game-options-2').removeAttribute('class','game-options animated slideInDown');
    document.getElementById('game-options-2').setAttribute('class','game-options animated slideOutUp');
    document.getElementById('game-options-3').removeAttribute('class','game-options animated slideInDown');
    document.getElementById('game-options-3').setAttribute('class','game-options animated slideOutUp');
    document.getElementById('game-options-4').removeAttribute('class','game-options animated slideInDown');
    document.getElementById('game-options-4').setAttribute('class','game-options animated slideOutUp');
}
