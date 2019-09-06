<?php 
	include "partials/header.html";
?>
<script src="scripts/clientValidation.js"></script>

<div class="container">
    <img src="src/task.png" width="500" alt="task statement">
    <img src="src/areas.png" width="300" alt="">
</div>

<div class="container">            
    <form action="serverValidation.php" method="POST" id="myform">
        <div class="rowTab">
            <div class="label">
                <label for="valueX">Value of X</label>
            </div>
            <div class="rightTab dropdown">
                <select name="valueX" value="0">
                    <option value="-4">-4</option>
                    <option value="-3">-3</option>
                    <option value="-2">-2</option>
                    <option value="-1">-1</option>
                    <option value="0" selected="selected">0</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                </select>
            </div>
        </div> 
        <div class="rowTab">
            <div class="label">
                <label for="valueY">Value of Y</label>
            </div>
            <div class="rightTab">
                <input 
                    type="text" 
                    name="valueY" 
                    placeholder="-5..3" 
                    maxlength=9
                    class="textInput">
            </div>
        </div> 
        <div class="rowTab">
            <div class="label">
                <label for="valueR">Value of R</label>
            </div>
            <div class="rightTab">
                <ul>
                    <li><input type="radio" name="valueR" value="1" checked> 1</li>
                    <li><input type="radio" name="valueR" value="2"> 2</li>
                    <li><input type="radio" name="valueR" value="3"> 3</li>
                    <li><input type="radio" name="valueR" value="4"> 4</li>
                    <li><input type="radio" name="valueR" value="5"> 5</li>
                </ul>                        
            </div>
        </div>        
        <button type="submit">Check</button> 
    </form>
</div>   

<?php 
	include "partials/footer.html";
?>
