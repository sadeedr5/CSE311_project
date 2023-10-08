<div class="table_body" style="width: 100vh;     margin: 0 0 0 50vh;">
    <table>
        <thead>
            <tr>
                <th> Id </th>
                <th> Departure </th>
                <th> Arrival </th>
                <th> Available </th>
                <th> Price </th>
            </tr>
        </thead>
        <tbody>
            <?php
            $t = 1;
            $airport = $conn->query("SELECT * FROM airport_list ");
            while ($row = $airport->fetch_assoc()) {
                $aname[$row['airport_id']] = ucwords($row['location']);
            }
            $qry = $conn->query("SELECT f.*,a.airlines FROM flight_list f inner join airlines_list a on f.airline_id = a.airline_id  order by airline_id");
            while ($row = $qry->fetch_assoc()) :
                $booked = $conn->query("SELECT * FROM booked_flight where flight_id = " . $row['airline_id'])->num_rows;

            ?>
                <tr>
                    <td><?php echo $t++ ?></td>
                    <td><?php echo $aname[$row['departure_airport_id']]  ?> : <?php echo date('M d,Y h:i A', strtotime($row['departure_datetime'])) ?></td>
                    <td><?php echo $aname[$row['arrival_airport_id']] ?> : <?php echo date('M d,Y h:i A', strtotime($row['arrival_datetime']))  ?></td>
                    <td><?php echo $row['seats'] - $booked ?></td>
                    <td><?php echo number_format($row['price'], 2) ?></td>
                </tr>

            <?php endwhile; ?>
        </tbody>
    </table>
</div>