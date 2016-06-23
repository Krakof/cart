<?php

class TransformIDs {
    public function transform($array){
        return implode(',', $array);
    }
}