<?php 

namespace App\Services\V1;
use Illuminate\Http\Request;

class CustomerQuery{

protected $allawedParams=[
    'name'=>['eq'],
    'type'=>['eq'],
    'email'=>['eq'],
    'adress'=>['eq'],
    'city'=>['eq'],
    'state'=>['eq'],
    'postalCode'=>['eq','gt','lt'],
];
protected $columnsMap=[
'postCode'=>['postal_code'],
];


protected  $operatorMap=[
 
    'eq'=>'=',
    'gt'=>'>',
    'lt'=>'<',
    'gte'=>'>=',
    'lte'=>'<=',

];

public function transform(Request $request):array
{
    $eloquery=[];

   foreach ($this->allawedParams as $param=>$operators)
   {
        $query=$request->query($param);
        dd($query);

   }
    return $eloquery;

}




}

?>