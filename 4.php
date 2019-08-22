<?php 
$array = [ 
	"ru"  =>  [ "понедельник",
                     "вторник",
                     "среда",
		     "четверг", 
		     "пятница", 
                     "суббота", 
		     "воскресение"
                    ],
    "en"  =>  [ "monday", 
		"tuesday", 
		"wednesday", 
		"thursday", 
		"friday", 
		"saturday", 
		"sunday"
                   ]
                
                ];

foreach($array as $lang =>  $myarr)
{

foreach($array[$lang] as $day => $myarr2)
{
  
  ?>

<a href="?lang=<?php echo $lang; ?>&day=<?php echo $day; ?>">Язык =<?php echo $lang; ?> день =<?php echo $day; ?> . Нажать для передачи в url</a><br>

<?php   
}
} 
echo 'Вы выбрали язык - ';
if(isset($_GET['lang']) != '') { print_r ($_GET["lang"]); };
echo 'Вы выбрали номер дня - ';
if(isset($_GET['day']) != '') { print_r ($_GET["day"]); }?>
