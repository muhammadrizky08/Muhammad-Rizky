<?php

include 'functions.php';
$pdo = pdo_connect_mysql();
$msg = '';

if (isset($_GET['Nim'])) {
    // Pilih yang akan dihapus
    $stmt = $pdo->prepare('SELECT * FROM mahasiswa WHERE Nim = ?');
    $stmt->execute([$_GET['Nim']]);
    $contact = $stmt->fetch(PDO::FETCH_ASSOC);
    if (!$contact) {
        exit('Contact doesn\'t exist with that Nim!');
    }
    
    if (isset($_GET['confirm'])) {
        if ($_GET['confirm'] == 'yes') {
            
            $stmt = $pdo->prepare('DELETE FROM mahasiswa WHERE Nim = ?');
            $stmt->execute([$_GET['Nim']]);
            $msg = 'You have deleted the contact!';
        } else {
            
            header('Location: read.php');
            exit;
        }
    }
} else {
    exit('No Nim specified!');
}
?>

<?=template_header('Delete')?>

<div class="content delete">
	<h2>Delete Contact #<?=$contact['Nim']?></h2>
    <?php if ($msg): ?>
    <p><?=$msg?></p>
    <?php else: ?>
	<p>Are you sure you want to delete contact #<?=$contact['Nim']?>?</p>
    <div class="yesno">
        <a href="delete.php?Nim=<?=$contact['Nim']?>&confirm=yes">Yes</a>
        <a href="delete.php?Nim=<?=$contact['Nim']?>&confirm=no">No</a>
    </div>
    <?php endif; ?>
</div>

<?=template_footer()?>