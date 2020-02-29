<div class="uk-modal-dialog">
  <button class="uk-modal-close-full uk-close-large" type="button" uk-close></button>
  <div class="uk-grid-collapse uk-child-width-1-2@s uk-flex-middle" uk-grid>
    <div class="uk-background-cover" style="background-image: url('<?php echo base_url() ?>/img/property/<?php echo $data->image ?>');" uk-height-viewport></div>
      <div class="uk-padding-large">
        <h1><?php echo $data->property_name; ?></h1>

        <p>
          <span style="color: #F60;font-size: 18px">Rp <?php echo number_format($data->harga,0,',','.') ?></span><br>
          Type <b><?php echo $data->type ?></b>
        </p>

        <p>
          <?= $data->keterangan ?>
        </p>
        <div class="uk-margin">
          Booking Fee<br>
        <b style="font-size: 24px;">Rp <?php echo number_format($data->booking_fee,0,',','.') ?></b>
      </div>

      <button class="uk-button uk-button-primary" style="width:20em;border-radius: 6px;background-color: #F60" onclick="add()">
        Booking Sekarang
      </button>

      <!-- <button class="uk-button uk-button-primary" style="width:10em;border-radius: 6px;background-color: #055ec3" onclick="checkout()">
        Beli
      </button> -->
    </div>
  </div>
</div>

<script>
	function add(){
		alert('Anda belum dapat melakukan transaksi');
	}

	function checkout(){
		alert('Anda belum dapat melakukan transaksi');
	}
</script>