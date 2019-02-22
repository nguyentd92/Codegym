<?php
/**
* Created by PhpStorm.
* User: Administrator
* Date: 22/02/2019
* Time: 9:21 SA
*/
echo '<ul>';
foreach ($posts as $post){
   echo '<li>
   <a href="#">'. $post->title. '</a>
   </li>';
}
echo '</ul>';
?>