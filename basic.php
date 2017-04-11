<h1>PHP Basic</h1>
<hr/>

<?php
    
    echo '<h3>1. Echo Print Statement</h3>';
    echo 'Echo'; //echo digunakan untuk menampilkan output atau hasil;
    print 'Print'; //print juga digunakan untuk menampilkan output;
    print('Print2'); //print dapat menggunakan petik atas ataupun ditambah kurung;


    echo '<h3>2. Variable</h3>';
    $w = 10;
    $x = 5; //variabel digunakan sebagai wadah dari sebuah nilai, hanya menggunakan huruf, angka, dan underscore;
    $y = 'Variabel'; //variabel juga dapat berisi String atau kalimat, dengan menggunakan petik atas;
    $z = $w + $x; //variabel yang berisi integer dapat dioperasikan aritmatika, sedangkan yang berisi string tidak;

    echo $y; //variabel dapat langsung ditampilkan dengan echo tanpa menggunakan petik atas '';
    echo $z; //hasil dari pengoperasian 2 variabel juga dapat langsung di ditampilkan;


    echo '<h3>3. Data Type</h3>';

    echo "String1 - "; //string diapit oleh petik atas, petik satu atau dua
    echo 'String2 - '; //string dapat berisi huruf, angka, simbol dan text apapun;

    echo 1; //integer dapat dituliskan langsung tanpa tanda petik atas;
    echo 4 + 2; //integer juga dapat melakukan operasi aritmatika;
    echo ' - ';

    echo 1.72673; //float adalah tipe data yang mengandung angka desimal;
    echo 1.736 + 7.89; //float juga dapat melakukan operasi aritmatika seperti halnya integer;
    echo ' - ';

    echo true; //boolean hanya dapat diisi 2 statement, true atau 1 berarti benar;
    echo false; //dan false atau 0 berarti salah;
    echo ' - ';

    $x = array('satu', 'dua', 'tiga',); //array adalah tipe data yang berisi banyak value dalam 1 variabel;
    print_r($x); //untuk menampilkan array, menggunakan print_t() statement
    print_r($x[0]); //array juga dapat ditampilkan satu satu dengan cara menambahkan [] berisi angka ke berapa;

    $x = null; //null adalah nilai kosong, kosong dan nol berbeda, kosong adalah tidak berisi
    $y = 0; //sedangkan nol masih dapat ditampilkan dan mengandung angka nol;
    echo $x.$y;


    echo '<h3>4. PHP String Function</h3>';

    echo strlen('strlen'); //strlen digunakan untuk menghitung karakter dalam sebuah string;
    echo str_word_count('belajar php'); //str_word_count digunakan untuk menghitung jumlah kata dalam satu string;
    echo strrev('belajar php'); //strrev digunakan untuk membalik string per huruf;
    echo str_replace("saya", "kamu", "Hai saya!"); //str_replace digunakan untuk mengganti bagian dalam string;
    echo str_replace('kamu', 'dia', 'hai kamu'); //parameter 1 = yang akan diganti, 2 = pengganti, 3 = stringnya;


    echo '<h3>5. Operator</h3>';

    echo 10 + 4 - 7 * 7 / 7; //Operator aritmatika pada umumnya dapat digunakan,
    echo 7 + 7; //penjumlahan
    echo 8 - 7; //pengurangan
    echo 9 * 7; //perkalian
    echo 10 / 5; //pembagian
    echo 10 % 3; //modulus, adalah sisa dari pembagian


    echo '<h3>6. If Statement</h3>';

    if (7 < 6) { //if statement digunakan untuk menguji apakah benar atau salah
        echo 'benar'; //kode ini dijalankan jika kode yang diuji adalah benar atau true;
    } elseif (8 < 5) { //jika statement pertama salah, elseif akan mengambil alih;
    	echo 'benar'; //jika elseif benar, maka kode ini akan dijalankan;
    } else {
    	echo 'salah'; //jika semua statement diatasnya salah, else akan mengeksekusi kode;
    }


    echo '<h3>7. Switch Statement</h3>';

    switch ('saya') { //switch digunakan untuk memilih beberapa blok kode yang akan dijalankan
    	case 'saya':
    		echo 'ini saya'; //jika nilai didalam switch sama dengan case, maka code didalam case akan dijalankan;
    		break;
    
        case 'kamu';
            echo 'ini dia';
            break;

        default:
            echo 'ini saya';
            break;
    }


    echo '<h3>8. While Statement</h3>';
    
    $x = 1; //while digunakan untuk menjalankan kode selama statement didalam while adalah true
    while ($x <= 5) {
        echo "$x - ";
        $x++;
    } 


    $y = 1; //while juga dalam menggunakan do while statement
    do {
    	echo "$y - "; //kode didalam di akan dijalankan...
    	$y++;
    } while ($y <= 5); //...selama statement di dalam while masih benar


    echo '<h3>9. For</h3>'; 

    for ($x = 0; $x <= 10; $x++) { //for digunakan sama seperti while, param 1 = init, 2 = tes, 3 = increment
        echo "$x - ";
    }


    echo '<h3>10. Function</h3>';

    function tes() //function digunakan untuk wadah menjalankan berbagai kode;
    { 
        echo 'tes';
    }

    tes(); //function dapat langsung digunakan dengan mengetikkan nama function nya dan kurung;

    function tes2($x) //kita juga dapat memasukkan beberapa parameter di dalam function
    { 
        echo $x; //yang nantinya akan digunakan di dalam function itu sendiri
    }

    tes2(4);
?>