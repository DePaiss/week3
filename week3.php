<?php

class Product {
    protected $name;
    protected $price;
    protected $stock;

    public function __construct($name, $price, $stock) {
        $this->name = $name;
        $this->price = $price;
        $this->stock = $stock;
    }

    public function showInformation() {
        echo "nama: " . $this->name . ", harga:" . $this->price . ", stock:" . $this->stock . "<br>\n";
    }
}

class ProductElectronic extends Product {
    public function calculateDiscount() {
        return $this->price * 0.5; // Diskon 50% untuk elektronik
    }

    public function showInformation() {
        parent::showInformation();
        echo "harga setelah diskon:" . $this->calculateDiscount() . "<br>\n<br>\n";
    }
}

class ProductFashion extends Product {
    public function calculateDiscount() {
        return $this->price - ($this->price * 0.7); // Diskon 70% untuk fashion
    }

    public function showInformation() {
        parent::showInformation();
        echo "harga setelah diskon:" . $this->calculateDiscount() . "<br>\n<br>\n";
    }
}

// Membuat objek
$laptop = new ProductElectronic("laptop", 10000, 23);
$kaos = new ProductFashion("kaos", 8000, 3);

// Menampilkan informasi 
$laptop->showInformation();
$kaos->showInformation();

?>
