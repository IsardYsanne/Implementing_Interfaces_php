<?php


interface Payment{
    public function pay();
}
interface History_percent{
    public function operations_history();
    public function percent();
}
interface Process{
    public function process();
}


class Pay_fee implements Payment, History_percent, Process{ // оплатить комиссию
    public function pay(){
        echo "оплата комиссии <br>";
    }
    public function operations_history(){
        echo "01.12.2020<br>";
        echo "02.05.2021<br>";
    }
    public function percent(){
        echo "Комиссия составляет 0,5% <br>";
    }
    public function process(){
        $this->pay();
    }
}
class International_fee implements Payment, History_percent,Process{ // международный платеж
    public function pay(){
        echo "оплата международных платежей <br>";
    }
    public function operations_history(){
        echo "12.12.2020<br>";
        echo "03.05.2021<br>";
    }
    public function percent(){
        echo "Комиссия составляет 0,1% <br>";
    }
    public function process(){
        $this->pay();
    }
}
class Transaction implements Payment{ // транзакция
    public function pay(){}
}
class Payment_gateway{ // платежный шлюз
    public function take_payment(Payment $PaymentType){
        $PaymentType->pay();
        $PaymentType->operations_history();
        $PaymentType->percent();
        echo "добавим метод еще раз для демонстрации интерфейса <br>";
        $PaymentType->pay();
    }
}
$PaymentType = new International_fee();
$Gateway = new Payment_gateway();
$Gateway->take_payment($PaymentType);

echo "<br>";

$PaymentType2 = new Pay_fee();
$newGateway = new Payment_gateway();
$newGateway->take_payment($PaymentType2);