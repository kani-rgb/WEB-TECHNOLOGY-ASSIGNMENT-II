<?php
require 'config.php';
$id=(int)($_POST['id']??0); $name=trim($_POST['name']??''); $roll=trim($_POST['roll_number']??''); $email=trim($_POST['email']??''); $course=trim($_POST['course']??'');
if($name===''||$roll===''||$course==='') die('Required fields are missing. <a href="javascript:history.back()">Back</a>');
if($id){$st=$conn->prepare('UPDATE students SET name=?,roll_number=?,email=?,course=? WHERE id=?');$st->bind_param('ssssi',$name,$roll,$email,$course,$id);$st->execute();} else {$st=$conn->prepare('INSERT INTO students(name,roll_number,email,course) VALUES(?,?,?,?)');$st->bind_param('ssss',$name,$roll,$email,$course);$st->execute();$id=$conn->insert_id;}
if(isset($_FILES['document'])&&$_FILES['document']['error']===UPLOAD_ERR_OK){$f=$_FILES['document']; if($f['size']>2*1024*1024) die('File exceeds 2 MB.'); $allowed=['image/jpeg'=>'jpg','image/png'=>'png','application/pdf'=>'pdf']; if(!isset($allowed[$f['type']])) die('Only JPG, PNG and PDF are allowed.'); $ext=$allowed[$f['type']]; $safe=bin2hex(random_bytes(8)).'.'.$ext; $dir=__DIR__.'/uploads'; if(!is_dir($dir)) mkdir($dir,0755,true); if(!move_uploaded_file($f['tmp_name'],$dir.'/'.$safe)) die('Upload failed.'); $path='uploads/'.$safe; $st=$conn->prepare('INSERT INTO student_files(student_id,file_path,file_type,original_name) VALUES(?,?,?,?)');$st->bind_param('isss',$id,$path,$f['type'],$f['name']);$st->execute();}
header('Location: view.php?id='.$id);
?>
