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
$(function(){
	$('#slider').slider({
		min: 300000,
		max: 9000000,
        value:300000,
        slide: function(event, ui){
			$('#val').text(ui.value+'р.');
            let t = $("#time").val();
            let m = 0;
            let eprice = 0;
            for(i=1;i<=t;i++){
                m = m+(ui.value/100)*8.5;
                eprice = ui.value+m;
            }
            $("#price").text(eprice);
        }
	});
});
</script>