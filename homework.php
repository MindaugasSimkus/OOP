<?php

include "messages.php";
include "cars.php";

$Audi = new sportscar ("Audi", "S4", "2013-05-29", 1322, 3, 55, 280, 10, 7.6);
$BMW = new sportscar ("BMW", "M4", "2013-04-09", 1496, 5, 50, 295, 10.5, 7.2);
$Ferrari = new sportscar ("Ferrari", "Spider", "2016-12-28", 1208, 2, 60, 310, 14, 6.9);


showa($Audi);

$Audi->maxSpeed();
$Audi->age();
$Audi->weight();
$Audi->travelDistance();
$Audi->to100();

showa($BMW);

$BMW->maxSpeed();
$BMW->age();
$BMW->weight();
$BMW->travelDistance();
$BMW->to100();

showa($Ferrari);

$Ferrari->maxSpeed();
$Ferrari->age();
$Ferrari->weight();
$Ferrari->travelDistance();
$Ferrari->to100();

$Tesla = new electriccar ("Tesla", "Model S", "2016-04-17", 1926, 7, 0, 220, 0, 6, 700);
$Toyota = new electriccar ("Toyota", "Prius", "2014-04-09", 1736, 5, 30, 165, 3, 8, 120);
$eGolf = new electriccar ("Volkswagen", "eGolf", "2017-02-18", 1639, 1, 0, 180, 0, 7, 400);

showa($Tesla);

$Tesla->maxSpeed();
$Tesla->age();
$Tesla->weight();
$Tesla->travelDistance();
$Tesla->chargeTime();

showa($Toyota);

$Toyota->maxSpeed();
$Toyota->age();
$Toyota->weight();
$Toyota->travelDistance();
$Toyota->chargeTime();

showa($eGolf);

$eGolf->maxSpeed();
$eGolf->age();
$eGolf->weight();
$eGolf->travelDistance();
$eGolf->chargeTime();

$Man = new tanker ("MAN", "380", "2008-07-01", 9621, 2, 180, 150, 16, 12000);
$Volvo = new tanker ("Volvo", "T800", "2015-05-09", 8200, 6, 220, 190, 15.6, 15000);
$Zyl = new tanker ("Lada", "ZYL", "1979-02-14", 11253, 1, 100, 95, 32.6, 7000);


showa($Man);

$Man->maxSpeed();
$Man->age();
$Man->weight();
$Man->travelDistance();
$Man->tanker();

showa($Volvo);

$Volvo->maxSpeed();
$Volvo->age();
$Volvo->weight();
$Volvo->travelDistance();
$Volvo->tanker();

showa($Zyl);

$Zyl->maxSpeed();
$Zyl->age();
$Zyl->weight();
$Zyl->travelDistance();
$Zyl->tanker();








// homework car make model weight dateof manufacture an more 3      methods atleast 4  and subclasses sportscar attribute time to 100kmph, tanker volume of the tank, electric car charge time, travel distance and to create 3 objects each of extended classes and put them into array and show on a display