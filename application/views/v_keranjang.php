<?php
defined('BASEPATH') OR exit('No direct script access allowed');
include ('v_navbar.php');
?>
<html>
<head>
    <title>Keranjang</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="styleLogin.css">

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>

    

	<style type="text/css">
    	body{
    			background-image: url("<?php echo base_url() ?>image/background.jpg");
    			background-size: cover;
			}
		
	</style>

</head>

<body>
	<div class="container" style="width: 100%;background-color: rgb(247, 247, 247, 0.5); padding-bottom: 2%;">
        <div class="row" style="">         
            <div class="col-md-2" style="background-color: white;margin-left: 2%;margin-top: 1%">
               <center>  <p style="padding-top: 5%">Keranjang</p></center>
            </div>

        </div>
        <br>

        <div class="row" style="height:  100%; margin-left: 0.5%;margin-right: 0.5%; background-color: white;padding-bottom: 2%;padding-top: 2%; padding-bottom: 2%;" >
        	<div class="row" style="width: 100%; padding-bottom: 2%;height: 100%">
        			
            		<div class="col-md-1"></div>
            		<div class="col-md-8">
            			
                           
            				<p>Pilih Semua Item</p>
                            </div>
                            <div class="col-md-3">
                            <button value="Hapus" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#hapus">Hapus</button>
                            </div>
                       
                    
              <!--                    echo kan php dari foreach di atas dengan objek nim ke dalam data-target yang ada di button -->
                      


                           <div id="hapus" class="modal fade" role="dialog">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header" >
                                             <h4 class="modal-title">Anda Ingin Menghapus?</h4>
                                                  <?php echo  form_open("welcome/delall")?>
                                                  
                                        </div>
                                         <div class="modal-footer" >
                                             <input type="button" data-dismiss="modal" class="btn btn-danger" value="Tidak">
                                             <input type="submit" class="btn btn-primary" name="hapus" value="Hapus">
                                         </div>
                                              <?php echo  form_close()?>
                                          </div>
                                      </div>
                                  </div>

            			
            			
            			
            		</div>
            
            <?php $total=0; ?>

        	<?php foreach ($keranjang as $list) { ?>
            <?php foreach ($obat as $listo) { ?>    
                <?php if ($listo['idObat']==$list['obat']){ ?>
                    
                
             
            
            <div class="col-md-5" style="margin-left: 6%; box-shadow: 1px 1px 10px;padding-bottom: 2%;margin-top: 5%">
            	
            	<div class="row" style="padding-top: 5%;">
            		<div class="col-md-1"></div>
        			<div class="col-md-1" style="padding-left: 1%; padding: 0.5%;">
        				

        			</div>
            		
            		<div class="col-md-9" style=" height: 80%; ">
            			<div class="row" style="padding-top: 1%; padding-bottom: 1%; padding-top: 1%;">
            				<div class="col-md-5" style="">
            					<img src="<?php echo base_url() ?>DATAIMAGE/<?php echo $listo["foto"] ?>" style="width: 90%;margin-bottom: 20%">
            				</div>
            			
            				<div class="col-md-6" style="">
                                <div class="row">
                            <div class="col-md-8" style="">

            					<p>
            						<?php echo $listo["namaObat"] ?>
            					</p>
                                    </div>
                            <div class="col-md-4" style="">

                                <button value="Hapus" style="" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#hapus<?php echo $listo['idObat'];?>">Hapus</button>
                        
              <!--                    echo kan php dari foreach di atas dengan objek nim ke dalam data-target yang ada di button -->
                      


                           <div id="hapus<?php echo $listo['idObat'];?>" class="modal fade" role="dialog">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header" >
                                             <h4 class="modal-title">Anda Ingin Menghapus?</h4>
                                                  <?php echo  form_open("welcome/del_keranjang")?>
                                                  <input type="hidden" name="idobat" class="form-control" value="<?php echo $listo['idObat'];?>" id="idpemasok" required>
                                        </div>
                                         <div class="modal-footer" >
                                             <input type="button" data-dismiss="modal" class="btn btn-danger" value="Tidak">
                                             <input type="submit" class="btn btn-primary" name="hapus" value="Hapus">
                                         </div>
                                              <?php echo  form_close()?>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
            					<p>
            						<?php echo $listo["harga"] ?> 

            					</p>
            					<div class="row" style="margin-left: 2%;">
                                    
									<!-- <input type="number" id="jumlahObat" name="jumlahObat" value="1" /> -->
									

								</div>
                <div class="row">
                <div class="col-md-8" style="">
                                <?php echo $list["jumlah"] ?>
                     </div>            

<div class="col-md-4" style="">
<button type="button" class="btn btn-warning" id="address" style="font-weight: bold; color: white; font-size: 12px; background-image:   " data-toggle="modal" data-target="#obat<?php echo $list['obat'] ?>">Edit Jumlah</button>
                       
                <div class="modal fade" id="obat<?php echo $list['obat']?>">
                  <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                    
                      <!-- Modal Header -->
                      <div class="modal-header">
                        <h4 class="modal-title"><?php echo $listo['namaObat'] ?></h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                      </div>
                      
                      <!-- Modal body -->
                      <form method="post" action="<?php echo site_url("welcome/editjumlah/".$list['obat']) ?>" name="data" id="data" class="form-inline">
                        <div class="modal-body">
                          <table>
                            <tr>
                                <td><input type="hidden" class="form-control" id="name" name="obat" style="width: 300px" value="<?php echo $list['obat'] ?>"></td>
                            </tr>
                            <tr>
                                <td><input type="hidden" class="form-control" id="pnumber" name="harga" style="width: 300px" value="<?php echo $list['harga'] ?>" ></td>
                            </tr>
                            <tr>
                                <td height="50px" width="150px">Jumlah</td>
                                <td>
                                  <input type="number" id="jumlah" name="jumlah" class="form-control" pattern="[0-9]+" required>
                                </td>
                                
                            </tr>
                          </table> 
                        </div>
                      
                        <!-- Modal footer -->
                        <div class="modal-footer" style="margin-left: 60%">
                          <input class="btn btn-success" type="submit" value="Edit">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                        <input type='hidden' id='totalper' name="totalper" value="<?php echo $list["harga"] * $list["jumlah"]; ?>" >
                      </form> 
                        
                    </div>
                  </div>
                </div>
</div>
</div>



                                 <?php 
                                    $jumlah= $list["harga"] * $list["jumlah"];
                                    $total =$jumlah + $total;
                                  ?>
                                 
                                  

            				</div>
            				       
            			</div>           			
            			
            		</div>
            		
            	</div>
                
            </div>
        
<?php } } }?>
             
            <div class="row" style="padding-left: 80%; padding-top: 10%;">
            
            <p> TOTAL: <br> Rp. <input type='' id='total' name="total" value="<?php echo $total ?>" disabled></p>

            </div>
            <div class="row" style="margin-left: 80%; padding-top: 2%;">
            	<a href="<?php echo site_url('welcome/inputData/'.$this->session->userdata('nama')) ?>"><input type="submit" class="btn btn-warning" name="lanjutkanPembayaran" value="Lanjutkan Pembayaran"></a>
            </div> 
            
        </div>              


        </div>
   
    </div>
    <br>


 <script>
function sum() {
var result=0;
        
      var harga = <?php echo $listo["harga"] ?>;
      var jumlah = document.getElementById('<?php echo $listo["idObat"] ?>').value;
      
      var result= harga * parseInt(jumlah));
     // var total=result;
    if (!isNaN(result)) {
        
         document.getElementById('total').value = result;
          
        
      }
    
      
      
      
}

                      

</script>            

</body>
<?php include("v_footer.php") ?>  

