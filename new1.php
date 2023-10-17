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

// febonanchi 0 1 1 2 3 5 8 13 21 34 55 89 144 233 377 610 989 1597 2584 


 $veryold =0;
 $old = 1;
 $new = 1;

 for ($i=0; $i<10 ; $i++){
    echo $veryold." ";
    $old = $new;
    $new = $old+ $veryold;
    $veryold = $old;
 }
echo "\n";  
 // Specific operator due bujhi nai

 $default_lat = 23.4;
 $default_lon = 90.5;

 $user_lat = 20.4;

 $lat = $user_lat ?? $default_lat; // ??  null operator
 echo $lat;
 echo "\n";  

function evenorodd($n){  // function parameter
    if ($n%2==0){
        return true;
    }else{
        return false;
    }
}   

$x = 13;

if (evenorodd($x)){ // function argument
    echo "{$x} is even number";
}else{ echo "{$x} is odd number "; 
}

 
function functiontest($n){
    if ($n%2==0){
        if ($n>=5 || $n=15)
        return true;
    } return false;
} // function call

$x = 10;
if (functiontest($x)){
    echo "{$x} is even number";
}else{ echo "{$x} is odd number "; 
}
echo "\n";
include_once "function.php";

$x = 5;
echo "Factorial of {$x} is ".factorial($x);
echo "\n";

function sum(int $x,int $y,int $z ):int {// return type :int or it can be string 
    return $x+$y+$z;
}
echo sum(6,7,8);

echo "\n";

function Withargument (int ...$numbers):int { // unlimited sum argument 
    $result=0;
    for ($i=0; $i<count($numbers); $i++){
        $result+= $numbers[$i];
    }
    return $result;

}
echo Withargument(5,6,7,6,888,8); 

function printNumber($start, $end){ // recursive function
    if ($start>$end){
        return;
    }
    echo $start. "\n";
    $start++;
    printNumber($start,$end);
}
printNumber(10, 21);

echo "\n";

function printSnumber($start, $end, $stepping=2 ){ // recursive function with stteping 
    if ($start>$end){
        return;
    }
    echo $start. "\n";
    $start+= $stepping;
    printNumber($start,$end,$stepping);
}
printSnumber(10, 21); 


function fibonacci($old,$new,$start,$end){


    if ($start>$end){
        return;
    }
    $start++;
    echo $old." ";

    $_temp = $old + $new;
    $old = $new;
    $new = $_temp;
        
    fibonacci($old,$new,$start,$end);
}
fibonacci (0,1,2,30); 

echo "\n";

function factorialrecursive($n){
    if ($n<=1){
        return 1;
    }
    return $n*factorialrecursive($n-1);
}

echo factorialrecursive(9);

echo "\n";

function staticscope(){
    static $i; //static scope :  $i er man update hoye save thakbe ar  sudu ei function er jonno applicable 
    $i =$i ?? 0;
    $i++;
    echo $i;
    echo "\n";

} 
staticscope();
staticscope();
staticscope();
staticscope();

$student = [   // Associative array : key (23,34, ..) diye access korte hoy 
    '23'=> 'Kamal', 
    '34'=> 'Hasan', 
    '56'=> 'Rohan'
]; 
$student = array(   // Associative array : key (23,34, ..) diye access korte hoy 
    '23'=> 'Kamal', 
    '34'=> 'Hasan', 
    '56'=> 'Rohan'
); 
print_r($student);
echo $student[23];
echo "\n";

$foods = [
    'vegetable' => 'begun, bendi, alu, kacamorich',
    'drinks' => 'milk, water, orange juice, wine'
];

foreach ($foods as $key => $value){ // special loop system
    echo $key."=".$value."\n";
}

// //echo PHP_EOL;

$keys = array_keys($foods);
print_r($keys);


$keys = array_keys($foods);
for($i=0; $i<count($keys);$i++){
    $key = $keys[$i];
    echo $foods[$key]."\n";
}

$vegitable = explode (', ','carrot, tormuj, dhundhol, capsicum, hayati');  // string to array by delimeter, (', ' ) delimetre
$vegitableString = join(', ', $vegitable); // array to string 
echo $vegitableString;
echo $vegitable[1];
print_r($vegitable);

$vegitable = explode (', ','carrot, tormuj, dhundhol, capsicum, hayati');
$vegitable = preg_split ('/(, |,)/','carrot, tormuj,kolaboti, dhundhol, capsicum, hayati, newnwe,wewewewewe'); // Multiple delimeter '/(, |,)/'

echo count($vegitable);

$studentarray = ["rahim","karim",123,"monir"];
$studentarray [2] = "shofiq" ; //change data

$starray = array_shift($studentarray); // remove the frist one from array by  
$starray = array_pop($studentarray); // remove the last one from array by 
$starray = array_push($studentarray, "kamal"); // add in the last one from array by 
$starray = array_unshift($studentarray, "salam"); // add the frist one from array by 
print_r($studentarray);

$sample = [  // Multidimentional array or nested array
    'test' => [
        'test-again'=> [
            'a',
            'b',
            'c',
            'd'
        ]
    ],
];

echo $sample['test']['test-again'][2];

$sample2 =[  // Multidimentional array or nested array
    [1,2,3,4],
    [11,22,33,44],
    [111,222,333,[87,87],4444,555,[343,434,6635]]
];

print_r($sample2);
echo $sample2[2][3][0];


$students = array(
    'fname' => 'jamal',
    'lname' => 'Ahmad',
    'age' => 23,
    'class' => 12,
    'section' => 'A'
);

print_r($students);

$serialized = serialize($students); // array to string 
echo $serialized; 
$newstudent = unserialize($serialized);
print_r($newstudent);

$jsondata = json_encode($students); //json data array to string 
echo $jsondata;
echo "\n";
$jsondatadecode = json_decode($jsondata, true); // json string to array 
print_r($students);


