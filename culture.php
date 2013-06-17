<html>
	<head>
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<body>
		<div is="fb-root">
			<div id="contentWrapper">
				<div>
					<div>
						<img src="tab-header-3.jpg" />
					</div>
					<div class="btn">
						<div>
							<a href="index.php">Home</a>
					    </div>
					    <div>
							<a href="ourcountry.php">Our Country</a>
					    </div>
					    <div>
					    	<a href="investmentopportunity.php">Investment Opportunity</a>
						</div>
						<div>
							<a href="culture.php">Culture</a>
					    </div>
						<div>
							<a href="visaform.php">Visa Form</a>
						</div>
					</div>
				</div>
				<div class="gallery">
					<p>Culture</p>
				</div>
				<div class="invest">
						<div class = "investcontent">
							<p id="investcontent">Burkina Faso is a culturally rich country and is very well known for its drumming culture. The week long Pan African Film and television Festival FESPACO is the largest African film festival with participation from all African countries in fields of television and films. It is held every 2 years in Ouagadougou. The International Fair of Handicrafts (SIAO) at Ouagadougou, the National Cultural Week at Bobo and International Festivals of Drama, attract tourists from all over the world.</p>
						</div>
						
						<div class = "investcontent">
							<p id="investcontent">For more detail visit FESPACO web site:-  <a href="http://www.fespaco.bf">www.fespaco.bf</a> .</p>
						</div>
						<div class = "investcontent">
							<p id="investcontent">For more detail visit SIAO web site:-  <a href="http://www.siao.bf">www.siao.bf</a> .</p>
						</div>
				</div>
				<div class="gallery">
					<p>Tourism</p>
				</div>
				<div class="invest">
						<div class = "investcontent">
							<p id="investcontent">Burkina Faso has a rich cultural heritage that attracts many tourists from around the world. The country can be divided into four major tourist zones:</p>
						</div>
						<div class = "investcontent">
							<p id="investheader">Central Zone</p>
							<p id="investcontent">Ouagadougou, the capital of Burkina Faso has a wide range of facilities and well appointed hotels making it an ideal location for business tourism and holding of events like seminars, conferences and workshops. Other attractions in this area are the granite site at Laongo, the crocodiles at Sabou pond, Bazoule, Ranch Nazinga, the Ziniare Animal Park and the Museum of Manega.</p>
						</div>
						<div class = "investcontent">
							<p id="investheader">Western Zone</p>
							<p id="investcontent">This extends around Bobo- Dioulasso, the second largest city in Burkina Faso. This is a zone for premier adventure tourism and is also an ideal location for exploring the ancient traditions and historical sites. The main tourist attractions are Dioulasso Mosque-ba, the hippos Bala, Lake Tengrela, Peak Sindou Museum Gaoua. Bobo- Dioulasso is also the seat of the national week of Culture.</p>
						</div>
						<div class = "investcontent">
							<p id="investheader">Eastern zone</p>
							<p id="investcontent">This is the area's premier hunting tourism ground. It contains many national parks and wild life reserves (Arly park, Park W, Pama  reserve etc.) The best period to visit this area is between December and June.</p>
						</div>
						<div class = "investcontent">
							<p id="investheader">The Burkinabe Sahel Zone</p>
							<p id="investcontent">This is a predominantly dry zone and is inhabited by Nomads who cross this region on camels. FESTICHAMS is a festival dedicated to camels and is held here. The Oursi sand dunes, rock carvings of Pobe Menago are the chief attractions here.</p>
						</div>
				</div>
				</br>
				<div style="clear:both;"></div>			
				
				<div class="footerbar">
					<p class="footerlink"><a href="http://www.rcorp.co.in" style="text-decoration: none; color: white;">Designed by Ramanan Corporation</a></p>
				</div>
			</div>
		</div>

		<script type="text/javascript">
		   window.fbAsyncInit = function() { 
		        FB.init({
		        	appId: '397865700321865', 
		        	status: true, 
		        	cookie: true, 
		        	xfbml: true, 
		        	oauth: true
		       	});
		    window.setTimeout(function() { 
		        FB.Canvas.setAutoGrow(); }, 250); 
		    }; 
		     
		    (function() { var e = document.createElement('script'); 
		    e.async = true; 
		    e.src = document.location.protocol + '//connect.facebook.net/en_US/all.js'; 
		    document.getElementById('fb-root').appendChild(e); }()); 
		</script>


		<script type="text/javascript" src="build/dojo/dojo.js" data-dojo-config="async: 1, isDebug: 0"></script>
		<script type="text/javascript">
			require(['dijitx/widget/Collager', 'dojo/domReady!'], function (Collager){
				var c = new Collager({
					id: 'collager'
				}, 'collager')
			})
		</script>
	</body>
</html>
