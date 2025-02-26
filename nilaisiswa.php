<!doctype html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
  </head>
  <body class="bg-gray-400 grid items-center justify-center min-h-screen">
  
    <?php
        $nama_siswa = "";
        $nilai_tugas = "";
        $nilai_uts = "";
        $nilai_uas = "";
        $nilai_akhir = "";
        $kategori = "";

        if(isset($_POST['hitung'])){
            $nama_siswa = $_POST['nama'];
            $nilai_tugas = $_POST['nilai_tugas'];
            $nilai_uts = $_POST['nilai_uts'];
            $nilai_uas = $_POST['nilai_uas'];

            
        $nilai_akhir = (0.3*$nilai_tugas)+(0.3*$nilai_uts)+(0.4*$nilai_uas); 

        }


        


        if ($nilai_akhir >= 85) {
           $kategori = "A";
        }
        elseif ($nilai_akhir >= 70 && $nilai_akhir < 85) {
            $kategori = "B";
        }
        elseif ($nilai_akhir >= 60 && $nilai_akhir < 70) {
            $kategori = "C";
        }
        elseif ($nilai_akhir >= 50 && $nilai_akhir < 60) {
            $kategori = "D";
        }
        elseif($nilai_akhir > 50){
            $kategori = "E";
        }
    ?>
    <div class="grid grid-cols-2 gap-2">
        <div class="bg-white p-8 rounded-lg shadow-lg w-96">
                <h2 class="text-2xl font-semibold text-center mb-5">Form Input Nilai Siswa</h2>
                <form action="" method="POST">
                    <label>Nama Siswa</label>
                    <input type="text" name="nama" class="w-full p-3 mb-3 mt-2 border border-gray-300 rounded-md"
                    autocomplete="off" value="<?php  ?>">
                    <label>Nilai Tugas</label>
                    <input type="number" name="nilai_tugas" class="w-full p-3 mb-3 mt-2 border border-gray-300 rounded-md"
                    autocomplete="off" value="<?php  ?>">
                    <label>Nilai UTS</label>
                    <input type="number" name="nilai_uts" class="w-full p-3 mb-3 mt-2 border border-gray-300 rounded-md"
                    autocomplete="off" value="<?php  ?>">
                    <label>Nilai UAS</label>
                    <input type="number" name="nilai_uas" class="w-full p-3 mb-3 mt-2 border border-gray-300 rounded-md"
                    autocomplete="off" value="<?php  ?>">
                    
                    <input type="submit" name="hitung" value="Hitung Nilai" class="w-full p-3 mb-3 bg-yellow-300 hover:bg-yellow-700 font-medium hover:text-white rounded-md">
                    
                </form>
        </div>
        
        <div class="flex flex-col gap-y-5">
                <div class="hasil-penilaian bg-white p-8 rounded-lg shadow-lg w-180 flex flex-col text-center">
                    <h2 class="text-2xl font-semibold text-center mb-5">Hasil Penilaian</h2>
                    <table class="table-auto border border-black">
                        <thead class=" text-white bg-black">
                            <tr>
                                <th class="p-2">Nama</th>
                                <th>Nilai Tugas</th>
                                <th>Nilai UTS</th>
                                <th>Nilai UAS</th>
                                <th>Nilai Akhir</th>
                                <th>Kategori</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                            <td><?php echo $nama_siswa ?></td>
                            <td><?php echo $nilai_tugas ?></td>
                            <td><?php echo $nilai_uts ?></td>
                            <td><?php echo $nilai_uas ?></td>
                            <td><?php echo $nilai_akhir ?></td>
                            <td><?php echo $kategori ?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="hapus">
                    <input type="submit" name="hapus" value="Hapus Semua Data" class="w-full p-3 mb-3 bg-red-700 hover:bg-red-300 font-sm text-white hover:text-black-300 rounded-md">
                </div>
        </div>
    </div>
  </body>
</html>

