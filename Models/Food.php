<?php
require_once  './Models/Traits/HasMatAge.php';

class Food extends Product
{
    use HasAge;
    public $ingredients;
    public $weight;


    function __construct($_name, $_price, $_category, $_productImg, $_age, $_ingredients, $_weight)
    {

        parent::__construct($_name, $_price, $_category, $_productImg);

        // Uso try and catch per gestire eventuali eccezioni durante la validazione dell'età
        try {
            $this->validateAge($_age);
        } catch (Exception $e) {
            // Stampiamo il messaggio di errore dell'eccezione, se il valore di 'age' non è valido
            echo 'Error: ',  $e->getMessage();
        }

        $this->ingredients = $_ingredients;
        $this->weight = $_weight;
    }

    // Metodino per verificare che 'age' sia un valore consentito
    private function validateAge($_age)
    {
        // Se l'età è vuota o non è un numero...
        if (empty($_age) || !is_numeric($_age)) {
            // ...faccio 'un'eccezione' 
            throw new Exception("Valore età non consentito, inserisci un valore numerico");
        }
        // Se l'età è valida, assegna la proprietà di $age
        $this->age = $_age;
    }
}
