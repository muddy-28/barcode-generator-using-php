<?php
require('code128.php');

function readCSV($csvFile)
{
    $file_handle = fopen($csvFile, 'r');
    while (!feof($file_handle) ) 
        {
            $line_of_text[] = fgetcsv($file_handle, 1024);
        }
    fclose($file_handle);
    return $line_of_text;
}
$csvFile="sheet3.csv";
$data=readCSV($csvFile);
//echo "<pre>";
//var_dump($data);
$index=$_GET["index"];
$code1=$data[$index+1][0];
$title1=$data[$index+1][1];
$price1= $data[$index+1][2];
//$variant1= $data[$index+1][3];
$variant1= "Green";


$code2=$data[$index+2][0];
$title2=$data[$index+2][1];
$price2=$data[$index+2][2];


$code3=$data[$index+3][0];
$title3=$data[$index+3][1];
$price3= $data[$index+3][2];


$code4=$data[$index+4][0];
$title4=$data[$index+4][1];
$price4= $data[$index+4][2];

$code5=$data[$index+5][0];
$title5=$data[$index+5][1];
$price5= $data[$index+5][2];

$code6=$data[$index+6][0];
$title6=$data[$index+6][1];
$price6= $data[$index+6][2];


$code7 =$data[$index+7][0];
$title7=$data[$index+7][1];
$price7=$data[$index+7][2];



$code8 =$data[$index+8][0];
$title8=$data[$index+8][1];
$price8= $data[$index+8][2];


$pdf=new PDF_Code128();
$pdf->AddPage();
$pdf->SetFont('Arial','',6);




$pdf->SetFont('Arial','',9);
$pdf->SetXY(8,10);
$pdf->Write(0,'Hussain Mall');    
$pdf->SetFont('Arial','',6);
$pdf->SetXY(9,15);
$pdf->Write(0,$title1);
$pdf->Code128(9,17,$code1,20,10);
$pdf->SetXY(9,25);
$pdf->Write(7,$code1);
$pdf->SetXY(9,27);
$pdf->Write(7,$variant1);
$pdf->SetXY(9,30.5);
$pdf->Write(5,$price1.".00 PKR");

//A set
$pdf->SetFont('Arial','',9);
$pdf->SetXY(37,10);
$pdf->Write(0,'Hussain Mall');
$pdf->SetFont('Arial','',6);
$pdf->SetXY(38,15);
$pdf->Write(0,$title1);
$pdf->Code128(38,17,$code1,20,10);
$pdf->SetXY(38,25);
$pdf->Write(7,$code1);
$pdf->SetXY(38,27);
$pdf->Write(7,$variant1);
$pdf->SetXY(38,30.5);
$pdf->Write(5,$price1.".00 PKR");



$pdf->SetFont('Arial','',9);
$pdf->SetXY(66,10);
$pdf->Write(0,'Hussain Mall');
$pdf->SetFont('Arial','',6);
$pdf->SetXY(66,15);
$pdf->Write(0,$title1);
$pdf->Code128(66,17,$code1,20,10);
$pdf->SetXY(66,25);
$pdf->Write(7,$code1);
$pdf->SetXY(66,27);
$pdf->Write(7,$variant1);
$pdf->SetXY(66,30.5);
$pdf->Write(5,$price1.".00 PKR");

$pdf->SetFont('Arial','',9);
$pdf->SetXY(92,10);
$pdf->Write(0,'Hussain Mall');
$pdf->SetFont('Arial','',6);
$pdf->SetXY(92,15);
$pdf->Write(0,$title1);
$pdf->Code128(93,17,$code1,20,10);
$pdf->SetXY(95,25);
$pdf->Write(7,$code1);
$pdf->SetXY(94,27);
$pdf->Write(7,$variant1);
$pdf->SetXY(94,30.5);
$pdf->Write(5,$price1.".00 PKR");




$pdf->SetFont('Arial','',9);
$pdf->SetXY(122,10);
$pdf->Write(0,'Hussain Mall');
$pdf->SetFont('Arial','',6);


