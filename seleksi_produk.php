<center>
<img src="img/gambar_buku/<?php echo $seleksi_buku['gambar']; ?>"><br>
<?php 
$qrystok = mysqli_query($mysql, "SELECT * FROM stok where id_buku='$seleksi_buku[id_buku]'");
while($stok = mysqli_fetch_array($qrystok)){
 ?>
<!-- <br><div style="text-align:center;">stok tersedia <b><?php echo $stok['stok']; ?></b></div> -->
<?php if($stok['stok']>=1){ ?>
<a data-toggle="modal" data-target="#detail" class="btn btn-success open" id='<?php echo  $seleksi_buku['id_buku']; ?>'>Lihat Detail</a>
<?php } }?>


<script type="text/javascript">
   $(document).ready(function () {
   $(".open").click(function(e) {
      var m = $(this).attr("id");
       $.ajax({
            url: "detail.php",
             type: "GET",
             data : {id: m,},
             success: function (ajaxData){
               $("#detail").html(ajaxData);
               $("#detail").modal('show',{backdrop: 'true'});
             }
           });
        });
      });
</script>