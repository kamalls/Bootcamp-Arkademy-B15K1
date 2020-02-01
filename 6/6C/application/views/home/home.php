<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= base_url();  ?>assets/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <link rel="stylesheet" href="<?= base_url();  ?>assets/font-awesome-4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="<?= base_url();  ?>assets/css/style.css">

    <title>web arkademy</title>
  </head>
  <body>

    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light shadow p-3 mb-5 fixed-top" style="margin-top: -20px;">
      <a class="navbar-brand" href="<?=base_url('home');  ?>" style="margin-top: -10px;">
        <img src="<?= base_url();  ?>assets/img/logo.png"  alt="">
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <input class="search" type="search" placeholder="Search ...">
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-warning text-white shadow p-2" data-toggle="modal" data-target="#tambahdata">ADD</button>
      </div>
    </nav>

    <div id="flash-data-tambahdata" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>
    <!-- Modal Add-->
    <div class="modal fade" id="tambahdata" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h3 class="modal-title" id="exampleModalLabel"><strong>ADD</strong></h3>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body pl-5 pr-5">
            <form action="<?= base_url(); ?>product/tambahproduk" method="post">

              <div class="form-group">
                <select class="form-control" name="cashier" placeholder="Cashier Name">
                  <option disabled selected value>-- Cashier Name --</option>
                  <?php foreach ($cashier as $c): ?>
                    <option value="<?= $c->id_cashier; ?>"><?= $c->name; ?></option>
                  <?php endforeach; ?>
                </select>
              </div>
              <div class="form-group">
                <select class="form-control" name="category" placeholder="Category">
                  <option disabled selected value>-- Category --</option>
                  <?php foreach ($category as $cat): ?>
                    <option value="<?= $cat->id_category; ?>"><?= $cat->name; ?></option>
                  <?php endforeach; ?>
                </select>
              </div>

              <div class="form-group">
                <input type="text" class="form-control" name="product" placeholder="Product Name">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="price" placeholder="Price">
              </div>
              <div class="modal-footer">
                <input type="submit" value="ADD" class="btn btn-warning text-white shadow p-2"></input>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>

    <!-- TABLE -->
    <div class="container">
    <table class="table shadow p-3 mb-5 rounded table table-borderless text-center" style="margin-top: 200px;">
      <thead class="thead text-white">
        <tr>
          <th scope="col">No</th>
          <th scope="col">Cashier</th>
          <th scope="col">Product</th>
          <th scope="col">Category</th>
          <th scope="col">Price</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        <?php 
          $count=0;
          foreach ($product as $p):
          $count++;
        ?>
        <tr>
          <th scope="row"><?= $count; ?></th>
          <td><?= $p->cashier; ?></td>
          <td><?= $p->product; ?></td>
          <td><?= $p->category; ?></td>
          <td>Rp. <?= number_format($p->price); ?></td>
          <td><a href="<?= base_url('product/edit/');  ?>" data-toggle="modal" data-target="#editdata" onclick="confirm_modal_editdata(
            '<?= $p->id_product; ?>'
            '<?= $p->id_cashier; ?>'
            '<?= $p->id_category; ?>'
            '<?= $p->product; ?>'
            '<?= $p->price; ?>'
          )" style="font-size: 22px; color: green"><i class="fa fa-edit"></i></a>
              <a href="<?= base_url('product/hapusproduk/'); ?><?= $p->id_product; ?>" class="tombol-hapuscashier" style="font-size: 23px; color: red"><i class="fa fa-trash"></i></a>
          </td>
        </tr>
      <?php endforeach; ?>
      </tbody>
    </table>
  </div>

    <!-- Modal EDIT-->
    <div class="modal fade" id="editdata" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h3 class="modal-title" id="exampleModalLabel"><strong>EDIT</strong></h3>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body pl-5 pr-5">
            <form action="<?= base_url();  ?>product/ubahproduk" method="post">

              <input hidden id="idprodukedit" name="idprodukedit">

              <div class="form-group">
                <select class="form-control" name="cashieredit" id="cashieredit" >
                  <option selected value>-- Cashier Name --</option>
                  <?php foreach ($cashier as $cashier): ?>
                    <option value="<?= $cashier->id_cashier; ?>"><?= $cashier->name; ?></option>
                  <?php endforeach; ?>
                </select>
              </div>

              <div class="form-group">
                <select class="form-control" name="categoryedit" id="categoryedit" placeholder="Category">
                  <option disabled selected value>-- Category --</option>
                  <?php foreach ($category as $category): ?>
                    <option value="<?= $category->id_category; ?>"><?= $category->name; ?></option>
                  <?php endforeach; ?>
                </select>
              </div>

              <div class="form-group">
                <input type="text" class="form-control" name="productedit" id="priceedit" placeholder="Product Name">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="priceedit" id="priceedit" placeholder="Price">
              </div>
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-warning text-white shadow p-2">EDIT</button>
          </div>
        </div>
      </div>
    </div>

    <script>
      function confirm_modal_editdata(idprodukedit, cashieredit, categoryedit, productedit, priceedit){
         $('#editdata').modal('show', {backdrop: 'static'});
         document.getElementById('idprodukedit').value = idprodukedit;
         document.getElementById('cashieredit').value = cashieredit;
         document.getElementById('categoryedit').value = categoryedit;
         document.getElementById('productedit').value = productedit;
         document.getElementById('priceedit').value = priceedit;
      }
    </script>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="<?= base_url();  ?>assets/js/sweetalert/sweetalert2.all.min.js"></script>
    <script src="<?= base_url();  ?>assets/js/bootstrap.min.js"></script>
    <script src="<?= base_url();  ?>assets/js/myscript.js"></script>
  </body>
</html>