<?php
//Password Generator
function generatePassword($lenght){
    $charecter = 'abcdefghigklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890!@#%^&*()_+';
    $password = '';
    for($i=0; $i<$lenght; $i++){
        $password.= $charecter[rand(min:0, max:strlen(string:$charecter) -1)];
    }
    return $password;
}
echo generatePassword(lenght: 12);