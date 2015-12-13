<?php

namespace common\components;

use yii\base\Component;
use common\models\User;
use common\models\Actionlog;
use common\models\Logkategori;
use yii\helpers\Url;
use yii\db\Query;
use Yii;
use yii\helpers\Html;
use common\models\Gol;
use common\models\Struk;

class MyHelper extends Component {

    //membuat angka random 3karakter
    public function random() {
        $str = '';
        for ($i = 0; $i < 3; $i++) {
            $str .= mt_rand(0, 9);
        }

        return $str;
    }

    //ilham manambahkan fungsi terbilang gunaya ketika ada angka makaakan ditampilkan terbilangya
    public function Terbilang($x)
        {
          $ambil = array("", "satu", "dua", "tiga", "empat", "lima", "enam ", "tujuh", 

        "delapan", "sembilan", "sepuluh", "sebelas");
          if ($x < 12)
            return " " . $ambil[$x];
          elseif ($x < 20)
            return self::Terbilang($x - 10) . " belas";
          elseif ($x < 100)
            return self::Terbilang($x / 10) . " puluh" . self::Terbilang($x % 10);
          elseif ($x < 200)
            return " seratus" . self::Terbilang($x - 100);
          elseif ($x < 1000)
            return self::Terbilang($x / 100) . " ratus" . self::Terbilang($x % 100);
          elseif ($x < 2000)
            return " seribu" . self::Terbilang($x - 1000);
          elseif ($x < 1000000)
            return self::Terbilang($x / 1000) . " ribu" . self::Terbilang($x % 1000);
          elseif ($x < 1000000000)
            return self::Terbilang($x / 1000000) . " juta" . self::Terbilang($x % 1000000);
        elseif ($x < 1000000000)
            return self::Terbilang($x / 1000000000) . " milyar" . self::Terbilang($x % 1000000000);
        }


    //membuat password otomatis
    public function GeneratePassword() {

        $karakter = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $panjang = strlen($karakter);
        $rand = '';
        for ($i = 0; $i < 7; $i++) {
            $rand .= $karakter[rand(0, $panjang - 1)];
        }
        return $rand;
    }
    
    public function Cut($string, $max_length)
    {
        if (strlen($string) > $max_length)
        {
        $string = substr($string, 0, $max_length);
        $pos = strrpos($string, " ");
        if($pos === false)
        {
            return substr($string, 0, $max_length)."...";
        }
        return substr($string, 0, $pos)."...";
        }
        else
        {
        return $string;
        }
    }
    public function Arsip($arsip){
        //fungsi untuk memanggil arsip
        switch ($arsip) {
            case 3: {
               $arsip = 'Sudah Di Simpan Arsip';

            }
                break;
            default:
              {
                $arsip = 'Sudah Di Simpan Arsip';
              }
                break;
        }
        return $arsip;
    }



    //memanggil tahun 5 tahun kebelakang
    public function CallTahun() {
        $tahun = date('Y') - 5;
        for ($i = 0; $i < 5; $i++) {

            $tahun = $tahun + 1;
            $th[] = $tahun;
        }
        return $th;
    }

    //memanggil nama username berdasarkan id
    public function User($id) {
        $user = User::find()
                ->Count();
        return $user;
    }

    public function Gole($id) {
        $gole = Gol::find()
                ->where(['gol_id' => $id])
                ->one();
        return $gole->golongan;
    }
     public function Pangkat($id) {
        $gole = Gol::find()
                ->where(['gol_id' => $id])
                ->one();
        return $gole->pangkat;
    }
      public function Unit($id) {
        $gole = \common\models\DaftarUnit::find()
                ->where(['unit_id' => $id])
                ->one();
        return $gole->nama;
    }
      public function Angkutan($id) {
        $gole = \common\models\Angkutan::find()
                ->where(['angkutan_id' => $id])
                ->one();
        return $gole->nama;
    }
    public function Kota($id) {
        $gole = \common\models\MasterKokab::find()
                ->where(['kota_id' => $id])
                ->one();
        return $gole->kokab_nama;
    }

