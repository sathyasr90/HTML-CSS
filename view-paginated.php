<html>
<head>
<title>View Records</title>
</head>
<body>
<?php
include('connect-db.php');
$per_page = 3;
$result = mysqli_query("SELECT * FROM players");
$total_results = mysqli_num_rows($result);
$total_pages = ceil($total_results / $per_page);
if (isset($_GET['page']) && is_numeric($_GET['page']))
{
$show_page = $_GET['page'];
if ($show_page > 0 && $show_page <= $total_pages)
{
$start = ($show_page -1) * $per_page;
$end = $start + $per_page;
}
else
{
$start = 0;
$end = $per_page;
}
}
else
{
$start = 0;
$end = $per_page;
}
echo "<p><a href='view.php'>View All</a> | <b>View Page:</b> ";
for ($i = 1; $i <= $total_pages; $i++)
{
echo "<a href='view-paginated.php?page=$i'>$i</a> ";
}
echo "</p>";
echo "<table border='1' cellpadding='10'>";
echo "<tr> <th>ID</th> <th>First Name</th> <th>Last Name</th> <th></th> <th></th></tr>";
for ($i = $start; $i < $end; $i++)
{
if ($i == $total_results) { break; }
echo "<tr>";
echo '<td>' . mysqli_result($result, $i, 'id') . '</td>';
echo '<td>' . mysqli_result($result, $i, 'firstname') . '</td>';
echo '<td>' . mysqli_result($result, $i, 'lastname') . '</td>';
echo '<td><a href="edit.php?id=' . mysqli_result($result, $i, 'id') . '">Edit</a></td>';
echo '<td><a href="delete.php?id=' . mysqli_result($result, $i, 'id') . '">Delete</a></td>';
echo "</tr>";
}
echo "</table>";
?>
<p><a href="new.php">Add a new record</a></p>
</body>
</html>