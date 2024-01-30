<div style="display:flex;justify-content:center;align-items:center;height:100vh">
    <div style="width:500px;">
        <div style="text-align:center">
            <span type="text" id="val" style="">300000р.</span>
        </div>
            <div id="slider"></div>
        <div style="margin:10px;display:flex;justify-content:center;">
            <select id="time">
                <option value="3">3 месяца</option>
                <option value="6">6 месяцев</option>
                <option value="9">9 месяцев</option>
            </select>
        </div>
        <h3 id="price" style="text-align:center;"></h3>
    </div>
</div>
<script src="jquery-3.7.1.js"></script>
<script src="jquery-ui/jquery-ui.min.js"></script>
<link rel="stylesheet" href="jquery-ui/jquery-ui.min.css">
 
<script>
	$('#slider').slider({
		min: 300000,
		max: 9000000,
        value:300000,
        slide: function(event, ui){
			$('#val').text(ui.value+'р.');
            let t = $("#time").val();
            let m = ui.value;
            let eprice = m+(m/100)*(0.7083*t);
            $("#price").text(eprice);
        }
	});
    $("#time").on("change",function(){
        let val = $('#slider').slider("option", "value");
            $('#val').text(val+'р.');
            let t = $("#time").val();
            let m = val;
            let eprice = m+(m/100)*(0.7083*t);
            $("#price").text(eprice);
    });

</script>