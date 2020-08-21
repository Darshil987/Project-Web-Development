<footer>
	<div class="foot-container">
		<div class="copyright">
			<p>&copy; Team id:-224929 (Darshil,Kartik) </p>
			<p id="demo">
				<button type="button" class="btn" onclick="loadDoc()">About US</button>
			</p>
			</div>
	</div>
</footer>			
	<script>
		function loadDoc() {
  			var xhttp = new XMLHttpRequest();
  			xhttp.onreadystatechange = function() {
    			if (this.readyState == 4 && this.status == 200) {
      				document.getElementById("demo").innerHTML =
      				this.responseText;
    			}
  			};
  			xhttp.open("GET", "About.txt", true);
			xhttp.send();
			}
</script>
