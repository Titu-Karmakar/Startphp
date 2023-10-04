<?php
$age = 12;

if($age <= 13 && $age>= 19){
    echo " this person is teenager ";
}else{
    echo " This person is not a teenager";
}
echo "\n";

$food = "saon";

if("tuna" == $food || "salmon" == $food){
    echo "It has vitamin D";

}elseif("apple"==$food){
    echo " apple does not contain vitamine D";

}else{
    echo " we dont know if {$food} conntains vitamin D";

}


echo "\n";
$year = 1900; //Combined condition 

if ($year%4==0&& ( $year % 100 != 0 || $year % 400 == 0 )){
    echo " {$year} is a leapyear";
}else{
    echo "{$year} is not a leap year";
}

// Naormal if else 
$n = 13 ;
if (12==$n){
    echo "Twelve";

}elseif (10==$n){
    echo "Ten";
}else{
    echo "A number" ;
}
echo"\n";


$numberInword = (12 == $n)? "Twelve"  : ((12 == $n)? "A number" : "thirteen" ); // ternary operator
echo $numberInword;

if ($n%2==0){
    echo "Even Number";
}else{
    echo "Odd number";
}

echo "\n";

$result = ($n%2==0)? "Even Number" : "Odd Number"; // ternary operator
echo $result;

//Multiple steping 
 for ($i=10; $i>0; $i--){
    echo $i;
    echo PHP_EOL;

 }
 for ($i=10; $i>0; $i-=1){
    echo $i.":".(11-$i);
    echo PHP_EOL; 
    
 }
 for ($i=10, $j=1; $i > 0; $i-=1, $j++){
    echo $i.":".$j;
   // echo $i.":".(11-$i);
    echo PHP_EOL;
    
 }
 $n =3;
 for( $i=$n, $factorial=1; $i>1 ; $i--){
    $factorial*=$i;
 }
 printf(" Factorial of %d is %d, ",$n,$factorial);

 $j = 0;
 while ($j++ <5){ // Age j er value while er kache chole jabe then operation hobe 
    echo $j;
    echo PHP_EOL;
 }

 while(++$j <5){ // age operation hoye jabe then j er value while er kache jabe 
    echo $j;
    echo PHP_EOL;
 } 

 echo "Frist omment";
 echo "\n";

 for ($i = 20 ; $i<50; $i++){  // Break and continue 
    if ($i % 13 ==0) {
        echo $i;
        echo PHP_EOL;
        break;
    }
 }
