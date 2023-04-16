<?php

namespace App\Classes;

class Cross
{
    protected $height;

    public function __construct(int $height = 5)
    {
        /**
         * @param height 
         */
        $this->height = $height;
    }

    public function generate($breakLine = PHP_EOL)
    {
        // definingo as $height linhas que serão usadas
        $height = $this->height;
        
        /**
         * poka yoke pra evitar erro das alturas pares (n printa a linha vertical) -> torna a largura impar
         * poka yoke, na engenharia, é a "ferramenta anti erro", pra evitar certas coisas
         * pode ser considerado aqui como RTA (Recursos Técnico ALternativo), ou só gambiarra msm kkkkkkkkkkkkkkkkkkkkk
         */
        if($height % 2 == 0) $height++;

        // processo de "printagem"
        for($i=0; $i < $height; $i++) {

            /** 
             * se $i == 1 (segunda linha),
             *  printar uma linha completa 
             * */
            
            if($i == 1){
                for ($j=0; $j < $height; $j++) {
                    echo "*";
                }   
            }
            
            /** 
             * se $i != 1 (linhas 1, 3, 4, ..., $height),
             *  printar asterisco quando $j == 2 (no meio, verticalmente) 
             * */
            else{
                for ($j=0; $j < $height; $j++) {
                    if($j == ($height-1)/2){
                        echo "*";
                    }
                    else{
                        echo "-";
                    }
                }
            }
            echo $breakLine;
        }
    }
}

class X
{

    protected $height;

    public function __construct(int $height = 5)
    {
        /**
         * @param height 
         */
        // setter do height
        $this->height = $height;
    }

    public function generate($breakLine = PHP_EOL){
        // parte superior do X (4 triangulos)
        for($i=0; $i <= 2; $i++) {
            // triagulo superior da quina esquerda
            for($count = 0;  $count <= $i; $count++){
                echo "-";
            }

            // triagulo superior do centro esquerdo
            for($count = 3;  $count > $i; $count--){
                if($count >= 3){
                    echo "*";
                }else{
                    echo "-";
                }
            }

            // triagulo superior do centro direito
            for($count = 3;  $count > $i; $count--){
                echo "-";
            }

            // triagulo superior da quina direita
            for($count = 0;  $count <= $i; $count++){
                if($count <= 0){
                    echo "*";
                }else{
                    echo "-";
                }
            }
            echo $breakLine;
        }

        // parte inferior do X (4 triangulos)
        for($i=2; $i >= 0; $i--) {
            
            // triagulo inferior da quina esquerda
            for($count = 0;  $count <= $i; $count++){
                echo "-";
            }
            
            // triagulo inferior do centro esquerdo
            for($count = 3;  $count > $i; $count--){
                if($count >= 3){
                    echo "*";
                }else{
                    echo "-";
                }
            }
            
            // triagulo inferior do centro direito
            for($count = 3;  $count > $i; $count--){
                echo "-";
            }

            // triagulo inferior da quina direita
            for($count = 0;  $count <= $i; $count++){
                if($count <= 0){
                    echo "*";
                }else{
                    echo "-";
                }
            }
            echo $breakLine;
        }    
    }
}
