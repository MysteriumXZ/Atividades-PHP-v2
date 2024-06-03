<h1>Programação orientada a objetos em PHP</h1>

<?php 

    class caneta{
        var $cor;
        var $marca;
        var $tipo;
        var $tampado = true;


        function abrir_tampa(){
            if($this->tampado == true){
                $this->tampado = false;
            }
        }

        function escrever(){
            if($this->tampado){
                echo "";
            }else{
                echo "<i style = 'color:$this->cor' >Escrevendo...</i> ";
                echo "<br>";
            }
        }
    }

    class estoque{
        var $item;

        function add_tem(){

        }

        function del_item(){

        }
    }


    $joran_pen = new caneta();
    $milena_pen = new caneta();

    $joran_pen->cor = "Blue";
    $joran_pen->marca = "Bic";

    $milena_pen->cor = "Pink";
    $milena_pen->marca = "Monblanc";

    $joran_pen -> abrir_tampa();
    $milena_pen -> abrir_tampa();
    $milena_pen -> escrever();
    $joran_pen -> escrever();
    





?>