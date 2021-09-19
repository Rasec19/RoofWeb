<?php

    if (isset($_POST['btnSubmit'])) {
        if (!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['phone']) && !empty($_POST['msg'])) {
            
            $name = $_POST['name'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];
            $msg = $_POST['msg'];

            $sendTo = 'rasec.camacho19@gmail.com';
            $emailSubject = "Nuevo Mensaje: $subject";
            $emailBody = "Haz recibido un nuevo mensaje . \n Nombre: $name \n Correo: $email \n Mensaje: $msg";
            $header = "De: $email";

            @mail($sendTo, $emailSubject, $emailBody, $header);
        }
    }

?>