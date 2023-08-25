<?php

namespace App\Solid\OpenCloseResponsibility;

use Exception;

class AreaCalculator{

    //---------------------  This is only for Rectangle  -----------------------
/*
    public function totalArea(array $rectangles){
        $area = 0;
        foreach ($rectangles as $key => $rectangle) {
            $area += $shape->width * $rectangle->height;
        }
        return $area;
    }

*/




    //---------------------  This is for Rectangle & Circle  -----------------------
/*
    public function totalArea(array $shapes){
        $area = 0;
        foreach ($shapes as $key => $shape) {
            if($shape instanceof Rectangle){
                $area += $shape->width * $shape->height;
            }else{
                $area += $shape->radius * $shape->radius * pi();
            }
        }
        return $area;
    }
*/


    //---------------------  This is for All but without Interface  -----------------------
/*
    public function totalArea(array $shapes){
        $area = 0;
        foreach ($shapes as $key => $shape) {
            $area += $shape->area();
        }
        return $area;
    }
*/


    //---------------------  This is for All with Interface  -----------------------

    // public function totalArea(array $shapes){
    //     $area = 0;
    //     foreach ($shapes as $key => $shape) {
    //         if($shape instanceof ShapeInterface){
    //             $area += $shape->area();
    //         }else{
    //             throw new Exception(get_class($shape) . ' is not implement App\Solid\OpenCloseResponsibility\ShapeInterface.');
    //         }
    //     }
    //     return $area;
    // }


    // It's more convenient and shorter
    public function totalArea(ShapeInterface ...$shapes){
        $area = 0;
        foreach ($shapes as $key => $shape) {
            $area += $shape->area();
        }
        return $area;
    }
}
