<?php

namespace Source\App;

use Source\Models\User;

class Api
{   
    public function userToJson($users): string
    {

        if(array_key_exists("1", $users)){
            $users_array = array();     

            foreach ($users as $user) {
                array_push($users_array, [
                    "id" => $user->id,
                    "nome" => $user->nome,
                    "email" => $user->email,
                    "phone" => $user->phone
                ]);
            }
        } else {
            $users_array = [
                "id" => $users->id,
                "nome" => $users->nome,
                "email" => $users->email,
                "phone" => $users->phone
            ];
        }

        // var_dump($users_array);

        return json_encode($users_array);
        
    }

    public function getAllUsers(): void
    {
        $users = (new User)->find()->fetch(true);

        echo $this->userToJson($users);
    }

    public function getUserById($d): void 
    {
        $user = (new User)->findById($d["id"]);

        echo $this->userToJson($user);

    }

}
