<?php
include 'connect.php';
$conn = OpenCon();
$sql = "SELECT walkerid, walkid, message, confirmed FROM walkrequest";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
echo "<table><tr>
<th class='border-class'>Sent by</th>
<th class='border-class'>Walk Post</th>
<th class='borderclass'>Message</th>
<th class='borderclass'>Confirmed?</th>
</tr>";
// output data of each row
while($row = $result->fetch_assoc()) {
 echo "<tr><td class='borderclass'>".$row["walkerid"]."</td>
 <td class='borderclass'>".$row["walkid"]."</td>
 <td class='borderclass'>".$row["message"]."</td>
 <td class='borderclass'>".$row["confirmed"]."</td></tr>";
}
echo "</table>";
} else {
echo "0 results";
}
CloseCon($conn);
?>