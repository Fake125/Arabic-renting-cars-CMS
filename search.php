<?php
ob_start();
include_once ("./Includes/config.php");
if (isset($_GET["s"])) {
    $s = $_GET["s"];
    $TITLE = (Storage::check_lang()=="ar") ? "البحث عن : $s" : "Search about : $s";
    function xx(){
        global $s;  
    $keywords = explode(" ", $s);
    $POSTS = Member::Search($keywords);
    $lang = Storage::check_lang();
    $lang = ($lang == "ar") ? "_ar" : "";
    foreach ($POSTS as $h => $r) {
        if($r>0):
            $post = Member::get_post($h);
        
        ?>

        
           <div style='position:static;' class='col-sm-4 col-lg-4 col-md-4 '>
                        <div class='thumbnail'>
                           <a href='./car.php?id=<?php echo $post["id"] ?>'> <img src='<?php echo $post["img"]; ?>' alt=''>
                            <div class='caption'>
                                
                                <h4 style='text-align:center;'> <?php echo $post["title" . $lang]; ?></h4></a>
                            </div>
                           

                        </div>
                    </div>        
        
        <?php
        endif;

        }

        }
        call_style(Storage::check_user(),Storage::check_lang(),"search.html");
        }
    ?>