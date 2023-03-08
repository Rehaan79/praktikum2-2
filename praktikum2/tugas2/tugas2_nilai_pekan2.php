<?php 
        // ambil data yang dikirim dari form
        // panggil file function untuk menggunakan code yang ada di file tersebut
        require_once 'tugas2_fungsi_pekan2.php';
        $name = $_POST['name'];
        $mata_kuliah = $_POST['matkul'];
        $nilai_uts = $_POST['nilai_uts'];
        $nilai_uas = $_POST['nilai_uas'];
        $nilai_tugas = $_POST['nilai_tugas'];
        $nilai_rata = ($nilai_uts + $nilai_uas + $nilai_uas) /3;
        $keterangan = kelulusan ($nilai_rata);
        $grade = grade ($nilai_rata);


        // mencetak nilai variable
        echo "Nama Anda : $name";
        echo "<br> Mata Kuliah : $mata_kuliah";
        echo "<br> Nilai UTS : $nilai_uts";
        echo "<br> Nilai UAS : $nilai_uas";
        echo "<br> Nilai Tugas : $nilai_tugas";
        echo "<br> Rata-Rata : $nilai_rata";
        echo "<br> Keterangan : $keterangan";
        echo "<br> Grade : $grade";
        ?>