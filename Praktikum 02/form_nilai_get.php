<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Form Nilai Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2 class="text-center">Form Nilai Siswa</h2>
        <div class="card">
            <div class="card-header">Sistem Penilaian</div>
            <div class="card-body">
                <form action="" method="POST">
                    <div class="mb-3 row">
                        <label class="col-sm-3 col-form-label"><strong>Nama Lengkap</strong></label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="nama" placeholder="Nama Lengkap" required>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-3 col-form-label"><strong>Mata Kuliah</strong></label>
                        <div class="col-sm-9">
                            <select class="form-control" name="matkul" required>
                                <option value="Dasar Dasar Pemrograman">Dasar Dasar Pemrograman</option>
                                <option value="Pemrograman Web">Pemrograman Web</option>
                                <option value="Basis Data">Basis Data</option>
                            </select>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-3 col-form-label"><strong>Nilai UTS</strong></label>
                        <div class="col-sm-9">
                            <input type="number" class="form-control" name="nilai_uts" placeholder="Nilai UTS" required>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-3 col-form-label"><strong>Nilai UAS</strong></label>
                        <div class="col-sm-9">
                            <input type="number" class="form-control" name="nilai_uas" placeholder="Nilai UAS" required>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-3 col-form-label"><strong>Nilai Tugas/Praktikum</strong></label>
                        <div class="col-sm-9">
                            <input type="number" class="form-control" name="nilai_tugas" placeholder="Nilai Tugas" required>
                        </div>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
        
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $nama_siswa = $_POST['nama'];
            $mata_kuliah = $_POST['matkul'];
            $nilai_uts = $_POST['nilai_uts'];
            $nilai_uas = $_POST['nilai_uas'];
            $nilai_tugas = $_POST['nilai_tugas'];

            $nilai_akhir = ($nilai_uts * 0.3) + ($nilai_uas * 0.35) + ($nilai_tugas * 0.35);
            $status = ($nilai_akhir > 55) ? "LULUS" : "TIDAK LULUS";

            if ($nilai_akhir >= 85) {
                $grade = "A";
                $predikat = "Sangat Memuaskan";
            } elseif ($nilai_akhir >= 70) {
                $grade = "B";
                $predikat = "Memuaskan";
            } elseif ($nilai_akhir >= 56) {
                $grade = "C";
                $predikat = "Cukup";
            } elseif ($nilai_akhir >= 36) {
                $grade = "D";
                $predikat = "Kurang";
            } else {
                $grade = "E";
                $predikat = "Sangat Kurang";
            }
        ?>
        
        <div class="mt-4">
            <h3 class="text-center">Hasil Nilai Mahasiswa</h3>
            <table class="table table-bordered">
                <tr><th>Nama</th><td><?php echo $nama_siswa; ?></td></tr>
                <tr><th>Mata Kuliah</th><td><?php echo $mata_kuliah; ?></td></tr>
                <tr><th>Nilai UTS</th><td><?php echo $nilai_uts; ?></td></tr>
                <tr><th>Nilai UAS</th><td><?php echo $nilai_uas; ?></td></tr>
                <tr><th>Nilai Tugas</th><td><?php echo $nilai_tugas; ?></td></tr>
                <tr><th>Nilai Akhir</th><td><?php echo number_format($nilai_akhir, 2); ?></td></tr>
                <tr><th>Status</th><td><?php echo $status; ?></td></tr>
                <tr><th>Grade</th><td><?php echo $grade; ?></td></tr>
                <tr><th>Predikat</th><td><?php echo $predikat; ?></td></tr>
            </table>
        </div>
        
        <?php
        }
        ?>
        
        <footer class="text-center mt-3">Develop By @rojulman &copy;2017</footer>
    </div>
</body>
</html>
