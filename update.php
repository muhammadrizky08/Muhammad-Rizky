<?php

include 'functions.php';
$pdo = pdo_connect_mysql();
$msg = '';
if (isset($_GET['Nim'])) {
    if (!empty($_POST)) {
        $Nim = isset($_POST['Nim']) ? $_POST['Nim'] : NULL;
        $Nama = isset($_POST['Nama']) ? $_POST['Nama'] : '';
        $Email = isset($_POST['Email']) ? $_POST['Email'] : '';
        $Jurusan = isset($_POST['Jurusan']) ? $_POST['Jurusan'] : '';
        $Fakultas = isset($_POST['Fakultas']) ? $_POST['Fakultas'] : '';
        $Gambar = isset($_POST['Gambar']) ? $_POST['Gambar'] : '';
        
        // Update the record
        $stmt = $pdo->prepare('UPDATE mahasiswa SET Nim = ?, Nama = ?, Email = ?, Jurusan = ?, Fakultas = ?, Gambar = ? WHERE Nim = ?');
        $stmt->execute([$Nim, $Nama, $Email, $Jurusan, $Fakultas, $Gambar, $_GET['Nim']]);
        $msg = 'Updated Successfully!';
    }
    // Get the contact from the contacts table
    $stmt = $pdo->prepare('SELECT * FROM mahasiswa WHERE Nim = ?');
    $stmt->execute([$_GET['Nim']]);
    $contact = $stmt->fetch(PDO::FETCH_ASSOC);
    if (!$contact) {
        exit('Contact doesn\'t exist with that Nim!');
    }
} else {
    exit('No Nim specified!');
}
?>

<?=template_header('Read')?>

<div class="content update">
	<h2>Update Contact #<?=$contact['Nim']?></h2>
    <form action="update.php?Nim=<?=$contact['Nim']?>" method="post">
        <label for="Nim">Nim</label>
        <label for="Nama">Nama</label>

        <input type="text" name="Nim" value="<?=$contact['Nim']?>" Nim="Nim">
        <input type="text" name="Nama" value="<?=$contact['Nama']?>" Nim="Nama">

        <label for="Email">Email</label>
        <label for="Jurusan">Jurusan</label>

        <input type="text" name="Email" value="<?=$contact['Email']?>" Nim="Email">
        <input type="text" name="Jurusan" value="<?=$contact['Jurusan']?>" Nim="Jurusan">

        <label for="Fakultas">Fakultas</label>
        <label for="Gambar">Gambar</label>
        <input type="text" name="Fakultas" value="<?=$contact['Fakultas']?>" Nim="title">
        <input type="text" name="Gambar" value="<?=$contact['Gambar']?>" Nim="title">
        <input type="submit" value="Update">
    </form>
    <?php if ($msg): ?>
    <p><?=$msg?></p>
    <?php endif; ?>
</div>

<?=template_footer()?>