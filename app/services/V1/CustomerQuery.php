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

#test this function after edition and search for fitlering course profeiessnal ways.
public function transform(Request $request)
{
    $eloquery=[];

   foreach ($this->allawedParams as $param=>$operators)
   {

        $query=$request->query($param);
        if(!isset($query)){
            continue;
        }
        $column=$this->columnsMap[$param]?? $param;
        foreach($operators as $operator){
            // dd($operator);   
            if(isset($query[$operator]))
            {
                $eloquery[]=[$column,$this->operatorMap[$operator],$query($operator)];
                return $eloquery;
            }
            else {
                $eloquery[]=[$column,'=',$query];
                return $eloquery;
            }
        }
   }
    

}




}

?>