    public function Struk($id) {
        //$ese = Ese::findOne()
        $struk = Struk::find()
                ->where(['struk_id' => $id])
                //->joinWith('daf_eselon', false, 'INNER JOIN')
                ->one();
        return $struk->eselon_id;
    }
     public function Jab($id) {
        //$ese = Ese::findOne()
        $struk = Struk::find()
                ->where(['struk_id' => $id])
                //->joinWith('daf_eselon', false, 'INNER JOIN')
                ->one();
        return $struk->nama;
    }

       public function Eselon($id) {
        //$ese = Ese::findOne()
        $struk = \common\models\DafEse::find()
                ->where(['eselon_id' => $id])
                //->joinWith('daf_eselon', false, 'INNER JOIN')
                ->one();
        return $struk->eselon;
    }

    //memanggil nama bulan berdasarkan urutan
    public function BacaBulan($bln) {
        switch ($bln) {
            case 1 : {
                    $bln = 'Januari';
                }break;
            case 2 : {
                    $bln = 'Februari';
                }break;
            case 3 : {
                    $bln = 'Maret';
                }break;
            case 4 : {
                    $bln = 'April';
                }break;
            case 5 : {
                    $bln = 'Mei';
                }break;
            case 6 : {
                    $bln = "Juni";
                }break;
            case 7 : {
                    $bln = 'Juli';
                }break;
            case 8 : {
                    $bln = 'Agustus';
                }break;
            case 9 : {
                    $bln = 'September';
                }break;
            case 10 : {
                    $bln = 'Oktober';
                }break;
            case 11 : {
                    $bln = 'November';
                }break;
            case 12 : {
                    $bln = 'Desember';
                }break;
            default: {
                    $bln = 'UnKnown';
                }break;
        }
        return $bln;
    }
      public function BacaHari($bln) {
        switch ($bln) {
            case 1 : {
                    $bln = 'Satu';
                }break;
            case 2 : {
                    $bln = 'Dua';
                }break;
            case 3 : {
                    $bln = 'Tiga';
                }break;
            case 4 : {
                    $bln = 'Empat';
                }break;
            case 5 : {
                    $bln = 'Lima';
                }break;
            case 6 : {
                    $bln = "Enam";
                }break;
            case 7 : {
                    $bln = 'Tujuh';
                }break;
            case 8 : {
                    $bln = 'Delapan';
                }break;
            case 9 : {
                    $bln = 'Sebilan';
                }break;
            case 10 : {
                    $bln = 'Sepuluh';
                }break;
            case 11 : {
                    $bln = 'Sebelas';
                }break;
            case 12 : {
                    $bln = 'Dua Belas';
                }break;
            case 13 : {
                    $bln = 'Tiga Belas';
                }break;
            case 14 : {
                    $bln = 'Empat Belas';
                }break;
           case 15 : {
                    $bln = 'Lima Belas';
                }break;
           case 16 : {
                    $bln = 'Enam Belas';
                }break;
          case 17 : {
                    $bln = 'Tujuh Belas';
                }break;
             case 18 : {
                    $bln = 'Delapan Belas';
                }break;
                 case 19 : {
                    $bln = 'Sembilan Belas';
                }break;
                 case 20 : {
                    $bln = 'Dua Puluh';
                }break;
                 case 21 : {
                    $bln = 'Dua Puluh Satu';
                }break;
                   case 22 : {
                    $bln = 'Dua Puluh Dua';
                }break;
                   case 23 : {
                    $bln = 'Dua Puluh Tiga';
                }break;
                   case 24 : {
                    $bln = 'Dua Puluh Empat';
                }break;
                   case 25 : {
                    $bln = 'Dua Puluh Lima';
                }break;
                   case 26 : {
                    $bln = 'Dua Puluh Enam';
                }break;
                   case 27 : {
                    $bln = 'Dua Puluh Tujuh';
                }break;
                   case 28 : {
                    $bln = 'Dua Puluh Delapan';
                }break;
                   case 29 : {
                    $bln = 'Dua Puluh Sembilan';
                }break;
                   case 30 : {
                    $bln = 'Tiga Puluh ';
                }break;
                   case 31 : {
                    $bln = 'Tiga Puluh Satu';
                }break;
            default: {
                    $bln = 'UnKnown';
                }break;
        }
        return $bln;
    }
    public function Formattgl($tgl){
            $tanggal = substr($tgl,8,2);
            $bulan = self::BacaBulan(substr($tgl,5,2));
            $tahun = substr($tgl,0,4);
            return $tanggal.' '.$bulan.' '.$tahun;
    }   
     public function Berangkattgl($tgl){
            $tanggal = substr($tgl,8,2)-1;
            $bulan = self::BacaBulan(substr($tgl,5,2));
            $tahun = substr($tgl,0,4);
            return $tanggal.' '.$bulan.' '.$tahun;
    }   

