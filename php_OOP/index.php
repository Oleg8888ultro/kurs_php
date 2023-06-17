<?php

class User
{
    public $name = "Имя";
    public $password = "Пароль";
    public $email = "Емейл";
    public $city = "Город";

    //     public function Hello()
//     {
//         echo "Hello {$this->name}";
//     }

    function getInfo()
    {
        return "{$this->name}" . "{$this->surname}";
    }
}
$admin = new User();
$admin->name = "Alex";
$admin->surname = "Ivanov";
// $admin->Hello();

echo "Пользователь: {$admin->getinfo()}";

// $admin = new User();
// $user1 = new User();

// $admin->name = "Alexey";
// $user1->name = "Andrey";

// echo $admin->name;
// echo "<br>";

// echo $user1->name;
// echo "<br>";

// $user1->surname = "Ivanov";
// echo $user1->surname;


?>