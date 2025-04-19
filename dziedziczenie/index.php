<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    class Adress{
        public string $street;
        public string $number;

        public function __construct($street, $number)
        {
            $this->street = $street;
            $this->number = $number;
        }
    }

    class SalesPerson{
        public string $name;
        public string $surname;
        public int $id;

        public function __construct($name, $surname, $id)
        {
            $this->name = $name;
            $this->surname = $surname;
            $this->id = $id;
        }
    }

    class FlowerStore{
        protected string $name;
        protected Adress $adress;
        protected string $openingHours;
        protected array $staff;

        public function __construct($name, $adress, $openingHours)
        {
            $this->name = $name;
            $this->adress = $adress;
            $this->openingHours = $openingHours;
            $this->staff = [];
        }

        public function DisplayInfo(){
            echo "Kwiaciarnia ".$this->name.", adres: ".$this->adress->street." ".$this-> adress->number.", godziny otwarcia: ".$this->openingHours;
        }

        public function AddStaff(SalesPerson $sales_person){
            array_push($this->staff, $sales_person);
        }
    }

    class InternetFlowerStore extends FlowerStore{
        protected string $website;

        public function __construct($name, $adress, $openingHours, $website)
        {
            parent::__construct($name, $adress, $openingHours);
            $this->website = $website;
        }

        public function DisplayInfo()
        {
            return parent::DisplayInfo() . ", strona internetowa: " . $this->website;
        }
    }

    class EcoFlowerStore extends FlowerStore{
        private string $certificate;

        public function __construct($name, $adress, $openingHours, $certificate)
        {
            parent::__construct($name, $adress, $openingHours);
            $this->certificate = $certificate;
        }
        public function DisplayInfo()
        {
            return parent::DisplayInfo() . ", certyfikat: " . $this->certificate;
        }
    }

    final class LuxuryFlowerStore extends FlowerStore{
        private array $premiumOffer;

        public function __construct($name, $adress, $openingHours, $premiumOffer)
        {
            parent::__construct($name, $adress, $openingHours);
            $this->premiumOffer = $premiumOffer;
        }
        public function DisplayInfo()
        {
            return parent::DisplayInfo() . ", oferta premium: " . implode(", ", $this->premiumOffer);
        }
    }

    
    ?>
</body>
</html>
