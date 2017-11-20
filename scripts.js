function update_levins_info_padrao () {
    $('#levins_info_padrao').load('info_padrao.php');

    //Aqui a gente pega o json do endereço usando jquery para apresentar na página
    $.getJSON("http://192.168.0.3/admin/api.php?summaryRaw", callbackFuncWithData);
    function callbackFuncWithData(data)
    {
	// Assim que os dados forem baixados, tudo que está aqui roda
	var texto = "<b>Pihole</b> </br>"+
	    "DNS Solicitados: " + data.dns_queries_today + "</br>" +
	    "DNS Bloqueados: "  + data.ads_blocked_today + " ("+ data.ads_percentage_today.toFixed(2)+"%) </br>";
	$('#levins_info_padrao').append(texto);	
	
    }

    //Aqui carregamos alguns informações do transmission.    
    $('#info_torrent').load('info_transmission.php');
}

function update_hanski_info_padrao () {
    $('#hanski_info_padrao').load('hanski_info_padrao.php');
}


function update_info_padrao () {
    update_levins_info_padrao();
    update_hanski_info_padrao();
}

setInterval(update_info_padrao, 5000);


google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);

function drawChart() {
    var data = google.visualization.arrayToDataTable([
	['Horas','Liberado','Bloqueado'],
	['1',   100, 4],
	['2',   100, 4],
	['3',   110, 1],
	['4',   100, 4],
	['5',   80,  4],
	['6',   90,  1],
	['7',   80,  4],
	['8',   70,  4],
	['9',   80,  1],
	['10',  100, 5]
    ]);

    var options = {
	hAxis: {
	    title: 'Tempo'
	},
	vAxis: {
	    title: 'Requisições'
	},	
	title: 'Requisisões das ultimas 24 horas',
	curveType: 'function',
	legend: { position: 'bottom' }
    };

    var chart = new google.visualization.LineChart(document.getElementById('plot_pihole'));

    chart.draw(data, options);
}
