<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Panel de control</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <?php if($is_admin == true): ?>

        <div class="row">
          <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-red">
              <div class="inner">
                <h3>+</h3>
<!-- <?php echo $total_stores ?> -->
                <p>New order</p>
              </div>
              <div class="icon">
                <ion-icon name="receipt-outline" style="color: white;font-size: 90%"></ion-icon>
                <!-- <i class="ion ion-android-home"></i> -->
              </div>
              <a href="<?php echo base_url('orders/create') ?>" class="small-box-footer" style="background-color: grey">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-light-blue-active">
              <div class="inner">
                <h3><?php echo $total_products ?></h3>

                <p>Total Products</p>
              </div>
              <div class="icon">
                <ion-icon size="small"></ion-icon>
                <ion-icon name="bag-check-outline" style="color: white; font-size: 90%"></ion-icon>
                <!-- <i class="ion ion-bag"></i> -->
              </div>
              <a href="<?php echo base_url('products/') ?>" class="small-box-footer" style="background-color: grey">Mas informacion <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-light-blue-active">
              <div class="inner">
                <h3><?php echo $total_paid_orders ?></h3>

                <p>Total Paid Orders</p>
              </div>
              <div class="icon">
                <ion-icon name="stats-chart-outline" style="color: white;font-size: 90%" ></ion-icon>
                <!-- <i class="ion ion-stats-bars"></i> -->
              </div>
              <a href="<?php echo base_url('orders/') ?>" class="small-box-footer" style="background-color: gray">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-light-blue-active">
              <div class="inner">
                <h3><?php echo $total_users; ?></h3>

                <p>Total Users</p>
              </div>
              <div class="icon">
                <ion-icon name="people-outline" style="color: white; font-size: 90%"></ion-icon >
                <!-- <i class="ion ion-android-people"></i> -->
              </div>
              <a href="<?php echo base_url('users/') ?>" class="small-box-footer" style="background-color: grey">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->

          <!-- ./col -->
        </div>
        <!-- /.row -->
      <?php endif; ?>


    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <script type="text/javascript">
    $(document).ready(function() {
      $("#dashboardMainMenu").addClass('active');
    });
  </script>