    public function Romawi($bln) {
        switch ($bln) {
            case 1 : {
                    $bln = 'I';
                }break;
            case 2 : {
                    $bln = 'II';
                }break;
            case 3 : {
                    $bln = 'III';
                }break;
            case 4 : {
                    $bln = 'IV';
                }break;
            case 5 : {
                    $bln = 'V';
                }break;
            case 6 : {
                    $bln = "VI";
                }break;
            case 7 : {
                    $bln = 'VII';
                }break;
            case 8 : {
                    $bln = 'VIII';
                }break;
            case 9 : {
                    $bln = 'IX';
                }break;
            case 10 : {
                    $bln = 'X';
                }break;
            case 11 : {
                    $bln = 'XI';
                }break;
            case 12 : {
                    $bln = 'XII';
                }break;
            default: {
                    $bln = 'UnKnown';
                }break;
        }
        return $bln;
    }

    //function untuk eselon
    public function Ese($ese) {
        switch ($ese) {
            case 0 : {
                    $ese = 'Belum DI Pilih';
                }break;
            case 1 : {
                    $ese = 'I';
                }break;
            case 2 : {
                    $ese = 'II';
                }
            case 3 : {
                    $ese = 'III';
                }
            case 3 : {
                    $ese = 'IV';
                }
            default: {
                    $ese = 'Belum Di pilih';
                }break;
        }
        return $ese;
    }

    //function untuk gol

    public function Gol($gol) {
        switch ($gol) {
            case 0 : {
                    $gol = 'Belum DI Pilih';
                }break;
            case 1 : {
                    $gol = 'I';
                }break;
            case 2 : {
                    $gol = 'II';
                }
            case 3 : {
                    $gol = 'III';
                }
            case 3 : {
                    $gol = 'IV';
                }
            default: {
                    $gol = 'Belum Di pilih';
                }break;
        }
        return $gol;
    }

    //memanggil nama hari
    public function GetDayName($day) {
        $day = date('l', strtotime($day));
        switch ($day) {
            case 'Sunday' : {
                    $day = 'Minggu';
                }break;
            case 'Monday': {
                    $day = 'Senin';
                }break;
            case 'Tuesday': {
                    $day = 'Selasa';
                }break;
            case 'Wednesday': {
                    $day = 'Rabu';
                }break;
            case 'Thursday' : {
                    $day = 'Kamis';
                }break;
            case 'Friday' : {
                    $day = 'Jumat';
                }break;
            case 'Saturday' : {
                    $day = 'Sabtu';
                }break;
        }
        return $day;
    }

