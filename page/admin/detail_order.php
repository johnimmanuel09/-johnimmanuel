<?php
    include "../../db.php";
    $kd=$_GET['id'];
    // $byr = mysqli_fetch_array(mysqli_query($mysql, "SELECT SUM(total_harga) as total_bayar from pembelian where kode_beli='$kd'"));
    $qtot = mysqli_fetch_array(mysqli_query($mysql, "SELECT SUM(qty) as qty_total from pembelian where kode_beli='$kd'"));
    $b = $byr['total_bayar'];
    $c = $qtot['qty_total'];
?>
<div class="modal-dialog">
    <div class="modal-content">

        <div class="modal-header" style="text-align:center;background:#4682b5;color:#fff;">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h4 class="modal-title" id="myModalLabel">Detail Order</h4>
        </div>

        <div class="modal-body">
            <table class="table table-stiped">
                <th>judul buku</th>
                <th><center>harga</center></th>
                <th><center>qty</center></th>
                <th><center>total harga</center></th>
                <?php
                 $qry=mysqli_query($mysql, "SELECT * FROM pembelian WHERE kode_beli='$kd'");
                    while($r = mysqli_fetch_array($qry)) { ?>
            
<?php } ?>
<tr>
    <td colspan="2" style="text-align:center;"><b>Total<b></td><td><center><?php echo $c; ?></center></td><td><center>Rp.<?php echo number_format($b); ?>,-</center></td>
</tr>
</table>
            </div>
            <div class="modal-footer">

                    <button type="reset" class="btn btn-danger"  data-dismiss="modal" aria-hidden="true">
                        Kembali
                    </button>
                </div>

           
        </div>
    </div>