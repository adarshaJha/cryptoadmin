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
            <div class="col-sm-12" style="text-align: center;">
                <div class="panel" style="border-radius: 4px 4px 4px 4px !important;">
                    <div class="panel-heading" style="padding: 20px 25px;"><div class="row">
                        <div class="col-md-12" style="text-align: left"><i class="fa fa-paper-plane main-icon main-lightblue"></i>
                            <h1 class="main-icon-title">Liquidate</h1
                                ><h4 style="color:red">Do not use this functionality unless you want to exchange your C20 tokens directly for ETH at the current NAV. This function is NOT used to send tokens or claim them from our website.</h4>
                                <p>The withdrawal functionality is directly coded into the smart contract. Any whitelisted Ethereum address can withdraw at any time - we provide a simple interface here to allow ease of access.</p>
                                <p>Verified token holders are able to whitelist their own ethereum addresses which can then be used to withdraw the Net Asset Value of their C20 tokens (in ETH). This withdrawal functionality enforces a lower price bound on the C20 token's exchange value. We directly link the underlying asset value of the fund to all tokens via regular price updates.</p>
                                <p>Withdrawing ETH by liquidating your tokens is a simple 3 step process.</p>
                                <h5>Step 0:</h5>
                                <p>Make sure you have a whitelisted Ethereum address that has a balance of C20 tokens. You are able to whitelist an address within your <a href="/users/">account</a> page once you have logged in and are verified.</p>
                                    <h5>Step 1:</h5>
                                    <p>Request a withdrawal by specifying the number of tokens you wish to liquidate. You ae not able to cancel a request once it's made.</p>
                                    <h5>Step 2:</h5>
                                    <p>Wait for the next price update event, this occurs every hour. The smart contract uses a forward pricing policy, which means that your withdrawal is processed at the next token price update event.</p>
                                    <p>As a result, you may get slightly more or less ETH than what the NAV indicates at the time of the withdraw request.</p>
                                    <h5>Step 3:</h5><p>Withdraw your ETH. Upon clicking withdraw, your tokens are sent to the fund managers and ETH is transferred to your account.</p>
                                    <p style="font-size: small">*Note that we never need to know your private keys, all transactional information is handled by Metamask or an Ethereum client of your choice. Anyone is free to create their own Dapp interacting with our <a href="https://github.com/cryptotwenty/" target="_blank">smart contract</a>.</p>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="panel" style="border-radius: 4px 4px 4px 4px !important;">
                        <div class="row">
                            <div class="col-sm-12" style="text-align: center;">
                                <div class="panel" style="border-radius: 4px 4px 4px 4px !important;">
                                    <div class="panel-heading" style="padding: 20px 25px;">
                                        <div class="row"><div class="col-md-12" style="text-align: left">
                                            <h1 class="main-icon-title">FAQ</h1>
                                            <h5>How does this DAPP work?</h5>
                                            <p>The above withdraw DAPP takes your Ethereum address from Metamask; this address is then used to make the transactions that interact with the smart contract. There are only two transactions that need to be made; requestWithdraw, and withdraw. These transactions must be ordered as in the steps outlined above, but they can be made from any account that is able to interact directly wiith the smart contract (such as MyEtherWallet).</p>
                                            <h5>What is a whitelisted address?</h5>
                                            <p>A whitelisted address is one that is linked to a verified (KYC'd) profile. This status is stored directly within the smart contract. All CRYPTO20 ICO investors' receiving Ethereum addresses are already whitelisted.</p>
                                            <p></p>
                                            <h5>How is the withdraw DAPP related to the CRYPTO20 portal?</h5>
                                            <p>The withdraw DAPP can be seen as completely standalone from the CRYPTO20 website. We only host it here for convenience.</p>
                                            <p>The addresses of all ICO investors are already whitelisted and can be used to withdraw ETH using the smart contract directly. For new investors and those looking to send to new Ethereum addresses, these addresses must first be whitelisted before they are able to be used for withdrawals. This whitelisting can be done within your account page ONCE YOU HAVE COMPLETED KYC AND ARE THUS VERIFIED.</p>
                                            <h5>Why is my address not whitelisted?</h5>
                                            <p>Either that address is not whitelisted or you have not selected the correct account within Metmask.</p>
                                            <h5></h5>
                                            <p></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
        </form>
      </div>
    </div>
  </aside>
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
	<!-- <script src="js/pages/chartjs-int.js"></script> -->
	
	<!-- Crypto_Admin for demo purposes -->
  <script src="js/demo.js"></script>
  
  <!-- api reqests to coinmarketcap  -->
  <script src="js/api.js"></script>
	
</body>


</html>
