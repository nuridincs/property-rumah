<div align="center" style="width: 90%">
	<br><br>
	<div align="left">
		Menampilkan Hasil <span id="span_result"></span> Barang
	</div>
	<div class="uk-grid uk-child-width-1-1@s uk-child-width-1-2@m uk-child-width-1-4@l uk-grid-small" align="left">
		 <?php
		 	$no = 0;
		 	foreach ($data as $row) {
		 		$no++
		 ?>
        <div>
        <a onclick="modalDetail('<?php echo $row->id ?>')">
            <div class="uk-card uk-card-default" style="cursor: pointer;">
                <div class="uk-card-media-top" align="center">
                    <img style="height: 200px;width: 100%; object-fit:cover;" src="<?php echo base_url() ?>/img/property/<?= $row->image ?>" alt="">
                </div>
                <div style="padding: 15px 25px">
                    <div><b><?php echo $row->property_name ?></b></div>
                    <span><?php echo $row->type ?></span>
                    <div>Booking Fee <b>Rp. <?php echo number_format($row->booking_fee,0,',','.') ?></b></div>
                    <div style="color: #F60"><b>Rp. <?php echo number_format($row->harga,0,',','.') ?></b></div>
                </div>
            </div>
        </a>
      </div>
		<?php } ?>
		<input type="hidden" id="total_result" value="<?php echo $no; ?>">
	</div>
</div>


<div id="modal-full" class="uk-modal-full" uk-modal></div>

<script>
	function modalDetail(id=''){
		UIkit.modal('#modal-full').show();
		$.get('<?php echo base_url() ?>/home/detail/' + id, function(res){
			$("#modal-full").html(res);
		})
	}
</script>