$code='HMA00183';
$pdf->SetXY(123,15);
$pdf->Write(0,$title1);
$pdf->Code128(123,17,$code1,20,10);
$pdf->SetXY(125,25);
$pdf->Write(7,$code1);
$pdf->SetXY(124,29);
$pdf->Write(5,$price1.".00 PKR");

$pdf->SetFont('Arial','',9);
$pdf->SetXY(152,10);
$pdf->Write(0,'Hussain Mall');
$pdf->SetFont('Arial','',6);

$pdf->SetXY(153,15);
$pdf->Write(0,$title1);
$pdf->Code128(153,17,$code1,20,10);
$pdf->SetXY(153,25);
$pdf->Write(7,$code1);
$pdf->SetXY(153,29);
$pdf->Write(5,$price1.".00 PKR");

$pdf->SetFont('Arial','',8);
$pdf->SetXY(180.5,10);
$pdf->Write(0,'Hussain Mall');
$pdf->SetFont('Arial','',6);


$code='HMA00183';
$pdf->SetXY(183,15);
$pdf->Write(0,$title1);
$pdf->Code128(183,17,$code1,20,10);
$pdf->SetXY(184,25);
$pdf->Write(7,$code1);
$pdf->SetXY(183,29);
$pdf->Write(5,$price1.".00 PKR");







//row 2


//A set
$pdf->SetFont('Arial','',8);
$pdf->SetXY(9,40);
$pdf->Write(0,'Hussain Mall');
$pdf->SetFont('Arial','',6);
$pdf->SetXY(9,45);
$pdf->Write(0,$title2);
$pdf->Code128(9,47,$code2,20,10);
$pdf->SetXY(11,55);
$pdf->Write(7,$code2);
$pdf->SetXY(10,59);
$pdf->Write(5,$price2.".00 PKR");
//A set

$pdf->SetFont('Arial','',8);
$pdf->SetXY(38,40);
$pdf->Write(0,'Hussain Mall');
$pdf->SetFont('Arial','',6);

$pdf->SetXY(38,45);
$pdf->Write(0,$title2);
$pdf->Code128(38,47,$code2,20,10);
$pdf->SetXY(38,55);
$pdf->Write(7,$code2);
$pdf->SetXY(38,59);
$pdf->Write(5,$price2.".00 PKR");


$pdf->SetFont('Arial','',8);
$pdf->SetXY(66,40);
$pdf->Write(0,'Hussain Mall');
$pdf->SetFont('Arial','',6);

$pdf->SetXY(66,45);
$pdf->Write(0,$title2);
$pdf->Code128(66,47,$code2,20,10);
$pdf->SetXY(66,55);
$pdf->Write(7,$code2);
$pdf->SetXY(66,59);
$pdf->Write(5,$price2." .00 PKR");

$pdf->SetFont('Arial','',8);
$pdf->SetXY(93,40);
$pdf->Write(0,'Hussain Mall');
$pdf->SetFont('Arial','',6);


$pdf->SetXY(93,45);
$pdf->Write(0,$title2);
$pdf->Code128(93,47,$code2,20,10);
$pdf->SetXY(93,55);
$pdf->Write(7,$code2);

$pdf->SetXY(93,59);
$pdf->Write(5,$price2." .00 PKR");


$pdf->SetFont('Arial','',8);
$pdf->SetXY(123,40);
$pdf->Write(0,'Hussain Mall');
$pdf->SetFont('Arial','',6);


$pdf->SetXY(123,45);
$pdf->Write(0,$title2);
$pdf->Code128(123,47,$code2,20,10);
$pdf->SetXY(123,55);
$pdf->Write(7,$code2);

$pdf->SetXY(123,59);
$pdf->Write(5,$price2." .00 PKR");

$pdf->SetFont('Arial','',8);
$pdf->SetXY(153,40);
$pdf->Write(0,'Hussain Mall');
$pdf->SetFont('Arial','',6);


$pdf->SetXY(153,45);
$pdf->Write(0,$title2);
$pdf->Code128(153,47,$code2,20,10);
$pdf->SetXY(153,55);
$pdf->Write(7,$code2);

$pdf->SetXY(153,59);
$pdf->Write(5,$price2." .00 PKR");

