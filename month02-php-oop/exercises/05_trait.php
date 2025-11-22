<?php

trait HasId {
    public $id;

    public function setId($id) {
        $this->id = $id;
    }
}

class User {
    use HasId;
}

$user = new User();
$user->setId(99);
echo "User ID: {$user->id}\n";
