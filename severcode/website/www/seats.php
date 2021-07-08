<?php
	include_once "db_functions.php";	
	session_start(); 
    $curr_user = $_SESSION['curr_user'];

    if (!$curr_user) {
        header("location:index.php");
    }
	
    $conn = connectDB();
    
    $sql = "SELECT * FROM Seats";
    $result = $conn->query($sql);
    $array = array();

    $state = array();
    while($row = mysqli_fetch_assoc($result)){
        $array[]=$row;

        // $state[]=$row['State'];

        if ($row['State'] == 0){
            $state[] = "available";
        }elseif ($row['State'] == 1){
            $state[] = "byitems";
        }else{
            $state[] = "bypeople";
        }
    }

    $conn->close();
?>

<script language="JavaScript">
    setTimeout(function(){location.reload()},60000); //指定60秒刷新一次
</script>

<!DOCTYPE html>
<html lang="en">


<head>
    <link rel="stylesheet" href="statecolor.css">
</head>
<div id="labtrack_div" style="text-align: center; font-family: Ubuntu; color: #52c4be">
    <h3 >SeatU: Library Seating Monitoring System</h3>
    <a class="btn btn-primary btn-xl js-scroll-trigger" role="button" href="demo.php"><h4>Demo Version</h4></a>
    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" class="" app-context="doc-2d" x="0px" y="0px" width="1250" height="1000" id="labtrack">

        <g id="jvs-guides" transform="matrix(1 0 0 1 0 0)"></g>
            <g id="jvs-content" enable-background="new">
                <g transform="matrix(1,0,0,1,0,0)" name="Layer" jvs-layer-color="#fb0094" class="jvs-layer selected">
                    <image transform="matrix(1 0 0 1 20 35)" width="1200" height="800" href="Plane_v9.png" rx="0" y="0" x="0"></image>

                    <!-- top-top -->
                    <rect class="<?php echo $state[0]; ?>" id="ZJUINTL-LIB-001" transform="matrix(1 0 0 1 520 60)" width="13" height="20" opacity="1" rx="0" y="0" x="0"></rect>
                    <rect class="<?php echo $state[1]; ?>" id="ZJUINTL-LIB-002" transform="matrix(1 0 0 1 520 82)" width="13" height="20" opacity="1" rx="0" y="0" x="0"></rect>
                    <rect class="<?php echo $state[2]; ?>" id="ZJUINTL-LIB-003" transform="matrix(1 0 0 1 535 60)" width="13" height="20" opacity="1" rx="0" y="0" x="0"></rect>
                    <rect class="<?php echo $state[3]; ?>" id="ZJUINTL-LIB-004" transform="matrix(1 0 0 1 535 82)" width="13" height="20" opacity="1" rx="0" y="0" x="0"></rect>

                    <rect class="available" id="ZJUINTL-LIB-005" transform="matrix(1 0 0 1 560 60)" width="13" height="20" opacity="1" rx="0" y="0" x="0"></rect>
                    <rect class="available" id="ZJUINTL-LIB-006" transform="matrix(1 0 0 1 560 82)" width="13" height="20" opacity="1" rx="0" y="0" x="0"></rect>
                    <rect class="available" id="ZJUINTL-LIB-007" transform="matrix(1 0 0 1 575 60)" width="13" height="20" opacity="1" rx="0" y="0" x="0"></rect>
                    <rect class="available" id="ZJUINTL-LIB-008" transform="matrix(1 0 0 1 575 82)" width="13" height="20" opacity="1" rx="0" y="0" x="0"></rect>

                    <rect class="available" id="ZJUINTL-LIB-009" transform="matrix(1 0 0 1 600 60)" width="13" height="20" opacity="1" rx="0" y="0" x="0"></rect>
                    <rect class="available" id="ZJUINTL-LIB-010" transform="matrix(1 0 0 1 600 82)" width="13" height="20" opacity="1" rx="0" y="0" x="0"></rect>
                    <rect class="available" id="ZJUINTL-LIB-011" transform="matrix(1 0 0 1 615 60)" width="13" height="20" opacity="1" rx="0" y="0" x="0"></rect>
                    <rect class="available" id="ZJUINTL-LIB-012" transform="matrix(1 0 0 1 615 82)" width="13" height="20" opacity="1" rx="0" y="0" x="0"></rect>

                    <rect class="available" id="ZJUINTL-LIB-013" transform="matrix(1 0 0 1 640 60)" width="13" height="20" opacity="1" rx="0" y="0" x="0"></rect>
                    <rect class="available" id="ZJUINTL-LIB-014" transform="matrix(1 0 0 1 640 82)" width="13" height="20" opacity="1" rx="0" y="0" x="0"></rect>
                    <rect class="available" id="ZJUINTL-LIB-015" transform="matrix(1 0 0 1 655 60)" width="13" height="20" opacity="1" rx="0" y="0" x="0"></rect>
                    <rect class="available" id="ZJUINTL-LIB-016" transform="matrix(1 0 0 1 655 82)" width="13" height="20" opacity="1" rx="0" y="0" x="0"></rect>

                    <rect class="available" id="ZJUINTL-LIB-017" transform="matrix(1 0 0 1 680 60)" width="13" height="20" opacity="1" rx="0" y="0" x="0"></rect>
                    <rect class="available" id="ZJUINTL-LIB-018" transform="matrix(1 0 0 1 680 82)" width="13" height="20" opacity="1" rx="0" y="0" x="0"></rect>
                    <rect class="available" id="ZJUINTL-LIB-019" transform="matrix(1 0 0 1 695 60)" width="13" height="20" opacity="1" rx="0" y="0" x="0"></rect>
                    <rect class="available" id="ZJUINTL-LIB-020" transform="matrix(1 0 0 1 695 82)" width="13" height="20" opacity="1" rx="0" y="0" x="0"></rect>

                    <rect class="available" id="ZJUINTL-LIB-021" transform="matrix(1 0 0 1 720 60)" width="13" height="20" opacity="1" rx="0" y="0" x="0"></rect>
                    <rect class="available" id="ZJUINTL-LIB-022" transform="matrix(1 0 0 1 720 82)" width="13" height="20" opacity="1" rx="0" y="0" x="0"></rect>
                    <rect class="available" id="ZJUINTL-LIB-023" transform="matrix(1 0 0 1 735 60)" width="13" height="20" opacity="1" rx="0" y="0" x="0"></rect>
                    <rect class="available" id="ZJUINTL-LIB-024" transform="matrix(1 0 0 1 735 82)" width="13" height="20" opacity="1" rx="0" y="0" x="0"></rect>

                    <!-- top-down -->
                    <rect class="byitems" id="ZJUINTL-LIB-025" transform="matrix(1 0 0 1 520 230)" width="13" height="20" opacity="1" rx="0" y="0" x="0"></rect>
                    <rect class="byitems" id="ZJUINTL-LIB-026" transform="matrix(1 0 0 1 520 252)" width="13" height="20" opacity="1" rx="0" y="0" x="0"></rect>
                    <rect class="bypeople" id="ZJUINTL-LIB-027" transform="matrix(1 0 0 1 535 230)" width="13" height="20" opacity="1" rx="0" y="0" x="0"></rect>
                    <rect class="bypeople" id="ZJUINTL-LIB-028" transform="matrix(1 0 0 1 535 252)" width="13" height="20" opacity="1" rx="0" y="0" x="0"></rect>

                    <rect class="available" id="ZJUINTL-LIB-029" transform="matrix(1 0 0 1 560 230)" width="13" height="20" opacity="1" rx="0" y="0" x="0"></rect>
                    <rect class="available" id="ZJUINTL-LIB-030" transform="matrix(1 0 0 1 560 252)" width="13" height="20" opacity="1" rx="0" y="0" x="0"></rect>
                    <rect class="available" id="ZJUINTL-LIB-031" transform="matrix(1 0 0 1 575 230)" width="13" height="20" opacity="1" rx="0" y="0" x="0"></rect>
                    <rect class="available" id="ZJUINTL-LIB-032" transform="matrix(1 0 0 1 575 252)" width="13" height="20" opacity="1" rx="0" y="0" x="0"></rect>

                    <rect class="available" id="ZJUINTL-LIB-033" transform="matrix(1 0 0 1 600 230)" width="13" height="20" opacity="1" rx="0" y="0" x="0"></rect>
                    <rect class="available" id="ZJUINTL-LIB-034" transform="matrix(1 0 0 1 600 252)" width="13" height="20" opacity="1" rx="0" y="0" x="0"></rect>
                    <rect class="available" id="ZJUINTL-LIB-035" transform="matrix(1 0 0 1 615 230)" width="13" height="20" opacity="1" rx="0" y="0" x="0"></rect>
                    <rect class="available" id="ZJUINTL-LIB-036" transform="matrix(1 0 0 1 615 252)" width="13" height="20" opacity="1" rx="0" y="0" x="0"></rect>

                    <rect class="available" id="ZJUINTL-LIB-037" transform="matrix(1 0 0 1 640 230)" width="13" height="20" opacity="1" rx="0" y="0" x="0"></rect>
                    <rect class="available" id="ZJUINTL-LIB-038" transform="matrix(1 0 0 1 640 252)" width="13" height="20" opacity="1" rx="0" y="0" x="0"></rect>
                    <rect class="available" id="ZJUINTL-LIB-039" transform="matrix(1 0 0 1 655 230)" width="13" height="20" opacity="1" rx="0" y="0" x="0"></rect>
                    <rect class="available" id="ZJUINTL-LIB-040" transform="matrix(1 0 0 1 655 252)" width="13" height="20" opacity="1" rx="0" y="0" x="0"></rect>

                    <rect class="available" id="ZJUINTL-LIB-041" transform="matrix(1 0 0 1 680 230)" width="13" height="20" opacity="1" rx="0" y="0" x="0"></rect>
                    <rect class="available" id="ZJUINTL-LIB-042" transform="matrix(1 0 0 1 680 252)" width="13" height="20" opacity="1" rx="0" y="0" x="0"></rect>
                    <rect class="available" id="ZJUINTL-LIB-043" transform="matrix(1 0 0 1 695 230)" width="13" height="20" opacity="1" rx="0" y="0" x="0"></rect>
                    <rect class="available" id="ZJUINTL-LIB-044" transform="matrix(1 0 0 1 695 252)" width="13" height="20" opacity="1" rx="0" y="0" x="0"></rect>

                    <rect class="available" id="ZJUINTL-LIB-045" transform="matrix(1 0 0 1 720 230)" width="13" height="20" opacity="1" rx="0" y="0" x="0"></rect>
                    <rect class="available" id="ZJUINTL-LIB-046" transform="matrix(1 0 0 1 720 252)" width="13" height="20" opacity="1" rx="0" y="0" x="0"></rect>
                    <rect class="available" id="ZJUINTL-LIB-047" transform="matrix(1 0 0 1 735 230)" width="13" height="20" opacity="1" rx="0" y="0" x="0"></rect>
                    <rect class="available" id="ZJUINTL-LIB-048" transform="matrix(1 0 0 1 735 252)" width="13" height="20" opacity="1" rx="0" y="0" x="0"></rect>

                    <!-- top-left -->
                    <rect class="available" id="ZJUINTL-LIB-049" transform="matrix(0.707 -0.707 0.707 0.707 420 110)" width="13" height="20" opacity="1" rx="0" y="0" x="0"></rect>
                    <rect class="available" id="ZJUINTL-LIB-050" transform="matrix(0.707 -0.707 0.707 0.707 435.5 125.5)" width="13" height="20" opacity="1" rx="0" y="0" x="0"></rect>
                    <rect class="available" id="ZJUINTL-LIB-051" transform="matrix(0.707 -0.707 0.707 0.707 451 141)" width="13" height="20" opacity="1" rx="0" y="0" x="0"></rect>
                    <rect class="available" id="ZJUINTL-LIB-052" transform="matrix(0.707 -0.707 0.707 0.707 409.5 120.5)" width="13" height="20" opacity="1" rx="0" y="0" x="0"></rect>
                    <rect class="available" id="ZJUINTL-LIB-053" transform="matrix(0.707 -0.707 0.707 0.707 425 136)" width="13" height="20" opacity="1" rx="0" y="0" x="0"></rect>
                    <rect class="available" id="ZJUINTL-LIB-054" transform="matrix(0.707 -0.707 0.707 0.707 440.5 151.5)" width="13" height="20" opacity="1" rx="0" y="0" x="0"></rect>

                    <rect class="available" id="ZJUINTL-LIB-055" transform="matrix(0.707 -0.707 0.707 0.707 393 137)" width="13" height="20" opacity="1" rx="0" y="0" x="0"></rect>
                    <rect class="available" id="ZJUINTL-LIB-056" transform="matrix(0.707 -0.707 0.707 0.707 408.5 152.5)" width="13" height="20" opacity="1" rx="0" y="0" x="0"></rect>
                    <rect class="available" id="ZJUINTL-LIB-057" transform="matrix(0.707 -0.707 0.707 0.707 424 168)" width="13" height="20" opacity="1" rx="0" y="0" x="0"></rect>
                    <rect class="available" id="ZJUINTL-LIB-058" transform="matrix(0.707 -0.707 0.707 0.707 382.5 147.5)" width="13" height="20" opacity="1" rx="0" y="0" x="0"></rect>
                    <rect class="available" id="ZJUINTL-LIB-059" transform="matrix(0.707 -0.707 0.707 0.707 398 163)" width="13" height="20" opacity="1" rx="0" y="0" x="0"></rect>
                    <rect class="available" id="ZJUINTL-LIB-060" transform="matrix(0.707 -0.707 0.707 0.707 413.5 178.5)" width="13" height="20" opacity="1" rx="0" y="0" x="0"></rect>

                    <rect class="available" id="ZJUINTL-LIB-061" transform="matrix(0.707 -0.707 0.707 0.707 366 164)" width="13" height="20" opacity="1" rx="0" y="0" x="0"></rect>
                    <rect class="available" id="ZJUINTL-LIB-062" transform="matrix(0.707 -0.707 0.707 0.707 381.5 179.5)" width="13" height="20" opacity="1" rx="0" y="0" x="0"></rect>
                    <rect class="available" id="ZJUINTL-LIB-063" transform="matrix(0.707 -0.707 0.707 0.707 355.5 174.5)" width="13" height="20" opacity="1" rx="0" y="0" x="0"></rect>
                    <rect class="available" id="ZJUINTL-LIB-064" transform="matrix(0.707 -0.707 0.707 0.707 371 190)" width="13" height="20" opacity="1" rx="0" y="0" x="0"></rect>

                    <rect class="available" id="ZJUINTL-LIB-065" transform="matrix(0.707 -0.707 0.707 0.707 339 191)" width="13" height="20" opacity="1" rx="0" y="0" x="0"></rect>
                    <rect class="available" id="ZJUINTL-LIB-066" transform="matrix(0.707 -0.707 0.707 0.707 354.5 206.5)" width="13" height="20" opacity="1" rx="0" y="0" x="0"></rect>
                    <rect class="available" id="ZJUINTL-LIB-067" transform="matrix(0.707 -0.707 0.707 0.707 328.5 201.5)" width="13" height="20" opacity="1" rx="0" y="0" x="0"></rect>
                    <rect class="available" id="ZJUINTL-LIB-068" transform="matrix(0.707 -0.707 0.707 0.707 344 217)" width="13" height="20" opacity="1" rx="0" y="0" x="0"></rect>

                    <rect class="available" id="ZJUINTL-LIB-069" transform="matrix(0.707 -0.707 0.707 0.707 312 218)" width="13" height="20" opacity="1" rx="0" y="0" x="0"></rect>
                    <rect class="available" id="ZJUINTL-LIB-070" transform="matrix(0.707 -0.707 0.707 0.707 327.5 233.5)" width="13" height="20" opacity="1" rx="0" y="0" x="0"></rect>
                    <rect class="available" id="ZJUINTL-LIB-071" transform="matrix(0.707 -0.707 0.707 0.707 343 249)" width="13" height="20" opacity="1" rx="0" y="0" x="0"></rect>
                    <rect class="available" id="ZJUINTL-LIB-072" transform="matrix(0.707 -0.707 0.707 0.707 301.5 228.5)" width="13" height="20" opacity="1" rx="0" y="0" x="0"></rect>
                    <rect class="available" id="ZJUINTL-LIB-073" transform="matrix(0.707 -0.707 0.707 0.707 317 244)" width="13" height="20" opacity="1" rx="0" y="0" x="0"></rect>
                    <rect class="available" id="ZJUINTL-LIB-074" transform="matrix(0.707 -0.707 0.707 0.707 332.5 259.5)" width="13" height="20" opacity="1" rx="0" y="0" x="0"></rect>

                    <rect class="available" id="ZJUINTL-LIB-075" transform="matrix(0.707 -0.707 0.707 0.707 285 245)" width="13" height="20" opacity="1" rx="0" y="0" x="0"></rect>
                    <rect class="available" id="ZJUINTL-LIB-076" transform="matrix(0.707 -0.707 0.707 0.707 300.5 260.5)" width="13" height="20" opacity="1" rx="0" y="0" x="0"></rect>
                    <rect class="available" id="ZJUINTL-LIB-077" transform="matrix(0.707 -0.707 0.707 0.707 316 276)" width="13" height="20" opacity="1" rx="0" y="0" x="0"></rect>
                    <rect class="available" id="ZJUINTL-LIB-078" transform="matrix(0.707 -0.707 0.707 0.707 274.5 255.5)" width="13" height="20" opacity="1" rx="0" y="0" x="0"></rect>
                    <rect class="available" id="ZJUINTL-LIB-079" transform="matrix(0.707 -0.707 0.707 0.707 290 271)" width="13" height="20" opacity="1" rx="0" y="0" x="0"></rect>
                    <rect class="available" id="ZJUINTL-LIB-080" transform="matrix(0.707 -0.707 0.707 0.707 305.5 286.5)" width="13" height="20" opacity="1" rx="0" y="0" x="0"></rect>

                    <!-- left-left -->
                    <rect class="bypeople" id="ZJUINTL-LIB-081" transform="matrix(1 0 0 1 240 360)" width="20" height="13" opacity="1" rx="0" y="0" x="0"></rect>
                    <rect class="available" id="ZJUINTL-LIB-082" transform="matrix(1 0 0 1 262 360)" width="20" height="13" opacity="1" rx="0" y="0" x="0"></rect>
                    <rect class="available" id="ZJUINTL-LIB-083" transform="matrix(1 0 0 1 240 375)" width="20" height="13" opacity="1" rx="0" y="0" x="0"></rect>
                    <rect class="available" id="ZJUINTL-LIB-084" transform="matrix(1 0 0 1 262 375)" width="20" height="13" opacity="1" rx="0" y="0" x="0"></rect>

                    <rect class="bypeople" id="ZJUINTL-LIB-085" transform="matrix(1 0 0 1 295 360)" width="20" height="13" opacity="1" rx="0" y="0" x="0"></rect>
                    <rect class="byitems" id="ZJUINTL-LIB-086" transform="matrix(1 0 0 1 317 360)" width="20" height="13" opacity="1" rx="0" y="0" x="0"></rect>
                    <rect class="bypeople" id="ZJUINTL-LIB-087" transform="matrix(1 0 0 1 295 375)" width="20" height="13" opacity="1" rx="0" y="0" x="0"></rect>
                    <rect class="bypeople" id="ZJUINTL-LIB-088" transform="matrix(1 0 0 1 317 375)" width="20" height="13" opacity="1" rx="0" y="0" x="0"></rect>

                    <rect class="available" id="ZJUINTL-LIB-089" transform="matrix(1 0 0 1 240 410)" width="20" height="13" opacity="1" rx="0" y="0" x="0"></rect>
                    <rect class="available" id="ZJUINTL-LIB-090" transform="matrix(1 0 0 1 262 410)" width="20" height="13" opacity="1" rx="0" y="0" x="0"></rect>
                    <rect class="available" id="ZJUINTL-LIB-091" transform="matrix(1 0 0 1 240 425)" width="20" height="13" opacity="1" rx="0" y="0" x="0"></rect>
                    <rect class="available" id="ZJUINTL-LIB-092" transform="matrix(1 0 0 1 262 425)" width="20" height="13" opacity="1" rx="0" y="0" x="0"></rect>

                    <rect class="available" id="ZJUINTL-LIB-093" transform="matrix(1 0 0 1 295 410)" width="20" height="13" opacity="1" rx="0" y="0" x="0"></rect>
                    <rect class="available" id="ZJUINTL-LIB-094" transform="matrix(1 0 0 1 317 410)" width="20" height="13" opacity="1" rx="0" y="0" x="0"></rect>
                    <rect class="available" id="ZJUINTL-LIB-095" transform="matrix(1 0 0 1 295 425)" width="20" height="13" opacity="1" rx="0" y="0" x="0"></rect>
                    <rect class="available" id="ZJUINTL-LIB-096" transform="matrix(1 0 0 1 317 425)" width="20" height="13" opacity="1" rx="0" y="0" x="0"></rect>

                    <rect class="available" id="ZJUINTL-LIB-097" transform="matrix(1 0 0 1 240 460)" width="20" height="13" opacity="1" rx="0" y="0" x="0"></rect>
                    <rect class="available" id="ZJUINTL-LIB-098" transform="matrix(1 0 0 1 262 460)" width="20" height="13" opacity="1" rx="0" y="0" x="0"></rect>
                    <rect class="available" id="ZJUINTL-LIB-099" transform="matrix(1 0 0 1 240 475)" width="20" height="13" opacity="1" rx="0" y="0" x="0"></rect>
                    <rect class="available" id="ZJUINTL-LIB-100" transform="matrix(1 0 0 1 262 475)" width="20" height="13" opacity="1" rx="0" y="0" x="0"></rect>

                    <rect class="available" id="ZJUINTL-LIB-101" transform="matrix(1 0 0 1 295 460)" width="20" height="13" opacity="1" rx="0" y="0" x="0"></rect>
                    <rect class="available" id="ZJUINTL-LIB-102" transform="matrix(1 0 0 1 317 460)" width="20" height="13" opacity="1" rx="0" y="0" x="0"></rect>
                    <rect class="available" id="ZJUINTL-LIB-103" transform="matrix(1 0 0 1 295 475)" width="20" height="13" opacity="1" rx="0" y="0" x="0"></rect>
                    <rect class="available" id="ZJUINTL-LIB-104" transform="matrix(1 0 0 1 317 475)" width="20" height="13" opacity="1" rx="0" y="0" x="0"></rect>

                    <rect class="available" id="ZJUINTL-LIB-105" transform="matrix(1 0 0 1 240 510)" width="20" height="13" opacity="1" rx="0" y="0" x="0"></rect>
                    <rect class="available" id="ZJUINTL-LIB-106" transform="matrix(1 0 0 1 262 510)" width="20" height="13" opacity="1" rx="0" y="0" x="0"></rect>
                    <rect class="available" id="ZJUINTL-LIB-107" transform="matrix(1 0 0 1 240 525)" width="20" height="13" opacity="1" rx="0" y="0" x="0"></rect>
                    <rect class="available" id="ZJUINTL-LIB-108" transform="matrix(1 0 0 1 262 525)" width="20" height="13" opacity="1" rx="0" y="0" x="0"></rect>

                    <rect class="available" id="ZJUINTL-LIB-109" transform="matrix(1 0 0 1 295 510)" width="20" height="13" opacity="1" rx="0" y="0" x="0"></rect>
                    <rect class="available" id="ZJUINTL-LIB-110" transform="matrix(1 0 0 1 317 510)" width="20" height="13" opacity="1" rx="0" y="0" x="0"></rect>
                    <rect class="available" id="ZJUINTL-LIB-111" transform="matrix(1 0 0 1 295 525)" width="20" height="13" opacity="1" rx="0" y="0" x="0"></rect>
                    <rect class="available" id="ZJUINTL-LIB-112" transform="matrix(1 0 0 1 317 525)" width="20" height="13" opacity="1" rx="0" y="0" x="0"></rect>

                    <!-- left-right -->
                    <rect class="available" id="ZJUINTL-LIB-113" transform="matrix(1 0 0 1 435 298)" width="20" height="13" opacity="1" rx="0" y="0" x="0"></rect>
                    <rect class="available" id="ZJUINTL-LIB-114" transform="matrix(1 0 0 1 457 298)" width="20" height="13" opacity="1" rx="0" y="0" x="0"></rect>
                    <rect class="available" id="ZJUINTL-LIB-115" transform="matrix(1 0 0 1 435 314)" width="20" height="13" opacity="1" rx="0" y="0" x="0"></rect>
                    <rect class="available" id="ZJUINTL-LIB-116" transform="matrix(1 0 0 1 457 314)" width="20" height="13" opacity="1" rx="0" y="0" x="0"></rect>

                    <rect class="available" id="ZJUINTL-LIB-117" transform="matrix(1 0 0 1 435 336)" width="20" height="13" opacity="1" rx="0" y="0" x="0"></rect>
                    <rect class="available" id="ZJUINTL-LIB-118" transform="matrix(1 0 0 1 457 336)" width="20" height="13" opacity="1" rx="0" y="0" x="0"></rect>
                    <rect class="available" id="ZJUINTL-LIB-119" transform="matrix(1 0 0 1 435 352)" width="20" height="13" opacity="1" rx="0" y="0" x="0"></rect>
                    <rect class="available" id="ZJUINTL-LIB-120" transform="matrix(1 0 0 1 457 352)" width="20" height="13" opacity="1" rx="0" y="0" x="0"></rect>

                    <rect class="available" id="ZJUINTL-LIB-121" transform="matrix(1 0 0 1 435 374)" width="20" height="13" opacity="1" rx="0" y="0" x="0"></rect>
                    <rect class="available" id="ZJUINTL-LIB-122" transform="matrix(1 0 0 1 457 374)" width="20" height="13" opacity="1" rx="0" y="0" x="0"></rect>
                    <rect class="available" id="ZJUINTL-LIB-123" transform="matrix(1 0 0 1 435 390)" width="20" height="13" opacity="1" rx="0" y="0" x="0"></rect>
                    <rect class="available" id="ZJUINTL-LIB-124" transform="matrix(1 0 0 1 457 390)" width="20" height="13" opacity="1" rx="0" y="0" x="0"></rect>

                    <rect class="available" id="ZJUINTL-LIB-125" transform="matrix(1 0 0 1 435 412)" width="20" height="13" opacity="1" rx="0" y="0" x="0"></rect>
                    <rect class="available" id="ZJUINTL-LIB-126" transform="matrix(1 0 0 1 457 412)" width="20" height="13" opacity="1" rx="0" y="0" x="0"></rect>
                    <rect class="available" id="ZJUINTL-LIB-127" transform="matrix(1 0 0 1 435 427)" width="20" height="13" opacity="1" rx="0" y="0" x="0"></rect>
                    <rect class="available" id="ZJUINTL-LIB-128" transform="matrix(1 0 0 1 457 427)" width="20" height="13" opacity="1" rx="0" y="0" x="0"></rect>

                    <rect class="available" id="ZJUINTL-LIB-129" transform="matrix(1 0 0 1 435 450)" width="20" height="13" opacity="1" rx="0" y="0" x="0"></rect>
                    <rect class="available" id="ZJUINTL-LIB-130" transform="matrix(1 0 0 1 457 450)" width="20" height="13" opacity="1" rx="0" y="0" x="0"></rect>
                    <rect class="available" id="ZJUINTL-LIB-131" transform="matrix(1 0 0 1 435 465)" width="20" height="13" opacity="1" rx="0" y="0" x="0"></rect>
                    <rect class="available" id="ZJUINTL-LIB-132" transform="matrix(1 0 0 1 457 465)" width="20" height="13" opacity="1" rx="0" y="0" x="0"></rect>

                    <rect class="available" id="ZJUINTL-LIB-133" transform="matrix(1 0 0 1 435 488)" width="20" height="13" opacity="1" rx="0" y="0" x="0"></rect>
                    <rect class="available" id="ZJUINTL-LIB-134" transform="matrix(1 0 0 1 457 488)" width="20" height="13" opacity="1" rx="0" y="0" x="0"></rect>
                    <rect class="available" id="ZJUINTL-LIB-135" transform="matrix(1 0 0 1 435 503)" width="20" height="13" opacity="1" rx="0" y="0" x="0"></rect>
                    <rect class="available" id="ZJUINTL-LIB-136" transform="matrix(1 0 0 1 457 503)" width="20" height="13" opacity="1" rx="0" y="0" x="0"></rect>

                    <rect class="available" id="ZJUINTL-LIB-137" transform="matrix(1 0 0 1 435 526)" width="20" height="13" opacity="1" rx="0" y="0" x="0"></rect>
                    <rect class="available" id="ZJUINTL-LIB-138" transform="matrix(1 0 0 1 457 526)" width="20" height="13" opacity="1" rx="0" y="0" x="0"></rect>
                    <rect class="available" id="ZJUINTL-LIB-139" transform="matrix(1 0 0 1 435 541)" width="20" height="13" opacity="1" rx="0" y="0" x="0"></rect>
                    <rect class="available" id="ZJUINTL-LIB-140" transform="matrix(1 0 0 1 457 541)" width="20" height="13" opacity="1" rx="0" y="0" x="0"></rect>

                    <!-- right -->
                    <rect class="available" id="ZJUINTL-LIB-141" transform="matrix(1 0 0 1 940 410)" width="20" height="13" opacity="1" rx="0" y="0" x="0"></rect>
                    <rect class="available" id="ZJUINTL-LIB-142" transform="matrix(1 0 0 1 962 410)" width="20" height="13" opacity="1" rx="0" y="0" x="0"></rect>
                    <rect class="available" id="ZJUINTL-LIB-143" transform="matrix(1 0 0 1 940 425)" width="20" height="13" opacity="1" rx="0" y="0" x="0"></rect>
                    <rect class="available" id="ZJUINTL-LIB-144" transform="matrix(1 0 0 1 962 425)" width="20" height="13" opacity="1" rx="0" y="0" x="0"></rect>

                    <rect class="available" id="ZJUINTL-LIB-145" transform="matrix(1 0 0 1 940 510)" width="20" height="13" opacity="1" rx="0" y="0" x="0"></rect>
                    <rect class="available" id="ZJUINTL-LIB-146" transform="matrix(1 0 0 1 962 510)" width="20" height="13" opacity="1" rx="0" y="0" x="0"></rect>
                    <rect class="available" id="ZJUINTL-LIB-147" transform="matrix(1 0 0 1 940 525)" width="20" height="13" opacity="1" rx="0" y="0" x="0"></rect>
                    <rect class="available" id="ZJUINTL-LIB-148" transform="matrix(1 0 0 1 962 525)" width="20" height="13" opacity="1" rx="0" y="0" x="0"></rect>

                    <!-- down-left -->
                    <rect class="available" id="ZJUINTL-LIB-149" transform="matrix(0.707 -0.707 0.707 0.707 280 630)" width="20" height="13" opacity="1" rx="0" y="0" x="0"></rect>
                    <rect class="available" id="ZJUINTL-LIB-150" transform="matrix(0.707 -0.707 0.707 0.707 295.5 614.5)" width="20" height="13" opacity="1" rx="0" y="0" x="0"></rect>
                    <rect class="available" id="ZJUINTL-LIB-151" transform="matrix(0.707 -0.707 0.707 0.707 290.5 640.5)" width="20" height="13" opacity="1" rx="0" y="0" x="0"></rect>
                    <rect class="available" id="ZJUINTL-LIB-152" transform="matrix(0.707 -0.707 0.707 0.707 306 625)" width="20" height="13" opacity="1" rx="0" y="0" x="0"></rect>

                    <rect class="available" id="ZJUINTL-LIB-153" transform="matrix(0.707 -0.707 0.707 0.707 310 660)" width="20" height="13" opacity="1" rx="0" y="0" x="0"></rect>
                    <rect class="available" id="ZJUINTL-LIB-154" transform="matrix(0.707 -0.707 0.707 0.707 325.5 644.5)" width="20" height="13" opacity="1" rx="0" y="0" x="0"></rect>
                    <rect class="available" id="ZJUINTL-LIB-155" transform="matrix(0.707 -0.707 0.707 0.707 320.5 670.5)" width="20" height="13" opacity="1" rx="0" y="0" x="0"></rect>
                    <rect class="available" id="ZJUINTL-LIB-156" transform="matrix(0.707 -0.707 0.707 0.707 336 655)" width="20" height="13" opacity="1" rx="0" y="0" x="0"></rect>

                    <rect class="available" id="ZJUINTL-LIB-157" transform="matrix(0.707 -0.707 0.707 0.707 340 690)" width="20" height="13" opacity="1" rx="0" y="0" x="0"></rect>
                    <rect class="available" id="ZJUINTL-LIB-158" transform="matrix(0.707 -0.707 0.707 0.707 355.5 674.5)" width="20" height="13" opacity="1" rx="0" y="0" x="0"></rect>
                    <rect class="available" id="ZJUINTL-LIB-159" transform="matrix(0.707 -0.707 0.707 0.707 350.5 700.5)" width="20" height="13" opacity="1" rx="0" y="0" x="0"></rect>
                    <rect class="available" id="ZJUINTL-LIB-160" transform="matrix(0.707 -0.707 0.707 0.707 366 685)" width="20" height="13" opacity="1" rx="0" y="0" x="0"></rect>

                    <rect class="available" id="ZJUINTL-LIB-161" transform="matrix(0.707 -0.707 0.707 0.707 370 720)" width="20" height="13" opacity="1" rx="0" y="0" x="0"></rect>
                    <rect class="available" id="ZJUINTL-LIB-162" transform="matrix(0.707 -0.707 0.707 0.707 385.5 704.5)" width="20" height="13" opacity="1" rx="0" y="0" x="0"></rect>
                    <rect class="available" id="ZJUINTL-LIB-163" transform="matrix(0.707 -0.707 0.707 0.707 380.5 730.5)" width="20" height="13" opacity="1" rx="0" y="0" x="0"></rect>
                    <rect class="available" id="ZJUINTL-LIB-164" transform="matrix(0.707 -0.707 0.707 0.707 396 715)" width="20" height="13" opacity="1" rx="0" y="0" x="0"></rect>

                    <rect class="available" id="ZJUINTL-LIB-165" transform="matrix(0.707 -0.707 0.707 0.707 400 750)" width="20" height="13" opacity="1" rx="0" y="0" x="0"></rect>
                    <rect class="available" id="ZJUINTL-LIB-166" transform="matrix(0.707 -0.707 0.707 0.707 415.5 734.5)" width="20" height="13" opacity="1" rx="0" y="0" x="0"></rect>
                    <rect class="available" id="ZJUINTL-LIB-167" transform="matrix(0.707 -0.707 0.707 0.707 410.5 760.5)" width="20" height="13" opacity="1" rx="0" y="0" x="0"></rect>
                    <rect class="available" id="ZJUINTL-LIB-168" transform="matrix(0.707 -0.707 0.707 0.707 426 745)" width="20" height="13" opacity="1" rx="0" y="0" x="0"></rect>

                    <rect class="available" id="ZJUINTL-LIB-169" transform="matrix(0.707 -0.707 0.707 0.707 370 630)" width="20" height="13" opacity="1" rx="0" y="0" x="0"></rect>
                    <rect class="available" id="ZJUINTL-LIB-170" transform="matrix(0.707 -0.707 0.707 0.707 385.5 614.5)" width="20" height="13" opacity="1" rx="0" y="0" x="0"></rect>
                    <rect class="available" id="ZJUINTL-LIB-171" transform="matrix(0.707 -0.707 0.707 0.707 380.5 640.5)" width="20" height="13" opacity="1" rx="0" y="0" x="0"></rect>
                    <rect class="available" id="ZJUINTL-LIB-172" transform="matrix(0.707 -0.707 0.707 0.707 396 625)" width="20" height="13" opacity="1" rx="0" y="0" x="0"></rect>

                    <rect class="available" id="ZJUINTL-LIB-173" transform="matrix(0.707 -0.707 0.707 0.707 400 660)" width="20" height="13" opacity="1" rx="0" y="0" x="0"></rect>
                    <rect class="available" id="ZJUINTL-LIB-174" transform="matrix(0.707 -0.707 0.707 0.707 415.5 644.5)" width="20" height="13" opacity="1" rx="0" y="0" x="0"></rect>
                    <rect class="available" id="ZJUINTL-LIB-175" transform="matrix(0.707 -0.707 0.707 0.707 410.5 670.5)" width="20" height="13" opacity="1" rx="0" y="0" x="0"></rect>
                    <rect class="available" id="ZJUINTL-LIB-176" transform="matrix(0.707 -0.707 0.707 0.707 426 655)" width="20" height="13" opacity="1" rx="0" y="0" x="0"></rect>
                    
                    <!-- down-top -->
                    <rect class="available" id="ZJUINTL-LIB-177" transform="matrix(1 0 0 1 500 680)" width="13" height="20" opacity="1" rx="0" y="0" x="0"></rect>
                    <rect class="available" id="ZJUINTL-LIB-178" transform="matrix(1 0 0 1 500 702)" width="13" height="20" opacity="1" rx="0" y="0" x="0"></rect>
                    <rect class="available" id="ZJUINTL-LIB-179" transform="matrix(1 0 0 1 515 680)" width="13" height="20" opacity="1" rx="0" y="0" x="0"></rect>
                    <rect class="available" id="ZJUINTL-LIB-180" transform="matrix(1 0 0 1 515 702)" width="13" height="20" opacity="1" rx="0" y="0" x="0"></rect>

                    <rect class="available" id="ZJUINTL-LIB-181" transform="matrix(1 0 0 1 545 680)" width="13" height="20" opacity="1" rx="0" y="0" x="0"></rect>
                    <rect class="available" id="ZJUINTL-LIB-182" transform="matrix(1 0 0 1 545 702)" width="13" height="20" opacity="1" rx="0" y="0" x="0"></rect>
                    <rect class="available" id="ZJUINTL-LIB-183" transform="matrix(1 0 0 1 560 680)" width="13" height="20" opacity="1" rx="0" y="0" x="0"></rect>
                    <rect class="available" id="ZJUINTL-LIB-184" transform="matrix(1 0 0 1 560 702)" width="13" height="20" opacity="1" rx="0" y="0" x="0"></rect>

                    <rect class="available" id="ZJUINTL-LIB-185" transform="matrix(1 0 0 1 680 680)" width="13" height="20" opacity="1" rx="0" y="0" x="0"></rect>
                    <rect class="available" id="ZJUINTL-LIB-186" transform="matrix(1 0 0 1 680 702)" width="13" height="20" opacity="1" rx="0" y="0" x="0"></rect>
                    <rect class="available" id="ZJUINTL-LIB-187" transform="matrix(1 0 0 1 695 680)" width="13" height="20" opacity="1" rx="0" y="0" x="0"></rect>
                    <rect class="available" id="ZJUINTL-LIB-188" transform="matrix(1 0 0 1 695 702)" width="13" height="20" opacity="1" rx="0" y="0" x="0"></rect>

                    <rect class="available" id="ZJUINTL-LIB-189" transform="matrix(1 0 0 1 725 680)" width="13" height="20" opacity="1" rx="0" y="0" x="0"></rect>
                    <rect class="available" id="ZJUINTL-LIB-190" transform="matrix(1 0 0 1 725 702)" width="13" height="20" opacity="1" rx="0" y="0" x="0"></rect>
                    <rect class="available" id="ZJUINTL-LIB-191" transform="matrix(1 0 0 1 740 680)" width="13" height="20" opacity="1" rx="0" y="0" x="0"></rect>
                    <rect class="available" id="ZJUINTL-LIB-192" transform="matrix(1 0 0 1 740 702)" width="13" height="20" opacity="1" rx="0" y="0" x="0"></rect>

                    <!-- down-down -->
                    <rect class="available" id="ZJUINTL-LIB-193" transform="matrix(1 0 0 1 500 735)" width="13" height="20" opacity="1" rx="0" y="0" x="0"></rect>
                    <rect class="available" id="ZJUINTL-LIB-194" transform="matrix(1 0 0 1 500 757)" width="13" height="20" opacity="1" rx="0" y="0" x="0"></rect>
                    <rect class="available" id="ZJUINTL-LIB-195" transform="matrix(1 0 0 1 515 735)" width="13" height="20" opacity="1" rx="0" y="0" x="0"></rect>
                    <rect class="available" id="ZJUINTL-LIB-196" transform="matrix(1 0 0 1 515 757)" width="13" height="20" opacity="1" rx="0" y="0" x="0"></rect>
                    <rect class="available" id="ZJUINTL-LIB-197" transform="matrix(1 0 0 1 500 779)" width="13" height="20" opacity="1" rx="0" y="0" x="0"></rect>
                    <rect class="available" id="ZJUINTL-LIB-198" transform="matrix(1 0 0 1 500 801)" width="13" height="20" opacity="1" rx="0" y="0" x="0"></rect>
                    <rect class="available" id="ZJUINTL-LIB-199" transform="matrix(1 0 0 1 515 779)" width="13" height="20" opacity="1" rx="0" y="0" x="0"></rect>
                    <rect class="available" id="ZJUINTL-LIB-200" transform="matrix(1 0 0 1 515 801)" width="13" height="20" opacity="1" rx="0" y="0" x="0"></rect>

                    <rect class="available" id="ZJUINTL-LIB-201" transform="matrix(1 0 0 1 545 735)" width="13" height="20" opacity="1" rx="0" y="0" x="0"></rect>
                    <rect class="available" id="ZJUINTL-LIB-202" transform="matrix(1 0 0 1 545 757)" width="13" height="20" opacity="1" rx="0" y="0" x="0"></rect>
                    <rect class="available" id="ZJUINTL-LIB-203" transform="matrix(1 0 0 1 560 735)" width="13" height="20" opacity="1" rx="0" y="0" x="0"></rect>
                    <rect class="available" id="ZJUINTL-LIB-204" transform="matrix(1 0 0 1 560 757)" width="13" height="20" opacity="1" rx="0" y="0" x="0"></rect>
                    <rect class="available" id="ZJUINTL-LIB-205" transform="matrix(1 0 0 1 545 779)" width="13" height="20" opacity="1" rx="0" y="0" x="0"></rect>
                    <rect class="available" id="ZJUINTL-LIB-206" transform="matrix(1 0 0 1 545 801)" width="13" height="20" opacity="1" rx="0" y="0" x="0"></rect>
                    <rect class="available" id="ZJUINTL-LIB-207" transform="matrix(1 0 0 1 560 779)" width="13" height="20" opacity="1" rx="0" y="0" x="0"></rect>
                    <rect class="available" id="ZJUINTL-LIB-208" transform="matrix(1 0 0 1 560 801)" width="13" height="20" opacity="1" rx="0" y="0" x="0"></rect>

                    <rect class="available" id="ZJUINTL-LIB-209" transform="matrix(1 0 0 1 590 735)" width="13" height="20" opacity="1" rx="0" y="0" x="0"></rect>
                    <rect class="available" id="ZJUINTL-LIB-210" transform="matrix(1 0 0 1 590 757)" width="13" height="20" opacity="1" rx="0" y="0" x="0"></rect>
                    <rect class="available" id="ZJUINTL-LIB-211" transform="matrix(1 0 0 1 605 735)" width="13" height="20" opacity="1" rx="0" y="0" x="0"></rect>
                    <rect class="available" id="ZJUINTL-LIB-212" transform="matrix(1 0 0 1 605 757)" width="13" height="20" opacity="1" rx="0" y="0" x="0"></rect>
                    <rect class="available" id="ZJUINTL-LIB-213" transform="matrix(1 0 0 1 590 779)" width="13" height="20" opacity="1" rx="0" y="0" x="0"></rect>
                    <rect class="available" id="ZJUINTL-LIB-214" transform="matrix(1 0 0 1 590 801)" width="13" height="20" opacity="1" rx="0" y="0" x="0"></rect>
                    <rect class="available" id="ZJUINTL-LIB-215" transform="matrix(1 0 0 1 605 779)" width="13" height="20" opacity="1" rx="0" y="0" x="0"></rect>
                    <rect class="available" id="ZJUINTL-LIB-216" transform="matrix(1 0 0 1 605 801)" width="13" height="20" opacity="1" rx="0" y="0" x="0"></rect>

                    <rect class="available" id="ZJUINTL-LIB-217" transform="matrix(1 0 0 1 635 735)" width="13" height="20" opacity="1" rx="0" y="0" x="0"></rect>
                    <rect class="available" id="ZJUINTL-LIB-218" transform="matrix(1 0 0 1 635 757)" width="13" height="20" opacity="1" rx="0" y="0" x="0"></rect>
                    <rect class="available" id="ZJUINTL-LIB-219" transform="matrix(1 0 0 1 650 735)" width="13" height="20" opacity="1" rx="0" y="0" x="0"></rect>
                    <rect class="available" id="ZJUINTL-LIB-220" transform="matrix(1 0 0 1 650 757)" width="13" height="20" opacity="1" rx="0" y="0" x="0"></rect>
                    <rect class="available" id="ZJUINTL-LIB-221" transform="matrix(1 0 0 1 635 779)" width="13" height="20" opacity="1" rx="0" y="0" x="0"></rect>
                    <rect class="available" id="ZJUINTL-LIB-222" transform="matrix(1 0 0 1 635 801)" width="13" height="20" opacity="1" rx="0" y="0" x="0"></rect>
                    <rect class="available" id="ZJUINTL-LIB-223" transform="matrix(1 0 0 1 650 779)" width="13" height="20" opacity="1" rx="0" y="0" x="0"></rect>
                    <rect class="available" id="ZJUINTL-LIB-224" transform="matrix(1 0 0 1 650 801)" width="13" height="20" opacity="1" rx="0" y="0" x="0"></rect>

                    <rect class="available" id="ZJUINTL-LIB-225" transform="matrix(1 0 0 1 680 735)" width="13" height="20" opacity="1" rx="0" y="0" x="0"></rect>
                    <rect class="available" id="ZJUINTL-LIB-226" transform="matrix(1 0 0 1 680 757)" width="13" height="20" opacity="1" rx="0" y="0" x="0"></rect>
                    <rect class="available" id="ZJUINTL-LIB-227" transform="matrix(1 0 0 1 695 735)" width="13" height="20" opacity="1" rx="0" y="0" x="0"></rect>
                    <rect class="available" id="ZJUINTL-LIB-228" transform="matrix(1 0 0 1 695 757)" width="13" height="20" opacity="1" rx="0" y="0" x="0"></rect>
                    <rect class="available" id="ZJUINTL-LIB-229" transform="matrix(1 0 0 1 680 779)" width="13" height="20" opacity="1" rx="0" y="0" x="0"></rect>
                    <rect class="available" id="ZJUINTL-LIB-230" transform="matrix(1 0 0 1 680 801)" width="13" height="20" opacity="1" rx="0" y="0" x="0"></rect>
                    <rect class="available" id="ZJUINTL-LIB-231" transform="matrix(1 0 0 1 695 779)" width="13" height="20" opacity="1" rx="0" y="0" x="0"></rect>
                    <rect class="available" id="ZJUINTL-LIB-232" transform="matrix(1 0 0 1 695 801)" width="13" height="20" opacity="1" rx="0" y="0" x="0"></rect>

                    <rect class="available" id="ZJUINTL-LIB-233" transform="matrix(1 0 0 1 725 735)" width="13" height="20" opacity="1" rx="0" y="0" x="0"></rect>
                    <rect class="available" id="ZJUINTL-LIB-234" transform="matrix(1 0 0 1 725 757)" width="13" height="20" opacity="1" rx="0" y="0" x="0"></rect>
                    <rect class="available" id="ZJUINTL-LIB-235" transform="matrix(1 0 0 1 740 735)" width="13" height="20" opacity="1" rx="0" y="0" x="0"></rect>
                    <rect class="available" id="ZJUINTL-LIB-236" transform="matrix(1 0 0 1 740 757)" width="13" height="20" opacity="1" rx="0" y="0" x="0"></rect>
                    <rect class="available" id="ZJUINTL-LIB-237" transform="matrix(1 0 0 1 725 779)" width="13" height="20" opacity="1" rx="0" y="0" x="0"></rect>
                    <rect class="available" id="ZJUINTL-LIB-238" transform="matrix(1 0 0 1 725 801)" width="13" height="20" opacity="1" rx="0" y="0" x="0"></rect>
                    <rect class="available" id="ZJUINTL-LIB-239" transform="matrix(1 0 0 1 740 779)" width="13" height="20" opacity="1" rx="0" y="0" x="0"></rect>
                    <rect class="available" id="ZJUINTL-LIB-240" transform="matrix(1 0 0 1 740 801)" width="13" height="20" opacity="1" rx="0" y="0" x="0"></rect>
                    
                </g>
            </g>
        </svg>
    </div>

</html>
