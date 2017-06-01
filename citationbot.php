<?php
    error_reporting(E_ALL^E_NOTICE^E_WARNING);  // Prevent warning output
    include_once("simple_html_dom.php");
    $url = $_GET['URL'];
    // $url = substr($url,4);
    $result = array('url'=>$url,'article'=>'','author'=>'','sitename'=>'','publisher'=>'','pubdate'=>'','accdate'=>'');   // Initialize result array
    $html = file_get_html($url);
    // Return list of contents
    $result['article'] = $html->find('title',0)->innertext; // Get artcile title
    $result['author'] = $html->find('meta[name="author"]',0)->content;    // Get author's name
    $result['sitename'] = $html->find('meta[property="og:site_name"]',0)->content;
    $result['publisher'] = $html->find('meta[property="og:site_name]',0)->content;
    $pubdate = substr($html->find('meta[property="article:published_time"]',0)->content,0,10);
    $pubdateraw=date_create_from_format("Y-m-d",$pubdate);
    switch ($_GET['type']){
        case 'MLA':
            $result['accdate'] = strftime("%d %b. %Y");
            try{
                $result['pubdate'] = date_format($pubdateraw,"d M. Y");
            }
            catch (Exception $e){
                $result['pubdate'] = $pubdate;
            }
            break;
        case 'APA':
            $result['accdate'] = date("h:i").", ".strftime("%b %d, %Y");
            $pubdate = date_format($pubdateraw,"Y, M d");
            try{
                $result['pubdate'] = date_format($pubdateraw,"Y, M d");
            }
            catch (Exception $e){
                $result['pubdate'] = $pubdate;
            }
            break;
        default:
            $result['accdate'] = date("Y-m-d");
            $result['pubdate'] = $pubdate;
    }
    
        
    
    echo json_encode($result);
    
?>