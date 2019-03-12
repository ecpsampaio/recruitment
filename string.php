<?php

/* Dada uma string não vazia e um dicionário wordDict contendo uma lista de palavras não vazias, 
 * determine se s pode ser segmentado em uma seqüência separada por espaço de uma ou mais palavras do dicionário. 
 * Você pode assumir que o dicionário não contém palavras duplicadas.
  Por exemplo, dado s = "leetcode", dict = ["leet", "code"].
  Retorna true porque "leetcode"pode ser segmentado como "leet code".
 * 
 */

function wordDict($str, $arrDic) {
    if (strlen($str) > 0 and count($arrDic) > 0) {
        $init = 0;
        $bool = false;
        foreach ($arrDic as  $d) {
            $fim = strlen($d);
            if (substr($str, $init, $fim) === $d) {
                $bool = true;
            } else {
                return false;
            }
            $init = strlen($d);

        }
        return $bool;
    } else {
        return false;
    }
}

$dic = ["NET", "BEANS"];
$str = "NETBEANS";

IF (wordDict($str, $dic)) {
    echo "PODE SER SEGMENTADO";
} else {
    echo "NÃO PODE SER SEGMENTADO";
}