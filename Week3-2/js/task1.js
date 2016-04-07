(function(){ //on load event

var task1 = {
	render: function(){
		document.getElementById("screenX").textContent = window.screenX;
		document.getElementById("screenY").textContent = window.screenY;
		
		document.getElementById("screenWidth").textContent = window.innerWidth;
		document.getElementById("screenHeight").textContent = window.innerHeight;
		document.getElementById("location").textContent = window.location.pathname;
		
	},
	
	resize: function()  {
		window.addEventListener("resize", this.render);
	},
	
	devInfo: function() {
		var btnDev = document.getElementById("dev-info");
		btnDev.addEventListener("click", function() {
			
			var nameOfDev = "Sebastian Sukler";
			var job = "IT Student";
			var website = "<a href='https://github.com/life6241' target='_blank'>www.github.com/life6241</a>";
			var showDevInfo = nameOfDev +"<br>" + job + "<br>"+ website;
			
			document.getElementById("dev-info-container").innerHTML = showDevInfo;
								
		});
	}
	
}
task1.render();
task1.resize();
task1.devInfo();
})(); // end on load event