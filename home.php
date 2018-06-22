<?php

  require_once("session.php");
  
  require_once("class.user.php");
  $auth_user = new USER();
  
  
  $user_id = $_SESSION['user_session'];
  
  $stmt = $auth_user->runQuery("SELECT * FROM users WHERE user_id=:user_id");
  $stmt->execute(array(":user_id"=>$user_id));
  
  $userRow=$stmt->fetch(PDO::FETCH_ASSOC);

?>

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
      
		<div class="row">
			
			<div class="col-12">
				<div class="box box-inverse box-dark">
				  <div class="box-body tickers-block">
            <h4 class="text-center">Current fund portfolio</h4>
					  <ul id="webticker-1">
						<li><i class="cc BTC"></i> BTC <span class="text-yellow"> 9.8%</span></li> 
						<li><i class="cc ETH"></i> ETH <span class="text-yellow"> 11 % </span></li> 
            <li><i class="cc LTC"></i> BTC <span class="text-yellow"> 9.8%</span></li> 
            <li><i class="cc BCH"></i> ETH <span class="text-yellow"> 11 % </span></li> 
					
					  </ul>
				  </div>
			  </div>
			</div>
			<div class="col-lg-3 col-md-6">
        <div class="box pull-up">
          <div class="box-body">
            <div class="media align-items-center p-0">
            <div class="text-center">
             <!--  <a href="#"><i class="cc BTC mr-5" title="BTC"></i></a> -->
            </div>
            <div>
              <h4 class="no-margin text-bold">A20 Supply</h4>
            </div>
            </div>
            <div class="hrscont">
            <div class="btcusdprice ">
              A20 40,547,920
            </div>
              <div class="col-md-8 m15">
                  <div class="percentonehr lw35 hour1 btc1h">0.14%
                  </div>
                  <div class="relative ">1h 
                   <i class="fa  fa-caret-up hicon 1hbtc"></i>
                  </div>
              </div>
              <div class="col-md-12 m15">
                <div class="percentonehr lw35 hour24 btc24h">0.14%</div><div class="relative ">24h <i class="fa  fa-caret-up hicon updownicon hmicon24"></i></div>  
              </div>
            </div>   
          </div>
          <div class="box-footer p-0 no-border">  
          </div>
       </div>
      </div>
      <div class="col-lg-3 col-md-6">
        <div class="box pull-up">
          <div class="box-body">
            <div class="media align-items-center p-0">
            <div class="text-center">
             <!--  <a href="#"><i class="cc BTC mr-5" title="BTC"></i></a> -->
            </div>
            <div>
              <h4 class="no-margin text-bold">Fund Value </h4>
            </div>
            </div>
            <div class="hrscont">
            <div class="btcusdprice ">
              $44,820,204
            </div>
              <div class="col-md-8 m15">
                  <div class="percentonehr lw35 hour1 btc1h">0.14%
                  </div>
                  <div class="relative ">1h 
                   <i class="fa  fa-caret-up hicon 1hbtc"></i>
                  </div>
              </div>
              <div class="col-md-12 m15">
                <div class="percentonehr lw35 hour24 btc24h">0.14%</div><div class="relative ">24h <i class="fa  fa-caret-up hicon updownicon hmicon24"></i></div>  
              </div>
            </div>   
          </div>
          <div class="box-footer p-0 no-border">
            
          </div>
       </div>
      </div>
      <div class="col-lg-3 col-md-6">
        <div class="box pull-up">
          <div class="box-body">
            <div class="media align-items-center p-0">
            <div class="text-center">
             <!--  <a href="#"><i class="cc BTC mr-5" title="BTC"></i></a> -->
            </div>
            <div>
              <h4 class="no-margin text-bold">Token NAV </h4>
            </div>
            </div>
            <div class="hrscont">
            <div class="btcusdprice ">
              $1.10536
            </div>
              <div class="col-md-8 m15">
                  <div class="percentonehr lw35 hour1 btc1h">0.14%
                  </div>
                  <div class="relative ">1h 
                   <i class="fa  fa-caret-up hicon 1hbtc"></i>
                  </div>
              </div>
              <div class="col-md-12 m15">
                <div class="percentonehr lw35 hour24 btc24h">0.14%</div><div class="relative ">24h <i class="fa  fa-caret-up hicon updownicon hmicon24"></i></div>  
              </div>
            </div>   
          </div>
          <div class="box-footer p-0 no-border">
           
          </div>
       </div>
      </div>
      <div class="col-lg-3 col-md-6">
        <div class="box pull-up">
          <div class="box-body">
            <div class="media align-items-center p-0">
            <div class="text-center">
             <!--  <a href="#"><i class="cc BTC mr-5" title="BTC"></i></a> -->
            </div>
            <div>
              <h4 class="no-margin text-bold">Fund Movement</h4>
            </div>
            </div>
            <div class="hrscont">
            <div class="btcusdprice ">
              $7654.88
            </div>
              <div class="col-md-8 m15">
                  <div class="percentonehr lw35 hour1 btc1h">0.14%
                  </div>
                  <div class="relative ">1h 
                   <i class="fa  fa-caret-up hicon 1hbtc"></i>
                  </div>
              </div>
              <div class="col-md-12 m15">
                <div class="percentonehr lw35 hour24 btc24h">0.14%</div><div class="relative ">24h <i class="fa  fa-caret-up hicon updownicon hmicon24"></i></div>  
              </div>
            </div>   
          </div> 
        </div>
      </div>
			<div class="col-lg-12 none">
				<div class="box">
					<div class="box-header with-border">
					  <h4 class="box-title">Intra-day Data</h4>

					  <ul class="box-controls pull-right">
						  <li><a class="box-btn-close" href="#"></a></li>
						  <li><a class="box-btn-slide"  href="#"></a></li>	
						  <li><a class="box-btn-fullscreen" href="#"></a></li>
					  </ul>
					</div>
					<div class="box-body">
						<div class="chart">
							<div id="chartdiv21" style="height: 500px;"></div>
						</div>
					</div>
					<!-- /.box-body -->
				  </div>
			</div>
			<div class="col-lg-3 col-md-6">
				<div class="box pull-up">
				  <div class="box-body">
					  <div class="media align-items-center p-0">
						<div class="text-center">
						  <a href="#"><i class="cc BTC mr-5" title="BTC"></i></a>
						</div>
						<div>
						  <h3 class="no-margin text-bold">Bitcoin BTC</h3>
						</div>
					  </div>
            <div class="hrscont">
            <div class="btcusdprice ">
              $7654.88
            </div>
              <div class="col-md-8 m15">
                <div class="percentonehr lw35 hour1 btc1h">0.14%
                </div>
                <div class="relative ">1h 
                 <i class="fa  fa-caret-up hicon 1hbtc"></i>
                </div>
                
              </div>
              <div class="col-md-12 m15">
                <div class="percentonehr lw35 hour24 btc24h">0.14%</div><div class="relative ">24h <i class="fa  fa-caret-up hicon updownicon hmicon24"></i></div>
                
              </div>
              <div class="col-md-12 m15">
                <div class="percentonehr lw35 days7 btc7d">0.14%</div><div class="relative ">7d <i class="fa  fa-caret-up hicon updownicon d7icon"></i></div>
              </div>
              
            </div>
					  <div class="flexbox align-items-center mt-5">
  						<div>
  						  <p class="no-margin font-weight-600"><span class="text-yellow btcCircSupply" >0.00000434 </span><span class="text-success xxfonts">IN CIRCULATION</span></p>

  						</div>
					  </div>
            <div class="flexbox align-items-center mt-5">
              <div>
                <p class="no-margin font-weight-600"><span class="text-yellow btcMarketCap" >0.00000434 </span><span class="text-success xxfonts"> MARKET CAP</span></p>

              </div>
            </div>
				</div>
				<div class="box-footer p-0 no-border">
					<div class="chart"><canvas id="chartjs1" class="h-80"></canvas></div>
				</div>
			 </div>
		  </div>
			<div class="col-lg-3 col-md-6">
				<div class="box pull-up">
          <div class="box-body">
            <div class="media align-items-center p-0">
            <div class="text-center">
              <a href="#"><i class="cc LTC mr-5" title="LTC"></i></a>
            </div>
            <div>
              <h3 class="no-margin text-bold">Litecoin</h3>
            </div>
            </div>
            <div class="hrscont">
            <div class="ltcusdprice ">
              $7654.88
            </div>
              <div class="col-md-8 m15">
                <div class="percentonehr lw35 hour1  ltc1h">0.14%
                </div>
                <div class="relative ">1h 
                 <i class="fa  fa-caret-up hicon 1hbtc ltc1hicon"></i>
                </div>
                
              </div>
              <div class="col-md-12 m15">
                <div class="percentonehr lw35 hour24  ltc24h">0.14%</div><div class="relative ">24h <i class="fa  fa-caret-up hicon updownicon hmicon24 ltc24hicon"></i></div>
                
              </div>
              <div class="col-md-12 m15">
                <div class="percentonehr lw35 days7 ltc7d">0.14%</div><div class="relative ">7d <i class="fa  fa-caret-up hicon updownicon ltcd7icon "></i></div>
              </div>
              
            </div>
            <div class="flexbox align-items-center mt-5">
              <div>
                <p class="no-margin font-weight-600"><span class="text-yellow ltcCircSupply" >0.00000434 </span><span class="text-success xxfonts">IN CIRCULATION</span></p>

              </div>
            </div>
            <div class="flexbox align-items-center mt-5">
              <div>
                <p class="no-margin font-weight-600"><span class="text-yellow ltcMarketCap" >0.00000434 </span><span class="text-success xxfonts"> MARKET CAP</span></p>

              </div>
            </div>
        </div>
				<div class="box-footer p-0 no-border">
					<div class="chart"><canvas id="chartjs2" class="h-80"></canvas></div>
				</div>
			 </div>
		  </div>
			<div class="col-lg-3 col-md-6">
				  <div class="box pull-up">
          <div class="box-body">
            <div class="media align-items-center p-0">
            <div class="text-center">
              <a href="#"><i class="cc ETH mr-5" title="ETH"></i></a>
            </div>
            <div>
              <h3 class="no-margin text-bold">Ethereum ETH</h3>
            </div>
            </div>
            <div class="hrscont">
            <div class="ethusdprice">
              $7654.88
            </div>
              <div class="col-md-8 m15">
                <div class="percentonehr lw35 hour1 eth1h">0.14%
                </div>
                <div class="relative ">1h 
                 <i class="fa  fa-caret-up hicon eth1hicon"></i>
                </div>
                
              </div>
              <div class="col-md-12 m15">
                <div class="percentonehr lw35 hour24 eth24h">0.14%</div><div class="relative ">24h <i class="fa  fa-caret-up hicon updownicon eth24hicon"></i></div>
                
              </div>
              <div class="col-md-12 m15">
                <div class="percentonehr lw35 days7 eth7d">0.14%</div><div class="relative ">7d <i class="fa  fa-caret-up hicon updownicon ethd7icon"></i></div>
              </div>
              
            </div>
            <div class="flexbox align-items-center mt-5">
              <div>
                <p class="no-margin font-weight-600"><span class="text-yellow ethCircSupply" >0.00000434 </span><span class="text-success xxfonts">IN CIRCULATION</span></p>

              </div>
            </div>
            <div class="flexbox align-items-center mt-5">
              <div>
                <p class="no-margin font-weight-600"><span class="text-yellow ethMarketCap" >0.00000434 </span><span class="text-success xxfonts"> MARKET CAP</span></p>

              </div>
            </div>
        </div>
				<div class="box-footer p-0 no-border">
					<div class="chart"><canvas id="chartjs3" class="h-80"></canvas></div>
				</div>
			 </div>
		  </div>
			<div class="col-lg-3 col-md-6">
				<div class="box pull-up">
				  <div class="box-body">
					  <div class="media align-items-center p-0">
						<div class="text-center">
						  <a href="#"><i class="cc XRP mr-5" title="XRP"></i></a>
						</div>
						<div>
						  <h3 class="no-margin text-bold">Ripple XRP</h3>
						</div>
					  </div>
					  <div class="hrscont">
            <div class="xrpusdprice ">
              $7654.88
            </div>
              <div class="col-md-8 m15">
                <div class="percentonehr lw35 hour1  xrp1h">0.14%
                </div>
                <div class="relative ">1h 
                 <i class="fa  fa-caret-up hicon 1hbtc xrp1hicon"></i>
                </div>
                
              </div>
              <div class="col-md-12 m15">
                <div class="percentonehr lw35 hour24  xrp24h">0.14%</div><div class="relative ">24h <i class="fa  fa-caret-up hicon updownicon hmicon24 xrp24hicon"></i></div>
                
              </div>
              <div class="col-md-12 m15">
                <div class="percentonehr lw35 days7 xrp7d">0.14%</div><div class="relative ">7d <i class="fa  fa-caret-up hicon updownicon xrpd7icon "></i></div>
              </div>
              
            </div>
            <div class="flexbox align-items-center mt-5">
              <div>
                <p class="no-margin font-weight-600"><span class="text-yellow xrpCircSupply" >0.00000434 </span><span class="text-success xxfonts">IN CIRCULATION</span></p>

              </div>
            </div>
            <div class="flexbox align-items-center mt-5">
              <div>
                <p class="no-margin font-weight-600"><span class="text-yellow xrpMarketCap" >0.00000434 </span><span class="text-success xxfonts"> MARKET CAP</span></p>

              </div>
            </div>
        </div>
        <div class="box-footer p-0 no-border">
          <div class="chart"><canvas id="chartjs4" class="h-80"></canvas></div>
        </div>
       </div>
      </div>
				
			<div class="col-lg-12 col-12">
				<div class="box">
					<div class="box-header with-border">
					  <h4 class="box-title">Table of Holdings </h4>
						<ul class="box-controls pull-right">
						  <!-- <li><a class="box-btn-close" href="#"></a></li> -->
						  <li><a class="box-btn-slide" href="#"></a></li>	
						  <li><a class="box-btn-fullscreen" href="#"></a></li>
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
										<th>Value</th>
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
                          1
                       </div>
                    </td>
										<td>
                      <div class="media align-items-center p-0 p18">
                          1
                       </div>          
                    </td>
                    <td>
                      <div class="media align-items-center p-0 p18">
                          1
                       </div>          
                    </td>
									</tr>
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
                          1
                       </div>
                    </td>
                    <td>
                      <div class="media align-items-center p-0 p18">
                          1
                       </div>          
                    </td>
                    <td>
                      <div class="media align-items-center p-0 p18">
                          1
                       </div>          
                    </td>
                  </tr>
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
                          1
                       </div>
                    </td>
                    <td>
                      <div class="media align-items-center p-0 p18">
                          1
                       </div>          
                    </td>
                    <td>
                      <div class="media align-items-center p-0 p18">
                          1
                       </div>          
                    </td>
                  </tr>
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
                          1
                       </div>
                    </td>
                    <td>
                      <div class="media align-items-center p-0 p18">
                          1
                       </div>          
                    </td>
                    <td>
                      <div class="media align-items-center p-0 p18">
                          1
                       </div>          
                    </td>
                  </tr>
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
                          1
                       </div>
                    </td>
                    <td>
                      <div class="media align-items-center p-0 p18">
                          1
                       </div>          
                    </td>
                    <td>
                      <div class="media align-items-center p-0 p18">
                          1
                       </div>          
                    </td>
                  </tr>
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
                          1
                       </div>
                    </td>
                    <td>
                      <div class="media align-items-center p-0 p18">
                          1
                       </div>          
                    </td>
                    <td>
                      <div class="media align-items-center p-0 p18">
                          1
                       </div>          
                    </td>
                  </tr>
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
                          1
                       </div>
                    </td>
                    <td>
                      <div class="media align-items-center p-0 p18">
                          1
                       </div>          
                    </td>
                    <td>
                      <div class="media align-items-center p-0 p18">
                          1
                       </div>          
                    </td>
                  </tr>
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
                          1
                       </div>
                    </td>
                    <td>
                      <div class="media align-items-center p-0 p18">
                          1
                       </div>          
                    </td>
                    <td>
                      <div class="media align-items-center p-0 p18">
                          1
                       </div>          
                    </td>
                  </tr>
									
								</tbody>
							</table>
						</div>						
					</div>
					<!-- /.box-body -->
				  </div>
				  <!-- /.box -->

			  </div>			
		</div>	
		
		
	</section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  
  <footer class="main-footer">
    <div class="pull-right d-none d-sm-inline-block">
        <ul class="nav nav-primary nav-dotted nav-dot-separated justify-content-center justify-content-md-end">
		  <li class="nav-item">
			<a class="nav-link" href="javascript:void(0)">FAQ</a>
		  </li>
		  <li class="nav-item">
			<a class="nav-link" href="#">Purchase Now</a>
		  </li>
		</ul>
    </div>
	  &copy; 2018 <a href="https://www.multipurposethemes.com/">Multi-Purpose Themes</a>. All Rights Reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
      <li class="nav-item"><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
      <li class="nav-item"><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-cog fa-spin"></i></a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
      <!-- Home tab content -->
      <div class="tab-pane" id="control-sidebar-home-tab">
        <h3 class="control-sidebar-heading">Recent Activity</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-birthday-cake bg-red"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Admin Birthday</h4>

                <p>Will be July 24th</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-user bg-yellow"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Jhone Updated His Profile</h4>

                <p>New Email : jhone_doe@demo.com</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Disha Joined Mailing List</h4>

                <p>disha@demo.com</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-file-code-o bg-green"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Code Change</h4>

                <p>Execution time 15 Days</p>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

        <h3 class="control-sidebar-heading">Tasks Progress</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Web Design
                <span class="label label-danger pull-right">40%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-danger" style="width: 40%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Update Data
                <span class="label label-success pull-right">75%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-success" style="width: 75%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Order Process
                <span class="label label-warning pull-right">89%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-warning" style="width: 89%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Development 
                <span class="label label-primary pull-right">72%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-primary" style="width: 72%"></div>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

      </div>
      <!-- /.tab-pane -->
      <!-- Stats tab content -->
      <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
      <!-- /.tab-pane -->
      <!-- Settings tab content -->
      <div class="tab-pane" id="control-sidebar-settings-tab">
        <form method="post">
          <h3 class="control-sidebar-heading">General Settings</h3>

          <div class="form-group">
            <input type="checkbox" id="report_panel" class="chk-col-grey" >
			<label for="report_panel" class="control-sidebar-subheading ">Report panel usage</label>

            <p>
              general settings information
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <input type="checkbox" id="allow_mail" class="chk-col-grey" >
			<label for="allow_mail" class="control-sidebar-subheading ">Mail redirect</label>

            <p>
              Other sets of options are available
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <input type="checkbox" id="expose_author" class="chk-col-grey" >
			<label for="expose_author" class="control-sidebar-subheading ">Expose author name</label>

            <p>
              Allow the user to show his name in blog posts
            </p>
          </div>
          <!-- /.form-group -->

          <h3 class="control-sidebar-heading">Chat Settings</h3>

          <div class="form-group">
            <input type="checkbox" id="show_me_online" class="chk-col-grey" >
			<label for="show_me_online" class="control-sidebar-subheading ">Show me as online</label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <input type="checkbox" id="off_notifications" class="chk-col-grey" >
			<label for="off_notifications" class="control-sidebar-subheading ">Turn off notifications</label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">              
              <a href="javascript:void(0)" class="text-red margin-r-5"><i class="fa fa-trash-o"></i></a>
              Delete chat history
            </label>
          </div>
          <!-- /.form-group -->
        </form>
      </div>
      <!-- /.tab-pane -->
    </div>
  </aside>
  <!-- /.control-sidebar -->
  
  <!-- Add the sidebar's background. This div must be placed immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
  
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
