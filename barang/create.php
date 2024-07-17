
    <!-- Header -->
    <?php require_once "../tamplate/header.php"; ?>
    <!-- End Header -->

    <!-- Navigation -->
    <?php require_once "../tamplate/navigation.php"; ?>
    <!-- End Navigation -->

    <!-- Main content -->
    <div class="container mt-4">
        <h1>Tambah Barang</h1>
        <form action="proses_tambah_barang.php" method="post">
            <div class="form-group">
                <label for="nama_barang">Nama Barang</label>
                <input type="text" class="form-control" id="nama_barang" name="nama_barang" required>
            </div>
            <div class="form-group">
                <label for="satuan">Satuan</label>
                <input type="text" class="form-control" id="satuan" name="satuan" required>
            </div>
            <div class="form-group">
                <label for="harga_barang">Harga Barang</label>
                <input type="number" class="form-control" id="harga_barang" name="harga_barang" required>
            </div>
            <button type="submit" class="btn btn-primary">Tambah Barang</button>
        </form>
    </div>
    <!-- End Main content -->

    <!-- Footer -->
    <?php require_once "../tamplate/footer.php"; ?>
    <!-- End Footer -->




    