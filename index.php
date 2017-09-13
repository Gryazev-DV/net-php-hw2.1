<?php 
  $JSONfile = file_get_contents(__DIR__ . '/phonebook.json');
  $data = json_decode($JSONfile, true);
  $counter = 1;

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Лучшие рестораны Москывпо версии TripAdvisor</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<table>
		<tr>
		  <th></th>
			<th>Название кафе</th>
			<th>Адрес</th>
			<th>Телефон</th>
		</tr>
		<?php foreach ($data as $cafe) { ?>
      <tr>
        <td><?php echo $counter++ ?></td>
      	<td><a href="<?php echo $cafe['site'] ?>" target="_blank"> <?php echo $cafe['nameCafe']?></a></td>
      	<td><?php echo $cafe['address']?></td>
      	<td>
      	  <a href="tel:<?php echo $cafe['phoneNumber']?>">
      	    <?php echo $cafe['phoneNumber']?>
      	  </a>
      	</td>
      </tr>
		<?php } ?>
	</table>
</body>
</html>