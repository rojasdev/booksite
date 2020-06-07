<div id="page-title">
    <h1> Manage Books</h1>
</div>
<?php
    switch($subpage){
        case 'detail': 
            require_once 'bookdetail.php';
        break;
        case 'create': 
            require_once 'booknew.php';
        break;
        case 'update': 
            require_once 'bookupdate.php';
        break;
        case 'delete': 
            require_once 'bookdelete.php';
        break;
        default:
            require_once 'booklist.php';
        break;
    
    }
?>