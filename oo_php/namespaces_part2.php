<?php
    require "./biblioteca/lib1/lib1.php";
    require "./biblioteca/lib2/lib2.php";

    use A\Cliente as C1;
    use B\CLiente as C2;    

    $x = new C1();
    print_r($x);
    echo $x->__get('nome');

    $x = new C2();
    print_r($x);
    echo $x->__get('nome');
?>