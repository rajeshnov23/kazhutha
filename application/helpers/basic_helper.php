<?php

if (!function_exists('script_tag')) {

    function script_tag($src = '', $language = 'javascript', $type = 'text/javascript', $index_page = FALSE) {
        $CI = & get_instance();

        $script = '<script ';

        if (is_array($src)) {
            foreach ($src as $v) {
                if ($k == 'src' AND strpos($v, '://') === FALSE) {
                    if ($index_page === TRUE) {
                        $script .= ' src="' . $CI->config->site_url($v) . '"';
                    } else {
                        $script .= ' src="' . $CI->config->slash_item('base_url') . $v . '"';
                    }
                } else {
                    $script .= "$k=\"$v\"";
                }
            }

            $script .= ">\n";
        } else {
            if (strpos($src, '://') !== FALSE) {
                $script .= ' src="' . $src . '" ';
            } elseif ($index_page === TRUE) {
                $script .= ' src="' . $CI->config->site_url($src) . '" ';
            } else {
                $script .= ' src="' . $CI->config->slash_item('base_url') . $src . '" ';
            }

            $script .= 'language="' . $language . '" type="' . $type . '"';

            $script .= '>' . "\n";
        }


        $script .= '</script>';

        return $script;
    }

}

//function icon($icon_name, $alt = '', $ext = 'png', $title = '', $html)
//{
//    return '<img src="' . base_url() . 'assets/images/' . $icon_name . '.' . $ext . '" alt="' . $alt . '" title = "' . $title . '" '.$html.'/>';
//}

function icon($icon_name, $alt = '', $ext = 'png', $title = '', $html="") {
    return "<img src='" . base_url() . "assets/images/" . $icon_name . "." . $ext . "' alt='" . $alt . "' title = '" . $title . "' " . $html . "/>";
}

function printr($data) {
    echo "<br>";
    echo "<pre>";
    print_r($data);
    echo "</pre>";
}

function printd($data) {
    echo "<br>";
    echo "<pre>";
    print_r($data);
    echo "</pre>";
    die();
}

function echor($data) {
    echo $data . "<br>";
}

//returns current menu
function active_menu($controller = 'home', $action = 'index', $prefix = 0) {
    $CI = & get_instance();
    $class_segment = 1 + $prefix;
    $function_segment = 2 + $prefix;
    if ($CI->uri->segment($class_segment) == "") {
        $currentController = 'welcome';
    } else {
        $currentController = $CI->uri->segment($class_segment);
    }

    if ($CI->uri->segment($function_segment) == "") {
        $currentAction = 'index';
    } else {
        $currentAction = $CI->uri->segment($function_segment);
    }

    if ($currentController == $controller && $currentAction == $action) {
        return 'active';
    } else {
        return '';
    }
}



