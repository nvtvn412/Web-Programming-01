<?php 
	include 'partials/header.html';
?>
<?php 
        @session_start();
        if (!array_key_exists('requests', $_SESSION)) {
            $_SESSION['requests'] = array();
        }

 	    $valueX = $_POST["valueX"];
    	$valueY = $_POST["valueY"];
        $valueR = $_POST["valueR"];

        $valueY = str_replace(",", ".", $valueY);

        $exp = 1e-9;

        function sqr($a) {
            return $a * $a;
        }

        if (is_numeric($valueX) && is_numeric($valueY) && is_numeric($valueR)) {
            
            $check = "FALSE";            
            if ($valueX > -$exp && $valueY > -$exp) {
                // 1st
                if ((sqr($valueX) + sqr($valueY)) < (sqr(1.*$valueR/2) + $exp)) {
                    $check = "TRUE";
                }
            } elseif ($valueX < $exp && $valueY > -$exp) {
                // 2nd
                // y = x/2 + r/2
                if ($valueY < 1.*$valueX/2 + 1.*$valueR/2 + $exp) {
                    $check = "TRUE";
                }            
            } elseif ($valueX > -$exp && $valueY < $exp) {
                // 4th
                if ($valueX < (1.*$valueR/2) + $exp && $valueY > -$valueR - $exp) {
                    $check = "TRUE";
                }                
            }
            $_SESSION['requests'][] = array('valueX' => $valueX, 'valueY' => $valueY, 'valueR' => $valueR, 'check' => $check);
        } else {
        }
?>
<div class="container container-horizontal">
    <table class="center">        
        <tr>
            <th>X</th>
            <th>Y</th>
            <th>R</th>
            <th>Validation</th>
        </tr>
        <?php foreach($_SESSION['requests'] as $request) {?> 
            <tr>
                <td><?= $request['valueX']?></td>
                <td><?= $request['valueY']?></td>
                <td><?= $request['valueR']?></td>
                <td><?= $request['check']?></td>
            </tr>
        <?php }?>
    </table>
    <br>
    <a href="./index.html">Make New Request</a>
</div>
<?php 
	include 'partials/footer.html';
?>