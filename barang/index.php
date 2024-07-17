
    <!-- Header -->
    <?php require_once "../tamplate/header.php"; ?>
    <!-- End Header -->

    <!-- Navigation -->
    <?php require_once "../tamplate/navigation.php"; ?>
    <!-- End Navigation -->

    <!-- Main content -->
    
    <div class="container mt-4">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h1>Daftar Barang</h1>
            <button class="btn btn-success">Create</button>
        </div>
        <table class="table table-bordered">
            <thead class="thead-light">
                <tr>
                    <th>No</th>
                    <th>ID Barang</th>
                    <th>Nama Barang</th>
                    <th>Satuan</th>
                    <th>Harga</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <!-- Contoh data -->
                <tr>
                    <td>1</td>
                    <td>BRG001</td>
                    <td>Barang Satu</td>
                    <td>Pcs</td>
                    <td>10,000</td>
                    <td>
                        <button class="btn btn-primary btn-sm">Edit</button>
                        <button class="btn btn-danger btn-sm">Delete</button>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>BRG002</td>
                    <td>Barang Dua</td>
                    <td>Box</td>
                    <td>20,000</td>
                    <td>
                        <button class="btn btn-primary btn-sm">Edit</button>
                        <button class="btn btn-danger btn-sm">Delete</button>
                    </td>
                </tr>
                <!-- Tambahkan data lainnya sesuai kebutuhan -->
            </tbody>
        </table>
    </div>

    <!-- End Main content -->

    <!-- Footer -->
    <?php require_once "../tamplate/footer.php"; ?>
    <!-- End Footer -->




    