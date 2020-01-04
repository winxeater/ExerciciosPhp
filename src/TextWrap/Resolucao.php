<?php

namespace Galoa\ExerciciosPhp\TextWrap;


/**
 * Implemente sua resolução aqui.
 */
class Resolucao implements TextWrapInterface {

  /**
   * {@inheritdoc}
   */

  // public function trim_value(&$value) 
  // { 
  //     $value = trim($value); 
  // }

  public function textWrap(string $text, int $length): array 
  {
    $totalCaracteres = 0;
    
    $vetorPalavras = explode(" ",$text);


    if(strlen($text) <= $length):
      $novoTexto = $text;
    else:
        //Começa a criar o novo texto resumido.
        $novoTexto = "";
        //Acrescenta palavra por palavra na string enquanto ela
        //não exceder o tamanho máximo do resumo
        for($i = 0; $i < count($vetorPalavras); $i++):
            $totalCaracteres += strlen($vetorPalavras[$i]);
            if($totalCaracteres <= $length)
              $novoTexto =  $novoTexto . ' ' . $vetorPalavras[$i];
            else 
          break;
        endfor;
    endif;

    return array($novoTexto);   
  }

  


}