    //memanggil nama tahun, bulan hari
    public function CallDay() {

        $hari = date('w');
        $tgl = date('d');
        $bln = date('m');
        $thn = date('Y');
        switch ($hari) {
            case 0 : {
                    $hari = 'Minggu';
                }break;
            case 1 : {
                    $hari = 'Senin';
                }break;
            case 2 : {
                    $hari = 'Selasa';
                }break;
            case 3 : {
                    $hari = 'Rabu';
                }break;
            case 4 : {
                    $hari = 'Kamis';
                }break;
            case 5 : {
                    $hari = "Jum'at";
                }break;
            case 6 : {
                    $hari = 'Sabtu';
                }break;
            default: {
                    $hari = 'UnKnown';
                }break;
        }

        switch ($bln) {
            case 1 : {
                    $bln = 'Januari';
                }break;
            case 2 : {
                    $bln = 'Februari';
                }break;
            case 3 : {
                    $bln = 'Maret';
                }break;
            case 4 : {
                    $bln = 'April';
                }break;
            case 5 : {
                    $bln = 'Mei';
                }break;
            case 6 : {
                    $bln = "Juni";
                }break;
            case 7 : {
                    $bln = 'Juli';
                }break;
            case 8 : {
                    $bln = 'Agustus';
                }break;
            case 9 : {
                    $bln = 'September';
                }break;
            case 10 : {
                    $bln = 'Oktober';
                }break;
            case 11 : {
                    $bln = 'November';
                }break;
            case 12 : {
                    $bln = 'Desember';
                }break;
            default: {
                    $bln = 'UnKnown';
                }break;
        }
        $sekarang = "Hari " . $hari . ", Tanggal " . $tgl . " " . $bln . " " . $thn;
        return $sekarang;
    }

    public function CountAng($id) {
        /*$command = Yii::$app->db->createCommand("SELECT 
                sum(transport+taksi+taksi2+lumpsum+uhr+uhr_fb+penginapan+representatif+trans_pim+inap_lain+inap_fb )
                 FROM perjadin where nomi_id=16");*/
         $command = Yii::$app->db->createCommand("SELECT sum(jml) FROM  simpel_rincian_biaya where id_kegiatan=".$id." GROUP BY id_kegiatan");
        $sum = $command->queryScalar();
        $counts = \backend\models\SimpelPersonil::find()
                ->where([
                    'id_kegiatan' => $id,
                ])
                ->count();

            if (!empty($counts)) {
                return 'Rp.  '.$sum . ' ,00  <br/>  ( ' . $counts . ' org)';
            } else {
                return "-";
            }
    }

      public function CountUang($id) {
        /*$command = Yii::$app->db->createCommand("SELECT 
                sum(transport+taksi+taksi2+lumpsum+uhr+uhr_fb+penginapan+representatif+trans_pim+inap_lain+inap_fb )
                 FROM perjadin where nomi_id=16");*/
        $command = Yii::$app->db->createCommand("SELECT sum(jml) FROM  simpel_rincian_biaya where id_kegiatan=".$id." GROUP BY id_kegiatan");
        $sum = $command->queryScalar();
        $counts = \backend\models\SimpelPersonil::find()
                ->where([
                    'id_kegiatan' => $id,
                ])
                ->count();


            if (!empty($counts)) {
                return 'Rp.  '.$sum . ' ,00 ';
            } else {
                return "-";
            }
    }

  public function CountJum($id) {
        /*$command = Yii::$app->db->createCommand("SELECT 
                sum(transport+taksi+taksi2+lumpsum+uhr+uhr_fb+penginapan+representatif+trans_pim+inap_lain+inap_fb )
                 FROM perjadin where nomi_id=16");*/
        $command = Yii::$app->db->createCommand("SELECT sum(jml) FROM  simpel_rincian_biaya where id_kegiatan=".$id." GROUP BY id_kegiatan");
        $sum = $command->queryScalar();
        $counts = \backend\models\SimpelPersonil::find()
                ->where([
                    'id_kegiatan' => $id,
                ])
                ->count();


            if (!empty($counts)) {
                return $sum;
            } else {
                return "-";
            }
    }

