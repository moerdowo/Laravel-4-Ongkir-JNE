Laravel-4-Ongkir-JNE
====================

Laravel 4 ongkir jne based on ongkir.info wrapper

------------

add this line to your composer.json

    "totox777/ongkir": "dev-master"
    
and then, Run :

`composer update` to pull down the latest version.

add this line to your app.php provider array:

    'Totox777\Ongkir\OngkirServiceProvider',
    
and add this line to app.php aliases array:

    'Ongkir' => 'Totox777\Ongkir\Facades\Profiler',
    
config: don't forget to chage the api-key you got from ongkir.info in src/config/config.php


Sample Usage:

    $result = Ongkir::getCost('denpasar','pontianak',1);
    if($result!=null){
        $prices = $result['price'];
        $city = $result['city'];
                 
        echo 'Ongkos kirim dari ' . $city->origin . ' ke ' . $city->destination . '<br /><br />';
                 
        foreach ($prices->item as $item)
        {
            echo 'Layanan: ' . $item->service . ', dengan harga : Rp. ' . $item->value . ',- <br />';
        }
    }
    else{
        echo 'Tidak ditemukan jalur pengiriman dari asal ke tujuan';
    }