$pdf->SetFont('Arial','',8);
$pdf->SetXY(181,40);
$pdf->Write(0,'Hussain Mall');
$pdf->SetFont('Arial','',6);


$pdf->SetXY(183,45);
$pdf->Write(0,$title2);
$pdf->Code128(183,47,$code2,20,10);
$pdf->SetXY(183,55);
$pdf->Write(7,$code2);
$pdf->SetXY(183,59);
$pdf->Write(5,$price2." .00 PKR");







//row 3


//A set
$pdf->SetFont('Arial','',8);
$pdf->SetXY(9,70);
$pdf->Write(0,'Hussain Mall');
$pdf->SetFont('Arial','',6);
$pdf->SetXY(9,75);
$pdf->Write(0,$title3);
$pdf->Code128(9,77,$code3,20,10);
$pdf->SetXY(11,85);
$pdf->Write(7,$code3);
$pdf->SetXY(10,89);
$pdf->Write(5,$price3.".00 PKR");
//A set

$pdf->SetFont('Arial','',8);
$pdf->SetXY(38,70);
$pdf->Write(0,'Hussain Mall');
$pdf->SetFont('Arial','',6);

$pdf->SetXY(38,75);
$pdf->Write(0,$title3);
$pdf->Code128(38,77,$code3,20,10);
$pdf->SetXY(38,85);
$pdf->Write(7,$code3);
$pdf->SetXY(38,89);
$pdf->Write(5,$price3.".00 PKR");


$pdf->SetFont('Arial','',8);
$pdf->SetXY(66,70);
$pdf->Write(0,'Hussain Mall');
$pdf->SetFont('Arial','',6);

$pdf->SetXY(66,75);
$pdf->Write(0,$title3);
$pdf->Code128(66,77,$code3,20,10);
$pdf->SetXY(66,85);
$pdf->Write(7,$code3);
$pdf->SetXY(66,89);
$pdf->Write(5,$price3." .00 PKR");

$pdf->SetFont('Arial','',8);
$pdf->SetXY(93,70);
$pdf->Write(0,'Hussain Mall');
$pdf->SetFont('Arial','',6);


$pdf->SetXY(93,75);
$pdf->Write(0,$title3);
$pdf->Code128(93,77,$code3,20,10);
$pdf->SetXY(93,85);
$pdf->Write(7,$code3);

$pdf->SetXY(93,89);
$pdf->Write(5,$price3." .00 PKR");


$pdf->SetFont('Arial','',8);
$pdf->SetXY(123,70);
$pdf->Write(0,'Hussain Mall');
$pdf->SetFont('Arial','',6);


$pdf->SetXY(123,75);
$pdf->Write(0,$title3);
$pdf->Code128(123,77,$code3,20,10);
$pdf->SetXY(123,85);
$pdf->Write(7,$code3);

$pdf->SetXY(123,89);
$pdf->Write(5,$price3." .00 PKR");

$pdf->SetFont('Arial','',8);
$pdf->SetXY(153,70);
$pdf->Write(0,'Hussain Mall');
$pdf->SetFont('Arial','',6);


$pdf->SetXY(153,75);
$pdf->Write(0,$title3);
$pdf->Code128(153,77,$code3,20,10);
$pdf->SetXY(153,85);
$pdf->Write(7,$code3);

$pdf->SetXY(153,89);
$pdf->Write(5,$price3." .00 PKR");

$pdf->SetFont('Arial','',8);
$pdf->SetXY(181,70);
$pdf->Write(0,'Hussain Mall');
$pdf->SetFont('Arial','',6);


$pdf->SetXY(183,75);
$pdf->Write(0,$title3);
$pdf->Code128(183,77,$code3,20,10);
$pdf->SetXY(183,85);
$pdf->Write(7,$code3);
$pdf->SetXY(183,89);
$pdf->Write(5,$price3." .00 PKR");





//row 4


//A set
$pdf->SetFont('Arial','',8);
$pdf->SetXY(9,105);
$pdf->Write(0,'Hussain Mall');
$pdf->SetFont('Arial','',6);
$pdf->SetXY(9,110);
$pdf->Write(0,$title4);
$pdf->Code128(9,112,$code4,20,10);
$pdf->SetXY(11,120);
$pdf->Write(7,$code4);
$pdf->SetXY(10,124);
$pdf->Write(5,$price4.".00 PKR");
//A set

