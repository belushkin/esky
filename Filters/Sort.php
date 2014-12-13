<?php

namespace esky\Filters;

class Sort implements FilterInterface
{

    protected $field        = '';
    protected $direction    = 'ASC';

    public function __construct($field, $direction)
    {
        $this->field        = $field;
        $this->direction    = $direction;
    }

    public function filter($value)
    {
        $arr2 = $this->array_msort($value, array('value'=>SORT_DESC));
        print_r($arr2);
        exit();
//        $result = array();
//        uasort($value, function ($a, $b) { if ( $a==$b ) return 0; else return ($a > $b) ? -1 : 1; });
//
//        foreach ($value as $country => $money) {
//            //if ($country != 'europe') continue;
//            foreach ($money as $code => $description) {
//                $result['europe'][] = $code;
//            }
//        }
//        //print_r($result);exit();
//        array_multisort($result, SORT_DESC, $value);
        return $value;
    }

    function array_msort($array, $cols)
    {
        $colarr = array();
        foreach ($cols as $col => $order) {
            $colarr[$col] = array();
            foreach ($array as $k => $row) { $colarr[$col]['_'.$k] = strtolower($row[$col]); }
        }
        $eval = 'array_multisort(';
        foreach ($cols as $col => $order) {
            $eval .= '$colarr[\''.$col.'\'],'.$order.',';
        }
        $eval = substr($eval,0,-1).');';
        eval($eval);
        $ret = array();
        foreach ($colarr as $col => $arr) {
            foreach ($arr as $k => $v) {
                $k = substr($k,1);
                if (!isset($ret[$k])) $ret[$k] = $array[$k];
                $ret[$k][$col] = $array[$k][$col];
            }
        }
        return $ret;

    }
}
