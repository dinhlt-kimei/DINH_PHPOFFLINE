<ul>
          <li>D: acb</li>
          <li>D: files
                <ul>
                        <li>D: hild
                            <ul>
                                    <li>F: abc.ini</li>
                            </ul>
                        </li>
                        <li>F: abc.ini</li>
                        <li>F: abc.txt</li>
                        <li>F: abc.def</li>
                </ul>
          </li>
          <li>D: image
              <ul>
                  <li>F: def.txt</li>
              </ul>
          </li>
          <li>F: abc.ies</li>
          <li>F: abc.ini</li>
          <li>F: abc.txt</li>
          <li>F: def.txt</li>
          <li>F: index.php</li>  
</ul>
        
</hr>

<?php

        $dir = scandir('.'); 
        echo "<pre>";
        $result = '<ul>' ;
        foreach($dir as $key => $value)
        {
            if($value != '.' && $value != '..')
            {
                if(is_dir("./$value"))
                {
                    $result .= '<li><img src="picture/folder.png" alt="#" style="width: 10px; height: 10px;">'  .$value. '<ul>' ;
                    $dirChild = scandir("./$value") ;
                    foreach($dirChild as $keyChlid => $valueChlid)
                    {
                        if($valueChlid != '.' && $valueChlid != '..' )
                        {
                            if(is_dir("./$value/$valueChlid"))
                            {
                                $result .= '<li><img src="picture/folder.png" alt="#" style="width: 10px; height: 10px;">'  .$valueChlid. '</li>' ;
                            }
                            else
                            {
                                $documentC = array("txt","ini","ies","doc");
                                $pictureC = array("png","jpg","jpeg");
                                $videoC    = array("mp3","mp4","avi");
                                $extensionC = pathinfo($valueChlid,PATHINFO_EXTENSION);
                                if(in_array($extensionC,$documentC))
                                {
                                    $result .= '<li><img src="picture/file.png" alt="#" style="width: 10px; height: 10px;">'  .$valueChlid. '</li>' ;
                                }
                                else if(in_array($extensionC,$pictureC))
                                {
                                    $result .= '<li><img src="picture/image.png" alt="#" style="width: 10px; height: 10px;">'  .$valueChlid. '</li>' ;
                                }
                                else if(in_array($extensionC,$videoC))
                                {
                                    $result .= '<li><img src="picture/video.jpg" alt="#" style="width: 10px; height: 10px;">'  .$valueChlid. '</li>' ;
                                }    
                            }
                        }
                    }

                    $result .= '</ul></li>' ;
    
                }
                else
                {
                    $document = array("txt","ini","ies","doc");
                    $picture  = array("png","jpg","jpeg");
                    $video    = array("mp3","mp4","avi");
                    $extension = pathinfo($value,PATHINFO_EXTENSION);
                    if(in_array($extension,$document))
                    {
                        $result .= '<li><img src="picture/file.png" alt="#" style="width: 10px; height: 10px;">'  .$value. '</li>' ;
                    }
                    else if(in_array($extension,$picture))
                    {
                        $result .= '<li><img src="picture/image.png" alt="#" style="width: 10px; height: 10px;">'  .$value. '</li>' ;
                    }
                    else if(in_array($extension,$video))
                    {
                        $result .= '<li><img src="picture/video.jpg" alt="#" style="width: 10px; height: 10px;">'  .$value. '</li>' ;
                    }    
                }     

                
            }
        }
        $result .= '</ul>' ;

        echo $result ;