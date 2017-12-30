function CustomAlert(){
    this.render = function(dialog){
        var winW = window.innerWidth;
        var winH = window.innerHeight;
        var alertoverlay = document.getElementById('alertoverlay');
        var alertbox = document.getElementById('alertbox');
        alertoverlay.style.display = "block";
        alertoverlay.style.height = winH+"px";
        alertbox.style.left = (winW/2) - (550 * .5)+"px";
        alertbox.style.top = "100px";
        alertbox.style.display = "block";
        document.getElementById('alertboxhead').innerHTML = "---";
        document.getElementById('alertboxbody').innerHTML = dialog;
        document.getElementById('alertboxfoot').innerHTML = '<button onclick="Alert.ok();">OK</button>';
    }
	this.ok = function(){
		document.getElementById('alertbox').style.display = "none";
		document.getElementById('alertoverlay').style.display = "none";
		location.href = "index.html";
	}
}
var Alert = new CustomAlert();