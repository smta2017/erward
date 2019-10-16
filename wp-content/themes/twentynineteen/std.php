
<?php
/**
Template Name: Student
*/
get_header();
?>

<?php
if($_POST['Submit']){
echo "sssss";
    // $age = $_POST['age'];
    // $name = $_POST['name'];
    // $dept = $_POST['dept'];


// $qur = $wpdb->insert('students',array(
//     'name'=>$name,
//     'age'=>$age,
//     'dept'=>$dept
// ));

// if ($qur==false) {
//     wp_die('inserting failed');
// }else{
//     echo "Data Inserted Successful<p />";
// }
 
}
else{
?>
<form action="" method="post">
    <label>Student Name: <input type="text" name="name" placeholder="name of student"></label>
    <label>Student age: <input type="text" name="age" placeholder="student age "></label>
    <label>Student Department: <input type="text" name="dept" placeholder="department of student"></label>
    <input type="submit" name="Submit" value="Save">
</form>

<?php
}
?>