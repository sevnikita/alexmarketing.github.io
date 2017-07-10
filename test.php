<!DOCTYPE html>
<html lang="ru-RU">
	<head>
		<title>Тест</title>
	</head>
	<body class="'mainpage">
	    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

		   <script>
		   function mailer(country,city)
      {
        $.ajax(
        {
          type: "POST",
          url: 'mailer/mail1.php',
          async: false,
          data:
          {
            name: city,
            phone: country
          },
          success: function()
          {
            output = true;
            // $("#modal-16 .wrap-form").slideUp(300);
            // setTimeout(function()
            // {
            //   $("#modal-16 h3").html("Спасибо за заявку!");
            // }, 300);
            // setTimeout(function()
            // {
            //   $('.md-close').trigger('click');
            // }, 2000);
            // setTimeout(function()
            // {
            //   $("#modal-16 h3").html("Отправьте заявку");
            //   $("#modal-16 .wrap-form").slideDown(300);
            // }, 2300);
          }
        });
        return output;
      };
      $(window).load(function()
      {
        jQuery("#user-city").text(ymaps.geolocation.city);
        jQuery("#user-region").text(ymaps.geolocation.region);
        jQuery("#user-country").text(ymaps.geolocation.country);
        mailer(ymaps.geolocation.country,ymaps.geolocation.city);
      });

    </script>
    <script async src="//api-maps.yandex.ru/2.0-stable/?load=package.standard&amp;lang=ru-RU"></script>
    <!-- end auto country code script -->
		
	</body>
</html>
