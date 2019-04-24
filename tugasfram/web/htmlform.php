<?php 
error_reporting(0);
include "session.php"; 

if ($_GET['action'] == "logout") {
session_start();
session_destroy();
header('location: http://localhost/rahmat/web/form_login.php?message=Username Atau Password yang diinput salah');
   }?>
<head>
  <title>Beranda</title>
    <?php include "header.php"; ?>

</head>
<body class="body-beranda">
<div id="logo">
    <a href="/">
        <img src="media/hamster.png">
        <span>Belajar Web Design</span>
    </a>
</div>  
    <?php include "menu.php"; ?>
<center><h2><b>FORMULIR SISWA SMK TELKOM MEDAN</b></h2></center>
<br>
<table bgcolor="white" align="center" border =6 cellpadding="6" cellspacing="6">
    <form action="input_register.php" method="post">
    <tr>
    </tr>
    <tr>
        <td>Username : <input name="username" size="31"><br></td>
    </tr>
    <tr>
        <td>Password : <input name="password" size="31"><br></td>
    </tr>
    <tr>
        <td>Nama Lengkap : <input name="nama" size="31"><br></td>
    </tr>
    <tr>
        <td>Nama Panggilan : <input name="nama_panggilan" size="31"><br></td>
    </tr>
    <tr>
        <td>Alamat : <textarea rows="5" cols="25" name="alamat">alamat isi disini
        </textarea></td>
    </tr>
    <tr>
        <td>
            Tempat lahir : <input type="text" name="tempat_lahir"><br>
        </td>
        <td>Tanggal Lahir :
        <select name="tgl">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
        <option value="7">7</option>
        <option value="8">8</option>
        <option value="9">9</option>
        <option value="10">10</option>
        <option value="11">11</option>
        <option value="12">12</option>
        <option value="13">13</option>
        <option value="14">14</option>
        <option value="15">15</option>
        <option value="16">16</option>
        <option value="17">17</option>
        <option value="18">18</option>
        <option value="19">19</option>
        <option value="20">20</option>
        <option value="21">21</option>
        <option value="22">22</option>
        <option value="23">23</option>
        <option value="24">24</option>
        <option value="25">25</option>
        <option value="26">26</option>
        <option value="27">27</option>
        <option value="28">28</option>
        <option value="29">29</option>
        <option value="30">30</option>
        <option value="31">31</option>
        </select>
        Bulan <select name="bln">
        <option value="Januari">Januari</option>
        <option value="Februari">Februari</option>
        <option value="Maret">Maret</option>
        <option value="April">April</option>
        <option value="Mei">Mei</option>
        <option value="Juni">Juni</option>
        <option value="Juli">Juli</option>
        <option value="Agustus">Agustus</option>
        <option value="September">September</option>
        <option value="Oktober">Oktober</option>
        <option value="November">November</option>
        <option value="Desember">Desember</option>
        </select>
        Tahun <Select name="thn">
        <option value="">1990</option>
        <option value="">1991</option>
        <option value="">1992</option>
        <option value="">1993</option>
        <option value="">1994</option>
        <option value="">1995</option>
        <option value="">1996</option>
        <option value="">1997</option>
        <option value="">1998</option>
        <option value="">1999</option>
        <option value="">2000</option>
        <option value="">2001</option>
        <option value="">2002</option>
        <option value="">2003</option>
        <option value="">2004</option>
        <option value="">2005</option>
        <option value="">2006</option>
        <option value="">2007</option>
        <option value="">2008</option>
        <option value="">2009</option>
        <option value="">2010</option>
        <option value="">2011</option>
        <option value="">2012</option>
        <option value="">2013</option>
        <option value="">2014</option>
        <option value="">2015</option> 
        <option value="2016">2016</option>
        <option value="2017">2017</option>
        <option value="2018">2018</option>
        </select></td>
    </tr>
    <tr>
        <td>Jenis Kelamin : 
            <input type="radio" name="jenis_kelamin" value="l">Laki laki
            <input type="radio" name="jenis_kelamin" value="p">Perempuan<br></td>
    </tr>
    <tr>
    <tr>
    <td>
            Status dalam keluarga : <input type="text" name="statuskeluarga" size="31">
    </tr>
    <tr>
        <td>Agama :<br>
            <input name="agama" type="checkbox" value="Islam">Islam<br>
            <input name="agama" type="checkbox" value="Kristen">Kristen<br>
            <input name="agama" type="checkbox" value="Katholik">Katholik<br>
            <input name="agama" type="checkbox" value="Buddha">Buddha<br>
            <input name="agama" type="checkbox" value="Hindu">Hindu<br>
            <input name="agama" type="checkbox" value="Kong Hu Cu">Kong Hu Cu<br>
            <input name="agama" type="checkbox" value="Dan Lain Lain">Dan Lain Lain<br></td></tr>
    </tr>
    
    <tr>
        <td>Mata Pelajaran : <input type="text" name="mata_pelajaran" size="31"></td>
    </tr>
    <tr>
        <td>Sahabat : <input type="text" name="sahabat" size="31"></td>
    </tr>
    <tr><td>
Asal sekolah :    
<input type="text" name="asal_sekolah" size="35">
</td></tr>
<tr><td>
Kritik : 
    <textarea rows="5" cols="25" name="kritik" placeholder="Masukkan keluh kesah hidup anda disini"></textarea></td></tr>
<tr><td colspan="2" align="center">
<input type="submit" value="Proses">&nbsp&nbsp&nbsp&nbsp&nbsp
<input type="reset" value="Batal">
</form>
</tr></td>
</table>
</body>
</html>