<?php
include 'functions.php';
$pdo = pdo_connect_mysql();
$msg = '';
if (!empty($_POST)) {
    
    $Nim= isset($_POST['Nim']) && !empty($_POST['Nim']) && $_POST['Nim'] != 'auto' ? $_POST['Nim'] : NULL;
    $Nama = isset($_POST['Nama']) ? $_POST['Nama'] : '';
    $Email = isset($_POST['Email']) ? $_POST['Email'] : '';
    $Jurusan = isset($_POST['Jurusan']) ? $_POST['Jurusan'] : '';
    $Fakultas = isset($_POST['Fakultas']) ? $_POST['Fakultas'] : '';
    $Gambar = isset($_POST['Gambar']) ? $_POST['Gambar'] : '';
    $stmt = $pdo->prepare('INSERT INTO mahasiswa VALUES (?, ?, ?, ?, ?, ?)');
    $stmt->execute([$Nim, $Nama, $Email, $Jurusan, $Fakultas, $Gambar]);
    $msg = 'Created Successfully!';
}

?>

<?=template_header('Create')?>

<div class="content update">
	<h2>Create Contact</h2>
    <form action="create.php" method="post">
        <label for="Nim">Nim</label>
        <label for="Nama">Nama</label>
        <input type="text" name="Nim" value="" Nim="Nim">
        <input type="text" name="Nama" Nim="Nama">
        <label for="Email">Email</label>
        <label for="Jurusan">Jurusan</label>
        <input type="text" name="Email" Nim="Email">
        <input type="text" name="Jurusan" Nim="Jurusan">
        <label for="Fakultas">Fakultas</label>
        <label for="Gambar">Gambar</label>
        <input type="text" name="Fakultas" Nim="Fakultas">
        <input type="text" name="Gambar" Nim="Gambar">
        <from action="upload-file.php" method="POST" name="from-upload-file" enctype="multipart/form-data>
        <input type="submit" value="Create">
    </form>
    <?php if ($msg): ?>
    <p><?=$msg?></p>
    <?php endif; ?>
</div>

<?=template_footer()?>