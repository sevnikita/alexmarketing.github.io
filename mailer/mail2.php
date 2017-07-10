<?php
						include "libmail.php"; // вставляем файл с классом
						include "libmail_idna_convert.php";
						$email = $_POST['email'];
						$m= new Mail(); // начинаем 
						$m->From( 'alexmarketingme@gmail.com' ); // от кого отправляется почта 
						$m->To( 'sevnikita@gmail.com' ); // кому адресованно
						$m->Subject( "Запрос pdf" );
						$m->Body( "Email: $email" ,"html" );    
						$m->Priority(3) ;    // приоритет письма
						$m->Send();    // а теперь пошла отправка
exit; 
						?>