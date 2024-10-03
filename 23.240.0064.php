<!DOCTYPE html>
<html>
<head>
    <title>Tugas 1 WEB 2</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<?php
    $nama = "";
    $uang = 0;
    $status = $_POST['membership'];
    $nama = $_POST['nama'];
    $uang = $_POST['uang'];
    $totalDiskon = 0;

    if ($status == "Member") {
        $dismem = $uang * 10 / 100;
        if ($uang >= 500000) {
            $uang = $uang - $dismem;
            $dishar = $uang * 10 / 100;
            $tot = $uang - $dishar;
            $totalDiskon = $dismem + $dishar;
        } else if ($uang >= 300000) {
            $uang = $uang - $dismem;
            $dishar = $uang * 5 / 100;
            $tot = $uang - $dishar;
            $totalDiskon = $dismem + $dishar;
        } else {
            $tot = $uang - $dismem;
            $totalDiskon = $dismem;
        }
    } else {
        if ($uang >= 500000) {
            $dishar = $uang * 10 / 100;
            $tot = $uang - $dishar;
            $totalDiskon = $dishar;
        } else {
            $tot = $uang;
        }
    }
?>

<body class="d-flex align-items-center" style="height: 100vh;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card mb-4">
                    <h5 class="card-header text-center">FORM INPUT PEMBELIAN</h5>
                    <div class="card-body">
                        <form method="POST" action="">
                            <div class="input-group mb-3">
                                <span class="input-group-text" >Nama Pembeli</span>
                                <input type="text" name="nama" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Status Membership</label>
                                <div class="form-check form-check-inline">
                                    <input type="radio" class="form-check-input" id="member" name="membership"
                                        value="Member" required>
                                    <label class="form-check-label" for="member">Member</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input type="radio" class="form-check-input" id="non-member" name="membership"
                                        value="Non-Member" required>
                                    <label class="form-check-label" for="non-member">Non-Member</label>
                                </div>
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text">Total Pembelian</span>
                                <input type="number" name="uang" class="form-control" required>
                            </div>
                            <div class="text-center content-between">
                                <button type="submit" class="btn btn-primary">Input</button>
                                <button type="reset" class="btn btn-secondary">Batal</button>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="card">
                    <h5 class="card-header text-center">KWITANSI PEMBELIAN</h5>
                    <div class="card-body ">
                    <table class="table">
                                <tr>
                                    <td>Nama Pembeli</td>
                                    <td><?php echo $nama; ?></td>
                                </tr>
                                <tr>
                                    <td>Status Membership</td>
                                    <td><?php echo $status; ?></td>
                                </tr>
                                <tr>
                                    <td>Total Diskon</td>
                                    <td>Rp <?php echo number_format($totalDiskon, 0, ',', '.'); ?></td>
                                </tr>
                                <tr>
                                    <td>Total Pembelian Setelah Diskon</td>
                                    <td>Rp <?php echo number_format($tot, 0, ',', '.'); ?></td>
                                </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
