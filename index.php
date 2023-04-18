<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />
    <script src="index.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet"/>
    <title>Nagios XI Node Calculator</title>
   <!-- <header positionn="fixed"> Nagios XI: Node Estimation</header> -->
  </head>

  <body>
	<div id="card-box">
		<div id="input-card">
  	 		<h1> Nagios XI Node Calculator</h1>
			
			<div id="locations-to-monitor">
				<label for="xiLecenseQuote">
					Number of locations to monitor:
				</label>
				<input id="xiLicenseQuote" type="number" value="1" min="1" max="50" />
			</div> <!--end locations-to-monitor-->
			
			<table id="nodeTable">
				<thead id="nodeTableHead">
					<tr id="nodeTableHeadRow">
						<th>Common Node Types</th>
						<th></th>
						<th>Number of Nodes</th>
						<th>Services per Node</th>
						<th>Total Serverices of Node Type</th>
					</tr>
				</thead>
				
				<tbody id="nodeTableBody">
					<!--linux server-->
					<tr id="linuxServerRow">
						<td id="linuxServerType">Linux Servers</td>
						<td class="tooltip"><img src="Media/Images/help.png" alt="more info"><span class="tooltiptext">Linux Servers tips</span></td>
						<td id="linuxServerHost"><input id="n01" type="number" value="0" min="0"></td>
						<td id="linuxServerService"><input id="s01" type="number" value="8" min="0"></td>
						<td id="linuxServerServiceTotal"><span id="resultLinuxServer">Services: </span></td>
					</tr>
					<!--windows server-->
					<tr id="windowsServerRow">
						<td id="windowsServerType">Windows Servers</td>
						<td class="tooltip"><img src="Media/Images/help.png" alt="more info"><span class="tooltiptext">Windows Servers tips</span></td>
						<td id="windowsServerHost"><input id="n02" type="number" value="0" min="0"></td>
						<td id="windowsServerService"><input id="s02" type="number" value="8" min="0"></td>
						<td id="windowsServerServiceTotal"><span id="resultWindowsServer">Services: </span></td>
					</tr>
					<!--databases-->
					<tr id="databaseRow">
						<td id="databaseType">Databases</td>
						<td class="tooltip"><img src="Media/Images/help.png" alt="more info"><span class="tooltiptext">Databases tips</span></td>
						<td id="databaseHost"><input id="n03" type="number" value="0" min="0"></td>
						<td id="databaseService"><input id="s03" type="number" value="8" min="0"></td>
						<td id="databaseServiceTotal"><span id="resultdatabase">Services: </span></td>
					</tr>
					<!--workstations-->
					<tr id="workstationRow">
						<td id="workstationType">Workstations</td>
						<td class="tooltip"><img src="Media/Images/help.png" alt="more info"><span class="tooltiptext">Workstations tips</span></td>
						<td id="workstationHost"><input id="n04" type="number" value="0" min="0"></td>
						<td id="workstationService"><input id="s04" type="number" value="8" min="0"></td>
						<td id="workstationServiceTotal"><span id="resultWorkstation">Services: </span></td>
					</tr>
					<!--24-port switches-->
					<tr id="24portRow">
						<td id="24portType">24-Port Switches</td>
						<td class="tooltip"><img src="Media/Images/help.png" alt="more info"><span class="tooltiptext">24-Port Switches tips</span></td>
						<td id="24portHost"><input id="n05" type="number" value="0" min="0"></td>
						<td id="24portService"><input id="s05" type="number" value="75" min="0"></td>
						<td id="24portServiceTotal"><span id="result24Port">Services: </span></td>
					</tr>
					<!--48-port switches-->
					<tr id="48portRow">
						<td id="48portType">48-Port Switches</td>
						<td class="tooltip"><img src="Media/Images/help.png" alt="more info"><span class="tooltiptext">48-Port Switches tips</span></td>
						<td id="48portHost"><input id="n06" type="number" value="0" min="0"></td>
						<td id="48portService"><input id="s06" type="number" value="150" min="0"></td>
						<td id="48portServiceTotal"><span id="result48Port">Services: </span></td>
					</tr>
					<!--routers-->
					<tr id="routerRow">
						<td id="routerType">Routers</td>
						<td class="tooltip"><img src="Media/Images/help.png" alt="more info"><span class="tooltiptext">Routers tips</span></td>
						<td id="routerHost"><input id="n07" type="number" value="0" min="0"></td>
						<td id="routerService"><input id="s07" type="number" value="8" min="0"></td>
						<td id="routerServiceTotal"><span id="resultRouter">Services: </span></td>
					</tr>
					<!--access points-->
					<tr id="accessPointRow">
						<td id="accessPointType">Access Points</td>
						<td class="tooltip"><img src="Media/Images/help.png" alt="more info"><span class="tooltiptext">Access Points tips</span></td>
						<td id="accessPointHost"><input id="n08" type="number" value="0" min="0"></td>
						<td id="accessPointService"><input id="s08" type="number" value="8" min="0"></td>
						<td id="accessPointServiceTotal"><span id="resultAccessPoint">Services: </span></td>
					</tr>
					<!--websites-->
					<tr id="websiteRow">
						<td id="websiteType">Websites</td>
						<td class="tooltip"><img src="Media/Images/help.png" alt="more info"><span class="tooltiptext">Website Tips</span></td>
						<td id="websiteHost"><input id="n09" type="number" value="0" min="0"></td>
						<td id="websiteService"><input id="s09" type="number" value="8" min="0"></td>
						<td id="websiteServiceTotal"><span id="resultWebsite">Services: </span></td>
					</tr>
					<!--others-->
					<tr id="otherRow">
						<td id="otherType">Other Devices</td>
						<td class="tooltip"><img src="Media/Images/help.png" alt="more info"><span class="tooltiptext">Other Device tips</span></td>
						<td id="otherHost"><input id="n10" type="number" value="0" min="0"></td>
						<td id="otherService"><input id="s10" type="number" value="8" min="0"></td>
						<td id="otherServiceTotal"><span id="resultOther">Services: </span></td>
					</tr>
				</tbody>
			</table>
			<!--Calculate on click - button-->
			<button id="calcButton" onclick="calculateProduct()">Calculate Product</button>
			<!--total services output-->
			<div>
				<p>Total Services to Monitor: <span id="totalServicesResult"></span>
					<br>
					Total Nodes required: <span id="totalNodesResult"></span></p>
			</div>
			<!--Enterprise Add-on Section-->
			
			<form>
				<legend>Upgrade to Enterprise Edition?</legend>
				<div id="enterpriseRadioSelect">
					<input type="radio" class="radioButton" id="xiEnterpriseChosen" name="xiEnterpriseUpgrade" value="xiEnterpriseChosen" checked />
					<label for="xiEnterpriseChosen">
						Upgrade
					</label>
					<input type="radio" class="radioButton" id="xiStandardChosen" name="xiEnterpriseUpgrade" value="xiStandardChosen" />
					<label for="xiStandardChosen">
						Standard
					</label>
				</div>
			</form>
		
		</div> <!--end input-card -->
		<div id= "output-card">

			<h2>Recommended License Level</h2>
			<p>Based on inputs, the recommended license level is:
				<br />
				<span id="nodeRecommend"></span> at <span id="enterprisePlan"></span> level.
			</p>

			<div id="link-buttons"> 
				<a class="button" href="https://www.nagios.com/products/nagios-xi/buy/" target="_blank">
					Buy XI now
			  	</a>
          		<a class="button" href="https://www.nagios.com/contact/" target="_blank">
					Contact Nagios
			  	</a>
           		<a class="button" href="https://www.nagios.com/downloads/nagios-xi/" target="_blank">
					30 Day Free Trial
			  	</a>
			</div> <!--end link buttons-->
		 </div> <!--end output card-->
	  </div> <!--end card-box-->
  </body>
</html><!--test-->