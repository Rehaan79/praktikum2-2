<?php
function kelulusan ($nilai_rata){
    // jika nilai rata-rata siswa <55 = tidak lulus
    if ($nilai_rata <=55){
        return 'Tidak Lulus';
    }
    // jika niai rata-rata siswa >55 = lulus
    else {
        return 'Lulus';
    }

}
// fungsi grade
// nilai 85-100 nilai = A
// nilai 70-84 nilai = B
// nilai 56-69 nilai = C
// nilai 36-55 nilai = D
// nilai 10-35 nilai = E
// tidak ada nilai = I (anda tidak ada nilai)

function grade ($nilai_rata){
    if ($nilai_rata >= 85){
        return 'A';
    }
    elseif ($nilai_rata >= 70){
        return 'B';
    }
    elseif ($nilai_rata >= 56){
        return 'C';
    }
    elseif ($nilai_rata >= 36){
        return 'D';
    }
    elseif ($nilai_rata >= 10){
        return 'E';
    }
    else "I (anda tidak ada nilai)";
}
?>