

function update_levins_info_padrao () {
    $('#levins_info_padrao').load('info_padrao.php');
    $('#info_torrent').load('info_transmission.php');
}

function update_hanski_info_padrao () {
    $('#hanski_info_padrao').load('hanski_info_padrao.php');
}


function update_info_padrao () {
    update_levins_info_padrao();
    update_hanski_info_padrao();
}

var tempo_info_padrao  = setInterval(update_info_padrao, 5000);


