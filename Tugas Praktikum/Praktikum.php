<!DOCTYPE HTML>
<html>
<head>
<title>Praktikum</title>
</head>
<body>
      <tr>
        <td height="40"><strong><font>Daftar Siswa</font></strong></td>
      </tr>
      <tr>
        <td>
            <tr>
              <td width="113">NIS</td>
              <td width="11">:</td>
              <td width="237"><input name="NIS" type="text" id="nim" size="12" maxlength="12"></td>
            </tr>
            <tr>
              <td>Nama Depan</td>
              <td>:</td>
              <td><input name="Nama Depan" type="text" id="nama" size="30" maxlength="30"></td>
            </tr>
            <tr>
              <td>Nama Belakang</td>
              <td>:</td>
              <td><input name="Nama Belakang" type="text" id="nama" size="30" maxlength="30"></td>
            </tr>
            <tr>
              <td>Tempat Lahir</td>
              <td>:</td>
              <td><input name="Tempat Lahir" type="text" id="tempat_lahir" size="30" maxlength="30"></td>
            </tr>
            <tr>
              <td>Tanggal Lahir</td>
              <td>:</td>
              <td><select name="Tanggal Lahir" size="1" id="tgl">
              <?
		     for ($i=1;$i<=31;$i++)
			 {
			   echo "<option value=".$i.">".$i."</option>";
			 }
		  ?>
                </select>
                <select name="bln" size="1" id="bln">
                
              <?
		     $bulan=array("","Januari","Pebruari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember");
		     for ($i=1;$i<=12;$i++)
			 {
			   echo "<option value=".$i.">".$bulan[$i]."</option>";
			 }
		  ?>
          </select>
                <select name="thn" size="1" id="thn">
                <?
		     for ($i=1985;$i<=2000;$i++)
			 {
			   echo "<option value=".$i.">".$i."</option>";
			 }
		  ?>
              </select></td>
            <tr>
              <td>Agama</td>
              <td>:</td>
              <td><input name="Agama" type="text" id="nama" size="30" maxlength="30"></td>
            </tr>
            <tr>
              <td>Jenis Kelamin</td>
              <td>:</td>
              <td><input name="jenis_kelamin" type="radio" value="L" checked>
                Laki-laki
                <input name="jenis_kelamin" type="radio" value="P">
                Perempuan </td>
            </tr>
            <tr>
              <td>Email</td>
              <td>:</td>
              <td><input name="nama" type="text" id="nama" size="30" maxlength="30"></td>
            </tr>
            <?
		     for ($i=1;$i<=10;$i++)
			 {
			   echo "<option value=".$i.">".$i."</option>";
			 }
		  ?>
                </select>
                <select name="Email" size="1" id="email">
            </tr>
            <tr>
              <td>Telefon</td>
              <td>:</td>
              <td><input name="Telefon" type="text" id="nama" size="30" maxlength="30"></td>
            </tr>
            <?
		     for ($i=1;$i<=10;$i++)
			 {
			   echo "<option value=".$i.">".$i."</option>";
			 }
		  ?>
                </select>
                <select name="Email" size="1" id="email">
            </tr>
            <tr>
              <td>Facebook</td>
              <td>:</td>
              <td><textarea name="Facebook" cols="30" rows="5" id="alamat"></textarea></td>
            </tr>
            <tr>
              <td>WebSite</td>
              <td>:</td>
              <td><textarea name="WebSite" cols="30" rows="5" id="alamat"></textarea></td>
            </tr>
            <tr>
              <td>Alamat</td>
              <td>:</td>
              <td><textarea name="alamat" cols="30" rows="5" id="alamat"></textarea></td>
            </tr>
            <tr height = "45">
            <td> </td>
            <td>Jurusan</td>
            <td><select name = "Jurusan">
                <option value="Teknik Komputer Jaringan">Teknik Komputer Jaringan
                <option value="Rekayasa Perangkat Lunak">Rekayasa Perangkat Lunak
            </select></td>
            <tr>
              <td colspan="3"><input name="fok" type="submit" id="fok" value="OK">
                <input name="fulang" type="reset" id="fulang" value="Ulangi">
                <input name="fulang2" type="button" id="fulang2" value="Batal" onClick="javascript:history.back()"></td>
            </tr>
            <td>
            <td>Kelas</td>
            <select name = "Kelas" id="Kelas">
                <option value="X">X</option>
                <option value="XI">XI</option>
                <option value="XII">XII</option>
            </select></td>
            <tr>
              <td colspan="3"><input name="fok" type="submit" id="fok" value="OK">
                <input name="fulang" type="reset" id="fulang" value="Ulangi">
                <input name="fulang1" type="reset" id="fulang" value="Ulangi">
                <input name="fulang2" type="button" id="fulang2" value="Batal" onClick="javascript:history.back()"></td>
            </tr>
        </table>
        </td>
      </tr>
    </table>
  </form>
</body>
</html>