<?php include 'includes/header.php';?>
  <!-- Left side column. contains the logo and sidebar -->
  
<?php include 'includes/aside.php'; ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="breadcrumb-item active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      
            <div class="outer-side"><div class="container-fluid"><div class="row"><div class="col-md-12"><a class="anchor" name="fundholdings"></a><div class="panel"><div class="panel-heading"><div class="row"><div class="col-xs-12"><h2><i class="fa fa-calendar"></i> Fund Holdings</h2><p>CRYPTO20 historical fund asset allocation data is available below. The data is based on an initial investment of $10,000 on the 1st of January 2016. Select a date and see the exact asset allocations on that day. This will be updated in real time after fund assets are acquired post-ICO. Further information about our fund trading strategy can be found in our <a href="https://static.crypto20.com/pdf/c20-whitepaper.pdf" target="_blank">whitepaper</a>.</p></div></div></div><div class="panel-footer"><div class="row"><div class="col-md-12 col-xl-6"><input class="selectDate" name="selecteddate" type="text" value="06/01/2016"><div class="chartclass" id="chartdivhistory" style="overflow: hidden; text-align: left;"><div class="amcharts-main-div" style="position: relative;"><div class="amcharts-chart-div" style="overflow: hidden; position: relative; text-align: left; touch-action: auto; width: 679px; height: 500px; padding: 0px; cursor: default;"><svg version="1.1" style="position: absolute; width: 679px; height: 500px; top: 0px; left: 0px;"><desc>JavaScript chart by amCharts 3.21.7</desc><g><path cs="100,100" d="M0.5,0.5 L678.5,0.5 L678.5,499.5 L0.5,499.5 Z" fill="#FFFFFF" stroke="#000000" fill-opacity="0" stroke-width="1" stroke-opacity="0"></path><path cs="100,100" d="M0.5,0.5 L537.5,0.5 L537.5,426.5 L0.5,426.5 L0.5,0.5 Z" fill="#FFFFFF" stroke="#000000" fill-opacity="0" stroke-width="1" stroke-opacity="0" transform="translate(71,20)"></path></g><g><g transform="translate(71,20)"><g><path cs="100,100" d="M13.5,0.5 L13.5,5.5" fill="none" stroke-width="1" stroke-opacity="0.3" stroke="#000000" transform="translate(0,426)"></path><path cs="100,100" d="M0.5,426.5 L0.5,426.5 L0.5,0.5" fill="none" stroke-width="1" stroke-opacity="0.1" stroke="#000000"></path></g><g><path cs="100,100" d="M67.5,0.5 L67.5,5.5" fill="none" stroke-width="1" stroke-opacity="0.3" stroke="#000000" transform="translate(0,426)"></path><path cs="100,100" d="M54.5,426.5 L54.5,426.5 L54.5,0.5" fill="none" stroke-width="1" stroke-opacity="0.1" stroke="#000000"></path></g><g><path cs="100,100" d="M121.5,0.5 L121.5,5.5" fill="none" stroke-width="1" stroke-opacity="0.3" stroke="#000000" transform="translate(0,426)"></path><path cs="100,100" d="M108.5,426.5 L108.5,426.5 L108.5,0.5" fill="none" stroke-width="1" stroke-opacity="0.1" stroke="#000000"></path></g><g><path cs="100,100" d="M175.5,0.5 L175.5,5.5" fill="none" stroke-width="1" stroke-opacity="0.3" stroke="#000000" transform="translate(0,426)"></path><path cs="100,100" d="M162.5,426.5 L162.5,426.5 L162.5,0.5" fill="none" stroke-width="1" stroke-opacity="0.1" stroke="#000000"></path></g><g><path cs="100,100" d="M228.5,0.5 L228.5,5.5" fill="none" stroke-width="1" stroke-opacity="0.3" stroke="#000000" transform="translate(0,426)"></path><path cs="100,100" d="M215.5,426.5 L215.5,426.5 L215.5,0.5" fill="none" stroke-width="1" stroke-opacity="0.1" stroke="#000000"></path></g><g><path cs="100,100" d="M282.5,0.5 L282.5,5.5" fill="none" stroke-width="1" stroke-opacity="0.3" stroke="#000000" transform="translate(0,426)"></path><path cs="100,100" d="M269.5,426.5 L269.5,426.5 L269.5,0.5" fill="none" stroke-width="1" stroke-opacity="0.1" stroke="#000000"></path></g><g><path cs="100,100" d="M336.5,0.5 L336.5,5.5" fill="none" stroke-width="1" stroke-opacity="0.3" stroke="#000000" transform="translate(0,426)"></path><path cs="100,100" d="M323.5,426.5 L323.5,426.5 L323.5,0.5" fill="none" stroke-width="1" stroke-opacity="0.1" stroke="#000000"></path></g><g><path cs="100,100" d="M389.5,0.5 L389.5,5.5" fill="none" stroke-width="1" stroke-opacity="0.3" stroke="#000000" transform="translate(0,426)"></path><path cs="100,100" d="M376.5,426.5 L376.5,426.5 L376.5,0.5" fill="none" stroke-width="1" stroke-opacity="0.1" stroke="#000000"></path></g><g><path cs="100,100" d="M443.5,0.5 L443.5,5.5" fill="none" stroke-width="1" stroke-opacity="0.3" stroke="#000000" transform="translate(0,426)"></path><path cs="100,100" d="M430.5,426.5 L430.5,426.5 L430.5,0.5" fill="none" stroke-width="1" stroke-opacity="0.1" stroke="#000000"></path></g><g><path cs="100,100" d="M497.5,0.5 L497.5,5.5" fill="none" stroke-width="1" stroke-opacity="0.3" stroke="#000000" transform="translate(0,426)"></path><path cs="100,100" d="M484.5,426.5 L484.5,426.5 L484.5,0.5" fill="none" stroke-width="1" stroke-opacity="0.1" stroke="#000000"></path></g><g><path cs="100,100" d="M537.5,426.5 L537.5,426.5 L537.5,0.5" fill="none" stroke-width="1" stroke-opacity="0.1" stroke="#000000"></path></g></g><g transform="translate(71,20)" visibility="visible"><g><path cs="100,100" d="M0.5,426.5 L0.5,426.5 L537.5,426.5" fill="none" stroke-width="1" stroke-opacity="0.1" stroke="#000000"></path></g><g><path cs="100,100" d="M0.5,379.5 L0.5,379.5 L537.5,379.5" fill="none" stroke-width="1" stroke-opacity="0.1" stroke="#000000"></path></g><g><path cs="100,100" d="M0.5,331.5 L0.5,331.5 L537.5,331.5" fill="none" stroke-width="1" stroke-opacity="0.1" stroke="#000000"></path></g><g><path cs="100,100" d="M0.5,284.5 L0.5,284.5 L537.5,284.5" fill="none" stroke-width="1" stroke-opacity="0.1" stroke="#000000"></path></g><g><path cs="100,100" d="M0.5,237.5 L0.5,237.5 L537.5,237.5" fill="none" stroke-width="1" stroke-opacity="0.1" stroke="#000000"></path></g><g><path cs="100,100" d="M0.5,189.5 L0.5,189.5 L537.5,189.5" fill="none" stroke-width="1" stroke-opacity="0.1" stroke="#000000"></path></g><g><path cs="100,100" d="M0.5,142.5 L0.5,142.5 L537.5,142.5" fill="none" stroke-width="1" stroke-opacity="0.1" stroke="#000000"></path></g><g><path cs="100,100" d="M0.5,95.5 L0.5,95.5 L537.5,95.5" fill="none" stroke-width="1" stroke-opacity="0.1" stroke="#000000"></path></g><g><path cs="100,100" d="M0.5,47.5 L0.5,47.5 L537.5,47.5" fill="none" stroke-width="1" stroke-opacity="0.1" stroke="#000000"></path></g><g><path cs="100,100" d="M0.5,0.5 L0.5,0.5 L537.5,0.5" fill="none" stroke-width="1" stroke-opacity="0.1" stroke="#000000"></path></g></g></g><g transform="translate(71,20)" clip-path="url(#AmChartsEl-16)"><g visibility="hidden"></g></g><g></g><g></g><g></g><g><g transform="translate(71,20)"><g><g transform="translate(2,426)" aria-label=" Bitcoin 900"><path cs="100,100" d="M0.5,0.5 L0.5,-378.5 L21.5,-378.5 L21.5,0.5 L0.5,0.5 Z" fill="#F7931A" stroke="#67b7dc" fill-opacity="0.8" stroke-width="1" stroke-opacity="0.2"></path></g><g transform="translate(29,426)" aria-label=" Ethereum 900"><path cs="100,100" d="M0.5,0.5 L0.5,-378.5 L21.5,-378.5 L21.5,0.5 L0.5,0.5 Z" fill="#282828" stroke="#67b7dc" fill-opacity="0.8" stroke-width="1" stroke-opacity="0.2"></path></g><g transform="translate(56,426)" aria-label=" Litecoin 900"><path cs="100,100" d="M0.5,0.5 L0.5,-378.5 L21.5,-378.5 L21.5,0.5 L0.5,0.5 Z" fill="#838383;" stroke="#67b7dc" fill-opacity="0.8" stroke-width="1" stroke-opacity="0.2"></path></g><g transform="translate(83,426)" aria-label=" Ripple 900"><path cs="100,100" d="M0.5,0.5 L0.5,-378.5 L21.5,-378.5 L21.5,0.5 L0.5,0.5 Z" fill="#346AA9" stroke="#67b7dc" fill-opacity="0.8" stroke-width="1" stroke-opacity="0.2"></path></g><g transform="translate(110,426)" aria-label=" The-dao 900"><path cs="100,100" d="M0.5,0.5 L0.5,-378.5 L21.5,-378.5 L21.5,0.5 L0.5,0.5 Z" fill="#FF3B3B" stroke="#67b7dc" fill-opacity="0.8" stroke-width="1" stroke-opacity="0.2"></path></g><g transform="translate(137,426)" aria-label=" Dash 900"><path cs="100,100" d="M0.5,0.5 L0.5,-378.5 L21.5,-378.5 L21.5,0.5 L0.5,0.5 Z" fill="#1c75bc" stroke="#67b7dc" fill-opacity="0.8" stroke-width="1" stroke-opacity="0.2"></path></g><g transform="translate(164,426)" aria-label=" Lisk 552.0499"><path cs="100,100" d="M0.5,0.5 L0.5,-213.5 L21.5,-213.5 L21.5,0.5 L0.5,0.5 Z" fill="#1A6896" stroke="#67b7dc" fill-opacity="0.8" stroke-width="1" stroke-opacity="0.2"></path></g><g transform="translate(190,426)" aria-label=" Maidsafecoin 492.3322"><path cs="100,100" d="M0.5,0.5 L0.5,-185.5 L21.5,-185.5 L21.5,0.5 L0.5,0.5 Z" fill="#5492D6" stroke="#67b7dc" fill-opacity="0.8" stroke-width="1" stroke-opacity="0.2"></path></g><g transform="translate(217,426)" aria-label=" Dogecoin 424.3405"><path cs="100,100" d="M0.5,0.5 L0.5,-153.5 L21.5,-153.5 L21.5,0.5 L0.5,0.5 Z" fill="#BA9F33" stroke="#67b7dc" fill-opacity="0.8" stroke-width="1" stroke-opacity="0.2"></path></g><g transform="translate(244,426)" aria-label=" Steem 322.3205"><path cs="100,100" d="M0.5,0.5 L0.5,-104.5 L21.5,-104.5 L21.5,0.5 L0.5,0.5 Z" fill="#1A5099" stroke="#67b7dc" fill-opacity="0.8" stroke-width="1" stroke-opacity="0.2"></path></g><g transform="translate(271,426)" aria-label=" Nem 296.6066"><path cs="100,100" d="M0.5,0.5 L0.5,-92.5 L21.5,-92.5 L21.5,0.5 L0.5,0.5 Z" fill="#41bf76" stroke="#67b7dc" fill-opacity="0.8" stroke-width="1" stroke-opacity="0.2"></path></g><g transform="translate(298,426)" aria-label=" Digixdao 293.5648"><path cs="100,100" d="M0.5,0.5 L0.5,-91.5 L21.5,-91.5 L21.5,0.5 L0.5,0.5 Z" fill="#D8A24A" stroke="#67b7dc" fill-opacity="0.8" stroke-width="1" stroke-opacity="0.2"></path></g><g transform="translate(325,426)" aria-label=" Monero 197.186"><path cs="100,100" d="M0.5,0.5 L0.5,-45.5 L21.5,-45.5 L21.5,0.5 L0.5,0.5 Z" fill="#FF6600" stroke="#67b7dc" fill-opacity="0.8" stroke-width="1" stroke-opacity="0.2"></path></g><g transform="translate(351,426)" aria-label=" Fedoracoin 191.9783"><path cs="100,100" d="M0.5,0.5 L0.5,-43.5 L21.5,-43.5 L21.5,0.5 L0.5,0.5 Z" fill="#1b78bc" stroke="#67b7dc" fill-opacity="0.8" stroke-width="1" stroke-opacity="0.2"></path></g><g transform="translate(378,426)" aria-label=" Bitshares 153.2056"><path cs="100,100" d="M0.5,0.5 L0.5,-24.5 L21.5,-24.5 L21.5,0.5 L0.5,0.5 Z" fill="#03A9E0" stroke="#67b7dc" fill-opacity="0.8" stroke-width="1" stroke-opacity="0.2"></path></g><g transform="translate(405,426)" aria-label=" Stellar 148.5136"><path cs="100,100" d="M0.5,0.5 L0.5,-22.5 L21.5,-22.5 L21.5,0.5 L0.5,0.5 Z" fill="#03A9F9" stroke="#67b7dc" fill-opacity="0.8" stroke-width="1" stroke-opacity="0.2"></path></g><g transform="translate(432,426)" aria-label=" Peercoin 146.2557"><path cs="100,100" d="M0.5,0.5 L0.5,-21.5 L21.5,-21.5 L21.5,0.5 L0.5,0.5 Z" fill="#3FA30C" stroke="#67b7dc" fill-opacity="0.8" stroke-width="1" stroke-opacity="0.2"></path></g><g transform="translate(459,426)" aria-label=" Synereo 131.793"><path cs="100,100" d="M0.5,0.5 L0.5,-14.5 L21.5,-14.5 L21.5,0.5 L0.5,0.5 Z" fill="#048DD2" stroke="#67b7dc" fill-opacity="0.8" stroke-width="1" stroke-opacity="0.2"></path></g><g transform="translate(486,426)" aria-label=" Factom 127.596"><path cs="100,100" d="M0.5,0.5 L0.5,-12.5 L21.5,-12.5 L21.5,0.5 L0.5,0.5 Z" fill="#2175BB" stroke="#67b7dc" fill-opacity="0.8" stroke-width="1" stroke-opacity="0.2"></path></g><g transform="translate(513,426)" aria-label=" Ybcoin 122.2575"><path cs="100,100" d="M0.5,0.5 L0.5,-10.5 L21.5,-10.5 L21.5,0.5 L0.5,0.5 Z" fill="#D6C154" stroke="#67b7dc" fill-opacity="0.8" stroke-width="1" stroke-opacity="0.2"></path></g></g></g></g><g></g><g><g><path cs="100,100" d="M0.5,0.5 L537.5,0.5" fill="none" stroke-width="1" stroke-opacity="0.3" stroke="#000000" transform="translate(71,446)"></path></g><g><path cs="100,100" d="M0.5,0.5 L0.5,426.5" fill="none" stroke-width="1" stroke-opacity="0" stroke="#000000" transform="translate(71,20)" visibility="visible"></path></g></g><g><g transform="translate(71,20)" clip-path="url(#AmChartsEl-17)" style="pointer-events: none;"><path cs="100,100" d="M0.5,0.5 L0.5,0.5 L0.5,426.5" fill="none" stroke-width="1" stroke-opacity="0" stroke="#000000" visibility="hidden" transform="translate(524,0)"></path><path cs="100,100" d="M0.5,0.5 L537.5,0.5 L537.5,0.5" fill="none" stroke-width="1" stroke="#000000" visibility="hidden" transform="translate(0,333)"></path></g><clipPath id="AmChartsEl-17"><rect x="0" y="0" width="537" height="426" rx="0" ry="0" stroke-width="0"></rect></clipPath></g><g></g><g><g transform="translate(71,20)"></g></g><g><g></g></g><g><g transform="translate(71,20)" visibility="visible"><text y="6" fill="#000000" font-family="Verdana" font-size="11px" opacity="1" text-anchor="middle" transform="translate(1.7301167517818659,445.69488324821816) rotate(-45)"><tspan y="6" x="0">Bitcoin</tspan></text><text y="6" fill="#000000" font-family="Verdana" font-size="11px" opacity="1" text-anchor="middle" transform="translate(54.32695173286481,447.0980482671352) rotate(-45)"><tspan y="6" x="0">Litecoin</tspan></text><text y="6" fill="#000000" font-family="Verdana" font-size="11px" opacity="1" text-anchor="middle" transform="translate(108.22199057003243,447.20300942996755) rotate(-45)"><tspan y="6" x="0">The-dao</tspan></text><text y="6" fill="#000000" font-family="Verdana" font-size="11px" opacity="1" text-anchor="middle" transform="translate(167.9506603519891,441.4743396480109) rotate(-45)"><tspan y="6" x="0">Lisk</tspan></text><text y="6" fill="#000000" font-family="Verdana" font-size="11px" opacity="1" text-anchor="middle" transform="translate(213.16696148720905,449.25803851279096) rotate(-45)"><tspan y="6" x="0">Dogecoin</tspan></text><text y="6" fill="#000000" font-family="Verdana" font-size="11px" opacity="1" text-anchor="middle" transform="translate(274.21593221216244,442.20906778783757) rotate(-45)"><tspan y="6" x="0">Nem</tspan></text><text y="6" fill="#000000" font-family="Verdana" font-size="11px" opacity="1" text-anchor="middle" transform="translate(323.7633691993784,446.6616308006216) rotate(-45)"><tspan y="6" x="0">Monero</tspan></text><text y="6" fill="#000000" font-family="Verdana" font-size="11px" opacity="1" text-anchor="middle" transform="translate(375.1944760286207,448.2305239713793) rotate(-45)"><tspan y="6" x="0">Bitshares</tspan></text><text y="6" fill="#000000" font-family="Verdana" font-size="11px" opacity="1" text-anchor="middle" transform="translate(429.6806119406865,447.7443880593135) rotate(-45)"><tspan y="6" x="0">Peercoin</tspan></text><text y="6" fill="#000000" font-family="Verdana" font-size="11px" opacity="1" text-anchor="middle" transform="translate(485.4262818067408,445.9987181932592) rotate(-45)"><tspan y="6" x="0">Factom</tspan></text></g><g transform="translate(71,20)" visibility="visible"><text y="6" fill="#000000" font-family="Verdana" font-size="11px" opacity="1" text-anchor="end" transform="translate(-12,426.5)"><tspan y="6" x="0">100</tspan></text><text y="6" fill="#000000" font-family="Verdana" font-size="11px" opacity="1" text-anchor="end" transform="translate(-12,379.5)"><tspan y="6" x="0">200</tspan></text><text y="6" fill="#000000" font-family="Verdana" font-size="11px" opacity="1" text-anchor="end" transform="translate(-12,331.5)"><tspan y="6" x="0">300</tspan></text><text y="6" fill="#000000" font-family="Verdana" font-size="11px" opacity="1" text-anchor="end" transform="translate(-12,284.5)"><tspan y="6" x="0">400</tspan></text><text y="6" fill="#000000" font-family="Verdana" font-size="11px" opacity="1" text-anchor="end" transform="translate(-12,237.5)"><tspan y="6" x="0">500</tspan></text><text y="6" fill="#000000" font-family="Verdana" font-size="11px" opacity="1" text-anchor="end" transform="translate(-12,189.5)"><tspan y="6" x="0">600</tspan></text><text y="6" fill="#000000" font-family="Verdana" font-size="11px" opacity="1" text-anchor="end" transform="translate(-12,142.5)"><tspan y="6" x="0">700</tspan></text><text y="6" fill="#000000" font-family="Verdana" font-size="11px" opacity="1" text-anchor="end" transform="translate(-12,95.5)"><tspan y="6" x="0">800</tspan></text><text y="6" fill="#000000" font-family="Verdana" font-size="11px" opacity="1" text-anchor="end" transform="translate(-12,47.5)"><tspan y="6" x="0">900</tspan></text><text y="6" fill="#000000" font-family="Verdana" font-size="11px" opacity="1" text-anchor="end" transform="translate(-12,0.5)"><tspan y="6" x="0">1,000</tspan></text><text y="6" fill="#000000" font-family="Verdana" font-size="12px" opacity="1" font-weight="bold" text-anchor="middle" transform="translate(-53,213) rotate(-90)"><tspan y="6" x="0">Value of Holdings</tspan></text></g></g><g></g><g transform="translate(71,20)"></g><g></g><g></g><clipPath id="AmChartsEl-16"><rect x="-1" y="-1" width="539" height="428" rx="0" ry="0" stroke-width="0"></rect></clipPath></svg><a href="http://www.amcharts.com" title="JavaScript charts" style="position: absolute; text-decoration: none; color: rgb(0, 0, 0); font-family: Verdana; font-size: 11px; opacity: 0.7; display: block; left: 76px; top: 25px;">JS chart by amCharts</a></div></div></div><style>/* qtum was not in icon font, cutom made it */ .cc.qtum::before {background: url(https://cdn.crypto20.com/images/icons/qtum.svg);} .cc.ark::before {background: url(https://cdn.crypto20.com/images/icons/ark.svg);} .cc.tenx::before {background: url(https://cdn.crypto20.com/images/icons/pay.svg);} .cc.stellar::before {background: url(https://cdn.crypto20.com/images/icons/stellar.svg);} .cc.qtum::before, .cc.ark::before, .cc.tenx::before, .cc.stellar::before { content: ""; display: inline-block; background-repeat: no-repeat; width: 15px; height: 15px; background-size: 15px 15px; } .cc.qtum.fa-5x::before, .cc.ark.fa-5x::before, .cc.tenx.fa-5x::before, .cc.stellar.fa-5x::before { width: 75px !important; height: 75px !important; background-size: 75px 75px !important; } .qtum {color: #2e9ad0;} .ark {color: #B10202;} .tenx {color: #302d2e;} .stellar {color: #08b5e5;}</style><script src="https://cdn.crypto20.com/CACHE/js/5e73241b245c.js" type="text/javascript"></script><script type="text/javascript">
                $( document ).ready(function() {
                  // Uppercase first letter function
                  function jsUcfirst(string) {return string.charAt(0).toUpperCase() + string.slice(1);}

                  // `Init Date Picker
                  $(function() {
                    $('input[name="selecteddate"]').daterangepicker({
                      "singleDatePicker": true,
                      "showDropdowns": true,
                      "startDate": "06/01/2016",
                      "endDate": "11/15/2017",
                      "minDate": "06/01/2016",
                      "maxDate": "11/15/2017"
                    }, function(start, end, label) {
                      var ndate = moment(start).toDate().format("yyyy-mm-dd");
                      fetchData(ndate);
                    });
                  });

                  // FETCH DATA
                  
                  function fetchData(cdate){
                    //$.getJSON("https://cdn.crypto20.com/js/compositions.js", function(data) {

                      var cdata = data[cdate];

                      //PROCESS DATA
                      // Set Colors of Each Coin
                      for (var i = 0; i < cdata.length; i++) {
                        var cname = cdata[i]["name"];

                        cdata[i]["code"]

                        if(cname == 'bitcoin'){cdata[i]["color"] = "#F7931A";cdata[i]["code"] = "BTC";}
                        if(cname == 'ethereum'){cdata[i]["color"] = "#282828";cdata[i]["code"] = "ETH";}
                        if(cname == 'litecoin'){cdata[i]["color"] = "#838383;";cdata[i]["code"] = "LTC";}
                        if(cname == 'ripple'){cdata[i]["color"] = "#346AA9";cdata[i]["code"] = "XRP";}
                        if(cname == 'monero'){cdata[i]["color"] = "#FF6600";cdata[i]["code"] = "XMR";}
                        if(cname == 'dogecoin'){cdata[i]["color"] = "#BA9F33";cdata[i]["code"] = "DOGE";}
                        if(cname == 'maidsafecoin'){cdata[i]["color"] = "#5492D6";cdata[i]["code"] = "MAID";}
                        if(cname == 'steem'){cdata[i]["color"] = "#1A5099";cdata[i]["code"] = "STEEM";}
                        if(cname == 'nem'){cdata[i]["color"] = "#41bf76";cdata[i]["code"] = "XEM";}
                        if(cname == 'digixdao'){cdata[i]["color"] = "#D8A24A";cdata[i]["code"] = "DGD";}
                        if(cname == 'fedoracoin'){cdata[i]["color"] = "#1b78bc";cdata[i]["code"] = "TIPS";}
                        if(cname == 'dash'){cdata[i]["color"] = "#1c75bc";cdata[i]["code"] = "DASH";}
                        if(cname == 'lisk'){cdata[i]["color"] = "#1A6896";cdata[i]["code"] = "LISK";}
                        if(cname == 'bitshares'){cdata[i]["color"] = "#03A9E0";cdata[i]["code"] = "BTS";}
                        if(cname == 'stellar'){cdata[i]["color"] = "#03A9F9";cdata[i]["code"] = "XLM";}
                        if(cname == 'peercoin'){cdata[i]["color"] = "#3FA30C";cdata[i]["code"] = "PPC";}
                        if(cname == 'synereo'){cdata[i]["color"] = "#048DD2";cdata[i]["code"] = "AMP";}
                        if(cname == 'factom'){cdata[i]["color"] = "#2175BB";cdata[i]["code"] = "FCT";}
                        if(cname == 'ybcoin'){cdata[i]["color"] = "#D6C154";cdata[i]["code"] = "YBC";}
                        if(cname == 'stratis'){cdata[i]["color"] = "#2398dd";cdata[i]["code"] = "STRAT";}
                        if(cname == 'waves'){cdata[i]["color"] = "#24aad6";cdata[i]["code"] = "WAVES";}
                        if(cname == 'iconomi'){cdata[i]["color"] = "#4c6f8c";cdata[i]["code"] = "ICN";}
                        if(cname == 'bitcoin-cash'){cdata[i]["color"] = "#F7931A";cdata[i]["code"] = "BCC";}
                        if(cname == 'neo'){cdata[i]["color"] = "#58BF00";cdata[i]["code"] = "NEO";}
                        if(cname == 'iota'){cdata[i]["color"] = "#b9b9b9";cdata[i]["code"] = "IOTA";}
                        
                        if(cname == 'qtum'){cdata[i]["color"] = "#2e9ad0";cdata[i]["code"] = "qtum";}
                        
                        if(cname == 'augur'){cdata[i]["color"] = "#40a2cb";cdata[i]["code"] = "REP";}
                        if(cname == 'zcash'){cdata[i]["color"] = "#e5a93d";cdata[i]["code"] = "ZEC";}
                        if(cname == 'zcash'){cdata[i]["color"] = "#b9b9b9";cdata[i]["code"] = "IOTA";}
                        if(cname == 'ethereum-classic'){cdata[i]["color"] = "#669073";cdata[i]["code"] = "ETC";}
                        if(cname == 'nxt'){cdata[i]["color"] = "#008FBB";cdata[i]["code"] = "NXT";}
                        if(cname == 'siacoin'){cdata[i]["color"] = "#00CBA0";cdata[i]["code"] = "SIA";}
                        if(cname == 'the-dao'){cdata[i]["color"] = "#FF3B3B";cdata[i]["code"] = "DAO";}
                      }
                      // Make Capital Letters of All Coins
                      for (var i = 0; i < cdata.length; i++) {
                        var cname = cdata[i]["name"];
                        var nname = jsUcfirst(cname);
                        cdata[i]["name"] = nname;
                      }

                      // Refresh graph after fetching latest
                      refreshTable(cdata, cdate);
                      refreshGraph(cdata);
                    // });
                  }

                  function refreshTable(cdata, cdate){
                    var html = "";
                    for (var i = 0; i < cdata.length; i++) {
                      var crank = cdata[i]["rank"];
                      var cname = cdata[i]["name"];
                      var camount = cdata[i]["amount"];
                      var cvalue = cdata[i]["value"];
                      var cperc_val = cdata[i]["perc_val"];
                      var ccolor = cdata[i]["color"];
                      var ccode = cdata[i]["code"];

                      html += "<tr>";
                        html += "<td>"+crank+"</td>";
                        html += "<td><i class='cc "+ccode+"'></i> "+cname+"</td>";
                        html += "<td>"+camount+" "+ccode+"</td>";
                        html += "<td>$"+cvalue+"</td>";
                        html += "<td>"+cperc_val+"%</td>";                        
                      html += "</tr>";
                    }

                    $(".table-historical tbody").html(html);
                    $(".table-historical .datebox").html("As on "+cdate);


                  }

                  // REFRESH GRAPH
                  function refreshGraph(cdata) {

                    var chart2 = AmCharts.makeChart("chartdivhistory", {
                      "type": "serial",
                      "theme": "light",
                      "marginRight": 70,
                      "dataProvider": cdata,
                      "valueAxes": [{
                        "axisAlpha": 0,
                        "position": "left",
                        "title": "Value of Holdings"
                      }],
                      "startDuration": 1,
                      "graphs": [{
                        "balloonText": "<b> [[rank]]</br> <i class='cc [[code]]'></i> [[category]] <br /> Value: $[[value]] <br /> Amount: [[amount]] <br /> Percentage: [[perc_val]]%</b>",
                        "fillColorsField": "color",
                        "fillAlphas": 0.8,
                        "lineAlpha": 0.2,
                        "type": "column",
                        "valueField": "value",
                        "amountField": "amount",
                        "perc_valField": "perc_val",
                        "rankField": "rank",
                        "codeField": "code"
                      }],
                      "chartCursor": {
                        "categoryBalloonEnabled": false,
                        "cursorAlpha": 0,
                        "zoomable": false
                      },
                      "categoryField": "name",
                      "categoryAxis": {
                        "gridPosition": "start",
                        "labelRotation": 45
                      },
                      "export": {
                        "enabled": false
                      }
                    });

                  }

                  var cdate = "2016-06-01";
                  var cdata = [];

                  // SETUP
                  fetchData(cdate);
                });
              </script>

          </div>
              <div>
                    <div class="col-lg-12 col-12">
                           <div class="box">
                                                        <div class="box-header with-border">
                                                            <h4 class="box-title">Table of Holdings </h4>
                                                            <ul class="box-controls pull-right">
                                                                <!-- <li><a class="box-btn-close" href="#"></a></li> -->
                                                                <li>
                                                                    <a class="box-btn-slide" href="#"></a>
                                                                </li>
                                                                <li>
                                                                    <a class="box-btn-fullscreen" href="#"></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="box-body no-padding">
                                                            <div class="table-responsive">
                                                                <table class="table no-bordered no-margin table-striped">
                                                                    <thead>
                                                                        <tr>
                                                                            <th>Rank</th>
                                                                            <th>Coin</th>
                                                                            <th>Amount</th>
                                                                            <th>Value($)</th>
                                                                            <th>Percentage</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr>
                                                                            <th>
                                                                                <div class="media align-items-center p-0 p18">
                                                                                    1
                                                                                </div>
                                                                            </th>
                                                                            <td>
                                                                                <div class="media align-items-center p-0">
                                                                                    <div class="text-center">
                                                                                        <a href="#"><i class="cc BTC mr-5" title="BTC"></i></a>
                                                                                    </div>
                                                                                    <div>
                                                                                        <p class="no-margin text-bold">Bitcoin BTC</p>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="media align-items-center p-0 p18">
                                                                                    1000
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="media align-items-center p-0 p18">
                                                                                    6679000
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="media align-items-center p-0 p18">
                                                                                    5 </div>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th>
                                                                                <div class="media align-items-center p-0 p18">
                                                                                    2
                                                                                </div>
                                                                            </th>
                                                                            <td>
                                                                                <div class="media align-items-center p-0">
                                                                                    <div class="text-center">
                                                                                        <a href="#"><i class="cc ETH mr-5" title="ETH"></i></a>
                                                                                    </div>
                                                                                    <div>
                                                                                        <p class="no-margin text-bold">Ethereum ETH</p>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="media align-items-center p-0 p18">
                                                                                    1000
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="media align-items-center p-0 p18">
                                                                                    517000
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="media align-items-center p-0 p18">
                                                                                    5
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th>
                                                                                <div class="media align-items-center p-0 p18">
                                                                                    3
                                                                                </div>
                                                                            </th>
                                                                            <td>
                                                                                <div class="media align-items-center p-0">
                                                                                    <div class="text-center">
                                                                                        <a href="#"><i class="cc LTC mr-5" title="LTC"></i></a>
                                                                                    </div>
                                                                                    <div>
                                                                                        <p class="no-margin text-bold">Litecoin LTC</p>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="media align-items-center p-0 p18">
                                                                                    1000
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="media align-items-center p-0 p18">
                                                                                    94630
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="media align-items-center p-0 p18">
                                                                                    5
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th>
                                                                                <div class="media align-items-center p-0 p18">
                                                                                    4
                                                                                </div>
                                                                            </th>
                                                                            <td>
                                                                                <div class="media align-items-center p-0">
                                                                                    <div class="text-center">
                                                                                        <a href="#"><i class="cc XRP mr-5" title="XRP"></i></a>
                                                                                    </div>
                                                                                    <div>
                                                                                        <p class="no-margin text-bold">Ripple XRP</p>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="media align-items-center p-0 p18">
                                                                                    1000
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="media align-items-center p-0 p18">
                                                                                    526.61
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="media align-items-center p-0 p18">
                                                                                    5
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th>
                                                                                <div class="media align-items-center p-0 p18">
                                                                                    5
                                                                                </div>
                                                                            </th>
                                                                            <td>
                                                                                <div class="media align-items-center p-0">
                                                                                    <div class="text-center">
                                                                                        <a href="#"><i class="cc EOS mr-5" title="EOS"></i></a>
                                                                                    </div>
                                                                                    <div>
                                                                                        <p class="no-margin text-bold">EOS </p>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="media align-items-center p-0 p18">
                                                                                    1000
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="media align-items-center p-0 p18">
                                                                                    10210
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="media align-items-center p-0 p18">
                                                                                    5
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th>
                                                                                <div class="media align-items-center p-0 p18">
                                                                                    6
                                                                                </div>
                                                                            </th>
                                                                            <td>
                                                                                <div class="media align-items-center p-0">
                                                                                    <div class="text-center">
                                                                                        <a href="#"><i class="cc ADA mr-5" title="ADA"></i></a>
                                                                                    </div>
                                                                                    <div>
                                                                                        <p class="no-margin text-bold">Cardano ADA</p>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="media align-items-center p-0 p18">
                                                                                    1000
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="media align-items-center p-0 p18">
                                                                                    153.73
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="media align-items-center p-0 p18">
                                                                                    5
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th>
                                                                                <div class="media align-items-center p-0 p18">
                                                                                    7
                                                                                </div>
                                                                            </th>
                                                                            <td>
                                                                                <div class="media align-items-center p-0">
                                                                                    <div class="text-center">
                                                                                        <a href="#"><i class="cc NEO mr-5" title="NEO"></i></a>
                                                                                    </div>
                                                                                    <div>
                                                                                        <p class="no-margin text-bold">NEO</p>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="media align-items-center p-0 p18">
                                                                                    1000
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="media align-items-center p-0 p18">
                                                                                    36980
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="media align-items-center p-0 p18">
                                                                                    5
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th>
                                                                                <div class="media align-items-center p-0 p18">
                                                                                    8
                                                                                </div>
                                                                            </th>
                                                                            <td>
                                                                                <div class="media align-items-center p-0">
                                                                                    <div class="text-center">
                                                                                        <a href="#"><i class="cc BCH mr-5" title="BCH"></i></a>
                                                                                    </div>
                                                                                    <div>
                                                                                        <p class="no-margin text-bold"> Bitcoin Cash BCH</p>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="media align-items-center p-0 p18">
                                                                                    1000
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="media align-items-center p-0 p18">
                                                                                    583830
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="media align-items-center p-0 p18">
                                                                                    5
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th>
                                                                                <div class="media align-items-center p-0 p18">
                                                                                    9
                                                                                </div>
                                                                            </th>
                                                                            <td>
                                                                                <div class="media align-items-center p-0">
                                                                                    <div class="text-center">
                                                                                        <a href="#"><i class="cc SALT mr-5" title="SALT"></i></a>
                                                                                    </div>
                                                                                    <div>
                                                                                        <p class="no-margin text-bold">SALT</p>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="media align-items-center p-0 p18">
                                                                                    1000
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="media align-items-center p-0 p18">
                                                                                    1340
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="media align-items-center p-0 p18">
                                                                                    5
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th>
                                                                                <div class="media align-items-center p-0 p18">
                                                                                    10
                                                                                </div>
                                                                            </th>
                                                                            <td>
                                                                                <div class="media align-items-center p-0">
                                                                                    <div class="text-center">
                                                                                        <a href="#"><i class="cc IOTA mr-5" title="IOTA"></i></a>
                                                                                    </div>
                                                                                    <div>
                                                                                        <p class="no-margin text-bold">IOTA</p>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="media align-items-center p-0 p18">
                                                                                    1000
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="media align-items-center p-0 p18">
                                                                                    1130
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="media align-items-center p-0 p18">
                                                                                    5
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th>
                                                                                <div class="media align-items-center p-0 p18">
                                                                                    11
                                                                                </div>
                                                                            </th>
                                                                            <td>
                                                                                <div class="media align-items-center p-0">
                                                                                    <div class="text-center">
                                                                                        <a href="#"><i class="cc DASH mr-5" title="DASH"></i></a>
                                                                                    </div>
                                                                                    <div>
                                                                                        <p class="no-margin text-bold">Dash DASH</p>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="media align-items-center p-0 p18">
                                                                                    1000
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="media align-items-center p-0 p18">
                                                                                    257390
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="media align-items-center p-0 p18">
                                                                                    5
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th>
                                                                                <div class="media align-items-center p-0 p18">
                                                                                    12
                                                                                </div>
                                                                            </th>
                                                                            <td>
                                                                                <div class="media align-items-center p-0">
                                                                                    <div class="text-center">
                                                                                        <a href="#"><i class="cc XMR mr-5" title="XMR"></i></a>
                                                                                    </div>
                                                                                    <div>
                                                                                        <p class="no-margin text-bold">Monero XMR</p>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="media align-items-center p-0 p18">
                                                                                    1000
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="media align-items-center p-0 p18">
                                                                                    122160
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="media align-items-center p-0 p18">
                                                                                    5
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th>
                                                                                <div class="media align-items-center p-0 p18">
                                                                                    13
                                                                                </div>
                                                                            </th>
                                                                            <td>
                                                                                <div class="media align-items-center p-0">
                                                                                    <div class="text-center">
                                                                                        <a href="#"><i class="cc DCR mr-5" title="DCR"></i></a>
                                                                                    </div>
                                                                                    <div>
                                                                                        <p class="no-margin text-bold"> Decred DCR</p>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="media align-items-center p-0 p18">
                                                                                    1000
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="media align-items-center p-0 p18">
                                                                                    89300
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="media align-items-center p-0 p18">
                                                                                    5
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th>
                                                                                <div class="media align-items-center p-0 p18">
                                                                                    14
                                                                                </div>
                                                                            </th>
                                                                            <td>
                                                                                <div class="media align-items-center p-0">
                                                                                    <div class="text-center">
                                                                                        <a href="#"><i class="cc GNT mr-5" title="GNT"></i></a>
                                                                                    </div>
                                                                                    <div>
                                                                                        <p class="no-margin text-bold">Golem GNT</p>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="media align-items-center p-0 p18">
                                                                                    1000
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="media align-items-center p-0 p18">
                                                                                    354.17
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="media align-items-center p-0 p18">
                                                                                    5
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th>
                                                                                <div class="media align-items-center p-0 p18">
                                                                                    15
                                                                                </div>
                                                                            </th>
                                                                            <td>
                                                                                <div class="media align-items-center p-0">
                                                                                    <div class="text-center">
                                                                                        <a href="#"><i class="cc QTUM mr-5" title="QTUM"></i></a>
                                                                                    </div>
                                                                                    <div>
                                                                                        <p class="no-margin text-bold">Qtum QTUM</p>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="media align-items-center p-0 p18">
                                                                                    1000
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="media align-items-center p-0 p18">
                                                                                    10150
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="media align-items-center p-0 p18">
                                                                                    5
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th>
                                                                                <div class="media align-items-center p-0 p18">
                                                                                    16
                                                                                </div>
                                                                            </th>
                                                                            <td>
                                                                                <div class="media align-items-center p-0">
                                                                                    <div class="text-center">
                                                                                        <a href="#"><i class="cc XEM mr-5" title="XEM"></i></a>
                                                                                    </div>
                                                                                    <div>
                                                                                        <p class="no-margin text-bold">NEM XEM</p>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="media align-items-center p-0 p18">
                                                                                    1000
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="media align-items-center p-0 p18">
                                                                                    186.1
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="media align-items-center p-0 p18">
                                                                                    5
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th>
                                                                                <div class="media align-items-center p-0 p18">
                                                                                    17
                                                                                </div>
                                                                            </th>
                                                                            <td>
                                                                                <div class="media align-items-center p-0">
                                                                                    <div class="text-center">
                                                                                        <a href="#"><i class="cc ETC mr-5" title="ETC"></i></a>
                                                                                    </div>
                                                                                    <div>
                                                                                        <p class="no-margin text-bold">Ethereum Classic ETC</p>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="media align-items-center p-0 p18">
                                                                                    1000
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="media align-items-center p-0 p18">
                                                                                    17180
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="media align-items-center p-0 p18">
                                                                                    5
                                                                                </div>
                                                                            </td>
                                                                        </tr>

                                                                        <tr>
                                                                            <th>
                                                                                <div class="media align-items-center p-0 p18">
                                                                                    18
                                                                                </div>
                                                                            </th>
                                                                            <td>
                                                                                <div class="media align-items-center p-0">
                                                                                    <div class="text-center">
                                                                                        <a href="#"><i class="cc ZEC mr-5" title="ZEC"></i></a>
                                                                                    </div>
                                                                                    <div>
                                                                                        <p class="no-margin text-bold">Zcash ZECH</p>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="media align-items-center p-0 p18">
                                                                                    1000
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="media align-items-center p-0 p18">
                                                                                    187750
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="media align-items-center p-0 p18">
                                                                                    5
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th>
                                                                                <div class="media align-items-center p-0 p18">
                                                                                    19
                                                                                </div>
                                                                            </th>
                                                                            <td>
                                                                                <div class="media align-items-center p-0">
                                                                                    <div class="text-center">
                                                                                        <a href="#"><i class="cc LSK mr-5" title="LSK"></i></a>
                                                                                    </div>
                                                                                    <div>
                                                                                        <p class="no-margin text-bold">LISK LSK</p>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="media align-items-center p-0 p18">
                                                                                    1000
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="media align-items-center p-0 p18">
                                                                                    6010
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="media align-items-center p-0 p18">
                                                                                    5
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th>
                                                                                <div class="media align-items-center p-0 p18">
                                                                                    20
                                                                                </div>
                                                                            </th>
                                                                            <td>
                                                                                <div class="media align-items-center p-0">
                                                                                    <div class="text-center">
                                                                                        <a href="#"><i class="cc DGB mr-5" title="DGB"></i></a>
                                                                                    </div>
                                                                                    <div>
                                                                                        <p class="no-margin text-bold">DigiByte DGB</p>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="media align-items-center p-0 p18">
                                                                                    1000
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="media align-items-center p-0 p18">
                                                                                    25.37
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="media align-items-center p-0 p18">
                                                                                    5
                                                                                </div>
                                                                            </td>
                                                                        </tr>

                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
            
                          </div>			
                    </div>	
              </div>
        </section>
    </div>
  

<!-- ./wrapper -->
  	
	 
	 
	<!-- jQuery 3 -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>
	
	<!-- popper -->
	<script src="http://html-templates.multipurposethemes.com/bootstrap-4/admin/crypto-admin/crypto-dark-admin/assets/vendor_components/popper/dist/popper.min.js"></script>
	
	<!-- Bootstrap 4.0-->
	<script src="http://html-templates.multipurposethemes.com/bootstrap-4/admin/crypto-admin/crypto-dark-admin/assets/vendor_components/bootstrap/dist/js/bootstrap.js"></script>
	
	<!-- Slimscroll -->
	<script src="http://html-templates.multipurposethemes.com/bootstrap-4/admin/crypto-admin/crypto-dark-admin/assets/vendor_components/jquery-slimscroll/jquery.slimscroll.js"></script>
	
	<!-- FastClick -->
	<script src="http://html-templates.multipurposethemes.com/bootstrap-4/admin/crypto-admin/crypto-dark-admin/assets/vendor_components/fastclick/lib/fastclick.js"></script>
	
    <!--amcharts charts -->
	<script src="http://www.amcharts.com/lib/3/amcharts.js" type="text/javascript"></script>
	<script src="http://www.amcharts.com/lib/3/gauge.js" type="text/javascript"></script>
	<script src="http://www.amcharts.com/lib/3/serial.js" type="text/javascript"></script>
	<script src="http://www.amcharts.com/lib/3/amstock.js" type="text/javascript"></script>
	<script src="http://www.amcharts.com/lib/3/pie.js" type="text/javascript"></script>
	<script src="https://www.amcharts.com/lib/3/plugins/dataloader/dataloader.min.js"></script>
	<script src="http://www.amcharts.com/lib/3/plugins/animate/animate.min.js" type="text/javascript"></script>
	<script src="http://www.amcharts.com/lib/3/plugins/export/export.min.js" type="text/javascript"></script>
	<script src="http://www.amcharts.com/lib/3/themes/patterns.js" type="text/javascript"></script>
	<script src="http://www.amcharts.com/lib/3/themes/dark.js" type="text/javascript"></script>	
	
	<!-- webticker -->
	<script src="http://html-templates.multipurposethemes.com/bootstrap-4/admin/crypto-admin/crypto-dark-admin/assets/vendor_components/Web-Ticker-master/jquery.webticker.min.js"></script>
	
	<!-- Crypto_Admin App -->
	<script src="js/template.js"></script>
	
	<!-- Crypto_Admin dashboard demo (This is only for demo purposes) -->
	<script src="js/pages/dashboard.js"></script>
	
	<!-- Chart -->
	<script src="http://html-templates.multipurposethemes.com/bootstrap-4/admin/crypto-admin/crypto-dark-admin/assets/vendor_components/chart.js-master/Chart.min.js"></script>
	<script src="js/pages/chartjs-int.js"></script>
	
	<!-- Crypto_Admin for demo purposes -->
  <script src="js/demo.js"></script>
  
  <!-- api reqests to coinmarketcap  -->
  <script src="js/api.js"></script>
	
</body>


</html>
