<?php
						include "libmail.php"; // вставляем файл с классом
						include "libmail_idna_convert.php";
						$username = $_POST['city'];
						$userphone = $_POST['country'];
						$m= new Mail(); // начинаем 
						$m->From( 'alexmarketingme@gmail.com' ); // от кого отправляется почта 
						$m->To( 'sevnikita@gmail.com' ); // кому адресованно
						$m->Subject( "Заявка с AlexMarketing" );
						$m->Body( "City: $username<br>Country: $userphone" ,"html" );    
						$m->Priority(3) ;    // приоритет письма
						$m->Send();    // а теперь пошла отправка
exit; 
						?>