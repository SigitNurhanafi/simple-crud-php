
<center>
  <div id="judul">Tambah Mahasiswa</div>
</center>
<hr>
<?php
if(isset($_POST['submit'])){

  $name = $_FILES['gambar']['name'];
  $asal = $_FILES['gambar']['tmp_name'];

  move_uploaded_file($asal, 'img/'. $name);

   }
?>

  <form enctype="multipart/form-data" method="post" action="proses_tambah_mahasiswa.php">
    <table width="auto" border="0">
      <tr align=left>
        <th width="117" style=row><label>NIM</label></th>
          <td width="14"><label>:</label></td>
          <td width="145"><input type="text" class="textbox" name="nim" required></td>
      </tr>
      <tr align=left>
        <th><label>Nama</label></th>
        <td><label>:</label></td>
        <td><input type="text" class="textbox" name="nama" required></td>
     </tr>
     <tr align=left>
       <th><label>TTL</label></th>
       <td><label>:</label></td>
       <td><input type="text" class="textbox" name="ttl" required></td>
    </tr>
    <tr align=left>
      <th><label>Tgl_Lahir</label></th>
      <td><label>:</label></td>
      <td><input type="date" class="textbox" name="tgl_lahir" required></td>
   </tr>
   <tr align=left>
     <th><label>Alamat</label></th>
     <td><label>:</label></td>
     <td><textarea type="textarea" class="textbox" name="alamat" required></textarea></td>
  </tr>
  <tr align=left>
    <th><label>Foto</label></th>
    <td><label>:</label></td>
    <td><input type="file" class="textbox" name="gambar" required></td>
 </tr>
     <th colspan="3">
     </th>
         <tr>
           <th colspan="2">
             <input type="submit" value="Submit" class="tombol">
             <input type="reset" value="Reset" class="tombol">
           </th>
         </tr>

   </table>
 </form>
