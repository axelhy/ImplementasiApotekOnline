<?php
defined('BASEPATH') OR exit('No direct script access allowed');
include ('v_navbar_admin.php');
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Halaman Manager</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    
    
     <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.js"></script>
    
    <style type="text/css">
    body{
    background-image: url("<?php echo base_url() ?>image/background.jpg");
    background-size: cover;
    font-size: 12pt;
}
</style>
</head>
<body>
  <?php if ($this->session->flashdata('alert')=='sukses_hapus'){
    echo "<script>alert('SUCCESS HAPUS')</script>";
}

if ($this->session->flashdata('alert')=='sukses_upload'){
    echo "<script>alert('SUCCESS MENAMBAHKAN')</script>";
}?>
  <div class="container" style="width: 100%;font-size: 12pt;background-color: rgb(247, 247, 247, 0.5)">
        <div class="row" style="">         
            <div class="col-md-2" style="background-color: white;margin-left: 5%;margin-top: 1%">
               <center>  <p style="padding-top: 5%">LIHAT DATA (ADMIN )</p></center>
            </div>
        </div>
        <br>

      <div class="container" style="background-color: white; width: 100%;font-size: 12pt; margin-right: 5%; box-shadow: 5px 5px 10px">
  

        <ul class="nav nav-tabs">
          <li><a data-toggle="tab" href="#menu1">DATA TRANSAKSI</a></li>
          <li><a data-toggle="tab" href="#menu2">DATA PEMASOK</a></li>
          <li><a data-toggle="tab" href="#menu3">DATA OBAT</a></li>
          <li><a data-toggle="tab" href="#menu4">DATA PEMASOKAN</a></li>

        </ul>
        <div class="tab-content">
          <div id="menu1" class="tab-pane fade">
            <table id="tabel1" class="table table-bordered">
              <thead>
                <tr>
                    <th>No</th>
                    <th>ID TRANSAKSI</th>
                    <th>NAMA KONSUMEN</th>
                    <th>TANGGAL TRANSAKSI</th>
                    <th>STATUS PESANAN</th>
                    <th>OBAT</th>
                    <th>JUMLAH OBAT</th>
                    <th>TOTAL HARGA</th>
                    <th>ACTION</th>
                </tr>
              </thead>
              <tbody>
                <?php
            $no=1;
            foreach ($transaksi as $t){ ?>
      <tr>
        <td><?php echo $no++;?></td>
        <td><?php echo $t['idTransaksi'];?></td>
        <td><?php echo $t['idKonsumen'];?></td>
        <td><?php echo $t['tglTransaksi'];?></td>
        <td><?php echo $t['statusPesanan'];?></td>
        <td><?php echo $t['idObat'];?></td>
        <td></td>
        <td><?php echo $t['totalBiaya'];?></td>
         <td><button value="Hapus" class="btn btn-lg btn-danger" data-toggle="modal" data-target="#hapus<?php echo $t['idTransaksi'];?>">Hapus</button> 
          <button value="Edit"  class="btn btn-lg btn-success" data-toggle="modal" data-target="#edit<?php echo $t['idTransaksi'];?>">Edit</button> 
                        </td>
      </tr>
      <div id="hapus<?php echo $t['idTransaksi']?>" class="modal fade" role="dialog">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header" >
                                             <h4 class="modal-title">Anda Ingin Menghapus?</h4>
                                                  <?php echo  form_open("c_admin/del_transaksi")?>
                                                  <input type="hidden" name="idtransaksi" class="form-control" value="<?php echo $t['idTransaksi']?>" id="idpemasok" required>
                                        </div>
                                         <div class="modal-footer" >
                                             <input type="button" data-dismiss="modal" class="btn btn-danger" value="Tidak">
                                             <input type="submit" class="btn btn-primary" name="hapus" value="Hapus">
                                         </div>
                                              <?php echo  form_close()?>
                                          </div>
                                      </div>
                                  </div>
<!-- ==================== -->
<div id="edit<?php echo $t['idTransaksi']?>" class="modal fade" role="dialog">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header" >
                                             <h4 class="modal-title">Anda Ingin Menghapus?</h4>
                                                  
                                        </div>
                                        
                                        <?php echo  form_open("c_admin/edit_transaksi/")?>
                                                
                                        <div class="row" >
                                          <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 col-xl-3">ID Transaksi :</div>
                                          <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-6"><input type="text" name="idtransaksi" class="form-control" value="<?php echo $t['idTransaksi']?>" ></div>          
                                                    
                                            </div>
                                            <div class="row" >
                                          <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 col-xl-3">Nama Konsumen :</div>
                                          <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-6"><input type="text" name="namakonsumen" class="form-control" value="<?php echo $t['idKonsumen']?>" ></div>          
                                                    
                                            </div>
                                            <div class="row" >
                                          <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 col-xl-3">Tanggal Transaksi :</div>
                                          <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-6"><input type="text" name="tanggal" class="form-control" value="<?php echo $t['tglTransaksi']?>" ></div>          
                                                    
                                            </div>
                                            <div class="row" >
                                          <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 col-xl-3">Status Pesanan :</div>
                                          <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-6"><input type="text" name="sp" class="form-control" value="<?php echo $t['statusPesanan']?>" ></div>          
                                                    
                                            </div>
                                            <div class="row" >
                                          <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 col-xl-3">Status Pembayaran  :</div>
                                          <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-6"><input type="text" name="spembayaran" class="form-control" value="<?php echo $t['statusPembayaran']?>" ></div>          
                                                    
                                            </div>
                                            <div class="row" >
                                          <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 col-xl-3">OBAT :</div>
                                          <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-6"><input type="text" name="obat" class="form-control" value="<?php echo $t['idObat']?>" ></div>          
                                                    
                                            </div>
                                            <div class="row" >
                                          <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 col-xl-3">total :</div>
                                          <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-6"><input type="text" name="total" class="form-control" value="<?php echo $t['totalBiaya']?>" ></div>          
                                                    
                                            </div>
                                         <div class="modal-footer" >
                                             <input type="button" data-dismiss="modal" class="btn btn-danger" value="Tidak">
                                             <input type="submit" class="btn btn-primary" name="hapus" value="Edit">
                                         </div>
                                              <?php echo  form_close()?>
                                          </div>
                                      </div>
                                  </div>
<!-- ============= -->
                      <?php } ?>
              </tbody>
            </table>
          </div>
          
          <div id="menu2" class="tab-pane fade">
            <table id="tabel2" class="table table-bordered">
              <thead>
                <tr>
                    <th>No</th>
                    <th>NAMA PEMASOK</th>
                    <th>ALAMAT</th>
                    <th>KONTAK</th>
                    <th>ACTION</th>
                </tr>
              </thead>
              <tbody>
                <?php
            $no=1;
            foreach ($sup as $s){ ?>
      <tr>
        <td><?php echo $no++;?></td>
        <td><?php echo $s['idSupplier'];?></td>
        <td><?php echo $s['namSupplier'];?></td>
        <td></td>
         <td><button value="Hapus" class="btn btn-lg btn-danger" data-toggle="modal" data-target="#hapus<?php echo $s['idSupplier'];?>">Hapus</button>
          <button value="Edit"  class="btn btn-lg btn-success" data-toggle="modal" data-target="#edit<?php echo $s['idSupplier'];?>">Edit</button>
                        </td>
              <!--                    echo kan php dari foreach di atas dengan objek nim ke dalam data-target yang ada di button -->
                      </tr>


                           <div id="hapus<?php echo $s['idSupplier']?>" class="modal fade" role="dialog">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header" >
                                             <h4 class="modal-title">Anda Ingin Menghapus?</h4>
                                                  <?php echo  form_open("c_admin/del_pemasok")?>
                                                  <input type="hidden" name="idpemasok" class="form-control" value="<?php echo $s['idSupplier']?>" id="idpemasok" required>
                                        </div>
                                         <div class="modal-footer" >
                                             <input type="button" data-dismiss="modal" class="btn btn-danger" value="Tidak">
                                             <input type="submit" class="btn btn-primary" name="hapus" value="Hapus">
                                         </div>
                                              <?php echo  form_close()?>
                                          </div>
                                      </div>
                                  </div>

                                  <!-- ================ -->
<div id="edit<?php echo $s['idSupplier']?>" class="modal fade" role="dialog">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header" >
                                             <h4 class="modal-title">Anda Ingin MengEdit?</h4>
                                                  
                                        </div>
                                        
                                        <?php echo  form_open("c_admin/edit_Suplier/")?>
                                                
                                        <div class="row" >
                                          <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 col-xl-3">ID Transaksi :</div>
                                          <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-6"><input type="text" name="idtransaksi" class="form-control" value="<?php echo $s['idSupplier']?>" ></div>          
                                                    
                                            </div>
                                            <div class="row" >
                                          <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 col-xl-3">Nama Konsumen :</div>
                                          <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-6"><input type="text" name="namakonsumen" class="form-control" value="<?php echo $s['idSupplier']?>" ></div>          
                                                    
                                            </div>
                                            <div class="row" >
                                          <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 col-xl-3">Tanggal Transaksi :</div>
                                          <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-6"><input type="text" name="tanggal" class="form-control" value="<?php echo $s['idSupplier']?>" ></div>          
                                                    
                                            </div>
                                            <div class="row" >
                                          <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 col-xl-3">Status Pesanan :</div>
                                          <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-6"><input type="text" name="sp" class="form-control" value="<?php echo $s['idSupplier']?>" ></div>          
                                                    
                                            </div>
                                            
                                         <div class="modal-footer" >
                                             <input type="button" data-dismiss="modal" class="btn btn-danger" value="Tidak">
                                             <input type="submit" class="btn btn-primary" name="hapus" value="Edit">
                                         </div>
                                              <?php echo  form_close()?>
                                          </div>
                                      </div>
                                  </div>
                                  <!-- ======== -->

        <?php }?></td>
      </tr>
              </tbody>
            </table>
            <br>  
            <div id="contact"  class="row" style="padding-bottom: 2%;">
              <div class="col-md-10"></div>
              <div class="col-md-2">
              <button type="button" class="btn btn-info btn" data-toggle="modal" data-target="#contact-modallvideo" style="font-size: 12pt">NEW PEMASOK</button>
              </div>
            </div>
      <div id="contact-modallvideo" class="modal fade" role="dialog" style="height: 5000px">
                <div class="modal-dialog" style="height: auto">
                    <div class="modal-content" style="height: auto">
                        <div class="modal-header">
                            <h3>INPUT PEMASOK</h3>
                            <a class="close" data-dismiss="modal">×</a>

                        </div>
                        <?php echo form_open_multipart('formc_addpemasok/add');?>
                        <form  id="contactForm" name="contact" role="form" style="height: 500px;width: 100%">

                            <?php  $this->load->view('form_addpemasok');?>

                        </form>
                        <?php echo form_close(); ?>
                    </div>
                </div>
            </div>
          </div>
          
          <div id="menu3" class="tab-pane fade">
            <table id="tabel3" class="table table-bordered">
              <thead>
                <tr>
                    <th>No</th>
                    <th>KODE OBAT</th>
                    <th>NAMA OBAT</th>
                    <th>HARGA</th>
                    <th>JUMLAH STOK OBAT</th>
                    <th>ACTION</th>
                </tr>
              </thead>
              <tbody>
                <?php
            $no=1;
            foreach ($obat as $dataobat){ ?>
      <tr>
        <td><?php echo $no++;?></td>
        <td><?php echo $dataobat['idObat'];?></td>
        <td><?php echo $dataobat['namaObat'];?></td>
        <td><?php echo $dataobat['harga'];?></td>
        <td><?php echo $dataobat['stock'];?></td>
        <td><button value="Hapus" class="btn btn-lg btn-danger" data-toggle="modal" data-target="#hapus<?php echo $dataobat['idObat'];?>">Hapus</button>
          <button value="Edit"  class="btn btn-lg btn-success" data-toggle="modal" data-target="#edit<?php echo $dataobat['idObat'];?>">Edit</button>
                        </td>
              <!--                    echo kan php dari foreach di atas dengan objek nim ke dalam data-target yang ada di button -->
                      </tr>


                           <div id="hapus<?php echo $dataobat['idObat']?>" class="modal fade" role="dialog">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header" >
                                             <h4 class="modal-title">Anda Ingin Menghapus?</h4>
                                                  <?php echo  form_open("c_admin/del_obat")?>
                                                  <input type="hidden" name="idobat" class="form-control" value="<?php echo $dataobat['idObat']?>" id="idobat" required>
                                        </div>
                                         <div class="modal-footer" >
                                             <input type="button" data-dismiss="modal" class="btn btn-danger" value="Tidak">
                                             <input type="submit" class="btn btn-primary" name="hapus" value="Hapus">
                                         </div>
                                              <?php echo  form_close()?>
                                          </div>
                                      </div>
                                  </div>


                                  <!-- =========== -->
                                  <div id="edit<?php echo $dataobat['idObat'];?>" class="modal fade" role="dialog">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header" >
                                             <h4 class="modal-title">Anda Ingin MengEdit?</h4>
                                                  
                                        </div>
                                        
                                        <?php echo  form_open("c_admin/edit_Obat/")?>
                                                
                                        <div class="row" >
                                          <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 col-xl-3">ID Transaksi :</div>
                                          <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-6"><input type="text" name="idtransaksi" class="form-control" value="<?php echo $dataobat['idObat'];?>" ></div>          
                                                    
                                            </div>
                                            <div class="row" >
                                          <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 col-xl-3">Nama Konsumen :</div>
                                          <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-6"><input type="text" name="namakonsumen" class="form-control" value="<?php echo $dataobat['idObat'];?>" ></div>          
                                                    
                                            </div>
                                            <div class="row" >
                                          <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 col-xl-3">Tanggal Transaksi :</div>
                                          <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-6"><input type="text" name="tanggal" class="form-control" value="<?php echo $dataobat['idObat'];?>" ></div>          
                                                    
                                            </div>
                                            <div class="row" >
                                          <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 col-xl-3">Status Pesanan :</div>
                                          <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-6"><input type="text" name="sp" class="form-control" value="<?php echo $dataobat['idObat'];?>" ></div>          
                                                    
                                            </div>
                                            
                                         <div class="modal-footer" >
                                             <input type="button" data-dismiss="modal" class="btn btn-danger" value="Tidak">
                                             <input type="submit" class="btn btn-primary" name="hapus" value="Edit">
                                         </div>
                                              <?php echo  form_close()?>
                                          </div>
                                      </div>
                                  </div>
                                  <!-- ============ -->
            <?php }?></td>

      </tr>
              </tbody>
            </table>
            <br>
  <div id="contact"  class="row">
    <div class="col-md-10"></div>

    <div class="col-md-2">
    <button type="button" class="btn btn-info btn" data-toggle="modal" data-target="#obat" style="font-size: 12pt">NEW OBAT</button>
    </div>
  </div>
  <br>
  <br>
        <div id="obat" class="modal fade" role="dialog" style="height: 5000px">
            <div class="modal-dialog" style="height: auto">
                <div class="modal-content" style="height: auto">
                    <div class="modal-header">
                        <h3>INPUT OBAT</h3>
                        <a class="close" data-dismiss="modal">×</a>

                    </div>
                    <?php echo form_open_multipart('formc_tambah_obat/upload');?>
                    <form  id="contactForm" name="contact" role="form" style="height: 500px;width: 100%">

                        <?php  $this->load->view('form_tambah_obat');?>

                    </form>
                    <?php echo form_close(); ?>
                </div>
            </div>
        </div>
    
            <br>
      
        </div>
          

          <div id="menu4" class="tab-pane fade">
            <table id="tabel4" class="table table-bordered">
              <thead>
                <tr>
                    <th>No</th>
                    <th>ID PEMASOKAN</th>
                    <th>ID OBAT</th>
                    <th>ID SUPPLIER</th>
                    <th>TANGGAL PEMASOKAN</th>
                    <th>JUMLAH PEMASOKAN</th>
                    <th>ACTION</th>
                </tr>
              </thead>
              <tbody>
                <?php
            $no=1;
            foreach ($pemasokan as $p){ ?>
      <tr>
        <td><?php echo $no++;?></td>
        <td><?php echo $p['idPemasokan'];?></td>
        <td><?php echo $p['idObat'];?></td>
        <td><?php echo $p['idSupplier'];?></td>
        <td><?php echo $p['tglPemasokan'];?></td>
        <td><?php echo $p['jumlahPemasokan'];?></td>
        <td><button value="Hapus" class="btn btn-lg btn-danger" data-toggle="modal" data-target="#hapus<?php echo $p['idPemasokan'];?>">Hapus</button>
          <button value="Edit"  class="btn btn-lg btn-success" data-toggle="modal" data-target="#edit<?php echo $p['idPemasokan'];?>">Edit</button>
                        </td>
              <!--                    echo kan php dari foreach di atas dengan objek nim ke dalam data-target yang ada di button -->
                      </tr>


                           <div id="hapus<?php echo $p['idPemasokan']?>" class="modal fade" role="dialog">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header" >
                                             <h4 class="modal-title">Anda Ingin Menghapus?</h4>
                                                  <?php echo  form_open("c_admin/del_pemasokan")?>
                                                  <input type="hidden" name="idpemasokan" class="form-control" value="<?php echo $p['idPemasokan']?>" id="idobat" required>
                                        </div>
                                         <div class="modal-footer" >
                                             <input type="button" data-dismiss="modal" class="btn btn-danger" value="Tidak">
                                             <input type="submit" class="btn btn-primary" name="hapus" value="Hapus">
                                         </div>
                                              <?php echo  form_close()?>
                                          </div>
                                      </div>
                                  </div>



                                  <!-- =========== -->
<div id="edit<?php echo $p['idPemasokan']?>" class="modal fade" role="dialog">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header" >
                                             <h4 class="modal-title">Anda Ingin MengEdit?</h4>
                                                  
                                        </div>
                                        
                                        <?php echo  form_open("c_admin/edit_Obat/")?>
                                                
                                        <div class="row" >
                                          <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 col-xl-3">ID Transaksi :</div>
                                          <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-6"><input type="text" name="idtransaksi" class="form-control" value="<?php echo $p['idPemasokan']?>" ></div>          
                                                    
                                            </div>
                                            <div class="row" >
                                          <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 col-xl-3">Nama Konsumen :</div>
                                          <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-6"><input type="text" name="namakonsumen" class="form-control" value="<?php echo $p['idPemasokan']?>" ></div>          
                                                    
                                            </div>
                                            <div class="row" >
                                          <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 col-xl-3">Tanggal Transaksi :</div>
                                          <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-6"><input type="text" name="tanggal" class="form-control" value="<?php echo $p['idPemasokan']?>" ></div>          
                                                    
                                            </div>
                                            <div class="row" >
                                          <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 col-xl-3">Status Pesanan :</div>
                                          <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-6"><input type="text" name="sp" class="form-control" value="<?php echo $p['idPemasokan']?>" ></div>          
                                                    
                                            </div>
                                            
                                         <div class="modal-footer" >
                                             <input type="button" data-dismiss="modal" class="btn btn-danger" value="Tidak">
                                             <input type="submit" class="btn btn-primary" name="hapus" value="Edit">
                                         </div>
                                              <?php echo  form_close()?>
                                          </div>
                                      </div>
                                  </div>
                                  <!-- =========== -->
            <?php }?></td>

      </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  <script>
       $(document).ready(function(){
        // body...
        $('#tabel1').DataTable();
        $('#tabel2').DataTable();
        $('#tabel3').DataTable();
        $('#tabel4').DataTable();
        
       });
        
    </script>
</body>
</html>