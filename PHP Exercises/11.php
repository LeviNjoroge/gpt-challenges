<?php
    // 11. Create a class for a "Bank Account" with deposit and withdraw methods.

    class bankAccount{
        // should have attributes and methods
        
        // attributes
        function createAccount($fname, $lname, $accNo){
            $firstName = $fname;
            $lastName = $lname;
            $accountNumber = $accNo;
            $balance = NULL;
        }

        function checkBalance(){
            echo $balance;
        }

        function depositCash($amount){
            $balance += $amount;
            echo "A deposit of ".$amount." is successfull! <br>Your balance is: ".$balance."<br>";
        }

        function withdrawCash($amount){
            $balance -= $amount;
            echo "A withdrawal of ".$amount." is successfull! <br>Your balance is: ".$balance."<br>";
        }
    }
?>