$pdf->SetFont('Arial','',8);
$pdf->SetXY(38,105);
$pdf->Write(0,'Hussain Mall');
$pdf->SetFont('Arial','',6);

$pdf->SetXY(38,110);
$pdf->Write(0,$title4);
$pdf->Code128(38,112,$code4,20,10);
$pdf->SetXY(38,120);
$pdf->Write(7,$code4);
$pdf->SetXY(38,124);
$pdf->Write(5,$price4.".00 PKR");


$pdf->SetFont('Arial','',8);
$pdf->SetXY(66,105);
$pdf->Write(0,'Hussain Mall');
$pdf->SetFont('Arial','',6);

$pdf->SetXY(66,110);
$pdf->Write(0,$title4);
$pdf->Code128(66,112,$code4,20,10);
$pdf->SetXY(66,120);
$pdf->Write(7,$code4);
$pdf->SetXY(66,124);
$pdf->Write(5,$price4." .00 PKR");

$pdf->SetFont('Arial','',8);
$pdf->SetXY(93,105);
$pdf->Write(0,'Hussain Mall');
$pdf->SetFont('Arial','',6);


$pdf->SetXY(93,110);
$pdf->Write(0,$title4);
$pdf->Code128(93,112,$code4,20,10);
$pdf->SetXY(93,120);
$pdf->Write(7,$code4);

$pdf->SetXY(93,124);
$pdf->Write(5,$price4." .00 PKR");


$pdf->SetFont('Arial','',8);
$pdf->SetXY(123,105);
$pdf->Write(0,'Hussain Mall');
$pdf->SetFont('Arial','',6);


$pdf->SetXY(123,110);
$pdf->Write(0,$title4);
$pdf->Code128(123,112,$code4,20,10);
$pdf->SetXY(123,120);
$pdf->Write(7,$code4);

$pdf->SetXY(123,124);
$pdf->Write(5,$price4." .00 PKR");

$pdf->SetFont('Arial','',8);
$pdf->SetXY(153,105);
$pdf->Write(0,'Hussain Mall');
$pdf->SetFont('Arial','',6);


$pdf->SetXY(153,110);
$pdf->Write(0,$title4);
$pdf->Code128(153,112,$code4,20,10);
$pdf->SetXY(153,120);
$pdf->Write(7,$code4);

$pdf->SetXY(153,124);
$pdf->Write(5,$price4." .00 PKR");

$pdf->SetFont('Arial','',8);
$pdf->SetXY(181,105);
$pdf->Write(0,'Hussain Mall');
$pdf->SetFont('Arial','',6);


$pdf->SetXY(183,110);
$pdf->Write(0,$title4);
$pdf->Code128(183,112,$code4,20,10);
$pdf->SetXY(183,120);
$pdf->Write(7,$code4);
$pdf->SetXY(183,124);
$pdf->Write(5,$price4." .00 PKR");








//row 5


//A set
$pdf->SetFont('Arial','',8);
$pdf->SetXY(9,135);
$pdf->Write(0,'Hussain Mall');
$pdf->SetFont('Arial','',6);
$pdf->SetXY(9,140);
$pdf->Write(0,$title5);
$pdf->Code128(9,142,$code5,20,10);
$pdf->SetXY(11,150);
$pdf->Write(7,$code5);
$pdf->SetXY(10,153);
$pdf->Write(5,$price5.".00 PKR");
//A set

$pdf->SetFont('Arial','',8);
$pdf->SetXY(38,135);
$pdf->Write(0,'Hussain Mall');
$pdf->SetFont('Arial','',6);

$pdf->SetXY(38,140);
$pdf->Write(0,$title5);
$pdf->Code128(38,142,$code5,20,10);
$pdf->SetXY(38,150);
$pdf->Write(7,$code5);
$pdf->SetXY(38,153);
$pdf->Write(5,$price5.".00 PKR");


$pdf->SetFont('Arial','',8);
$pdf->SetXY(66,135);
$pdf->Write(0,'Hussain Mall');
$pdf->SetFont('Arial','',6);

