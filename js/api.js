
// list of all global variables used 

    var CONSOLE_DEBUG = true ; 

    var btcCircSupply ;

    var btcCurrentPrice ;

// 

  
// tickerTopTenCryptoCurrencies() to show top ten cryptos based on their rank 
// url : https://api.coinmarketcap.com/v2/ticker/?limit=10
// params : limit = 10    
  
  function tickerTopTenCryptoCurrencies(){

    $.ajax({
        type: "GET",
        url: 'ticker.php',
        data: '',
        success:function(Response) {
    
            var x = Response;
            x = JSON.parse(x);

            // x = x.data ;

            // 
            // ethereumcCircSupply = x.data[1027].circulating_supply ;
            // ethereumcMarketCap = x.data[1027].quotes.USD.market_cap;
            // percent_change_1027h = x.data[1027].quotes.USD.percent_change_1027h;
            // percent_change_24h = x.data[1027].quotes.USD.percent_change_24h;
            // percent_change_7d = x.data[1027].quotes.USD.percent_change_7d;
            
            // x = JSON.stringify(x.data);
            CONSOLE_DEBUG && console.log(x);
            var ethereumName = x.data[1027].name ;
            CONSOLE_DEBUG && console.log("ethereumName", ethereumName);
            var ethereum_CircSupply = x.data[1027].circulating_supply;
            var ethereum_MarketCap = x.data[1027].quotes.USD.market_cap;
            var ethereum_percent_change_1h = x.data[1027].quotes.USD.percent_change_1h;
            var ethereum_percent_change_24h = x.data[1027].quotes.USD.percent_change_24h;
            var ethereum_percent_change_7d = x.data[1027].quotes.USD.percent_change_7d;


            var litecoin_CircSupply = x.data[2].circulating_supply;
            var litecoin_MarketCap = x.data[2].quotes.USD.market_cap;
            var litecoin_percent_change_1h = x.data[2].quotes.USD.percent_change_1h;
            var litecoin_percent_change_24h = x.data[2].quotes.USD.percent_change_24h;
            var litecoin_percent_change_7d = x.data[2].quotes.USD.percent_change_7d;
            var litecoin_CurrentPrice = x.data[1].quotes.USD.price;

            var Ripple_CircSupply = x.data[52].circulating_supply;
            var Ripple_MarketCap = x.data[52].quotes.USD.market_cap;
            var Ripple_percent_change_1h = x.data[52].quotes.USD.percent_change_1h;
            var Ripple_percent_change_24h = x.data[52].quotes.USD.percent_change_24h;
            var Ripple_percent_change_7d = x.data[52].quotes.USD.percent_change_7d;

            var bitcoin_cash_CircSupply = x.data[1831].circulating_supply;
            var bitcoin_cash_MarketCap = x.data[1831].quotes.USD.market_cap;
            var bitcoin_cash_percent_change_1h = x.data[1831].quotes.USD.percent_change_1h;
            var bitcoin_cash_percent_change_24h = x.data[1831].quotes.USD.percent_change_24h;
            var bitcoin_cash_percent_change_7d = x.data[1831].quotes.USD.percent_change_7d;

            // var neo_CircSupply = x.data[1376].circulating_supply;
            // var neo_MarketCap = x.data[1376].quotes.USD.market_cap;
            // var neo_percent_change_1h = x.data[1376].quotes.USD.percent_change_1h;
            // var neo_percent_change_24h = x.data[1376].quotes.USD.percent_change_24h;
            // var neo_percent_change_7d = x.data[1376].quotes.USD.percent_change_7d;

            // var dash_CircSupply = x.data[1376].circulating_supply;
            // var dash_MarketCap = x.data[1376].quotes.USD.market_cap;
            // var dash_percent_change_1h = x.data[1376].quotes.USD.percent_change_1h;
            // var dash_percent_change_24h = x.data[1376].quotes.USD.percent_change_24h;
            // var dash_percent_change_7d = x.data[1376].quotes.USD.percent_change_7d;

            $(".ltcCircSupply").text(litecoin_CircSupply);
            $(".ltcMarketCap").text(litecoin_MarketCap);
            $(".ltc1h").text(litecoin_percent_change_1h+"%" );
            $(".ltc24h").text(litecoin_percent_change_24h+"%" );
            $(".ltc7d").text(litecoin_percent_change_7d+"%" );
            $(".ltcusdprice").text("$"+litecoin_CurrentPrice );

            
            
        }
        
    });
      
  }



  function getBitcoinCurrentRate(){

    $.ajax({
        type: "GET",
        url: 'btcRate.php',
        data: '',
        success:function(Response) {
    
            var x = Response;
            x = JSON.parse(x);

            btcName = x.data[1].name ;
            btcCircSupply = x.data[1].circulating_supply ;
            btcMarketCap = x.data[1].quotes.USD.market_cap;
            percent_change_1h = x.data[1].quotes.USD.percent_change_1h;
            percent_change_24h = x.data[1].quotes.USD.percent_change_24h;
            percent_change_7d = x.data[1].quotes.USD.percent_change_7d;

            btcCurrentPrice = x.data[1].quotes.USD.price;

            for ( var i = 1 ; i < 2 ; i++ ){

                CONSOLE_DEBUG && console.log(btcName);
                 CONSOLE_DEBUG && console.log("circulating_supply", btcCircSupply);
                 CONSOLE_DEBUG && console.log("btcMarketCap", btcMarketCap);
                 CONSOLE_DEBUG && console.log("percent_change_1h", percent_change_1h);

                 $(".btcCircSupply").text(btcCircSupply);
                 $(".btcMarketCap").text(btcMarketCap);
                 $(".btc1h").text(percent_change_1h+"%" );
                 $(".btc24h").text(percent_change_24h+"%" );
                 $(".btc7d").text(percent_change_7d+"%" );
                 $(".btcusdprice").text("$"+btcCurrentPrice );
      

                 if ( percent_change_1h  < 0 ){
                    $(".1hbtc").removeClass("fa-caret-up");
                    $(".1hbtc").addClass("fa-caret-down");

                 }else if ( percent_change_24h  < 0 ){
                    $(".hmicon24").removeClass("fa-caret-up");
                    $(".hmicon24").addClass("fa-caret-down");

                 }else if ( percent_change_7d  < 0 ){
                    $(".d7icon").removeClass("fa-caret-up");
                    $(".d7icon").addClass("fa-caret-down");

                 }

                 

            }
            
        }
        
    });

  }






  $(document).ready(function(){
    tickerTopTenCryptoCurrencies();
    getBitcoinCurrentRate();

    
});