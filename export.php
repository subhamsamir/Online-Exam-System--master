 <?php  
      //export.php  
if (isset($_POST["export"])) {
    $connect = mysqli_connect("localhost", "root", "", "online_exam");
    header('Content-Type: text/csv; charset=utf-8');
    header('Content-Disposition: attachment; filename=data.csv');
    $output = fopen("php://output", "w");
    fputcsv($output, array('email', 'eid', 'score', 'level', 'Correct answer', 'wrong answer'));
    $query = "SELECT * from history";
    $result = mysqli_query($connect, $query);
    while ($row = mysqli_fetch_assoc($result)) {
        fputcsv($output, $row);
    }
    fclose($output);
}
?>  
