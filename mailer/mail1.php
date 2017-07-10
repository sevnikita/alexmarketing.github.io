<?php
						include "libmail.php"; // вставляем файл с классом
						include "libmail_idna_convert.php";
						$username = $_POST['name'];
						$userphone = $_POST['phone'];
						$m= new Mail(); // начинаем 
						$m->From( 'alexmarketingme@gmail.com' ); // от кого отправляется почта 
						$m->To( 'alexmarketingme@gmail.com' ); // кому адресованно
						$m->Subject( "Заявка с AlexMarketing" );
						$m->Body( "Пользователь: $username<br>Номер телефона: $userphone <br> Email: $email" ,"html" );    
						$m->Priority(3) ;    // приоритет письма
						$m->Send();    // а теперь пошла отправка
exit; 
						?>