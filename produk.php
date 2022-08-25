<?php require_once('components/header.php') ?>
    <div class="container-fluid">
        <div class="row">
 <?php require_once('components/nav.php') ?>     
            <div class="col-9 py-3">
                <h2>Data Produk</h2>
                <div class="mb-3">
                    <button type="button" class="btn btn-primary">Tambah Produk</button>
                </div>
                    <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama Produk</th>
                        <th scope="col">Harga Produk</th>
                        <th scope="col">Foto Produk</th>
                        <th scope="col">Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row" class="align-middle">1</th>
                        <td class="align-middle">Muka Ganteng</td>
                        <td class="align-middle">Rp. 5.000.000</td>
                        <td class="align-middle"><img src="assets/foto.jpg" width="80px" ></td>
                        <td class="align-middle">
                            <button type="button" class="btn btn-success">Edit Produk</button>
                            <button type="button" class="btn btn-danger">Hapus Produk</button>
                        </td>
                      </tr>
                      <tr>
                        <th scope="row" class="align-middle">2</th>
                        <td class="align-middle">Muka Ganteng</td>
                        <td class="align-middle">Rp. 5.000.000</td>
                        <td class="align-middle"><img src="assets/foto.jpg" width="80px"></td>
                        <td class="align-middle">
                            <button type="button" class="btn btn-success">Edit Produk</button>  
                            <button type="button" class="btn btn-danger">Hapus Produk</button>
                        </td>
                      </tr>
                      <tr>
                        <th scope="row" class="align-middle">3</th>
                        <td class="align-middle">Muka Ganteng</td>
                        <td class="align-middle">Rp. 5.000.000</td>
                        <td class="align-middle"><img src="assets/foto.jpg" width="80px"></td>
                        <td class="align-middle">
                            <button type="button" class="btn btn-success">Edit Produk</button>
                            <button type="button" class="btn btn-danger">Hapus Produk</button>
                        </td>
                      </tr>
                    </tbody>
                    </table>
            </div>
        </div>
    </div>
<?php require_once('components/footer.php') ?>