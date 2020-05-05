<?php
        // Kiểm tra hàm rỗng
        function checkEmpty ($value)
        {
            $flag = false ;
            if(!isset($value) || trim($value) == "")
            {
                $flag = true;
            }
            return $flag ;
        }
        // Kiểm tra chiều dài
        function checkString($value,$min,$max)
        {
                $flag = false ;
                $length = strlen($value) ;
                if( $min > $length ||  $length > $max)
                {
                    $flag = true;
                }
                return $flag ;

        }    
        // Tạo chuỗi tự động
        function createString($length = 5)
        {
            //array_merge nối chuỗi các mảng với nhau
            $arrCharacter =  array_merge(range('A','Z'), range('a','z'),range(0,9)) ;
            $arrCharacter = implode( $arrCharacter) ; // implode chuyển mảng thành 1 dãy
            $arrCharacter = str_shuffle($arrCharacter); //str_shuffle sắp xếp các kí tự của dãy đảo lộn
            $arrCharacter = substr($arrCharacter,0,$length);
            return $arrCharacter ;
        }

        // Size
        function convertSize($size, $totalDigit = 2, $ditance = ' '){
            $units	= array('B', 'KB', 'MB', 'GB', 'TB');
            
            $length	= count($units);
            for($i = 0; $i < $length; $i++){
                if($size > 1024) {
                    $size	= $size / 1024;
                }else {
                    $unit	= $units[$i];
                    break;
                }
            }
            
            $result = round($size, $totalDigit) . $ditance . $unit;
            return $result;
        }
        // Kiểm tra phần mở rộng
        function checkExtension($fileName , $arrExtension)
        {
        // Lấy phần mở rộng
        $ext = pathinfo($fileName,PATHINFO_EXTENSION);
        $flag = false;
        if(in_array(strtolower($ext),$arrExtension)== true) $flag = true; // strtolower chuyền chữ hoa thành thường
        return $flag;
        }
        // check size
        function checkSize($size,$min,$max)
        {
        $flag = false ;
        if($size >= $min && $size <= $max)
        {
                $flag =true;
        }
        return $flag;
        }
        function randomString($fileName,$length = 5)
        {
            //array_merge nối chuỗi các mảng với nhau
            $ext = pathinfo($fileName,PATHINFO_EXTENSION);
            $arrCharacter =  array_merge(range('A','Z'), range('a','z'),range(0,9));
            $arrCharacter = implode( $arrCharacter) ; // implode chuyển mảng thành 1 dãy
            $arrCharacter = str_shuffle($arrCharacter); //str_shuffle sắp xếp các kí tự của dãy đảo lộn
            $arrCharacter = substr($arrCharacter,0,$length).'.'. $ext ;
            return $arrCharacter ;
        }
?>