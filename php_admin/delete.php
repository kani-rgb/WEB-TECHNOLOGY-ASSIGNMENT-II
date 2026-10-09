<?php require 'config.php'; $id=(int)($_GET['id']??0); $st=$conn->prepare('DELETE FROM students WHERE id=?');$st->bind_param('i',$id);$st->execute();header('Location: index.php'); ?>