function nav_menu_bootstrap() {
    $CI = & get_instance();
    $html = '';
    $html.='<ul class="nav navbar-nav navbar-right">';
    $html.='<li class="' . active_menu("welcome", "index") . '"><a href="' . site_url() . '">HOME</a></li>';
//    $html.='<li id="join" class="' . active_menu("signup", "chooseSignup", 1) . '"><a href="' . site_url("auth/signup/chooseSignup") . '">JOIN</a></li>';
    
     $html.='<li id="join" class="' . active_menu("howitworks", "index", 1) . '"><a href="' . site_url("howitworks/howitworks") . '">HOW DOES IT WORK?</a></li>';
     
if(! isloggedin() || !$CI->session->userdata("type")==1) 
{
    $html.='<li id="editjob" class="' . active_menu("getquotes", "index", 1) . '"><a href="' . site_url("getquotes/getquotes") . '">POST A JOB</a></li>';
}
//if( isloggedin() && $CI->session->userdata("type")==1) 
//{
    $html.='<li id="viewdetails" class="' . active_menu("search_delivery", "index", 1) . '"><a href="' . site_url("searchdelivery/search_delivery") . '">SEARCH DELIVERIES</a></li>';
       
//}
    
     $html.='<li class="' . active_menu("localcouriers", "index", 1) . '"><a href="' . site_url("localcouriers/localcouriers") . '">LOCAL COURIERS</a></li>';
     
      $html.='<li id="join" class="' . active_menu("contact", "index", 1) . '"><a href="' . site_url("contact/contact") . '">CONTACT</a></li>';
     
          if($CI->uri->segment(2)=="contact")
        {
        $controller="contact";
        }
        elseif ($CI->uri->segment(2)=="howitworks") 
            {
         $controller="howitworks";   
        }
        elseif ($CI->uri->segment(2)=="privacypolicy") 
                {
             $controller="privacypolicy";   
        }
 else {
    $controller="terms_conditions";  
 }
    
//          $html.=' <li class="dropdown">
//                  <a href="#" class="dropdown-toggle ' . active_menu($controller, "index", 1) . '" data-toggle="dropdown">SUPPORT <b class="caret"></b></a>
//                  <ul class="dropdown-menu">
//                    <li class="' . active_menu("contact", "index", 1) . '"><a href="' . site_url("contact/contact") . '">CONTACT US</a></li>
//                    <li class="' . active_menu("howitworks", "index", 1) . '"><a href="' . site_url("howitworks/howitworks") . '">HOW DOES IT WORKS</a></li>
//                        <li class="' . active_menu("privacypolicy", "index", 1) . '"><a href="' . site_url("privacypolicy/privacypolicy") . '">PRIVACY POLICY</a></li>
//                            <li class="' . active_menu("terms_conditions", "index", 1) . '"><a href="' . site_url("terms_conditions/terms_conditions") . '">TERMS & CONDITIONS</a></li>
//                 
//                  </ul>
//                </li>';
    if (isloggedin()) {
        
        
        if ($CI->session->userdata('type') == 0) {
            $url = "dashboard/userprofile/userprofile";
            $activeC = "userprofile";
            $activeN=2;
        } else {
            $url = "dashboard/transporter_profile";
             $activeC = "transporter_profile";
            $activeN=1;
        }
        
        $html.='<li id="dashboard" class="' . active_menu($activeC, "index", $activeN) . '"><a href="' . site_url($url) . '">DASHBOARD</a></li>';
//        $html.='<li id="logout" class=""><a href="' . site_url("auth/signup/logout") . '">LOGOUT</a></li>';
    } else {
//        $html.='<li id="login" class="" data-toggle="modal" data-target="#myModal" data-backdrop="false"><a href="">LOGIN</a></li>';
    }
//    $html.='<li class="' . active_menu("contact", "index", 1) . '"><a href="' . site_url("contact/contact") . '">CONTACT</a></li>';


          
//            $html.=' <li class="dropdown">
//                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">SUPPORT <b class="caret"></b></a>
//                  <ul class="dropdown-menu">
//                    <li><a href="#">HELP</a></li>
//                    <li class="' . active_menu("contact", "index", 1) . '"><a href="' . site_url("contact/contact") . '">CONTACT US</a></li>
//                    <li><a href="#">Something else here</a></li>
//                    <li class="divider"></li>
//                    <li class="dropdown-header">Nav header</li>
//                    <li><a href="#">Separated link</a></li>
//                    <li><a href="#">One more separated link</a></li>
//                  </ul>
//                </li>';
    $html.='</ul>';

    return $html;
}


function nav_menu() {
    $html = '';
    $html.='<ul>';
    $html.='<li class="' . active_menu("welcome", "index") . '"><a href="' . site_url() . '">Homepage</a></li>';
    $html.='<li class="' . active_menu("welcome", "form") . '"><a href="' . site_url("welcome/form") . '">Forms</a></li>';
    $html.='<li class="' . active_menu("welcome", "user_management") . '"><a href="' . site_url("welcome/user_management") . '">Users</a></li>';
    $html.='<li><a href="">Two Column #2</a></li>';
    $html.='<li><a href="">One Column</a></li>';
    $html.='</ul>';
    return $html;
}

function tb_prefix($table) {
    $CI = & get_instance();
    $prefix = $CI->config->item('tb_prefix');
    return $prefix . "_" . $table;
}

function allCountries() {
    $Countries = new Model\Countries();
    $data = $Countries->allCountries();
    $htmloption = "";

    foreach ($data as $row) {

        $htmloption .= "<option value='$row->id'>$row->country_name</option>";
    }

    return $htmloption;
}

function allCategories() {
    $Categories = new Model\Vehiclecategory();
    $data = $Categories->allCategories();
    $htmloption = "";

    foreach ($data as $row) {

        $htmloption .= "<option value='$row->id'>$row->name</option>";
    }

    return $htmloption;
}

function populateArray($postdata = array()) {
    $data = array();
    foreach ($postdata as $key => $value) {
        $data[$key] = $value;
    }
    return $data;
}

function arrayToObject($postdata = array()) {
    $object = new stdClass();
    if (!empty($postdata)) {
        foreach ($postdata as $key => $value) {
            $object->$key = $value;
        }
    }
    return $object;
}

