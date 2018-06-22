
// list of all global variables used 

    var CONSOLE_DEBUG = true ; 

    var btcCircSupply ;

    var btcCurrentPrice ;

// 



function cryptoHeadlines(){

    $.ajax({
        type: "GET",
        url: 'includes/headlines.php',
        data: '',
        success : function(Response){
            var newsResponse = Response ;
            newsResponse = JSON.parse(newsResponse);
            CONSOLE_DEBUG && console.log("newsResponse", newsResponse);

            for( var i = 0 ; i < 10 ; i++ ){


               CONSOLE_DEBUG && console.log("newsResponse", newsResponse.articles[i]);
               $(".footer").before("<li class='newsli'><a href='"+newsResponse.articles[i].url+"' target='_blank'> "+newsResponse.articles[i].title +"</a></li>")
            }

        }

    });
}

  
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
            var ethereum_CurrentPrice = x.data[1027].quotes.USD.price;


            var litecoin_CircSupply = x.data[2].circulating_supply;
            var litecoin_MarketCap = x.data[2].quotes.USD.market_cap;
            var litecoin_percent_change_1h = x.data[2].quotes.USD.percent_change_1h;
            var litecoin_percent_change_24h = x.data[2].quotes.USD.percent_change_24h;
            var litecoin_percent_change_7d = x.data[2].quotes.USD.percent_change_7d;
            var litecoin_CurrentPrice = x.data[2].quotes.USD.price;

            var Ripple_CircSupply = x.data[52].circulating_supply;
            var Ripple_MarketCap = x.data[52].quotes.USD.market_cap;
            var Ripple_percent_change_1h = x.data[52].quotes.USD.percent_change_1h;
            var Ripple_percent_change_24h = x.data[52].quotes.USD.percent_change_24h;
            var Ripple_percent_change_7d = x.data[52].quotes.USD.percent_change_7d;
            var Ripple_CurrentPrice = x.data[52].quotes.USD.price;

            var bitcoin_cash_CircSupply = x.data[1831].circulating_supply;
            var bitcoin_cash_MarketCap = x.data[1831].quotes.USD.market_cap;
            var bitcoin_cash_percent_change_1h = x.data[1831].quotes.USD.percent_change_1h;
            var bitcoin_cash_percent_change_24h = x.data[1831].quotes.USD.percent_change_24h;
            var bitcoin_cash_percent_change_7d = x.data[1831].quotes.USD.percent_change_7d;
            var bitcoin_cash_CurrentPrice = x.data[1831].quotes.USD.price;


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

            
                 if ( litecoin_percent_change_1h  < 0 ) {

                    $(".ltc1hicon").removeClass("fa-caret-up");
                    $(".ltc1hicon").addClass("fa-caret-down");

                 }
                 if ( litecoin_percent_change_24h  < 0 ){
                    $(".ltc24hicon").removeClass("fa-caret-up");
                    $(".ltc24hicon").addClass("fa-caret-down");

                 }
                 if ( litecoin_percent_change_7d  < 0 ){
                    $(".ltcd7icon").removeClass("fa-caret-up");
                    $(".ltcd7icon").addClass("fa-caret-down");

                 }

            $(".ethCircSupply").text(ethereum_CircSupply);
            $(".ethMarketCap").text(ethereum_MarketCap);
            $(".eth1h").text(ethereum_percent_change_1h+"%" );
            $(".eth24h").text(ethereum_percent_change_24h+"%" );
            $(".eth7d").text(ethereum_percent_change_7d+"%" );
            $(".ethusdprice").text("$"+ethereum_CurrentPrice );

                if ( litecoin_percent_change_1h  < 0 ) {

                    $(".eth1hicon").removeClass("fa-caret-up");
                    $(".eth1hicon").addClass("fa-caret-down");

                 }
                 if ( litecoin_percent_change_24h  < 0 ){
                    $(".eth24hicon").removeClass("fa-caret-up");
                    $(".eth24hicon").addClass("fa-caret-down");

                 }
                 if ( litecoin_percent_change_7d  < 0 ){
                    $(".ethd7icon").removeClass("fa-caret-up");
                    $(".ethd7icon").addClass("fa-caret-down");

                 }
            $(".xrpCircSupply").text(Ripple_CircSupply);
            $(".xrpMarketCap").text(Ripple_MarketCap);
            $(".xrp1h").text(Ripple_percent_change_1h+"%" );
            $(".xrp24h").text(Ripple_percent_change_24h+"%" );
            $(".xrp7d").text(Ripple_percent_change_7d+"%" );
            $(".xrpusdprice").text("$"+Ripple_CurrentPrice );

                if ( Ripple_percent_change_1h  < 0 ) {

                    $(".xrp1hicon").removeClass("fa-caret-up");
                    $(".xrp1hicon").addClass("fa-caret-down");

                 }
                 if ( Ripple_percent_change_24h  < 0 ){
                    $(".xrp24hicon").removeClass("fa-caret-up");
                    $(".xrp24hicon").addClass("fa-caret-down");

                 }
                 if ( Ripple_percent_change_7d  < 0 ){
                    $(".xrpd7icon").removeClass("fa-caret-up");
                    $(".xrpd7icon").addClass("fa-caret-down");

                 } 


            
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
    
    cryptoHeadlines();
    tickerTopTenCryptoCurrencies();
    getBitcoinCurrentRate();

    window.setInterval(function(){
       /// call your function here
          tickerTopTenCryptoCurrencies();
          getBitcoinCurrentRate();
    }, 10000);  // Change Interval here to test. For eg: 5000 for 5 sec
    

    
});