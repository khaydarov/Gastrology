<?php
// 
//
if (isset($_POST['add']))
{


    /*========= PART 1 ===========*/

    $muqarrari = (isset($_POST['muqarrari'])) ? 1 : 0;
    $varamkarda = (isset($_POST['varamkarda'])) ? 1 : 0;
    $surhshuda = (isset($_POST['surhshuda'])) ? 1 : 0 ;
    $rangparida = (isset($_POST['rangparida'])) ? 1 : 0;

    $data1 = $_POST['data1'];

    $a_m = (isset($_POST['a_m'])) ? 1 : 0;
    $tashanuch = (isset($_POST['tashanuch'])) ? 1 : 0;
    $spazm = (isset($_POST['spazm'])) ? 1 : 0 ;
    $kushoda = (isset($_POST['kushoda'])) ? 1 : 0 ;
    $vaseshuda = (isset($_POST['vaseshuda'])) ? 1 : 0;
    $guzaro = (isset($_POST['guzaro'])) ? 1 : 0;

    $data2 = $_POST['data2'];

    $sql = "INSERT INTO epart1
    (muqarrari, varamkarda, surhshuda, rangparida, data1, a_m, tashanuch, spazm,
      kushoda, vaseshuda, guzaro, data2) 
    VALUES 
    ('$muqarrari', '$varamkarda', '$surhshuda', '$rangparida', '$data1', '$a_m', '$tashanuch', '$spazm',
      '$kushoda', '$vaseshuda', '$guzaro', '$data2')";

    $res = query($sql);
    /*============= PART 2 =============*/ 

    $mvt = (isset($_POST['mvt'])) ? 1 : 0;
    $s2 = (isset($_POST['s3'])) ? 1 : 0;
    $v2 = (isset($_POST['v2'])) ? 1 : 0;
    $r2 = (isset($_POST['r2'])) ? 1 : 0;
    $t2 = (isset($_POST['t2'])) ? 1 : 0;
    $rh2 = (isset($_POST['rh2'])) ? 1 : 0;
    $data3 = $_POST['data3'];

    $mvt3 = (isset($_POST['mvt3'])) ? 1: 0;
    $s3 = (isset($_POST['s3'])) ? 1 : 0;
    $v3 = (isset($_POST['v3'])) ? 1 : 0;
    $r3 = (isset($_POST['r3'])) ? 1 : 0;
    $t3 = (isset($_POST['t3'])) ? 1 : 0;
    $rh3 = (isset($_POST['rh3'])) ? 1 : 0;
    $data4 = $_POST['data4'];
    
    $sql = "INSERT INTO epart2
    (mvt, s2, v2, r2, t2, rh2, data3, mvt3, s3, v3, r3, t3, rh3, data4)
    VALUES
    ('$mvt', '$s2', '$v2', '$r2', '$t2', '$rh2', '$data3', '$mvt3', '$s3', '$v3', '$r3', '$t3', '$rh3', '$data4')";


   $res = query($sql);

/*================== PART 3 ===============*/

   $m4 = (isset($_POST['m4'])) ? 1 : 0;
   $g4 = (isset($_POST['g4'])) ? 1 : 0;
   $b4 = (isset($_POST['b4'])) ? 1 : 0;
   $k4 = (isset($_POST['k4'])) ? 1 : 0;

   $data5 = $_POST['data5'];
   $zahm = $_POST['zahm'];
   $erozia = $_POST['erozia'];
   $omos = $_POST['omos'];

   $m5 = (isset($_POST['m5'])) ? 1 : 0;
   $z5 = (isset($_POST['z5'])) ? 1 : 0;
   $k5 = (isset($_POST['k5'])) ? 1 : 0;
   $obz5 = (isset($_POST['obz5'])) ? 1 : 0; 
   $data6 = $_POST['data6'];
   // Aroba - davra, kur_aroba - tuhmshakl

   $aroba = (isset($_POST['aroba'])) ? 1 : 0;
   $kur_aroba = (isset($_POST['kur_aroba'])) ? 1 : 0;
   $sh3 = (isset($_POST['sh3'])) ? 1 : 0;
   $tan3 = (isset($_POST['tan3'])) ? 1 : 0;
   $nog3 = (isset($_POST['nog3'])) ? 1 : 0;
   $kush3 = (isset($_POST['kush3'])) ? 1 : 0;
   $guz3 = (isset($_POST['guz3'])) ? 1 : 0;
   $ruz_j = (isset($_POST['ruz_j'])) ? 1 : 0;

   $sh12 = (isset($_POST['sh12'])) ? 1 : 0;
   $dev12 = (isset($_POST['dev12'])) ? 1 : 0;
   $tan12 = (isset($_POST['tan12'])) ? 1 : 0;
   $nog12 = (isset($_POST['nog12'])) ? 1 : 0;
   $guz12 = (isset($_POST['guz12'])) ? 1 : 0;


   $m12 = (isset($_POST['m12'])) ? 1 : 0;
   $sur12 = (isset($_POST['sur12'])) ? 1 : 0;
   $var12 = (isset($_POST['var12'])) ? 1 : 0;
   $rang12 = (isset($_POST['rang12'])) ? 1 : 0;

   $zahm12 = (isset($_POST['zahm12'])) ? 1 : 0;
   $erozia12 = (isset($_POST['erozia12'])) ? 1 : 0;
   $guz13 = (isset($_POST['guz13'])) ? 1 : 0;
   $kizm13 = (isset($_POST['kizm13'])) ? 1 : 0;
   $nog13 = (isset($_POST['nog13'])) ? 1 : 0;
   $com13 = $_POST['com13'];

   $qa = (isset($_POST['qa'])) ? 1 : 0;
   $qb = (isset($_POST['qb'])) ? 1 : 0;
   $sit = (isset($_POST['sit'])) ? 1 : 0;
   $com14 = $_POST['qa'];
   $h12 = $_POST['h12'];

   global $sid;

   $sid = $_GET['id'];

   $sql = "INSERT INTO epart3(m4, g4, b4, k4, data5, zahm, erozia, omos,
                      m5, z5, k5, obz5, data6, aroba, kur_aroba, sh3, tan3, nog3, kush3,
                      guz3, ruz_j, sh12, dev12, tan12, nog12, guz12, m12, sur12, var12, rang12, 
                      zahm12, erozia12, guz13, kizm13, nog13, com13, qa, qb, sit, com14, h12)

                VALUES('$m4', '$g4', '$b4', '$k4', '$data5', '$zahm', '$erozia', '$omos',
                      '$m5', '$z5', '$k5', '$obz5', '$data6', '$aroba', '$kur_aroba', '$sh3', '$tan3', '$nog3', '$kush3',
                      '$guz3', '$ruz_j', '$sh12', '$dev12', '$tan12', '$nog12', '$guz12', '$m12', '$sur12', '$var12', '$rang12', 
                      '$zahm12', '$erozia12', '$guz13', '$kizm13', '$nog13', '$com13', '$qa', '$qb', '$sit', '$com14', '$h12')";

   $res = query($sql);

   function getLastIdAndSave()
   {


      $sid = $_GET['id'];

      $sql = "SELECT id FROM epart1 ORDER BY id DESC";
      $res = query($sql);
      $id1 = mysql_fetch_object($res);
      $epart1 = $id1->id;

      $sql = "SELECT id FROM epart2 ORDER BY id DESC";
      $res = query($sql);
      $id2 = mysql_fetch_object($res);
      $epart2 = $id2->id;

      $sql = "SELECT id FROM epart3 ORDER BY id DESC";
      $res = query($sql);
      $id3 = mysql_fetch_object($res);
      $epart3 = $id3->id;

      $sql = "INSERT INTO epart(epart1, epart2, epart3, sid)
                        VALUES('$epart1', '$epart2', '$epart3', '$sid')";

      query($sql);
   }

    getLastIdAndSave();   
    header('location: index.php?option=viewAll');
}