    public function Pagu() {
        $command = Yii::$app->db->createCommand("SELECT 
                sum(pagu) as total
                 FROM t_mak where unit_mak in('BP','BHO','BU','Biro Umum','INSPEK','BDL') and t_mak.tahun=2014");

        $sum = $command->queryScalar();

        return $sum;
    }

    public function Pagu2() {
        $command = Yii::$app->db->createCommand("SELECT 
                sum(pagu)
                 FROM t_mak where unit_mak in('DIFRZR', 'DPIBN', 'DPFRZR', 'DI2BN', 'DK2N') and t_mak.tahun=2014");
        $sum = $command->queryScalar();
        if ($sum) {
            return $sum . ' <br/> ';
        }
    }

    public function Pagu3() {
        $command = Yii::$app->db->createCommand("SELECT 
                sum(pagu)
                 FROM t_mak where unit_mak in('P2STPFRZR', 'P2STPIBN', 'DP2FRZR', 'DP2IBN') and t_mak.tahun=2014");
        $sum = $command->queryScalar();
        if ($sum) {
            return $sum . ' <br/> ';
        }
    }

    public function Pagu4() {
        $command = Yii::$app->db->createCommand("SELECT 
                sum(pagu)
                 FROM t_mak where unit_mak in('SKLN') and t_mak.tahun=2014");
        $sum = $command->queryScalar();
        if ($sum) {
            return $sum . ' <br/> ';
        }
    }

//akhir hitung pagu
    //awal hitung realisasi

    public function Re() {
        $command = Yii::$app->db->createCommand("SELECT 
                sum(transport+taksi+uhr+penginapan+representatif) 
                FROM nominatif, perjadin, t_mak
                where nominatif.nomi_id=perjadin.nomi_id
                AND nominatif.mak=t_mak.mak
                AND unit_mak in('BP','BHO','BU','Biro Umum','INSPEK','BDL')
                AND t_mak.tahun=2014");
        $sum = $command->queryScalar();
        if ($sum) {
            return $sum . ' <br/> ';
        }
    }

//2
    public function Re2() {
        $command = Yii::$app->db->createCommand("SELECT 
                sum(transport+taksi+uhr+penginapan+representatif) 
                FROM nominatif, perjadin, t_mak
                where nominatif.nomi_id=perjadin.nomi_id
                AND nominatif.mak=t_mak.mak
                AND unit_mak in('DIFRZR', 'DPIBN', 'DPFRZR', 'DI2BN', 'DK2N')
                AND t_mak.tahun=2014");
        $sum = $command->queryScalar();
        if ($sum) {
            return $sum . ' <br/> ';
        }
    }

//3
    public function Re3() {
        $command = Yii::$app->db->createCommand("SELECT 
            sum(transport+taksi+uhr+penginapan+representatif) 
                FROM nominatif, perjadin, t_mak
                where nominatif.nomi_id=perjadin.nomi_id
                AND nominatif.mak=t_mak.mak
                AND unit_mak in('P2STPFRZR', 'P2STPIBN', 'DP2FRZR', 'DP2IBN')
                AND t_mak.tahun=2014");
        $sum = $command->queryScalar();
        if ($sum) {
            return $sum . ' <br/> ';
        }
    }

    //4
    public function Re4() {
        $command = Yii::$app->db->createCommand("SELECT 
                sum(transport+taksi+uhr+penginapan+representatif) 
                FROM nominatif, perjadin, t_mak
                where nominatif.nomi_id=perjadin.nomi_id
                AND nominatif.mak=t_mak.mak
                AND unit_mak in('SKLN')
                AND t_mak.tahun=2014");
        $sum = $command->queryScalar();
        if ($sum) {
            return $sum . ' <br/> ';
        }
    }

    //total realisasi
    //awal sisa
}
