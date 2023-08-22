<?php
    require 'function.php';
    require 'cek.php';

    $email = $_SESSION['email'];
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Dashboard - SB Admin</title>
        <link href="css/styles.css" rel="stylesheet" />
        <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <a class="navbar-brand" href="index.php">STOCK BARANG</a>
            <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <a class="nav-link" href="index.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Stock Barang
                            </a>
                            <a class="nav-link" href="masuk.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Barang Masuk
                            </a>
                            <a class="nav-link" href="keluar.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Barang Keluar
                            </a>
                            <a class="nav-link" href="admin.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Kelola Admin
                            </a>
                            <a  class="nav-link" href="logout.php">Logout
                            </a>
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        <h5><?=$email;?></h5>
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Stock Barang </h1>

                        </div>
                        <div class="card mb-4">
                            <div class="card-header">  
                                <!-- Button to Open the Modal -->
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                                    Tambah Barang
                                </button>
                                <a href="export.php"class="btn btn-info">Export Data </a>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">

                                <?php
                                    $ambildatastock = mysqli_query($conn, "SELECT* from stock where stock <1");

                                    while ($fetch=mysqli_fetch_array($ambildatastock)) {
                                        $barang = $fetch['nama_barang'];
                                    
                                ?>

                                <div class="alert alert-danger alert-dismissible fade show">
                                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                                    <strong>BARANG KOSONG!</strong> Stock <?=$barang?> sedang kosong!
                                </div>
                                <?php
                                    }
                                ?>


                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama Barang</th>
                                                <th>Date</th>
                                                <th>No. GRN</th>
                                                <th>Supplier Code</th>
                                                <th>Supplier Name</th>
                                                <th>Item Code</th>
                                                <th>Description</th>
                                                <th>UOM</th>
                                                <th>Stock Room</th>
                                                <th>Detail</th>
                                                <th>Stock</th>
                                                <th>Price</th>
                                                <th>Attended Price</th>
                                                <th>Ket</th>
                                                <th>Key Master</th>
                                                <th>Action</th>
                                                <th> </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                                <!-- Membuat tampilan data -->
                                                <?php
                                                    $ambilsemuadatastock = mysqli_query($conn,"SELECT * from stock");
                                                        $i = 1;
                                                    while ($data=mysqli_fetch_array($ambilsemuadatastock)) {
                                                        $idbarang = $data['idbarang'];
                                                        $nama_barang = $data['nama_barang'];
                                                        $Date = $data['Date'];
                                                        $no_grn = $data['no_grn'];
                                                        $supplier_code = $data['supplier_code'];
                                                        $supplier_name = $data['supplier_name'];
                                                        $item_code = $data['item_code'];
                                                        $description = $data['description'];
                                                        $UOM = $data['UOM'];
                                                        $stock_room = $data['stock_room'];
                                                        $detail = $data['detail'];
                                                        $stock = $data['stock'];
                                                        $price = $data['price'];
                                                        $attended_price = $data['attended_price'];
                                                        $ket = $data['ket'];
                                                        $key_master = $data['key_master'];
                                                       
                                                ?>
                                            <tr>
                                                <td><?=$i++;?></td>
                                                <td><?=$nama_barang;?></td>
                                                <td><?=$Date;?></td>
                                                <td><?=$no_grn;?></td>
                                                <td><?=$supplier_code;?></td>
                                                <td><?=$supplier_name;?></td>
                                                <td><?=$item_code;?></td>
                                                <td><?=$description;?></td>
                                                <td><?=$UOM;?></td>
                                                <td><?=$stock_room;?></td>
                                                <td><?=$detail;?></td>
                                                <td><?=$stock;?></td>
                                                <td><?=$price;?></td>
                                                <td><?=$attended_price;?></td>
                                                <td><?=$ket;?></td>
                                                <td><?=$key_master;?></td>
                                                <td>
                                                    <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#edit<?=$idb;?>">Edit</button>
                                                    <input type="hidden" name="idbarangnyamaudihapus" value="<?=$idb?>">
                                                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete<?=$idb;?>">Delete</button>
                                                </td>
                                            </tr>
                                                    <!-- The Modal EDIT-->
                                                    <div class="modal fade" id="edit<?=$idbarang;?>">
                                                        <div class="modal-dialog">
                                                        <div class="modal-content">
                                                        
                                                            <!-- Modal Header -->
                                                            <div class="modal-header">
                                                        <h4 class="modal-title" > Edit </h4>
                                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                        </div>
                                                        
                                                        <!-- Modal body -->
                                                        <input type="text" name="nama_barang" value="<?=$nama_barang;?>" class="form-control" required>
                                                        <br>
                                                        <input type="text" name="no_grn" value="<?=$no_grn;?>" class="form-control" required>
                                                        <br>
                                                        <input type="text" name="supplier_code" value="<?=$supplier_code;?>" class="form-control" required>
                                                        <br>
                                                        <input type="text" name="supplier_name" value="<?=$supplier_name;?>" class="form-control" required>
                                                        <br>
                                                        <input type="text" name="item_code" value="<?=$item_code;?>" class="form-control" required>
                                                        <br>
                                                        <input type="text" name="description" value="<?=$description;?>" class="form-control" required>
                                                        <br>
                                                        <input type="text" name="uom" value="<?=$uom;?>" class="form-control" required>
                                                        <br>
                                                        <input type="text" name="stock_room" value="<?=$stock_room;?>" class="form-control" required>
                                                        <br>
                                                        <input type="text" name="detail" value="<?=$detail;?>" class="form-control" required>
                                                        <br>
                                                        <input type="number" name="qty" value="<?=$qty;?>" class="form-control" required>
                                                        <br>
                                                        <input type="number" name="price" value="<?=$price;?>" class="form-control" required>
                                                        <br>
                                                        <input type="number" name="attended_price" value="<?=$attended_price;?>" class="form-control" required>
                                                        <br>
                                                        <input type="text" name="ket" value="<?=$ket;?>" class="form-control" required>
                                                        <br>
                                                        <input type="text" name="key_master" value="<?=$key_master;?>" class="form-control" required>
                                                        <br>


                                                        <form method="post">
                                                        <div class="modal-body">
                                                        <input type="text" name="nama_barang" value="<?=$nama_barang;?>" class="form-control" required>
                                                        <br>
                                                        <input type="text" name="no_grn" value="<?=$no_grn;?>" class="form-control" required>
                                                        <br>
                                                        <input type="text" name="supplier_code" value="<?=$supplier_code;?>" class="form-control" required>
                                                        <br>
                                                        <input type="text" name="supplier_name" value="<?=$supplier_name;?>" class="form-control" required>
                                                        <br>
                                                        <input type="text" name="item_code" value="<?=$item_code;?>" class="form-control" required>
                                                        <br>
                                                        <input type="text" name="description" value="<?=$description;?>" class="form-control" required>
                                                        <br>
                                                        <input type="text" name="uom" value="<?=$uom;?>" class="form-control" required>
                                                        <br>
                                                        <input type="text" name="stock_room" value="<?=$stock_room;?>" class="form-control" required>
                                                        <br>
                                                        <input type="text" name="detail" value="<?=$detail;?>" class="form-control" required>
                                                        <br>
                                                        <input type="number" name="qty" value="<?=$qty;?>" class="form-control" required>
                                                        <br>
                                                        <input type="number" name="price" value="<?=$price;?>" class="form-control" required>
                                                        <br>
                                                        <input type="number" name="attended_price" value="<?=$attended_price;?>" class="form-control" required>
                                                        <br>
                                                        <input type="text" name="ket" value="<?=$ket;?>" class="form-control" required>
                                                        <br>
                                                        <input type="text" name="key_master" value="<?=$key_master;?>" class="form-control" required>
                                                        <br>
                                                        <input type="hidden" name="idb" value="<?=$idb;?>">
                                                        <button type="submit" class="btn btn-primary" name="updatebarang">Update</button>
                                                        </div>
                                                        </form>
                                                            
                                                        </div>
                                                        </div>
                                                    </div>


                                                    <!-- The Modal DELETE-->
                                                        <div class="modal fade" id="delete<?=$idbarang;?>">
                                                        <div class="modal-dialog">
                                                        <div class="modal-content">
                                                        
                                                            <!-- Modal Header -->
                                                            <div class="modal-header">
                                                        <h4 class="modal-title">HAPUS BARANG</h4>
                                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                        </div>
                                                        
                                                        <!-- Modal body -->
                                                        <form method="post">
                                                        <div class="modal-body">
                                                        Apakah anda akan menghapus <?=$namabarang;?>?
                                                        <input type="hidden" name="idbarang" value="<?=$idbarang;?>">
                                                        <br><br>
                                                        <button type="submit" class="btn btn-danger" name="hapusbarang">Hapus</button>
                                                        </div>
                                                        </form>
                                                            
                                                        </div>
                                                        </div>
                                                    </div>

                                            <?php
                                                 };   
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
                <!-- <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2020</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer> -->
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/datatables-demo.js"></script>
    </body>

            <!-- The Modal -->
            <div class="modal fade" id="myModal">
                <div class="modal-dialog">
                <div class="modal-content">
                
                    <!-- Modal Header -->
                    <div class="modal-header">
                <h4 class="modal-title">Tambah Barang</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                
                <!-- Modal body -->
                <form method="post">
                <div class="modal-body">
                    <input type="text" name="nama_barang" placeholder="Nama Barang" class="form-control" required>
                    <br>
                    <input type="text" name="no_grn" placeholder="No. GRN" class="form-control" required>
                    <br>
                    <input type="text" name="supplier_code" placeholder="Supplier Code" class="form-control" required>
                    <br>
                    <input type="text" name="supplier_name" placeholder="Supplier Name" class="form-control" required>
                    <br>
                    <input type="text" name="item_code" placeholder="Item Code" class="form-control" required>
                    <br>
                    <input type="text" name="description" placeholder="Description" class="form-control" required>
                    <br>
                    <input type="text" name="uom" placeholder="UOM" class="form-control" required>
                    <br>
                    <input type="text" name="stock_room" placeholder="Stock Room" class="form-control" required>
                    <br>
                    <input type="text" name="detail" placeholder="Detail" class="form-control" required>
                    <br>
                    <input type="number" name="qty" placeholder="Quantity" class="form-control" required>
                    <br>
                    <input type="number" name="price" placeholder="Price" class="form-control" required>
                    <br>
                    <input type="number" name="attended_price" placeholder="Attended Price" class="form-control" required>
                    <br>
                    <input type="text" name="ket" placeholder="Keterangan" class="form-control" required>
                    <br>
                    <input type="text" name="key_master" placeholder="Key Master" class="form-control" required>
                    <br>
                    <button type="submit" class="btn btn-primary" name="addnewitem">Tambah</button>
                </div>
                </form>
                    
                </div>
                </div>
            </div>

</html>
