  <div id="divbtn">
    <span class='i-count'>Total Visitors: <strong>
    <?php
    $visitorCount = intval(file_get_contents('visitor_count.txt'));
    echo $visitorCount;
    ?>
    </strong></span>
     <?php
     $visitorCount++;
    file_put_contents('visitor_count.txt', $visitorCount);