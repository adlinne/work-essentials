<?php


$conn =  mysqli_connect("localhost" , "root" , "" ,"work_essentials");

if(!$conn){
	die("Error connecting to database:" . mysqli_connect_error());
}
define ('ROOT_PATH', realpath(dirname(__FILE__)));

define('BASE_URL', 'http://localhost/work/work essentials');


function getPublishedPosts() {
	global $conn;
	$sql = "SELECT * FROM product";
	$result = mysqli_query($conn,$sql);

	$posts = mysqli_fetch_all($result,MYSQLI_ASSOC);


	return $posts;
}
?>

<?php	$posts = getPublishedPosts();	?>

<?php foreach ($posts as $post): ?>

	

	<img src="<?php echo BASE_URL .'/product/' . $post['p_image']; ?>" alt="" style="height:100px;" 
style="width:100px;">


<?php endforeach; ?>