$pdf->SetXY(66,140);
$pdf->Write(0,$title5);
$pdf->Code128(66,142,$code5,20,10);
$pdf->SetXY(66,150);
$pdf->Write(7,$code5);
$pdf->SetXY(66,154);
$pdf->Write(5,$price5." .00 PKR");

$pdf->SetFont('Arial','',8);
$pdf->SetXY(93,135);
$pdf->Write(0,'Hussain Mall');
$pdf->SetFont('Arial','',6);


$pdf->SetXY(93,140);
$pdf->Write(0,$title5);
$pdf->Code128(93,142,$code5,20,10);
$pdf->SetXY(93,150);
$pdf->Write(7,$code5);

$pdf->SetXY(93,154);
$pdf->Write(5,$price5." .00 PKR");


$pdf->SetFont('Arial','',8);
$pdf->SetXY(123,135);
$pdf->Write(0,'Hussain Mall');
$pdf->SetFont('Arial','',6);


$pdf->SetXY(123,140);
$pdf->Write(0,$title5);
$pdf->Code128(123,142,$code5,20,10);
$pdf->SetXY(123,150);
$pdf->Write(7,$code5);

$pdf->SetXY(123,154);
$pdf->Write(5,$price5." .00 PKR");

$pdf->SetFont('Arial','',8);
$pdf->SetXY(153,135);
$pdf->Write(0,'Hussain Mall');
$pdf->SetFont('Arial','',6);


$pdf->SetXY(153,140);
$pdf->Write(0,$title5);
$pdf->Code128(153,142,$code5,20,10);
$pdf->SetXY(153,150);
$pdf->Write(7,$code5);

$pdf->SetXY(153,154);
$pdf->Write(5,$price5." .00 PKR");

$pdf->SetFont('Arial','',8);
$pdf->SetXY(181,135);
$pdf->Write(0,'Hussain Mall');
$pdf->SetFont('Arial','',6);


$pdf->SetXY(183,140);
$pdf->Write(0,$title5);
$pdf->Code128(183,142,$code5,20,10);
$pdf->SetXY(183,150);
$pdf->Write(7,$code5);
$pdf->SetXY(183,154);
$pdf->Write(5,$price5." .00 PKR");










//row 6


//A set
$pdf->SetFont('Arial','',8);
$pdf->SetXY(9,170);
$pdf->Write(0,'Hussain Mall');
$pdf->SetFont('Arial','',6);
$pdf->SetXY(9,175);
$pdf->Write(0,$title6);
$pdf->Code128(9,177,$code6,20,10);
$pdf->SetXY(11,185);
$pdf->Write(7,$code6);
$pdf->SetXY(10,188);
$pdf->Write(5,$price6.".00 PKR");
//A set

$pdf->SetFont('Arial','',8);
$pdf->SetXY(38,170);
$pdf->Write(0,'Hussain Mall');
$pdf->SetFont('Arial','',6);

$pdf->SetXY(38,175);
$pdf->Write(0,$title6);
$pdf->Code128(38,177,$code6,20,10);
$pdf->SetXY(38,185);
$pdf->Write(7,$code6);
$pdf->SetXY(38,188);
$pdf->Write(5,$price6.".00 PKR");


$pdf->SetFont('Arial','',8);
$pdf->SetXY(66,170);
$pdf->Write(0,'Hussain Mall');
$pdf->SetFont('Arial','',6);

$pdf->SetXY(66,175);
$pdf->Write(0,$title6);
$pdf->Code128(66,177,$code6,20,10);
$pdf->SetXY(66,185);
$pdf->Write(7,$code6);
$pdf->SetXY(66,188);
$pdf->Write(5,$price6." .00 PKR");

$pdf->SetFont('Arial','',8);
$pdf->SetXY(93,170);
$pdf->Write(0,'Hussain Mall');
$pdf->SetFont('Arial','',6);


$pdf->SetXY(93,175);
$pdf->Write(0,$title6);
$pdf->Code128(93,177,$code6,20,10);
$pdf->SetXY(93,185);
$pdf->Write(7,$code6);

