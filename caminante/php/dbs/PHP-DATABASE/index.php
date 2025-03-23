<?php

use App\Controllers\IncomesController;
use App\Controllers\WithdrawalController;
use App\Enums\IncomeTypeEnum;
use App\Enums\PaymentMethodEnum;
use App\Enums\WithdrawalTypeEnum;

require("vendor/autoload.php");


/*$incomes_controller = new  IncomesController;*/
/*$incomes_controller->store([*/
/*  "payment_method" => PaymentMethodEnum::BankAccount->value,*/
/*  "type" => IncomeTypeEnum::Salary->value,*/
/*  "date" => date("Y-m-d H:i:s"),*/
/*  "amount" => 10000,*/
/*  "description" => "pago al caminante nada de ahora"*/
/*]);*/



/*$withdrawal_controller = new WithdrawalController();*/
/*$withdrawal_controller->store([*/
/*  ":payment_method" => PaymentMethodEnum::CreditCard->value,*/
/*  ":type" => WithdrawalTypeEnum::Purchase->value,*/
/*  ":date" => date("Y-m-d H:i:s"),*/
/*  ":amount" => 369,*/
/*  ":description" => "no mas descanso, nose lo que haras pero mañana ya sabras php..."*/
/*]);*/


/*$withdrawal_controller = new WithdrawalController();*/
/*$withdrawal_controller->index();*/


/*$withdrawal_controller = new WithdrawalController();*/
/*$withdrawal_controller->show(1);*/

/*$incomes_controller = new IncomesController();*/
/*$incomes_controller->store([*/
/**/
/*  ":payment_method" => PaymentMethodEnum::BankAccount->value,*/
/*  ":type" => IncomeTypeEnum::Salary->value,*/
/*  ":date" => date("Y-m-d H:i:s"),*/
/*  ":amount" => 666,*/
/*  ":description" => "lo hice por mi cuenta amigo..."*/
/**/
/*]);*/


$incomes_controller = new IncomesController();
$incomes_controller->index();
