<div class="navHeader" uk-sticky>
  <div uk-grid class="uk-child-width-expand@s uk-text-center">
    <div align="left">
      <table class="menu">
        <tr>
          <td>
            <img src="<?php echo base_url(); ?>/img/logo/logo.png" class="logo">
          </td>
          <td>
            <a href="<?php echo base_url() ?>">Home</a>
          </td>
          <td>
            <input class="uk-input onEnter" type="text" placeholder="Cari model Rumah yang Kamu Butuhkan" style="width: 30em" id="search" value="<?php echo $resSearch ?>">
            <button class="uk-button uk-button-primary" style="border-radius: 6px;background-color: #055ec3" onclick="search()">Cari</button>
          </td>
        </tr>
      </table>
    </div>
  </div>
</div>