$pdf->SetXY(93,188);
$pdf->Write(5,$price6." .00 PKR");


$pdf->SetFont('Arial','',8);
$pdf->SetXY(123,170);
$pdf->Write(0,'Hussain Mall');
$pdf->SetFont('Arial','',6);


$pdf->SetXY(123,175);
$pdf->Write(0,$title6);
$pdf->Code128(123,177,$code6,20,10);
$pdf->SetXY(123,185);
$pdf->Write(7,$code6);

$pdf->SetXY(123,188);
$pdf->Write(5,$price6." .00 PKR");

$pdf->SetFont('Arial','',8);
$pdf->SetXY(153,170);
$pdf->Write(0,'Hussain Mall');
$pdf->SetFont('Arial','',6);


$pdf->SetXY(153,175);
$pdf->Write(0,$title6);
$pdf->Code128(153,177,$code6,20,10);
$pdf->SetXY(153,185);
$pdf->Write(7,$code6);

$pdf->SetXY(153,188);
$pdf->Write(5,$price6." .00 PKR");

$pdf->SetFont('Arial','',8);
$pdf->SetXY(181,170);
$pdf->Write(0,'Hussain Mall');
$pdf->SetFont('Arial','',6);


$pdf->SetXY(183,175);
$pdf->Write(0,$title6);
$pdf->Code128(183,177,$code6,20,10);
$pdf->SetXY(183,185);
$pdf->Write(7,$code6);
$pdf->SetXY(183,188);
$pdf->Write(5,$price6." .00 PKR");









//row 7


//A set
$pdf->SetFont('Arial','',8);
$pdf->SetXY(9,200);
$pdf->Write(0,'Hussain Mall');
$pdf->SetFont('Arial','',6);
$pdf->SetXY(9,205);
$pdf->Write(0,$title7);
$pdf->Code128(9,207,$code7,20,10);
$pdf->SetXY(11,215);
$pdf->Write(7,$code7);
$pdf->SetXY(10,218);
$pdf->Write(5,$price7.".00 PKR");
//A set

$pdf->SetFont('Arial','',8);
$pdf->SetXY(38,200);
$pdf->Write(0,'Hussain Mall');
$pdf->SetFont('Arial','',6);

$pdf->SetXY(38,205);
$pdf->Write(0,$title7);
$pdf->Code128(38,207,$code7,20,10);
$pdf->SetXY(38,215);
$pdf->Write(7,$code7);
$pdf->SetXY(38,218);
$pdf->Write(5,$price7.".00 PKR");


$pdf->SetFont('Arial','',8);
$pdf->SetXY(66,200);
$pdf->Write(0,'Hussain Mall');
$pdf->SetFont('Arial','',6);

$pdf->SetXY(66,205);
$pdf->Write(0,$title7);
$pdf->Code128(66,207,$code7,20,10);
$pdf->SetXY(66,215);
$pdf->Write(7,$code7);
$pdf->SetXY(66,218);
$pdf->Write(5,$price7." .00 PKR");

$pdf->SetFont('Arial','',8);
$pdf->SetXY(93,200);
$pdf->Write(0,'Hussain Mall');
$pdf->SetFont('Arial','',6);


$pdf->SetXY(93,205);
$pdf->Write(0,$title7);
$pdf->Code128(93,207,$code7,20,10);
$pdf->SetXY(93,215);
$pdf->Write(7,$code7);

$pdf->SetXY(93,218);
$pdf->Write(5,$price7." .00 PKR");


$pdf->SetFont('Arial','',8);
$pdf->SetXY(123,200);
$pdf->Write(0,'Hussain Mall');
$pdf->SetFont('Arial','',6);


$pdf->SetXY(123,205);
$pdf->Write(0,$title7);
$pdf->Code128(123,207,$code7,20,10);
$pdf->SetXY(123,215);
$pdf->Write(7,$code7);

$pdf->SetXY(123,218);
$pdf->Write(5,$price7." .00 PKR");

$pdf->SetFont('Arial','',8);
$pdf->SetXY(153,200);
$pdf->Write(0,'Hussain Mall');
$pdf->SetFont('Arial','',6);


