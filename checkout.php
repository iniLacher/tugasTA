<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Checkout</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/checkout.css">
</head>
<body>
<div class="container mb-5">
    <!-- Judul -->
    <div class="row">
        <div class="col-lg-12 border-bottom">
            <h3 class="mt-5 pt-5 pb-3">Checkout</h3>
        </div>
    </div>
    <!-- end Judul -->
    <!-- Informasi Pengiriman -->
    <div class="row justify-content-between mt-5">
        <div class="col-lg-7 col-sm-12 border rounded from col-md-7">
            <form class=" justify-content-center mt-3 pb-5 ">
                <h3>Informasi Pengiriman</h3>
                <br>
                <label for="nama" class="form-label mb-3">Nama Penerima</label>
                <input type="text" class="form-control mb-3 shadow-none" name="nama" id="nama">
                <label for="telp" class="form-label">Nomor Telepon</label>
                <input type="text" class="form-control mb-3 shadow-none" name="telp" id="telp">
                <label for="alamat1" class="form-label">Alamat 1</label>
                <div class="form-floating">
                    <textarea class="form-control mb-3 shadow-none 
                    shadow-none" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px">
                    </textarea>
                </div>
                <label for="alamat2" class="form-label">Alamat 2</label>
                <div class="form-floating">
                    <textarea class="form-control mb-3 shadow-none shadow-none" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px">
                    </textarea>
                </div>
                <label for="alamat2" class="form-label">Catatan Untuk Seller</label>
                <div class="form-floating">
                    <textarea class="form-control mb-3 shadow-none shadow-none" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px">
                    </textarea>
                </div>
            </form>
        </div>
        <!-- end Informasi Pengiriman -->
        
    <!-- Ekspedisi -->
    <div class="row ekspedisi">
      <div class="col-lg-7 col-md-7 border rounded  pb-3 from mt-5 pt-3">
        <h4>Ekspedisi</h4>
        <div class="form-check border rounded m-3 plenet">
            <input class="form-check-input mt-4" type="radio" name="exampleRadios" id="exampleRadios" value="option1" checked>
            <label class="form-check-label" for="exampleRadios" style="width: 100%;">
                <div class="row">
                  <div class="col-6"><h5>Reguler</h5><p>sastimasi 5-7hari</p></div>
                  <div class="col-6"><p class="text-end mt-4">Rp.15.000</p></div>
                </div>
              </label>
          </div>
          <div class="form-check border rounded m-3 plenet">
            <input class="form-check-input mt-4" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
            <label class="form-check-label" for="exampleRadios2" style="width: 100%;">
              <div class="row">
                <div class="col-6"><h5>Standar</h5><p>sastimasi 3-5hari</p></div>
                <div class="col-6"><p class="text-end mt-4">Rp.150.000</p></div>
              </div>
            </label>
          </div>
          <div class="form-check border rounded m-3 plenet">
            <input class="form-check-input mt-4" type="radio" name="exampleRadios" id="exampleRadios3" value="option2">
            <label class="form-check-label" for="exampleRadios3" style="width: 100%;">
                <div class="row">
                  <div class="col-6"><h5>Kargo</h5><p>sastimasi 30-60 menit</p></div>
                  <div class="col-6"><p class="text-end mt-4">Rp.1.500.000</p></div>
                </div>
              </label>
          </div>
      </div>
    </div>

  <!-- end Ekspedisi -->
  <!-- Metode Pembayaran -->
  <div class="row mt-5">
  <div class="col-lg-7 col-md-7 col-sm-12 border rounded metode">
      <h5 class="mt-3">Metode Pembayaran</h5>
      <p class="mt-3">Manual</p>
      <a href="#" class="border rounded"><img src="img/mandiri.png" alt=""> <p>387127327937219317377</p> <img src="img/Vector.svg" alt=""></a>
      <a href="#" class="border rounded"><img src="img/bni.png" alt=""> <p>387127327937219317377</p> <img src="img/Vector.svg" alt=""></a>
      <a href="#" class="border rounded"><img src="img/bca.png" alt=""> <p>387127327937219317377</p> <img src="img/Vector.svg" alt=""></a>
      <p class="mt-3">Upload Bukti Pembayaran</p>
      <div class="mb-3">
          <input class="form-control" type="file" id="formFileMultiple" multiple>
      </div>
      <p class="mt-3">Otomastis</p>
      <div class="form-check border rounded mb-5 lblngisor">
        <input class="form-check-input" type="radio" name="ngisor" id="ngisor" value="option2" style="margin-left: 5px;">
        <label class="form-check-label" for="ngisor">
            <p class="text-center pt-3">Transfer Antar Bank</p>
        </label>
        <img src="img/Vector.svg" style="float: right;  margin-right: 3%;">
      </div>
  </div>
  <!-- Checkout -->
  <div class="col-lg-4 border rounded checkout pb-3 from col-md-5 col-sm-12 offset-lg-1">
    <div class="row p-3 pt-3">
        <h4 class="mb-3">Produk</h4>
        <div class="col-6">
            <p>1.Chair soft rush</p>
            <p>2.Chair soft rush</p>
            <p>3.Chair soft rush</p>
        </div>
        <div class="col-6 text-end">
            <p>Rp.500.000</p>
            <p>Rp.500.000</p>
            <p>Rp.500.000</p>
        </div>
        <div class="tengah col-12 mt-3 mb-3" >
            <h4>Metode Pembayaran</h4>
            <p>Midtrans</p>
        </div>
        <div class="col-6">
            <p>Total Produk</p>
            <p>Ongkos Kirim</p>
            <p>Biaya Admin</p>
            <p>Total Harga</p>
        </div>
        <div class="col-6 text-end">
            <p>3</p>
            <p>Rp. 160.000</p>
            <p>Rp. 10.000</p>
            <p>Rp. 1.670.000</p>
        </div>
        <div class="col-12 text-center mt-3 mb-5">
            <button type="submit" class="tombol">Checkout</button>
        </div>
    </div>
    </div>
</div>
<!-- end Checkout -->
</div>
    <!-- end Metode pembayaran -->
</div><!--  end container  -->
<script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>