function isloggedin() {
    $CI = & get_instance();
    if ($CI->session->userdata("logged_in") == TRUE) {
        return TRUE;
    } else {
        return FALSE;
    }
}
function isUser() {
    $CI = & get_instance();
    if ($CI->session->userdata("type") == 0) {
        return TRUE;
    } else {
        return FALSE;
    }
}
function isTransporter() {
    $CI = & get_instance();
    if ($CI->session->userdata("type") == 1) {
        return TRUE;
    } else {
        return FALSE;
    }
}
function isAdmin() {
    $CI = & get_instance();
    if ($CI->session->userdata("isAdmin") == TRUE) {
        return TRUE;
    } else {
        return FALSE;
    }
}

function allQuoteCategories() {
    $Categories = new Model\Quotecategory();
    $data = $Categories->allQuoteCategories();
    $htmloption = "";

    foreach ($data as $row) {

        $htmloption .= "<option value='$row->id'>$row->name</option>";
    }

    return $htmloption;
}

function lengthParam() {
    $model = new Model\Lengthmeasurement();
    $data = $model->selectAll();
    $htmloption = "";

    foreach ($data as $row) {

        $htmloption .= "<option value='$row->id'>$row->name</option>";
    }

    return $htmloption;
}

function weightParam() {
    $model = new Model\Weightmeasurement();
    $data = $model->selectAll();
    $htmloption = "";

    foreach ($data as $row) {

        $htmloption .= "<option value='$row->id'>$row->name</option>";
    }

    return $htmloption;
}

function needItDone() {
    $model = new Model\Needitdone();
    $data = $model->selectAll();
    $htmloption = "";

    foreach ($data as $row) {

        $htmloption .= "<option value='$row->id'>$row->name</option>";
    }

    return $htmloption;
}
function needItDoneCollection() {
    $model = new Model\Needitdonecollection();
    $data = $model->selectAll();
    $htmloption = "";

    foreach ($data as $row) {

        $htmloption .= "<option value='$row->id'>$row->name</option>";
    }

    return $htmloption;
}
function needItDoneDelivery() {
    $model = new Model\Needitdonedelivery();
    $data = $model->selectAll();
    $htmloption = "";

    foreach ($data as $row) {

        $htmloption .= "<option value='$row->id'>$row->name</option>";
    }

    return $htmloption;
}
function needItDoneFixed() {
    $model = new Model\Needitdonefixeddate();
    $data = $model->selectAll();
    $htmloption = "";

    foreach ($data as $row) {

        $htmloption .= "<option value='$row->id'>$row->name</option>";
    }

    return $htmloption;
}

function movingHomePropertyFromTo() {
    $model = new Model\Movinghomepropertyfromto();
    $data = $model->selectAll();
    $htmloption = "";

    foreach ($data as $row) {

        $htmloption .= "<option value='$row->id'>$row->name</option>";
    }

    return $htmloption;
}

function movingHomePropertyLevelFromTo() {
    $model = new Model\Movinghomepropertylevelfromto();
    $data = $model->selectAll();
    $htmloption = "";

    foreach ($data as $row) {

        $htmloption .= "<option value='$row->id'>$row->name</option>";
    }

    return $htmloption;
}

function manpoerFromTo() {
    $model = new Model\Manpowerfromto();
    $data = $model->selectAll();
    $htmloption = "";

    foreach ($data as $row) {

        $htmloption .= "<option value='$row->id'>$row->name</option>";
    }

    return $htmloption;
}

function volumeParam() {
    $model = new Model\Volumemesurement();
    $data = $model->selectAll();
    $htmloption = "";

    foreach ($data as $row) {

        $htmloption .= "<option value='$row->id'>$row->name</option>";
    }

    return $htmloption;
}

function officemovespropertyFromTo() {
    $model = new Model\Officemovespropertyfromto();
    $data = $model->selectAll();
    $htmloption = "";

    foreach ($data as $row) {

        $htmloption .= "<option value='$row->id'>$row->name</option>";
    }

    return $htmloption;
}

function officemovesPropertyLevelsFromTo() {
    $model = new Model\Officemovespropertylevelsfromto();
    $data = $model->selectAll();
    $htmloption = "";

    foreach ($data as $row) {

        $htmloption .= "<option value='$row->id'>$row->name</option>";
    }

    return $htmloption;
}

function officemovesFloorsFromTo() {
    $model = new Model\Officemovesfloorsfromto();
    $data = $model->selectAll();
    $htmloption = "";

    foreach ($data as $row) {

        $htmloption .= "<option value='$row->id'>$row->name</option>";
    }

    return $htmloption;
}