$pdf->SetXY(153,205);
$pdf->Write(0,$title7);
$pdf->Code128(153,207,$code7,20,10);
$pdf->SetXY(153,215);
$pdf->Write(7,$code7);

$pdf->SetXY(153,218);
$pdf->Write(5,$price7." .00 PKR");

$pdf->SetFont('Arial','',8);
$pdf->SetXY(181,200);
$pdf->Write(0,'Hussain Mall');
$pdf->SetFont('Arial','',6);


$pdf->SetXY(183,205);
$pdf->Write(0,$title7);
$pdf->Code128(183,207,$code7,20,10);
$pdf->SetXY(183,215);
$pdf->Write(7,$code7);
$pdf->SetXY(183,218);
$pdf->Write(5,$price7." .00 PKR");





//row 8


//A set
$pdf->SetFont('Arial','',8);
$pdf->SetXY(9,232);
$pdf->Write(0,'Hussain Mall');
$pdf->SetFont('Arial','',6);
$pdf->SetXY(9,237);
$pdf->Write(0,$title8);
$pdf->Code128(9,239,$code8,20,10);
$pdf->SetXY(11,247);
$pdf->Write(7,$code8);
$pdf->SetXY(10,250);
$pdf->Write(5,$price8.".00 PKR");
//A set

$pdf->SetFont('Arial','',8);
$pdf->SetXY(38,232);
$pdf->Write(0,'Hussain Mall');
$pdf->SetFont('Arial','',6);

$pdf->SetXY(38,237);
$pdf->Write(0,$title8);
$pdf->Code128(38,239,$code8,20,10);
$pdf->SetXY(38,247);
$pdf->Write(7,$code8);
$pdf->SetXY(38,250);
$pdf->Write(5,$price8.".00 PKR");


$pdf->SetFont('Arial','',8);
$pdf->SetXY(66,232);
$pdf->Write(0,'Hussain Mall');
$pdf->SetFont('Arial','',6);

$pdf->SetXY(66,237);
$pdf->Write(0,$title8);
$pdf->Code128(66,239,$code8,20,10);
$pdf->SetXY(66,247);
$pdf->Write(7,$code8);
$pdf->SetXY(66,250);
$pdf->Write(5,$price8." .00 PKR");

$pdf->SetFont('Arial','',8);
$pdf->SetXY(93,232);
$pdf->Write(0,'Hussain Mall');
$pdf->SetFont('Arial','',6);


$pdf->SetXY(93,237);
$pdf->Write(0,$title8);
$pdf->Code128(93,239,$code8,20,10);
$pdf->SetXY(93,247);
$pdf->Write(7,$code8);

$pdf->SetXY(93,250);
$pdf->Write(5,$price8." .00 PKR");


$pdf->SetFont('Arial','',8);
$pdf->SetXY(123,232);
$pdf->Write(0,'Hussain Mall');
$pdf->SetFont('Arial','',6);


$pdf->SetXY(123,237);
$pdf->Write(0,$title8);
$pdf->Code128(123,239,$code8,20,10);
$pdf->SetXY(123,247);
$pdf->Write(7,$code8);

$pdf->SetXY(123,250);
$pdf->Write(5,$price8." .00 PKR");

$pdf->SetFont('Arial','',8);
$pdf->SetXY(153,232);
$pdf->Write(0,'Hussain Mall');
$pdf->SetFont('Arial','',6);


$pdf->SetXY(153,237);
$pdf->Write(0,$title8);
$pdf->Code128(153,239,$code8,20,10);
$pdf->SetXY(153,247);
$pdf->Write(7,$code8);

$pdf->SetXY(153,250);
$pdf->Write(5,$price8." .00 PKR");

$pdf->SetFont('Arial','',8);
$pdf->SetXY(181,232);
$pdf->Write(0,'Hussain Mall');
$pdf->SetFont('Arial','',6);


$pdf->SetXY(183,237);
$pdf->Write(0,$title8);
$pdf->Code128(183,239,$code8,20,10);
$pdf->SetXY(183,247);
$pdf->Write(7,$code8);
$pdf->SetXY(183,250);
$pdf->Write(5,$price8." .00 PKR");



$pdf->Output();
