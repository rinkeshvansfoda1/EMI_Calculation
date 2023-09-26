<?php
$amount = $_POST['amount'];
$rate_in_year = $_POST['rate'];
$rate = $rate_in_year / 1200;
$term_in_year = $_POST['tenure'];
$term = $term_in_year * 12;
$emi = $amount * $rate * (pow(1 + $rate, $term) / (pow(1 + $rate, $term) - 1));
$year = date("Y");
$today = date('y-m-d');
$month = strtotime($today);
$principle_paid = $amount / $term_in_year;
$interest_paid = (($emi * 12) - $amount);
// $total_payment = $principle_paid + $interest_paid;
$outstanding = $amount;
$term_in_month = ($term_in_year * 12);
?>



<html>

<body>

    <br><br>
    <h2 class="section-title">Your Monthly Loan EMI: <img src="images/rupee-icon.png" alt="Rs" title="Rs">
        <span id="emiVal" class="emi-amount"><?php echo round($emi); ?></span>
    </h2><br><br>
    
    <div class="container">
    <table class="table table-striped table-hover responsive-sm">
        <thead>
            <tr>
                <th>Year</th>
                <th>Principal Paid(A)</th>
                <th>Interest Paid(B)</th>
                <th>Total Payment(A+B)</th>
                <th>Outstanding Loan Balance</th>
            </tr>
        </thead>
        <?php
        $last_principal = $emi / 1.01;
        $first_principal = 0;
        for ($x = 1; $x < $term_in_month; $x++) {
            $last_principal = $last_principal - ($last_principal * 0.99 / 100);
        }
        $first_principal = round($last_principal);
        $principle_paid = $first_principal;

        while ($term_in_month) {
            $outstanding = $outstanding - round($principle_paid);
            if ($outstanding < 0) {
                $outstanding = 0;
            }
            $interest_paid = $emi - $principle_paid;
            $total_payment = $principle_paid + $interest_paid;
        ?>
            <tr>
                <td>
                    <?php
                    echo date('F Y', $month), PHP_EOL;
                    $month = strtotime("+1 month", $month);
                    ?>
                </td>
                <td>
                    <?php echo round($principle_paid); ?>
                </td>
                <td>
                    <?php echo round($interest_paid); ?>
                </td>
                <td>
                    <?php echo round($total_payment); ?>
                </td>
                <td>
                    <?php echo round($outstanding); ?>
                </td>
            </tr>
        <?php
            $principle_paid = $principle_paid + ($principle_paid / 100);

            $term_in_month = $term_in_month - 1;
        } ?>
    </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>