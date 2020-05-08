<?php
//require "./ui_Elements/finance/wallet/walletContent/content_tabs.php";

function generatePlaceHolder(){
    return <<<htmlPage
<body>


<!-- Nav tabs -->
<ul class="nav nav-tabs md-tabs nav-justified elegant-color-dark" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" data-toggle="tab" href="#isk" role="tab">
      <i class="fas fa-user pr-2"></i>Isk</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="#plex" role="tab">
      <i class="fas fa-heart pr-2"></i>Plex</a>
  </li>
    <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="#points" role="tab">
      <i class="fas fa-heart pr-2"></i>Loyalty Points</a>
  </li>
</ul>
<!-- Nav tabs -->

<!-- Tab panels -->
<div class="tab-content">

  <!-- Panel 1 -->
  <div class="tab-pane fade in show active" id="isk" role="tabpanel">
    <!-- Nav tabs -->
    <div class="row">
      <div class="col-md-3">
        <ul class="nav md-pills pills-primary flex-column" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" data-toggle="tab" href="#overview" role="tab">Overview </a>
                
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#transactions" role="tab">Transactions
              <i class="fas fa-file-alt ml-2"></i>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#market" role="tab">Market Transactions
              <i class="fas fa-address-card ml-2"></i>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#shares" role="tab">My Shares
              <i class="fas fa-address-card ml-2"></i>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#autoPay" role="tab">Automatic Pay
              <i class="fas fa-address-card ml-2"></i>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#giveIsk" role="tab">Give Isk
              <i class="fas fa-address-card ml-2"></i>
            </a>
          </li>
        </ul>
      </div>
      
      <div class="col-md-9">
        <!-- Tab panels -->
        <div class="tab-content vertical">
          <!-- Panel 1 -->
          <div class="tab-pane fade in show active" id="overview" role="tabpanel">
            <h5 class="my-2 h5">Overview</h5>
            <br>
            <canvas id="pieChart"></canvas>
            
          </div>
          <!-- Panel 1 -->
          <!-- Panel 2 -->
          <div class="tab-pane fade" id="transactions" role="tabpanel">
            <h5 class="my-2 h5">Panel 2<br>
            transactions
            </h5>
          </div>
          <!-- Panel 2 -->
          <!-- Panel 3 -->
          <div class="tab-pane fade" id="market" role="tabpanel">
            <h5 class="my-2 h5">Panel 3<br>
            Line Graph
            </h5>
          </div>
          <div class="tab-pane fade" id="shares" role="tabpanel">
            <h5 class="my-2 h5">Panel 4 <br>
            Shares
            </h5>
          </div>
          <div class="tab-pane fade" id="autoPay" role="tabpanel">
            <h5 class="my-2 h5">Panel 4 <br>
            Shares
            </h5>
          </div>
          <div class="tab-pane fade" id="giveIsk" role="tabpanel">
            <h5 class="my-2 h5">Panel 4 <br>
            give isk
            </h5>
          </div>
          <!-- Panel 3 -->
        </div>
      </div>
    </div>
    <!-- Nav tabs -->

  </div>
  <!-- Panel 1 -->
  
  
    <!-- Panel 2 -->
  <div class="tab-pane fade in show" id="plex" role="tabpanel">
    <!-- Nav tabs -->
    <div class="row">
      <div class="col-md-3">
        <ul class="nav md-pills pills-primary flex-column" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" data-toggle="tab" href="#panel21" role="tab">Downloads
              <i class="fas fa-download ml-2"></i>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#panel22" role="tab">Orders & invoices
              <i class="fas fa-file-alt ml-2"></i>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#panel23" role="tab">Billing details
              <i class="fas fa-address-card ml-2"></i>
            </a>
          </li>
        </ul>
      </div>
      <div class="col-md-9">
        <!-- Tab panels -->
        <div class="tab-content vertical">
          <!-- Panel 1 -->
          <div class="tab-pane fade in show active" id="panel21" role="tabpanel">
            <h5 class="my-2 h5">Panel 1</h5>
          </div>
          <!-- Panel 1 -->
          <!-- Panel 2 -->
          <div class="tab-pane fade" id="panel22" role="tabpanel">
            <h5 class="my-2 h5">Panel 2</h5>
          </div>
          <!-- Panel 2 -->
          <!-- Panel 3 -->
          <div class="tab-pane fade" id="panel23" role="tabpanel">
            <h5 class="my-2 h5">Panel 3</h5>
          </div>
          <!-- Panel 3 -->
        </div>
      </div>
    </div>
    <!-- Nav tabs -->

  </div>
  <!-- Panel 2 -->
  
    <!-- Panel 3 -->
  <div class="tab-pane fade in show" id="points" role="tabpanel">
    <!-- Nav tabs -->
    <div class="row">
      <div class="col-md-3">
        <ul class="nav md-pills pills-primary flex-column" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" data-toggle="tab" href="#panel21" role="tab">Downloads
              <i class="fas fa-download ml-2"></i>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#panel22" role="tab">Orders & invoices
              <i class="fas fa-file-alt ml-2"></i>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#panel23" role="tab">Billing details
              <i class="fas fa-address-card ml-2"></i>
            </a>
          </li>
        </ul>
      </div>
      <div class="col-md-9">
        <!-- Tab panels -->
        <div class="tab-content vertical">
          <!-- Panel 1 -->
          <div class="tab-pane fade in show active" id="panel21" role="tabpanel">
            <h5 class="my-2 h5">Panel 1</h5>
          </div>
          <!-- Panel 1 -->
          <!-- Panel 2 -->
          <div class="tab-pane fade" id="panel22" role="tabpanel">
            <h5 class="my-2 h5">Panel 2</h5>
          </div>
          <!-- Panel 2 -->
          <!-- Panel 3 -->
          <div class="tab-pane fade" id="panel23" role="tabpanel">
            <h5 class="my-2 h5">Panel 3</h5>
          </div>
          <!-- Panel 3 -->
        </div>
      </div>
    </div>
    <!-- Nav tabs -->

  </div>
  <!-- Panel 3 -->

  

</div>
<!-- Tab panels -->



</div>

<script>

//pie
var ctxP = document.getElementById("pieChart").getContext('2d');
var myPieChart = new Chart(ctxP, {
type: 'pie',
data: {
labels: ["Red", "Green", "Yellow", "Grey", "Dark Grey"],
datasets: [{
data: [300, 50, 100, 40, 120],
backgroundColor: ["#F7464A", "#46BFBD", "#FDB45C", "#949FB1", "#4D5360"],
hoverBackgroundColor: ["#FF5A5E", "#5AD3D1", "#FFC870", "#A8B3C5", "#616774"]
}]
},
options: {
responsive: true
}
});

</script>
</body>

htmlPage;
}