function officemovesParkingFromTo() {
    $model = new Model\Officemovesparkingfromto();
    $data = $model->selectAll();
    $htmloption = "";

    foreach ($data as $row) {

        $htmloption .= "<option value='$row->id'>$row->name</option>";
    }

    return $htmloption;
}

function officemovesWorkstations() {
    $model = new Model\Officemovesworkstations();
    $data = $model->selectAll();
    $htmloption = "";

    foreach ($data as $row) {

        $htmloption .= "<option value='$row->id'>$row->name</option>";
    }

    return $htmloption;
}

function allcompanytypes() {
    $model = new Model\companytype();
    $data = $model->alltypes();
    $htmloption = "";

    foreach ($data as $row) {

        $htmloption .= "<option value='$row->id'>$row->name</option>";
    }

    return $htmloption;
}

function parcelsCategory() {
    $model = new Model\Parcelscategory();
    $data = $model->selectAll();
    $htmloption = "";

    foreach ($data as $row) {

        $htmloption .= "<option value='$row->id'>$row->name</option>";
    }

    return $htmloption;
}

function insuranceParam() {
    $model = new Model\Insurancemeasurement();
    $data = $model->selectAll();
    $htmloption = "";

    foreach ($data as $row) {

        $htmloption .= "<option value='$row->id'>$row->name</option>";
    }

    return $htmloption;
}

function get_client_ip() {
    $client  = @$_SERVER['HTTP_CLIENT_IP'];
    $forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
    $remote  = $_SERVER['REMOTE_ADDR'];

    if(filter_var($client, FILTER_VALIDATE_IP))
    {
        $ip = $client;
    }
    elseif(filter_var($forward, FILTER_VALIDATE_IP))
    {
        $ip = $forward;
    }
    else
    {
        $ip = $remote;
    }
 return $ip;
}

function feedback() {
    $model = new Model\Feedback();
    $data = $model->selectAll();
    $htmloption = "";

    foreach ($data as $row) {

        $htmloption .= "<option value='$row->id'>$row->name</option>";
    }

    return $htmloption;
}

function selecthomepagetext()
    {
   $text = new Model\Admin_homepage();
    $data = $text->selecthomepagetext();
    return $data['description'];

    }
    
function selectcustomertext()
    {
   $text = new Model\Admin_customertext();
    $data = $text->selectcustomertext();
    return $data;

    }
    
    function selecthowitworks()
    {
   $text = new Model\howdoesitwork();
    $data = $text->selecthowitworks();
    return $data['contents'];

    }
    
     function selectprivacypolicy()
    {
   $text = new Model\privacypolicy();
    $data = $text->selectprivacypolicy();
    return $data['contents'];

    }
    
    function selecttermscondition()
    {
   $text = new Model\Terms_conditions();
    $data = $text->selecttermscondition();
    return $data['contents'];

    }
    
    function getTransporterVehicleCategory()
    {
        $CI = & get_instance();
        $text = Model\Userfields::find_by_users_id($CI->session->userdata('id'), FALSE);
        if($text)
        {
    $data = $text->vehiclecategory_id;
    return $data;
        }
        else
        {
            return 0;
        }
    }
    function getTransporterPostalCode()
    {
        $CI = & get_instance();
        $text = Model\Userfields::find_by_users_id($CI->session->userdata('id'), FALSE);
        if($text)
        {
    $data = $text->postcode;
    return $data;
        }
        else
        {
            return 0;
        }
    }
    function userid()
    {
         $CI = & get_instance();
         return $CI->session->userdata('id');
    }
    
    function customPrint($name,$value)
    {
        
        if($value!=0)
        {
            $html = "";
            return $html.="<div class='col-sm-3'>$name : $value</div>";
        }

        
    }
    
    
     function selectfeedback()
    {
   $text = new Model\Admin_feedback();
    $data = $text->selectfeedback();
    return $data;

    }
    
    function faqname()
    {
     
    $model = new Model\Getquotes();
    $result = $model->getfaqname();
    $htmloption = "";

    $optgrouparray = array();
    foreach ($result as $row)
        {

        if (sizeof($optgrouparray) > 0)
            {

            $arraysearch = in_array($row->id, $optgrouparray);
            if (!$arraysearch)
                {
                $htmloption .= "<optgroup label='$row->name'>$row->name</optgroup>";
                }
            } else
            {
            $htmloption .= "<optgroup label='$row->name'>$row->name</optgroup>";
            }
        array_push($optgrouparray, $row->id);

        $htmloption .= "<option value='$row->msgid'>$row->message</option>";
        
        }

    return $htmloption;
    }
  
?>
